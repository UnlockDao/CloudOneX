<?php
/* Smarty version 3.1.33, created on 2019-12-01 16:03:50
  from '/Users/razib/Documents/valet/business-suite/ui/theme/default/transactions_bill.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5de42ab64c4500_01174205',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '332bc2d44b51ab818d13d1f3921335e039615e36' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/default/transactions_bill.tpl',
      1 => 1575234198,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5de42ab64c4500_01174205 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20194515075de42ab64a7820_64296149', "style");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14316922835de42ab64a87a7_26798525', "content");
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7456772125de42ab64c2484_92565368', "script");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "style"} */
class Block_20194515075de42ab64a7820_64296149 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'style' => 
  array (
    0 => 'Block_20194515075de42ab64a7820_64296149',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
ui/lib/s2/css/select2.min.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/ui/lib/dp/dist/datepicker.min.css" />
<?php
}
}
/* {/block "style"} */
/* {block "content"} */
class Block_14316922835de42ab64a87a7_26798525 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_14316922835de42ab64a87a7_26798525',
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
            <div class="tabs-container" style="max-width: 600px;">
                <ul class="nav nav-tabs">
                    <li><a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
transactions/bills"> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Summary'];?>
</a></li>
                    <li><a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
transactions/bills-all"> <?php echo $_smarty_tpl->tpl_vars['_L']->value['All'];?>
</a></li>

                    <?php if ($_smarty_tpl->tpl_vars['bill']->value) {?>
                        <li><a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
transactions/bill"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Add a bill'];?>
</a></li>
                        <li class="active"><a class="nav-link active show" href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
transactions/bill/<?php echo $_smarty_tpl->tpl_vars['bill']->value->id;?>
"><i class="fa fa-pencil"></i> <?php echo $_smarty_tpl->tpl_vars['bill']->value->title;?>
</a></li>
                        <?php } else { ?>
                        <li class="active"><a class="nav-link active show" href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
transactions/bill"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Add a bill'];?>
</a></li>
                    <?php }?>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active show">
                        <div class="panel-body panel-body-with-border" style="<?php if ($_smarty_tpl->tpl_vars['config']->value['nstyle'] == 'dark_mode') {?> background-color: #272E48; border-color: #495471; <?php } else { ?> background-color: #fff; <?php }?>">


                            <div class="row">

                                <div class="col-md-12">
                                    <div class="ibox" style="box-shadow: none; border-radius: 0; border: 1px solid #e2e9ec;" id="clx_form_box">
                                        <div class="ibox-content">

                                            <div class="alert alert-danger" id="emsg" style="display: none;">
                                                <span id="emsgbody"></span>
                                            </div>

                                            <form method="post" id="mainForm" action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
transactions/bill-save">
                                                <div class="form-group">
                                                    <label for="inputTitle"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Title'];?>
</label>
                                                    <input class="form-control" name="title" required id="inputTitle" data-pristine-required-message="<?php echo $_smarty_tpl->tpl_vars['_L']->value['This field is required'];?>
" <?php if ($_smarty_tpl->tpl_vars['bill']->value) {?> value="<?php echo $_smarty_tpl->tpl_vars['bill']->value->title;?>
" <?php }?>>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="inputNextDate"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Next Due Date'];?>
</label>
                                                            <input class="form-control" datepicker
                                                                   data-date-format="yyyy-mm-dd" data-auto-close="true" required name="next_date" id="inputNextDate" data-pristine-required-message="<?php echo $_smarty_tpl->tpl_vars['_L']->value['This field is required'];?>
" <?php if ($_smarty_tpl->tpl_vars['bill']->value) {?> value="<?php echo $_smarty_tpl->tpl_vars['bill']->value->next_date;?>
" <?php }?>>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="inputRecurringType"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Repeat Every'];?>
</label>
                                                            <select class="form-control" required name="recurring_type" id="inputRecurringType" data-pristine-required-message="<?php echo $_smarty_tpl->tpl_vars['_L']->value['This field is required'];?>
">
                                                                <option value="Monthly" <?php if ($_smarty_tpl->tpl_vars['bill']->value && $_smarty_tpl->tpl_vars['bill']->value->recurring_type == 'Monthly') {?> selected  <?php }?>><?php echo $_smarty_tpl->tpl_vars['_L']->value['Monthly'];?>
