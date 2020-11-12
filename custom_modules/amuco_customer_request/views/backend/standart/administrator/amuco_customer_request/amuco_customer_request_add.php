
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
        Amuco Customer Request        <small><?= cclang('new', ['Amuco Customer Request']); ?> </small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class=""><a  href="<?= site_url('administrator/amuco_customer_request'); ?>">Amuco Customer Request</a></li>
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
                            <h3 class="widget-user-username">Amuco Customer Request</h3>
                            <h5 class="widget-user-desc"><?= cclang('new', ['Amuco Customer Request']); ?></h5>
                            <hr>
                        </div>
                        <?= form_open('', [
                            'name'    => 'form_amuco_customer_request', 
                            'class'   => 'form-horizontal form-step', 
                            'id'      => 'form_amuco_customer_request', 
                            'enctype' => 'multipart/form-data', 
                            'method'  => 'POST'
                            ]); ?>
                         
                        <div class="row">                         
                            <div class="col-md-6" style="display:none">                         
                                <div class="form-group ">
                                    <label for="status" class="col-sm-3 control-label">Status <i class="required">*</i></label>
                                    <div class="col-sm-8">
                                        <input readonly type="text" class="form-control" name="status" id="status" placeholder="Status" value="New Customer Request">
                                        <small class="info help-block">
                                        <b>Input Status</b> Max Length : 50.</small>
                                    </div>
                                </div>
                            </div>   
                            <div class="col-md-6">                                 
                                <div class="form-group ">
                                    <label for="customer" class="col-sm-3 control-label">Customer </label>
                                    <div class="col-sm-8">
                                        <select  class="form-control chosen chosen-select-deselect" name="customer" id="customer" data-placeholder="Select Customer" >
                                            <option value=""></option>
                                            <?php foreach (db_get_all_data('amuco_customers') as $row): ?>
                                            <option value="<?= $row->id ?>"><?= $row->name; ?></option>
                                            <?php endforeach; ?>  
                                        </select>
                                        <small class="info help-block">
                                        <b>Input Customer</b> Max Length : 10. (Required)</small>
                                    </div>
                                </div>
                            </div> 
                            <div class="col-md-6">                             
                                <div class="form-group ">
                                    <label for="destination_port" class="col-sm-3 control-label">Destination Port</label>
                                    <a  href="#"><i   style=" margin-top: 1.5%"  class="fa fa-plus" id="add_port" data-toggle="modal" data-target="#modal-add-port" ></i></a>
                                    <div class="col-sm-8">
                                        <select  class="form-control chosen chosen-select-deselect" name="destination_port" id="destination_port" data-placeholder="Select Destination Port" >
                                            <option value=""></option>
                                            <?php foreach (db_get_all_data('amuco_destination_port') as $row): ?>
                                            <option value="<?= $row->id ?>"><?= $row->name; ?></option>
                                            <?php endforeach; ?>  
                                        </select>
                                        <small class="info help-block">
                                        <b>Input Destination Port</b> Max Length : 10. (Required)</small>
                                    </div>
                                
                                </div>
                            </div>    
                        </div>
                        <div class="row">
                            <div class="col-md-6">                         
                                <div class="form-group contact-up"  id="div_contact">
                                    <label for="contact" class="col-sm-3 control-label ">Contact</label>
                                    <a  href="#"><i  style=" margin-top: 1.7%"  class="fa fa-plus" id="add_contact"  ></i></a>
                                    <div class="col-sm-8">
                                        <select  class="form-control chosen chosen-select-deselect" name="contact" id="contact" data-placeholder="Select Contact" >
                                            <option value=""></option>
                                        
                                        </select>
                                        <small class="info help-block">
                                        <b>Input Contact</b> Max Length : 10. (Required)</small>
                                    </div>
                                </div>
                            </div>  
                            <div class="col-md-6"> 
                                <div class="form-group ">
                                    <label for="incoterm" class="col-sm-3 control-label">Incoterm</label>
                                    <div class="col-sm-8">
                                        <select  class="form-control chosen chosen-select-deselect" name="incoterm" id="incoterm" data-placeholder="Select Incoterm" >
                                            <option value=""></option>
                                            <?php foreach (db_get_all_data('amuco_incoterm') as $row): ?>
                                            <option value="<?= $row->id ?>"><?= $row->name; ?></option>
                                            <?php endforeach; ?>  
                                        </select>
                                        <small class="info help-block">
                                        <b>Input Incoterm</b> Max Length : 10. (Required)</small>
                                    </div>
                                </div>
                            </div> 
                        </div> 
                        <div class="row"> 
                            <div class="col-md-6">                          
                                <div class="form-group ">
                                    <label for="sales_agent" class="col-sm-3 control-label">Sales Agent</label>
                                    <div class="col-sm-8">
                                        <select  class="form-control chosen chosen-select-deselect" name="sales_agent" id="sales_agent" data-placeholder="Select Sales Agent" >
                                            <option value=""></option>
                                            <?php foreach (db_get_all_data('aauth_users') as $row): 
                                               if(strtolower($this->aauth->get_user_groups($row->id)[0]->name) == 'seller' ):    
                                            ?>
                                            <option <?php echo $user->id== $row->id ? 'selected': '';?> value="<?= $row->id ?>"><?= $row->username; ?></option>
                                               <?php endif; endforeach; ?>  
                                        </select>
                                        <small class="info help-block">
                                        <b>Input Sales Agent</b> Max Length : 10. (Required)</small>
                                    </div>
                                </div>
                            </div>     
                            <div class="col-md-6">    
                                <div class="form-group ">
                                    <label for="combinate_container" class="col-sm-3 control-label">Combined Container </label>
                                    <div class="col-sm-8">
                                        <div class="col-md-2 padding-left-0">
                                            <label>
                                                <input type="radio" class="flat-red" name="combinate_container" id="combinate_container"  value="1">
                                                <?= cclang('yes'); ?>
                                            </label>
                                        </div>
                                        <div class="col-md-14">
                                            <label>
                                                <input type="radio" class="flat-red" name="combinate_container" id="combinate_container"  value="0">
                                                <?= cclang('no'); ?>
                                            </label>
                                        </div>
                                        <small class="info help-block">
                                        </small>
                                    </div>
                                </div>
                            </div>    
                            
                        </div> 
                        <div class="row">
                            <div class="col-md-6">                         
                                <div class="form-group contact-up"  id="div_contact">
                                    <label for="contact" class="col-sm-3 control-label ">Representative</label>
                                    <a  href="#"><i  style=" margin-top: 1.7%"  class="fa fa-plus" id="add_repr" data-toggle="modal"  ></i></a>
                                    <div class="col-sm-8">
                                        <select  class="form-control chosen chosen-select-deselect" name="representative" id="representative" data-placeholder="Select Representative" >
                                            <option value=""></option>
                                                <?php foreach (db_get_all_data('amuco_contacts') as $row): 
                                                    if($row->type_contact == 'Representative'):
                                                    ?>
                                                         <option value="<?= $row->id ?>"><?= $row->name; ?></option>
                                                    <?php endif;endforeach; ?>  
                                        
                                        </select>
                                        <small class="info help-block">
                                        <b>Input Contact</b> Max Length : 10. (Required)</small>
                                    </div>
                                </div>
                            </div>  
                        </div>     
                        <div class="row">  
                            <div class="col-md-6">                             
                                <div class="form-group ">
                                    <label for="remarks" class="col-sm-3 control-label">Remarks </label>
                                    <div class="col-sm-8">
                                        <textarea  class="form-control" style="resize:none" id="remarks" name="remarks" rows="5"><?= set_value('Remarks'); ?></textarea>
                                        <small class="info help-block"><b>Input Remarks</b> Max Length : 250.</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">         
                               
                            </div>      
                        </div>
                       
                    </div>     
                    <div class="message"></div>
                    <div class="row-fluid col-md-7 container-button-bottom">
                        <button class="btn btn-flat btn-primary btn_save btn_action" id="btn_save" data-stype='stay' title="<?= cclang('save_button'); ?> (Ctrl+s)">
                        <i class="fa fa-save" ></i> <?= cclang('save_button'); ?>
                        </button>
                        <!--a class="btn btn-flat btn-info btn_save btn_action btn_save_back" id="btn_save" data-stype='back' title="<?= cclang('save_and_go_the_list_button'); ?> (Ctrl+d)">
                        <i class="ion ion-ios-list-outline" ></i> <?= cclang('save_and_go_the_list_button'); ?>
                        </a-->
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
        </div>
    </div>
