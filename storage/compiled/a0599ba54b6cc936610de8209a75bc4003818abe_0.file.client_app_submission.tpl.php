<?php
/* Smarty version 3.1.33, created on 2019-09-24 12:25:55
  from '/Users/razib/Documents/valet/suite/apps/app/views/client_app_submission.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d8a4393d2d446_46505203',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a0599ba54b6cc936610de8209a75bc4003818abe' => 
    array (
      0 => '/Users/razib/Documents/valet/suite/apps/app/views/client_app_submission.tpl',
      1 => 1569341890,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d8a4393d2d446_46505203 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11568169985d8a4393d290c1_32247575', "style");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11092953235d8a4393d2a279_39452494', "content");
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9950460845d8a4393d2c1b8_01693122', "script");
}
/* {block "style"} */
class Block_11568169985d8a4393d290c1_32247575 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'style' => 
  array (
    0 => 'Block_11568169985d8a4393d290c1_32247575',
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
class Block_11092953235d8a4393d2a279_39452494 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_11092953235d8a4393d2a279_39452494',
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
class Block_9950460845d8a4393d2c1b8_01693122 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_9950460845d8a4393d2c1b8_01693122',
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
