<?php
/* Smarty version 3.1.33, created on 2019-12-08 11:57:54
  from '/Users/razib/Documents/valet/business-suite/ui/theme/default/projects_files.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ded2b92168971_62356797',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ce84621c2a5c2f3cb82e1589f5b640b014dd0582' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/default/projects_files.tpl',
      1 => 1575824191,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ded2b92168971_62356797 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1967935105ded2b9215c1c4_57729699', "style");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15836105675ded2b9215d431_30091022', "project_content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4768304425ded2b921667e5_74559333', "script");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "project_base.tpl");
}
/* {block "style"} */
class Block_1967935105ded2b9215c1c4_57729699 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'style' => 
  array (
    0 => 'Block_1967935105ded2b9215c1c4_57729699',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
ui/lib/modal.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
ui/lib/dropzone/dropzone.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
ui/lib/footable/css/footable.core.min.css" />
<?php
}
}
/* {/block "style"} */
/* {block "project_content"} */
class Block_15836105675ded2b9215d431_30091022 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'project_content' => 
  array (
    0 => 'Block_15836105675ded2b9215d431_30091022',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="row">
        <div class="col-md-12">
            <a data-toggle="modal" href="#modal_add_item" class="btn btn-primary add_document waves-effect waves-light" id="add_document"><i class="fa fa-plus"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['New Document'];?>
</a>
            <div class="hr-line-dashed"></div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <form class="form-horizontal" method="post" action="">
                <div class="form-group">
                    <div class="col-md-12">
                        <div class="input-group">
                            <div class="input-group-addon">
                                <span class="fa fa-search"></span>
                            </div>
                            <input type="text" name="name" id="foo_filter" class="form-control" placeholder="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Search'];?>
..."/>

                        </div>
                    </div>

                </div>
            </form>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <table class="table table-bordered table-hover sys_table footable" id="footable_tbl"  data-filter="#foo_filter" data-page-size="50">
                <thead>
                <tr>

                    <th class="text-right" data-sort-ignore="true" width="20px;"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Type'];?>
</th>

                    <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Title'];?>
</th>


                    <th class="text-right" data-sort-ignore="true" width="200px;"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Manage'];?>
</th>

                </tr>
                </thead>
                <tbody>

                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['files']->value, 'file');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['file']->value) {
?>

                    <tr>

                        <td>
                            <?php if ($_smarty_tpl->tpl_vars['file']->value->file_mime_type == 'jpg' || $_smarty_tpl->tpl_vars['file']->value->file_mime_type == 'png' || $_smarty_tpl->tpl_vars['file']->value->file_mime_type == 'gif') {?>
                                <i class="fa fa-file-image-o"></i>
                            <?php } elseif ($_smarty_tpl->tpl_vars['file']->value->file_mime_type == 'pdf') {?>
                                <i class="fa fa-file-pdf-o"></i>
                            <?php } elseif ($_smarty_tpl->tpl_vars['file']->value->file_mime_type == 'zip') {?>
                                <i class="fa fa-file-archive-o"></i>
                            <?php } else { ?>
                                <i class="fa fa-file"></i>
                            <?php }?>
                        </td>


                        <td>

                            <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
documents/view/<?php echo $_smarty_tpl->tpl_vars['file']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['file']->value->title;?>
</a>

                        </td>



                        <td class="text-right">

                            <a href="#" class="btn btn-primary btn-xs c_link" data-token="<?php echo $_smarty_tpl->tpl_vars['file']->value->id;?>
_<?php echo $_smarty_tpl->tpl_vars['file']->value->file_dl_token;?>
"><i class="fa fa-link"></i> </a>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
documents/view/<?php echo $_smarty_tpl->tpl_vars['file']->value->id;?>
/" class="btn btn-success btn-xs"><i class="fa fa-search"></i> </a>

                            <a href="#" class="btn btn-danger btn-xs cdelete" id="did<?php echo $_smarty_tpl->tpl_vars['file']->value->id;?>
"><i class="fa fa-trash"></i> </a>
                        </td>
                    </tr>

                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                </tbody>

                <tfoot>
                <tr>
                    <td colspan="3">
                        <ul class="pagination">
                        </ul>
                    </td>
                </tr>
                </tfoot>

            </table>
        </div>
    </div>

    <div id="modal_add_item" class="modal fade" tabindex="-1" data-width="760" style="display: none;">

        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h4 class="modal-title"><?php echo $_smarty_tpl->tpl_vars['_L']->value['New Document'];?>
</h4>
        </div>
        <div class="modal-body">
            <div class="row">

                <div class="col-md-12">

                    <form>
                        <div class="form-group">
                            <label for="doc_title"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Title'];?>
</label>
                            <input type="text" class="form-control" id="doc_title" name="doc_title">

                        </div>





                    </form>

                    <hr>

                    <form action="" class="dropzone" id="upload_container">

                        <div class="dz-message">
                            <h3> <i class="fa fa-cloud-upload"></i>  <?php echo $_smarty_tpl->tpl_vars['_L']->value['Drop File Here'];?>
</h3>
                            <br />
                            <span class="note"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Click to Upload'];?>
</span>
                        </div>

                    </form>


                </div>






            </div>
        </div>
        <div class="modal-footer">
            <input type="hidden" name="file_link" id="file_link" value="">
            <button type="button" data-dismiss="modal" class="btn btn-danger"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Close'];?>
</button>
            <button type="button" id="btn_add_file" class="btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Submit'];?>
</button>
        </div>

    </div>

<?php
}
}
/* {/block "project_content"} */
/* {block "script"} */
class Block_4768304425ded2b921667e5_74559333 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_4768304425ded2b921667e5_74559333',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
ui/lib/footable/js/footable.all.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
ui/lib/modal.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
ui/lib/dropzone/dropzone.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
ui/lib/footable/js/footable.all.min.js"><?php echo '</script'; ?>
>


    <?php echo '<script'; ?>
