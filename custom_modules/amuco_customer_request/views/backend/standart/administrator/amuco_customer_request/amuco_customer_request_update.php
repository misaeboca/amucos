<style>
.table_price {
  display: table;
  border-collapse: separate;
  border-spacing: 0;
  /*Se deja en 0 para evitar tu problema de que se vean atras*/
 
}
.td-limit {
    max-width: 100px;
    text-overflow: Ellipsis;
    white-space: nowrap;
    overflow: hidden;
}
.hide_column{
  display:none
}
.DTFC_LeftBodyLiner{overflow-y:unset !important}
    .DTFC_RightBodyLiner{overflow-y:unset !important}
  
   .label-right{
     text-align:right;
   }
   p {
    font-weight: bold;
    font-style: italic;
    margin-left:1%
  }
  .btn-aux{
    background-color:#79be58;
    color:white;
    margin-right:2%;
  }
  .btn-aux-action{
    background-color:#79be58;
    color:white;
  }
  .btn-aux:hover{
    background-color:#79be80;
    color:white;
  }
  .btn-aux:focus{
    color:white;
  }
  .btn-aux-action:hover{
    background-color:#79be80;
    color:white;
  }
  .btn-aux-action:focus{
    color:white;
  }
  .disabled {
        pointer-events: none;
        cursor: default;
    }
  @media only screen and  (min-width: 1100px)
  {
    .div-label-left{
      left:2.5%
    }
    p {
      font-weight: bold;
      font-style: italic;
      margin-left:0%
    }
  }

.input_height {
   height: 25px;
   border-radius: 0px !important;
   text-align: left;
   padding: 1px;
}

.form-group {
    padding-top: 15px;
}

.separador {
  border-top: 1px solid black;
  height: 2px;
  max-width: 200px;
  padding: 0;
  margin: 20px auto 0 auto;
}

#terms {
   padding-top: 0;
   padding-bottom: 0px;
   height: 25px;
   border-radius: 0px !important;
}

/*#incoterm {
   padding-top: 0;
   padding-bottom: 0px;
   height: 25px;
   border-radius: 0px !important;
}*/

.input_percentage {
   padding: 0;
   width: 25px;
   text-align: center;
}

.off_padding{
   padding: 0px;
}
.table_2 th{
   font-size: 14px;
   text-align: center;
}

.table_2 td{
   font-size: 13px;
   text-align: center;
}

.invoice {
    background: #fff;
    padding: 20px
}

.invoice-company {
    font-size: 20px
}

.invoice-header {
    margin: 0 -20px;
    background: #f0f3f4;
    padding: 20px
}

.invoice-date,
.invoice-from,
.invoice-to {
    display: table-cell;
    width: 1%
}

.invoice-from,
.invoice-to {
    padding-right: 20px
}

.invoice-date .date,
.invoice-from strong,
.invoice-to strong {
    font-size: 16px;
    font-weight: 600
}

.invoice-date {
    text-align: right;
    padding-left: 20px
}

.invoice-price {
    background: #f0f3f4;
    display: table;
    width: 100%
}

.invoice-price .invoice-price-left,
.invoice-price .invoice-price-right {
    display: table-cell;
    padding: 20px;
    font-size: 20px;
    font-weight: 600;
    width: 75%;
    position: relative;
    vertical-align: middle
}

.invoice-price .invoice-price-left .sub-price {
    display: table-cell;
    vertical-align: middle;
    padding: 0 20px
}

.invoice-price small {
    font-size: 12px;
    font-weight: 400;
    display: block
}

.invoice-price .invoice-price-row {
    display: table;
    float: left
}

.invoice-price .invoice-price-right {
    width: 25%;
    background: #2d353c;
    color: #fff;
    font-size: 28px;
    text-align: right;
    vertical-align: bottom;
    font-weight: 300
}

.invoice-price .invoice-price-right small {
    display: block;
    opacity: .6;
    position: absolute;
    top: 10px;
    left: 10px;
    font-size: 12px
}

.invoice-footer {
    border-top: 1px solid #ddd;
    padding-top: 10px;
    font-size: 10px
}

.invoice-note {
    color: #999;
    margin-top: 80px;
    font-size: 85%
}

.invoice>div:not(.invoice-footer) {
    margin-bottom: 20px
}

.bootstrap-multiemail {
  min-height: 100px;
  width: 100%;
  cursor: text;
  margin-bottom: 0px;
}

.bootstrap-multiemail .tag {
  background-color: #e1e1e1;
  border: 1px solid rgba(0, 0, 0, .3);
  border-radius: 3px;
  color: #363636;
  padding: 1px 5px;
  line-height: 27px;
}

.bootstrap-multiemail .tag.invalid {
  background-color: #eb1616;
  color: white;
}

.multipleInput-container {
     border:1px #ccc solid;
     padding:1px;
     padding-bottom:0;
     cursor:text;
     font-size:13px;
     width:100%;
     height: 45px;
     overflow: auto;
     background-color: white;
     border-radius:6px;
}
 
.multipleInput-container input {
     font-size:13px;
     /*clear:both;*/
     width:150px;
     height:24px;
     border:0;
     margin-bottom:1px;
     outline: none
}
 
.multipleInput-container ul {
     list-style-type:none;
     padding-left: 0px !important;
}
 
li.multipleInput-email {
     float:left;
     margin-right:2px;
     margin-bottom:1px;
     border:1px #BBD8FB solid;
     padding:2px;
     background:#F3F7FD;
}
 
.multipleInput-close {
     width:16px;
     height:16px;
     background:url(close.png);
     display:block;
     float:right;
     margin:0 3px;
}
.email_search{
  width: 100% !important;
}

span.cancel-email {
    border: 1px solid #ccc;
    width: 18px;
    display: block;
    float: right;
    text-align: center;
    margin-left: 20px;
    border-radius: 49%;
    height: 18px;
    line-height: 15px;
    margin-top: 1px;    cursor: pointer;
}
.col-sm-12.email-id-row {
    border: 1px solid #ccc;
    border-radius: 49%;
}
.col-sm-12.email-id-row input {
    border: 0px; outline:0px;
}
.col-sm-12.email-id-row {
    padding-top: 2px;
    padding-bottom: 2px;
    margin-top: 3px;
}
span.to-input {
    display: block;
    float: left;
    padding-right: 11px;
}

span.email-ids {
    float: left;
    /* padding: 4px; */
    border: 1px solid #ccc;
    margin-right: 1px;
    margin-bottom: 1px;
    background: #f5f5f5;
    padding: 2px 3px;
    border-radius: 5px;
}


.email-id-row input {
    border: 0; outline:0;
}
span.to-input {
    display: block;
    float: left;
    padding-right: 5px;
}
.email-id-row {
    padding-top: 2px;
    padding-bottom: 2px;
    border-radius: 5px;
    border: 1px solid #ccc;
    /*margin-top: 23px;*/
}

.form-group {
    padding-top: 2px; 
    margin-bottom: 0px;
}

/*Error form*/
form label {
  display: inline-block;
  width: 100px;
}

form div {
  margin-bottom: 5px;
}

.error {
  color: red;
  margin-left: 5px;
}

label.error {
  display: inline;
}

</style>
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
       <br>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class=""><a  href="<?= site_url(  'administrator/amuco_customer_request'); ?>">Amuco Customer Request</a></li>
        <li class="active">Edit</li>
    </ol>
</section>
<!-- Main content -->

<div class="row"> 
    <div class="col-md-12 " >                            
      <div class="message_top"></div>
    </div> 
</div>
<div class="row"> 
    <div class="col-md-12 " >                            
      <div class="message message_no"></div>
    </div> 
