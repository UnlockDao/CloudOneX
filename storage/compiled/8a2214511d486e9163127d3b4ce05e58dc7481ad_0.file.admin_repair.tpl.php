<?php
/* Smarty version 3.1.33, created on 2019-10-14 13:52:50
  from '/Users/razib/Documents/valet/business-suite/apps/autorepair/views/admin_repair.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5da4b5f266ccb3_95250791',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8a2214511d486e9163127d3b4ce05e58dc7481ad' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/apps/autorepair/views/admin_repair.tpl',
      1 => 1563788506,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5da4b5f266ccb3_95250791 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7018375125da4b5f2641054_28214820', "style");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13609172125da4b5f264cb21_76862577', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17034384465da4b5f266a937_66256137', "script");
}
/* {block "style"} */
class Block_7018375125da4b5f2641054_28214820 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'style' => 
  array (
    0 => 'Block_7018375125da4b5f2641054_28214820',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
ui/lib/s2/css/select2.min.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
ui/lib/dp/dist/datepicker.min.css" />

<?php
}
}
/* {/block "style"} */
/* {block "content"} */
class Block_13609172125da4b5f264cb21_76862577 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_13609172125da4b5f264cb21_76862577',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>



    <div class="row">
        <div class="col-md-6">
            <div class="panel">
                <div class="panel-body">
                    <?php if ($_smarty_tpl->tpl_vars['repair']->value) {?>
                        <h3>Edit</h3>
                        <?php } else { ?>
                        <h3>New Repair</h3>
                    <?php }?>
                    <div class="hr-line-dashed"></div>

                    <form method="post" id="mainForm" action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
autorepair/admin/repair-save">

                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea class="form-control" rows="3" id="description" name="description"><?php if ($_smarty_tpl->tpl_vars['repair']->value) {
echo $_smarty_tpl->tpl_vars['repair']->value->description;
}?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="contact_id">Customer</label>
                            <select class="form-control" id="contact_id" name="contact_id">
                                <option value="">Choose customer...</option>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['contacts']->value, 'contact');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['contact']->value) {
?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['contact']->value->id;?>
"  <?php if ($_smarty_tpl->tpl_vars['repair']->value && $_smarty_tpl->tpl_vars['repair']->value->contact_id == $_smarty_tpl->tpl_vars['contact']->value->id) {?> selected <?php }?>><?php echo $_smarty_tpl->tpl_vars['contact']->value->account;?>
</option>
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="staff_id">Technician</label>
                            <select class="form-control" id="staff_id" name="technician_id">
                                <option value="0">Choose technician...</option>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['staffs']->value, 'staff');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['staff']->value) {
?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['staff']->value->id;?>
"  <?php if ($_smarty_tpl->tpl_vars['repair']->value && $_smarty_tpl->tpl_vars['repair']->value->technician_id == $_smarty_tpl->tpl_vars['staff']->value->id) {?> selected <?php }?>><?php echo $_smarty_tpl->tpl_vars['staff']->value->fullname;?>
</option>
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="item_id">Vehicle</label>
                            <select class="form-control" name="item_id" id="item_id">
                                <option value="">Choose vehicle...</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="due_date">Due Date</label>
                            <input type="text" class="form-control" <?php if ($_smarty_tpl->tpl_vars['repair']->value) {?> value="<?php echo date('Y-m-d',strtotime($_smarty_tpl->tpl_vars['repair']->value->due_on));?>
" <?php } else { ?> value="<?php echo date('Y-m-d');?>
" <?php }?> name="due_date" id="due_date" datepicker data-date-format="yyyy-mm-dd" data-auto-close="true">
                        </div>
                        <div class="form-group">
                            <label for="status">Status</label>
                            <select class="form-control" name="status" id="status">
                                <option value="Pending" <?php if ($_smarty_tpl->tpl_vars['repair']->value && $_smarty_tpl->tpl_vars['repair']->value->status == 'Pending') {?> selected <?php }?>>Pending</option>
                                <option value="Started" <?php if ($_smarty_tpl->tpl_vars['repair']->value && $_smarty_tpl->tpl_vars['repair']->value->status == 'Started') {?> selected <?php }?>>Started</option>
                                <option value="Completed" <?php if ($_smarty_tpl->tpl_vars['repair']->value && $_smarty_tpl->tpl_vars['repair']->value->status == 'Completed') {?> selected <?php }?>>Completed</option>
                                <option value="Cancelled" <?php if ($_smarty_tpl->tpl_vars['repair']->value && $_smarty_tpl->tpl_vars['repair']->value->status == 'Cancelled') {?> selected <?php }?>>Cancelled</option>
                            </select>
                        </div>

                        <?php if ($_smarty_tpl->tpl_vars['repair']->value) {?>
                            <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['repair']->value->id;?>
">
                        <?php }?>

                        <button type="submit" class="btn btn-primary" id="btnSubmit">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


<?php
}
}
/* {/block "content"} */
/* {block "script"} */
class Block_17034384465da4b5f266a937_66256137 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_17034384465da4b5f266a937_66256137',
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
ui/lib/dp/i18n/en.js"><?php echo '</script'; ?>
>

    <?php echo '<script'; ?>
>
        $(function () {


            var $contact_id = $('#contact_id');

            function getCarsForSelectedContact()
            {


                var $item_id = $('#item_id');



                if($contact_id.val() !== '')
                    {
                        $.getJSON( "<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
autorepair/admin/get-cars/" + $contact_id.val() , function( data ) {
                            $.each(data, function(key, value) {
                                var $option = $("<option/>", {
                                    value: key,
                                    text: value,
                                });
                                $item_id.append($option);
                            });

                            <?php if ($_smarty_tpl->tpl_vars['repair']->value && $_smarty_tpl->tpl_vars['repair']->value->item_id) {?>
                            $item_id.val('<?php echo $_smarty_tpl->tpl_vars['repair']->value->item_id;?>
');
                            <?php }?>

                        });
                    }




            }


            getCarsForSelectedContact();

            $('[data-toggle="datepicker"]').datepicker();



            $contact_id.select2({
                    theme: "bootstrap"
                }
            ).on('change',function () {
                getCarsForSelectedContact();
            });

            $('#staff_id').select2({
                    theme: "bootstrap"
                }
            );

            $('#btnSubmit').click(function (e) {
                e.preventDefault();

                $.post( "<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
autorepair/admin/repair-save", $('#mainForm').serialize() ).done(function() {
                    window.location = '<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
autorepair/admin/repairs';
                }).fail(function(data) {
                    spNotify(data.responseText,'error');
                });
            });
        });
    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block "script"} */
}
