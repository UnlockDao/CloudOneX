<?php
/* Smarty version 3.1.33, created on 2019-09-23 11:29:21
  from '/Users/razib/Documents/valet/suite/apps/bpr/views/tickets_admin_view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d88e4d134c0f8_57383493',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '07e532200d06ae761817294952b538262fbfe394' => 
    array (
      0 => '/Users/razib/Documents/valet/suite/apps/bpr/views/tickets_admin_view.tpl',
      1 => 1569252559,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d88e4d134c0f8_57383493 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_799821545d88e4d1318646_20378460', "style");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9013547745d88e4d1319ed3_81971988', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11359495685d88e4d1344f95_03855431', "script");
}
/* {block "style"} */
class Block_799821545d88e4d1318646_20378460 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'style' => 
  array (
    0 => 'Block_799821545d88e4d1318646_20378460',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
ui/lib/s2/css/select2.min.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
ui/lib/footable/css/footable.core.min.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
ui/lib/modal.css" />
<?php
}
}
/* {/block "style"} */
/* {block "content"} */
class Block_9013547745d88e4d1319ed3_81971988 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_9013547745d88e4d1319ed3_81971988',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>





    <div class="row">
        <div class="col-md-4">
            <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
tickets/admin/list/" class="btn btn-primary btn-sm" style="margin-bottom: 15px;"><i
                        class="fa fa-long-arrow-left"></i> Back to the List</a>


            <div class="panel panel-default" id="t_options">


                <div class="panel-body">
                    <h3><?php echo $_smarty_tpl->tpl_vars['d']->value->subject;?>
</h3>
                    <hr>

                    <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#details"><i class="fa fa-th"></i> Details</a></li>
                        <li><a data-toggle="tab" href="#tasks"><i class="fa fa-tasks"></i> Tasks</a></li>
                        <li><a data-toggle="tab" href="#ticketMeta"><i class="fa fa-ticket"></i> Meta</a></li>

                    </ul>

                    <div class="tab-content">
                        <div id="details" class="tab-pane fade in active ib-tab-box">


                            <span class="label label-default inline-block"> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Priority'];?>
: <?php if (isset($_smarty_tpl->tpl_vars['_L']->value[$_smarty_tpl->tpl_vars['d']->value->urgency])) {?> <?php echo $_smarty_tpl->tpl_vars['_L']->value[$_smarty_tpl->tpl_vars['d']->value->urgency];?>
 <?php } else { ?> <?php echo $_smarty_tpl->tpl_vars['d']->value->urgency;?>
 <?php }?> </span> &nbsp;

                            <span class="label label-default inline-block"> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Status'];?>
: <span id="inline_status"><?php echo $_smarty_tpl->tpl_vars['d']->value->status;?>
</span></span>
                            <hr>
                            <p><strong>Ticket:</strong> <?php echo $_smarty_tpl->tpl_vars['d']->value->tid;?>
</p>
                            <p><strong>Partner:</strong> <?php echo $_smarty_tpl->tpl_vars['d']->value->account;?>
</p>



                            <?php if ($_smarty_tpl->tpl_vars['end_user']->value) {?>


                                <div class="row">

                                    <div class="col-md-6">
                                        <p>
                                            <strong>End User:</strong> <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
bpr/admin/end-user/<?php echo $_smarty_tpl->tpl_vars['end_user']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['end_user']->value->name;?>
</a>
                                            <br>
                                            <strong>Company:</strong> <?php echo $_smarty_tpl->tpl_vars['end_user']->value->company;?>

                                            <br>E-Mail: <?php echo $_smarty_tpl->tpl_vars['end_user']->value->email;?>

                                            <br> Office Phone:  <?php echo $_smarty_tpl->tpl_vars['end_user']->value->office_phone;
if ($_smarty_tpl->tpl_vars['end_user']->value->office_phone_extension != '') {?>-<?php echo $_smarty_tpl->tpl_vars['end_user']->value->office_phone_extension;
}?>
                                            <br> Mobile Phone:  <?php echo $_smarty_tpl->tpl_vars['end_user']->value->mobile_phone;?>

                                            <br> <strong>Address:</strong>
                                            <br> <?php echo $_smarty_tpl->tpl_vars['end_user']->value->address;?>

                                            <br> <?php echo $_smarty_tpl->tpl_vars['end_user']->value->city;?>

                                            <br> <?php echo $_smarty_tpl->tpl_vars['end_user']->value->zip;?>

                                        </p>
                                    </div>

                                    <div class="col-md-6">
                                        <a href="https://maps.google.com/?q=<?php echo $_smarty_tpl->tpl_vars['end_user']->value->address;?>
, <?php echo $_smarty_tpl->tpl_vars['end_user']->value->city;?>
, <?php echo $_smarty_tpl->tpl_vars['end_user']->value->state;?>
, <?php echo $_smarty_tpl->tpl_vars['end_user']->value->zip;?>
" target="_blank" class="btn btn-primary pull-right">View Map</a>
                                    </div>

                                </div>


                            <?php }?>




                                                                                    


                            <hr>
                            <div class="row">
                                <div class="col-md-12">

                                    <strong>Tech Labor Hours</strong>
                                </div>
                            </div>

                            <div class="row">



                                <div class="col-md-6">
                                    <div class="form-group">
                                                                                <label>HH</label>
                                        <select class="form-control" name="editable_hour" id="editable_hour">
                                            <?php
