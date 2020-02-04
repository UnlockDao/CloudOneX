<?php
/* Smarty version 3.1.33, created on 2019-10-09 17:43:58
  from '/Users/razib/Documents/valet/business-suite/apps/app/views/admin_projects.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d9e549ec21905_65864622',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eefca94aff9a97ca29be3724569752c8f79a9e7a' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/apps/app/views/admin_projects.tpl',
      1 => 1570657436,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d9e549ec21905_65864622 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9587819385d9e549ec1b589_29766603', "content");
?>




<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1115695645d9e549ec21497_55848618', "script");
}
/* {block "content"} */
class Block_9587819385d9e549ec1b589_29766603 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_9587819385d9e549ec1b589_29766603',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>



    <div class="row">
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-body">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
app/client/project" class="btn btn-primary">New App Project</a>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">

            <div class="panel">
                <div class="panel-body">

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
                            <th width="80px">Icon</th>
                            <th>Name</th>
                            <th>Submitted By</th>
                            <th>Live Store Status</th>
                            <th>Submission Status</th>
                            <th>Manage</th>
                        </tr>
                        </thead>
                        <tbody>

                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['projects']->value, 'project');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['project']->value) {
?>
                            <tr>
                                <td>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
app/admin/view-project/<?php echo $_smarty_tpl->tpl_vars['project']->value->id;?>
">
                                        <img src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
storage/docs/<?php echo $_smarty_tpl->tpl_vars['project']->value->app_icon;?>
" style="max-width: 64px;">
                                    </a>
                                </td>
                                <td>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
app/admin/view-project/<?php echo $_smarty_tpl->tpl_vars['project']->value->id;?>
">
                                        <?php echo $_smarty_tpl->tpl_vars['project']->value->app_name_eng;?>

                                    </a>
                                </td>
                                <td>
                                    <?php if (isset($_smarty_tpl->tpl_vars['contacts']->value[$_smarty_tpl->tpl_vars['project']->value->contact_id])) {?>
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
contacts/view/<?php echo $_smarty_tpl->tpl_vars['project']->value->contact_id;?>
"><?php echo $_smarty_tpl->tpl_vars['contacts']->value[$_smarty_tpl->tpl_vars['project']->value->contact_id]->account;?>
</a>
                                    <?php }?>
                                </td>
                                <td>
                                    <a href="#" class="btn btn-primary">Live Status</a>
                                </td>
                                <td>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
app/client/submission-status" class="btn btn-primary">Submission Status</a>
                                </td>

                                <td>
                                    <a href="javascript:;" onclick="confirmThenGoToUrl(event,'app/admin/project-delete/<?php echo $_smarty_tpl->tpl_vars['project']->value->id;?>
');" class="btn btn-danger">Delete</a>
                                </td>

                            </tr>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                        </tbody>

                        <tfoot>
                        <tr>
                            <td colspan="5">
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
class Block_1115695645d9e549ec21497_55848618 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_1115695645d9e549ec21497_55848618',
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
