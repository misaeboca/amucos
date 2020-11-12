<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_amuco_offers_sent_customers extends MY_Model {

    private $primary_key    = 'id';
    private $table_name     = 'amuco_offers_sent_customers';
    public $field_search   = ['status', 'customer_request_id', 'payments_terms_id', 'quantity', 'unit', 'freight', 'unit_price', 'incoterm', 'destination_port', 'packing', 'fcl', 'type_fcl', 'option_fcl'];

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
                    $where .= "amuco_offers_sent_customers.".$field . " LIKE '%" . $q . "%' ";
                } else {
                    $where .= "OR " . "amuco_offers_sent_customers.".$field . " LIKE '%" . $q . "%' ";
                }
                $iterasi++;
            }

            $where = '('.$where.')';
        } else {
            $where .= "(" . "amuco_offers_sent_customers.".$field . " LIKE '%" . $q . "%' )";
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
                    $where .= "amuco_offers_sent_customers.".$field . " LIKE '%" . $q . "%' ";
                } else {
                    $where .= "OR " . "amuco_offers_sent_customers.".$field . " LIKE '%" . $q . "%' ";
                }
                $iterasi++;
            }

            $where = '('.$where.')';
        } else {
            $where .= "(" . "amuco_offers_sent_customers.".$field . " LIKE '%" . $q . "%' )";
        }

        if (is_array($select_field) AND count($select_field)) {
            $this->db->select($select_field);
        }
        
        $this->join_avaiable()->filter_avaiable();
        $this->db->where($where);
        $this->db->limit($limit, $offset);
        
        $this->sortable();
        
        $query = $this->db->get($this->table_name);

        if(!$query){
            return [];
        }else{
            return $query->result();
        }

       
    }

    public function join_avaiable() {
        $this->db->join('amuco_customer_payment_terms', 'amuco_customer_payment_terms.id = amuco_offers_sent_customers.payments_terms_id', 'LEFT');
        $this->db->join('amuco_supplier_payment_terms', 'amuco_supplier_payment_terms.id = amuco_offers_sent_customers.supplier_payment_term', 'LEFT');
        $this->db->join('amuco_unit_types', 'amuco_unit_types.id = amuco_offers_sent_customers.unit', 'LEFT');
        $this->db->join('amuco_unit_types as unit_pack', 'unit_pack.id = amuco_offers_sent_customers.unit_pack', 'LEFT');
        $this->db->join('amuco_incoterm', 'amuco_incoterm.id = amuco_offers_sent_customers.incoterm', 'LEFT');
        $this->db->join('amuco_incoterm as price_incoterm', 'price_incoterm.id = amuco_offers_sent_customers.price_incoterm', 'LEFT');
        $this->db->join('amuco_material', 'amuco_material.id = amuco_offers_sent_customers.material', 'LEFT');
        $this->db->join('amuco_destination_port', 'amuco_destination_port.id = amuco_offers_sent_customers.destination_port', 'LEFT');
        $this->db->join('amuco_destination_port as shipping_port', 'shipping_port.id = amuco_offers_sent_customers.shipping_port', 'LEFT');
        $this->db->join('amuco_packing', 'amuco_packing.id = amuco_offers_sent_customers.packing', 'LEFT');
        $this->db->join('amuco_details_request_price', 'amuco_details_request_price.id = amuco_offers_sent_customers.request_details_price_id', 'LEFT');
        $this->db->join('amuco_products','amuco_products.id = amuco_details_request_price.product_id', 'LEFT');
        $this->db->join('amuco_suppliers','amuco_suppliers.id = amuco_details_request_price.supplier', 'LEFT');
        $this->db->join('amuco_suppliers as supplier_direct','supplier_direct.id = amuco_details_request_price.supplier_direct', 'LEFT');
        $this->db->join('amuco_suppliers as amuco_manufacturer','amuco_manufacturer.id = amuco_details_request_price.manufacturer', 'LEFT');
        $this->db->select('amuco_offers_sent_customers.*,unit_pack.name as amuco_unit_pack_name,amuco_details_request_price.valid_until as amuco_valid_until,amuco_supplier_payment_terms.description as amuco_supplier_payment_term_description,price_incoterm.name as amuco_price_incoterm_name,amuco_manufacturer.name as amuco_manufacturer_name, amuco_material.name as amuco_material_name,shipping_port.name as amuco_shipping_port_name,supplier_direct.name as amuco_supplier_direct_name,amuco_suppliers.name as amuco_supplier_name,amuco_products.name as amuco_products_name,amuco_customer_payment_terms.short_description as amuco_customer_payment_terms_description,amuco_unit_types.name as amuco_unit_types_name,amuco_incoterm.name as amuco_incoterm_name,amuco_destination_port.name as amuco_destination_port_name,amuco_packing.name as amuco_packing_name');


        return $this;
    }

   /* public function join_avaiable() {
        $this->db->join('amuco_details_request_price', 'amuco_details_request_price.id = amuco_offers_sent_customers.request_details_price_id', 'LEFT');
        $this->db->select('amuco_details_request_price.*');
        return $this;
    }*/

    public function filter_avaiable() {

        if (!$this->aauth->is_admin()) {
            }

        return $this;
    }

    public function getShippingAndDestinationPort($id) {
        $this->db->select(['id', 'shipping_port', 'destination_port']);
        $this->db->where('id', $id);
        $result =  $this->db->get('amuco_offers_sent_customers')->result();
        return $result;
    }

    public function getDetailsOffer($id) {
        $this->db->select('*');
        $this->db->where('id',$id);
        $result = $this->db->get('amuco_details_customers_request')->result();
        return $result;
    }

    public function getDetailsPriceOffer($id) {
        $this->db->select('*');
        $this->db->where('id',$id);
        $result = $this->db->get('amuco_details_request_price')->result();
        return $result;
    }

    public function getContactDataOffice($id) {
        $this->db->select(['full_name', 'email']);
        $this->db->where('id',$id);
        $result = $this->db->get('aauth_users')->result();
        return $result;
    }   
    
    public function getContactData($id) {

        $this->db->select(['id','first_name','last_name','email']);
        $this->db->where('id',$id);
        $result = $this->db->get('amuco_contacts')->result();
        return $result;
    }   

    public function getSupplierData($id) {
        $this->db->select('*');
        $this->db->where('id',$id);
        $result = $this->db->get('amuco_suppliers')->result();
        return $result;
    } 

}

/* End of file Model_amuco_offers_sent_customers.php */
/* Location: ./application/models/Model_amuco_offers_sent_customers.php */