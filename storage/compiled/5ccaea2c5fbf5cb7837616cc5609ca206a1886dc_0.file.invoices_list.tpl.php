<?php
/* Smarty version 3.1.33, created on 2019-09-25 13:48:32
  from '/Users/razib/Documents/valet/suite/ui/theme/default/invoices_list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d8ba870035016_09671956',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5ccaea2c5fbf5cb7837616cc5609ca206a1886dc' => 
    array (
      0 => '/Users/razib/Documents/valet/suite/ui/theme/default/invoices_list.tpl',
      1 => 1556267287,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d8ba870035016_09671956 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8536005445d8ba86ff3fba9_19401823', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "content"} */
class Block_8536005445d8ba86ff3fba9_19401823 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_8536005445d8ba86ff3fba9_19401823',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>



    <div class="row">
        <div class="col-md-12">
            <h3 class="ibilling-page-header"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Sales'];?>
</h3>
        </div>
    </div>

    <div class="row">
        <div class="col-md-3">
            <div class="dashboard-stat2 ">
                <div class="display">
                    <div class="number">
                        <h3 class="font-green-meadow">
                            <span class="amount" data-a-sign="<?php echo $_smarty_tpl->tpl_vars['config']->value['currency_code'];?>
 "><?php echo $_smarty_tpl->tpl_vars['invoice_paid_amount']->value;?>
</span>
                        </h3>
                        <small><?php echo $_smarty_tpl->tpl_vars['_L']->value['Paid'];?>
</small>
                    </div>
                    <div class="icon">
                        <i class="fa fa-calendar-check-o"></i>
                    </div>
                </div>
                <div class="progress-info">
                    <div class="progress">
                                            <span style="width: <?php echo $_smarty_tpl->tpl_vars['p']->value['Paid']['percentage'];?>
%;" class="progress-bar progress-bar-primary bg-green-meadow">
                                                <span class="sr-only"><?php echo $_smarty_tpl->tpl_vars['p']->value['Paid']['percentage'];?>
%</span>
                                            </span>
                    </div>
                    <div class="status">
                        <div class="status-title"> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Percentage'];?>
 </div>
                        <div class="status-number"> <?php echo $_smarty_tpl->tpl_vars['p']->value['Paid']['percentage'];?>
% </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="dashboard-stat2 ">
                <div class="display">
                    <div class="number">
                        <h3 class="font-red">
                            <span class="amount" data-a-sign="<?php echo $_smarty_tpl->tpl_vars['config']->value['currency_code'];?>
 "><?php echo $_smarty_tpl->tpl_vars['invoice_un_paid_amount']->value;?>
</span>
                        </h3>
                        <small><?php echo $_smarty_tpl->tpl_vars['_L']->value['Unpaid'];?>
</small>
                    </div>
                    <div class="icon">
                        <i class="fa fa-calendar-check-o"></i>
                    </div>
                </div>
                <div class="progress-info">
                    <div class="progress">
                                            <span style="width: <?php echo $_smarty_tpl->tpl_vars['p']->value['Unpaid']['percentage'];?>
%;" class="progress-bar progress-bar-primary bg-red">
                                                <span class="sr-only"><?php echo $_smarty_tpl->tpl_vars['p']->value['Unpaid']['percentage'];?>
%</span>
                                            </span>
                    </div>
                    <div class="status">
                        <div class="status-title"> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Percentage'];?>
 </div>
                        <div class="status-number"> <?php echo $_smarty_tpl->tpl_vars['p']->value['Unpaid']['percentage'];?>
% </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="dashboard-stat2 ">
                <div class="display">
                    <div class="number">
                        <h3 class="font-blue">
                            <span class="amount" data-a-sign="<?php echo $_smarty_tpl->tpl_vars['config']->value['currency_code'];?>
 "><?php echo $_smarty_tpl->tpl_vars['invoice_partially_paid_amount']->value;?>
</span>
                        </h3>
                        <small><?php echo $_smarty_tpl->tpl_vars['_L']->value['Partially Paid'];?>
</small>
                    </div>
                    <div class="icon">
                        <i class="fa fa-calendar-check-o"></i>
                    </div>
                </div>
                <div class="progress-info">
                    <div class="progress">
                                            <span style="width: <?php echo $_smarty_tpl->tpl_vars['p']->value['Partially Paid']['percentage'];?>
