<?php
/* Smarty version 3.1.33, created on 2019-12-01 16:03:45
  from '/Users/razib/Documents/valet/business-suite/ui/theme/default/transactions_bills.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5de42ab1f02a89_53680521',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e041cec4ca2342a641f16e92a6ca362215a8c668' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/default/transactions_bills.tpl',
      1 => 1575234223,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5de42ab1f02a89_53680521 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13112720565de42ab1eee776_47844101', "content");
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2097700635de42ab1f024c8_45272197', "script");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "content"} */
class Block_13112720565de42ab1eee776_47844101 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_13112720565de42ab1eee776_47844101',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>



    <div class="row">
        <div class="col-md-12">
            <h3 class="ibilling-page-header"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Bills'];?>
</h3>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="tabs-container">
                <ul class="nav nav-tabs">
                    <li class="active"><a class="nav-link active show" href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
transactions/bills"> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Summary'];?>
</a></li>
                    <li><a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
transactions/bills-all"> <?php echo $_smarty_tpl->tpl_vars['_L']->value['All'];?>
</a></li>
                    <li><a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
transactions/bill"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Add a bill'];?>
</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active show">
                        <div class="panel-body panel-body-with-border" style="<?php if ($_smarty_tpl->tpl_vars['config']->value['nstyle'] == 'dark_mode') {?> background-color: #272E48; border-color: #495471; <?php } else { ?> background-color: #fff; <?php }?>">


                                <div class="row">
                                    <div class="col-md-12">
                                        <h3><?php echo $_smarty_tpl->tpl_vars['_L']->value['Upcoming Bills'];?>
 </h3>
                                        <div class="hr-line-dashed"></div>
                                    </div>
                                </div>
                                <div class="row">

                                    <?php if (count($_smarty_tpl->tpl_vars['bills_upcoming']->value) > 0) {?>

                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['bills_upcoming']->value, 'bill');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['bill']->value) {
?>
                                            <div class="col-lg-3">
                                                <div class="ibox" style="box-shadow: none; border-radius: 0; border: 1px solid #e2e9ec;">
                                                    <div class="ibox-content">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <small><?php echo translate_date_string(date('D M d, Y',strtotime($_smarty_tpl->tpl_vars['bill']->value->next_date)),$_smarty_tpl->tpl_vars['_L']->value);?>
</small>
                                                            </div>
                                                            <div class="col-md-6 text-right">
                                                                <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
transactions/bill/<?php echo $_smarty_tpl->tpl_vars['bill']->value->id;?>
" class="btn btn-primary btn-xs" data-toggle="tooltip" data-placement="top" title="View"><i class="fa fa-file-text-o"></i></a>
                                                                <?php if ($_smarty_tpl->tpl_vars['bill']->value->website != '') {?>
                                                                    <a href="<?php echo $_smarty_tpl->tpl_vars['bill']->value->website;?>
" target="_blank" class="btn btn-inverse btn-xs" data-toggle="tooltip" data-placement="top" title="<?php echo $_smarty_tpl->tpl_vars['bill']->value->website;?>
"><i class="fa fa-globe"></i></a>
                                                                <?php }?>
                                                                <a href="javascript:;" onclick="confirmThenGoToUrl(event,'transactions/delete-bill/<?php echo $_smarty_tpl->tpl_vars['bill']->value->id;?>
');" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Delete'];?>
"><i class="fa fa-trash-o"></i></a>
                                                                <?php if ($_smarty_tpl->tpl_vars['bill']->value->is_paid == 0) {?>
                                                                    <a href="javascript:;" onclick="confirmThenGoToUrl(event,'transactions/bill-mark-as-paid/<?php echo $_smarty_tpl->tpl_vars['bill']->value->id;?>
');" class="btn btn-green btn-xs" data-toggle="tooltip" data-placement="top" title="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Mark as Paid'];?>
"><i class="fa fa-check"></i></a>
                                                                <?php }?>
                                                            </div>
                                                        </div>
                                                        <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
transactions/bill/<?php echo $_smarty_tpl->tpl_vars['bill']->value->id;?>
"><h4><?php echo $_smarty_tpl->tpl_vars['bill']->value->title;?>
</h4></a>
                                                        <h1 class="no-margins"><?php echo formatCurrency($_smarty_tpl->tpl_vars['bill']->value->net_amount,$_smarty_tpl->tpl_vars['bill']->value->currency);?>
