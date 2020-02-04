<?php
/* Smarty version 3.1.33, created on 2019-10-22 13:13:21
  from '/Users/razib/Documents/valet/business-suite/apps/bpr/views/process_invoice_transactions.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5daf38b158d850_73737537',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'db23909e37f7f9e56bf553a819172f8282e61247' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/apps/bpr/views/process_invoice_transactions.tpl',
      1 => 1568140886,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5daf38b158d850_73737537 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_323238675daf38b156fc99_46186209', "style");
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16833940005daf38b1571414_61131255', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14699545515daf38b158b4e6_07321074', "script");
?>


<?php }
/* {block "style"} */
class Block_323238675daf38b156fc99_46186209 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'style' => 
  array (
    0 => 'Block_323238675daf38b156fc99_46186209',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/fixedheader/3.1.5/css/fixedHeader.dataTables.min.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
ui/lib/modal.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
ui/lib/dp/dist/datepicker.min.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
ui/lib/s2/css/select2.min.css" />

<?php
}
}
/* {/block "style"} */
/* {block "content"} */
class Block_16833940005daf38b1571414_61131255 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_16833940005daf38b1571414_61131255',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <div class="row">
        <div class="col-md-12">

            <div class="panel">
                <div class="panel-body">






































                    <table id="invoices_table" class="display table table-bordered" style="width:100%" data-order="[[ 1, &quot;desc&quot; ]]">
                        <thead>
                        <tr>
                            <th data-orderable="false">Invoice <br> Status</th>
                            <th data-orderable="false">Tech <br> Status</th>
                            <th>Ticket#</th>
                            <th>Technician / <br>
                                Technician Company
                            </th>
                            <th>
                                Tech Status
                            </th>
                            <th>Amount</th>
                            <th>PO#</th>
                            <th>Due Date</th>
                            <th width="70px;" data-orderable="false">Manage</th>
                        </tr>
                        <tr>
                            <th>&nbsp;</th>
                            <th>&nbsp;</th>
                            <th class="sp_searchable"><input class="form-control" data-column-map="1"></th>
                            <th class="sp_searchable"><input class="form-control" data-column-map="2"></th>
                            <th class="sp_searchable"><input class="form-control" data-column-map="3"></th>
                            <th class="sp_searchable"><input class="form-control" data-column-map="4"></th>
                            <th class="sp_searchable"><input class="form-control" data-column-map="5"></th>
                            <th>&nbsp;</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['invoices']->value, 'invoice');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['invoice']->value) {
?>
                            <tr>
                                <td>

                                    <?php if ($_smarty_tpl->tpl_vars['invoice']->value->status == 'Paid') {?>



                                        <a href="#" class="btn btn-success btn_add_payment" data-invoice-id="<?php echo $_smarty_tpl->tpl_vars['invoice']->value->id;?>
" style="background-color: #4caf50;
    border-color: #4caf50;" data-toggle="tooltip" data-placement="top" title="Add Payment"><i class="fa fa-check-circle"></i></a>

                                    <?php } elseif ($_smarty_tpl->tpl_vars['invoice']->value->status == 'Unpaid') {?>

                                        <a href="#" class="btn btn-danger btn_add_payment" data-invoice-id="<?php echo $_smarty_tpl->tpl_vars['invoice']->value->id;?>
" data-toggle="tooltip" data-placement="top" title="Add Payment"><i class="fa fa-check-circle"></i></a>

                                    <?php } elseif ($_smarty_tpl->tpl_vars['invoice']->value->status == 'Partially Paid') {?>

                                        <a href="#" class="btn btn-warning btn_add_payment" style="background-color: #f9a825;
    border-color: #f9a825;" data-invoice-id="<?php echo $_smarty_tpl->tpl_vars['invoice']->value->id;?>
" style="background-color: #f9a825;
    border-color: #f9a825;" data-toggle="tooltip" data-placement="top" title="Add Payment"><i class="fa fa-check-circle"></i></a>



                                    <?php } else { ?>

                                        <a href="#" class="btn btn-danger btn_add_payment" data-invoice-id="<?php echo $_smarty_tpl->tpl_vars['invoice']->value->id;?>
" data-toggle="tooltip" data-placement="top" title="Add Payment"><i class="fa fa-check-circle"></i></a>

                                    <?php }?>


                                </td>

                                <td>
                                    <?php if (!$_smarty_tpl->tpl_vars['invoice']->value->has_tech_info) {?>
                                        <a href="#" class="btn btn-danger btn_update_tech_status" data-invoice-id="<?php echo $_smarty_tpl->tpl_vars['invoice']->value->id;?>
" data-toggle="tooltip" data-placement="top" title="Tech Status"><i class="fa fa-check-circle"></i></a>
                                    <?php } elseif (!$_smarty_tpl->tpl_vars['invoice']->value->is_tech_paid) {?>
                                        <a href="#" class="btn btn-warning btn_update_tech_status" style="background-color: #f9a825;
    border-color: #f9a825;" data-invoice-id="<?php echo $_smarty_tpl->tpl_vars['invoice']->value->id;?>
" data-toggle="tooltip" data-placement="top" title="Tech Status"><i class="fa fa-check-circle"></i></a>
                                    <?php } else { ?>
                                        <a href="#" class="btn btn-warning btn_update_tech_status" style="background-color: #f9a825;
    border-color: #f9a825;" data-invoice-id="<?php echo $_smarty_tpl->tpl_vars['invoice']->value->id;?>
" data-toggle="tooltip" data-placement="top" title="Tech Status"><i class="fa fa-check-circle"></i></a>
                                    <?php }?>
                                </td>
                                <td data-sort="<?php echo $_smarty_tpl->tpl_vars['invoice']->value->id;?>
">
                                    <?php echo $_smarty_tpl->tpl_vars['invoice']->value->cn;?>

                                </td>
                                <td>

                                    <?php if (isset($_smarty_tpl->tpl_vars['staffs']->value[$_smarty_tpl->tpl_vars['invoice']->value->tech_id])) {?>
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/users-edit/<?php echo $_smarty_tpl->tpl_vars['invoice']->value->tech_id;?>
">
                                            <?php echo $_smarty_tpl->tpl_vars['staffs']->value[$_smarty_tpl->tpl_vars['invoice']->value->tech_id]->fullname;?>
 <br>
                                            <?php echo $_smarty_tpl->tpl_vars['staffs']->value[$_smarty_tpl->tpl_vars['invoice']->value->tech_id]->job_title;?>

                                        </a>

                                    <?php }?>
                                </td>
                                <td><?php echo formatCurrency($_smarty_tpl->tpl_vars['invoice']->value->total,'USD');?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['invoice']->value->receipt_number;?>
</td>
                                <td><?php echo date('F j, Y',strtotime($_smarty_tpl->tpl_vars['invoice']->value->duedate));?>
</td>
                                <td class="text-right">
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
invoices/view/<?php echo $_smarty_tpl->tpl_vars['invoice']->value->id;?>
/" class="btn btn-primary btn-xs" data-toggle="tooltip" data-placement="top" title="<?php echo $_smarty_tpl->tpl_vars['_L']->value['View'];?>
"><i class="fa fa-file-text-o"></i></a>


                                    <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
invoices/edit/<?php echo $_smarty_tpl->tpl_vars['invoice']->value->id;?>
/" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Edit'];?>
"><i class="fa fa-pencil"></i></a>


                                    <a href="#" class="btn btn-danger btn-xs cdelete" id="iid<?php echo $_smarty_tpl->tpl_vars['invoice']->value->id;?>
" data-toggle="tooltip" data-placement="top" title="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Delete'];?>
"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </tbody>
                        <tfoot>
                        <tr>
                            <th>Invoice <br> Status</th>
                            <th>Tech <br> Status</th>
                            <th>Invoice#</th>
                            <th>Company</th>
                            <th>Amount</th>
                            <th>PO#</th>
                            <th>Due Date</th>
                            <th>Manage</th>
                        </tr>
                        </tfoot>
                    </table>
                </div>
            </div>

        </div>
    </div>

<?php
}
}
/* {/block "content"} */
/* {block "script"} */
class Block_14699545515daf38b158b4e6_07321074 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_14699545515daf38b158b4e6_07321074',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <?php echo '<script'; ?>
 src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://cdn.datatables.net/fixedheader/3.1.5/js/dataTables.fixedHeader.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
