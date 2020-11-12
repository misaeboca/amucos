<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_amuco_contacts extends MY_Model {

    private $primary_key    = 'id';
    private $table_name     = 'amuco_contacts';
    public $field_search   = ['id', 'type_contact', 'name', 'position', 'email', 'line_products', 'customer_id', 'supplier_id', 'country', 'additional_information'];

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
                    $where .= "amuco_contacts.".$field . " LIKE '%" . $q . "%' ";
                } else {
                    $where .= "OR " . "amuco_contacts.".$field . " LIKE '%" . $q . "%' ";
                }
                $iterasi++;
            }

            $where = '('.$where.')';
        } else {
            $where .= "(" . "amuco_contacts.".$field . " LIKE '%" . $q . "%' )";
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
                    $where .= "amuco_contacts.".$field . " LIKE '%" . $q . "%' ";
                } else {
                    $where .= "OR " . "amuco_contacts.".$field . " LIKE '%" . $q . "%' ";
                }
                $iterasi++;
            }

            $where = '('.$where.')';
        } else {
            $where .= "(" . "amuco_contacts.".$field . " LIKE '%" . $q . "%' )";
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
        $this->db->join('amuco_industry_type', 'amuco_industry_type.id = amuco_contacts.line_products', 'LEFT');
        $this->db->join('amuco_customers', 'amuco_customers.id = amuco_contacts.customer_id', 'LEFT');
        $this->db->join('amuco_suppliers', 'amuco_suppliers.id = amuco_contacts.supplier_id', 'LEFT');
        $this->db->join('amuco_countries', 'amuco_countries.id = amuco_contacts.country', 'LEFT');
        
        $this->db->select('amuco_contacts.*,amuco_industry_type.name as amuco_industry_type_name,amuco_customers.name as amuco_customers_name,amuco_suppliers.name as amuco_suppliers_name,amuco_countries.name as amuco_countries_name');


        return $this;
    }

    public function filter_avaiable() {

        if (!$this->aauth->is_admin()) {
            }

        return $this;
    }

    public function get_contacts($id,$type,$field){
        $this->db->join('amuco_industry_type', 'amuco_industry_type.id = amuco_contacts.line_products', 'LEFT');
        $this->db->join('amuco_customers', 'amuco_customers.id = amuco_contacts.customer_id', 'LEFT');
        $this->db->join('amuco_suppliers', 'amuco_suppliers.id = amuco_contacts.supplier_id', 'LEFT');
        $this->db->join('amuco_countries', 'amuco_countries.id = amuco_contacts.country', 'LEFT');
        
        $this->db->select('amuco_contacts.*,amuco_industry_type.name as amuco_industry_type_name,amuco_customers.name as amuco_customers_name,amuco_suppliers.name as amuco_suppliers_name,amuco_countries.name as amuco_countries_name');

        $query = $this->db->get_where($this->table_name, [$field => $id,'type_contact'=>$type]);
        
        return $query->result();
    }

}

/* End of file Model_amuco_contacts.php */
/* Location: ./application/models/Model_amuco_contacts.php */