</h1>
                                                        <?php if ($_smarty_tpl->tpl_vars['bill']->value->is_paid) {?>
                                                            <div class="stat-percent font-bold text-primary"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Paid'];?>
</div>
                                                        <?php } else { ?>
                                                            <div class="stat-percent font-bold text-danger"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Due'];?>
</div>
                                                        <?php }?>
                                                        <small><?php echo ib_lan_get_line($_smarty_tpl->tpl_vars['bill']->value->recurring_type);?>
</small>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                                    <?php } else { ?>

                                        <div class="col-md-12">
                                            <p><?php echo $_smarty_tpl->tpl_vars['_L']->value['No Data Available'];?>
</p>
                                        </div>

                                    <?php }?>







                                </div>

                            <?php if (count($_smarty_tpl->tpl_vars['bills_pas_due']->value) > 0) {?>

                            <div class="row">
                                <div class="col-md-12">
                                    <h3><?php echo $_smarty_tpl->tpl_vars['_L']->value['Past Due'];?>
 </h3>
                                    <div class="hr-line-dashed"></div>
                                </div>
                            </div>
                            <div class="row">

                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['bills_pas_due']->value, 'bill');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['bill']->value) {
?>
                                        <div class="col-lg-3">
                                            <div class="ibox" style="box-shadow: none; border-radius: 0; border: 1px solid #e2e9ec;">
                                                <div class="ibox-content">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <small><?php echo translate_date_string(date('D M d, Y',strtotime($_smarty_tpl->tpl_vars['bill']->value->next_date)),$_smarty_tpl->tpl_vars['_L']->value);?>
</small>
                                                        </div>
                                                        <div class="col-md-6 text-right">
                                                            <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
transactions/bill/<?php echo $_smarty_tpl->tpl_vars['bill']->value->id;?>
" class="btn btn-primary btn-xs" data-toggle="tooltip" data-placement="top" title="View"><i class="fa fa-file-text-o"></i></a>
                                                            <?php if ($_smarty_tpl->tpl_vars['bill']->value->website != '') {?>
                                                                <a href="<?php echo $_smarty_tpl->tpl_vars['bill']->value->website;?>
" target="_blank" class="btn btn-inverse btn-xs" data-toggle="tooltip" data-placement="top" title="<?php echo $_smarty_tpl->tpl_vars['bill']->value->website;?>
"><i class="fa fa-globe"></i></a>
                                                            <?php }?>
                                                            <a href="javascript:;" onclick="confirmThenGoToUrl(event,'transactions/delete-bill/<?php echo $_smarty_tpl->tpl_vars['bill']->value->id;?>
');" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Delete'];?>
"><i class="fa fa-trash-o"></i></a>
                                                            <?php if ($_smarty_tpl->tpl_vars['bill']->value->is_paid == 0) {?>
                                                                <a href="javascript:;" onclick="confirmThenGoToUrl(event,'transactions/bill-mark-as-paid/<?php echo $_smarty_tpl->tpl_vars['bill']->value->id;?>
');" class="btn btn-green btn-xs" data-toggle="tooltip" data-placement="top" title="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Mark as Paid'];?>
"><i class="fa fa-check"></i></a>
                                                            <?php }?>
                                                        </div>
                                                    </div>
                                                    <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
transactions/bill/<?php echo $_smarty_tpl->tpl_vars['bill']->value->id;?>
"><h4><?php echo $_smarty_tpl->tpl_vars['bill']->value->title;?>
</h4></a>
                                                    <h1 class="no-margins"><?php echo formatCurrency($_smarty_tpl->tpl_vars['bill']->value->net_amount,$_smarty_tpl->tpl_vars['bill']->value->currency);?>
</h1>
                                                    <?php if ($_smarty_tpl->tpl_vars['bill']->value->is_paid) {?>
                                                        <div class="stat-percent font-bold text-primary"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Paid'];?>
</div>
                                                    <?php } else { ?>
                                                        <div class="stat-percent font-bold text-danger"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Due'];?>
</div>
                                                    <?php }?>
                                                    <small><?php echo ib_lan_get_line($_smarty_tpl->tpl_vars['bill']->value->recurring_type);?>
</small>
                                                </div>
                                            </div>
                                        </div>
                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>


                            </div>

                            <?php }?>




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
class Block_2097700635de42ab1f024c8_45272197 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_2097700635de42ab1f024c8_45272197',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>




    <?php echo '<script'; ?>
>


        $(function () {


            $('[data-toggle="tooltip"]').tooltip();


        });

    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block "script"} */
}
