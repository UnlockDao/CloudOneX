<?php
/* Smarty version 3.1.33, created on 2019-09-20 05:43:55
  from '/Users/razib/Documents/valet/suite/ui/theme/default/dashboard_canvas.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d849f5ba3d4e6_19783589',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '371d4a553ba094e832a8873b6374a2622814f8de' => 
    array (
      0 => '/Users/razib/Documents/valet/suite/ui/theme/default/dashboard_canvas.tpl',
      1 => 1568891103,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d849f5ba3d4e6_19783589 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20775453245d849f5b9f9438_00519923', "style");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11856487485d849f5b9fa567_71077102', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20401547075d849f5ba2b0a8_10128319', 'script');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "style"} */
class Block_20775453245d849f5b9f9438_00519923 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'style' => 
  array (
    0 => 'Block_20775453245d849f5b9f9438_00519923',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
ui/lib/fc/fc.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
ui/lib/fc/fc_ibilling.css" />
<?php
}
}
/* {/block "style"} */
/* {block "content"} */
class Block_11856487485d849f5b9fa567_71077102 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_11856487485d849f5b9fa567_71077102',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>



    <div class="row">
        <div class="col-md-12">
            <h3 class="ibilling-page-header"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Dashboard'];?>
</h3>
        </div>
    </div>



    <div class="row">

        

        <div class="col-md-12">
            <div class="ibox float-e-margins">

                <div class="ibox-content">
                    <div class="row" id="d_ajax_summary">

                        <div class="col-md-4"><div class="chart-statistic-box">
                                <div class="chart-txt">
                                    <div class="chart-txt-top">

                                        <?php if ($_smarty_tpl->tpl_vars['all_data_access']->value) {?>
                                            <p><span class="amount number"><?php echo $_smarty_tpl->tpl_vars['net_worth']->value;?>
</span></p>
                                            <hr>
                                            <p class="caption"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Net Worth'];?>
</p>
                                        <?php } else { ?>
                                            <p><span class="amount number"><?php echo $_smarty_tpl->tpl_vars['total_invoice_paid']->value;?>
</span></p>
                                            <hr>
                                            <p class="caption"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Total Invoice Paid'];?>
</p>
                                        <?php }?>

                                    </div>
                                    <table class="tbl-data">
                                        <tr>
                                            <td class="amount"><?php echo $_smarty_tpl->tpl_vars['ti']->value;?>
</td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['_L']->value['Income Today'];?>
</td>
                                        </tr>
                                        <tr>
                                            <td class="amount"><?php echo $_smarty_tpl->tpl_vars['te']->value;?>
</td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['_L']->value['Expense Today'];?>
</td>
                                        </tr>
                                        <tr>
                                            <td class="amount"><?php echo $_smarty_tpl->tpl_vars['mi']->value;?>
</td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['_L']->value['Income This Month'];?>
</td>
                                        </tr>
                                        <tr>
                                            <td class="amount"><?php echo $_smarty_tpl->tpl_vars['me']->value;?>
