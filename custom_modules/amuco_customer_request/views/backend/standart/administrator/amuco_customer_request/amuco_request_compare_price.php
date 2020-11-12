<style>
  .transform-modal{
    transform: translate(0,0);
  }
   
</style>
<section class="content section-compare" id="section-compare">
    <div class="row" >
        <div class="col-md-12">
        <div class="box box-warning">
            <div class="box-body ">
            <div class="box box-widget widget-user-2">
                <div class="widget-user-header ">
                    <div class="widget-user-image">
                        <img class="img-circle" src="<?= BASE_ASSET; ?>/img/add2.png" alt="User Avatar">

                        <i class="fa fa-expand breadcrumb"  aria-hidden="true" style="float: right;margin-top: 1.5%;font-size: 23px;color: darkgray;"></i>
                    </div>
                    <h3 class="widget-user-username">Amuco Customer Request</h3>
                    <h5 class="widget-user-desc">Edit Amuco Customer Request</h5>
                    <h3 class="widget-user-username"><?= 'ID: '.$amuco_customer_request->id ?></h3> 
                </div>
   
            </div> 
        
            <!--div class="row">
                <div class="col-md-12" >
                <button class="btn btn-flat btn-aux pull-right" id="btn_edit" data-stype='stay' data-toggle="modal" data-target="#modal-edit-request" title="<?= cclang('update_button'); ?>">
                    <i class="fa fa-edit" ></i> <?= cclang('Edit'); ?>
                </button>
                </div>
            </div-->
            <div class="row"> 

                <div class="col-md-12" >                          
                    <h4>Request Information</h4>
                 </div>
            </div>   
            <br>  
            <div class="row"> 

                <div class="col-md-4" >                          
                <label for="content" class="col-sm-4 label-right">Customer</label>
                <div class="col-sm-8"><p><?= $amuco_customer_request->amuco_customers_name ?> </p> </div>
                </div>
                <div class="col-md-4" >                          
                <label for="content" class="col-md-6 col-sm-4 label-right">Destination Port</label>
                <div class="col-sm-6"><p ><?= $amuco_customer_request->amuco_destination_port_name ?> </p> </div>
                </div> 
                <div class="col-md-4" >                          
                <label for="content" class="col-sm-4 label-right">Contact</label>
                <div class="col-sm-8"><p><?= $amuco_customer_request->amuco_contacts_name ?> </p> </div>
                </div>   
            </div>
            <div class="row"> 
                <div class="col-md-4" >                          
                    <label for="content" class="col-sm-4 label-right">Sales Agent</label>
                    <div class="col-sm-8"><p ><?= $amuco_customer_request->aauth_users_username ?> </p> </div>
                </div>
                <div class="col-md-4" >                          
                    <label for="content" class="col-md-6 col-sm-4 label-right">Combined Container</label>
                    <div class="col-sm-6"> <p ><?= $amuco_customer_request->combinate_container == 0 ? 'No' : 'Yes' ?> </p> </div>
                </div>
                <div class="col-md-4" >                          
                    <label for="content" class="col-sm-4 label-right">Incoterm</label>
                    <div class="col-sm-8"><p > <?= $amuco_customer_request->amuco_incoterm_name ?> </p> </div> </div>  
                </div>  
            </div>
            <div class="row"> 
                <div class="col-md-12 div-label-left" >                          
                    <label  for="content" class="col-md-1 col-sm-4 label-right control-label">Remarks</label>
                    <div class="col-md-10 col-sm-8"><p><?= $amuco_customer_request->remarks ?> </p></div>  
                </div> 
            </div>
            <!--
            <?php if(count($products_details)==0):?>
            <div class="row"> 

                <div class="col-md-12" >                          
                    <h4>Request Products</h4>
                 </div>
            </div>  
            <br> 
            <div class="row"> 
                <div class="col-md-12 div-label-left" >                          
                    <label  for="content" class="col-md-1 col-sm-4 label-right control-label">Product Compare</label>
                    <div class="col-md-10 col-sm-8">
                        <select   class="form-control chosen chosen-select-deselect product" name="product_id" id="product_id" data-placeholder="Select Product " >
                        <option value=""></option>
                            <?php foreach ($products_request as $row): 
                                ?>
                                <option value="<?= $row->id ?>"><?= $row->name; ?></option>
                            <?php endforeach; ?>  
                        </select>
                        <small class="info help-block"><b>Select the product to compare</b> </small>
                    </div>  
                </div> 
            </div>
            <?php endif;?>
            -->
            <div class="row"> 

                <div class="col-md-12" >                          
                    <h4>Request Details</h4>
                 </div>
            </div>   
            <br>  
            <div class="row">
                <div class="col-md-12" > 
                    <form name="form_amuco_details_customers_request" id="form_amuco_details_customers_request" action="<?= base_url('administrator/amuco_details_customers_request/index'); ?>">
                        <div class="table-responsive"> 
                            <table class="table table-bordered table-striped dataTable" id="table_products">
                                <thead>
                                    <tr class="">
                                        <th><input type="checkbox" class="flat-red toltip" id="check_all" name="check_all" title="check all"></th>
                                        <th data-field="product" data-sort="1" data-primary-key="0"> <?= cclang('Product') ?></th>
                                        <th data-field="recipients" data-sort="1" data-primary-key="0"> <?= cclang('Recipients') ?></th>
                                        <th data-field="Type" data-sort="1" data-primary-key="0"> <?= cclang('Type') ?></th>
                                        <th data-field="quantity"data-sort="1" data-primary-key="0"> <?= cclang('Quantity') ?></th>
                                        <th data-field="unit"data-sort="1" data-primary-key="0"> <?= cclang('Unit') ?></th>
                                        <th data-field="price_fob"data-sort="1" data-primary-key="0"> <?= cclang('Price FOB') ?></th>
                                        <th data-field="freight"data-sort="1" data-primary-key="0"> <?= cclang('Freight') ?></th>
                                        <th data-field="unit_price"data-sort="1" data-primary-key="0"> <?= cclang('Unit Price') ?></th>
                                        <th data-field="incoterm_price"data-sort="1" data-primary-key="0"> <?= cclang('Sales Incoterm') ?></th>
                                        <th data-field="incoterm_supp"data-sort="1" data-primary-key="0"> <?= cclang('Shipping Port') ?></th>
                                        <th data-field="incoterm_supp"data-sort="1" data-primary-key="0"> <?= cclang('Supp Payment Term') ?></th>
                                        <th data-field="incoterm_supp"data-sort="1" data-primary-key="0"> <?= cclang('Supp Incoterm') ?></th>
                                        <th data-field="incoterm_supp"data-sort="1" data-primary-key="0"> <?= cclang('Analysis Std') ?></th>
                                        <th data-field="incoterm_supp"data-sort="1" data-primary-key="0"> <?= cclang('ETD') ?></th>
                                    </tr>
                                </thead>
                                <tbody id="tbody_amuco_details_price">
                                    <?php foreach($products_details as $details): ?>
                                    <tr>
                                        <td width="5">
                                            <input type="checkbox" class="flat-red check" name="id[]" value="<?= $details->id; ?>">
                                        </td>
                                        <td><?= $details->amuco_products_name; ?></td>
                                        
                                        <td><?= $details->supplier_direct == null ? $details->amuco_suppliers_name : $details->amuco_supplier_direct_name ?></td>
                                        <td><?= $details->supplier_direct == null ? 'Office' : 'Supplier' ?></td>
                                        <td><?= _ent($details->quantity); ?></td>
                                        <td><?= _ent($details->amuco_unit_types_name); ?></td>
                                        <td><?= _ent($details->price_fob); ?></td>
                                        <td><?= _ent($details->total_freight); ?></td>
                                        <td><?= _ent($details->total_price); ?></td>
                                        <td><?= _ent($details->amuco_incoterm_price_name); ?></td>
                                        <td><?= _ent($details->amuco_destination_port_name); ?></td>
                                        <td><?= _ent($details->amuco_payments_terms_suppliers_name); ?></td>
                                        <td><?= _ent($details->amuco_incoterm_name); ?></td>
                                        <td><?= _ent($details->analysis_standard); ?></td>
                                        <td><?= _ent(substr($details->ETD,0,10)); ?></td>
                                    </tr>  