</option>
                                                                <option value="Yearly" <?php if ($_smarty_tpl->tpl_vars['bill']->value && $_smarty_tpl->tpl_vars['bill']->value->recurring_type == 'Yearly') {?> selected  <?php }?>><?php echo $_smarty_tpl->tpl_vars['_L']->value['Yearly'];?>
</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="currency"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Currency'];?>
</label>
                                                            <select class="form-control" required name="currency" id="currency" data-pristine-required-message="<?php echo $_smarty_tpl->tpl_vars['_L']->value['This field is required'];?>
">
                                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['currencies']->value, 'currency');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['currency']->value) {
?>
                                                                    <option value="<?php echo $_smarty_tpl->tpl_vars['currency']->value['iso_code'];?>
" <?php if ($_smarty_tpl->tpl_vars['config']->value['home_currency'] == $_smarty_tpl->tpl_vars['currency']->value['iso_code']) {?>selected<?php }?>
                                                                            <?php if (isset($_smarty_tpl->tpl_vars['currencies_all']->value[$_smarty_tpl->tpl_vars['currency']->value['iso_code']])) {?>
                                                                        data-a-sign="<?php echo $_smarty_tpl->tpl_vars['currencies_all']->value[$_smarty_tpl->tpl_vars['currency']->value['iso_code']]['symbol'];?>
" data-a-sep="<?php echo $_smarty_tpl->tpl_vars['currencies_all']->value[$_smarty_tpl->tpl_vars['currency']->value['iso_code']]['thousands_separator'];?>
" data-a-dec="<?php echo $_smarty_tpl->tpl_vars['currencies_all']->value[$_smarty_tpl->tpl_vars['currency']->value['iso_code']]['decimal_mark'];?>
" <?php if (($_smarty_tpl->tpl_vars['currencies_all']->value[$_smarty_tpl->tpl_vars['currency']->value['iso_code']]['symbol_first'] == true)) {?> data-p-sign="p" <?php } else { ?> data-p-sign="s" <?php }?>
                                                                            <?php }?> <?php if ($_smarty_tpl->tpl_vars['bill']->value && $_smarty_tpl->tpl_vars['bill']->value->currency == $_smarty_tpl->tpl_vars['currency']->value['iso_code']) {?> selected  <?php }?>><?php echo $_smarty_tpl->tpl_vars['currency']->value['iso_code'];?>
</option>
                                                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="amount"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Amount'];?>
</label>
                                                            <input class="form-control" required name="amount" id="amount" data-pristine-required-message="<?php echo $_smarty_tpl->tpl_vars['_L']->value['This field is required'];?>
"  <?php if ($_smarty_tpl->tpl_vars['bill']->value) {?> value="<?php echo $_smarty_tpl->tpl_vars['bill']->value->net_amount;?>
" <?php }?>>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label><?php echo $_smarty_tpl->tpl_vars['_L']->value['From Account'];?>
</label>
                                                            <select class="form-control" name="from_account_id">
                                                                <option value=""><?php echo $_smarty_tpl->tpl_vars['_L']->value['None'];?>
</option>
                                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['accounts']->value, 'account');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['account']->value) {
?>
                                                                    <option value="<?php echo $_smarty_tpl->tpl_vars['account']->value->id;?>
" <?php if ($_smarty_tpl->tpl_vars['bill']->value && $_smarty_tpl->tpl_vars['bill']->value->from_account_id == $_smarty_tpl->tpl_vars['account']->value->id) {?> selected  <?php }?>><?php echo $_smarty_tpl->tpl_vars['account']->value->account;?>
</option>
                                                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label><?php echo $_smarty_tpl->tpl_vars['_L']->value['Payee'];?>
</label>
                                                            <select class="form-control" name="contact_id" id="contact_id">
                                                                <option value=""><?php echo $_smarty_tpl->tpl_vars['_L']->value['None'];?>
</option>
                                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['contacts']->value, 'contact');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['contact']->value) {
?>
                                                                    <option value="<?php echo $_smarty_tpl->tpl_vars['contact']->value->id;?>
" <?php if ($_smarty_tpl->tpl_vars['bill']->value && $_smarty_tpl->tpl_vars['bill']->value->contact_id == $_smarty_tpl->tpl_vars['contact']->value->id) {?> selected  <?php }?>><?php echo $_smarty_tpl->tpl_vars['contact']->value->account;?>
</option>
                                                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label><?php echo $_smarty_tpl->tpl_vars['_L']->value['Category'];?>
</label>
                                                    <select class="form-control" name="category_id" id="category_id">
                                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'category');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