</section>

<section>
    <div class="modal fade" id="modal-add-port">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <div class="box box-widget widget-user-2">
                       
                    <div class="widget-user-header ">
                        <div class="widget-user-image">
                            <img class="img-circle" src="<?= BASE_ASSET; ?>/img/add2.png" alt="User Avatar">
                        </div>
                        <!-- /.widget-user-image -->
                        <h3 class="widget-user-username">Amuco Destination Port</h3>
                        <h5 class="widget-user-desc"><?= cclang('new', ['Amuco Destination Port']); ?></h5>
                        <hr>
                    </div>
               
                    <?= form_open('', [
                            'name'    => 'form_amuco_destination_port', 
                            'class'   => 'form-horizontal form-step', 
                            'id'      => 'form_amuco_destination_port', 
                            'enctype' => 'multipart/form-data', 
                            'method'  => 'POST'
                            ]); ?>
                    <div class="form-group ">
                        <label for="name" class="col-sm-2 control-label">Name </label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="name" id="name" placeholder="Name" value="<?= set_value('name'); ?>">
                            <small class="info help-block">
                            <b>Input Name</b> Max Length : 50. (Required)</small>
                        </div>
                    </div>
                                                
                    <div class="form-group" style="display:none">
                        <label for="description" class="col-sm-2 control-label">Description </label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="description" id="description" placeholder="Description" value="<?= set_value('description'); ?>">
                            <small class="info help-block">
                            <b>Input Description</b> Max Length : 250.</small>
                        </div>
                    </div>
                                                
                    <div class="form-group ">
                        <label for="country" class="col-sm-2 control-label">Country </label>
                        <div class="col-sm-8">
                            <select  class="form-control chosen chosen-select-deselect" name="country" id="country" data-placeholder="Select Country" >
                                <option value=""></option>
                                <?php foreach (db_get_all_data('amuco_countries') as $row): ?>
                                <option value="<?= $row->id ?>"><?= $row->name; ?></option>
                                <?php endforeach; ?>  
                            </select>
                            <small class="info help-block"> </small>
                        </div>
                    </div>
                                                
                  <div class="message"></div>
                  <div class="modal-footer justify-content-between">
                     <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                     <button class="btn btn-flat btn-primary  btn_action" id="btn_save_port"  name="btn_save_port" data-stype='stay' title="<?= cclang('save_button'); ?> (Ctrl+s)">
                        <i class="fa fa-save" ></i> <?= cclang('save_button'); ?>
                     </button>  
                  </div>
                 
                  <?= form_close(); ?>
                </div>
            </div>
        </div>
    </div>            

