<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_amuco_customers extends MY_Model {

    private $primary_key    = 'id';
    private $table_name     = 'amuco_customers';
    public $field_search   = ['id', 'name', 'code', 'nit', 'email', 'country', 'is_branche', 'head_office', 'industry_type', 'sales_agent'];

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
                    $where .= "amuco_customers.".$field . " LIKE '%" . $q . "%' ";
                } else {
                    $where .= "OR " . "amuco_customers.".$field . " LIKE '%" . $q . "%' ";
                }
                $iterasi++;
            }

            $where = '('.$where.')';
        } else {
            $where .= "(" . "amuco_customers.".$field . " LIKE '%" . $q . "%' )";
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
                    $where .= "amuco_customers.".$field . " LIKE '%" . $q . "%' ";
                } else {
                    $where .= "OR " . "amuco_customers.".$field . " LIKE '%" . $q . "%' ";
                }
                $iterasi++;
            }

            $where = '('.$where.')';
        } else {
            $where .= "(" . "amuco_customers.".$field . " LIKE '%" . $q . "%' )";
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
        $this->db->join('amuco_countries', 'amuco_countries.id = amuco_customers.country', 'LEFT');
        $this->db->join('amuco_industry_type', 'amuco_industry_type.id = amuco_customers.industry_type', 'LEFT');
        $this->db->join('aauth_users', 'aauth_users.id = amuco_customers.sales_agent', 'LEFT');
        
        $this->db->select('amuco_customers.*,amuco_countries.name as amuco_countries_name,amuco_industry_type.name as amuco_industry_type_name,aauth_users.full_name as aauth_users_full_name');


        return $this;
    }

    public function filter_avaiable() {

        if (!$this->aauth->is_admin()) {
            }

        return $this;
    }

}

/* End of file Model_amuco_customers.php */
/* Location: ./application/models/Model_amuco_customers.php */