</div>
<section class="content">
  <div class="row" >
    <div class="col-md-12">
      <div class="box box-warning">
        <div class="box-body ">
          <div class="box box-widget widget-user-2">
            <div class="widget-user-header ">
              <div class="widget-user-image">
                <img class="img-circle" src="<?= BASE_ASSET; ?>/img/add2.png" alt="User Avatar">
              </div>
              <h3 class="widget-user-username">Amuco Customer Request</h3>
              <h5 class="widget-user-desc">Edit Amuco Customer Request</h5>
              <h3 class="widget-user-username"><?= 'ID: '.$amuco_customer_request->id ?></h3> 
            </div>
          </div> 
       
          <div class="row">
            <div class="col-md-12" >
              <button class="btn btn-flat btn-aux pull-right" id="btn_edit" data-stype='stay' data-toggle="modal" data-target="#modal-edit-request" title="<?= cclang('update_button'); ?>">
                  <i class="fa fa-edit" ></i> <?= cclang('Edit'); ?>
              </button>
            </div>
          </div>
          <div class="row"> 
            <div class="col-md-4" >                          
              <label for="content" class="col-sm-4 label-right">Customer</label>
              <div class="col-sm-8"><p><?= $amuco_customer_request->amuco_customers_name.'  '.anchor('administrator/amuco_customers/view/'.$amuco_customer_request->customer.'?popup=show','<i style=" margin-top: 2.5%" class="fa fa-newspaper-o"></i>', ['class' => 'popup-view','id'=>'view_custo']); ?> </p>   
              </div>
            </div>
            <div class="col-md-4" >                          
              <label for="content" class="col-md-6 col-sm-4 label-right">Destination Port</label>
              <div class="col-sm-6"><p ><?= $amuco_customer_request->amuco_destination_port_name ?> </p> </div>
            </div> 
            <div class="col-md-4" >                          
              <label for="content" class="col-sm-4 label-right">Contact</label>
              <div class="col-sm-8"><p><?= $amuco_customer_request->amuco_contacts_name ?> </p> </div>
            </div>   
          </div>
          <div class="row"> 
              <div class="col-md-4" >                          
                <label for="content" class="col-sm-4 label-right">Sales Agent</label>
                <div class="col-sm-8"><p ><?= $amuco_customer_request->aauth_users_username ?> </p> </div>
              </div>
              <div class="col-md-4" >                          
                <label for="content" class="col-md-6 col-sm-4 label-right">Combined Container</label>
                <div class="col-sm-6"> <p ><?= $amuco_customer_request->combinate_container == 0 ? 'No' : 'Yes' ?> </p> </div>
              </div>
              <div class="col-md-4" >                          
                <label for="content" class="col-sm-4 label-right">Representative</label>
                <div class="col-sm-8"><p><?= $amuco_customer_request->amuco_representative_name ?> </p> </div>
              </div>  
             
          </div>
          <div class="row"> 
            <div class="col-md-4" >                          
              <label for="content" class="col-sm-4 label-right">Incoterm</label>
              <div class="col-sm-8"><p > <?= $amuco_customer_request->amuco_incoterm_name ?> </p> </div> </div>  
            </div>  
          </div>
          <div class="row"> 
              <div class="col-md-12 div-label-left" >                          
                <label  for="content" class="col-md-1 col-sm-4 label-right control-label">Remarks</label>
                <div class="col-md-10 col-sm-8"><p><?= $amuco_customer_request->remarks ?> </p></div>  
              </div> 
          </div>
           
          <div class="row"> 
              <div class="col-md-12 " >                            
                <div class="message message1"></div>
              </div> 
          </div>

     
          <div class="row">
            <div class="col-md-12" >  
              <button class="btn btn-flat btn-aux pull-right" id="btn_add_product" data-stype='stay' data-toggle="modal" data-target="#modal-add-product" title="<?= cclang('add_button'); ?>">
                <i class="fa fa-plus" ></i> <?= cclang('Add Product'); ?>
              </button>
              
             <?php if($count_request_status_offer_received > 0):?>
              <?php echo anchor('administrator/amuco_customer_request/compare_price/?id='.$amuco_customer_request->id.'&&popup=show','<i class="fa fa-exchange" ></i>  Compare', ['class' => 'popup-view btn btn-flat btn-aux pull-right']); ?> 
              <?php endif; ?> 
              <a <?php echo count($amuco_details_customers_requests) > 0 ? '' :'disabled' ;?> class="btn btn-flat btn-aux pull-right btn_save_request btn_action"  data-stype='china' title="<?= cclang('save_button'); ?>">
                <i class="ion ion-ios-list-outline" ></i> <?= cclang('Request'); ?></a>

                <!--a class="btn btn-flat btn-aux btn-default pull-right btn_action" id="btn_back" title="Back" href="<?= site_url('administrator/amuco_customer_request/'); ?>"><i class="fa fa-undo" ></i> <?= cclang('Back'); ?></a-->          
            </div>
          </div>
           
          <br>
          <div class="row">
            <div class="col-md-12" > 
              <form name="form_amuco_details_customers_request" id="form_amuco_details_customers_request" action="<?= base_url('administrator/amuco_details_customers_request/index'); ?>">
                <div class="table-responsive"> 
                  <table class="table table-bordered table-striped" id="table_products">
                    <thead>
                      <tr>
                        <th data-field="product_id"data-sort="1" data-primary-key="0"> <?= cclang('Product') ?></th>
                        <th data-field="supplier"data-sort="1" data-primary-key="0"> <?= cclang('Supplier') ?></th>
                        <th data-field="office"data-sort="1" data-primary-key="0"> <?= cclang('Office') ?></th>
                        <th data-field="status"data-sort="1" data-primary-key="0"> <?= cclang('status') ?></th>
                        <th colspan="4">Action</th>                          
                      </tr>
                    </thead>
                              
                    <tbody id="tbody_amuco_details_customers_request">
                      <?php foreach($amuco_details_customers_requests as $amuco_details_customers_request): ?>
                      <tr>
                        <td><?php if  ($amuco_details_customers_request->product_id) {
                          echo anchor('administrator/amuco_products/view/'.$amuco_details_customers_request->product_id.'?popup=show', $amuco_details_customers_request->amuco_products_name, ['class' => 'popup-view']); }?> </td>
                            
                      
                        <td><?= _ent($amuco_details_customers_request->amuco_suppliers_name); ?></td>  
                        <td><?= _ent($amuco_details_customers_request->purchasing_username); ?></td>
                        <td><?= _ent($amuco_details_customers_request->status); ?></td> 
                        <td width="200" style="width:27%">
                          <?php is_allowed('amuco_details_customers_request_view', function() use ($amuco_details_customers_request){?>
                          <?php echo '<i class="fa fa-newspaper-o"> '.anchor('administrator/amuco_details_customers_request/view/'.$amuco_details_customers_request->id.'?popup=show', cclang('view_button'), ['class' => 'popup-view']); ?>
                          <?php }) ?>
                          <?php is_allowed('amuco_details_customers_request_update', function() use ($amuco_details_customers_request){?>
                         
                             <a href="#"  class="btn-edit" id="btn_edit_'<?= $amuco_details_customers_request->id ;?>'" 
                                      data-id ="<?= $amuco_details_customers_request->id ;?>"
                                      data-product_name ="<?=  $amuco_details_customers_request->amuco_products_name; ?>"
                                      data-product_id_edit ="<?=  $amuco_details_customers_request->product_id; ?>"
                                      data-quantity ="<?= $amuco_details_customers_request->quantity ?>"
                                      data-unit ="<?= $amuco_details_customers_request->amuco_unit_types_name; ?>"
                                      data-unit_id ="<?= $amuco_details_customers_request->unit; ?>"
                                      data-fcl ="<?= $amuco_details_customers_request->fcl; ?>"
                                      data-fcl_option ="<?= $amuco_details_customers_request->fcl_option; ?>"
                                      data-fcl_type ="<?= $amuco_details_customers_request->type_fcl; ?>"
                                      data-weight_edit ="<?= $amuco_details_customers_request->weight; ?>"
                                      data-packing ="<?= $amuco_details_customers_request->packing; ?>"
                                      data-material ="<?= $amuco_details_customers_request->material; ?>"
                                      data-unit_pack ="<?= $amuco_details_customers_request->unit_pack; ?>"
                                      data-pallets ="<?= $amuco_details_customers_request->pallets; ?>"
                                      data-etd ="<?= substr($amuco_details_customers_request->ETD,0,10); ?>"
                                      data-eta ="<?= substr($amuco_details_customers_request->ETA,0,10); ?>"
                                      data-remarks ="<?= $amuco_details_customers_request->specific_remarks; ?>"
                                      data-supplier ="<?= $amuco_details_customers_request->supplier; ?>"
                                      data-contacts_ids ="<?= $amuco_details_customers_request->contacts; ?>"
                                      data-purchasing ="<?= $amuco_details_customers_request->purchasing; ?>"
                                      >
                                      
                                      <i class="fa fa-edit">Change</i> </a>
                          <?php }) ?>
                          <?php is_allowed('amuco_details_customers_request_update', function() use ($amuco_details_customers_request){?>
                         
                            <a href="#" class="btn-copy" id="btn_copy_'<?= $amuco_details_customers_request->id ;?>'" 
                                      data-product_name ="<?=  $amuco_details_customers_request->amuco_products_name; ?>"
                                      data-product_id_add ="<?=  $amuco_details_customers_request->product_id; ?>"
                                      data-quantity ="<?= $amuco_details_customers_request->quantity ?>"
                                      data-unit ="<?= $amuco_details_customers_request->amuco_unit_types_name; ?>"
                                      data-unit_id ="<?= $amuco_details_customers_request->unit; ?>"
                                      data-fcl ="<?= $amuco_details_customers_request->fcl; ?>"
                                      data-fcl_option ="<?= $amuco_details_customers_request->fcl_option; ?>"
                                      data-fcl_type ="<?= $amuco_details_customers_request->type_fcl; ?>"
                                      data-weight ="<?= $amuco_details_customers_request->weight; ?>"
                                      data-packing ="<?= $amuco_details_customers_request->packing; ?>"
                                      data-material ="<?= $amuco_details_customers_request->material; ?>"
                                      data-unit_pack ="<?= $amuco_details_customers_request->unit_pack; ?>"
                                      data-pallets ="<?= $amuco_details_customers_request->pallets; ?>"
                                      data-etd ="<?= substr($amuco_details_customers_request->ETD,0,10); ?>"
                                      data-eta ="<?= substr($amuco_details_customers_request->ETA,0,10); ?>"
                                      data-remarks ="<?= $amuco_details_customers_request->specific_remarks; ?>">
                                     <i class="fa fa-copy">Copy</i> </a>
                          <?php }) ?>
                          <?php if(substr($amuco_details_customers_request->status,0,9) == 'Requested' ||  $amuco_details_customers_request->status == 'Offer Received' ||  $amuco_details_customers_request->status == 'New'): ?>
                          <?php echo '<i class="fa fa-newspaper-o"> '.anchor('administrator/amuco_customer_request/view_add_price/'.$amuco_details_customers_request->id.'?popup=show', cclang('Add Price'), ['class' => 'popup-view']); ?>
                          <!--a href="<?= site_url('administrator/amuco_customer_request/view_add_price/' .$amuco_details_customers_request->id); ?>" class="label-default"><i class="fa fa-newspaper-o"></i> <?= cclang('Add Price'); ?></a-->
                          <?php endif; ?>
                          <?php is_allowed('amuco_details_customers_request_delete', function() use ($amuco_details_customers_request){?>
                            <a href="javascript:void(0);" data-href="<?= site_url('administrator/amuco_details_customers_request/delete/' . $amuco_details_customers_request->id); ?>" class="label-default remove-data"><i class="fa fa-close"></i> <?= cclang('remove_button'); ?></a>
                          <?php }) ?>
                        </td>                        
                      </tr>
                      <?php endforeach; ?>
                      <?php if (count($amuco_details_customers_requests) == 0) :?>
                      <tr>
                        <td colspan="100">Amuco Details Customers Request data is not available</td>
                      </tr>
                      <?php endif; ?>
                    </tbody>
                  </table>
                </div>
              </form>
            </div> 
          </div>
         
         
          <hr>
          <br>
          <div class="row">
            <div class="col-md-12"> 
            <h3 class="widget-user-username" style="color: #80808073; margin-left: 1%;">Purchasing Price Details</h3>  
            </div>
          </div>  
          <div class="row">
            <div class="col-md-12" > 
                <form name="form_amuco_details_customers_request" enctype = 'multipart/form-data' id="form_amuco_details_customers_request" action="<?= base_url('administrator/amuco_details_customers_request/index'); ?>">
                    <div class="table-responsive"> 
                    <input type="hidden" class="form-control input_height input-number" name="current_id_price" id="current_id_price" value="">
                        <table class="table table_price table-bordered display nowrap" id="table_details_price">
                            <thead>
                                <tr class="">
                                  <th data-field="id" , width="5%"></th>
                                  <th data-field="product" data-sort="1" data-primary-key="0"> <?= cclang('Product') ?></th>
                                  <th class="hide_column"></th>
                                  <th data-field="quantity"data-sort="1" data-primary-key="0"> <?= cclang('Quantity') ?></th>
                                  <th data-field="unit" data-sort="1" data-primary-key="0"> <?= cclang('Unit') ?></th>
                                  <th class="hide_column"></th>
                                  <th data-field="fcl" data-sort="1" data-primary-key="0"> <?= cclang('FCL') ?></th> 
                                  <th data-field="fcl_option" data-sort="1" data-primary-key="0"> <?= cclang('FT') ?></th> 
                                  <th data-field="fcl_type" data-sort="1" data-primary-key="0"> <?= cclang('Type FCL') ?></th> 
                                  <th data-field="weight" data-sort="1" data-primary-key="0"> <?= cclang('Weight') ?></th> 
                                  <th data-field="unit_pack" data-sort="1" data-primary-key="0"> <?= cclang('Unit Pack') ?></th>
                                  <th class="hide_column"></th> 
                                  <th data-field="material" data-sort="1" data-primary-key="0"> <?= cclang('Material') ?></th>
                                  <th class="hide_column"></th>
                                  <th data-field="shape" data-sort="1" data-primary-key="0"> <?= cclang('Packing') ?></th> 
                                  <th class="hide_column"></th>
                                  <th data-field="pallets" data-sort="1" data-primary-key="0"> <?= cclang('Pallets') ?></th> 
                                  <th data-field="price_fob" data-sort="1" data-primary-key="0"> <?= cclang('Supp FOB Price') ?></th>
                                  <th data-field="freight" data-sort="1" data-primary-key="0"> <?= cclang('Freight') ?></th>
                                  <th data-field="unit_price" data-sort="1" data-primary-key="0"> <?= cclang('Supp Unit Price') ?></th>
                                  <th data-field="shipping_port" data-sort="1" data-primary-key="0"> <?= cclang('Shipping Port') ?></th>
                                  <th class="hide_column"></th>
                                  <th data-field="recipients" data-sort="1" data-primary-key="0"> <?= cclang('Recipients') ?></th>
                                  <th data-field="Supplier" data-sort="1" data-primary-key="0"> <?= cclang('Supplier') ?></th>
                                  <th class="hide_column"></th>
                                  <th data-field="manufacturer" data-sort="1" data-primary-key="0"> <?= cclang('Manufacturer') ?></th> 
                                  <th class="hide_column"></th> 
                                  <th data-field="incoterm_supp" data-sort="1" data-primary-key="0"> <?= cclang('Supp Incoterm ') ?></th>
                                  <th class="hide_column"></th>
                                  <th data-field="payments_terms" data-sort="1" data-primary-key="0"> <?= cclang('Supp Payment Term') ?></th>
                                  <th class="hide_column"></th>       
                                  <th data-field="incoterm_price" data-sort="1" data-primary-key="0"> <?= cclang('Sales Incoterm') ?></th>
                                  <th class="hide_column"></th>
                                  <th data-field="destination_port" data-sort="1" data-primary-key="0"> <?= cclang('Destination Port') ?></th>
                                  <th class="hide_column"></th>
                                  <th data-field="etd" data-sort="1" data-primary-key="0"> <?= cclang('ETD') ?></th> 
                                  <th data-field="analisys_std" data-sort="1" data-primary-key="0"> <?= cclang('Standard') ?></th>
                                  <th data-field="valid_unitl" data-sort="1" data-primary-key="0"> <?= cclang('Valid Untill') ?></th>
                                  <th data-field="comments" data-sort="1" data-primary-key="0"> <?= cclang('Remarks') ?></th>
                                  <th class="hide_column"></th> 
                                  <th class="hide_column"></th> 
                                  <th class="hide_column"></th> 
                                  <th class="hide_column"></th> 
                                  <th>Actions</th> 
                                </tr>
                              </thead>
                            <tbody>
                                <?php foreach($amuco_details_requests_price as $amuco_details_price):
                                       if( $amuco_details_price->status != 'Review' ):
                                  ?>
                                  <tr id="<?= $amuco_details_price->id?>">
                                        <td width="5%"></td>
                                        <td><?= _ent($amuco_details_price->amuco_products_name); ?></td>
                                        <td class="hide_column"><?= _ent($amuco_details_price->product_id); ?></td>
                                        <td><?= _ent($amuco_details_price->quantity); ?></td>
                                        <td><?= _ent($amuco_details_price->amuco_unit_types_name); ?></td>
                                        <td class="hide_column"><?= _ent($amuco_details_price->unit); ?></td>
                                        <td><?= _ent($amuco_details_price->fcl); ?></td>
                                        <td><?= _ent($amuco_details_price->fcl_option); ?></td>
                                        <td><?= _ent($amuco_details_price->type_fcl); ?></td>
                                        <td><?= _ent($amuco_details_price->weight); ?></td> 
                                        <td><?= _ent($amuco_details_price->amuco_unit_pack_name); ?></td>  
                                        <td class="hide_column"><?= _ent($amuco_details_price->unit_pack); ?></td>  
                                        <td><?= _ent($amuco_details_price->amuco_material_name); ?></td>  
                                        <td class="hide_column"><?= _ent($amuco_details_price->material); ?></td>
                                        <td><?= _ent($amuco_details_price->amuco_shape_name); ?></td>  
                                        <td class="hide_column"><?= _ent($amuco_details_price->shape); ?></td>
                                         <td><?= _ent($amuco_details_price->pallets == 0 ? 'Without Pallets' : 'With Pallets' ) ?></td>  
                                        <td><?= _ent($amuco_details_price->price_fob); ?></td>
                                        <td><?= _ent($amuco_details_price->total_freight); ?></td> 
                                        <td><?= _ent($amuco_details_price->total_price); ?></td>
                                        <td><?= _ent($amuco_details_price->amuco_shipping_port_name); ?></td>
                                        <td class="hide_column"><?= _ent($amuco_details_price->shipping_port); ?></td>  
                                        <td><?= $amuco_details_price->supplier_direct == null ? 'Office/'.$amuco_details_price->aauth_users_username: 'Supplier' ?></td>
                                        <td> <?= _ent($amuco_details_price->supplier != null ? $amuco_details_price->amuco_suppliers_name :  $amuco_details_price->amuco_supplier_direct_name ); ?></td>
                                        <td class="hide_column"><?= _ent($amuco_details_price->supplier != null ? $amuco_details_price->supplier :  $amuco_details_price->supplier_direct ); ?></td>
                                        <td><?= _ent($amuco_details_price->amuco_manufacturer_name); ?></td> 
                                        <td class="hide_column"><?= _ent($amuco_details_price->manufacturer); ?></td> 
                                        <td><?= _ent($amuco_details_price->amuco_incoterm_name); ?></td>
                                        <td class="hide_column"><?= _ent($amuco_details_price->supplier_incoterm); ?></td>
                                        <td><?= _ent($amuco_details_price->amuco_payments_terms_suppliers_name); ?></td>
                                        <td class="hide_column"><?= _ent($amuco_details_price->payment_terms); ?></td>
                                        <td><?= _ent($amuco_details_price->amuco_incoterm_price_name); ?></td>
                                        <td class="hide_column"><?= _ent($amuco_details_price->incoterm_price); ?></td>
                                        <td><?= _ent($amuco_details_price->amuco_destination_port_name); ?></td>
                                        <td class="hide_column"><?= _ent($amuco_details_price->destination_port); ?></td>
                                        <td><?= _ent(substr($amuco_details_price->ETD,0,10)); ?></td>
                                        <td><?= _ent($amuco_details_price->analysis_standard); ?></td>
                                        <td><?= _ent(substr($amuco_details_price->valid_until,0,10)); ?></td>
                                        <td><?= _ent($amuco_details_price->comments); ?></td>      
                                        <td class="hide_column"><?= _ent($amuco_details_price->customer_request_id); ?></td>  
                                        <td class="hide_column"><?= _ent($amuco_details_price->details_customer_request_id); ?></td>   
                                        <td class="hide_column"><?= _ent($amuco_details_price->id); ?></td>  
                                        <td class="hide_column"><?= _ent($amuco_details_price->who_pallets); ?></td> 
                                        <td  id="action" data-details_id="<?= $amuco_details_price->details_customer_request_id ;?>" data-id="<?= $amuco_details_price->id ;?>"><a href="#"  class="btn_return"  id="btn_return_'<?= $amuco_details_price->id ;?>'><i class="fa fa-return"></i>  <?php echo $amuco_details_price->supplier_direct != null ? '': 'Return' ?> </a></td>  
                                       <?php endif; endforeach; ?>
                                  
                                    <?php if (count($amuco_details_requests_price) == 0) :?>
                                  <tr>
                                    <td colspan="100">Amuco Details Customers Request data is not available</td>
                                </tr>
                                <?php endif; ?>
                              </tbody>
                        </table>
                    </div>
                </form>
            </div> 
          </div>
          <!----------------------------------------------------------------------------------------------------->
          <br>
          <h3 class="widget-user-username" style="color: #80808073; margin-left: 20px;">Calculator</h3>  <hr>
          <div class="row" style="margin-top: -30px;">
                  <form id="form_calculator">
                      <div class="col-md-4" style="padding-right: 20px;">
                        <h4 style="margin-left: 10px;">Purchase to Supplier</h4><br>
                        <div class="row" style="margin-top: -13px;">
                           <div class="form-group">
                              <label for="name" class="col-sm-6 col-sm-offset-1 control-label">Incoterm</label>
                              <div class="col-sm-5">
                                 <select  class="form-control" name="incoterm" id="incoterm_cal" data-placeholder="Select Incoterm" >
                                       <?php foreach (db_get_all_data('amuco_incoterm') as $row): ?>
                                       <option <?php echo  $amuco_customer_request->incoterm == $row->id ? 'selected':'' ?> value="<?= $row->id ?>"><?= $row->name; ?></option>
                                       <?php endforeach; ?>  
                                 </select>
                               
                              </div>
                           </div>
                           <!--div class="form-group">
                              <label for="name" class="col-sm-6 col-sm-offset-1 control-label">Incoterm</label>
                              <div class="col-sm-5">
                                <input  type="hidden" class="form-control input_height input-number" name="incoterm" id="incoterm_cal" value="<?php  echo $amuco_customer_request->incoterm; ?>">
                                 <input readonly type="text" class="form-control input_height" name="incoterm_name" id="incoterm_name_cal" value="<?php  echo $amuco_customer_request->amuco_incoterm_name; ?>">
                              </div>
                           </div-->
                           <div class="form-group">
                              <label for="name" class="col-sm-6 col-sm-offset-1 control-label">Quantity</label>
                              <div class="col-sm-5">
                                 <input type="text" class="form-control input_height input-number" name="quantity" id="quantity_cal">
                              </div>
                           </div>
                           <div class="form-group">
                              <label for="name" class="col-sm-6 col-sm-offset-1 control-label">Price FOB/FCA/Unit</label>
                              <div class="col-sm-5">
                                 <input type="text" class="form-control input_height input-number" name="price_fob_fca_unit" id="price_fob_fca_unit">
                              </div>
                           </div>
                           <div class="form-group">
                              <label for="name" class="col-sm-6 col-sm-offset-1 control-label">Freight</label>
                              <div class="col-sm-5">
                                 <input type="text" class="form-control input_height input-number" name="freight" id="freight_cal">
                              </div>
                           </div>
                           <div class="form-group">
                              <label for="name" class="col-sm-6 col-sm-offset-1 control-label">Supp. Overprice</label>
                              <div class="col-sm-5">
                                 <input type="text" class="form-control input_height input-number" name="sup_overprice" id="sup_overprice">
                              </div>
                           </div>
                           <div class="form-group">
                              <label for="name" class="col-sm-6 col-sm-offset-1 control-label">Purchase Amount</label>
                              <div class="col-sm-5">
                                 <input type="text" class="form-control input_height input-number" name="purchase_amount" id="purchase_amount" readonly>
                              </div>
                           </div>
                           <div class="form-group">
                              <label for="name" class="col-sm-6 col-sm-offset-1 control-label">Price/Unit</label>
                              <div class="col-sm-5">
                                 <input type="text" class="form-control input_height input-number" name="price_unit" id="price_unit_cal" readonly>
                              </div>
                           </div>
                           <div class="form-group">
                              <!--label for="name" class="col-sm-3 col-sm-offset-8 control-label" style="margin-left: 80%;">Days +</label-->
                           </div>
                           <div class="form-group">
                              <input type="hidden" class="form-control input_height" name="payment_customer_select" id="payment_customer_select" value="0"> 
                              <label for="name" class="col-sm-2 col-sm-offset-1 control-label">Terms</label>
                              <div class="col-sm-7">
                                 <select name="terms" id="terms" class="form-control">
                                 <?php foreach (db_get_all_data('amuco_supplier_payment_terms') as $row): ?>
                                       <option value="<?= $row->id ?>"><?= $row->description; ?></option>
                                       <?php endforeach; ?>  
                                 </select>
                                 <!-- <input type="text" class="form-control input_height" name="terms" id="terms"> -->
                              </div>
                              <div class="col-sm-2" style="padding-left: 0px;display:none">
                                 <input type="text" class="form-control input_height input-number" name="days" id="days" value="0" style="text-align: center;">
                                 <!--select name="terms_days" id="terms_days" class="form-control input_height">
                                 <?php foreach (db_get_all_data('amuco_supplier_payment_terms') as $row): ?>
                                       <option value="<?= $row->id ?>"><?= $row->days; ?></option>
                                       <?php endforeach; ?>  
                                 </select-->
                              </div>
                           </div>
                           <!--div class="form-group" style="padding-top: 30px;">
                              <div class="col-sm-4 col-sm-offset-4" style="padding-right: 0px;">
                                 <input type="submit" class="btn btn-success" id="btn_calculate" style="border-radius: 0px !important; width: 95px;" value="Calculate" />
                              </div>
                              <div class="col-sm-4">
                              <button type="button" class="btn btn-secondary" id="btn_reset" style="border-radius: 0px !important; width: 95px;">Reset</button>
                              </div>
                           </div-->
                        </div>
                      </div>
                      <div class="col-md-3" style="border-right: solid 0.5px #80808047 ; border-left: solid 0.5px #80808047;">
                        <h4 style="margin-left: 10px;">Commissions</h4>
                        <?php $pricing_settings = db_get_all_data('amuco_pricing_settings')[0];  ?>
                        <div class="row" style="margin-top: -13px;">
                           <div class="form-group">
                              <label for="name" class="col-sm-7 col-sm-offset-1 control-label">Sales Agent</label>
                              <div class="col-sm-2">
                                 <input type="text" class="form-control input_height input_percentage" name="com_sales_agent" id="com_sales_agent" value="<?=  $pricing_settings->commision_sales_agent; ?>">
                              </div>
                              <label for="name" class="col-sm-1 control-label" style="padding: 0;">%</label>
                           </div>
                           <div class="form-group">
                              <label for="name" class="col-sm-7 col-sm-offset-1 control-label">Purchase Office</label>
                              <div class="col-sm-2">
                                 <input type="text" class="form-control input_height input_percentage" name="com_purchase_office" id="com_purchase_office" value="<?=  $pricing_settings->commision_purchase_office; ?>">
                              </div>
                              <label for="name" class="col-sm-1 control-label" style="padding: 0;">%</label>
                           </div>
                           <div class="form-group">
                              <label for="name" class="col-sm-7 col-sm-offset-1 control-label">Other Supp. Comm</label>
                              <div class="col-sm-2">
                                 <input type="text" class="form-control input_height input_percentage" name="com_other_supp_comm" id="com_other_supp_comm" value="0">
                              </div>
                              <label for="name" class="col-sm-1 control-label" style="padding: 0;">%</label>
                           </div>
                        </div>
                        <div class="row">
                        <hr width="220px;" 
                           size="10" 
                           align="center"> 
                        </div>
                        <h4 style="margin-left: 10px; margin-top: -10px;">Representative</h4>
                        <div class="row" style="margin-top: -13px;">
                           <div class="form-group">
                              <label for="name" class="col-sm-7 col-sm-offset-1 control-label">Commission</label>
                              <div class="col-sm-2">
                                 <input  type="text" class="form-control input_height input_percentage" name="representative_commission" id="representative_commission" value="0">
                              </div>
                              <label for="name" class="col-sm-1 control-label" style="padding: 0;">%</label>
                           </div>
                           <div class="form-group">
                              <label for="name" class="col-sm-7 col-sm-offset-1 control-label">Over Price</label>
                              <div class="col-sm-3">
                                 <input   type="text" class="form-control input_height " name="representative_purchase_office" id="representative_purchase_office" value="0">
                              </div>
                              <!-- <label for="name" class="col-sm-1 control-label" style="padding: 0;">%</label> -->
                           </div>
                        </div>
                        <div class="row">
                        <hr width="220px;" 
                           size="10" 
                           align="center"> 
                        </div>
                        <h4 style="margin-left: 10px; margin-top: -10px;">Price Increase</h4>
                        <div class="row" style="margin-top: -13px;">
                           <div class="form-group">
                              <label for="name" class="col-sm-7 col-sm-offset-1 control-label">Margin</label>
                              <div class="col-sm-2">
                                 <input type="text" class="form-control input_height input_percentage" name="price_increase_commission" id="price_increase_commission" value="6">
                              </div>
                              <label for="name" class="col-sm-1 control-label" style="padding: 0;">%</label>
                           </div>
                        </div>
                       </div>
                      <div class="col-md-4">
                      <h4 style="margin-left: 10px;">Purchase Costs</h4>
                        <div class="row" style="margin-top: -13px;">
                           <div class="form-group">
                              <label for="name" class="col-sm-6 col-sm-offset-1 control-label">Purchase Amount</label>
                              <div class="col-sm-5 off_padding">
                                 <input type="text" class="form-control input_height input-number" name="costs_purchase_amount" id="costs_purchase_amount" readonly>
                              </div>
                           </div>
                           <div class="form-group">
                              <label for="name" class="col-sm-6 col-sm-offset-1 control-label">Financing PREPAID</label>
                              <div class="col-sm-5 off_padding">
                                 <input type="text" class="form-control input_height input-number" name="financing_prepaid" id="financing_prepaid" readonly>
                              </div>
                           </div>
                           <div class="form-group">
                              <label for="name" class="col-sm-6 col-sm-offset-1 control-label">Coface</label>
                              <div class="col-sm-5 off_padding">
                                 <input type="text" class="form-control input_height input-number" name="coface" id="coface" readonly>
                              </div>
                           </div>
                           <div class="form-group">
                              <label for="name" class="col-sm-6 col-sm-offset-1 control-label">Bank Charge</label>
                              <div class="col-sm-5 off_padding">
                                 <input type="text" class="form-control input_height input-number" name="bank_charge" id="bank_charge" readonly>
                              </div>
                           </div>
                           <div class="form-group">
                              <label for="name" class="col-sm-6 col-sm-offset-1 control-label">Freight Insurance</label>
                              <div class="col-sm-5 off_padding">
                                 <input type="text" class="form-control input_height input-number" name="freight_insurance" id="freight_insurance" readonly>
                              </div>
                           </div>
                           <div class="form-group">
                              <label for="name" class="col-sm-6 col-sm-offset-1 control-label">Purchase Office Comm.</label>
                              <div class="col-sm-5 off_padding">
                                 <input type="text" class="form-control input_height input-number" name="purchase_office_comm" id="purchase_office_comm" readonly>
                              </div>
                           </div><br><br>
                           <div class="form-group">
                              <label for="name" class="col-sm-6 col-sm-offset-1 control-label">Comm. Other Supplier</label>
                              <div class="col-sm-5 off_padding">
                                 <input type="text" class="form-control input_height input-number" name="comm_other_supplier" id="comm_other_supplier" readonly>
                              </div>
                           </div>
                           <div class="form-group">
                              <label for="name" class="col-sm-6 col-sm-offset-1 control-label">Total Purchase Cost</label>
                              <div class="col-sm-3 off_padding" style="padding-right: 5px;">
                                 <input type="text" class="form-control input_height input-number" name="total_purchase_cost1" id="total_purchase_cost1" readonly>
                              </div>
                              <div class="col-sm-2 off_padding" style="padding-left: 0px;">
                                 <input type="text" class="form-control input_height input-number" name="total_purchase_cost2" id="total_purchase_cost2" readonly>
                              </div>
                           </div>
                        </div>
                     </div>
                  </form>
                </div>
                <hr>
                <div class="row">
                  <div class="form-group">
                     <h3 class=" col-sm-6 widget-user-username" style="color: #80808073; margin-left: 20px;">Sale to Customer</h3>
                     <button class="btn btn-flat btn-aux pull-right" id="btn_view_history" data-stype='stay'  title="<?= cclang('History'); ?>">
                     <i class="fa fa-history" ></i> <?= cclang('History'); ?></button>
                    </div>
                   
                </div>
                <div class="row">
                 
                    <div class="col-sm-2" style="margin-left:0.5%">
                      <label class="col-sm-12">Additional days </label>
                    </div> 
                    <div class="col-sm-1"  style="margin-left:-7%" > 
                        <input type="text" class="form-control input_height input-number" name="add_days" id="add_days" value="0" style="text-align: center;">
                    </div>
                    <div class="col-sm-8" > </div>
                </div>
               <br>
                <table class="table table-bordered display" id="sale_customer">
                     <thead>
                         <th>Select</th>
                         <th style="width: 174px;">Payment Terms Customer</th>
                         <th>Calculated Offer Price</th>
                         <th>Offer Price Per Unit</th>
                         <th>Margin (%)</th>
                         <th>Sales Amount</th>
                         <th>Estimated Gross Profit </th>
                         <th>Estimated Commission</th>
                         <!--th>Comm (%)</th-->
                         <th>Rep. Commission</th>
                         <th class="hide_column">Code Payment</th>
                         <th class="hide_column">id</th>
                        
                     </thead>
                     <tbody>
                     <?php foreach (db_get_all_data('amuco_customer_payment_terms') as $row): ?>
                         <tr id="<?php echo $row->id ?>"> 
                           <td> </td>
                           <td><?php echo $row->short_description == "" ?  $row->description : $row->short_description ?></td><td>0.00</td><td>0.00</td><td>0.00</td><td>0.00</td><td>0.00</td>
                           <td hide_column>0.00</td><td>0.00</td>
                           <td hide_column ></td><td></td>
                         </tr>
                          <?php endforeach; ?>
                     </tbody>
               </table>
               <hr>
               <h3 class="widget-user-username" style="color: #80808073; margin-left: 20px;">Offering Price Details</h3>
               <div >
                <table class="table table-bordered display nowrap" id="table_offering_details">
                      <thead>
                          <th>Product</th>
                          <th>Quantity</th>
                          <th>Unit</th>
                          <th>FCL</th>
                          <th>FT</th>
                          <th>Type FCL </th>
                          <th>Weight</th>
                          <th>Unit Pack</th>
                          <th>Material</th>
                          <th>Packing</th>
                          <th>Pallets</th>
                          <th>Supp FOB Price</th>
                          <th>Freight</th>
                          <th>Supp Unit Price</th>
                          <th>Shipping Port</th>
                          <th>Recipients</th>
                          <th>Supplier</th>
                          <th>Manufacturer</th>
                          <th>Supp Incoterm</th>
                          <th>Supp Payments Terms</th>
                          <th>Sales Price</th>
                          <th>Sales Incoterm</th>
                          <th>Destination Port</th>
                          <th>Customer Payment Term</th>
                          <th>ETD</th>
                          <th>Standard</th>
                          <th>Valid Until</th>
                          <th>Remarks</th> 
                          <th>Actions</th> 
                          <th class="hide_column">Pallets</th> 
                      </thead>
                      <tbody>
                  
                      </tbody>
                </table>
                 
               </div>
             <br>
               <div>
                  <button  class="btn btn-flat btn-aux pull-right disabled " id="btn_send_request" data-stype='stay'  title="<?= cclang('Send'); ?>">
                    <i class="fa fa-send" ></i> <?= cclang('Send To Customer'); ?>
                 
               </div>

               <br>
              <br>
              <div class="row">
                <div class="col-md-12"> 
                <h3 class="widget-user-username" style="color: #80808073; margin-left: 1%;">Offers Sent Customers</h3>  
                </div>
              </div>  
              <div class="row">
                <div class="col-md-12" > 
                  <form name="form_amuco_details_customers_request" enctype = 'multipart/form-data' id="form_amuco_offer_set" action="">
                    <div class="table-responsive"> 
                      <table class="table table_price table-bordered display nowrap" id="table_offers_customers">
                        <thead>
                          <th>Select</th>
                          <th>Status</th>
                          <th>Product</th>
                          <th>Quantity</th>
                          <th>Unit</th>
                          <th>FCL</th>
                          <th>FT</th>
                          <th>Type FCL </th>
                          <th>Packing</th>
                          <!--th>Weight</th>
                          <th>Unit Pack</th>
                          <th>Packing</th>
                          <th>Material</th>
                          <th>Pallets</th-->
                          <th>Supp FOB Price</th>
                          <th>Freight</th>
                          <th>Supp Unit Price</th>
                          <th>Shipping Port</th>
                          <th>Recipients</th>
                          <th>Supplier</th>
                          <th>Manufacturer</th>
                          <th>Supp Incoterm</th>
                          <th>Supp Payments Terms</th>
                          <th>Sales Price</th>
                          <th>Sales Incoterm</th>
                          <th>Destination Port</th>
                          <th>Customer Payment Term</th>
                          <th>ETD</th>
                          <th>Standard</th>
                          <th>Valid Until</th>
                          <th>Remarks</th> 
                          <th>Actions</th>
                        </thead>
                        <tbody>
                          <?php foreach ($amuco_offers_sent_customers as $row): 
                            $pall = $row->pallets == 1 ? 'With Pallets':'Without Pallets';
                            ?>
                            <tr id="<?php echo $row->id ?>"> 
                              <td width="5%"></td>
                              <td><?= _ent($row->status); ?></td>
                              <td><?= _ent($row->amuco_products_name); ?></td>
                              <td><?= _ent($row->quantity); ?></td>
                              <td><?= _ent($row->amuco_unit_types_name); ?></td>
                              <td><?= _ent($row->fcl); ?></td>
                              <td><?= _ent($row->option_fcl); ?></td>
                              <td><?= _ent($row->type_fcl); ?></td>
                              <td><?= _ent($row->weight.' '.$row->amuco_unit_pack_name.' '.$row->amuco_material_name.' '.$row->amuco_packing_name.' '.$pall) ?>  </td>
                              <!--td><?= _ent($row->weight); ?></td>
                              <td><?= _ent($row->unit_pack); ?></td>
                              <td><?= _ent($row->amuco_packing_name); ?></td>
                              <td><?= _ent($row->amuco_material_name); ?></td>
                              <td><?= _ent($row->pallets); ?></td-->
                              <td><?= _ent($row->price_fob); ?></td>
                              <td><?= _ent($row->freight); ?></td>
                              <td><?= _ent($row->unit_price); ?></td>
                              <td><?= _ent($row->amuco_shipping_port_name); ?></td>
                              <td><?= $row->amuco_supplier_direct_name == null ? 'Office' : $row->amuco_supplier_name  ?></td>
                              <td><?=  $row->amuco_supplier_direct_name == null ? $row->amuco_supplier_name : $row->amuco_supplier_direct_name ?></td>                      
                              <td><?= _ent($row->amuco_manufacturer_name); ?></td>
                              <td><?= _ent($row->amuco_incoterm_name); ?></td>
                              <td><?= _ent($row->amuco_supplier_payment_term_description); ?></td>
                              <td><?= _ent($row->offer_price_per_unit); ?></td>
                              <td><?= _ent($row->amuco_price_incoterm_name); ?></td>
                              <td><?= _ent($row->amuco_destination_port_name); ?></td>
                              <td><?= _ent($row->amuco_customer_payment_terms_description); ?></td>
                              <td><?= _ent(substr($row->ETD,0,10)); ?></td>
                              <td><?= _ent($row->analysis_standard); ?></td>
                              <td><?= _ent(substr($row->amuco_valid_until,0,10)); ?></td>
                              <td><?= _ent($row->comments); ?></td>
                              <td></td>
                          </tr>
                          <?php  endforeach; ?>
                        </tbody>
                      </table>
                    </div>  
                  </form>
                  <br>
                </div>    
                <br>
               
               <div>
                 <br>
                  <button style="margin-bottom: 1%;"  class="btn btn-flat btn-aux pull-right disabled " id="btn_sroc" data-stype='stay'  title="<?= cclang('Create'); ?>">
                    <i class="fa fa-save" ></i> <?= cclang('Create SROC'); ?></button>
               </div>   
                     
              </div> 
        </div>
      </div>
    </div>
  </div>
