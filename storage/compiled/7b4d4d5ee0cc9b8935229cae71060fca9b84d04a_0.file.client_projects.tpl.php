<?php
/* Smarty version 3.1.33, created on 2019-09-24 13:40:43
  from '/Users/razib/Documents/valet/suite/apps/app/views/client_projects.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d8a551b1fbf91_53267417',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7b4d4d5ee0cc9b8935229cae71060fca9b84d04a' => 
    array (
      0 => '/Users/razib/Documents/valet/suite/apps/app/views/client_projects.tpl',
      1 => 1569346840,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d8a551b1fbf91_53267417 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15086156925d8a551b1f4d50_27901683', "content");
?>




<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20334046375d8a551b1fba47_96910584', "script");
}
/* {block "content"} */
class Block_15086156925d8a551b1f4d50_27901683 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_15086156925d8a551b1f4d50_27901683',
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
app/client/submission-status/<?php echo $_smarty_tpl->tpl_vars['project']->value->uuid;?>
">
                                        <img src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
storage/docs/<?php echo $_smarty_tpl->tpl_vars['project']->value->app_icon;?>
" style="max-width: 64px;">
                                    </a>
                                </td>
                                <td>
                                    <?php echo $_smarty_tpl->tpl_vars['project']->value->app_name_eng;?>
 <br>
                                    <?php echo $_smarty_tpl->tpl_vars['project']->value->app_name_chs;?>

                                </td>
                                <td>
                                    <?php if ($_smarty_tpl->tpl_vars['project']->value->status == 'Live') {?>
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
app/client/live-status/<?php echo $_smarty_tpl->tpl_vars['project']->value->uuid;?>
" class="btn btn-primary">Live Status</a>
                                    <?php } elseif ($_smarty_tpl->tpl_vars['project']->value->status == 'Cancelled') {?>
                                        Cancelled
                                        <?php } else { ?>
                                        In progress
                                    <?php }?>

                                </td>
                                <td>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
app/client/submission-status/<?php echo $_smarty_tpl->tpl_vars['project']->value->uuid;?>
" class="btn btn-primary">Submission Status</a>
                                </td>

                                <td>
                                    --
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
class Block_20334046375d8a551b1fba47_96910584 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_20334046375d8a551b1fba47_96910584',
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
