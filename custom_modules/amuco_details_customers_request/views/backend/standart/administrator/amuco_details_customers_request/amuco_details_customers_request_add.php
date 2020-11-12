
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
        Amuco Details Customers Request        <small><?= cclang('new', ['Amuco Details Customers Request']); ?> </small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class=""><a  href="<?= site_url('administrator/amuco_details_customers_request'); ?>">Amuco Details Customers Request</a></li>
        <li class="active"><?= cclang('new'); ?></li>
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
                            <h3 class="widget-user-username">Amuco Details Customers Request</h3>
                            <h5 class="widget-user-desc"><?= cclang('new', ['Amuco Details Customers Request']); ?></h5>
                            <hr>
                        </div>
                        <?= form_open('', [
                            'name'    => 'form_amuco_details_customers_request', 
                            'class'   => 'form-horizontal form-step', 
                            'id'      => 'form_amuco_details_customers_request', 
                            'enctype' => 'multipart/form-data', 
                            'method'  => 'POST'
                            ]); ?>
                         
                                                <div class="form-group ">
                            <label for="product_id" class="col-sm-2 control-label">Product Id 
                            <i class="required">*</i>
                            </label>
                            <div class="col-sm-8">
                                <select  class="form-control chosen chosen-select-deselect" name="product_id" id="product_id" data-placeholder="Select Product Id" >
                                    <option value=""></option>
                                    <?php foreach (db_get_all_data('amuco_products') as $row): ?>
                                    <option value="<?= $row->id ?>"><?= $row->name; ?></option>
                                    <?php endforeach; ?>  
                                </select>
                                <small class="info help-block">
                                <b>Input Product Id</b> Max Length : 10.</small>
                            </div>
                        </div>

                                                 
                                                <div class="form-group ">
                            <label for="customer_request_id" class="col-sm-2 control-label">Customer Request Id 
                            <i class="required">*</i>
                            </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="customer_request_id" id="customer_request_id" placeholder="Customer Request Id" value="<?= set_value('customer_request_id'); ?>">
                                <small class="info help-block">
                                <b>Input Customer Request Id</b> Max Length : 10.</small>
                            </div>
                        </div>
                                                 
                                                <div class="form-group ">
                            <label for="quantity" class="col-sm-2 control-label">Quantity 
                            </label>
                            <div class="col-sm-8">
                                <input type="number" class="form-control" name="quantity" id="quantity" placeholder="Quantity" value="<?= set_value('quantity'); ?>">
                                <small class="info help-block">
                                <b>Input Quantity</b> Max Length : 10.</small>
                            </div>
                        </div>
                                                 
                                                <div class="form-group ">
                            <label for="unit" class="col-sm-2 control-label">Unit 
                            </label>
                            <div class="col-sm-8">
                                <select  class="form-control chosen chosen-select-deselect" name="unit" id="unit" data-placeholder="Select Unit" >
                                    <option value=""></option>
                                    <?php foreach (db_get_all_data('amuco_unit_types') as $row): ?>
                                    <option value="<?= $row->id ?>"><?= $row->name; ?></option>
                                    <?php endforeach; ?>  
                                </select>
                                <small class="info help-block">
                                <b>Input Unit</b> Max Length : 10.</small>
                            </div>
                        </div>

                                                 
                                                <div class="form-group ">
                            <label for="status" class="col-sm-2 control-label">Status 
                            <i class="required">*</i>
                            </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="status" id="status" placeholder="Status" value="<?= set_value('status'); ?>">
                                <small class="info help-block">
                                <b>Input Status</b> Max Length : 50.</small>
                            </div>
                        </div>
                                                 
                                                <div class="form-group ">
                            <label for="fcl" class="col-sm-2 control-label">Fcl 
                            </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="fcl" id="fcl" placeholder="Fcl" value="<?= set_value('fcl'); ?>">
                                <small class="info help-block">
                                <b>Input Fcl</b> Max Length : 20.</small>
                            </div>
                        </div>
                                                 
                                                <div class="form-group ">
                            <label for="weight" class="col-sm-2 control-label">Weight 
                            </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="weight" id="weight" placeholder="Weight" value="<?= set_value('weight'); ?>">
                                <small class="info help-block">
                                <b>Input Weight</b> Max Length : 20.</small>
                            </div>
                        </div>
                                                 
                                                <div class="form-group ">
                            <label for="packing" class="col-sm-2 control-label">Packing 
                            </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="packing" id="packing" placeholder="Packing" value="<?= set_value('packing'); ?>">
                                <small class="info help-block">
                                <b>Input Packing</b> Max Length : 20.</small>
                            </div>
                        </div>
                                                 
                                                <div class="form-group ">
                            <label for="material" class="col-sm-2 control-label">Material 
                            </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="material" id="material" placeholder="Material" value="<?= set_value('material'); ?>">
                                <small class="info help-block">
                                <b>Input Material</b> Max Length : 20.</small>
                            </div>
                        </div>
                                                 
                                                <div class="form-group ">
                            <label for="specific_remarks" class="col-sm-2 control-label">Specific Remarks 
                            </label>
                            <div class="col-sm-8">
                                <textarea id="specific_remarks" name="specific_remarks" rows="5" cols="80"><?= set_value('Specific Remarks'); ?></textarea>
                                <small class="info help-block">
                                <b>Input Specific Remarks</b> Max Length : 250.</small>
                            </div>
                        </div>
                                                 
                                                <div class="form-group ">
                            <label for="fcl_option" class="col-sm-2 control-label">Fcl Option 
                            </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="fcl_option" id="fcl_option" placeholder="Fcl Option" value="<?= set_value('fcl_option'); ?>">
                                <small class="info help-block">
                                </small>
                            </div>
                        </div>
                                                 
                                                <div class="form-group ">
                            <label for="type_fcl" class="col-sm-2 control-label">Type Fcl 
                            </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="type_fcl" id="type_fcl" placeholder="Type Fcl" value="<?= set_value('type_fcl'); ?>">
                                <small class="info help-block">
                                </small>
                            </div>
                        </div>
                                                 
                                                <div class="form-group ">
                            <label for="pallets" class="col-sm-2 control-label">Pallets 
                            </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="pallets" id="pallets" placeholder="Pallets" value="<?= set_value('pallets'); ?>">
                                <small class="info help-block">
                                </small>
                            </div>
                        </div>
                                                 
                                                <div class="form-group ">
                            <label for="unit_pack" class="col-sm-2 control-label">Unit Pack 
                            </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="unit_pack" id="unit_pack" placeholder="Unit Pack" value="<?= set_value('unit_pack'); ?>">
                                <small class="info help-block">
                                </small>
                            </div>
                        </div>
                                                 
                                                <div class="form-group ">
                            <label for="supplier" class="col-sm-2 control-label">Supplier 
                            </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="supplier" id="supplier" placeholder="Supplier" value="<?= set_value('supplier'); ?>">
                                <small class="info help-block">
                                </small>
                            </div>
                        </div>
                                                 
                                                <div class="form-group ">
                            <label for="purchasing" class="col-sm-2 control-label">Purchasing 
                            </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="purchasing" id="purchasing" placeholder="Purchasing" value="<?= set_value('purchasing'); ?>">
                                <small class="info help-block">
                                </small>
                            </div>
                        </div>
                                                 
                                                <div class="form-group ">
                            <label for="contacts" class="col-sm-2 control-label">Contacts 
                            </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="contacts" id="contacts" placeholder="Contacts" value="<?= set_value('contacts'); ?>">
                                <small class="info help-block">
                                </small>
                            </div>
                        </div>
                                                 
                                                <div class="form-group ">
                            <label for="ETD" class="col-sm-2 control-label">ETD 
                            </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="ETD" id="ETD" placeholder="ETD" value="<?= set_value('ETD'); ?>">
                                <small class="info help-block">
                                </small>
                            </div>
                        </div>
                                                 
                                                <div class="form-group ">
                            <label for="ETA" class="col-sm-2 control-label">ETA 
                            </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="ETA" id="ETA" placeholder="ETA" value="<?= set_value('ETA'); ?>">
                                <small class="info help-block">
                                </small>
                            </div>
                        </div>
                                                 
                                                <div class="form-group ">
                            <label for="date_created" class="col-sm-2 control-label">Date Created 
                            </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="date_created" id="date_created" placeholder="Date Created" value="<?= set_value('date_created'); ?>">
                                <small class="info help-block">
                                </small>
                            </div>
                        </div>
                                                 
                                                <div class="form-group ">
                            <label for="date_updated" class="col-sm-2 control-label">Date Updated 
                            </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="date_updated" id="date_updated" placeholder="Date Updated" value="<?= set_value('date_updated'); ?>">
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

                   CKEDITOR.replace('specific_remarks'); 
      var specific_remarks = CKEDITOR.instances.specific_remarks;
                   
      $('#btn_cancel').click(function(){
        swal({
            title: "<?= cclang('are_you_sure'); ?>",
            text: "<?= cclang('data_to_be_deleted_can_not_be_restored'); ?>",
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
          url: BASE_URL + '/administrator/amuco_details_customers_request/add_save',
          type: 'POST',
          dataType: 'json',
          data: data_post,
        })
        .done(function(res) {
          $('form').find('.form-group').removeClass('has-error');
          $('.steps li').removeClass('error');
          $('form').find('.error-input').remove();
          if(res.success) {
            
            if (save_type == 'back') {
              window.location.href = res.redirect;
              return;
            }
    
            $('.message').printMessage({message : res.message});
            $('.message').fadeIn();
            resetForm();
            $('.chosen option').prop('selected', false).trigger('chosen:updated');
            specific_remarks.setData('');
                
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
      }); /*end btn save*/
      
       
 
       

      
    
    
    }); /*end doc ready*/
</script>