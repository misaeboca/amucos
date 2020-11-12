

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
        Amuco Visits        <small>Edit Amuco Visits</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class=""><a  href="<?= site_url('administrator/amuco_visits'); ?>">Amuco Visits</a></li>
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
                            <h3 class="widget-user-username">Amuco Visits</h3>
                            <h5 class="widget-user-desc">Edit Amuco Visits</h5>
                            <hr>
                        </div>
                        <?= form_open(base_url('administrator/amuco_visits/edit_save/'.$this->uri->segment(4)), [
                            'name'    => 'form_amuco_visits', 
                            'class'   => 'form-horizontal form-step', 
                            'id'      => 'form_amuco_visits', 
                            'method'  => 'POST'
                            ]); ?>
                         
                                                <div class="form-group ">
                            <label for="type_visit" class="col-sm-2 control-label"> Visit Type
                            <i class="required">*</i>
                            </label>
                            <div class="col-sm-8">
                                <select  class="form-control chosen chosen-select" name="type_visit" id="type_visit" data-placeholder="Select  Visit Type" >
                                    <option value=""></option>
                                    <option <?= $amuco_visits->type_visit == "Personal" ? 'selected' :''; ?> value="Personal">Personal</option>
                                    <option <?= $amuco_visits->type_visit == "Telephone" ? 'selected' :''; ?> value="Telephone">Telephone</option>
                                    </select>
                                <small class="info help-block">
                                </small>
                            </div>
                        </div>
                                                 
                                                <div class="form-group ">
                            <label for="type_client" class="col-sm-2 control-label"> Client Type
                            <i class="required">*</i>
                            </label>
                            <div class="col-sm-8">
                                <select  class="form-control chosen chosen-select" name="type_client" id="type_client" data-placeholder="Select  Client " >
                                    <option value=""></option>
                                    <option <?= $amuco_visits->type_client == "Customer" ? 'selected' :''; ?> value="Customer">Customer</option>
                                    <option <?= $amuco_visits->type_client == "Supplier" ? 'selected' :''; ?> value="Supplier">Supplier</option>
                                    </select>
                                <small class="info help-block">
                                </small>
                            </div>
                        </div>
                                                 
                                                <div class="form-group ">
                            <label for="user_id" class="col-sm-2 control-label">User Id 
                            <i class="required">*</i>
                            </label>
                            <div class="col-sm-8">
                                <select  class="form-control chosen chosen-select-deselect" name="user_id" id="user_id" data-placeholder="Select User Id" >
                                    <option value=""></option>
                                    <?php foreach (db_get_all_data('aauth_users') as $row): ?>
                                    <option <?=  $row->id ==  $amuco_visits->user_id ? 'selected' : ''; ?> value="<?= $row->id ?>"><?= $row->username; ?></option>
                                    <?php endforeach; ?>  
                                </select>
                                <small class="info help-block">
                                <b>Input User Id</b> Max Length : 10.</small>
                            </div>
                        </div>


                                                 
                        <div class="form-group " id="customer" style="<?php echo $amuco_visits->type_client== 'Customer' ? 'display:block':'display:none' ?>">
                            <label for="customer_id" class="col-sm-2 control-label">Customer Id 
                            </label>
                            <div class="col-sm-8">
                                <select  class="form-control chosen chosen-select-deselect" name="customer_id" id="customer_id" data-placeholder="Select Customer Id" >
                                    <option value=""></option>
                                    <?php foreach (db_get_all_data('amuco_customers') as $row): ?>
                                    <option <?=  $row->id ==  $amuco_visits->customer_id ? 'selected' : ''; ?> value="<?= $row->id ?>"><?= $row->name; ?></option>
                                    <?php endforeach; ?>  
                                </select>
                                <small class="info help-block">
                                <b>Input Customer Id</b> Max Length : 10.</small>
                            </div>
                        </div>


                                                 
                        <div class="form-group " id="supplier" style="<?php echo $amuco_visits->type_client== 'Supplier' ? 'display:block':'display:none' ?>">
                            <label for="supplier_id" class="col-sm-2 control-label">Supplier Id 
                            </label>
                            <div class="col-sm-8">
                                <select  class="form-control chosen chosen-select-deselect" name="supplier_id" id="supplier_id" data-placeholder="Select Supplier Id" >
                                    <option value=""></option>
                                    <?php foreach (db_get_all_data('amuco_suppliers') as $row): ?>
                                    <option <?=  $row->id ==  $amuco_visits->supplier_id ? 'selected' : ''; ?> value="<?= $row->id ?>"><?= $row->name; ?></option>
                                    <?php endforeach; ?>  
                                </select>
                                <small class="info help-block">
                                </small>
                            </div>
                        </div>


                                                 
                                                <div class="form-group ">
                            <label for="date_visit" class="col-sm-2 control-label">Date Visit 
                            <i class="required">*</i>
                            </label>
                            <div class="col-sm-6">
                            <div class="input-group date col-sm-8">
                              <input type="text" class="form-control pull-right datepicker" name="date_visit"  placeholder="Date Visit" id="date_visit" value="<?= set_value('date_visit', $amuco_visits->date_visit); ?>">
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
                                    <option <?=  $row->id ==  $amuco_visits->contact_name ? 'selected' : ''; ?> value="<?= $row->id ?>"><?= $row->first_name; ?></option>
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
                                <input type="text" class="form-control capi" onkeyup="javascript:this.value=this.value.toLowerCase()" name="subject" id="subject" placeholder="Subject" value="<?= set_value('subject', $amuco_visits->subject); ?>">
                                <small class="info help-block">
                                <b>Input Subject</b> Max Length : 250.</small>
                            </div>
                        </div>
                                                 
                                                <div class="form-group ">
                            <label for="notes" class="col-sm-2 control-label">Notes 
                            <i class="required">*</i>
                            </label>
                            <div class="col-sm-8">
                                <textarea class="capi" id="notes" name="notes" onkeyup="javascript:this.value=this.value.toLowerCase()" rows="10" cols="80"> <?= set_value('notes', $amuco_visits->notes); ?></textarea>
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
<script src="<?= BASE_ASSET; ?>ckeditor/ckeditor.js"></script>
<!-- Page script -->
<script>
    $(document).ready(function(){
       
      
        CKEDITOR.replace('notes'); 
        var notes = CKEDITOR.instances.notes;
        $('#customer_id').change(function(){
        
            $('#contact_name').empty();
            $('#contact_name').prop('selected', false).trigger('chosen:updated');
            var id = $(this).val();
            $.ajax({
                url: BASE_URL + '/administrator/amuco_visits/get_contacts_by_id?id='+id+'&type=customer',
                type: 'GET',
                dataType: 'json',   
            })
            .done(function(response) {
                console.log(response.contacts.length);
                if(response.success){
                    
                    if(response.contacts.length > 0){
                        for(var i = 0; i < response.contacts.length;i++){
                            $('#contact_name').append($('<option>', {value: response.contacts[i].id, text:response.contacts[i].name}));
                            
                        }
                        
                        $('#contact_name').prop('selected', false).trigger('chosen:updated');
                    }
                }else{
                    $('.message').printMessage({message : 'Error save data', type : 'warning'});
                }
            })
            .fail(function() {
                $('.message').printMessage({message : 'Error save data', type : 'warning'});
            })
            .always(function() {
                $('.loading').hide();
                $('html, body').animate({ scrollTop: $(document).height() }, 2000);
            });
        });
        $('#supplier_id').change(function(){
            $('#contact_name').empty();
            $('#contact_name').prop('selected', false).trigger('chosen:updated');
            
            var id = $(this).val();
            $.ajax({
                url: BASE_URL + '/administrator/amuco_visits/get_contacts_by_id?id='+id+'&type=supplier',
                type: 'GET',
                dataType: 'json',   
            })
            .done(function(response) {
                console.log(response.contacts.length);
                if(response.success){
                    
                    if(response.contacts.length > 0){
                        for(var i = 0; i < response.contacts.length;i++){
                            $('#contact_name').append($('<option>', {value: response.contacts[i].id, text:response.contacts[i].first_name + ' '+response.contacts[i].last_name }));
                            
                        }
                        
                        $('#contact_name').prop('selected', false).trigger('chosen:updated');
                    }
                }else{
                    $('.message').printMessage({message : 'Error save data', type : 'warning'});
                }
            })
            .fail(function() {
                $('.message').printMessage({message : 'Error save data', type : 'warning'});
            })
            .always(function() {
                $('.loading').hide();
                $('html, body').animate({ scrollTop: $(document).height() }, 2000);
            });
        });
        $('#type_client').change(function(){
        //   alert( $('#type_contact').val());
            $('#contact_name').empty();
            $('#contact_name').prop('selected', false).trigger('chosen:updated');
            $('#customer_id').val([]);
            $('#customer_id').prop('selected', false).trigger('chosen:updated');
            $('#supplier_id').val([]);
            $('#supplier_id').prop('selected', false).trigger('chosen:updated');
            var seleccion=$('#type_client').val();
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
              window.location.href = BASE_URL + 'administrator/amuco_visits';
            }
          });
    
        return false;
      }); /*end btn cancel*/
    
      $('.btn_save').click(function(){
        $('.message').fadeOut();
        $('#notes').val(notes.getData());
                    
        var form_amuco_visits = $('#form_amuco_visits');
        var data_post = form_amuco_visits.serializeArray();
        var save_type = $(this).attr('data-stype');
        data_post.push({name: 'save_type', value: save_type});
    
        $('.loading').show();
    
        $.ajax({
          url: form_amuco_visits.attr('action'),
          type: 'POST',
          dataType: 'json',
          data: data_post,
        })
        .done(function(res) {
          $('form').find('.form-group').removeClass('has-error');
          $('form').find('.error-input').remove();
          $('.steps li').removeClass('error');
          if(res.success) {
            var id = $('#amuco_visits_image_galery').find('li').attr('qq-file-id');
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