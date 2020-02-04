<?php
/* Smarty version 3.1.33, created on 2019-10-09 18:39:56
  from '/Users/razib/Documents/valet/business-suite/apps/app/views/admin_project.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d9e61bca43207_45325318',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '85f5025c567b184cf625f5b50dab97b499036322' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/apps/app/views/admin_project.tpl',
      1 => 1570658408,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d9e61bca43207_45325318 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20364409315d9e61bca40962_69581020', "style");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14576018845d9e61bca41c71_08538248', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5204164635d9e61bca42959_76801723', "script");
?>

<?php }
/* {block "style"} */
class Block_20364409315d9e61bca40962_69581020 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'style' => 
  array (
    0 => 'Block_20364409315d9e61bca40962_69581020',
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
class Block_14576018845d9e61bca41c71_08538248 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_14576018845d9e61bca41c71_08538248',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="row">
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-body">
                    <h3><?php echo $_smarty_tpl->tpl_vars['project']->value->app_name_eng;?>
</h3>
                    <div class="hr-line-dashed"></div>



                </div>
            </div>
        </div>
    </div>
<?php
}
}
/* {/block "content"} */
/* {block "script"} */
class Block_5204164635d9e61bca42959_76801723 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_5204164635d9e61bca42959_76801723',
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

        });
    <?php echo '</script'; ?>
>

<?php
}
}
/* {/block "script"} */
}
