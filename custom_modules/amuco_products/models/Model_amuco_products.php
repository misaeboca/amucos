<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_amuco_products extends MY_Model {

    private $primary_key    = 'id';
    private $table_name     = 'amuco_products';
    public $field_search   = ['id', 'name', 'cas', 'category_id', 'industry_id', 'purchasing_office'];

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
                    $where .= "amuco_products.".$field . " LIKE '%" . $q . "%' ";
                } else {
                    $where .= "OR " . "amuco_products.".$field . " LIKE '%" . $q . "%' ";
                }
                $iterasi++;
            }

            $where = '('.$where.')';
        } else {
            $where .= "(" . "amuco_products.".$field . " LIKE '%" . $q . "%' )";
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
                    $where .= "amuco_products.".$field . " LIKE '%" . $q . "%' ";
                } else {
                    $where .= "OR " . "amuco_products.".$field . " LIKE '%" . $q . "%' ";
                }
                $iterasi++;
            }

            $where = '('.$where.')';
        } else {
            $where .= "(" . "amuco_products.".$field . " LIKE '%" . $q . "%' )";
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
        $this->db->join('amuco_unit_types', 'amuco_unit_types.id = amuco_products.unit_id', 'LEFT');
        $this->db->join('amuco_category_product', 'amuco_category_product.id = amuco_products.category_id', 'LEFT');
        $this->db->join('amuco_industry_type', 'amuco_industry_type.name = amuco_products.industry_id', 'LEFT');
        $this->db->join('amuco_suppliers', 'amuco_suppliers.id = amuco_products.suppliers_id', 'LEFT');
        $this->db->join('amuco_purchasing_office', 'amuco_purchasing_office.id = amuco_products.purchasing_office', 'LEFT');
        
        $this->db->select('amuco_products.*,amuco_unit_types.name as amuco_unit_types_name,amuco_category_product.name as amuco_category_product_name,amuco_industry_type.name as amuco_industry_type_name,amuco_suppliers.name as amuco_suppliers_name,amuco_purchasing_office.name as amuco_purchasing_office_name');


        return $this;
    }

    public function filter_avaiable() {

        if (!$this->aauth->is_admin()) {
            }

        return $this;
    }

}

/* End of file Model_amuco_products.php */
/* Location: ./application/models/Model_amuco_products.php */