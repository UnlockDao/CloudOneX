<?php
/* Smarty version 3.1.33, created on 2019-10-07 04:01:22
  from '/Users/razib/Documents/valet/business-suite/apps/app/views/client_projects.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d9af0d2c86e12_74301786',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e5199d4b365bec3eac876935797f564fce24d7ec' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/apps/app/views/client_projects.tpl',
      1 => 1570435271,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d9af0d2c86e12_74301786 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4662415825d9af0d2c805e4_68706456', "content");
?>




<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6580516385d9af0d2c86888_65012617', "script");
}
/* {block "content"} */
class Block_4662415825d9af0d2c805e4_68706456 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_4662415825d9af0d2c805e4_68706456',
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

                                    <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
app/client/live-status/<?php echo $_smarty_tpl->tpl_vars['project']->value->uuid;?>
" class="btn btn-primary">Live Status</a>

                                </td>
                                <td>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
app/client/submission-status/<?php echo $_smarty_tpl->tpl_vars['project']->value->uuid;?>
" class="btn btn-primary">Submission Status</a>
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
class Block_6580516385d9af0d2c86888_65012617 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_6580516385d9af0d2c86888_65012617',
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
