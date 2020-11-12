

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
<style>
  .capi {
    text-transform: capitalize
  }
</style>
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Amuco Customers        <small>Edit Amuco Customers</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class=""><a  href="<?= site_url('administrator/amuco_customers'); ?>">Amuco Customers</a></li>
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
                            <h3 class="widget-user-username">Amuco Customers</h3>
                            <h5 class="widget-user-desc">Edit Amuco Customers</h5>
                            <hr>
                        </div>
                        <?= form_open(base_url('administrator/amuco_customers/edit_save/'.$this->uri->segment(4)), [
                            'name'    => 'form_amuco_customers', 
                            'class'   => 'form-horizontal form-step', 
                            'id'      => 'form_amuco_customers', 
                            'method'  => 'POST'
                            ]); ?>
                         
                                                <div class="form-group ">
                            <label for="name" class="col-sm-2 control-label">Name 
                            <i class="required">*</i>
                            </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control capi" onkeyup="javascript:this.value=this.value.toLowerCase()" name="name" id="name" placeholder="Name" value="<?= set_value('name', $amuco_customers->name); ?>">
                                <small class="info help-block">
                                <b>Input Name</b> Max Length : 50.</small>
                            </div>
                        </div>
                                                 
                                                <!--div class="form-group ">
                            <label for="active" class="col-sm-2 control-label">Active 
                            <i class="required">*</i>
                            </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="active" id="active" placeholder="Active" value="<?= set_value('active', $amuco_customers->active); ?>">
                                <small class="info help-block">
                                <b>Input Active</b> Max Length : 1.</small>
                            </div>
                        </div-->
                        <div class="form-group ">
                            <label for="active" class="col-sm-2 control-label">Active 
                            <i class="required">*</i>
                            </label>
                            <div class="col-sm-8">
                                <select  class="form-control chosen chosen-select" name="active" id="active" data-placeholder="Select Active" >
                                    <option value=""></option>
                                    <option <?= $amuco_customers->active == "0" ? 'selected' :''; ?> value="0">No</option>
                                    <option <?= $amuco_customers->active == "1" ? 'selected' :''; ?> value="1">Yes</option>
                                    </select>
                                <small class="info help-block">
                                </small>
                            </div>
                        </div>
                                                 
                                                <div class="form-group ">
                            <label for="code" class="col-sm-2 control-label">Code 
                            <i class="required">*</i>
                            </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="code" id="code" placeholder="Code" value="<?= set_value('code', $amuco_customers->code); ?>">
                                <small class="info help-block">
                                <b>Input Code</b> Max Length : 50.</small>
                            </div>
                        </div>
                                                 
                                                <div class="form-group ">
                            <label for="nit" class="col-sm-2 control-label">Nit 
                           
                            </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="nit" id="nit" placeholder="Nit" value="<?= set_value('nit', $amuco_customers->nit); ?>">
                                <small class="info help-block">
                                <b>Input Nit</b> Max Length : 50.</small>
                            </div>
                        </div>
                                                 
                                                <div class="form-group ">
                            <label for="email" class="col-sm-2 control-label">Email 
                           
                            </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="email" id="email" placeholder="Email" value="<?= set_value('email', $amuco_customers->email); ?>">
                                <small class="info help-block">
                                <b>Input Email</b> Max Length : 100.</small>
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
                                    <option <?=  $row->id ==  $amuco_customers->country ? 'selected' : ''; ?> value="<?= $row->id ?>"><?= $row->name; ?></option>
                                    <?php endforeach; ?>  
                                </select>
                                <small class="info help-block">
                                <b>Input Country</b> Max Length : 11.</small>
                            </div>
                        </div>


                                                 
                                                <div class="form-group ">
                            <label for="city" class="col-sm-2 control-label">City 
                            
                            </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control capi" onkeyup="javascript:this.value=this.value.toLowerCase()" name="city" id="city" placeholder="City" value="<?= set_value('city', $amuco_customers->city); ?>">
                                <small class="info help-block">
                                <b>Input City</b> Max Length : 100.</small>
                            </div>
                        </div>
                                                 
                                                <div class="form-group ">
                            <label for="state" class="col-sm-2 control-label">State 
                           
                            </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control capi " onkeyup="javascript:this.value=this.value.toLowerCase()" name="state" id="state" placeholder="State" value="<?= set_value('state', $amuco_customers->state); ?>">
                                <small class="info help-block">
                                <b>Input State</b> Max Length : 100.</small>
                            </div>
                        </div>
                                                 
                                                <div class="form-group ">
                            <label for="postal_code" class="col-sm-2 control-label">Postal Code 
                            </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="postal_code" id="postal_code" placeholder="Postal Code" value="<?= set_value('postal_code', $amuco_customers->postal_code); ?>">
                                <small class="info help-block">
                                <b>Input Postal Code</b> Max Length : 20.</small>
                            </div>
                        </div>
                                                 
                                                <div class="form-group ">
                            <label for="address" class="col-sm-2 control-label">Address 
                           
                            </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control capi" onkeyup="javascript:this.value=this.value.toLowerCase()" name="address" id="address" placeholder="Address" value="<?= set_value('address', $amuco_customers->address); ?>">
                                <small class="info help-block">
                                <b>Input Address</b> Max Length : 100.</small>
                            </div>
                        </div>
                                                 
                                                <div class="form-group ">
                            <label for="mobile_phone" class="col-sm-2 control-label">Mobile Phone 
                          
                            </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="mobile_phone" id="mobile_phone" placeholder="Mobile Phone" value="<?= set_value('mobile_phone', $amuco_customers->mobile_phone); ?>">
                                <small class="info help-block">
                                <b>Input Mobile Phone</b> Max Length : 30.</small>
                            </div>
                        </div>
                                                 
                                                <div class="form-group ">
                            <label for="office_phone" class="col-sm-2 control-label">Office Phone 
                            </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="office_phone" id="office_phone" placeholder="Office Phone" value="<?= set_value('office_phone', $amuco_customers->office_phone); ?>">
                                <small class="info help-block">
                                <b>Input Office Phone</b> Max Length : 30.</small>
                            </div>
                        </div>
                                                 
                                                <div class="form-group ">
                            <label for="fax" class="col-sm-2 control-label">Fax 
                            </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="fax" id="fax" placeholder="Fax" value="<?= set_value('fax', $amuco_customers->fax); ?>">
                                <small class="info help-block">
                                <b>Input Fax</b> Max Length : 30.</small>
                            </div>
                        </div>
                                                 
                                                <div class="form-group ">
                            <label for="pobox" class="col-sm-2 control-label">Pobox 
                            </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="pobox" id="pobox" placeholder="Pobox" value="<?= set_value('pobox', $amuco_customers->pobox); ?>">
                                <small class="info help-block">
                                <b>Input Pobox</b> Max Length : 50.</small>
                            </div>
                        </div>
                                                 
                                                <div class="form-group ">
                            <label for="url" class="col-sm-2 control-label">Url 
                            </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="url" id="url" placeholder="Url" value="<?= set_value('url', $amuco_customers->url == "" ? 'http://'.$amuco_customers->url : $amuco_customers->url) ; ?>">
                                <small class="info help-block">
                                <b>Input Url</b> Max Length : 100.</small>
                            </div>
                        </div>
                                                 
                        <div class="form-group">
                            <label for="is_branche" class="col-sm-2 control-label">Branch 
                            <i class="required">*</i>
                            </label>
                            <div class="col-sm-8">
                                <select  class="form-control chosen chosen-select" name="is_branche" id="is_branche" data-placeholder="Select Is Branche" >
                                    <option value=""></option>
                                    <option <?= $amuco_customers->is_branche == "0" ? 'selected' :''; ?> value="0">No</option>
                                    <option <?= $amuco_customers->is_branche == "1" ? 'selected' :''; ?> value="1">Yes</option>
                                    </select>
                                <small class="info help-block">
                                </small>
                            </div>
                        </div>
                                                 
                        <div class="form-group"  id="head_off" style="display:<?php echo  $amuco_customers->is_branche == "0" ? 'none': 'block'?>">
                            <label for="head_office" class="col-sm-2 control-label">Head Office 
                            </label>
                            <div class="col-sm-8">
                                <select class="form-control" id="head_office" name="head_office" >
                                    <?php foreach($head_office as $customer) :?>
                                       <?php if($amuco_customers->head_office == $customer->id) :?>
                                            <option selected value="<?php echo $customer->id;?>"><?php echo $customer->name;?></option>
                                        <?php else: ?>
                                          <?php if($amuco_customers->id != $customer->id) :?>
                                            <option value="<?php echo $customer->id;?>"><?php echo $customer->name;?></option>
                                    <?php endif;  endif; endforeach;?>
                                </select>
                                <small class="info help-block">
                                <b>Input Head Office</b> Max Length : 10.</small>
                            </div>
                        </div>
            
                                                 
                                                <div class="form-group ">
                            <label for="industry_type" class="col-sm-2 control-label">Industry Type 
                            <i class="required">*</i>
                            </label>
                            <div class="col-sm-8">
                                <select  class="form-control chosen chosen-select" name="industry_type[]" id="industry_type" data-placeholder="Select Industry Type" multiple >
                                    <option value=""></option>
                                    <?php foreach (db_get_all_data('amuco_industry_type') as $row): ?>
                                    <option <?=  in_array($row->id, explode(',', $amuco_customers->industry_type)) ? 'selected' : ''; ?> value="<?= $row->id ?>"><?= $row->name; ?></option>
                                    <?php endforeach; ?>  
                                </select>
                                <small class="info help-block">
                                <b>Input Industry Type</b> Max Length : 100.</small>
                            </div>
                        </div>
                                                 
                                                <div class="form-group ">
                            <label for="sales_agent" class="col-sm-2 control-label">Sales Agent 
                            </label>
                            <div class="col-sm-8">
                                <select  class="form-control chosen chosen-select-deselect" name="sales_agent[]" id="sales_agent" data-placeholder="Select Sales Agent" multiple >
                                    <option value=""></option>
                                    <?php foreach (db_get_all_data('aauth_users') as $row): ?>
                                    <option <?=  in_array($row->id, explode(',', $amuco_customers->sales_agent)) ? 'selected' : ''; ?> value="<?= $row->id ?>"><?= $row->username; ?></option>

                                    <?php endforeach; ?>  
                                </select>
                                <small class="info help-block">
                                <b>Input Sales Agent</b> Max Length : 250.</small>
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
       
        $('#is_branche').change(function(){
            //  alert( $('#is_branch').val());
            var seleccion=document.getElementById('is_branche');
            if(seleccion.value == 1){
                $('#head_off').show();
            }else{
                $('#head_off').hide();
            }
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
              window.location.href = BASE_URL + 'administrator/amuco_customers';
            }
          });
    
        return false;
      }); /*end btn cancel*/
    
      $('.btn_save').click(function(){
        $('.message').fadeOut();
            
        var form_amuco_customers = $('#form_amuco_customers');
        var data_post = form_amuco_customers.serializeArray();
        var save_type = $(this).attr('data-stype');
        data_post.push({name: 'save_type', value: save_type});
    
        $('.loading').show();
    
        $.ajax({
          url: form_amuco_customers.attr('action'),
          type: 'POST',
          dataType: 'json',
          data: data_post,
        })
        .done(function(res) {
          $('form').find('.form-group').removeClass('has-error');
          $('form').find('.error-input').remove();
          $('.steps li').removeClass('error');
          if(res.success) {
            var id = $('#amuco_customers_image_galery').find('li').attr('qq-file-id');
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