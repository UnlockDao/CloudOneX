<?php
/* Smarty version 3.1.33, created on 2019-11-25 05:45:25
  from '/Users/razib/Documents/valet/business-suite/ui/theme/default/projects_stream.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ddbb0c5e2b958_56025299',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '04d8e7678a7d7d7cf99fe9140ab1d4e3b72c3be9' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/default/projects_stream.tpl',
      1 => 1574678723,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ddbb0c5e2b958_56025299 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9709324235ddbb0c5e2a895_08454049', "project_content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "project_base.tpl");
}
/* {block "project_content"} */
class Block_9709324235ddbb0c5e2a895_08454049 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'project_content' => 
  array (
    0 => 'Block_9709324235ddbb0c5e2a895_08454049',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <h3><?php echo $_smarty_tpl->tpl_vars['project']->value->name;?>
</h3>
    <div class="hr-line-dashed"></div>
<?php
}
}
/* {/block "project_content"} */
}
