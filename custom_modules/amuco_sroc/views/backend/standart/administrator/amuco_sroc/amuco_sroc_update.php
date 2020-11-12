

<script src="<?= BASE_ASSET; ?>/js/jquery.hotkeys.js"></script>
<script src="<?= BASE_ASSET; ?>/js/jquery.tabledit.min.js"></script>
<script type="text/javascript">
    function domo(){
     
       // Binding keys
       $('*').bind('keydown', 'Ctrl+s', function assets() {
          $('#btn_save').trigger('click');
           return false;
       });
    
       $('*').bind('keydown', 'Ctrl+x', function assets() {
          $('#btn_cancel').trigger('click');
           return false;
       });
    
      $('*').bind('keydown', 'Ctrl+d', function assets() {
          $('.btn_save_back').trigger('click');
           return false;
       });
        
    }
    
    jQuery(document).ready(domo);
</script>
<style>
.input_height {
   height: 25px;
   border-radius: 0px !important;
   text-align: left;
   padding: 1px;
}

.form-group{
   padding-bottom: 15px;
}

.centrar {
   display: flex;
   justify-content: center;
}

.box {
   box-shadow: 0 0 0 rgba(0, 0, 0, 0);
}

.nav-tabs-custom {
   box-shadow: 0 0 0 rgba(0, 0, 0, 0);
}

.no_padding {
   padding: 0;
}

h3{
   font-size: 20px;
}

.btn, .chosen-container .chosen-single, .chosen-container .chosen-choices {
   border-radius: 0px !important;
}

textarea {
    resize: none;
}

</style>
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Amuco SROC        <small>Edit Amuco Sroc</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class=""><a  href="<?= site_url('administrator/amuco_sroc'); ?>">Amuco Sroc</a></li>
        <li class="active">Edit</li>
    </ol>
