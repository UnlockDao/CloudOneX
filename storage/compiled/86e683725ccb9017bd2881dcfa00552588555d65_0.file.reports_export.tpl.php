<?php
/* Smarty version 3.1.33, created on 2019-12-01 16:37:38
  from '/Users/razib/Documents/valet/business-suite/ui/theme/default/reports_export.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5de432a27cefc7_84932721',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '86e683725ccb9017bd2881dcfa00552588555d65' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/default/reports_export.tpl',
      1 => 1556267287,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5de432a27cefc7_84932721 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13868329585de432a27cabb0_01592374', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17005769025de432a27cea80_02583524', 'script');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "content"} */
class Block_13868329585de432a27cabb0_01592374 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_13868329585de432a27cabb0_01592374',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <div class="row">
        <div class="col-md-12">
            <h3 class="ibilling-page-header"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Export'];?>
</h3>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-3">
            <div class="ibox ">
                <div class="ibox-title">
                    <h5><?php echo $_smarty_tpl->tpl_vars['_L']->value['Customers'];?>
</h5>
                </div>
                <div class="ibox-content">
                    <h1><?php echo $_smarty_tpl->tpl_vars['total_customers']->value;?>
</h1>

                    <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
reports/export-customers" class="btn btn-primary"><i class="fa fa-file-excel-o"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Export'];?>
</a>
                </div>
            </div>
        </div>


        <div class="col-lg-3">
            <div class="ibox ">
                <div class="ibox-title">
                    <h5><?php echo $_smarty_tpl->tpl_vars['_L']->value['Transactions'];?>
</h5>
                </div>
                <div class="ibox-content">
                    <h1><?php echo $_smarty_tpl->tpl_vars['total_transactions']->value;?>
</h1>

                    <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
reports/export-transactions" class="btn btn-primary"><i class="fa fa-file-excel-o"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Export'];?>
</a>
                </div>
            </div>
        </div>

        <div class="col-lg-3">
            <div class="ibox ">
                <div class="ibox-title">
                    <h5><?php echo $_smarty_tpl->tpl_vars['_L']->value['Invoices'];?>
</h5>
                </div>
                <div class="ibox-content">
                    <h1><?php echo $_smarty_tpl->tpl_vars['total_invoices']->value;?>
</h1>

                    <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
reports/export-invoices" class="btn btn-primary"><i class="fa fa-file-excel-o"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Export'];?>
</a>
                </div>
            </div>
        </div>

                                                                                                            
                                                            </div>

<?php
}
}
/* {/block "content"} */
/* {block 'script'} */
class Block_17005769025de432a27cea80_02583524 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_17005769025de432a27cea80_02583524',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <?php echo '<script'; ?>
>

    <?php echo '</script'; ?>
>


<?php
}
}
/* {/block 'script'} */
}
