<?php
/* Smarty version 3.1.33, created on 2019-12-08 11:56:59
  from '/Users/razib/Documents/valet/business-suite/ui/theme/default/projects_project.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ded2b5b2299e6_25045366',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c69af8b44340b356a43ed1f76267555753c6c468' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/default/projects_project.tpl',
      1 => 1575824191,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ded2b5b2299e6_25045366 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19947190875ded2b5b2142b5_50137897', "style");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17834356085ded2b5b215bb2_60602746', "content");
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18248248575ded2b5b228334_56485043', "script");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "style"} */
class Block_19947190875ded2b5b2142b5_50137897 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'style' => 
  array (
    0 => 'Block_19947190875ded2b5b2142b5_50137897',
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
class Block_17834356085ded2b5b215bb2_60602746 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_17834356085ded2b5b215bb2_60602746',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>



    <div class="row">
        <div class="col-md-12">
            <h3 class="ibilling-page-header">Projects</h3>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="tabs-container" style="max-width: 800px;">
                <ul class="nav nav-tabs">
                    <li><a class="nav-link active show" href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
projects">Projects</a></li>

                    <?php if ($_smarty_tpl->tpl_vars['project']->value) {?>
                        <li class="active"><a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
projects/project"><?php echo $_smarty_tpl->tpl_vars['project']->value->name;?>
</a></li>
                    <?php } else { ?>
                        <li class="active"><a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
projects/project">Create New Project</a></li>
                    <?php }?>

                </ul>
                <div class="tab-content">
                    <div class="tab-pane active show">
                        <div class="panel-body" style="background-color: #fff;">



                            <div class="ibox" style="box-shadow: none; border-radius: 0;" id="clx_form_box">

                                <div class="ibox-content">


                                    <form method="post" id="mainForm" action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
projects/project-save">


                                        <div class="form-group">
                                            <label for="inputName"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Name'];?>
</label>
                                            <input class="form-control" name="name" required id="inputName" data-pristine-required data-pristine-required-message="<?php echo $_smarty_tpl->tpl_vars['_L']->value['This field is required'];?>
" <?php if ($_smarty_tpl->tpl_vars['project']->value) {?>value="<?php echo $_smarty_tpl->tpl_vars['project']->value->name;?>
"<?php }?> >
                                        </div>


                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="project_manager_id"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Project Manager'];?>
</label>
                                                    <select class="form-control" id="project_manager_id" name="project_manager_id">
                                                        <option value="0"><?php echo $_smarty_tpl->tpl_vars['_L']->value['None'];?>
</option>
                                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['staffs']->value, 'staff');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['staff']->value) {
?>
                                                            <option value="<?php echo $_smarty_tpl->tpl_vars['staff']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['staff']->value->fullname;?>
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
                                                    <label for="contact_id"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Customer'];?>
</label>
                                                    <select class="form-control" id="contact_id" name="contact_id">
                                                        <option value="0"><?php echo $_smarty_tpl->tpl_vars['_L']->value['None'];?>
</option>
                                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['contacts']->value, 'contact');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['contact']->value) {
?>
                                                            <option value="<?php echo $_smarty_tpl->tpl_vars['contact']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['contact']->value->account;?>
</option>
                                                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Start Date</label>
                                                    <input type="text" class="form-control"  value="<?php echo date('Y-m-d');?>
" name="start_date" id="start_date" datepicker data-date-format="yyyy-mm-dd" data-auto-close="true">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Due Date</label>
                                                    <input type="text" class="form-control"  value="<?php echo date('Y-m-d',strtotime('+15 days'));?>
" name="due_date" id="due_date" datepicker data-date-format="yyyy-mm-dd" data-auto-close="true">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Type</label>
                                                    <select class="form-control">
                                                        <option>Internal Project</option>
                                                        <option>Hourly Rate</option>
                                                        <option>Fixed Rate</option>
                                                    </select>
                                                </div>
                                            </div>


                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="currency"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Currency'];?>
</label>
                                                    <select id="currency" name="currency" class="form-control">

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
                                                                    <?php }?>><?php echo $_smarty_tpl->tpl_vars['currency']->value['iso_code'];?>
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
                                                    <label>Budget</label>
                                                    <input class="form-control" name="budget" id="budget">
                                                </div>
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <label for="content"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Description'];?>
</label>
                                            <textarea id="content" class="form-control" name="description"><?php if ($_smarty_tpl->tpl_vars['project']->value) {
echo $_smarty_tpl->tpl_vars['project']->value->description;
}?></textarea>
                                        </div>



                                        <div class="hr-line-dashed"></div>

                                        <div class="form-group">

                                            <?php if ($_smarty_tpl->tpl_vars['project']->value) {?>
                                                <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['project']->value->id;?>
">
                                            <?php } else { ?>
                                                <input type="hidden" name="id" value="">
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


<?php
}
}
/* {/block "content"} */
/* {block "script"} */
class Block_18248248575ded2b5b228334_56485043 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_18248248575ded2b5b228334_56485043',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
ui/lib/tinymce/tinymce.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
ui/lib/js/editor.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
ui/lib/s2/js/select2.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
ui/lib/dp/dist/datepicker.min.js"><?php echo '</script'; ?>
>

    <?php echo '<script'; ?>
>


        $(function () {

            var form = document.getElementById("mainForm");
            var pristine = new Pristine(form);

            ib_editor("#content");

            $("#contact_id").select2({
                    theme: "bootstrap",
                    language: {
                        noResults: function () {
                            return $("#_lan_no_results_found").val();
                        }
                    }
                }
            );

            $("#project_manager_id").select2({
                    theme: "bootstrap",
                    language: {
                        noResults: function () {
                            return $("#_lan_no_results_found").val();
                        }
                    }
                }
            );

            $('[data-toggle="datepicker"]').datepicker();

            $("#mainForm").submit(function (e) {

                e.preventDefault();

                if(pristine.validate())
                {
                    $('#clx_form_box').block({ message:block_msg });

                    $.post('<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
projects/project-save', $( "#mainForm" ).serialize())
                        .done(function (data) {
                            window.location = '<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
projects';
                        }).fail(function(data) {
                        $('#clx_form_box').unblock();
                        spNotify(data.responseText,'error');
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
