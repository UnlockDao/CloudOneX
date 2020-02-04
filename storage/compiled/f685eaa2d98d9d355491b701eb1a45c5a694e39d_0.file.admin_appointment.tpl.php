<?php
/* Smarty version 3.1.33, created on 2019-10-14 13:53:01
  from '/Users/razib/Documents/valet/business-suite/apps/autorepair/views/admin_appointment.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5da4b5fd149f65_84307368',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f685eaa2d98d9d355491b701eb1a45c5a694e39d' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/apps/autorepair/views/admin_appointment.tpl',
      1 => 1563189834,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5da4b5fd149f65_84307368 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13874158695da4b5fd13f300_25533759', "style");
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19516022265da4b5fd140821_55324625', "content");
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_81666575da4b5fd148e08_79425002', "script");
}
/* {block "style"} */
class Block_13874158695da4b5fd13f300_25533759 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'style' => 
  array (
    0 => 'Block_13874158695da4b5fd13f300_25533759',
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
class Block_19516022265da4b5fd140821_55324625 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_19516022265da4b5fd140821_55324625',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>



    <div class="row">
        <div class="col-md-6">
            <div class="panel">
                <div class="panel-body">
                    <?php if ($_smarty_tpl->tpl_vars['appointment']->value) {?>
                        <div class="row">
                            <div class="col-md-6">
                                <h3>Edit</h3>
                            </div>
                            <div class="col-md-6">
                                <div class="pull-right">
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
autorepair/admin/appointment-delete/<?php echo $_smarty_tpl->tpl_vars['appointment']->value->id;?>
" class="btn btn-danger">Delete</a>
                                </div>
                            </div>
                        </div>
                    <?php } else { ?>
                        <h3>New Appointment</h3>
                    <?php }?>

                    <div class="hr-line-dashed"></div>

                    <form method="post" id="mainForm">
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input name="title" id="title" class="form-control" <?php if ($_smarty_tpl->tpl_vars['appointment']->value) {?> value="<?php echo $_smarty_tpl->tpl_vars['appointment']->value->title;?>
" <?php }?>>
                        </div>
                        <div class="form-group">
                            <label for="contact_id">Customer</label>
                            <select class="form-control" id="contact_id" name="contact_id">
                                <option value="0">Choose customer...</option>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['contacts']->value, 'contact');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['contact']->value) {
?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['contact']->value->id;?>
"  <?php if ($_smarty_tpl->tpl_vars['appointment']->value && $_smarty_tpl->tpl_vars['appointment']->value->contact_id == $_smarty_tpl->tpl_vars['contact']->value->id) {?> selected <?php }?>><?php echo $_smarty_tpl->tpl_vars['contact']->value->account;?>
</option>
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </select>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="date">Date</label>
                                    <input type="text" class="form-control" <?php if ($_smarty_tpl->tpl_vars['appointment']->value) {?> value="<?php echo $_smarty_tpl->tpl_vars['appointment']->value->date;?>
" <?php } else { ?> value="<?php echo date('Y-m-d');?>
" <?php }?> name="date" id="date" datepicker data-date-format="yyyy-mm-dd" data-auto-close="true">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="status">Status</label>
                                    <select class="form-control" name="status" id="status">
                                        <option value="Pending" <?php if ($_smarty_tpl->tpl_vars['appointment']->value && $_smarty_tpl->tpl_vars['appointment']->value->status == 'Pending') {?> selected <?php }?>>Pending</option>
                                        <option value="Completed" <?php if ($_smarty_tpl->tpl_vars['appointment']->value && $_smarty_tpl->tpl_vars['appointment']->value->status == 'Completed') {?> selected <?php }?>>Completed</option>
                                        <option value="Cancelled" <?php if ($_smarty_tpl->tpl_vars['appointment']->value && $_smarty_tpl->tpl_vars['appointment']->value->status == 'Cancelled') {?> selected <?php }?>>Cancelled</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea class="form-control" rows="3" name="description" id="description"><?php if ($_smarty_tpl->tpl_vars['appointment']->value) {
echo $_smarty_tpl->tpl_vars['appointment']->value->description;
}?></textarea>
                        </div>

                        <?php if ($_smarty_tpl->tpl_vars['appointment']->value) {?>
                            <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['appointment']->value->id;?>
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
class Block_81666575da4b5fd148e08_79425002 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_81666575da4b5fd148e08_79425002',
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

            $('[data-toggle="datepicker"]').datepicker();

            $('#contact_id').select2({
                    theme: "bootstrap"
                }
            ).on('change',function () {


            });

            $('#btnSubmit').click(function (e) {
                e.preventDefault();

                $.post( "<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
autorepair/admin/appointment-save", $('#mainForm').serialize() ).done(function() {
                    window.location = '<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
autorepair/admin/appointments';
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