$_smarty_tpl->tpl_vars['hour'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['hour']->step = 1;$_smarty_tpl->tpl_vars['hour']->total = (int) ceil(($_smarty_tpl->tpl_vars['hour']->step > 0 ? 24+1 - (0) : 0-(24)+1)/abs($_smarty_tpl->tpl_vars['hour']->step));
if ($_smarty_tpl->tpl_vars['hour']->total > 0) {
for ($_smarty_tpl->tpl_vars['hour']->value = 0, $_smarty_tpl->tpl_vars['hour']->iteration = 1;$_smarty_tpl->tpl_vars['hour']->iteration <= $_smarty_tpl->tpl_vars['hour']->total;$_smarty_tpl->tpl_vars['hour']->value += $_smarty_tpl->tpl_vars['hour']->step, $_smarty_tpl->tpl_vars['hour']->iteration++) {
$_smarty_tpl->tpl_vars['hour']->first = $_smarty_tpl->tpl_vars['hour']->iteration === 1;$_smarty_tpl->tpl_vars['hour']->last = $_smarty_tpl->tpl_vars['hour']->iteration === $_smarty_tpl->tpl_vars['hour']->total;?>
                                                <option value="<?php echo $_smarty_tpl->tpl_vars['hour']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['hh']->value == $_smarty_tpl->tpl_vars['hour']->value) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['hour']->value;?>
</option>
                                            <?php }
}
?>
                                        </select>

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>MM</label>
                                        <select class="form-control" name="editable_minute" id="editable_minute">
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['minutes']->value, 'minute');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['minute']->value) {
?>
                                                <option value="<?php echo $_smarty_tpl->tpl_vars['minute']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['mm']->value == $_smarty_tpl->tpl_vars['minute']->value) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['minute']->value;?>
</option>
                                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                        </select>
                                    </div>
                                </div>

                            </div>



                                                                                                                                                                                                    
                            <hr>




                            <div class="form-group">
                                <label for="purchase_order">Purchase order #</label>
                                <input class="form-control" name="purchase_order" id="purchase_order" value="<?php echo $_smarty_tpl->tpl_vars['d']->value->purchase_order;?>
">
                            </div>


                            <a class="btn btn-primary" href="#" id="add_reply">Add Reply</a>

                            <?php if ($_smarty_tpl->tpl_vars['can_edit_sales']->value) {?>
                                <?php if ($_smarty_tpl->tpl_vars['invoice']->value) {?>
                                    <a class="btn btn-success" href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
invoices/view/<?php echo $_smarty_tpl->tpl_vars['invoice']->value->id;?>
" id="add_reply">View invoice</a>
                                <?php } else { ?>
                                    <a class="btn btn-success" id="convertToInvoice" href="javascript:;">Create invoice</a>
                                <?php }?>
                            <?php }?>


                            <a class="cdelete btn btn-danger" href="#" id="t<?php echo $_smarty_tpl->tpl_vars['d']->value->id;?>
"><i class="icon-trash"></i> </a>

                            <hr>

                            <strong>Assigned to:</strong>


                            <span id="staff_name">
                                <?php if (isset($_smarty_tpl->tpl_vars['staffs']->value[$_smarty_tpl->tpl_vars['d']->value->aid])) {?>
                                    <?php echo $_smarty_tpl->tpl_vars['staffs']->value[$_smarty_tpl->tpl_vars['d']->value->aid]['fullname'];?>

                                <?php }?>
                            </span>


                            <hr>

                            <button type="button" class="btn btn-primary" id="search_staff"><i class="fa fa-search"></i> Assign ticket</button>

                                                                                                                                                                                                                                                                                                                    

                            


                                                        


                            
                                                        
                            <div class="hr-line-dashed"></div>

                            <div class="form-group">
                                <div class="col-xs-12">
                                    <div class="form-material floating">
                                        <div class="form-material floating">
                                            <select class="form-control" id="editable_department" name="editable_department" size="1">
                                                <option value="None">None</option>
                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['departments']->value, 'dep');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['dep']->value) {
?>
                                                    <option value="<?php echo $_smarty_tpl->tpl_vars['dep']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['department']->value == $_smarty_tpl->tpl_vars['dep']->value['dname']) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['dep']->value['dname'];?>
</option>
                                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                            </select>
                                            <label for="editable_department"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Department'];?>
</label>
                                        </div>
                                    </div>
                                </div>
                            </div>



                            <div class="form-group">
                                <div class="col-xs-12">
                                    <div class="form-material floating">
                                        <div class="form-material floating">
                                            <select class="form-control" id="editable_status" name="editable_status" size="1">
                                                <option value="Open" <?php if ($_smarty_tpl->tpl_vars['d']->value->status == 'Open') {?> selected<?php }?>>Open</option>
                                                <option value="On Hold" <?php if ($_smarty_tpl->tpl_vars['d']->value->status == 'On Hold') {?> selected<?php }?>>On Hold</option>
                                                <option value="Escalated" <?php if ($_smarty_tpl->tpl_vars['d']->value->status == 'Escalated') {?> selected<?php }?>>Escalated</option>
                                                <option value="Closed" <?php if ($_smarty_tpl->tpl_vars['d']->value->status == 'Closed') {?> selected<?php }?>>Closed</option>

                                            </select>
                                            <label for="editable_status">Status</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-xs-12">
                                    <div class="form-material floating">
                                        <input class="form-control" type="text" id="editable_email" name="editable_email" value="<?php echo $_smarty_tpl->tpl_vars['d']->value->email;?>
">
                                        <label for="editable_cc">Email</label>

                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-xs-12">
                                    <div class="form-material floating">
                                        <input class="form-control" type="text" id="editable_cc" name="editable_cc" value="<?php echo $_smarty_tpl->tpl_vars['d']->value->cc;?>
">
                                        <label for="editable_cc">CC</label>

                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-xs-12">
                                    <div class="form-material floating">
                                        <input class="form-control" type="text" id="editable_bcc" name="editable_bcc" value="<?php echo $_smarty_tpl->tpl_vars['d']->value->bcc;?>
">
                                        <label for="editable_bcc">BCC</label>

                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-xs-12">
                                    <div class="form-material floating">
                                        <input class="form-control" type="text" id="editable_phone" name="editable_phone" value="<?php if ($_smarty_tpl->tpl_vars['c']->value) {
echo $_smarty_tpl->tpl_vars['c']->value->phone;
}?>">
                                        <label for="editable_phone">Phone</label>
                                    </div>
                                </div>
                            </div>






                            <input type="hidden" name="tid" id="tid" value="<?php echo $_smarty_tpl->tpl_vars['d']->value->id;?>