>

        Dropzone.autoDiscover = false;

        $(function () {

            var _url = $("#_url").val();

            $.fn.modal.defaults.width = '700px';

            var $modal = $('#ajax-modal');

            $('[data-toggle="tooltip"]').tooltip();

            var $btn_add_file = $("#btn_add_file");

            var $file_link = $("#file_link");

            var upload_resp;

            var footable_tbl = $("#footable_tbl");

            footable_tbl.footable();


            var ib_file = new Dropzone("#upload_container",
                {
                    url: _url + "documents/upload/",
                    maxFiles: 1
                }
            );


            ib_file.on("sending", function() {

                $btn_add_file.prop('disabled', true);

            });

            ib_file.on("success", function(file,response) {

                $btn_add_file.prop('disabled', false);

                upload_resp = response;

                if(upload_resp.success == 'Yes'){

                    toastr.success(upload_resp.msg);
                    $file_link.val(upload_resp.file);


                }
                else{
                    toastr.error(upload_resp.msg);
                }


            });




            var $doc_title = $("#doc_title");

            var is_global = '0';


            $btn_add_file.on('click', function(e) {
                e.preventDefault();


                $.post( _url + "documents/post/", {
                    title: $doc_title.val(),
                    file_link: $file_link.val(),
                    is_global: is_global,
                    rid: <?php echo $_smarty_tpl->tpl_vars['project']->value->id;?>
,
                    rtype: 'project',
                })
                    .done(function( data ) {

                        if ($.isNumeric(data)) {

                            location.reload();

                        }

                        else {
                            toastr.error(data);
                        }




                    });


            });


            $(".cdelete").click(function (e) {
                e.preventDefault();
                var id = this.id;
                bootbox.confirm(_L['are_you_sure'], function(result) {
                    if(result){
                        window.location.href = _url + "delete/document/" + id + '/';
                    }
                });
            });




            $(".cedit").click(function (e) {
                e.preventDefault();
                var id = this.id;

                $('body').modalmanager('loading');

                $modal.load( _url + 'contacts/modal_add_company/'+ id + '/', '', function(){

                    $modal.modal();

                });

            });

            var dl_token;

            $(".c_link").click(function (e) {
                e.preventDefault();

                dl_token = $(this).attr("data-token")
                bootbox.prompt({
                    title: "Secure Download Link",
                    value: "<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
client/dl/" + dl_token,
                    buttons: {
                        'cancel': {
                            label: 'Cancel'
                        },
                        'confirm': {
                            label: 'OK'
                        }
                    },
                    callback: function(result) {

                    }
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
