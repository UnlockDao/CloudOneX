<?php
/* Smarty version 3.1.33, created on 2019-12-08 11:56:54
  from '/Users/razib/Documents/valet/business-suite/ui/theme/default/projects_view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ded2b562b8434_64736317',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '493671a2373fa8ce747590ed7d9edd35cda8faa5' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/default/projects_view.tpl',
      1 => 1575824191,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ded2b562b8434_64736317 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17795893005ded2b562b5f60_56358267', "project_content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "project_base.tpl");
}
/* {block "project_content"} */
class Block_17795893005ded2b562b5f60_56358267 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'project_content' => 
  array (
    0 => 'Block_17795893005ded2b562b5f60_56358267',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <div class="row">
        <div class="col-md-9">
            <h3><?php echo $_smarty_tpl->tpl_vars['project']->value->name;?>
</h3>

        </div>

        <div class="col-md-3 text-right">
            <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
projects/project/<?php echo $_smarty_tpl->tpl_vars['project']->value->id;?>
" class="btn btn-primary">Edit</a>
        </div>

    </div>

    <div class="hr-line-dashed"></div>

    <p><?php echo $_smarty_tpl->tpl_vars['project']->value->description;?>
</p>
<?php
}
}
/* {/block "project_content"} */
}
