<?php
defined('BASEPATH') OR exit('No direct script access allowed');


/**
*| --------------------------------------------------------------------------
*| Amuco Credit Insurance Controller
*| --------------------------------------------------------------------------
*| Amuco Credit Insurance site
*|
*/
class Amuco_credit_insurance extends Admin	
{
	
	public function __construct()
	{
		parent::__construct();

		$this->load->model('mw_logs/Log_table');
		$this->load->model('mw_logs/Tracer');
		$this->load->model('mw_logs/Io_types');
		$this->load->model('mw_logs/Integration_table');
		$this->load->model('model_amuco_credit_insurance');
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
		$add_log = $this->Log_table->add_log($integration_id,$type_id,"Row # {$data_log['id']} {$action} in table amuco_credit_insurance",$user->id);
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
	* show all Amuco Credit Insurances
	*
	* @var $offset String
	*/
	public function index($offset = 0)
	{
		$this->is_allowed('amuco_credit_insurance_list');

		$filter = $this->input->get('q');
		$field 	= $this->input->get('f');

		$this->data['amuco_credit_insurances'] = $this->model_amuco_credit_insurance->get($filter, $field, $this->limit_page, $offset);
		$this->data['amuco_credit_insurance_counts'] = $this->model_amuco_credit_insurance->count_all($filter, $field);

		$config = [
			'base_url'     => 'administrator/amuco_credit_insurance/index/',
			'total_rows'   => $this->model_amuco_credit_insurance->count_all($filter, $field),
			'per_page'     => $this->limit_page,
			'uri_segment'  => 4,
		];

		$this->data['pagination'] = $this->pagination($config);

		$this->template->title('Amuco Credit Insurance List');
		$this->render('backend/standart/administrator/amuco_credit_insurance/amuco_credit_insurance_list', $this->data);
	}
	
	/**
	* Add new amuco_credit_insurances
	*
	*/
	public function add()
	{
		$this->is_allowed('amuco_credit_insurance_add');

		$this->template->title('Amuco Credit Insurance New');
		$this->render('backend/standart/administrator/amuco_credit_insurance/amuco_credit_insurance_add', $this->data);
	}

	/**
	* Add New Amuco Credit Insurances
	*
	* @return JSON
	*/
	public function add_save()
	{
		//var_dump("aui");die;
		if (!$this->is_allowed('amuco_credit_insurance_add', false)) {
			echo json_encode([
				'success' => false,
				'message' => cclang('sorry_you_do_not_have_permission_to_access')
				]);
			exit;
		}

		$this->form_validation->set_rules('customer_id', 'Customer Id', 'trim|required|max_length[10]');
		$this->form_validation->set_rules('raiting', 'Raiting', 'trim|required');
		$this->form_validation->set_rules('credit_ever_denied', 'Credit Ever Denied', 'trim|required');
		$this->form_validation->set_rules('available_credit', 'Available Credit', 'trim|required');
		$this->form_validation->set_rules('insured_credit', 'Insured Credit', 'trim|required');
		$this->form_validation->set_rules('own_risk', 'Own Risk', 'trim');
		$this->form_validation->set_rules('highest_ever_insured', 'Highest Ever Insured', 'trim|required');
		$this->form_validation->set_rules('request_increase_status', 'Request Increase Status', 'trim|max_length[20]');
		

		if ($this->form_validation->run()) {
		
			$save_data = [
				'customer_id' => $this->input->post('customer_id'),
				'raiting' => $this->input->post('raiting'),
				'credit_ever_denied' => $this->input->post('credit_ever_denied'),
				'available_credit' => $this->input->post('available_credit'),
				'insured_credit' => $this->input->post('insured_credit'),
				'own_risk' => $this->input->post('own_risk'),
				'highest_ever_insured' => $this->input->post('highest_ever_insured'),
				'request_increase_status' => $this->input->post('request_increase_status'),
				'mount_increase' => $this->input->post('mount_increase'),
				'last_increased_requested' => $this->input->post('last_increased_requested'),
				'date_last_increased_requested' => $this->input->post('date_last_increased_requested'),
				'date_created' => date("Y-m-d H:i:s"),
			];

			
			$save_amuco_credit_insurance = $this->model_amuco_credit_insurance->store($save_data);
            

			if ($save_amuco_credit_insurance) {
				$save_data_tracer=array_merge($save_data,['id'=>$save_amuco_credit_insurance]);
				$this->insert_logs($save_data_tracer,'added');
			
				if ($this->input->post('save_type') == 'stay') {
					$this->data['success'] = true;
					$this->data['id'] 	   = $save_amuco_credit_insurance;
					$this->data['message'] = cclang('success_save_data_stay', [
						anchor('administrator/amuco_credit_insurance/edit/' . $save_amuco_credit_insurance, 'Edit Amuco Credit Insurance'),
						anchor('administrator/amuco_credit_insurance', ' Go back to list')
					]);
				} else {
					set_message(
						cclang('success_save_data_redirect', [
						anchor('administrator/amuco_credit_insurance/edit/' . $save_amuco_credit_insurance, 'Edit Amuco Credit Insurance')
					]), 'success');

            		$this->data['success'] = true;
					$this->data['redirect'] = base_url('administrator/amuco_credit_insurance');
				}
			} else {
				if ($this->input->post('save_type') == 'stay') {
					$this->data['success'] = false;
					$this->data['message'] = cclang('data_not_change');
				} else {
            		$this->data['success'] = false;
            		$this->data['message'] = cclang('data_not_change');
					$this->data['redirect'] = base_url('administrator/amuco_credit_insurance');
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
	* Update view Amuco Credit Insurances
	*
	* @var $id String
	*/
	public function edit($id)
	{
		$this->is_allowed('amuco_credit_insurance_update');

		$this->data['amuco_credit_insurance'] = $this->model_amuco_credit_insurance->find($id);

		$this->template->title('Amuco Credit Insurance Update');
		$this->render('backend/standart/administrator/amuco_credit_insurance/amuco_credit_insurance_update', $this->data);
	}

	/**
	* Update Amuco Credit Insurances
	*
	* @var $id String
	*/
	public function edit_save($id)
	{
		if (!$this->is_allowed('amuco_credit_insurance_update', false)) {
			echo json_encode([
				'success' => false,
				'message' => cclang('sorry_you_do_not_have_permission_to_access')
				]);
			exit;
		}
		
		$this->form_validation->set_rules('customer_id', 'Customer Id', 'trim|required|max_length[10]');
		$this->form_validation->set_rules('raiting', 'Raiting', 'trim|required');
		$this->form_validation->set_rules('credit_ever_denied', 'Credit Ever Denied', 'trim|required');
		$this->form_validation->set_rules('available_credit', 'Available Credit', 'trim|required');
		$this->form_validation->set_rules('insured_credit', 'Insured Credit', 'trim|required');
		$this->form_validation->set_rules('own_risk', 'Own Risk', 'trim');
		$this->form_validation->set_rules('highest_ever_insured', 'Highest Ever Insured', 'trim|required');
		$this->form_validation->set_rules('request_increase_status', 'Request Increase Status', 'trim|max_length[20]');
		
		if ($this->form_validation->run()) {
		
			$save_data = [
				'customer_id' => $this->input->post('customer_id'),
				'raiting' => $this->input->post('raiting'),
				'credit_ever_denied' => $this->input->post('credit_ever_denied'),
				'available_credit' => $this->input->post('available_credit'),
				'insured_credit' => $this->input->post('insured_credit'),
				'own_risk' => $this->input->post('own_risk'),
				'highest_ever_insured' => $this->input->post('highest_ever_insured'),
				'request_increase_status' => $this->input->post('request_increase_status'),
				'mount_increase' => $this->input->post('mount_increase'),
				'last_increased_requested' => $this->input->post('last_increased_requested'),
				'date_last_increased_requested' => $this->input->post('date_last_increased_requested'),
				'date_updated' => date("Y-m-d H:i:s"),
			];

						$data_output=$this->model_amuco_credit_insurance->find($id);
		    $save_amuco_credit_insurance = $this->model_amuco_credit_insurance->change($id, $save_data);

			if ($save_amuco_credit_insurance) {
				$save_data_tracer=array_merge($save_data,['id'=>$id]);
				$this->insert_logs($save_data_tracer,'updated',$data_output);
			
				if ($this->input->post('save_type') == 'stay') {
					$this->data['success'] = true;
					$this->data['id'] 	   = $id;
					$this->data['message'] = cclang('success_update_data_stay', [
						anchor('administrator/amuco_credit_insurance', ' Go back to list')
					]);
				} else {
					set_message(
						cclang('success_update_data_redirect', [
					]), 'success');

            		$this->data['success'] = true;
					$this->data['redirect'] = base_url('administrator/amuco_credit_insurance');
				}
			} else {
				if ($this->input->post('save_type') == 'stay') {
					$this->data['success'] = false;
					$this->data['message'] = cclang('data_not_change');
				} else {
            		$this->data['success'] = false;
            		$this->data['message'] = cclang('data_not_change');
					$this->data['redirect'] = base_url('administrator/amuco_credit_insurance');
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
	* delete Amuco Credit Insurances
	*
	* @var $id String
	*/
	public function delete($id = null)
	{
		$this->is_allowed('amuco_credit_insurance_delete');

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
            set_message(cclang('has_been_deleted', 'amuco_credit_insurance'), 'success');
        } else {
            set_message(cclang('error_delete', 'amuco_credit_insurance'), 'error');
        }

		redirect_back();
	}

		/**
	* View view Amuco Credit Insurances
	*
	* @var $id String
	*/
	public function view($id)
	{
		$this->is_allowed('amuco_credit_insurance_view');

		$this->data['amuco_credit_insurance'] = $this->model_amuco_credit_insurance->join_avaiable()->filter_avaiable()->find($id);

		$this->template->title('Amuco Credit Insurance Detail');
		$this->render('backend/standart/administrator/amuco_credit_insurance/amuco_credit_insurance_view', $this->data);
	}
	
	/**
	* delete Amuco Credit Insurances
	*
	* @var $id String
	*/
	private function _remove($id)
	{
		$amuco_credit_insurance = (array)$this->model_amuco_credit_insurance->find($id);
		$this->insert_logs($amuco_credit_insurance,'deleted');
	
		
		
		return $this->model_amuco_credit_insurance->remove($id);
	}
	
	
	/**
	* Export to excel
	*
	* @return Files Excel .xls
	*/
	public function export()
	{
		$this->is_allowed('amuco_credit_insurance_export');

		$this->model_amuco_credit_insurance->export('amuco_credit_insurance', 'amuco_credit_insurance');
	}

	/**
	* Export to PDF
	*
	* @return Files PDF .pdf
	*/
	public function export_pdf()
	{
		$this->is_allowed('amuco_credit_insurance_export');

		$this->model_amuco_credit_insurance->pdf('amuco_credit_insurance', 'amuco_credit_insurance');
	}


	public function single_pdf($id = null)
	{
		$this->is_allowed('amuco_credit_insurance_export');

		$table = $title = 'amuco_credit_insurance';
		$this->load->library('HtmlPdf');
      
        $config = array(
            'orientation' => 'p',
            'format' => 'a4',
            'marges' => array(5, 5, 5, 5)
        );

        $this->pdf = new HtmlPdf($config);
        $this->pdf->setDefaultFont('stsongstdlight'); 

        $result = $this->db->get($table);
       
        $data = $this->model_amuco_credit_insurance->find($id);
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


/* End of file amuco_credit_insurance.php */
/* Location: ./application/controllers/administrator/Amuco Credit Insurance.php */