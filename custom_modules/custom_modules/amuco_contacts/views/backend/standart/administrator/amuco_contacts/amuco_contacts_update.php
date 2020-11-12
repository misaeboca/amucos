

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
        Amuco Contacts        <small>Edit Amuco Contacts</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class=""><a  href="<?= site_url('administrator/amuco_contacts'); ?>">Amuco Contacts</a></li>
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
                            <h3 class="widget-user-username">Amuco Contacts</h3>
                            <h5 class="widget-user-desc">Edit Amuco Contacts</h5>
                            <hr>
                        </div>
                        <?= form_open(base_url('administrator/amuco_contacts/edit_save/'.$this->uri->segment(4)), [
                            'name'    => 'form_amuco_contacts', 
                            'class'   => 'form-horizontal form-step', 
                            'id'      => 'form_amuco_contacts', 
                            'method'  => 'POST'
                            ]); ?>
                         
                                                <div class="form-group ">
                            <label for="type_contact" class="col-sm-2 control-label">Type Contact 
                            <i class="required">*</i>
                            </label>
                            <div class="col-sm-8">
                                <select  class="form-control chosen chosen-select" name="type_contact" id="type_contact" data-placeholder="Select Type Contact" >
                                    <option value=""></option>
                                    <option <?= $amuco_contacts->type_contact == "Supplier" ? 'selected' :''; ?> value="Supplier">Supplier</option>
                                    <option <?= $amuco_contacts->type_contact == "Customer" ? 'selected' :''; ?> value="Customer">Customer</option>
                                    </select>
                                <small class="info help-block">
                                </small>
                            </div>
                        </div>
                                                 
                                                <div class="form-group ">
                            <label for="active" class="col-sm-2 control-label">Active 
                            <i class="required">*</i>
                            </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="active" id="active" placeholder="Active" value="<?= set_value('active', $amuco_contacts->active); ?>">
                                <small class="info help-block">
                                <b>Input Active</b> Max Length : 1.</small>
                            </div>
                        </div>
                                                 
                                                <div class="form-group ">
                            <label for="name" class="col-sm-2 control-label">Name 
                            <i class="required">*</i>
                            </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="name" id="name" placeholder="Name" value="<?= set_value('name', $amuco_contacts->name); ?>">
                                <small class="info help-block">
                                <b>Input Name</b> Max Length : 100.</small>
                            </div>
                        </div>
                                                 
                                                <div class="form-group ">
                            <label for="position" class="col-sm-2 control-label">Position 
                            <i class="required">*</i>
                            </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="position" id="position" placeholder="Position" value="<?= set_value('position', $amuco_contacts->position); ?>">
                                <small class="info help-block">
                                <b>Input Position</b> Max Length : 100.</small>
                            </div>
                        </div>
                                                 
                                                <div class="form-group ">
                            <label for="departament" class="col-sm-2 control-label">Departament 
                            </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="departament" id="departament" placeholder="Departament" value="<?= set_value('departament', $amuco_contacts->departament); ?>">
                                <small class="info help-block">
                                <b>Input Departament</b> Max Length : 100.</small>
                            </div>
                        </div>
                                                 
                                                <div class="form-group ">
                            <label for="mobile_phone" class="col-sm-2 control-label">Mobile Phone 
                            <i class="required">*</i>
                            </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="mobile_phone" id="mobile_phone" placeholder="Mobile Phone" value="<?= set_value('mobile_phone', $amuco_contacts->mobile_phone); ?>">
                                <small class="info help-block">
                                <b>Input Mobile Phone</b> Max Length : 30.</small>
                            </div>
                        </div>
                                                 
                                                <div class="form-group ">
                            <label for="office_phone" class="col-sm-2 control-label">Office Phone 
                            </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="office_phone" id="office_phone" placeholder="Office Phone" value="<?= set_value('office_phone', $amuco_contacts->office_phone); ?>">
                                <small class="info help-block">
                                <b>Input Office Phone</b> Max Length : 30.</small>
                            </div>
                        </div>
                                                 
                                                <div class="form-group ">
                            <label for="personal_phone" class="col-sm-2 control-label">Personal Phone 
                            </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="personal_phone" id="personal_phone" placeholder="Personal Phone" value="<?= set_value('personal_phone', $amuco_contacts->personal_phone); ?>">
                                <small class="info help-block">
                                <b>Input Personal Phone</b> Max Length : 30.</small>
                            </div>
                        </div>
                                                 
                                                <div class="form-group ">
                            <label for="fax" class="col-sm-2 control-label">Fax 
                            </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="fax" id="fax" placeholder="Fax" value="<?= set_value('fax', $amuco_contacts->fax); ?>">
                                <small class="info help-block">
                                <b>Input Fax</b> Max Length : 30.</small>
                            </div>
                        </div>
                                                 
                                                <div class="form-group ">
                            <label for="email" class="col-sm-2 control-label">Email 
                            <i class="required">*</i>
                            </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="email" id="email" placeholder="Email" value="<?= set_value('email', $amuco_contacts->email); ?>">
                                <small class="info help-block">
                                <b>Input Email</b> Max Length : 100.</small>
                            </div>
                        </div>
                                                 
                                                <div class="form-group ">
                            <label for="skype" class="col-sm-2 control-label">Skype 
                            </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="skype" id="skype" placeholder="Skype" value="<?= set_value('skype', $amuco_contacts->skype); ?>">
                                <small class="info help-block">
                                <b>Input Skype</b> Max Length : 100.</small>
                            </div>
                        </div>
                                                 
                                                <div class="form-group ">
                            <label for="line_products" class="col-sm-2 control-label">Line Products 
                            </label>
                            <div class="col-sm-8">
                                <select  class="form-control chosen chosen-select" name="line_products[]" id="line_products" data-placeholder="Select Line Products" multiple >
                                    <option value=""></option>
                                    <?php foreach (db_get_all_data('amuco_industry_type') as $row): ?>
                                    <option <?=  in_array($row->id, explode(',', $amuco_contacts->line_products)) ? 'selected' : ''; ?> value="<?= $row->id ?>"><?= $row->name; ?></option>
                                    <?php endforeach; ?>  
                                </select>
                                <small class="info help-block">
                                <b>Input Line Products</b> Max Length : 100.</small>
                            </div>
                        </div>
                                                 
                                                <div class="form-group " id="customer" style="<?php echo $amuco_contacts->type_contact== 'Customer' ? 'display:block':'display:none' ?>">
                            <label for="customer_id" class="col-sm-2 control-label">Customer 
                            </label>
                            <div class="col-sm-8">
                                <select  class="form-control chosen chosen-select-deselect" name="customer_id" id="customer_id" data-placeholder="Select Customer Id" >
                                    <option value=""></option>
                                    <?php foreach (db_get_all_data('amuco_customers') as $row): ?>
                                    <option <?=  $row->id ==  $amuco_contacts->customer_id ? 'selected' : ''; ?> value="<?= $row->id ?>"><?= $row->name; ?></option>
                                    <?php endforeach; ?>  
                                </select>
                                <small class="info help-block">
                                <b>Input Customer Id</b> Max Length : 10.</small>
                            </div>
                        </div>


                                                 
                                                <div class="form-group " id="supplier" style="<?php echo $amuco_contacts->type_contact== 'Supplier' ? 'display:block':'display:none' ?>">
                            <label for="supplier_id" class="col-sm-2 control-label">Supplier 
                            </label>
                            <div class="col-sm-8">
                                <select  class="form-control chosen chosen-select-deselect" name="supplier_id" id="supplier_id" data-placeholder="Select Supplier Id" >
                                    <option value=""></option>
                                    <?php foreach (db_get_all_data('amuco_suppliers') as $row): ?>
                                    <option <?=  $row->id ==  $amuco_contacts->supplier_id ? 'selected' : ''; ?> value="<?= $row->id ?>"><?= $row->name; ?></option>
                                    <?php endforeach; ?>  
                                </select>
                                <small class="info help-block">
                                <b>Input Supplier Id</b> Max Length : 10.</small>
                            </div>
                        </div>


                                                 
                                                <div class="form-group ">
                            <label for="picture" class="col-sm-2 control-label">Picture 
                            </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="picture" id="picture" placeholder="Picture" value="<?= set_value('picture', $amuco_contacts->picture); ?>">
                                <small class="info help-block">
                                <b>Input Picture</b> Max Length : 250.</small>
                            </div>
                        </div>
                                                 
                                                <div class="form-group ">
                            <label for="home_address" class="col-sm-2 control-label">Home Address 
                            </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="home_address" id="home_address" placeholder="Home Address" value="<?= set_value('home_address', $amuco_contacts->home_address); ?>">
                                <small class="info help-block">
                                <b>Input Home Address</b> Max Length : 250.</small>
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
                                    <option <?=  $row->id ==  $amuco_contacts->country ? 'selected' : ''; ?> value="<?= $row->id ?>"><?= $row->name; ?></option>
                                    <?php endforeach; ?>  
                                </select>
                                <small class="info help-block">
                                <b>Input Country</b> Max Length : 10.</small>
                            </div>
                        </div>


                                                 
                                                <div class="form-group ">
                            <label for="city" class="col-sm-2 control-label">City 
                            </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="city" id="city" placeholder="City" value="<?= set_value('city', $amuco_contacts->city); ?>">
                                <small class="info help-block">
                                <b>Input City</b> Max Length : 100.</small>
                            </div>
                        </div>
                                                 
                                                <div class="form-group ">
                            <label for="home_phone" class="col-sm-2 control-label">Home Phone 
                            </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="home_phone" id="home_phone" placeholder="Home Phone" value="<?= set_value('home_phone', $amuco_contacts->home_phone); ?>">
                                <small class="info help-block">
                                <b>Input Home Phone</b> Max Length : 30.</small>
                            </div>
                        </div>
                                                 
                                                <div class="form-group ">
                            <label for="birthday" class="col-sm-2 control-label">Birthday 
                            </label>
                            <div class="col-sm-6">
                            <div class="input-group date col-sm-8">
                              <input type="text" class="form-control pull-right datepicker" name="birthday"  placeholder="Birthday" id="birthday" value="<?= set_value('birthday', $amuco_contacts->birthday); ?>">
                            </div>
                            <small class="info help-block">
                            </small>
                            </div>
                        </div>
                                                 
                                                <div class="form-group ">
                            <label for="additional_information" class="col-sm-2 control-label">Additional Information 
                            </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="additional_information" id="additional_information" placeholder="Additional Information" value="<?= set_value('additional_information', $amuco_contacts->additional_information); ?>">
                                <small class="info help-block">
                                <b>Input Additional Information</b> Max Length : 250.</small>
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
       
        $('#type_contact').change(function(){
           //   alert( $('#type_contact').val());
            var seleccion=$('#type_contact').val();
            if(seleccion == 'Supplier'){
                $('#supplier').show();
                $('#customer').hide();
            }else{
                if(seleccion == 'Customer'){
                    $('#supplier').hide();
                    $('#customer').show();
                }else{
                    $('#supplier').hide();
                    $('#customer').hide();
                }
            }
            
        });
      
             
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
              window.location.href = BASE_URL + 'administrator/amuco_contacts';
            }
          });
    
        return false;
      }); /*end btn cancel*/
    
      $('.btn_save').click(function(){
        $('.message').fadeOut();
            
        var form_amuco_contacts = $('#form_amuco_contacts');
        var data_post = form_amuco_contacts.serializeArray();
        var save_type = $(this).attr('data-stype');
        data_post.push({name: 'save_type', value: save_type});
    
        $('.loading').show();
    
        $.ajax({
          url: form_amuco_contacts.attr('action'),
          type: 'POST',
          dataType: 'json',
          data: data_post,
        })
        .done(function(res) {
          $('form').find('.form-group').removeClass('has-error');
          $('form').find('.error-input').remove();
          $('.steps li').removeClass('error');
          if(res.success) {
            var id = $('#amuco_contacts_image_galery').find('li').attr('qq-file-id');
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