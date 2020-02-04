<?php
/* Smarty version 3.1.33, created on 2019-10-07 03:49:28
  from '/Users/razib/Documents/valet/business-suite/apps/app/views/client_app_submission.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d9aee082f38a9_50348304',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd0862bcb53d05a8a5ce257551297f19064ced8b8' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/apps/app/views/client_app_submission.tpl',
      1 => 1569341890,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d9aee082f38a9_50348304 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2140231045d9aee082ef126_62826255', "style");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17321464105d9aee082f0305_86050864', "content");
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12496413385d9aee082f26c2_45429066', "script");
}
/* {block "style"} */
class Block_2140231045d9aee082ef126_62826255 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'style' => 
  array (
    0 => 'Block_2140231045d9aee082ef126_62826255',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
ui/lib/s2/css/select2.min.css" />
<?php
}
}
/* {/block "style"} */
/* {block "content"} */
class Block_17321464105d9aee082f0305_86050864 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_17321464105d9aee082f0305_86050864',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>



    <div class="row">
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-body">
                    <h3>New App Project</h3>
                    <div class="hr-line-dashed"></div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Select App Project</label>
                                <select class="form-control" id="app_project" name="app_project">
                                    <option value="">Select...</option>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['projects']->value, 'project');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['project']->value) {
?>
                                        <option value="<?php echo $_smarty_tpl->tpl_vars['project']->value->uuid;?>
"><?php echo $_smarty_tpl->tpl_vars['project']->value->app_name_eng;?>
</option>
                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </select>
                            </div>
                        </div>
                    </div>

                    <form method="post" id="mainForm">
                        <div id="details_div">

                        </div>
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
class Block_12496413385d9aee082f26c2_45429066 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_12496413385d9aee082f26c2_45429066',
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
>




        $(function () {

            var $app_project = $('#app_project');
            var $details_div = $('#details_div');


            $app_project.select2({
                    theme: "bootstrap"
                }
            ).on('change',function () {


                if($app_project.val() === '')
                    {
                        $details_div.hide();
                    }
                else{


                    $.get( _url + "<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
app/client/xhr_project_details/"+$app_project.val(), function( data ) {

                        $details_div.html(data);

                    });

                    $details_div.show();
                }


            });


            $('#mainForm').on('submit',function (e) {
                e.preventDefault();

                $.post( "<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
app/client/app-submission-post", $('#mainForm').serialize() ).done(function() {
                    window.location = '<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
app/client/submission-status/'+$app_project.val();
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
