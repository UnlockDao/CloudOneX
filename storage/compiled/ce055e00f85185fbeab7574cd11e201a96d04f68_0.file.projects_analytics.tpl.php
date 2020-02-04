<?php
/* Smarty version 3.1.33, created on 2019-12-08 13:00:52
  from '/Users/razib/Documents/valet/business-suite/ui/theme/default/projects_analytics.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ded3a54936176_19762763',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ce055e00f85185fbeab7574cd11e201a96d04f68' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/default/projects_analytics.tpl',
      1 => 1575828049,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ded3a54936176_19762763 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18099863825ded3a54932e15_96936022', "project_content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17107206365ded3a549336d9_38777820', "script");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "project_base.tpl");
}
/* {block "project_content"} */
class Block_18099863825ded3a54932e15_96936022 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'project_content' => 
  array (
    0 => 'Block_18099863825ded3a54932e15_96936022',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <h3>Activity last 7 days</h3>
    <div class="hr-line-dashed"></div>

    <div id="chart" style="max-height: 400px;"></div>
<?php
}
}
/* {/block "project_content"} */
/* {block "script"} */
class Block_17107206365ded3a549336d9_38777820 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_17107206365ded3a549336d9_38777820',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
 type="text/javascript" src="https://cdn.jsdelivr.net/npm/apexcharts"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
>



        $(function () {

            var options = {
                chart: {
                    type: 'bar',
                    height: 400
                },
                series: [{
                    name: 'sales',
                    data: [30,40,45,50,49,60,70,91,125]
                }],
                xaxis: {
                    categories: [
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['last_7_days']->value, 'day');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['day']->value) {
?>
                        '<?php echo $_smarty_tpl->tpl_vars['day']->value;?>
',
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    ],
                    axisBorder: {
                        show: false
                    },

                }
            };

            var chart = new ApexCharts(document.querySelector("#chart"), options);

            chart.render();

        });
    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block "script"} */
}
