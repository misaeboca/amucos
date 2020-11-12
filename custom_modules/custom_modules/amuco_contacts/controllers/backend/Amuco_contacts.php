<?php
defined('BASEPATH') OR exit('No direct script access allowed');


/**
*| --------------------------------------------------------------------------
*| Amuco Contacts Controller
*| --------------------------------------------------------------------------
*| Amuco Contacts site
*|
*/
class Amuco_contacts extends Admin	
{
	
	public function __construct()
	{
		parent::__construct();

		$this->load->model('mw_logs/Log_table');
		$this->load->model('mw_logs/Tracer');
		$this->load->model('mw_logs/Io_types');
		$this->load->model('mw_logs/Integration_table');
		$this->load->model('model_amuco_contacts');
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
		$add_log = $this->Log_table->add_log($integration_id,$type_id,"Row # {$data_log['id']} {$action} in table amuco_contacts",$user->id);
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
	* show all Amuco Contactss
	*
	* @var $offset String
	*/
	public function index($offset = 0)
	{
		$this->is_allowed('amuco_contacts_list');

		$filter = $this->input->get('q');
		$field 	= $this->input->get('f');

		$this->data['amuco_contactss'] = $this->model_amuco_contacts->get($filter, $field, $this->limit_page, $offset);
		$this->data['amuco_contacts_counts'] = $this->model_amuco_contacts->count_all($filter, $field);

		$config = [
			'base_url'     => 'administrator/amuco_contacts/index/',
			'total_rows'   => $this->model_amuco_contacts->count_all($filter, $field),
			'per_page'     => $this->limit_page,
			'uri_segment'  => 4,
		];

		$this->data['pagination'] = $this->pagination($config);

		$this->template->title('Amuco Contacts List');
		$this->render('backend/standart/administrator/amuco_contacts/amuco_contacts_list', $this->data);
	}
	
	/**
	* Add new amuco_contactss
	*
	*/
	public function add()
	{
		$this->is_allowed('amuco_contacts_add');

		$this->template->title('Amuco Contacts New');
		$this->render('backend/standart/administrator/amuco_contacts/amuco_contacts_add', $this->data);
	}

	/**
	* Add New Amuco Contactss
	*
	* @return JSON
	*/
	public function add_save()
	{
		if (!$this->is_allowed('amuco_contacts_add', false)) {
			echo json_encode([
				'success' => false,
				'message' => cclang('sorry_you_do_not_have_permission_to_access')
				]);
			exit;
		}

		$this->form_validation->set_rules('type_contact', 'Type Contact', 'trim|required');
		$this->form_validation->set_rules('name', 'Name', 'trim|required|max_length[100]');
		$this->form_validation->set_rules('position', 'Position', 'trim|required|max_length[100]');
		$this->form_validation->set_rules('departament', 'Departament', 'trim|max_length[100]');
		$this->form_validation->set_rules('mobile_phone', 'Mobile Phone', 'trim|required|max_length[30]');
		$this->form_validation->set_rules('office_phone', 'Office Phone', 'trim|max_length[30]');
		$this->form_validation->set_rules('personal_phone', 'Personal Phone', 'trim|max_length[30]');
		$this->form_validation->set_rules('fax', 'Fax', 'trim|max_length[30]');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|max_length[100]');
		$this->form_validation->set_rules('skype', 'Skype', 'trim|max_length[100]');
		$this->form_validation->set_rules('line_products[]', 'Line Products', 'trim|max_length[100]');
		if($this->input->post('type_contact') == 'Customer'){
			$this->form_validation->set_rules('customer_id', 'Customer ', 'trim|max_length[10]|required');
		}
		if($this->input->post('type_contact') == 'Supplier'){
			$this->form_validation->set_rules('supplier_id', 'Supplier ', 'trim|max_length[10]|required');
		}
		$this->form_validation->set_rules('picture', 'Picture', 'trim|max_length[250]');
		$this->form_validation->set_rules('home_address', 'Home Address', 'trim|max_length[250]');
		$this->form_validation->set_rules('country', 'Country', 'trim|required|max_length[10]');
		$this->form_validation->set_rules('city', 'City', 'trim|max_length[100]');
		$this->form_validation->set_rules('home_phone', 'Home Phone', 'trim|max_length[30]');
		$this->form_validation->set_rules('additional_information', 'Additional Information', 'trim|max_length[250]');
		

		if ($this->form_validation->run()) {
		
			$save_data = [
				'type_contact' => $this->input->post('type_contact'),
				'name' => $this->input->post('name'),
				'position' => $this->input->post('position'),
				'departament' => $this->input->post('departament'),
				'mobile_phone' => $this->input->post('mobile_phone'),
				'office_phone' => $this->input->post('office_phone'),
				'personal_phone' => $this->input->post('personal_phone'),
				'fax' => $this->input->post('fax'),
				'email' => $this->input->post('email'),
				'skype' => $this->input->post('skype'),
				'line_products' => implode(',', (array) $this->input->post('line_products')),
				'customer_id' => $this->input->post('type_contact') == 'Customer' ? $this->input->post('customer_id') : '',
				'supplier_id' => $this->input->post('type_contact') == 'Supplier' ? $this->input->post('supplier_id'):'',
				'picture' => $this->input->post('picture'),
				'home_address' => $this->input->post('home_address'),
				'country' => $this->input->post('country'),
				'city' => $this->input->post('city'),
				'home_phone' => $this->input->post('home_phone'),
				'birthday' => $this->input->post('birthday'),
				'additional_information' => $this->input->post('additional_information'),
			];

			
			$save_amuco_contacts = $this->model_amuco_contacts->store($save_data);
            

			if ($save_amuco_contacts) {
				$save_data_tracer=array_merge($save_data,['id'=>$save_amuco_contacts]);
				$this->insert_logs($save_data_tracer,'added');
			
				if ($this->input->post('save_type') == 'stay') {
					$this->data['success'] = true;
					$this->data['id'] 	   = $save_amuco_contacts;
					$this->data['message'] = cclang('success_save_data_stay', [
						anchor('administrator/amuco_contacts/edit/' . $save_amuco_contacts, 'Edit Amuco Contacts'),
						anchor('administrator/amuco_contacts', ' Go back to list')
					]);
				} else {
					set_message(
						cclang('success_save_data_redirect', [
						anchor('administrator/amuco_contacts/edit/' . $save_amuco_contacts, 'Edit Amuco Contacts')
					]), 'success');

            		$this->data['success'] = true;
					$this->data['redirect'] = base_url('administrator/amuco_contacts');
				}
			} else {
				if ($this->input->post('save_type') == 'stay') {
					$this->data['success'] = false;
					$this->data['message'] = cclang('data_not_change');
				} else {
            		$this->data['success'] = false;
            		$this->data['message'] = cclang('data_not_change');
					$this->data['redirect'] = base_url('administrator/amuco_contacts');
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
	* Update view Amuco Contactss
	*
	* @var $id String
	*/
	public function edit($id)
	{
		$this->is_allowed('amuco_contacts_update');

		$this->data['amuco_contacts'] = $this->model_amuco_contacts->find($id);

		$this->template->title('Amuco Contacts Update');
		$this->render('backend/standart/administrator/amuco_contacts/amuco_contacts_update', $this->data);
	}

	/**
	* Update Amuco Contactss
	*
	* @var $id String
	*/
	public function edit_save($id)
	{
		if (!$this->is_allowed('amuco_contacts_update', false)) {
			echo json_encode([
				'success' => false,
				'message' => cclang('sorry_you_do_not_have_permission_to_access')
				]);
			exit;
		}
		
		$this->form_validation->set_rules('type_contact', 'Type Contact', 'trim|required');
		$this->form_validation->set_rules('active', 'Active', 'trim|required|max_length[1]');
		$this->form_validation->set_rules('name', 'Name', 'trim|required|max_length[100]');
		$this->form_validation->set_rules('position', 'Position', 'trim|required|max_length[100]');
		$this->form_validation->set_rules('departament', 'Departament', 'trim|max_length[100]');
		$this->form_validation->set_rules('mobile_phone', 'Mobile Phone', 'trim|required|max_length[30]');
		$this->form_validation->set_rules('office_phone', 'Office Phone', 'trim|max_length[30]');
		$this->form_validation->set_rules('personal_phone', 'Personal Phone', 'trim|max_length[30]');
		$this->form_validation->set_rules('fax', 'Fax', 'trim|max_length[30]');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|max_length[100]');
		$this->form_validation->set_rules('skype', 'Skype', 'trim|max_length[100]');
		$this->form_validation->set_rules('line_products[]', 'Line Products', 'trim|max_length[100]');
		$this->form_validation->set_rules('customer_id', 'Customer Id', 'trim|max_length[10]');
		$this->form_validation->set_rules('supplier_id', 'Supplier Id', 'trim|max_length[10]');
		$this->form_validation->set_rules('picture', 'Picture', 'trim|max_length[250]');
		$this->form_validation->set_rules('home_address', 'Home Address', 'trim|max_length[250]');
		$this->form_validation->set_rules('country', 'Country', 'trim|required|max_length[10]');
		$this->form_validation->set_rules('city', 'City', 'trim|max_length[100]');
		$this->form_validation->set_rules('home_phone', 'Home Phone', 'trim|max_length[30]');
		$this->form_validation->set_rules('additional_information', 'Additional Information', 'trim|max_length[250]');
		
		if ($this->form_validation->run()) {
		
			$save_data = [
				'type_contact' => $this->input->post('type_contact'),
				'active' => $this->input->post('active'),
				'name' => $this->input->post('name'),
				'position' => $this->input->post('position'),
				'departament' => $this->input->post('departament'),
				'mobile_phone' => $this->input->post('mobile_phone'),
				'office_phone' => $this->input->post('office_phone'),
				'personal_phone' => $this->input->post('personal_phone'),
				'fax' => $this->input->post('fax'),
				'email' => $this->input->post('email'),
				'skype' => $this->input->post('skype'),
				'line_products' => implode(',', (array) $this->input->post('line_products')),
				'customer_id' => $this->input->post('customer_id'),
				'supplier_id' => $this->input->post('supplier_id'),
				'picture' => $this->input->post('picture'),
				'home_address' => $this->input->post('home_address'),
				'country' => $this->input->post('country'),
				'city' => $this->input->post('city'),
				'home_phone' => $this->input->post('home_phone'),
				'birthday' => $this->input->post('birthday'),
				'additional_information' => $this->input->post('additional_information'),
			];

						$data_output=$this->model_amuco_contacts->find($id);
		    $save_amuco_contacts = $this->model_amuco_contacts->change($id, $save_data);

			if ($save_amuco_contacts) {
				$save_data_tracer=array_merge($save_data,['id'=>$id]);
				$this->insert_logs($save_data_tracer,'updated',$data_output);
			
				if ($this->input->post('save_type') == 'stay') {
					$this->data['success'] = true;
					$this->data['id'] 	   = $id;
					$this->data['message'] = cclang('success_update_data_stay', [
						anchor('administrator/amuco_contacts', ' Go back to list')
					]);
				} else {
					set_message(
						cclang('success_update_data_redirect', [
					]), 'success');

            		$this->data['success'] = true;
					$this->data['redirect'] = base_url('administrator/amuco_contacts');
				}
			} else {
				if ($this->input->post('save_type') == 'stay') {
					$this->data['success'] = false;
					$this->data['message'] = cclang('data_not_change');
				} else {
            		$this->data['success'] = false;
            		$this->data['message'] = cclang('data_not_change');
					$this->data['redirect'] = base_url('administrator/amuco_contacts');
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
	* delete Amuco Contactss
	*
	* @var $id String
	*/
	public function delete($id = null)
	{
		$this->is_allowed('amuco_contacts_delete');

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
            set_message(cclang('has_been_deleted', 'amuco_contacts'), 'success');
        } else {
            set_message(cclang('error_delete', 'amuco_contacts'), 'error');
        }

		redirect_back();
	}

		/**
	* View view Amuco Contactss
	*
	* @var $id String
	*/
	public function view($id)
	{
		$this->is_allowed('amuco_contacts_view');

		$this->data['amuco_contacts'] = $this->model_amuco_contacts->join_avaiable()->filter_avaiable()->find($id);

		$this->template->title('Amuco Contacts Detail');
		$this->render('backend/standart/administrator/amuco_contacts/amuco_contacts_view', $this->data);
	}
	
	/**
	* delete Amuco Contactss
	*
	* @var $id String
	*/
	private function _remove($id)
	{
		$amuco_contacts = (array)$this->model_amuco_contacts->find($id);
		$this->insert_logs($amuco_contacts,'deleted');
	
		
		
		return $this->model_amuco_contacts->remove($id);
	}
	
	
	/**
	* Export to excel
	*
	* @return Files Excel .xls
	*/
	public function export()
	{
		$this->is_allowed('amuco_contacts_export');

		$this->model_amuco_contacts->export('amuco_contacts', 'amuco_contacts');
	}

	/**
	* Export to PDF
	*
	* @return Files PDF .pdf
	*/
	public function export_pdf()
	{
		$this->is_allowed('amuco_contacts_export');

		$this->model_amuco_contacts->pdf('amuco_contacts', 'amuco_contacts');
	}


	public function single_pdf($id = null)
	{
		$this->is_allowed('amuco_contacts_export');

		$table = $title = 'amuco_contacts';
		$this->load->library('HtmlPdf');
      
        $config = array(
            'orientation' => 'p',
            'format' => 'a4',
            'marges' => array(5, 5, 5, 5)
        );

        $this->pdf = new HtmlPdf($config);
        $this->pdf->setDefaultFont('stsongstdlight'); 

        $result = $this->db->get($table);
       
        $data = $this->model_amuco_contacts->find($id);
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


/* End of file amuco_contacts.php */
/* Location: ./application/controllers/administrator/Amuco Contacts.php */