<?php
defined('BASEPATH') OR exit('No direct script access allowed');


/**
*| --------------------------------------------------------------------------
*| Amuco Unit Types Controller
*| --------------------------------------------------------------------------
*| Amuco Unit Types site
*|
*/
class Amuco_unit_types extends Admin	
{
	
	public function __construct()
	{
		parent::__construct();

		$this->load->model('mw_logs/Log_table');
		$this->load->model('mw_logs/Tracer');
		$this->load->model('mw_logs/Io_types');
		$this->load->model('mw_logs/Integration_table');
		$this->load->model('model_amuco_unit_types');
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
		$add_log = $this->Log_table->add_log($integration_id,$type_id,"Row # {$data_log['id']} {$action} in table amuco_unit_types",$user->id);
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
	* show all Amuco Unit Typess
	*
	* @var $offset String
	*/
	public function index($offset = 0)
	{
		$this->is_allowed('amuco_unit_types_list');

		$filter = $this->input->get('q');
		$field 	= $this->input->get('f');

		$this->data['amuco_unit_typess'] = $this->model_amuco_unit_types->get($filter, $field, $this->limit_page, $offset);
		$this->data['amuco_unit_types_counts'] = $this->model_amuco_unit_types->count_all($filter, $field);

		$config = [
			'base_url'     => 'administrator/amuco_unit_types/index/',
			'total_rows'   => $this->model_amuco_unit_types->count_all($filter, $field),
			'per_page'     => $this->limit_page,
			'uri_segment'  => 4,
		];

		$this->data['pagination'] = $this->pagination($config);

		$this->template->title('Amuco Unit Types List');
		$this->render('backend/standart/administrator/amuco_unit_types/amuco_unit_types_list', $this->data);
	}
	
	/**
	* Add new amuco_unit_typess
	*
	*/
	public function add()
	{
		$this->is_allowed('amuco_unit_types_add');

		$this->template->title('Amuco Unit Types New');
		$this->render('backend/standart/administrator/amuco_unit_types/amuco_unit_types_add', $this->data);
	}

	/**
	* Add New Amuco Unit Typess
	*
	* @return JSON
	*/
	public function add_save()
	{
		if (!$this->is_allowed('amuco_unit_types_add', false)) {
			echo json_encode([
				'success' => false,
				'message' => cclang('sorry_you_do_not_have_permission_to_access')
				]);
			exit;
		}

		$this->form_validation->set_rules('name', 'Name', 'trim|required|max_length[50]');
		$this->form_validation->set_rules('description', 'Description', 'trim|required|max_length[250]');
		$this->form_validation->set_rules('value_gramos', 'Value Gramos', 'trim|max_length[11]');
		

		if ($this->form_validation->run()) {
		
			$save_data = [
				'name' => $this->input->post('name'),
				'description' => $this->input->post('description'),
				'value_gramos' => $this->input->post('value_gramos'),
			];

			
			$save_amuco_unit_types = $this->model_amuco_unit_types->store($save_data);
            

			if ($save_amuco_unit_types) {
				$save_data_tracer=array_merge($save_data,['id'=>$save_amuco_unit_types]);
				$this->insert_logs($save_data_tracer,'added');
			
				if ($this->input->post('save_type') == 'stay') {
					$this->data['success'] = true;
					$this->data['id'] 	   = $save_amuco_unit_types;
					$this->data['message'] = cclang('success_save_data_stay', [
						anchor('administrator/amuco_unit_types/edit/' . $save_amuco_unit_types, 'Edit Amuco Unit Types'),
						anchor('administrator/amuco_unit_types', ' Go back to list')
					]);
				} else {
					set_message(
						cclang('success_save_data_redirect', [
						anchor('administrator/amuco_unit_types/edit/' . $save_amuco_unit_types, 'Edit Amuco Unit Types')
					]), 'success');

            		$this->data['success'] = true;
					$this->data['redirect'] = base_url('administrator/amuco_unit_types');
				}
			} else {
				if ($this->input->post('save_type') == 'stay') {
					$this->data['success'] = false;
					$this->data['message'] = cclang('data_not_change');
				} else {
            		$this->data['success'] = false;
            		$this->data['message'] = cclang('data_not_change');
					$this->data['redirect'] = base_url('administrator/amuco_unit_types');
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
	* Update view Amuco Unit Typess
	*
	* @var $id String
	*/
	public function edit($id)
	{
		$this->is_allowed('amuco_unit_types_update');

		$this->data['amuco_unit_types'] = $this->model_amuco_unit_types->find($id);

		$this->template->title('Amuco Unit Types Update');
		$this->render('backend/standart/administrator/amuco_unit_types/amuco_unit_types_update', $this->data);
	}

	/**
	* Update Amuco Unit Typess
	*
	* @var $id String
	*/
	public function edit_save($id)
	{
		if (!$this->is_allowed('amuco_unit_types_update', false)) {
			echo json_encode([
				'success' => false,
				'message' => cclang('sorry_you_do_not_have_permission_to_access')
				]);
			exit;
		}
		
		$this->form_validation->set_rules('name', 'Name', 'trim|required|max_length[50]');
		$this->form_validation->set_rules('description', 'Description', 'trim|required|max_length[250]');
		$this->form_validation->set_rules('value_gramos', 'Value Gramos', 'trim|max_length[11]');
		
		if ($this->form_validation->run()) {
		
			$save_data = [
				'name' => $this->input->post('name'),
				'description' => $this->input->post('description'),
				'value_gramos' => $this->input->post('value_gramos'),
			];

						$data_output=$this->model_amuco_unit_types->find($id);
		    $save_amuco_unit_types = $this->model_amuco_unit_types->change($id, $save_data);

			if ($save_amuco_unit_types) {
				$save_data_tracer=array_merge($save_data,['id'=>$id]);
				$this->insert_logs($save_data_tracer,'updated',$data_output);
			
				if ($this->input->post('save_type') == 'stay') {
					$this->data['success'] = true;
					$this->data['id'] 	   = $id;
					$this->data['message'] = cclang('success_update_data_stay', [
						anchor('administrator/amuco_unit_types', ' Go back to list')
					]);
				} else {
					set_message(
						cclang('success_update_data_redirect', [
					]), 'success');

            		$this->data['success'] = true;
					$this->data['redirect'] = base_url('administrator/amuco_unit_types');
				}
			} else {
				if ($this->input->post('save_type') == 'stay') {
					$this->data['success'] = false;
					$this->data['message'] = cclang('data_not_change');
				} else {
            		$this->data['success'] = false;
            		$this->data['message'] = cclang('data_not_change');
					$this->data['redirect'] = base_url('administrator/amuco_unit_types');
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
	* delete Amuco Unit Typess
	*
	* @var $id String
	*/
	public function delete($id = null)
	{
		$this->is_allowed('amuco_unit_types_delete');

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
            set_message(cclang('has_been_deleted', 'amuco_unit_types'), 'success');
        } else {
            set_message(cclang('error_delete', 'amuco_unit_types'), 'error');
        }

		redirect_back();
	}

		/**
	* View view Amuco Unit Typess
	*
	* @var $id String
	*/
	public function view($id)
	{
		$this->is_allowed('amuco_unit_types_view');

		$this->data['amuco_unit_types'] = $this->model_amuco_unit_types->join_avaiable()->filter_avaiable()->find($id);

		$this->template->title('Amuco Unit Types Detail');
		$this->render('backend/standart/administrator/amuco_unit_types/amuco_unit_types_view', $this->data);
	}
	
	/**
	* delete Amuco Unit Typess
	*
	* @var $id String
	*/
	private function _remove($id)
	{
		$amuco_unit_types = (array)$this->model_amuco_unit_types->find($id);
		$this->insert_logs($amuco_unit_types,'deleted');
	
		
		
		return $this->model_amuco_unit_types->remove($id);
	}
	
	
	/**
	* Export to excel
	*
	* @return Files Excel .xls
	*/
	public function export()
	{
		$this->is_allowed('amuco_unit_types_export');

		$this->model_amuco_unit_types->export('amuco_unit_types', 'amuco_unit_types');
	}

	/**
	* Export to PDF
	*
	* @return Files PDF .pdf
	*/
	public function export_pdf()
	{
		$this->is_allowed('amuco_unit_types_export');

		$this->model_amuco_unit_types->pdf('amuco_unit_types', 'amuco_unit_types');
	}


	public function single_pdf($id = null)
	{
		$this->is_allowed('amuco_unit_types_export');

		$table = $title = 'amuco_unit_types';
		$this->load->library('HtmlPdf');
      
        $config = array(
            'orientation' => 'p',
            'format' => 'a4',
            'marges' => array(5, 5, 5, 5)
        );

        $this->pdf = new HtmlPdf($config);
        $this->pdf->setDefaultFont('stsongstdlight'); 

        $result = $this->db->get($table);
       
        $data = $this->model_amuco_unit_types->find($id);
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


/* End of file amuco_unit_types.php */
/* Location: ./application/controllers/administrator/Amuco Unit Types.php */