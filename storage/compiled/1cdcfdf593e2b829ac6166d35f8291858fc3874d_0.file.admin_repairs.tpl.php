<?php
/* Smarty version 3.1.33, created on 2019-10-14 13:52:51
  from '/Users/razib/Documents/valet/business-suite/apps/autorepair/views/admin_repairs.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5da4b5f387cd21_65775987',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1cdcfdf593e2b829ac6166d35f8291858fc3874d' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/apps/autorepair/views/admin_repairs.tpl',
      1 => 1563789612,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5da4b5f387cd21_65775987 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2978026365da4b5f3866df2_02156351', "style");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11559807475da4b5f3869248_12393572', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11398589795da4b5f387c501_65408170', "script");
}
/* {block "style"} */
class Block_2978026365da4b5f3866df2_02156351 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'style' => 
  array (
    0 => 'Block_2978026365da4b5f3866df2_02156351',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
ui/lib/footable/css/footable.core.min.css" />
<?php
}
}
/* {/block "style"} */
/* {block "content"} */
class Block_11559807475da4b5f3869248_12393572 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_11559807475da4b5f3869248_12393572',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>



    <div class="row">
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-body">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
autorepair/admin/appointment" class="btn btn-primary">New Repair</a>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">

            <div class="panel">
                <div class="panel-body">

                    <h3>Repair History</h3>

                    <div class="hr-line-dashed"></div>

                    <form class="form-horizontal" method="post" action="">
                        <div class="form-group">
                            <div class="col-md-12">
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <span class="fa fa-search"></span>
                                    </div>
                                    <input type="text" name="name" id="foo_filter" class="form-control" placeholder="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Search'];?>
..."/>

                                </div>
                            </div>

                        </div>
                    </form>

                    <table class="table table-bordered table-hover sys_table footable" data-filter="#foo_filter" data-page-size="50">
                        <thead>
                        <tr>

                            <th>Description</th>
                            <th>Customer</th>
                            <th>Technician</th>
                            <th>Vehicle</th>
                            <th>Status</th>
                            <th>Manage</th>

                        </tr>
                        </thead>
                        <tbody>

                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['repairs']->value, 'repair');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['repair']->value) {
?>

                            <tr>
                                <td>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
autorepair/admin/repair/<?php echo $_smarty_tpl->tpl_vars['repair']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['repair']->value->description;?>
</a>
                                </td>
                                <td>
                                    <?php if (isset($_smarty_tpl->tpl_vars['contacts']->value[$_smarty_tpl->tpl_vars['repair']->value->contact_id])) {?>
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
contacts/view/<?php echo $_smarty_tpl->tpl_vars['repair']->value->contact_id;?>
"><?php echo $_smarty_tpl->tpl_vars['contacts']->value[$_smarty_tpl->tpl_vars['repair']->value->contact_id]->account;?>
</a>
                                    <?php } else { ?>
                                        ---
                                    <?php }?>
                                </td>

                                <td>
                                    <?php if (isset($_smarty_tpl->tpl_vars['staffs']->value[$_smarty_tpl->tpl_vars['repair']->value->technician_id])) {?>
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/users-edit/<?php echo $_smarty_tpl->tpl_vars['repair']->value->technician_id;?>
"><?php echo $_smarty_tpl->tpl_vars['staffs']->value[$_smarty_tpl->tpl_vars['repair']->value->technician_id]->fullname;?>
</a>
                                    <?php } else { ?>
                                        ---
                                    <?php }?>
                                </td>

                                <td>

                                    <?php if (isset($_smarty_tpl->tpl_vars['cars']->value[$_smarty_tpl->tpl_vars['repair']->value->item_id])) {?>
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
autorepair/admin/vehicle/<?php echo $_smarty_tpl->tpl_vars['repair']->value->item_id;?>
">
                                            <span class="text-muted"><?php echo date('Y',strtotime($_smarty_tpl->tpl_vars['cars']->value[$_smarty_tpl->tpl_vars['repair']->value->item_id]->year));?>
</span> <br>

                                            <?php echo $_smarty_tpl->tpl_vars['cars']->value[$_smarty_tpl->tpl_vars['repair']->value->item_id]->make;?>
 - <?php echo $_smarty_tpl->tpl_vars['cars']->value[$_smarty_tpl->tpl_vars['repair']->value->item_id]->model;?>

                                        </a>
                                    <?php } else { ?>
                                        ---
                                    <?php }?>

                                </td>

                                <td>

                                    <?php if ($_smarty_tpl->tpl_vars['repair']->value->status == 'Pending') {?>
                                        <span class="label label-danger"><?php echo ib_lan_get_line($_smarty_tpl->tpl_vars['repair']->value->status);?>
</span>
                                    <?php } elseif ($_smarty_tpl->tpl_vars['repair']->value->status == 'Started') {?>
                                        <span class="label label-primary"><?php echo ib_lan_get_line($_smarty_tpl->tpl_vars['repair']->value->status);?>
</span>
                                    <?php } elseif ($_smarty_tpl->tpl_vars['repair']->value->status == 'Completed') {?>
                                        <span class="label label-success"><?php echo ib_lan_get_line($_smarty_tpl->tpl_vars['repair']->value->status);?>
</span>
                                    <?php } elseif ($_smarty_tpl->tpl_vars['repair']->value->status == 'Cancelled') {?>
                                        <span class="label"><?php echo ib_lan_get_line($_smarty_tpl->tpl_vars['repair']->value->status);?>
</span>
                                    <?php } else { ?>
                                        <?php echo ib_lan_get_line($_smarty_tpl->tpl_vars['repair']->value->status);?>

                                    <?php }?>

                                </td>
                                <td>

                                    <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
autorepair/admin/repair/<?php echo $_smarty_tpl->tpl_vars['repair']->value->id;?>
" class="btn btn-primary btn-xs" data-toggle="tooltip" data-placement="top" title="<?php echo $_smarty_tpl->tpl_vars['_L']->value['View'];?>
"><i class="fa fa-file-text-o"></i></a>
                                    <?php if ($_smarty_tpl->tpl_vars['repair']->value->invoice_id) {?>
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
invoices/view/<?php echo $_smarty_tpl->tpl_vars['repair']->value->invoice_id;?>
" class="btn btn-success btn-xs" data-toggle="tooltip" data-placement="top" title="View Invoice"><i class="icon-credit-card-1"></i></a>
                                        <?php } else { ?>
                                        <a href="javascript:;" onclick="confirmThenGoToUrl(event,'autorepair/admin/create-invoice-from-repair/<?php echo $_smarty_tpl->tpl_vars['repair']->value->id;?>
');" class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" title="Create Invoice"><i class="icon-credit-card-1"></i></a>
                                    <?php }?>
                                    <a href="javascript:;" onclick="confirmThenGoToUrl(event,'autorepair/admin/repair-delete/<?php echo $_smarty_tpl->tpl_vars['repair']->value->id;?>
');" class="btn btn-danger btn-xs cdelete" data-toggle="tooltip" data-placement="top" title="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Delete'];?>
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
                            <td colspan="6">
                                <ul class="pagination">
                                </ul>
                            </td>
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
class Block_11398589795da4b5f387c501_65408170 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_11398589795da4b5f387c501_65408170',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
ui/lib/footable/js/footable.all.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
>
        $(function () {
            $('.footable').footable();
            $('[data-toggle="tooltip"]').tooltip();
        });
    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block "script"} */
}
