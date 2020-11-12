<?php
defined('BASEPATH') OR exit('No direct script access allowed');


/**
*| --------------------------------------------------------------------------
*| Amuco Destination Port Controller
*| --------------------------------------------------------------------------
*| Amuco Destination Port site
*|
*/
class Amuco_destination_port extends Admin	
{
	
	public function __construct()
	{
		parent::__construct();

		$this->load->model('mw_logs/Log_table');
		$this->load->model('mw_logs/Tracer');
		$this->load->model('mw_logs/Io_types');
		$this->load->model('mw_logs/Integration_table');
		$this->load->model('model_amuco_destination_port');
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
		$add_log = $this->Log_table->add_log($integration_id,$type_id,"Row # {$data_log['id']} {$action} in table amuco_destination_port",$user->id);
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
	* show all Amuco Destination Ports
	*
	* @var $offset String
	*/
	public function index($offset = 0)
	{
		$this->is_allowed('amuco_destination_port_list');

		$filter = $this->input->get('q');
		$field 	= $this->input->get('f');

		$this->data['amuco_destination_ports'] = $this->model_amuco_destination_port->get($filter, $field, $this->limit_page, $offset);
		$this->data['amuco_destination_port_counts'] = $this->model_amuco_destination_port->count_all($filter, $field);

		$config = [
			'base_url'     => 'administrator/amuco_destination_port/index/',
			'total_rows'   => $this->model_amuco_destination_port->count_all($filter, $field),
			'per_page'     => $this->limit_page,
			'uri_segment'  => 4,
		];

		$this->data['pagination'] = $this->pagination($config);

		$this->template->title('Amuco Destination Port List');
		$this->render('backend/standart/administrator/amuco_destination_port/amuco_destination_port_list', $this->data);
	}
	
	/**
	* Add new amuco_destination_ports
	*
	*/
	public function add()
	{
		$this->is_allowed('amuco_destination_port_add');

		$this->template->title('Amuco Destination Port New');
		$this->render('backend/standart/administrator/amuco_destination_port/amuco_destination_port_add', $this->data);
	}

	/**
	* Add New Amuco Destination Ports
	*
	* @return JSON
	*/
	public function add_save()
	{
		
		if (!$this->is_allowed('amuco_destination_port_add', false)) {
			echo json_encode([
				'success' => false,
				'message' => cclang('sorry_you_do_not_have_permission_to_access')
				]);
			exit;
		}

		$this->form_validation->set_rules('name', 'Name', 'trim|required|max_length[50]');
		$this->form_validation->set_rules('description', 'Description', 'trim|max_length[250]');
		$this->form_validation->set_rules('country', 'Country', 'trim|required|max_length[11]');
		

		if ($this->form_validation->run()) {
		
			$save_data = [
				'name' => ucfirst(strtolower($this->input->post('name'))),
				'description' => ucfirst(strtolower($this->input->post('description'))),
				'country' => $this->input->post('country'),
			];

			
			$save_amuco_destination_port = $this->model_amuco_destination_port->store($save_data);
            

			if ($save_amuco_destination_port) {
				$save_data_tracer=array_merge($save_data,['id'=>$save_amuco_destination_port]);
				$this->insert_logs($save_data_tracer,'added');
			
				if ($this->input->post('save_type') == 'stay') {
					$this->data['success'] = true;
					$this->data['id'] 	   = $save_amuco_destination_port;
					$this->data['message'] = cclang('success_save_data_stay', [
						anchor('administrator/amuco_destination_port/edit/' . $save_amuco_destination_port, 'Edit Amuco Destination Port'),
						anchor('administrator/amuco_destination_port', ' Go back to list')
					]);
				} else {
					set_message(
						cclang('success_save_data_redirect', [
						anchor('administrator/amuco_destination_port/edit/' . $save_amuco_destination_port, 'Edit Amuco Destination Port')
					]), 'success');

            		$this->data['success'] = true;
					$this->data['redirect'] = base_url('administrator/amuco_destination_port');
				}
			} else {
				if ($this->input->post('save_type') == 'stay') {
					$this->data['success'] = false;
					$this->data['message'] = cclang('data_not_change');
				} else {
            		$this->data['success'] = false;
            		$this->data['message'] = cclang('data_not_change');
					$this->data['redirect'] = base_url('administrator/amuco_destination_port');
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
	* Update view Amuco Destination Ports
	*
	* @var $id String
	*/
	public function edit($id)
	{
		$this->is_allowed('amuco_destination_port_update');

		$this->data['amuco_destination_port'] = $this->model_amuco_destination_port->find($id);

		$this->template->title('Amuco Destination Port Update');
		$this->render('backend/standart/administrator/amuco_destination_port/amuco_destination_port_update', $this->data);
	}

	/**
	* Update Amuco Destination Ports
	*
	* @var $id String
	*/
	public function edit_save($id)
	{
		if (!$this->is_allowed('amuco_destination_port_update', false)) {
			echo json_encode([
				'success' => false,
				'message' => cclang('sorry_you_do_not_have_permission_to_access')
				]);
			exit;
		}
		
		$this->form_validation->set_rules('name', 'Name', 'trim|required|max_length[50]');
		$this->form_validation->set_rules('description', 'Description', 'trim|max_length[250]');
		$this->form_validation->set_rules('active', 'Active', 'trim|required|max_length[1]');
		$this->form_validation->set_rules('country', 'Country', 'trim|required|max_length[11]');
		
		if ($this->form_validation->run()) {
		
			$save_data = [
				'name' => ucfirst(strtolower($this->input->post('name'))),
				'description' => ucfirst(strtolower($this->input->post('description'))),
				'active' => $this->input->post('active'),
				'country' => $this->input->post('country'),
			];

						$data_output=$this->model_amuco_destination_port->find($id);
		    $save_amuco_destination_port = $this->model_amuco_destination_port->change($id, $save_data);

			if ($save_amuco_destination_port) {
				$save_data_tracer=array_merge($save_data,['id'=>$id]);
				$this->insert_logs($save_data_tracer,'updated',$data_output);
			
				if ($this->input->post('save_type') == 'stay') {
					$this->data['success'] = true;
					$this->data['id'] 	   = $id;
					$this->data['message'] = cclang('success_update_data_stay', [
						anchor('administrator/amuco_destination_port', ' Go back to list')
					]);
				} else {
					set_message(
						cclang('success_update_data_redirect', [
					]), 'success');

            		$this->data['success'] = true;
					$this->data['redirect'] = base_url('administrator/amuco_destination_port');
				}
			} else {
				if ($this->input->post('save_type') == 'stay') {
					$this->data['success'] = false;
					$this->data['message'] = cclang('data_not_change');
				} else {
            		$this->data['success'] = false;
            		$this->data['message'] = cclang('data_not_change');
					$this->data['redirect'] = base_url('administrator/amuco_destination_port');
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
	* delete Amuco Destination Ports
	*
	* @var $id String
	*/
	public function delete($id = null)
	{
		$this->is_allowed('amuco_destination_port_delete');

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
            set_message(cclang('has_been_deleted', 'amuco_destination_port'), 'success');
        } else {
            set_message(cclang('error_delete', 'amuco_destination_port'), 'error');
        }

		redirect_back();
	}

		/**
	* View view Amuco Destination Ports
	*
	* @var $id String
	*/
	public function view($id)
	{
		$this->is_allowed('amuco_destination_port_view');

		$this->data['amuco_destination_port'] = $this->model_amuco_destination_port->join_avaiable()->filter_avaiable()->find($id);

		$this->template->title('Amuco Destination Port Detail');
		$this->render('backend/standart/administrator/amuco_destination_port/amuco_destination_port_view', $this->data);
	}
	
	/**
	* delete Amuco Destination Ports
	*
	* @var $id String
	*/
	private function _remove($id)
	{
		$amuco_destination_port = (array)$this->model_amuco_destination_port->find($id);
		$this->insert_logs($amuco_destination_port,'deleted');
	
		
		
		return $this->model_amuco_destination_port->remove($id);
	}
	
	
	/**
	* Export to excel
	*
	* @return Files Excel .xls
	*/
	public function export()
	{
		$this->is_allowed('amuco_destination_port_export');

		$this->model_amuco_destination_port->export('amuco_destination_port', 'amuco_destination_port');
	}

	/**
	* Export to PDF
	*
	* @return Files PDF .pdf
	*/
	public function export_pdf()
	{
		$this->is_allowed('amuco_destination_port_export');

		$this->model_amuco_destination_port->pdf('amuco_destination_port', 'amuco_destination_port');
	}


	public function single_pdf($id = null)
	{
		$this->is_allowed('amuco_destination_port_export');

		$table = $title = 'amuco_destination_port';
		$this->load->library('HtmlPdf');
      
        $config = array(
            'orientation' => 'p',
            'format' => 'a4',
            'marges' => array(5, 5, 5, 5)
        );

        $this->pdf = new HtmlPdf($config);
        $this->pdf->setDefaultFont('stsongstdlight'); 

        $result = $this->db->get($table);
       
        $data = $this->model_amuco_destination_port->find($id);
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

	public function get_data_by_id($id=null){
		$id = $this->input->get('id');
		$data = $this->model_amuco_destination_port->find($id);
		echo json_encode($data); 
		exit;
	}

	
}


/* End of file amuco_destination_port.php */
/* Location: ./application/controllers/administrator/Amuco Destination Port.php */