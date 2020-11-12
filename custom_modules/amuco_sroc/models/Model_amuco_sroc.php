<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_amuco_sroc extends MY_Model {

    private $primary_key    = 'id';
    private $table_name     = 'amuco_sroc';
    public $field_search   = ['customer_request_id', 'status', 'date_created', 'date_updated'];

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
                    $where .= "amuco_sroc.".$field . " LIKE '%" . $q . "%' ";
                } else {
                    $where .= "OR " . "amuco_sroc.".$field . " LIKE '%" . $q . "%' ";
                }
                $iterasi++;
            }

            $where = '('.$where.')';
        } else {
            $where .= "(" . "amuco_sroc.".$field . " LIKE '%" . $q . "%' )";
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
                    $where .= "amuco_sroc.".$field . " LIKE '%" . $q . "%' ";
                } else {
                    $where .= "OR " . "amuco_sroc.".$field . " LIKE '%" . $q . "%' ";
                }
                $iterasi++;
            }

            $where = '('.$where.')';
        } else {
            $where .= "(" . "amuco_sroc.".$field . " LIKE '%" . $q . "%' )";
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
        
        $this->db->select('amuco_sroc.*');


        return $this;
    }

    public function filter_avaiable() {

        if (!$this->aauth->is_admin()) {
            }

        return $this;
    }

    public function insert_sroc_offers($data) {

        $this->db->insert('amuco_sroc_offers',$data);

    }

    public function get_sroc_offers($id_sroc) {

        $this->db->select('amuco_sroc_offers.id_offers_sent_customers');
        $this->db->where('id_sroc', $id_sroc);
        $query = $this->db->get('amuco_sroc_offers');

        return $query->result();
    }

    public function save_document($data) {
        $this->db->insert('amuco_documents',$data);
    }

}

/* End of file Model_amuco_sroc.php */
/* Location: ./application/models/Model_amuco_sroc.php */