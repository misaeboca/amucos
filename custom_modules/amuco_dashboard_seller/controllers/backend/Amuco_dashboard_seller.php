<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');

class Amuco_dashboard_seller extends Admin 
{
    /**
     * This is default constructor of the class
     */
    public function __construct(){
        parent::__construct();
        // $this->load->model([]);
        
		$this->load->model(['amuco_customer_request/model_amuco_customer_request', 'amuco_details_customers_request/model_amuco_details_customers_request',
							'amuco_contacts/model_amuco_contacts',
                            ]);
        $this->lang->load('web_lang', $this->current_lang);
       
     }

     public function index(){
      
       // $this->is_allowed('dashboard_amuco_seller');
        $customer_requests_details = array();
        $search_text = null;
        $filter = $this->input->get('q');
        $field 	= $this->input->get('f');
        $offset = 0;
        $requests_news = array();
        $requests_offer_received = array();
        
        $this->data['amuco_customer_requests'] = $this->model_amuco_customer_request->get($filter, $field, $this->limit_page, $offset);
        
        foreach($this->data['amuco_customer_requests'] as $request_customer) {
            $this->data['amuco_details_customers_requests'] = $this->model_amuco_details_customers_request->get($request_customer->id, 'customer_request_id');

            if(!empty($this->data['amuco_details_customers_requests'])) {
                array_push($customer_requests_details, $this->data['amuco_details_customers_requests']);
            }
        }

        foreach($customer_requests_details as $customer_requests_detail) {
            foreach($customer_requests_detail as $value) {
                // print_r($customer_requests_detail);
                if($value->status == 'New') {
                    array_push($requests_news, $value->status);
                }else if($value->status == 'Offer Received') {
                    array_push($requests_offer_received, $value->status);
                }
            }
        }
 

        $this->data['amuco_customer_requests'] = $customer_requests_details;
        $this->data['requests_news'] = count($requests_news);
        $this->data['requests_offer_received'] = count($requests_offer_received);
        $this->data['total_suppliers'] = count(db_get_all_data('amuco_suppliers'));
        $this->data['total_customers'] = count(db_get_all_data('amuco_customers'));

        $config = [
            'base_url'     => 'administrator/amuco_dashboard_seller/',
            'total_rows'   => 10,
            'per_page'     => 1,
            'uri_segment'  => 4,
        ];
        
            $this->data['pagination'] = $this->pagination($config);
            $this->template->title('Amuco : Dashboard Seller');
             //var_dump("aqui");die;
           // $this->render('backend/standart/administrator/amuco_incoterm/amuco_incoterm_add', $this->data);
            $this->render('backend/standart/administrator/amuco_dashboard_seller/dashboard_view', $this->data);
    }
    
}    