%;" class="progress-bar progress-bar-primary green-sharp">
                                                <span class="sr-only"><?php echo $_smarty_tpl->tpl_vars['p']->value['Partially Paid']['percentage'];?>
%</span>
                                            </span>
                    </div>
                    <div class="status">
                        <div class="status-title"> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Percentage'];?>
 </div>
                        <div class="status-number"> <?php echo $_smarty_tpl->tpl_vars['p']->value['Partially Paid']['percentage'];?>
% </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="dashboard-stat2 ">
                <div class="display">
                    <div class="number">
                        <h3 class="font-blue-hoki">
                            <span class="amount" data-a-sign="<?php echo $_smarty_tpl->tpl_vars['config']->value['currency_code'];?>
 "><?php echo $_smarty_tpl->tpl_vars['invoice_cancelled_amount']->value;?>
</span>
                        </h3>
                        <small><?php echo $_smarty_tpl->tpl_vars['_L']->value['Cancelled'];?>
</small>
                    </div>
                    <div class="icon">
                        <i class="fa fa-calendar-check-o"></i>
                    </div>
                </div>
                <div class="progress-info">
                    <div class="progress">
                                            <span style="width: <?php echo $_smarty_tpl->tpl_vars['p']->value['Cancelled']['percentage'];?>
%;" class="progress-bar progress-bar-primary bg-blue-hoki">
                                                <span class="sr-only"><?php echo $_smarty_tpl->tpl_vars['p']->value['Cancelled']['percentage'];?>
%</span>
                                            </span>
                    </div>
                    <div class="status">
                        <div class="status-title"> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Percentage'];?>
 </div>
                        <div class="status-number"> <?php echo $_smarty_tpl->tpl_vars['p']->value['Cancelled']['percentage'];?>
% </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                                                                                                            
                    <?php echo $_smarty_tpl->tpl_vars['_L']->value['Invoices'];?>



                    <div class="ibox-tools">
                                                                                                                                                                                <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
invoices/add/" class="btn btn-primary btn-xs"><i class="fa fa-plus"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Add Invoice'];?>
</a>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
reports/invoices/" class="btn btn-primary btn-xs"><i class="fa fa-bar-chart"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['View Reports'];?>
</a>

                    </div>
                </div>
                <div class="ibox-content">




                    <?php if ($_smarty_tpl->tpl_vars['view_type']->value == 'filter') {?>
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
                    <?php }?>

                    <table class="table table-bordered table-hover sys_table footable" <?php if ($_smarty_tpl->tpl_vars['view_type']->value == 'filter') {?> data-filter="#foo_filter" data-page-size="50" <?php }?>>
                        <thead>
                        <tr>
                            <th>#</th>
                            <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Account'];?>
</th>
                            <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Amount'];?>
</th>
                            <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Invoice Date'];?>
</th>
                            <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Due Date'];?>
</th>
                            <th>
                                <?php echo $_smarty_tpl->tpl_vars['_L']->value['Status'];?>

                            </th>
                            <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Type'];?>
</th>
                            <th class="text-right" width="140px;"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Manage'];?>
