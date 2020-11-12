<?php
defined('BASEPATH') OR exit('No direct script access allowed');


/**
*| --------------------------------------------------------------------------
*| Amuco Offers Sent Customers Controller
*| --------------------------------------------------------------------------
*| Amuco Offers Sent Customers site
*|
*/
class Amuco_offers_sent_customers extends Admin	
{
	
	public function __construct()
	{
		parent::__construct();

		$this->load->model('mw_logs/Log_table');
		$this->load->model('mw_logs/Tracer');
		$this->load->model('mw_logs/Io_types');
		$this->load->model('mw_logs/Integration_table');
		$this->load->model('model_amuco_offers_sent_customers');
		$this->lang->load('web_lang', $this->current_lang);
	}

	public function insert_logs($data_log,$action,$data_output=NULL){
		$input_type = $this->Io_types->get_io_types('JSON');
		if(strcmp($action,'updated') === 0)
		{
			$output_type = $input_type;
			$output      = json_encode($data_output);
		}else{
			$output      = NULL;
			$output_type = NULL;
		
		}
		$integration     = $this->Integration_table->get_from_origin('System',1);
		foreach ($integration as $row) {
			$integration_id = $row->id;
		}
		$user = $this->aauth->get_user();
		$type = $this->Log_table->get_type('SUCCESS_EXECUTION');
		foreach ($type as $row) {
			$type_id = $row->id;
		}
		$add_log = $this->Log_table->add_log($integration_id,$type_id,"Row # {$data_log['id']} {$action} in table amuco_offers_sent_customers",$user->id);
		$this->Tracer
			 ->save_data_processing($integration_id
			 						,$add_log
									,$input_type->id
									,json_encode($data_log)
									,isset($output_type)?$output_type->id:$output_type
									,$output);
		return;
	}

	/**
	* show all Amuco Offers Sent Customerss
	*
	* @var $offset String
	*/
	public function index($offset = 0)
	{
		$this->is_allowed('amuco_offers_sent_customers_list');

		$filter = $this->input->get('q');
		$field 	= $this->input->get('f');

		$this->data['amuco_offers_sent_customerss'] = $this->model_amuco_offers_sent_customers->get($filter, $field, $this->limit_page, $offset);
		$this->data['amuco_offers_sent_customers_counts'] = $this->model_amuco_offers_sent_customers->count_all($filter, $field);

		$config = [
			'base_url'     => 'administrator/amuco_offers_sent_customers/index/',
			'total_rows'   => $this->model_amuco_offers_sent_customers->count_all($filter, $field),
			'per_page'     => $this->limit_page,
			'uri_segment'  => 4,
		];

		$this->data['pagination'] = $this->pagination($config);

		$this->template->title('Amuco Offers Sent Customers List');
		$this->render('backend/standart/administrator/amuco_offers_sent_customers/amuco_offers_sent_customers_list', $this->data);
	}
	
	/**
	* Add new amuco_offers_sent_customerss
	*
	*/
	public function add()
	{
		$this->is_allowed('amuco_offers_sent_customers_add');

		$this->template->title('Amuco Offers Sent Customers New');
		$this->render('backend/standart/administrator/amuco_offers_sent_customers/amuco_offers_sent_customers_add', $this->data);
	}

