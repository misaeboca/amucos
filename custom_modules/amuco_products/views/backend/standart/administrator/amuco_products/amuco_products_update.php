

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
        Amuco Products        <small>Edit Amuco Products</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class=""><a  href="<?= site_url('administrator/amuco_products'); ?>">Amuco Products</a></li>
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
                            <h3 class="widget-user-username">Amuco Products</h3>
                            <h5 class="widget-user-desc">Edit Amuco Products</h5>
                            <hr>
                        </div>
                        <?= form_open(base_url('administrator/amuco_products/edit_save/'.$this->uri->segment(4)), [
                            'name'    => 'form_amuco_products', 
                            'class'   => 'form-horizontal form-step', 
                            'id'      => 'form_amuco_products', 
                            'method'  => 'POST'
                            ]); ?>
                         
                                                <div class="form-group ">
                            <label for="name" class="col-sm-2 control-label">Name 
                            <i class="required">*</i>
                            </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control capi" onkeyup="javascript:this.value=this.value.toLowerCase()" name="name" id="name" placeholder="Name" value="<?= set_value('name', $amuco_products->name); ?>">
                                <small class="info help-block">
                                <b>Input Name</b> Max Length : 100.</small>
                            </div>
                        </div>
                                                 
                                                <div class="form-group ">
                            <label for="custom_number" class="col-sm-2 control-label">Custom Number 
                            <i class="required">*</i>
                            </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="custom_number" id="custom_number" placeholder="Custom Number" value="<?= set_value('custom_number', $amuco_products->custom_number); ?>">
                                <small class="info help-block">
                                <b>Input Custom Number</b> Max Length : 50.</small>
                            </div>
                        </div>
                                                 
                                                <div class="form-group ">
                            <label for="custom_number_brazil" class="col-sm-2 control-label">Custom Number Brazil 
                            </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="custom_number_brazil" id="custom_number_brazil" placeholder="Custom Number Brazil" value="<?= set_value('custom_number_brazil', $amuco_products->custom_number_brazil); ?>">
                                <small class="info help-block">
                                <b>Input Custom Number Brazil</b> Max Length : 50.</small>
                            </div>
                        </div>
                                                 
                                                <div class="form-group ">
                            <label for="cas" class="col-sm-2 control-label">Cas 
                            <i class="required">*</i>
                            </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="cas" id="cas" placeholder="Cas" value="<?= set_value('cas', $amuco_products->cas); ?>">
                                <small class="info help-block">
                                <b>Input Cas</b> Max Length : 50.</small>
                            </div>
                        </div>
                                                 
                                                <div class="form-group ">
                            <label for="unit_id" class="col-sm-2 control-label">Unit  
                            <i class="required">*</i>
                            </label>
                            <div class="col-sm-8">
                                <select  class="form-control chosen chosen-select-deselect" name="unit_id" id="unit_id" data-placeholder="Select Unit Id" >
                                    <option value=""></option>
                                    <?php foreach (db_get_all_data('amuco_unit_types') as $row): ?>
                                    <option <?=  $row->id ==  $amuco_products->unit_id ? 'selected' : ''; ?> value="<?= $row->id ?>"><?= $row->name; ?></option>
                                    <?php endforeach; ?>  
                                </select>
                                <small class="info help-block">
                                <b>Input Unit Id</b> Max Length : 10.</small>
                            </div>
                        </div>


                                                 
                                                <div class="form-group ">
                            <label for="remarks" class="col-sm-2 control-label">Remarks 
                            </label>
                            <div class="col-sm-8">
                                <textarea id="remarks" onkeyup="javascript:this.value=this.value.toLowerCase()" name="remarks" rows="5" class="textarea form-control capi"><?= set_value('remarks', $amuco_products->remarks); ?></textarea>
                                <small class="info help-block">
                                <b>Input Remarks</b> Max Length : 250.</small>
                            </div>
                        </div>
                                                 
                                                <div class="form-group ">
                            <label for="active" class="col-sm-2 control-label">Active 
                            <i class="required">*</i>
                            </label>
                            <div class="col-sm-8">
                                <select  class="form-control chosen chosen-select" name="active" id="active" data-placeholder="Select Active" >
                                    <option value=""></option>
                                    <option <?= $amuco_products->active == "0" ? 'selected' :''; ?> value="0">No</option>
                                    <option <?= $amuco_products->active == "1" ? 'selected' :''; ?> value="1">Yes</option>
                                    </select>
                                <small class="info help-block">
                                </small>
                            </div>
                        </div>
                                                 
                        <div class="form-group ">
                            <label for="category_id" class="col-sm-2 control-label">Category  
                            <i class="required">*</i>
                            </label>
                            <label><?php echo anchor('administrator/amuco_category_product/add/?popup=show', 'add', ['class' => 'popup-view']); ?></label>
                            <div class="col-sm-8">
                                <select  class="form-control chosen chosen-select-deselect" name="category_id" id="category_id" data-placeholder="Select Category Id" >
                                    <option value=""></option>
                                    <?php foreach (db_get_all_data('amuco_category_product') as $row): ?>
                                    <option <?=  $row->id ==  $amuco_products->category_id ? 'selected' : ''; ?> value="<?= $row->id ?>"><?= $row->name; ?></option>
                                    <?php endforeach; ?>  
                                </select>
                                <small class="info help-block">
                                <b>Input Category Id</b> Max Length : 10.</small>
                            </div>
                        </div>


                                                 
                                                <div class="form-group ">
                            <label for="industry_id" class="col-sm-2 control-label">Industry  
                            
                            </label>
                            <div class="col-sm-8">
                                <select  class="form-control chosen chosen-select" name="industry_id[]" id="industry_id" data-placeholder="Select Industry Id" multiple >
                                    <option value=""></option>
                                    <?php foreach (db_get_all_data('amuco_industry_type') as $row): ?>
                                    <option <?=  in_array($row->name, explode(',', $amuco_products->industry_id)) ? 'selected' : ''; ?> value="<?= $row->name ?>"><?= $row->name; ?></option>
                                    <?php endforeach; ?>  
                                </select>
                                <small class="info help-block">
                                <b>Input Industry Id</b> Max Length : 250.</small>
                            </div>
                        </div>
                                                 
                                                <div class="form-group ">
                            <label for="suppliers_id" class="col-sm-2 control-label">Suppliers  
                            </label>
                            <div class="col-sm-8">
                                <select  class="form-control chosen chosen-select" name="suppliers_id[]" id="suppliers_id" data-placeholder="Select Suppliers Id" multiple >
                                    <option value=""></option>
                                    <?php foreach (db_get_all_data('amuco_suppliers') as $row): ?>
                                    <option <?=  in_array($row->id, explode(',', $amuco_products->suppliers_id)) ? 'selected' : ''; ?> value="<?= $row->id ?>"><?= $row->name; ?></option>
                                    <?php endforeach; ?>  
                                </select>
                                <small class="info help-block">
                                </small>
                            </div>
                        </div>
                                                 
                                                <div class="form-group ">
                            <label for="purchasing_office" class="col-sm-2 control-label">Purchasing Office 
                         
                            </label>
                            <div class="col-sm-8">
                                <select  class="form-control chosen chosen-select" name="purchasing_office[]" id="purchasing_office" data-placeholder="Select Purchasing Office" multiple >
                                    <option value=""></option>
                                    <?php foreach (db_get_all_data('amuco_purchasing_office') as $row): ?>
                                    <option <?=  in_array($row->id, explode(',', $amuco_products->purchasing_office)) ? 'selected' : ''; ?> value="<?= $row->id ?>"><?= $row->name; ?></option>
                                    <?php endforeach; ?>  
                                </select>
                                <small class="info help-block">
                                </small>
                                <input type="hidden" class="form-control" name="office" id="office" value= "<?php echo $input_office?>">
                               
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

