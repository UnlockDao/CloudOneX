<?php
/* Smarty version 3.1.33, created on 2019-09-23 11:40:22
  from '/Users/razib/Documents/valet/suite/ui/theme/default/users.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d88e766623643_27073538',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ab28e37cb3e5ffc2910fb3c5bc5e261955ebc581' => 
    array (
      0 => '/Users/razib/Documents/valet/suite/ui/theme/default/users.tpl',
      1 => 1556738894,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d88e766623643_27073538 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8920475355d88e766612189_07511677', "style");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6551225275d88e766612f60_45402507', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6367990125d88e766622e70_98761390', "script");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "style"} */
class Block_8920475355d88e766612189_07511677 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'style' => 
  array (
    0 => 'Block_8920475355d88e766612189_07511677',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
ui/lib/footable/css/footable.core.min.css" />
<?php
}
}
/* {/block "style"} */
/* {block "content"} */
class Block_6551225275d88e766612f60_45402507 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_6551225275d88e766612f60_45402507',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="row">
        <div class="col-md-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5><?php echo $_smarty_tpl->tpl_vars['_L']->value['Manage_Users'];?>
</h5>

                </div>
                <div class="ibox-content">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/users-add" class="btn btn-primary"><i class="fa fa-plus"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Add_New_User'];?>
</a>
                    <br>
                    <br>

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

                    <table class="table table-bordered table-hover sys_table footable" data-filter="#foo_filter" data-page-size="50">
                        <thead>
                        <tr>
                            <th style="width: 60px;"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Avatar'];?>
</th>
                            <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Details'];?>
</th>
                            <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Type'];?>
</th>
                            <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Manage'];?>
</th>
                        </tr>
                        </thead>

                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['d']->value, 'ds');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['ds']->value) {
?>
                            <tr>
                                <td><?php if ($_smarty_tpl->tpl_vars['ds']->value['img'] == 'gravatar') {?>
                                        <img src="http://www.gravatar.com/avatar/<?php echo md5(($_smarty_tpl->tpl_vars['ds']->value['username']));?>
?s=60" class="img-circle" alt="<?php echo $_smarty_tpl->tpl_vars['user']->value['fullname'];?>
">
                                    <?php } elseif ($_smarty_tpl->tpl_vars['ds']->value['img'] == '') {?>
                                        <img src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
ui/lib/imgs/default-user-avatar.png" style="max-height: 60px;" alt="">
                                    <?php } else { ?>
                                        <img src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['ds']->value['img'];?>
" class="img-circle" style="max-height: 60px;" alt="<?php echo $_smarty_tpl->tpl_vars['ds']->value['fullname'];?>
">
                                    <?php }?></td>
                                <td>
                                    <?php echo $_smarty_tpl->tpl_vars['ds']->value['fullname'];?>

                                    <br>  <?php echo $_smarty_tpl->tpl_vars['ds']->value['username'];?>

                                    <?php if ($_smarty_tpl->tpl_vars['ds']->value['phonenumber'] != '') {?>
                                        <br> <?php echo $_smarty_tpl->tpl_vars['ds']->value['phonenumber'];?>

                                    <?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['ds']->value['address_line_1'] != '') {?>
                                        <br> <?php echo $_smarty_tpl->tpl_vars['ds']->value['address_line_1'];?>

                                    <?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['ds']->value['address_line_2'] != '') {?>
                                        <br> <?php echo $_smarty_tpl->tpl_vars['ds']->value['address_line_2'];?>

                                    <?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['ds']->value['city'] != '') {?>
                                        <br> <?php echo $_smarty_tpl->tpl_vars['ds']->value['city'];?>

                                    <?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['ds']->value['state'] != '') {?>
                                        <br> <?php echo $_smarty_tpl->tpl_vars['ds']->value['state'];?>
 - <?php echo $_smarty_tpl->tpl_vars['ds']->value['zip'];?>

                                    <?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['ds']->value['country'] != '') {?>
                                        <br> <?php echo $_smarty_tpl->tpl_vars['ds']->value['country'];?>

                                    <?php }?>
                                </td>

                                <td>
                                    <?php echo ib_lan_get_line($_smarty_tpl->tpl_vars['ds']->value['user_type']);?>


                                    <?php if (isset($_smarty_tpl->tpl_vars['relations']->value[$_smarty_tpl->tpl_vars['ds']->value['id']])) {?>
                                        <hr>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['relations']->value[$_smarty_tpl->tpl_vars['ds']->value['id']], 'relation');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['relation']->value) {
?>

                                            <?php if (isset($_smarty_tpl->tpl_vars['departments']->value[$_smarty_tpl->tpl_vars['relation']->value])) {?>
                                                <span class="label label-success"><?php echo $_smarty_tpl->tpl_vars['departments']->value[$_smarty_tpl->tpl_vars['relation']->value]->dname;?>
</span>
                                            <?php }?>

                                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    <?php }?>


                                </td>
                                <td>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/users-edit/<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
" class="btn btn-inverse"><i class="fa fa-pencil"></i> </a>
                                    <?php if (($_smarty_tpl->tpl_vars['_user']->value['username']) != ($_smarty_tpl->tpl_vars['ds']->value['username'])) {?>
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/users-delete/<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
" class="btn btn-danger cdelete"><i class="fa fa-trash"></i> </a>
                                    <?php }?>
                                </td>
                            </tr>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                        <tfoot>
                        <tr>
                            <td colspan="5">
                                <ul class="pagination">
                                </ul>
                            </td>
                        </tr>
                        </tfoot>

                    </table>

                </div>
            </div>



        </div>



    </div>



<?php
}
}
/* {/block "content"} */
/* {block "script"} */
class Block_6367990125d88e766622e70_98761390 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_6367990125d88e766622e70_98761390',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
ui/lib/footable/js/footable.all.min.js"><?php echo '</script'; ?>
>

    <?php echo '<script'; ?>
>
        $(function () {
            $('.footable').footable();
        });
    <?php echo '</script'; ?>
>

<?php
}
}
/* {/block "script"} */
}