	/**
	* Add New Amuco Offers Sent Customerss
	*
	* @return JSON
	*/
	public function add_save()
	{
		// if (!$this->is_allowed('amuco_offers_sent_customers_add', false)) {
		// 	echo json_encode([
		// 		'success' => false,
		// 		'message' => cclang('sorry_you_do_not_have_permission_to_access')
		// 		]);
		// 	exit;
		// }
       // var_dump($this->input->post()); die;
		$this->form_validation->set_rules('customer_request_id', 'Customer Request Id', 'trim|required|max_length[10]');
		$this->form_validation->set_rules('request_details_id', 'Request Details Id', 'trim|required|max_length[10]');
		$this->form_validation->set_rules('request_details_price_id', 'Request Details Price Id', 'trim|required|max_length[10]');
		$this->form_validation->set_rules('payments_terms_id', 'Payments Terms Id', 'trim|required|max_length[10]');
		$this->form_validation->set_rules('quantity', 'Quantity', 'trim|max_length[11]');
		$this->form_validation->set_rules('unit', 'Unit', 'trim|max_length[10]');
		$this->form_validation->set_rules('freight', 'Freight', 'trim|max_length[18]');
		$this->form_validation->set_rules('unit_price', 'Unit Price', 'trim|max_length[18]');
		$this->form_validation->set_rules('incoterm', 'Incoterm', 'trim|max_length[10]');
		$this->form_validation->set_rules('destination_port', 'Destination Port', 'trim|max_length[10]');
		$this->form_validation->set_rules('packing', 'Packing', 'trim|max_length[10]');
		$this->form_validation->set_rules('fcl', 'Fcl', 'trim|max_length[10]');
		$this->form_validation->set_rules('type_fcl', 'Type Fcl', 'trim|max_length[50]');
		$this->form_validation->set_rules('option_fcl', 'Option Fcl', 'trim|max_length[10]');
		

		if ($this->form_validation->run()) {
		
			$save_data = [
				'customer_request_id' => $this->input->post('customer_request_id'),
				'request_details_id' => $this->input->post('request_details_id'),
				'request_details_price_id' => $this->input->post('request_details_price_id'),
				'payments_terms_id' => $this->input->post('payments_terms_id'),
				'quantity' => $this->input->post('quantity'),
				'unit' => $this->input->post('unit'),
				'freight' => $this->input->post('freight'),
				'unit_price' => $this->input->post('unit_price'),
				'incoterm' => $this->input->post('incoterm'),
				'destination_port' => $this->input->post('destination_port'),
				'shipping_port' => $this->input->post('shipping_port'),
				'packing' => $this->input->post('packing'),
				'material' => $this->input->post('material'),
				'fcl' => $this->input->post('fcl'),
				'type_fcl' => $this->input->post('type_fcl'),
				'option_fcl' => $this->input->post('option_fcl'),
				'weight' => $this->input->post('weight'),
				'unit_pack'  => $this->input->post('unit_pack'),
				'date_created' => date("Y-m-d H:i:s"),
				'offer_price_per_unit' =>$this->input->post('offer_price_per_unit'),
				'analysis_standard'=>$this->input->post('analysis_standard'),
				'pallets'=> $this->input->post('pallets'),
				'ETD' => $this->input->post('ETD'),
				'calculated_offer_price'=>$this->input->post('calculated_offer_price'),
				'price_increase'=> $this->input->post('price_increase'),
				'sales_amount' => $this->input->post('sales_amount'),
				'estimated_gross_profit' => $this->input->post('estimated_gross_profit'),
				'estimated_comm' => $this->input->post('estimated_comm'),
				'rep_comm' =>  $this->input->post('rep_comm'),
				'price_fob'=>  $this->input->post('price_fob'),
				'supplier_payment_term' => $this->input->post('supplier_payment_term'),
				'price_incoterm'=> $this->input->post('price_incoterm'),
				'comments'=> $this->input->post('comments'),
				'status' => 'New',
				'com_sales_agent' => $this->input->post('com_sales_agent'),
				'com_purchase_office' => $this->input->post('com_purchase_office'),
				'com_other_supp_comm' => $this->input->post('com_other_supp_comm'),
				'representative_commission' => $this->input->post('representative_commission'),
				'representative_purchase_office' => $this->input->post('representative_purchase_office'),
				'price_increase_commission' => $this->input->post('price_increase_commission'),
				'who_pallets' => $this->input->post('who_pallets'),
			];

			
			$save_amuco_offers_sent_customers = $this->model_amuco_offers_sent_customers->store($save_data);
            

			if ($save_amuco_offers_sent_customers) {
				$save_data_tracer=array_merge($save_data,['id'=>$save_amuco_offers_sent_customers]);
				$this->insert_logs($save_data_tracer,'added');
			
				if ($this->input->post('save_type') == 'stay') {
					$this->data['success'] = true;
					$this->data['id'] 	   = $save_amuco_offers_sent_customers;
					$this->data['message'] = cclang('success_save_data_stay', [
						anchor('administrator/amuco_offers_sent_customers/edit/' . $save_amuco_offers_sent_customers, 'Edit Amuco Offers Sent Customers'),
						anchor('administrator/amuco_offers_sent_customers', ' Go back to list')
					]);
				} else {
					set_message(
						cclang('success_save_data_redirect', [
						anchor('administrator/amuco_offers_sent_customers/edit/' . $save_amuco_offers_sent_customers, 'Edit Amuco Offers Sent Customers')
					]), 'success');

            		$this->data['success'] = true;
					$this->data['redirect'] = base_url('administrator/amuco_offers_sent_customers');
				}
			} else {
				if ($this->input->post('save_type') == 'stay') {
					$this->data['success'] = false;
					$this->data['message'] = cclang('data_not_change');
				} else {
            		$this->data['success'] = false;
            		$this->data['message'] = cclang('data_not_change');
					$this->data['redirect'] = base_url('administrator/amuco_offers_sent_customers');
				}
			}

		} else {
			$this->data['success'] = false;
			$this->data['message'] = 'Opss validation failed';
			$this->data['errors'] = $this->form_validation->error_array();
		}

		echo json_encode($this->data);
		exit;
	}
	