">



                            <div class="row">
                                <div class="col-xs-12">
                                    <form>

                                        <hr>

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Note</label>
                                            <textarea class="form-control" name="notes" id="notes" rows="3"
                                                      placeholder="Add Note..."><?php echo $_smarty_tpl->tpl_vars['d']->value->notes;?>
</textarea>
                                        </div>

                                        <button type="submit" id="btn_save_note" class="btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Save'];?>
</button>

                                    </form>
                                </div>
                            </div>






























                        </div>


                        <div id="tasks" class="tab-pane fade ib-tab-box">


                            <form id="ib_add_group" class="form-horizontal push-10-t push-10" method="post">

                                <div class="form-group">
                                    <div class="col-xs-12">
                                        <div class="form-material floating">
                                            <input class="form-control" type="text" id="task_subject" name="task_subject">
                                            <label for="task_subject">Task</label>

                                        </div>
                                    </div>
                                </div>



                                <div class="form-group">
                                    <div class="col-xs-12">
                                        <button class="btn btn-primary" id="btn_add_task" type="submit"> Save</button>
                                        <div id="tasks_tools"  style="display: none;">
                                            <hr>
                                                                                                                                                                                
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-green no-shadow" id="btn_mark_tasks_completed" data-toggle="tooltip" data-placement="top" title="Mark as Completed"><i class="fa fa-check"></i></button>
                                                <button type="button" class="btn btn-primary no-shadow" id="btn_mark_tasks_not_started" data-toggle="tooltip" data-placement="top" title="Mark as Not Started"><i class="fa fa-clock-o"></i></button>
                                                <button type="button" class="btn btn-danger no-shadow" id="btn_delete_tasks" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"></i></button>
                                            </div>


                                            <hr>
                                        </div>
                                    </div>
                                </div>
                            </form>

                            <div id="tasks_list">

                            </div>


                        </div>



                        <div id="ticketMeta" class="tab-pane fade ib-tab-box">

                            <div class="form-group">
                                <label for="ticket_admin">Ticket Working On Staff</label>
                                <select class="form-control" id="ticket_admin" name="ticket_admin">
                                    <option value="">Choose Admin...</option>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['super_admins']->value, 'super_admin');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['super_admin']->value) {
?>
                                        <option value="<?php echo $_smarty_tpl->tpl_vars['super_admin']->value->id;?>
" <?php if ($_smarty_tpl->tpl_vars['d']->value->oid == $_smarty_tpl->tpl_vars['super_admin']->value->id) {?>selected<?php }?> ><?php echo $_smarty_tpl->tpl_vars['super_admin']->value->fullname;?>
</option>
                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </select>
                            </div>

                            <h3>Ticket log</h3>
                            <div class="hr-line-dashed"></div>

                            <table class="table table-bordered table-hover table-condensed">
                                <tbody>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['activities']->value, 'activity');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['activity']->value) {
?>
                                    <tr>
                                        <td>
                                            <?php echo $_smarty_tpl->tpl_vars['activity']->value->description;?>
 <small class="text-muted"><?php echo $_smarty_tpl->tpl_vars['activity']->value->date;?>
</small>
                                        </td>
                                    </tr>
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </tbody>
                            </table>

                        </div>

                    </div>





                </div>

            </div>

        </div>
        <div class="col-md-8">
            <div class="row">
                <div class="col-md-12" id="create_ticket">


                    <!-- The time line -->
                    <ul class="timeline">
                        <!-- timeline time label -->
                        <li class="time-label">
                  <span class="mmnt">
                    <?php echo strtotime($_smarty_tpl->tpl_vars['d']->value->created_at);?>

                  </span>
                        </li>
                        <!-- /.timeline-label -->
                        <!-- timeline item -->
                        <li>
                            

                            <?php if ($_smarty_tpl->tpl_vars['d']->value->admin != '0') {?>
                                <?php if ($_smarty_tpl->tpl_vars['user']->value['img'] == 'gravatar') {?>
                                    <img src="http://www.gravatar.com/avatar/<?php echo md5(($_smarty_tpl->tpl_vars['user']->value['email']));?>
?s=30"
                                         class="img-time-line" alt="<?php echo $_smarty_tpl->tpl_vars['user']->value['fullname'];?>
">
                                <?php } elseif ($_smarty_tpl->tpl_vars['user']->value['img'] == '') {?>
                                    <img class="img-time-line" src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
ui/lib/imgs/default-user-avatar.png" alt="">
                                <?php } else { ?>
                                    <img src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;
echo $_smarty_tpl->tpl_vars['user']->value['img'];?>
" class="img-time-line" alt="<?php echo $_smarty_tpl->tpl_vars['user']->value['account'];?>
">
                                <?php }?>

                            <?php } elseif (($_smarty_tpl->tpl_vars['c']->value)) {?>

                                <?php if ($_smarty_tpl->tpl_vars['c']->value->img == 'gravatar') {?>
                                    <img src="http://www.gravatar.com/avatar/<?php echo md5(($_smarty_tpl->tpl_vars['user']->value['email']));?>
?s=30"
                                         class="img-time-line" alt="<?php echo $_smarty_tpl->tpl_vars['user']->value['fullname'];?>
">
                                <?php } elseif ($_smarty_tpl->tpl_vars['c']->value->img == '') {?>
                                    <img class="img-time-line" src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
ui/lib/imgs/default-user-avatar.png" alt="">
                                <?php } else { ?>
                                    <img src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;
echo $_smarty_tpl->tpl_vars['c']->value->img;?>
" class="img-time-line" alt="<?php echo $_smarty_tpl->tpl_vars['user']->value['account'];?>
">
                                <?php }?>

                            <?php } else { ?>



                            <?php }?>


                            <div class="timeline-item">
                                

                                <h3 class="timeline-header"><a href="javascript:void(0)"><?php echo $_smarty_tpl->tpl_vars['d']->value->account;?>
</a></h3>

                                <div class="timeline-body">
                                    <?php echo $_smarty_tpl->tpl_vars['d']->value->message;?>

                                    <hr>

                                    <a href="#" class="btn btn-warning btn-xs t_edit" data-toggle="tooltip"
                                       data-placement="top" title="" data-original-title="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Edit'];?>
" id="et<?php echo $_smarty_tpl->tpl_vars['d']->value->id;?>
"><i
                                                class="glyphicon glyphicon-pencil"></i> </a>
                                </div>

                                <?php if (($_smarty_tpl->tpl_vars['d']->value->attachments) != '') {?>
                                    <div class="timeline-footer">
                                        <?php echo Tickets::gen_link_attachments($_smarty_tpl->tpl_vars['d']->value->attachments);?>

                                    </div>
                                <?php }?>


                            </div>
                        </li>

                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['replies']->value, 'reply');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['reply']->value) {
?>
                            <li class="time-label">
                  <span class="mmnt">
                    <?php echo strtotime($_smarty_tpl->tpl_vars['reply']->value['created_at']);?>

                  </span>
                            </li>
                            <li>
                                

                                <?php if ($_smarty_tpl->tpl_vars['reply']->value['admin'] != '0') {?>
                                    <img src="<?php echo getAdminImage($_smarty_tpl->tpl_vars['reply']->value['admin'],30);?>
" class="img-time-line">
                                <?php } elseif (($_smarty_tpl->tpl_vars['c']->value)) {?>

                                    <?php if ($_smarty_tpl->tpl_vars['c']->value->img == '') {?>
                                        <img class="img-time-line" src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
ui/lib/imgs/default-user-avatar.png"
                                             alt="">
                                    <?php } else { ?>
                                        <img src="<?php echo $_smarty_tpl->tpl_vars['c']->value->img;?>
" class="img-time-line" alt="<?php echo $_smarty_tpl->tpl_vars['user']->value['account'];?>
">
                                    <?php }?>

                                <?php } else { ?>



                                <?php }?>

                                <div class="timeline-item">
                                    
                                    <h3 class="timeline-header"><a href="javascript:void(0)"><?php echo $_smarty_tpl->tpl_vars['reply']->value['replied_by'];?>
</a></h3>

                                    <div class="timeline-body" <?php if ($_smarty_tpl->tpl_vars['reply']->value['reply_type'] == 'internal') {?> style="background: #FFF6D9;" <?php }?>>
                                        <?php echo $_smarty_tpl->tpl_vars['reply']->value['message'];?>


                                        <hr>

                                        <a href="#" class="btn btn-warning btn-xs no-shadow reply_edit"
                                           data-toggle="tooltip" data-placement="top" title=""
                                           data-original-title="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Edit'];?>
" id="er<?php echo $_smarty_tpl->tpl_vars['reply']->value['id'];?>
"><i
                                                    class="glyphicon glyphicon-pencil"></i> </a> &nbsp;
                                        <a href="#" class="btn btn-danger btn-xs no-shadow reply_delete"
                                           data-toggle="tooltip" data-placement="top" title=""
                                           data-original-title="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Delete'];?>
" id="dr<?php echo $_smarty_tpl->tpl_vars['reply']->value['id'];?>
"><i
                                                    class="glyphicon glyphicon-trash"></i> </a> &nbsp;

                                        <?php if ($_smarty_tpl->tpl_vars['reply']->value['reply_type'] == 'internal') {?> <a href="#" class="btn btn-primary btn-xs no-shadow reply_make_public"
                                                                                   data-toggle="tooltip" data-placement="top" title=""
                                                                                   data-original-title="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Public'];?>
" id="rp<?php echo $_smarty_tpl->tpl_vars['reply']->value['id'];?>
"><i
                                                    class="fa fa-globe"></i> </a> <?php }?>

                                    </div>

                                    <?php if (($_smarty_tpl->tpl_vars['reply']->value['attachments']) != '') {?>
                                        <div class="timeline-footer">
                                            <?php echo Tickets::gen_link_attachments($_smarty_tpl->tpl_vars['reply']->value['attachments']);?>

                                        </div>
                                    <?php }?>


                                </div>
                            </li>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                        <!-- END timeline item -->
                        <!-- timeline item -->
                        <li class="time-label">
                  <span class="bg-green" id="section_add_reply">
                   Add Reply
                  </span>
                        </li>
                        <li>
                            <?php if ($_smarty_tpl->tpl_vars['user']->value['img'] == '') {?>
                                <img class="img-time-line" src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
ui/lib/imgs/default-user-avatar.png" alt="">
                            <?php } else { ?>
                                <img src="<?php echo $_smarty_tpl->tpl_vars['user']->value['img'];?>
" class="img-time-line" alt="<?php echo $_smarty_tpl->tpl_vars['user']->value['account'];?>
">
                            <?php }?>

                            <div class="timeline-item">


                                <div class="timeline-body">
                                    <form class="form-horizontal push-10-t push-10" method="post">

                                        <ul class="nav nav-pills">
                                            <li class="active" id="reply_public"><a href="#">Public</a></li>
                                            <li id="reply_internal"><a href="#">Internal</a></li>

                                        </ul>

                                        <div class="form-group">
                                            <div class="col-xs-12">

                                            <textarea id="content" class="form-control sysedit"
                                                      name="content"></textarea>
                                                <div class="help-block">
                                                    <a data-toggle="modal" href="#modal_add_item"><i
                                                                class="fa fa-paperclip"></i> Attach File</a>
                                                    | <a data-toggle="modal" href="#modal_predefined_replies"><i
                                                                class="fa fa-align-left"></i> Predefined reply</a>
                                                </div>
                                            </div>
                                        </div>

                                                                                                                                                                                                                                                                                                                                                                                                                

                                        <div class="form-group">
                                            <div class="col-xs-12">

                                                <input type="hidden" name="attachments" id="attachments" value="">
                                                <input type="hidden" name="f_tid" id="f_tid" value="<?php echo $_smarty_tpl->tpl_vars['d']->value->id;?>
">
                                                <input type="hidden" name="cid" id="cid" value="<?php echo $_smarty_tpl->tpl_vars['d']->value->userid;?>
">

                                                <button class="btn btn-primary" id="ib_form_submit" type="submit">Save
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                                                                                                                                            </div>
                        </li>
                        <!-- END timeline item -->
                        <!-- timeline item -->

                        <!-- END timeline item -->
                        <!-- timeline time label -->

                        <!-- /.timeline-label -->
                        <!-- timeline item -->

                        <!-- END timeline item -->
                        <!-- timeline item -->

                        <!-- END timeline item -->
                        <li>
                            <i class="fa fa-life-ring bg-gray"></i>
                        </li>
                    </ul>
                </div>
                <!-- /.col -->
            </div>
        </div>
    </div>

    <div id="modal_add_item" class="modal fade" tabindex="-1" data-width="600" style="display: none;">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h4 class="modal-title">Add File</h4>
        </div>
        <div class="modal-body">
            <div class="row">


                <div class="col-md-12">
                    <form action="" class="dropzone" id="upload_container">

                        <div class="dz-message">
                            <h3><i class="fa fa-cloud-upload"></i> Drop File Here</h3>
                            <br/>
                            <span class="note">Or Click to Upload</span>
                        </div>

                    </form>


                </div>


            </div>
        </div>
        <div class="modal-footer">

            <button type="button" data-dismiss="modal" class="btn btn-danger">Close</button>

        </div>
    </div>


    <div id="modal_predefined_replies" class="modal fade" tabindex="-1" data-width="800" style="display: none;">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h4 class="modal-title">Predefined replies</h4>
        </div>
        <div class="modal-body">
            <div class="row">


                <div class="col-md-12">

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
                            <th>Name</th>
                        </tr>
                        </thead>
                        <tbody>

                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['predefined_replies']->value, 'predefined_replie');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['predefined_replie']->value) {
?>
                            <tr>
                                <td><a href="javascript:;" onclick="setPreDefinedContent(event,'<?php echo $_smarty_tpl->tpl_vars['predefined_replie']->value->id;?>
');"><?php echo $_smarty_tpl->tpl_vars['predefined_replie']->value->title;?>
</a> </td>
                            </tr>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                        </tbody>

                        <tfoot>
                        <tr>
                            <td>
                                <ul class="pagination">
                                </ul>
                            </td>
                        </tr>
                        </tfoot>

                    </table>
                </div>


            </div>
        </div>
        <div class="modal-footer">

            <button type="button" data-dismiss="modal" class="btn btn-danger">Close</button>

        </div>
    </div>

<?php
}
}
/* {/block "content"} */
/* {block "script"} */
class Block_11359495685d88e4d1344f95_03855431 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_11359495685d88e4d1344f95_03855431',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
ui/lib/footable/js/footable.all.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
ui/lib/easytimer.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
ui/lib/s2/js/select2.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
ui/lib/modal.js"><?php echo '</script'; ?>
>



    <?php echo '<script'; ?>