</section>





<!-- MODALES -->

<section >
  <div class="modal fade" id="modal-add-product">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close close_modal"  data-dismiss="modal"  aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
          <div class="modal-body">
            <div class="box box-widget widget-user-2">
              <div class="widget-user-image">
                  <img class="img-circle" src="<?= BASE_ASSET; ?>/img/add2.png" alt="User Avatar">
              </div>
              <h3 class="widget-user-username">New Product</h3>
              <h5 class="widget-user-desc"><?= cclang('new', ['Items To Request']); ?></h5>
              <h3 class="widget-user-username"><?= 'ID: '.$amuco_customer_request->id ?></h3>
              <hr>
            </div>
          
          
            <?= form_open('', [
              'name'    => 'form_amuco_details_customers_request_add', 
              'class'   => 'form-horizontal form-step', 
              'id'      => 'form_amuco_details_customers_request_add', 
              'enctype' => 'multipart/form-data', 
              'method'  => 'POST'
              ]); 
            ?>
            <div class="row">  
              <div class="col-md-12" > 
                 <h4 class="col-md-12">Product Information</h4>
              </div>
            </div>
            <div class="row"> 
              <div class="col-md-2">  </div>                    
              <div class="col-md-8" style ="margin-left: -2.6%;" >    
                <div class="form-group">
                  <label for="product_id" class="col-sm-2 label-right control-label">Product</label>
                  <?php 
                  echo anchor('administrator/amuco_products/view/'.''.'?popup=show','<i  style=" margin-top: 1.7%" class="fa fa-newspaper-o"></i>', ['class' => 'popup-view disabled','id'=>'view_product']); 
                    ?> 
                  <div class="col-sm-9">
                    <select  autofocus class="form-control chosen chosen-select-deselect" name="product_id" id="product_id_add" data-placeholder="Select Product Id" >
                      <option value=""></option>
                        <?php foreach (db_get_all_data('amuco_products') as $row): ?>
                      <option value="<?= $row->id ?>"><?= $row->name; ?></option>
                          <?php endforeach; ?>  
                    </select>
                  
                  </div>
                </div>
              </div>
              <div class="col-md-2">  </div>
            </div>  
            <div class="row">
              <div class="col-md-2">  </div>
              <div class="col-md-4" >                                        
                <div class="form-group ">
                  <label for="quantity" class="col-sm-3 label-right control-label">Quantity </label>
                  <div class="col-sm-8">
                    <input  type="text" class="form-control" name="quantity" id="quantity" placeholder="Quantity" value="">
                  </div>
                </div>
              </div>
              <div class="col-md-4" >                                        
                <div class="form-group ">
                  <label for="unit" class="col-sm-3 control-label label-right">Unit </label>
                  <div class="col-sm-6">
                    <select  class="form-control chosen chosen-select-deselect" name="unit" id="unit_copy" data-placeholder="Select Unit" >
                        <option value=""></option>
                        <?php foreach (db_get_all_data('amuco_unit_types') as $row): ?>
                        <option value="<?= $row->id ?>"><?= $row->name; ?></option>
                        <?php endforeach; ?>  
                    </select>
                  
                  </div>
                </div>
              </div> 
              <div class="col-md-2">  </div>  
            </div>
            <div class="row">
              <div class="col-md-2">  </div>
              <div class="col-md-4" >                              
                <div class="form-group ">
                  <label for="fcl" class="col-sm-3 label-right control-label">Fcl </label>
                  <div class="col-sm-8">
                    <input  type="number" class="form-control" name="fcl" id="fcl" placeholder="Fcl" value="<?= set_value('fcl'); ?>">
                  </div>
                </div>
              </div> 
              <div class="col-md-4 col-sm-4" > 
                <div class="form-group ">
                  <div class="row">
                    <label for="fcl" class="col-sm-3"> </label>
                    <div class="col-md-3  fcl_option_1">
                        <label id="fcl_option_1">
                            <input type="radio"  name="fcl_option" id="fcl_option_add"  value="20" >
                            20'
                        </label>
                    </div>
                    <div class="col-md-3  fcl_option_2" >
                        <label id ="fcl_option_2">
                            <input type="radio"  name="fcl_option" id="fcl_option_add_2"  value="40" >
                            40'
                        </label>
                    </div>
   
                  </div> 
                </div>
              </div> 
            </div>  
            <div class="row">
              <div class="col-md-2">  </div> 
              <div class="col-md-4"> 
                <div class="form-group ">
                  <label for="Type" class="col-sm-3 label-right control-label">Type   </label>
                  <div class="col-sm-8">
                    <select  class="form-control chosen chosen-select-deselect" name="type_fcl" id="type_fcl_copy" data-placeholder="Select Type" >
                        <option value=""></option>
                        <option value="NOR">NOR</option>
                        <option value="HCube">HCube</option>
                        <option value="Standard">Standard</option>
                    </select>
                    
                  </div>
                </div>
              </div> 
              <div class="col-md-6">  </div> 
            </div> 
            <div class="row">  
              <div class="col-md-12" > 
                 <h4 class="col-md-12">Packaging Details</h4>
              </div>
            </div>
            <div class="row">
              <div class="col-md-2">  </div>
              <div class="col-md-4" >                                       
                <div class="form-group ">
                  <label for="weight" class="col-sm-3 label-right control-label">Weight </label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="weight" id="weight" placeholder="Weight" value="<?= set_value('weight'); ?>">
                  </div>
                </div>
              </div>  
              <div class="col-md-4" >                                        
                <div class="form-group ">
                <label for="unit" class="col-sm-3 control-label label-right control-label">Unit </label>
                  <div class="col-sm-6">
                    <select  class="form-control chosen chosen-select-deselect" name="unit_pack" id="unit_pack_copy" data-placeholder="Select Unit" >
                        <option value=""></option>
                        <?php foreach (db_get_all_data('amuco_unit_types') as $row): ?>
                        <option value="<?= $row->id ?>"><?= $row->name; ?></option>
                        <?php endforeach; ?>  
                    </select>
                  
                  </div>
                </div>
              </div> 
              <div class="col-md-2">  </div>
            </div>
            <div class="row">
              <div class="col-md-2">  </div>
              <div class="col-md-4" >                                  
                <div class="form-group ">
                  <label for="packing" class="col-sm-3 label-right control-label">Packing </label>
                  <a href="#"><i style=" margin-top: 3.7%" class="fa fa-plus" id="add_packing" data-toggle="modal" data-target="#modal-add-pack" ></i></a>
                  <div class="col-sm-8">
                      <select  class="form-control " name="packing" id="packing_copy" data-placeholder="Select Packing" >
                        <option value=""></option>
                        <?php foreach (db_get_all_data('amuco_packing') as $row): ?>
                        <option value="<?= $row->id ?>"><?= $row->name; ?></option>
                        <?php endforeach; ?>  
                      </select>
                  </div>
                </div>
              </div>
              <div class="col-md-4" >                                       
                <div class="form-group ">
                  <label for="material" class="col-sm-3 control-label label-right">Material </label>
                  <a href="#"><i style=" margin-top: 3.7%" class="fa fa-plus" id="add_material" data-toggle="modal" data-target="#modal-add-material" ></i></a>
                  <div class="col-sm-6">
                    <select  class="form-control " name="material" id="material_copy" data-placeholder="Select material" >
                        <option value=""></option>
                        <?php foreach (db_get_all_data('amuco_material') as $row): ?>
                        <option value="<?= $row->id ?>"><?= $row->name; ?></option>
                        <?php endforeach; ?>  
                    </select>
                  </div>
                </div>
              </div> 
            </div>
            <div class="row">
              <div class="col-md-2">  </div>
              <div class="col-md-4" >                       
                <div class="form-group">
                  <label class="col-sm-3 label-right"> Pallets</label>
                  <div  class="col-sm-6">
                    <input type="checkbox" class="btn-pallets" name="pallets" id="pallets"  value="0" >
                  </div>
                </div>  
              </div>
              <div class="col-md-6">  </div> 
            </div>
            <div class="row">
              <div class="col-md-2">  </div>
              <div class="col-md-4" > 
                <div class="form-group ">
                  <label for="date_created" class="col-sm-3 control-label">ETD </label>
                  <div class="col-sm-8">
                    <div class="input-group date col-sm-12">
                      <input type="text" class="form-control pull-right datepicker" name="etd"  placeholder="ETD Date" id="etd" value="">
                    </div>
                    <small class="info help-block"></small>
                  </div>
                </div>
              </div>  
              <div class="col-md-4" > 
                <div class="form-group ">
                  <label for="date_created" class="col-sm-3 control-label">ETA </label>
                  <div class="col-sm-6">
                    <div class="input-group date col-sm-12">
                      <input type="text" class="form-control pull-right datepicker" name="eta"  placeholder="ETA Date" id="eta" value="">
                    </div>
                    <small class="info help-block"></small>
                  </div>
                </div>
              </div> 
              <div class="col-md-2">  </div> 
            </div> 
            <div class="row"> 
              <div class="col-md-2">  </div>  
              <div class="col-md-10" style="margin-left: -5%;">                                  
                <div class="form-group ">
                  <label for="specific_remarks_2" class="col-sm-2 control-label">Specific Remarks </label>
                  <div class="col-sm-7">
                    <textarea class="form-control" style="resize:none" id="specific_remarks_2" name="specific_remarks" rows="5" ><?= set_value('Specific Remarks'); ?></textarea>
                    <small class="info help-block"><b>Input Specific Remarks</b> Max Length : 250.</small>
                  </div>
                </div>
              </div>
             
            </div> 
            <div class="row">  
              <div class="col-md-12" > 
                 <h4 class="col-md-12">Recipients</h4>
              </div>
            </div>
            <div class="row"> 
              <div class="col-md-1">  </div>
              <div class="col-md-9" style ="margin-left: -2.5%;">  
                <div class="form-group ">
                  <label for="supplier" class="col-sm-3 label-right control-label">Supplier </label>
                    <?php 
                  echo anchor('administrator/amuco_suppliers/view/'.''.'?popup=show','<i style=" margin-top: 1.7%" class="fa fa-newspaper-o"></i>', ['class' => 'popup-view disabled','id'=>'view_supplier']); 
                    ?> 
                  <div class="col-sm-8">
                    <select  class="form-control chosen chosen-select-deselect supplier_click" name="supplier" id="supplier" data-placeholder="Select Supplier" >
                        <option value=""></option>
                        <?php foreach (db_get_all_data('amuco_suppliers') as $row): ?>
                        <option value="<?= $row->id ?>"><?= $row->name; ?></option>
                        <?php endforeach; ?>  
                    </select>

                  </div>
                </div>
              </div>
            </div>     
            <div class="row"> 
              <div class="col-md-1">  </div>
              <div class="col-md-9"  style ="margin-left: -2.5%;" >  
                <div class="form-group ">
                  <label for="contact" class="col-sm-3 label-right control-label">Contact   </label>
                  <a href="#"><i style=" margin-top: 1.7%" class="fa fa-plus disabled" id="btn_add_contact_supplier" data-toggle="modal" data-target="#modal-add-contact" ></i></a>
                  <div class="col-sm-8  csup">
                    <select  class="form-control chosen chosen-select-deselect" name="contact_supplier[]" id="contact_supplier" data-placeholder="Select Contact" multiple >
                        <option value=""></option>
                    </select>
                  </div>
                </div>
              </div> 
            </div>
              
            <div class="row">               
              <div class="form-group " style="display:none">
                <label for="customer_request_id" class="col-sm-2 control-label">Customer Request Id <i class="required">*</i></label>
                <div class="col-sm-8">
                  <input  type="text" class="form-control" name="customer_request_id" id="customer_request_id" placeholder="Customer Request Id" value="<?= set_value('customer_request', $amuco_customer_request->id); ?>">
                  <small class="info help-block"><b>Input Customer Request Id</b> Max Length : 10.</small>
                </div>
              </div>
              
              <div class="col-md-9" > 
                <button type="button" disabled class="btn btn-flat btn-aux-action pull-right btn_save_product " id="btn_add_supplier" data-action="suppliers" data-stype='stay' title="<?= cclang('save_button'); ?> ">
                  <i class="fa fa-plus" ></i> <?= cclang('Add/Save Supplier Recipients'); ?>
                </button>
              </div>
            </div>  
            <br>   
            <div class="row"> 
              <div class="col-md-1">  </div>
              <div class="col-md-9" style ="margin-left: -2.5%;">  
                <div class="form-group ">
                  <label for="supplier" class="col-sm-3 label-right control-label">Purchasing Office </label>
                  <div class="col-sm-8">
                    <select  class="form-control chosen chosen-select-deselect" name="purchasing[]" id="purchasing" data-placeholder="Select Supplier" multiple>
                        <option value=""></option>
                        <?php 
                        foreach (db_get_all_data('aauth_users') as $row){ 
                            foreach (db_get_all_data('aauth_user_to_group') as $row_group_user){
                              if($row_group_user->user_id == $row->id){
                                foreach (db_get_all_data('aauth_groups') as $row_group){
                                  if( $row_group_user->group_id ==  $row_group->id &&  $row_group->name == 'Amuco Office'){
                                      echo ' <option  value="'. $row->id .'">'. $row->username.'</option>';
                                    break;
                                  }
                                }  
                              }
                              
                            } 
                          }    
                          ?>
                    </select>
                 
                  </div>
                </div>
              </div>   
            </div> 
          
            <div class="row">  
              <div class="col-md-9" >  
                <button  type="button" disabled class="btn btn-flat btn-aux-action pull-right  btn_save_product" id="btn_add_office" data-action="purchasing" data-stype='stay' title="<?= cclang('save_button'); ?> ">
                  <i class="fa fa-plus" ></i> <?= cclang('Add/Save Office Recipients'); ?>
                </button>
              </div>
            </div> 
              <div class="message message_product"></div>
            <?= form_close(); ?> 
            <br><br>
            <div class="row">
              <div class="col-md-1"></div>
              <div class="col-md-10"> 
                <form name="form_amuco_details_customers_request" id="form_amuco_details_customers_request" action="<?= base_url('administrator/amuco_details_customers_request/index'); ?>">
                  <div class="table-responsive"> 
                    <table class="table table-bordered table-striped dataTable" id="tabla_modal">
                      <thead>
                        <tr class="">
                          <th data-field="type" data-sort="1" data-primary-key="0"> <?= cclang('Type') ?></th>
                          <th data-field="type" data-sort="1" data-primary-key="0"> <?= cclang('Recipients') ?></th>
                          <th data-field="product_id" data-sort="1" data-primary-key="0"> <?= cclang('Product') ?></th>
                          <th>Action</th>                        
                        </tr>
                      </thead>
                      <tbody id="tbody_amuco_details_customers_request">

                        <tr>
                                          
                        </tr>
                      
                        <?php if (count($amuco_details_customers_requests) == 0) :?>
                        <tr id ="tr_message_empty">
                           <td colspan="100">No Recipients</td>
                        </tr>
                        <?php endif; ?>
                      </tbody>
                    </table>
                  </div>
                </form>
              </div>
            </div>
           
          </div>                                        
         
          <div class="modal-footer justify-content-between">
           
            <button disabled class="btn btn-flat btn-primary  btn_action" id="btn_new_product" data-stype='stay' title="<?= cclang('save_button'); ?>">
              <i class="fa fa-save" ></i> <?= cclang('Save'); ?>
            </button>
            <button type="button" class="btn btn-default close_modal"   id="close_modal">Close</button>
            <span class="loading loading-hide">
              <img src="<?= BASE_ASSET; ?>/img/loading-spin-primary.svg"> 
              <i><?= cclang('loading_saving_data'); ?></i>
            </span>
          </div>
         
          
        </div>
      </div>         
    </div>
  </div>
</section>

<section>
  <div class="modal fade" id="modal-edit-product">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close close_modal"  data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
        <div class="modal-body">
          <div class="box box-widget widget-user-2">
            <div class="widget-user-image">
                <img class="img-circle" src="<?= BASE_ASSET; ?>/img/add2.png" alt="User Avatar">
            </div>
            <h3 class="widget-user-username">Edit Product</h3>
            <h5 class="widget-user-desc"><?= cclang('Edit', ['Items To Request']); ?></h5>
            <h3 class="widget-user-username"><?= 'ID: '.$amuco_customer_request->id ?></h3>
            <hr>
          </div>
         
          <?= form_open('', [
              'name'    => 'form_amuco_details_customers_request_edit', 
              'class'   => 'form-horizontal form-step', 
              'id'      => 'form_amuco_details_customers_request_edit', 
              'enctype' => 'multipart/form-data', 
              'method'  => 'POST'
              ]); 
            ?>
          <div class="row">  
              <div class="col-md-12" > 
                  <h4 class="col-md-12">Product Information</h4>
              </div>
          </div>
          <div class="row"> 
              <div class="col-md-2">  </div>                    
              <div class="col-md-8" style ="margin-left: -2.6%;" >    
                  <div class="form-group">
                      <label for="product_id" class="col-sm-2 label-right control-label">Product</label>
                      <?php 
                          echo anchor('administrator/amuco_products/view/'.$amuco_details_customers_request->product_id.'?popup=show','<i  style=" margin-top: 1.7%" class="fa fa-newspaper-o"></i>', ['class' => 'popup-view modal','id'=>'view_product_edit']); 
                      ?> 
                      <div class="col-sm-9">
                      <input type="hidden" class="form-control" name="status" id="status" value="<?= $amuco_details_customers_request->status; ?>">
                      <input type="hidden" class="form-control" name="cutomer_details_id" id="cutomer_details_id" value="<?=  $amuco_details_customers_request->id; ?>">
                      <!--input readonly type="hidden" class="form-control" name="product_id" id="product_id"  value="">
                      <input readonly type="text" class="form-control" name="product_name" id="product_name"  value=""-->
                      <select  autofocus class="form-control chosen chosen-select-deselect" name="product_id" id="product_edit" data-placeholder="Select Product" >
                          <option value=""></option>
                          <?php foreach (db_get_all_data('amuco_products') as $row): ?>
                            <option   value="<?= $row->id ?>"><?= $row->name; ?></option>
                          <?php endforeach; ?>  
                      </select>
                     
                      </div>
                  </div>
              </div>
              <div class="col-md-2">  </div>
          </div>  
          <div class="row">
              <div class="col-md-2">  </div>
              <div class="col-md-4" >                                        
                  <div class="form-group ">
                      <label for="quantity" class="col-sm-3 label-right control-label">Quantity </label>
                      <div class="col-sm-8">
                          <input type="number" class="form-control" name="quantity" id="quantity_edit" placeholder="Quantity" >
                      </div>
                  </div>
              </div>
              <div class="col-md-4" >                                        
                  <div class="form-group ">
                      <label for="unit" class="col-sm-3 control-label label-right">Unit </label>
                      <div class="col-sm-6">
                          <select  class="form-control chosen chosen-select-deselect" name="unit" id="unit_edit" data-placeholder="Select Unit" >
                              <option value=""></option>
                              <?php foreach (db_get_all_data('amuco_unit_types') as $row): ?>
                              <option  value="<?= $row->id ?>"><?= $row->name; ?></option>
                              <?php endforeach; ?>  
                          </select>
                      </div>
                  </div>
              </div> 
              <div class="col-md-2">  </div>  
          </div>
          <div class="row">
              <div class="col-md-2">  </div>
              <div class="col-md-4" >                              
                  <div class="form-group ">
                      <label for="fcl" class="col-sm-3 label-right control-label">Fcl </label>
                      <div class="col-sm-8">
                      <input type="text" class="form-control" name="fcl" id="fcl_edit" placeholder="Fcl" value="">
                      </div>
                  </div>
              </div> 
              <div class="col-md-4 col-sm-4" > 
                  <div class="form-group ">
                      <div class="row">
                          <label for="fcl" class="col-sm-3"> </label>
                          <div class="col-md-3  fcl_option_1">
                              <label id="fcl_option_1">
                              <input type="radio" name="fcl_option" id="fcl_option_edit"  value="20" >
                                  20'
                              </label>
                          </div>
                          <div class="col-md-3  fcl_option_2" >
                              <label id ="fcl_option_2">
                              <input type="radio" name="fcl_option" id="fcl_option_edit_2"  value="40" >
                              40'
                              </label>
                          </div>
                      </div> 
                  </div>
              </div> 
          </div>  
          <div class="row">
              <div class="col-md-2">  </div> 
              <div class="col-md-4"> 
                  <div class="form-group ">
                      <label for="Type" class="col-sm-3 label-right control-label">Type   </label>
                        <div class="col-sm-8">
                          <select  class="form-control chosen chosen-select-deselect" name="type_fcl" id="type_fcl_edit" data-placeholder="Select Type" >
                              <option value=""></option>
                              <option value="NOR">NOR</option>
                              <option value="HCube">HCube</option>
                              <option  value="Standard">Standard</option>
                          </select>
                      </div>
                  </div>
              </div> 
              <div class="col-md-6">  </div> 
          </div> 
          <div class="row">  
              <div class="col-md-12" > 
                  <h4 class="col-md-12">Packaging Details</h4>
              </div>
          </div>
          <div class="row">
              <div class="col-md-2">  </div>
              <div class="col-md-4" >                                       
                  <div class="form-group ">
                      <label for="weight" class="col-sm-3 label-right control-label">Weight </label>
                      <div class="col-sm-8">
                      <input type="text" class="form-control" name="weight" id="weight_edit" placeholder="Weight" value="">
                      </div>
                  </div>
              </div>  
              <div class="col-md-4" >                                        
                  <div class="form-group ">
                      <label for="unit" class="col-sm-3 control-label label-right control-label">Unit Pack </label>
                      <div class="col-sm-6">
                          <select  class="form-control chosen chosen-select-deselect" name="unit_pack" id="unit_pack_edit" data-placeholder="Select Unit" >
                              <option value=""></option>
                              <?php foreach (db_get_all_data('amuco_unit_types') as $row): ?>
                              <option  value="<?= $row->id ?>"><?= $row->name; ?></option>
                              <?php endforeach; ?>  
                          </select>
                      </div>
                  </div>
              </div> 
              <div class="col-md-2">  </div>
          </div>
          <div class="row">
              <div class="col-md-2">  </div>
              <div class="col-md-4" >                                  
                  <div class="form-group ">
                      <label for="packing" class="col-sm-3 label-right control-label">Packing </label>
                      <a href="#"><i style=" margin-top: 3.7%" class="fa fa-plus" id="add_packing" data-toggle="modal" data-target="#modal-add-pack" ></i></a>
                      <div class="col-sm-8">
                          <select  class="form-control " name="packing" id="packing_edit" data-placeholder="Select Packing" >
                              <option value=""></option>
                              <?php foreach (db_get_all_data('amuco_packing') as $row): ?>
                              <option  value="<?= $row->id ?>"><?= $row->name; ?></option>
                              <?php endforeach; ?>  
                          </select>
                      </div>
                    </div>
              </div>
              <div class="col-md-4" >                                       
                  <div class="form-group ">
                      <label for="material" class="col-sm-3 control-label label-right">Material </label>
                      <a href="#"><i style=" margin-top: 3.7%" class="fa fa-plus" id="add_material" data-toggle="modal" data-target="#modal-add-material" ></i></a>
                      <div class="col-sm-6">
                          <select  class="form-control " name="material" id="material_edit" data-placeholder="Select material" >
                              <option value=""></option>
                              <?php foreach (db_get_all_data('amuco_material') as $row): ?>
                              <option  value="<?= $row->id ?>"><?= $row->name; ?></option>
                              <?php endforeach; ?>  
                          </select>
                      </div>
                  </div>
              </div> 
          </div>
          <div class="row">
              <div class="col-md-2">  </div>
              <div class="col-md-4" >                       
                  <div class="form-group">
                      <label class="col-sm-3 label-right"> Pallets</label>
                      <div  class="col-sm-6">
                          <input type="checkbox"  name="pallets" id="pallets_edit"  value="" >
                      </div>
                  </div>  
              </div>
              <div class="col-md-6">  </div> 
          </div>
          <div class="row">
              <div class="col-md-2">  </div>
              <div class="col-md-4" > 
                  <div class="form-group ">
                      <label for="date_created" class="col-sm-3 control-label">ETD </label>
                      <div class="col-sm-8">
                          <div class="input-group date col-sm-12">
                              <input type="text" class="form-control pull-right datepicker" name="etd"  placeholder="Date ETD" id="etd_edit" value="">
                          </div>
                          <small class="info help-block"></small>
                      </div>
                  </div>
              </div>  
              <div class="col-md-4" > 
                  <div class="form-group ">
                        <label for="date_created" class="col-sm-3 control-label">ETA </label>
                      <div class="col-sm-6">
                          <div class="input-group date col-sm-12">
                              <input type="text" class="form-control pull-right datepicker" name="eta"  placeholder="Date ETA" id="eta_edit" value="">
                          </div>
                          <small class="info help-block"></small>
                      </div>
                  </div>
              </div> 
              <div class="col-md-2">  </div> 
          </div> 
          <div class="row"> 
                <div class="col-md-2">  </div>  
                <div class="col-md-10" style="margin-left: -5%;">                                  
                  <div class="form-group ">
                      <label for="specific_remarks_2" class="col-sm-2 control-label">Specific Remarks </label>
                      <div class="col-sm-7">
                          <textarea class="form-control" style="resize:none" id="specific_remarks_edit" name="specific_remarks" rows="5" ></textarea>
                          <small class="info help-block"><b>Input Specific Remarks</b> Max Length : 250.</small>
                      </div>
                  </div>
              </div> 
          </div> 
          <div class="row">  
              <div class="col-md-12" > 
                  <h4 class="col-md-12">Recipients</h4>
              </div>
          </div>
          <div class="row"> 
              <div class="col-md-1">  </div>
              <div class="col-md-9" style ="margin-left: -2.5%;">  
                  <div class="form-group ">
                      <label for="supplier" class="col-sm-3 label-right control-label">Supplier </label>
                      <?php 
                          echo anchor('administrator/amuco_suppliers/view/'.''.'?popup=show','<i style=" margin-top: 1.7%" class="fa fa-newspaper-o"></i>', ['class' => 'popup-view disabled','id'=>'view_supplier']); 
                      ?> 
                      <div class="col-sm-8">
                          <select  class="form-control chosen chosen-select-deselect supplier_click" name="supplier" id="supplier_edit" data-placeholder="Select Supplier" >
                              <option value=""></option>
                              <?php foreach (db_get_all_data('amuco_suppliers') as $row): ?>
                              <option  value="<?= $row->id ?>"><?= $row->name; ?></option>
                              <?php endforeach; ?>  
                          </select>
                      </div>
                  </div>
              </div>
          </div>     
          <div class="row"> 
              <div class="col-md-1">  </div>
              <div class="col-md-9"  style ="margin-left: -2.5%;" >  
                  <div class="form-group ">
                      <label for="contact" class="col-sm-3 label-right control-label">Contact   </label>
                      <div class="col-sm-8  csup">

                        <select  class="form-control chosen chosen-select-deselect" name="contact_supplier[]" id="contact_supplier_edit" data-placeholder="Select Contact" multiple >
                          <option value=""></option>
                        </select>
                      </div>
                  </div>
              </div> 
          </div>

          <div class="row">               
              <div class="form-group " style="display:none">
                  <label for="customer_request_id" class="col-sm-2 control-label">Customer Request Id <i class="required">*</i></label>
                  <div class="col-sm-8">
                      <input  type="text" class="form-control" name="customer_request_id" id="customer_request_id" placeholder="Customer Request Id" value="<?= set_value('customer_request', $amuco_customer_request->id); ?>">
                      <small class="info help-block"><b>Input Customer Request Id</b> Max Length : 10.</small>
                  </div>
              </div>

              <div class="col-md-9" style="display:none"> 
                  <button type="button" disabled class="btn btn-flat btn-aux-action pull-right btn_save_product " id="btn_add_supplier" data-action="suppliers" data-stype='stay' title="<?= cclang('save_button'); ?> ">
                  <i class="fa fa-plus" ></i> <?= cclang('Add/Save Supplier Recipients'); ?>
                  </button>
              </div>
          </div>  
          <br>   
          <div class="row"> 
              <div class="col-md-1">  </div>
              <div class="col-md-9" style ="margin-left: -2.5%;">  
                  <div class="form-group ">
                      <label for="supplier" class="col-sm-3 label-right control-label">Purchasing Office </label>
                      <div class="col-sm-8">
                          <select  class="form-control chosen chosen-select-deselect" name="purchasing" id="purchasing_edit" data-placeholder="Select Supplier" >
                              <option value=""></option>
                              <?php foreach (db_get_all_data('aauth_users') as $row): ?>
                              <option   value="<?= $row->id ?>"><?= $row->username; ?></option>
                              <?php endforeach; ?>  
                          </select>
                      </div>
                  </div>
              </div>   
          </div>
          <br>
          <div class="row">  
              <div class="col-md-9" style ="display:none" >  
                  <button  type="button" disabled class="btn btn-flat btn-aux-action pull-right  btn_save_product" id="btn_add_office" data-action="purchasing" data-stype='stay' title="<?= cclang('save_button'); ?> ">
                  <i class="fa fa-plus" ></i> <?= cclang('Add/Save Office Recipients'); ?>
                  </button>
              </div>
          </div>
          <?= form_close(); ?> 
          <br>
          <div class="message"></div> 
        </div>
        <div class="modal-footer justify-content-between">
           
            <button type="button" class="btn btn-flat btn-primary" id="btn_edit_product" data-stype='stay' title="<?= cclang('save_button'); ?>">
              <i class="fa fa-save" ></i> <?= cclang('Save'); ?>
            </button>
            <button type="button" class="btn btn-default close_modal"  data-dismiss="modal"  id="close_modal">Close</button>
            <span class="loading loading-hide">
              <img src="<?= BASE_ASSET; ?>/img/loading-spin-primary.svg"> 
              <i><?= cclang('loading_saving_data'); ?></i>
            </span>
          </div>  
      </div> 
    </div> 
  </div>      