</section>
<!-- Main content -->
<section class="content">
  <div class="row" >
      <div class="col-md-12">
         <div class="box box-warning">
            <div class="box-body ">
               <div class="row" style="margin-bottom: 15px;">
                  <div class="col-md-4">
                     <div class="form-group">
                        <label for="name" class="col-sm-12 control-label">Project #: <span style="font-weight: 400;"><?= _ent($amuco_sroc->customer_request_id); ?></span></label> 
                     </div>
                     <div class="form-group">
                        <label for="name" class="col-sm-12 control-label">SROC #: <span style="font-weight: 400;"><?= _ent($amuco_sroc->id); ?></span></label> 
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="form-group">
                        <label for="name" class="col-sm-12 control-label">Customer: <span style="font-weight: 400;"><?= _ent($amuco_customer_request->amuco_customers_name); ?></span></label> 
                     </div>
                     <div class="form-group">
                        <label for="name" class="col-sm-12 control-label">Agent: <span style="font-weight: 400;"><?= _ent($amuco_customer_request->aauth_users_fullname); ?></span></label> 
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="form-group">
                        <label for="name" class="col-sm-12 control-label">Date Created: <span style="font-weight: 400;"><?= _ent(date("Y-m-d", strtotime($amuco_sroc->date_created))); ?></span></label> 
                     </div>
                     <div class="form-group">
                        <label for="name" class="col-sm-12 control-label">Date Edited: <span style="font-weight: 400;"><?= _ent(date("Y-m-d", strtotime($amuco_sroc->date_updated))); ?></span></label> 
                     </div>
                  </div>
               </div>
               <div class="nav-tabs-custom padding-left-0 tab-page ">
                  <ul class="nav nav-tabs">
                    <li class="active"><a class=" active tab_animation" href="#tab_1" data-toggle="tab"><i class="fa fa-gear text-green"></i> Products</a></li>
                    <li><a class=" active btn-form-preview tab_animation" id="tab_documents" href="#tab_2" data-toggle="tab"><i class="fa fa-credit-card"></i> Documents</a></li>
                    <li><a class=" active btn-form-preview tab_animation" href="#tab_3" data-toggle="tab"><i class="fa fa-user"></i> Remarks</a></li>
                    <li><a class=" active btn-form-preview tab_animation" href="#tab_4" data-toggle="tab"><i class="fa fa-product-hunt"></i> Estimated Profit</a></li>
                    <li><a class=" active btn-form-preview tab_animation" href="#tab_5" data-toggle="tab"><i class="fa fa-sticky-note"></i> Labels</a></li>
                    <li><a class=" active btn-form-preview tab_animation" href="#tab_5" data-toggle="tab"><i class="fa fa-sticky-note"></i> Shipping Instructions</a></li>
                    <li><a class=" active btn-form-preview tab_animation" href="#tab_5" data-toggle="tab"><i class="fa fa-sticky-note"></i> Restrictions</a></li>
                  </ul>
                  <div class="tab-content">
                     <div class="tab-pane rest-page-test active" id="tab_1" style="margin-top:20px;">
                     <div class="row">
                           <div class="col-md-12" > 
                              <h3 class="widget-user-username"  style="background-color: #f1f1f1; text-align: center;">PRODUCTS DETAILS</h3>
                              <div class="row">
                                 <div class="col-md-6">
                                    <div class="form-group">
                                    <label for="name" class="col-sm-4 control-label"  style="padding: 0px; text-align: right;">Combined Container</label>
                                    <div class="col-sm-1">
                                       <input  type="checkbox" name="is_denied"  class="form-check-input switch-button" <?php if($amuco_customer_request->combinate_container == 1) echo 'checked'; ?>>
                                    </div>
                                 </div>
                                 <div class="form-group">
                                    <label for="name" class="col-sm-4 control-label"  style="padding: 0px; text-align: right;">LCL</label>
                                    <div class="col-sm-1">
                                       <input  type="checkbox" name="is_denied"  class="form-check-input switch-button" <?php if($amuco_offers_sent_customers[0]->fcl == 0) echo 'checked'; ?>>
                                    </div>
                                 </div>
                                 </div>
                              </div>
                              <form name="form_amuco_details_customers_request" enctype = 'multipart/form-data' id="form_amuco_offer_set" action="">
                                 <div class="table-responsive"> 
                                    <table class="table table_price table-bordered display nowrap" id="table_offers_customers">
                                       <thead>
                                          <th>Select</th>
                                          <th>Product</th>
                                          <th>Quantity</th>
                                          <th>Unit</th>
                                          <th>FCL</th>
                                          <th>FT</th>
                                          <th>Type FCL</th>
                                          <th>Packing</th>
                                          <th>Standard</th>
                                       </thead>
                                       <tbody>
                                       <?php if(!empty($amuco_offers_sent_customers)): foreach ($amuco_offers_sent_customers as $row): ?>
                                          <tr id="<?php echo $row->id ?>"> 
                                             <td width="5%"></td>
                                             <td><?= _ent($row->amuco_products_name); ?></td>
                                             <td><?= _ent($row->quantity); ?></td>
                                             <td><?= _ent($row->unit); ?></td>
                                             <td><?= _ent($row->fcl); ?></td>
                                             <td><?= _ent($row->option_fcl); ?></td>
                                             <td><?= _ent($row->type_fcl); ?></td>
                                             <td><?= _ent($row->weight.' '.$row->amuco_unit_pack_name.' '.$row->amuco_material_name.' '.$row->amuco_packing_name); ?></td>
                                             <td><?= _ent($row->analysis_standard); ?></td>
                                       </tr>
                                       <?php endforeach;endif; ?>
                                       </tbody>
                                    </table>
                                 </div>  
                              </form>
                              <br>
                           </div>    
                        </div>  
                        <div class="row">
                           <div class="col-md-12">
                              <div class="box box-widget widget-user-2">
                                 <!-- Add the bg color to the header using any of the bg-* classes -->
                                 <div style="background-color: #f1f1f1; text-align: center;">
                                    <h3 class="">PURCHASE TO SUPPLIER</h3>
                                 </div>
                                 <div class="box-footer no-padding">
                                 <form action="" id="form_amuco_offer">
                                    <div class="row" style="margin-top: 5px;">
                                       <div class="col-md-5">
                                          <div class="form-group">
                                             <label for="name" class="col-sm-4 control-label no_padding">Purchase Office</label>
                                             <div class="col-sm-8 no_padding" style="padding-right: 5px;">
                                                <input type="text" class="form-control input_height input-number" name="purchase_office" id="purchase_office">
                                             </div>
                                          </div>
                                          
                                          <div class="form-group">
                                             <label for="name" class="col-sm-4 control-label no_padding">Supplier</label>
                                             <div class="col-sm-8 no_padding" style="padding-right: 5px;">
                                                <input type="text" class="form-control input_height input-number" name="supplier" id="supplier">
                                             </div>
                                          </div>
                                          
                                          <div class="form-group">
                                             <label for="name" class="col-sm-4 control-label no_padding">Manufacturer</label>
                                             <div class="col-sm-8 no_padding" style="padding-right: 5px;">
                                                <input type="text" class="form-control input_height input-number" name="manufacturer" id="manufacturer">
                                             </div>
                                          </div>
                                          
                                          <div class="form-group">
                                             <label for="name" class="col-sm-4 control-label no_padding">Purchase Incoterm</label>
                                             <div class="col-sm-8 no_padding" style="padding-right: 5px;">
                                                <!-- <input type="text" class="form-control input_height input-number" name="purchase_incoterm" id="purchase_incoterm"> -->
                                                <select  class="form-control input_height" name="purchase_incoterm" id="purchase_incoterm"  >
                                                   <option value=""></option>
                                                   <?php foreach (db_get_all_data('amuco_incoterm') as $row): ?>
                                                   <option  value="<?= $row->id ?>"><?= $row->name; ?></option>
                                                   <?php endforeach; ?>  
                                                </select>
                                             </div>
                                          </div>
                                          <div class="form-group">
                                             <label for="name" class="col-sm-4 control-label no_padding">Origin Port</label>
                                             <div class="col-sm-8 no_padding" style="padding-right: 5px;">
                                                <!-- <input type="text" class="form-control input_height input-number" name="total_purchase_cost1" id="total_purchase_cost1"> -->
                                                <select  class="form-control input_height" name="shipping_port" id="shipping_port" data-placeholder="Select Shipping Port" >
                                                   <option value=""></option>
                                                   <?php foreach (db_get_all_data('amuco_destination_port') as $row): ?>
                                                   <option value="<?= $row->id ?>"><?= $row->name; ?></option>
                                                   <?php endforeach; ?>  
                                                </select>
                                             </div>
                                          </div>
                                          <div class="form-group">
                                             <label for="name" class="col-sm-4 control-label no_padding">Payment terms</label>
                                             <div class="col-sm-8 no_padding" style="padding-right: 5px;">
                                             <select  class="form-control input_height" name="payment_terms" id="payment_terms" >
                                                <option value=""></option>
                                                <?php foreach (db_get_all_data('amuco_supplier_payment_terms') as $row): ?>
                                                <option value="<?= $row->id ?>"><?= $row->description; ?></option>
                                                <?php endforeach; ?>  
                                             </select>
                                             </div>
                                          </div>
                                          <div class="form-group">
                                             <label for="name" class="col-sm-4 control-label no_padding">ETD</label>
                                             <div class="col-sm-8 no_padding" style="padding-right: 5px;">
                                                <input type="text" class="form-control input_height datepicker" name="etd" id="etd">
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col-md-4">
                                          <div class="form-group">
                                             <label for="name" class="col-sm-2 control-label no_padding">Contact</label>
                                             <div class="col-sm-4 no_padding" style="padding-right: 5px;">
                                                <input type="text" class="form-control input_height input-number" name="name_contact_office" id="name_contact_office">
                                             </div>
                                             <div class="col-sm-6 no_padding" style="padding-right: 5px;">
                                                <input type="text" class="form-control input_height input-number" name="email_contact_office" id="email_contact_office">
                                             </div>
                                          </div>
                                          <div class="form-group">
                                             <label for="name" class="col-sm-2 control-label no_padding">Contact</label>
                                             <div class="col-sm-4 no_padding" style="padding-right: 5px;">
                                                <input type="text" class="form-control input_height input-number" name="name_contact_supplier" id="name_contact_supplier">
                                             </div>
                                             <div class="col-sm-6 no_padding" style="padding-right: 5px;">
                                                <input type="text" class="form-control input_height input-number" name="email_contact_supplier" id="email_contact_supplier">
                                             </div>
                                          </div>
                                          <div class="form-group">
                                            
                                          </div>
                                          <div class="form-group">
                                            
                                          </div>
                                          <div class="form-group">
                                            
                                          </div>
                                          <div class="form-group">
                                             <label for="name" class="col-sm-4 col-sm-offset-2 control-label no_padding">FOB/FCA Price</label>
                                             <div class="col-sm-6 no_padding" style="padding-right: 5px;">
                                                <input type="text" class="form-control input_height input-number" name="price_fob" id="price_fob">
                                             </div>
                                          </div>
                                          <div class="form-group">
                                             <label for="name" class="col-sm-4 col-sm-offset-2 control-label no_padding">Freight</label>
                                             <div class="col-sm-6 no_padding" style="padding-right: 5px;">
                                                <input type="text" class="form-control input_height input-number" name="freight" id="freight">
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col-md-3">
                                          <div class="form-group">
                                             <label for="name" class="col-sm-7 control-label no_padding">P. Office Comm</label>
                                             <div class="col-sm-2 no_padding" style="padding-right: 5px;">
                                                <input type="text" class="form-control input_height input-number" name="purchase_office_com" id="purchase_office_com">
                                             </div>
                                             <label for="name" class="col-sm-1 control-label no_padding">%</label>
                                          </div>
                                          <div class="form-group">
                                             <label for="name" class="col-sm-7 control-label no_padding">Supplier Comm</label>
                                             <div class="col-sm-2 no_padding" style="padding-right: 5px;">
                                                <input type="text" class="form-control input_height input-number" name="supplier_com" id="supplier_com">
                                             </div>
                                             <label for="name" class="col-sm-1 control-label no_padding">%</label>
                                          </div>
                                          <div class="form-group">
                                          </div>
                                          <div class="form-group">
                                          </div>
                                          <div class="form-group">
                                          </div>
                                          <div class="form-group">
                                             <label for="name" class="col-sm-7 control-label no_padding">Purch. Unit Price</label>
                                             <div class="col-sm-5 no_padding" style="padding-right: 5px;">
                                                <input type="text" class="form-control input_height input-number" name="purchase_unit_price" id="purchase_unit_price">
                                             </div>
                                          </div>
                                          <div class="form-group">
                                             <label for="name" class="col-sm-7 control-label no_padding">Total Purch. Price</label>
                                             <div class="col-sm-5 no_padding" style="padding-right: 5px;">
                                                <input type="text" class="form-control input_height input-number" name="total_purch_price" id="total_purch_price">
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           
                        </div>

                        <!-- sale to customer -->

                        <div class="row">
                           <div class="col-md-9">
                              <div class="box box-widget widget-user-2">
                                 <!-- Add the bg color to the header using any of the bg-* classes -->
                                 <div style="background-color: #f1f1f1; text-align: center;">
                                    <h3 class="">SALE TO CUSTOMER</h3>
                                 </div>
                                 <div class="box-footer no-padding">
                                    <div class="row" style="margin-top: 5px;">
                                       <div class="col-md-7">
                                          <div class="form-group">
                                             <label for="name" class="col-sm-4 control-label no_padding">Representative</label>
                                             <div class="col-sm-8 no_padding" style="padding-right: 5px;">
                                                <input type="text" class="form-control input_height input-number" name="representative" id="representative">
                                             </div>
                                          </div>
                                          <div class="form-group" style="height: 23px;">
                                             <label for="name" class="col-sm-4 control-label no_padding">Commercial Contact</label>

                                             <div class="col-sm-7 no_padding" style="padding-right: 5px;">
                                                <!-- <input type="text" class="form-control input_height input-number" name="comercial_contact" id="comercial_contact"> -->
                                                <select  class="form-control chosen chosen-select-deselect" style="height: 25px !important; border-radius: 0px !important;" name="comercial_contact[]" id="comercial_contact" data-placeholder="Select Contact" multiple >
                                                   <option value=""></option>
                                                   <?php foreach ($customer_contact as $row): ?>
                                                   <option value="<?= $row->id ?>"><?= $row->name; ?></option>
                                                   <?php endforeach; ?>  
                                                </select>
                                             </div>
                                             
                                             <div class="col-sm-1" style="padding-right: 5px;">
                                                <a href="#"><i style=" margin-top: 1.7%" class="fa fa-plus disabled" id="btn_add_contact_supplier" data-toggle="modal" data-target="#modal-add-contact" ></i></a>

                                             </div>
                                          </div>
                                          <div class="form-group">
                                          </div>
                                          <div class="form-group" style="height: 23px;">
                                             <label for="name" class="col-sm-4 control-label no_padding">Logistics Contact</label>
                                             <div class="col-sm-7 no_padding" style="padding-right: 5px;">
                                             <select  class="form-control chosen chosen-select-deselect" style="height: 25px !important; border-radius: 0px !important;" name="logistics_contact[]" id="logistics_contact" data-placeholder="Select Contact" multiple >
                                                <option value=""></option>
                                                <?php foreach ($customer_contact as $row): ?>
                                                <option value="<?= $row->id ?>"><?= $row->name . " - " . $row->position; ?></option>
                                                <?php endforeach; ?>  
                                             </select>
                                             </div>
                                             <div class="col-sm-1" style="padding-right: 5px;">
                                                <a href="#"><i style=" margin-top: 1.7%" class="fa fa-plus disabled" id="btn_add_contact_supplier" data-toggle="modal" data-target="#modal-add-contact" ></i></a>
                                             </div>
                                          </div>
                                          <div class="form-group">
                                          </div>
                                          <div class="form-group">
                                             <label for="name" class="col-sm-4 control-label no_padding">Customer P.O.</label>
                                             <div class="col-sm-8 no_padding" style="padding-right: 5px;">
                                                <input type="text" class="form-control input_height input-number" name="total_purchase_cost1" id="total_purchase_cost1">
                                             </div>
                                          </div>
                                          <div class="form-group">
                                             <label for="name" class="col-sm-4 control-label no_padding">Sales Incoterm</label>
                                             <div class="col-sm-8 no_padding" style="padding-right: 5px;">
                                             <select  class="form-control input_height" name="sales_incoterm" id="sales_incoterm"  >
                                                   <option value=""></option>
                                                   <?php foreach (db_get_all_data('amuco_incoterm') as $row): ?>
                                                   <option  value="<?= $row->id ?>"><?= $row->name; ?></option>
                                                   <?php endforeach; ?>  
                                                </select>
                                             </div>
                                          </div>
                                          <div class="form-group">
                                             <label for="name" class="col-sm-4 control-label no_padding">Destinantion Port</label>
                                             <div class="col-sm-8 no_padding" style="padding-right: 5px;">
                                                <select  class="form-control input_height" name="destination_port" id="destination_port">
                                                   <option value=""></option>
                                                   <?php foreach (db_get_all_data('amuco_destination_port') as $row): ?>
                                                   <option value="<?= $row->id ?>"><?= $row->name; ?></option>
                                                   <?php endforeach; ?>  
                                                </select>
                                             </div>
                                          </div>
                                          <div class="form-group">
                                             <label for="name" class="col-sm-4 control-label no_padding">Payment terms</label>
                                             <div class="col-sm-8 no_padding" style="padding-right: 5px;">
                                             <select  class="form-control input_height" name="payment_terms_customer" id="payment_terms_customer" >
                                                <option value=""></option>
                                                <?php foreach (db_get_all_data('amuco_customer_payment_terms') as $row): ?>
                                                <option value="<?= $row->id ?>"><?= $row->description; ?></option>
                                                <?php endforeach; ?>  
                                             </select>
                                             </div>
                                          </div>
                                          <div class="form-group">
                                             <label for="name" class="col-sm-4 control-label no_padding">RSD</label>
                                             <div class="col-sm-8 no_padding" style="padding-right: 5px;">
                                                <input type="text" class="form-control input_height datepicker" name="rsd" id="rsd">
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col-md-5">
                                          <div class="form-group">
                                             <label for="name" class="col-sm-2 control-label no_padding">Contact</label>
                                             <div class="col-sm-4" style="padding-right: 5px;">
                                                <input type="text" class="form-control input_height input-number" name="representative_name" id="representative_name">
                                             </div>
                                             <div class="col-sm-6 no_padding" style="padding-right: 5px;">
                                                <input type="text" class="form-control input_height input-number" name="representative_email" id="representative_email">
                                             </div>
                                          </div>
                                          <!-- <div class="form-group">
                                             <label for="name" class="col-sm-2 control-label no_padding">Comm.</label>
                                             <div class="col-sm-4" style="padding-right: 5px;">
                                                <input type="text" class="form-control input_height input-number" name="total_purchase_cost1" id="total_purchase_cost1">
                                             </div>
                                             <div class="col-sm-6 no_padding" style="padding-right: 5px;">
                                                <input type="text" class="form-control input_height input-number" name="total_purchase_cost1" id="total_purchase_cost1">
                                             </div>
                                          </div> -->
                                          <div class="form-group">
                                          </div>
                                          <div class="form-group">
                                             <label for="name" class="col-sm-5 col-sm-offset-2 control-label no_padding">Sale Unit Price</label>
                                             <div class="col-sm-5 no_padding" style="padding-right: 5px;">
                                                <input type="text" class="form-control input_height input-number" name="sale_unit_price" id="sale_unit_price">
                                             </div>
                                          </div>
                                          <div class="form-group">
                                             <label for="name" class="col-sm-5 col-sm-offset-2 control-label no_padding">Total Sale</label>
                                             <div class="col-sm-5 no_padding" style="padding-right: 5px;">
                                                <input type="text" class="form-control input_height input-number" name="total_sale" id="total_sale">
                                             </div>
                                          </div>
                                          <div class="form-group">
                                             <label for="name" class="col-sm-5 col-sm-offset-2 control-label no_padding">Margin</label>
                                             <div class="col-sm-4 no_padding" style="padding-right: 5px;">
                                                <input type="text" class="form-control input_height input-number" name="margin" id="margin">
                                             </div>
                                             <label for="name" class="col-sm-1 control-label no_padding">%</label>
                                          </div>
                                          <div class="form-group">
                                             <label for="name" class="col-sm-5 col-sm-offset-2 control-label no_padding">Gross Profit</label>
                                             <div class="col-sm-5 no_padding" style="padding-right: 5px;">
                                                <input type="text" class="form-control input_height input-number" name="gross_profit" id="gross_profit">
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-3">
                              <div class="box box-widget widget-user-2">
                                 <div style="background-color: #f1f1f1; text-align: center;">
                                    <h3 class="">CREDIT DETAIL</h3>
                                 </div>
                                 <div class="box-footer no-padding">
                                    <div class="form-group">
                                       <label for="name" class="col-sm-6 control-label no_padding">Insured Credit</label>
                                       <div class="col-sm-6 no_padding" style="padding-right: 5px;">
                                          <input type="text" class="form-control input_height input-number" name="insured_credit" id="insured_credit" value="<?php !empty($credit_insurance) ? print "$".$credit_insurance[0]->insured_credit : "" ?>">
                                       </div>
                                    </div>
                                    <div class="form-group">
                                       <label for="name" class="col-sm-6 control-label no_padding">Active Orders</label>
                                       <div class="col-sm-6 no_padding" style="padding-right: 5px;">
                                          <input type="text" class="form-control input_height input-number" name="active_orders" id="active_orders">
                                       </div>
                                    </div>
                                    <div class="form-group">
                                       <label for="name" class="col-sm-6 control-label no_padding">Invoiced Orders</label>
                                       <div class="col-sm-6 no_padding" style="padding-right: 5px;">
                                          <input type="text" class="form-control input_height input-number" name="invoiced_orders" id="invoiced_orders">
                                       </div>
                                    </div>
                                    <div class="form-group">
                                       <label for="name" class="col-sm-6 control-label no_padding">Available Credit</label>
                                       <div class="col-sm-6 no_padding" style="padding-right: 5px;">
                                          <input type="text" class="form-control input_height input-number" name="available_credit" id="available_credit" value="<?php !empty($credit_insurance) ? print "$".$credit_insurance[0]->available_credit : "" ?>">
                                       </div>
                                    </div>
                                    <div class="form-group">
                                       <label for="name" class="col-sm-6 control-label no_padding">Highest Insured</label>
                                       <div class="col-sm-6 no_padding" style="padding-right: 5px;">
                                          <input type="text" class="form-control input_height input-number" name="highest_ever_insured" id="highest_ever_insured" value="<?php !empty($credit_insurance) ? print "$".$credit_insurance[0]->highest_ever_insured : "" ?>">
                                       </div>
                                    </div>
                                    <div class="form-group">
                                       <label for="name" class="col-sm-6 control-label no_padding">Rating</label>
                                       <div class="col-sm-6 no_padding" style="padding-right: 5px;">

                                          <input type="text" class="form-control input_height input-number" name="raiting" id="raiting" value="<?php !empty($credit_insurance) ? print $credit_insurance[0]->raiting : "" ?>">

                                       </div>
                                    </div>
                                    <div class="form-group">
                                       <label for="name" class="col-sm-6 control-label no_padding">Own Risk</label>
                                       <div class="col-sm-6 no_padding" style="padding-right: 5px;">
                                          <input type="text" class="form-control input_height input-number" name="own_risk" id="own_risk" value="<?php !empty($credit_insurance) ? print "$".$credit_insurance[0]->own_risk : "" ?>">
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           </form>
                        </div>
                     </div> 

                     <div class="tab-pane" id="tab_2">
                     <button class="btn btn-flat btn-aux pull-left" id="btn_edit" data-stype="stay" data-toggle="modal" data-target="#modal-add-document" >
                  <i class="fa fa-edit"></i> New Document              </button>
                        <div class="col-md-12">
                           <div class="box box-widget widget-user-2" >
                              <div class="" style="background-color: #f1f1f1; text-align: center;">
                                 <h3 class="widget-user-username" >Documents</h3>
                              </div>
                              <div class="box-footer no-padding">
                                 <div class="row">
                                    <div class="col-md-10 col-md-offset-1">
                                       <div style="overflow-y: scroll; overflow-x: hidden; height: 380px;">
                                          <div class="table-responsive"> 
                                             <table class="table table-bordered display nowrap" id="table_documents" >
                                                <thead>
                                                   <tr>
                                                      <th>Select</th>
                                                      <th>Document</th>
                                                      <th>Origin</th>
                                                      <th>Original</th>
                                                      <th>Copy</th>
                                                   </tr>
                                                </thead>
                                                <tbody>
                                                <?php foreach (db_get_all_data('amuco_documents') as $row): ?>
                                                   <tr id="<?php echo $row->id ?>"> 
                                                      <td style="width: 5%">
                                                      <input  type="checkbox" name=""  class="form-check-input switch-button" <?php if($row->select_by_default == 'YES') echo 'checked'; ?>>
                                                      </td>
                                                      <td ><?= _ent($row->name); ?></td>
                                                      <td><?= _ent($row->origin); ?></td>
                                                      <td><?= _ent($row->original); ?></td>
                                                      <td><?= _ent($row->copy); ?></td>
                                                   </tr>
                                                <?php endforeach; ?>
                                                </tbody>
                                             </table>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>    
                           </div>    
                        </div>  
                     </div>

                     <div class="tab-pane" id="tab_3">
                        <div class="col-md-12">
                           <div class="">
                              <!-- <h3 class="">Contacts</h3> -->
                           </div>

                           <div class="row">
                              <div class="col-md-12">
                                 <div style="text-align: center; background-color: #80008030;">
                                    <h3>Internal Observations</h3>
                                    <span><strong>They see them:</strong> Vendors and Logistics</span><br>
                                    <span><strong>Documents:</strong> SROC</span>
                                 </div>
                                 <textarea class="form-control" rows="15" id="internal_observations" name="internal_observations" style="background-color: #80008030;"></textarea>
                              </div>
                           </div>
                           <div class="row">
                              <div class="col-md-12">
                                 <div style="text-align: center; background-color: pink;">
                                    <h3>Purchase Office Observations</h3>
                                    <span><strong>They see them:</strong> Vendors, Logistics and Purchase Office</span><br>
                                    <span><strong>Documents:</strong> SROC and Internal contract</span>
                                 </div>
                                 <textarea class="form-control" rows="15" id="purchase_office_observations" name="purchase_office_observations" style="background-color: pink;"></textarea>
                              </div>
                           </div>
                           <div class="row">
                              <div class="col-md-12">
                                 <div style="text-align: center; background-color: #ffff0c8c;">
                                    <h3>Supplier Observations</h3>
                                    <span><strong>They see them:</strong> Vendors, Logistics, Purchase Office and Supplier</span><br>
                                    <span><strong>Documents:</strong> SROC, Internal contract and Supplier contract</span>
                                 </div>
                                 <textarea class="form-control" rows="15" id="supplier_observations" name="supplier_observations" style="background-color: #ffff0c8c;"></textarea>
                              </div>

                           </div>
                        </div> 
                     </div> 
                  
                     <div class="tab-pane" id="tab_4">
                        <div class="col-md-12">
                           <div class="">
                                 <h3 class="">Samples</h3>
                           </div>
                           
                           <div>
                              <button  class="btn btn-flat btn-success btn_add_new" type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-sample"> Add New Sample</button>
                           </div>
                        
                           <div class="col-md-6">
                              <div class="box box-widget widget-user-2">
                                 <!-- Add the bg color to the header using any of the bg-* classes -->
                                 <div class="">
                                    <h3 class="">Sample ID: </h3>
                                 </div>
                                 <div class="box-footer no-padding">
                                    <ul class="nav nav-stacked">
                                       <li>  <div class="col-md-6">Product: </div> <div class="col-md-6" style="text-align: right;"></div> </li>
                                       <li> <div class="col-md-6">Supplier: </div> <div class="col-md-6" style="text-align: right;"></div></li>
                                       <li><a href="#"> Status: <span class="pull-right "></span></a></li>
                                       <li><a href="#"> Lot: <span class="pull-right "></span></a></li>
                                       <li><a href="#"> Note <span class="pull-right "></span></a></li>
                                       <li><a href="#"> Remark <span class="pull-right "></span></a></li>
                                       <li><a href="#"> Received <span class="pull-right "></span></a></li>
                                       <li><a href="#"> Sent <span class="pull-right "></span></a></li>
                                       <li><a href="#"> Requested <span class="pull-right "></span></a></li>
                                    </ul>
                                 </div>
                              </div>
                           </div> 
                        </div> 
                     </div> 
                     <div class="tab-pane" id="tab_5">
                        <div class="col-md-12">
                           <div class="box box-warning">
                              <div class="box-body ">
                                 <!-- Widget: user widget style 1 -->
                                 <div class="box box-widget widget-user-2">
                                    <!-- Add the bg color to the header using any of the bg-* classes -->
                                    <div class="widget-user-header ">
                                    <h3 ></h3>
                                       <div >
                                       
                                         
                                       </div>
                     
                                       <!-- /.widget-user-image -->
                                       
                                      
                                    </div>

    
                                 </div>
                              </div>
                           </div>  
                        </div>
                     </div> 
                  </div> 
                  
            </div>
         </div>
      </div>
   </div>
