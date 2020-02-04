<?php
/* Smarty version 3.1.33, created on 2019-10-14 13:52:57
  from '/Users/razib/Documents/valet/business-suite/apps/autorepair/views/admin_vehicles.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5da4b5f9745535_34220366',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f1292a997478fa340e03c8fba101b27fc446e281' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/apps/autorepair/views/admin_vehicles.tpl',
      1 => 1563778638,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5da4b5f9745535_34220366 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1476007485da4b5f973b7a9_97064736', "style");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4092348765da4b5f973d0e2_22884205', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16304332625da4b5f9744e11_34786207', "script");
}
/* {block "style"} */
class Block_1476007485da4b5f973b7a9_97064736 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'style' => 
  array (
    0 => 'Block_1476007485da4b5f973b7a9_97064736',
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
class Block_4092348765da4b5f973d0e2_22884205 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_4092348765da4b5f973d0e2_22884205',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>



    <div class="row">
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-body">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
autorepair/admin/vehicle" class="btn btn-primary">Add Vehicle</a>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">

            <div class="panel">
                <div class="panel-body">

                    <h3>Vehicles</h3>

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

                            <th>Vehicle</th>
                            <th>Customer / Owner</th>

                            <th>Added</th>
                            <th>Manage</th>

                        </tr>
                        </thead>
                        <tbody>

                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cars']->value, 'car');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['car']->value) {
?>

                            <tr>
                                <td>

                                    <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
autorepair/admin/vehicle/<?php echo $_smarty_tpl->tpl_vars['car']->value->id;?>
">

                                        <span class="text-muted"><?php echo date('Y',strtotime($_smarty_tpl->tpl_vars['car']->value->year));?>
</span> <br>

                                        <?php echo $_smarty_tpl->tpl_vars['car']->value->make;?>
 - <?php echo $_smarty_tpl->tpl_vars['car']->value->model;?>


                                    </a>

                                </td>
                                <td>

                                    <?php if (isset($_smarty_tpl->tpl_vars['contacts']->value[$_smarty_tpl->tpl_vars['car']->value->contact_id])) {?>
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
contacts/view/<?php echo $_smarty_tpl->tpl_vars['car']->value->contact_id;?>
"><?php echo $_smarty_tpl->tpl_vars['contacts']->value[$_smarty_tpl->tpl_vars['car']->value->contact_id]->account;?>
</a>
                                    <?php } else { ?>
                                        ---
                                    <?php }?>

                                </td>
                                <td>
                                    <?php echo date($_smarty_tpl->tpl_vars['config']->value['df'],strtotime($_smarty_tpl->tpl_vars['car']->value->created_at));?>

                                </td>
                                <td>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
autorepair/admin/vehicle/<?php echo $_smarty_tpl->tpl_vars['car']->value->id;?>
" class="btn btn-sm btn-primary">View</a>
                                    <a href="javascript:;" onclick="confirmThenGoToUrl(event,'autorepair/admin/vehicle-delete/<?php echo $_smarty_tpl->tpl_vars['car']->value->id;?>
');" class="btn btn-sm btn-danger">Delete</a>
                                </td>
                            </tr>

                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>


                        </tbody>

                        <tfoot>
                        <tr>
                            <td colspan="4">
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
class Block_16304332625da4b5f9744e11_34786207 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_16304332625da4b5f9744e11_34786207',
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
