<?php
/* Smarty version 3.1.33, created on 2019-09-30 04:58:50
  from '/Users/razib/Documents/valet/business-suite/ui/theme/default/dashboard_tickets.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d91c3ca0a2f97_02148032',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '13f252b4fb30a7c9f4119557bc62662a7552829b' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/default/dashboard_tickets.tpl',
      1 => 1562009262,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d91c3ca0a2f97_02148032 (Smarty_Internal_Template $_smarty_tpl) {
?><table class="table table-hover table-vcenter">

    <thead>
    <tr>
        <th>#</th>
        <th>Ticket Status</th>
        <th>Ticket Description</th>
        <th>Task Status</th>
    </tr>
    </thead>
    <tbody>

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tickets']->value, 'ticket');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['ticket']->value) {
?>
        <tr>
            <td style="width: 140px;">
                <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
tickets/admin/view/<?php echo $_smarty_tpl->tpl_vars['ticket']->value->id;?>
">#<?php echo $_smarty_tpl->tpl_vars['ticket']->value->tid;?>
</a>
                <br>
                <?php if ($_smarty_tpl->tpl_vars['ticket']->value->aid && isset($_smarty_tpl->tpl_vars['admins']->value[$_smarty_tpl->tpl_vars['ticket']->value->aid])) {?>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/users-edit/1"><?php echo $_smarty_tpl->tpl_vars['admins']->value[$_smarty_tpl->tpl_vars['ticket']->value->aid]->fullname;?>
</a>
                <?php }?>
            </td>
            <td>

                <?php if ($_smarty_tpl->tpl_vars['ticket']->value->status == 'Closed') {?>
                    <span class="label label-danger"><?php if (isset($_smarty_tpl->tpl_vars['_L']->value[$_smarty_tpl->tpl_vars['ticket']->value->status])) {?>
                            <?php echo $_smarty_tpl->tpl_vars['_L']->value[$_smarty_tpl->tpl_vars['ticket']->value->status];?>

                        <?php } else { ?>
                            <?php echo $_smarty_tpl->tpl_vars['ticket']->value->status;?>

                        <?php }?>
                                    </span>
                    <?php } elseif ($_smarty_tpl->tpl_vars['ticket']->value->status == 'On Hold') {?>
                    <span class="label label-warning"><?php if (isset($_smarty_tpl->tpl_vars['_L']->value[$_smarty_tpl->tpl_vars['ticket']->value->status])) {?>
                            <?php echo $_smarty_tpl->tpl_vars['_L']->value[$_smarty_tpl->tpl_vars['ticket']->value->status];?>

                        <?php } else { ?>
                            <?php echo $_smarty_tpl->tpl_vars['ticket']->value->status;?>

                        <?php }?>
                                    </span>
                    <?php } else { ?>
                    <span class="label label-success"><?php if (isset($_smarty_tpl->tpl_vars['_L']->value[$_smarty_tpl->tpl_vars['ticket']->value->status])) {?>
                            <?php echo $_smarty_tpl->tpl_vars['_L']->value[$_smarty_tpl->tpl_vars['ticket']->value->status];?>

                        <?php } else { ?>
                            <?php echo $_smarty_tpl->tpl_vars['ticket']->value->status;?>

                        <?php }?>
                                    </span>
                <?php }?>




            </td>
            <td>
                <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
tickets/admin/view/<?php echo $_smarty_tpl->tpl_vars['ticket']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['ticket']->value->subject;?>
</a>
                <div class="text-muted">
                    <em><?php echo $_smarty_tpl->tpl_vars['_L']->value['Updated'];?>
 </em> <em class="mmnt"><?php echo strtotime($_smarty_tpl->tpl_vars['ticket']->value->updated_at);?>
</em> by <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
tickets/admin/view/<?php echo $_smarty_tpl->tpl_vars['ticket']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['ticket']->value->last_reply;?>
</a>
                </div>
            </td>

            <td>
                <?php if (isset($_smarty_tpl->tpl_vars['tickets_tasks']->value[$_smarty_tpl->tpl_vars['ticket']->value->id])) {?>
                    <?php if ($_smarty_tpl->tpl_vars['tickets_tasks']->value[$_smarty_tpl->tpl_vars['ticket']->value->id]->status == 'Not Started') {?>

                        <span class="label label-danger" style="border: 1px solid #f44336; color: #f44336;"><?php echo $_smarty_tpl->tpl_vars['tickets_tasks']->value[$_smarty_tpl->tpl_vars['ticket']->value->id]->status;?>
</span>
                    <?php } elseif ($_smarty_tpl->tpl_vars['tickets_tasks']->value[$_smarty_tpl->tpl_vars['ticket']->value->id]->status == 'Completed') {?>
                        <span class="label label-success" style="border: 1px solid #4caf50; color: #4caf50;"><?php echo $_smarty_tpl->tpl_vars['tickets_tasks']->value[$_smarty_tpl->tpl_vars['ticket']->value->id]->status;?>
</span>
                    <?php } elseif ($_smarty_tpl->tpl_vars['tickets_tasks']->value[$_smarty_tpl->tpl_vars['ticket']->value->id]->status == 'In Progress') {?>
                        <span class="label label-primary" style="border: 1px solid #2196f3; color: #2196f3;"><?php echo $_smarty_tpl->tpl_vars['tickets_tasks']->value[$_smarty_tpl->tpl_vars['ticket']->value->id]->status;?>
</span>
                    <?php } elseif ($_smarty_tpl->tpl_vars['tickets_tasks']->value[$_smarty_tpl->tpl_vars['ticket']->value->id]->status == 'Waiting') {?>
                        <span class="label label-warning" style="border: 1px solid #9e9e9e; color: #9e9e9e;"><?php echo $_smarty_tpl->tpl_vars['tickets_tasks']->value[$_smarty_tpl->tpl_vars['ticket']->value->id]->status;?>
</span>
                    <?php } elseif ($_smarty_tpl->tpl_vars['tickets_tasks']->value[$_smarty_tpl->tpl_vars['ticket']->value->id]->status == 'Deferred') {?>
                        <span class="label label-warning" style="border: 1px solid #607d8b; color: #607d8b;"><?php echo $_smarty_tpl->tpl_vars['tickets_tasks']->value[$_smarty_tpl->tpl_vars['ticket']->value->id]->status;?>
</span>
                        <?php } else { ?>
                        <span class="label label-warning" style="border: 1px solid #f44336; color: #f44336;"><?php echo $_smarty_tpl->tpl_vars['tickets_tasks']->value[$_smarty_tpl->tpl_vars['ticket']->value->id]->status;?>
</span>
                    <?php }?>

                <?php }?>
            </td>

        </tr>

        <?php
}
} else {
?>
        <tr><td align="center" style="border-top: none"><?php echo $_smarty_tpl->tpl_vars['_L']->value['You do not have any Tickets'];?>
</td></tr>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

    </tbody>
</table><?php }
}