</section>



<section>
   <div class="modal fade" id="modal-visit">
      <div class="modal-dialog modal-lg">
         <div class="modal-content">
            <div class="modal-header">
               <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
               <div class="row" >
                  <div class="box box-warning">
                     <div class="box-body ">
                        <!-- Widget: user widget style 1 -->
                        <div class="box box-widget widget-user-2">
                           <!-- Add the bg color to the header using any of the bg-* classes -->
                           <div class="widget-user-header ">
                              <div class="widget-user-image">
                                 <img class="img-circle" src="<?= BASE_ASSET; ?>/img/add2.png" alt="User Avatar">
                              </div>
                              <!-- /.widget-user-image -->
                              <h3 class="widget-user-username">Amuco Visits</h3>
                              <h5 class="widget-user-desc"></h5>
                             
                           </div>
                        </div>
                     <div>   
                  <?= form_open('', [
                            'name'    => 'form_amuco_visits_new', 
                            'class'   => 'form-horizontal form-step', 
                            'id'      => 'form_amuco_visits_new', 
                            'enctype' => 'multipart/form-data', 
                            'method'  => 'POST'
                            ]); ?>
                  <div class="form-group ">
                        <label for="type_client" class="col-sm-2 control-label">Type Client 
                        <i class="required">*</i>
                        </label>
                        <div class="col-sm-8">
                           <select  class="form-control chosen chosen-select" name="type_client" id="type_client" data-placeholder="Select Type Client" >
                              <option value=""></option>
                              <option value="Customer" selected>Customer</option>
                              <!--option value="Supplier">Supplier</option-->
                              </select>
                           <small class="info help-block">
                           </small>
                        </div>
                  </div>
                         
                  <div class="form-group ">
                     <label for="user_id" class="col-sm-2 control-label">User  
                     <i class="required">*</i>
                     </label>
                     <div class="col-sm-8">
                        <select  class="form-control chosen chosen-select-deselect" name="user_id" id="user_id" data-placeholder="Select User Id" >
                           <option value=""></option>
                           <?php foreach (db_get_all_data('aauth_users') as $row): ?>
                           <option value="<?= $row->id ?>"><?= $row->username; ?></option>
                           <?php endforeach; ?>  
                        </select>
                        <small class="info help-block">
                        <b>Input User Id</b> Max Length : 10.</small>
                     </div>
                  </div>

                                                 
                  <div class="form-group " id= "customer_select">
                     <label for="customer_id" class="col-sm-2 control-label">Customer  
                     <i class="required">*</i>
                     </label>
                     <div class="col-sm-8">
                        <select  class="form-control chosen chosen-select-deselect" name="customer_id" id="customer_id" data-placeholder="Select Customer Id" >
                           <option value=""></option>
                           <?php foreach (db_get_all_data('amuco_customers') as $row): ?>
                           <option <?=  ($row->id==$amuco_customer_request->customer) ? 'selected' : ''; ?> value="<?= $row->id ?>"><?= $row->name; ?></option> 
                           <?php endforeach; ?>  
                        </select> 
                        <small class="info help-block">
                        <b>Input Customer Id</b> Max Length : 10.</small>
                     </div>
                  </div>

                                                 
                  <div class="form-group ">
                     <label for="date_visit" class="col-sm-2 control-label">Date Visit 
                     <i class="required">*</i>
                     </label>
                     <div class="col-sm-6">
                        <div class="input-group date col-sm-8">
                           <input type="text" class="form-control pull-right datetimepicker" name="date_visit"  id="date_visit">
                         </div>
                        <small class="info help-block">
                        </small>
                     </div>
                  </div>
                                                 
                  <div class="form-group ">
                     <label for="contact_name" class="col-sm-2 control-label">Contact Name 
                     <i class="required">*</i>
                     </label>
                     <div class="col-sm-8">
                        <select  class="form-control chosen chosen-select-deselect" name="contact_name" id="contact_name" data-placeholder="Select Contact Name" >
                           <option value=""></option>
                           <?php foreach (db_get_all_data('amuco_contacts') as $row): ?>
                           <option value="<?= $row->id ?>"><?= $row->first_name; ?></option>
                           <?php endforeach; ?>  
                        </select>
                        <small class="info help-block">
                        <b>Input Contact Name</b> Max Length : 50.</small>
                     </div>
                  </div>

                  <div class="form-group ">
                     <label for="subject" class="col-sm-2 control-label">Subject 
                     <i class="required">*</i>
                     </label>
                     <div class="col-sm-8">
                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" value="<?= set_value('subject'); ?>">
                        <small class="info help-block">
                        <b>Input Subject</b> Max Length : 250.</small>
                     </div>
                  </div>
                                                 
                  <div class="form-group ">
                     <label for="notes" class="col-sm-2 control-label">Notes 
                     <i class="required">*</i>
                     </label>
                     <div class="col-sm-8">
                        <textarea id="notes" name="notes" rows="5" cols="80"><?= set_value('Notes'); ?></textarea>
                        <small class="info help-block">
                        </small>
                     </div>
                  </div>
                                                
                  <div class="message"></div>
                  <div class="modal-footer justify-content-between">
                     <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                     <button class="btn btn-flat btn-primary btn_save btn_action" id="btn_save_visit"  name="btn_save_visit" data-stype='stay' title="<?= cclang('save_button'); ?> (Ctrl+s)">
                        <i class="fa fa-save" ></i> <?= cclang('save_button'); ?>
                     </button>  
                  </div>
                 
                  <?= form_close(); ?>
               </div>
            </div>
         </div>
          <!-- /.modal-content -->
      </div>
        <!-- /.modal-dialog -->
   </div>