?>
                                                            <option value="<?php echo $_smarty_tpl->tpl_vars['category']->value->id;?>
" <?php if ($_smarty_tpl->tpl_vars['bill']->value && $_smarty_tpl->tpl_vars['bill']->value->category_id == $_smarty_tpl->tpl_vars['category']->value->id) {?> selected  <?php }?>><?php echo $_smarty_tpl->tpl_vars['category']->value->name;?>
</option>
                                                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                    </select>
                                                </div>

                                                <div class="form-group">
                                                    <label for="website"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Website'];?>
</label>
                                                    <input class="form-control" name="website" id="website" <?php if ($_smarty_tpl->tpl_vars['bill']->value) {?> value="<?php echo $_smarty_tpl->tpl_vars['bill']->value->website;?>
" <?php }?>>
                                                </div>

                                                <div class="hr-line-dashed"></div>

                                                <div class="form-group">

                                                    <?php if ($_smarty_tpl->tpl_vars['bill']->value) {?>
                                                        <input type="hidden" name="bill_id" value="<?php echo $_smarty_tpl->tpl_vars['bill']->value->id;?>
">
                                                        <?php } else { ?>
                                                        <input type="hidden" name="bill_id" value="">
                                                    <?php }?>

                                                    <button type="submit" class="btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Save'];?>
</button>
                                                </div>

                                            </form>
                                        </div>
                                    </div>
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
class Block_7456772125de42ab64c2484_92565368 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_7456772125de42ab64c2484_92565368',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>



    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
ui/lib/s2/js/select2.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
ui/lib/s2/js/i18n/en.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
ui/lib/dp/dist/datepicker.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
ui/lib/numeric.js"><?php echo '</script'; ?>
>


    <?php echo '<script'; ?>
>


        $(function () {

            var form = document.getElementById("mainForm");
            var pristine = new Pristine(form);

            var $currency = $('#currency');
            var $amount = $("#amount");


            function clxAmountSingleFieldAutoNumeric(amountId) {
                $(amountId).autoNumeric('destroy');
                $(amountId).autoNumeric('init', {
                    aSign: $currency.find(':selected').data('a-sign'),
                    dGroup: <?php echo $_smarty_tpl->tpl_vars['config']->value['thousand_separator_placement'];?>
,
                    aPad: <?php echo $_smarty_tpl->tpl_vars['config']->value['currency_decimal_digits'];?>
,
                    pSign: $currency.find(':selected').data('p-sign'),
                    aDec: $currency.find(':selected').data('a-dec'),
                    aSep: $currency.find(':selected').data('a-sep'),
                    vMax: '9999999999999999.00',
                    vMin: '-9999999999999999.00'

                });
            }

            $currency.on('change',function (event) {
                clxAmountSingleFieldAutoNumeric('#amount');
            });



            clxAmountSingleFieldAutoNumeric('#amount');

            function ib_autonumeric() {
                $('.amount').autoNumeric('init', {
                    vMax: '9999999999999999.00',
                    vMin: '-9999999999999999.00'

                });

            }


            ib_autonumeric();

            $('#contact_id').select2({
                theme: "bootstrap"
            });

            $('#category_id').select2({
                theme: "bootstrap"
            });

            $("#mainForm").submit(function (e) {

                e.preventDefault();

                if(pristine.validate())
                {
                    $('#clx_form_box').block({ message:block_msg });

                    $.post('<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
transactions/bill-save', $( "#mainForm" ).serialize())
                        .done(function (data) {
                            if ($.isNumeric(data)) {

                                window.location = '<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
transactions/bills/';
                            }
                            else {
                                $('#clx_form_box').unblock();
                                var body = $("html, body");
                                body.animate({ scrollTop:0 }, '1000', 'swing');
                                $("#emsgbody").html(data);
                                $("#emsg").show("slow");
                            }
                        });
                }

            });

        });

    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block "script"} */
}