</th>
                        </tr>
                        </thead>
                        <tbody>

                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['d']->value, 'ds');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['ds']->value) {
?>
                            <tr>
                                <td  data-value="<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
"><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
invoices/view/<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
/"><?php echo $_smarty_tpl->tpl_vars['ds']->value['invoicenum'];
if ($_smarty_tpl->tpl_vars['ds']->value['cn'] != '') {?> <?php echo $_smarty_tpl->tpl_vars['ds']->value['cn'];?>
 <?php } else { ?> <?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
 <?php }?></a> </td>
                                <td>
                                    <?php if (isset($_smarty_tpl->tpl_vars['contacts']->value[$_smarty_tpl->tpl_vars['ds']->value['userid']])) {?>
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
contacts/view/<?php echo $_smarty_tpl->tpl_vars['ds']->value['userid'];?>
/">
                                            <?php echo $_smarty_tpl->tpl_vars['ds']->value['account'];?>

                                            <?php if ($_smarty_tpl->tpl_vars['contacts']->value[$_smarty_tpl->tpl_vars['ds']->value['userid']]->company != '') {?>
                                              <br>  <?php echo $_smarty_tpl->tpl_vars['contacts']->value[$_smarty_tpl->tpl_vars['ds']->value['userid']]->company;?>

                                            <?php }?>

                                        </a>
                                    <?php }?>
                                </td>
                                <td><?php echo formatCurrency($_smarty_tpl->tpl_vars['ds']->value['total'],$_smarty_tpl->tpl_vars['ds']->value['currency_iso_code']);?>
</td>
                                <td data-value="<?php echo strtotime($_smarty_tpl->tpl_vars['ds']->value['date']);?>
"><?php echo date($_smarty_tpl->tpl_vars['config']->value['df'],strtotime($_smarty_tpl->tpl_vars['ds']->value['date']));?>
</td>
                                <td data-value="<?php echo strtotime($_smarty_tpl->tpl_vars['ds']->value['duedate']);?>
"><?php echo date($_smarty_tpl->tpl_vars['config']->value['df'],strtotime($_smarty_tpl->tpl_vars['ds']->value['duedate']));?>
</td>
                                <td>

                                    <?php if ($_smarty_tpl->tpl_vars['ds']->value['status'] == 'Unpaid') {?>
                                        <span class="label label-danger"><?php echo ib_lan_get_line($_smarty_tpl->tpl_vars['ds']->value['status']);?>
</span>
                                    <?php } elseif ($_smarty_tpl->tpl_vars['ds']->value['status'] == 'Paid') {?>
                                        <span class="label label-success"><?php echo ib_lan_get_line($_smarty_tpl->tpl_vars['ds']->value['status']);?>
</span>
                                    <?php } elseif ($_smarty_tpl->tpl_vars['ds']->value['status'] == 'Partially Paid') {?>
                                        <span class="label label-info"><?php echo ib_lan_get_line($_smarty_tpl->tpl_vars['ds']->value['status']);?>
</span>
                                    <?php } elseif ($_smarty_tpl->tpl_vars['ds']->value['status'] == 'Cancelled') {?>
                                        <span class="label"><?php echo ib_lan_get_line($_smarty_tpl->tpl_vars['ds']->value['status']);?>
</span>
                                    <?php } else { ?>
                                        <?php echo ib_lan_get_line($_smarty_tpl->tpl_vars['ds']->value['status']);?>

                                    <?php }?>



                                </td>
                                <td>
                                    <?php if ($_smarty_tpl->tpl_vars['ds']->value['r'] == '0') {?>
                                        <span class="label label-default"><i class="fa fa-dot-circle-o"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Onetime'];?>
</span>
                                    <?php } else { ?>
                                        <span class="label label-default"><i class="fa fa-repeat"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Recurring'];?>
</span>
                                    <?php }?>
                                </td>
                                <td class="text-right">

                                                                                                            
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
invoices/view/<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
/" class="btn btn-primary btn-xs" data-toggle="tooltip" data-placement="top" title="<?php echo $_smarty_tpl->tpl_vars['_L']->value['View'];?>
"><i class="fa fa-file-text-o"></i></a>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
invoices/clone/<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
/" class="btn btn-success btn-xs" data-toggle="tooltip" data-placement="top" title="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Clone'];?>
"><i class="fa fa-files-o"></i></a>


                                    <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
invoices/edit/<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
/" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Edit'];?>
"><i class="fa fa-pencil"></i></a>

                                    <?php if ($_smarty_tpl->tpl_vars['ds']->value['r'] != '0') {?>

                                        <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
invoices/stop_recurring/<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
/" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Stop Recurring'];?>
"><i class="fa fa-stop-circle-o"></i></a>

                                    <?php }?>

                                    <a href="#" class="btn btn-danger btn-xs cdelete" id="iid<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
" data-toggle="tooltip" data-placement="top" title="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Delete'];?>
"><i class="fa fa-trash"></i></a>


                                </td>
                            </tr>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                        </tbody>

                        <?php if ($_smarty_tpl->tpl_vars['view_type']->value == 'filter') {?>
                            <tfoot>
                            <tr>
                                <td colspan="8">
                                    <ul class="pagination">
                                    </ul>
                                </td>
                            </tr>
                            </tfoot>
                        <?php }?>

                    </table>
                    <?php echo $_smarty_tpl->tpl_vars['paginator']->value['contents'];?>

                </div>
            </div>
        </div>
    </div>
<?php
}
}
/* {/block "content"} */
}
