<?php
defined('BASEPATH') OR exit('No direct script access allowed');


/**
*| --------------------------------------------------------------------------
*| Amuco Suppliers Controller
*| --------------------------------------------------------------------------
*| Amuco Suppliers site
*|
*/
class Amuco_suppliers extends Admin	
{
	
	public function __construct()
	{
		parent::__construct();

		$this->load->model('mw_logs/Log_table');
		$this->load->model('mw_logs/Tracer');
		$this->load->model('mw_logs/Io_types');
		$this->load->model('mw_logs/Integration_table');
		$this->load->model(['model_amuco_suppliers',
							'amuco_contacts/model_amuco_contacts',
							'amuco_visits/model_amuco_visits',
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
		$add_log = $this->Log_table->add_log($integration_id,$type_id,"Row # {$data_log['id']} {$action} in table amuco_suppliers",$user->id);
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
	* show all Amuco Supplierss
	*
	* @var $offset String
	*/
	public function index($offset = 0)
	{
		$this->is_allowed('amuco_suppliers_list');

		$filter = $this->input->get('q');
		$field 	= $this->input->get('f');

		$this->data['amuco_supplierss'] = $this->model_amuco_suppliers->get($filter, $field, $this->limit_page, $offset);
		$this->data['amuco_suppliers_counts'] = $this->model_amuco_suppliers->count_all($filter, $field);

		$config = [
			'base_url'     => 'administrator/amuco_suppliers/index/',
			'total_rows'   => $this->model_amuco_suppliers->count_all($filter, $field),
			'per_page'     => $this->limit_page,
			'uri_segment'  => 4,
		];

		$this->data['pagination'] = $this->pagination($config);

		$this->template->title('Amuco Suppliers List');
		$this->render('backend/standart/administrator/amuco_suppliers/amuco_suppliers_list', $this->data);
	}
	
	/**
	* Add new amuco_supplierss
	*
	*/
	public function add()
	{
		$this->is_allowed('amuco_suppliers_add');

		$this->template->title('Amuco Suppliers New');
		$this->render('backend/standart/administrator/amuco_suppliers/amuco_suppliers_add', $this->data);
	}

	/**
	* Add New Amuco Supplierss
	*
	* @return JSON
	*/
	public function add_save()
	{
		if (!$this->is_allowed('amuco_suppliers_add', false)) {
			echo json_encode([
				'success' => false,
				'message' => cclang('sorry_you_do_not_have_permission_to_access')
				]);
			exit;
		}

		$this->form_validation->set_rules('name', 'Name', 'trim|required|max_length[100]');
		$this->form_validation->set_rules('supplier_code', 'Supplier Code', 'trim|required|max_length[50]');
		$this->form_validation->set_rules('country', 'Country', 'trim|required|max_length[10]');
		$this->form_validation->set_rules('state', 'State', 'trim|max_length[100]');
		$this->form_validation->set_rules('city', 'City', 'trim|max_length[100]');
		$this->form_validation->set_rules('address', 'Address', 'trim|max_length[100]');
		$this->form_validation->set_rules('postal_code', 'Postal Code', 'trim|max_length[30]');
		$this->form_validation->set_rules('url', 'Url', 'trim|max_length[100]');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|max_length[100]');
		$this->form_validation->set_rules('mobile_phone', 'Mobile Phone', 'trim|required|max_length[30]');
		$this->form_validation->set_rules('office_phone', 'Office Phone', 'trim|max_length[30]');
		$this->form_validation->set_rules('fax', 'Fax', 'trim|max_length[30]');
		$this->form_validation->set_rules('payment_terms', 'Payment Terms', 'trim|max_length[250]');
		

		if ($this->form_validation->run()) {
		
			$save_data = [
				'name' => $this->input->post('name'),
				'supplier_code' => $this->input->post('supplier_code'),
				'country' => $this->input->post('country'),
				'state' => $this->input->post('state'),
				'city' => $this->input->post('city'),
				'address' => $this->input->post('address'),
				'postal_code' => $this->input->post('postal_code'),
				'url' => $this->input->post('url'),
				'email' => $this->input->post('email'),
				'mobile_phone' => $this->input->post('mobile_phone'),
				'office_phone' => $this->input->post('office_phone'),
				'fax' => $this->input->post('fax'),
				'payment_terms' => $this->input->post('payment_terms'),
				'classification_id' => implode(',', (array) $this->input->post('classification_id')),
				'date_created' =>  date("Y-m-d H:i:s"),
			];

			
			$save_amuco_suppliers = $this->model_amuco_suppliers->store($save_data);
            

			if ($save_amuco_suppliers) {
				$save_data_tracer=array_merge($save_data,['id'=>$save_amuco_suppliers]);
				$this->insert_logs($save_data_tracer,'added');
			
				if ($this->input->post('save_type') == 'stay') {
					$this->data['success'] = true;
					$this->data['id'] 	   = $save_amuco_suppliers;
					$this->data['message'] = cclang('success_save_data_stay', [
						anchor('administrator/amuco_suppliers/edit/' . $save_amuco_suppliers, 'Edit Amuco Suppliers'),
						anchor('administrator/amuco_suppliers', ' Go back to list')
					]);
				} else {
					set_message(
						cclang('success_save_data_redirect', [
						anchor('administrator/amuco_suppliers/edit/' . $save_amuco_suppliers, 'Edit Amuco Suppliers')
					]), 'success');

            		$this->data['success'] = true;
					$this->data['redirect'] = base_url('administrator/amuco_suppliers');
				}
			} else {
				if ($this->input->post('save_type') == 'stay') {
					$this->data['success'] = false;
					$this->data['message'] = cclang('data_not_change');
				} else {
            		$this->data['success'] = false;
            		$this->data['message'] = cclang('data_not_change');
					$this->data['redirect'] = base_url('administrator/amuco_suppliers');
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
	* Update view Amuco Supplierss
	*
	* @var $id String
	*/
	public function edit($id)
	{
		$this->is_allowed('amuco_suppliers_update');

		$this->data['amuco_suppliers'] = $this->model_amuco_suppliers->find($id);

		$this->template->title('Amuco Suppliers Update');
		$this->render('backend/standart/administrator/amuco_suppliers/amuco_suppliers_update', $this->data);
	}

	/**
	* Update Amuco Supplierss
	*
	* @var $id String
	*/
	public function edit_save($id)
	{
		if (!$this->is_allowed('amuco_suppliers_update', false)) {
			echo json_encode([
				'success' => false,
				'message' => cclang('sorry_you_do_not_have_permission_to_access')
				]);
			exit;
		}
		
		$this->form_validation->set_rules('name', 'Name', 'trim|required|max_length[100]');
		$this->form_validation->set_rules('active', 'Active', 'trim|required|max_length[1]');
		$this->form_validation->set_rules('supplier_code', 'Supplier Code', 'trim|required|max_length[50]');
		$this->form_validation->set_rules('country', 'Country', 'trim|required|max_length[10]');
		$this->form_validation->set_rules('state', 'State', 'trim|max_length[100]');
		$this->form_validation->set_rules('city', 'City', 'trim|max_length[100]');
		$this->form_validation->set_rules('address', 'Address', 'trim|max_length[100]');
		$this->form_validation->set_rules('postal_code', 'Postal Code', 'trim|max_length[30]');
		$this->form_validation->set_rules('url', 'Url', 'trim|max_length[100]');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|max_length[100]');
		$this->form_validation->set_rules('mobile_phone', 'Mobile Phone', 'trim|required|max_length[30]');
		$this->form_validation->set_rules('office_phone', 'Office Phone', 'trim|max_length[30]');
		$this->form_validation->set_rules('fax', 'Fax', 'trim|max_length[30]');
		$this->form_validation->set_rules('payment_terms', 'Payment Terms', 'trim|max_length[250]');
		
		if ($this->form_validation->run()) {
		
			$save_data = [
				'name' => $this->input->post('name'),
				'active' => $this->input->post('active'),
				'supplier_code' => $this->input->post('supplier_code'),
				'country' => $this->input->post('country'),
				'state' => $this->input->post('state'),
				'city' => $this->input->post('city'),
				'address' => $this->input->post('address'),
				'postal_code' => $this->input->post('postal_code'),
				'url' => $this->input->post('url'),
				'email' => $this->input->post('email'),
				'mobile_phone' => $this->input->post('mobile_phone'),
				'office_phone' => $this->input->post('office_phone'),
				'fax' => $this->input->post('fax'),
				'payment_terms' => $this->input->post('payment_terms'),
				'classification_id' => implode(',', (array) $this->input->post('classification_id')),
				'date_updated' => date("Y-m-d H:i:s"),
			];

						$data_output=$this->model_amuco_suppliers->find($id);
		    $save_amuco_suppliers = $this->model_amuco_suppliers->change($id, $save_data);

			if ($save_amuco_suppliers) {
				$save_data_tracer=array_merge($save_data,['id'=>$id]);
				$this->insert_logs($save_data_tracer,'updated',$data_output);
			
				if ($this->input->post('save_type') == 'stay') {
					$this->data['success'] = true;
					$this->data['id'] 	   = $id;
					$this->data['message'] = cclang('success_update_data_stay', [
						anchor('administrator/amuco_suppliers', ' Go back to list')
					]);
				} else {
					set_message(
						cclang('success_update_data_redirect', [
					]), 'success');

            		$this->data['success'] = true;
					$this->data['redirect'] = base_url('administrator/amuco_suppliers');
				}
			} else {
				if ($this->input->post('save_type') == 'stay') {
					$this->data['success'] = false;
					$this->data['message'] = cclang('data_not_change');
				} else {
            		$this->data['success'] = false;
            		$this->data['message'] = cclang('data_not_change');
					$this->data['redirect'] = base_url('administrator/amuco_suppliers');
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
	* delete Amuco Supplierss
	*
	* @var $id String
	*/
	public function delete($id = null)
	{
		$this->is_allowed('amuco_suppliers_delete');

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
            set_message(cclang('has_been_deleted', 'amuco_suppliers'), 'success');
        } else {
            set_message(cclang('error_delete', 'amuco_suppliers'), 'error');
        }

		redirect_back();
	}

		/**
	* View view Amuco Supplierss
	*
	* @var $id String
	*/
	public function view($id)
	{
		
		$this->is_allowed('amuco_suppliers_view');
        $filter = $this->input->get('q');
		$field 	= $this->input->get('f');
		$this->data['amuco_suppliers'] = $this->model_amuco_suppliers->join_avaiable()->filter_avaiable()->find($id);
		$this->data['supplier_visits'] = $this->model_amuco_visits->get($id,'supplier_id');
		$this->data['supplier_contacts'] = $this->model_amuco_contacts->get_contacts($id, 'Supplier','supplier_id');
		$config = [
			'base_url'     => 'administrator/amuco_visits/index/',
			'total_rows'   => $this->model_amuco_visits->count_all($filter, $field),
			'per_page'     => $this->limit_page,
			'uri_segment'  => 4,
		];

		$this->data['pagination'] = $this->pagination($config);
		$this->template->title('Amuco Suppliers Detail');
		$this->render('backend/standart/administrator/amuco_suppliers/amuco_suppliers_view', $this->data);
	}
	
	/**
	* delete Amuco Supplierss
	*
	* @var $id String
	*/
	private function _remove($id)
	{
		$amuco_suppliers = (array)$this->model_amuco_suppliers->find($id);
		$this->insert_logs($amuco_suppliers,'deleted');
	
		
		
		return $this->model_amuco_suppliers->remove($id);
	}
	
	
	/**
	* Export to excel
	*
	* @return Files Excel .xls
	*/
	public function export()
	{
		$this->is_allowed('amuco_suppliers_export');

		$this->model_amuco_suppliers->export('amuco_suppliers', 'amuco_suppliers');
	}

	/**
	* Export to PDF
	*
	* @return Files PDF .pdf
	*/
	public function export_pdf()
	{
		$this->is_allowed('amuco_suppliers_export');

		$this->model_amuco_suppliers->pdf('amuco_suppliers', 'amuco_suppliers');
	}


	public function single_pdf($id = null)
	{
		$this->is_allowed('amuco_suppliers_export');

		$table = $title = 'amuco_suppliers';
		$this->load->library('HtmlPdf');
      
        $config = array(
            'orientation' => 'p',
            'format' => 'a4',
            'marges' => array(5, 5, 5, 5)
        );

        $this->pdf = new HtmlPdf($config);
        $this->pdf->setDefaultFont('stsongstdlight'); 

        $result = $this->db->get($table);
       
        $data = $this->model_amuco_suppliers->find($id);
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


/* End of file amuco_suppliers.php */
/* Location: ./application/controllers/administrator/Amuco Suppliers.php */