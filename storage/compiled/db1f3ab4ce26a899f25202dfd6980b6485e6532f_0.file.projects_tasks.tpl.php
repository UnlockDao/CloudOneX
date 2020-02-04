<?php
/* Smarty version 3.1.33, created on 2019-12-08 12:11:34
  from '/Users/razib/Documents/valet/business-suite/ui/theme/default/projects_tasks.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ded2ec6a76bd3_96348049',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'db1f3ab4ce26a899f25202dfd6980b6485e6532f' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/default/projects_tasks.tpl',
      1 => 1575824973,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ded2ec6a76bd3_96348049 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3466328575ded2ec6a2ef78_14797020', "style");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1192317685ded2ec6a306d1_44304286', "project_content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14707716295ded2ec6a731d5_91778342', "script");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "project_base.tpl");
}
/* {block "style"} */
class Block_3466328575ded2ec6a2ef78_14797020 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'style' => 
  array (
    0 => 'Block_3466328575ded2ec6a2ef78_14797020',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
ui/lib/modal.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
ui/lib/select/select.min.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
ui/lib/s2/css/select2.min.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
ui/lib/datetime.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
ui/lib/dragula/dragula.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
ui/lib/css/kanban.css" />
<?php
}
}
/* {/block "style"} */
/* {block "project_content"} */
class Block_1192317685ded2ec6a306d1_44304286 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'project_content' => 
  array (
    0 => 'Block_1192317685ded2ec6a306d1_44304286',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <div class="row">
        <div class="col-md-12">
            <button class="btn btn-primary add_task">Add Task</button>
            <div class="hr-line-dashed"></div>
        </div>
    </div>

    <div class="row">


        <div class="col-md-12" id="kanbanCanvas">

            <div style="overflow: auto;">

                <div style="min-width: 1545px; max-width: 1545px;">


                    <div class="panel panel-deep-orange kanban-col">
                        <div class="panel-heading">

                            <?php echo $_smarty_tpl->tpl_vars['_L']->value['Not Started'];?>


                        </div>

                        <div class="panel-body">
                            <div id="not_started" class="kanban-centered kanban-droppable-area">
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tasks_not_started']->value, 'tns');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['tns']->value) {
?>
                                    <article class="kanban-entry cursor-move" id="item_<?php echo $_smarty_tpl->tpl_vars['tns']->value['id'];?>
" draggable="true">
                                        <div class="kanban-entry-inner">
                                            <div class="kanban-label">

                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <a href="javascript:void(0)" id="v_<?php echo $_smarty_tpl->tpl_vars['tns']->value['id'];?>
" class="v_item"><?php echo $_smarty_tpl->tpl_vars['tns']->value['title'];?>
</a>
                                                        <hr>
                                                    </div>
                                                    <div class="col-md-12">

                                                        <?php if ($_smarty_tpl->tpl_vars['tns']->value['cid'] != 0 && $_smarty_tpl->tpl_vars['tns']->value['cid'] != '' && isset($_smarty_tpl->tpl_vars['contacts']->value[$_smarty_tpl->tpl_vars['tns']->value['cid']][0]->account)) {?>
                                                            <div style="margin-bottom: 15px;">
                                                                <?php echo $_smarty_tpl->tpl_vars['contacts']->value[$_smarty_tpl->tpl_vars['tns']->value['cid']][0]->account;?>

                                                            </div>

                                                        <?php }?>

                                                        <?php if ($_smarty_tpl->tpl_vars['tns']->value['tid'] != 0 && $_smarty_tpl->tpl_vars['tns']->value['tid'] != '' && isset($_smarty_tpl->tpl_vars['tickets']->value[$_smarty_tpl->tpl_vars['tns']->value['tid']][0]->tid)) {?>
                                                            <div style="margin-bottom: 15px;">
                                                                Ticket: <?php echo $_smarty_tpl->tpl_vars['tickets']->value[$_smarty_tpl->tpl_vars['tns']->value['tid']][0]->tid;?>

                                                            </div>

                                                        <?php }?>



                                                        <img src="<?php echo getAdminImage($_smarty_tpl->tpl_vars['tns']->value['aid']);?>
" class="img-circle" style="max-width: 30px; margin-bottom: 5px;" alt="<?php echo $_smarty_tpl->tpl_vars['tns']->value['created_by'];?>
"> <?php echo $_smarty_tpl->tpl_vars['tns']->value['created_by'];?>



                                                    </div>


                                                    <div class="col-md-12">

                                                        <small><?php echo $_smarty_tpl->tpl_vars['_L']->value['Created'];?>
: <span class="mmnt"><?php ob_start();
echo $_smarty_tpl->tpl_vars['tns']->value['created_at'];
$_prefixVariable1 = ob_get_clean();
echo strtotime($_prefixVariable1);?>
</span></small> <br>
                                                        <small><?php echo $_smarty_tpl->tpl_vars['_L']->value['Due Date'];?>
: <?php echo date($_smarty_tpl->tpl_vars['config']->value['df'],strtotime($_smarty_tpl->tpl_vars['tns']->value['due_date']));?>
</small>

                                                        <?php if (isset($_smarty_tpl->tpl_vars['tns']->value['priority'])) {?>
                                                            <br>
                                                            <?php if (strtolower($_smarty_tpl->tpl_vars['tns']->value['priority']) == 'critical' || strtolower($_smarty_tpl->tpl_vars['tns']->value['priority']) == 'high') {?>
                                                                <span class="label label-danger">
                                                        <?php if (isset($_smarty_tpl->tpl_vars['_L']->value[$_smarty_tpl->tpl_vars['tns']->value['priority']])) {?>
                                                            <?php echo $_smarty_tpl->tpl_vars['_L']->value[$_smarty_tpl->tpl_vars['tns']->value['priority']];?>

                                                        <?php } else { ?>
                                                            <?php echo $_smarty_tpl->tpl_vars['tns']->value['priority'];?>

                                                        <?php }?>
                                                    </span>
                                                            <?php } else { ?>
                                                                <span class="label label-info"><?php if (isset($_smarty_tpl->tpl_vars['_L']->value[$_smarty_tpl->tpl_vars['tns']->value['priority']])) {?>
                                                            <?php echo $_smarty_tpl->tpl_vars['_L']->value[$_smarty_tpl->tpl_vars['tns']->value['priority']];?>

                                                            <?php } else { ?>
                                                            <?php echo $_smarty_tpl->tpl_vars['tns']->value['priority'];?>

                                                        <?php }?></span>
                                                            <?php }?>

                                                        <?php }?>
                                                                                                                                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </article>

                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </div>
                        </div>


                    </div>

                    <div class="panel panel-primary kanban-col">
                        <div class="panel-heading">

                            In Progress

                        </div>
                        <div class="panel-body">
                            <div id="in_progress" class="kanban-centered kanban-droppable-area">


                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tasks_in_progress']->value, 'tns');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['tns']->value) {
?>
                                    <article class="kanban-entry cursor-move" id="item_<?php echo $_smarty_tpl->tpl_vars['tns']->value['id'];?>
" draggable="true">
                                        <div class="kanban-entry-inner">
                                            <div class="kanban-label">

                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <a href="javascript:void(0)" id="v_<?php echo $_smarty_tpl->tpl_vars['tns']->value['id'];?>
" class="v_item"><?php echo $_smarty_tpl->tpl_vars['tns']->value['title'];?>
</a>
                                                        <hr>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <?php if ($_smarty_tpl->tpl_vars['tns']->value['cid'] != 0 && $_smarty_tpl->tpl_vars['tns']->value['cid'] != '' && isset($_smarty_tpl->tpl_vars['contacts']->value[$_smarty_tpl->tpl_vars['tns']->value['cid']][0]->account)) {?>
                                                            <div style="margin-bottom: 15px;">
                                                                <?php echo $_smarty_tpl->tpl_vars['contacts']->value[$_smarty_tpl->tpl_vars['tns']->value['cid']][0]->account;?>

                                                            </div>

                                                        <?php }?>

                                                        <?php if ($_smarty_tpl->tpl_vars['tns']->value['tid'] != 0 && $_smarty_tpl->tpl_vars['tns']->value['tid'] != '' && isset($_smarty_tpl->tpl_vars['tickets']->value[$_smarty_tpl->tpl_vars['tns']->value['tid']][0]->tid)) {?>
                                                            <div style="margin-bottom: 15px;">
                                                                Ticket: <?php echo $_smarty_tpl->tpl_vars['tickets']->value[$_smarty_tpl->tpl_vars['tns']->value['tid']][0]->tid;?>

                                                            </div>

                                                        <?php }?>
                                                        <img src="<?php echo getAdminImage($_smarty_tpl->tpl_vars['tns']->value['aid']);?>
" class="img-circle" style="max-width: 30px; margin-bottom: 5px;" alt="<?php echo $_smarty_tpl->tpl_vars['tns']->value['created_by'];?>
"> <?php echo $_smarty_tpl->tpl_vars['tns']->value['created_by'];?>



                                                    </div>


                                                    <div class="col-md-12">

                                                        <small><?php echo $_smarty_tpl->tpl_vars['_L']->value['Created'];?>
: <span class="mmnt"><?php ob_start();
echo $_smarty_tpl->tpl_vars['tns']->value['created_at'];
$_prefixVariable2 = ob_get_clean();
echo strtotime($_prefixVariable2);?>
</span></small> <br>
                                                        <small><?php echo $_smarty_tpl->tpl_vars['_L']->value['Due Date'];?>
: <?php echo date($_smarty_tpl->tpl_vars['config']->value['df'],strtotime($_smarty_tpl->tpl_vars['tns']->value['due_date']));?>
</small>

                                                        <?php if (isset($_smarty_tpl->tpl_vars['tns']->value['priority'])) {?>
                                                            <br>
                                                            <?php if (strtolower($_smarty_tpl->tpl_vars['tns']->value['priority']) == 'critical' || strtolower($_smarty_tpl->tpl_vars['tns']->value['priority']) == 'high') {?>
                                                                <span class="label label-danger">
                                                        <?php if (isset($_smarty_tpl->tpl_vars['_L']->value[$_smarty_tpl->tpl_vars['tns']->value['priority']])) {?>
                                                            <?php echo $_smarty_tpl->tpl_vars['_L']->value[$_smarty_tpl->tpl_vars['tns']->value['priority']];?>

                                                        <?php } else { ?>
                                                            <?php echo $_smarty_tpl->tpl_vars['tns']->value['priority'];?>

                                                        <?php }?>
                                                    </span>
                                                            <?php } else { ?>
                                                                <span class="label label-info"><?php if (isset($_smarty_tpl->tpl_vars['_L']->value[$_smarty_tpl->tpl_vars['tns']->value['priority']])) {?>
                                                            <?php echo $_smarty_tpl->tpl_vars['_L']->value[$_smarty_tpl->tpl_vars['tns']->value['priority']];?>

                                                            <?php } else { ?>
                                                            <?php echo $_smarty_tpl->tpl_vars['tns']->value['priority'];?>

                                                        <?php }?></span>
                                                            <?php }?>

                                                        <?php }?>

                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </article>

                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>


                            </div>
                        </div>

                    </div>
                    <!--sütun bitiş-->
                    <!--sütun başlangıç-->
                    <div class="panel panel-light-green kanban-col">
                        <div class="panel-heading">

                            <?php echo $_smarty_tpl->tpl_vars['_L']->value['Completed'];?>


                        </div>
                        <div class="panel-body">
                            <div id="completed" class="kanban-centered kanban-droppable-area">


                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tasks_completed']->value, 'tns');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['tns']->value) {
?>
                                    <article class="kanban-entry cursor-move" id="item_<?php echo $_smarty_tpl->tpl_vars['tns']->value['id'];?>
" draggable="true">
                                        <div class="kanban-entry-inner">
                                            <div class="kanban-label">

                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <a href="javascript:void(0)" id="v_<?php echo $_smarty_tpl->tpl_vars['tns']->value['id'];?>
" class="v_item"><?php echo $_smarty_tpl->tpl_vars['tns']->value['title'];?>
</a>
                                                        <hr>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <?php if ($_smarty_tpl->tpl_vars['tns']->value['cid'] != 0 && $_smarty_tpl->tpl_vars['tns']->value['cid'] != '' && isset($_smarty_tpl->tpl_vars['contacts']->value[$_smarty_tpl->tpl_vars['tns']->value['cid']][0]->account)) {?>
                                                            <div style="margin-bottom: 15px;">
                                                                <?php echo $_smarty_tpl->tpl_vars['contacts']->value[$_smarty_tpl->tpl_vars['tns']->value['cid']][0]->account;?>

                                                            </div>

                                                        <?php }?>

                                                        <?php if ($_smarty_tpl->tpl_vars['tns']->value['tid'] != 0 && $_smarty_tpl->tpl_vars['tns']->value['tid'] != '' && isset($_smarty_tpl->tpl_vars['tickets']->value[$_smarty_tpl->tpl_vars['tns']->value['tid']][0]->tid)) {?>
                                                            <div style="margin-bottom: 15px;">
                                                                Ticket: <?php echo $_smarty_tpl->tpl_vars['tickets']->value[$_smarty_tpl->tpl_vars['tns']->value['tid']][0]->tid;?>

                                                            </div>

                                                        <?php }?>
                                                        <img src="<?php echo getAdminImage($_smarty_tpl->tpl_vars['tns']->value['aid']);?>
" class="img-circle" style="max-width: 30px; margin-bottom: 5px;" alt="<?php echo $_smarty_tpl->tpl_vars['tns']->value['created_by'];?>
"> <?php echo $_smarty_tpl->tpl_vars['tns']->value['created_by'];?>



                                                    </div>


                                                    <div class="col-md-12">

                                                        <small><?php echo $_smarty_tpl->tpl_vars['_L']->value['Created'];?>
: <span class="mmnt"><?php ob_start();
echo $_smarty_tpl->tpl_vars['tns']->value['created_at'];
$_prefixVariable3 = ob_get_clean();
echo strtotime($_prefixVariable3);?>
</span></small> <br>
                                                        <small><?php echo $_smarty_tpl->tpl_vars['_L']->value['Due Date'];?>
: <?php echo date($_smarty_tpl->tpl_vars['config']->value['df'],strtotime($_smarty_tpl->tpl_vars['tns']->value['due_date']));?>
</small>

                                                        <?php if (isset($_smarty_tpl->tpl_vars['tns']->value['priority'])) {?>
                                                            <br>
                                                            <?php if (isset($_smarty_tpl->tpl_vars['tns']->value['priority'])) {?>
                                                                <br>
                                                                <?php if (strtolower($_smarty_tpl->tpl_vars['tns']->value['priority']) == 'critical' || strtolower($_smarty_tpl->tpl_vars['tns']->value['priority']) == 'high') {?>
                                                                    <span class="label label-danger">
                                                        <?php if (isset($_smarty_tpl->tpl_vars['_L']->value[$_smarty_tpl->tpl_vars['tns']->value['priority']])) {?>
                                                            <?php echo $_smarty_tpl->tpl_vars['_L']->value[$_smarty_tpl->tpl_vars['tns']->value['priority']];?>

                                                        <?php } else { ?>
                                                            <?php echo $_smarty_tpl->tpl_vars['tns']->value['priority'];?>

                                                        <?php }?>
                                                    </span>
                                                                <?php } else { ?>
                                                                    <span class="label label-info"><?php if (isset($_smarty_tpl->tpl_vars['_L']->value[$_smarty_tpl->tpl_vars['tns']->value['priority']])) {?>
                                                            <?php echo $_smarty_tpl->tpl_vars['_L']->value[$_smarty_tpl->tpl_vars['tns']->value['priority']];?>

                                                            <?php } else { ?>
                                                            <?php echo $_smarty_tpl->tpl_vars['tns']->value['priority'];?>

                                                        <?php }?></span>
                                                                <?php }?>

                                                            <?php }?>

                                                        <?php }?>
                                                                                                                                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </article>

                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>


                            </div>
                        </div>

                    </div>

                    <div class="panel panel-blue-grey kanban-col">
                        <div class="panel-heading">

                            Deferred

                        </div>
                        <div class="panel-body">
                            <div id="deferred" class="kanban-centered kanban-droppable-area">


                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tasks_deferred']->value, 'tns');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['tns']->value) {
?>
                                    <article class="kanban-entry cursor-move" id="item_<?php echo $_smarty_tpl->tpl_vars['tns']->value['id'];?>
" draggable="true">
                                        <div class="kanban-entry-inner">
                                            <div class="kanban-label">

                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <a href="javascript:void(0)" id="v_<?php echo $_smarty_tpl->tpl_vars['tns']->value['id'];?>
" class="v_item"><?php echo $_smarty_tpl->tpl_vars['tns']->value['title'];?>
</a>
                                                        <hr>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <?php if ($_smarty_tpl->tpl_vars['tns']->value['cid'] != 0 && $_smarty_tpl->tpl_vars['tns']->value['cid'] != '' && isset($_smarty_tpl->tpl_vars['contacts']->value[$_smarty_tpl->tpl_vars['tns']->value['cid']][0]->account)) {?>
                                                            <div style="margin-bottom: 15px;">
                                                                <?php echo $_smarty_tpl->tpl_vars['contacts']->value[$_smarty_tpl->tpl_vars['tns']->value['cid']][0]->account;?>

                                                            </div>

                                                        <?php }?>

                                                        <?php if ($_smarty_tpl->tpl_vars['tns']->value['tid'] != 0 && $_smarty_tpl->tpl_vars['tns']->value['tid'] != '' && isset($_smarty_tpl->tpl_vars['tickets']->value[$_smarty_tpl->tpl_vars['tns']->value['tid']][0]->tid)) {?>
                                                            <div style="margin-bottom: 15px;">
                                                                Ticket: <?php echo $_smarty_tpl->tpl_vars['tickets']->value[$_smarty_tpl->tpl_vars['tns']->value['tid']][0]->tid;?>

                                                            </div>

                                                        <?php }?>
                                                        <img src="<?php echo getAdminImage($_smarty_tpl->tpl_vars['tns']->value['aid']);?>
" class="img-circle" style="max-width: 30px; margin-bottom: 5px;" alt="<?php echo $_smarty_tpl->tpl_vars['tns']->value['created_by'];?>
"> <?php echo $_smarty_tpl->tpl_vars['tns']->value['created_by'];?>



                                                    </div>


                                                    <div class="col-md-12">

                                                        <small><?php echo $_smarty_tpl->tpl_vars['_L']->value['Created'];?>
: <span class="mmnt"><?php ob_start();
echo $_smarty_tpl->tpl_vars['tns']->value['created_at'];
$_prefixVariable4 = ob_get_clean();
echo strtotime($_prefixVariable4);?>
</span></small> <br>
                                                        <small><?php echo $_smarty_tpl->tpl_vars['_L']->value['Due Date'];?>
: <?php echo date($_smarty_tpl->tpl_vars['config']->value['df'],strtotime($_smarty_tpl->tpl_vars['tns']->value['due_date']));?>
</small>

                                                        <?php if (isset($_smarty_tpl->tpl_vars['tns']->value['priority'])) {?>
                                                            <br>
                                                            <?php if (strtolower($_smarty_tpl->tpl_vars['tns']->value['priority']) == 'critical' || strtolower($_smarty_tpl->tpl_vars['tns']->value['priority']) == 'high') {?>
                                                                <span class="label label-danger">
                                                        <?php if (isset($_smarty_tpl->tpl_vars['_L']->value[$_smarty_tpl->tpl_vars['tns']->value['priority']])) {?>
                                                            <?php echo $_smarty_tpl->tpl_vars['_L']->value[$_smarty_tpl->tpl_vars['tns']->value['priority']];?>

                                                        <?php } else { ?>
                                                            <?php echo $_smarty_tpl->tpl_vars['tns']->value['priority'];?>

                                                        <?php }?>
                                                    </span>
                                                            <?php } else { ?>
                                                                <span class="label label-info"><?php if (isset($_smarty_tpl->tpl_vars['_L']->value[$_smarty_tpl->tpl_vars['tns']->value['priority']])) {?>
                                                            <?php echo $_smarty_tpl->tpl_vars['_L']->value[$_smarty_tpl->tpl_vars['tns']->value['priority']];?>

                                                            <?php } else { ?>
                                                            <?php echo $_smarty_tpl->tpl_vars['tns']->value['priority'];?>

                                                        <?php }?></span>
                                                            <?php }?>

                                                        <?php }?>
                                                                                                                                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </article>

                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>


                            </div>
                        </div>

                    </div>

                    <div class="panel panel-grey kanban-col" style="border-right: 1px solid #ffffff;">
                        <div class="panel-heading">

                            Waiting on someone else

                        </div>
                        <div class="panel-body">
                            <div id="waiting_on_someone" class="kanban-centered kanban-droppable-area">


                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tasks_waiting']->value, 'tns');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['tns']->value) {
?>
                                    <article class="kanban-entry cursor-move" id="item_<?php echo $_smarty_tpl->tpl_vars['tns']->value['id'];?>
" draggable="true">
                                        <div class="kanban-entry-inner">
                                            <div class="kanban-label">

                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <a href="javascript:void(0)" id="v_<?php echo $_smarty_tpl->tpl_vars['tns']->value['id'];?>
" class="v_item"><?php echo $_smarty_tpl->tpl_vars['tns']->value['title'];?>
</a>
                                                        <hr>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <?php if ($_smarty_tpl->tpl_vars['tns']->value['cid'] != 0 && $_smarty_tpl->tpl_vars['tns']->value['cid'] != '' && isset($_smarty_tpl->tpl_vars['contacts']->value[$_smarty_tpl->tpl_vars['tns']->value['cid']][0]->account)) {?>
                                                            <div style="margin-bottom: 15px;">
                                                                <?php echo $_smarty_tpl->tpl_vars['contacts']->value[$_smarty_tpl->tpl_vars['tns']->value['cid']][0]->account;?>

                                                            </div>

                                                        <?php }?>

                                                        <?php if ($_smarty_tpl->tpl_vars['tns']->value['tid'] != 0 && $_smarty_tpl->tpl_vars['tns']->value['tid'] != '' && isset($_smarty_tpl->tpl_vars['tickets']->value[$_smarty_tpl->tpl_vars['tns']->value['tid']][0]->tid)) {?>
                                                            <div style="margin-bottom: 15px;">
                                                                Ticket: <?php echo $_smarty_tpl->tpl_vars['tickets']->value[$_smarty_tpl->tpl_vars['tns']->value['tid']][0]->tid;?>

                                                            </div>

                                                        <?php }?>
                                                        <img src="<?php echo getAdminImage($_smarty_tpl->tpl_vars['tns']->value['aid']);?>
" class="img-circle" style="max-width: 30px; margin-bottom: 5px;" alt="<?php echo $_smarty_tpl->tpl_vars['tns']->value['created_by'];?>
"> <?php echo $_smarty_tpl->tpl_vars['tns']->value['created_by'];?>



                                                    </div>


                                                    <div class="col-md-12">

                                                        <small><?php echo $_smarty_tpl->tpl_vars['_L']->value['Created'];?>
: <span class="mmnt"><?php ob_start();
echo $_smarty_tpl->tpl_vars['tns']->value['created_at'];
$_prefixVariable5 = ob_get_clean();
echo strtotime($_prefixVariable5);?>
</span></small> <br>
                                                        <small><?php echo $_smarty_tpl->tpl_vars['_L']->value['Due Date'];?>
: <?php echo date($_smarty_tpl->tpl_vars['config']->value['df'],strtotime($_smarty_tpl->tpl_vars['tns']->value['due_date']));?>
</small>

                                                        <?php if (isset($_smarty_tpl->tpl_vars['tns']->value['priority'])) {?>
                                                            <br>
                                                            <?php if (strtolower($_smarty_tpl->tpl_vars['tns']->value['priority']) == 'critical' || strtolower($_smarty_tpl->tpl_vars['tns']->value['priority']) == 'high') {?>
                                                                <span class="label label-danger">
                                                        <?php if (isset($_smarty_tpl->tpl_vars['_L']->value[$_smarty_tpl->tpl_vars['tns']->value['priority']])) {?>
                                                            <?php echo $_smarty_tpl->tpl_vars['_L']->value[$_smarty_tpl->tpl_vars['tns']->value['priority']];?>

                                                        <?php } else { ?>
                                                            <?php echo $_smarty_tpl->tpl_vars['tns']->value['priority'];?>

                                                        <?php }?>
                                                    </span>
                                                            <?php } else { ?>
                                                                <span class="label label-info"><?php if (isset($_smarty_tpl->tpl_vars['_L']->value[$_smarty_tpl->tpl_vars['tns']->value['priority']])) {?>
                                                            <?php echo $_smarty_tpl->tpl_vars['_L']->value[$_smarty_tpl->tpl_vars['tns']->value['priority']];?>

                                                            <?php } else { ?>
                                                            <?php echo $_smarty_tpl->tpl_vars['tns']->value['priority'];?>

                                                        <?php }?></span>
                                                            <?php }?>

                                                        <?php }?>
                                                                                                                                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </article>

                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>


                            </div>
                        </div>

                    </div>

                </div>
            </div>

        </div>

    </div>
<?php
}
}
/* {/block "project_content"} */
/* {block "script"} */
class Block_14707716295ded2ec6a731d5_91778342 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_14707716295ded2ec6a731d5_91778342',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
ui/lib/modal.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
ui/lib/tinymce/tinymce.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
ui/lib/js/editor.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
ui/lib/select/select.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
ui/lib/s2/js/select2.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
ui/lib/s2/js/i18n/en.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
ui/lib/datetime.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
ui/lib/dragula/dragula.js"><?php echo '</script'; ?>
>

    <?php echo '<script'; ?>
