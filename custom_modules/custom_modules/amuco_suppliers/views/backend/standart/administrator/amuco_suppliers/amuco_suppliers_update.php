

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
        Amuco Suppliers        <small>Edit Amuco Suppliers</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class=""><a  href="<?= site_url('administrator/amuco_suppliers'); ?>">Amuco Suppliers</a></li>
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
                            <h3 class="widget-user-username">Amuco Suppliers</h3>
                            <h5 class="widget-user-desc">Edit Amuco Suppliers</h5>
                            <hr>
                        </div>
                        <?= form_open(base_url('administrator/amuco_suppliers/edit_save/'.$this->uri->segment(4)), [
                            'name'    => 'form_amuco_suppliers', 
                            'class'   => 'form-horizontal form-step', 
                            'id'      => 'form_amuco_suppliers', 
                            'method'  => 'POST'
                            ]); ?>
                         
                                                <div class="form-group ">
                            <label for="name" class="col-sm-2 control-label">Name 
                            <i class="required">*</i>
                            </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="name" id="name" placeholder="Name" value="<?= set_value('name', $amuco_suppliers->name); ?>">
                                <small class="info help-block">
                                <b>Input Name</b> Max Length : 100.</small>
                            </div>
                        </div>
                                                 
                                                <div class="form-group ">
                            <label for="active" class="col-sm-2 control-label">Active 
                            <i class="required">*</i>
                            </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="active" id="active" placeholder="Active" value="<?= set_value('active', $amuco_suppliers->active); ?>">
                                <small class="info help-block">
                                <b>Input Active</b> Max Length : 1.</small>
                            </div>
                        </div>
                                                 
                                                <div class="form-group ">
                            <label for="supplier_code" class="col-sm-2 control-label">Supplier Code 
                            <i class="required">*</i>
                            </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="supplier_code" id="supplier_code" placeholder="Supplier Code" value="<?= set_value('supplier_code', $amuco_suppliers->supplier_code); ?>">
                                <small class="info help-block">
                                <b>Input Supplier Code</b> Max Length : 50.</small>
                            </div>
                        </div>
                                                 
                                                <div class="form-group ">
                            <label for="country" class="col-sm-2 control-label">Country 
                            <i class="required">*</i>
                            </label>
                            <div class="col-sm-8">
                                <select  class="form-control chosen chosen-select-deselect" name="country" id="country" data-placeholder="Select Country" >
                                    <option value=""></option>
                                    <?php foreach (db_get_all_data('amuco_countries') as $row): ?>
                                    <option <?=  $row->id ==  $amuco_suppliers->country ? 'selected' : ''; ?> value="<?= $row->id ?>"><?= $row->name; ?></option>
                                    <?php endforeach; ?>  
                                </select>
                                <small class="info help-block">
                                <b>Input Country</b> Max Length : 10.</small>
                            </div>
                        </div>


                                                 
                                                <div class="form-group ">
                            <label for="state" class="col-sm-2 control-label">State 
                            </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="state" id="state" placeholder="State" value="<?= set_value('state', $amuco_suppliers->state); ?>">
                                <small class="info help-block">
                                <b>Input State</b> Max Length : 100.</small>
                            </div>
                        </div>
                                                 
                                                <div class="form-group ">
                            <label for="city" class="col-sm-2 control-label">City 
                            </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="city" id="city" placeholder="City" value="<?= set_value('city', $amuco_suppliers->city); ?>">
                                <small class="info help-block">
                                <b>Input City</b> Max Length : 100.</small>
                            </div>
                        </div>
                                                 
                                                <div class="form-group ">
                            <label for="address" class="col-sm-2 control-label">Address 
                            </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="address" id="address" placeholder="Address" value="<?= set_value('address', $amuco_suppliers->address); ?>">
                                <small class="info help-block">
                                <b>Input Address</b> Max Length : 100.</small>
                            </div>
                        </div>
                                                 
                                                <div class="form-group ">
                            <label for="postal_code" class="col-sm-2 control-label">Postal Code 
                            </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="postal_code" id="postal_code" placeholder="Postal Code" value="<?= set_value('postal_code', $amuco_suppliers->postal_code); ?>">
                                <small class="info help-block">
                                <b>Input Postal Code</b> Max Length : 30.</small>
                            </div>
                        </div>
                                                 
                                                <div class="form-group ">
                            <label for="url" class="col-sm-2 control-label">Url 
                            </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="url" id="url" placeholder="Url" value="<?= set_value('url', $amuco_suppliers->url); ?>">
                                <small class="info help-block">
                                <b>Input Url</b> Max Length : 100.</small>
                            </div>
                        </div>
                                                 
                                                <div class="form-group ">
                            <label for="email" class="col-sm-2 control-label">Email 
                            <i class="required">*</i>
                            </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="email" id="email" placeholder="Email" value="<?= set_value('email', $amuco_suppliers->email); ?>">
                                <small class="info help-block">
                                <b>Input Email</b> Max Length : 100.</small>
                            </div>
                        </div>
                                                 
                                                <div class="form-group ">
                            <label for="mobile_phone" class="col-sm-2 control-label">Mobile Phone 
                            <i class="required">*</i>
                            </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="mobile_phone" id="mobile_phone" placeholder="Mobile Phone" value="<?= set_value('mobile_phone', $amuco_suppliers->mobile_phone); ?>">
                                <small class="info help-block">
                                <b>Input Mobile Phone</b> Max Length : 30.</small>
                            </div>
                        </div>
                                                 
                                                <div class="form-group ">
                            <label for="office_phone" class="col-sm-2 control-label">Office Phone 
                            </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="office_phone" id="office_phone" placeholder="Office Phone" value="<?= set_value('office_phone', $amuco_suppliers->office_phone); ?>">
                                <small class="info help-block">
                                <b>Input Office Phone</b> Max Length : 30.</small>
                            </div>
                        </div>
                                                 
                                                <div class="form-group ">
                            <label for="fax" class="col-sm-2 control-label">Fax 
                            </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="fax" id="fax" placeholder="Fax" value="<?= set_value('fax', $amuco_suppliers->fax); ?>">
                                <small class="info help-block">
                                <b>Input Fax</b> Max Length : 30.</small>
                            </div>
                        </div>
                                                 
                                                <div class="form-group ">
                            <label for="payment_terms" class="col-sm-2 control-label">Payment Terms 
                            </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="payment_terms" id="payment_terms" placeholder="Payment Terms" value="<?= set_value('payment_terms', $amuco_suppliers->payment_terms); ?>">
                                <small class="info help-block">
                                <b>Input Payment Terms</b> Max Length : 250.</small>
                            </div>
                        </div>
                                                 
                                                <div class="form-group ">
                            <label for="classification_id" class="col-sm-2 control-label">Classification Id 
                            </label>
                            <div class="col-sm-8">
                                <select  class="form-control chosen chosen-select" name="classification_id[]" id="classification_id" data-placeholder="Select Classification Id" multiple >
                                    <option value=""></option>
                                    <?php foreach (db_get_all_data('amuco_classification_suppliers') as $row): ?>
                                    <option <?=  in_array($row->id, explode(',', $amuco_suppliers->classification_id)) ? 'selected' : ''; ?> value="<?= $row->id ?>"><?= $row->name; ?></option>
                                    <?php endforeach; ?>  
                                </select>
                                <small class="info help-block">
                                </small>
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
              window.location.href = BASE_URL + 'administrator/amuco_suppliers';
            }
          });
    
        return false;
      }); /*end btn cancel*/
    
      $('.btn_save').click(function(){
        $('.message').fadeOut();
            
        var form_amuco_suppliers = $('#form_amuco_suppliers');
        var data_post = form_amuco_suppliers.serializeArray();
        var save_type = $(this).attr('data-stype');
        data_post.push({name: 'save_type', value: save_type});
    
        $('.loading').show();
    
        $.ajax({
          url: form_amuco_suppliers.attr('action'),
          type: 'POST',
          dataType: 'json',
          data: data_post,
        })
        .done(function(res) {
          $('form').find('.form-group').removeClass('has-error');
          $('form').find('.error-input').remove();
          $('.steps li').removeClass('error');
          if(res.success) {
            var id = $('#amuco_suppliers_image_galery').find('li').attr('qq-file-id');
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