</td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['_L']->value['Expense This Month'];?>
</td>
                                        </tr>
                                    </table>
                                </div>

                            </div></div>


                        <div class="col-md-8">


                            <div class="chart-container">
                                <div class="" style="height:350px" id="inc_vs_exp_t">
                                    <div class="md-preloader text-center"><svg xmlns="http://www.w3.org/2000/svg" version="1.1" height="32" width="32" viewbox="0 0 75 75"><circle cx="37.5" cy="37.5" r="33.5" stroke-width="6"/></svg></div>
                                </div>
                            </div>

                        </div>


                    </div>







                </div>
            </div>

        </div>



    </div>



    <div class="row">

        <?php if (isset($_smarty_tpl->tpl_vars['config']->value['dashboard_widgets_tickets']) && $_smarty_tpl->tpl_vars['config']->value['dashboard_widgets_tickets'] == 1) {?>

            <div class="col-md-12">

                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
tickets/admin/list"><h5><?php echo $_smarty_tpl->tpl_vars['_L']->value['Tickets'];?>
</h5></a>
                    </div>
                    <div class="ibox-content" id="tickets_widgets">




                    </div>
                </div>

            </div>

        <?php }?>


        <?php if (isset($_smarty_tpl->tpl_vars['config']->value['dashboard_widgets_tasks']) && $_smarty_tpl->tpl_vars['config']->value['dashboard_widgets_tasks'] == 1) {?>

            <div class="col-md-12">
                <div class="ibox ">
                    <div class="ibox-title">

                        <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
tasks"><h5><?php echo $_smarty_tpl->tpl_vars['_L']->value['Tasks'];?>
</h5></a>

                    </div>
                    <div class="ibox-content">
                        <ul class="todo-list m-t small-list">

                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tasks']->value, 'task');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['task']->value) {
?>
                                <li>
                                    <?php echo $_smarty_tpl->tpl_vars['task']->value->title;?>

                                    <small class="label label-primary"><i class="fa fa-clock-o"></i> <?php echo $_smarty_tpl->tpl_vars['task']->value->status;?>
</small>
                                    <br>
                                    <small><?php echo $_smarty_tpl->tpl_vars['_L']->value['Created'];?>
: <span class="mmnt"><?php ob_start();
echo $_smarty_tpl->tpl_vars['task']->value->created_at;
$_prefixVariable1 = ob_get_clean();
echo strtotime($_prefixVariable1);?>
</span></small> | <small><?php echo $_smarty_tpl->tpl_vars['_L']->value['Due Date'];?>
: <?php echo date($_smarty_tpl->tpl_vars['config']->value['df'],strtotime($_smarty_tpl->tpl_vars['task']->value->due_date));?>
</small>
                                </li>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                        </ul>
                    </div>
                </div>
            </div>

        <?php }?>



    </div>




    <div class="row">



        <?php if ($_smarty_tpl->tpl_vars['all_data_access']->value) {?>

            <div class="col-md-6">

                <div class="panel">
                    <div class="panel-body">
                        <div id="expense_pie_graph" style="height: 360px;">

                        </div>
                    </div>
                </div>

            </div>


            <div class="col-md-6">

                <div class="row">

                    <div class="col-md-6">
                        <a class="dashboard-stat blue" href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
transactions/deposit/">
                            <div class="visual">
                                <i class="fa fa-calculator"></i>
                            </div>
                            <div class="details">
                                <div class="number">
                                    <span><?php echo formatCurrency($_smarty_tpl->tpl_vars['total_income']->value,$_smarty_tpl->tpl_vars['config']->value['home_currency']);?>
</span>
                                </div>
                                <div class="desc text-right"> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Total Income'];?>
 </div>
                            </div>
                        </a>

                    </div>
                    <div class="col-md-6">
                        <a class="dashboard-stat red" href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
transactions/expense/">
                            <div class="visual">
                                <i class="fa fa-cubes"></i>
                            </div>
                            <div class="details">
                                <div class="number">
                                    <span class="amount"><?php echo formatCurrency($_smarty_tpl->tpl_vars['total_expense']->value,$_smarty_tpl->tpl_vars['config']->value['home_currency']);?>
</span>
                                </div>
                                <div class="desc text-right"> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Total Expense'];?>
 </div>
                            </div>
                        </a>
                    </div>

                </div>


                <div class="row">
                    <div class="col-md-6">
                        <?php if ($_smarty_tpl->tpl_vars['config']->value['invoicing']) {?>

                            <a class="dashboard-stat green" href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
invoices/list/">
                                <div class="visual">
                                    <i class="icon-credit-card-1"></i>
                                </div>
                                <div class="details">
                                    <div class="number">
                                        <span class="amount"><?php echo formatCurrency($_smarty_tpl->tpl_vars['total_invoice_paid']->value,$_smarty_tpl->tpl_vars['config']->value['home_currency']);?>
</span>
                                    </div>
                                    <div class="desc text-right"> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Total Invoice Paid'];?>
 </div>
                                </div>
                            </a>

                        <?php }?>
                    </div>
                    <div class="col-md-6">
                        <a class="dashboard-stat green" href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
contacts/list/">
                            <div class="visual">
                                <i class="icon-users"></i>
                            </div>
                            <div class="details">
                                <div class="number">
                                    <span><?php echo $_smarty_tpl->tpl_vars['customers_total']->value;?>
</span>
                                </div>
                                <div class="desc text-right"> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Customers'];?>
 </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <?php if ($_smarty_tpl->tpl_vars['config']->value['companies']) {?>

                            <a class="dashboard-stat purple" href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
contacts/companies/">
                                <div class="visual">
                                    <i class="fa fa-building-o"></i>
                                </div>
                                <div class="details">
                                    <div class="number">
                                        <span><?php echo $_smarty_tpl->tpl_vars['companies_total']->value;?>
</span>
                                    </div>
                                    <div class="desc text-right"> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Companies'];?>
 </div>
                                </div>
                            </a>

                        <?php }?>
                    </div>
                    <div class="col-md-6">

                        <?php if ($_smarty_tpl->tpl_vars['config']->value['leads']) {?>
                            <a class="dashboard-stat blue" href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
leads/">
                                <div class="visual">
                                    <i class="fa fa-globe"></i>
                                </div>
                                <div class="details">
                                    <div class="number">
                                        <span><?php echo $_smarty_tpl->tpl_vars['leads_total']->value;?>
</span>
                                    </div>
                                    <div class="desc text-right"> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Leads'];?>
 </div>
                                </div>
                            </a>
                        <?php }?>

                    </div>
                </div>




            </div>

        <?php } else { ?>




            <div class="col-md-4">

                <a class="dashboard-stat blue" href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
transactions/deposit/">
                    <div class="visual">
                        <i class="fa fa-calculator"></i>
                    </div>
                    <div class="details">
                        <div class="number">
                            <span class="amount"><?php echo $_smarty_tpl->tpl_vars['total_income']->value;?>
</span>
                        </div>
                        <div class="desc text-right"> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Total Income'];?>
 </div>
                    </div>
                </a>

                <a class="dashboard-stat red" href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
transactions/expense/">
                    <div class="visual">
                        <i class="fa fa-cubes"></i>
                    </div>
                    <div class="details">
                        <div class="number">
                            <span class="amount"><?php echo $_smarty_tpl->tpl_vars['total_expense']->value;?>
</span>
                        </div>
                        <div class="desc text-right"> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Total Expense'];?>
 </div>
                    </div>
                </a>




            </div>

            <div class="col-md-4">

                <a class="dashboard-stat green" href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
contacts/list/">
                    <div class="visual">
                        <i class="icon-users"></i>
                    </div>
                    <div class="details">
                        <div class="number">
                            <span><?php echo $_smarty_tpl->tpl_vars['customers_total']->value;?>
</span>
                        </div>
                        <div class="desc text-right"> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Customers'];?>
 </div>
                    </div>
                </a>

                <?php if ($_smarty_tpl->tpl_vars['config']->value['companies']) {?>

                    <a class="dashboard-stat purple" href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
contacts/companies/">
                        <div class="visual">
                            <i class="fa fa-building-o"></i>
                        </div>
                        <div class="details">
                            <div class="number">
                                <span><?php echo $_smarty_tpl->tpl_vars['companies_total']->value;?>
</span>
                            </div>
                            <div class="desc text-right"> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Companies'];?>
 </div>
                        </div>
                    </a>

                <?php }?>






            </div>

            <div class="col-md-4">
                <?php if ($_smarty_tpl->tpl_vars['config']->value['invoicing']) {?>

                    <a class="dashboard-stat green" href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
invoices/list/">
                        <div class="visual">
                            <i class="icon-credit-card-1"></i>
                        </div>
                        <div class="details">
                            <div class="number">
                                <span class="amount"><?php echo $_smarty_tpl->tpl_vars['total_invoice_paid']->value;?>
</span>
                            </div>
                            <div class="desc text-right"> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Total Invoice Paid'];?>
 </div>
                        </div>
                    </a>

                <?php }?>

                <?php if ($_smarty_tpl->tpl_vars['config']->value['leads']) {?>
                    <a class="dashboard-stat blue" href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
leads/">
                        <div class="visual">
                            <i class="fa fa-globe"></i>
                        </div>
                        <div class="details">
                            <div class="number">
                                <span><?php echo $_smarty_tpl->tpl_vars['leads_total']->value;?>
</span>
                            </div>
                            <div class="desc text-right"> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Leads'];?>
 </div>
                        </div>
                    </a>
                <?php }?>


            </div>

        <?php }?>





    </div>


    <div class="row">



        <div class="col-md-12">
            <div class="ibox float-e-margins">

                <div class="ibox-content">



                    <div id="d_chart" style="height: 345px;">
                        <div class="md-preloader text-center"><svg xmlns="http://www.w3.org/2000/svg" version="1.1" height="32" width="32" viewbox="0 0 75 75"><circle cx="37.5" cy="37.5" r="33.5" stroke-width="6"/></svg></div>
                    </div>
                </div>
            </div>
        </div>



    </div>


    <?php if ($_smarty_tpl->tpl_vars['all_data_access']->value) {?>



        <div class="row" id="sort_2">
            <div class="col-md-6">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <a href="#" id="set_goal" class="btn btn-primary btn-xs pull-right"><i class="fa fa-bullseye"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Set Goal'];?>
</a>
                        <h5><?php echo $_smarty_tpl->tpl_vars['_L']->value['Net Worth n Account Balances'];?>
</h5>
                    </div>
                    <div class="ibox-content" style="min-height: 365px;">
                        <div>
                            <h3 class="text-center amount"><?php echo $_smarty_tpl->tpl_vars['net_worth']->value;?>
</h3>
                            <div>
                                <span class="amount"><?php echo $_smarty_tpl->tpl_vars['net_worth']->value;?>
</span> <?php echo $_smarty_tpl->tpl_vars['_L']->value['of'];?>
 <span class="amount"><?php echo $_smarty_tpl->tpl_vars['config']->value['networth_goal'];?>
</span>
                                <small class="pull-right"><span class="amount_no_currency"><?php echo $_smarty_tpl->tpl_vars['pg']->value;?>
</span>%</small>
                            </div>


                            <div class="progress progress-small">
                                <div style="width: <?php echo $_smarty_tpl->tpl_vars['pgb']->value;?>
%;" class="progress-bar progress-bar-<?php echo $_smarty_tpl->tpl_vars['pgc']->value;?>
"></div>
                            </div>
                        </div>



                        <table class="table table-striped table-bordered" style="margin-top: 26px;">
                            <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Account'];?>
</th>

                            <th class="text-right"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Balance'];?>
</th>



                                                                                                                                                                                                                                
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['balances']->value['banks'], 'bank');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['bank']->value) {
?>

                                <tr>
                                    <td><?php echo $_smarty_tpl->tpl_vars['bank']->value->account;?>
</td>

                                    <td class="text-right">
                                        <?php if ((isset($_smarty_tpl->tpl_vars['balances']->value['balances'][$_smarty_tpl->tpl_vars['bank']->value->id]))) {?>
                                            <?php echo formatCurrency($_smarty_tpl->tpl_vars['balances']->value['balances'][$_smarty_tpl->tpl_vars['bank']->value->id],$_smarty_tpl->tpl_vars['balances']->value['home_currency']->iso_code);?>

                                        <?php }?>
                                    </td>

                                </tr>

                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>



                        </table>


                    </div>
                </div>
            </div>


            <div class="col-md-6">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">

                        <h5><?php echo $_smarty_tpl->tpl_vars['_L']->value['Income vs Expense'];?>
 - <?php echo ib_lan_get_line(date('F'));?>
 <?php echo date('Y');?>
</h5>
                    </div>
                    <div class="ibox-content">
                        <div id="inc_exp_pie" style="height: 330px;">
                            <div class="md-preloader text-center"><svg xmlns="http://www.w3.org/2000/svg" version="1.1" height="32" width="32" viewbox="0 0 75 75"><circle cx="37.5" cy="37.5" r="33.5" stroke-width="6"/></svg></div>
                        </div>
                    </div>
                </div>

            </div>

        </div>





    <?php }?>





    <?php echo $_smarty_tpl->tpl_vars['sections']->value[1];?>





    <div class="row">

        <div class="<?php if ($_smarty_tpl->tpl_vars['config']->value['invoicing']) {?>col-sm-6 col-md-12 col-lg-4 <?php } else { ?> col-md-12 <?php }?>">

            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