>
        var callback_tasks = function () {

            $( ".mmnt" ).each(function() {
                //   alert($( this ).html());
                var ut = $( this ).html();
                $( this ).html(moment.unix(ut).fromNow());
            });


        };

        $(function () {

            var $kanbanCanvas = $('#kanbanCanvas');


            $modal = $("#ajax-modal");

            for (var a = dragula($(".kanban-droppable-area").toArray()), r = a.containers, o = r.length, l = 0; l < o; l++)$(r[l]).addClass("dragula dragula-vertical");
            a.on("drop", function (a, r, o, l) {


                var item = a.id;
                var target = r.id;

                $.post(base_url + 'tasks/set_status/',{ task_id : item, target: target },function (data) {
                    //   $(".kanban-col").unblock();

                })

            });


            $(".add_task").on('click',function (e) {
                e.preventDefault();

                $('body').modalmanager('loading');

                $modal.load( base_url + 'tasks/create/', '', function(){

                    $modal.modal();
                    ib_editor("#description");
                    var ib_date_picker_options = {
                        format: ib_date_format_picker
                    };



                    var $start_date = $('#start_date');

                    $start_date.datetimepicker({
                        format: 'YYYY-MM-DD'
                    });

                    var $due_date = $('#due_date');

                    $due_date.datetimepicker({
                        format: 'YYYY-MM-DD'
                    });

                    $("#cid").select2({
                        theme: "bootstrap"
                    });

                });


            });



            $modal.on('click', '.modal_submit', function(e){

                e.preventDefault();

                $modal.modal('loading');

                $.post( base_url + "tasks/post/", $("#ib-modal-form").serialize())
                    .done(function( data ) {

                        if ($.isNumeric(data)) {

                            window.location = base_url + 'projects/tasks/<?php echo $_smarty_tpl->tpl_vars['project']->value->id;?>
';

                        }

                        else {
                            $modal.modal('loading');
                            toastr.error(data);
                        }

                    });

            });


            $kanbanCanvas.on('click','.v_item',function (e) {
                e.preventDefault();
                $('body').modalmanager('loading');

                $modal.load( base_url + 'tasks/view/'+this.id, '', function(){

                    $modal.modal();




                });
            });




            $modal.on('click', '.c_delete', function(e){
                e.preventDefault();
                var tid = this.id;
                bootbox.confirm(_L['are_you_sure'], function(result) {
                    if(result){

                        $.get( base_url + "delete/tasks/"+tid, function( data ) {
                            location.reload();
                        });


                    }
                });

            });


            $modal.on('click', '.c_edit', function(e){
                e.preventDefault();
                var tid = this.id;

                $('body').modalmanager('loading');

                $modal.load( base_url + 'tasks/create/'+tid, '', function(){
                    $('body').modalmanager('loading');
                    $modal.modal();
                    ib_editor("#description");
                    var ib_date_picker_options = {
                        format: ib_date_format_picker
                    };


                    var jq_title = $('#title').val();

                    $('#title').keyup(function () {

                        var live_val = $(this).val();
                        if(live_val == ''){
                            $("#txt_modal_header").html(jq_title);
                        }
                        else{
                            $("#txt_modal_header").html(live_val);
                        }


                    });

                    var $start_date = $('#start_date');

                    $start_date.datetimepicker({
                        format: 'YYYY-MM-DD'
                    });

                    var $due_date = $('#due_date');

                    $due_date.datetimepicker({
                        format: 'YYYY-MM-DD'
                    });


                    $("#cid").select2({
                        theme: "bootstrap"
                    });


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
