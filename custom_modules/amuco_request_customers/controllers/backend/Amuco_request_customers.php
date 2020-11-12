<?php
defined('BASEPATH') OR exit('No direct script access allowed');


/**
*| --------------------------------------------------------------------------
*| Amuco Request Customers Controller
*| --------------------------------------------------------------------------
*| Amuco Request Customers site
*|
*/
class Amuco_request_customers extends Admin	
{
	
	public function __construct()
	{
		parent::__construct();

		$this->load->model('mw_logs/Log_table');
		$this->load->model('mw_logs/Tracer');
		$this->load->model('mw_logs/Io_types');
		$this->load->model('mw_logs/Integration_table');
		$this->load->model('model_amuco_request_customers');
		$this->load->model(['amuco_details_customers_request/model_amuco_details_customers_request',
							'amuco_customer_request/model_amuco_customer_request']);
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
		$add_log = $this->Log_table->add_log($integration_id,$type_id,"Row # {$data_log['id']} {$action} in table amuco_request_customers",$user->id);
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
	* show all Amuco Request Customerss
	*
	* @var $offset String
	*/
	public function index($offset = 0)
	{
		$this->is_allowed('amuco_request_customers_list');

		$filter = $this->input->get('q');
		$field 	= $this->input->get('f');

		$this->data['amuco_request_customerss'] = $this->model_amuco_request_customers->get($filter, $field, $this->limit_page, $offset);
		$this->data['amuco_request_customers_counts'] = $this->model_amuco_request_customers->count_all($filter, $field);

		$config = [
			'base_url'     => 'administrator/amuco_request_customers/index/',
			'total_rows'   => $this->model_amuco_request_customers->count_all($filter, $field),
			'per_page'     => $this->limit_page,
			'uri_segment'  => 4,
		];

		$this->data['pagination'] = $this->pagination($config);

		$this->template->title('Amuco Request Customers List');
		$this->render('backend/standart/administrator/amuco_request_customers/amuco_request_customers_list', $this->data);
	}
	
	/**
	* Add new amuco_request_customerss
	*
	*/
	public function add()
	{
		$this->is_allowed('amuco_request_customers_add');

		$this->template->title('Amuco Request Customers New');
		$this->render('backend/standart/administrator/amuco_request_customers/amuco_request_customers_add', $this->data);
	}

	/**
	* Add New Amuco Request Customerss
	*
	* @return JSON
	*/
	public function add_save()
	{
		if (!$this->is_allowed('amuco_request_customers_add', false)) {
			echo json_encode([
				'success' => false,
				'message' => cclang('sorry_you_do_not_have_permission_to_access')
				]);
			exit;
		}

		$this->form_validation->set_rules('supplier_id', 'Supplier Id', 'trim|required|max_length[10]');
		$this->form_validation->set_rules('customer_id', 'Customer Id', 'trim|required|max_length[10]');
		$this->form_validation->set_rules('status', 'Status', 'trim|required|max_length[10]');
		$this->form_validation->set_rules('customer_request_id', 'Customer Request Id', 'trim|required|max_length[10]');
		
       
		if ($this->form_validation->run()) {
		
			$save_data = [
				'supplier_id' => $this->input->post('supplier_id'),
				'customer_id' => $this->input->post('customer_id'),
				'status' => 'request to china',
				'customer_request_id' => $this->input->post('customer_request_id'),
			];

			
			$save_amuco_request_customers = $this->model_amuco_request_customers->store($save_data);
   
			if ($save_amuco_request_customers) {
				if($this->input->post('save_type') == 'china'){
					$data = ['status'=>'requested to china'];
					$update_status_customer_request = $this->model_amuco_customer_request->change($this->input->post('customer_request_id'), $data);
					//$update_status_details_request = $this->model_amuco_details_customers_request->change($this->input->post('customer_request_id'), $data);
				}
				$save_data_tracer=array_merge($save_data,['id'=>$save_amuco_request_customers]);
				$this->insert_logs($save_data_tracer,'added');
			
				if ($this->input->post('save_type') == 'stay') {
					$this->data['success'] = true;
					$this->data['id'] 	   = $save_amuco_request_customers;
					$this->data['message'] = cclang('success_save_data_stay', [
						anchor('administrator/amuco_request_customers/edit/' . $save_amuco_request_customers, 'Edit Amuco Request Customers'),
						anchor('administrator/amuco_request_customers', ' Go back to list')
					]);
				} else {
					set_message(
						cclang('success_save_data_redirect', [
						anchor('administrator/amuco_request_customers/edit/' . $save_amuco_request_customers, 'Edit Amuco Request Customers')
					]), 'success');

            		$this->data['success'] = true;
					$this->data['redirect'] = base_url('administrator/amuco_request_customers');
				}
			} else {
				if ($this->input->post('save_type') == 'stay') {
					$this->data['success'] = false;
					$this->data['message'] = cclang('data_not_change');
				} else {
            		$this->data['success'] = false;
            		$this->data['message'] = cclang('data_not_change');
					$this->data['redirect'] = base_url('administrator/amuco_request_customers');
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
	* Update view Amuco Request Customerss
	*
	* @var $id String
	*/
	public function edit($id)
	{
		$this->is_allowed('amuco_request_customers_update');

		$this->data['amuco_request_customers'] = $this->model_amuco_request_customers->find($id);

		$this->template->title('Amuco Request Customers Update');
		$this->render('backend/standart/administrator/amuco_request_customers/amuco_request_customers_update', $this->data);
	}

	/**
	* Update Amuco Request Customerss
	*
	* @var $id String
	*/
	public function edit_save($id)
	{
		if (!$this->is_allowed('amuco_request_customers_update', false)) {
			echo json_encode([
				'success' => false,
				'message' => cclang('sorry_you_do_not_have_permission_to_access')
				]);
			exit;
		}
		
		$this->form_validation->set_rules('supplier_id', 'Supplier Id', 'trim|required|max_length[10]');
		$this->form_validation->set_rules('customer_id', 'Customer Id', 'trim|required|max_length[10]');
		$this->form_validation->set_rules('status', 'Status', 'trim|required|max_length[10]');
		$this->form_validation->set_rules('customer_request_id', 'Customer Request Id', 'trim|required|max_length[10]');
		
		if ($this->form_validation->run()) {
		
			$save_data = [
				'supplier_id' => $this->input->post('supplier_id'),
				'customer_id' => $this->input->post('customer_id'),
				'status' => $this->input->post('status'),
				'customer_request_id' => $this->input->post('customer_request_id'),
			];

						$data_output=$this->model_amuco_request_customers->find($id);
		    $save_amuco_request_customers = $this->model_amuco_request_customers->change($id, $save_data);

			if ($save_amuco_request_customers) {
				$save_data_tracer=array_merge($save_data,['id'=>$id]);
				$this->insert_logs($save_data_tracer,'updated',$data_output);
			
				if ($this->input->post('save_type') == 'stay') {
					$this->data['success'] = true;
					$this->data['id'] 	   = $id;
					$this->data['message'] = cclang('success_update_data_stay', [
						anchor('administrator/amuco_request_customers', ' Go back to list')
					]);
				} else {
					set_message(
						cclang('success_update_data_redirect', [
					]), 'success');

            		$this->data['success'] = true;
					$this->data['redirect'] = base_url('administrator/amuco_request_customers');
				}
			} else {
				if ($this->input->post('save_type') == 'stay') {
					$this->data['success'] = false;
					$this->data['message'] = cclang('data_not_change');
				} else {
            		$this->data['success'] = false;
            		$this->data['message'] = cclang('data_not_change');
					$this->data['redirect'] = base_url('administrator/amuco_request_customers');
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
	* delete Amuco Request Customerss
	*
	* @var $id String
	*/
	public function delete($id = null)
	{
		$this->is_allowed('amuco_request_customers_delete');

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
            set_message(cclang('has_been_deleted', 'amuco_request_customers'), 'success');
        } else {
            set_message(cclang('error_delete', 'amuco_request_customers'), 'error');
        }

		redirect_back();
	}

		/**
	* View view Amuco Request Customerss
	*
	* @var $id String
	*/
	public function view($id)
	{
		$this->is_allowed('amuco_request_customers_view');

		$this->data['amuco_request_customers'] = $this->model_amuco_request_customers->join_avaiable()->filter_avaiable()->find($id);

		$this->template->title('Amuco Request Customers Detail');
		$this->render('backend/standart/administrator/amuco_request_customers/amuco_request_customers_view', $this->data);
	}
	
	/**
	* delete Amuco Request Customerss
	*
	* @var $id String
	*/
	private function _remove($id)
	{
		$amuco_request_customers = (array)$this->model_amuco_request_customers->find($id);
		$this->insert_logs($amuco_request_customers,'deleted');
	
		
		
		return $this->model_amuco_request_customers->remove($id);
	}
	
	
	/**
	* Export to excel
	*
	* @return Files Excel .xls
	*/
	public function export()
	{
		$this->is_allowed('amuco_request_customers_export');

		$this->model_amuco_request_customers->export('amuco_request_customers', 'amuco_request_customers');
	}

	/**
	* Export to PDF
	*
	* @return Files PDF .pdf
	*/
	public function export_pdf()
	{
		$this->is_allowed('amuco_request_customers_export');

		$this->model_amuco_request_customers->pdf('amuco_request_customers', 'amuco_request_customers');
	}


	public function single_pdf($id = null)
	{
		$this->is_allowed('amuco_request_customers_export');

		$table = $title = 'amuco_request_customers';
		$this->load->library('HtmlPdf');
      
        $config = array(
            'orientation' => 'p',
            'format' => 'a4',
            'marges' => array(5, 5, 5, 5)
        );

        $this->pdf = new HtmlPdf($config);
        $this->pdf->setDefaultFont('stsongstdlight'); 

        $result = $this->db->get($table);
       
        $data = $this->model_amuco_request_customers->find($id);
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


/* End of file amuco_request_customers.php */
/* Location: ./application/controllers/administrator/Amuco Request Customers.php */