
<script src="<?= BASE_ASSET; ?>/js/jquery.hotkeys.js"></script>

<script type="text/javascript">
//This page is a result of an autogenerated content made by running test.html with firefox.
function domo(){
 
   // Binding keys
   $('*').bind('keydown', 'Ctrl+a', function assets() {
       window.location.href = BASE_URL + '/administrator/Amuco_suppliers_bank/add';
       return false;
   });

   $('*').bind('keydown', 'Ctrl+f', function assets() {
       $('#sbtn').trigger('click');
       return false;
   });

   $('*').bind('keydown', 'Ctrl+x', function assets() {
       $('#reset').trigger('click');
       return false;
   });

   $('*').bind('keydown', 'Ctrl+b', function assets() {

       $('#reset').trigger('click');
       return false;
   });
}

jQuery(document).ready(domo);
</script>
<!-- Content Header (Page header) -->
<section class="content-header">
   <h1>
      <?= cclang('amuco_suppliers_bank') ?><small><?= cclang('list_all'); ?></small>
   </h1>
   <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active"><?= cclang('amuco_suppliers_bank') ?></li>
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
                     <div class="row pull-right">
                        <?php is_allowed('amuco_suppliers_bank_add', function(){?>
                        <a class="btn btn-flat btn-success btn_add_new" id="btn_add_new" title="<?= cclang('add_new_button', [cclang('amuco_suppliers_bank')]); ?>  (Ctrl+a)" href="<?=  site_url('administrator/amuco_suppliers_bank/add'); ?>"><i class="fa fa-plus-square-o" ></i> <?= cclang('add_new_button', [cclang('amuco_suppliers_bank')]); ?></a>
                        <?php }) ?>
                        <?php is_allowed('amuco_suppliers_bank_export', function(){?>
                        <a class="btn btn-flat btn-success" title="<?= cclang('export'); ?> <?= cclang('amuco_suppliers_bank') ?> " href="<?= site_url('administrator/amuco_suppliers_bank/export?q='.$this->input->get('q').'&f='.$this->input->get('d')); ?>"><i class="fa fa-file-excel-o" ></i> <?= cclang('export'); ?> XLS</a>
                        <?php }) ?>
                        <?php is_allowed('amuco_suppliers_bank_export', function(){?>
                        <a class="btn btn-flat btn-success" title="<?= cclang('export'); ?> pdf <?= cclang('amuco_suppliers_bank') ?> " href="<?= site_url('administrator/amuco_suppliers_bank/export_pdf'); ?>"><i class="fa fa-file-pdf-o" ></i> <?= cclang('export'); ?> PDF</a>
                        <?php }) ?>
                     </div>
                     <div class="widget-user-image">
                        <img class="img-circle" src="<?= BASE_ASSET; ?>/img/list.png" alt="User Avatar">
                     </div>
                     <!-- /.widget-user-image -->
                     <h3 class="widget-user-username"><?= cclang('amuco_suppliers_bank') ?></h3>
                     <h5 class="widget-user-desc"><?= cclang('list_all', [cclang('amuco_suppliers_bank')]); ?>  <i class="label bg-yellow"><?= $amuco_suppliers_bank_counts; ?>  <?= cclang('items'); ?></i></h5>
                  </div>

                  <form name="form_amuco_suppliers_bank" id="form_amuco_suppliers_bank" action="<?= base_url('administrator/amuco_suppliers_bank/index'); ?>">
                  

                  <div class="table-responsive"> 
                  <table class="table table-bordered table-striped dataTable">
                     <thead>
                        <tr class="">
                                                     <th>
                            <input type="checkbox" class="flat-red toltip" id="check_all" name="check_all" title="check all">
                           </th>
                                                    <th data-field="supplier_id"data-sort="1" data-primary-key="0"> <?= cclang('supplier_id') ?></th>
                           <th data-field="beneficiary_wires"data-sort="1" data-primary-key="0"> <?= cclang('beneficiary_wires') ?></th>
                           <th data-field="beneficiary_bank"data-sort="1" data-primary-key="0"> <?= cclang('beneficiary_bank') ?></th>
                           <th data-field="intermediary_bank"data-sort="1" data-primary-key="0"> <?= cclang('intermediary_bank') ?></th>
                           <th>Action</th>                        </tr>
                     </thead>
                     <tbody id="tbody_amuco_suppliers_bank">
                     <?php foreach($amuco_suppliers_banks as $amuco_suppliers_bank): ?>
                        <tr>
                                                       <td width="5">
                              <input type="checkbox" class="flat-red check" name="id[]" value="<?= $amuco_suppliers_bank->id; ?>">
                           </td>
                                                       
                           <td><?php if  ($amuco_suppliers_bank->supplier_id) {

                              echo anchor('administrator/amuco_suppliers/view/'.$amuco_suppliers_bank->supplier_id.'?popup=show', $amuco_suppliers_bank->amuco_suppliers_name, ['class' => 'popup-view']); }?> </td>
                             
                           <td><?= _ent($amuco_suppliers_bank->beneficiary_wires); ?></td> 
                           <td><?= _ent($amuco_suppliers_bank->beneficiary_bank); ?></td> 
                           <td><?= _ent($amuco_suppliers_bank->intermediary_bank); ?></td> 
                           <td width="200">
                            
                                                              <?php is_allowed('amuco_suppliers_bank_view', function() use ($amuco_suppliers_bank){?>
                                
                              <a href="<?= site_url('administrator/amuco_suppliers_bank/view/' . $amuco_suppliers_bank->id); ?>" class="label-default"><i class="fa fa-newspaper-o"></i> <?= cclang('view_button'); ?>
                              <?php }) ?>
                              <?php is_allowed('amuco_suppliers_bank_update', function() use ($amuco_suppliers_bank){?>
                              <a href="<?= site_url('administrator/amuco_suppliers_bank/edit/' . $amuco_suppliers_bank->id); ?>" class="label-default"><i class="fa fa-edit "></i> <?= cclang('update_button'); ?></a>
                              <?php }) ?>
                              <?php is_allowed('amuco_suppliers_bank_delete', function() use ($amuco_suppliers_bank){?>
                              <a href="javascript:void(0);" data-href="<?= site_url('administrator/amuco_suppliers_bank/delete/' . $amuco_suppliers_bank->id); ?>" class="label-default remove-data"><i class="fa fa-close"></i> <?= cclang('remove_button'); ?></a>
                               <?php }) ?>

                           </td>                        </tr>
                      <?php endforeach; ?>
                      <?php if ($amuco_suppliers_bank_counts == 0) :?>
                         <tr>
                           <td colspan="100">
                           Amuco Suppliers Bank data is not available
                           </td>
                         </tr>
                      <?php endif; ?>

                     </tbody>
                  </table>
                  </div>
               </div>
               <hr>
               <!-- /.widget-user -->
               <div class="row">
                  <div class="col-md-8">
                     <div class="col-sm-2 padd-left-0 " >
                        <select type="text" class="form-control chosen chosen-select" name="bulk" id="bulk" placeholder="Site Email" >
                           <option value="">Bulk</option>
                                                     <option value="delete">Delete</option>
                                                  </select>
                     </div>
                     <div class="col-sm-2 padd-left-0 ">
                        <button type="button" class="btn btn-flat" name="apply" id="apply" title="<?= cclang('apply_bulk_action'); ?>"><?= cclang('apply_button'); ?></button>
                     </div>
                     <div class="col-sm-3 padd-left-0  " >
                        <input type="text" class="form-control" name="q" id="filter" placeholder="<?= cclang('filter'); ?>" value="<?= $this->input->get('q'); ?>">
                     </div>
                     <div class="col-sm-3 padd-left-0 " >
                        <select type="text" class="form-control chosen chosen-select" name="f" id="field" >
                           <option value=""><?= cclang('all'); ?></option>
                            <option <?= $this->input->get('f') == 'supplier_id' ? 'selected' :''; ?> value="supplier_id">Supplier Id</option>
                           <option <?= $this->input->get('f') == 'beneficiary_wires' ? 'selected' :''; ?> value="beneficiary_wires">Beneficiary Wires</option>
                           <option <?= $this->input->get('f') == 'beneficiary_bank' ? 'selected' :''; ?> value="beneficiary_bank">Beneficiary Bank</option>
                           <option <?= $this->input->get('f') == 'intermediary_bank' ? 'selected' :''; ?> value="intermediary_bank">Intermediary Bank</option>
                          </select>
                     </div>
                     <div class="col-sm-1 padd-left-0 ">
                        <button type="submit" class="btn btn-flat" name="sbtn" id="sbtn" value="Apply" title="<?= cclang('filter_search'); ?>">
                        Filter
                        </button>
                     </div>
                     <div class="col-sm-1 padd-left-0 ">
                        <a class="btn btn-default btn-flat" name="reset" id="reset" value="Apply" href="<?= base_url('administrator/amuco_suppliers_bank');?>" title="<?= cclang('reset_filter'); ?>">
                        <i class="fa fa-undo"></i>
                        </a>
                     </div>
                  </div>
                  </form>                  <div class="col-md-4">
                     <div class="dataTables_paginate paging_simple_numbers pull-right" id="example2_paginate" >
                        <?= $pagination; ?>
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