>

        Dropzone.autoDiscover = false;
        $(function() {

            var _url = $("#_url").val();

            var $ib_form_submit = $("#ib_form_submit");

            var $create_ticket = $("#create_ticket");

            $('.footable').footable();
            ib_editor("#content",200);

            var $modal = $('#ajax-modal');

            var reply_type = 'public';


            var upload_resp;


            var ib_file = new Dropzone("#upload_container",
                {
                    url: _url + "tickets/client/upload_file/",
                    maxFiles: 10,
                    acceptedFiles: "image/jpeg,image/png,image/gif"
                }
            );

            ib_file.on("sending", function() {

                $ib_form_submit.prop('disabled', true);

            });


            // Ticket convert to invoice

            $('#convertToInvoice').on('click',function (e) {
                e.preventDefault();

                bootbox.confirm('<strong>Are you sure? This action will <span style="color:red;">close</span> the ticket.</strong>', function (yes) {
                    if(yes)
                    {
                        //  window.location = '<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
invoices/create-from-ticket/<?php echo $_smarty_tpl->tpl_vars['d']->value->id;?>
';


                        $.post("<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
invoices/create-from-ticket/<?php echo $_smarty_tpl->tpl_vars['d']->value->id;?>
", {
                            receipt_number: $('#purchase_order').val()
                        } )
                            .done(function( data ) {

                                console.log(data);

                                if(data.success == true){
                                    window.location = data.url;
                                }

                                else {
                                    //   toastr.error(data.msg);
                                }

                            });


                    }
                });

            });


            ib_file.on("success", function(file,response) {

                $ib_form_submit.prop('disabled', false);

                upload_resp = response;

                if(upload_resp.success == 'Yes'){

                    toastr.success(upload_resp.msg);
                    // $file_link.val(upload_resp.file);
                    // files.push(upload_resp.file);
                    //
                    // console.log(files);

                    $('#attachments').val(function(i,val) {
                        return val + (!val ? '' : ',') + upload_resp.file;
                    });


                }
                else{
                    toastr.error(upload_resp.msg);
                }







            });



            $ib_form_submit.on('click', function(e) {
                e.preventDefault();
                $create_ticket.block({ message: block_msg });
                $.post( _url + "tickets/admin/add_reply/", {  message: tinyMCE.activeEditor.getContent(), reply_type: reply_type, attachments: $("#attachments").val(), f_tid: $("#f_tid").val()} )
                    .done(function( data ) {

                        if(data.success == "Yes"){
                            location.reload();
                        }

                        else {
                            $create_ticket.unblock();
                            toastr.error(data.msg);
                        }

                    });


            });


            $("#add_reply").on('click', function(e) {
                e.preventDefault();

                $('html, body').animate({
                    scrollTop: $("#section_add_reply").offset().top - 60
                }, 500);

                tinyMCE.activeEditor.focus();

            });

            // $('#notes').redactor(
            //     {
            //         minHeight: 150, // pixels
            //         plugins: ['fontcolor']
            //     }
            // );

            // $("#btn_save_note").on('click', function(e) {
            //     e.preventDefault();
            //
            //     $('#t_options').block({ message: null });
            //
            //     $.post(base_url + 'tickets/admin/save_note', {
            //         tid: $('#tid').val(),
            //
            //         notes: $('#notes').val()
            //
            //     })
            //         .done(function () {
            //             toastr.success(_L['Saved Successfully']);
            //             $('#t_options').unblock();
            //
            //         });
            //
            // });

            $(".cdelete").click(function (e) {
                e.preventDefault();
                var id = this.id;
                bootbox.confirm(_L['are_you_sure'], function(result) {
                    if(result){
                        window.location.href = base_url + "tickets/admin/delete/" + id;
                    }
                });
            });


            $(".t_edit").click(function (e) {
                e.preventDefault();
                var id = this.id;

                $('body').modalmanager('loading');


                $modal.load( base_url + 'tickets/admin/edit_modal/'+id, '', function(){

                    $modal.modal();

                    ib_editor("#edit_content",300,true,false);

                });
            });


            $(".reply_edit").click(function (e) {
                e.preventDefault();
                var id = this.id;

                $('body').modalmanager('loading');


                $modal.load( base_url + 'tickets/admin/edit_modal/'+id+'/reply', '', function(){

                    $modal.modal();

                    ib_editor("#edit_content",300,true,false);

                });
            });





            $('[data-toggle="tooltip"]').tooltip();



            $modal.on('click', '.update_ticket_message', function(e){

                e.preventDefault();

                $modal.modal('loading');

                $.post( _url + "tickets/admin/edit_modal_post/", {
                    tid: $('#edit_tid').val(),
                    type: $('#edit_type').val(),
                    message: tinyMCE.activeEditor.getContent()

                })
                    .done(function( data ) {

                        if ($.isNumeric(data)) {

                            location.reload();

                        }

                        else {
                            $modal.modal('loading');
                            toastr.error(data);
                        }

                    });

            });


            $(".reply_delete").click(function (e) {
                e.preventDefault();
                var id = this.id;
                bootbox.confirm(_L['are_you_sure'], function(result) {
                    if(result){
                        window.location.href = base_url + "tickets/admin/delete_reply/" + id;
                    }
                });
            });




            


            $("#purchase_order").on("blur",function(e){
                $.post(base_url + 'bpr/admin/tickets_update_purchase_order',{id: tid, value: $(this).val()},function (data) {
                    if ($.isNumeric(data)) {

                        toastr.success(_L['Saved Successfully']);

                    }

                    else {

                        toastr.error(data);
                    }
                })
            });

            $("#editable_cc").on("blur",function(e){
                $.post(base_url + 'tickets/admin/update_cc',{id: tid, value: $(this).val()},function (data) {
                    if ($.isNumeric(data)) {

                        toastr.success(_L['Saved Successfully']);

                    }

                    else {

                        toastr.error(data);
                    }
                })
            });


            $("#editable_bcc").on("blur",function(e){
                $.post(base_url + 'tickets/admin/update_bcc',{id: tid, value: $(this).val()},function (data) {
                    if ($.isNumeric(data)) {

                        toastr.success(_L['Saved Successfully']);

                    }

                    else {

                        toastr.error(data);
                    }
                })
            });


            $("#editable_email").on("blur",function(e){
                $.post(base_url + 'tickets/admin/update_email',{id: tid, value: $(this).val()},function (data) {
                    if ($.isNumeric(data)) {

                        toastr.success(_L['Saved Successfully']);

                    }

                    else {

                        toastr.error(data);
                    }
                })
            });


            $("#editable_phone").on("blur",function(e){
                $.post(base_url + 'tickets/admin/update_phone',{id: tid, value: $(this).val()},function (data) {
                    if ($.isNumeric(data)) {

                        toastr.success(_L['Saved Successfully']);

                    }

                    else {

                        toastr.error(data);
                    }
                })
            });


            $("#editable_hour").on("blur",function(e){
                $.post(base_url + 'tickets/admin/update_hour',{id: tid, value: $(this).val()},function (data) {
                    if ($.isNumeric(data)) {

                        toastr.success(_L['Saved Successfully']);

                    }

                    else {

                        toastr.error(data);
                    }
                })
            });

            $("#editable_minute").on("blur",function(e){
                $.post(base_url + 'tickets/admin/update_minute',{id: tid, value: $(this).val()},function (data) {
                    if ($.isNumeric(data)) {

                        toastr.success(_L['Saved Successfully']);

                    }

                    else {

                        toastr.error(data);
                    }
                })
            });


            $("#editable_department").on("change",function(e){
                $.post(base_url + 'tickets/admin/update_department',{id: tid, value: $(this).val()},function (data) {
                    if ($.isNumeric(data)) {

                        toastr.success(_L['Saved Successfully']);

                    }

                    else {

                        toastr.error(data);
                    }
                })
            });

            $("#ticket_admin").on("change",function(e){
                $.post(base_url + 'bpr/admin/ticket-update-admin',{id: tid, value: $(this).val()},function (data) {
                    if ($.isNumeric(data)) {

                        toastr.success(_L['Saved Successfully']);

                    }

                    else {

                        toastr.error(data);
                    }
                })
            });


            // $('#editable_assigned_to').select2({
            //     theme: "bootstrap",
            // })
            //     .on("change", function (e) {
            //
            //         $.post(base_url + 'tickets/admin/update_assigned_to',{id: tid, value: $("#editable_assigned_to option:selected").val()},function (data) {
            //             if ($.isNumeric(data)) {
            //
            //                 toastr.success(_L['Saved Successfully']);
            //
            //             }
            //
            //             else {
            //
            //                 toastr.error(data);
            //             }
            //         })
            //     });





            // $("#editable_assigned_to").on("change",function(e){
            //
            // });

            $("#editable_status").on("change",function(e){
                $.post(base_url + 'tickets/admin/update_status',{id: tid, value: $(this).val()},function (data) {
                    if ($.isNumeric(data)) {

                        toastr.success(_L['Saved Successfully']);

                        $("#inline_status").html($("#editable_status option:selected").text());

                    }

                    else {

                        toastr.error(data);
                    }
                })
            });

            



            var $reply_public = $("#reply_public");
            var $reply_internal = $("#reply_internal");


            $reply_public.click(function (e) {
                e.preventDefault();
                $(this).addClass('active');
                $reply_internal.removeClass('active');
                reply_type = 'public';
                tinymce.activeEditor.getBody().style.backgroundColor = '#FFFFFF';
            });


            $reply_internal.click(function (e) {
                e.preventDefault();
                $(this).addClass('active');
                $reply_public.removeClass('active');
                reply_type = 'internal';
                tinymce.activeEditor.getBody().style.backgroundColor = '#FFF6D9';
            });


            $(".reply_make_public").click(function (e) {
                e.preventDefault();
                var id = this.id;
                bootbox.confirm(_L['are_you_sure'], function(result) {
                    if(result){
                        window.location.href = base_url + "tickets/admin/reply_make_public/" + id;
                    }
                });
            });

            function loadTasks() {

                $("#tasks_list").html(block_msg);

                $.get( base_url + "tickets/admin/tasks_list/"+tid, function( data ) {

                    $("#tasks_list").html(data);

                    $('.i-checks').iCheck({
                        checkboxClass: 'icheckbox_square-blue',
                        radioClass: 'icheckbox_square-blue',
                        increaseArea: '20%' // optional
                    });

                    $('.i-checks').on('ifChanged', function (event) {

                        var i_check_id = $(this)[0].id;

                        if($(this).iCheck('update')[0].checked){

                            $.get(base_url + 'tickets/admin/set_task_completed/'+i_check_id,function () {
                                loadTasks();
                            });

                        }
                        else{

                            $.get(base_url + 'tickets/admin/set_task_not_started/'+i_check_id,function () {
                                loadTasks();
                            });

                        }

                    });

                });
            }


            loadTasks();


            $("#btn_add_task").click(function (e) {
                e.preventDefault();



                if($("#task_subject").val() == ''){

                    $("#task_subject").focus();

                }

                else {

                    $("#btn_add_task").prop('disabled', true);

                    $.post( base_url + "tasks/post/", { title: $("#task_subject").val(), rel_type: 'Ticket', tid: tid, rel_id: tid, cid: <?php echo $_smarty_tpl->tpl_vars['ticket']->value->userid;?>
, priority: '<?php echo $_smarty_tpl->tpl_vars['ticket']->value->urgency;?>
' })
                        .done(function( data ) {

                            $("#btn_add_task").prop('disabled', false);

                            if ($.isNumeric(data)) {

                                $("#task_subject").val('');

                                loadTasks();

                            }
                            else{
                                toastr.error(data);
                            }

                        });

                }
            });

            var task_id;

            function has_selected_task_items() {
                if($('.selected').length > 0){

                    $("#tasks_tools").show(200);

                }
                else{
                    $("#tasks_tools").hide(200);
                }
            }

            $("#tasks_list").on('click', '.task_item', function () {

                task_id = this.id;



                if($("#" + task_id).hasClass('selected')){
                    $("#" + task_id).removeClass('selected');
                }
                else{
                    $("#" + task_id).addClass('selected');
                }

                has_selected_task_items();


                // alert(task_id);


            });

            $("#btn_mark_tasks_completed").on('click',function (e) {
                e.preventDefault();
                var arrayOfIds = $.map($(".selected"), function(n, i){
                    return n.id;
                });

                $("#btn_mark_tasks_completed").prop('disabled', true);

                $.post( base_url + "tickets/admin/do_task/", { action: 'completed', ids: arrayOfIds })
                    .done(function( data ) {

                        $("#btn_mark_tasks_completed").prop('disabled', false);

                        loadTasks();

                        $("#tasks_tools").hide(200);

                    });

            });


            $("#btn_mark_tasks_not_started").on('click',function (e) {
                e.preventDefault();
                var arrayOfIds = $.map($(".selected"), function(n, i){
                    return n.id;
                });

                $("#btn_mark_tasks_completed").prop('disabled', true);

                $.post( base_url + "tickets/admin/do_task/", { action: 'not_started', ids: arrayOfIds })
                    .done(function( data ) {

                        $("#btn_mark_tasks_completed").prop('disabled', false);

                        loadTasks();

                        $("#tasks_tools").hide(200);

                    });

            });


            $("#btn_delete_tasks").on('click',function (e) {
                e.preventDefault();

                bootbox.confirm(_L['are_you_sure'], function(result) {
                    if(result){
                        var arrayOfIds = $.map($(".selected"), function(n, i){
                            return n.id;
                        });

                        $("#btn_delete_tasks").prop('disabled', true);

                        $.post( base_url + "tickets/admin/do_task/", { action: 'delete', ids: arrayOfIds })
                            .done(function( data ) {

                                $("#btn_delete_tasks").prop('disabled', false);

                                loadTasks();

                                $("#tasks_tools").hide(200);

                            });
                    }
                });



            });




            var timer = new Timer();
            var processing = false;

            $('#startButton').click(function () {
                timer.start({
                    startValues: [0,<?php echo $_smarty_tpl->tpl_vars['timeSpent']->value;?>
,0,0,0]
                });
            });

            $('#pauseButton').click(function () {
                timer.pause();
                if(processing === false)
                {
                    processing = true;
                    $.post( base_url + "tickets/admin/log_time", { total_time: timer.getTimeValues().toString(), ticket_id: '<?php echo $_smarty_tpl->tpl_vars['ticket']->value->id;?>
' })
                        .done(function( data ) {
                            processing = false;
                        });
                }
            });



            var $i = 0;

            timer.addEventListener('secondsUpdated', function (e) {
                $('#timeSpent').html(timer.getTimeValues().toString());

                $i++;

                if($i>10 && processing === false)
                {
                    //  console.log(timer.getTimeValues());
                    processing = true;
                    $.post( base_url + "tickets/admin/log_time", { total_time: timer.getTimeValues().toString(), ticket_id: '<?php echo $_smarty_tpl->tpl_vars['ticket']->value->id;?>
' })
                        .done(function( data ) {
                            processing = false;
                            $i = 0;
                        });
                }

            });

            timer.addEventListener('started', function (e) {
                $('#timeSpent').html(timer.getTimeValues().toString());
            });


            $('#search_staff').on('click', function () {

                $('body').modalmanager('loading');

                $modal.load(_url + 'bpr/admin/modal_search_staff', '', function () {
                    $modal.modal();
                    $('#staff_table').footable();
                });


            });


            $modal.on('click', '.assign_to_partner', function(e){

                e.preventDefault();

                $.post(base_url + 'bpr/admin/ticket_assign_to',{ id: tid, value: $(this).data("id")},function (data) {
                    if (data.success) {

                        $('#staff_name').html(data.fullname);

                        toastr.success('Ticket assigned.');

                    }

                    else {

                        toastr.error(data);
                    }
                })

            });



        });



        function setPreDefinedContent(event,predefined_reply_id) {

            $('#modal_predefined_replies').modal('hide');

            $.get( "<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
tickets/admin/get-predefined-reply/" + predefined_reply_id, function( data ) {
                tinyMCE.activeEditor.setContent(data);
            });


        }

    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block "script"} */
}
