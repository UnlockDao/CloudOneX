<?php
/* Smarty version 3.1.33, created on 2019-10-07 18:01:05
  from '/Users/razib/Documents/valet/business-suite/ui/theme/default/ajax.tasks.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d9bb5a1810668_32673029',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dd4c2d44b8cce9fe90b20b296700021ec60dc6d4' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/default/ajax.tasks.tpl',
      1 => 1558473111,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d9bb5a1810668_32673029 (Smarty_Internal_Template $_smarty_tpl) {
?><div style="overflow: auto;">

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

<?php }
}
