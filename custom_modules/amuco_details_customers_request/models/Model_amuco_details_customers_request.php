<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_amuco_details_customers_request extends MY_Model {

    private $primary_key    = 'id';
    private $table_name     = 'amuco_details_customers_request';
    public $field_search   = ['product_id', 'customer_request_id', 'quantity', 'status', 'packing', 'fcl_option', 'type_fcl', 'pallets', 'unit_pack', 'supplier', 'purchasing', 'contacts', 'ETD', 'ETA', 'date_created', 'date_updated'];

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
                    $where .= "amuco_details_customers_request.".$field . " LIKE '%" . $q . "%' ";
                } else {
                    $where .= "OR " . "amuco_details_customers_request.".$field . " LIKE '%" . $q . "%' ";
                }
                $iterasi++;
            }

            $where = '('.$where.')';
        } else {
            $where .= "(" . "amuco_details_customers_request.".$field . " LIKE '%" . $q . "%' )";
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
                    $where .= "amuco_details_customers_request.".$field . " LIKE '%" . $q . "%' ";
                } else {
                    $where .= "OR " . "amuco_details_customers_request.".$field . " LIKE '%" . $q . "%' ";
                }
                $iterasi++;
            }

            $where = '('.$where.')';
        } else {
            $where .= "(" . "amuco_details_customers_request.".$field . " LIKE '%" . $q . "%' )";
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
    
    public function get_in($q_in = [], $field = null,  $limit = 0, $offset = 0, $select_field = [])
    {
        $iterasi = 1;
        $num = count($this->field_search);
        $where = NULL;
        $field = $this->scurity($field);
     
        $cad='';
        if (is_array($q_in) AND count($q_in)) {

            for ($i=0; $i < count($q_in); $i++) { 
                if($i != count($q_in)-1){
                    $cad .= $q_in[$i].',';
                }else{
                    $cad .= $q_in[$i];
                }
            }
          
        }

        if (is_array($select_field) AND count($select_field)) {
            $this->db->select($select_field);
        }
        
        $this->join_avaiable()->filter_avaiable();
        $this->db->where('amuco_details_customers_request.'.$field.' in('.$cad.')');
        $this->db->where('( notification_send="new" or notification_send is NULL or notification_send="" )');
        $this->db->limit($limit, $offset);
        $this->db->order_by('supplier');
        $this->db->order_by('contacts');
        
        $this->sortable();
        $query = $this->db->get($this->table_name);

        return $query->result();
    }

    public function get_items($q = null, $field = null,  $limit = 0, $offset = 0, $select_field = [])
    {
        $iterasi = 1;
        $num = count($this->field_search);
        $where = NULL;
        $q = $this->scurity($q);
        $field = $this->scurity($field);


        if (empty($field)) {
            foreach ($this->field_search as $field) {
                if ($iterasi == 1) {
                    $where .= "amuco_details_customers_request.".$field . " LIKE '%" . $q . "%' ";
                } else {
                    $where .= "OR " . "amuco_details_customers_request.".$field . " LIKE '%" . $q . "%' ";
                }
                $iterasi++;
            }

            $where = '('.$where.')';
        } else {
            $where .= "(" . "amuco_details_customers_request.".$field . " LIKE '%" . $q . "%' )";
        }


        if (is_array($select_field) AND count($select_field)) {
            $this->db->select($select_field);
        }
        
        $this->join_avaiable()->filter_avaiable();
        $this->db->where($where);
        $this->db->where('( notification_send="new" or notification_send is NULL or notification_send="" )');
        $this->db->limit($limit, $offset);
  
        $this->sortable();

        $this->db->order_by('id', 'ASC');
        
        $query = $this->db->get($this->table_name);

        return $query->result();
    }
    public function join_avaiable() {
        $this->db->join('amuco_products', 'amuco_products.id = amuco_details_customers_request.product_id', 'LEFT');
        $this->db->join('amuco_unit_types', 'amuco_unit_types.id = amuco_details_customers_request.unit', 'LEFT');
        $this->db->join('amuco_packing', 'amuco_packing.id = amuco_details_customers_request.packing', 'LEFT');
        $this->db->join('amuco_material', 'amuco_material.id = amuco_details_customers_request.material', 'LEFT');
        $this->db->join('amuco_suppliers', 'amuco_suppliers.id = amuco_details_customers_request.supplier', 'LEFT');
        $this->db->join('aauth_users', 'aauth_users.id = amuco_details_customers_request.purchasing', 'LEFT');
        $this->db->join('amuco_customer_request', 'amuco_customer_request.id = amuco_details_customers_request.customer_request_id', 'LEFT');
        $this->db->join('amuco_contacts', 'amuco_contacts.id = amuco_details_customers_request.contacts', 'LEFT');
        $this->db->join('amuco_destination_port', 'amuco_destination_port.id = amuco_customer_request.destination_port', 'LEFT');
        $this->db->select('amuco_details_customers_request.*,
            aauth_users.username as purchasing_username,
            amuco_suppliers.name as amuco_suppliers_name,
            amuco_products.name as amuco_products_name,
            amuco_unit_types.name as amuco_unit_types_name,
            amuco_contacts.name as amuco_contacts_name,
            amuco_packing.name as amuco_packing_name,
            amuco_material.name as amuco_material_name, 
            amuco_suppliers.email as amuco_suppliers_email,
            aauth_users.email as purchasing_email, 
            amuco_unit_types.name as amuco_unit_types_name, 
            amuco_material.name as amuco_material_name,
            amuco_destination_port.name as amuco_destination_port_name');
        return $this;
    }

    public function filter_avaiable() {

        if (!$this->aauth->is_admin()) {
            }

        return $this;
    }

    public function get_details_by_off_sup($id,$purchasing_id){
        $this->join_avaiable();
        $this->db->where('customer_request_id',$id);
        $this->db->where('purchasing',$purchasing_id);
        $this->db->where('amuco_details_customers_request.status !=','New');
        $query = $this->db->get($this->table_name);
        return $query->result();
    }

    public function get_by_status($id_request,$status){
        $this->join_avaiable();
        $this->db->where('customer_request_id',$id_request);
        $this->db->where('amuco_details_customers_request.status',$status);
        $query = $this->db->get($this->table_name);
        return $query->result();
    }

    public function get_data_by_id_product_status($id_request,$product_id,$status){
        $this->join_avaiable();
        $this->db->where('customer_request_id',$id_request);
        $this->db->where('product_id',$product_id);
        $this->db->where('status',$status);
        $query = $this->db->get($this->table_name);
        return $query->result();
    }

    public function delete_items_reques_id($field,$request_id){
        return  $this->db->delete($this->table_name, array($field => $request_id));
    }
}

/* End of file Model_amuco_details_customers_request.php */
/* Location: ./application/models/Model_amuco_details_customers_request.php */