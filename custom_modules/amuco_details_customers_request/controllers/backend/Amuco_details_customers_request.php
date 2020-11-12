<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
*| --------------------------------------------------------------------------
*| Amuco Details Customers Request Controller
*| --------------------------------------------------------------------------
*| Amuco Details Customers Request site
*|
*/
class Amuco_details_customers_request extends Admin	
{
	
	public function __construct()
	{
		parent::__construct();

		$this->load->model('mw_logs/Log_table');
		$this->load->model('mw_logs/Tracer');
		$this->load->model('mw_logs/Io_types');
		$this->load->model('mw_logs/Integration_table');
		$this->load->model('model_amuco_details_customers_request');
		$this->load->model(['amuco_customer_request/model_amuco_customer_request',
							'amuco_contacts/model_amuco_contacts',
							'amuco_details_request_office/model_amuco_details_request_office'
							]);

		$this->load->model(['mw_message_templates/model_mw_message_templates'=> "message_template"]);
		$this->load->model(['mw_message_templates/model_mw_message_types'=> "message_types"]);
		$this->load->library('notification');
		$this->load->model('models/model_mw_notifications');
		$this->load->model('models/model_mw_notification_types');
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
		$add_log = $this->Log_table->add_log($integration_id,$type_id,"Row # {$data_log['id']} {$action} in table amuco_details_customers_request",$user->id);
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
	* show all Amuco Details Customers Requests
	*
	* @var $offset String
	*/
	public function index($offset = 0)
	{
		$this->is_allowed('amuco_details_customers_request_list');

		$filter = $this->input->get('q');
		$field 	= $this->input->get('f');

		$this->data['amuco_details_customers_requests'] = $this->model_amuco_details_customers_request->get($filter, $field, $this->limit_page, $offset);
		$this->data['amuco_details_customers_request_counts'] = $this->model_amuco_details_customers_request->count_all($filter, $field);

		$config = [
			'base_url'     => 'administrator/amuco_details_customers_request/index/',
			'total_rows'   => $this->model_amuco_details_customers_request->count_all($filter, $field),
			'per_page'     => $this->limit_page,
			'uri_segment'  => 4,
		];

		$this->data['pagination'] = $this->pagination($config);

		$this->template->title('Amuco Details Customers Request List');
		$this->render('backend/standart/administrator/amuco_details_customers_request/amuco_details_customers_request_list', $this->data);
	}
	
	/**
	* Add new amuco_details_customers_requests
	*
	*/
	public function add()
	{
		$this->is_allowed('amuco_details_customers_request_add');

		$this->template->title('Amuco Details Customers Request New');
		$this->render('backend/standart/administrator/amuco_details_customers_request/amuco_details_customers_request_add', $this->data);
	}

	/**
	* Add New Amuco Details Customers Requests
	*
	* @return JSON
	*/
	public function add_save()
	{
		//var_dump($this->input->post());die;
		if (!$this->is_allowed('amuco_details_customers_request_add', false)) {
			echo json_encode([
				'success' => false,
				'message' => cclang('sorry_you_do_not_have_permission_to_access')
				]);
			exit;
		}

		$this->form_validation->set_rules('product_id', 'Product Id', 'trim|required|max_length[10]');
		$this->form_validation->set_rules('customer_request_id', 'Customer Request Id', 'trim|required|max_length[10]');
		$this->form_validation->set_rules('quantity', 'Quantity', 'trim|max_length[10]');
		$this->form_validation->set_rules('unit', 'Unit', 'trim|max_length[10]');
		//$this->form_validation->set_rules('status', 'Status', 'trim|required|max_length[50]');
		$this->form_validation->set_rules('fcl', 'Fcl', 'trim|max_length[20]');
		$this->form_validation->set_rules('weight', 'Weight', 'trim|max_length[20]');
		//$this->form_validation->set_rules('packing', 'Packing', 'trim|max_length[20]');
		$this->form_validation->set_rules('material', 'Material', 'trim|max_length[20]');
		$this->form_validation->set_rules('specific_remarks', 'Specific Remarks', 'trim|max_length[250]');
		if($this->input->post('supplier') == null){
			$this->form_validation->set_rules('purchasing[]', 'Purchasing', 'trim|required|max_length[20]');
		}else{
			$this->form_validation->set_rules('supplier', 'Supplier', 'trim|required|max_length[20]');
		}
		
		if ($this->form_validation->run()) {
			$save_data_purchasing = [];
			if($this->input->post('supplier') != null){
				$save_data = [
					'product_id' => $this->input->post('product_id'),
					'customer_request_id' => $this->input->post('customer_request_id'),
					'quantity' => $this->input->post('quantity'),
					'unit' => $this->input->post('unit'),
					'status' => 'New',
					'fcl' => $this->input->post('fcl'),
					'fcl_option' =>  $this->input->post('fcl_option'),
					'type_fcl' => $this->input->post('type_fcl'),
					'weight' => $this->input->post('weight'),
					'unit_pack' => $this->input->post('unit_pack'),
					'packing' => $this->input->post('packing') == null ?  "" : $this->input->post('packing') ,
					'material' => $this->input->post('material'),
					'specific_remarks' => $this->input->post('specific_remarks'),
					'pallets' => $this->input->post('pallets'),
					'supplier' => $this->input->post('supplier'),
					'contacts' => implode(',', (array) $this->input->post('contact_supplier')),
					'purchasing' => $this->input->post('purchasing'),
					'ETD' => $this->input->post('etd'),
					'ETA' => $this->input->post('eta'),
					'date_created' =>  date("Y-m-d H:i:s"),
				];
				$save_amuco_details_customers_request = $this->model_amuco_details_customers_request->store($save_data);
			}else{
				
				$i = 0;
				foreach($this->input->post('purchasing') as $item){
					$save_data = [
						'product_id' => $this->input->post('product_id'),
						'customer_request_id' => $this->input->post('customer_request_id'),
						'quantity' => $this->input->post('quantity'),
						'unit' => $this->input->post('unit'),
						'status' => 'New',
						'fcl' => $this->input->post('fcl'),
						'fcl_option' => trim($this->input->post('fcl')) == "" ? null : $this->input->post('fcl_option'),
						'type_fcl' => $this->input->post('type_fcl'),
						'weight' => $this->input->post('weight'),
						'unit_pack' => $this->input->post('unit_pack'),
						'packing' => $this->input->post('packing') == null ?  "" : $this->input->post('packing') ,
						'material' => $this->input->post('material'),
						'specific_remarks' => $this->input->post('specific_remarks'),
						'pallets' => $this->input->post('pallets'),
						'supplier' => $this->input->post('supplier'),
						'contacts' => implode(',', (array) $this->input->post('contact_supplier')),
						'purchasing' => $item,
						'ETD' => $this->input->post('etd'),
						'ETA' => $this->input->post('etd'),
						'date_created' =>  date("Y-m-d H:i:s"),
					];
					$save_amuco_details_customers_request = $this->model_amuco_details_customers_request->store($save_data);
					$save_data_purchasing[$i] = $save_amuco_details_customers_request;
					$i++;
				}
			}
			if ($save_amuco_details_customers_request) {
				$save_data_tracer=array_merge($save_data,['id'=>$save_amuco_details_customers_request]);
				$this->insert_logs($save_data_tracer,'added');
			
				if ($this->input->post('save_type') == 'stay') {
					$this->data['success'] = true;
					$this->data['id'] 	   = $save_amuco_details_customers_request;
					if(count($save_data_purchasing) > 0){
						$i=0;
						foreach($save_data_purchasing as $item){
							$this->data['amuco_details_customers_request'][$i] = $this->model_amuco_details_customers_request->get($item,'id')[0];
						    $i++;
						}
					}else{
                        $this->data['amuco_details_customers_request'] = $this->model_amuco_details_customers_request->get($save_amuco_details_customers_request,'id');
					}
					$this->data['message'] = cclang('success_save_data_stay', [
						anchor('administrator/amuco_details_customers_request/edit/' . $save_amuco_details_customers_request, 'Edit Amuco Details Customers Request'),
						anchor('administrator/amuco_details_customers_request', ' Go back to list')
					]);
				} else {
					set_message(
						cclang('success_save_data_redirect', [
						anchor('administrator/amuco_details_customers_request/edit/' . $save_amuco_details_customers_request, 'Edit Amuco Details Customers Request')
					]), 'success');

            		$this->data['success'] = true;
					$this->data['redirect'] = base_url('administrator/amuco_details_customers_request');
				}
			} else {
				if ($this->input->post('save_type') == 'stay') {
					$this->data['success'] = false;
					$this->data['message'] = cclang('data_not_change');
				} else {
            		$this->data['success'] = false;
            		$this->data['message'] = cclang('data_not_change');
					$this->data['redirect'] = base_url('administrator/amuco_details_customers_request');
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
	* Update view Amuco Details Customers Requests
	*
	* @var $id String
	*/
	public function edit($id)
	{
		$this->is_allowed('amuco_details_customers_request_update');

		$this->data['amuco_details_customers_request'] = $this->model_amuco_details_customers_request->get($id,'id')[0];
		$this->template->title('Amuco Details Customers Request Update');
		$this->render('backend/standart/administrator/amuco_details_customers_request/amuco_details_customers_request_update', $this->data);
	}

	/**
	* Update Amuco Details Customers Requests
	*
	* @var $id String
	*/
	public function edit_save($id)
	{
		
		if (!$this->is_allowed('amuco_details_customers_request_update', false)) {
			echo json_encode([
				'success' => false,
				'message' => cclang('sorry_you_do_not_have_permission_to_access')
				]);
			exit;
		}
		
		$this->form_validation->set_rules('product_id', 'Product Id', 'trim|required|max_length[10]');
		$this->form_validation->set_rules('customer_request_id', 'Customer Request Id', 'trim|required|max_length[10]');
		$this->form_validation->set_rules('quantity', 'Quantity', 'trim|max_length[10]');
		$this->form_validation->set_rules('unit', 'Unit', 'trim|max_length[10]');
		$this->form_validation->set_rules('status', 'Status', 'trim|max_length[50]');
		$this->form_validation->set_rules('fcl', 'Fcl', 'trim|max_length[20]');
		$this->form_validation->set_rules('weight', 'Weight', 'trim|max_length[20]');
		$this->form_validation->set_rules('packing', 'Packing', 'trim|max_length[20]');
		$this->form_validation->set_rules('material', 'Material', 'trim|max_length[20]');
		$this->form_validation->set_rules('specific_remarks', 'Specific Remarks', 'trim|max_length[250]');
		
		if ($this->form_validation->run()) {
		    
			$save_data = [
				'product_id' => $this->input->post('product_id'),
				'customer_request_id' => $this->input->post('customer_request_id'),
				'quantity' => $this->input->post('quantity'),
				'unit' => $this->input->post('unit'),
				'status' =>'New',
				'fcl' => $this->input->post('fcl'),
				'weight' => $this->input->post('weight'),
				'packing' => $this->input->post('packing'),
				'material' => $this->input->post('material'),
				'specific_remarks' => $this->input->post('specific_remarks'),
				'fcl_option' => $this->input->post('fcl_option'),
				'type_fcl' => $this->input->post('type_fcl'),
				'pallets' => $this->input->post('pallets'),
				'unit_pack' => $this->input->post('unit_pack'),
				'supplier' => $this->input->post('supplier'),
				'purchasing' => implode(',', (array) $this->input->post('purchasing')),
				'contacts' =>  implode(',', (array) $this->input->post('contact_supplier')),
				'ETD' => $this->input->post('etd'),
				'ETA' => $this->input->post('eta'),
				//'date_created' => $this->input->post('date_created'),
				'date_updated' =>  date("Y-m-d H:i:s"),
			];

			$data_output=$this->model_amuco_details_customers_request->find($id);
		    $save_amuco_details_customers_request = $this->model_amuco_details_customers_request->change($id, $save_data);

			if ($save_amuco_details_customers_request) {
				$save_data_tracer=array_merge($save_data,['id'=>$id]);
				$this->insert_logs($save_data_tracer,'updated',$data_output);
			
				if ($this->input->post('save_type') == 'stay') {
					$this->data['success'] = true;
					$this->data['id'] 	   = $id;
					$this->data['message'] = cclang('success_update_data_stay', [
						anchor('administrator/amuco_details_customers_request', ' Go back to list')
					]);
				} else {
					set_message(
						cclang('success_update_data_redirect', [
					]), 'success');

            		$this->data['success'] = true;
					$this->data['redirect'] = base_url('administrator/amuco_customer_request/edit/'.$this->input->post('customer_request_id'));
				}
			} else {
				if ($this->input->post('save_type') == 'stay') {
					$this->data['success'] = false;
					$this->data['message'] = cclang('data_not_change');
				} else {
            		$this->data['success'] = false;
            		$this->data['message'] = cclang('data_not_change');
					$this->data['redirect'] = base_url('administrator/amuco_customer_request/edit/'.$this->input->post('customer_request_id'));
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

	public function return_request_office($id){
		//var_dump($id);die;	
		if($id != null && $this->input->post('details_id') != null){
			$details_id = $this->input->post('details_id');
			$data_output=$this->model_amuco_details_customers_request->find($details_id);
			$count = $data_output->return_count + 1;
			$save_data = [
				'status' => 'Requested '.$count,
				'return_count'=> $count,
				'date_updated' =>  date("Y-m-d H:i:s"),
			];
			var_dump($save_data);
			$save_amuco_details = $this->model_amuco_details_customers_request->change($details_id, $save_data);
			if ($save_amuco_details) {
				$save_data_tracer=array_merge($save_data,['id'=>$details_id]);
				$this->insert_logs($save_data_tracer,'updated',$data_output);
				$update_price_details = [
					'status' => 'Review',
					'date_updated' =>  date("Y-m-d H:i:s"),
				];
				$data_output_2=$this->model_amuco_details_request_office->find($id);
				$save_update =  $this->model_amuco_details_request_office->change($id, $update_price_details);
				if($save_update){
					$this->data['success'] = true;
					$this->data['id_details'] 	   = $details_id;
					$this->data['id_details_price'] = $id;
					$this->data['message'] = cclang('success_update_data_stay');
				}else{
					$this->data['success'] = false;
				    $this->data['message'] = cclang('data_not_change_price');
				}
				
			}else{
				$this->data['success'] = false;
				$this->data['message'] = cclang('data_not_change');
			}	
		
			
		}
		echo json_encode($this->data);
		exit;
	}
	
	/**
	* delete Amuco Details Customers Requests
	*
	* @var $id String
	*/
	public function delete($id = null)
	{
		$this->is_allowed('amuco_details_customers_request_delete');

		$this->load->helper('file');

		$arr_id = $this->input->get('id');
		$remove = false;

		if (!empty($id)) {
			$remove = $this->_remove($id);
			$this->model_amuco_details_request_office->delete_items_reques_id('details_customer_request_id',$id);
		} elseif (count($arr_id) >0) {
			foreach ($arr_id as $id) {
				$remove = $this->_remove($id);
			}
		}

		if ($remove) {
            set_message(cclang('has_been_deleted', 'amuco_details_customers_request'), 'success');
        } else {
            set_message(cclang('error_delete', 'amuco_details_customers_request'), 'error');
        }

		redirect_back();
	}

		/**
	* View view Amuco Details Customers Requests
	*
	* @var $id String
	*/
	public function view($id)
	{
		$this->is_allowed('amuco_details_customers_request_view');
      
		$this->data['amuco_details_customers_request'] = $this->model_amuco_details_customers_request->join_avaiable()->filter_avaiable()->find($id);
	
		if($this->data['amuco_details_customers_request']){
			$this->data['amuco_customer_request'] = $this->model_amuco_customer_request->join_avaiable()->filter_avaiable()->find($this->data['amuco_details_customers_request']->customer_request_id);
		}
		//var_dump($this->data['amuco_details_customers_request'] );die;
		$this->template->title('Amuco Details Customers Request Detail');
		$this->render('backend/standart/administrator/amuco_details_customers_request/amuco_details_customers_request_view', $this->data);
	}
	
	/**
	* delete Amuco Details Customers Requests
	*
	* @var $id String
	*/
	private function _remove($id)
	{
		$amuco_details_customers_request = (array)$this->model_amuco_details_customers_request->find($id);
		$this->insert_logs($amuco_details_customers_request,'deleted');
	
		
		
		return $this->model_amuco_details_customers_request->remove($id);
	}
	
	
	/**
	* Export to excel
	*
	* @return Files Excel .xls
	*/
	public function export()
	{
		$this->is_allowed('amuco_details_customers_request_export');

		$this->model_amuco_details_customers_request->export('amuco_details_customers_request', 'amuco_details_customers_request');
	}

	/**
	* Export to PDF
	*
	* @return Files PDF .pdf
	*/
	public function export_pdf()
	{
		$this->is_allowed('amuco_details_customers_request_export');

		$this->model_amuco_details_customers_request->pdf('amuco_details_customers_request', 'amuco_details_customers_request');
	}


	public function single_pdf($id = null)
	{
		$this->is_allowed('amuco_details_customers_request_export');

		$table = $title = 'amuco_details_customers_request';
		$this->load->library('HtmlPdf');
      
        $config = array(
            'orientation' => 'p',
            'format' => 'a4',
            'marges' => array(5, 5, 5, 5)
        );

        $this->pdf = new HtmlPdf($config);
        $this->pdf->setDefaultFont('stsongstdlight'); 

        $result = $this->db->get($table);
       
        $data = $this->model_amuco_details_customers_request->find($id);
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

	public function preview_notification()
	{
		//$this->is_allowed('amuco_details_customers_preview_notification');
		$details_req = $this->input->post('details_req');

		$details = $this->model_amuco_details_customers_request->get_in($details_req,'id');

		$customer_request =  $this->model_amuco_customer_request->get($details[0]->customer_request_id,'id');

		$this->data['success'] = true;
		$this->data['datails_req'] = $details_req;
		$this->data['details'] = $details;
		$this->data['customer_request'] = $details;

		echo json_encode($this->data);
		exit;
	}

	public function items_notification(){
		//$this->is_allowed('amuco_details_customers_send_email');
		$request_id  = $this->input->post('request_id');

		$customer_request =  $this->model_amuco_customer_request->get($request_id,'id')[0];

		$details = $this->model_amuco_details_customers_request->get_items($request_id,'customer_request_id');

		$this->db->select('*');
		$this->db->distinct('contacts');
		$this->db->where('customer_request_id', $customer_request->id);
		$this->db->where('supplier is not null');
        $this->db->where(' (notification_send="new" or notification_send is NULL or notification_send="" )');
		$this->db->order_by('contacts');
		$this->db->group_by('contacts');
		$contacts = $this->db->get('amuco_details_customers_request');

		$details_contact=[];
		//ordeno los registros segun contactos
		foreach ($contacts->result() as $key => $contact) {
			
			foreach ($details as $k => $item) {
			
				if($item->ETD){
					$item->ETD = date("d.M.Y", strtotime($item->ETD));
				}

				if($item->ETA){
					$item->ETA = date("d.M.Y", strtotime($item->ETA));
				}

				if(($contact->supplier == $item->supplier)){
					$details_contact[$key][] = $item;
				}
			}
		}

		$message_no = ""; 
		if(count($details_contact) == 0){
			$message_no = cclang('message_no');
		}

		$this->data['success'] = true;
		$this->data['contactos'] = $details_contact;
		$this->data['customer_request'] = $customer_request;
		$this->data['message_no'] = $message_no;

		echo json_encode($this->data);
		exit;
	}


	public function send_email(){
		//$this->is_allowed('amuco_details_customers_send_email');
		$arr_details = $this->input->post('arr_details');
		$request_id  = $this->input->post('request_id'); 


		$details = $this->model_amuco_details_customers_request->get_in($arr_details,'id');

		//Cuerpo del mensaje
		$email_message   = $this->input->post('email_text');
		$title_email = $this->input->post('subject');
		$recipients = $this->input->post('recipients');

  		$recipients = str_replace(';',',' ,$recipients);

		$user_id = $this->session->userdata('id');

		
		$email_data=[
			'sender' => 'project@ztgroupcorp.com',
			'recipients' => $recipients,
			'reply_to' => get_option('email')
		];

		try {
			$send = $this->notification->send('EMAIL', $user_id, $email_message, $title_email, $email_data);


			//no enviada
			$data_update = [];
			$data_update_details = [];

			if($send["estatus"] == -1){
				$data_update = [
					"entity" => "amuco_details_customers_request",
					"value"  => implode(",", $arr_details),
					"status" => "failed"
				];

				$data_update_details = [
					"notification_send" => "pending"
				];

				$this->model_mw_notifications->change($send["id"], $data_update);

				//actualizo la tabla amuco_details_customers_request
				foreach ($details as $key => $item) {
					$this->model_amuco_details_customers_request->change($item->id,$data_update_details);
				}

			}else{

				$data_update = [
					"entity" => "amuco_details_customers_request",
					"value"  => implode(",", $arr_details),
					"status" => "send"
				];

				$data_update_details = [
					"notification_send" => "send"
				];

				$this->model_mw_notifications->change($send, $data_update);

				//actualizo la tabla amuco_details_customers_request
				foreach ($details as $key => $item) {
					$this->model_amuco_details_customers_request->change($item->id,$data_update_details);
				}
			}

			$this->data['success'] = true;
			$this->data['message'] = cclang('notification_email');

			echo json_encode($this->data);
			exit;

		} catch (Exception $e) {

			$this->data['success'] = false;
			$this->data['message'] = cclang('notification_fails');

			echo json_encode($this->data);
			exit;
		}


	}
	
	/*public function send_email()
	{
		//$this->is_allowed('amuco_details_customers_send_email');
		$arr_details = $this->input->get('arr_details');
		$request_id  = $this->input->get('request_id'); 

		$details = $this->model_amuco_details_customers_request->get_in($arr_details,'id');

		$customer_request =  $this->model_amuco_customer_request->get($request_id,'id')[0];

		//armar email
		 $integration_id=$this->Integration_table->get_from_destination('System',1)[0]->id;
		
		$message_type=$this->message_types->get_message_types_id('EMAIL')['id'];
		

		$this->db->select('template');
		$this->db->where('message_code', 'AMU_REQ_ADDPRICE_001');
		$email_template = json_decode($this->db->get('mw_message_templates')->row()->template);
   

		$email_message   = $email_template->body;

		//variables
		$amuco_customer_request = cclang('customer_request_id');
		$amuco_customer_request_id = $customer_request->id;

		$email_message   = str_replace('%%amuco_customer_request%%',$amuco_customer_request,$email_message);
		$email_message   = str_replace('%%amuco_customer_request_id%%',$amuco_customer_request_id,$email_message);


		$customer = cclang('customer');
		$customers_name = $customer_request->amuco_customers_name;

		$email_message   = str_replace('%%customer%%',$customer,$email_message);
		$email_message   = str_replace('%%customers_name%%',$customers_name,$email_message);


		$destination_port = cclang('destination_port');
		$destination_port_name = $customer_request->amuco_destination_port_name;

		$email_message   = str_replace('%%destination_port%%',$destination_port,$email_message);
		$email_message   = str_replace('%%destination_port_name%%',$destination_port_name,$email_message);

		$contact = cclang('contact');
		$contacts_name = $customer_request->amuco_contacts_name;

		$email_message   = str_replace('%%contact%%',$contact,$email_message);
		$email_message   = str_replace('%%contact_name%%',$contacts_name,$email_message);

		$sales_agent = cclang('sales_agent');
		$aauth_users_username = $customer_request->aauth_users_username;

		$email_message   = str_replace('%%sales_agent%%',$sales_agent,$email_message);
		$email_message   = str_replace('%%aauth_users_username%%',$aauth_users_username,$email_message);


		$combined_container = cclang('combined_container');
		$combinate_container_value = ($customer_request->combinate_container ==1? cclang('YES') : cclang('NOT'));

		$email_message   = str_replace('%%combined_container%%',$combined_container,$email_message);
		$email_message   = str_replace('%%combinate_container_value%%',$combinate_container_value,$email_message);


		$incoterm = cclang('incoterm');
		$amuco_incoterm_name = $customer_request->amuco_incoterm_name;

		$email_message   = str_replace('%%incoterm%%',$incoterm,$email_message);
		$email_message   = str_replace('%%amuco_incoterm_name%%',$amuco_incoterm_name,$email_message);


		$remarks = cclang('remarks');
		$remarks_value =  $customer_request->remarks;

		$email_message   = str_replace('%%remarks%%',$remarks,$email_message);
		$email_message   = str_replace('%%remarks_value%%',$remarks_value,$email_message);

		
		$note_email = cclang('email_note');
		$email_value = get_option('email');

		$email_message   = str_replace('%%note_email%%',$note_email,$email_message);
		$email_message   = str_replace('%%email_value%%',$email_value,$email_message);



		$table_data="";
		$recipients ='';

		 $tabla_head ='<table>
            <tr class="heading heading-p" >
                <td width="30%" style="text-align: left;">
                   '.cclang('product').'
                </td>
                <td width="15%"  style="text-align: left;">
                    '.cclang('quantity').'
                </td>
                <td width="15%"  style="text-align: left;">
                    '.cclang('supplier').'
                </td>
                <td  width="15%" style="text-align: left;">
                    '.cclang('office').'
                </td>
                <td  width="15%" style="text-align: left;">
                    '.cclang('contact').'
                </td>
                <td  width="15%" style="text-align: left;">
                   '.cclang('status').'
                </td>
            </tr>';

        $i = 0;
		foreach ($details as $key => $item) {

			if($item->amuco_suppliers_email !== ''){
                $email = $item->amuco_suppliers_email; 
            }
	        if($item->amuco_suppliers_email == ''){
	            $email = $item->purchasing_email;
	        }

	

	        $recipients = $email; 
	        $class ='';

	      	if($i % 2 == 0){
	      		$class="";
	      	}else{
	      		$class="background-color:#F1F1F1 !important;";
	      	}

			$table_data.= '<tr style="'.$class.'">
                                <td>
                                   <span style="text-align: left">
                                   <small>'.$item->amuco_products_name.'</small>
                                </td>
                                <td style="text-align: left">'.$item->quantity.'</td>
                                <td style="text-align: left">'.$item->amuco_suppliers_name.'</td>
                                <td style="text-align: left">'.$item->purchasing_username.'</td>
                                <td style="text-align: left">'.$email.'</td>
                                <td style="text-align: left">'.$item->status.'</td>
                             </tr>';
            $i++;
		}

		$tabla_def=$tabla_head.$table_data.'</table>';

		
		$email_message   = str_replace('%%tabla%%',$tabla_def,$email_message);


		$email_data=[
			'sender' => 'project@ztgroupcorp.com',
			'recipients' => $recipients,
			'reply_to' => get_option('email')
		];

		$user_id = $this->session->userdata('id');
		$title_email = cclang('notification_title');

		try {
			$send = $this->notification->send('EMAIL', $user_id, $email_message, $title_email, $email_data);


			//no enviada
			$data_update = [];
			$data_update_details = [];

			if($send["estatus"] == -1){
				$data_update = [
					"entity" => "amuco_details_customers_request",
					"value"  => implode(",", $arr_details),
					"status" => "failed"
				];

				$data_update_details = [
					"notification_send" => "pending"
				];

				$this->model_mw_notifications->change($send["id"], $data_update);

				//actualizo la tabla amuco_details_customers_request
				foreach ($details as $key => $item) {
					$this->model_amuco_details_customers_request->change($item->id,$data_update_details);
				}

			}else{

				$data_update = [
					"entity" => "amuco_details_customers_request",
					"value"  => implode(",", $arr_details),
					"status" => "send"
				];

				$data_update_details = [
					"notification_send" => "send"
				];

				$this->model_mw_notifications->change($send, $data_update);

				//actualizo la tabla amuco_details_customers_request
				foreach ($details as $key => $item) {
					$this->model_amuco_details_customers_request->change($item->id,$data_update_details);
				}
			}

			$this->data['success'] = true;
			$this->data['message'] = cclang('notification_email');

			echo json_encode($this->data);
			exit;

		} catch (Exception $e) {

			$this->data['success'] = false;
			$this->data['message'] = cclang('notification_fails');

			echo json_encode($this->data);
			exit;
		}
	
	}*/


	public function cancel_send_email(){

		//$this->is_allowed('amuco_details_customers_send_email');
		$arr_details = $this->input->post('arr_details');
		$request_id  = $this->input->post('request_id'); 

		$details = $this->model_amuco_details_customers_request->get_in($arr_details,'id');

		$user_id = $this->session->userdata('id');

		//Cuerpo del mensaje
		$email_message   = $this->input->post('email_text');
		$title_email = $this->input->post('subject');
		$recipients = $this->input->post('recipients');

  		$recipients = str_replace(';',',' ,$recipients);

		$user_id = $this->session->userdata('id');
		
		$email_data=[
			'sender' => 'project@ztgroupcorp.com',
			'recipients' => $recipients,
			'reply_to' => get_option('email')
		];


		//inserto en la tabla notification
		$type_notification = $this->model_mw_notification_types->get_single(['code' => 'EMAIL']);

		$type_id = $type_notification->id;

		$save_data = [
				'type_id' => $type_id,
				'user_id' => $user_id,
				'status'  => 'new',
				'title'	  => $title_email,
				'body'	  => $email_message,
				'created_date' => date('Y-m-d H:i:s'),
				'sender' => $email_data['sender'],
				'recipients' => $email_data['recipients'],
				'reply_to' => $email_data['reply_to']
			];


			$save = $this->model_mw_notifications->store($save_data);
			$data_update = [
				"entity" => "amuco_details_customers_request",
				"value"  => implode(",", $arr_details)
			];

			$this->model_mw_notifications->change($save, $data_update);

			//actualizo la tabla amuco_details_customers_request
			$data_update_details = [
				"notification_send" => "pending"
			];

			foreach ($details as $key => $item) {
				$this->model_amuco_details_customers_request->change($item->id,$data_update_details);
			}

			$this->data["success"] = true;
			$this->data["message"] = cclang('notification_fails');

			echo json_encode($this->data);
			exit;

	}


	//Cancel send email in add product
	/*public function cancel_send_email()
	{
		//$this->is_allowed('amuco_details_customers_send_email');
		$arr_details = $this->input->get('arr_details');
		$request_id  = $this->input->get('request_id'); 


		$details = $this->model_amuco_details_customers_request->get_in($arr_details,'id');

		$customer_request =  $this->model_amuco_customer_request->get($request_id,'id')[0];

		//armar email
		 $integration_id=$this->Integration_table->get_from_destination('System',1)[0]->id;
		
		$message_type=$this->message_types->get_message_types_id('EMAIL')['id'];

		$this->db->select('template');
		$this->db->where('message_code', 'AMU_REQ_ADDPRICE_001');
		$email_template = json_decode($this->db->get('mw_message_templates')->row()->template);
   

		$email_message   = $email_template->body;

		//variables
		$amuco_customer_request = cclang('customer_request_id');
		$amuco_customer_request_id = $customer_request->id;

		$email_message   = str_replace('%%amuco_customer_request%%',$amuco_customer_request,$email_message);
		$email_message   = str_replace('%%amuco_customer_request_id%%',$amuco_customer_request_id, $email_message);


		$customer = cclang('customer');
		$customers_name = $customer_request->amuco_customers_name;

		$email_message   = str_replace('%%customer%%',$customer,$email_message);
		$email_message   = str_replace('%%customers_name%%',$customers_name,$email_message);


		$destination_port = cclang('destination_port');
		$destination_port_name = $customer_request->amuco_destination_port_name;

		$contact = cclang('contact');
		$contacts_name = $customer_request->amuco_contacts_name;

		$email_message   = str_replace('%%contact%%',$contact,$email_message);
		$email_message   = str_replace('%%contact_name%%',$contacts_name,$email_message);

		$sales_agent = cclang('sales_agent');
		$aauth_users_username = $customer_request->aauth_users_username;

		$email_message   = str_replace('%%sales_agent%%',$sales_agent,$email_message);
		$email_message   = str_replace('%%aauth_users_username%%',$aauth_users_username,$email_message);


		$combined_container = cclang('combined_container');
		$combinate_container_value = ($customer_request->combinate_container ==1? cclang('YES') : cclang('NOT'));

		$email_message   = str_replace('%%combined_container%%',$combined_container,$email_message);
		$email_message   = str_replace('%%combinate_container_value%%',$combinate_container_value,$email_message);


		$incoterm = cclang('incoterm');
		$amuco_incoterm_name = $customer_request->amuco_incoterm_name;

		$email_message   = str_replace('%%incoterm%%',$incoterm,$email_message);
		$email_message   = str_replace('%%amuco_incoterm_name%%',$amuco_incoterm_name,$email_message);


		$remarks = cclang('remarks');
		$remarks_value =  $customer_request->remarks;

		$email_message   = str_replace('%%remarks%%',$remarks,$email_message);
		$email_message   = str_replace('%%remarks_value%%',$remarks_value,$email_message);

		$note_email = cclang('email_note');
		$email_value = get_option('email');

		$email_message   = str_replace('%%note_email%%',$note_email,$email_message);
		$email_message   = str_replace('%%email_value%%',$email_value,$email_message);


		$table_data="";
		$recipients ='';


		$tabla_head ='<table>
            <tr class="heading heading-p" >
                <td width="30%" style="text-align: left;">
                   '.cclang('product').'
                </td>
                <td width="15%"  style="text-align: left;">
                    '.cclang('quantity').'
                </td>
                <td width="15%"  style="text-align: left;">
                    '.cclang('supplier').'
                </td>
                <td  width="15%" style="text-align: left;">
                    '.cclang('office').'
                </td>
                <td  width="15%" style="text-align: left;">
                    '.cclang('contact').'
                </td>
                <td  width="15%" style="text-align: left;">
                   '.cclang('status').'
                </td>
            </tr>';
		
		$i = 0;
		foreach ($details as $key => $item) {

			if($item->amuco_suppliers_email !== ''){
                $email = $item->amuco_suppliers_email; 
            }
	        if($item->amuco_suppliers_email == ''){
	            $email = $item->purchasing_email;
	        }

	       	$recipients = $email;
     		
     		$class ='';
	      	if($i % 2 == 0){
	      		$class="background-color:#F1F1F1";
	      	}else{
	      		$class ='';
	      	}

            $table_data.= '<tr style="'.$class.'">
                                <td>
                                   <span style="text-align: left">
                                   <small>'.$item->amuco_products_name.'</small>
                                </td>
                                <td style="text-align: left">'.$item->quantity.'</td>
                                <td style="text-align: left">'.$item->amuco_suppliers_name.'</td>
                                <td style="text-align: left">'.$item->purchasing_username.'</td>
                                <td style="text-align: left">'.$email.'</td>
                                <td style="text-align: left">'.$item->status.'</td>
                             </tr>';
            $i++;
		}

		$tabla_def=$tabla_head.$table_data.'</table>';

		
		$email_message   = str_replace('%%tabla%%',$tabla_def,$email_message);


		$email_data=[
			'sender' => 'project@ztgroupcorp.com',
			'recipients' => $recipients,
			'reply_to' => get_option('email')
		];

		$user_id = $this->session->userdata('id');
		$title_email = cclang('notification_title');


		//inserto en la tabla notification
		$type_notification = $this->model_mw_notification_types->get_single(['code' => 'EMAIL']);

		$type_id = $type_notification->id;

		$save_data = [
				'type_id' => $type_id,
				'user_id' => $user_id,
				'status'  => 'new',
				'title'	  => $title_email,
				'body'	  => $email_message,
				'created_date' => date('Y-m-d H:i:s'),
				'sender' => $email_data['sender'],
				'recipients' => $email_data['recipients'],
				'reply_to' => $email_data['reply_to']
			];


			$save = $this->model_mw_notifications->store($save_data);
			$data_update = [
				"entity" => "amuco_details_customers_request",
				"value"  => implode(",", $arr_details)
			];

			$this->model_mw_notifications->change($save, $data_update);

			//actualizo la tabla amuco_details_customers_request
			$data_update_details = [
				"notification_send" => "pending"
			];

			foreach ($details as $key => $item) {
				$this->model_amuco_details_customers_request->change($item->id,$data_update_details);
			}

			$this->data["success"] = true;
			$this->data["message"] = cclang('notification_fails');

			echo json_encode($this->data);
			exit;
	}*/
}


/* End of file amuco_details_customers_request.php */
/* Location: ./application/controllers/administrator/Amuco Details Customers Request.php */