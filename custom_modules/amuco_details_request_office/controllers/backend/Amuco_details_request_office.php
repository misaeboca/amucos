<?php
defined('BASEPATH') OR exit('No direct script access allowed');


/**
*| --------------------------------------------------------------------------
*| Amuco Details Request Office Controller
*| --------------------------------------------------------------------------
*| Amuco Details Request Office site
*|
*/
class Amuco_details_request_office extends Admin	
{
	
	public function __construct()
	{
		parent::__construct();

		$this->load->model('mw_logs/Log_table');
		$this->load->model('mw_logs/Tracer');
		$this->load->model('mw_logs/Io_types');
		$this->load->model('mw_logs/Integration_table');
		$this->load->model('model_amuco_details_request_office');
		$this->load->model(['amuco_details_customers_request/model_amuco_details_customers_request',
		'amuco_customer_request/model_amuco_customer_request',
		'amuco_contacts/model_amuco_contacts',
							'amuco_details_request_office/model_amuco_details_request_office'
		]);

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
		$add_log = $this->Log_table->add_log($integration_id,$type_id,"Row # {$data_log['id']} {$action} in table amuco_details_request_office",$user->id);
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
	* show all Amuco Details Request Offices
	*
	* @var $offset String
	*/
	public function index($offset = 0)
	{
		$filter = $this->input->get('q');
		$field 	= $this->input->get('f');

		$this->data['amuco_details_request_offices'] = $this->model_amuco_details_request_office->get($filter, $field, $this->limit_page, $offset);
		$this->data['amuco_details_request_office_counts'] = $this->model_amuco_details_request_office->count_all($filter, $field);

		$config = [
			'base_url'     => 'administrator/amuco_details_request_office/index/',
			'total_rows'   => $this->model_amuco_details_request_office->count_all($filter, $field),
			'per_page'     => $this->limit_page,
			'uri_segment'  => 4,
		];

		$this->data['pagination'] = $this->pagination($config);

		$this->template->title('Amuco Details Request Office List');
		$this->render('backend/standart/administrator/amuco_details_request_office/amuco_details_request_office_list', $this->data);
	}

	public function pending_list($offset = 0)
	{
		$filter = $this->input->get('q');
		$field 	= $this->input->get('f');
        $user = $this->aauth->get_user();
		$this->data['amuco_details_request_offices'] = $this->model_amuco_details_request_office->get_data_status_and_client($user->id,'Pending');
		$this->data['amuco_details_request_office_counts'] = count($this->data['amuco_details_request_offices']);
		$config = [
			'base_url'     => 'administrator/amuco_details_request_office/index/',
			'total_rows'   => $this->model_amuco_details_request_office->count_all($filter, $field),
			'per_page'     => $this->limit_page,
			'uri_segment'  => 4,
		];

		$this->data['pagination'] = $this->pagination($config);

		$this->template->title('Amuco Details Request Office List');
		$this->render('backend/standart/administrator/amuco_details_request_office/amuco_details_request_office_list', $this->data);
	}
	
	/**
	* Add new amuco_details_request_offices
	*
	*/
	public function add()
	{
		$this->is_allowed('amuco_details_request_office_add');


		$this->template->title('Amuco Details Request Office New');
		$this->render('backend/standart/administrator/amuco_details_request_office/amuco_details_request_office_add', $this->data);
	}

	/**
	* Add New Amuco Details Request Offices
	*
	* @return JSON
	*/
	public function add_save()
	{
		
		// if (!$this->is_allowed('amuco_details_request_office_add', false)) {
		// 	echo json_encode([
		// 		'success' => false,
		// 		'message' => cclang('sorry_you_do_not_have_permission_to_access')
		// 		]);
		// 	exit;
		// }
       
		$this->form_validation->set_rules('ETD', 'ETD', 'trim');
		$this->form_validation->set_rules('product_id', 'Product Id', 'trim|required|max_length[10]');
		$this->form_validation->set_rules('quantity', 'Quantity', 'trim|max_length[11]');
		$this->form_validation->set_rules('unit', 'Unit', 'trim|max_length[10]');
		$this->form_validation->set_rules('fcl', 'Fcl', 'trim|max_length[10]');
		$this->form_validation->set_rules('fcl_option', 'Fcl Option', 'trim|max_length[10]');
		$this->form_validation->set_rules('type_fcl', 'Type Fcl', 'trim|max_length[50]');
		$this->form_validation->set_rules('weight', 'Weight', 'trim|max_length[50]');
		$this->form_validation->set_rules('shape', 'Shape', 'trim|max_length[50]');
		$this->form_validation->set_rules('material', 'Material', 'trim|max_length[50]');
		$this->form_validation->set_rules('pallets', 'Pallets', 'trim|max_length[50]');
		$this->form_validation->set_rules('total_freight', 'Total Freight', 'trim|max_length[50]');
		$this->form_validation->set_rules('comission_supplier', 'Comission Supplier', 'trim|max_length[50]');
		$this->form_validation->set_rules('shipping_port', 'Shipping Port', 'trim|max_length[10]');
		$this->form_validation->set_rules('supplier_incoterm', 'Supplier Incoterm', 'trim|required|max_length[10]');
		$this->form_validation->set_rules('supplier', 'Supplier', 'trim|max_length[10]');
		$this->form_validation->set_rules('brand', 'Brand', 'trim|max_length[150]');
		$this->form_validation->set_rules('payment_terms', 'Payment Terms', 'trim|max_length[10]');
		$this->form_validation->set_rules('comments', 'Comments', 'trim|max_length[250]');
		$this->form_validation->set_rules('analysis_standard', 'Analysis Standard', 'trim|max_length[250]');
		
		
		if ($this->form_validation->run()) {
		    if ($this->input->post('save_status') == 'save') {
                $status = 'Pending';
			}else{
				if ($this->input->post('save_status') == 'send'){
					$status = 'Review';
				}else{
					$status = 'Failed';
				}
			}
			$save_data = [
				'ETD' =>(DateTime::createFromFormat('m-d-Y', $this->input->post('ETD')))->format('Y-m-d'),
				'product_id' => $this->input->post('product_id'),
				'quantity' => $this->input->post('quantity'),
				'unit' => $this->input->post('unit'),
				'fcl' => $this->input->post('fcl'),
				'fcl_option' => $this->input->post('fcl_option'),
				'type_fcl' => $this->input->post('type_fcl'),
				'weight' => $this->input->post('weight'),
				'unit_pack' => $this->input->post('unit_pack'),
				'shape' => $this->input->post('shape'),
				'material' => $this->input->post('material'),
				'pallets' => $this->input->post('pallets'),
				'price_fob' =>  str_replace( ',', '', $this->input->post('price_fob')),
				'total_freight' =>  str_replace( ',', '', $this->input->post('total_freight')),
				'total_price' =>  str_replace( ',', '', $this->input->post('total_price')),
				'comission_supplier' => $this->input->post('comission_supplier'),
				'shipping_port' => $this->input->post('shipping_port'),
				'supplier_incoterm' => $this->input->post('supplier_incoterm'),
				'supplier' => $this->input->post('supplier'),
				'brand' => $this->input->post('brand'),
				'payment_terms' => $this->input->post('payment_terms'),
				'comments' => $this->input->post('comments'),
				'analysis_standard' => $this->input->post('analysis_standard'),
				'valid_until' => (DateTime::createFromFormat('m-d-Y', $this->input->post('valid_until')))->format('Y-m-d'),
				'purchasing' => $this->input->post('purchasing'),
				'supplier_direct' => $this->input->post('supplier_direct'),
				'status' =>  $status,
				'customer_request_id' => $this->input->post('customer_request_id'),
				'incoterm_price'  => $this->input->post('incoterm_price'),
				'details_customer_request_id'  => $this->input->post('details_customer_request_id'),
				'manufacturer' => $this->input->post('manufacturer'),
				'destination_port' => $this->input->post('destination_port'),
				'who_pallets' => $this->input->post('who_pallets'),
				'date_created' => date("Y-m-d H:i:s"),
				'ETA' =>(DateTime::createFromFormat('m-d-Y', $this->input->post('ETA')))->format('Y-m-d'),
			];


			$save_amuco_details_request_office = $this->model_amuco_details_request_office->store($save_data);
           // var_dump($save_amuco_details_request_office);die;

			if ($save_amuco_details_request_office) {

				//create the notification
				$id_producto = $this->input->post('product_id');
				
				$url = base_url('administrator/amuco_customer_request/edit/'.$this->input->post('customer_request_id')); 

				$title =cclang('notification_title', [$this->input->post('customer_request_id')]);

				$message ='<span class="notification-body-text">'.cclang('message_1').'<br><a href="'.$url.'">'.cclang('message_2').'</a></span>';
				
				$user_id =  $this->session->userdata('id');


			//	$this->notification->send('INTERNAL', $user_id, $message, $title);
				$email_data=[];

				$this->notification->send('INTERNAL', $user_id, $message, $title, $email_data);

				$save_data_tracer=array_merge($save_data,['id'=>$save_amuco_details_request_office]);
				$this->insert_logs($save_data_tracer,'added');
				$id_details = $this->input->post('details_customer_request_id');
				$save_data_details = [
					'status' => 'Offer Received'
				];
				$data_output=$this->model_amuco_details_customers_request->find($id_details);
				$save_amuco_details_customers_request = $this->model_amuco_details_customers_request->change($id_details, $save_data_details);
			    if($save_amuco_details_customers_request){
					$save_data_tracer=array_merge($save_data_details,['id'=>$id_details]);
					$this->insert_logs($save_data_tracer,'updated',$data_output);
				}
				if ($this->input->post('save_type') == 'stay') {
					$this->data['success'] = true;
					$this->data['id'] 	   = $save_amuco_details_request_office;
					$this->data['message'] = cclang('success_save_data_stay', [
						anchor('administrator/amuco_details_request_office/edit/' . $save_amuco_details_request_office, 'Edit Amuco Details Request Office'),
						anchor('administrator/amuco_details_request_office', ' Go back to list')
					]);
				} else {
					set_message(
						cclang('success_save_data_redirect', [
						anchor('administrator/amuco_details_request_office/edit/' . $save_amuco_details_request_office, 'Edit Amuco Details Request Office')
					]), 'success');

            		$this->data['success'] = true;
					$this->data['redirect'] = base_url('administrator/amuco_details_request_office');
				}
			} else {
				if ($this->input->post('save_type') == 'stay') {
					$this->data['success'] = false;
					$this->data['message'] = cclang('data_not_change');
				} else {
            		$this->data['success'] = false;
            		$this->data['message'] = cclang('data_not_change');
					$this->data['redirect'] = base_url('administrator/amuco_details_request_office');
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
	* Update view Amuco Details Request Offices
	*
	* @var $id String
	*/
	public function edit($id)
	{
		$this->is_allowed('amuco_details_request_office_update');


		$this->data['amuco_details_request_office'] = $this->model_amuco_details_request_office->find($id);

		$this->template->title('Amuco Details Request Office Update');
		$this->render('backend/standart/administrator/amuco_details_request_office/amuco_details_request_office_update', $this->data);
	}

	/**
	* Update Amuco Details Request Offices
	*
	* @var $id String
	*/
	public function edit_save($id)
	{
		if (!$this->is_allowed('amuco_details_request_office_update', false)) {
			echo json_encode([
				'success' => false,
				'message' => cclang('sorry_you_do_not_have_permission_to_access')
				]);
			exit;
		}
		
		$this->form_validation->set_rules('ETD', 'ETD', 'trim|required');
		$this->form_validation->set_rules('product_id', 'Product Id', 'trim|required|max_length[10]');
		$this->form_validation->set_rules('quantity', 'Quantity', 'trim|max_length[11]');
		$this->form_validation->set_rules('unit', 'Unit', 'trim|max_length[10]');
		$this->form_validation->set_rules('fcl', 'Fcl', 'trim|max_length[10]');
		$this->form_validation->set_rules('fcl_option', 'Fcl Option', 'trim|max_length[10]');
		$this->form_validation->set_rules('type_fcl', 'Type Fcl', 'trim|max_length[50]');
		$this->form_validation->set_rules('weight', 'Weight', 'trim|max_length[50]');
		$this->form_validation->set_rules('shape', 'Shape', 'trim|max_length[50]');
		$this->form_validation->set_rules('material', 'Material', 'trim|max_length[50]');
		$this->form_validation->set_rules('pallets', 'Pallets', 'trim|max_length[50]');
		$this->form_validation->set_rules('total_freight', 'Total Freight', 'trim|max_length[50]');
		$this->form_validation->set_rules('comission_supplier', 'Comission Supplier', 'trim|max_length[50]');
		$this->form_validation->set_rules('shipping_port', 'Shipping Port', 'trim|required|max_length[10]');
		$this->form_validation->set_rules('supplier_incoterm', 'Supplier Incoterm', 'trim|required|max_length[10]');
		$this->form_validation->set_rules('supplier', 'Supplier', 'trim|max_length[10]');
		$this->form_validation->set_rules('brand', 'Brand', 'trim|max_length[150]');
		$this->form_validation->set_rules('payment_terms', 'Payment Terms', 'trim|max_length[10]');
		$this->form_validation->set_rules('comments', 'Comments', 'trim|max_length[250]');
		$this->form_validation->set_rules('analysis_standard', 'Analysis Standard', 'trim|max_length[250]');
		
		if ($this->form_validation->run()) {
		
			$save_data = [
				'status' => 'Pending',
				'ETD' => $this->input->post('ETD'),
				'product_id' => $this->input->post('product_id'),
				'quantity' => $this->input->post('quantity'),
				'unit' => $this->input->post('unit'),
				'fcl' => $this->input->post('fcl'),
				'fcl_option' => $this->input->post('fcl_option'),
				'type_fcl' => $this->input->post('type_fcl'),
				'weight' => $this->input->post('weight'),
				'unit_pack' => $this->input->post('unit_pack'),
				'shape' => $this->input->post('shape'),
				'material' => $this->input->post('material'),
				'pallets' => $this->input->post('pallets'),
				'price_fob' =>  str_replace( ',', '', $this->input->post('price_fob')),
				'total_freight' =>  str_replace( ',', '', $this->input->post('total_freight')),
				'total_price' =>  str_replace( ',', '', $this->input->post('total_price')),
				'comission_supplier' => $this->input->post('comission_supplier'),
				'comission_supplier' => $this->input->post('comission_supplier'),
				'shipping_port' => $this->input->post('shipping_port'),
				'supplier_incoterm' => $this->input->post('supplier_incoterm'),
				'supplier' => $this->input->post('supplier'),
				'brand' => $this->input->post('brand'),
				'payment_terms' => $this->input->post('payment_terms'),
				'comments' => $this->input->post('comments'),
				'analysis_standard' => $this->input->post('analysis_standard'),
				'valid_until' => $this->input->post('valid_until'),
				'purchasing' => $this->input->post('purchasing'),
				'supplier_direct' => $this->input->post('supplier_direct'),
				'incoterm_price'  => $this->input->post('incoterm_price'),
				'manufacturer' => $this->input->post('manufacturer'),
				'destination_port' => $this->input->post('destination_port'),
				'who_pallets' => $this->input->post('who_pallets'),
			];

			$data_output=$this->model_amuco_details_request_office->find($id);
		    $save_amuco_details_request_office = $this->model_amuco_details_request_office->change($id, $save_data);

			if ($save_amuco_details_request_office) {
				$save_data_tracer=array_merge($save_data,['id'=>$id]);
				$this->insert_logs($save_data_tracer,'updated',$data_output);

				//create the notification
				$id_producto = $this->input->post('product_id');
				
				$url = base_url('administrator/amuco_customer_request/edit/'.$id); 

				$title =cclang('notification_title1', [$id]);

				$message ='<span class="notification-body-text">'.cclang('message_e1').'<br><a href="'.$url.'">'.cclang('message_e2').'</a></span>';
				
				$user_id =  $this->session->userdata('id');


				//$this->notification->send('INTERNAL', $user_id, $message, $title);


				$email_data=[];
				
				$this->notification->send('INTERNAL', $user_id, $message, $title, $email_data);

			
				if ($this->input->post('save_type') == 'stay') {
					$this->data['success'] = true;
					$this->data['id'] 	   = $id;
					$this->data['message'] = cclang('success_update_data_stay', [
						anchor('administrator/amuco_details_request_office', ' Go back to list')
					]);
				} else {
					set_message(
						cclang('success_update_data_redirect', [
					]), 'success');

            		$this->data['success'] = true;
					$this->data['redirect'] = base_url('administrator/amuco_details_request_office');
				}
			} else {
				if ($this->input->post('save_type') == 'stay') {
					$this->data['success'] = false;
					$this->data['message'] = cclang('data_not_change');
				} else {
            		$this->data['success'] = false;
            		$this->data['message'] = cclang('data_not_change');
					$this->data['redirect'] = base_url('administrator/amuco_details_request_office');
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

	public function edit_save_table_test(){
		if($this->input->post('id') != null){
			foreach($this->input->post() as $key => $value){
				if($key != 'id' && $key != 'action' && strlen($key) < 30){
					$column_name = $key;
					$column_value = $value;
				}
			}
			$this->data['success'] = true;
			$this->data['message'] = 'Changed data';
			$this->data['columns'] = [ 'id' => $this->input->post('id'),
									   'column_name' => $column_name,
									   'column_value' => $column_value
		];
		}else{
			$this->data['success'] = false;
			$this->data['message'] = 'Opss Error Data';
		}
		
		echo json_encode($this->data);
		exit;	
	}

	public function edit_save_table($id){
	 	//var_dump($this->input->post());
		if($this->input->post('id') != "" && $this->input->post('id') != null){
			foreach($this->input->post()   as $key => $value){
				//foreach($value   as $key_2 => $value_2){
					if($key != "" && $value != "" && $key != 'id' && $key != "action" ){
						//var_dump($value_2);
						$save_data = [$key => $value];
						$data_output=$this->model_amuco_details_request_office->find($this->input->post('id'));
						$save_amuco_details_request_office = $this->model_amuco_details_request_office->change($this->input->post('id'), $save_data);
                       
						if ($save_amuco_details_request_office) {
							//var_dump($save_data);
							$save_data_tracer=array_merge($save_data,['id'=>$this->input->post('id')]);
							$this->insert_logs($save_data_tracer,'updated',$data_output);
							$this->data['success'] = true;
							$this->data['id'] 	   = $this->input->post('id');
				            $this->data['data'] = [];
							array_push($this->data['data'],$this->model_amuco_details_request_office->get($this->input->post('id'),'id'));
							//$this->data['data']['DT_RowId'] = "row_".$id;
							    
						}
								
					}
				//}
			}
		}else{
			$this->data['success'] = false;
			$this->data['message'] = 'Opss validation failed';
		}	
		echo json_encode($this->data);
		exit;	
	}

	public function view_edit_office($id){

		$this->data['amuco_customer_request'] = [];
		$this->data['amuco_details_requests_price_edit'] = $this->model_amuco_details_request_office->get($id,'id');
		if(count($this->data['amuco_details_requests_price_edit']) > 0){
			$id_request = $this->data['amuco_details_requests_price_edit'][0]->customer_request_id;
			$id_details = $this->data['amuco_details_requests_price_edit'][0]->details_customer_request_id;
			$this->data['amuco_details_customers_requests'] = $this->model_amuco_details_customers_request->get($id_details,'id');
			$this->data['amuco_customer_request'] = $this->model_amuco_customer_request->get($id_request,'id')[0];
		}
		//var_dump( $this->data['amuco_details_requests_price']);die;
		//$this->data['amuco_details_customers_request_counts'] = $this->model_amuco_details_customers_request->count_all('','');
		$this->template->title('Amuco Customer Request Detail');
		$this->render('backend/standart/administrator/amuco_details_request_office/amuco_details_request_office_update', $this->data);
	
	}
	
	/**
	* delete Amuco Details Request Offices
	*
	* @var $id String
	*/
	public function delete($id = null)
	{
		$this->is_allowed('amuco_details_request_office_delete');

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
            set_message(cclang('has_been_deleted', 'amuco_details_request_office'), 'success');
        } else {
            set_message(cclang('error_delete', 'amuco_details_request_office'), 'error');
        }

		redirect_back();
	}

		/**
	* View view Amuco Details Request Offices
	*
	* @var $id String
	*/
	public function view($id)
	{
	
		$this->is_allowed('amuco_details_request_office_view');
        if($this->input->get('popup')){
			$this->data['current_page'] = 'Modal';
		}else{
			$this->data['current_page'] = 'View';
		}
		$this->data['amuco_details_request_office'] = $this->model_amuco_details_request_office->join_avaiable()->filter_avaiable()->find($id);
       // var_dump($this->data['amuco_details_request_office']);
		$this->template->title('Amuco Details Request Office Detail');
		$this->render('backend/standart/administrator/amuco_details_request_office/amuco_details_request_office_view', $this->data);
	}
	
	/**
	* delete Amuco Details Request Offices
	*
	* @var $id String
	*/
	private function _remove($id)
	{
		$amuco_details_request_office = (array)$this->model_amuco_details_request_office->find($id);
		$this->insert_logs($amuco_details_request_office,'deleted');
	
		
		
		return $this->model_amuco_details_request_office->remove($id);
	}
	
	
	/**
	* Export to excel
	*
	* @return Files Excel .xls
	*/
	public function export()
	{
		$this->is_allowed('amuco_details_request_office_export');

		$this->model_amuco_details_request_office->export('amuco_details_request_office', 'amuco_details_request_office');
	}

	/**
	* Export to PDF
	*
	* @return Files PDF .pdf
	*/
	public function export_pdf()
	{
		$this->is_allowed('amuco_details_request_office_export');

		$this->model_amuco_details_request_office->pdf('amuco_details_request_office', 'amuco_details_request_office');
	}


	public function single_pdf($id = null)
	{
		$this->is_allowed('amuco_details_request_office_export');

		$table = $title = 'amuco_details_request_office';
		$this->load->library('HtmlPdf');
      
        $config = array(
            'orientation' => 'p',
            'format' => 'a4',
            'marges' => array(5, 5, 5, 5)
        );

        $this->pdf = new HtmlPdf($config);
        $this->pdf->setDefaultFont('stsongstdlight'); 

        $result = $this->db->get($table);
       
        $data = $this->model_amuco_details_request_office->find($id);
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

		$this->data = [
				"success" => true,
				"datails_req" => $details_req,
				"details" => $details,
				"customer_request" => $customer_request
			];

		echo json_encode($this->data);
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
		$this->db->where('notification_send', 'new');
		$this->db->order_by('contacts');
		$this->db->group_by('contacts');
		$contacts = $this->db->get('amuco_details_customers_request');


		$details_contact=[];
		//ordeno los registros segun contactos
		foreach ($contacts->result() as $key => $contact) {
			
			foreach ($details as $k => $item) {
			
				if($item->contacts !='' && ($contact->contacts == $item->contacts)){
					$details_contact[$key][] = $item;
				}
			}
		}

		$this->db->select('*');
		$this->db->distinct('purchasing');
		$this->db->where('customer_request_id', $customer_request->id);
		$this->db->where('purchasing is not null');
		$this->db->where('notification_send', 'new');
		$this->db->order_by('purchasing');
		$this->db->group_by('purchasing');
		$purchasing = $this->db->get('amuco_details_customers_request');

		$details_purchasing=[];

		//ordeno los registros segun contactos
		foreach ($purchasing->result() as $key => $contact) {
			
			foreach ($details as $k => $item) {

				if($item->purchasing !='' && ($contact->purchasing == $item->purchasing)){
					$details_purchasing[$key][] = $item;
				}
			}
		}

		$this->data = [
				"success" => true,
				"purchasing" => $details_purchasing,
				"contacts"	 => $details_contact,
				"customer_request" => $customer_request
			];

		echo json_encode($this->data);
	}

	public function send_email()
	{
		$this->is_allowed('amuco_details_customers_send_email');
		$arr_details = $this->input->get('arr_details');
		$request_id  = $this->input->get('request_id'); 


		$details = $this->model_amuco_details_customers_request->get_in($arr_details,'id');

		$customer_request =  $this->model_amuco_customer_request->get($request_id,'id')[0];

		//armar email
		 $integration_id=$this->Integration_table->get_from_destination('Amuco',1)[0]->id;
		
		$message_type=$this->message_types->get_message_types_id('EMAIL')['id'];

		$email_template  = json_decode($this->message_template->get_by($integration_id, $message_type)->template);

		$email_message   = $email_template->body;


		//variables
		$amuco_customer_request = cclang('amuco_customer_request');
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

	        /*if ($key === array_key_last($details)){
        		$recipients.=$email;
	        }else{
	        	$recipients.=$email.',';
	        }*/

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

			$this->data = [
				"success" => true,
				"message" => cclang('notification_email')
			];

			echo json_encode($this->data);

		} catch (Exception $e) {
			$this->data = [
				"success" => false,
				"message" => cclang('notification_fails')
			];

			echo json_encode($this->data);
		}
	
	}


	//Cancel send email in add product
	public function cancel_send_email()
	{
		$this->is_allowed('amuco_details_customers_send_email');
		$arr_details = $this->input->get('arr_details');
		$request_id  = $this->input->get('request_id'); 


		$details = $this->model_amuco_details_customers_request->get_in($arr_details,'id');

		$customer_request =  $this->model_amuco_customer_request->get($request_id,'id')[0];

		//armar email
		 $integration_id=$this->Integration_table->get_from_destination('Amuco',1)[0]->id;
		
		$message_type=$this->message_types->get_message_types_id('EMAIL')['id'];

		$email_template  = json_decode($this->message_template->get_by($integration_id, $message_type)->template);

		$email_message   = $email_template->body;


		//variables
		$amuco_customer_request = cclang('amuco_customer_request');
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

			$this->data = [
				"success" => true,
				"message" => cclang('notification_fails')
			];

			echo json_encode($this->data);
	}
}


/* End of file amuco_details_request_office.php */
/* Location: ./application/controllers/administrator/Amuco Details Request Office.php */