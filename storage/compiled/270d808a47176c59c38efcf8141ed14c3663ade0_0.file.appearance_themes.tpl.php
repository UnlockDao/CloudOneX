<?php
/* Smarty version 3.1.33, created on 2019-11-28 15:44:06
  from '/Users/razib/Documents/valet/business-suite/ui/theme/default/appearance_themes.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5de031969105d3_96254365',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '270d808a47176c59c38efcf8141ed14c3663ade0' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/default/appearance_themes.tpl',
      1 => 1574721384,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5de031969105d3_96254365 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14176161685de031968e8742_98438957', "content");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "content"} */
class Block_14176161685de031968e8742_98438957 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_14176161685de031968e8742_98438957',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="row">
        <div class="col-md-6">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5><?php echo $_smarty_tpl->tpl_vars['_L']->value['Themes'];?>
</h5>

                </div>
                <div class="ibox-content">

                    <form role="form" name="accadd" method="post" action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
appearance/themes_post/">


                        <div class="form-group">
                            <label for="theme"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Theme'];?>
</label>
                            <select name="theme" id="theme" class="form-control">
                                
                                
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, (($tmp = @$_smarty_tpl->tpl_vars['themes']->value)===null||$tmp==='' ? array() : $tmp), 'theme');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['theme']->value) {
?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
"
                                            <?php if ($_smarty_tpl->tpl_vars['config']->value['theme'] == $_smarty_tpl->tpl_vars['theme']->value) {?>selected="selected" <?php }?>><?php echo ucfirst($_smarty_tpl->tpl_vars['theme']->value);?>
</option>
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                            </select>
                        </div>
                        <div class="form-group">
                            <label for="nstyle"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Style'];?>
</label>
                            <select name="nstyle" id="nstyle" class="form-control">
                                <option value="light_blue" <?php if ($_smarty_tpl->tpl_vars['config']->value['nstyle'] == 'light_blue') {?>selected="selected" <?php }?>>Light blue</option>
                                <option value="purple" <?php if ($_smarty_tpl->tpl_vars['config']->value['nstyle'] == 'purple') {?>selected="selected" <?php }?>>Purple</option>
                                <option value="indigo_blue" <?php if ($_smarty_tpl->tpl_vars['config']->value['nstyle'] == 'indigo_blue') {?>selected="selected" <?php }?>>Indigo blue</option>
                                <option value="dark" <?php if ($_smarty_tpl->tpl_vars['config']->value['nstyle'] == 'dark') {?>selected="selected" <?php }?>>Dark sf</option>

                                <option value="blue_extra" <?php if ($_smarty_tpl->tpl_vars['config']->value['nstyle'] == 'blue_extra') {?>selected="selected" <?php }?>>Blue extra</option>
                                <option value="2020" <?php if ($_smarty_tpl->tpl_vars['config']->value['nstyle'] == '2020') {?>selected="selected" <?php }?>>2020</option>
                                <option value="dark_mode" <?php if ($_smarty_tpl->tpl_vars['config']->value['nstyle'] == 'dark_mode') {?>selected="selected" <?php }?>>Dark Mode</option>

                            </select>
                        </div>




                        <button type="submit" class="btn btn-primary"><i class="fa fa-check"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Submit'];?>
</button>
                    </form>

                </div>
            </div>










        </div>




    </div>
<?php
}
}
/* {/block "content"} */
}