</section>

<section>
  <div class="modal fade" id="modal-add-port" style="z-index: 1500;">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
        <div class="modal-body">
          <div class="box box-widget widget-user-2">    
            <div class="widget-user-header ">
              <div class="widget-user-image">
                  <img class="img-circle" src="<?= BASE_ASSET; ?>/img/add2.png" alt="User Avatar">
              </div>
              <!-- /.widget-user-image -->
              <h3 class="widget-user-username">Amuco Destination Port</h3>
              <h5 class="widget-user-desc"><?= cclang('new', ['Amuco Destination Port']); ?></h5>
              <hr>
            </div>
          
              <?= form_open('', [
                      'name'    => 'form_amuco_destination_port', 
                      'class'   => 'form-horizontal form-step', 
                      'id'      => 'form_amuco_destination_port', 
                      'enctype' => 'multipart/form-data', 
                      'method'  => 'POST'
                      ]); ?>
            <div class="form-group ">
              <label for="name" class="col-sm-2 control-label">Name <i class="required">*</i></label>
              <div class="col-sm-8">
                  <input type="text" class="form-control" name="name" id="name" placeholder="Name" value="<?= set_value('name'); ?>">
                  <small class="info help-block">
                  <b>Input Name</b> Max Length : 50.</small>
              </div>
            </div>
                                          
            <div class="form-group" style="display:none">
              <label for="description" class="col-sm-2 control-label">Description </label>
              <div class="col-sm-8">
                  <input type="text" class="form-control" name="description" id="description" placeholder="Description" value="<?= set_value('description'); ?>">
                  <small class="info help-block">
                  <b>Input Description</b> Max Length : 250.</small>
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
                  <small class="info help-block"> </small>
              </div>
            </div>
                                                
            <div class="message"></div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button class="btn btn-flat btn-primary  btn_action" id="btn_save_port"  name="btn_save_port" data-stype='stay' title="<?= cclang('save_button'); ?> ">
                <i class="fa fa-save" ></i> <?= cclang('save_button'); ?>
              </button>  
            </div>
                 
            <?= form_close(); ?>
          </div>
        </div>
      </div>
    </div> 
  </div>               
</section>

<section>
    <div class="modal fade" id="modal-add-shipping-port">
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
                        <!-- /.widget-user-image -->
                        <h3 class="widget-user-username">Amuco Shipping Port</h3>
                        <h5 class="widget-user-desc"><?= cclang('new', ['Amuco Shipping Port']); ?></h5>
                        <hr>
                    </div>
               
                    <?= form_open('', [
                            'name'    => 'form_amuco_shipping_port', 
                            'class'   => 'form-horizontal form-step', 
                            'id'      => 'form_amuco_shipping_port', 
                            'enctype' => 'multipart/form-data', 
                            'method'  => 'POST'
                            ]); ?>
                    <div class="form-group ">
                        <label for="name" class="col-sm-2 control-label">Name </label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="name" id="name" placeholder="Name" value="<?= set_value('name'); ?>">
                            <small class="info help-block">
                            <b>Input Name</b> Max Length : 50. (Required)</small>
                        </div>
                    </div>
                                                
                    <div class="form-group" style="display:none">
                        <label for="description" class="col-sm-2 control-label">Description </label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="description" id="description" placeholder="Description" value="<?= set_value('description'); ?>">
                            <small class="info help-block">
                            <b>Input Description</b> Max Length : 250.</small>
                        </div>
                    </div>
                                                
                    <div class="form-group ">
                        <label for="country" class="col-sm-2 control-label">Country </label>
                        <div class="col-sm-8">
                            <select  class="form-control chosen chosen-select-deselect" name="country" id="country" data-placeholder="Select Country" >
                                <option value=""></option>
                                <?php foreach (db_get_all_data('amuco_countries') as $row): ?>
                                <option value="<?= $row->id ?>"><?= $row->name; ?></option>
                                <?php endforeach; ?>  
                            </select>
                            <small class="info help-block"> </small>
                        </div>
                    </div>
                                                
                  <div class="message"></div>
                  <div id="fot" class="modal-footer justify-content-between">
                     <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                     <button class="btn btn-flat btn-primary  btn_action" id="btn_save_shipping_port"  name="btn__shipping_save_port" data-stype='stay' title="<?= cclang('save_button'); ?> (Ctrl+s)">
                        <i class="fa fa-save" ></i> <?= cclang('save_button'); ?>
                     </button>  
                  </div>
                 
                  <?= form_close(); ?>
                </div>
            </div>
        </div>
    </div>            

</section>


<!-- Modal Material-->

<!-- MODALES -->
<section>
  <div class="modal fade" id="modal-add-material">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
        <div class="modal-body">
          <div class="box box-widget widget-user-2">    
            <div class="widget-user-header ">
              <div class="widget-user-image">
                  <img class="img-circle" src="<?= BASE_ASSET; ?>/img/add2.png" alt="User Avatar">
              </div>
              <!-- /.widget-user-image -->
              <h3 class="widget-user-username">Amuco Material</h3>
              <h5 class="widget-user-desc"><?= cclang('new', ['Amuco Material']); ?></h5>
              <hr>
            </div>
          
              <?= form_open('', [
                      'name'    => 'form_amuco_material', 
                      'class'   => 'form-horizontal form-step', 
                      'id'      => 'form_amuco_material', 
                      'enctype' => 'multipart/form-data', 
                      'method'  => 'POST'
                      ]); ?>
            <div class="form-group ">
              <label for="name" class="col-sm-2 control-label">Name <i class="required">*</i></label>
              <div class="col-sm-8">
                  <input type="text" class="form-control" name="name" id="name" placeholder="Name" value="<?= set_value('name'); ?>">
                  <small class="info help-block">
                  <b>Input Name</b> Max Length : 50.</small>
              </div>
            </div>
                                                
            <div class="message"></div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button class="btn btn-flat btn-primary  btn_action" id="btn_save_material"  name="btn_save_material" data-stype='stay' title="<?= cclang('save_button'); ?> ">
                <i class="fa fa-save" ></i> <?= cclang('save_button'); ?>
              </button>  
            </div>
                 
            <?= form_close(); ?>
          </div>
        </div>
      </div>
    </div> 
  </div>               
</section>

<section>
  <div class="modal fade" id="modal-add-pack">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
        <div class="modal-body">
          <div class="box box-widget widget-user-2">    
            <div class="widget-user-header ">
              <div class="widget-user-image">
                  <img class="img-circle" src="<?= BASE_ASSET; ?>/img/add2.png" alt="User Avatar">
              </div>
              <!-- /.widget-user-image -->
              <h3 class="widget-user-username">Amuco Packing</h3>
              <h5 class="widget-user-desc"><?= cclang('new', ['Amuco Packing']); ?></h5>
              <hr>
            </div>
          
            <?= form_open('', [
                  'name'    => 'form_amuco_packing', 
                  'class'   => 'form-horizontal form-step', 
                  'id'      => 'form_amuco_packing', 
                  'enctype' => 'multipart/form-data', 
                  'method'  => 'POST'
                  ]); ?>
              
                                      <div class="form-group ">
                  <label for="name" class="col-sm-2 control-label">Name 
                  <i class="required">*</i>
                  </label>
                  <div class="col-sm-8">
                      <input type="text" class="form-control" name="name" id="name" placeholder="Name" value="<?= set_value('name'); ?>">
                      <small class="info help-block">
                      <b>Input Name</b> Max Length : 50.</small>
                  </div>
              </div>
                                    
            <div class="message"></div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button class="btn btn-flat btn-primary  btn_action" id="btn_save_pack"  name="btn_save_pack" data-stype='stay' title="<?= cclang('save_button'); ?> ">
                <i class="fa fa-save" ></i> <?= cclang('save_button'); ?>
              </button>  
            </div>
                 
            <?= form_close(); ?>
          </div>
        </div>
      </div>
    </div> 
  </div>               
</section>


<!-- MODALE CONTACT-->

<section>
    <div class="modal fade" id="modal-add-contact" style="z-index: 1400;">
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
                                    'name'    => 'form_amuco_add_contact', 
                                    'class'   => 'form-horizontal form-step', 
                                    'id'      => 'form_amuco_add_contact', 
                                    'enctype' => 'multipart/form-data', 
                                    'method'  => 'POST'
                                    ]); ?>
                     
                            <div class="form-group" style="display:none">
                                <label for="type_contact" class="col-sm-2 control-label"> Contact Type<i class="required">*</i> </label>
                                <div class="col-sm-8">
                                    <input readonly type="text" class="form-control" name="type_contact" id="type_contact" placeholder="First Name" value="">
                                    <small class="info help-block"></small>
                                </div>
                            </div>

                            <div class="form-group "  style="display:none">
                                <label for="customer_id" class="col-sm-2 control-label">Customer  <i class="required">*</i></label>
                                <div class="col-sm-8">
                                    <input readonly type="hidden" class="form-control" name="customer_name" id="customer_name_contact" placeholder="First Name" value="">
                                    <input  type="hidden" class="form-control" name="customer_id" id="customer_id" value="" >
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

<!--MODAL PARA EDITAR REQUEST AL DARLE BOTON EDIT -->
<section>
  <div class="modal fade" id="modal-edit-request" style>
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
        <div class="modal-body">
          <div class="box box-widget widget-user-2">    
            <div class="widget-user-header ">
              <div class="widget-user-image">
                  <img class="img-circle" src="<?= BASE_ASSET; ?>/img/add2.png" alt="User Avatar">
              </div>
              <h4 class="widget-user-username">Amuco Customer Request</h3>
              <h5 class="widget-user-desc">Edit Amuco Customer Request</h5>
              <h4 class="widget-user-username"><?= 'ID: '.$amuco_customer_request->id ?></h3> 
              <hr>
            </div>
              <?= form_open('', [
                      'name'    => 'form_amuco_request_edit', 
                      'class'   => 'form-horizontal form-step', 
                      'id'      => 'form_amuco_request_edit', 
                      'enctype' => 'multipart/form-data', 
                      'method'  => 'POST'
                      ]); ?>
            <div class="row">                        
              <div class="col-md-6 col-sm-6" > 
                <input type="hidden" value="<?= $amuco_customer_request->id ?>" id="request_id" name="request_id">                                    
                <div class="form-group ">
                  <label for="customer" class="col-sm-3 control-label">Customer</label>
                  <?php 
                    echo anchor('administrator/amuco_customers/view/'.$amuco_customer_request->customer.'?popup=show','<i style=" margin-top: 2.5%" class="fa fa-newspaper-o"></i>', ['class' => 'popup-view','id'=>'view_custo']); 
                  ?>          

                  <div class="col-sm-8">
                    <select  class="form-control chosen chosen-select-deselect" name="customer" id="customer" data-placeholder="Select Customer" >
                      <option value=""></option>
                      <?php foreach (db_get_all_data('amuco_customers') as $row): ?>
                      <option <?=  $row->id ==  $amuco_customer_request->customer ? 'selected' : ''; ?> value="<?= $row->id ?>"><?= $row->name; ?></option>
                      <?php endforeach; ?>  
                    </select>
                    <small class="info help-block"><b>Input Customer</b> Max Length : 10. (Required)</small>
                  </div>
                </div>
              </div> 
              <div class="col-md-6 col-sm-6" > 
                <div class="form-group ">
                  <label for="destination_port" class="col-sm-3 control-label">Destination Port</label>
                  <a href="#"><i style=" margin-top: 2.5%" class="fa fa-plus" id="add_port" data-toggle="modal" data-target="#modal-add-port" ></i></a>
                  <div class="col-sm-8">
                    <select  class="form-control chosen chosen-select-deselect" name="destination_port" id="destination_port" data-placeholder="Select Destination Port" >
                        <option value=""></option>
                        <?php foreach (db_get_all_data('amuco_destination_port') as $row): ?>
                        <option <?=  $row->id ==  $amuco_customer_request->destination_port ? 'selected' : ''; ?> value="<?= $row->id ?>"><?= $row->name; ?></option>
                        <?php endforeach; ?>  
                    </select>
                    <small class="info help-block"><b>Input Destination Port</b> Max Length : 10. (Required)</small>
                  </div>
                </div>
              </div>
            </div>   
            <div class="row">                       
              <div class="col-md-6 col-sm-6" > 
                <div class="form-group ">
                  <label for="contact" class="col-sm-3 control-label">Contact</label>
                  <a  href="#"><i style=" margin-top: 2.5%" class="fa fa-plus" id="btn_add_contact_customer" data-toggle="modal" data-target="#modal-add-contact" ></i></a>
                  <div class="col-sm-8">
                    <select  class="form-control chosen chosen-select-deselect" name="contact" id="contact" data-placeholder="Select Contact" >
                        <option value=""></option>
                        <?php foreach (db_get_all_data('amuco_contacts') as $row): ?>
                        <option <?=  $row->id ==  $amuco_customer_request->contact ? 'selected' : ''; ?> value="<?= $row->id ?>"><?= $row->name; ?></option>
                        <?php endforeach; ?>  
                    </select>
                    <small class="info help-block"><b>Input Contact</b> Max Length : 10. (Required)</small>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-sm-6" > 
                <div class="form-group ">
                  <label for="incoterm" class="col-sm-3 control-label">Incoterm</label>
                  <div class="col-sm-8">
                    <select  class="form-control chosen chosen-select-deselect" name="incoterm" id="incoterm" data-placeholder="Select Incoterm" >
                        <option value=""></option>
                        <?php foreach (db_get_all_data('amuco_incoterm') as $row): ?>
                        <option <?=  $row->id ==  $amuco_customer_request->incoterm ? 'selected' : ''; ?> value="<?= $row->id ?>"><?= $row->name; ?></option>
                        <?php endforeach; ?>  
                    </select>
                    <small class="info help-block"><b>Input Incoterm</b> Max Length : 10. (Required)</small>
                  </div>
                </div>
              </div>   
            </div>  
            <div class="row">                       
              <div class="col-md-6 col-sm-6" >              
                <div class="form-group ">
                  <label for="sales_agent" class="col-sm-3 control-label">Sales Agent</label>
                  <div class="col-sm-8">
                    <select  class="form-control chosen chosen-select-deselect" name="sales_agent" id="sales_agent" data-placeholder="Select Sales Agent" >
                      <option value=""></option>
                      <?php foreach (db_get_all_data('aauth_users') as $row): 
                           if($this->aauth->get_user_groups($row->id)[0]->name == 'seller' ):    
                        ?>
                      <option <?=  $row->id ==  $amuco_customer_request->sales_agent ? 'selected' : ''; ?> value="<?= $row->id ?>"><?= $row->username; ?></option>
                           <?php endif; endforeach; ?>  
                    </select>
                    <small class="info help-block"><b>Input Sales Agent</b> Max Length : 10. (Required)</small>
                  </div>
                </div>
              </div> 
              <div class="col-md-6 col-sm-6" > 
                <div class="form-group ">
                  <label for="combinate_container" class="col-sm-3 control-label">Combined  Container 
                  </label>
                  <div class="col-sm-8">
                  <br>
                      <div class="col-md-4 padding-left-0">
                          <label>
                              <input type="radio" class="flat-red" name="combinate_container" id="combinate_container"  value="1" <?= $amuco_customer_request->combinate_container == "1" ? "checked" : ""; ?>>
                              Yes
                          </label>
                      </div>
                      <div class="col-md-14">
                          <label>
                              <input type="radio" class="flat-red" name="combinate_container" id="combinate_container"  value="0" <?= $amuco_customer_request->combinate_container == "0" ? "checked" : ""; ?>>
                              No
                          </label>
                      </div>
                      <small class="info help-block">
                      </small>
                  </div>
                </div>
              </div>
            </div> 
            <div class="row">
              <div class="col-md-6 col-sm-6" > 
                <div class="form-group ">
                  <label for="contact" class="col-sm-3 control-label">Representative</label>
                  <a  href="#"><i style=" margin-top: 2.5%" class="fa fa-plus" id="btn_add_representative" data-toggle="modal" data-target="#modal-add-contact" ></i></a>
                  <div class="col-sm-8">
                    <select  class="form-control chosen chosen-select-deselect" name="representative" id="representative" data-placeholder="Select Representative" >
                        <option value=""></option>
                        <?php foreach (db_get_all_data('amuco_contacts') as $row):  
                          if($row->type_contact == 'Representative'):?>
                        <option <?=  $row->id ==  $amuco_customer_request->representative ? 'selected' : ''; ?> value="<?= $row->id ?>"><?= $row->name; ?></option>
                        <?php endif; endforeach; ?>  
                    </select>
                    <small class="info help-block"><b>Input Representative</b> Max Length : 10. (Required)</small>
                  </div>
                </div>
              </div>
            </div> 
            <div class="row">                       
              <div class="col-md-6 col-sm-6" >                                       
                <div class="form-group ">
                  <label for="remarks" class="col-sm-3 control-label">Remarks </label>
                  <div class="col-sm-8">
                    <textarea class="form-control" id="remarks" style="resize:none" name="remarks" rows="5" cols="65"> <?= set_value('remarks', $amuco_customer_request->remarks); ?></textarea>
                    <small class="info help-block"><b>Input Remarks</b> Max Length : 250.</small>
                  </div>
                </div>
              </div>
            </div>  
             
          <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
              <button  type="button" class="btn btn-flat btn-primary  btn_action" id="btn_edit_request" data-stype='stay' title="<?= cclang('save_button'); ?>">
              <i class="fa fa-save" ></i> <?= cclang('save_button'); ?>
              </button>
              <span class="loading loading-hide">
                <img src="<?= BASE_ASSET; ?>/img/loading-spin-primary.svg"> 
              <i><?= cclang('loading_saving_data'); ?></i>
              </span>
          </div>   
          <?= form_close(); ?>
          </div>
        </div>
      </div>
    </div> 
  </div>               
</section>