</section>

<section>
      <div class="modal fade" id="modal-credit">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="row" >
              
                  <div class="box box-warning">
                     <div class="box-body ">
                        <!-- Widget: user widget style 1 -->
                        <div class="box box-widget widget-user-2">
                           <!-- Add the bg color to the header using any of the bg-* classes -->
                           <div class="widget-user-header ">
                              <div class="widget-user-image">
                                 <img class="img-circle" src="<?= BASE_ASSET; ?>/img/add2.png" alt="User Avatar">
                              </div>
                              <!-- /.widget-user-image -->
                              <h3 class="widget-user-username">Amuco Credit Insurance</h3>
                              <h5 class="widget-user-desc"><?= cclang('new', ['Amuco Credit Insurance']); ?></h5>
                             
                           </div>
                        </div>
                     <div>   
                              <?= form_open('', [
                                 'name'    => 'form_amuco_credit_insurance', 
                                 'class'   => 'form-horizontal form-step', 
                                 'id'      => 'form_amuco_credit_insurance', 
                                 'enctype' => 'multipart/form-data', 
                                 'method'  => 'POST'
                                 ]); 
                              ?>
                                 
                           
                           <div class="form-group ">
                            <label for="customer_id" class="col-sm-2 control-label">Customer 
                            <i class="required">*</i>
                            </label>
                            <div class="col-sm-8">
                                <select  class="form-control chosen chosen-select-deselect" name="customer_id" id="customer_id" data-placeholder="Select Customer Id" >
                                    <option value=""></option>
                                    <?php foreach (db_get_all_data('amuco_customers') as $row): ?>
                           <option <?=  ($row->id==$amuco_customers->id) ? 'selected' : ''; ?> value="<?= $row->id ?>"><?= $row->name; ?></option> 
                           <?php endforeach; ?> 
                                </select>
                                <small class="info help-block">
                                <b>Input Customer Id</b> Max Length : 10.</small>
                            </div>
                        </div>
                                                         
                           <div class="form-group ">
                              <label for="raiting" class="col-sm-2 control-label">Raiting 
                                 <i class="required">*</i>
                              </label>
                              <div class="col-sm-8">
                                 <input type="text" class="form-control" name="raiting" id="raiting" placeholder="Raiting" value="<?= set_value('raiting'); ?>">
                                    <small class="info help-block">
                                    </small>
                              </div>
                           </div>
                                                         
                           <div class="form-group ">
                              <label for="credit_ever_denied" class="col-sm-2 control-label">Credit Ever Denied 
                              <i class="required">*</i>
                              </label>
                              <div class="col-sm-6">
                                 <div class="col-md-2 padding-left-0">
                                       <label>
                                          <input type="radio" class="flat-red" name="credit_ever_denied" id="credit_ever_denied"  value="1">
                                          <?= cclang('yes'); ?>
                                       </label>
                                 </div>
                                 <div class="col-md-14">
                                       <label>
                                          <input type="radio" class="flat-red" name="credit_ever_denied" id="credit_ever_denied"  value="0">
                                          <?= cclang('no'); ?>
                                       </label>
                                 </div>
                                 <small class="info help-block">
                                 </small>
                              </div>
                           </div>
                                                         
                           <div class="form-group ">
                              <label for="available_credit" class="col-sm-2 control-label">Available Credit 
                                 <i class="required">*</i>
                              </label>
                              <div class="col-sm-8">
                                 <input type="text" class="form-control" name="available_credit" id="available_credit" placeholder="Available Credit" value="<?= set_value('available_credit'); ?>">
                                    <small class="info help-block">
                                       </small>
                              </div>
                           </div>
                                                         
                           <div class="form-group ">
                              <label for="insured_credit" class="col-sm-2 control-label">Insured Credit 
                                 <i class="required">*</i>
                              </label>
                              <div class="col-sm-8">
                                 <input type="text" class="form-control" name="insured_credit" id="insured_credit" placeholder="Insured Credit" value="<?= set_value('insured_credit'); ?>">
                                 <small class="info help-block">
                                       </small>
                              </div>
                           </div>
                                                         
                           <div class="form-group ">
                              <label for="own_risk" class="col-sm-2 control-label">Own Risk 
                              <i class="required">*</i>
                              </label>
                              <div class="col-sm-8">
                                 <input type="text" class="form-control" name="own_risk" id="own_risk" placeholder="Own Risk" value="<?= set_value('own_risk'); ?>">
                                 <small class="info help-block">
                                 </small>
                              </div>
                           </div>
                                                         
                           <div class="form-group ">
                              <label for="highest_ever_insured" class="col-sm-2 control-label">Highest Ever Insured 
                              <i class="required">*</i>
                              </label>
                              <div class="col-sm-8">
                                 <input type="text" class="form-control" name="highest_ever_insured" id="highest_ever_insured" placeholder="Highest Ever Insured" value="<?= set_value('highest_ever_insured'); ?>">
                                 <small class="info help-block">
                                 </small>
                              </div>
                           </div>
                                                         
                           <div class="form-group ">
                              <label for="request_increase_status" class="col-sm-2 control-label">Request Increase Status 
                              <i class="required">*</i>
                              </label>
                              <div class="col-sm-8">
                                 <input type="text" class="form-control" name="request_increase_status" id="request_increase_status" placeholder="Request Increase Status" value="<?= set_value('request_increase_status'); ?>">
                                 <small class="info help-block">
                                 <b>Input Request Increase Status</b> Max Length : 20.</small>
                              </div>
                           </div>
                                                         
                           <div class="form-group ">
                              <label for="mount_increase" class="col-sm-2 control-label">Mount Increase 
                              <i class="required">*</i>
                              </label>
                              <div class="col-sm-8">
                                 <input type="text" class="form-control" name="mount_increase" id="mount_increase" placeholder="Mount Increase" value="<?= set_value('mount_increase'); ?>">
                                 <small class="info help-block">
                                 </small>
                              </div>
                           </div>
                                                         
                           <div class="form-group ">
                              <label for="last_increased_requested" class="col-sm-2 control-label">Last Increased Requested 
                              <i class="required">*</i>
                              </label>
                              <div class="col-sm-8">
                                 <input type="text" class="form-control" name="last_increased_requested" id="last_increased_requested" placeholder="Last Increased Requested" value="<?= set_value('last_increased_requested'); ?>">
                                 <small class="info help-block">
                                 </small>
                              </div>
                           </div>
                                                         
                           <div class="form-group ">
                              <label for="date_last_increased_requested" class="col-sm-2 control-label">Date Last Increased Requested 
                              <i class="required">*</i>
                              </label>
                              <div class="col-sm-6">
                              <div class="input-group date col-sm-8">
                                 <input type="text" class="form-control pull-right datetimepicker" name="date_last_increased_requested"  id="date_last_increased_requested">
                              </div>
                              <small class="info help-block">
                              </small>
                              </div>
                           </div>
                                                         
                           <div class="message"></div>
                             
                            <div class="modal-footer justify-content-between">
                              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                              <button class="btn btn-flat btn-primary btn_save btn_action" id="btn_save_credit" data-stype='stay' title="<?= cclang('save_button'); ?> (Ctrl+s)">
                                 <i class="fa fa-save" ></i> <?= cclang('save_button'); ?>
                              </button>  
                           </div>     
                           <?= form_close(); ?>
                           </div>
                        </div>
                        <!--/box body -->
                     </div>
                     <!--/box -->
                  </div>
               </div>
            
           
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
</section>


