<?php
/* Smarty version 3.1.33, created on 2019-09-24 05:34:03
  from '/Users/razib/Documents/valet/suite/apps/app/views/client_project.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d89e30b09e072_47643969',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fee3a31b4d517c0619a536ee8f73ab2f755bf086' => 
    array (
      0 => '/Users/razib/Documents/valet/suite/apps/app/views/client_project.tpl',
      1 => 1569317640,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d89e30b09e072_47643969 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_592340785d89e30b097fb5_83549566', "style");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8175059035d89e30b099894_14245463', "content");
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15818213135d89e30b09cd57_93875362', "script");
}
/* {block "style"} */
class Block_592340785d89e30b097fb5_83549566 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'style' => 
  array (
    0 => 'Block_592340785d89e30b097fb5_83549566',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
ui/lib/dropzone/dropzone.css" />
<?php
}
}
/* {/block "style"} */
/* {block "content"} */
class Block_8175059035d89e30b099894_14245463 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_8175059035d89e30b099894_14245463',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>



    <div class="row">
        <div class="col-md-8">
            <div class="panel">
                <div class="panel-body">
                    <h3>New App Project</h3>
                    <div class="hr-line-dashed"></div>


                    <div class="row">
                        <div class="col-md-4">
                            <form action="" class="dropzone" id="upload_container">

                                <div class="dz-message">
                                    <h3>App Icon</h3>
                                    <div class="hr-line-dashed"></div>
                                    <h3> <i class="fa fa-cloud-upload"></i>  <?php echo $_smarty_tpl->tpl_vars['_L']->value['Drop File Here'];?>
</h3>
                                    <br />
                                    <span class="note"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Click to Upload'];?>
</span>
                                </div>

                            </form>
                        </div>
                        <div class="col-md-8">
                            <form method="post" id="mainForm">
                                <div class="form-group">
                                    <label for="inputName">Name</label>
                                    <input class="form-control" id="company" name="company"  value="<?php echo $_smarty_tpl->tpl_vars['user']->value->account;?>
" disabled>
                                </div>


                                <div class="form-group">
                                    <label>Email</label>
                                    <input class="form-control" name="name" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->email;?>
" disabled>
                                </div>

                                    <div class="form-group">
                                        <label>App Name (Eng / OV)<sup>*</sup></label>
                                        <input class="form-control" name="app_name_eng">
                                    </div>

                                    <div class="form-group">
                                        <label>App Description (Eng / OV)<sup>*</sup></label>
                                        <textarea class="form-control" rows="8" name="app_description_eng"></textarea>
                                    </div>

                                    <div class="form-group">
                                        <label>App Name (CHS)<sup>*</sup></label>
                                        <input class="form-control" name="app_name_chs">
                                    </div>

                                    <div class="form-group">
                                        <label>App Description (CHS)<sup>*</sup></label>
                                        <textarea class="form-control" rows="8" name="app_description_chs"></textarea>
                                    </div>

                                    <div class="form-group">
                                        <label>Document</label>
                                        <input type="file">
                                        <span class="help-block">Please upload the <a href="#">legal documents required</a> for
submission of your app to app stores in China *  </span>
                                    </div>

                                    <div class="form-group">

                                        <?php if ($_smarty_tpl->tpl_vars['project']->value) {?>
                                            <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['project']->value->id;?>
">
                                        <?php } else { ?>
                                            <input type="hidden" name="id" value="">
                                        <?php }?>

                                        <button class="btn btn-primary" id="btnSubmit" type="submit">Submit</button>
                                    </div>

                                <input type="hidden" name="app_icon" id="app_icon" value="">

                            </form>
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
class Block_15818213135d89e30b09cd57_93875362 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_15818213135d89e30b09cd57_93875362',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
ui/lib/dropzone/dropzone.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
>
        Dropzone.autoDiscover = false;
        $(function () {
            var _url = $("#_url").val();



            $('[data-toggle="tooltip"]').tooltip();

            var $app_icon = $("#app_icon");

            var upload_resp;


            var ib_file = new Dropzone("#upload_container",
                {
                    url: _url + "client/document_upload/",
                    maxFiles: 1
                }
            );


            ib_file.on("sending", function() {



            });

            ib_file.on("success", function(file,response) {
                upload_resp = response;
                if(upload_resp.success === 'Yes'){

                    toastr.success(upload_resp.msg);
                    $app_icon.val(upload_resp.file);

                }
                else{
                    toastr.error(upload_resp.msg);
                }
            });


            $('#btnSubmit').click(function (e) {
                e.preventDefault();
                $.post( "<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
app/client/project-post", $('#mainForm').serialize() ).done(function() {
                    window.location = '<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
app/client/projects';
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