<!--Modal de preview email add product-->
<section>
  <div class="modal fade" id="modal-preview-email" tabindex="-1" role="dialog" style="z-index: 1500;"  data-backdrop="static" data-keyboard="false" href="#">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">

          <div class="modal-header">
            <h4 class="modal-title"> <span class="popup-title"></span><b><?=cclang('email_title')?></b></h4>
          </div>
        
            <div class="modal-body">
           

                <?= form_open('', [
                          'name'    => 'form_amuco_email_preview', 
                          'class'   => 'form-horizontal form-step', 
                          'id'      => 'form_amuco_email_preview', 
                          'enctype' => 'multipart/form-data', 
                          'method'  => 'POST'
                          ]); ?>

              <div class="col-md-12 col-sm-6">


                <div class="col-md-12 col-sm-6 email-id-row" > 
                  <div class="form-group ">
                      <input class="form-control" id="email_request" name="email_request" placeholder="<?=cclang('to')?>">
                  </div>

                </div>
                <span id="error_email" class="error" style="display: none"> The field is requerid</span>

                <div class="col-md-12 col-sm-6" > 
                  <div class="form-group ">
                      <input class="form-control" id="subject" name="subject" placeholder="<?=cclang('subject')?>" required>
                  </div>
                </div>

                <div class="col-md-12 col-sm-6" > 
                    <div class="form-group">
                        <textarea id="email_text" name="email_text" rows="10" cols="180" class="editor"  style="height: 300; resize: none;" required>
                          <span><b><?=cclang('notification_email_title')?>:</b></span>
                          <div id="content_email">

                          </div>
                          <span class="col-12"><b><?=cclang('greetings')?></b></span><br>
                          <span class="col-12"><b><?=cclang('note')?> : <?=cclang('email_note_pie')?></b></span>

                        </textarea>
                    </div>
                </div>
              
              <!-- /. box -->
            </div>

            <div class="modal-footer justify-content-between">
                 <button type="button" class="btn btn-outline-light"  id="cancel_send_email"><?= cclang('cancel_send'); ?></button>
                  <button  type="button" class="btn btn-flat btn-primary  btn_action" id="btn_send_email" title="<?= cclang('email_send'); ?>">
                  <i class="fa fa-save" ></i> <?= cclang('email_send'); ?>
                  </button>
              </div>   
          <?= form_close(); ?>
            
        </div>

    </div> 
  </div>               
</section>

<!-- /.content -->
<script src="<?= BASE_ASSET; ?>ckeditor/ckeditor.js"></script>


<link href="<?= BASE_ASSET; ?>/admin-lte/plugins/datatables/jquery.dataTables.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/fixedcolumns/3.2.4/css/fixedColumns.bootstrap4.min.css" rel="stylesheet" />
<link href="https://cdn.datatables.net/buttons/1.6.3/css/buttons.dataTables.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/select/1.3.1/css/select.dataTables.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.15/dist/summernote.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://jqueryvalidation.org/files/demo/site-demos.css">
<!--link href="<?= BASE_ASSET; ?>/css/editor.dataTables.min.css" rel="stylesheet"-->

<script src="<?= BASE_ASSET; ?>/js/cleave.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/numeral.js/2.0.6/numeral.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.3/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/select/1.3.1/js/dataTables.select.min.js"></script>
<!--script src="<?= BASE_ASSET; ?>/js/dataTables.editor.min.js"></script-->
<!--script src="<?= BASE_ASSET; ?>/admin-lte/plugins/datatables/extensions/FixedColumns/js/dataTables.fixedColumns.min.js"></script-->
<script src="https://cdn.datatables.net/fixedcolumns/3.2.4/js/dataTables.fixedColumns.min.js"></script>
<script src="<?= BASE_ASSET; ?>/js/jquery.tabledit.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.15/dist/summernote.min.js"></script>
<!-- Page script -->

<script type="text/javascript">

function validateEmail(email) {
    var re = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
    return re.test(email);
}


(function($){

    $.fn.email_multiple = function(options) {
        let defaults = {
            reset: false,
            fill: false,
            data: null
        };

        let settings = $.extend(defaults, options);
        let email = "";

        return this.each(function()
        {
            $(this).after("<span class=\"to-input\"></span>\n" +
                "<div class=\"all-mail\"></div>\n" +
                "<input type=\"text\" name=\"email\" class=\"enter-mail-id\" placeholder=\"\" />");

            let $orig = $(this);
            let $element = $('.enter-mail-id');
            $element.keydown(function (e) {
                $element.css('border', '');
                if (e.keyCode === 13 || e.keyCode === 32) {
                    $('#error_email').css('display', 'none')

                    let getValue = $element.val();
                    if (/^[a-z0-9._-]+@[a-z0-9._-]+\.[a-z]{2,6}$/.test(getValue)){
                        $('.all-mail').append('<span class="email-ids">' + getValue + '<span class="cancel-email">x</span></span>');
                        $element.val('');

                        email += getValue + ';'
                    } else {
                
                       $element.css('border', '1px solid red')
                    }
                }

                $orig.val(email.slice(0, -1))
            });

            $(document).on('click','.cancel-email',function(){
                $(this).parent().remove();
            });

            if(settings.data){
                $.each(settings.data, function (x, y) {
                    if (/^[a-z0-9._-]+@[a-z0-9._-]+\.[a-z]{2,6}$/.test(y)){
                        $('.all-mail').append('<span class="email-ids">' + y + '<span class="cancel-email">x</span></span>');
                        $element.val('');

                        email += y + ';'
                    } else {
                        $element.css('border', '1px solid red')
                    }
                })

                $orig.val(email.slice(0, -1))
            }

            if(settings.reset){
                $('.email-ids').remove()
                $('.all-mail').remove()
                 $element.remove()
            }

            return $orig.hide()
        });
    };

})(jQuery);


$(".enter-mail-id").keydown(function (e) {
  if (e.keyCode == 13 || e.keyCode == 32) {
    //alert('You Press enter');
   var getValue = $(this).val();
   $('.all-mail').append('<span class="email-ids">'+ getValue +' <span class="cancel-email">x</span></span>');
   $(this).val('');
  }
});

$("#subject").keydown(function (e) {
  if (e.keyCode == 13 || e.keyCode == 32) {
    $(this).siblings("span").remove()
  }
});

$("#subject").focus(function() {
    $(this).siblings("span").remove()
});


/// Cancel 
$(document).on('click','.cancel-email',function(){
    $(this).parent().remove();
});

</script>