<section>
      <div class="modal fade" id="modal-sample">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="row" >
              
                  <div class="box box-warning">
                     <div class="box-body ">
                        <!-- Widget: user widget style 1 -->
                        <div class="box box-widget widget-user-2">
                           <!-- Add the bg color to the header using any of the bg-* classes -->
                           <div class="widget-user-header ">
                              <div class="widget-user-image">
                                 <img class="img-circle" src="<?= BASE_ASSET; ?>/img/add2.png" alt="User Avatar">
                              </div>
                              <!-- /.widget-user-image -->
                              <h3 class="widget-user-username">Amuco Samples</h3>
                              <h5 class="widget-user-desc"><?= cclang('new', ['Amuco Samples']); ?></h5>
                             
                           </div>
                        </div>
                     <div>   
                     <?= form_open('', [
                            'name'    => 'form_amuco_samples', 
                            'class'   => 'form-horizontal form-step', 
                            'id'      => 'form_amuco_samples', 
                            'enctype' => 'multipart/form-data', 
                            'method'  => 'POST'
                            ]); ?>
                         
                                                <div class="form-group ">
                            <label for="product_id" class="col-sm-2 control-label">Product  
                            <i class="required">*</i>
                            </label>
                            <div class="col-sm-8">
                                <select  class="form-control chosen chosen-select-deselect" name="product_id" id="product_id" data-placeholder="Select Product Id" >
                                    <option value=""></option>
                                    <?php foreach (db_get_all_data('amuco_products') as $row): ?>
                                    <option value="<?= $row->id ?>"><?= $row->name; ?></option>
                                    <?php endforeach; ?>  
                                </select>
                                <small class="info help-block">
                                <b>Input Product Id</b> Max Length : 10.</small>
                            </div>
                        </div>

                                                 
                                                <div class="form-group ">
                            <label for="supplier_id" class="col-sm-2 control-label">Supplier  
                            <i class="required">*</i>
                            </label>
                            <div class="col-sm-8">
                                <select  class="form-control chosen chosen-select-deselect" name="supplier_id" id="supplier_id" data-placeholder="Select Supplier Id" >
                                    <option value=""></option>
                                    <?php foreach (db_get_all_data('amuco_suppliers') as $row): ?>
                                    <option value="<?= $row->id ?>"><?= $row->name; ?></option>
                                    <?php endforeach; ?>  
                                </select>
                                <small class="info help-block">
                                <b>Input Supplier Id</b> Max Length : 10.</small>
                            </div>
                        </div>

                                                 
                                                <div class="form-group ">
                            <label for="note" class="col-sm-2 control-label">Note 
                            <i class="required">*</i>
                            </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="note" id="note" placeholder="Note" value="<?= set_value('note'); ?>">
                                <small class="info help-block">
                                <b>Input Note</b> Max Length : 250.</small>
                            </div>
                        </div>
                                                 
                                                <div class="form-group ">
                            <label for="lot" class="col-sm-2 control-label">Lot 
                            <i class="required">*</i>
                            </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="lot" id="lot" placeholder="Lot" value="<?= set_value('lot'); ?>">
                                <small class="info help-block">
                                <b>Input Lot</b> Max Length : 250.</small>
                            </div>
                        </div>
                                                 
                                                <div class="form-group ">
                            <label for="status" class="col-sm-2 control-label">Status 
                            <i class="required">*</i>
                            </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="status" id="status" placeholder="Status" value="<?= set_value('status'); ?>">
                                <small class="info help-block">
                                <b>Input Status</b> Max Length : 50.</small>
                            </div>
                        </div>
                                                 
                                                <div class="form-group ">
                            <label for="remarks" class="col-sm-2 control-label">Remarks 
                            </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="remarks" id="remarks" placeholder="Remarks" value="<?= set_value('remarks'); ?>">
                                <small class="info help-block">
                                <b>Input Remarks</b> Max Length : 250.</small>
                            </div>
                        </div>
                                                 
                                                <div class="form-group ">
                            <label for="date_received" class="col-sm-2 control-label">Date Received 
                            <i class="required">*</i>
                            </label>
                            <div class="col-sm-6">
                            <div class="input-group date col-sm-8">
                              <input type="text" class="form-control pull-right datetimepicker" name="date_received"  id="date_received">
                            </div>
                            <small class="info help-block">
                            </small>
                            </div>
                        </div>
                                                 
                                                <div class="form-group ">
                            <label for="date_sent" class="col-sm-2 control-label">Date Sent 
                            <i class="required">*</i>
                            </label>
                            <div class="col-sm-6">
                            <div class="input-group date col-sm-8">
                              <input type="text" class="form-control pull-right datetimepicker" name="date_sent"  id="date_sent">
                            </div>
                            <small class="info help-block">
                            </small>
                            </div>
                        </div>
                                                 
                                                <div class="form-group ">
                            <label for="date_requested" class="col-sm-2 control-label">Date Requested 
                            <i class="required">*</i>
                            </label>
                            <div class="col-sm-6">
                            <div class="input-group date col-sm-8">
                              <input type="text" class="form-control pull-right datetimepicker" name="date_requested"  id="date_requested">
                            </div>
                            <small class="info help-block">
                            </small>
                            </div>
                        </div>
                                                 
                                                <div class="form-group ">
                            <label for="customer_id" class="col-sm-2 control-label">Customer  
                            <i class="required">*</i>
                            </label>
                            <div class="col-sm-8">
                                <select  class="form-control chosen chosen-select-deselect" name="customer_id" id="customer_id" data-placeholder="Select Customer Id" >
                                    <option value=""></option>
                                    <?php foreach (db_get_all_data('amuco_customers') as $row): ?>
                           <option <?=  ($row->id==$amuco_customers->id) ? 'selected' : ''; ?> value="<?= $row->id ?>"><?= $row->name; ?></option> 
                           <?php endforeach; ?>  
                                </select>
                                <small class="info help-block">
                                <b>Input Customer Id</b> Max Length : 10.</small>
                            </div>
                        </div>

                                                
                        
                                                <div class="message"></div>
                                                <div class="modal-footer justify-content-between">
                     <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
                     <button class="btn btn-flat btn-primary btn_save btn_action" id="btn_save_sample" data-stype='stay' title="<?= cclang('save_button'); ?> (Ctrl+s)">
                        <i class="fa fa-save" ></i> <?= cclang('save_button'); ?>
                     </button>
                  </div>
                                                <div class="row-fluid col-md-7 container-button-bottom">
                           
                            <span class="loading loading-hide">
                            <img src="<?= BASE_ASSET; ?>/img/loading-spin-primary.svg"> 
                            <i><?= cclang('loading_saving_data'); ?></i>
                            </span>
                        </div>
                                                 <?= form_close(); ?>
                           </div>
                        </div>
                        <!--/box body -->
                     </div>
                     <!--/box -->
                  </div>
               </div>
            
           
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
</section>