ui/lib/s2/js/select2.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
ui/lib/dp/dist/datepicker.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
ui/lib/modal.js"><?php echo '</script'; ?>
>

    <?php echo '<script'; ?>
>
        $(function () {

            $('[data-toggle="tooltip"]').tooltip();

            // $('#invoices_table thead tr').clone(true).appendTo( '#invoices_table thead' );

            var $modal = $('#ajax-modal');

            var table = $('#invoices_table').DataTable( {
                orderCellsTop: true,
                fixedHeader: {
                    headerOffset: 50
                },
            } );

            var column_id = 0;
            var iid = 0;

            $('.sp_searchable').each( function (i) {

                $( 'input', this ).on( 'keyup change', function () {
                    column_id = this.getAttribute('data-column-map');
                    if ( table.column(column_id).search() !== this.value ) {
                        table
                            .column(column_id)
                            .search( this.value )
                            .draw();
                    }
                } );
            } );

            $('.btn_add_payment').on('click',function (e) {
                e.preventDefault();

                iid = this.getAttribute('data-invoice-id');

                $('body').modalmanager('loading');

                $modal.load('<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
invoices/add-payment/' + iid, '', function(){
                    $modal.modal();

                    $(".datepicker").datepicker();
                    $("#account").select2({
                        theme: "bootstrap"
                    });
                    $("#cats").select2({
                        theme: "bootstrap"
                    });
                    $("#pmethod").select2({
                        theme: "bootstrap"
                    });

                });

            });

            $modal.on('click', '#save_payment', function(){
                $modal.modal('loading');

                $.post('<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
invoices/add-payment-post', $("#form_add_payment").serialize())

                    .done(function (data) {

                        if ($.isNumeric(data)) {
                            location.reload();
                        }
                        else {
                            $modal
                                .modal('loading')
                                .find('.modal-body')
                                .prepend(data);
                        }
                    });

            });


            $('.btn_update_tech_status').on('click',function (e) {
                e.preventDefault();

                iid = this.getAttribute('data-invoice-id');

                $('body').modalmanager('loading');

                $modal.load('<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
bpr/admin/modal-tech-status/' + iid, '', function(){
                    $modal.modal();

                    $(".datepicker").datepicker();
                    $("#account").select2({
                        theme: "bootstrap"
                    });
                    $('#tech_id').select2({
                        theme: "bootstrap"
                    });
                    $("#cats").select2({
                        theme: "bootstrap"
                    });
                    $("#pmethod").select2({
                        theme: "bootstrap"
                    });

                });

            });


            $modal.on('click', '#btn_update_tech_info', function(e){
                e.preventDefault();
                $modal.modal('loading');

                $.post('<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
bpr/admin/update-tech-info', $("#form_update_tech_info").serialize())

                    .done(function (data) {
                        location.reload();
                    }).fail(function(data) {
                    $modal.modal('loading');
                    spNotify(data.responseText,'error');
                });

            });


            $modal.on('click', '#btn_record_tech_payment', function(e){
                e.preventDefault();
                $modal.modal('loading');

                $.post('<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
bpr/admin/record-tech-payment', $("#form_record_tech_payment").serialize())

                    .done(function (data) {
                        location.reload();
                    }).fail(function(data) {
                    $modal.modal('loading');
                    spNotify(data.responseText,'error');
                });

            });



        });
    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block "script"} */
}