<!-- Page script -->
<script>
  $(document).ready(function(){
   
    $('.remove-data').click(function(){

      var url = $(this).attr('data-href');

      swal({
          title: "<?= cclang('are_you_sure'); ?>",
          text: "<?= cclang('data_to_be_deleted_can_not_be_restored'); ?>",
          type: "warning",
          showCancelButton: true,
          confirmButtonColor: "#DD6B55",
          confirmButtonText: "<?= cclang('yes_delete_it'); ?>",
          cancelButtonText: "<?= cclang('no_cancel_plx'); ?>",
          closeOnConfirm: true,
          closeOnCancel: true
        },
        function(isConfirm){
          if (isConfirm) {
            document.location.href = url;            
          }
        });

      return false;
    });


    $('#apply').click(function(){

      var bulk = $('#bulk');
      var serialize_bulk = $('#form_amuco_suppliers_bank').serialize();

      if (bulk.val() == 'delete') {
         swal({
            title: "<?= cclang('are_you_sure'); ?>",
            text: "<?= cclang('data_to_be_deleted_can_not_be_restored'); ?>",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "<?= cclang('yes_delete_it'); ?>",
            cancelButtonText: "<?= cclang('no_cancel_plx'); ?>",
            closeOnConfirm: true,
            closeOnCancel: true
          },
          function(isConfirm){
            if (isConfirm) {
               document.location.href = BASE_URL + '/administrator/amuco_suppliers_bank/delete?' + serialize_bulk;      
            }
          });

        return false;

      } else if(bulk.val() == '')  {
          swal({
            title: "Upss",
            text: "<?= cclang('please_choose_bulk_action_first'); ?>",
            type: "warning",
            showCancelButton: false,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Okay!",
            closeOnConfirm: true,
            closeOnCancel: true
          });

        return false;
      }

      return false;

    });/*end appliy click*/


    //check all
    var checkAll = $('#check_all');
    var checkboxes = $('input.check');

    checkAll.on('ifChecked ifUnchecked', function(event) {   
        if (event.type == 'ifChecked') {
            checkboxes.iCheck('check');
        } else {
            checkboxes.iCheck('uncheck');
        }
    });

    checkboxes.on('ifChanged', function(event){
        if(checkboxes.filter(':checked').length == checkboxes.length) {
            checkAll.prop('checked', 'checked');
        } else {
            checkAll.removeProp('checked');
        }
        checkAll.iCheck('update');
    });
    initSortable('amuco_suppliers_bank', $('table.dataTable'));
  }); /*end doc ready*/
</script>