<?php endforeach;?>  
                                </tbody>
                            </table>  
                        </div>
                    </form>
                </div>  
            </div>              
        </div>    
    </div>
</section>  


<script>
    $(document).ready(function(){
        var show = false;
        $('.breadcrumb').on('click',()=>{
            var docElm = document.getElementById('modalPopUp').getElementsByClassName('modal-dialog')[0];
            if(show){
                show = false;
                $('.breadcrumb').removeClass('fa fa-compress');
                $('.breadcrumb').addClass('fa fa-expand');
                if(document.cancelFullScreen) {
                    document.cancelFullScreen();
                } else if(document.mozCancelFullScreen) {
                    document.mozCancelFullScreen();
                } else if(document.webkitCancelFullScreen) {
                    document.webkitCancelFullScreen();
                }
            }else{
                if (docElm.requestFullscreen) {
                    show = true;
                    $('.breadcrumb').removeClass('fa fa-expand');
                    $('.breadcrumb').addClass('fa fa-compress');
                    docElm.requestFullscreen();
                } else if (docElm.msRequestFullscreen) {
                    $('.breadcrumb').removeClass('fa fa-expand');
                    $('.breadcrumb').addClass('fa fa-compress'); 
                    docElm.msRequestFullscreen();
                } else if (docElm.mozRequestFullScreen) {
                    $('.breadcrumb').removeClass('fa fa-expand');
                    $('.breadcrumb').addClass('fa fa-compress');    
                    docElm.mozRequestFullScreen();
                } else if (docElm.webkitRequestFullScreen) {             
                    $('.breadcrumb').removeClass('fa fa-expand');
                    $('.breadcrumb').addClass('fa fa-compress');
                    docElm.webkitRequestFullScreen();
                }
            }
            
           
        });
       
        $('.product').change(function(){
          //  alert( $('.product').val());
            var id = $('#customer_request_id').val();
            var product_id = $('.product').val();
            $.ajax({
              url: BASE_URL + '/administrator/amuco_customer_request/get_data_products?id='+id+'&&product_id='+product_id,
              type: 'GET',
              dataType: 'json',   
            })
            .done(function(response) {
                console.log(response);
                if(response.success) {
                        console.log(response.details_products.length);
                        if(response.details_products.length > 0){
                            $("#tbody_amuco_details_price").html("");
                            $.each(response.details_products, function(id, value) {
                                console.log(value);
                                if(value.supplier_direct == null){
                                    var type = "Office";
                                    var recipients = value.amuco_suppliers_name;
                                }else{
                                    var type = "Supplier";
                                    var recipients = value.amuco_suppliers_name;
                                }
                                var tr = '<tr>'+
                                '<td><input type="checkbox" class="flat-red check" name="id[]" value="'+value.id+'"></td>'+
                                '<td>'+ type +'</td>'+
                                '<td>'+ recipients +'</td>'+
                                '<td>'+value.quantity+'</td>'+
                                '<td>'+value.amuco_unit_types_name+'</td>'+
                                '<td>'+value.price_fob+'</td>'+
                                '<td>'+value.total_freight+'</td>'+
                                '<td>'+value.total_price+'</td>'+
                                '<td>'+value.incoterm_price+'</td>'+
                                '<td>'+value.amuco_incoterm_name+'</td>'+
                                '<td>'+value.amuco_destination_port_name+'</td>'+
                                '<td>'+value.amuco_payments_terms_suppliers_name+'</td>'+
                                '<td>'+value.analysis_standard+'</td>'+
                                '<td>'+value.ETD +'</td>'+
                                '</tr>';
                                $("#tbody_amuco_details_price").append(tr)
                            });
                        }else{

                        }
                }else{
                    console.log("Error No data");
                    $('.message6').printMessage({message : 'Error search data', type : 'warning'});
                }

                
            })
            .fail(function() {
                $('.message6').printMessage({message : 'Error save data', type : 'warning'});
            })
            .always(function() {
                $('.loading').hide();
                
            });
        });
    });
  </script>