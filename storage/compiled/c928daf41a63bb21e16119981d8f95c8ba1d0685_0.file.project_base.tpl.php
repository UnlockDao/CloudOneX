<?php
/* Smarty version 3.1.33, created on 2019-12-01 16:01:43
  from '/Users/razib/Documents/valet/business-suite/ui/theme/default/project_base.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5de42a373af303_64819034',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c928daf41a63bb21e16119981d8f95c8ba1d0685' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/default/project_base.tpl',
      1 => 1575234101,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5de42a373af303_64819034 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1376209255de42a373a6e32_37131087', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "project_content"} */
class Block_12536453755de42a373ae885_94038696 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "project_content"} */
/* {block "content"} */
class Block_1376209255de42a373a6e32_37131087 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1376209255de42a373a6e32_37131087',
  ),
  'project_content' => 
  array (
    0 => 'Block_12536453755de42a373ae885_94038696',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>



    <div class="row">
        <div class="col-md-12">
            <h3 class="ibilling-page-header"><?php echo $_smarty_tpl->tpl_vars['project']->value->name;?>
</h3>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="tabs-container">
                <ul class="nav nav-tabs">
                    <li <?php if ($_smarty_tpl->tpl_vars['action']->value == 'view') {?>class="active"<?php }?>><a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
projects/view/<?php echo $_smarty_tpl->tpl_vars['project']->value->id;?>
">Summary</a></li>
                    <li <?php if ($_smarty_tpl->tpl_vars['action']->value == 'tasks') {?>class="active"<?php }?>><a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
projects/tasks/<?php echo $_smarty_tpl->tpl_vars['project']->value->id;?>
">Tasks</a></li>
                    <li <?php if ($_smarty_tpl->tpl_vars['action']->value == 'files') {?>class="active"<?php }?>><a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
projects/files/<?php echo $_smarty_tpl->tpl_vars['project']->value->id;?>
">Files</a></li>
                    <li <?php if ($_smarty_tpl->tpl_vars['action']->value == 'financials') {?>class="active"<?php }?>><a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
projects/financials/<?php echo $_smarty_tpl->tpl_vars['project']->value->id;?>
">Financials</a></li>
                    <li <?php if ($_smarty_tpl->tpl_vars['action']->value == 'gantt-chart') {?>class="active"<?php }?>><a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
projects/gantt-chart/<?php echo $_smarty_tpl->tpl_vars['project']->value->id;?>
">Gantt Chart</a></li>
                    <li <?php if ($_smarty_tpl->tpl_vars['action']->value == 'timelog') {?>class="active"<?php }?>><a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
projects/timelog/<?php echo $_smarty_tpl->tpl_vars['project']->value->id;?>
">Timelog</a></li>
                    <li <?php if ($_smarty_tpl->tpl_vars['action']->value == 'workload') {?>class="active"<?php }?>><a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
projects/workload/<?php echo $_smarty_tpl->tpl_vars['project']->value->id;?>
">Workload</a></li>
                    <li <?php if ($_smarty_tpl->tpl_vars['action']->value == 'analytics') {?>class="active"<?php }?>><a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
projects/analytics/<?php echo $_smarty_tpl->tpl_vars['project']->value->id;?>
">Analytics</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active show">
                        <div class="panel-body panel-body-with-border" style="<?php if ($_smarty_tpl->tpl_vars['config']->value['nstyle'] == 'dark_mode') {?> background-color: #272E48; border-color: #495471; <?php } else { ?> background-color: #fff; <?php }?>">

                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12536453755de42a373ae885_94038696', "project_content", $this->tplIndex);
?>


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
}
