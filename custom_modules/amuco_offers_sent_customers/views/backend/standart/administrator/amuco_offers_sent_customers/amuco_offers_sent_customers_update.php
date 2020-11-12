

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
        Amuco Offers Sent Customers        <small>Edit Amuco Offers Sent Customers</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class=""><a  href="<?= site_url('administrator/amuco_offers_sent_customers'); ?>">Amuco Offers Sent Customers</a></li>
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
                        <div class="widget-user-header ">
                            <div class="widget-user-image">
                                <img class="img-circle" src="<?= BASE_ASSET; ?>/img/add2.png" alt="User Avatar">
                            </div>
                            <!-- /.widget-user-image -->
                            <h3 class="widget-user-username">Amuco Offers Sent Customers</h3>
                            <h5 class="widget-user-desc">Edit Amuco Offers Sent Customers</h5>
                            <hr>
                        </div>
                        <?= form_open(base_url('administrator/amuco_offers_sent_customers/edit_save/'.$this->uri->segment(4)), [
                            'name'    => 'form_amuco_offers_sent_customers', 
                            'class'   => 'form-horizontal form-step', 
                            'id'      => 'form_amuco_offers_sent_customers', 
                            'method'  => 'POST'
                            ]); ?>
                         
                                                <div class="form-group ">
                            <label for="status" class="col-sm-2 control-label">Status 
                            </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="status" id="status" placeholder="Status" value="<?= set_value('status', $amuco_offers_sent_customers->status); ?>">
                                <small class="info help-block">
                                <b>Input Status</b> Max Length : 50.</small>
                            </div>
                        </div>
                                                 
                                                <div class="form-group ">
                            <label for="customer_request_id" class="col-sm-2 control-label">Customer Request Id 
                            <i class="required">*</i>
                            </label>
                            <div class="col-sm-8">
                                <input type="number" class="form-control" name="customer_request_id" id="customer_request_id" placeholder="Customer Request Id" value="<?= set_value('customer_request_id', $amuco_offers_sent_customers->customer_request_id); ?>">
                                <small class="info help-block">
                                <b>Input Customer Request Id</b> Max Length : 10.</small>
                            </div>
                        </div>
                                                 
                                                <div class="form-group ">
                            <label for="request_details_id" class="col-sm-2 control-label">Request Details Id 
                            <i class="required">*</i>
                            </label>
                            <div class="col-sm-8">
                                <input type="number" class="form-control" name="request_details_id" id="request_details_id" placeholder="Request Details Id" value="<?= set_value('request_details_id', $amuco_offers_sent_customers->request_details_id); ?>">
                                <small class="info help-block">
                                <b>Input Request Details Id</b> Max Length : 10.</small>
                            </div>
                        </div>
                                                 
                                                <div class="form-group ">
                            <label for="request_details_price_id" class="col-sm-2 control-label">Request Details Price Id 
                            <i class="required">*</i>
                            </label>
                            <div class="col-sm-8">
                                <input type="number" class="form-control" name="request_details_price_id" id="request_details_price_id" placeholder="Request Details Price Id" value="<?= set_value('request_details_price_id', $amuco_offers_sent_customers->request_details_price_id); ?>">
                                <small class="info help-block">
                                <b>Input Request Details Price Id</b> Max Length : 10.</small>
                            </div>
                        </div>
                                                 
                                                <div class="form-group ">
                            <label for="payments_terms_id" class="col-sm-2 control-label">Payments Terms Id 
                            <i class="required">*</i>
                            </label>
                            <div class="col-sm-8">
                                <select  class="form-control chosen chosen-select-deselect" name="payments_terms_id" id="payments_terms_id" data-placeholder="Select Payments Terms Id" >
                                    <option value=""></option>
                                    <?php foreach (db_get_all_data('amuco_supplier_payment_terms') as $row): ?>
                                    <option <?=  $row->id ==  $amuco_offers_sent_customers->payments_terms_id ? 'selected' : ''; ?> value="<?= $row->id ?>"><?= $row->description; ?></option>
                                    <?php endforeach; ?>  
                                </select>
                                <small class="info help-block">
                                <b>Input Payments Terms Id</b> Max Length : 10.</small>
                            </div>
                        </div>


                                                 
                                                <div class="form-group ">
                            <label for="quantity" class="col-sm-2 control-label">Quantity 
                            </label>
                            <div class="col-sm-8">
                                <input type="number" class="form-control" name="quantity" id="quantity" placeholder="Quantity" value="<?= set_value('quantity', $amuco_offers_sent_customers->quantity); ?>">
                                <small class="info help-block">
                                <b>Input Quantity</b> Max Length : 11.</small>
                            </div>
                        </div>
                                                 
                                                <div class="form-group ">
                            <label for="unit" class="col-sm-2 control-label">Unit 
                            </label>
                            <div class="col-sm-8">
                                <select  class="form-control chosen chosen-select-deselect" name="unit" id="unit" data-placeholder="Select Unit" >
                                    <option value=""></option>
                                    <?php foreach (db_get_all_data('amuco_unit_types') as $row): ?>
                                    <option <?=  $row->id ==  $amuco_offers_sent_customers->unit ? 'selected' : ''; ?> value="<?= $row->id ?>"><?= $row->name; ?></option>
                                    <?php endforeach; ?>  
                                </select>
                                <small class="info help-block">
                                <b>Input Unit</b> Max Length : 10.</small>
                            </div>
                        </div>


                                                 
                                                <div class="form-group ">
                            <label for="freight" class="col-sm-2 control-label">Freight 
                            </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="freight" id="freight" placeholder="Freight" value="<?= set_value('freight', $amuco_offers_sent_customers->freight); ?>">
                                <small class="info help-block">
                                <b>Input Freight</b> Max Length : 18.</small>
                            </div>
                        </div>
                                                 
                                                <div class="form-group ">
                            <label for="unit_price" class="col-sm-2 control-label">Unit Price 
                            </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="unit_price" id="unit_price" placeholder="Unit Price" value="<?= set_value('unit_price', $amuco_offers_sent_customers->unit_price); ?>">
                                <small class="info help-block">
                                <b>Input Unit Price</b> Max Length : 18.</small>
                            </div>
                        </div>
                                                 
                                                <div class="form-group ">
                            <label for="incoterm" class="col-sm-2 control-label">Incoterm 
                            </label>
                            <div class="col-sm-8">
                                <select  class="form-control chosen chosen-select-deselect" name="incoterm" id="incoterm" data-placeholder="Select Incoterm" >
                                    <option value=""></option>
                                    <?php foreach (db_get_all_data('amuco_incoterm') as $row): ?>
                                    <option <?=  $row->id ==  $amuco_offers_sent_customers->incoterm ? 'selected' : ''; ?> value="<?= $row->id ?>"><?= $row->name; ?></option>
                                    <?php endforeach; ?>  
                                </select>
                                <small class="info help-block">
                                <b>Input Incoterm</b> Max Length : 10.</small>
                            </div>
                        </div>


                                                 
                                                <div class="form-group ">
                            <label for="destination_port" class="col-sm-2 control-label">Destination Port 
                            </label>
                            <div class="col-sm-8">
                                <select  class="form-control chosen chosen-select-deselect" name="destination_port" id="destination_port" data-placeholder="Select Destination Port" >
                                    <option value=""></option>
                                    <?php foreach (db_get_all_data('amuco_destination_port') as $row): ?>
                                    <option <?=  $row->id ==  $amuco_offers_sent_customers->destination_port ? 'selected' : ''; ?> value="<?= $row->id ?>"><?= $row->name; ?></option>
                                    <?php endforeach; ?>  
                                </select>
                                <small class="info help-block">
                                <b>Input Destination Port</b> Max Length : 10.</small>
                            </div>
                        </div>


                                                 
                                                <div class="form-group ">
                            <label for="packing" class="col-sm-2 control-label">Packing 
                            </label>
                            <div class="col-sm-8">
                                <select  class="form-control chosen chosen-select-deselect" name="packing" id="packing" data-placeholder="Select Packing" >
                                    <option value=""></option>
                                    <?php foreach (db_get_all_data('amuco_packing') as $row): ?>
                                    <option <?=  $row->id ==  $amuco_offers_sent_customers->packing ? 'selected' : ''; ?> value="<?= $row->id ?>"><?= $row->name; ?></option>
                                    <?php endforeach; ?>  
                                </select>
                                <small class="info help-block">
                                <b>Input Packing</b> Max Length : 10.</small>
                            </div>
                        </div>


                                                 
                                                <div class="form-group ">
                            <label for="fcl" class="col-sm-2 control-label">Fcl 
                            </label>
                            <div class="col-sm-8">
                                <input type="number" class="form-control" name="fcl" id="fcl" placeholder="Fcl" value="<?= set_value('fcl', $amuco_offers_sent_customers->fcl); ?>">
                                <small class="info help-block">
                                <b>Input Fcl</b> Max Length : 10.</small>
                            </div>
                        </div>
                                                 
                                                <div class="form-group ">
                            <label for="type_fcl" class="col-sm-2 control-label">Type Fcl 
                            </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="type_fcl" id="type_fcl" placeholder="Type Fcl" value="<?= set_value('type_fcl', $amuco_offers_sent_customers->type_fcl); ?>">
                                <small class="info help-block">
                                <b>Input Type Fcl</b> Max Length : 50.</small>
                            </div>
                        </div>
                                                 
                                                <div class="form-group ">
                            <label for="option_fcl" class="col-sm-2 control-label">Option Fcl 
                            </label>
                            <div class="col-sm-8">
                                <input type="number" class="form-control" name="option_fcl" id="option_fcl" placeholder="Option Fcl" value="<?= set_value('option_fcl', $amuco_offers_sent_customers->option_fcl); ?>">
                                <small class="info help-block">
                                <b>Input Option Fcl</b> Max Length : 10.</small>
                            </div>
                        </div>
                                                
                                                 <div class="message"></div>
                                                <div class="row-fluid col-md-7 container-button-bottom">
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
<!-- Page script -->
<script>
    $(document).ready(function(){
       
      
             
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
              window.location.href = BASE_URL + 'administrator/amuco_offers_sent_customers';
            }
          });
    
        return false;
      }); /*end btn cancel*/
    
      $('.btn_save').click(function(){
        $('.message').fadeOut();
            
        var form_amuco_offers_sent_customers = $('#form_amuco_offers_sent_customers');
        var data_post = form_amuco_offers_sent_customers.serializeArray();
        var save_type = $(this).attr('data-stype');
        data_post.push({name: 'save_type', value: save_type});
    
        $('.loading').show();
    
        $.ajax({
          url: form_amuco_offers_sent_customers.attr('action'),
          type: 'POST',
          dataType: 'json',
          data: data_post,
        })
        .done(function(res) {
          $('form').find('.form-group').removeClass('has-error');
          $('form').find('.error-input').remove();
          $('.steps li').removeClass('error');
          if(res.success) {
            var id = $('#amuco_offers_sent_customers_image_galery').find('li').attr('qq-file-id');
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