		/**
	* Update view Amuco Offers Sent Customerss
	*
	* @var $id String
	*/
	public function edit($id)
	{
		$this->is_allowed('amuco_offers_sent_customers_update');

		$this->data['amuco_offers_sent_customers'] = $this->model_amuco_offers_sent_customers->find($id);

		$this->template->title('Amuco Offers Sent Customers Update');
		$this->render('backend/standart/administrator/amuco_offers_sent_customers/amuco_offers_sent_customers_update', $this->data);
	}

	/**
	* Update Amuco Offers Sent Customerss
	*
	* @var $id String
	*/
	public function edit_save($id)
	{
		if (!$this->is_allowed('amuco_offers_sent_customers_update', false)) {
			echo json_encode([
				'success' => false,
				'message' => cclang('sorry_you_do_not_have_permission_to_access')
				]);
			exit;
		}
		
		$this->form_validation->set_rules('status', 'Status', 'trim|max_length[50]');
		$this->form_validation->set_rules('customer_request_id', 'Customer Request Id', 'trim|required|max_length[10]');
		$this->form_validation->set_rules('request_details_id', 'Request Details Id', 'trim|required|max_length[10]');
		$this->form_validation->set_rules('request_details_price_id', 'Request Details Price Id', 'trim|required|max_length[10]');
		$this->form_validation->set_rules('payments_terms_id', 'Payments Terms Id', 'trim|required|max_length[10]');
		$this->form_validation->set_rules('quantity', 'Quantity', 'trim|max_length[11]');
		$this->form_validation->set_rules('unit', 'Unit', 'trim|max_length[10]');
		$this->form_validation->set_rules('freight', 'Freight', 'trim|max_length[18]');
		$this->form_validation->set_rules('unit_price', 'Unit Price', 'trim|max_length[18]');
		$this->form_validation->set_rules('incoterm', 'Incoterm', 'trim|max_length[10]');
		$this->form_validation->set_rules('destination_port', 'Destination Port', 'trim|max_length[10]');
		$this->form_validation->set_rules('packing', 'Packing', 'trim|max_length[10]');
		$this->form_validation->set_rules('fcl', 'Fcl', 'trim|max_length[10]');
		$this->form_validation->set_rules('type_fcl', 'Type Fcl', 'trim|max_length[50]');
		$this->form_validation->set_rules('option_fcl', 'Option Fcl', 'trim|max_length[10]');
		
		if ($this->form_validation->run()) {
		
			$save_data = [
				'status' => $this->input->post('status'),
				'customer_request_id' => $this->input->post('customer_request_id'),
				'request_details_id' => $this->input->post('request_details_id'),
				'request_details_price_id' => $this->input->post('request_details_price_id'),
				'payments_terms_id' => $this->input->post('payments_terms_id'),
				'quantity' => $this->input->post('quantity'),
				'unit' => $this->input->post('unit'),
				'freight' => $this->input->post('freight'),
				'unit_price' => $this->input->post('unit_price'),
				'incoterm' => $this->input->post('incoterm'),
				'destination_port' => $this->input->post('destination_port'),
				'shipping_port' => $this->input->post('shipping_port'),
				'packing' => $this->input->post('packing'),
				'material' => $this->input->post('material'),
				'fcl' => $this->input->post('fcl'),
				'type_fcl' => $this->input->post('type_fcl'),
				'option_fcl' => $this->input->post('fcl_option'),
				'weight' => $this->input->post('weight'),
				'unit_pack'  => $this->input->post('unit_pack'),
				'date_updated' => date("Y-m-d H:i:s"),
				
			];

			$data_output=$this->model_amuco_offers_sent_customers->find($id);
		    $save_amuco_offers_sent_customers = $this->model_amuco_offers_sent_customers->change($id, $save_data);

			if ($save_amuco_offers_sent_customers) {
				$save_data_tracer=array_merge($save_data,['id'=>$id]);
				$this->insert_logs($save_data_tracer,'updated',$data_output);
			
				if ($this->input->post('save_type') == 'stay') {
					$this->data['success'] = true;
					$this->data['id'] 	   = $id;
					$this->data['message'] = cclang('success_update_data_stay', [
						anchor('administrator/amuco_offers_sent_customers', ' Go back to list')
					]);
				} else {
					set_message(
						cclang('success_update_data_redirect', [
					]), 'success');

            		$this->data['success'] = true;
					$this->data['redirect'] = base_url('administrator/amuco_offers_sent_customers');
				}
			} else {
				if ($this->input->post('save_type') == 'stay') {
					$this->data['success'] = false;
					$this->data['message'] = cclang('data_not_change');
				} else {
            		$this->data['success'] = false;
            		$this->data['message'] = cclang('data_not_change');
					$this->data['redirect'] = base_url('administrator/amuco_offers_sent_customers');
				}
			}
		} else {
			$this->data['success'] = false;
			$this->data['message'] = 'Opss validation failed';
			$this->data['errors'] = $this->form_validation->error_array();
		}

		echo json_encode($this->data);
		exit;
	}
	