<!-- MODALE CONTACT-->

<section>
    <div class="modal fade" id="modal-add-contact">
        <div class="modal-dialog modal-lg">
             <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <div class="box box-widget widget-user-2">
                            <div class="widget-user-header ">
                                <div class="widget-user-image">
                                    <img class="img-circle" src="<?= BASE_ASSET; ?>/img/add2.png" alt="User Avatar">
                                </div>
                        
                                <h3 class="widget-user-username">Amuco Contacts</h3>
                                <h5 class="widget-user-desc"><?= cclang('new', ['Amuco Contacts']); ?></h5>
                                <hr>
                            </div>
                            <?= form_open('', [
                                    'name'    => 'form_amuco_contacts', 
                                    'class'   => 'form-horizontal form-step', 
                                    'id'      => 'form_amuco_contacts', 
                                    'enctype' => 'multipart/form-data', 
                                    'method'  => 'POST'
                                    ]); ?>
                     
                            <div class="form-group" style="display:none">
                                <label for="type_contact" class="col-sm-2 control-label"> Contact Type<i class="required">*</i> </label>
                                <div class="col-sm-8">
                                    <input readonly type="text" class="form-control" name="type_contact" id="type_contact" value="Customer">
                                    <small class="info help-block"></small>
                                </div>
                            </div>

                            <div class="form-group "  style="display:none">
                                <label for="customer_id" class="col-sm-2 control-label">Customer  <i class="required">*</i></label>
                                <div class="col-sm-8">
                                    <input readonly type="hidden" class="form-control" name="customer_name" id="customer_name_contact" placeholder="First Name" value="">
                                    <input  type="hidden" class="form-control" name="customer_id" id="customer_id" value="<?=$amuco_customer_request->customer?>" >
                                    <small class="info help-block"><b>Input Customer Id</b> Max Length : 10.</small>
                                </div>
                            </div>
                                                 
                            <div class="form-group ">
                                <label for="name" class="col-sm-2 control-label">First Name <i class="required">*</i></label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="first_name" id="first_name" placeholder="First Name" value="<?= set_value('first_name'); ?>">
                                    <small class="info help-block"><b>Input First Name</b> Max Length : 100.</small>
                                </div>
                            </div>

                            <div class="form-group ">
                                <label for="name" class="col-sm-2 control-label">Last Name <i class="required">*</i></label>
                                <div class="col-sm-8">
                                <input type="text" class="form-control" name="last_name" id="last_name" placeholder="Last Name" value="<?= set_value('last_name'); ?>">
                                <small class="info help-block">
                                <b>Input Last Name</b> Max Length : 100.</small>
                                </div>
                            </div>
                                                 
                            <div class="form-group ">
                                <label for="position" class="col-sm-2 control-label">Position </label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="position" id="position" placeholder="Position" value="<?= set_value('position'); ?>">
                                    <small class="info help-block">
                                    <b>Input Position</b> Max Length : 100.</small>
                                </div>
                            </div>
                                                 
                            <div class="form-group ">
                                <label for="departament" class="col-sm-2 control-label">Departament </label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="departament" id="departament" placeholder="Department" value="<?= set_value('department'); ?>">
                                    <small class="info help-block">
                                    <b>Input Departament</b> Max Length : 100.</small>
                                </div>
                            </div>
                                                 
                            <div class="form-group ">
                                <label for="mobile_phone" class="col-sm-2 control-label">Mobile Phone <i class="required">*</i></label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="mobile_phone" id="mobile_phone" placeholder="Mobile Phone" value="<?= set_value('mobile_phone'); ?>">
                                    <small class="info help-block">
                                    <b>Input Mobile Phone</b> Max Length : 30.</small>
                                </div>
                            </div>
                                                 
                            <div class="form-group ">
                                <label for="office_phone" class="col-sm-2 control-label">Office Phone </label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="office_phone" id="office_phone" placeholder="Office Phone" value="<?= set_value('office_phone'); ?>">
                                    <small class="info help-block">
                                    <b>Input Office Phone</b> Max Length : 30.</small>
                                </div>
                            </div>
                                                 
                            <div class="form-group ">
                                <label for="personal_phone" class="col-sm-2 control-label">Personal Phone </label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="personal_phone" id="personal_phone" placeholder="Personal Phone" value="<?= set_value('personal_phone'); ?>">
                                    <small class="info help-block">
                                    <b>Input Personal Phone</b> Max Length : 30.</small>
                                </div>
                            </div>
                                                 
                            <div class="form-group ">
                                <label for="fax" class="col-sm-2 control-label">Fax </label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="fax" id="fax" placeholder="Fax" value="<?= set_value('fax'); ?>">
                                    <small class="info help-block">
                                    <b>Input Fax</b> Max Length : 30.</small>
                                </div>
                            </div>
                                                 
                            <div class="form-group ">
                                <label for="email" class="col-sm-2 control-label">Email <i class="required">*</i></label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="email" id="email" placeholder="Email" value="<?= set_value('email'); ?>">
                                    <small class="info help-block">
                                    <b>Input Email</b> Max Length : 100.</small>
                                </div>
                            </div>
                                                 
                            <div class="form-group ">
                                <label for="skype" class="col-sm-2 control-label">Skype </label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="skype" id="skype" placeholder="Skype" value="<?= set_value('skype'); ?>">
                                    <small class="info help-block"><b>Input Skype</b> Max Length : 100.</small>
                                </div>
                            </div>
                                                 
                            <div class="form-group ">
                                <label for="picture" class="col-sm-2 control-label">Picture </label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="picture" id="picture" placeholder="Picture" value="<?= set_value('picture'); ?>">
                                    <small class="info help-block"><b>Input Picture</b> Max Length : 250.</small>
                                </div>
                            </div>
                                                 
                            <div class="form-group ">
                                <label for="home_address" class="col-sm-2 control-label">Home Address </label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="home_address" id="home_address" placeholder="Home Address" value="<?= set_value('home_address'); ?>">
                                    <small class="info help-block"><b>Input Home Address</b> Max Length : 250.</small>
                                </div>
                            </div>
                                                 
                            <div class="form-group ">
                                <label for="country" class="col-sm-2 control-label">Country <i class="required">*</i></label>
                                <div class="col-sm-8">
                                    <select  class="form-control chosen chosen-select-deselect" name="country" id="country" data-placeholder="Select Country" >
                                        <option value=""></option>
                                        <?php foreach (db_get_all_data('amuco_countries') as $row): ?>
                                        <option value="<?= $row->id ?>"><?= $row->name; ?></option>
                                        <?php endforeach; ?>  
                                    </select>
                                    <small class="info help-block"><b>Input Country</b> Max Length : 10.</small>
                                </div>
                            </div>
                                                 
                            <div class="form-group ">
                                <label for="city" class="col-sm-2 control-label">City </label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="city" id="city" placeholder="City" value="<?= set_value('city'); ?>">
                                    <small class="info help-block"><b>Input City</b> Max Length : 100.</small>
                                </div>
                            </div>
                                                 
                            <div class="form-group ">
                                <label for="home_phone" class="col-sm-2 control-label">Home Phone </label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="home_phone" id="home_phone" placeholder="Home Phone" value="<?= set_value('home_phone'); ?>">
                                    <small class="info help-block"><b>Input Home Phone</b> Max Length : 30.</small>
                                </div>
                            </div>
                                                 
                            <div class="form-group ">
                                <label for="birthday" class="col-sm-2 control-label">Birthday </label>
                                <div class="col-sm-6">
                                    <div class="input-group date col-sm-8">
                                        <input type="text" class="form-control pull-right datepicker" name="birthday"  id="birthday">
                                    </div>
                                <small class="info help-block"></small>
                                </div>
                            </div>
                                                 
                            <div class="form-group ">
                                <label for="additional_information" class="col-sm-2 control-label">Additional Information </label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="additional_information" id="additional_information" placeholder="Additional Information" value="<?= set_value('additional_information'); ?>">
                                    <small class="info help-block">
                                    <b>Input Additional Information</b> Max Length : 250.</small>
                                </div>
                            </div>
                            <!-- <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">        -->
                            <div class="message"></div>
                            <div class="modal-footer justify-content-between">
                                <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
                                <button class="btn btn-flat btn-primary" id="btn_save_contact" data-stype='stay' title="<?= cclang('save_button'); ?>">
                                    <i class="fa fa-save" ></i> <?= cclang('save_button'); ?></button>
                            </div>
                  
                            <?= form_close(); ?>
                        </div> 
                    </div>          
               </div>
            </div>
        </div>
    </div> 
