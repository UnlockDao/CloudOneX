<?php
/* Smarty version 3.1.33, created on 2019-11-28 16:38:55
  from '/Users/razib/Documents/valet/business-suite/ui/theme/default/contacts_drive.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5de03e6f123874_29940802',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5dd03b27be5a68176f6bc0085be7a31f1d695dd0' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/default/contacts_drive.tpl',
      1 => 1574721384,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5de03e6f123874_29940802 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13246316215de03e6f119aa8_71666252', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17568637575de03e6f1232b4_65561601', 'script');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "content"} */
class Block_13246316215de03e6f119aa8_71666252 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_13246316215de03e6f119aa8_71666252',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>



    <div class="row">



        <div class="col-md-12">



            <div class="panel panel-default">

                <div class="panel-body">

                    <h3>Files uploaded by Customers</h3>
                    <hr>

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

                    <table class="table table-bordered table-hover sys_table footable" id="footable_tbl"  data-filter="#foo_filter" data-page-size="50">



                        <?php if ($_smarty_tpl->tpl_vars['files']->value->count() > 0) {?>
                        <tbody>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['files']->value, 'file');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['file']->value) {
?>

                                <tr>

                                    <td>

                                        <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
client/dl/<?php echo $_smarty_tpl->tpl_vars['file']->value->id;?>
_<?php echo $_smarty_tpl->tpl_vars['file']->value->file_dl_token;?>
/"><?php if ($_smarty_tpl->tpl_vars['file']->value->file_mime_type == 'jpg' || $_smarty_tpl->tpl_vars['file']->value->file_mime_type == 'png' || $_smarty_tpl->tpl_vars['file']->value->file_mime_type == 'gif') {?>
                                            <i class="fa fa-file-image-o"></i>
                                            <?php } elseif ($_smarty_tpl->tpl_vars['file']->value->file_mime_type == 'pdf') {?>
                                            <i class="fa fa-file-pdf-o"></i>
                                            <?php } elseif ($_smarty_tpl->tpl_vars['file']->value->file_mime_type == 'zip') {?>
                                            <i class="fa fa-file-archive-o"></i>
                                            <?php } else { ?>
                                            <i class="fa fa-file"></i>
                                            <?php }?> <?php echo $_smarty_tpl->tpl_vars['file']->value->title;?>
</a>

                                        <br>

                                        <p style="margin-top: 10px;">

                                            <?php if (isset($_smarty_tpl->tpl_vars['contacts']->value[$_smarty_tpl->tpl_vars['file']->value->cid][0]['account'])) {?>
                                                <?php echo $_smarty_tpl->tpl_vars['_L']->value['Customer'];?>
:  <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
contacts/view/<?php echo $_smarty_tpl->tpl_vars['file']->value->cid;?>
"><?php echo $_smarty_tpl->tpl_vars['contacts']->value[$_smarty_tpl->tpl_vars['file']->value->cid][0]['account'];?>
</a> |
                                            <?php }?> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Uploaded at'];?>
: <?php echo date($_smarty_tpl->tpl_vars['config']->value['df'],strtotime($_smarty_tpl->tpl_vars['file']->value->created_at));?>


                                        </p>



                                    </td>



                                </tr>

                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                        </tbody>

                            <tfoot>
                            <tr>
                                <td>
                                    <ul class="pagination">
                                    </ul>
                                </td>
                            </tr>
                            </tfoot>

                            <?php } else { ?>

                            <tr>
                                <td>
                                    <?php echo $_smarty_tpl->tpl_vars['_L']->value['No Data Available'];?>

                                </td>
                            </tr>

                        <?php }?>



                    </table>

                </div>
            </div>
        </div>



    </div>

<?php
}
}
/* {/block "content"} */
/* {block 'script'} */
class Block_17568637575de03e6f1232b4_65561601 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_17568637575de03e6f1232b4_65561601',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <?php echo '<script'; ?>
>

        $(function () {

            var footable_tbl = $("#footable_tbl");

            footable_tbl.footable();


        })

    <?php echo '</script'; ?>
>


<?php
}
}
/* {/block 'script'} */
}
