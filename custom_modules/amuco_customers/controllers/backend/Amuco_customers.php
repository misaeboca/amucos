<?php
defined('BASEPATH') OR exit('No direct script access allowed');


/**
*| --------------------------------------------------------------------------
*| Amuco Customers Controller
*| --------------------------------------------------------------------------
*| Amuco Customers site
*|
*/
class Amuco_customers extends Admin	
{
	
	public function __construct()
	{
		parent::__construct();

		$this->load->model('mw_logs/Log_table');
		$this->load->model('mw_logs/Tracer');
		$this->load->model('mw_logs/Io_types');
		$this->load->model('mw_logs/Integration_table');
		$this->load->model(['model_amuco_customers',
							'user/model_user',
							'amuco_industry_type/model_amuco_industry_type',
							'amuco_credit_insurance/model_amuco_credit_insurance',
							'amuco_contacts/model_amuco_contacts',
							'amuco_samples/model_amuco_samples',
							'amuco_visits/model_amuco_visits'
							]);
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
		$add_log = $this->Log_table->add_log($integration_id,$type_id,"Row # {$data_log['id']} {$action} in table amuco_customers",$user->id);
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
	* show all Amuco Customerss
	*
	* @var $offset String
	*/
	public function index($offset = 0)
	{
		$this->is_allowed('amuco_customers_list');

		$filter = $this->input->get('q');
		$field 	= $this->input->get('f');

		$this->data['amuco_customerss'] = $this->model_amuco_customers->get($filter, $field, $this->limit_page, $offset);
		$this->data['amuco_customers_counts'] = $this->model_amuco_customers->count_all($filter, $field);

		$config = [
			'base_url'     => 'administrator/amuco_customers/index/',
			'total_rows'   => $this->model_amuco_customers->count_all($filter, $field),
			'per_page'     => $this->limit_page,
			'uri_segment'  => 4,
		];

		$this->data['pagination'] = $this->pagination($config);

		$this->template->title('Amuco Customers List');
		$this->render('backend/standart/administrator/amuco_customers/amuco_customers_list', $this->data);
	}
	
	/**
	* Add new amuco_customerss
	*
	*/
	public function add()
	{
		$this->is_allowed('amuco_customers_add');
		$this->data['amuco_customers'] = $this->model_amuco_customers->get();
		$this->template->title('Amuco Customers New');
		$this->render('backend/standart/administrator/amuco_customers/amuco_customers_add', $this->data);
	}

	/**
	* Add New Amuco Customerss
	*
	* @return JSON
	*/
	public function add_save()
	{
		if (!$this->is_allowed('amuco_customers_add', false)) {
			echo json_encode([
				'success' => false,
				'message' => cclang('sorry_you_do_not_have_permission_to_access')
				]);
			exit;
		}

		$this->form_validation->set_rules('name', 'Name', 'trim|required|max_length[50]');
		$this->form_validation->set_rules('code', 'Code', 'trim|required|max_length[50]');
		$this->form_validation->set_rules('nit', 'Nit', 'trim|max_length[50]');
		$this->form_validation->set_rules('email', 'Email', 'trim|max_length[100]');
		$this->form_validation->set_rules('country', 'Country', 'trim|required|max_length[11]');
		$this->form_validation->set_rules('city', 'City', 'trim|max_length[100]');
		$this->form_validation->set_rules('state', 'State', 'trim|max_length[100]');
		$this->form_validation->set_rules('postal_code', 'Postal Code', 'trim|max_length[20]');
		$this->form_validation->set_rules('address', 'Address', 'trim|max_length[100]');
		$this->form_validation->set_rules('mobile_phone', 'Mobile Phone', 'trim|max_length[30]');
		$this->form_validation->set_rules('office_phone', 'Office Phone', 'trim|max_length[30]');
		$this->form_validation->set_rules('fax', 'Fax', 'trim|max_length[30]');
		$this->form_validation->set_rules('pobox', 'Pobox', 'trim|max_length[50]');
		$this->form_validation->set_rules('url', 'Url', 'trim|max_length[100]');
		$this->form_validation->set_rules('is_branche', 'Branch', 'trim|required');
		$this->form_validation->set_rules('head_office', 'Head Office', 'trim|max_length[10]');
		$this->form_validation->set_rules('industry_type[]', 'Industry Type', 'trim|required|max_length[100]');
		$this->form_validation->set_rules('sales_agent[]', 'Sales Agent', 'trim|max_length[250]');
	
		if ($this->form_validation->run()) {
		
			$save_data = [
				'name' => ucwords ($this->input->post('name')),
				'code' => ucwords($this->input->post('code')),
				'nit' => ucwords($this->input->post('nit')),
				'email' => $this->input->post('email'),
				'country' => $this->input->post('country'),
				'city' => ucwords($this->input->post('city')),
				'state' => ucwords($this->input->post('state')),
				'postal_code' => $this->input->post('postal_code'),
				'address' => ucwords($this->input->post('address')),
				'mobile_phone' => $this->input->post('mobile_phone'),
				'office_phone' => $this->input->post('office_phone'),
				'fax' => $this->input->post('fax'),
				'pobox' => $this->input->post('pobox'),
				'url' => $this->input->post('url'),
				'is_branche' => $this->input->post('is_branche'),
				'head_office' => $this->input->post('is_branche') == 1 ? $this->input->post('head_office') : 0,
				'industry_type' => implode(',', (array) $this->input->post('industry_type')),
				'sales_agent' =>  implode(',', (array) $this->input->post('sales_agent')),
				'date_created' =>  date("Y-m-d H:i:s"),
			];
			

			
			$save_amuco_customers = $this->model_amuco_customers->store($save_data);


			if ($save_amuco_customers) {
				$save_data_tracer=array_merge($save_data,['id'=>$save_amuco_customers]);
				$this->insert_logs($save_data_tracer,'added');
			
				if ($this->input->post('save_type') == 'stay') {
					$this->data['success'] = true;
					$this->data['id'] 	   = $save_amuco_customers;
					$this->data['message'] = cclang('success_save_data_stay', [
						anchor('administrator/amuco_customers/edit/' . $save_amuco_customers, 'Edit Amuco Customers'),
						anchor('administrator/amuco_customers', ' Go back to list')
					]);
				} else {
					set_message(
						cclang('success_save_data_redirect', [
						anchor('administrator/amuco_customers/edit/' . $save_amuco_customers, 'Edit Amuco Customers')
					]), 'success');

            		$this->data['success'] = true;
					$this->data['redirect'] = base_url('administrator/amuco_customers');
				}
			} else {
				if ($this->input->post('save_type') == 'stay') {
					$this->data['success'] = false;
					$this->data['message'] = cclang('data_not_change');
				} else {
            		$this->data['success'] = false;
            		$this->data['message'] = cclang('data_not_change');
					$this->data['redirect'] = base_url('administrator/amuco_customers');
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
	* Update view Amuco Customerss
	*
	* @var $id String
	*/
	public function edit($id)
	{
		$this->is_allowed('amuco_customers_update');

		$this->data['amuco_customers'] = $this->model_amuco_customers->find($id);
		$this->data['head_office'] = $this->model_amuco_customers->get();
		$this->template->title('Amuco Customers Update');
		$this->render('backend/standart/administrator/amuco_customers/amuco_customers_update', $this->data);
	}

	/**
	* Update Amuco Customerss
	*
	* @var $id String
	*/
	public function edit_save($id)
	{
		if (!$this->is_allowed('amuco_customers_update', false)) {
			echo json_encode([
				'success' => false,
				'message' => cclang('sorry_you_do_not_have_permission_to_access')
				]);
			exit;
		}
		
		$this->form_validation->set_rules('name', 'Name', 'trim|required|max_length[50]');
		$this->form_validation->set_rules('active', 'Active', 'trim|required|max_length[1]');
		$this->form_validation->set_rules('code', 'Code', 'trim|required|max_length[50]');
		$this->form_validation->set_rules('nit', 'Nit', 'trim|max_length[50]');
		$this->form_validation->set_rules('email', 'Email', 'trim|max_length[100]');
		$this->form_validation->set_rules('country', 'Country', 'trim|required|max_length[11]');
		$this->form_validation->set_rules('city', 'City', 'trim|max_length[100]');
		$this->form_validation->set_rules('state', 'State', 'trim|max_length[100]');
		$this->form_validation->set_rules('postal_code', 'Postal Code', 'trim|max_length[20]');
		$this->form_validation->set_rules('address', 'Address', 'trim|max_length[100]');
		$this->form_validation->set_rules('mobile_phone', 'Mobile Phone', 'trim|max_length[30]');
		$this->form_validation->set_rules('office_phone', 'Office Phone', 'trim|max_length[30]');
		$this->form_validation->set_rules('fax', 'Fax', 'trim|max_length[30]');
		$this->form_validation->set_rules('pobox', 'Pobox', 'trim|max_length[50]');
		$this->form_validation->set_rules('url', 'Url', 'trim|max_length[100]');
		$this->form_validation->set_rules('is_branche', 'Branch', 'trim|required');
		$this->form_validation->set_rules('head_office', 'Head Office', 'trim|max_length[10]');
		$this->form_validation->set_rules('industry_type[]', 'Industry Type', 'trim|required|max_length[100]');
		$this->form_validation->set_rules('sales_agent[]', 'Sales Agent', 'trim|max_length[250]');
		
		if ($this->form_validation->run()) {
		
			$save_data = [
				'name' => ucwords($this->input->post('name')),
				'active' => $this->input->post('active'),
				'code' => ucwords($this->input->post('code')),
				'nit' => ucwords($this->input->post('nit')),
				'email' => $this->input->post('email'),
				'country' => $this->input->post('country'),
				'city' => ucwords($this->input->post('city')),
				'state' => ucwords($this->input->post('state')),
				'postal_code' => $this->input->post('postal_code'),
				'address' =>ucwords($this->input->post('address')),
				'mobile_phone' => $this->input->post('mobile_phone'),
				'office_phone' => $this->input->post('office_phone'),
				'fax' => $this->input->post('fax'),
				'pobox' => $this->input->post('pobox'),
				'url' => $this->input->post('url'),
				'is_branche' => $this->input->post('is_branche'),
				'head_office' => $this->input->post('is_branche') == 0 ? 0 : $this->input->post('head_office'),
				'industry_type' => implode(',', (array) $this->input->post('industry_type')),
				'sales_agent' => implode(',', (array) $this->input->post('sales_agent')), 
				'date_updated' => date("Y-m-d H:i:s"),
			];

						$data_output=$this->model_amuco_customers->find($id);
		    $save_amuco_customers = $this->model_amuco_customers->change($id, $save_data);

			if ($save_amuco_customers) {
				$save_data_tracer=array_merge($save_data,['id'=>$id]);
				$this->insert_logs($save_data_tracer,'updated',$data_output);
			
				if ($this->input->post('save_type') == 'stay') {
					$this->data['success'] = true;
					$this->data['id'] 	   = $id;
					$this->data['message'] = cclang('success_update_data_stay', [
						anchor('administrator/amuco_customers', ' Go back to list')
					]);
				} else {
					set_message(
						cclang('success_update_data_redirect', [
					]), 'success');

            		$this->data['success'] = true;
					$this->data['redirect'] = base_url('administrator/amuco_customers');
				}
			} else {
				if ($this->input->post('save_type') == 'stay') {
					$this->data['success'] = false;
					$this->data['message'] = cclang('data_not_change');
				} else {
            		$this->data['success'] = false;
            		$this->data['message'] = cclang('data_not_change');
					$this->data['redirect'] = base_url('administrator/amuco_customers');
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
	* delete Amuco Customerss
	*
	* @var $id String
	*/
	public function delete($id = null)
	{
		$this->is_allowed('amuco_customers_delete');

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
            set_message(cclang('has_been_deleted', 'amuco_customers'), 'success');
        } else {
            set_message(cclang('error_delete', 'amuco_customers'), 'error');
        }

		redirect_back();
	}

		/**
	* View view Amuco Customerss
	*
	* @var $id String
	*/
	public function view($id)
	{
		$this->is_allowed('amuco_customers_view');
		$filter = $this->input->get('q');
		$field 	= $this->input->get('f');

		$this->data['amuco_customers'] = $this->model_amuco_customers->join_avaiable()->filter_avaiable()->find($id);
		if(isset($this->data['amuco_customers']->head_office)){
			$id_head = $this->data['amuco_customers']->head_office;
			$this->data['head_office'] = $this->model_amuco_customers->join_avaiable()->filter_avaiable()->find($id_head);
		}
		//$this->data['credit_insurance'] = $this->model_amuco_credit_insurance->get_credit_customer($id);
		$this->data['credit_insurance'] = $this->model_amuco_credit_insurance->get($id,'customer_id', $this->limit_page);
		//var_dump(count($this->data['credit_insurance']));die;
		/*if(count($this->data['credit_insurance']) > 0){
			$this->data['credit_insurance'] = $this->data['credit_insurance'][0];
		}*/
		$this->data['customer_contact'] = $this->model_amuco_contacts->get_contacts($id, 'customer','customer_id');
	//	var_dump($this->data['customer_contact']);die;
		
		$this->data['customer_samples'] = $this->model_amuco_samples->get($id,'customer_id');

		$this->data['customer_visits'] = $this->model_amuco_visits->get($id,'customer_id');
		//var_dump($this->data['customer_visits']);die;
		$config = [
			'base_url'     => 'administrator/amuco_visits/index/',
			'total_rows'   => $this->model_amuco_visits->count_all($filter, $field),
			'per_page'     => $this->limit_page,
			'uri_segment'  => 4,
		];
      
		$this->data['pagination'] = $this->pagination($config);
		$this->template->title('Amuco Customers Detail');
		$this->render('backend/standart/administrator/amuco_customers/amuco_customers_view', $this->data);
	}
	
	/**
	* delete Amuco Customerss
	*
	* @var $id String
	*/
	private function _remove($id)
	{
		$amuco_customers = (array)$this->model_amuco_customers->find($id);
		$this->insert_logs($amuco_customers,'deleted');
	
		
		
		return $this->model_amuco_customers->remove($id);
	}
	
	
	/**
	* Export to excel
	*
	* @return Files Excel .xls
	*/
	public function export()
	{
		$this->is_allowed('amuco_customers_export');

		$this->model_amuco_customers->export('amuco_customers', 'amuco_customers');
	}

	/**
	* Export to PDF
	*
	* @return Files PDF .pdf
	*/
	public function export_pdf()
	{
		$this->is_allowed('amuco_customers_export');

		$this->model_amuco_customers->pdf('amuco_customers', 'amuco_customers');
	}


	public function single_pdf($id = null)
	{
		$this->is_allowed('amuco_customers_export');

		$table = $title = 'amuco_customers';
		$this->load->library('HtmlPdf');
      
        $config = array(
            'orientation' => 'p',
            'format' => 'a4',
            'marges' => array(5, 5, 5, 5)
        );

        $this->pdf = new HtmlPdf($config);
        $this->pdf->setDefaultFont('stsongstdlight'); 

        $result = $this->db->get($table);
       
        $data = $this->model_amuco_customers->find($id);
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


/* End of file amuco_customers.php */
/* Location: ./application/controllers/administrator/Amuco Customers.php */