calendar/events" class="btn btn-primary btn-xs pull-right"><i class="fa fa-calendar"></i> </a>
                    <h5><?php echo $_smarty_tpl->tpl_vars['_L']->value['Calendar'];?>
</h5>
                </div>
                <div class="ibox-content" style="min-height: 465px;" id="calendar_wrap">

                    <div id="calendar"></div>

                </div>
            </div>


        </div>

        <?php if ($_smarty_tpl->tpl_vars['config']->value['invoicing']) {?>
            <div class="col-sm-6 col-md-6 col-lg-8">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
invoices/list/" class="btn btn-primary btn-xs pull-right"><i class="fa fa-list"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Invoices'];?>
</a>
                        <h5><?php echo $_smarty_tpl->tpl_vars['_L']->value['Invoices'];?>
</h5>
                    </div>
                    <div class="ibox-content">

                        <div id="invoice_stats" style="display: none;">

                        </div>

                        <div class="row">

                            <div class="col-md-6">
                                <h4><?php echo $_smarty_tpl->tpl_vars['_L']->value['Weekly Statistics'];?>
</h4>
                                <hr>
                                <p> <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
invoices/list/all/weekly/"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Total Invoice Generated'];?>
: <span class="amount"><?php echo $_smarty_tpl->tpl_vars['weekly_total_invoice_amount']->value;?>
</span> </a> </p>
                                <p> <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
invoices/list/paid/weekly/"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Total Paid'];?>
: <span class="amount"><?php echo $_smarty_tpl->tpl_vars['weekly_total_invoice_paid']->value;?>
</span> </a> </p>
                                <p> <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
invoices/list/due/weekly/"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Total Due'];?>
: <span class="amount"><?php echo $_smarty_tpl->tpl_vars['weekly_total_invoice_due']->value;?>
</span> </a> </p>

                            </div>

                            <div class="col-md-6">

                                <h4><?php echo $_smarty_tpl->tpl_vars['_L']->value['Monthly Statistics'];?>
</h4>

                                <hr>

                                <p> <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
invoices/list/all/monthly/"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Total Invoice Generated'];?>
: <span class="amount"><?php echo $_smarty_tpl->tpl_vars['monthly_total_invoice_amount']->value;?>
</span> </a> </p>
                                <p> <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
invoices/list/paid/monthly/"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Total Paid'];?>
: <span class="amount"><?php echo $_smarty_tpl->tpl_vars['monthly_total_invoice_paid']->value;?>
</span> </a> </p>
                                <p> <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
invoices/list/due/monthly/"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Total Due'];?>
: <span class="amount"><?php echo $_smarty_tpl->tpl_vars['monthly_total_invoice_due']->value;?>
</span> </a> </p>

                            </div>


                        </div>

                        <hr>

                        <h4><?php echo $_smarty_tpl->tpl_vars['_L']->value['Recent Invoices'];?>
</h4>
                        <table class="table table-bordered table-hover">
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
                                <th width="110px;"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Status'];?>
</th>


                            </tr>
                            </thead>
                            <tbody>

                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['invoices']->value, 'ds');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['ds']->value) {
?>
                                <tr>
                                    <td><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
invoices/view/<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
/"><?php echo $_smarty_tpl->tpl_vars['ds']->value['invoicenum'];
if ($_smarty_tpl->tpl_vars['ds']->value['cn'] != '') {?> <?php echo $_smarty_tpl->tpl_vars['ds']->value['cn'];?>
 <?php } else { ?> <?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
 <?php }?></a> </td>
                                    <td><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
contacts/view/<?php echo $_smarty_tpl->tpl_vars['ds']->value['userid'];?>
/"><?php echo $_smarty_tpl->tpl_vars['ds']->value['account'];?>
</a> </td>
                                    <td class="amount"><?php echo $_smarty_tpl->tpl_vars['ds']->value['total'];?>
</td>
                                    <td><?php echo date($_smarty_tpl->tpl_vars['config']->value['df'],strtotime($_smarty_tpl->tpl_vars['ds']->value['date']));?>
</td>
                                    <td><?php echo date($_smarty_tpl->tpl_vars['config']->value['df'],strtotime($_smarty_tpl->tpl_vars['ds']->value['duedate']));?>
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
        <?php }?>


    </div>

    <?php if ($_smarty_tpl->tpl_vars['config']->value['invoicing'] && $_smarty_tpl->tpl_vars['all_data_access']->value) {?>


        <div class="row">

            <div class="col-sm-6 col-md-6 col-lg-6">

                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5><?php echo $_smarty_tpl->tpl_vars['_L']->value['Sales'];?>
</h5>
                    </div>
                    <div class="ibox-content" id="sales_pie_graph_wrap">

                        <div id="sales_pie_graph" style="min-height: 300px;"></div>

                    </div>
                </div>


            </div>

            <div class="col-sm-6 col-md-6 col-lg-6">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
invoices/list/" class="btn btn-primary btn-xs pull-right"><i class="fa fa-list"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Invoices'];?>
</a>
                        <h5><?php echo $_smarty_tpl->tpl_vars['_L']->value['Item'];?>
</h5>
                    </div>
                    <div class="ibox-content">


                        <h4><?php echo $_smarty_tpl->tpl_vars['_L']->value['Sales'];?>
</h4>
                        <table class="table table-bordered table-hover">
                            <thead>
                            <tr>

                                <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Name'];?>
</th>
                                <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Sales Count'];?>
</th>
                                <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Amount'];?>
</th>


                            </tr>
                            </thead>
                            <tbody>

                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['item_sold']->value, 'sold');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['sold']->value) {
?>
                                <tr>

                                    <td>
                                        <?php echo strTrunc($_smarty_tpl->tpl_vars['sold']->value['name'],30);?>

                                    </td>
                                    <td><?php echo floor($_smarty_tpl->tpl_vars['sold']->value['sold_count']);?>
</td>
                                    <td class="amount"><?php echo $_smarty_tpl->tpl_vars['sold']->value['total_amount'];?>
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

    <?php }?>


    <div class="row">
        <div class="col-md-6">
            <div class="ibox float-e-margins">
                <div class="ibox-title">

                    <h5><?php echo $_smarty_tpl->tpl_vars['_L']->value['Latest Income'];?>
