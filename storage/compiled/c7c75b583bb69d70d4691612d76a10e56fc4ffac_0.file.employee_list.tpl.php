<?php
/* Smarty version 3.1.33, created on 2019-12-01 16:16:57
  from '/Users/razib/Documents/valet/business-suite/ui/theme/default/employee_list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5de42dc94e33b0_03637991',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c7c75b583bb69d70d4691612d76a10e56fc4ffac' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/default/employee_list.tpl',
      1 => 1575235005,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5de42dc94e33b0_03637991 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4509549675de42dc94d51b0_37854184', "style");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21231997185de42dc94d7005_14425886', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9228393195de42dc94e13d2_69158125', 'script');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "style"} */
class Block_4509549675de42dc94d51b0_37854184 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'style' => 
  array (
    0 => 'Block_4509549675de42dc94d51b0_37854184',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <style>
        .contact-box {
            <?php if ($_smarty_tpl->tpl_vars['config']->value['nstyle'] == 'dark_mode') {?>
            background-color: rgba(255,255,255,.05);
            border: 1px solid #394156;
        <?php } else { ?>
            background-color: #ffffff;
            border: 1px solid #e7eaec;
        <?php }?>
            padding: 20px;
            margin-bottom: 20px;
        }

        .contact-box > a {
            color: inherit;
        }

        .img-fluid {
            max-width: 100%;
            height: auto;
        }

        .rounded-circle {
            border-radius: 50%!important;
        }


    </style>
<?php
}
}
/* {/block "style"} */
/* {block "content"} */
class Block_21231997185de42dc94d7005_14425886 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_21231997185de42dc94d7005_14425886',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <div class="row">
        <div class="col-md-6">
            <h3>Employees</h3>
        </div>

        <div class="col-md-6 text-right">
            <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
hrm/employee" class="btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Add an employee'];?>
</a>

        </div>

    </div>

    <div class="hr-line-dashed"></div>
    <div class="row">

        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['employees']->value, 'employee');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['employee']->value) {
?>

            <div class="col-lg-4">
                <div class="contact-box">
                    <a class="row" href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
hrm/employee/<?php echo $_smarty_tpl->tpl_vars['employee']->value->id;?>
">
                        <div class="col-xs-4">
                            <div class="text-center">
                                <img alt="image" class="rounded-circle m-t-xs img-fluid" src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
storage/employees/employee_default.png">
                                <div class="m-t-xs font-bold">
                                    <?php echo $_smarty_tpl->tpl_vars['employee']->value->job_title;?>

                                </div>
                            </div>
                        </div>
                        <div class="col-xs-8">
                            <h3><strong><?php echo $_smarty_tpl->tpl_vars['employee']->value->name;?>
</strong></h3>
                            <p><i class="fa fa-envelope-o"></i> <?php echo $_smarty_tpl->tpl_vars['employee']->value->email;?>
</p>
                            <address>
                                <strong>
                                    <?php if ($_smarty_tpl->tpl_vars['employee']->value->pay_frequency == 'Monthly') {?>
                                        <?php echo $_smarty_tpl->tpl_vars['_L']->value['Monthly'];?>

                                        <?php } elseif ($_smarty_tpl->tpl_vars['employee']->value->pay_frequency == 'Hourly') {?>
                                        <?php echo $_smarty_tpl->tpl_vars['_L']->value['Hourly'];?>

                                        <?php } else { ?>
                                        <?php echo $_smarty_tpl->tpl_vars['employee']->value->pay_frequency;?>

                                    <?php }?>
                                     | <span class="amount"><?php echo $_smarty_tpl->tpl_vars['employee']->value->amount;?>
</span> </strong><br>
                                <?php echo $_smarty_tpl->tpl_vars['_L']->value['Date Joined'];?>
: <?php echo date($_smarty_tpl->tpl_vars['config']->value['df'],strtotime($_smarty_tpl->tpl_vars['employee']->value->date_hired));?>
<br>
                                <div class="hr-line-dashed"></div>
                                <?php if ($_smarty_tpl->tpl_vars['employee']->value->address_line_1 != '') {
echo $_smarty_tpl->tpl_vars['employee']->value->address_line_1;?>
 <br> <?php }?> <?php if ($_smarty_tpl->tpl_vars['employee']->value->city != '') {
echo $_smarty_tpl->tpl_vars['employee']->value->city;?>
 <br>
                                <?php }?> <?php if ($_smarty_tpl->tpl_vars['employee']->value->state != '') {
echo $_smarty_tpl->tpl_vars['employee']->value->state;
}?> <?php if ($_smarty_tpl->tpl_vars['employee']->value->zip != '') {
echo $_smarty_tpl->tpl_vars['employee']->value->zip;
}?> <br>

                                <?php if ($_smarty_tpl->tpl_vars['employee']->value->phone != '') {
echo $_smarty_tpl->tpl_vars['employee']->value->phone;?>

                                    <abbr title="Phone">P:</abbr> <?php echo $_smarty_tpl->tpl_vars['employee']->value->phone;?>

                                <?php }?>


                            </address>
                        </div>
                    </a>
                </div>
            </div>

            <?php
}
} else {
?>

            <p>No data to display</p>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>


    </div>


<?php
}
}
/* {/block "content"} */
/* {block 'script'} */
class Block_9228393195de42dc94e13d2_69158125 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_9228393195de42dc94e13d2_69158125',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
ui/lib/numeric.js"><?php echo '</script'; ?>
>

    <?php echo '<script'; ?>
>

        $(function () {

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
        })

    <?php echo '</script'; ?>
>


<?php
}
}
/* {/block 'script'} */
}