<div class="modal" tabindex="-1" role="dialog" id="option_unit">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Select the Unit for purchasing office</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group ">
            <input type="hidden" class="form-control" name="id_office" id="id_office" value= "">
            <label for="unit_id" class="col-sm-2 control-label">Unit Id </label>
                <div class="col-sm-8">
                    <select  class="form-control chosen chosen-select-deselect" name="unit" id="unit" data-placeholder="Select Unit Id" >
                        <option value=""></option>
                        <?php foreach (db_get_all_data('amuco_unit_types') as $row): ?>
                        <option value="<?= $row->id ?>"><?= $row->name; ?></option>
                        <?php endforeach; ?>  
                    </select>
                    <small class="info help-block"></small>
                </div>
            </div>
      </div>
      <br>
      <br>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" id="save_unit">Save changes</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- /.content -->
<!-- Page script -->
<script>
    $(document).ready(function(){
       
        $('.modal-footer').click(function(){
           // alert("close");
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
              window.location.href = BASE_URL + 'administrator/amuco_products';
            }
          });
    
        return false;
      }); /*end btn cancel*/
    
      $('.btn_save').click(function(){
        $('.message').fadeOut();
            
        var form_amuco_products = $('#form_amuco_products');
        var data_post = form_amuco_products.serializeArray();
        var save_type = $(this).attr('data-stype');
        data_post.push({name: 'save_type', value: save_type});
    
        $('.loading').show();
    
        $.ajax({
          url: form_amuco_products.attr('action'),
          type: 'POST',
          dataType: 'json',
          data: data_post,
        })
        .done(function(res) {
          $('form').find('.form-group').removeClass('has-error');
          $('form').find('.error-input').remove();
          $('.steps li').removeClass('error');
          if(res.success) {
            var id = $('#amuco_products_image_galery').find('li').attr('qq-file-id');
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
      
        var arrayOpciones = new Array(); //Es el array global
        var start_options =  document.getElementById('purchasing_office').options;
        var count = 0
        $("#purchasing_office option:selected").each(function() {			
            arrayOpciones[count] = $(this).val();
            count++;		
        });
        //alert(arrayOpciones.length);
        var select_count = 0;
        $('#purchasing_office').change(function(){
           //alert($(this).val());
            
            if($(this).val() == null){
                /*for(var y = 0; y < arrayOpciones.length;y++ ){
                    remove_multiselect_purchasing(arrayOpciones[y]);
                }*/
                $('#office').val('');
                arrayOpciones = [];
            }else{
               
                var sele = $(this).val().toString();
                var option_select = [];
                option_select = sele.split(',');
                var opciones = document.getElementById('purchasing_office').options;
                console.log(arrayOpciones);
                /*if(count > option_select){
                    $("#purchasing_office option:selected").each(function() {			
                        if(arrayOpciones.indexOf($(this).val() == -1)){
                            remove_multiselect_purchasing($(this).val());
                        }
                       		
                    });
                }*/
                if( arrayOpciones.length ==  option_select.length + 1){
                    var office_sel =  $('#office').val().toString();
                    var option_off = [];
                    option_off = office_sel.split(',');
                    console.log("tamaño office: "+option_off);
                    $('#office').val('') ;
                    arrayOpciones = [];
                    for(var j= 0;j<option_select.length;j++ ){
                    for(var y = 0; y < option_off.length;y++){
                            var new_cad = option_off[y].split('-');
                            console.log("new split: "+new_cad);
                            if(new_cad[0] == option_select[j]){
                                if($('#office').val() != ""){
                                    $('#office').val( $('#office').val()+","+new_cad[0]+"-"+new_cad[1]);
                                }else{
                                    $('#office').val( new_cad[0]+"-"+new_cad[1]);
                                }
                                arrayOpciones[j] = new_cad[0];
                            }
                    }
                    select_count = option_select.length;
                }

                }else{
                    for (var i=1; i<opciones.length; i++){        
                        var opcion = opciones[i].value;
                        select_count = 0;        
                        if (opciones[i].selected){            
                            if (!arrayOpciones.includes(opcion)){  //enArray() busca si opcion está en arrayOpciones                              
                                arrayOpciones[arrayOpciones.length]=opcion;
                                $('#id_office').val(opcion);
                            // alert($('#id_office').val());
                                $('#option_unit').modal();
                            // alert("Has señalado la opción" + opcion);
                            }
                            select_count++;
                        }
                    } 
                }
            }
        });
       
        $('#save_unit').click(function(){
                if($('#office').val() != ""){
                $('#office').val( $('#office').val()+","+$('#id_office').val()+"-"+$('#unit').val());
                }else{
                    $('#office').val( $('#id_office').val()+"-"+$('#unit').val());
                }
                
                $('#option_unit').modal('hide');
        });


      async function chain(){
      }
       
      chain();

      
    
    
    }); /*end doc ready*/
</script>