</section>


<!-- MODALE DOCUMENTS-->

<section>
    <div class="modal fade" id="modal-add-document">
        <div class="modal-dialog modal-lg">
             <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <div class="box box-widget widget-user-2">
                            <div class="widget-user-header ">
                                <div class="widget-user-image">
                                    <img class="img-circle" src="<?= BASE_ASSET; ?>/img/add2.png" alt="User Avatar">
                                </div>
                        
                                <h3 class="widget-user-username">Amuco Documents</h3>
                                <h5 class="widget-user-desc"></h5>
                                <hr>
                            </div>
                            <?= form_open(BASE_URL . 'administrator/amuco_sroc/save_document', [
                                    'name'    => 'form_amuco_documents', 
                                    'class'   => 'form-horizontal form-step',
                                    'id'      => 'form_amuco_documents', 
                                    'enctype' => 'multipart/form-data', 
                                    'method'  => 'POST'
                                    ]); ?>
                     
                            <div class="form-group ">
                                <label for="name" class="col-sm-2 control-label">Name Document<i class="required">*</i></label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="name_document" id="name_document" placeholder="Name document" value="<?= set_value('name_document'); ?>" required>
                                </div>
                            </div>

                            <div class="form-group ">
                                <label for="name" class="col-sm-2 control-label">Origin <i class="required">*</i></label>
                                <div class="col-sm-8">
                                    <select  class="form-control chosen chosen-select-deselect" name="origin" id="origin" data-placeholder="Select origin" >
                                       <option value="AMU">AMU</option>
                                       <option value="CUS">CUS</option>
                                       <option value="SUP">SUP</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group ">
                                <label for="name" class="col-sm-2 control-label">Original <i class="required">*</i></label>
                                <div class="col-sm-8">
                                    <select  class="form-control chosen chosen-select-deselect" name="original" id="original" data-placeholder="Select original" >
                                      <?php for ($i=0; $i <= 10 ; $i++) { ?>
                                          <option value="<?=$i?>"><?=$i?></option>
                                       <?php } ?>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group ">
                                <label for="name" class="col-sm-2 control-label">Copy <i class="required">*</i></label>
                                <div class="col-sm-8">
                                    <select  class="form-control chosen chosen-select-deselect" name="copy" id="copy" data-placeholder="Select copy" >
                                       <?php for ($i=0; $i <= 10 ; $i++) { ?>
                                          <option value="<?=$i?>"><?=$i?></option>
                                       <?php } ?>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group ">
                                <label for="name" class="col-sm-2 control-label">Select by default <i class="required">*</i></label>
                                <div class="col-sm-8">
                                    <select  class="form-control chosen chosen-select-deselect" name="select_by_default" id="select_by_default">
                                       <option value="YES">YES</option>
                                       <option value="NO">NO</option>
                                    </select>
                                </div>
                            </div>
                                                 
                            <input type="hidden" name="url" value="<?=current_url() ?>">
                            <div class="message"></div>
                            <div class="modal-footer justify-content-between">
                                <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
                                <button class="btn btn-flat btn-primary" id="btn_save_document" data-stype='stay' title="<?= cclang('save_button'); ?>">
                                    <i class="fa fa-save" ></i> <?= cclang('save_button'); ?></button>
                            </div>
                  
                            <?= form_close(); ?>
                        </div> 
                    </div>          
               </div>
            </div>
        </div>
    </div> 
</section>

<!-- /.content -->ç
<script src="<?= BASE_ASSET; ?>ckeditor/ckeditor.js"></script>


<link href="<?= BASE_ASSET; ?>/admin-lte/plugins/datatables/jquery.dataTables.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/fixedcolumns/3.2.4/css/fixedColumns.bootstrap4.min.css" rel="stylesheet" />
<link href="https://cdn.datatables.net/buttons/1.6.3/css/buttons.dataTables.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/select/1.3.1/css/select.dataTables.min.css" rel="stylesheet">
<!--link href="<?= BASE_ASSET; ?>/css/editor.dataTables.min.css" rel="stylesheet"-->

