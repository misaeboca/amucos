<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_amuco_purchasing_unit_product extends MY_Model {

    private $primary_key    = 'id';
    private $table_name     = 'amuco_purchasing_unit_product';
    public $field_search   = ['id_purchasing_office', 'id_product', 'id_unit'];

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
                    $where .= "amuco_purchasing_unit_product.".$field . " LIKE '%" . $q . "%' ";
                } else {
                    $where .= "OR " . "amuco_purchasing_unit_product.".$field . " LIKE '%" . $q . "%' ";
                }
                $iterasi++;
            }

            $where = '('.$where.')';
        } else {
            $where .= "(" . "amuco_purchasing_unit_product.".$field . " LIKE '%" . $q . "%' )";
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
                    $where .= "amuco_purchasing_unit_product.".$field . " LIKE '%" . $q . "%' ";
                } else {
                    $where .= "OR " . "amuco_purchasing_unit_product.".$field . " LIKE '%" . $q . "%' ";
                }
                $iterasi++;
            }

            $where = '('.$where.')';
        } else {
            $where .= "(" . "amuco_purchasing_unit_product.".$field . " LIKE '%" . $q . "%' )";
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
        $this->db->join('amuco_purchasing_office', 'amuco_purchasing_office.id = amuco_purchasing_unit_product.id_purchasing_office', 'LEFT');
        $this->db->join('amuco_products', 'amuco_products.id = amuco_purchasing_unit_product.id_product', 'LEFT');
        $this->db->join('amuco_unit_types', 'amuco_unit_types.id = amuco_purchasing_unit_product.id_unit', 'LEFT');
        
        $this->db->select('amuco_purchasing_unit_product.*,amuco_purchasing_office.name as amuco_purchasing_office_name,amuco_products.name as amuco_products_name,amuco_unit_types.name as amuco_unit_types_name');


        return $this;
    }

    public function filter_avaiable() {

        if (!$this->aauth->is_admin()) {
            }

        return $this;
    }

    public function update_data_unit_product($id,$save){ 
        
        $this->db->where('id', $id);
        return $this->db->update($this->table_name, $save);
    }

    public function delete($id){
        $this->db->where('id', $id);
        return $this->db->delete($this->table_name);
    }

}

/* End of file Model_amuco_purchasing_unit_product.php */
/* Location: ./application/models/Model_amuco_purchasing_unit_product.php */