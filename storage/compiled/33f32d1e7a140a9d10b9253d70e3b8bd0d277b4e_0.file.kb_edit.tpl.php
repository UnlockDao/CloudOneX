<?php
/* Smarty version 3.1.33, created on 2019-11-28 17:22:16
  from '/Users/razib/Documents/valet/business-suite/ui/theme/default/kb_edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5de04898a11444_31713769',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '33f32d1e7a140a9d10b9253d70e3b8bd0d277b4e' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/default/kb_edit.tpl',
      1 => 1574721384,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5de04898a11444_31713769 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19248294335de04898a0d114_89499966', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "content"} */
class Block_19248294335de04898a0d114_89499966 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_19248294335de04898a0d114_89499966',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>



    <div class="row kb-page">
                                                        <div class="col-md-8" id="kb_add_area">
            <div class="panel panel-default">
                <h3 class="panel-heading">Add New Article </h3>
                <div class="panel-body">


                    <form id="ib_form" class="form-horizontal push-10-t push-10" method="post">

                        <div class="form-group">
                            <div class="col-xs-12">
                                <div class="form-material floating">
                                    <input class="form-control" type="text" id="title" name="title" value="<?php echo $_smarty_tpl->tpl_vars['val']->value['title'];?>
" autofocus>
                                    <label for="title">Title</label>

                                </div>
                            </div>
                        </div>


                        <div class="form-group">
                            <div class="col-xs-12">
                                <textarea class="form-control" id="description" name="description" rows="3"><?php echo $_smarty_tpl->tpl_vars['val']->value['description'];?>
</textarea>
                            </div>
                        </div>





                        <div class="form-group">
                            <div class="col-xs-12">




                                
                                <input type="hidden" name="kbid" id="kbid" value="<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
">

                                <button class="btn btn-primary" id="ib_form_submit" type="submit"><i class="fa fa-send push-5-r"></i> Submit</button>
                            </div>
                        </div>
                    </form>


                </div>
            </div>
        </div>

        <div class="col-md-4">

            <div class="panel panel-default">
                <h3 class="panel-heading">Group </h3>

                <div class="panel-body">


                    <form id="ib_add_group" class="form-horizontal push-10-t push-10" method="post">

                        <div class="form-group">
                            <div class="col-xs-12">
                                <div class="form-material floating">
                                    <input class="form-control" type="text" id="gname" name="gname">
                                    <label for="gname">Group Name</label>

                                </div>
                            </div>
                        </div>



                        <div class="form-group">
                            <div class="col-xs-12">


                                <button class="btn btn-primary" id="ib_add_group_submit" type="submit"><i class="fa fa-check push-5-r"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Save'];?>
</button>
                            </div>
                        </div>
                    </form>


                    <div id="div_groups">

                    </div>



                </div>
            </div>

            <div class="panel panel-default">
                <h3 class="panel-heading">Latest Articles </h3>

                <div class="panel-body">


                    <div class="topics-list">
                        <ul>

                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['kbs']->value, 'kb');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['kb']->value) {
?>
                                <li><a href="javascript:void(0)" id="k<?php echo $_smarty_tpl->tpl_vars['kb']->value['id'];?>
" class="kb_view"> <?php echo $_smarty_tpl->tpl_vars['kb']->value['title'];?>
 </a></li>

                                <?php
}
} else {
?>
                                <p class="text-center">You do not have any Article</p>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                        </ul>
                    </div>


                </div>
            </div>
        </div>
    </div>


<?php
}
}
/* {/block "content"} */
}