</h5>
                </div>
                <div class="ibox-content">
                    <table class="table table-striped table-bordered">
                        <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Date'];?>
</th>
                        <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Description'];?>
</th>
                        <th class="text-right"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Amount'];?>
</th>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['inc']->value, 'incs');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['incs']->value) {
?>
                            <tr>
                                <td><?php echo date($_smarty_tpl->tpl_vars['config']->value['df'],strtotime($_smarty_tpl->tpl_vars['incs']->value['date']));?>
</td>
                                <td><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
transactions/manage/<?php echo $_smarty_tpl->tpl_vars['incs']->value['id'];?>
/"><?php echo $_smarty_tpl->tpl_vars['incs']->value['description'];?>
</a> </td>
                                <td class="text-right amount"><?php echo $_smarty_tpl->tpl_vars['incs']->value['amount'];?>
</td>
                            </tr>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>



                    </table>
                </div>
            </div>

        </div>


        <div class="col-md-6">


            <div class="ibox float-e-margins">
                <div class="ibox-title">

                    <h5><?php echo $_smarty_tpl->tpl_vars['_L']->value['Latest Expense'];?>
</h5>
                </div>
                <div class="ibox-content">
                    <table class="table table-striped table-bordered">
                        <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Date'];?>
</th>
                        <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Description'];?>
</th>
                        <th class="text-right"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Amount'];?>
</th>

                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['exp']->value, 'exps');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['exps']->value) {
?>
                            <tr>
                                <td><?php echo date($_smarty_tpl->tpl_vars['config']->value['df'],strtotime($_smarty_tpl->tpl_vars['exps']->value['date']));?>
</td>
                                <td><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
transactions/manage/<?php echo $_smarty_tpl->tpl_vars['exps']->value['id'];?>
/"><?php echo $_smarty_tpl->tpl_vars['exps']->value['description'];?>
</a> </td>
                                <td class="text-right amount"><?php echo $_smarty_tpl->tpl_vars['exps']->value['amount'];?>
</td>
                            </tr>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>



                    </table>
                </div>
            </div>

        </div>


    </div>

<?php
}
}
/* {/block "content"} */
/* {block 'script'} */
class Block_20401547075d849f5ba2b0a8_10128319 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_20401547075d849f5ba2b0a8_10128319',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>



    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
