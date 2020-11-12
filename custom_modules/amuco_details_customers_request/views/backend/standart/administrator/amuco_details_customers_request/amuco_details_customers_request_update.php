

<script src="<?= BASE_ASSET; ?>/js/jquery.hotkeys.js"></script>
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
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
       <br>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class=""><a  href="<?= site_url('administrator/amuco_details_customers_request'); ?>">Amuco Details Customers Request</a></li>
        <li class="active">Edit</li>
    </ol>
</section>
<!-- Main content -->
<section class="content">
    <div class="row" >
        <div class="col-md-12">
            <div class="box box-warning">
                <div class="box-body ">
                    <!-- Widget: user widget style 1 -->
                    <div class="box box-widget widget-user-2">
                        <!-- Add the bg color to the header using any of the bg-* classes -->
                        
                            <div class="widget-user-image">
                                <img class="img-circle" src="<?= BASE_ASSET; ?>/img/add2.png" alt="User Avatar">
                            </div>
                            <!-- /.widget-user-image -->
                            <h3 class="widget-user-username">Amuco Details Customers Request</h3>
                            <h5 class="widget-user-desc">Edit Amuco Details Customers Request</h5>
                            <hr>
                        
                    </div>    
                        <?= form_open(base_url('administrator/amuco_details_customers_request/edit_save/'.$this->uri->segment(4)), [
                            'name'    => 'form_amuco_details_customers_request', 
                            'class'   => 'form-horizontal form-step', 
                            'id'      => 'form_amuco_details_customers_request', 
                            'method'  => 'POST'
                            ]); ?>
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
                                    <input readonly type="hidden" class="form-control" name="product_id" id="product_id"  value="<?= set_value('product', $amuco_details_customers_request->product_id); ?>">
                                    <input readonly type="text" class="form-control" name="product_name" id="product_name"  value="<?= set_value('product', $amuco_details_customers_request->amuco_products_name); ?>">
                                    <!--select  readonly class="form-control chosen chosen-select-deselect" name="product_id" id="product_id" data-placeholder="Select Product Id" >
                                        <option value=""></option>
                                        <?php foreach (db_get_all_data('amuco_products') as $row): ?>
                                        <option <?=  $row->id ==  $amuco_details_customers_request->product_id ? 'selected' : ''; ?> value="<?= $row->id ?>"><?= $row->name; ?></option>
                                        <?php endforeach; ?>  
                                    </select-->
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
                                        <input type="number" class="form-control" name="quantity" id="quantity" placeholder="Quantity" value="<?= set_value('quantity', $amuco_details_customers_request->quantity); ?>">
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
                                            <option <?=  $row->id ==  $amuco_details_customers_request->unit ? 'selected' : ''; ?> value="<?= $row->id ?>"><?= $row->name; ?></option>
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
                                    <input type="text" class="form-control" name="fcl" id="fcl" placeholder="Fcl" value="<?= set_value('fcl', $amuco_details_customers_request->fcl); ?>">
                                    </div>
                                </div>
                            </div> 
                            <div class="col-md-4 col-sm-4" > 
                                <div class="form-group ">
                                    <div class="row">
                                        <label for="fcl" class="col-sm-3"> </label>
                                        <div class="col-md-3  fcl_option_1">
                                            <label id="fcl_option_1">
                                            <input type="radio" class="flat-red" name="fcl_option" id="fcl_option_1"  value="20" >
                                                20'
                                            </label>
                                        </div>
                                        <div class="col-md-3  fcl_option_2" >
                                            <label id ="fcl_option_2">
                                            <input type="radio" class="flat-red" name="fcl_option" id="fcl_option"  value="40" >
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
                                            <option <?= $amuco_details_customers_request->fcl_option == "NOR" ? 'selected': '' ?> value="NOR">NOR</option>
                                            <option <?= $amuco_details_customers_request->fcl_option == "HCube" ? 'selected': '' ?> value="HCube">HCube</option>
                                            <option <?= $amuco_details_customers_request->fcl_option == "Standar" ? 'selected': '' ?> value="Standard">Standard</option>
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
                                    <input type="text" class="form-control" name="weight" id="weight" placeholder="Weight" value="<?= set_value('weight', $amuco_details_customers_request->weight); ?>">
                                    </div>
                                </div>
                            </div>  
                            <div class="col-md-4" >                                        
                                <div class="form-group ">
                                    <label for="unit" class="col-sm-3 control-label label-right control-label">Unit Pack </label>
                                    <div class="col-sm-6">
                                        <select  class="form-control chosen chosen-select-deselect" name="unit_pack" id="unit_pack" data-placeholder="Select Unit" >
                                            <option value=""></option>
                                            <?php foreach (db_get_all_data('amuco_unit_types') as $row): ?>
                                            <option <?=  $row->id ==  $amuco_details_customers_request->unit_pack ? 'selected' : ''; ?> value="<?= $row->id ?>"><?= $row->name; ?></option>
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
                                        <select  class="form-control " name="pack" id="pack" data-placeholder="Select Packing" >
                                            <option value=""></option>
                                            <?php foreach (db_get_all_data('amuco_packing') as $row): ?>
                                            <option <?=  $row->id ==  $amuco_details_customers_request->packing ? 'selected' : ''; ?> value="<?= $row->id ?>"><?= $row->name; ?></option>
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
                                            <option <?=  $row->id ==  $amuco_details_customers_request->material ? 'selected' : ''; ?> value="<?= $row->id ?>"><?= $row->name; ?></option>
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
                                        <input type="checkbox" class="flat-red" name="pallets" id="pallets"  value="0" >
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
                                            <input type="text" class="form-control pull-right datepicker" name="etd"  placeholder="Date ETD" id="etd" value="<?=  substr($amuco_details_customers_request->ETD,0,10); ?>">
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
                                            <input type="text" class="form-control pull-right datepicker" name="eta"  placeholder="Date ETA" id="eta" value="<?=  substr($amuco_details_customers_request->ETA,0,10); ?>">
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
                                        <textarea class="form-control" style="resize:none" id="specific_remarks_2" name="specific_remarks" rows="5" ><?=  $amuco_details_customers_request->specific_remarks; ?></textarea>
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
                                        <select  class="form-control chosen chosen-select-deselect" name="supplier" id="supplier" data-placeholder="Select Supplier" >
                                            <option value=""></option>
                                            <?php foreach (db_get_all_data('amuco_suppliers') as $row): ?>
                                            <option <?=  $row->id ==  $amuco_details_customers_request->supplier ? 'selected' : ''; ?> value="<?= $row->id ?>"><?= $row->name; ?></option>
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

                                        <select  class="form-control chosen chosen-select" name="contact_supplier[]" id="contact_supplier" data-placeholder="Select Contacts" multiple >
                                            <option value=""></option>
                                            <?php foreach (db_get_all_data('amuco_contacts') as $row): ?>
                                            <option <?=  in_array($row->id, explode(',', $amuco_details_customers_request->contacts)) ? 'selected' : ''; ?> value="<?= $row->id ?>"><?= $row->name; ?></option>
                                            <?php endforeach; ?>  
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
                                <i class="fa fa-plus" ></i> <?= cclang('Add Supplier Recipients'); ?>
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
                                        <select  class="form-control chosen chosen-select-deselect" name="purchasing[]" id="purchasing" data-placeholder="Select Supplier" >
                                            <option value=""></option>
                                            <?php foreach (db_get_all_data('aauth_users') as $row): ?>
                                            <option <?=  $row->id ==  $amuco_details_customers_request->purchasing ? 'selected' : ''; ?>  value="<?= $row->id ?>"><?= $row->username; ?></option>
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
                                <i class="fa fa-plus" ></i> <?= cclang('Add Office Recipients'); ?>
                                </button>
                            </div>
                        </div>
                        <br>
                        <div class="message"></div>
                        <div class="row-fluid col-md-7 container-button-bottom" style="display:none">
                            <button class="btn btn-flat btn-primary btn_save btn_action" id="btn_save" data-stype='stay' title="<?= cclang('save_button'); ?> (Ctrl+s)">
                            <i class="fa fa-save" ></i> <?= cclang('save_button'); ?>
                            </button>
                            <a class="btn btn-flat btn-info btn_save btn_action btn_save_back" id="btn_save" data-stype='back' title="<?= cclang('save_and_go_the_list_button'); ?> (Ctrl+d)">
                            <i class="ion ion-ios-list-outline" ></i> <?= cclang('save_and_go_the_list_button'); ?>
                            </a>
                            <a class="btn btn-flat btn-default btn_action" id="btn_cancel" title="<?= cclang('cancel_button'); ?> (Ctrl+x)">
                            <i class="fa fa-undo" ></i> <?= cclang('cancel_button'); ?>
                            </a>
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
</section>
<!-- /.content -->
<script src="<?= BASE_ASSET; ?>ckeditor/ckeditor.js"></script>
<!-- Page script -->
<script>
    $(document).ready(function(){
       
      
      CKEDITOR.replace('specific_remarks'); 
      var specific_remarks = CKEDITOR.instances.specific_remarks;
                   
      $('#btn_cancel').click(function(){
        swal({
            title: "Are you sure?",
            text: "the data that you have created will be in the exhaust!",
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
              window.location.href = BASE_URL + 'administrator/amuco_details_customers_request';
            }
          });
    
        return false;
      }); /*end btn cancel*/
    
      $('.btn_save').click(function(){
        $('.message').fadeOut();
        $('#specific_remarks').val(specific_remarks.getData());
                    
        var form_amuco_details_customers_request = $('#form_amuco_details_customers_request');
        var data_post = form_amuco_details_customers_request.serializeArray();
        var save_type = $(this).attr('data-stype');
        data_post.push({name: 'save_type', value: save_type});
    
        $('.loading').show();
    
        $.ajax({
          url: form_amuco_details_customers_request.attr('action'),
          type: 'POST',
          dataType: 'json',
          data: data_post,
        })
        .done(function(res) {
          $('form').find('.form-group').removeClass('has-error');
          $('form').find('.error-input').remove();
          $('.steps li').removeClass('error');
          if(res.success) {
            var id = $('#amuco_details_customers_request_image_galery').find('li').attr('qq-file-id');
            if (save_type == 'back') {
              window.location.href = res.redirect;
              return;
            }
    
            $('.message').printMessage({message : res.message});
            $('.message').fadeIn();
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
          $('html, body').animate({ scrollTop: $(document).height() }, 2000);
        });
    
        return false;
      }); /*end btn save*/
      
       
       
       

      async function chain(){
      }
       
      chain();


    
    
    }); /*end doc ready*/
</script>