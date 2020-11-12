

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


</style>
<section class="content-header">
    <h1>
       <br>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class=""><a  href="<?= site_url('administrator/amuco_dashboad_office'); ?>">Amuco Office Request</a></li>
        <li class="active">Edit</li>
    </ol>
</section>
<!-- Main content -->
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
                            <h3 class="widget-user-username">Amuco Office Request</h3>
                            <h5 class="widget-user-desc">Edit Amuco Office Request</h5>
                            <h3 class="widget-user-username"><?= 'ID: '.$amuco_customer_request->id ?></h3> 
                        </div>
                    </div> 
       
                    <div class="row">
                        <div class="col-md-12" >
                           <br>
                        </div>
                    </div>
                    <div class="row"> 
                        <div class="col-md-4" >                          
                            <label for="content" class="col-sm-4 label-right">Customer</label>
                            <div class="col-sm-8">
                                <p><?= $amuco_customer_request->amuco_customers_name.'  '.anchor('administrator/amuco_customers/view/'.$amuco_customer_request->customer.'?popup=show','<i style=" margin-top: 2.5%" class="fa fa-newspaper-o"></i>', ['class' => 'popup-view','id'=>'view_custo']); ?> </p>   
                            </div>
                        </div>
                        <div class="col-md-4" >                          
                            <label for="content" class="col-md-6 col-sm-4 label-right">Destination Port</label>
                            <div class="col-sm-6">
                                <p ><?= $amuco_customer_request->amuco_destination_port_name ?> </p> 
                            </div>
                        </div> 
                        <div class="col-md-4" >                          
                            <label for="content" class="col-sm-4 label-right">Contact</label>
                            <div class="col-sm-8">
                                <p><?= $amuco_customer_request->amuco_contacts_name ?> </p> 
                            </div>
                        </div>   
                    </div>
                    <div class="row"> 
                        <div class="col-md-4" >                          
                            <label for="content" class="col-sm-4 label-right">Sales Agent</label>
                            <div class="col-sm-8">
                                <p ><?= $amuco_customer_request->aauth_users_username ?> </p> 
                            </div>
                        </div>
                        <div class="col-md-4" >                          
                            <label for="content" class="col-md-6 col-sm-4 label-right">Combined Container</label>
                            <div class="col-sm-6"> 
                                <p ><?= $amuco_customer_request->combinate_container == 0 ? 'No' : 'Yes' ?> </p>
                            </div>
                        </div>
                        <div class="col-md-4" >                          
                            <label for="content" class="col-sm-4 label-right">Representative</label>
                            <div class="col-sm-8">
                                <p><?= $amuco_customer_request->amuco_representative_name ?> </p> 
                            </div>
                        </div>    
                    </div>
                    <div class="row"> 
                        <div class="col-md-4" >                          
                            <label for="content" class="col-sm-4 label-right">Incoterm</label>
                            <div class="col-sm-8">  
                                <p > <?= $amuco_customer_request->amuco_incoterm_name ?> </p> 
                            </div> 
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
                    <hr>
                    <!--div class="row">
                        <div class="col-md-12" >  
                            <button class="btn btn-flat btn-aux pull-right" id="btn_add_product" data-stype='stay' data-toggle="modal" data-target="#modal-add-product" title="<?= cclang('add_button'); ?>">
                            <i class="fa fa-plus" ></i> <?= cclang('Add Product'); ?>
                            </button>
              
                            <?php if($count_request_status_offer_received > 0):?>
                            <?php echo anchor('administrator/amuco_customer_request/compare_price/?id='.$amuco_customer_request->id.'&&popup=show','<i class="fa fa-exchange" ></i>  Compare', ['class' => 'popup-view btn btn-flat btn-aux pull-right']); ?> 
                            <?php endif; ?> 
                            <a <?php echo count($amuco_details_customers_requests) > 0 ? '' :'disabled' ;?> class="btn btn-flat btn-aux pull-right btn_save_request btn_action"  data-stype='china' title="<?= cclang('save_button'); ?>">
                            <i class="ion ion-ios-list-outline" ></i> <?= cclang('Request'); ?></a>
                            <a class="btn btn-flat btn-aux btn-default pull-right btn_action" id="btn_back" title="Back" href="<?= site_url('administrator/amuco_customer_request/'); ?>"><i class="fa fa-undo" ></i> <?= cclang('Back'); ?></a>          
                        </div>
                    </div-->
           
                    <br>
                    <div class="row">
                        <div class="col-md-12" > 
                            <form name="form_amuco_details_customers_request" id="form_amuco_details_customers_request" action="<?= base_url('administrator/amuco_details_customers_request/index'); ?>">
                                <div class="table-responsive"> 
                                    <table class="table table-bordered table-striped" id="table_products">
                                        <thead>
                                        <tr>
                                            <th data-field="product_id"data-sort="1" data-primary-key="0"> <?= cclang('Product') ?></th>
                                            <th data-field="office"data-sort="1" data-primary-key="0"> <?= cclang('Office') ?></th>
                                            <th data-field="status"data-sort="1" data-primary-key="0"> <?= cclang('status') ?></th>
                                            <th>Action</th>                          
                                        </tr>
                                        </thead>
                              
                                        <tbody id="tbody_amuco_details_customers_request">
                                            <?php foreach($amuco_details_customers_requests as $amuco_details_customers_request): ?>
                                            <tr>
                                                <td><?php if  ($amuco_details_customers_request->product_id) {
                                                    echo anchor('administrator/amuco_products/view/'.$amuco_details_customers_request->product_id.'?popup=show', $amuco_details_customers_request->amuco_products_name, ['class' => 'popup-view']); }?> </td>
                                                <td><?= _ent($amuco_details_customers_request->purchasing_username); ?></td>
                                                <td><?= _ent($amuco_details_customers_request->status); ?></td> 
                                                <td width="200">
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
                    </div><!--end row-->
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
                                            <th >Actions</th> 
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                            foreach($amuco_details_customers_requests as $items_details):
                                                foreach($items_details->details_price as $amuco_details_price): ?>
                                            <tr id="<?= $amuco_details_price->id?>" style="<?=  $amuco_details_price->status == 'Review' ? 'background-color:#E9967A' : ''?>">
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
                                                    <td>  <?php if($amuco_details_price->status == 'Review'): ?>
                                                        <?php echo '<i class="fa fa-newspaper-o"> '.anchor('administrator/amuco_details_request_office/view_edit_office/'.$amuco_details_price->id.'?popup=show', cclang('Edit Price'), ['class' => 'popup-view']); ?>
                                                        <?php endif; ?> </td>
                                                <?php  endforeach; endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </form>
                        </div> 
                    </div><!--endrow-->
                </div>  
            </div>
        </div>
    </div>
</section>  

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
<script src="<?= BASE_ASSET; ?>/js/jquery.tabledit.min.js"></script>

<script>

    $(document).ready(function() {
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
            { data: "actions"},
        ],
        columnDefs: [
        { className: "hide_column", "targets": [2,5,11,13,15,21,24,26,28,30,32,34,39,40,41 ] }
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
    });
</script>