ui/lib/chartjs.min.js?ver=<?php echo $_smarty_tpl->tpl_vars['file_build']->value;?>
"><?php echo '</script'; ?>
>


    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
ui/lib/fc/fc.js?ver=306"><?php echo '</script'; ?>
>

    <?php if ($_smarty_tpl->tpl_vars['config']->value['language'] != 'en') {?>
        <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
ui/lib/fc/lang/<?php echo getFCLocale($_smarty_tpl->tpl_vars['clx_language_code']->value);?>
.js"><?php echo '</script'; ?>
>
    <?php }?>


    <?php echo '<script'; ?>
>



        _L['Unpaid'] = '<?php echo $_smarty_tpl->tpl_vars['_L']->value['Unpaid'];?>
';
        _L['Paid'] = '<?php echo $_smarty_tpl->tpl_vars['_L']->value['Paid'];?>
';
        _L['Partially Paid'] = '<?php echo $_smarty_tpl->tpl_vars['_L']->value['Partially Paid'];?>
';
        _L['Maximum'] = '<?php echo $_smarty_tpl->tpl_vars['_L']->value['Maximum'];?>
';
        _L['Minimum'] = '<?php echo $_smarty_tpl->tpl_vars['_L']->value['Minimum'];?>
';



        $(function() {

            var _url = $("#_url").val();


            $('.amount').autoNumeric('init', {

                aSign: '<?php echo $_smarty_tpl->tpl_vars['config']->value['currency_code'];?>
',
                dGroup: <?php echo $_smarty_tpl->tpl_vars['config']->value['thousand_separator_placement'];?>
,
                aPad: <?php echo $_smarty_tpl->tpl_vars['config']->value['currency_decimal_digits'];?>
,
                pSign: '<?php echo $_smarty_tpl->tpl_vars['config']->value['currency_symbol_position'];?>
',
                aDec: '<?php echo $_smarty_tpl->tpl_vars['config']->value['dec_point'];?>
',
                aSep: '<?php echo $_smarty_tpl->tpl_vars['config']->value['thousands_sep'];?>
',
                vMax: '9999999999999999.00',
                vMin: '-9999999999999999.00'

            });


            $('.amount_no_currency').autoNumeric('init', {

                aSign: '',
                dGroup: <?php echo $_smarty_tpl->tpl_vars['config']->value['thousand_separator_placement'];?>
,
                aPad: <?php echo $_smarty_tpl->tpl_vars['config']->value['currency_decimal_digits'];?>
,
                pSign: '<?php echo $_smarty_tpl->tpl_vars['config']->value['currency_symbol_position'];?>
',
                aDec: '<?php echo $_smarty_tpl->tpl_vars['config']->value['dec_point'];?>
',
                aSep: '<?php echo $_smarty_tpl->tpl_vars['config']->value['thousands_sep'];?>
',
                vMax: '9999999999999999.00',
                vMin: '-9999999999999999.00'

            });


            var $modal = $('#ajax-modal');

            $.fn.modal.defaults.width = '600px';

            $('#update_currency').on('click', function(e){

                e.preventDefault();

                $('body').modalmanager('loading');

                $modal.load(base_url + 'dashboard/update_currency', '', function(){
                    $modal.modal();
                });
            });

            $modal.on('click', '.update_currency_submit', function(){
                $modal.modal('loading');

                $.post( _url + "dashboard/update_currency_submit/", $("#ib_currency_update_form").serialize())
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





            $.getJSON( _url + "dashboard/json_income_vs_exp/", function( data ) {
                // console.log(data.Months);

                var  option = {

                    title : {
                        text: _L['Cash Flow'],
                        subtext: _L['Last 12 Months']
                    },
                    tooltip : {
                        trigger: 'axis'
                    },
                    legend: {
                        data:[_L['Income'],_L['Expense']]
                    },
                    toolbox: {
                        show : true,
                        feature : {
                            mark : { show: true },
                            dataView : { show: true, title : _L['Data View'],
                                readOnly: false,
                                lang: [_L['Data View'], _L['Cancel'], _L['Reset']] },
                            magicType : {
                                show: true,
                                title : {
                                    line : _L['Line'],
                                    bar : _L['Bar']
                                },
                                type: ['bar', 'line']
                            },
                            restore : { show: true, title : _L['Reset'] },
                            saveAsImage : { show: true, title : _L['Save as Image'],
                                type : 'png',
                                lang : [_L['Click to Save']] }
                        }
                    },
                    calculable : true,
                    xAxis : [
                        {
                            type : 'category',
                            data : data.Months,
                            axisLabel : {
                                rotate : 45,
                                interval : 0
                            }
                        }
                    ],
                    yAxis : [
                        {
                            type : 'value'
                        }
                    ],
                    series : [
                        {
                            name:_L['Income'],
                            type:'line',
                            data:data.Income,
                            color: [
                                ib_graph_primary_color
                            ],
                            itemStyle: {
                                normal: {
                                    barBorderRadius: 5,
                                    areaStyle: { type: 'default' }
                                },
                                emphasis: {
                                    barBorderRadius: 5,
                                    areaStyle: { type: 'default' }
                                }
                            },
                            markPoint : {
                                data : [
                                    { type : 'max', name: _L['Maximum'] },
                                    { type : 'min', name: _L['Minimum'] }
                                ],
                                label : {
                                    normal : {
                                        position : 'top',
                                        textStyle : {
                                            color : ib_graph_primary_color
                                        }
                                    }
                                }
                            },
                            markLine : {
                                data : [
                                    { type : 'average', name: _L['Average'] }
                                ]
                            }
                        },
                        {
                            name:_L['Expense'],
                            type:'line',
                            data:data.Expense,
                            color: [
                                ib_graph_secondary_color
                            ],
                            itemStyle: {
                                normal: {
                                    barBorderRadius: 5,
                                    areaStyle: { type: 'default' }
                                },
                                emphasis: {
                                    barBorderRadius: 5,
                                    areaStyle: { type: 'default' }
                                }
                            },
                            markPoint : {
                                data : [
                                    { type : 'max', name: _L['Maximum'] },
                                    { type : 'min', name: _L['Minimum'] }
                                ],
                                label : {
                                    normal : {
                                        position : 'top',
                                        textStyle : {
                                            color : ib_graph_secondary_color
                                        }
                                    }
                                }
                            },
                            markLine : {
                                data : [
                                    { type : 'average', name : _L['Average'] }
                                ]
                            }
                        }
                    ]
                };


                var chart = chartjs.init(document.getElementById('inc_vs_exp_t'));
                chart.setOption(option);


                $.getJSON( _url + "dashboard/json_d_inc_exp_month/", function( data ) {

                    var  c2_opt = {
                        tooltip : {
                            trigger: 'item',
                            formatter: "{a} <br/>{b} : {c} ({d}%)"
                        },
                        legend: {
                            orient : 'vertical',
                            x : 'left',
                            data:['Income','Expense']
                        },
                        toolbox: {
                            show : true,
                            feature : {
                                mark : { show: true },
                                dataView : { show: true, title : _L['Data View'],
                                    readOnly: false,
                                    lang: [_L['Data View'], _L['Cancel'], _L['Reset']] },
                                restore : { show: true, title : 'Reset' },
                                saveAsImage : { show: true, title : _L['Save as Image'],
                                    type : 'png',
                                    lang : [_L['Click to Save']] }
                            }
                        },
                        calculable : true,
                        series : [
                            {
                                name:_L['Income vs Expense'],
                                type:'pie',
                                radius : ['50%', '60%'],
                                color: [
                                    ib_graph_primary_color,ib_graph_secondary_color
                                ],

                                itemStyle : {
                                    normal : {
                                        label : {
                                            show : true
                                        },
                                        labelLine : {
                                            show : true
                                        }
                                    },
                                    emphasis : {
                                        label : {
                                            show : true,
                                            position : 'center',
                                            textStyle : {
                                                fontSize : '30',
                                                fontWeight : 'bold'
                                            }
                                        }
                                    }
                                },
                                data:[
                                    { value:data.Income, name:_L['Income'] },
                                    { value:data.Expense, name:_L['Expense'] }
                                ]
                            }
                        ]
                    };


                    if(document.getElementById('inc_exp_pie')) {
                        var c2 = chartjs.init(document.getElementById('inc_exp_pie'));
                        c2.setOption(c2_opt);

                    }


                    $.getJSON( _url + "dashboard/json_d_chart_data/", function( data ) {
                        // console.log(data.Months);

                        var c3_opt =  {
                            title : {
                                text: _L['Income n Expense'],
                                subtext: c_month + ' ' + c_year
                            },
                            tooltip : {
                                trigger: 'axis'
                            },
                            legend: {
                                data:[_L['Income'],_L['Expense']]
                            },
                            toolbox: {
                                show : true,
                                feature : {
                                    mark : { show: true },
                                    dataView : { show: true, readOnly: false, title : _L['Data View'],
                                        lang: [_L['Data View'], _L['Cancel'], _L['Reset']] },
                                    magicType : { show: true, title : {
                                            line : 'Line',
                                            bar : 'Bar',
                                            stack : 'Stack',
                                            tiled : 'Tiled',
                                            force: 'Force',
                                            chord: 'Chord',
                                            pie: 'Pie',
                                            funnel: 'Funnel'
                                        }, type: ['line', 'bar', 'stack', 'tiled']},
                                    restore : { show: true, title : 'Reset' },
                                    saveAsImage : { show: true, title : _L['Save as Image'],
                                        type : 'png',
                                        lang : [_L['Click to Save']]}
                                }
                            },
                            calculable : true,
                            xAxis : [
                                {
                                    type : 'category',
                                    boundaryGap : false,
                                    data : [
                                        '01',
                                        '02',
                                        '03',
                                        '04',
                                        '05',
                                        '06',
                                        '07',
                                        '08',
                                        '09',
                                        '10',
                                        '11',
                                        '12',
                                        '13',
                                        '14',
                                        '15',
                                        '16',
                                        '17',
                                        '18',
                                        '19',
                                        '20',
                                        '21',
                                        '22',
                                        '23',
                                        '24',
                                        '25',
                                        '26',
                                        '27',
                                        '28',
                                        '29',
                                        '30',
                                        '31'
                                    ]
                                }
                            ],
                            yAxis : [
                                {
                                    type : 'value'
                                }
                            ],
                            series : [
                                {
                                    name:_L['Income'],
                                    type:'bar',
                                    color: [
                                        ib_graph_primary_color
                                    ],
                                    smooth:true,
                                    itemStyle: {
                                        normal: {

                                            areaStyle: { type: 'default' }

                                        }
                                    },
                                    markPoint : {
                                        data : [
                                            { type : 'max', name: _L['Maximum'] }
                                        ],
                                        label : {
                                            normal : {
                                                position : 'top',
                                                textStyle : {
                                                    color : ib_graph_secondary_color
                                                }
                                            }
                                        }
                                    },
                                    markLine : {
                                        data : [
                                            { type : 'average', name : _L['Average'] }
                                        ]
                                    },
                                    data:data.Income
                                },
                                {
                                    name:_L['Expense'],
                                    type:'bar',
                                    color: [
                                        ib_graph_secondary_color
                                    ],
                                    smooth:true,
                                    itemStyle: {
                                        normal: {
                                            areaStyle: { type: 'default' }
                                        }
                                    },
                                    markPoint : {
                                        data : [
                                            { type : 'max', name: _L['Maximum'] }
                                        ],
                                        label : {
                                            normal : {
                                                position : 'top',
                                                textStyle : {
                                                    color : ib_graph_secondary_color
                                                }
                                            }
                                        }
                                    },
                                    markLine : {
                                        data : [
                                            { type : 'average', name : _L['Average'] }
                                        ]
                                    },

                                    data:data.Expense
                                }
                            ]
                        };


                        var c3_d = chartjs.init(document.getElementById('d_chart'));
                        c3_d.setOption(c3_opt);


                        // load invoice stats




                    });



                });



            });





            // if(typeof(load_modules) != "function"){
            //     var this_body = $('body');
            //     this_body.html('');
            // }

            var invoice_stats = $("#invoice_stats");

            $.get( _url + "dashboard/invoice_stats_json/", function( data ) {

                invoice_stats.html(' <span class="font-12 head-font txt-dark">'+_L['Unpaid']+'<span class="pull-right">'+ data.Unpaid.percentage +'%</span></span>\
                        <div class="progress progress-small mt-10">\
                        <div class="progress-bar progress-bar-danger" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: '+ data.Unpaid.percentage +'%" role="progressbar"> <span class="sr-only">'+ data.Unpaid.percentage +'%</span> </div>\
                        </div>\
                        <span class="font-12 head-font txt-dark">'+_L['Partially Paid']+'<span class="pull-right">'+ data['Partially Paid'].percentage +'%</span></span>\
                        <div class="progress progress-small mt-10">\
                        <div class="progress-bar progress-bar-inverse" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: '+ data['Partially Paid'].percentage +'%" role="progressbar"> <span class="sr-only">'+ data['Partially Paid'].percentage +'</span> </div>\
                        </div>\
                        <span class="font-12 head-font txt-dark">'+_L['Paid']+'<span class="pull-right">'+ data.Paid.percentage +'%</span></span>\
                        <div class="progress progress-small mt-10">\
                        <div class="progress-bar progress-bar-success" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: '+ data.Paid.percentage +'%" role="progressbar"> <span class="sr-only">'+ data.Paid.percentage +'</span> </div>\
                        </div>\
                        ');
                invoice_stats.slideDown( "slow" );

                // Load Account Balances



            });




            var $calendar_wrap = $("#calendar_wrap");
            var ib_calendar_options = {
                customButtons: {},
                header: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'month,agendaWeek,agendaDay,viewFullCalendar'
                },
                loading: function(isLoading, view) {
                    if (isLoading) {
                        $calendar_wrap.block({ message: block_msg });
                    } else {
                        $calendar_wrap.unblock();
                        $('[data-toggle="tooltip"]').tooltip();
                    }
                },
                editable: false,
                eventLimit: 3,
                isRTL: ib_rtl,
                eventSources: [{
                    url: _url + 'calendar/data/',
                    type: 'GET',
                    error: function() {
                        bootbox.alert("Unable to load data.");
                    }
                } ],
                eventRender: function(event, element) {
                    element.attr('title', event._tooltip);
                    element.attr('data-toggle', 'tooltip');
                },
                eventStartEditable: false,
                firstDay: parseInt(ib_calendar_first_day),
                lang: '<?php echo getFCLocale($_smarty_tpl->tpl_vars['clx_language_code']->value);?>
'
            };


            // $('.panel').lobiPanel({
            // });


            $('#calendar').fullCalendar(ib_calendar_options);


            $( ".mmnt" ).each(function() {
                var ut = $( this ).html();
                $( this ).html(moment.unix(ut).fromNow());
            });


            var expense_graph_dom = document.getElementById("expense_pie_graph");

            if(expense_graph_dom)
            {
                var expensePieChart;
                expensePieChart = chartjs.init(expense_graph_dom);
                var opt_expense_cat =  {
                    title : {
                        text: '<?php echo $_smarty_tpl->tpl_vars['_L']->value['Expense'];?>
',
                        subtext: '<?php echo $_smarty_tpl->tpl_vars['_L']->value['Expense by Category'];?>
',
                        x:'center'
                    },
                    tooltip : {
                        trigger: 'item',
                        formatter: "{a} <br/>{b} : {c} ({d}%)"
                    },


                    series : [
                        {
                            name: 'Expense',
                            type: 'pie',
                            radius : '55%',
                            center: ['50%', '60%'],
                            color: [
                                '#2196f3',
                                '#46BE8A',
                                '#8E44AD',
                                '#FFCC29',
                                '#F37070'
                            ],
                            data:[

                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['expense_cats']->value, 'expnese_cat');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['expnese_cat']->value) {
?>
                                { value:<?php echo $_smarty_tpl->tpl_vars['expnese_cat']->value->total_amount;?>
, name:'<?php echo $_smarty_tpl->tpl_vars['expnese_cat']->value->name;?>
' },
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            ],
                            itemStyle: {
                                emphasis: {
                                    shadowBlur: 10,
                                    shadowOffsetX: 0,
                                    shadowColor: 'rgba(33,150,243, 0.5)'
                                }
                            }
                        }
                    ]
                };


                expensePieChart.setOption(opt_expense_cat, true);
            }



            if(document.getElementById("sales_pie_graph"))
            {
                var sales_graph_dom = document.getElementById("sales_pie_graph");

                var salesPieChart;
                salesPieChart = chartjs.init(sales_graph_dom);
                var opt_sales_pie_chart =  {
                    title : {
                        text: '<?php echo $_smarty_tpl->tpl_vars['_L']->value['Sales'];?>
',
                        subtext: '<?php echo $_smarty_tpl->tpl_vars['_L']->value['Item'];?>
',
                        x:'center'
                    },
                    tooltip : {
                        trigger: 'item',
                        formatter: "{a} <br/>{b} : {c} ({d}%)"
                    },
                    legend: {
                        orient: 'vertical',
                        left: 'left',
                        data: [

                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['item_sold']->value, 'sold');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['sold']->value) {
?>
                            '<?php echo strTrunc(addslashes($_smarty_tpl->tpl_vars['sold']->value['name']),30);?>
',
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        ]
                    },

                    series : [
                        {
                            name: '<?php echo $_smarty_tpl->tpl_vars['_L']->value['Sales'];?>
',
                            type: 'pie',
                            radius : '55%',
                            center: ['50%', '60%'],
                            color: [
                                '#2196f3',
                                '#46BE8A',
                                '#8E44AD',
                                '#FFCC29',
                                '#F37070'
                            ],
                            data:[

                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['item_sold']->value, 'sold');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['sold']->value) {
?>
                                { value:<?php echo $_smarty_tpl->tpl_vars['sold']->value['sold_count'];?>
, name:'<?php echo strTrunc(addslashes($_smarty_tpl->tpl_vars['sold']->value['name']),30);?>
' },
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            ],
                            itemStyle: {
                                emphasis: {
                                    shadowBlur: 10,
                                    shadowOffsetX: 0,
                                    shadowColor: 'rgba(33,150,243, 0.5)'
                                }
                            }
                        }
                    ]
                };


                salesPieChart.setOption(opt_sales_pie_chart, true);
            }





            function getTicketsWidget() {
                if(document.getElementById('tickets_widgets'))
                {
                    var $tickets_widgets = $('#tickets_widgets');
                    $.get( base_url + "dashboard/tickets", function( data ) {
                        $tickets_widgets.html(data);
                        $( ".mmnt" ).each(function() {
                            var ut = $( this ).html();
                            $( this ).html(moment.unix(ut).fromNow());
                        });
                    });
                }
            }

            getTicketsWidget();

            <?php if (isset($_smarty_tpl->tpl_vars['config']->value['refresh_widget_every'])) {?>
            setInterval(getTicketsWidget,<?php echo $_smarty_tpl->tpl_vars['config']->value['refresh_widget_every'];?>
);
            <?php }?>




        });






    <?php echo '</script'; ?>
>


<?php
}
}
/* {/block 'script'} */
}
