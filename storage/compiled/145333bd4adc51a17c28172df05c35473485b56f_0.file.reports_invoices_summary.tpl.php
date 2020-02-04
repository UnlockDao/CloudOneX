<?php
/* Smarty version 3.1.33, created on 2019-12-01 16:22:30
  from '/Users/razib/Documents/valet/business-suite/ui/theme/default/reports_invoices_summary.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5de42f16bbec96_12703245',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '145333bd4adc51a17c28172df05c35473485b56f' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/default/reports_invoices_summary.tpl',
      1 => 1575235348,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5de42f16bbec96_12703245 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4367039605de42f16bb6942_38074943', "content");
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2365263125de42f16bbafa6_35111373', "script");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "content"} */
class Block_4367039605de42f16bb6942_38074943 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_4367039605de42f16bb6942_38074943',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>



    <div class="row">
        <div class="col-md-12">
            <h3 class="ibilling-page-header"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Invoices'];?>
</h3>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="tabs-container">
                <ul class="nav nav-tabs">
                    <li><a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
reports/invoices"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Invoices'];?>
</a></li>
                    <li class="active"><a class="nav-link active show" href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
reports/invoices_summary"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Summary'];?>
</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active show">
                        <div class="panel-body panel-body-with-border">

                            <h3><?php echo $_smarty_tpl->tpl_vars['_L']->value['Invoices'];?>
 - <?php echo $_smarty_tpl->tpl_vars['_L']->value['Paid'];?>
 [ <?php echo $_smarty_tpl->tpl_vars['_L']->value['Last 12 Months'];?>
 ]</h3>

                            <div class="row">
                                <div class="col-md-9">
                                    <div class="container_sales_chart" id="container_sales_chart" style="min-height: 450px;"></div>
                                </div>
                                <div class="col-md-3">
                                    <a class="dashboard-stat green" href="javascript:void(0);">
                                        <div class="visual">
                                            <i class="icon-credit-card-1"></i>
                                        </div>
                                        <div class="details">
                                            <div class="number">
                                                <span class="amount"><?php echo $_smarty_tpl->tpl_vars['total_invoice']->value;?>
</span>
                                            </div>
                                            <div class="desc text-right"> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Total Invoice'];?>
 </div>
                                        </div>
                                    </a>

                                    <?php if ($_smarty_tpl->tpl_vars['all_data']->value) {?>
                                        <a class="dashboard-stat purple" href="javascript:void(0);">
                                            <div class="visual">
                                                <i class="fa fa-cubes"></i>
                                            </div>
                                            <div class="details">
                                                <div class="number">
                                                    <span class="amount"><?php echo $_smarty_tpl->tpl_vars['total_invoice_items']->value;?>
</span>
                                                </div>
                                                <div class="desc text-right"> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Sales Count'];?>
 </div>
                                            </div>
                                        </a>
                                    <?php }?>

                                    <a class="dashboard-stat blue" href="javascript:void(0);">
                                        <div class="visual">
                                            <i class="fa fa-calculator"></i>
                                        </div>
                                        <div class="details">
                                            <div class="number">
                                                <span class="amount"><?php echo $_smarty_tpl->tpl_vars['total_invoice_amount']->value;?>
</span>
                                            </div>
                                            <div class="desc text-right"> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Total Amount'];?>
 </div>
                                        </div>
                                    </a>
                                </div>
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
/* {/block "content"} */
/* {block "script"} */
class Block_2365263125de42f16bbafa6_35111373 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_2365263125de42f16bbafa6_35111373',
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
>

        jQuery(document).ready(function() {

            var container_sales_chart = document.getElementById("container_sales_chart");
            var salesChart = echarts.init(container_sales_chart);

            var salesChartOption;

            salesChartOption = {
                color: ['#2196f3'],
                tooltip : {
                    trigger: 'axis',
                    axisPointer : {
                        type : 'shadow'
                    }
                },
                grid: {
                    left: '2%',
                    right: '2%',
                    bottom: '15%',
                    containLabel: true
                },
                xAxis : [
                    {
                        type : 'category',
                        data : [
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['m']->value['display'], 'm');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['m']->value) {
?>
                            '<?php echo $_smarty_tpl->tpl_vars['m']->value;?>
',
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        ],
                        axisTick: {
                            alignWithLabel: true
                        },
                        axisLabel : {
                            rotate : 45,
                            interval : 0,
                            <?php if ($_smarty_tpl->tpl_vars['config']->value['nstyle'] == 'dark_mode') {?>
                            textStyle: {
                                color: '#BDD1F8',
                            },
                            <?php }?>
                        }
                    }
                ],
                yAxis : [
                    {
                        type : 'value',
                        axisLabel : {
                            <?php if ($_smarty_tpl->tpl_vars['config']->value['nstyle'] == 'dark_mode') {?>
                            textStyle: {
                                color: '#BDD1F8',
                            },
                            <?php }?>
                        }
                    }
                ],
                series : [
                    {
                        name:'<?php echo $_smarty_tpl->tpl_vars['_L']->value['Amount'];?>
',
                        type:'bar',
                        barWidth: '60%',
                        data:[
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['m']->value['data'], 'd');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['d']->value) {
?>
                            <?php echo $_smarty_tpl->tpl_vars['d']->value;?>
,
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        ]
                    }
                ]
            };

            salesChart.setOption(salesChartOption, true);


        });



    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block "script"} */
}
