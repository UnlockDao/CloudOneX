<?php
/* Smarty version 3.1.33, created on 2019-11-28 17:29:35
  from '/Users/razib/Documents/valet/business-suite/ui/theme/default/util_tools.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5de04a4fe39cb8_06864983',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd8fc8fd11656ddee12c75f5c10dac23ebfd519d7' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/default/util_tools.tpl',
      1 => 1574721384,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5de04a4fe39cb8_06864983 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_105488045de04a4fe36ae7_02833881', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12199180635de04a4fe39120_77722677', 'script');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "content"} */
class Block_105488045de04a4fe36ae7_02833881 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_105488045de04a4fe36ae7_02833881',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<div class="row">

    <div class="col-md-6">

        <div class="panel panel-defaul">
            <div class="panel-body">
                <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
util/backup-database" class="btn btn-primary">Backup Database</a>
            </div>
        </div>

        <div class="panel panel-default">
            <div class="panel-body">
                <h4>Data Import</h4>
                <hr>
                <form action="" method="post" id="dataImport">
                    <div class="form-group">
                        <label for="importFrom">From</label>
                        <select id="importFrom" class="form-control" name="importFrom">
                            <option value="">Select...</option>
                            <option value="Salesforce">Salesforce</option>
                            <option value="WHMCS">WHMCS</option>
                            <option value="HostBill">HostBill</option>
                            <option value="custom">Custom</option>
                            <option value="iBilling">iBilling</option>
                        </select>
                    </div>

                    <div class="form-group" id="sectionFromUrl">
                        <label for="fromUrl">URL</label>
                        <input type="text" class="form-control" name="fromUrl" id="fromUrl" value="<?php echo inSession('fromUrl');?>
">
                    </div>

                    <div class="form-group" id="sectionAPIKey">
                        <label for="apiKey">API Key</label>
                        <input type="text" class="form-control" name="apiKey" id="apiKey" value="<?php echo inSession('apiKey');?>
">
                    </div>

                    <div class="form-group" id="sectionImportItems">
                        <label for="cid">Import</label>


                        <div class="checkbox">
                            <label>
                                <input type="checkbox" class="i-checks" name="appConfig" value="yes">
                                Configurations
                            </label>
                        </div>

                        <div class="checkbox">
                            <label>
                                <input type="checkbox" class="i-checks" name="currencies" value="yes">
                                Currencies
                            </label>
                        </div>

                        <div class="checkbox">
                            <label>
                                <input type="checkbox" class="i-checks" name="customers" value="yes">
                                Customers
                            </label>
                        </div>

                        <div class="checkbox">
                            <label>
                                <input type="checkbox" class="i-checks" name="groups" value="yes">
                                Groups
                            </label>
                        </div>

                        <div class="checkbox">
                            <label>
                                <input type="checkbox" class="i-checks" name="companies" value="yes">
                                Companies
                            </label>
                        </div>



                        <div class="checkbox">
                            <label>
                                <input type="checkbox" class="i-checks" name="items" value="yes" >
                                Products & Services
                            </label>
                        </div>

                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" class="i-checks" name="invoices" value="yes" >
                                    Invoices
                                </label>
                            </div>

                        <div class="checkbox">
                            <label>
                                <input type="checkbox" class="i-checks" name="invoice_items" value="yes" >
                                Invoice Items
                            </label>
                        </div>

                        <div class="checkbox">
                            <label>
                                <input type="checkbox" class="i-checks" name="quotes" value="yes" >
                                Quote
                            </label>
                        </div>

                        <div class="checkbox">
                            <label>
                                <input type="checkbox" class="i-checks" name="quote_items" value="yes" >
                                Quote Items
                            </label>
                        </div>

                        <div class="checkbox">
                            <label>
                                <input type="checkbox" class="i-checks" name="accounts" value="yes" >
                                Bank Accounts
                            </label>
                        </div>

                        <div class="checkbox">
                            <label>
                                <input type="checkbox" class="i-checks" name="transactions" value="yes" >
                                Transactions
                            </label>
                        </div>

                    </div>

                    <div class="form-group">
                        <button type="submit" id="dataImportContinue" class="btn btn-primary" disabled="disabled">Import</button>
                    </div>
                </form>
            </div>
        </div>


        <div class="panel panel-defaul">
            <div class="panel-body">
                <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
util/clear-financial-data-cache" class="btn btn-primary">Clear Financial Data Cache</a>
            </div>
        </div>

</div>

    <div class="col-md-6">
        <div class="panel panel-default">
            <div class="panel-body">
                <h4>Response</h4>
                <hr>
                <textarea class="form-control" rows="15" id="response"></textarea>
            </div>
        </div>
    </div>

</div>

<?php
}
}
/* {/block "content"} */
/* {block 'script'} */
class Block_12199180635de04a4fe39120_77722677 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_12199180635de04a4fe39120_77722677',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <?php echo '<script'; ?>
>

        $(function () {

            var $importFrom = $("#importFrom");

            var $sectionFromUrl = $("#sectionFromUrl");
            var $apiKey = $("#apiKey");
            var $sectionAPIKey = $("#sectionAPIKey");

            var $dataImportContinue = $("#dataImportContinue");

            var $dataImport = $("#dataImport");

            var $response = $("#response");



            $sectionFromUrl.hide();
            $sectionAPIKey.hide();

            var i_checks = $('.i-checks');
            i_checks.iCheck({
                checkboxClass: 'icheckbox_square-blue'
            });

            var $sectionImportItems = $("#sectionImportItems");

            $sectionImportItems.hide();

            $importFrom.on("change",function (e) {

                var valImportFrom = $importFrom.val();

                switch (valImportFrom){

                    case 'iBilling':

                        $sectionFromUrl.show();
                        $sectionAPIKey.show();
                        $sectionImportItems.show();

                        $dataImportContinue.prop('disabled', false);


                        break;


                    default:

                        $sectionFromUrl.hide();

                        $dataImportContinue.prop('disabled', true);

                        break;

                }

            });


            $dataImportContinue.click(function (e) {

                e.preventDefault();

               // $response.html('Importing.......'+"\n");
                $response.html('Importing.......'+"\n" + 'Please do not close your browser..........'+"\n");

                $dataImportContinue.prop('disabled', true);

                $.post(base_url + 'util/import/', $dataImport.serialize())
                    .done(function (data) {

                        $response.html(data);

                        $dataImportContinue.prop('disabled', false);

                    });

            })


        });

    <?php echo '</script'; ?>
>


<?php
}
}
/* {/block 'script'} */
}
