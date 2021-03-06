
<script src="<?= BASE_ASSET; ?>/js/jquery.hotkeys.js"></script>
<script type="text/javascript">
//This page is a result of an autogenerated content made by running test.html with firefox.
function domo(){
 
   // Binding keys
   $('*').bind('keydown', 'Ctrl+e', function assets() {
      $('#btn_edit').trigger('click');
       return false;
   });

   $('*').bind('keydown', 'Ctrl+x', function assets() {
      $('#btn_back').trigger('click');
       return false;
   });
    
}


jQuery(document).ready(domo);
</script>
<!-- Content Header (Page header) -->
<section class="content-header">
   <h1>
      Amuco Samples      <small><?= cclang('detail', ['Amuco Samples']); ?> </small>
   </h1>
   <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class=""><a  href="<?= site_url('administrator/amuco_samples'); ?>">Amuco Samples</a></li>
      <li class="active"><?= cclang('detail'); ?></li>
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
                        <img class="img-circle" src="<?= BASE_ASSET; ?>/img/view.png" alt="User Avatar">
                     </div>
                     <!-- /.widget-user-image -->
                     <h3 class="widget-user-username">Amuco Samples</h3>
                     <h5 class="widget-user-desc">Detail Amuco Samples</h5>
                     <hr>
                  </div>

                 
                  <div class="form-horizontal form-step" name="form_amuco_samples" id="form_amuco_samples" >
                  
                    <div class="form-group ">
                        <label for="content" class="col-sm-2 control-label">Id </label>

                        <div class="col-sm-8">
                           <?= _ent($amuco_samples->id); ?>
                        </div>
                    </div>
                                        
                    <div class="form-group ">
                        <label for="content" class="col-sm-2 control-label">Date Created </label>

                        <div class="col-sm-8">
                           <?= _ent($amuco_samples->date_created); ?>
                        </div>
                    </div>
                                        
                    <div class="form-group ">
                        <label for="content" class="col-sm-2 control-label">Date Updated </label>

                        <div class="col-sm-8">
                           <?= _ent($amuco_samples->date_updated); ?>
                        </div>
                    </div>
                                        
                    <div class="form-group ">
                        <label for="content" class="col-sm-2 control-label">Product Id </label>

                        <div class="col-sm-8">
                           <?= _ent($amuco_samples->amuco_products_name); ?>
                        </div>
                    </div>
                                        
                    <div class="form-group ">
                        <label for="content" class="col-sm-2 control-label">Supplier Id </label>

                        <div class="col-sm-8">
                           <?= _ent($amuco_samples->amuco_suppliers_name); ?>
                        </div>
                    </div>
                                        
                    <div class="form-group ">
                        <label for="content" class="col-sm-2 control-label">Note </label>

                        <div class="col-sm-8">
                           <?= _ent($amuco_samples->note); ?>
                        </div>
                    </div>
                                        
                    <div class="form-group ">
                        <label for="content" class="col-sm-2 control-label">Lot </label>

                        <div class="col-sm-8">
                           <?= _ent($amuco_samples->lot); ?>
                        </div>
                    </div>
                                        
                    <div class="form-group ">
                        <label for="content" class="col-sm-2 control-label">Status </label>

                        <div class="col-sm-8">
                           <?= _ent($amuco_samples->status); ?>
                        </div>
                    </div>
                                        
                    <div class="form-group ">
                        <label for="content" class="col-sm-2 control-label">Remarks </label>

                        <div class="col-sm-8">
                           <?= _ent($amuco_samples->remarks); ?>
                        </div>
                    </div>
                                        
                    <div class="form-group ">
                        <label for="content" class="col-sm-2 control-label">Date Received </label>

                        <div class="col-sm-8">
                           <?= _ent($amuco_samples->date_received); ?>
                        </div>
                    </div>
                                        
                    <div class="form-group ">
                        <label for="content" class="col-sm-2 control-label">Date Sent </label>

                        <div class="col-sm-8">
                           <?= _ent($amuco_samples->date_sent); ?>
                        </div>
                    </div>
                                        
                    <div class="form-group ">
                        <label for="content" class="col-sm-2 control-label">Date Requested </label>

                        <div class="col-sm-8">
                           <?= _ent($amuco_samples->date_requested); ?>
                        </div>
                    </div>
                                        
                    <div class="form-group ">
                        <label for="content" class="col-sm-2 control-label">Customer Id </label>

                        <div class="col-sm-8">
                           <?= _ent($amuco_samples->amuco_customers_name); ?>
                        </div>
                    </div>
                                        
                    <br>
                    <br>


                     
                         
                    <div class="view-nav">
                        <?php is_allowed('amuco_samples_update', function() use ($amuco_samples){?>
                        <a class="btn btn-flat btn-info btn_edit btn_action" id="btn_edit" data-stype='back' title="edit amuco_samples (Ctrl+e)" href="<?= site_url('administrator/amuco_samples/edit/'.$amuco_samples->id); ?>"><i class="fa fa-edit" ></i> <?= cclang('update', ['Amuco Samples']); ?> </a>
                        <?php }) ?>
                        <a class="btn btn-flat btn-default btn_action" id="btn_back" title="back (Ctrl+x)" href="<?= site_url('administrator/amuco_samples/'); ?>"><i class="fa fa-undo" ></i> <?= cclang('go_list_button', ['Amuco Samples']); ?></a>
                     </div>
                    
                  </div>
               </div>
            </div>
            <!--/box body -->
         </div>
         <!--/box -->

      </div>
   </div>
</section>
<!-- /.content -->
<script>
$(document).ready(function(){

   });
</script>