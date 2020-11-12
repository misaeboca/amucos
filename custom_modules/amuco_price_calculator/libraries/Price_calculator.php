<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Price_calculator extends CI_Controller {
   private $CI;

   function __construct() {
      $this->CI =& get_instance();
      $this->CI->load->database();
  }

   public function get_all_calculations($data_purchase_to_supplier) {
     
      $calculate_object =new stdClass();
      $calculate_object->calculations = array();
      $calculations = array();
      $this->CI->db->select('*');
      // $this->CI->db->where('payment_code', 'PREPAID');
      $data_customer_payment_terms = $this->CI->db->get('amuco_customer_payment_terms')->result();
      $data_pricing_settings = $this->CI->db->get('amuco_pricing_settings')->result();


      $fix_expenses = $data_pricing_settings[0]->fix_expenses;
      $variable_expenses = $data_pricing_settings[0]->variable_expenses;
      $finance_costs = $data_pricing_settings[0]->finance_costs;
      $coface = $data_pricing_settings[0]->coface;
      $bank_charge = $data_pricing_settings[0]->bank_charge;
      $freight_insurance = $data_pricing_settings[0]->freight_insurance;
      $commision_purchase_office = $data_pricing_settings[0]->commision_purchase_office;//viene por post
      $commision_representative = $data_pricing_settings[0]->commision_representative;//viene por post
      $commision_sales_agent = $data_pricing_settings[0]->commision_sales_agent;//viene por post 
      $quantity = $data_purchase_to_supplier['quantity'];
      $freight = $data_purchase_to_supplier['freight'];
      $purchase_amount = $data_purchase_to_supplier['purchase_amount'];
      $terms = $data_purchase_to_supplier['terms']; //days supplier_payment_terms
      $days = $data_purchase_to_supplier['days'];
      $cost_coface = 0; 
      $code_payment = '';
      if($data_purchase_to_supplier['payment_customer'] == '0'){
         $payment_days_customer = 0;
         $cost_coface = 1; 
      }else{
         $data_customer_payment_terms_select = $this->CI->db->get_where('amuco_customer_payment_terms', array('id' => $data_purchase_to_supplier['payment_customer']))->result();
         if(count($data_customer_payment_terms_select)> 0){
            $days_customer =  $data_customer_payment_terms_select[0]->theoretical_days; 
            $cost_coface =  $data_customer_payment_terms_select[0]->apply_coface;
            $code_payment =  $data_customer_payment_terms_select[0]->payment_code;
         }else{
            $days_customer =  0; 
            $cost_coface =  0;
            $code_payment = '';
         }
         $payment_days_customer =(int)$days_customer - (int)$terms + (int)$days;
         if($payment_days_customer < 0){
            $payment_days_customer = 0;
         }
      }
      $financing_result = (($purchase_amount * $finance_costs / 365) * $payment_days_customer) / 100;
      if($cost_coface == 0){
         $coface_result = 0;
      }else{
         $coface_result = $purchase_amount * $coface / 100;
      }

       //data Commissions
		$commission_sales_agent = $data_purchase_to_supplier['commission_sales_agent'];
		$commission_purchase_office = $data_purchase_to_supplier['commission_purchase_office'];
		$commission_other_supp_comm = $data_purchase_to_supplier['commission_other_supp_comm'];

		//data Representative
		$representative_commission = $data_purchase_to_supplier['representative_commission'];
      $representative_purchase_office = $data_purchase_to_supplier['representative_purchase_office'];
      
      $bank_charge_result = $bank_charge;
      $freight_insurance_result = $purchase_amount * $freight_insurance / 100;
      $comm_other_supplier = $commission_other_supp_comm * $purchase_amount; 
      $purchase_office_comm = $purchase_amount * $commission_purchase_office / 100;
      $total_purchase_cost = $purchase_amount + $financing_result + $coface_result + $bank_charge_result + $freight_insurance_result +  $comm_other_supplier + $purchase_office_comm;
      $total_purchase_unit = $total_purchase_cost / $quantity;

      $calculate_object->financing_result = number_format($financing_result, 2, '.', '');
      $calculate_object->coface_result = $coface_result; 
      $calculate_object->bank_charge_result = $bank_charge_result;
      $calculate_object->freight_insurance_result = number_format($freight_insurance_result, 2, '.', '');
      $calculate_object->comm_other_supplier = $comm_other_supplier;
      $calculate_object->purchase_office_comm = number_format($purchase_office_comm, 2, '.', '');
      $calculate_object->total_purchase_cost = number_format($total_purchase_cost, 2, '.', '');
      $calculate_object->total_purchase_unit = number_format($total_purchase_unit, 2, '.', '');
      $calculate_object->code_payment = $code_payment;
                                
      $data_customer_payment_terms = $this->CI->db->get('amuco_customer_payment_terms')->result();
      for($i = 0; $i < count($data_customer_payment_terms); $i++) {
         //$real_days = $data_customer_payment_terms[$i]->real_days;
         //$teorical_days =  $data_customer_payment_terms[$i]->theoretical_days;
         //$coface = $data_customer_payment_terms[$i]->apply_coface;
         //$payment_term_customer = $data_customer_payment_terms[$i]->short_description;
         //$id = $data_customer_payment_terms[$i]->id;

         $result = $this->get_calculations_for_payment_term($data_customer_payment_terms[$i], $data_purchase_to_supplier, $data_pricing_settings[0]);
         array_push($calculate_object->calculations, $result);
      }
     // die;
    //var_dump($calculate_object);die;
      return $calculate_object;
   }

   public function get_calculations_for_payment_term($data_customer_payment, $data_purchase_to_supplier, $pricing_settings) {

      //pricing settings
     
      
      //data purchase supplier
      //$incoterm = $data_purchase_to_supplier['incoterm'];//no utilzado
     // $sup_overprice = $data_purchase_to_supplier['sup_overprice'];//no utilizado sino en calculos antes de llegar aqui
     // $price_fob_fca_unit = $data_purchase_to_supplier['price_fob_fca_unit']; //no utilizado 
    // $price_unit = $data_purchase_to_supplier['price_unit'];//no utilizado sino en calculos antes de llegar aqui
      $quantity = $data_purchase_to_supplier['quantity'];
      $freight = $data_purchase_to_supplier['freight'];
      $purchase_amount = $data_purchase_to_supplier['purchase_amount'];
      $terms = $data_purchase_to_supplier['terms']; //days supplier_payment_terms
      $days = $data_purchase_to_supplier['days'];
      $cost_coface = 0; 
      $code_payment = '';
      $days_customer = 0;
      $data_customer_payment_terms = $this->CI->db->get_where('amuco_customer_payment_terms', array('id' => $data_customer_payment->id))->result();
      if( count($data_customer_payment_terms) > 0) {
         $days_customer =  $data_customer_payment_terms[0]->theoretical_days; 
         $cost_coface =  $data_customer_payment_terms[0]->apply_coface;
         $code_payment =  $data_customer_payment_terms[0]->payment_code;
         if($cost_coface == 0){
            $coface_result = 0;
         }else{
            $coface_result = $purchase_amount * $pricing_settings->coface / 100;
         }
        /* if($data_purchase_to_supplier['payment_customer'] == '0'){
            $coface_result = $purchase_amount * $pricing_settings->coface / 100;; 
         }*/
      }
      //$payment_days_customer = (int)$days_customer + (int)$days;
      $payment_days_customer = (int)$days_customer - (int)$terms + (int)$days;
      
      if($payment_days_customer <= 0){
         $payment_days_customer  = 0;
      }
      
      

      //data Commissions
		$commission_sales_agent = $data_purchase_to_supplier['commission_sales_agent'];
		$commission_purchase_office = $data_purchase_to_supplier['commission_purchase_office'];
		$commission_other_supp_comm = $data_purchase_to_supplier['commission_other_supp_comm'];

		//data Representative
		$representative_commission = $data_purchase_to_supplier['representative_commission'];
		$representative_purchase_office = $data_purchase_to_supplier['representative_purchase_office'];

		//data Price Increase
		$price_increase_commission = $data_purchase_to_supplier['price_increase_commission'];

      //Purchase Costs
      $financing_result_cal =  (($purchase_amount * $pricing_settings->finance_costs / 365) * $payment_days_customer) / 100;
      
      //$coface_result = 0;
      $bank_charge_result = $pricing_settings->bank_charge;
      $freight_insurance_result = $purchase_amount * $pricing_settings->freight_insurance / 100;
      $comm_other_supplier = $commission_other_supp_comm * $purchase_amount; 
      $purchase_office_comm = $purchase_amount * $commission_purchase_office / 100;
      $total_purchase_cost = $purchase_amount + $financing_result_cal + $coface_result + $bank_charge_result + $freight_insurance_result +  $comm_other_supplier + $purchase_office_comm;
      $total_purchase_unit = $total_purchase_cost / $quantity;
      //$total_purchase_cost_cal = $purchase_amount + $financing_result + $coface_result + $bank_charge_result + $freight_insurance_result +  $comm_other_supplier + $purchase_office_comm;


      //Sale to the customer
      $offer_increase = 1 - (1 * $price_increase_commission / 100);
      $payment_terms_customer = $data_customer_payment->short_description;
      $calculated_offer_price = $total_purchase_cost / $offer_increase;
      $offer_price_per_unit = $calculated_offer_price / $quantity;
      $price_increase = $price_increase_commission;
      // $sales_amount = $calculated_offer_price;
      $sales_amount =  $calculated_offer_price; // 0.00;
      $estimated_gross_profit = $calculated_offer_price - $total_purchase_cost;
      $estimated_commission = $estimated_gross_profit* $commission_sales_agent/100;
      $rep_commission = ($calculated_offer_price / (1 - ($representative_commission/100)) - $calculated_offer_price);

      
 
      $purchase_costs = array(
                              'payment_terms_customer' => $payment_terms_customer,
                              'calculated_offer_price' => number_format($calculated_offer_price, 2, '.', ''),
                              'offer_price_per_unit' => number_format($offer_price_per_unit, 2, '.', ''),
                              'price_increase' => number_format($price_increase, 2, '.', ''),
                              'sales_amount' => number_format($sales_amount, 2, '.', ''),
                              'estimated_gross_profit' => number_format($estimated_gross_profit, 2, '.', ''),
                              'estimated_commission' => number_format($estimated_commission, 2, '.', ''),
                              'rep_commission' => number_format($rep_commission, 2, '.', ''),
                              'offer_increase' => $offer_increase,
                              'id' => $data_customer_payment->id,
                              'code_payment' =>$code_payment
                              
                           );

      return $purchase_costs;

   }
}