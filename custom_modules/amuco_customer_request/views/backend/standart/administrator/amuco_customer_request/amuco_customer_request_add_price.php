
<script src="<?= BASE_ASSET; ?>/js/cleave.min.js"></script>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  
<style>
  
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

.btn-display{
  display:none;
}

</style>

<!--section class="content-header">
    <h1>
       <br>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class=""><a  href="<?= site_url('administrator/amuco_customer_request'); ?>">Amuco Customer Request</a></li>
        <li class="active">Add Price</li>
    </ol>
</section-->



<!-- ///////////////////////////////////////////////MODALS///////////-->
<section>
  <div class="row" >
    <div class="col-md-12">
      <div class="box box-warning">
        <div class="box-body">
          <div class="box box-widget widget-user-2">
            <div class="widget-user-header ">
              <div class="widget-user-image">
                <img class="img-circle" src="<?= BASE_ASSET; ?>/img/add2.png" alt="User Avatar">
              </div>
              <h3 class="widget-user-username">Amuco Customer Request</h3>
              <h5 class="widget-user-desc">Add Price</h5>misa
              <h3 class="widget-user-username"><?= 'ID: '.$amuco_customer_request->id ?></h3> 
            </div>
          </div> 
          
          
            <?= form_open('', [
              'name'    => 'form_amuco_details_price', 
              'class'   => 'form-horizontal form-step', 
              'id'      => 'form_amuco_details_price', 
              'enctype' => 'multipart/form-data', 
              'method'  => 'POST'
              ]); 
            ?>
            <div class="row"> 
              <div class="col-md-4" >                          
                  <label for="content" class="col-sm-4 label-right">Customer</label>
                  <div class="col-sm-8"><p><?= $amuco_customer_request->amuco_customers_name ?> </p> </div>
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
                  <label for="content" class="col-sm-4 label-right">Incoterm</label>
                  <div class="col-sm-8"><p > <?= $amuco_customer_request->amuco_incoterm_name ?> </p> </div> 
                  <input type="hidden" id="incoterm" value="<?= $amuco_customer_request->amuco_incoterm_name ?>">   
              </div>  
            </div>
            <div class="row"> 
              <div class="col-md-12" >                          
                  <label  for="content" class="col-md-1 col-sm-4 label-right">Remarks</label>
                  <div class="col-md-10 col-sm-8"><p><?= $amuco_customer_request->remarks ?> </p></div>  
              </div> 
            </div>
            <hr>
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
                  echo anchor('administrator/amuco_products/view/'.$amuco_details_customers_requests[0]->product_id.'?popup=show','<i  style=" margin-top: 1.7%" class="fa fa-newspaper-o"></i>', ['class' => 'popup-view','id'=>'view_product']); 
                    ?> 
                  <div class="col-sm-9">
                    <select  autofocus class="form-control chosen chosen-select-deselect" name="product_id" id="product_id_add" data-placeholder="Select Product Id" >
                      <option value=""></option>
                        <?php foreach (db_get_all_data('amuco_products') as $row): ?>
                      <option <?= $amuco_details_customers_requests[0]->product_id == $row->id ? 'selected' : '' ; ?>  value="<?= $row->id ?>"><?= $row->name; ?></option>
                          <?php endforeach; ?>  
                    </select>
                    <input  type="hidden" class="form-control" name="customer_request_id" id="customer_request_id"  value="<?= $amuco_details_customers_requests[0]->customer_request_id; ?>">
                    <input  type="hidden" class="form-control" name="details_customer_request_id" id="details_customer_request_id"  value="<?= $amuco_details_customers_requests[0]->id; ?>">
                    <!--input  type="hidden" class="form-control" name="product_id" id="product_id"  value="<?= $amuco_details_customers_requests[0]->product_id; ?>">
                    <input  readonly type="text" class="form-control" name="product_name" id="product_name" value="<?= $amuco_details_customers_requests[0]->amuco_products_name; ?>"-->
                    <input  type="hidden" class="form-control" name="id_price" id="edit_price"  value="" >
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
                    <input  type="text" class="form-control" name="quantity" id="quantity_price" placeholder="Quantity" value="<?= $amuco_details_customers_requests[0]->quantity; ?>">
                  </div>
                </div>
              </div>
              <div class="col-md-4" >                                        
                <div class="form-group ">
                  <label for="unit" class="col-sm-3 control-label label-right">Unit </label>
                  <div class="col-sm-6">
                    <select  class="form-control chosen chosen-select-deselect" name="unit" id="unit" data-placeholder="Select Unit" >
                        <option value=""></option>
                        <?php foreach (db_get_all_data('amuco_unit_types') as $row): ?>
                        <option  <?= $amuco_details_customers_requests[0]->unit == $row->id ? 'selected' : '' ?> value="<?= $row->id ?>"><?= $row->name; ?></option>
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
                    <input  type="number" class="form-control" name="fcl" id="fcl" placeholder="Fcl" value="<?= set_value('fcl',$amuco_details_customers_requests[0]->fcl); ?>">
                  </div>
                </div>
              </div> 
              <div class="col-md-4 col-sm-4" > 
                <div class="form-group ">
                  <div class="row">
                    <label for="fcl" class="col-sm-3"> </label>
                    <div class="col-md-3  fcl_option_1">
                        <label id="fcl_option_1">
                            <input type="radio"   <?= $amuco_details_customers_requests[0]->fcl_option == 20 ? 'checked':'' ?> name="fcl_option" id="fcl_option_1"  value="20" >
                            20'
                        </label>
                    </div>
                    <div class="col-md-3  fcl_option_2" >
                        <label id ="fcl_option_2">
                            <input type="radio"  <?= $amuco_details_customers_requests[0]->fcl_option == 40 ? 'checked':'' ?> name="fcl_option" id="fcl_option"  value="40" >
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
                    <select  class="form-control chosen chosen-select-deselect" name="type_fcl" id="type_fcl" data-placeholder="Select Type" >
                        <option value=""></option>
                        <option <?= $amuco_details_customers_requests[0]->type_fcl == 'NOR' ? 'selected':'' ?>  value="NOR">NOR</option>
                        <option <?= $amuco_details_customers_requests[0]->type_fcl == 'HCube' ? 'selected':'' ?> value="HCube">HCube</option>
                        <option <?= $amuco_details_customers_requests[0]->type_fcl == 'Standard' ? 'selected':'' ?> value="Standard">Standard</option>
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
                    <input type="text" class="form-control" name="weight" id="weight" placeholder="Weight" value="<?= set_value('weight',$amuco_details_customers_requests[0]->weight); ?>">
                  </div>
                </div>
              </div>  
              <div class="col-md-4" >                                        
                <div class="form-group ">
                <label for="unit" class="col-sm-3 control-label label-right control-label">Unit </label>
                  <div class="col-sm-6">
                    <select  class="form-control chosen chosen-select-deselect" name="unit_pack" id="unit_pack" data-placeholder="Select Unit" >
                        <option value=""></option>
                        <?php foreach (db_get_all_data('amuco_unit_types') as $row): ?>
                        <option <?= $amuco_details_customers_requests[0]->unit_pack == $row->id ? 'selected': '' ?> value="<?= $row->id ?>"><?= $row->name; ?></option>
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
                      <select  class="form-control " name="shape" id="shape" data-placeholder="Select Packing" >
                        <option value=""></option>
                        <?php foreach (db_get_all_data('amuco_packing') as $row): ?>
                        <option <?= $amuco_details_customers_requests[0]->packing == $row->id ? 'selected': '' ?>  value="<?= $row->id ?>"><?= $row->name; ?></option>
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
                    <select  class="form-control " name="material" id="material" data-placeholder="Select material" >
                        <option value=""></option>
                        <?php foreach (db_get_all_data('amuco_material') as $row): ?>
                        <option <?= $amuco_details_customers_requests[0]->material == $row->id ? 'selected': '' ?> value="<?= $row->id ?>"><?= $row->name; ?></option>
                        <?php endforeach; ?>  
                    </select>
                  </div>
                </div>
              </div> 
            </div>
            <div class="row  " >
              <div class="col-md-2">  </div>
              <div class="col-md-4" >                       
                <div class="form-group">
                  <label class="col-sm-3 label-right"> Pallets</label>
                  <div  class="col-sm-6">
                    <input type="checkbox" <?= $amuco_details_customers_requests[0]->pallets == 0 ? '' : 'checked' ?> class="btn-pallets" name="pallets" id="pallets"  value=" <?= $amuco_details_customers_requests[0]->pallets ?> " >
                  </div>
                </div>  
              </div> 
              <div  class="col-sm-4 <?= $amuco_details_customers_requests[0]->purchasing == null ? 'btn-display' : '' ?>" >
                <div class="form-group">
                  <label class="col-sm-3 label-right"> By</label>
                  <div  class="col-sm-7">
                    <select  class="form-control " name="who_pallets" id="who_pallets" data-placeholder="Select" >
                        <option value="" selected></option>
                        <option value="Supplier"> Supplier</option>
                        <option value="Purchasing"> Purchase Office</option>
                    </select>
                  </div>
                </div>  
              </div>
              <div class="col-md-6">  </div> 
            </div> 
             
            <div class="row">  
              <div class="col-md-12" > 
                 <h4 class="col-md-12">Price Details</h4>
              </div>
            </div>
            <div class="row">
                <div class="col-md-1">  </div>
                <div class="col-md-5" >                                       
                    <div class="form-group ">
                        <label for="weight" class="col-sm-4 label-right ">Unit Price FOB/FCA </label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control input-element" name="price_fob" id="price_fob" placeholder="Price" value="">
                        </div>
                    </div>
                </div>  
                <div class="col-md-5" >                                        
                    <div class="form-group ">
                        <label for="weight" class="col-sm-4 label-right ">Total Freight $ </label>
                        <div class="col-sm-7">
                            <input type="text" <?= $amuco_details_customers_requests[0]->quantity < 1 ? 'disabled' : '' ; ?> class="form-control  input-element" name="total_freight" id="total_freight" placeholder="Freight" value="">
                        </div>
                    </div>
                </div>
                <div class="col-md-1">  </div>
            </div> 
            <div class="row">
                <div class="col-md-1">  </div>
                <div class="col-md-5" >                                       
                    <div class="form-group ">
                        <label for="weight" class="col-sm-4 label-right">Unit Price $ </label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control  input-element" name="total_price" id="total_price" placeholder="Price" value="">
                        </div>
                    </div>
                </div>  
                <div class="col-md-5" >                                        
                    <div class="form-group ">
                        <label for="weight" class="col-sm-4 label-right ">Sales Incoterm </label>
                        <div class="col-sm-7">
                            <select  class="form-control chosen chosen-select-deselect" name="incoterm_price" id="incoterm_price"  >
                                <option value=""></option>
                                <?php foreach (db_get_all_data('amuco_incoterm') as $row): ?>
                                <option <?= $amuco_customer_request->incoterm ==  $row->id ? 'selected' : '' ?> value="<?= $row->id ?>"><?= $row->name; ?></option>
                                <?php endforeach; ?>  
                            </select>
                        </div>    
                    </div>
                </div>
                <div class="col-md-1">  </div>
            </div> 
              
               
            <div class="row"> 
                <div class="col-md-1">  </div>
                <?php if($amuco_details_customers_requests[0]->purchasing == null): ?>
                <div class="col-md-5" >                                       
                    <div class="form-group ">
                        <label for="weight" class="col-sm-4 label-right ">Supplier </label>
                        <div class="col-sm-7">
                            <!--input type="hidden" class="form-control" name="supplier_direct" id="supplier_direct" value="<?= $amuco_details_customers_requests[0]->supplier ?>">
                            <input readonly type="text" class="form-control" name="supplier_name" id="supplier_name" value="<?= $amuco_details_customers_requests[0]->amuco_suppliers_name ?>"-->
                            <select  class="form-control chosen chosen-select-deselect" name="supplier_direct" id="supplier_direct" data-placeholder="Select Supplier" >
                                            <option value=""></option>
                                            <?php foreach (db_get_all_data('amuco_suppliers') as $row): ?>
                                            
                                                   <option <?php echo $amuco_details_customers_requests[0]->supplier == $row->id ? 'selected' : '' ?> value="<?= $row->id ?>"><?= $row->name; ?></option>
                                                 <?php   endforeach;?>  
                                        </select>
                        </div>    
                    </div>
                </div> 
                <?php   else:?>  
                <div class="col-md-5" >                                       
                    <div class="form-group ">
                        <label for="weight" class="col-sm-4 label-right ">Supplier </label>
                        <input type="hidden" class="form-control" name="purchasing" id="purchasing" value="<?= $amuco_details_customers_requests[0]->purchasing ?>">
                        <div class="col-sm-7">
                           
                            <select  class="form-control chosen chosen-select-deselect" name="supplier" id="suppliers" data-placeholder="Select Destination Port" >
                                            <option value=""></option>
                                            <?php foreach (db_get_all_data('amuco_suppliers') as $row): ?>
                                            <?php foreach (db_get_all_data('amuco_classification_suppliers') as $row_cla): 
                                                 if($row->classification_id == $row_cla->id && $row_cla->name == "Purchasing Office" ):
                                             ?>
                                                   <option value="<?= $row->id ?>"><?= $row->name; ?></option>
                                                 <?php endif; endforeach;  endforeach;?>  
                                        </select>
                        </div>    
                    </div>
                </div> 
            <?php   endif;?>   
               
            </div>

            <div class="row">               
              <div class="col-md-1">  </div>
              <div class="col-md-5" >                                        
                <div class="form-group ">
                    <label for="manufacturer" class="col-sm-4 label-right ">Manufacturer </label>
                    <div class="col-sm-7">
                      <select  class="form-control chosen chosen-select-deselect" name="manufacturer" id="manufacturer" data-placeholder="Select Manufacturer" >
                        <option value=""></option>
                        <?php foreach (db_get_all_data('amuco_suppliers') as $row): ?>
                              <option value="<?= $row->id ?>"><?= $row->name; ?></option>
                          <?php   endforeach;?>  
                      </select>
                    </div>
                </div>
              </div>
              <div class="col-md-5" >                                        
                    <div class="form-group ">
                        <label for="weight" class="col-sm-4 label-right ">Brand </label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="brand" id="brand" placeholder="Brand" value="">
                        </div>
                    </div>
                </div>
                <div class="col-md-1">  </div>
            </div>
            <div class="row">               
                <div class="col-md-1">  </div>
                <div class="col-md-5" >                                       
                  <div class="form-group ">
                    <label for="weight" class="col-sm-4 label-right ">Payments Terms </label>
                    <div class="col-sm-7">
                        <select  class="form-control chosen chosen-select-deselect" name="payment_terms" id="payment_terms" data-placeholder="Select Destination Port" >
                            <option value=""></option>
                            <?php foreach (db_get_all_data('amuco_supplier_payment_terms') as $row): ?>
                            <option value="<?= $row->id ?>"><?= $row->description; ?></option>
                            <?php endforeach; ?>  
                        </select>
                    </div>
                  </div>
                </div> 
             
                <div class="col-md-5" >                                        
                  <div class="form-group ">
                      <label for="weight" class="col-sm-4 label-right ">Sup. Incoterm </label>
                      <div class="col-sm-7">
                      <select  class="form-control chosen chosen-select-deselect" name="supplier_incoterm" id="supplier_incoterm"  >
                          <option value=""></option>
                          <?php foreach (db_get_all_data('amuco_incoterm') as $row): ?>
                          <option  value="<?= $row->id ?>"><?= $row->name; ?></option>
                          <?php endforeach; ?>  
                      </select>
                      </div>
                  </div>
                </div>
                
                <div class="col-md-1">  </div>
            </div>  
            <br>   
            <div class="row"> 
              <div class="col-md-1">  </div>
              <div class="col-md-5" >                                       
                <div class="form-group ">
                  <label for="weight" class="col-sm-4 label-right ">Shipping Port </label>
                  <a  href="#"><i   style=" margin-top: 1.5%"  class="fa fa-plus" id="add_port" data-toggle="modal" data-target="#modal-add-shipping-port" ></i></a>
                  <div class="col-sm-7">
                    <select  class="form-control chosen chosen-select-deselect" name="shipping_port" id="shipping_port" data-placeholder="Select Shipping Port" >
                        <option value=""></option>
                        <?php foreach (db_get_all_data('amuco_destination_port') as $row): ?>
                        <option value="<?= $row->id ?>"><?= $row->name; ?></option>
                        <?php endforeach; ?>  
                    </select>
                  </div>
                </div>
              </div>
              <div class="col-md-5" >                                       
                  <div class="form-group ">
                      <label for="weight" class="col-sm-4 label-right ">Destination Port </label>
                      <div class="col-sm-7">
                      <select  class="form-control chosen chosen-select-deselect" name="destination_port" id="destination_port" data-placeholder="Select Destination Port" >
                          <option value=""></option>
                          <?php foreach (db_get_all_data('amuco_destination_port') as $row): ?>
                          <option <?php echo $amuco_customer_request->destination_port == $row->id ? 'selected' : '' ?> value="<?= $row->id ?>"><?= $row->name; ?></option>
                          <?php endforeach; ?>  
                      </select>
                      </div>
                  </div>
                </div>
             
              <div class="col-md-1">  </div>
            </div> 
            <div class="row"> 
                <div class="col-md-1">  </div>
                <div class="col-md-5" >                                        
                  <div class="form-group ">
                    <label for="weight" class="col-sm-4 label-right ">ETD </label>
                    <div class="col-sm-7">
                    <input type="text" class="form-control pull-right datepicker" name="ETD"  placeholder="Date " id="date_etd" value="<?php echo date("m-d-Y");?>">
                    </div>
                  </div>
                </div> 
                <div class="col-md-5" >                                        
                  <div class="form-group ">
                    <label for="weight" class="col-sm-4 label-right ">ETA </label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control pull-right datepicker" name="ETA"  placeholder="Date" id="date_eta" value="<?php echo date("m-d-Y", strtotime(substr($amuco_details_customers_requests[0]->ETA,0,10))); ?>">
                    </div>
                  </div>
                </div> 
                <div class="col-md-1">  </div>
            </div> 
            <div class="row"> 
                <div class="col-md-1">  </div>
                <div class="col-md-5" >                                       
                  <div class="form-group ">
                      <label for="weight" class="col-sm-4 label-right ">Valid Until </label>
                      <div class="col-sm-7">
                      <input type="text" class="form-control pull-right datepicker" name="valid_until"  placeholder="Date " id="valid_until" value="<?php echo date("m-d-Y");?>">
                      </div>
                  </div>
                </div>   
                <div class="col-md-5" >                                        
                    <div class="form-group ">
                        <label for="weight" class="col-sm-4 label-right ">Analisys Standard </label>
                        <div class="col-sm-7">
                            <input  type="text" class="form-control" name="analysis_standard" id="analysis_standard"  value="">
                        </div>
                    </div>
                </div>
                <div class="col-md-1">  </div>
            </div>
            <div class="row"> 
              <div class="col-md-2">  </div>  
              <div class="col-md-10" style="margin-left: -5%;">                                  
                <div class="form-group ">
                  <label for="specific_remarks_2" class="col-sm-2 control-label">Remarks </label>
                  <div class="col-sm-7">
                    <textarea class="form-control" style="resize:none" id="comments" name="comments" rows="5" ><?= set_value('Specific Remarks'); ?></textarea>
                    <small class="info help-block"><b>Input Specific Remarks</b> Max Length : 250.</small>
                  </div>
                </div>
              </div>
             
            </div> 
           
              <div class="message message_product"></div>
            <?= form_close(); ?> 
            <br>
          </div>                                        
         <hr>
          <div style="text-align: right;margin-right:2%">
           
            <button class="btn btn-flat btn-primary  btn_action" id="btn_save_price" data-stype='stay' title="<?= cclang('save_button'); ?>">
              <i class="fa fa-save" ></i> <?= cclang('Save'); ?>
            </button>
           
            <button  class="btn btn-flat btn-primary  btn_action btn-display" id="btn_edit_price" data-stype='stay' title="<?= cclang('save_button'); ?>">
              <i class="fa fa-save" ></i> <?= cclang('edit'); ?>
            </button>
           
            <button type="button" class="btn btn-default close_modal" data-dismiss="modal" id="close_modal">Close</button>
            <span class="loading loading-hide">
              <img src="<?= BASE_ASSET; ?>/img/loading-spin-primary.svg"> 
              <i><?= cclang('loading_saving_data'); ?></i>
            </span>
          </div>
          <br>
          
        </div>
      </div>         
    </div>
  </div>
