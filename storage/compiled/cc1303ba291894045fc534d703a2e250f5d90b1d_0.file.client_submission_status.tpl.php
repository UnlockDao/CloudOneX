<?php
/* Smarty version 3.1.33, created on 2019-09-24 12:37:42
  from '/Users/razib/Documents/valet/suite/apps/app/views/client_submission_status.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d8a4656cef834_75170386',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cc1303ba291894045fc534d703a2e250f5d90b1d' => 
    array (
      0 => '/Users/razib/Documents/valet/suite/apps/app/views/client_submission_status.tpl',
      1 => 1569343058,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d8a4656cef834_75170386 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17627339925d8a4656cebff6_33969177', "content");
?>




<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19639487975d8a4656cef3d6_76541848', "script");
}
/* {block "content"} */
class Block_17627339925d8a4656cebff6_33969177 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_17627339925d8a4656cebff6_33969177',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>



    <div class="row">
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-body">
                    <h3>App Submission Status</h3>
                    <div class="hr-line-dashed"></div>


                    <div class="row">
                        <div class="col-md-1">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
storage/docs/<?php echo $_smarty_tpl->tpl_vars['project']->value->app_icon;?>
" style="max-width: 64px;">
                        </div>
                        <div class="col-md-8">
                            <div class="form-group">
                                <label>App Name</label>
                                <input class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['project']->value->app_name_eng;?>
" disabled>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Version Status / Comment</label>
                                <textarea class="form-control" rows="6"></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="hr-line-dashed"></div>


                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['app_submissions']->value, 'app_submission');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['app_submission']->value) {
?>

                        <table class="table table-bordered table-hover sys_table footable" data-filter="#foo_filter" data-page-size="50">
                            <thead>
                            <tr>
                                <th width="80px">Icon</th>
                                <th>Store Name</th>
                                <th>Live Link</th>
                                <th>Version</th>
                                <th>Downloads</th>
                            </tr>
                            </thead>
                            <tbody>

                            <tr>
                                <td>
                                    <a href="#">
                                        <img src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
storage/docs/<?php echo $_smarty_tpl->tpl_vars['project']->value->app_icon;?>
" style="max-width: 64px;">
                                    </a>
                                </td>
                                <td>--</td>
                                <td>
                                    <a href="#" class="btn btn-primary">View in App Store</a>
                                </td>
                                <td>
                                    <?php echo $_smarty_tpl->tpl_vars['app_submission']->value->version;?>

                                </td>

                                <td>
                                    --
                                </td>

                            </tr>

                            </tbody>

                            <tfoot>
                            <tr>
                                <td colspan="5">
                                    <div class="form-group">
                                        <textarea class="form-control" rows="6" placeholder="User comments..."></textarea>
                                    </div>
                                </td>
                            </tr>
                            </tfoot>

                        </table>

                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>






                </div>
            </div>
        </div>
    </div>



<?php
}
}
/* {/block "content"} */
/* {block "script"} */
class Block_19639487975d8a4656cef3d6_76541848 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_19639487975d8a4656cef3d6_76541848',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
>

    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block "script"} */
}