<script>
   
    var item = 0;
    var data_table = [];
    var detete_item = 0;
    var data_payments_table = [];
    var item_payment = 0;
    var table_payments;
    var _items=[];
    var contact_response = [];
    var purchasing_response = [];
    var count_contact = 0;
    var count_purchasing = 0;
    var _message='';
    var table_calculator  =[];
    var x =  '<?php echo $this->security->get_csrf_hash(); ?>';
    var y = '<?php echo $this->security->get_csrf_token_name(); ?>';
    var _customer_request = [];


    function mostrar_modal(current_contact, customer_request){

      if(count_contact < contact_response.length){

          $("#body_table_email").html('')
          _items = [];
          $("#arr_details_items").val('')
          _cad=''
          let data = []
          _email = '';


          $.each(current_contact, function(i, item){ 
            _items.push(item.id)
            _weigth=''
            _email =''
            //fcl
            if(item.fcl > 0){
              _fcl = `<label><?=cclang('flc')?>: </label> <span> ${item.fcl} / ${item.fcl_option} /${item.type_fcl} </span><br>`
            }

            //weigth
            if(item.weigth > 0){
              _weigth = `<label><?=cclang('weigth')?>: </label> <span> ${item.weigth} / ${item.type_fcl} </span><br>`
            }
       

            //packin
            if(item.packing > 0){
              _packing = `<label><?=cclang('packing')?>: </label> <span> ${item.packing} / ${item.amuco_material_name} </span><br>`
            }

            //pallets
            if(item.pallets > 0){
              _pallets = `<label><?=cclang('pallets')?>:</label> Si <br>`
            }else{
              _pallets = `<label><?=cclang('pallets')?>:</label> No <br>`
            }


            _cad +=`<hr style=" background-color: #fff; border-top: 3px dashed #8c8b8b;">
                    <label><?=cclang('product')?>:</label> ${item.amuco_products_name} <br>
                    <label><?=cclang('quantity')?>: </label> <span>${item.quantity} ${item.amuco_unit_types_name}</span> <br>
                    ${_fcl}
                    ${_weigth}
                    ${_packing}
                    ${_pallets}
                    <label><?=cclang('ETD')?>:</label><span> ${item.ETD} </span><br>
                    <label><?=cclang('ETA')?>:</label> ${item.ETA} <br>
                    <label><?=cclang('specific_remarks')?>:</label> ${item.specific_remarks} <br>
                    <label><?=cclang('destination_port')?>:</label>  ${item.amuco_destination_port_name}<br>

              
                    <label><?=cclang('incoterm')?>:</label> ${_customer_request.amuco_incoterm_name} <br>
                <hr style=" background-color: #fff; border-top: 3px dashed #8c8b8b;"><br><br>
                    `;

                 
            });

          $("#email_request").email_multiple({reset: true})

          $("#email_request").email_multiple({
            data: [current_contact[0].amuco_suppliers_email]
          })

          $("#subject").val("<?=cclang('email_title')?>")

          $("#arr_details_items").val(_items);
          $("#content_email").append(_cad);

          count_contact++;
          $("#modal-preview-email").modal("show");

      }else{

          $("#modal-preview-email").modal("hide");
          $('.message_top').printMessage({message : _message, type : 'success'});

          $('.message_top').fadeIn().fadeOut(10000);

          location.reload();
      
      }
    }

    function mostrar_modal_purchasing(current_purchasing){
       
      if(count_purchasing < purchasing_response.length){
      
          $("#body_table_email").html('')
          _items = [];
          $("#arr_details_items").val('')
          _cad=''

          $.each(current_purchasing, function(i, item){ 
            _items.push(item.id)

            _cad += `<tr>
                          <td>
                             <span class="text-inverse">
                             <small>${item.amuco_products_name}</small>
                          </td>
                          <td class="text-center">${item.quantity}</td>
                          <td class="text-center">${item.amuco_suppliers_name}</td>
                          <td class="text-center">${item.purchasing_username}</td>
                          <td class="text-right">${item.purchasing_email}</td>
                          <td class="text-right">${item.status}</td>
                       </tr>`
            });

            
            $("#arr_details_items").val(_items);

            $("#body_table_email").append(_cad);

            count_purchasing++;
            $("#modal-preview-email").modal("show");

      }else{

          $("#modal-preview-email").modal("hide");

          $('.message_top').printMessage({message : _message, type : 'success'});

          $('.message_top').fadeIn().fadeOut(10000);
          
         
          location.reload()
      }
    }


    function json2array(json){
        var result = [];
        var keys = Object.keys(json);
        keys.forEach(function(key){
            result.push(json[key]);
        });
        return result;
    }


    function  items_notifications(id_request, message){
       _items = []
            $.ajax({
                   type: 'post',  
                   dataType: 'json',
                   url: BASE_URL + 'administrator/amuco_details_customers_request/items_notification',
                   data: { request_id: id_request, '<?php echo $this->security->get_csrf_token_name(); ?>':'<?php echo $this->security->get_csrf_hash(); ?>' }
                   }).success(function( response ) {

                      //contact_response = json2array(res.contactos);
                      //purchasing_response  = response.purchasing;
                      contact_response = response.contactos
                      _customer_request = response.customer_request

                      if(contact_response.length == 0){

                        $('.message_top').printMessage({message : message, type : 'success'});

                        $('.message_top').fadeIn().fadeOut(10000);

                        
                        $('.message_no').printMessage({message : response.message_no, type:'warning'});

                        $('.message_no').fadeIn().fadeOut(10000);
         
                      }else{

                        mostrar_modal(contact_response[0], response.customer_request)

                      }
                    
           }).fail(function (jqXHR, textStatus, errorThrown){ 

        });
    }


    function  items_purchasing(id_request){

            $.ajax({
                  type: 'post',  
                  dataType: 'json',
                  url: BASE_URL + 'administrator/amuco_details_customers_request/items_notification',
                  data: { request_id: id_request, '<?php echo $this->security->get_csrf_token_name(); ?>':'<?php echo $this->security->get_csrf_hash(); ?>' }
                  }).success(function( response ) {

                  let res = JSON.parse(response);
                  purchasing_response  = res.purchasing;

                  mostrar_modal_purchasing(purchasing_response[0],_customer_request)

                 }).fail(function (jqXHR, textStatus, errorThrown){ 

                  });
    }


    function delete_item_product(elem,valu) {
      let row = elem.parentNode.parentNode;
      row.parentNode.removeChild(row);
      valu = valu ;
    
      data_table.forEach(function(car, index, object) {
          if(car.tr == valu){
            console.log("Eliminar");
            object.splice(index, 1);
          }
      });
     
      if(data_table.length == 0){
        detete_item = 0;
        item = 0
        $('#btn_new_product').prop('disabled',true) ;
      }
      detete_item++;
    }

    function domo(){

      $('.input-number').toArray().forEach(function(field){
        new Cleave(field, {
            numeral: true,
            numeralThousandsGroupStyle: 'thousand'
        });
      });


      $('.input_percentage').toArray().forEach(function(field){
        new Cleave(field, {
            numeral: true,
            numeralThousandsGroupStyle: 'thousand'
        });
      });
    }

    function delete_item_table_payments(elem,valu){
      let row = elem.parentNode.parentNode;
      table_payments.row(row).remove().draw();
      valu = valu ;
      data_payments_table.forEach(function(car, index, object) {
          if(car.tr == valu){
            console.log("Eliminar");
            object.splice(index, 1);
          }
      });
      console.log(data_payments_table);
      if(data_payments_table.length == 0){
        item_payment = 0
        $('#btn_send_request').addClass('disabled') ;
      }
    }
    
    
    /************************************************************************************************************* */
    $(document).on({
      'show.bs.modal': function () {  
        var zIndex = 1040 + (10 * $('.modal:visible').length);
        $(this).css('z-index', zIndex);
        setTimeout(function() {
            $('.modal-backdrop').not('.modal-stack').css('z-index', zIndex - 1).addClass('modal-stack');
        }, 0);
      },
      'hidden.bs.modal': function() {
        if ($('.modal:visible').length > 0) {
            setTimeout(function() {
                $(document.body).addClass('modal-open');
            }, 0);
        }
      }
    }, '.modal');
 /****************************************************************************************************************** */
 function calculate_data(btn_action){
       var incoterm = $('#incoterm_cal').val();
        var quantity = $('#quantity_cal').val().replace(/\,/g, '');
        var price_fob_fca_unit = $('#price_fob_fca_unit').val().replace(/\,/g, '');
        var freight = $('#freight_cal').val().replace(/\,/g, '');
        var sup_overprice = $('#sup_overprice').val().replace(/\,/g, '');
        var purchase_amount = $('#purchase_amount').val().replace(/\,/g, '');
        var price_unit = $('#price_unit_cal').val().replace(/\,/g, '');
        var terms = $('#terms').val();
        var days = $('#term_days').val();
        var commission_sales_agent = $('#com_sales_agent').val();
        var commission_purchase_office = $('#com_purchase_office').val();
        var commission_other_supp_comm = $('#com_other_supp_comm').val();
       var commission_sales_agent = $('#com_sales_agent').val();
        var commission_purchase_office = $('#com_purchase_office').val();
        var commission_other_supp_comm = $('#com_other_supp_comm').val();

        //Representative
        var representative_commission = $('#representative_commission').val();
        var representative_purchase_office = $('#representative_purchase_office').val();
        var payment_customer_select = $('#payment_customer_select').val();
        //Price Increase
        var price_increase_commission = $('#price_increase_commission').val();
        if(quantity !== '' && price_fob_fca_unit !== '' && freight !== '' && sup_overprice !== '') {
          purchase_amount = (parseFloat(quantity.replace(/\,/g, '')) *  parseFloat(price_fob_fca_unit.replace(/\,/g, ''))) + parseFloat(freight.replace(/\,/g, '')) + parseFloat(sup_overprice.replace(/\,/g, ''));
          price_unit = purchase_amount.toFixed(2) / parseFloat(quantity.replace(/\,/g, ''));
          $('#purchase_amount').val(purchase_amount);
          $('#price_unit_cal').val(price_unit);
          domo();
        } else {
          $('#purchase_amount').val('');
          $('#price_unit_cal').val('');  
        }
        var payment_customer_select = $('#payment_customer_select').val();
        console.log(quantity+"  "+price_fob_fca_unit+"  "+freight);
         if(quantity !== '' && price_fob_fca_unit !== '' ) {
          $.ajax({
            type:"post",
            url: "<?php echo base_url(); ?>administrator/amuco_price_calculator/price_calculator",
            data:{ incoterm: incoterm, 
                  quantity: quantity, 
                  price_fob_fca_unit: price_fob_fca_unit,  
                  freight: freight, 
                  sup_overprice: sup_overprice, 
                  purchase_amount: purchase_amount,
                  price_unit: price_unit,
                  terms: terms,
                  days:days,
                  commission_sales_agent: commission_sales_agent,
                  commission_purchase_office: commission_purchase_office,
                  commission_other_supp_comm: commission_other_supp_comm,
                  representative_commission: representative_commission,
                  representative_purchase_office: representative_purchase_office,
                  price_increase_commission: price_increase_commission,
                  payment_customer_select : payment_customer_select,
                  '<?php echo $this->security->get_csrf_token_name(); ?>':'<?php echo $this->security->get_csrf_hash(); ?>'
                  },
            success:function(response) {
            if(response){
               var json = JSON.parse(response);
               console.log(json.coface_result);
               $('#costs_purchase_amount').val(numeral(purchase_amount).format('0,0.00'));
              // $('#financing_prepaid').val(numeral(json[0].financing_result).format('0,0.00'));
               if(btn_action == "btn_calculate"){
                  $('#financing_prepaid').val('0.00');
                  $('#coface').val(numeral(json.coface_result).format('0,0.00'));
                  $('#bank_charge').val(numeral(json.bank_charge_result).format('0,0.00'));
                  $('#freight_insurance').val(numeral(json.freight_insurance_result).format('0,0.00'));
                  $('#purchase_office_comm').val(numeral(json.purchase_office_comm).format('0,0.00'));
                  $('#comm_other_supplier').val(numeral(json.comm_other_supplier).format('0,0.00'));
                  $('#total_purchase_cost1').val(numeral(json.total_purchase_cost).format('0,0.00'));
                  $('#total_purchase_cost2').val(numeral(json.total_purchase_unit).format('0,0.00'));
                 /* total_cost = parseFloat(purchase_amount) +parseFloat(numeral(json.coface_result).format('0,0.00')) + parseFloat(numeral(json.bank_charge_result).format('0,0.00')) + parseFloat(numeral(json.freight_insurance_result).format('0,0.00')) + parseFloat(numeral(json.purchase_office_comm).format('0,0.00')) + parseFloat(numeral(json.comm_other_supplier).format('0,0.00'));
                  console.log(total_cost);
                  total_cost_unit = total_cost/ $('#quantity').val();
                  $('#total_purchase_cost1').val(numeral(total_cost).format('0,0.00'));
                  $('#total_purchase_cost2').val(numeral(total_cost_unit).format('0,0.00'));*/
                 
                  table_calculator.clear().draw();
                 table_calculator.rows.add(json.calculations).draw();
               }else{
                  $('#financing_prepaid').val(numeral(json.financing_result).format('0,0.00'));
                  $('#coface').val(numeral(json.coface_result).format('0,0.00'));
                  $('#bank_charge').val(numeral(json.bank_charge_result).format('0,0.00'));
                  $('#freight_insurance').val(numeral(json.freight_insurance_result).format('0,0.00'));
                  $('#purchase_office_comm').val(numeral(json.purchase_office_comm).format('0,0.00'));
                  $('#comm_other_supplier').val(numeral(json.comm_other_supplier).format('0,0.00'));
                 /* total_cost = parseFloat(purchase_amount) + parseFloat(numeral(json.financing_result).format('0,0.00')) + parseFloat(numeral(json.coface_result).format('0,0.00')) + parseFloat(numeral(json.bank_charge_result).format('0,0.00')) + parseFloat(numeral(json.freight_insurance_result).format('0,0.00')) + parseFloat(numeral(json.purchase_office_comm).format('0,0.00')) + parseFloat(numeral(json.comm_other_supplier).format('0,0.00'));
                  console.log(total_cost);
                  total_cost_unit = total_cost/ $('#quantity').val();
                  $('#total_purchase_cost1').val(numeral(total_cost).format('0,0.00'));
                  $('#total_purchase_cost2').val(numeral(total_cost_unit).format('0,0.00'));*/
                  $('#total_purchase_cost1').val(numeral(json.total_purchase_cost).format('0,0.00'));
                  $('#total_purchase_cost2').val(numeral(json.total_purchase_unit).format('0,0.00'));

                  $('#label_financing').html("Financing "+ json.code_payment); 
               }

               /*$('#sale_customer').Tabledit({
                     deleteButton: false,
                     editButton: false,          
                     columns: {
                        identifier:[10, 'id'],                    
                        editable:[ [3,'offer_price_per_unit'],[4,'price_increase'],
                                    [5, 'sales_amount'],[6,'estimated_gross_profit'],[7,'estimated_commission'],[8,'rep_commission'],
                        ],
                     },

                    
                     hideIdentifier: false,
                     url: BASE_URL + '/administrator/amuco_details_request_office/edit_save_table_test/',  
                     onSuccess:function(data, textStatus, jqXHR)
                     {
                        //console.log(data.columns.id);
                        //console.log(textStatus);
                        //console.log(jqXHR);

                        if(textStatus=='success' && data.success){
                           var column_1=0,column_2=0,column_3=0,column_4=0,column_5=0;
                         
                           
                           $('#sale_customer tr').each(function() {
                              //console.log( $(this).find("td").eq(10).text());
                             

                              if( $(this).find("td").eq(10).text() == data.columns.id){
                                 var temp = table_calculator.rows(this).data();
                               
                                 let y = 0;
                                 $(this).children('td').each ( function() {
                                   // console.log($(this).html());
                                    if(y==2)
                                      column_price_cal = $(this).text();
                                    if(y == 3)
                                      column_1 = $(this).text();
                                    if(y == 4)
                                      column_2 = $(this).text();
                                    if(y == 5)
                                      column_3 = $(this).text();
                                    if(y == 6)
                                      column_4 = $(this).text();
                                    if(y == 7)
                                      column_5 = $(this).text();  

                                      y++;
                                 });
                                 if(data.columns.column_name == 'offer_price_per_unit'){
                                    let offer_increase = 1 - (1 * parseFloat($('#price_increase_commission').val().replace(/\,/g, ''))/ 100);
                                    let cost = (parseFloat(column_price_cal.replace(/\,/g, '')) *  offer_increase).toFixed(2);
                                    let vall = column_1 * $('#quantity_cal').val();
                                    let purchaase_amo= cost;
                                    let vall_2 = parseFloat((1 - ( purchaase_amo/ vall)))*100;
                                    let vall_3 = vall - purchaase_amo;
                                    let vall_4 = vall_3 *  parseFloat($('#com_sales_agent').val().replace(/\,/g, ''));
                                   
                                       console.log('aqui');
                                       console.log(temp[0]);
                                       console.log(numeral(column_1).format('0,0.00'));
                                       temp[0]['offer_price_per_unit'] = column_1;
                                       temp[0]['price_increase'] = vall_2.toFixed(2);
                                       temp[0]['sales_amount'] = vall;
                                       temp[0]['estimated_gross_profit'] =vall_3;
                                       temp[0]['estimated_commission'] = vall_4;
                                       //Table.rows(1).data(temp).invalidate();
                                       $('#sale_customer').dataTable().fnUpdate(temp[0],this,undefined,true);
                                       console.log(data);
                                       console.log(table_calculator.rows(this).data()); 
                                
                                 }
                                 if(data.columns.column_name == 'price_increase'){
                                    let offer_increase = 1 - (1 * parseFloat($('#price_increase_commission').val().replace(/\,/g, ''))/ 100);
                                    let offer_increase_new =  1 - (1 * parseFloat(column_2)/100).toFixed(2);
                                    console.log("column"+column_2);
                                    console.log(offer_increase_new);
                                    let purchaase_amo = (parseFloat(column_price_cal.replace(/\,/g, '')) *  offer_increase).toFixed(2);
                                    let vall = purchaase_amo /offer_increase_new;
                                    console.log("Prucha"+purchaase_amo);
                                    console.log(vall);
                                    let vall_2 = vall / $('#quantity_cal').val();
                                    let vall_3 = vall - purchaase_amo;
                                    let vall_4 = vall_3 *  parseFloat($('#com_sales_agent').val().replace(/\,/g, ''));
                            

                                    temp[0]['offer_price_per_unit'] = vall_2.toFixed(2);;
                                    temp[0]['price_increase'] = column_2;
                                    temp[0]['sales_amount'] = vall.toFixed(2);
                                    temp[0]['estimated_gross_profit'] =vall_3.toFixed(2);
                                    temp[0]['estimated_commission'] = vall_4.toFixed(2);
                                       //Table.rows(1).data(temp).invalidate();
                                    $('#sale_customer').dataTable().fnUpdate(temp[0],this,undefined,true);
                                    console.log(data);
                                    console.log(table_calculator.rows(this).data()); 
                                 }
                                 if(data.columns.column_name == 'sales_amount'){
                                    let offer_increase = 1 - (1 * parseFloat($('#price_increase_commission').val().replace(/\,/g, ''))/ 100);
                                    let purchaase_amo = (parseFloat(column_price_cal.replace(/\,/g, '')) *  offer_increase);
                                    let vall_2 = parseFloat(column_3)/ $('#quantity_cal').val();
                                    let vall =   (1 - ( purchaase_amo/  parseFloat(column_3)))*100;
                                    let vall_3 =  parseFloat(column_3) - purchaase_amo;
                                    let vall_4 = vall_3 *  parseFloat($('#com_sales_agent').val().replace(/\,/g, ''));
                                
                                    temp[0]['offer_price_per_unit'] = vall_2.toFixed(2);;
                                    temp[0]['price_increase'] = vall.toFixed(2);
                                    temp[0]['sales_amount'] = column_3;
                                    temp[0]['estimated_gross_profit'] =vall_3.toFixed(2);
                                    temp[0]['estimated_commission'] = vall_4.toFixed(2);
                                       //Table.rows(1).data(temp).invalidate();
                                    $('#sale_customer').dataTable().fnUpdate(temp[0],this,undefined,true);
                                 }
                                 if(data.columns.column_name == 'estimated_gross_profit'){
                                    let offer_increase = 1 - (1 * parseFloat($('#price_increase_commission').val().replace(/\,/g, ''))/ 100);
                                    let purchaase_amo = (parseFloat(column_price_cal.replace(/\,/g, '')) *  offer_increase).toFixed(2);
                                    let vall_3 =  parseFloat(column_4) + parseFloat(purchaase_amo);
                                  //  console.log('sales'+vall_3);
                                    let vall_2 = parseFloat(vall_3) / $('#quantity_cal').val();
                                    let vall =   (1 - ( purchaase_amo/  parseFloat(vall_3)))*100;
                                    let vall_4 = parseFloat(column_4) *  parseFloat($('#com_sales_agent').val().replace(/\,/g, ''));
                          
                                    temp[0]['offer_price_per_unit'] = vall_2.toFixed(2);;
                                    temp[0]['price_increase'] = vall.toFixed(2);
                                    temp[0]['sales_amount'] = vall_3.toFixed(2);
                                    temp[0]['estimated_gross_profit'] =column_4;
                                    temp[0]['estimated_commission'] = vall_4.toFixed(2);
                                       //Table.rows(1).data(temp).invalidate();
                                    $('#sale_customer').dataTable().fnUpdate(temp[0],this,undefined,true);
                                 }
                                 if(data.columns.column_name == 'estimated_commission'){
                                    let est_comm =  parseFloat(column_5);
                                   /* $(this).find("td").eq(7).find('span').text(numeral(est_comm).format('0,0.00'));
                                    $(this).find("td").eq(7).find('input').val(numeral(est_comm).format('0,0.00')); */
                                  
                                  /*  temp[0]['estimated_commission'] = est_comm.toFixed(2);
                                       //Table.rows(1).data(temp).invalidate();
                                    $('#sale_customer').dataTable().fnUpdate(temp[0],this,undefined,true);
                                    
                                 }
                               
                                
                              }
                        
                              
                           });
                         // console.log(column_1+"- " +column_2+"- " + column_3+"- " +column_4+"- " +column_5+"- ");
                      
                        }
                     },
                     onAjax: function(action, serialize) {
                        //console.log('onAjax(action, serialize)');
                        //console.log(action);
                        
                     //console.log(serialize);
                     serialize = serialize + '&'+ y + '='+ x;
                    // console.log(serialize);
                     },
                  }); */    

            

            }
            },
            error: function() 
            {
               alert("Invalide!");
            }
         });
      }else{
         alert("Please enter the values ​​for the calculations");
      }
   }


   /******************************************************************************************************************* */
  $(document).ready(function() {

    $('#add_days').keyup(function(){
        $('#days').val( $('#add_days').val());
    });

    table_payments = $("#table_offering_details").DataTable({
     
    columns: [
     
       { data: "product" },
       { data: "quantity", render: $.fn.dataTable.render.number( ',', '.', 2 ) },
       { data: "unit" },
       { data: "fcl" },
       { data: "option_fcl" },
       { data: "type_fcl" },
       { data: "weight" },
       { data: "unit_pack" },
       { data: "material" },
       { data: "packing" },
       { data: "pallets" },
       { data: "price_fob" },
       { data: "total_freight" },
       { data: "total_price" },
       { data: "shipping_port" },
       { data: "recipients" },
       { data: "supplier" },
       { data: "manufacturer" },
       { data: "supplier_incoterm" },
       { data: "payments_terms" },
       { data: "sales_amount", render: $.fn.dataTable.render.number( ',', '.', 2 )},
       { data: "incoterm_price" },
       { data: "destination_port" },
       { data: "cust_payment_term" },
       { data: "ETD" },
       { data: "analysis_standard" },
       { data: "valid_until" },
       { data: "comments" },  
       { data: "actions" }, 
       { data: "who_pallets" }, 
    ],
    columnDefs: [
       { className: "hide_column", "targets": [29] }
     ],
    rowCallback: function (row, data) {},
      filter: false,
      info: false,
      ordering: [[ 1, "desc" ]],
      processing: false,
      retrieve: false,
      paging :  false,
      searching: false,
      scrollX: true,
      responsive: true,
      scrollCollapse: true, 
      fixedColumns:
        {
          leftColumns: 1,
          rightColumns: 1
                
        },
  });
  

     table_calculator = $("#sale_customer").DataTable({
     
      columns: [
        {
                data: '',
                defaultContent: '',
                className: 'select-checkbox',
                orderable: false
            },
         { data: "payment_terms_customer" },
         { data: "calculated_offer_price", render: $.fn.dataTable.render.number( ',', '.', 2 )},
         { data: "offer_price_per_unit", render: $.fn.dataTable.render.number( ',', '.', 2 ) },
         { data: "price_increase", render: $.fn.dataTable.render.number( ',', '.', 2 ) },
         { data: "sales_amount", render: $.fn.dataTable.render.number( ',', '.', 2 ) },
         { data: "estimated_gross_profit", render: $.fn.dataTable.render.number( ',', '.', 2 ) },
         { data: "estimated_commission", render: $.fn.dataTable.render.number( ',', '.', 2 ) },
         //{ data: "Comm", render: $.fn.dataTable.render.number( ',', '.', 2 ) },
         { data: "rep_commission", render: $.fn.dataTable.render.number( ',', '.', 2 ) },
         { data: "code_payment" },
         { data: "id" },
        
         
      ],
      columnDefs: [
       { className: "hide_column", "targets": [9,10 ] }
     ],
      rowCallback: function (row, data) {},
         filter: false,
         info: false,
         ordering: [[ 1, "desc" ]],
         processing: false,
         retrieve: false,
         scrollY: "380px",
         scrollCollapse  : true,
         paging :         false,
         select: {
            style:    'os',
            selector: 'td:first-child'
        },
    });
   
   
  
   $('#btn_add_contact_customer').click(function(){
       $('#type_contact').val('Customer');
   });
   $('#btn_add_representative').click(function(){
       $('#type_contact').val('Representative');
   });
   $('#btn_add_contact_supplier').click(function(){
       $('#type_contact').val('Supplier');
   });
  /****************************************************************************************** */
   // alert($('#table_price').find('tbody tr td').length);
   var table_price;
   var current_id_price_details = "";
   var editor;
   var obj_units = {},obj_sp = {},obj_incoterm = {};
   var obj_payments = {},obj_material={},obj_packing={},obj_suppliers = {};
   var obj_type_fcl = {'NOR':'NOR','HCube':'HCube','Standar':'Standard'};
   var default_provider_options = [];
   var tempArray = <?php echo json_encode(db_get_all_data('amuco_unit_types')); ?>;
   var tempArray_sp = <?php echo json_encode(db_get_all_data('amuco_destination_port')); ?>;
   var tempArray_incoterm = <?php echo json_encode(db_get_all_data('amuco_incoterm')); ?>;
   var tempArray_payments = <?php echo json_encode(db_get_all_data('amuco_supplier_payment_terms')); ?>;
   var tempArray_packing = <?php echo json_encode(db_get_all_data('amuco_packing')); ?>;
   var tempArray_material = <?php echo json_encode(db_get_all_data('amuco_material')); ?>;
   var tempArray_suppliers = <?php echo json_encode(db_get_all_data('amuco_suppliers')); ?>;
   var table_offers_sent;

//You will be able to access the properties as 
 console.log(tempArray);
 
  
     
     $.each(tempArray, function (index) {

         default_provider_options.push({
             value: tempArray[index].id,
             label: tempArray[index].name
         });
         obj_units[tempArray[index].id] = tempArray[index].name;

     });
     $.each(tempArray_sp, function (index) {
        obj_sp[tempArray_sp[index].id] = tempArray_sp[index].name;
      });
      $.each(tempArray_incoterm, function (index) {
        obj_incoterm[tempArray_incoterm[index].id] = tempArray_incoterm[index].name;
      });
      $.each(tempArray_payments, function (index) {
        obj_payments[tempArray_payments[index].id] = tempArray_payments[index].description;
      });
      $.each(tempArray_packing, function (index) {
        obj_packing[tempArray_packing[index].id] = tempArray_packing[index].name;
      });
      $.each(tempArray_material, function (index) {
        obj_material[tempArray_material[index].id] = tempArray_material[index].name;
      });
      $.each(tempArray_suppliers, function (index) {
        obj_suppliers[tempArray_suppliers[index].id] = tempArray_suppliers[index].name;
      });
     
   
     table_offers_sent = $("#table_offers_customers").DataTable({
      columns: [
          {
                data: '',
                defaultContent: '',
                className: 'select-checkbox',
                orderable: false,
                
            },
          { data: "status" },
          { data: "product_id" },
          { data: "quantity", render: $.fn.dataTable.render.number( ',', '.', 2 ) },
          { data: "unit" },
          { data: "fcl" },
          { data: "option_fcl" },
          { data: "type_fcl" },
          { data: "Packing" },
         /* { data: "weight" },
          { data: "unit_pack" },
          { data: "packing" },
          { data: "material" },
          { data: "pallets" },*/
          { data: "price_fob" ,render: $.fn.dataTable.render.number( ',', '.', 2 ) },
          { data: "freight",render: $.fn.dataTable.render.number( ',', '.', 2 ) }, 
          { data: "unit_price",render: $.fn.dataTable.render.number( ',', '.', 2 )  },
          { data: "shipping_port" },
          { data: "recipients" },
          { data: "supplier" },
          { data: "manufacturer" },
          { data: "supplier_incoterm" },
          { data: "payments_terms" },
          { data: "offer_price_per_unit", render: $.fn.dataTable.render.number( ',', '.', 2 )},
          { data: "incoterm_price" },
          { data: "destination_port" },
          { data: "cust_payment_term" },
          { data: "ETD" },
          { data: "analysis_standard" },
          { data: "valid_until" },
          { data: "comments" }, 
          { data: "actions" }, 

      ],
     
      rowId: 'id',
      rowCallback: function (row, data) {
        // if (data.status == "accepted") {
        //     $('.select-checkbox', row).prop('disabled', true);
        // }
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
  
    if( $('#table_details_price').find('tbody tr td').length > 1){
      table_price = $("#table_details_price").DataTable({
    
      columns: [
        { data: '',
          defaultContent: '',
          className: 'select-checkbox',
          orderable: false,    
        },
        { data: "amuco_products_name" },
        { data: "product_id" },
        { data: "quantity", render: $.fn.dataTable.render.number( ',', '.', 2 ) },
        { data: "unit" },
        { data: "unit_id" },
        { data: "fcl" },
        { data: "fcl_option" },
        { data: "type_fcl" },
        { data: "weight" },
        { data: "unit_pack" },
        { data: "unit_pack_id" },
        { data: "material" },
        { data: "material_id" },
        { data: "shape" },
        { data: "shape_id" },
        { data: "pallets" },
        { data: "price_fob", render: $.fn.dataTable.render.number( ',', '.', 2 ) },
        { data: "total_freight", render: $.fn.dataTable.render.number( ',', '.', 2 ) },
        { data: "total_price", render: $.fn.dataTable.render.number( ',', '.', 2 ) },
        { data: "shipping_port" },
        { data: "shipping_port_id" },
        { data: "recipients" },
        { data: "supplier" },
        { data: "recipients_id" },
        { data: "manufacturer" },
        { data: "manufacturer_id" },
        { data: "supplier_incoterm" },
        { data: "supplier_incoterm_id" },
        { data: "payment_terms" },
        { data: "payment_terms_id" },
        { data: "incoterm_price" },
        { data: "incoterm_price_id" },
        { data: "destination_port" },
        { data: "destination_port_id" },
        { data: "ETD" },
        { data: "analysis_standard" },
        { data: "valid_untill" },
        { data: "comments" },
        { data: "customer_request_id" },
        { data: "request_details_id"},
        { data: "id"},  
        { data: "who_pallets"},  
        { data: "actions"}, 
      ],
      columnDefs: [
       { className: "hide_column", "targets": [2,5,11,13,15,21,24,26,28,30,32,34,39,40,41,42] }
     ],
      rowId: 'id',
      rowCallback: function (row, data) {},
        filter: false,
        info: false,
        ordering: [[ 1, "desc" ]],
        processing: false,
        retrieve: false,
        paging :         false,
        searching: false,
        scrollX: true,
        responsive: true,
        scrollCollapse: true,
        fixedColumns:
        {
          leftColumns: 1,
          leftColumns: 2,  
        },
        "orderFixed": {
          "pre": [ 1, 'asc' ],
        },
        
        select: {
            style:    'os',
            selector: 'td:first-child'
        },
      });

     
    }  
  
    $('#table_details_price').on( 'select.dt', function ( e, dt, type, indexes ) {
      e.preventDefault();
      var data = dt.rows(indexes).data();
      console.log(data[0]);
      if(data[0] != 'undefined'){
        $('#payment_customer_select').val(0);
        $('#quantity_cal').val(data[0]['quantity']);
        $('#price_fob_fca_unit').val(data[0]['price_fob']);
        $('#freight_cal').val(data[0]['total_freight']);
        $('#sup_overprice').val(0.00);
        $("#terms").val(data[0]['payment_terms_id']).trigger("change");
        $("#terms_days").val(data[0]['payment_terms_id']).trigger("change");
        var incoterm = $('#incoterm_cal').val();
        var quantity = $('#quantity_cal').val().replace(/\,/g, '');
        var price_fob_fca_unit = $('#price_fob_fca_unit').val().replace(/\,/g, '');
        var freight = $('#freight_cal').val().replace(/\,/g, '');
        var sup_overprice = $('#sup_overprice').val().replace(/\,/g, '');
        var purchase_amount = $('#purchase_amount').val().replace(/\,/g, '');
        var price_unit = $('#price_unit_cal').val().replace(/\,/g, '');
        var terms = $('#terms').val();
        var days = $('#term_days').val();
        var commission_sales_agent = $('#com_sales_agent').val();
        var commission_purchase_office = $('#com_purchase_office').val();
        var commission_other_supp_comm = $('#com_other_supp_comm').val();

        //Representative
        var representative_commission = $('#representative_commission').val();
        var representative_purchase_office = $('#representative_purchase_office').val();
        var payment_customer_select = $('#payment_customer_select').val();
        //Price Increase
        var price_increase_commission = $('#price_increase_commission').val();
        if(quantity !== '' && price_fob_fca_unit !== '' && freight !== '' && sup_overprice !== '') {
          purchase_amount = (parseFloat(quantity.replace(/\,/g, '')) *  parseFloat(price_fob_fca_unit.replace(/\,/g, ''))) + parseFloat(freight.replace(/\,/g, '')) + parseFloat(sup_overprice.replace(/\,/g, ''));
          price_unit = purchase_amount.toFixed(2) / parseFloat(quantity.replace(/\,/g, ''));
          $('#purchase_amount').val(purchase_amount);
          $('#price_unit_cal').val(price_unit);
          domo();
        } else {
          $('#purchase_amount').val('');
          $('#price_unit_cal').val('');  
        }
        calculate_data("btn_calculate");
        
      /*  $.ajax({
          type:"post",
          url: "<?php echo base_url(); ?>administrator/amuco_price_calculator/price_calculator",
          data:{ incoterm: incoterm, 
                quantity: quantity, 
                price_fob_fca_unit: price_fob_fca_unit,  
                freight: freight, 
                sup_overprice: sup_overprice, 
                purchase_amount: purchase_amount,
                price_unit: price_unit,
                terms: terms,
                days:days,
                commission_sales_agent: commission_sales_agent,
                commission_purchase_office: commission_purchase_office,
                commission_other_supp_comm: commission_other_supp_comm,
                representative_commission: representative_commission,
                representative_purchase_office: representative_purchase_office,
                price_increase_commission: price_increase_commission,
                payment_customer_select : payment_customer_select,

                '<?php echo $this->security->get_csrf_token_name(); ?>':'<?php echo $this->security->get_csrf_hash(); ?>'
          },
          success:function(response) {
            if(response){
              var json = JSON.parse(response);
              console.log(json);
              $('#costs_purchase_amount').val(numeral(purchase_amount).format('0,0.00'));
              $('#financing_prepaid').val(numeral(json.financing_result).format('0,0.00'));
              $('#coface').val(numeral(json.coface_result).format('0,0.00'));
              $('#bank_charge').val(numeral(json.bank_charge_result).format('0,0.00'));
              $('#freight_insurance').val(numeral(json.freight_insurance_result).format('0,0.00'));
              $('#purchase_office_comm').val(numeral(json.purchase_office_comm).format('0,0.00'));
              $('#comm_other_supplier').val(numeral(json.comm_other_supplier).format('0,0.00'));
              $('#total_purchase_cost1').val(numeral(json.total_purchase_cost).format('0,0.00'));
              $('#total_purchase_cost2').val(numeral(json.total_purchase_unit).format('0,0.00'));

              table_calculator.clear().draw();
              table_calculator.rows.add(json.calculations).draw();
              $('#sale_customer').Tabledit({
                  deleteButton: false,
                  editButton: false,          
                  columns: {
                    identifier:[1, 'payment_term_customer'],                    
                    editable:[ [2, 'calculated_offer_price'],[3,'offer_price_per_unit'],[4,'price_increase'],
                    [5, 'sales_amount'],[6,'estimated_gross_profit'],[7,'estimated_commission'],[8,'rep_commission'],
                    ]
                  },


                  hideIdentifier: false,
                  url: BASE_URL + '/administrator/amuco_details_request_office/edit_save_table/15',  
                  onSuccess:function(data, textStatus, jqXHR)
                  {
                    console.log(data);
                    console.log(textStatus);
                    console.log(jqXHR);
                  },
                  onAjax: function(action, serialize) {
                    console.log('onAjax(action, serialize)');
                      console.log(action);
                      serialize.new ="hh";
                    console.log(serialize);
                    serialize = serialize + '&'+ y + '='+ x;
                    console.log(serialize);
                  },
              });

               // Activate an inline edit on click of a table cell
           
            }
          },
          error: function() 
          {
            alert("Invalide!");
          }
        });//end Ajax*/
      }
     
    });

  /******************************************************************************************************* */
  $('#sale_customer').on('click', 'tbody td', function (e) {
    console.log(table_calculator.rows(this.parentNode).data()[0]);
    if($(this).hasClass('select-checkbox') ){
        if($(this).parents('tr').hasClass('selected')){
          $('#payment_customer_select').val(0);
          $('#financing_prepaid').val('0.00');
          $('#btn_quit_offer').addClass('disabled') ;
        }else{
          console.log(table_calculator.rows(this.parentNode).data()[0]['id']);
          $('#payment_customer_select').val(table_calculator.rows(this.parentNode).data()[0]['id']);   
          calculate_data("select_payment");
        }
        
     }
     $('#sale_customer').Tabledit({
                     deleteButton: false,
                     editButton: false,          
                     columns: {
                        identifier:[10, 'id'],                    
                        editable:[ [3,'offer_price_per_unit'],[4,'price_increase'],
                                    [5, 'sales_amount'],[6,'estimated_gross_profit'],[7,'estimated_commission'],[8,'rep_commission'],
                        ],
                     },

                    
                     hideIdentifier: false,
                     url: BASE_URL + '/administrator/amuco_details_request_office/edit_save_table_test/',  
                     onSuccess:function(data, textStatus, jqXHR)
                     {
                        //console.log(data.columns.id);
                        //console.log(textStatus);
                        //console.log(jqXHR);

                        if(textStatus=='success' && data.success){
                           var column_1=0,column_2=0,column_3=0,column_4=0,column_5=0;
                         
                           
                           $('#sale_customer tr').each(function() {
                              //console.log( $(this).find("td").eq(10).text());
                             

                              if( $(this).find("td").eq(10).text() == data.columns.id){
                                 var temp = table_calculator.rows(this).data();
                               
                                 let y = 0;
                                 $(this).children('td').each ( function() {
                                   // console.log($(this).html());
                                    if(y==2)
                                      column_price_cal = parseFloat($(this).text().replace(/\,/g, ''));
                                    if(y == 3)
                                      column_1 = parseFloat($(this).text().replace(/\,/g, ''));
                                    if(y == 4)
                                      column_2 = parseFloat($(this).text().replace(/\,/g, ''));
                                    if(y == 5)
                                      column_3 = parseFloat($(this).text().replace(/\,/g, ''));
                                    if(y == 6)
                                      column_4 = parseFloat($(this).text().replace(/\,/g, ''));
                                    if(y == 7)
                                      column_5 = parseFloat($(this).text().replace(/\,/g, ''));  

                                      y++;
                                 });
                                 if(data.columns.column_name == 'offer_price_per_unit'){
                                    let offer_increase = 1 - (1 * parseFloat($('#price_increase_commission').val().replace(/\,/g, ''))/ 100);
                                    let purchaase_amo = parseFloat(column_price_cal *  offer_increase).toFixed(2);
                                    let vall = parseFloat(column_1 * parseFloat($('#quantity_cal').val()));
                                    let vall_2 = parseFloat((1 - ( parseFloat(purchaase_amo)/ parseFloat(vall))))*100;
                                    let vall_3 = parseFloat(vall) - parseFloat(purchaase_amo);
                                    let vall_4 = parseFloat(vall_3) *  parseFloat($('#com_sales_agent').val().replace(/\,/g, ''));
                                   
                                    temp[0]['offer_price_per_unit'] = column_1;
                                    temp[0]['price_increase'] = vall_2.toFixed(2);
                                    temp[0]['sales_amount'] = vall;
                                    temp[0]['estimated_gross_profit'] =vall_3;
                                    temp[0]['estimated_commission'] = vall_4;
                                    $('#sale_customer').dataTable().fnUpdate(temp[0],this,undefined,true);
                                
                                 }
                                 if(data.columns.column_name == 'price_increase'){
                                    let offer_increase = 1 - (1 * parseFloat($('#price_increase_commission').val().replace(/\,/g, ''))/ 100);
                                    let offer_increase_new =  1 - (1 * column_2/100).toFixed(2);
                                    let purchaase_amo = parseFloat(column_price_cal *  offer_increase).toFixed(2);
                                    let vall = purchaase_amo /offer_increase_new;
                                    let vall_2 = vall / $('#quantity_cal').val();
                                    let vall_3 = vall - purchaase_amo;
                                    let vall_4 = vall_3 *  parseFloat($('#com_sales_agent').val().replace(/\,/g, ''));
                            
                                    temp[0]['offer_price_per_unit'] = vall_2.toFixed(2);;
                                    temp[0]['price_increase'] = column_2;
                                    temp[0]['sales_amount'] = vall.toFixed(2);
                                    temp[0]['estimated_gross_profit'] =vall_3.toFixed(2);
                                    temp[0]['estimated_commission'] = vall_4.toFixed(2);
                                    $('#sale_customer').dataTable().fnUpdate(temp[0],this,undefined,true);
                                  
                                 }
                                 if(data.columns.column_name == 'sales_amount'){
                                    let offer_increase = 1 - (1 * parseFloat($('#price_increase_commission').val().replace(/\,/g, ''))/ 100);
                                    let purchaase_amo = parseFloat(column_price_cal *  offer_increase).toFixed(2);
                                    let vall_2 = column_3 / $('#quantity_cal').val();
                                    let vall =   (1 - ( purchaase_amo/  column_3))*100;
                                    let vall_3 = column_3 - purchaase_amo;
                                    let vall_4 = vall_3 *  parseFloat($('#com_sales_agent').val().replace(/\,/g, ''));
                                
                                    temp[0]['offer_price_per_unit'] = vall_2.toFixed(2);;
                                    temp[0]['price_increase'] = vall.toFixed(2);
                                    temp[0]['sales_amount'] = column_3;
                                    temp[0]['estimated_gross_profit'] =vall_3.toFixed(2);
                                    temp[0]['estimated_commission'] = vall_4.toFixed(2);
                                    $('#sale_customer').dataTable().fnUpdate(temp[0],this,undefined,true);
                                 }
                                 if(data.columns.column_name == 'estimated_gross_profit'){
                                    let offer_increase = 1 - (1 * parseFloat($('#price_increase_commission').val().replace(/\,/g, ''))/ 100);
                                    let purchaase_amo = parseFloat(column_price_cal *  offer_increase).toFixed(2);
                                    let vall_3 =  parseFloat(purchaase_amo) + parseFloat(column_4);
                                    console.log(vall_3);
                                    let vall_2 = vall_3 / $('#quantity_cal').val();
                                    let vall =   (1 - ( purchaase_amo/  vall_3))*100;
                                    let vall_4 = column_4 *  parseFloat($('#com_sales_agent').val().replace(/\,/g, ''));
                          
                                    temp[0]['offer_price_per_unit'] = vall_2.toFixed(2);;
                                    temp[0]['price_increase'] = vall.toFixed(2);
                                    temp[0]['sales_amount'] = vall_3.toFixed(2);
                                    temp[0]['estimated_gross_profit'] =column_4;
                                    temp[0]['estimated_commission'] = vall_4.toFixed(2);
                                    $('#sale_customer').dataTable().fnUpdate(temp[0],this,undefined,true);
                                 }
                                 if(data.columns.column_name == 'estimated_commission'){
                                    let est_comm =  parseFloat(column_5);
                                   /* $(this).find("td").eq(7).find('span').text(numeral(est_comm).format('0,0.00'));
                                    $(this).find("td").eq(7).find('input').val(numeral(est_comm).format('0,0.00')); */
                                  
                                    temp[0]['estimated_commission'] = est_comm.toFixed(2);
                                       //Table.rows(1).data(temp).invalidate();
                                    $('#sale_customer').dataTable().fnUpdate(temp[0],this,undefined,true);
                                    
                                 }
                               
                                
                              }
                        
                              
                           });
                         // console.log(column_1+"- " +column_2+"- " + column_3+"- " +column_4+"- " +column_5+"- ");
                      
                        }
                     },
                     onAjax: function(action, serialize) {
                        //console.log('onAjax(action, serialize)');
                        //console.log(action);
                        
                     //console.log(serialize);
                     serialize = serialize + '&'+ y + '='+ x;
                    // console.log(serialize);
                     },
                  });     
    });
    $('#sale_customer').on( 'select.dt', function ( e, dt, type, indexes ) {
      console.log("sale_customer entro");
      if(table_price.rows('.selected').data().length == 0){
        alert("Select item in price table");
      }else{
        var data_calculator = dt.rows(indexes).data();
        var data_price = table_price.rows('.selected').data();
        console.log(data_calculator[0]);
        console.log(data_price[0]);
        var data_table_payments = [
                {
                  product: data_price[0]['amuco_products_name'] ,
                  quantity : $('#quantity_cal').val(),
                  unit : data_price[0]['unit'],
                  fcl :  data_price[0]['fcl'],
                  option_fcl:  data_price[0]['fcl_option'],
                  type_fcl:  data_price[0]['type_fcl'],
                  weight:  data_price[0]['weight'],
                  unit_pack:  data_price[0]['unit_pack'],
                  material:  data_price[0]['material'],
                  packing:data_price[0]['shape'],  
                  pallets:  data_price[0]['pallets'],
                  price_fob: data_price[0]['price_fob'],
                  total_freight:data_price[0]['total_freight'],
                  total_price:data_price[0]['total_price'],
                  shipping_port :  data_price[0]['shipping_port'],
                  recipients:data_price[0]['recipients'],
                  supplier:data_price[0]['supplier'],
                  manufacturer:data_price[0]['manufacturer'],
                  supplier_incoterm:data_price[0]['supplier_incoterm'],
                  payments_terms: data_calculator[0]['payment_terms_customer'],
                  sales_amount : data_calculator[0]['offer_price_per_unit'],
                  incoterm_price : $('#incoterm_cal option:selected').text(),
                  destination_port :  data_price[0]['destination_port'],
                  cust_payment_term:  data_calculator[0]['payment_terms_customer'],
                  ETD: data_price[0]['ETD'],
                  analysis_standard:  data_price[0]['analysis_standard'],
                  valid_until: data_price[0]['valid_untill'],
                  comments: data_price[0]['comments'],
                  who_pallets : data_price[0]['who_pallets'],
                  actions:'<a onclick="delete_item_table_payments(this,'+ item_payment +')"  id="delete_payment_' + item_payment + '"  href="javascript:void(0);"  class="label-default delete_product"><i class="fa fa-close"></i> Delete</a>'
                }
              ];
        table_payments.rows.add(data_table_payments).draw();
        data_payments_table.push({
            customer_request_id :  data_price[0]['customer_request_id'],
            request_details_id : data_price[0]['request_details_id'],
            request_details_price_id:data_price[0]['id'],
            payments_terms_id:data_calculator[0]['id'],
            quantity :$('#quantity_cal').val().replace(/\,/g, ''),
            unit:data_price[0]['unit_id'],
            freight: $('#freight_cal').val().replace(/\,/g, ''),
           // unit_price: $('#price_fob_fca_unit').val().replace(/\,/g, ''),
            unit_price:$('#purchase_amount').val().replace(/\,/g, ''), 
            incoterm: $('#incoterm_cal').val(),
            destination_port: data_price[0]['destination_port_id'],
            shipping_port:  data_price[0]['shipping_port_id'],
            packing:data_price[0]['shape_id'],  
            fcl:data_price[0]['fcl'],
            type_fcl:data_price[0]['type_fcl'],
            option_fcl:data_price[0]['fcl_option'],
            weight:data_price[0]['weight'],
            unit_pack:data_price[0]['unit_pack_id'],
            material:data_price[0]['material_id'],
            offer_price_per_unit : data_calculator[0]['offer_price_per_unit'],
            analysis_standard:data_price[0]['analysis_standard'],
            pallets :data_price[0]['pallets'] == 'With Pallets' ? 1:0,
            ETD: data_price[0]['ETD'],
            calculated_offer_price: data_calculator[0]['calculated_offer_price'],
            price_increase : data_calculator[0]['price_increase'],
            sales_amount: data_calculator[0]['sales_amount'],
            estimated_gross_profit:  data_calculator[0]['estimated_gross_profit'],
            estimated_comm : data_calculator[0]['estimated_commission'],
            rep_comm :  data_calculator[0]['rep_commission'],
            price_fob:data_price[0]['price_fob'],
            supplier_payment_term: data_price[0]['payment_terms_id'],
            price_incoterm:data_price[0]['incoterm_price_id'],
            comments:data_price[0]['comments'],
            tr:item_payment,
            com_sales_agent:$('#com_sales_agent').val(),
            com_purchase_office: $('#com_purchase_office').val(), 
            com_other_supp_comm:$('#com_other_supp_comm').val(),  
            representative_commission:$('#representative_commission').val(),
            representative_purchase_office : $('#representative_purchase_office').val(),
            price_increase_commission:$('#price_increase_commission').val(),
            who_pallets : data_price[0]['who_pallets'],
            '<?php echo $this->security->get_csrf_token_name(); ?>':'<?php echo $this->security->get_csrf_hash(); ?>'
        });
        item_payment++;
        console.log(table_payments.rows().count());
        if(table_payments.rows().count() > 0){
          $('#btn_send_request').removeClass('disabled') ;
        }
        
      }
    });  
    
    /********************************************************************************************************* */

    /******************************************************************************************************* */
    $('#table_offers_customers').on( 'select.dt', function ( e, dt, type, indexes ) {
      if(dt.rows('.selected').data().length > 0){
       /*  alert("selecciono algo ");
        console.log(dt.rows('.selected').data());*/

        $("#btn_sroc").removeClass('disabled');
      } else {
        $("#btn_sroc").addClass('disabled');
      }
     
    });  //aqui
   
    $("#btn_sroc").click(function() {
       var data_offers = [];
       var customer_request_id = '<?php echo $amuco_customer_request->id; ?>';
       var validate_shipping_destination;
       
       for(let i = 0; i < table_offers_sent.rows('.selected').data().length; i++) {
        data_offers.push(table_offers_sent.rows('.selected').data()[i]);
       }
      //  var data_offers = table_offers_sent.rows('.selected').data();
      
      $.ajax({
          url: BASE_URL + '/administrator/amuco_offers_sent_customers/validateShippingAndDestinationPort',
          type: 'POST',
          dataType: 'json',
          data: {data_offers, '<?php echo $this->security->get_csrf_token_name(); ?>':'<?php echo $this->security->get_csrf_hash(); ?>'},
          
        })
        .done(function(res) {
          validate_shipping_destination = res.success;
          console.log('result ajax', typeof validate_shipping_destination);

          if(validate_shipping_destination) {
            $.ajax({
              url: BASE_URL + '/administrator/amuco_sroc/add_save',
              type: 'POST',
              dataType: 'json',
              data: {customer_request_id, data_offers, '<?php echo $this->security->get_csrf_token_name(); ?>':'<?php echo $this->security->get_csrf_hash(); ?>'},
              
            })
            .done(function(res) {

              if(res.redirect) {
                window.location.href = BASE_URL + res.redirect;
              } else {
                location.reload();
              }
              
              // console.log(res);
              // administrator/amuco_sroc/edit/' . $save_amuco_sroc
            });
          } else {
            alert('The shipping or destination port are not the same');
          }
        });

       
        
    });

    // function validateShippingAndDestinationPort(data_offers) {
    //   var result = "";
    //   $.ajax({
    //         url: BASE_URL + '/administrator/amuco_offers_sent_customers/validateShippingAndDestinationPort',
    //         type: 'POST',
    //         dataType: 'json',
    //         data: {data_offers, '<?php echo $this->security->get_csrf_token_name(); ?>':'<?php echo $this->security->get_csrf_hash(); ?>'},
            
    //       })
    //       .done(function(res) {
    //         result = res.success;
    //         console.log('result ajax', result);
    //       });

    //       return result;
    // }
    /********************************************************************************************************* */


    $('#btn_send_request').click(function(){
      // alert('asd');
      //  console.log(data_table);
        for(var send = 0 ; send < data_payments_table.length; send++){
          $('.loading').show();
          $.ajax({
            url: BASE_URL + '/administrator/amuco_offers_sent_customers/add_save',
            type: 'POST',
            dataType: 'json',
            data: data_payments_table[send],
            
          })
          .done(function(res) {
            console.log(res);
            
            if(res.success) {
              location.reload();   
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
                // $('.message').printMessage({message : res.message, type : 'warning'});
            }
        
          })
          .fail(function() {
            $('.message').printMessage({message : 'Error save data', type : 'warning'});
          })
          .always(function() {
            $('.loading').hide();
            //$('html, body').animate({ scrollTop: $(document).height() }, 2000);
          });
        }
       
        data_payments_table.length = 0;
       
      
        return false;
        
      });

      /************************************************************************************************ */  
    
    $.ajaxPrefilter(function(options, originalOptions, jqXHR){
          if (options['type'].toLowerCase() === "post") {
              console.log(options.data);
              options.data =  options.data + '&'+ y + '='+ x;
              //jqXHR.setRequestHeader('X-CSRFToken', csrf_token);
          }
    });
   
    $('#table_details_price').on('click', 'tbody td', function (e) {
      console.log($(this).attr('id'));
      console.log($(this).data('details_id'));
      console.log(table_price.rows(this.parentNode).data()[0]['id']);
      if($(this).attr('id') == 'action'){
          id = table_price.rows(this.parentNode).data()[0]['id'];
          details_id = $(this).data('details_id');
          $('.loading').show();
          $.ajax({
            url: BASE_URL + '/administrator/amuco_details_customers_request/return_request_office/'+id,
            type: 'POST',
            dataType: 'json',
            data: { 'details_id': details_id},
            
          })
          .done(function(res) {
            console.log(res);
            
            if(res.success) {
              //location.reload();   
              alert(res.success)
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
                // $('.message').printMessage({message : res.message, type : 'warning'});
            }
        
          })
          .fail(function() {
            $('.message').printMessage({message : 'Error save data', type : 'warning'});
          })
          .always(function() {
            $('.loading').hide();
            //$('html, body').animate({ scrollTop: $(document).height() }, 2000);
          });
      }
      
      if(table_price.rows(this.parentNode).data()[0]['id'] != null ){
        $('#current_id_price').val(table_price.rows(this.parentNode).data()[0]['id']);
      }else{
        current_id_price_details = "";
      }
    }); 
    if( $('#table_details_price').find('tbody tr td').length > 1){
     /* $('#table_details_price').Tabledit({
            deleteButton: false,
            editButton: false,          
            columns: {
              identifier:[41, 'id'],                    
              editable:[ [3, 'quantity'],[4,'unit', JSON.stringify(obj_units)],[6,'fcl'],[7,'fcl_option'],
              [8,'type_fcl',JSON.stringify(obj_type_fcl)],[9,'weight'],[10,'unit_pack',JSON.stringify(obj_units)],
              [12,'material',JSON.stringify(obj_material)],[14,'shape',JSON.stringify(obj_packing)],
              [16,'pallets',JSON.stringify({"0":"Without Pallets","1":"With Pallets"})],[17,'price_fob'],[18,'total_freight'],[19,'total_price'],
              [20,'shipping_port',JSON.stringify(obj_sp)],[25,'manufacturer',JSON.stringify(obj_suppliers)],
              [27,'supplier_incoterm',JSON.stringify(obj_incoterm)], [29,'payment_terms',JSON.stringify(obj_payments)],
              [31,'incoterm_price',JSON.stringify(obj_incoterm)],[33,'destination_port',JSON.stringify(obj_sp)],
              [35,'ETD'],[36,'analysis_standard'],[37,'valid_until'],[38,'comments']
        
              ]
            },
            hideIdentifier: false,
            url: BASE_URL + '/administrator/amuco_details_request_office/edit_save_table/'+table_price.rows(this.parentNode).data()[0]['id'],  
            onSuccess:function(data, textStatus, jqXHR)
            {
              console.log(data);
              console.log(textStatus);
              console.log(jqXHR);
            },
            onAjax: function(action, serialize) {
              console.log('onAjax(action, serialize)');
                console.log(action);
                serialize.new ="hh";
              console.log(serialize);
              serialize = serialize + '&'+ y + '='+ x;
              console.log(serialize);
            },
        }); */
    }
  /*****************EDIT CALCULATOR************************************************************************ */
 

    
 /*********************************************************************************************************** */    
      $('.btn-pallets').click(function(){
        if( $('.btn-pallets').prop('checked') ) {
          $('.btn-pallets').val(1);
        }else{
          $('.btn-pallets').val(0);
        }
      });
 /************************************************************************************************************ */     
      $('#pallets_edit').click(function(){
        if( $('#pallets_edit').prop('checked') ) {
          $('#pallets_edit').val(1);
        }else{
          $('#pallets_edit').val(0);
        }
      });
/************************************************************************************************************ */
      $('.btn-edit').click(function(){
        $('#cutomer_details_id').val($(this).data('id'));
       /// $('#product_id').val($(this).data('product_id_edit'));
      ///  $("#product_edit option[value='"+ $(this).data('product_id_edit') +"']").attr("selected",true);
        $("#product_edit").val( $(this).data('product_id_edit')).trigger("change"); 
        $('#product_edit option').trigger('chosen:updated');
        //$('#product_name').val($(this).data('product_name'));
        $('#quantity_edit').val($(this).data('quantity'));
      ///  $("#unit option[value='"+ $(this).data('unit_id') +"']").attr("selected",true);
        $("#unit_edit").val( $(this).data('unit_id')).trigger("change"); 
        $('#unit_edit option').trigger('chosen:updated');
        $('#fcl_edit').val($(this).data('fcl'));
       // $('#fcl_option_edit').val($(this).data('fcl_option'));
        if($(this).data('fcl_option') == 20){
          $('#fcl_option_edit').prop('checked',true);
          $('.fcl_option_1').find('.iradio_minimal-red').addClass('checked');
          
        }else{
            if($(this).data('fcl_option') == 40){
              $('#fcl_option_edit_2').prop('checked',true);
              $('.fcl_option_2').find('.iradio_minimal-red').addClass('checked');
            }
        }
       /// $("#type_fcl option[value='"+ $(this).data('fcl_type').toString()+"']").attr("selected",true);
        $("#type_fcl_edit").val( $(this).data('fcl_type')).trigger("change"); 
        $('#type_fcl_edit option').trigger('chosen:updated');
        $('#weight_edit').val($(this).data('weight_edit'));
     ///   $("#unit_pack_edit option[value='"+ $(this).data('unit_pack') +"']").attr("selected",true);
        $("#unit_pack_edit").val( $(this).data('unit_pack')).trigger("change"); 
        $('#unit_pack_edit option').trigger('chosen:updated');
        ///$("#packing_edit option[value='"+ $(this).data('packing') +"']").attr("selected",true);
        $("#packing_edit").val( $(this).data('packing')).trigger("change"); 
        $('#packing_edit option').trigger('chosen:updated');
       /// $("#material_edit option[value='"+ $(this).data('material') +"']").attr("selected",true);
        $("#material_edit").val( $(this).data('material')).trigger("change"); 
        $('#material_edit option').trigger('chosen:updated');
        if($(this).data('pallets') == 1){
          $('#pallets_edit').val(1);
          $('#pallets_edit').prop( "checked", true); 
          $('.pallets').find('.icheckbox_minimal-red').addClass('checked'); 
        }else{
          $('#pallets_edit').val(0);
          $('#pallets_edit').prop( "checked", false); 
        }
        $('#specific_remarks_edit').val($(this).data('remarks'));
        $('#etd_edit').val($(this).data('etd'));
        $('#eta_edit').val($(this).data('eta'));
       /// $("#supplier option[value='"+ $(this).data('supplier') +"']").attr("selected",true);
        $("#supplier_edit").val( $(this).data('supplier')).trigger("change"); 
        $('#supplier_edit option').trigger('chosen:updated');
        ///$("#contact_supplier_edit option[value='"+ $(this).data('contacts') +"']").attr("selected",true);
        $("#contact_supplier_edit").val( $(this).data('contacts')).trigger("change"); 
        $('#contact_supplier_edit option').trigger('chosen:updated');
        if($(this).data('supplier') != "" && $(this).data('supplier') != null ){
          var ids  =  $(this).data('contacts_ids').toString();
          var ids_contacts;
          if($(this).data('contacts_ids') != ""){
             ids_contacts = ids.split(",");
          }
          console.log(ids_contacts);
          $.ajax({
              url: BASE_URL + '/administrator/amuco_contacts/get_data_by_client?id='+ $(this).data('supplier'),
              type: 'GET',
              dataType: 'json',   
          })
          .done(function(response) {
              console.log(response);
              if(response.success) {
                      
                      $.each(response.contacts, function(id, value) {
                          if(ids_contacts.find(element => element == value.id)){
                            $('#contact_supplier_edit').append('<option selected value="'+value.id+'">'+value.name+'</option>');
                          }else{
                            console.log(value.id+"-"+value.name);
                            $('#contact_supplier_edit').append('<option value="'+value.id+'">'+value.name+'</option>');
                          }
                          
                      });
                      $("#contact_supplier_edit").trigger("chosen:updated");
                  
              }else{
                 console.log("Error No data");
                 $('.message6').printMessage({message : 'Error search data', type : 'warning'});
              }

              
          })
          .fail(function() {
              $('.message6').printMessage({message : 'Error save data', type : 'warning'});
          })
          .always(function() {
              $('.loading').hide();
              
          });
        }
      ///  $("#purchasing option[value='"+ $(this).data('purchasing') +"']").attr("selected",true);
        $("#purchasing_edit").val( $(this).data('purchasing')).trigger("change"); 
        $('#purchasing_edit option').trigger('chosen:updated');
        $('#modal-edit-product').modal('show');
      });
/******************************************************************************************************************* */
      $('.btn-copy').click(function(){
        
       /* $("#product_id_add option[value='"+ $(this).data('product_id_add') +"']").attr("selected",true);
        $('#product_id_add option').trigger('chosen:updated');*/
        $("#product_id_add").val( $(this).data('product_id_add')).trigger("change"); 
        $('#product_id_add option').trigger('chosen:updated');
        //$('#product_id').val($(this).data('product_id'));
        $('#product_name').val($(this).data('product_name'));
        $('#quantity').val($(this).data('quantity'));
       // $('#unit').val($(this).data('unit'));
       /* $("#unit option[value='"+ $(this).data('unit_id') +"']").attr("selected",true);
        $('#unit option').trigger('chosen:updated');*/
        $("#unit_copy").val( $(this).data('unit_id')).trigger("change"); 
        $('#unit_copy option').trigger('chosen:updated');
        $('#fcl').val($(this).data('fcl'));
        $('#fcl_option').val($(this).data('fcl_option'));
        if($(this).data('fcl_option') == 20){
          $('#fcl_option_add').prop('checked',true);
          $('.fcl_option_1').find('.iradio_minimal-red').addClass('checked');
          
        }else{
            if($(this).data('fcl_option') == 40){
              $('#fcl_option_add_2').prop('checked',true);
              $('.fcl_option_2').find('.iradio_minimal-red').addClass('checked');
            }
        }
       /// $("#type_fcl_copy option[value='"+ $(this).data('fcl_type').toString()+"']").attr("selected",true);
        $("#type_fcl_copy").val( $(this).data('fcl_type')).trigger("change"); 
        $('#type_fcl_copy option').trigger('chosen:updated');
        $('#weight').val($(this).data('weight'));
        ///$("#unit_pack_copy option[value='"+ $(this).data('unit_pack') +"']").attr("selected",true);
        $("#unit_pack_copy").val( $(this).data('unit_pack')).trigger("change"); 
        $('#unit_pack_copy option').trigger('chosen:updated');
      ///  $("#packing option[value='"+ $(this).data('packing') +"']").attr("selected",true);
        $("#packing_copy").val( $(this).data('packing')).trigger("change"); 
        $('#packing_copy option').trigger('chosen:updated');
      /// $("#material_copy option[value='"+ $(this).data('material') +"']").attr("selected",true);
        $("#material_copy").val( $(this).data('material')).trigger("change"); 
        $('#material_copy option').trigger('chosen:updated');
        if($(this).data('pallets') == 1){
          $('#pallets').val(1);
          $('#pallets').prop( "checked", true); 
          $('.pallets').find('.icheckbox_minimal-red').addClass('checked'); 
        }else{
          $('#pallets').val(0);
          $('#pallets').prop( "checked", false); 
        }
        $('#specific_remarks_2').val($(this).data('remarks'));
        $('#etd').val($(this).data('etd').toString());
        $('#eta').val($(this).data('eta').toString());
        $('#modal-add-product').modal('show');
      });

/******************************************************************************************************** */
      $('#purchasing').change(function(){
        if($(this).val() == ""){
           $('#btn_add_office').prop('disabled',true) ;
        }else{
          $('#btn_add_office').prop('disabled',false) ;
        }   
      });
  /******************************************************************************************************** */    
      $('.close_modal').click(function(){
        document.getElementById("form_amuco_details_customers_request_add").reset();
        document.getElementById("form_amuco_details_customers_request_edit").reset();
        data_table.length = 0;

         $('#modal-add-product').modal('hide');
      });
   /**************************************************************************************************** */   
      $('#btn_edit_product').click(function(){
 
        var form_details_amuco_request_edit = $('#form_amuco_details_customers_request_edit');
        var data_post = form_details_amuco_request_edit.serializeArray();
        var save_type = $(this).attr('data-stype');
        data_post.push({name: 'save_type', value: save_type});
    
        $('.loading').show();
    
        $.ajax({
          url: BASE_URL + 'administrator/amuco_details_customers_request/edit_save/'+ $('#cutomer_details_id').val(),
          type: 'POST',
          dataType: 'json',
          data: data_post,
        })
        .done(function(res) {
          $('form').find('.form-group').removeClass('has-error');
          $('form').find('.error-input').remove();
          $('.steps li').removeClass('error');
          if(res.success) {
            var id = $('#amuco_customer_request_image_galery').find('li').attr('qq-file-id');
            location.reload();
           
            $('.message1').printMessage({message : res.message});
            $('.message1').fadeIn();
            $('.data_file_uuid').val('');
    
          } else {
            if (res.errors) {
               parseErrorField(res.errors);
            }
            $('.message').printMessage({message : res.message, type : 'warning'});
          }
    
        })
        .fail(function() {
          $('.message').printMessage({message : 'Error save data', type : 'warning'});
        })
        .always(function() {
          $('.loading').hide();
          $('#modal-edit-request').modal('hide');
        });
    
        return false;
      });
/************************************************************************************************************* */

      $('#btn_edit_request').click(function(){
        var form_amuco_request_edit = $('#form_amuco_request_edit');
        var data_post = form_amuco_request_edit.serializeArray();
        var save_type = $(this).attr('data-stype');
        data_post.push({name: 'save_type', value: save_type});
    
        $('.loading').show();
    
        $.ajax({
          url: BASE_URL + '/administrator/amuco_customer_request/edit_save/'+$('#request_id').val(),
          type: 'POST',
          dataType: 'json',
          data: data_post,
        })
        .done(function(res) {
          $('form').find('.form-group').removeClass('has-error');
          $('form').find('.error-input').remove();
          $('.steps li').removeClass('error');
          if(res.success) {
            var id = $('#amuco_customer_request_image_galery').find('li').attr('qq-file-id');
            location.reload();
           
            $('.message1').printMessage({message : res.message});
            $('.message1').fadeIn();
            $('.data_file_uuid').val('');
    
          } else {
            if (res.errors) {
               parseErrorField(res.errors);
            }
            $('.message').printMessage({message : res.message, type : 'warning'});
          }
    
        })
        .fail(function() {
          $('.message').printMessage({message : 'Error save data', type : 'warning'});
        })
        .always(function() {
          $('.loading').hide();
          $('#modal-edit-request').modal('hide');
        });
    
        return false;
      });

   /************************************************************************************************************ */
      $('#btn_new_product').click(function(){
      //  console.log(data_table);
        for(var send = 0 ; send < data_table.length; send++){
          $('.loading').show();
          $.ajax({
            url: BASE_URL + '/administrator/amuco_details_customers_request/add_save',
            type: 'POST',
            dataType: 'json',
            data: data_table[send],
          })
          .done(function(res) {
            console.log(res);
            
            if(res.success) {
              $('#tr_message_empty').hide();
              $("#purchasing").prop('selectedIndex', -1);
              $('#supplier').prop('selectedIndex', -1);
              $("#contact_supplier").empty();
              $('#supplier').trigger('chosen:updated');
              $('#contact_supplier').trigger('chosen:updated');
              $('#purchasing').trigger('chosen:updated');
              $("#tbody_amuco_details_customers_request tr").remove(); 
              $('#modal-add-product').modal('hide'); 
              location.reload();   
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
                // $('.message').printMessage({message : res.message, type : 'warning'});
            }
        
          })
          .fail(function() {
            $('.message').printMessage({message : 'Error save data', type : 'warning'});
          })
          .always(function() {
            $('.loading').hide();
            //$('html, body').animate({ scrollTop: $(document).height() }, 2000);
          });
        }
        document.getElementById("form_amuco_details_customers_request_add").reset();
        data_table.length = 0;
        $('.chosen option').prop('selected', false).trigger('chosen:updated');
        $('form_amuco_details_customers_request_add').trigger("reset");
      
        return false;
        
      });

      /**************************************************************************************************** */
      $('#product_id_add').change(function(){
        if($(this).val() == ""){
          $("#view_product").addClass('disabled');
        }else{
          $("#view_product").attr('href',  BASE_URL +'administrator/amuco_products/view/'+$(this).val()+'?popup=show'); 
          $("#view_product").removeClass('disabled');
        }
      });
      $('.supplier_click').change(function(){

          let id= $(this).val();
          $('#supplier').val(id);
          $('#contact_supplier').find('option').remove();   
          $("#contact_supplier").trigger("chosen:updated");
          $('#contact_supplier_edit').find('option').remove();   
          $("#contact_supplier_edit").trigger("chosen:updated");
         // $('.csup.chosen option').prop('selected', true).trigger('chosen:remove');   
         
          if($(this).val() == ""){
            $("#view_supplier").addClass('disabled');
            $("#btn_add_contact_supplier").addClass('disabled');
            $('#btn_add_supplier').prop('disabled',true) ;
          }else{
            $('#btn_add_supplier').prop('disabled',false) ;
            $("#view_supplier").attr('href',  BASE_URL +'administrator/amuco_suppliers/view/'+$(this).val()+'?popup=show');  
            $("#view_supplier").removeClass('disabled');
            $("#btn_add_contact_supplier").removeClass('disabled');
          }
          $.ajax({
              url: BASE_URL + '/administrator/amuco_contacts/get_data_by_client?id='+id,
              type: 'GET',
              dataType: 'json',   
          })
          .done(function(response) {
              console.log(response);
              if(response.success) {
                      
                      $.each(response.contacts, function(id, value) {
                      
                          $('#contact_supplier').append('<option value="'+value.id+'">'+value.name+'</option>');
                          $('#contact_supplier_edit').append('<option value="'+value.id+'">'+value.name+'</option>');
                      });
                      $("#contact_supplier").trigger("chosen:updated");
                      $("#contact_supplier_edit").trigger("chosen:updated");
                  
              }else{
                 console.log("Error No data");
                 $('.message6').printMessage({message : 'Error search data', type : 'warning'});
              }

              
          })
          .fail(function() {
              $('.message6').printMessage({message : 'Error save data', type : 'warning'});
          })
          .always(function() {
              $('.loading').hide();
          });

         
      }); /*end btn save*/
    $('#btn_save_pack').click(function(){
        $('.message5').fadeOut();
            
        var form_amuco_packing = $('#form_amuco_packing');
        var data_post = form_amuco_packing.serializeArray();
        var save_type = $(this).attr('data-stype');

        data_post.push({name: 'save_type', value: save_type});
    
        $('.loading').show();
    
        $.ajax({
          url: BASE_URL + '/administrator/amuco_packing/add_save',
          type: 'POST',
          dataType: 'json',
          data: data_post,
        })
        .done(function(res) {
         
          $('#form_amuco_pack').trigger("reset");
          $('#modal-add-pack').modal('hide');
          if(res.success) {
            
            console.log(res);
            $('#pack').append($('<option>', {value: res.id, text:res.name}));
                        //$('#destination_port').style('display','block');
            $('#pack option').prop('selected', true).trigger('chosen:updated');
    
            $('.message5').printMessage({message : res.message});
            $('.message5').fadeIn();
            resetForm();
                
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
            $('.message5').printMessage({message : res.message, type : 'warning'});
          }
    
        })
        .fail(function() {
          $('.message5').printMessage({message : 'Error save data', type : 'warning'});
        })
        .always(function() {
          $('.loading').hide();
        });
    
        return false;
      }); /*end btn save*/
    $('#btn_save_material').click(function(){
        $('.message').fadeOut();
     // console.log("aqui: "+$('#modal-add-product').is(':visible'));
        var form_amuco_material = $('#form_amuco_material');
        var data_post = form_amuco_material.serializeArray();
        var save_type = $(this).attr('data-stype');

        data_post.push({name: 'save_type', value: save_type});
    
        $('.loading').show();
    
        $.ajax({
          url: BASE_URL + '/administrator/amuco_material/add_save',
          type: 'POST',
          dataType: 'json',
          data: data_post,
        })
        .done(function(res) {
          $('#form_amuco_material').trigger("reset");
          $('#modal-add-material').modal('hide');
          if(res.success) {
            console.log(res);
            $('#material').append($('<option>', {value: res.id, text:res.name}));
                        //$('#destination_port').style('display','block');
            $('#material option').prop('selected', true).trigger('chosen:updated');
            $('.message4').printMessage({message : res.message});
            $('.message4').fadeIn();
            resetForm();
                
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
            $('.message4').printMessage({message : res.message, type : 'warning'});
          }
    
        })
        .fail(function() {
          $('.message4').printMessage({message : 'Error save data', type : 'warning'});
        })
        .always(function() {
          $('.loading').hide();
          
        });
       
        if($('#modal-add-product').is(':visible')){
           
            $('#modal-add-product').modal({show:true});
          }
        return false;
      }); /*end btn save*/

      //----------------------------------------------------------------------
     
      $('#fcl').keyup(function(){
        
        if($(this).val() > 0){
          $('#fcl_option_add').prop('checked',true);
          $('.fcl_option_1').find('.iradio_minimal-red').addClass('checked');
          $('.fcl_option_2').find('.iradio_minimal-red').removeClass('checked');
        }
      });

     

      $('#customer').change(function(){
            $('.message').fadeOut();
         
            let id= $(this).val();
            $('#customer_id').val(id);
            $('#contact').find('option').remove();
            $('#div_contact').css("display","block");
            var contacts = $("#contact");          
            var form_amuco_customer_request = $('#form_amuco_customer_request');
            var data_post = form_amuco_customer_request.serializeArray();
            var save_type = $(this).attr('data-stype');
            $("#view_custo").attr('href',  BASE_URL +'administrator/amuco_customers/view/'+$(this).val()+'?popup=show');
         
            data_post.push({name: 'save_type', value: save_type});
            data_post.push({name: 'customer', value: id});
            data_post.push({name:'<?php echo $this->security->get_csrf_token_name(); ?>',value:'<?php echo $this->security->get_csrf_hash(); ?>'});
             
            console.log(data_post);
            $('.loading').show();
        
            $.ajax({
            url: BASE_URL + '/administrator/amuco_customer_request/get_contact_by_id',
            type: 'POST',
            dataType: 'json',
            data: data_post,
            })
            .done(function(res) {
                console.log(res.customer_contact);
                $('form').find('.form-group').removeClass('has-error');
                $('.steps li').removeClass('error');
                $('form').find('.error-input').remove();
                if(res.success) {
                      
                        $.each(res.customer_contact, function(id, value) {
                        
                            $('#contact').append('<option value="'+value.id+'">'+value.name+'</option>');
                        });
                        $('#contact').trigger('chosen:updated');
                    
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
              
                });
        
            return false;
        }); /*end btn save*/

      $('#btn_save_contact').click(function(){
            $('.message').fadeOut();
            alert("aqui");
            var form_amuco_add = $('#form_amuco_add_contact');
            var data_post = form_amuco_add.serializeArray();
            var save_type = $(this).attr('data-stype');
            var supplier_contact = $('#supplier').val();
            data_post.push({name: 'save_type', value: save_type});
            if($('#type_contact').val() == "Supplier"){
              data_post.push({name: 'supplier_id', value: supplier_contact});
            }
            
            $('.loading').show();
            
            $.ajax({
                url: BASE_URL + '/administrator/amuco_contacts/add_save',
                type: 'POST',
                dataType: 'json',
                data: data_post,
            })
            .done(function(res) {
                $('form').find('.form-group').removeClass('has-error');
                $('.steps li').removeClass('error');
                $('form').find('.error-input').remove();
                if(res.success) {
                    console.log(res);
                    $('#form_amuco_add_contact').trigger("reset");
                    $('#modal-add-contact').modal('hide');
                    $.ajax({
                        url: BASE_URL + '/administrator/amuco_contacts/get_data_by_id?id='+res.id,
                        type: 'GET',
                        dataType: 'json',   
                    })
                    .done(function(response) {
                        console.log(response);
                        if(response.type_contact == "Supplier"){
                          console.log("entro");
                          $('#contact_supplier').append($('<option>', {value: response.id, text:response.name}));
                          $("#contact_supplier").trigger("chosen:updated");
                        } 
                        if(response.type_contact == "Customer"){
                          console.log("entro");
                        //  $('#contact').append('<option value="'+value.id+'">'+value.name+'</option>');
                          $('#contact').append($('<option>', {value: response.id, text:response.name}));
                         $('#contact option').prop('selected', true).trigger('chosen:updated');
                        }  
                        if(response.type_contact == "Representative"){
                        
                          $('#representative').append($('<option>', {value: response.id, text:response.name}));
                         $('#representative option').prop('selected', true).trigger('chosen:updated');
                        }  
                    })
                    .fail(function() {
                        $('.message').printMessage({message : 'Error save data', type : 'warning'});
                    })
                    .always(function() {
                        $('.loading').hide();
                        $('html, body').animate({ scrollTop: $(document).height() }, 2000);
                    });
                    
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
                
            });
        
            return false;
        }); /*end btn save*/
      
       

        $('#btn_save_port').click(function(){
            $('.message').fadeOut();
    
            var form_amuco_port_new = $('#form_amuco_destination_port');
            var data_post = form_amuco_port_new.serializeArray();
            var save_type = $(this).attr('data-stype');

            data_post.push({name: 'save_type', value: save_type});
           // console.log(data_post);
            $('.loading').show();
        
            $.ajax({
            url: BASE_URL + '/administrator/amuco_destination_port/add_save',
            type: 'POST',
            dataType: 'json',
            data: data_post,
            })
            .done(function(res) {
            console.log(res);
            $('form').find('.form-group').removeClass('has-error');
            $('.steps li').removeClass('error');
            $('form').find('.error-input').remove();
            if(res.success) {
                $('#modal-add-port').modal('hide');
                $('.message').printMessage({message : res.message});
                $('.message').fadeIn();
                resetForm();
            
            
                $.ajax({
                    url: BASE_URL + '/administrator/amuco_destination_port/get_data_by_id?id='+res.id,
                    type: 'GET',
                    dataType: 'json',   
                })
                .done(function(response) {
                    console.log(response);
                
                    $('#destination_port').append($('<option>', {value: response.id, text:response.name}));
                    //$('#destination_port').style('display','block');
                    $('.chosen option').prop('selected', true).trigger('chosen:updated');

                    
                })
                .fail(function() {
                    $('.message').printMessage({message : 'Error save data', type : 'warning'});
                })
                .always(function() {
                    $('.loading').hide();
                    $('html, body').animate({ scrollTop: $(document).height() }, 2000);
                });
                    
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
        });


      $('#btn_cancel').click(function(){
        swal({
            title: "Are you sure?",
            text: "The data will be lost!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Yes!",
            cancelButtonText: "No!",
            closeOnConfirm: true,
            closeOnCancel: true
          },
          function(isConfirm){
            if (isConfirm) {
              window.location.href = BASE_URL + 'administrator/amuco_customer_request';
            }
          });
    
        return false;
      }); /*end btn cancel*/
    
      $('.btn_save_product').click(function(){
        var type = "";
        var recipients = "";
        var id = "";
        var name_product = "";
        if($('#product_id_add').val() == ""){
          $('.message_product').printMessage({message : 'Product is Required', type : 'warning'});
        
        }else{
          
          name_product = $("#product_id_add option:selected").text();
          prod_id =   $('#product_id_add').val();
          if($(this).data('action') == 'suppliers'){
            var form_amuco_details_customers_request_add = $('#form_amuco_details_customers_request_add');
            //console.log(form_amuco_details_customers_request_add);
            
            var data = form_amuco_details_customers_request_add.serializeArray();
          //  data.push({name: 'tr', value: item});
            data.tr = item;
            data_table.push(data);
           console.log(data);
            $("#purchasing").prop('selectedIndex', -1);
            $('#purchasing').trigger('chosen:updated');
            type = 'Supplier';
            recipients = $('#supplier option:selected').text();
            supplier_id = $('#supplier').val();
            var htmlTags2 = '<tr id= " tr_'+ item +'" >'+
            '<td>' +  type + '</td>'+
            '<td>' +  recipients + '</td>'+
            '<td>' +  name_product + '</td>'+
            '<td  width="200">'+
                '<a onclick="delete_item_product(this,'+ item +')"  id="delete_product_' + item + '" href="#"  class="label-default delete_product"><i class="fa fa-close"></i> Delete</a>'+
                '</i></td></tr>';    
            $('#tabla_modal tbody').append(htmlTags2);
            item++; 
          }else{
            var form_amuco_details_customers_request_add = $('#form_amuco_details_customers_request_add');
            //console.log(form_amuco_details_customers_request_add);
            
            var data = form_amuco_details_customers_request_add.serializeArray();
            
            $('#supplier').prop('selectedIndex', -1);
            $("#contact_supplier").empty();
            $('#supplier').trigger('chosen:updated');
            $('#contact_supplier').trigger('chosen:updated');
            type = 'Office';
            $('#purchasing').children(':selected').each((idx, el) => {
              var data_2 = form_amuco_details_customers_request_add.serializeArray();
             // data_2.push({name: 'tr', value: item});
             data_2.tr = item;
              var htmlTags2 = '<tr id= " tr_'+ item +'" >'+
                '<td>' +  type + '</td>'+
                '<td>' +  el.text + '</td>'+
                '<td>' +  name_product + '</td>'+
                '<td  width="200">'+
                    '<a onclick="delete_item_product(this,'+ item +')"  id="delete_product_' + item + '" href="#"  class="label-default delete_product"><i class="fa fa-close"></i> Delete</a>'+
                    '</i></td></tr>';    
                //console.log("size "+data.length);
               
                for(var j= 0;j< data_2.length;j++){
                //  console.log(data[j].name);
                  if(data_2[j].name == "purchasing[]" && data_2[j].value != el.value){
                    data_2.splice(j,1);
                  }
                }
                data_table.push(data_2);
                $('#tabla_modal tbody').append(htmlTags2);
                item++; 
            });
           // console.log( data_table);
           
          }
          $('#btn_add_supplier').prop('disabled',true) ;
          $('#btn_add_office').prop('disabled',true) ;
          $('.message').fadeOut();
         
          $("#purchasing").prop('selectedIndex', -1);
          $('#supplier').prop('selectedIndex', -1);
          $("#contact_supplier").empty();
          $('#supplier').trigger('chosen:updated');
          $('#contact_supplier').trigger('chosen:updated');
          $('#purchasing').trigger('chosen:updated');           
          if(data_table.length > 0){
            $('#btn_new_product').prop('disabled',false) ;
          }
          return false;
        }
        
      }); /*end btn save*/
    
      $('#btn_save').click(function(){
        $('.message').fadeOut(); 
        var form_amuco_customer_request = $('#form_amuco_customer_request');
        var data_post = form_amuco_customer_request.serializeArray();
        var save_type = $(this).attr('data-stype');
        data_post.push({name: 'save_type', value: save_type});
    
        $('.loading').show();
    
        $.ajax({
          url: form_amuco_customer_request.attr('action'),
          type: 'POST',
          dataType: 'json',
          data: data_post,
        })
        .done(function(res) {
          $('form').find('.form-group').removeClass('has-error');
          $('form').find('.error-input').remove();
          $('.steps li').removeClass('error');
          if(res.success) {
            var id = $('#amuco_customer_request_image_galery').find('li').attr('qq-file-id');
            if (save_type == 'back') {
              window.location.href = res.redirect;
              return;
            }
    
            $('.message1').printMessage({message : res.message});
            $('.message1').fadeIn();
            $('.data_file_uuid').val('');
    
          } else {
            if (res.errors) {
               parseErrorField(res.errors);
            }
            $('.message1').printMessage({message : res.message, type : 'warning'});
          }
    
        })
        .fail(function() {
          $('.message1').printMessage({message : 'Error save data', type : 'warning'});
        })
        .always(function() {
          $('.loading').hide();
          //$('html, body').animate({ scrollTop: $(document).height() }, 2000);
        });
    
        return false;
      }); /*end btn save*/


      $('.btn_save_request').click(function(){
        let id = $('#customer_request_id').val();
        $.ajax({
            url: BASE_URL + '/administrator/amuco_customer_request/end_customer_request?id='+id,
            type: 'GET',
            dataType: 'json',   
        })
        .done(function(response) {

              _message = response.message

              items_notifications(id, response.message)
          
        })
        .fail(function() {
            $('.message').printMessage({message : 'Error save data', type : 'warning'});
        })
        .always(function() {
            $('.loading').hide();
            //$('html, body').animate({ scrollTop: $(document).height() }, 2000);
        });
      });
    
      $('.remove-data').click(function(){
        var url = $(this).attr('data-href');

        swal({
            title: "<?= cclang('are_you_sure'); ?>",
            text: "<?= cclang('data_to_be_deleted_can_not_be_restored'); ?>",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "<?= cclang('yes_delete_it'); ?>",
            cancelButtonText: "<?= cclang('no_cancel_plx'); ?>",
            closeOnConfirm: true,
            closeOnCancel: true
        },
        function(isConfirm){
            if (isConfirm) {
            document.location.href = url;            
            }
        });

        return false;
      });

      async function chain(){
      }
       
      chain();

      $('#btn_send_email').click(function(){

        $('.message_top').fadeOut();
        var markup = jQuery('.editor').summernote('code');
        $('.editor').val(markup);

        if(validar_modal_email()){
            _cadena = $("#arr_details_items").val()

            $.ajax({
              url: BASE_URL + 'administrator/amuco_details_customers_request/send_email',
              type: 'post',
              dataType: 'json',
              data: {'id_customer' : $("#customer_request_id").val(), ' arr_details': _items,
                 recipients: $("#email_request").val(),
                 subject: $("#subject").val(),
                 email_text :  $("#email_text").val()
               }
            })
            .success(function(res) {
               _items=[]
               
              if(res.success) {

                mostrar_modal(contact_response[count_contact],_customer_request)
                
              } else {
                if (res.errors) {
                  $('.message_top').printMessage({message : res.message, type : 'warning'});
                }
              }
             
            });

        }
        //return false;
        
      });

        $('#cancel_send_email').click(function(){

        $('.message_top').fadeOut();
        var markup = jQuery('.editor').summernote('code');
        $('.editor').val(markup);

        _cadena = $("#arr_details_items").val()
 
        if( validar_modal_email()){

            $.ajax({
              url: BASE_URL + 'administrator/amuco_details_customers_request/cancel_send_email',
              type: 'post',
              dataType: 'json',
              data: {'id_customer' : $("#customer_request_id").val(), 'arr_details': _items,
                recipients: $("#email_request").val(),
                subject: $("#subject").val(),
                email_text :  $("#email_text").val() 
              }
            })
            .success(function(res) {
               _items=[]
              if(res.success) {
             
                mostrar_modal(contact_response[count_contact], _customer_request);

              } else {
                if (res.errors) {
                  $('.message_top').printMessage({message : res.message, type : 'warning'});
                }
              }
          
            });

        }
        
      });
    

      function validar_modal_email(){

          var email_request = $('#email_request').val();
          var subject = $('#subject').val();
          var email_text = $('#email_text').val();
    
          if ($(".all-mail > span").length  < 1) {
            $('#error_email').css('display', 'none')
            $('#error_email').css('display', 'block')
            
            return false
          }
          if (subject.length < 1) {
            $('.error_msg').remove()
            $('<span class="error error_msg">This field is required</span>').insertAfter('#subject');
            return false

          }

          if (email_text.length < 1) {
            $('.error_msg').remove()
            $('<span class="error error_msg">This field is required</span>').insertAfter('#email_text');
            return false

          }
          return true

     }


    
    jQuery('.editor').summernote({
            height: 300,                 // set editor height
            minHeight: null,             // set minimum height of editor
            maxHeight: null,             // set maximum height of editor
            focus: true, 
            width:840,                 // set focus to editable area after initializing summernote);
            disableResize: true, 
            disableResizeEditor: true         
        }); 
      


    }); /*end doc ready*/



</script>