</section>

<!--------------Modal -------------------->






<script>
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
                // restore the modal-open class to the body element, so that scrolling works
                // properly after de-stacking a modal.
                setTimeout(function() {
                    $(document.body).addClass('modal-open');
                }, 0);
            }
        }
    }, '.modal');
    
    
 
    //----------------------------------------------------------------------------------------------------
    //----------------------------------------------------------------------------------------------------
    $(document).ready(function(){
     
      $("#date_eta").datepicker({
          dateFormat:'mm-dd-yy'
      }).val();
      $("#valid_until").datepicker({
          dateFormat:'mm-dd-yy'
      }).val();
      $("#date_etd").datepicker({
          dateFormat:'mm-dd-yy'
      }).val();

      /*******************************ADD PORT BUTTON *************************************************** */
      $('#btn_save_shipping_port').click(function(){
            $('.message').fadeOut();
    
            var form_amuco_port_new = $('#form_amuco_shipping_port');
            var data_post = form_amuco_port_new.serializeArray();
            var save_type = $(this).attr('data-stype');

            data_post.push({name: 'save_type', value: save_type});
            console.log(data_post);
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
                $('#modal-add-shipping-port').modal('hide');
              
               
                resetForm();
            
            
                $.ajax({
                    url: BASE_URL + '/administrator/amuco_destination_port/get_data_by_id?id='+res.id,
                    type: 'GET',
                    dataType: 'json',   
                })
                .done(function(response) {
                    console.log(response);
                
                    $('#shipping_port').append($('<option>', {value: response.id, text:response.name}));
                    //$('#destination_port').style('display','block');
                   // $('.chosen option').prop('selected', true).trigger('chosen:updated');
                 
                    $('#shipping_port option').prop('selected', true).trigger('chosen:updated');
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
                //$('.message').printMessage({message : res.message, type : 'warning'});
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
        })

      /***************************************************************************************** */
    // $('.modal-footer').css('display','none');
     $('#modalPopUp').find('.modal-footer').css('display','none');
   
        $('.input-element').toArray().forEach(function(field){
          new Cleave(field, {
            numeral: true,
            numeralThousandsGroupStyle: 'thousand'});
        });
    //-----------------------------------------------------------------------------------------------------
        $('.btn-copy').click(function(){
          //alert($(this).data('button_action'));
          if($(this).data('button_action') == "edit"){
            $('#edit_price').val($(this).data('id'));
            $('#btn_edit_price').removeClass('btn-display');
            $('#btn_save_price').addClass('btn-display');
          }else{
            $('#edit_price').val('');
            $('#btn_edit_price').addClass('btn-display');
            $('#btn_save_price').removeClass('btn-display');
          }
          $('#quantity').val($(this).data('quantity'));
          $("#unit option[value='"+ $(this).data('unit_id') +"']").attr("selected",true);
          $('#unit option').trigger('chosen:updated');
          $('#fcl').val($(this).data('fcl'));
          $('#fcl_option').val($(this).data('fcl_option'));
          if($(this).data('fcl_option') == 20){
            $('.fcl_option_1').find('.iradio_minimal-red').addClass('checked');
            $('#fcl_option_1').prop('checked',true);
          }else{
              if($(this).data('fcl_option') == 40){
                $('.fcl_option_2').find('.iradio_minimal-red').addClass('checked');
                $('#fcl_option').prop('checked',true);
              }
          }
          $("#type_fcl option[value='"+ $(this).data('fcl_type').toString()+"']").attr("selected",true);
          $('#type_fcl option').trigger('chosen:updated');
          $('#weight').val($(this).data('weight'));
          $("#unit_pack option[value='"+ $(this).data('unit_pack') +"']").attr("selected",true);
          $('#unit_pack option').trigger('chosen:updated');
          $("#shape option[value='"+ $(this).data('packing') +"']").attr("selected",true);
          $('#shape option').trigger('chosen:updated');
          $("#material option[value='"+ $(this).data('material') +"']").attr("selected",true);
          $('#material option').trigger('chosen:updated');
          if($(this).data('pallets') == 1){
            $('#pallets').val(1);
            $('#pallets').prop( "checked", true); 
            $('.pallets').find('.icheckbox_minimal-red').addClass('checked'); 
          }else{
            $('#pallets').val(0);
            $('#pallets').prop( "checked", false); 
          }
          $('#price_fob').val($(this).data('price_fob'));
          format_total_end($('#price_fob'));
          $('#total_freight').val($(this).data('total_freight'));
          format_total_end($('#total_freight'));
          $('#total_price').val($(this).data('total_price'));
          format_total_end($('#total_price'));
          $('#incoterm_price').val($(this).data('incoterm_price'));
          $('#supplier_direct').val($(this).data('supplier_direct'));
          $('#brand').val($(this).data('brand'));
        
          $("#supplier_incoterm option[value='"+ $(this).data('supplier_incoterm') +"']").attr("selected",true);
          $('#supplier_incoterm option').trigger('chosen:updated');
          $("#payment_terms option[value='"+ $(this).data('payment_terms') +"']").attr("selected",true);
          $('#payment_terms option').trigger('chosen:updated');
    
          $("#shipping_port option[value='"+ $(this).data('shipping_port') +"']").attr("selected",true);
          $('#shipping_port option').trigger('chosen:updated');
          $('#etd').val($(this).data('delivery_date'));
          $('#analysis_standard').val($(this).data('analysis_standard'));
          $('#valid_until').val($(this).data('valid_until'));
          $('#comments').val($(this).data('remarks'));
          $('#modal-add-price').modal('show');
        });

        //---------------------------------------------------------------------------------------------------
         function format_total_numbers(str_number){
           if(str_number.trim() != ""){
              return parseFloat(str_number.replace(',',""));
           }else{
             return 0;
           }
           
        }

        function format_total_end(number){
          var cleave = new Cleave(number, {
              numeral: true,
              numeralThousandsGroupStyle: 'thousand'
          });
        }
   //---------------------------------------------------------------------------------------------------------
        $('#total_freight').change(function(){
          let price_fob = format_total_numbers($('#price_fob').val());
          let price = format_total_numbers($('#total_price').val());
          freight = format_total_numbers($(this).val());
          let quantity = parseFloat($('#quantity_price').val());
          if(freight > 0){
            if(quantity > 0){
              freight = freight / quantity;
            }else{
              freight = 0;
            }
            if(price_fob > 0){
              $('#total_price').val(price_fob + freight);
              format_total_end($('#total_price'));
            }else{
                if( price > 0){
                  $('#price_fob').val(price - freight);
                  format_total_end($('#price_fob'));
                }else{
                  $('#total_price').val(freight);
                  format_total_end($('#total_price'));
                }
            }
          }else{
            if(price_fob > 0){
                $('#total_price').val(price_fob);
                format_total_end($('#total_price'));
            }else{
                $('#total_price').val(0);
            }   
          }
        }) ;
      //--------------------------------------------------------------------------------------------------------
        $('#price_fob').change(function(){
          
            let price_fob = format_total_numbers($(this).val());
            let freight = format_total_numbers($('#total_freight').val());
            let price = format_total_numbers($('#total_price').val());
            if(format_total_numbers($(this).val()) > 0){
              
              //alert($('#total_price').val());
              if($('#incoterm').val() != 'FOB'){
                if(freight > 0){
                  if(parseFloat($('#quantity').val()) > 0){
                    freight = freight / parseFloat($('#quantity').val());
                  }else{
                    freight = 0;
                  }
                  $('#total_price').val(price_fob + freight);
                  format_total_end($('#total_price'));
                }else{
                    if(price > 0){
                      freight = price - price_fob;
                      $('#total_freight').val(freight);
                    }else{
                      $('#total_price').val(price_fob + freight);
                      format_total_end($('#total_price'));
                    }
                }
              }else{
                $('#total_price').val(price_fob + freight);
                format_total_end($('#total_price'));
              }
            }else{
              if(freight > 0){
                $('#total_price').val(freight);
                format_total_end($('#total_price'));
              }else{
                $('#total_price').val(0);
              }
            }
              
           /* var number =  $('#price_fob').val();
            number =  number.replace(/\D/g, "").replace(/\B(?=(\d{3})+(?!\d)\.?)/g, ",");
            alert(number);
            $('#price_fob').val(number);*/
        }) ;

        //-----------------------------------------------------------------------------------------------

        $('#quantity').change(function(){
            if($('#quantity').val() > 0){
               $('#total_freight').prop('disabled','');
               if($('#total_freight').val() > 0){
                 $('#total_freight').val(0) ;
                 $('#total_price').val(0) ;
                 $('#price_fob').val(0) ;
               }
            }else{
              $('#total_freight').prop('disabled','true');
            }
        });

        //---------------------------------------------------------------------------------------------
        $('.close_modal').click(function(){
            //location.reload();
            $('#modal-add-price').modal('hide');
        });

        //----------------------------------------------------------------------------------------------
        $('#btn_save_price').click(function(){
            $('.message').fadeOut();
            var form_amuco_details_price = $('#form_amuco_details_price');
            var data_post = form_amuco_details_price.serializeArray();
            var save_type = $(this).attr('data-stype');
           // var save_status = $(this).attr('data-action');

            data_post.push({name: 'save_type', value: save_type});
            data_post.push({name: 'save_status', value: 'save'});
        
            $('.loading').show();
        
            $.ajax({
                url: BASE_URL + '/administrator/amuco_details_request_office/add_save',
                type: 'POST',
                dataType: 'json',
                data: data_post,
            })
            .done(function(res) {
                $('form').find('.form-group').removeClass('has-error');
                $('.steps li').removeClass('error');
                $('form').find('.error-input').remove();
                if(res.success) {
                    $('#form_amuco_details_request_office').trigger("reset");
                    $('#modal-add-price').modal('hide');
                    location.reload();
            
                    $('.message').printMessage({message : res.message});
                    $('.message').fadeIn();
                    resetForm();
                    $('.chosen option').prop('selected', false).trigger('chosen:updated');
                        
                } else {
                    if (res.errors) {
                        console.log(res);
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
        //----------------------------------------------------------------------------------------------------

        $('#btn_edit_price').click(function(){
            $('.message').fadeOut();
            var form_amuco_details_price = $('#form_amuco_details_price');
            var data_post = form_amuco_details_price.serializeArray();
            var save_type = $(this).attr('data-stype');
           // var save_status = $(this).attr('data-action');

            data_post.push({name: 'save_type', value: save_type});
            data_post.push({name: 'save_status', value: 'save'});
        
            $('.loading').show();
        
            $.ajax({
                url: BASE_URL + '/administrator/amuco_details_request_office/edit_save/'+ $('#edit_price').val(),
                type: 'POST',
                dataType: 'json',
                data: data_post,
            })
            .done(function(res) {
                $('form').find('.form-group').removeClass('has-error');
                $('.steps li').removeClass('error');
                $('form').find('.error-input').remove();
                if(res.success) {
                    $('#form_amuco_details_request_office').trigger("reset");
                    $('#modal-add-price').modal('hide');
                    location.reload();
            
                    $('.message').printMessage({message : res.message});
                    $('.message').fadeIn();
                    resetForm();
                    $('.chosen option').prop('selected', false).trigger('chosen:updated');
                        
                } else {
                    if (res.errors) {
                        console.log(res);
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
        //-----------------------------------------------------------------------------------------------------------

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
    });    
</script>      