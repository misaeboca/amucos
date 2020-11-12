<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_amuco_details_request_office extends MY_Model {

    private $primary_key    = 'id';
    private $table_name     = 'amuco_details_request_price';
    public $field_search   = ['customer_request_id', 'status', 'ETD', 'product_id', 'quantity', 'unit', 'price_fob', 'total_freight', 'total_price', 'supplier_incoterm', 'supplier'];

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
                    $where .= "amuco_details_request_price.".$field . " LIKE '%" . $q . "%' ";
                } else {
                    $where .= "OR " . "amuco_details_request_price.".$field . " LIKE '%" . $q . "%' ";
                }
                $iterasi++;
            }

            $where = '('.$where.')';
        } else {
            $where .= "(" . "amuco_details_request_price.".$field . " LIKE '%" . $q . "%' )";
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
                    $where .= "amuco_details_request_price.".$field . " LIKE '%" . $q . "%' ";
                } else {
                    $where .= "OR " . "amuco_details_request_price.".$field . " LIKE '%" . $q . "%' ";
                }
                $iterasi++;
            }

            $where = '('.$where.')';
        } else {
            $where .= "(" . "amuco_details_request_price.".$field . " LIKE '%" . $q . "%' )";
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
        $this->db->join('amuco_products', 'amuco_products.id = amuco_details_request_price.product_id', 'LEFT');
        $this->db->join('amuco_unit_types', 'amuco_unit_types.id = amuco_details_request_price.unit', 'LEFT');
        $this->db->join('amuco_unit_types as unit_pack', 'unit_pack.id = amuco_details_request_price.unit_pack', 'LEFT');
        $this->db->join('amuco_material', 'amuco_material.id = amuco_details_request_price.material', 'LEFT');
        $this->db->join('amuco_packing', 'amuco_packing.id = amuco_details_request_price.shape', 'LEFT');
        $this->db->join('amuco_destination_port as shipping_port', 'shipping_port.id = amuco_details_request_price.shipping_port', 'LEFT');
        $this->db->join('amuco_destination_port', 'amuco_destination_port.id = amuco_details_request_price.destination_port', 'LEFT');
        $this->db->join('amuco_incoterm as incoterm_1', 'incoterm_1.id = amuco_details_request_price.supplier_incoterm', 'LEFT');
        $this->db->join('amuco_incoterm as incoterm_2', 'incoterm_2.id = amuco_details_request_price.incoterm_price', 'LEFT');
        $this->db->join('amuco_suppliers', 'amuco_suppliers.id = amuco_details_request_price.supplier', 'LEFT');
        $this->db->join('amuco_supplier_payment_terms', 'amuco_supplier_payment_terms.id = amuco_details_request_price.payment_terms', 'LEFT');
        $this->db->join('aauth_users', 'aauth_users.id = amuco_details_request_price.purchasing', 'LEFT');
        $this->db->join('amuco_suppliers as amuco_suppliers1', 'amuco_suppliers1.id = amuco_details_request_price.supplier_direct', 'LEFT');
        $this->db->join('amuco_suppliers as amuco_supp_manufacturer', 'amuco_supp_manufacturer.id = amuco_details_request_price.manufacturer', 'LEFT');
        $this->db->select('amuco_details_request_price.*,unit_pack.name as amuco_unit_pack_name,amuco_supp_manufacturer.name as amuco_manufacturer_name, amuco_suppliers1.name as amuco_supplier_direct_name,incoterm_2.name as amuco_incoterm_price_name,amuco_products.name as amuco_products_name,amuco_unit_types.name as amuco_unit_types_name,amuco_material.name as amuco_material_name,amuco_packing.name as amuco_shape_name,amuco_destination_port.name as amuco_destination_port_name,shipping_port.name as amuco_shipping_port_name,incoterm_1.name as amuco_incoterm_name,amuco_suppliers.name as amuco_suppliers_name,amuco_supplier_payment_terms.description as amuco_payments_terms_suppliers_name,aauth_users.username as aauth_users_username,amuco_suppliers.name as amuco_suppliers_name');


        return $this;
    }

    public function filter_avaiable() {

        if (!$this->aauth->is_admin()) {
            }

        return $this;
    }

    public function get_data_status_and_client($client_id,$status){
        $this->join_avaiable();
        $this->db->where('status',$status);
        $this->db->where('purchasing',$client_id);
        $query = $this->db->get($this->table_name);

        return $query->result();
    }

    public function get_data_by_id_product_status($id_request,$product_id){
        $this->join_avaiable();
        $this->db->where('customer_request_id',$id_request);
        $this->db->where('product_id',$product_id);
      //  $this->db->where('status',$status);
        $query = $this->db->get($this->table_name);
        return $query->result();
    }

    public function delete_items_reques_id($field,$request_id){
        return  $this->db->delete($this->table_name, array($field => $request_id));
    }

}

/* End of file Model_amuco_details_request_office.php */
/* Location: ./application/models/Model_amuco_details_request_office.php */