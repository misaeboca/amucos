
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
        Amuco Details Request Office        <small><?= cclang('new', ['Amuco Details Request Office']); ?> </small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class=""><a  href="<?= site_url('administrator/amuco_details_request_office'); ?>">Amuco Details Request Office</a></li>
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
                            <h3 class="widget-user-username">Amuco Details Request Office</h3>
                            <h5 class="widget-user-desc"><?= cclang('new', ['Amuco Details Request Office']); ?></h5>
                            <hr>
                        </div>
                        <?= form_open('', [
                            'name'    => 'form_amuco_details_request_office', 
                            'class'   => 'form-horizontal form-step', 
                            'id'      => 'form_amuco_details_request_office', 
                            'enctype' => 'multipart/form-data', 
                            'method'  => 'POST'
                            ]); ?>
                         
                                                <div class="form-group ">
                            <label for="status" class="col-sm-2 control-label">Status 
                            </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="status" id="status" placeholder="Status" value="<?= set_value('status'); ?>">
                                <small class="info help-block">
                                </small>
                            </div>
                        </div>
                                                 
                                                <div class="form-group ">
                            <label for="ETD" class="col-sm-2 control-label">ETD 
                            <i class="required">*</i>
                            </label>
                            <div class="col-sm-6">
                            <div class="input-group date col-sm-8">
                              <input type="text" class="form-control pull-right datetimepicker" name="ETD"  id="ETD">
                            </div>
                            <small class="info help-block">
                            </small>
                            </div>
                        </div>
                                                 
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
                            <label for="quantity" class="col-sm-2 control-label">Quantity 
                            </label>
                            <div class="col-sm-8">
                                <input type="number" class="form-control" name="quantity" id="quantity" placeholder="Quantity" value="<?= set_value('quantity'); ?>">
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
                                    <option value="<?= $row->id ?>"><?= $row->name; ?></option>
                                    <?php endforeach; ?>  
                                </select>
                                <small class="info help-block">
                                <b>Input Unit</b> Max Length : 10.</small>
                            </div>
                        </div>

                                                 
                                                <div class="form-group ">
                            <label for="fcl" class="col-sm-2 control-label">Fcl 
                            </label>
                            <div class="col-sm-8">
                                <input type="number" class="form-control" name="fcl" id="fcl" placeholder="Fcl" value="<?= set_value('fcl'); ?>">
                                <small class="info help-block">
                                <b>Input Fcl</b> Max Length : 10.</small>
                            </div>
                        </div>
                                                 
                                                <div class="form-group ">
                            <label for="fcl_option" class="col-sm-2 control-label">Fcl Option 
                            </label>
                            <div class="col-sm-8">
                                <input type="number" class="form-control" name="fcl_option" id="fcl_option" placeholder="Fcl Option" value="<?= set_value('fcl_option'); ?>">
                                <small class="info help-block">
                                <b>Input Fcl Option</b> Max Length : 10.</small>
                            </div>
                        </div>
                                                 
                                                <div class="form-group ">
                            <label for="type_fcl" class="col-sm-2 control-label">Type Fcl 
                            </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="type_fcl" id="type_fcl" placeholder="Type Fcl" value="<?= set_value('type_fcl'); ?>">
                                <small class="info help-block">
                                <b>Input Type Fcl</b> Max Length : 50.</small>
                            </div>
                        </div>
                                                 
                                                <div class="form-group ">
                            <label for="weight" class="col-sm-2 control-label">Weight 
                            </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="weight" id="weight" placeholder="Weight" value="<?= set_value('weight'); ?>">
                                <small class="info help-block">
                                <b>Input Weight</b> Max Length : 50.</small>
                            </div>
                        </div>
                                                 
                                                <div class="form-group ">
                            <label for="shape" class="col-sm-2 control-label">Shape 
                            </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="shape" id="shape" placeholder="Shape" value="<?= set_value('shape'); ?>">
                                <small class="info help-block">
                                <b>Input Shape</b> Max Length : 50.</small>
                            </div>
                        </div>
                                                 
                                                <div class="form-group ">
                            <label for="material" class="col-sm-2 control-label">Material 
                            </label>
                            <div class="col-sm-8">
                                <select  class="form-control chosen chosen-select-deselect" name="material" id="material" data-placeholder="Select Material" >
                                    <option value=""></option>
                                    <?php foreach (db_get_all_data('amuco_material') as $row): ?>
                                    <option value="<?= $row->id ?>"><?= $row->name; ?></option>
                                    <?php endforeach; ?>  
                                </select>
                                <small class="info help-block">
                                <b>Input Material</b> Max Length : 50.</small>
                            </div>
                        </div>

                                                 
                                                <div class="form-group ">
                            <label for="pallets" class="col-sm-2 control-label">Pallets 
                            </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="pallets" id="pallets" placeholder="Pallets" value="<?= set_value('pallets'); ?>">
                                <small class="info help-block">
                                <b>Input Pallets</b> Max Length : 50.</small>
                            </div>
                        </div>
                                                 
                                                <div class="form-group ">
                            <label for="price_fob" class="col-sm-2 control-label">Price Fob 
                            </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="price_fob" id="price_fob" placeholder="Price Fob" value="<?= set_value('price_fob'); ?>">
                                <small class="info help-block">
                                </small>
                            </div>
                        </div>
                                                 
                                                <div class="form-group ">
                            <label for="total_freight" class="col-sm-2 control-label">Total Freight 
                            </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="total_freight" id="total_freight" placeholder="Total Freight" value="<?= set_value('total_freight'); ?>">
                                <small class="info help-block">
                                <b>Input Total Freight</b> Max Length : 50.</small>
                            </div>
                        </div>
                                                 
                                                <div class="form-group ">
                            <label for="total_price" class="col-sm-2 control-label">Total Price 
                            </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="total_price" id="total_price" placeholder="Total Price" value="<?= set_value('total_price'); ?>">
                                <small class="info help-block">
                                </small>
                            </div>
                        </div>
                                                 
                                                <div class="form-group ">
                            <label for="comission_supplier" class="col-sm-2 control-label">Comission Supplier 
                            </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="comission_supplier" id="comission_supplier" placeholder="Comission Supplier" value="<?= set_value('comission_supplier'); ?>">
                                <small class="info help-block">
                                <b>Input Comission Supplier</b> Max Length : 50.</small>
                            </div>
                        </div>
                                                 
                                                <div class="form-group ">
                            <label for="shipping_port" class="col-sm-2 control-label">Shipping Port 
                            <i class="required">*</i>
                            </label>
                            <div class="col-sm-8">
                                <select  class="form-control chosen chosen-select-deselect" name="shipping_port" id="shipping_port" data-placeholder="Select Shipping Port" >
                                    <option value=""></option>
                                    <?php foreach (db_get_all_data('amuco_destination_port') as $row): ?>
                                    <option value="<?= $row->id ?>"><?= $row->name; ?></option>
                                    <?php endforeach; ?>  
                                </select>
                                <small class="info help-block">
                                <b>Input Shipping Port</b> Max Length : 10.</small>
                            </div>
                        </div>

                                                 
                                                <div class="form-group ">
                            <label for="supplier_incoterm" class="col-sm-2 control-label">Supplier Incoterm 
                            <i class="required">*</i>
                            </label>
                            <div class="col-sm-8">
                                <select  class="form-control chosen chosen-select-deselect" name="supplier_incoterm" id="supplier_incoterm" data-placeholder="Select Supplier Incoterm" >
                                    <option value=""></option>
                                    <?php foreach (db_get_all_data('amuco_incoterm') as $row): ?>
                                    <option value="<?= $row->id ?>"><?= $row->name; ?></option>
                                    <?php endforeach; ?>  
                                </select>
                                <small class="info help-block">
                                <b>Input Supplier Incoterm</b> Max Length : 10.</small>
                            </div>
                        </div>

                                                 
                                                <div class="form-group ">
                            <label for="supplier" class="col-sm-2 control-label">Supplier 
                            <i class="required">*</i>
                            </label>
                            <div class="col-sm-8">
                                <select  class="form-control chosen chosen-select-deselect" name="supplier" id="supplier" data-placeholder="Select Supplier" >
                                    <option value=""></option>
                                    <?php foreach (db_get_all_data('amuco_suppliers') as $row): ?>
                                    <option value="<?= $row->id ?>"><?= $row->name; ?></option>
                                    <?php endforeach; ?>  
                                </select>
                                <small class="info help-block">
                                <b>Input Supplier</b> Max Length : 10.</small>
                            </div>
                        </div>

                                                 
                                                <div class="form-group ">
                            <label for="branch" class="col-sm-2 control-label">Branch 
                            </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="branch" id="branch" placeholder="Branch" value="<?= set_value('branch'); ?>">
                                <small class="info help-block">
                                <b>Input Branch</b> Max Length : 150.</small>
                            </div>
                        </div>
                                                 
                                                <div class="form-group ">
                            <label for="payment_terms" class="col-sm-2 control-label">Payment Terms 
                            </label>
                            <div class="col-sm-8">
                                <select  class="form-control chosen chosen-select-deselect" name="payment_terms" id="payment_terms" data-placeholder="Select Payment Terms" >
                                    <option value=""></option>
                                    <?php foreach (db_get_all_data('amuco_payments_terms_suppliers') as $row): ?>
                                    <option value="<?= $row->id ?>"><?= $row->name; ?></option>
                                    <?php endforeach; ?>  
                                </select>
                                <small class="info help-block">
                                <b>Input Payment Terms</b> Max Length : 10.</small>
                            </div>
                        </div>

                                                 
                                                <div class="form-group ">
                            <label for="comments" class="col-sm-2 control-label">Comments 
                            </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="comments" id="comments" placeholder="Comments" value="<?= set_value('comments'); ?>">
                                <small class="info help-block">
                                <b>Input Comments</b> Max Length : 250.</small>
                            </div>
                        </div>
                                                 
                                                <div class="form-group ">
                            <label for="analysis_standard" class="col-sm-2 control-label">Analysis Standard 
                            </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="analysis_standard" id="analysis_standard" placeholder="Analysis Standard" value="<?= set_value('analysis_standard'); ?>">
                                <small class="info help-block">
                                <b>Input Analysis Standard</b> Max Length : 250.</small>
                            </div>
                        </div>
                                                 
                                                <div class="form-group ">
                            <label for="valid_untill" class="col-sm-2 control-label">Valid Untill 
                            </label>
                            <div class="col-sm-6">
                            <div class="input-group date col-sm-8">
                              <input type="text" class="form-control pull-right datetimepicker" name="valid_untill"  id="valid_untill">
                            </div>
                            <small class="info help-block">
                            </small>
                            </div>
                        </div>
                                                 
                                                <div class="form-group ">
                            <label for="purchasing" class="col-sm-2 control-label">Purchasing 
                            </label>
                            <div class="col-sm-8">
                                <select  class="form-control chosen chosen-select-deselect" name="purchasing" id="purchasing" data-placeholder="Select Purchasing" >
                                    <option value=""></option>
                                    <?php foreach (db_get_all_data('aauth_users') as $row): ?>
                                    <option value="<?= $row->id ?>"><?= $row->username; ?></option>
                                    <?php endforeach; ?>  
                                </select>
                                <small class="info help-block">
                                </small>
                            </div>
                        </div>

                                                 
                                                <div class="form-group ">
                            <label for="supplier_direct" class="col-sm-2 control-label">Supplier Direct 
                            </label>
                            <div class="col-sm-8">
                                <select  class="form-control chosen chosen-select-deselect" name="supplier_direct" id="supplier_direct" data-placeholder="Select Supplier Direct" >
                                    <option value=""></option>
                                    <?php foreach (db_get_all_data('amuco_suppliers') as $row): ?>
                                    <option value="<?= $row->id ?>"><?= $row->name; ?></option>
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
              window.location.href = BASE_URL + 'administrator/amuco_details_request_office';
            }
          });
    
        return false;
      }); /*end btn cancel*/
    
      $('.btn_save').click(function(){
        $('.message').fadeOut();
            
        var form_amuco_details_request_office = $('#form_amuco_details_request_office');
        var data_post = form_amuco_details_request_office.serializeArray();
        var save_type = $(this).attr('data-stype');

        data_post.push({name: 'save_type', value: save_type});
    
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
            
            if (save_type == 'back') {
              window.location.href = res.redirect;
              return;
            }
    
            $('.message').printMessage({message : res.message});
            $('.message').fadeIn();
            resetForm();
            $('.chosen option').prop('selected', false).trigger('chosen:updated');
                
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