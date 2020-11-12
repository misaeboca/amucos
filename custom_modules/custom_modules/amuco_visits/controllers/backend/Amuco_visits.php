<?php
defined('BASEPATH') OR exit('No direct script access allowed');


/**
*| --------------------------------------------------------------------------
*| Amuco Visits Controller
*| --------------------------------------------------------------------------
*| Amuco Visits site
*|
*/
class Amuco_visits extends Admin	
{
	
	public function __construct()
	{
		parent::__construct();

		$this->load->model('mw_logs/Log_table');
		$this->load->model('mw_logs/Tracer');
		$this->load->model('mw_logs/Io_types');
		$this->load->model('mw_logs/Integration_table');
		$this->load->model('model_amuco_visits');
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
		$add_log = $this->Log_table->add_log($integration_id,$type_id,"Row # {$data_log['id']} {$action} in table amuco_visits",$user->id);
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
	* show all Amuco Visitss
	*
	* @var $offset String
	*/
	public function index($offset = 0)
	{
		$this->is_allowed('amuco_visits_list');

		$filter = $this->input->get('q');
		$field 	= $this->input->get('f');

		$this->data['amuco_visitss'] = $this->model_amuco_visits->get($filter, $field, $this->limit_page, $offset);
		$this->data['amuco_visits_counts'] = $this->model_amuco_visits->count_all($filter, $field);

		$config = [
			'base_url'     => 'administrator/amuco_visits/index/',
			'total_rows'   => $this->model_amuco_visits->count_all($filter, $field),
			'per_page'     => $this->limit_page,
			'uri_segment'  => 4,
		];

		$this->data['pagination'] = $this->pagination($config);

		$this->template->title('Amuco Visits List');
		$this->render('backend/standart/administrator/amuco_visits/amuco_visits_list', $this->data);
	}
	
	/**
	* Add new amuco_visitss
	*
	*/
	public function add()
	{
		$this->is_allowed('amuco_visits_add');

		$this->template->title('Amuco Visits New');
		$this->render('backend/standart/administrator/amuco_visits/amuco_visits_add', $this->data);
	}

	/**
	* Add New Amuco Visitss
	*
	* @return JSON
	*/
	public function add_save()
	{
		if (!$this->is_allowed('amuco_visits_add', false)) {
			echo json_encode([
				'success' => false,
				'message' => cclang('sorry_you_do_not_have_permission_to_access')
				]);
			exit;
		}

		$this->form_validation->set_rules('type_client', 'Type Client', 'trim|required');
		$this->form_validation->set_rules('user_id', 'User Id', 'trim|required|max_length[10]');
		$this->form_validation->set_rules('date_visit', 'Date Visit', 'trim|required');
		$this->form_validation->set_rules('contact_name', 'Contact Name', 'trim|required|max_length[50]');
		$this->form_validation->set_rules('subject', 'Subject', 'trim|required|max_length[250]');
		$this->form_validation->set_rules('notes', 'Notes', 'trim|required');
		if($this->input->post('type_client') == 'Customer'){
			$this->form_validation->set_rules('customer_id', 'Customer ', 'trim|max_length[10]|required');
		}
		if($this->input->post('type_client') == 'Supplier'){
			$this->form_validation->set_rules('supplier_id', 'Supplier ', 'trim|max_length[10]|required');
		}
		
       
		if ($this->form_validation->run()) {
		
			$save_data = [
				'type_client' => $this->input->post('type_client'),
				'user_id' => $this->input->post('user_id'),
				'customer_id' => $this->input->post('type_client') == 'Customer' ? $this->input->post('customer_id') : '',
				'supplier_id' => $this->input->post('type_client') == 'Supplier' ? $this->input->post('supplier_id') : '',
				'date_visit' => $this->input->post('date_visit'),
				'contact_name' => $this->input->post('contact_name'),
				'subject' => $this->input->post('subject'),
				'notes' => $this->input->post('notes'),
			];

			
			$save_amuco_visits = $this->model_amuco_visits->store($save_data);
            

			if ($save_amuco_visits) {
				$save_data_tracer=array_merge($save_data,['id'=>$save_amuco_visits]);
				$this->insert_logs($save_data_tracer,'added');
			
				if ($this->input->post('save_type') == 'stay') {
					$this->data['success'] = true;
					$this->data['id'] 	   = $save_amuco_visits;
					$this->data['message'] = cclang('success_save_data_stay', [
						anchor('administrator/amuco_visits/edit/' . $save_amuco_visits, 'Edit Amuco Visits'),
						anchor('administrator/amuco_visits', ' Go back to list')
					]);
				} else {
					set_message(
						cclang('success_save_data_redirect', [
						anchor('administrator/amuco_visits/edit/' . $save_amuco_visits, 'Edit Amuco Visits')
					]), 'success');

            		$this->data['success'] = true;
					$this->data['redirect'] = base_url('administrator/amuco_visits');
				}
			} else {
				if ($this->input->post('save_type') == 'stay') {
					$this->data['success'] = false;
					$this->data['message'] = cclang('data_not_change');
				} else {
            		$this->data['success'] = false;
            		$this->data['message'] = cclang('data_not_change');
					$this->data['redirect'] = base_url('administrator/amuco_visits');
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
	* Update view Amuco Visitss
	*
	* @var $id String
	*/
	public function edit($id)
	{
		$this->is_allowed('amuco_visits_update');

		$this->data['amuco_visits'] = $this->model_amuco_visits->find($id);

		$this->template->title('Amuco Visits Update');
		$this->render('backend/standart/administrator/amuco_visits/amuco_visits_update', $this->data);
	}

	/**
	* Update Amuco Visitss
	*
	* @var $id String
	*/
	public function edit_save($id)
	{
		if (!$this->is_allowed('amuco_visits_update', false)) {
			echo json_encode([
				'success' => false,
				'message' => cclang('sorry_you_do_not_have_permission_to_access')
				]);
			exit;
		}
		
		$this->form_validation->set_rules('type_client', 'Type Client', 'trim|required');
		$this->form_validation->set_rules('user_id', 'User Id', 'trim|required|max_length[10]');
	//	$this->form_validation->set_rules('customer_id', 'Customer Id', 'trim|max_length[10]');
		$this->form_validation->set_rules('date_visit', 'Date Visit', 'trim|required');
		$this->form_validation->set_rules('contact_name', 'Contact Name', 'trim|required|max_length[50]');
		$this->form_validation->set_rules('subject', 'Subject', 'trim|required|max_length[250]');
		$this->form_validation->set_rules('notes', 'Notes', 'trim|required');
		if($this->input->post('type_client') == 'Customer'){
			$this->form_validation->set_rules('customer_id', 'Customer ', 'trim|max_length[10]|required');
		}
		if($this->input->post('type_client') == 'Supplier'){
			$this->form_validation->set_rules('supplier_id', 'Supplier ', 'trim|max_length[10]|required');
		}
		
		if ($this->form_validation->run()) {
		
			$save_data = [
				'type_client' => $this->input->post('type_client'),
				'user_id' => $this->input->post('user_id'),
				'customer_id' => $this->input->post('type_client') == 'Customer' ? $this->input->post('customer_id') : '',
				'supplier_id' => $this->input->post('type_client') == 'Supplier' ? $this->input->post('supplier_id') : '',
				'date_visit' => $this->input->post('date_visit'),
				'contact_name' => $this->input->post('contact_name'),
				'subject' => $this->input->post('subject'),
				'notes' => $this->input->post('notes'),
			];

						$data_output=$this->model_amuco_visits->find($id);
		    $save_amuco_visits = $this->model_amuco_visits->change($id, $save_data);

			if ($save_amuco_visits) {
				$save_data_tracer=array_merge($save_data,['id'=>$id]);
				$this->insert_logs($save_data_tracer,'updated',$data_output);
			
				if ($this->input->post('save_type') == 'stay') {
					$this->data['success'] = true;
					$this->data['id'] 	   = $id;
					$this->data['message'] = cclang('success_update_data_stay', [
						anchor('administrator/amuco_visits', ' Go back to list')
					]);
				} else {
					set_message(
						cclang('success_update_data_redirect', [
					]), 'success');

            		$this->data['success'] = true;
					$this->data['redirect'] = base_url('administrator/amuco_visits');
				}
			} else {
				if ($this->input->post('save_type') == 'stay') {
					$this->data['success'] = false;
					$this->data['message'] = cclang('data_not_change');
				} else {
            		$this->data['success'] = false;
            		$this->data['message'] = cclang('data_not_change');
					$this->data['redirect'] = base_url('administrator/amuco_visits');
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
	* delete Amuco Visitss
	*
	* @var $id String
	*/
	public function delete($id = null)
	{
		$this->is_allowed('amuco_visits_delete');

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
            set_message(cclang('has_been_deleted', 'amuco_visits'), 'success');
        } else {
            set_message(cclang('error_delete', 'amuco_visits'), 'error');
        }

		redirect_back();
	}

		/**
	* View view Amuco Visitss
	*
	* @var $id String
	*/
	public function view($id)
	{
		$this->is_allowed('amuco_visits_view');

		$this->data['amuco_visits'] = $this->model_amuco_visits->join_avaiable()->filter_avaiable()->find($id);

		$this->template->title('Amuco Visits Detail');
		$this->render('backend/standart/administrator/amuco_visits/amuco_visits_view', $this->data);
	}
	
	/**
	* delete Amuco Visitss
	*
	* @var $id String
	*/
	private function _remove($id)
	{
		$amuco_visits = (array)$this->model_amuco_visits->find($id);
		$this->insert_logs($amuco_visits,'deleted');
	
		
		
		return $this->model_amuco_visits->remove($id);
	}
	
	
	/**
	* Export to excel
	*
	* @return Files Excel .xls
	*/
	public function export()
	{
		$this->is_allowed('amuco_visits_export');

		$this->model_amuco_visits->export('amuco_visits', 'amuco_visits');
	}

	/**
	* Export to PDF
	*
	* @return Files PDF .pdf
	*/
	public function export_pdf()
	{
		$this->is_allowed('amuco_visits_export');

		$this->model_amuco_visits->pdf('amuco_visits', 'amuco_visits');
	}


	public function single_pdf($id = null)
	{
		$this->is_allowed('amuco_visits_export');

		$table = $title = 'amuco_visits';
		$this->load->library('HtmlPdf');
      
        $config = array(
            'orientation' => 'p',
            'format' => 'a4',
            'marges' => array(5, 5, 5, 5)
        );

        $this->pdf = new HtmlPdf($config);
        $this->pdf->setDefaultFont('stsongstdlight'); 

        $result = $this->db->get($table);
       
        $data = $this->model_amuco_visits->find($id);
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


/* End of file amuco_visits.php */
/* Location: ./application/controllers/administrator/Amuco Visits.php */