	/**
	* delete Amuco Offers Sent Customerss
	*
	* @var $id String
	*/
	public function delete($id = null)
	{
		$this->is_allowed('amuco_offers_sent_customers_delete');

		$this->load->helper('file');

		$arr_id = $this->input->get('id');
		$remove = false;

		if (!empty($id)) {
			$remove = $this->_remove($id);
		} elseif (count($arr_id) >0) {
			foreach ($arr_id as $id) {
				$remove = $this->_remove($id);
			}
		}

		if ($remove) {
            set_message(cclang('has_been_deleted', 'amuco_offers_sent_customers'), 'success');
        } else {
            set_message(cclang('error_delete', 'amuco_offers_sent_customers'), 'error');
        }

		redirect_back();
	}

		/**
	* View view Amuco Offers Sent Customerss
	*
	* @var $id String
	*/
	public function view($id)
	{
		$this->is_allowed('amuco_offers_sent_customers_view');

		$this->data['amuco_offers_sent_customers'] = $this->model_amuco_offers_sent_customers->join_avaiable()->filter_avaiable()->find($id);

		$this->template->title('Amuco Offers Sent Customers Detail');
		$this->render('backend/standart/administrator/amuco_offers_sent_customers/amuco_offers_sent_customers_view', $this->data);
	}
	
	/**
	* delete Amuco Offers Sent Customerss
	*
	* @var $id String
	*/
	private function _remove($id)
	{
		$amuco_offers_sent_customers = (array)$this->model_amuco_offers_sent_customers->find($id);
		$this->insert_logs($amuco_offers_sent_customers,'deleted');
	
		
		
		return $this->model_amuco_offers_sent_customers->remove($id);
	}
	
	
	/**
	* Export to excel
	*
	* @return Files Excel .xls
	*/
	public function export()
	{
		$this->is_allowed('amuco_offers_sent_customers_export');

		$this->model_amuco_offers_sent_customers->export('amuco_offers_sent_customers', 'amuco_offers_sent_customers');
	}

	/**
	* Export to PDF
	*
	* @return Files PDF .pdf
	*/
	public function export_pdf()
	{
		$this->is_allowed('amuco_offers_sent_customers_export');

		$this->model_amuco_offers_sent_customers->pdf('amuco_offers_sent_customers', 'amuco_offers_sent_customers');
	}


	public function single_pdf($id = null)
	{
		$this->is_allowed('amuco_offers_sent_customers_export');

		$table = $title = 'amuco_offers_sent_customers';
		$this->load->library('HtmlPdf');
      
        $config = array(
            'orientation' => 'p',
            'format' => 'a4',
            'marges' => array(5, 5, 5, 5)
        );

        $this->pdf = new HtmlPdf($config);
        $this->pdf->setDefaultFont('stsongstdlight'); 

        $result = $this->db->get($table);
       
        $data = $this->model_amuco_offers_sent_customers->find($id);
        $fields = $result->list_fields();

        $content = $this->pdf->loadHtmlPdf('core_template/pdf/pdf_single', [
            'data' => $data,
            'fields' => $fields,
            'title' => $title
        ], TRUE);

        $this->pdf->initialize($config);
        $this->pdf->pdf->SetDisplayMode('fullpage');
        $this->pdf->writeHTML($content);
        $this->pdf->Output($table.'.pdf', 'H');
	}

	public function validateShippingAndDestinationPort() {

		$shipping_port = array();
		$destination_port = array();

		for ($i=0; $i < count($_POST['data_offers']); $i++) { 
			$offer =  $this->model_amuco_offers_sent_customers->getShippingAndDestinationPort($_POST['data_offers'][$i]['id']);
			array_push($shipping_port, $offer[0]->shipping_port);
			array_push($destination_port, $offer[0]->destination_port);
			
		}

		if(count(array_unique($shipping_port)) > 1 || count(array_unique($destination_port)) > 1) {
			$this->data['success'] = false;
			$this->data['message'] = 'port of shipment or destination are different';
			
			echo json_encode($this->data);
			exit;
		} 

		$this->data['success'] = true;
		
		echo json_encode($this->data);
		exit;
		
	}

	
}


/* End of file amuco_offers_sent_customers.php */
/* Location: ./application/controllers/administrator/Amuco Offers Sent Customers.php */