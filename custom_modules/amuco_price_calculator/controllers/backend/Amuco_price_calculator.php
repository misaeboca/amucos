<?php
defined('BASEPATH') OR exit('No direct script access allowed');


/**
*| --------------------------------------------------------------------------
*| Amuco Price Calculator Controller
*| --------------------------------------------------------------------------
*| Amuco Price Calculator site
*|
*/
class Amuco_price_calculator extends Admin	
{
	
	public function __construct()
	{
		parent::__construct();

		$this->load->model('mw_logs/Log_table');
		$this->load->model('mw_logs/Tracer');
		$this->load->model('mw_logs/Io_types');
		$this->load->model('mw_logs/Integration_table');
		$this->load->model('model_amuco_price_calculator');
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
		$add_log = $this->Log_table->add_log($integration_id,$type_id,"Row # {$data_log['id']} {$action} in table amuco_price_calculator",$user->id);
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
	* show all Amuco Price Calculators
	*
	* @var $offset String
	*/
	public function index($offset = 0)
	{
		$this->load->library('amuco_price_calculator/Price_calculator');
		$this->is_allowed('amuco_price_calculator_list');
		// $this->price_calculator = new CI_Price_calculator();

		// $filter = $this->input->get('q');
		// $field 	= $this->input->get('f');

		// $this->data['amuco_price_calculators'] = $this->model_amuco_price_calculator->get($filter, $field, $this->limit_page, $offset);
		// $this->data['amuco_price_calculator_counts'] = $this->model_amuco_price_calculator->count_all($filter, $field);
		$this->data['amuco_price_calculators'] = array();
		$this->data['amuco_price_calculator_counts'] = 0;
		// $this->data['amuco_price_calculator_test'] = $this->price_calculator->get_all_calculations($purchase_to_supplier);

		// $config = [
		// 	'base_url'     => 'administrator/amuco_price_calculator/index/',
		// 	'total_rows'   => $this->model_amuco_price_calculator->count_all($filter, $field),
		// 	'per_page'     => $this->limit_page,
		// 	'uri_segment'  => 4,
		// ];

		// $this->data['pagination'] = $this->pagination($config);
		

		$this->template->title('Amuco Price Calculator List');
		$this->render('backend/standart/administrator/amuco_price_calculator/amuco_price_calculator_list', $this->data);
	}

	public function price_calculator(){
		// require('Price_calculator.php');
		$this->load->library('amuco_price_calculator/Price_calculator');
		//purchase to supplier
		$this->price_calculator = new Price_calculator();
		$incoterm = $this->input->post('incoterm');
		$quantity = $this->input->post('quantity');
		$price_fob_fca_unit = $this->input->post('price_fob_fca_unit');
		$freight = $this->input->post('freight');
		$sup_overprice = $this->input->post('sup_overprice');
		$purchase_amount = $this->input->post('purchase_amount');
		$price_unit = $this->input->post('price_unit');
		$terms = $this->input->post('terms');
		$days = $this->input->post('days');
		$payment_customer = $this->input->post('payment_customer_select');
	
		//Commissions
		$commission_sales_agent = $this->input->post('commission_sales_agent');
		$commission_purchase_office = $this->input->post('commission_purchase_office');
		$commission_other_supp_comm = $this->input->post('commission_other_supp_comm');

		//Representative
		$representative_commission = $this->input->post('representative_commission');
		$representative_purchase_office = $this->input->post('representative_purchase_office');

		//Price Increase
		$price_increase_commission = $this->input->post('price_increase_commission');

		$purchase_to_supplier = array(
								'incoterm' => $incoterm,
								'quantity' => $quantity,
								'price_fob_fca_unit' => $price_fob_fca_unit,
								'freight' => $freight,
								'sup_overprice' => $sup_overprice,
								'purchase_amount' => $purchase_amount,
								'price_unit' => $price_unit,
								'terms' => $terms,
								'days' => $days,
								'commission_sales_agent' => $commission_sales_agent,
								'commission_purchase_office' => $commission_purchase_office,
								'commission_other_supp_comm' => $commission_other_supp_comm,
								'representative_commission' => $representative_commission,
								'representative_purchase_office' => $representative_purchase_office,
								'price_increase_commission' => $price_increase_commission,
								'payment_customer' => $payment_customer
							); 
		
		$calculate = $this->price_calculator->get_all_calculations($purchase_to_supplier);

		echo json_encode($calculate);
		exit();
	}
	
	/**
	* Add new amuco_price_calculators
	*
	*/
	public function add()
	{
		$this->is_allowed('amuco_price_calculator_add');

		$this->template->title('Amuco Price Calculator New');
		$this->render('backend/standart/administrator/amuco_price_calculator/amuco_price_calculator_add', $this->data);
	}

	/**
	* Add New Amuco Price Calculators
	*
	* @return JSON
	*/
	public function add_save()
	{
		if (!$this->is_allowed('amuco_price_calculator_add', false)) {
			echo json_encode([
				'success' => false,
				'message' => cclang('sorry_you_do_not_have_permission_to_access')
				]);
			exit;
		}

		$this->form_validation->set_rules('id', 'Id', 'trim|required|max_length[11]');
		

		if ($this->form_validation->run()) {
		
			$save_data = [
				'id' => $this->input->post('id'),
			];

			
			$save_amuco_price_calculator = $this->model_amuco_price_calculator->store($save_data);
                        $save_amuco_price_calculator = true;
            

			if ($save_amuco_price_calculator) {
				$save_data_tracer=array_merge($save_data,['id'=>$save_amuco_price_calculator]);
				$this->insert_logs($save_data_tracer,'added');
			
				if ($this->input->post('save_type') == 'stay') {
					$this->data['success'] = true;
					$this->data['id'] 	   = $save_amuco_price_calculator;
					$this->data['message'] = cclang('success_save_data_stay', [
						anchor('administrator/amuco_price_calculator/edit/' . $save_amuco_price_calculator, 'Edit Amuco Price Calculator'),
						anchor('administrator/amuco_price_calculator', ' Go back to list')
					]);
				} else {
					set_message(
						cclang('success_save_data_redirect', [
						anchor('administrator/amuco_price_calculator/edit/' . $save_amuco_price_calculator, 'Edit Amuco Price Calculator')
					]), 'success');

            		$this->data['success'] = true;
					$this->data['redirect'] = base_url('administrator/amuco_price_calculator');
				}
			} else {
				if ($this->input->post('save_type') == 'stay') {
					$this->data['success'] = false;
					$this->data['message'] = cclang('data_not_change');
				} else {
            		$this->data['success'] = false;
            		$this->data['message'] = cclang('data_not_change');
					$this->data['redirect'] = base_url('administrator/amuco_price_calculator');
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
	* Update view Amuco Price Calculators
	*
	* @var $id String
	*/
	public function edit($id)
	{
		$this->is_allowed('amuco_price_calculator_update');

		$this->data['amuco_price_calculator'] = $this->model_amuco_price_calculator->find($id);

		$this->template->title('Amuco Price Calculator Update');
		$this->render('backend/standart/administrator/amuco_price_calculator/amuco_price_calculator_update', $this->data);
	}

	/**
	* Update Amuco Price Calculators
	*
	* @var $id String
	*/
	public function edit_save($id)
	{
		if (!$this->is_allowed('amuco_price_calculator_update', false)) {
			echo json_encode([
				'success' => false,
				'message' => cclang('sorry_you_do_not_have_permission_to_access')
				]);
			exit;
		}
		
		$this->form_validation->set_rules('id', 'Id', 'trim|required|max_length[11]');
		
		if ($this->form_validation->run()) {
		
			$save_data = [
				'id' => $this->input->post('id'),
			];

						$data_output=$this->model_amuco_price_calculator->find($id);
		    $save_amuco_price_calculator = $this->model_amuco_price_calculator->change($id, $save_data);

			if ($save_amuco_price_calculator) {
				$save_data_tracer=array_merge($save_data,['id'=>$id]);
				$this->insert_logs($save_data_tracer,'updated',$data_output);
			
				if ($this->input->post('save_type') == 'stay') {
					$this->data['success'] = true;
					$this->data['id'] 	   = $id;
					$this->data['message'] = cclang('success_update_data_stay', [
						anchor('administrator/amuco_price_calculator', ' Go back to list')
					]);
				} else {
					set_message(
						cclang('success_update_data_redirect', [
					]), 'success');

            		$this->data['success'] = true;
					$this->data['redirect'] = base_url('administrator/amuco_price_calculator');
				}
			} else {
				if ($this->input->post('save_type') == 'stay') {
					$this->data['success'] = false;
					$this->data['message'] = cclang('data_not_change');
				} else {
            		$this->data['success'] = false;
            		$this->data['message'] = cclang('data_not_change');
					$this->data['redirect'] = base_url('administrator/amuco_price_calculator');
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
	* delete Amuco Price Calculators
	*
	* @var $id String
	*/
	public function delete($id = null)
	{
		$this->is_allowed('amuco_price_calculator_delete');

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
            set_message(cclang('has_been_deleted', 'amuco_price_calculator'), 'success');
        } else {
            set_message(cclang('error_delete', 'amuco_price_calculator'), 'error');
        }

		redirect_back();
	}

		/**
	* View view Amuco Price Calculators
	*
	* @var $id String
	*/
	public function view($id)
	{
		$this->is_allowed('amuco_price_calculator_view');

		$this->data['amuco_price_calculator'] = $this->model_amuco_price_calculator->join_avaiable()->filter_avaiable()->find($id);

		$this->template->title('Amuco Price Calculator Detail');
		$this->render('backend/standart/administrator/amuco_price_calculator/amuco_price_calculator_view', $this->data);
	}
	
	/**
	* delete Amuco Price Calculators
	*
	* @var $id String
	*/
	private function _remove($id)
	{
		$amuco_price_calculator = (array)$this->model_amuco_price_calculator->find($id);
		$this->insert_logs($amuco_price_calculator,'deleted');
	
		
		
		return $this->model_amuco_price_calculator->remove($id);
	}
	
	
	/**
	* Export to excel
	*
	* @return Files Excel .xls
	*/
	public function export()
	{
		$this->is_allowed('amuco_price_calculator_export');

		$this->model_amuco_price_calculator->export('amuco_price_calculator', 'amuco_price_calculator');
	}

	/**
	* Export to PDF
	*
	* @return Files PDF .pdf
	*/
	public function export_pdf()
	{
		$this->is_allowed('amuco_price_calculator_export');

		$this->model_amuco_price_calculator->pdf('amuco_price_calculator', 'amuco_price_calculator');
	}


	public function single_pdf($id = null)
	{
		$this->is_allowed('amuco_price_calculator_export');

		$table = $title = 'amuco_price_calculator';
		$this->load->library('HtmlPdf');
      
        $config = array(
            'orientation' => 'p',
            'format' => 'a4',
            'marges' => array(5, 5, 5, 5)
        );

        $this->pdf = new HtmlPdf($config);
        $this->pdf->setDefaultFont('stsongstdlight'); 

        $result = $this->db->get($table);
       
        $data = $this->model_amuco_price_calculator->find($id);
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

	
}


/* End of file amuco_price_calculator.php */
/* Location: ./application/controllers/administrator/Amuco Price Calculator.php */