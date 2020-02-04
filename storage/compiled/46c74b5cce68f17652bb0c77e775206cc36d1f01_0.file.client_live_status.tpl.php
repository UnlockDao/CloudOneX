<?php
/* Smarty version 3.1.33, created on 2019-09-24 13:32:40
  from '/Users/razib/Documents/valet/suite/apps/app/views/client_live_status.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d8a5338e980d7_62159815',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '46c74b5cce68f17652bb0c77e775206cc36d1f01' => 
    array (
      0 => '/Users/razib/Documents/valet/suite/apps/app/views/client_live_status.tpl',
      1 => 1569346358,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d8a5338e980d7_62159815 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2557887245d8a5338e94dd1_22898006', "content");
?>




<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15653603385d8a5338e97c28_86385032', "script");
}
/* {block "content"} */
class Block_2557887245d8a5338e94dd1_22898006 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_2557887245d8a5338e94dd1_22898006',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>



    <div class="row">
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-body">
                    <h3>Live Status</h3>
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
                                <th>App Name</th>
                                <th>App Version</th>
                                <th>Status</th>
                                <th>Manage</th>
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
                                <td>
                                    <?php echo $_smarty_tpl->tpl_vars['project']->value->app_name_eng;?>

                                </td>
                                <td>
                                   --
                                </td>
                                <td>
                                    <?php echo $_smarty_tpl->tpl_vars['app_submission']->value->version;?>

                                </td>

                                <td>
                                    --
                                </td>

                            </tr>

                            </tbody>



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
class Block_15653603385d8a5338e97c28_86385032 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_15653603385d8a5338e97c28_86385032',
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
