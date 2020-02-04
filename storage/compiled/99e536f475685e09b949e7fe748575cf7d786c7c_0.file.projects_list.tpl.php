<?php
/* Smarty version 3.1.33, created on 2019-12-08 11:56:46
  from '/Users/razib/Documents/valet/business-suite/ui/theme/default/projects_list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ded2b4e861021_99824901',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '99e536f475685e09b949e7fe748575cf7d786c7c' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/default/projects_list.tpl',
      1 => 1575824191,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ded2b4e861021_99824901 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15366225845ded2b4e8372d7_42305264', "style");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11068390335ded2b4e842d37_71015945', "content");
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1338329775ded2b4e85fb09_37769708', "script");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "style"} */
class Block_15366225845ded2b4e8372d7_42305264 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'style' => 
  array (
    0 => 'Block_15366225845ded2b4e8372d7_42305264',
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
class Block_11068390335ded2b4e842d37_71015945 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_11068390335ded2b4e842d37_71015945',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>



    <div class="row">
        <div class="col-md-12">
            <h3 class="ibilling-page-header">Projects</h3>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="tabs-container">
                <ul class="nav nav-tabs">
                    <li class="active"><a class="nav-link active show" href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
projects">Projects</a></li>
                    <li><a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
projects/project">Create New Project</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active show">
                        <div class="panel-body panel-body-with-border" style="<?php if ($_smarty_tpl->tpl_vars['config']->value['nstyle'] == 'dark_mode') {?> background-color: #272E48; border-color: #495471; <?php } else { ?> background-color: #fff; <?php }?>">

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
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Project Manager</th>
                                    <th>Client</th>
                                    <th>Financials</th>
                                    <th>Start</th>
                                    <th>End</th>
                                    <th>
                                        <?php echo $_smarty_tpl->tpl_vars['_L']->value['Status'];?>

                                    </th>
                                    <th class="text-right" width="140px;"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Manage'];?>
</th>
                                </tr>
                                </thead>
                                <tbody>

                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['projects']->value, 'project');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['project']->value) {
?>
                                    <tr>
                                        <td  data-value="1">
                                            <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
projects/view/<?php echo $_smarty_tpl->tpl_vars['project']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['project']->value->id;?>
</a>
                                        </td>


                                        <td>
                                            <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
projects/view/<?php echo $_smarty_tpl->tpl_vars['project']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['project']->value->name;?>
</a>
                                        </td>
                                        <td>
                                            <?php if ($_smarty_tpl->tpl_vars['project']->value->project_manager_id && isset($_smarty_tpl->tpl_vars['staffs']->value[$_smarty_tpl->tpl_vars['project']->value->project_manager_id])) {?>
                                                <?php echo $_smarty_tpl->tpl_vars['staffs']->value[$_smarty_tpl->tpl_vars['project']->value->project_manager_id]->fullname;?>

                                            <?php }?>
                                        </td>
                                        <td>
                                            <?php if ($_smarty_tpl->tpl_vars['project']->value->contact_id && isset($_smarty_tpl->tpl_vars['contacts']->value[$_smarty_tpl->tpl_vars['project']->value->contact_id])) {?>
                                                <?php echo $_smarty_tpl->tpl_vars['contacts']->value[$_smarty_tpl->tpl_vars['project']->value->contact_id]->account;?>

                                            <?php }?>

                                        </td>
                                        <td>
                                            <?php if ($_smarty_tpl->tpl_vars['project']->value->budget) {?>
                                                <?php echo formatCurrency($_smarty_tpl->tpl_vars['project']->value->budget,$_smarty_tpl->tpl_vars['project']->value->currency);?>

                                            <?php }?>
                                        </td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['project']->value->start_date;?>
</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['project']->value->due_date;?>
</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['project']->value->status;?>
</td>



                                        <td class="text-right">



                                            <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
invoices/view/1" class="btn btn-primary btn-xs" data-toggle="tooltip" data-placement="top" title="<?php echo $_smarty_tpl->tpl_vars['_L']->value['View'];?>
"><i class="fa fa-file-text-o"></i></a>



                                            <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
projects/view/<?php echo $_smarty_tpl->tpl_vars['project']->value->id;?>
" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Edit'];?>
"><i class="fa fa-pencil"></i></a>


                                            <a href="#" class="btn btn-danger btn-xs cdelete" id="iiddd" data-toggle="tooltip" data-placement="top" title="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Delete'];?>
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
                                    <td colspan="9">
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
        </div>
    </div>


<?php
}
}
/* {/block "content"} */
/* {block "script"} */
class Block_1338329775ded2b4e85fb09_37769708 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_1338329775ded2b4e85fb09_37769708',
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
