<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_amuco_samples extends MY_Model {

    private $primary_key    = 'id';
    private $table_name     = 'amuco_samples';
    public $field_search   = ['id', 'product_id', 'supplier_id', 'status', 'customer_id'];

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
                    $where .= "amuco_samples.".$field . " LIKE '%" . $q . "%' ";
                } else {
                    $where .= "OR " . "amuco_samples.".$field . " LIKE '%" . $q . "%' ";
                }
                $iterasi++;
            }

            $where = '('.$where.')';
        } else {
            $where .= "(" . "amuco_samples.".$field . " LIKE '%" . $q . "%' )";
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
                    $where .= "amuco_samples.".$field . " LIKE '%" . $q . "%' ";
                } else {
                    $where .= "OR " . "amuco_samples.".$field . " LIKE '%" . $q . "%' ";
                }
                $iterasi++;
            }

            $where = '('.$where.')';
        } else {
            $where .= "(" . "amuco_samples.".$field . " LIKE '%" . $q . "%' )";
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
        $this->db->join('amuco_products', 'amuco_products.id = amuco_samples.product_id', 'LEFT');
        $this->db->join('amuco_suppliers', 'amuco_suppliers.id = amuco_samples.supplier_id', 'LEFT');
        $this->db->join('amuco_customers', 'amuco_customers.id = amuco_samples.customer_id', 'LEFT');
        
        $this->db->select('amuco_samples.*,amuco_products.name as amuco_products_name,amuco_suppliers.name as amuco_suppliers_name,amuco_customers.name as amuco_customers_name');


        return $this;
    }

    public function filter_avaiable() {

        if (!$this->aauth->is_admin()) {
            }

        return $this;
    }

}

/* End of file Model_amuco_samples.php */
/* Location: ./application/models/Model_amuco_samples.php */