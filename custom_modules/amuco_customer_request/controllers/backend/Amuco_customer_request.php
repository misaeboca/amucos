<?php
defined('BASEPATH') OR exit('No direct script access allowed');


/**
*| --------------------------------------------------------------------------
*| Amuco Customer Request Controller
*| --------------------------------------------------------------------------
*| Amuco Customer Request site
*|
*/
class Amuco_customer_request extends Admin	
{
	
	public function __construct()
	{
		parent::__construct();

		$this->load->model('mw_logs/Log_table');
		$this->load->model('mw_logs/Tracer');
		$this->load->model('mw_logs/Io_types');
		$this->load->model('mw_logs/Integration_table');
		$this->load->model('model_amuco_customer_request');
		$this->load->model(['amuco_details_customers_request/model_amuco_details_customers_request',
							'amuco_contacts/model_amuco_contacts',
							'amuco_details_request_office/model_amuco_details_request_office',
							'amuco_offers_sent_customers/model_amuco_offers_sent_customers'
							]);
		$this->lang->load('web_lang', $this->current_lang);

		$this->load->model(['mw_message_templates/model_mw_message_templates'=> "message_template"]);
		$this->load->model(['mw_message_templates/model_mw_message_types'=> "message_types"]);

		$this->load->library('notification');
		$this->lang->load('web_lang', $this->current_lang);
		$this->load->model('models/model_mw_notifications');
		$this->load->model('models/model_mw_notification_types');

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
		$add_log = $this->Log_table->add_log($integration_id,$type_id,"Row # {$data_log['id']} {$action} in table amuco_customer_request",$user->id);
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
	* show all Amuco Customer Requests
	*
	* @var $offset String
	*/
	public function index($offset = 0)
	{
		$this->is_allowed('amuco_customer_request_list');

		$filter = $this->input->get('q');
		$field 	= $this->input->get('f');

		$this->data['amuco_customer_requests'] = $this->model_amuco_customer_request->get($filter, $field, $this->limit_page, $offset);
		$this->data['amuco_customer_request_counts'] = $this->model_amuco_customer_request->count_all($filter, $field);
	  
		$config = [
			'base_url'     => 'administrator/amuco_customer_request/index/',
			'total_rows'   => $this->model_amuco_customer_request->count_all($filter, $field),
			'per_page'     => $this->limit_page,
			'uri_segment'  => 4,
		];

		$this->data['pagination'] = $this->pagination($config);

		$this->template->title('Amuco Customer Request List');
		$this->render('backend/standart/administrator/amuco_customer_request/amuco_customer_request_list', $this->data);
	}
	
	/**
	* Add new amuco_customer_requests
	*
	*/
	public function add()
	{
		//var_dump( $this->aauth->get_user_groups(1));die;
		//var_dump(db_get_all_data('aauth_users'));die;
		$this->is_allowed('amuco_customer_request_add');
		$this->data['user'] = $this->aauth->get_user();
		$this->template->title('Amuco Customer Request New');
		$this->render('backend/standart/administrator/amuco_customer_request/amuco_customer_request_add', $this->data);
	}

	/**
	* Add New Amuco Customer Requests
	*
	* @return JSON
	*/
	public function add_save()
	{
		if (!$this->is_allowed('amuco_customer_request_add', false)) {
			echo json_encode([
				'success' => false,
				'message' => cclang('sorry_you_do_not_have_permission_to_access')
				]);
			exit;
		}

		$this->form_validation->set_rules('rsd', 'RSD', 'trim');
		$this->form_validation->set_rules('status', 'Status', 'trim|required|max_length[50]');
		$this->form_validation->set_rules('customer', 'Customer', 'trim|required|max_length[10]');
		$this->form_validation->set_rules('sales_agent', 'Sales Agent', 'trim|required|max_length[10]');
		$this->form_validation->set_rules('contact', 'Contact', 'trim|required|max_length[10]');
		$this->form_validation->set_rules('destination_port', 'Destination Port', 'trim|required|max_length[10]');
		$this->form_validation->set_rules('incoterm', 'Incoterm', 'trim|required|max_length[10]');
		$this->form_validation->set_rules('remarks', 'Remarks', 'trim|max_length[250]');
		

		if ($this->form_validation->run()) {
		
			$save_data = [
				'date_created' => date("Y-m-d H:i:s"),
				'RSD' => $this->input->post('rsd'),
				'status' => 'New',      //$this->input->post('status'),
				'customer' => $this->input->post('customer'),
				'sales_agent' => $this->input->post('sales_agent'),
				'contact' => $this->input->post('contact'),
				'destination_port' => $this->input->post('destination_port'),
				'incoterm' => $this->input->post('incoterm'),
				'combinate_container' => $this->input->post('combinate_container'),
				'remarks' => $this->input->post('remarks'),
				'representative' => $this->input->post('representative'),
			];

			
			$save_amuco_customer_request = $this->model_amuco_customer_request->store($save_data);
			


		  
			
			if ($save_amuco_customer_request) {
				$save_data_tracer=array_merge($save_data,['id'=>$save_amuco_customer_request]);
				$this->insert_logs($save_data_tracer,'added');
			
				if ($this->input->post('save_type') == 'stay') {
					$this->data['success'] = true;
					$this->data['id'] 	   = $save_amuco_customer_request;
					$this->data['redirect'] = base_url('administrator/amuco_customer_request/edit/'. $save_amuco_customer_request);
					$this->data['message'] = cclang('success_save_data_stay', [
						anchor('administrator/amuco_customer_request/edit/' . $save_amuco_customer_request, 'Edit Amuco Customer Request')
					]);
				
				} else {
					set_message(
						cclang('success_save_data_redirect', [
						anchor('administrator/amuco_customer_request/edit/' . $save_amuco_customer_request, 'Edit Amuco Customer Request')
					]), 'success');

					$this->data['success'] = true;
					$this->data['redirect'] = base_url('administrator/amuco_customer_request/edit/'. $save_amuco_customer_request);
				}
			} else {
				if ($this->input->post('save_type') == 'stay') {
					$this->data['success'] = false;
					$this->data['message'] = cclang('data_not_change');
				} else {
					$this->data['success'] = false;
					$this->data['message'] = cclang('data_not_change');
					$this->data['redirect'] = base_url('administrator/amuco_customer_request');
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
	* Update view Amuco Customer Requests
	*
	* @var $id String
	*/
	public function edit($id)
	{
		//var_dump(db_get_all_data('aauth_users'));die;
		/*foreach (db_get_all_data('amuco_suppliers') as $row){
			
		}*/
		 
		  
		$this->is_allowed('amuco_customer_request_update');

		$this->data['amuco_customer_request'] = $this->model_amuco_customer_request->get($id,'id')[0];
		//var_dump($this->data['amuco_customer_request']);die;
		if($this->data['amuco_customer_request'] && $this->data['amuco_customer_request']->status != 'requested to china'){
		
			$this->data['amuco_details_customers_requests'] = $this->model_amuco_details_customers_request->get($id,'customer_request_id');
			$this->data['amuco_details_customers_request_counts'] = $this->model_amuco_details_customers_request->count_all('','');
			$this->data['count_request_status_offer_received'] = count($this->model_amuco_details_customers_request->get_by_status($id,'Offer Received'));
			$this->data['amuco_details_requests_price'] = $this->model_amuco_details_request_office->get($id,'customer_request_id');
			$this->data['amuco_offers_sent_customers'] = $this->model_amuco_offers_sent_customers->get($id,'customer_request_id');
			//var_dump($this->data['amuco_details_requests_price']);die;
			$this->template->title('Amuco Customer Request Update');
			$this->render('backend/standart/administrator/amuco_customer_request/amuco_customer_request_update', $this->data);
		}else{
			$this->index();
		}
		
	}

	/**
	* Update Amuco Customer Requests
	*
	* @var $id String
	*/
	public function edit_save($id)
	{
		if (!$this->is_allowed('amuco_customer_request_update', false)) {
			echo json_encode([
				'success' => false,
				'message' => cclang('sorry_you_do_not_have_permission_to_access')
				]);
			exit;
		}
		
		$this->form_validation->set_rules('rsd', 'RSD', 'trim');
	//	$this->form_validation->set_rules('datae_updated', 'Datae Updated', 'trim|required');
		//$this->form_validation->set_rules('status', 'Status', 'trim|max_length[50]');
		$this->form_validation->set_rules('customer', 'Customer', 'trim|required|max_length[10]');
		$this->form_validation->set_rules('sales_agent', 'Sales Agent', 'trim|required|max_length[10]');
		$this->form_validation->set_rules('contact', 'Contact', 'trim|required|max_length[10]');
		$this->form_validation->set_rules('destination_port', 'Destination Port', 'trim|required|max_length[10]');
		$this->form_validation->set_rules('incoterm', 'Incoterm', 'trim|required|max_length[10]');
		$this->form_validation->set_rules('remarks', 'Remarks', 'trim|max_length[250]');
		
		if ($this->form_validation->run()) {
		
			$save_data = [
				'RSD' => $this->input->post('rsd'),
				'date_updated' =>date("Y-m-d H:i:s"),
				'status' => 'New',
				'customer' => $this->input->post('customer'),
				'sales_agent' => $this->input->post('sales_agent'),
				'contact' => $this->input->post('contact'),
				'destination_port' => $this->input->post('destination_port'),
				'combinate_container' => $this->input->post('combinate_container'),
				'incoterm' => $this->input->post('incoterm'),
				'remarks' => $this->input->post('remarks'),
				'representative' => $this->input->post('representative'),
			];

			$data_output=$this->model_amuco_customer_request->find($id);
			$save_amuco_customer_request = $this->model_amuco_customer_request->change($id, $save_data);

			if ($save_amuco_customer_request) {
				$save_data_tracer=array_merge($save_data,['id'=>$id]);
				$this->insert_logs($save_data_tracer,'updated',$data_output);
			
				if ($this->input->post('save_type') == 'stay') {
					$this->data['success'] = true;
					$this->data['id'] 	   = $id;
					$this->data['message'] = cclang('success_update_data_stay', [
						anchor('administrator/amuco_customer_request', ' Go back to list')
					]);
				} else {
					set_message(
						cclang('success_update_data_redirect', [
					]), 'success');

					$this->data['success'] = true;
					$this->data['redirect'] = base_url('administrator/amuco_customer_request/edit/'.$id);
				}
			} else {
				if ($this->input->post('save_type') == 'stay') {
					$this->data['success'] = false;
					$this->data['message'] = cclang('data_not_change');
				} else {
					$this->data['success'] = false;
					$this->data['message'] = cclang('data_not_change');
					$this->data['redirect'] = base_url('administrator/amuco_customer_request');
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
	* delete Amuco Customer Requests
	*
	* @var $id String
	*/
	public function delete($id = null)
	{
		$this->is_allowed('amuco_customer_request_delete');

		$this->load->helper('file');

		$arr_id = $this->input->get('id');
		$remove = false;

		if (!empty($id)) {
			$remove = $this->_remove($id);
			$this->model_amuco_details_customers_request->delete_items_reques_id('customer_request_id',$id);
		} elseif (count($arr_id) >0) {
			foreach ($arr_id as $id) {
				$remove = $this->_remove($id);
			}
		}

		if ($remove) {
			set_message(cclang('has_been_deleted', 'amuco_customer_request'), 'success');
		} else {
			set_message(cclang('error_delete', 'amuco_customer_request'), 'error');
		}

		redirect_back();
	}

		/**
	* View view Amuco Customer Requests
	*
	* @var $id String
	*/
	public function view($id)
	{
		$this->is_allowed('amuco_customer_request_view');

		$this->data['amuco_customer_request'] = $this->model_amuco_customer_request->join_avaiable()->filter_avaiable()->find($id);
		$this->data['amuco_details_customers_requests'] = $this->model_amuco_details_customers_request->get($id,'customer_request_id');
		$this->data['amuco_details_customers_request_counts'] = $this->model_amuco_details_customers_request->count_all('','');
		$this->data['current_page'] = 'view'; 
		$this->template->title('Amuco Customer Request Detail');
		$this->render('backend/standart/administrator/amuco_customer_request/amuco_customer_request_view', $this->data);
	}

	public function view_add_price($id)
	{
		//$this->input->get();die;
		$this->is_allowed('amuco_customer_request_view');
		$this->data['amuco_customer_request'] = [];
		$this->data['amuco_details_customers_requests'] = $this->model_amuco_details_customers_request->get($id,'id');
		if(count($this->data['amuco_details_customers_requests']) > 0){
			$id_request = $this->data['amuco_details_customers_requests'][0]->customer_request_id;
			$id_details = $this->data['amuco_details_customers_requests'][0]->id;
			$this->data['amuco_customer_request'] = $this->model_amuco_customer_request->get($id_request,'id')[0];
			$this->data['amuco_details_requests_price'] = $this->model_amuco_details_request_office->get($id_details,'details_customer_request_id');
		}
		//var_dump( $this->data['amuco_details_requests_price']);die;
		$this->data['amuco_details_customers_request_counts'] = $this->model_amuco_details_customers_request->count_all('','');
		$this->template->title('Amuco Customer Request Detail');
		$this->render('backend/standart/administrator/amuco_customer_request/amuco_customer_request_add_price', $this->data);
	}

	public function list_request_pending_price()
	{
		$this->is_allowed('amuco_customer_request_view');
		$user =  $this->aauth->get_user();
		//$this->data['amuco_customer_request'] = $this->model_amuco_customer_request->get_customer_request_by_user_status($user->id,'Requested');
		
		$this->data['amuco_customer_request'] = $this->model_amuco_customer_request->get('Requested','status');
		//var_dump($this->data['amuco_customer_request']); die;
		if(count($this->data['amuco_customer_request']) > 0){
			foreach($this->data['amuco_customer_request'] as $item){
				$item->details = [];
				$this->data['amuco_details_customers_requests'] = $this->model_amuco_details_customers_request->get($item->id,'customer_request_id');
				$item->details = $this->data['amuco_details_customers_requests'];
				//array_push($item->details,$this->data['amuco_details_customers_requests']);
			}
			//var_dump($this->data['amuco_customer_request']); die;
		}
		$config = [
			'base_url'     => 'administrator/amuco_customer_request/list_request_pending_price/',
			'total_rows'   => 10,
			'per_page'     => 10,
			'uri_segment'  => 4,
		];

		$this->data['pagination'] = $this->pagination($config);
		
		$this->data['amuco_details_customers_request_counts'] = count($this->data['amuco_customer_request']);
		$this->data['current_page'] = 'view'; 
		$this->template->title('Amuco Customer Request Detail');
		$this->render('backend/standart/administrator/amuco_customer_request/amuco_customer_request_list_price', $this->data);
	}
	/**
	* delete Amuco Customer Requests
	*
	* @var $id String
	*/
	private function _remove($id)
	{
		$amuco_customer_request = (array)$this->model_amuco_customer_request->find($id);
		$this->insert_logs($amuco_customer_request,'deleted');
	
		
		
		return $this->model_amuco_customer_request->remove($id);
	}
	
	
	/**
	* Export to excel
	*
	* @return Files Excel .xls
	*/
	public function export()
	{
		$this->is_allowed('amuco_customer_request_export');

		$this->model_amuco_customer_request->export('amuco_customer_request', 'amuco_customer_request');
	}

	/**
	* Export to PDF
	*
	* @return Files PDF .pdf
	*/
	public function export_pdf()
	{
		$this->is_allowed('amuco_customer_request_export');

		$this->model_amuco_customer_request->pdf('amuco_customer_request', 'amuco_customer_request');
	}


	public function single_pdf($id = null)
	{
		$this->is_allowed('amuco_customer_request_export');

		$table = $title = 'amuco_customer_request';
		$this->load->library('HtmlPdf');
	  
		$config = array(
			'orientation' => 'p',
			'format' => 'a4',
			'marges' => array(5, 5, 5, 5)
		);

		$this->pdf = new HtmlPdf($config);
		$this->pdf->setDefaultFont('stsongstdlight'); 

		$result = $this->db->get($table);
	   
		$data = $this->model_amuco_customer_request->find($id);
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

	public function get_contact_by_id(){
		$this->is_allowed('amuco_customer_request_view');
		if($this->input->post('customer') != null ){
			$id = $this->input->post('customer');
			$this->data['success'] = true;
			$this->data['customer_contact'] = $this->model_amuco_contacts->get_contacts($id, 'customer','customer_id');
			//$this->data['customer_agents'] = $this->model_amuco_contacts->get_contacts($id, 'customer','customer_id');
		}else{
			$this->data['success'] = false;
			$this->data['message'] = 'Opss validation failed';
			$this->data['errors'] = 'Error  customer id';
		}

		echo json_encode($this->data);
		exit;
	}
  
	public function end_customer_request($id=null){
		$id = $this->input->get('id');
		if (!$this->is_allowed('amuco_customer_request_update', false)) {
			echo json_encode([
				'success' => false,
				'message' => cclang('sorry_you_do_not_have_permission_to_access')
				]);
			exit;
		}
		

		if($id != null) {
			$save_data = [
				'date_updated' =>date("Y-m-d H:i:s"),
				'status' => 'Requested',
			];

			$data_output = $this->model_amuco_customer_request->find($id);
			$save_amuco_customer_request = $this->model_amuco_customer_request->change($id, $save_data);
			$details = $this->model_amuco_details_customers_request->get($id,'customer_request_id');


			if ($save_amuco_customer_request) {


		      $save_data_tracer=array_merge($save_data,['id'=>$id]);
                $this->insert_logs($save_data_tracer,'updated',$data_output);

                foreach($details as $item){

                    if($item->status == 'New'){
                        $save_data_details = [
                            'date_updated' =>date("Y-m-d H:i:s"),
                            'status' => 'Requested',
                        ];
                        $save_details_request = $this->model_amuco_details_customers_request->change($item->id,$save_data_details);
                        if ($save_details_request) {
                            $save_data_tracer=array_merge($save_data_details,['id'=>$item->id]);
                            $this->insert_logs($save_data_tracer,'updated',$item);
                        }
                    }
                  

                    if(isset($item->purchasing) && $item->purchasing != "")
                    {

                        $this->data['success'] = true;
                        $this->data['id']      = $id;
                        $this->data['message'] = cclang('success_update_data_stay');
                        $this->data['redirect'] = base_url('administrator/amuco_customer_request/edit/'.$id);
                        //$this->data['redirect'] = base_url('administrator/amuco_customer_request');

                        if($item->notification_send == "new" or $item->notification_send == "pending" or $item->notification_send == "" or $item->notification_send == null) 
                        {

                            $title =cclang('notification_title_req_end',[$item->customer_request_id]);

                            $url = anchor('administrator/amuco_customer_request/view_add_price/'.$item->id.'?popup=show', cclang('Add Price'), ['class' => 'popup-view']); 


                            $message ='<span class="notification-body-text">'.cclang('notification_req_end_menssage', [$item->purchasing_username, $item->amuco_products_name] ).'<br>'.$url.'</span>';
                            
                            $user_id =  $this->session->userdata('id');

                            $email_data=[];

                            $send = $this->notification->send('INTERNAL', $user_id, $message, $title, $email_data);

                             //Creo la notificacion
                            if($send > 0){

                                $data_update = [
                                    "entity" => "amuco_details_customers_request",
                                    "value"  => $item->id
                                ];

                                $data_update_details = [
                                    "notification_send" => "send"
                                ];

                                $this->model_mw_notifications->change($send, $data_update);

                                //actualizo la tabla amuco_details_customers_request
                                $this->model_amuco_details_customers_request->change($item->id, $data_update_details);
                                
                            } else {
                                $data_update_details = [
                                    "notification_send" => "pending"
                                ];

                                //actualizo la tabla amuco_details_customers_request
                                $this->model_amuco_details_customers_request->change($item->id, $data_update_details);
                            }
                        }

                    }

                }//Fin del for

			} else {
				$this->data['success'] = false;
				$this->data['message'] = cclang('data_not_change');
				$this->data['redirect'] = base_url('administrator/amuco_customer_request');
			}


		}else {
			$this->data['success'] = false;
			$this->data['message'] = 'Opss validation failed';
			$this->data['errors'] = $this->form_validation->error_array();
		}
		
		echo json_encode($this->data);
		exit;
	}

	public function compare_price($id=null,$product_id=null){
	//	var_dump($this->input->get());die;
		$id= $this->input->get('id');
		
		$this->data['products_details'] = [];
		if($this->input->get('id') != null){
			if($this->input->get('product_id') != null){
				$id_product =  $this->input->get('product_id');
				$this->data['amuco_customer_request'] =  $this->model_amuco_customer_request->get($id,'id')[0];
				//$this->data['request_by_status_offer_received'] = $this->model_amuco_details_customers_request->get_by_status($id,'Offer Received');
				//$this->data['products_request'] = $this->model_amuco_customer_request->get_products_request($id);
				$this->data['products_details'] = $this->model_amuco_details_request_office->get_data_by_id_product_status($id, $id_product);
				//var_dump($this->data['amuco_customer_request']);die;
			}else{
				$this->data['amuco_customer_request'] =  $this->model_amuco_customer_request->get($id,'id')[0];
				$this->data['request_by_status_offer_received'] = $this->model_amuco_details_customers_request->get_by_status($id,'Offer Received');
				$this->data['products_request'] = $this->model_amuco_customer_request->get_products_request($id);
				$this->data['products_details'] = $this->model_amuco_details_request_office->get($id,'customer_request_id');
			}
			$this->render('backend/standart/administrator/amuco_customer_request/amuco_request_compare_price', $this->data);
		}

	}

	public function get_data_products($id=null,$product_id=null){
		//var_dump($this->input->get());
		if($this->input->get('id') != null ){
			$id_request = $this->input->get('id');
			$id_product = $this->input->get('product_id');
			$this->data['success'] = true;
			$this->data['details_products'] = $this->model_amuco_details_request_office->get_data_by_id_product_status($id_request, $id_product);
			
			//$this->data['customer_agents'] = $this->model_amuco_contacts->get_contacts($id, 'customer','customer_id');
		}else{
			$this->data['success'] = false;
			$this->data['message'] = 'Opss validation failed';
			$this->data['errors'] = 'Error  customer id';
		}

		echo json_encode($this->data);
		exit;
	}

	public function get_data_table_price($id_request=null){
		if($this->input->get('id') != null){
			$this->data['success'] = true;
			$this->data['amuco_details_requests_price'] = $this->model_amuco_details_request_office->get($this->input->get('id') ,'customer_request_id');
		}else{
			$this->data['success'] = false;
			$this->data['message'] = 'Opss validation failed';
			$this->data['errors'] = 'Error  customer id';
		}
		echo json_encode($this->data);
		exit;
	}

	public function get_items()
   {
	  $draw = intval($this->input->get("draw"));
	  $start = intval($this->input->get("start"));
	  $length = intval($this->input->get("length"));


	  $query =  $this->model_amuco_contacts->get('', '', '', '');
   //  var_dump($query);

	  $data = [];


	  foreach($query as $r) {
		   $data[] = array(
				$r->id,
				$r->name,
				$r->active
		   );
	  }


	  $result = array(
			   "draw" => $draw,
				 "recordsTotal" => count($query),
				 "recordsFiltered" => count($query),
				 "data" => $query
			);


	  echo json_encode($result);
	  exit();
   }

}




/* End of file amuco_customer_request.php */
/* Location: ./application/controllers/administrator/Amuco Customer Request.php */