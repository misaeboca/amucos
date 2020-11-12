<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_amuco_customer_request extends MY_Model {

    private $primary_key    = 'id';
    private $table_name     = 'amuco_customer_request';
    public $field_search   = ['id', 'date_created', 'status', 'customer', 'sales_agent', 'contact'];

    public function __construct()
    {
        $config = array(
            'primary_key'   => $this->primary_key,
            'table_name'    => $this->table_name,
            'field_search'  => $this->field_search,
         );

        parent::__construct($config);
    }

    public function count_all($q = null, $field = null)
    {
        $iterasi = 1;
        $num = count($this->field_search);
        $where = NULL;
        $q = $this->scurity($q);
        $field = $this->scurity($field);

        if (empty($field)) {
            foreach ($this->field_search as $field) {
                if ($iterasi == 1) {
                    $where .= "amuco_customer_request.".$field . " LIKE '%" . $q . "%' ";
                } else {
                    $where .= "OR " . "amuco_customer_request.".$field . " LIKE '%" . $q . "%' ";
                }
                $iterasi++;
            }

            $where = '('.$where.')';
        } else {
            $where .= "(" . "amuco_customer_request.".$field . " LIKE '%" . $q . "%' )";
        }

        $this->join_avaiable()->filter_avaiable();
        $this->db->where($where);
        $query = $this->db->get($this->table_name);

        return $query->num_rows();
    }

    public function get($q = null, $field = null, $limit = 0, $offset = 0, $select_field = [])
    {
        $iterasi = 1;
        $num = count($this->field_search);
        $where = NULL;
        $q = $this->scurity($q);
        $field = $this->scurity($field);

        if (empty($field)) {
            foreach ($this->field_search as $field) {
                if ($iterasi == 1) {
                    $where .= "amuco_customer_request.".$field . " LIKE '%" . $q . "%' ";
                } else {
                    $where .= "OR " . "amuco_customer_request.".$field . " LIKE '%" . $q . "%' ";
                }
                $iterasi++;
            }

            $where = '('.$where.')';
        } else {
            $where .= "(" . "amuco_customer_request.".$field . " LIKE '%" . $q . "%' )";
        }

        if (is_array($select_field) AND count($select_field)) {
            $this->db->select($select_field);
        }
        
        $this->join_avaiable()->filter_avaiable();
        $this->db->where($where);
        $this->db->limit($limit, $offset);
        
        $this->sortable();
        
        $query = $this->db->get($this->table_name);

        return $query->result();
    }

    public function join_avaiable() {
        $this->db->join('amuco_customers', 'amuco_customers.id = amuco_customer_request.customer', 'LEFT');
        $this->db->join('aauth_users', 'aauth_users.id = amuco_customer_request.sales_agent', 'LEFT');
        $this->db->join('amuco_contacts', 'amuco_contacts.id = amuco_customer_request.contact', 'LEFT');
        $this->db->join('amuco_destination_port', 'amuco_destination_port.id = amuco_customer_request.destination_port', 'LEFT');
        $this->db->join('amuco_incoterm', 'amuco_incoterm.id = amuco_customer_request.incoterm', 'LEFT');
        $this->db->join('amuco_contacts as representative', 'representative.id = amuco_customer_request.representative', 'LEFT');
       // $this->db->select('amuco_customer_request.*,representative.name as amuco_representative_name,amuco_customers.name as amuco_customers_name,aauth_users.username as aauth_users_username,amuco_contacts.name as amuco_contacts_name,amuco_destination_port.name as amuco_destination_port_name,amuco_incoterm.name as amuco_incoterm_name');
        $this->db->select('amuco_customer_request.*,,representative.name as amuco_representative_name,amuco_customers.name as amuco_customers_name,aauth_users.username as aauth_users_username, aauth_users.full_name as aauth_users_fullname, amuco_contacts.name as amuco_contacts_name,amuco_destination_port.name as amuco_destination_port_name,amuco_incoterm.name as amuco_incoterm_name');



        return $this;
    }

    public function filter_avaiable() {

        if (!$this->aauth->is_admin()) {
            }

        return $this;
    }
    public function get_customer_details($id){
        $this->db->join('amuco_customers', 'amuco_customers.id = amuco_customer_request.customer', 'LEFT');
        $this->db->join('aauth_users', 'aauth_users.id = amuco_customer_request.sales_agent', 'LEFT');
        $this->db->join('amuco_contacts', 'amuco_contacts.id = amuco_customer_request.contact', 'LEFT');
        $this->db->join('amuco_destination_port', 'amuco_destination_port.id = amuco_customer_request.destination_port', 'LEFT');
        $this->db->join('amuco_incoterm', 'amuco_incoterm.id = amuco_customer_request.incoterm', 'LEFT');
      
       $this->db->join('amuco_details_customers_request', 'amuco_customer_request.id = amuco_details_customers_request.customer_request_id','LEFT');
       $this->db->where('purchasing',$id);
       $this->db->group_by('amuco_customer_request.id');
      // $this->db->select('amuco_customer_request.*');
       $this->db->select('amuco_customer_request.*,amuco_customers.name as amuco_customers_name,aauth_users.username as aauth_users_username, aauth_users.full_name as aauth_users_fullname, amuco_contacts.name as amuco_contacts_name,amuco_destination_port.name as amuco_destination_port_name,amuco_incoterm.name as amuco_incoterm_name');

       $query = $this->db->get($this->table_name);

        return $query->result();
    }

    public function get_customer_request_by_user_status($status){
        $this->db->join('amuco_customers', 'amuco_customers.id = amuco_customer_request.customer', 'LEFT');
        $this->db->join('aauth_users', 'aauth_users.id = amuco_customer_request.sales_agent', 'LEFT');
        $this->db->join('amuco_contacts', 'amuco_contacts.id = amuco_customer_request.contact', 'LEFT');
        $this->db->join('amuco_destination_port', 'amuco_destination_port.id = amuco_customer_request.destination_port', 'LEFT');
        $this->db->join('amuco_incoterm', 'amuco_incoterm.id = amuco_customer_request.incoterm', 'LEFT');
      
        $this->db->join('amuco_details_customers_request', 'amuco_customer_request.id = amuco_details_customers_request.customer_request_id','LEFT');
        //$this->db->where('amuco_customer_request.sales_agent',$id);
        $this->db->where('amuco_customer_request.status',$status);
        $this->db->group_by('amuco_customer_request.id');
        $this->db->select('amuco_customer_request.*,amuco_customers.name as amuco_customers_name,aauth_users.username as aauth_users_username, aauth_users.full_name as aauth_users_fullname, amuco_contacts.name as amuco_contacts_name,amuco_destination_port.name as amuco_destination_port_name,amuco_incoterm.name as amuco_incoterm_name');

        $query = $this->db->get($this->table_name);

        return $query->result();
    }

    public function get_products_request($id){
        $this->db->join('amuco_details_customers_request', 'amuco_customer_request.id = amuco_details_customers_request.customer_request_id','LEFT');
        $this->db->join('amuco_products', 'amuco_products.id = amuco_details_customers_request.product_id','LEFT');
        $this->db->where('amuco_customer_request.id',$id);
        $this->db->where('amuco_details_customers_request.status','Offer Received');
        $this->db->group_by('amuco_details_customers_request.product_id');
        $this->db->select('amuco_products.*');
        $query = $this->db->get($this->table_name);

        return $query->result();
    }

}

/* End of file Model_amuco_customer_request.php */
/* Location: ./application/models/Model_amuco_customer_request.php */