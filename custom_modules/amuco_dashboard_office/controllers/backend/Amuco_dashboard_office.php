<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');

class Amuco_dashboard_office extends Admin 
{
    /**
     * This is default constructor of the class
     */
    public function __construct(){
        parent::__construct();
        $this->load->model([]);
        $this->lang->load('web_lang', $this->current_lang);
        $this->load->model('mw_logs/Log_table');
		$this->load->model('mw_logs/Tracer');
		$this->load->model('mw_logs/Io_types');
		$this->load->model('mw_logs/Integration_table');
		$this->load->model(['amuco_customer_request/model_amuco_customer_request','amuco_details_customers_request/model_amuco_details_customers_request',
							'amuco_contacts/model_amuco_contacts','amuco_details_request_office/model_amuco_details_request_office',
							]);
       
     }

     public function index(){
        $search_text            = null;
        $config = [
            'base_url'     => 'administrator/amuco_dashboard_office/',
            'total_rows'   => 10,
            'per_page'     => 1,
            'uri_segment'  => 4,
        ];
        
            $this->data['pagination'] = $this->pagination($config);
            $this->template->title('Amuco : Dashboard Office');
            $this->render('backend/standart/administrator/amuco_dashboard_office/dashboard_office_view', $this->data);
    }

    public function request_pendig($offset = 0){
       

		$filter = $this->input->get('q');
		$field 	= $this->input->get('f');
        $user = $this->aauth->get_user();
        //var_dump($user); die;
		$this->data['amuco_customer_requests'] = $this->model_amuco_customer_request->get_customer_details( $user->id);
		$this->data['amuco_customer_request_counts'] = count($this->data['amuco_customer_requests']);
      //var_dump($this->data['amuco_customer_requests']);die;
		$config = [
			'base_url'     => 'administrator/amuco_dashboard_office/request_pendig/',
			'total_rows'   => $this->model_amuco_details_customers_request->count_all($user->id, 'purchasing'),
			'per_page'     => $this->limit_page,
			'uri_segment'  => 4,
		];

		$this->data['pagination'] = $this->pagination($config);

		$this->template->title('Amuco Customer Request List');
		$this->render('backend/standart/administrator/amuco_dashboard_office/menu_request_pending', $this->data);
    }

    public function view_office_request($id){
		$purchasing_id = $this->aauth->get_user()->id;
		$this->is_allowed('amuco_customer_request_view');
		$this->data['amuco_customer_request'] = $this->model_amuco_customer_request->join_avaiable()->filter_avaiable()->find($id);
        $this->data['amuco_details_customers_requests'] = $this->model_amuco_details_customers_request->get_details_by_off_sup($id,$purchasing_id);
       //var_dump($this->data['amuco_details_customers_requests'] );die;
        if(count($this->data['amuco_details_customers_requests']) > 0){
            foreach( $this->data['amuco_details_customers_requests'] as $item){
                $id_request = $item->customer_request_id;
                $id_details = $item->id;
                $item->details_price = [];
                $item->details_price = $this->model_amuco_details_request_office->get($id_details,'details_customer_request_id');
            }
            //var_dump($this->data['amuco_details_customers_requests'] );die;
        }
		$this->data['amuco_details_customers_request_counts'] = count($this->data['amuco_details_customers_requests']);
		$this->data['current_page'] = 'view_office'; 
		$this->template->title('Amuco Customer Request Detail');
		$this->render('backend/standart/administrator/amuco_dashboard_office/amuco_office_request_view', $this->data);
	}
    
}    