</section>

<section>
    <div class="modal fade" id="modal-add-contact">
        <div class="modal-dialog modal-lg">
             <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <div class="box box-widget widget-user-2">
                            <div class="widget-user-header ">
                                <div class="widget-user-image">
                                    <img class="img-circle" src="<?= BASE_ASSET; ?>/img/add2.png" alt="User Avatar">
                                </div>
                        
                                <h3 class="widget-user-username">Amuco Contacts</h3>
                                <h5 class="widget-user-desc"><?= cclang('new', ['Amuco Contacts']); ?></h5>
                                <hr>
                            </div>
                            <?= form_open('', [
                                    'name'    => 'form_amuco_add_contact', 
                                    'class'   => 'form-horizontal form-step', 
                                    'id'      => 'form_amuco_add_contact', 
                                    'enctype' => 'multipart/form-data', 
                                    'method'  => 'POST'
                                    ]); ?>
                     
                            <div class="form-group" style="display:none" >
                                <label for="type_contact" class="col-sm-2 control-label">Contact Type</label>
                                <div class="col-sm-8">
                                    <input readonly type="text" class="form-control" name="type_contact" id="type_contact"  >
                                    <small class="info help-block"> (Required)</small>
                                </div>
                            </div>

                            <div class="form-group "  style="display:none">
                                <label for="customer_id" class="col-sm-2 control-label">Customer</label>
                                <div class="col-sm-8">
                                    <input readonly type="hidden" class="form-control" name="customer_name" id="customer_name_contact" placeholder="First Name" value="">
                                    <input  type="hidden" class="form-control" name="customer_id" id="customer_id" value="" >
                                    <small class="info help-block"><b>Input Customer Id</b> Max Length : 10. (Required)</small>
                                </div>
                            </div>
                                                 
                            <div class="form-group ">
                                <label for="name" class="col-sm-2 control-label">First Name</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="first_name" id="first_name" placeholder="First Name" value="<?= set_value('first_name'); ?>">
                                    <small class="info help-block"><b>Input First Name</b> Max Length : 100. (Required)</small>
                                </div>
                            </div>

                            <div class="form-group ">
                                <label for="name" class="col-sm-2 control-label">Last Name</label>
                                <div class="col-sm-8">
                                <input type="text" class="form-control" name="last_name" id="last_name" placeholder="Last Name" value="<?= set_value('last_name'); ?>">
                                <small class="info help-block">
                                <b>Input Last Name</b> Max Length : 100. (Required)</small>
                                </div>
                            </div>
                                                 
                            <div class="form-group ">
                                <label for="position" class="col-sm-2 control-label">Position </label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="position" id="position" placeholder="Position" value="<?= set_value('position'); ?>">
                                    <small class="info help-block">
                                    <b>Input Position</b> Max Length : 100.</small>
                                </div>
                            </div>
                                                 
                            <div class="form-group ">
                                <label for="departament" class="col-sm-2 control-label">Departament </label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="departament" id="departament" placeholder="Department" value="<?= set_value('department'); ?>">
                                    <small class="info help-block">
                                    <b>Input Departament</b> Max Length : 100.</small>
                                </div>
                            </div>
                                                 
                            <div class="form-group ">
                                <label for="mobile_phone" class="col-sm-2 control-label">Mobile Phone </label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="mobile_phone" id="mobile_phone" placeholder="Mobile Phone" value="<?= set_value('mobile_phone'); ?>">
                                    <small class="info help-block">
                                    <b>Input Mobile Phone</b> Max Length : 30. (Required)</small>
                                </div>
                            </div>
                                                 
                            <div class="form-group ">
                                <label for="office_phone" class="col-sm-2 control-label">Office Phone </label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="office_phone" id="office_phone" placeholder="Office Phone" value="<?= set_value('office_phone'); ?>">
                                    <small class="info help-block">
                                    <b>Input Office Phone</b> Max Length : 30.</small>
                                </div>
                            </div>
                                                 
                            <div class="form-group ">
                                <label for="personal_phone" class="col-sm-2 control-label">Personal Phone </label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="personal_phone" id="personal_phone" placeholder="Personal Phone" value="<?= set_value('personal_phone'); ?>">
                                    <small class="info help-block">
                                    <b>Input Personal Phone</b> Max Length : 30.</small>
                                </div>
                            </div>
                                                 
                            <div class="form-group ">
                                <label for="fax" class="col-sm-2 control-label">Fax </label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="fax" id="fax" placeholder="Fax" value="<?= set_value('fax'); ?>">
                                    <small class="info help-block">
                                    <b>Input Fax</b> Max Length : 30.</small>
                                </div>
                            </div>
                                                 
                            <div class="form-group ">
                                <label for="email" class="col-sm-2 control-label">Email <i class="required">*</i></label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="email" id="email" placeholder="Email" value="<?= set_value('email'); ?>">
                                    <small class="info help-block">
                                    <b>Input Email</b> Max Length : 100.</small>
                                </div>
                            </div>
                                                 
                            <div class="form-group ">
                                <label for="skype" class="col-sm-2 control-label">Skype </label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="skype" id="skype" placeholder="Skype" value="<?= set_value('skype'); ?>">
                                    <small class="info help-block"><b>Input Skype</b> Max Length : 100.</small>
                                </div>
                            </div>
                                                 
                            <div class="form-group ">
                                <label for="picture" class="col-sm-2 control-label">Picture </label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="picture" id="picture" placeholder="Picture" value="<?= set_value('picture'); ?>">
                                    <small class="info help-block"><b>Input Picture</b> Max Length : 250.</small>
                                </div>
                            </div>
                                                 
                            <div class="form-group ">
                                <label for="home_address" class="col-sm-2 control-label">Home Address </label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="home_address" id="home_address" placeholder="Home Address" value="<?= set_value('home_address'); ?>">
                                    <small class="info help-block"><b>Input Home Address</b> Max Length : 250.</small>
                                </div>
                            </div>
                                                 
                            <div class="form-group ">
                                <label for="country" class="col-sm-2 control-label">Country </label>
                                <div class="col-sm-8">
                                    <select  class="form-control chosen chosen-select-deselect" name="country" id="country" data-placeholder="Select Country" >
                                        <option value=""></option>
                                        <?php foreach (db_get_all_data('amuco_countries') as $row): ?>
                                        <option value="<?= $row->id ?>"><?= $row->name; ?></option>
                                        <?php endforeach; ?>  
                                    </select>
                                    <small class="info help-block"><b>Input Country</b> Max Length : 10. (Required)</small>
                                </div>
                            </div>
                                                 
                            <div class="form-group ">
                                <label for="city" class="col-sm-2 control-label">City </label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="city" id="city" placeholder="City" value="<?= set_value('city'); ?>">
                                    <small class="info help-block"><b>Input City</b> Max Length : 100.</small>
                                </div>
                            </div>
                                                 
                            <div class="form-group ">
                                <label for="home_phone" class="col-sm-2 control-label">Home Phone </label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="home_phone" id="home_phone" placeholder="Home Phone" value="<?= set_value('home_phone'); ?>">
                                    <small class="info help-block"><b>Input Home Phone</b> Max Length : 30.</small>
                                </div>
                            </div>
                                                 
                            <div class="form-group ">
                                <label for="birthday" class="col-sm-2 control-label">Birthday </label>
                                <div class="col-sm-6">
                                    <div class="input-group date col-sm-8">
                                        <input type="text" class="form-control pull-right datetimepicker" name="birthday"  id="birthday">
                                    </div>
                                <small class="info help-block"></small>
                                </div>
                            </div>
                                                 
                            <div class="form-group ">
                                <label for="additional_information" class="col-sm-2 control-label">Additional Information </label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="additional_information" id="additional_information" placeholder="Additional Information" value="<?= set_value('additional_information'); ?>">
                                    <small class="info help-block">
                                    <b>Input Additional Information</b> Max Length : 250.</small>
                                </div>
                            </div>
                                                
                            <div class="message"></div>
                            <div class="modal-footer justify-content-between">
                                <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
                                <button class="btn btn-flat btn-primary  btn_action" id="btn_save_contact" data-stype='stay' title="<?= cclang('save_button'); ?> (Ctrl+s)">
                                    <i class="fa fa-save" ></i> <?= cclang('save_button'); ?></button>
                            </div>
                  
                            <?= form_close(); ?>
                        </div> 
                    </div>          
               </div>
            </div>
        </div>
    </div> 
