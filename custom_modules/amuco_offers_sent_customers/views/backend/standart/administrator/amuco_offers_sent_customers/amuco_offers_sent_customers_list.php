
<script src="<?= BASE_ASSET; ?>/js/jquery.hotkeys.js"></script>

<script type="text/javascript">
//This page is a result of an autogenerated content made by running test.html with firefox.
function domo(){
 
   // Binding keys
   $('*').bind('keydown', 'Ctrl+a', function assets() {
       window.location.href = BASE_URL + '/administrator/Amuco_offers_sent_customers/add';
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
      <?= cclang('amuco_offers_sent_customers') ?><small><?= cclang('list_all'); ?></small>
   </h1>
   <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active"><?= cclang('amuco_offers_sent_customers') ?></li>
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
                        <?php is_allowed('amuco_offers_sent_customers_add', function(){?>
                        <a class="btn btn-flat btn-success btn_add_new" id="btn_add_new" title="<?= cclang('add_new_button', [cclang('amuco_offers_sent_customers')]); ?>  (Ctrl+a)" href="<?=  site_url('administrator/amuco_offers_sent_customers/add'); ?>"><i class="fa fa-plus-square-o" ></i> <?= cclang('add_new_button', [cclang('amuco_offers_sent_customers')]); ?></a>
                        <?php }) ?>
                        <?php is_allowed('amuco_offers_sent_customers_export', function(){?>
                        <a class="btn btn-flat btn-success" title="<?= cclang('export'); ?> <?= cclang('amuco_offers_sent_customers') ?> " href="<?= site_url('administrator/amuco_offers_sent_customers/export?q='.$this->input->get('q').'&f='.$this->input->get('d')); ?>"><i class="fa fa-file-excel-o" ></i> <?= cclang('export'); ?> XLS</a>
                        <?php }) ?>
                        <?php is_allowed('amuco_offers_sent_customers_export', function(){?>
                        <a class="btn btn-flat btn-success" title="<?= cclang('export'); ?> pdf <?= cclang('amuco_offers_sent_customers') ?> " href="<?= site_url('administrator/amuco_offers_sent_customers/export_pdf'); ?>"><i class="fa fa-file-pdf-o" ></i> <?= cclang('export'); ?> PDF</a>
                        <?php }) ?>
                     </div>
                     <div class="widget-user-image">
                        <img class="img-circle" src="<?= BASE_ASSET; ?>/img/list.png" alt="User Avatar">
                     </div>
                     <!-- /.widget-user-image -->
                     <h3 class="widget-user-username"><?= cclang('amuco_offers_sent_customers') ?></h3>
                     <h5 class="widget-user-desc"><?= cclang('list_all', [cclang('amuco_offers_sent_customers')]); ?>  <i class="label bg-yellow"><?= $amuco_offers_sent_customers_counts; ?>  <?= cclang('items'); ?></i></h5>
                  </div>

                  <form name="form_amuco_offers_sent_customers" id="form_amuco_offers_sent_customers" action="<?= base_url('administrator/amuco_offers_sent_customers/index'); ?>">
                  

                  <div class="table-responsive"> 
                  <table class="table table-bordered table-striped dataTable">
                     <thead>
                        <tr class="">
                                                     <th>
                            <input type="checkbox" class="flat-red toltip" id="check_all" name="check_all" title="check all">
                           </th>
                                                    <th data-field="status"data-sort="1" data-primary-key="0"> <?= cclang('status') ?></th>
                           <th data-field="customer_request_id"data-sort="1" data-primary-key="0"> <?= cclang('customer_request_id') ?></th>
                           <th data-field="payments_terms_id"data-sort="1" data-primary-key="0"> <?= cclang('payments_terms_id') ?></th>
                           <th data-field="quantity"data-sort="1" data-primary-key="0"> <?= cclang('quantity') ?></th>
                           <th data-field="unit"data-sort="1" data-primary-key="0"> <?= cclang('unit') ?></th>
                           <th data-field="freight"data-sort="1" data-primary-key="0"> <?= cclang('freight') ?></th>
                           <th data-field="unit_price"data-sort="1" data-primary-key="0"> <?= cclang('unit_price') ?></th>
                           <th data-field="incoterm"data-sort="1" data-primary-key="0"> <?= cclang('incoterm') ?></th>
                           <th data-field="destination_port"data-sort="1" data-primary-key="0"> <?= cclang('destination_port') ?></th>
                           <th data-field="packing"data-sort="1" data-primary-key="0"> <?= cclang('packing') ?></th>
                           <th data-field="fcl"data-sort="1" data-primary-key="0"> <?= cclang('fcl') ?></th>
                           <th data-field="type_fcl"data-sort="1" data-primary-key="0"> <?= cclang('type_fcl') ?></th>
                           <th data-field="option_fcl"data-sort="1" data-primary-key="0"> <?= cclang('option_fcl') ?></th>
                           <th>Action</th>                        </tr>
                     </thead>
                     <tbody id="tbody_amuco_offers_sent_customers">
                     <?php foreach($amuco_offers_sent_customerss as $amuco_offers_sent_customers): ?>
                        <tr>
                                                       <td width="5">
                              <input type="checkbox" class="flat-red check" name="id[]" value="<?= $amuco_offers_sent_customers->id; ?>">
                           </td>
                                                       
                           <td><?= _ent($amuco_offers_sent_customers->status); ?></td> 
                           <td><?= _ent($amuco_offers_sent_customers->customer_request_id); ?></td> 
                           <td><?php if  ($amuco_offers_sent_customers->payments_terms_id) {

                              echo anchor('administrator/amuco_supplier_payment_terms/view/'.$amuco_offers_sent_customers->payments_terms_id.'?popup=show', $amuco_offers_sent_customers->amuco_supplier_payment_terms_description, ['class' => 'popup-view']); }?> </td>
                             
                           <td><?= _ent($amuco_offers_sent_customers->quantity); ?></td> 
                           <td><?php if  ($amuco_offers_sent_customers->unit) {

                              echo anchor('administrator/amuco_unit_types/view/'.$amuco_offers_sent_customers->unit.'?popup=show', $amuco_offers_sent_customers->amuco_unit_types_name, ['class' => 'popup-view']); }?> </td>
                             
                           <td><?= _ent($amuco_offers_sent_customers->freight); ?></td> 
                           <td><?= _ent($amuco_offers_sent_customers->unit_price); ?></td> 
                           <td><?php if  ($amuco_offers_sent_customers->incoterm) {

                              echo anchor('administrator/amuco_incoterm/view/'.$amuco_offers_sent_customers->incoterm.'?popup=show', $amuco_offers_sent_customers->amuco_incoterm_name, ['class' => 'popup-view']); }?> </td>
                             
                           <td><?php if  ($amuco_offers_sent_customers->destination_port) {

                              echo anchor('administrator/amuco_destination_port/view/'.$amuco_offers_sent_customers->destination_port.'?popup=show', $amuco_offers_sent_customers->amuco_destination_port_name, ['class' => 'popup-view']); }?> </td>
                             
                           <td><?php if  ($amuco_offers_sent_customers->packing) {

                              echo anchor('administrator/amuco_packing/view/'.$amuco_offers_sent_customers->packing.'?popup=show', $amuco_offers_sent_customers->amuco_packing_name, ['class' => 'popup-view']); }?> </td>
                             
                           <td><?= _ent($amuco_offers_sent_customers->fcl); ?></td> 
                           <td><?= _ent($amuco_offers_sent_customers->type_fcl); ?></td> 
                           <td><?= _ent($amuco_offers_sent_customers->option_fcl); ?></td> 
                           <td width="200">
                            
                                                              <?php is_allowed('amuco_offers_sent_customers_view', function() use ($amuco_offers_sent_customers){?>
                                 <a href="<?= site_url('administrator/amuco_offers_sent_customers/single_pdf/' .$amuco_offers_sent_customers->id); ?>" class="label-default"><i class="fa fa-file-pdf-o"></i> <?= cclang('PDF') ?>
                              <a href="<?= site_url('administrator/amuco_offers_sent_customers/view/' . $amuco_offers_sent_customers->id); ?>" class="label-default"><i class="fa fa-newspaper-o"></i> <?= cclang('view_button'); ?>
                              <?php }) ?>
                              <?php is_allowed('amuco_offers_sent_customers_update', function() use ($amuco_offers_sent_customers){?>
                              <a href="<?= site_url('administrator/amuco_offers_sent_customers/edit/' . $amuco_offers_sent_customers->id); ?>" class="label-default"><i class="fa fa-edit "></i> <?= cclang('update_button'); ?></a>
                              <?php }) ?>
                              <?php is_allowed('amuco_offers_sent_customers_delete', function() use ($amuco_offers_sent_customers){?>
                              <a href="javascript:void(0);" data-href="<?= site_url('administrator/amuco_offers_sent_customers/delete/' . $amuco_offers_sent_customers->id); ?>" class="label-default remove-data"><i class="fa fa-close"></i> <?= cclang('remove_button'); ?></a>
                               <?php }) ?>

                           </td>                        </tr>
                      <?php endforeach; ?>
                      <?php if ($amuco_offers_sent_customers_counts == 0) :?>
                         <tr>
                           <td colspan="100">
                           Amuco Offers Sent Customers data is not available
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
                            <option <?= $this->input->get('f') == 'status' ? 'selected' :''; ?> value="status">Status</option>
                           <option <?= $this->input->get('f') == 'customer_request_id' ? 'selected' :''; ?> value="customer_request_id">Customer Request Id</option>
                           <option <?= $this->input->get('f') == 'payments_terms_id' ? 'selected' :''; ?> value="payments_terms_id">Payments Terms Id</option>
                           <option <?= $this->input->get('f') == 'quantity' ? 'selected' :''; ?> value="quantity">Quantity</option>
                           <option <?= $this->input->get('f') == 'unit' ? 'selected' :''; ?> value="unit">Unit</option>
                           <option <?= $this->input->get('f') == 'freight' ? 'selected' :''; ?> value="freight">Freight</option>
                           <option <?= $this->input->get('f') == 'unit_price' ? 'selected' :''; ?> value="unit_price">Unit Price</option>
                           <option <?= $this->input->get('f') == 'incoterm' ? 'selected' :''; ?> value="incoterm">Incoterm</option>
                           <option <?= $this->input->get('f') == 'destination_port' ? 'selected' :''; ?> value="destination_port">Destination Port</option>
                           <option <?= $this->input->get('f') == 'packing' ? 'selected' :''; ?> value="packing">Packing</option>
                           <option <?= $this->input->get('f') == 'fcl' ? 'selected' :''; ?> value="fcl">Fcl</option>
                           <option <?= $this->input->get('f') == 'type_fcl' ? 'selected' :''; ?> value="type_fcl">Type Fcl</option>
                           <option <?= $this->input->get('f') == 'option_fcl' ? 'selected' :''; ?> value="option_fcl">Option Fcl</option>
                          </select>
                     </div>
                     <div class="col-sm-1 padd-left-0 ">
                        <button type="submit" class="btn btn-flat" name="sbtn" id="sbtn" value="Apply" title="<?= cclang('filter_search'); ?>">
                        Filter
                        </button>
                     </div>
                     <div class="col-sm-1 padd-left-0 ">
                        <a class="btn btn-default btn-flat" name="reset" id="reset" value="Apply" href="<?= base_url('administrator/amuco_offers_sent_customers');?>" title="<?= cclang('reset_filter'); ?>">
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
      var serialize_bulk = $('#form_amuco_offers_sent_customers').serialize();

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
               document.location.href = BASE_URL + '/administrator/amuco_offers_sent_customers/delete?' + serialize_bulk;      
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
    initSortable('amuco_offers_sent_customers', $('table.dataTable'));
  }); /*end doc ready*/
</script>