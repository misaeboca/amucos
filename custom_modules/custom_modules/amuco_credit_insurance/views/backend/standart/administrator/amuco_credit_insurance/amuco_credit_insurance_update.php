

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
        Amuco Credit Insurance        <small>Edit Amuco Credit Insurance</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class=""><a  href="<?= site_url('administrator/amuco_credit_insurance'); ?>">Amuco Credit Insurance</a></li>
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
                            <h3 class="widget-user-username">Amuco Credit Insurance</h3>
                            <h5 class="widget-user-desc">Edit Amuco Credit Insurance</h5>
                            <hr>
                        </div>
                        <?= form_open(base_url('administrator/amuco_credit_insurance/edit_save/'.$this->uri->segment(4)), [
                            'name'    => 'form_amuco_credit_insurance', 
                            'class'   => 'form-horizontal form-step', 
                            'id'      => 'form_amuco_credit_insurance', 
                            'method'  => 'POST'
                            ]); ?>
                         
                                                <div class="form-group ">
                            <label for="customer_id" class="col-sm-2 control-label">Customer Id 
                            <i class="required">*</i>
                            </label>
                            <div class="col-sm-8">
                                <select  class="form-control chosen chosen-select-deselect" name="customer_id" id="customer_id" data-placeholder="Select Customer Id" >
                                    <option value=""></option>
                                    <?php foreach (db_get_all_data('amuco_customers') as $row): ?>
                                    <option <?=  $row->id ==  $amuco_credit_insurance->customer_id ? 'selected' : ''; ?> value="<?= $row->id ?>"><?= $row->name; ?></option>
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
                                <input type="text" class="form-control" name="raiting" id="raiting" placeholder="Raiting" value="<?= set_value('raiting', $amuco_credit_insurance->raiting); ?>">
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
                                        <input type="radio" class="flat-red" name="credit_ever_denied" id="credit_ever_denied"  value="1" <?= $amuco_credit_insurance->credit_ever_denied == "1" ? "checked" : ""; ?>>
                                        Yes
                                    </label>
                                </div>
                                <div class="col-md-14">
                                    <label>
                                        <input type="radio" class="flat-red" name="credit_ever_denied" id="credit_ever_denied"  value="0" <?= $amuco_credit_insurance->credit_ever_denied == "0" ? "checked" : ""; ?>>
                                        No
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
                                <input type="text" class="form-control" name="available_credit" id="available_credit" placeholder="Available Credit" value="<?= set_value('available_credit', $amuco_credit_insurance->available_credit); ?>">
                                <small class="info help-block">
                                </small>
                            </div>
                        </div>
                                                 
                                                <div class="form-group ">
                            <label for="insured_credit" class="col-sm-2 control-label">Insured Credit 
                            <i class="required">*</i>
                            </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="insured_credit" id="insured_credit" placeholder="Insured Credit" value="<?= set_value('insured_credit', $amuco_credit_insurance->insured_credit); ?>">
                                <small class="info help-block">
                                </small>
                            </div>
                        </div>
                                                 
                                                <div class="form-group ">
                            <label for="own_risk" class="col-sm-2 control-label">Own Risk 
                            <i class="required">*</i>
                            </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="own_risk" id="own_risk" placeholder="Own Risk" value="<?= set_value('own_risk', $amuco_credit_insurance->own_risk); ?>">
                                <small class="info help-block">
                                </small>
                            </div>
                        </div>
                                                 
                                                <div class="form-group ">
                            <label for="highest_ever_insured" class="col-sm-2 control-label">Highest Ever Insured 
                            <i class="required">*</i>
                            </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="highest_ever_insured" id="highest_ever_insured" placeholder="Highest Ever Insured" value="<?= set_value('highest_ever_insured', $amuco_credit_insurance->highest_ever_insured); ?>">
                                <small class="info help-block">
                                </small>
                            </div>
                        </div>
                                                 
                                                <div class="form-group ">
                            <label for="request_increase_status" class="col-sm-2 control-label">Request Increase Status 
                            </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="request_increase_status" id="request_increase_status" placeholder="Request Increase Status" value="<?= set_value('request_increase_status', $amuco_credit_insurance->request_increase_status); ?>">
                                <small class="info help-block">
                                <b>Input Request Increase Status</b> Max Length : 20.</small>
                            </div>
                        </div>
                                                 
                                                <div class="form-group ">
                            <label for="mount_increase" class="col-sm-2 control-label">Mount Increase 
                            </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="mount_increase" id="mount_increase" placeholder="Mount Increase" value="<?= set_value('mount_increase', $amuco_credit_insurance->mount_increase); ?>">
                                <small class="info help-block">
                                </small>
                            </div>
                        </div>
                                                 
                                                <div class="form-group ">
                            <label for="last_increased_requested" class="col-sm-2 control-label">Last Increased Requested 
                            </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="last_increased_requested" id="last_increased_requested" placeholder="Last Increased Requested" value="<?= set_value('last_increased_requested', $amuco_credit_insurance->last_increased_requested); ?>">
                                <small class="info help-block">
                                </small>
                            </div>
                        </div>
                                                 
                                                <div class="form-group ">
                            <label for="date_last_increased_requested" class="col-sm-2 control-label">Date Last Increased Requested 
                            </label>
                            <div class="col-sm-6">
                            <div class="input-group date col-sm-8">
                              <input type="text" class="form-control pull-right datetimepicker" name="date_last_increased_requested"  placeholder="Date Last Increased Requested" id="date_last_increased_requested" value="<?= set_value('date_last_increased_requested', $amuco_credit_insurance->date_last_increased_requested); ?>">
                            </div>
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
              window.location.href = BASE_URL + 'administrator/amuco_credit_insurance';
            }
          });
    
        return false;
      }); /*end btn cancel*/
    
      $('.btn_save').click(function(){
        $('.message').fadeOut();
            
        var form_amuco_credit_insurance = $('#form_amuco_credit_insurance');
        var data_post = form_amuco_credit_insurance.serializeArray();
        var save_type = $(this).attr('data-stype');
        data_post.push({name: 'save_type', value: save_type});
    
        $('.loading').show();
    
        $.ajax({
          url: form_amuco_credit_insurance.attr('action'),
          type: 'POST',
          dataType: 'json',
          data: data_post,
        })
        .done(function(res) {
          $('form').find('.form-group').removeClass('has-error');
          $('form').find('.error-input').remove();
          $('.steps li').removeClass('error');
          if(res.success) {
            var id = $('#amuco_credit_insurance_image_galery').find('li').attr('qq-file-id');
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