</section>
<!-- /.content -->
<script src="<?= BASE_ASSET; ?>ckeditor/ckeditor.js"></script>
<!-- Page script -->
<script>

    $(document).ready(function(){
       
        $('#add_repr').click(function(){
           $('#type_contact').val('Representative');
           $("#modal-add-contact").modal("show");
        });

        $('#add_contact').click(function(){
            $('#type_contact').val('Customer');
            $("#modal-add-contact").modal("show");
        });


        $('#btn_save_contact').click(function(){
            $('.message').fadeOut();
                
            var form_amuco_add = $('#form_amuco_add_contact');
            var data_post = form_amuco_add.serializeArray();
            var save_type = $(this).attr('data-stype');

            data_post.push({name: 'save_type', value: save_type});
            
            $('.loading').show();
            
            $.ajax({
                url: BASE_URL + '/administrator/amuco_contacts/add_save',
                type: 'POST',
                dataType: 'json',
                data: data_post,
            })
            .done(function(res) {
                $('form').find('.form-group').removeClass('has-error');
                $('.steps li').removeClass('error');
                $('form').find('.error-input').remove();
                if(res.success) {
                    console.log(res);
                    $('#form_amuco_add_contact').trigger("reset");
                    $('#modal-add-contact').modal('hide');
                    /*$('#contact').append($('<option>', {value: response.id, text:response.name}));
                    //$('#destination_port').style('display','block');
                    $('.chosen option').prop('selected', true).trigger('chosen:updated');
                    $('#modal-contact').modal('hide');*/
                    
               
                    $.ajax({
                        url: BASE_URL + '/administrator/amuco_contacts/get_data_by_id?id='+res.id,
                        type: 'GET',
                        dataType: 'json',   
                    })
                    .done(function(response) {
                        console.log(response);
                        if($('#type_contact').val()== 'Representative'){
                            $('#contact').append($('<option>', {value: response.id, text:response.name}));
                            //$('#destination_port').style('display','block');
                            $('#contact option').prop('selected', true).trigger('chosen:updated');
                        }else{
                            $('#representative').append($('<option>', {value: response.id, text:response.name}));
                            //$('#destination_port').style('display','block');
                            $('#representative option').prop('selected', true).trigger('chosen:updated');
                        }
                      

                        
                    })
                    .fail(function() {
                        $('.message').printMessage({message : 'Error save data', type : 'warning'});
                    })
                    .always(function() {
                        $('.loading').hide();
                        $('html, body').animate({ scrollTop: $(document).height() }, 2000);
                    });
                    
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
                
            });
        
            return false;
        }); /*end btn save*/
      
       // CKEDITOR.replace('remarks'); 
       // var remarks = CKEDITOR.instances.remarks;

        $('#btn_save_port').click(function(){
            $('.message').fadeOut();
    
            var form_amuco_port_new = $('#form_amuco_destination_port');
            var data_post = form_amuco_port_new.serializeArray();
            var save_type = $(this).attr('data-stype');

            data_post.push({name: 'save_type', value: save_type});
            console.log(data_post);
            $('.loading').show();
        
            $.ajax({
                url: BASE_URL + '/administrator/amuco_destination_port/add_save',
                type: 'POST',
                dataType: 'json',
                data: data_post,
            })
            .done(function(res) {
                console.log(res);
                $('form').find('.form-group').removeClass('has-error');
                $('.steps li').removeClass('error');
                $('form').find('.error-input').remove();
                if(res.success) {
                    $('#modal-add-port').modal('hide');
                    // $('.message').printMessage({message : res.message});
                //$('.message').fadeIn();
                //resetForm();
            
            
                $.ajax({
                    url: BASE_URL + '/administrator/amuco_destination_port/get_data_by_id?id='+res.id,
                    type: 'GET',
                    dataType: 'json',   
                })
                .done(function(response) {
                    console.log(response);
                
                    $('#destination_port').append($('<option>', {value: response.id, text:response.name}));
                    //$('#destination_port').style('display','block');
                    $('#destination_port option').prop('selected', true).trigger('chosen:updated');

                    
                })
                .fail(function() {
                    $('.message').printMessage({message : 'Error save data', type : 'warning'});
                })
                .always(function() {
                    $('.loading').hide();
                    $('html, body').animate({ scrollTop: $(document).height() }, 2000);
                });
                    
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
        })
                   
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
                window.location.href = BASE_URL + 'administrator/amuco_customer_request';
                }
            });
        
            return false;
        }); /*end btn cancel*/
    
        $('.btn_save').click(function(){
            $('.message').fadeOut();
            //$('#remarks').val(remarks.getData());
                        
            var form_amuco_customer_request = $('#form_amuco_customer_request');
            var data_post = form_amuco_customer_request.serializeArray();
            var save_type = $(this).attr('data-stype');

            data_post.push({name: 'save_type', value: save_type});
        
            $('.loading').show();
        
            $.ajax({
            url: BASE_URL + '/administrator/amuco_customer_request/add_save',
            type: 'POST',
            dataType: 'json',
            data: data_post,
            })
            .done(function(res) {
                $('form').find('.form-group').removeClass('has-error');
                $('.steps li').removeClass('error');
                $('form').find('.error-input').remove();
                if(res.success) {
                    console.log(res);
                    window.location.href = res.redirect;
                    return;
                
        
                $('.message').printMessage({message : res.message});
                $('.message').fadeIn();
                resetForm();
                $('.chosen option').prop('selected', false).trigger('chosen:updated');
               // remarksremarks.setData('');
                    
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
      
       
        $('#customer').change(function(){
            $('.message').fadeOut();
            //$('#remarks').val(remarks.getData());
            let id= $(this).val();
            $('#customer_id').val(id);
            //alert($(this).val());
            //alert( $('#customer_id').val());
            $('#contact').find('option').remove();
            $('#div_contact').css("display","block");
            var contacts = $("#contact");          
            var form_amuco_customer_request = $('#form_amuco_customer_request');
            var data_post = form_amuco_customer_request.serializeArray();
            var save_type = $(this).attr('data-stype');

            data_post.push({name: 'save_type', value: save_type});
            console.log(data_post);
            $('.loading').show();
        
            $.ajax({
            url: BASE_URL + '/administrator/amuco_customer_request/get_contact_by_id',
            type: 'POST',
            dataType: 'json',
            data: data_post,
            })
            .done(function(res) {
                console.log(res.customer_contact);
                $('form').find('.form-group').removeClass('has-error');
                $('.steps li').removeClass('error');
                $('form').find('.error-input').remove();
                if(res.success) {
                    // $('.message').printMessage({message : res.message});
                        //$('.message').fadeIn();
                    // resetForm();
                    // $('.chosen option').prop('selected', false).trigger('chosen:updated');
                        //remarks.setData('');
                      
                        $.each(res.customer_contact, function(id, value) {
                        
                            $('#contact').append('<option value="'+value.id+'">'+value.name+'</option>');
                        });
                       $('#contact').trigger('chosen:updated');
                    
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
                //$('html, body').animate({ scrollTop: $(document).height() }, 2000);
                });
        
            return false;
        }); /*end btn save*/

    
    }); /*end doc ready*/
</script>