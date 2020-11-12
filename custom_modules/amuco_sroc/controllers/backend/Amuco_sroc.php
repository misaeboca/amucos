<?php
defined('BASEPATH') OR exit('No direct script access allowed');


/**
*| --------------------------------------------------------------------------
*| Amuco Sroc Controller
*| --------------------------------------------------------------------------
*| Amuco Sroc site
*|
*/
class Amuco_sroc extends Admin	
{
	
	public function __construct()
	{
		parent::__construct();

		$this->load->model('mw_logs/Log_table');
		$this->load->model('mw_logs/Tracer');
		$this->load->model('mw_logs/Io_types');
		$this->load->model('mw_logs/Integration_table');
		$this->load->model('model_amuco_sroc');
		$this->load->model('amuco_customer_request/model_amuco_customer_request');
		$this->load->model('amuco_details_customers_request/Model_amuco_details_customers_request');
		$this->load->model('amuco_offers_sent_customers/model_amuco_offers_sent_customers');
		$this->load->model('amuco_credit_insurance/model_amuco_credit_insurance');
		$this->load->model('amuco_contacts/model_amuco_contacts');
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
		$add_log = $this->Log_table->add_log($integration_id,$type_id,"Row # {$data_log['id']} {$action} in table amuco_sroc",$user->id);
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
	* show all Amuco Srocs
	*
	* @var $offset String
	*/
	public function index($offset = 0)
	{
		// $this->is_allowed('amuco_sroc_list');

		$filter = $this->input->get('q');
		$field 	= $this->input->get('f');

		$this->data['amuco_srocs'] = $this->model_amuco_sroc->get($filter, $field, $this->limit_page, $offset);
		$this->data['amuco_sroc_counts'] = $this->model_amuco_sroc->count_all($filter, $field);

		$config = [
			'base_url'     => 'administrator/amuco_sroc/index/',
			'total_rows'   => $this->model_amuco_sroc->count_all($filter, $field),
			'per_page'     => $this->limit_page,
			'uri_segment'  => 4,
		];

		$this->data['pagination'] = $this->pagination($config);

		$this->template->title('Amuco Sroc List');
		$this->render('backend/standart/administrator/amuco_sroc/amuco_sroc_list', $this->data);
	}
	
	/**
	* Add new amuco_srocs
	*
	*/
	public function add()
	{
		$this->is_allowed('amuco_sroc_add');

		$this->template->title('Amuco Sroc New');
		$this->render('backend/standart/administrator/amuco_sroc/amuco_sroc_add', $this->data);
	}

	/**
	* Add New Amuco Srocs
	*
	* @return JSON
	*/
	public function add_save()
	{
		// echo "<pre>";
		// print_r($_POST);
		// die();

		$this->form_validation->set_rules('customer_request_id', 'Customer Request Id', 'trim|required');
		

		if ($this->form_validation->run()) {
		
			$save_data = [
				'customer_request_id' => $this->input->post('customer_request_id'),
				'status' => 'draft',
			];

			
			$save_amuco_sroc = $this->model_amuco_sroc->store($save_data);
            

			if ($save_amuco_sroc) {
				$save_data_tracer=array_merge($save_data,['id'=>$save_amuco_sroc]);
				$this->insert_logs($save_data_tracer,'added');
			
				// if ($this->input->post('save_type') == 'stay') {
				// 	$this->data['success'] = true;
				// 	$this->data['id'] 	   = $save_amuco_sroc;
				// 	$this->data['message'] = cclang('success_save_data_stay', [
				// 		anchor('administrator/amuco_sroc/edit/' . $save_amuco_sroc, 'Edit Amuco Sroc'),
				// 		anchor('administrator/amuco_sroc', ' Go back to list')
				// 	]);
				// } else {
				// 	set_message(
				// 		cclang('success_save_data_redirect', [
				// 		anchor('administrator/amuco_sroc/edit/' . $save_amuco_sroc, 'Edit Amuco Sroc')
				// 	]), 'success');

            	// 	$this->data['success'] = true;
				// 	$this->data['redirect'] = base_url('administrator/amuco_sroc');
				// }
				

				for($i = 0; $i < count($_POST['data_offers']); $i++) {

					$data_sroc_offer = array(
						'id_sroc' => $save_amuco_sroc,
						'id_offers_sent_customers' => $_POST['data_offers'][$i]['id']
					);

					$save_data_offer = [
						'status' => 'accepted',
						'date_updated' => date("Y-m-d H:i:s"),
					];

					$this->model_amuco_sroc->insert_sroc_offers($data_sroc_offer);

					// $data_output=$this->model_amuco_offers_sent_customers->find($_POST['data_offers'][$i]['id']);
					$this->model_amuco_offers_sent_customers->change($_POST['data_offers'][$i]['id'], $save_data_offer);
				}

				$this->data['success'] = true;
				$this->data['id'] 	   = $save_amuco_sroc;
				$this->data['redirect'] = 'administrator/amuco_sroc/edit/' . $save_amuco_sroc;
	
				
			} else {
				if ($this->input->post('save_type') == 'stay') {
					$this->data['success'] = false;
					$this->data['message'] = cclang('data_not_change');
				} else {
            		$this->data['success'] = false;
            		$this->data['message'] = cclang('data_not_change');
					$this->data['redirect'] = base_url('administrator/amuco_sroc');
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
	* Update view Amuco Srocs
	*
	* @var $id String
	*/
	public function edit($id)
	{
		// $this->is_allowed('amuco_sroc_update');

		$amuco_sroc_offers = array();
		$amuco_offers_sent_customers_data = array();

		foreach($this->model_amuco_sroc->get_sroc_offers($id) as $offer){
			array_push($amuco_sroc_offers, $offer->id_offers_sent_customers);
		}
		
		$this->data['amuco_sroc'] = $this->model_amuco_sroc->find($id);
		$this->data['amuco_customer_request'] = $this->model_amuco_customer_request->get($this->data['amuco_sroc']->customer_request_id,'id')[0];
		$this->data['amuco_offers_sent_customers'] = array();
		$this->data['credit_insurance'] = $this->model_amuco_credit_insurance->get($this->data['amuco_customer_request']->customer,'customer_id');
		$this->data['customer_contact'] = $this->model_amuco_contacts->get_contacts($this->data['amuco_customer_request']->customer, 'customer','customer_id');
		$amuco_offers_sent_customers = $this->model_amuco_offers_sent_customers->get($this->data['amuco_sroc']->customer_request_id,'customer_request_id');

		if(!empty($amuco_offers_sent_customers)){
			foreach ($amuco_offers_sent_customers as $row){
				if($row->status == 'accepted' && in_array($row->id, $amuco_sroc_offers)){
					$this->data['amuco_offers_sent_customers'][] = $row;
				}
			}
		}

		// $amuco_offers_sent_customers_data = $this->model_amuco_offers_sent_customers->getDetailsOffer($this->data['amuco_offers_sent_customers'][0]->request_details_id);


		// echo "<pre>";
		// print_r($this->data['amuco_sroc_offers']);
		// print_r($this->data['amuco_offers_sent_customers']);
		// print_r($this->data['amuco_customer_request']);

		// print_r($this->data['customer_contact']);

		// die();
		$this->template->title('Amuco Sroc Update');
		$this->render('backend/standart/administrator/amuco_sroc/amuco_sroc_update', $this->data);
	}

	public function getDataOffer($id) {
		$supplier_name = '';
		$office = '';
		$contact_name = '';
		$contact_email = '';
		$manufacturer_name = '';
		$representative = '';
		$comercial_contact = "";

		$offer = $this->model_amuco_offers_sent_customers->get($id,'id');
		$detail_offer = $this->model_amuco_offers_sent_customers->getDetailsOffer($offer[0]->request_details_id);
		$detail_offer_price = $this->model_amuco_offers_sent_customers->getDetailsPriceOffer($offer[0]->request_details_price_id);
		$customer_request = $this->model_amuco_customer_request->get($offer[0]->customer_request_id,'id')[0];

		if(!empty($customer_request->contact)) {
			$comercial_contact = $this->model_amuco_offers_sent_customers->getContactData($customer_request->contact);
		}

		if(!empty($customer_request->representative)) {
			$representative = $this->model_amuco_offers_sent_customers->getContactData($customer_request->representative);
		}

		if($detail_offer[0]->supplier !== null && $detail_offer[0]->purchasing == null) {
			$supplier_data = $this->model_amuco_offers_sent_customers->getSupplierData($detail_offer[0]->supplier);
			$supplier_name = $supplier_data[0]->name;
			$office_contact_data = $this->model_amuco_offers_sent_customers->getContactData($detail_offer[0]->contacts);
			$contact_name = $office_contact_data[0]->first_name . " " . $office_contact_data[0]->last_name ;
			$contact_email = $office_contact_data[0]->email;

		}else if($detail_offer[0]->supplier == null && $detail_offer[0]->purchasing !== null) {
			$office_contact_data = $this->model_amuco_offers_sent_customers->getContactDataOffice($detail_offer[0]->purchasing);
			$office = $office_contact_data[0]->full_name;
			$contact_name = $office_contact_data[0]->full_name;
			$contact_email = $office_contact_data[0]->email;
		}

		if(!empty($detail_offer_price[0]->manufacturer)) {
			$data_manufacturer = $this->model_amuco_offers_sent_customers->getSupplierData($detail_offer_price[0]->manufacturer);
			$manufacturer_name = $data_manufacturer[0]->name;
		}
		
		$this->data['supplier'] = $supplier_name;
		$this->data['office'] = $office;
		$this->data['contact_name'] = $contact_name;
		$this->data['manufacturer_name'] = $manufacturer_name;
		$this->data['representative'] = $representative;
		$this->data['comercial_contact'] = $comercial_contact;
		$this->data['contact_email'] = $contact_email;
		$this->data['offer'] = $offer;
		$this->data['detail_offer'] = $detail_offer;
		$this->data['detail_offer_price'] = $detail_offer_price;

		echo json_encode($this->data);
		exit;
	}

	/**
	* Update Amuco Srocs
	*
	* @var $id String
	*/
	public function edit_save($id)
	{
		// if (!$this->is_allowed('amuco_sroc_update', false)) {
		// 	echo json_encode([
		// 		'success' => false,
		// 		'message' => cclang('sorry_you_do_not_have_permission_to_access')
		// 		]);
		// 	exit;
		// }
		
		$this->form_validation->set_rules('customer_request_id', 'Customer Request Id', 'trim|required');
		
		if ($this->form_validation->run()) {
		
			$save_data = [
				'customer_request_id' => $this->input->post('customer_request_id'),
				'status' => $this->input->post('status'),
				'date_created' => $this->input->post('date_created'),
				'date_updated' => $this->input->post('date_updated'),
			];

						$data_output=$this->model_amuco_sroc->find($id);
		    $save_amuco_sroc = $this->model_amuco_sroc->change($id, $save_data);

			if ($save_amuco_sroc) {
				$save_data_tracer=array_merge($save_data,['id'=>$id]);
				$this->insert_logs($save_data_tracer,'updated',$data_output);
			
				if ($this->input->post('save_type') == 'stay') {
					$this->data['success'] = true;
					$this->data['id'] 	   = $id;
					$this->data['message'] = cclang('success_update_data_stay', [
						anchor('administrator/amuco_sroc', ' Go back to list')
					]);
				} else {
					set_message(
						cclang('success_update_data_redirect', [
					]), 'success');

            		$this->data['success'] = true;
					$this->data['redirect'] = base_url('administrator/amuco_sroc');
				}
			} else {
				if ($this->input->post('save_type') == 'stay') {
					$this->data['success'] = false;
					$this->data['message'] = cclang('data_not_change');
				} else {
            		$this->data['success'] = false;
            		$this->data['message'] = cclang('data_not_change');
					$this->data['redirect'] = base_url('administrator/amuco_sroc');
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
	* delete Amuco Srocs
	*
	* @var $id String
	*/
	public function delete($id = null)
	{
		$this->is_allowed('amuco_sroc_delete');

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
            set_message(cclang('has_been_deleted', 'amuco_sroc'), 'success');
        } else {
            set_message(cclang('error_delete', 'amuco_sroc'), 'error');
        }

		redirect_back();
	}

		/**
	* View view Amuco Srocs
	*
	* @var $id String
	*/
	public function view($id)
	{
		$this->is_allowed('amuco_sroc_view');

		$this->data['amuco_sroc'] = $this->model_amuco_sroc->join_avaiable()->filter_avaiable()->find($id);

		$this->template->title('Amuco Sroc Detail');
		$this->render('backend/standart/administrator/amuco_sroc/amuco_sroc_view', $this->data);
	}
	
	/**
	* delete Amuco Srocs
	*
	* @var $id String
	*/
	private function _remove($id)
	{
		$amuco_sroc = (array)$this->model_amuco_sroc->find($id);
		$this->insert_logs($amuco_sroc,'deleted');
	
		
		
		return $this->model_amuco_sroc->remove($id);
	}
	
	
	/**
	* Export to excel
	*
	* @return Files Excel .xls
	*/
	public function export()
	{
		$this->is_allowed('amuco_sroc_export');

		$this->model_amuco_sroc->export('amuco_sroc', 'amuco_sroc');
	}

	/**
	* Export to PDF
	*
	* @return Files PDF .pdf
	*/
	public function export_pdf()
	{
		$this->is_allowed('amuco_sroc_export');

		$this->model_amuco_sroc->pdf('amuco_sroc', 'amuco_sroc');
	}


	public function single_pdf($id = null)
	{
		$this->is_allowed('amuco_sroc_export');

		$table = $title = 'amuco_sroc';
		$this->load->library('HtmlPdf');
      
        $config = array(
            'orientation' => 'p',
            'format' => 'a4',
            'marges' => array(5, 5, 5, 5)
        );

        $this->pdf = new HtmlPdf($config);
        $this->pdf->setDefaultFont('stsongstdlight'); 

        $result = $this->db->get($table);
       
        $data = $this->model_amuco_sroc->find($id);
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

	public function save_document()
	{

		// $this->form_validation->set_rules('name', 'Name document', 'trim|required');

		// if ($this->form_validation->run()) {
		
			$save_data = [
				'name' => $this->input->post('name_document'),
				'origin' => $this->input->post('origin'),
				'original' => $this->input->post('original'),
				'copy' => $this->input->post('copy'),
				'select_by_default' => $this->input->post('select_by_default'),
			];

			
			$save_amuco_document = $this->model_amuco_sroc->save_document($save_data);

			redirect_back();
            
		// } else {
		// 	redirect_back();
		// }
	}

	
}


/* End of file amuco_sroc.php */
/* Location: ./application/controllers/administrator/Amuco Sroc.php */