<script src="<?= BASE_ASSET; ?>/js/cleave.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/numeral.js/2.0.6/numeral.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.3/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/select/1.3.1/js/dataTables.select.min.js"></script>
<!--script src="<?= BASE_ASSET; ?>/js/dataTables.editor.min.js"></script-->
<!--script src="<?= BASE_ASSET; ?>/admin-lte/plugins/datatables/extensions/FixedColumns/js/dataTables.fixedColumns.min.js"></script-->
<script src="https://cdn.datatables.net/fixedcolumns/3.2.4/js/dataTables.fixedColumns.min.js"></script>
<!-- Page script -->
<script>
    $(document).ready(function(){

   //    $("#logistics_contact").chosen().change(function() {
   //       let value = $(this).text().split("-");
   //       // let name = value.split("-");
   //       $(this).text(value[0]).trigger("chosen:updated");
   //       console.log(value);
   //       console.log($(this));
   //    // alert(+$(this).val());
   //    //$('#' + $(this).val()).show();
   // });

   CKEDITOR.replace('internal_observations'); 
   CKEDITOR.replace('purchase_office_observations'); 
   CKEDITOR.replace('supplier_observations'); 

   var internal_observations = CKEDITOR.instances.notes;
   var purchase_office_observations = CKEDITOR.instances.notes;
   var nsupplier_observationsotes = CKEDITOR.instances.notes;


      table_offers_sent = $("#table_offers_customers").DataTable({
      columns: [
          {
                data: '',
                defaultContent: '',
                className: 'select-checkbox',
                orderable: false,
            },

         { data: "amuco_products_name" },
         { data: "quantity", render: $.fn.dataTable.render.number( ',', '.', 2 ) },
         { data: "unit" },
         { data: "fcl" },
         { data: "freight" },
         { data: "type_fcl" },
         { data: "amuco_packing_name" },
         { data: "standard"}
      ],
     
      rowId: 'id',
      rowCallback: function (row, data) {
      },
        filter: false,
        info: false,
        ordering: [[ 1, "desc" ]],
        processing: false,
        retrieve: false,
        paging :         false,
        searching: false,
        //scrollX: true,
        responsive: true,
        scrollCollapse: true,        
        select: {
            style:    'os',
            selector: 'td:first-child'
        },
     });


     table_documents = $('#table_documents').DataTable( {
         filter: false,
         info: false,
         ordering: [[ 1, "desc" ]],
         processing: false,
         retrieve: false,
         paging : false,
    } );

    $('#table_documents').Tabledit({
                  deleteButton: false,
                  editButton: false,          
                  columns: {
                        identifier: [1, 'name'],
                        editable: [[3, 'original'], [4, 'copy']]
                  }

                  // hideIdentifier: false,
                  // url: BASE_URL + '/administrator/amuco_details_request_office/edit_save_table/15',  
                  // onSuccess:function(data, textStatus, jqXHR)
                  // {
                  //   console.log(data);
                  //   console.log(textStatus);
                  //   console.log(jqXHR);
                  // },
                  // onAjax: function(action, serialize) {
                  //   console.log('onAjax(action, serialize)');
                  //     console.log(action);
                  //     serialize.new ="hh";
                  //   console.log(serialize);
                  //   serialize = serialize + '&'+ y + '='+ x;
                  //   console.log(serialize);
                  // },
              });
    

     $('#table_offers_customers').on( 'select.dt', function ( e, dt, type, indexes ) {
      if(dt.rows('.selected').data().length > 0){
         var id_offer = dt.rows('.selected').data()[0].id;
         $('#form_amuco_offer')[0].reset();
        // alert("selecciono algo ");
      //   console.log(dt.rows('.selected').data()[0].id);
         // alert('tengo data');
      //   $("#btn_sroc").removeClass('disabled');
      $.ajax({
          url: BASE_URL + '/administrator/amuco_sroc/getDataOffer/'+id_offer,
         //  type: 'GET',
          dataType: 'json',
          data: {'<?php echo $this->security->get_csrf_token_name(); ?>':'<?php echo $this->security->get_csrf_hash(); ?>'},
          
        })
        .done(function(res) {
            console.log(res);

            //PURCHASE TO SUPPLIER
            if(res.supplier !== "") {
               $('#supplier').val(res.supplier);
               $('#name_contact_supplier').val(res.contact_name);
               $('#email_contact_supplier').val(res.contact_email);
               $('#supplier_com').val(res.offer[0].com_other_supp_comm);
            }else if(res.office !== "" ) {
               $('#purchase_office').val('office / '+res.office);
               $('#supplier').val(res.supplier);
               $('#name_contact_office').val(res.contact_name);
               $('#email_contact_office').val(res.contact_email);

               $('#purchase_office_com').val(res.offer[0].com_purchase_office);
               $('#supplier').val(res.offer[0].amuco_supplier_direct_name == null ? res.offer[0].amuco_supplier_name : res.offer[0].amuco_supplier_direct_name);


            }

            $('#manufacturer').val(res.manufacturer_name);
            $('#purchase_incoterm').val(res.detail_offer_price[0].supplier_incoterm);
            $('#shipping_port').val(res.detail_offer_price[0].shipping_port);
            $('#payment_terms').val(res.detail_offer_price[0].payment_terms);

            let etd = res.detail_offer_price[0].ETD.replace('00:00:00','').replace(' ','');
            let etd_date = etd.split('-');
            $('#etd').val(`${etd_date[2]}/${etd_date[1]}/${etd_date[0]}`);

            $('#price_fob').val(res.detail_offer_price[0].price_fob);
            $('#freight').val(res.detail_offer_price[0].total_freight);
            $('#purchase_unit_price').val(res.detail_offer_price[0].total_price);
            $('#total_purch_price').val(res.offer[0].unit_price);
            

            //SALE TO CUSTOMER
            
            if(res.representative !== "") {
               $('#representative').val(res.representative[0].first_name + " " + res.representative[0].last_name);
               $('#representative_name').val(res.representative[0].first_name + " " + res.representative[0].last_name);
               $('#representative_email').val(res.representative[0].email);
            }

            if(res.comercial_contact !== "") {

               // $('#comercial_contact').val(res.comercial_contact[0].first_name + " " + res.comercial_contact[0].last_name);
               // $('#comercial_contact').trigger('chosen:updated');
               // $('#comercial_contact').val(res.comercial_contact[0].id);

               $("#comercial_contact").val(res.comercial_contact[0].id).trigger("chosen:updated");

            }

            $('#sales_incoterm').val(res.offer[0].incoterm); 
            $('#destination_port').val(res.offer[0].destination_port);
            $('#payment_terms_customer').val(res.offer[0].payments_terms_id);

            $('#sale_unit_price').val(res.offer[0].offer_price_per_unit);
            $('#total_sale').val(res.offer[0].calculated_offer_price);
            $('#margin').val(res.offer[0].price_increase_commission);
            $('#gross_profit').val(res.offer[0].estimated_gross_profit);
            

        });

      } else {
         // alert('no tengo data');
      //   $("#btn_sroc").addClass('disabled');
      }
     
    }); 


    $('#table_offers_customers tbody tr td:eq(0)').click();

    $('#btn_save_contact').click(function(){
        $('.message').fadeOut();
            
        var form_amuco_contacts = $('#form_amuco_contacts');
        var data_post = form_amuco_contacts.serializeArray();
        var save_type = $(this).attr('data-stype');

        data_post.push({name: 'save_type', value: save_type});
    
      console.log(data_post);
        $('.loading').show();
    
        $.ajax({
          url: BASE_URL + 'administrator/amuco_contacts/add_save',
          type: 'POST',
          dataType: 'json',
          data: data_post,
        })
        .done(function(res) {

         //   console.log(res);
          $('form').find('.form-group').removeClass('has-error');
          $('.steps li').removeClass('error');
          $('form').find('.error-input').remove();
          if(res.success) {
            $('#modal-contact').modal('hide');
            location.reload();
            if (save_type == 'back') {
              window.location.href = res.redirect;
              return;
            }
    
            $('.message').printMessage({message : res.message});
            $('.message').fadeIn();
            resetForm();
            $('.chosen option').prop('selected', false).trigger('chosen:updated');
                
          } else {
            if (res.errors) {
                
                $.each(res.errors, function(index, val) {
                    $('form #'+index).parents('.form-group').addClass('has-error');
                    $('form #'+index).parents('.form-group').find('small').prepend(`
                      <div class="error-input">`+val+`</div>
                      `);
                });
                $('.steps li').removeClass('error');
                $('.content section').each(function(index, el) {
                    if ($(this).find('.has-error').length) {
                        $('.steps li:eq('+index+')').addClass('error').find('a').trigger('click');
                    }
                });
            }
            $('.message').printMessage({message : res.message, type : 'warning'});
          }
    
        })
        .fail(function() {
          $('.message').printMessage({message : 'Error save data', type : 'warning'});
        })
        .always(function() {
          $('.loading').hide();
          $('html, body').animate({ scrollTop: $(document).height() }, 2000);
        });
    
        return false;
      }); /*end btn save*/


             
      // $('#btn_cancel').click(function(){
      //   swal({
      //       title: "Are you sure?",
      //       text: "the data that you have created will be in the exhaust!",
      //       type: "warning",
      //       showCancelButton: true,
      //       confirmButtonColor: "#DD6B55",
      //       confirmButtonText: "Yes!",
      //       cancelButtonText: "No!",
      //       closeOnConfirm: true,
      //       closeOnCancel: true
      //     },
      //     function(isConfirm){
      //       if (isConfirm) {
      //         window.location.href = BASE_URL + 'administrator/amuco_sroc';
      //       }
      //     });
    
      //   return false;
      // }); /*end btn cancel*/
    
      // $('.btn_save').click(function(){
      //   $('.message').fadeOut();
            
      //   var form_amuco_sroc = $('#form_amuco_sroc');
      //   var data_post = form_amuco_sroc.serializeArray();
      //   var save_type = $(this).attr('data-stype');
      //   data_post.push({name: 'save_type', value: save_type});
    
      //   $('.loading').show();
    
      //   $.ajax({
      //     url: form_amuco_sroc.attr('action'),
      //     type: 'POST',
      //     dataType: 'json',
      //     data: data_post,
      //   })
      //   .done(function(res) {
      //     $('form').find('.form-group').removeClass('has-error');
      //     $('form').find('.error-input').remove();
      //     $('.steps li').removeClass('error');
      //     if(res.success) {
      //       var id = $('#amuco_sroc_image_galery').find('li').attr('qq-file-id');
      //       if (save_type == 'back') {
      //         window.location.href = res.redirect;
      //         return;
      //       }
    
      //       $('.message').printMessage({message : res.message});
      //       $('.message').fadeIn();
      //       $('.data_file_uuid').val('');
    
      //     } else {
      //       if (res.errors) {
      //          parseErrorField(res.errors);
      //       }
      //       $('.message').printMessage({message : res.message, type : 'warning'});
      //     }
    
      //   })
      //   .fail(function() {
      //     $('.message').printMessage({message : 'Error save data', type : 'warning'});
      //   })
      //   .always(function() {
      //     $('.loading').hide();
      //     $('html, body').animate({ scrollTop: $(document).height() }, 2000);
      //   });
    
      //   return false;
      // }); /*end btn save*/
      
       
       
       

      async function chain(){
      }
       
      chain();


    
    
    }); /*end doc ready*/
</script>