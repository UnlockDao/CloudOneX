<?php
/* Smarty version 3.1.33, created on 2019-11-28 17:29:40
  from '/Users/razib/Documents/valet/business-suite/ui/theme/default/appearance_user_interface.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5de04a548b1a38_51489353',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fc7935b6b310c216cb9515be7f771879f80430a2' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/default/appearance_user_interface.tpl',
      1 => 1574721384,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5de04a548b1a38_51489353 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19461735315de04a54897ad4_78582060', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1517883935de04a548aedf2_25850045', "script");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "content"} */
class Block_19461735315de04a54897ad4_78582060 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_19461735315de04a54897ad4_78582060',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <div class="row">
        <div class="col-md-6">
            <div class="ibox float-e-margins" id="ui_settings">
                <div class="ibox-title">
                    <h5><?php echo $_smarty_tpl->tpl_vars['_L']->value['User Interface'];?>
</h5>


                </div>
                <div class="ibox-content">
                    <table class="table table-hover">
                        <tbody>



                        <tr>
                            <td width="80%"><label for="config_rtl"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Enable RTL'];?>
 </label></td>
                            <td><input type="checkbox" <?php if (get_option('rtl') == '1') {?>checked<?php }?> data-toggle="toggle"
                                       data-size="small" data-on="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Yes'];?>
" data-off="<?php echo $_smarty_tpl->tpl_vars['_L']->value['No'];?>
" id="config_rtl"></td>
                        </tr>


                        <tr>
                            <td width="80%"><label for="config_mininav"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Fold Sidebar Default'];?>
 </label></td>
                            <td><input type="checkbox" <?php if (get_option('mininav') == '1') {?>checked<?php }?> data-toggle="toggle"
                                       data-size="small" data-on="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Yes'];?>
" data-off="<?php echo $_smarty_tpl->tpl_vars['_L']->value['No'];?>
" id="config_mininav">
                            </td>
                        </tr>

                        <tr>
                            <td width="80%"><label for="config_hide_footer"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Hide Footer Copyright'];?>
 </label></td>
                            <td><input type="checkbox" <?php if (get_option('hide_footer') == '1') {?>checked<?php }?>
                                       data-toggle="toggle" data-size="small" data-on="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Yes'];?>
" data-off="<?php echo $_smarty_tpl->tpl_vars['_L']->value['No'];?>
"
                                       id="config_hide_footer"></td>
                        </tr>

                        <tr>
                            <td width="80%"><label for="config_show_sidebar_header">Show sidebar header </label></td>
                            <td><input type="checkbox" <?php if (get_option('show_sidebar_header') == '1') {?>checked<?php }?>
                                       data-toggle="toggle" data-size="small" data-on="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Yes'];?>
" data-off="<?php echo $_smarty_tpl->tpl_vars['_L']->value['No'];?>
"
                                       id="config_show_sidebar_header"></td>
                        </tr>


                        </tbody>
                    </table>

                    <hr>

                    <div class="form-group">
                        <label for="contentAnimation"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Content Animation'];?>
</label>
                        <select name="contentAnimation" id="contentAnimation" class="form-control">

                            <option value="" <?php if ($_smarty_tpl->tpl_vars['config']->value['contentAnimation'] == '') {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['_L']->value['None'];?>
</option>

                            <?php echo $_smarty_tpl->tpl_vars['ca_options']->value;?>


                        </select>
                    </div>


                    <div class="form-group">
                        <label for="contact_set_view_mode"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Customers View Mode'];?>
</label>
                        <select name="contact_set_view_mode" id="contact_set_view_mode" class="form-control">

                            <option value="tbl" <?php if ($_smarty_tpl->tpl_vars['config']->value['contact_set_view_mode'] == 'tbl') {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['_L']->value['Table'];?>
</option>
                            <option value="card" <?php if ($_smarty_tpl->tpl_vars['config']->value['contact_set_view_mode'] == 'card') {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['_L']->value['Card'];?>
</option>
                            <option value="search" <?php if ($_smarty_tpl->tpl_vars['config']->value['contact_set_view_mode'] == 'search') {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['_L']->value['Search'];?>
</option>



                        </select>
                    </div>


                </div>
            </div>
        </div>


        <div class="col-md-6">
            <div class="ibox float-e-margins" id="ui_dashboard_settings">
                <div class="ibox-title">
                    <h5><?php echo $_smarty_tpl->tpl_vars['_L']->value['Dashboard Widgets'];?>
</h5>


                </div>
                <div class="ibox-content">

                    <table class="table table-hover">
                        <tbody>



                        <tr>
                            <td width="80%"><label for="config_dashboard_widgets_tickets"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Tickets'];?>
 </label></td>
                            <td><input type="checkbox" <?php if (isset($_smarty_tpl->tpl_vars['config']->value['dashboard_widgets_tickets']) && $_smarty_tpl->tpl_vars['config']->value['dashboard_widgets_tickets'] == 1) {?>checked<?php }?> data-toggle="toggle" data-size="small" data-on="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Yes'];?>
" data-off="<?php echo $_smarty_tpl->tpl_vars['_L']->value['No'];?>
" id="config_dashboard_widgets_tickets"></td>
                        </tr>


                        <tr>
                            <td width="80%"><label for="config_dashboard_widgets_tasks"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Tasks'];?>
 </label></td>
                            <td><input type="checkbox" <?php if (isset($_smarty_tpl->tpl_vars['config']->value['dashboard_widgets_tasks']) && $_smarty_tpl->tpl_vars['config']->value['dashboard_widgets_tasks'] == 1) {?>checked<?php }?> data-toggle="toggle" data-size="small" data-on="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Yes'];?>
" data-off="<?php echo $_smarty_tpl->tpl_vars['_L']->value['No'];?>
" id="config_dashboard_widgets_tasks"></td>
                        </tr>




                        </tbody>
                    </table>


                    <div class="form-group">
                        <label for="refresh_widget_every">Refresh Widget Every</label>
                        <select name="refresh_widget_every" id="refresh_widget_every" class="form-control">




                            <option value="60000" <?php if (isset($_smarty_tpl->tpl_vars['config']->value['refresh_widget_every']) && $_smarty_tpl->tpl_vars['config']->value['refresh_widget_every'] == '60000') {?>selected<?php }?>>1 minute</option>
                            <option value="120000" <?php if (isset($_smarty_tpl->tpl_vars['config']->value['refresh_widget_every']) && $_smarty_tpl->tpl_vars['config']->value['refresh_widget_every'] == '120000') {?>selected<?php }?>>2 minutes</option>
                            <option value="180000" <?php if (isset($_smarty_tpl->tpl_vars['config']->value['refresh_widget_every']) && $_smarty_tpl->tpl_vars['config']->value['refresh_widget_every'] == '180000') {?>selected<?php }?>>3 minutes</option>
                            <option value="240000" <?php if (isset($_smarty_tpl->tpl_vars['config']->value['refresh_widget_every']) && $_smarty_tpl->tpl_vars['config']->value['refresh_widget_every'] == '240000') {?>selected<?php }?>>4 minutes</option>
                            <option value="300000" <?php if (isset($_smarty_tpl->tpl_vars['config']->value['refresh_widget_every']) && $_smarty_tpl->tpl_vars['config']->value['refresh_widget_every'] == '300000') {?>selected<?php }?>>5 minutes</option>
                            <option value="360000" <?php if (isset($_smarty_tpl->tpl_vars['config']->value['refresh_widget_every']) && $_smarty_tpl->tpl_vars['config']->value['refresh_widget_every'] == '360000') {?>selected<?php }?>>6 minutes</option>
                            <option value="420000" <?php if (isset($_smarty_tpl->tpl_vars['config']->value['refresh_widget_every']) && $_smarty_tpl->tpl_vars['config']->value['refresh_widget_every'] == '420000') {?>selected<?php }?>>7 minutes</option>
                            <option value="480000" <?php if (isset($_smarty_tpl->tpl_vars['config']->value['refresh_widget_every']) && $_smarty_tpl->tpl_vars['config']->value['refresh_widget_every'] == '480000') {?>selected<?php }?>>8 minutes</option>
                            <option value="540000" <?php if (isset($_smarty_tpl->tpl_vars['config']->value['refresh_widget_every']) && $_smarty_tpl->tpl_vars['config']->value['refresh_widget_every'] == '540000') {?>selected<?php }?>>9 minutes</option>
                            <option value="600000" <?php if (isset($_smarty_tpl->tpl_vars['config']->value['refresh_widget_every']) && $_smarty_tpl->tpl_vars['config']->value['refresh_widget_every'] == '600000') {?>selected<?php }?>>10 minutes</option>
                            <option value="660000" <?php if (isset($_smarty_tpl->tpl_vars['config']->value['refresh_widget_every']) && $_smarty_tpl->tpl_vars['config']->value['refresh_widget_every'] == '660000') {?>selected<?php }?>>11 minutes</option>
                            <option value="720000" <?php if (isset($_smarty_tpl->tpl_vars['config']->value['refresh_widget_every']) && $_smarty_tpl->tpl_vars['config']->value['refresh_widget_every'] == '720000') {?>selected<?php }?>>12 minutes</option>
                            <option value="780000" <?php if (isset($_smarty_tpl->tpl_vars['config']->value['refresh_widget_every']) && $_smarty_tpl->tpl_vars['config']->value['refresh_widget_every'] == '780000') {?>selected<?php }?>>13 minutes</option>
                            <option value="840000" <?php if (isset($_smarty_tpl->tpl_vars['config']->value['refresh_widget_every']) && $_smarty_tpl->tpl_vars['config']->value['refresh_widget_every'] == '840000') {?>selected<?php }?>>14 minutes</option>
                            <option value="900000" <?php if (isset($_smarty_tpl->tpl_vars['config']->value['refresh_widget_every']) && $_smarty_tpl->tpl_vars['config']->value['refresh_widget_every'] == '900000') {?>selected<?php }?>>15 minutes</option>

                        </select>


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
class Block_1517883935de04a548aedf2_25850045 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_1517883935de04a548aedf2_25850045',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
>
        $(document).ready(function () {



            var _url = $("#_url").val();







            $('#config_rtl').change(function() {

                $('#ui_settings').block({ message: null });


                if($(this).prop('checked')){

                    $.post( _url+'settings/update_option/', { opt: "rtl", val: "1" })
                        .done(function( data ) {
                            $('#ui_settings').unblock();
                            location.reload();
                        });

                }
                else{
                    $.post( _url+'settings/update_option/', { opt: "rtl", val: "0" })
                        .done(function( data ) {
                            $('#ui_settings').unblock();
                            location.reload();
                        });
                }
            });

            $('#config_mininav').change(function() {

                $('#ui_settings').block({ message: null });


                if($(this).prop('checked')){

                    $.post( _url+'settings/update_option/', { opt: "mininav", val: "1" })
                        .done(function( data ) {
                            $('#ui_settings').unblock();
                            location.reload();
                        });

                }
                else{
                    $.post( _url+'settings/update_option/', { opt: "mininav", val: "0" })
                        .done(function( data ) {
                            $('#ui_settings').unblock();
                            location.reload();
                        });
                }
            });

            $('#config_hide_footer').change(function() {

                $('#ui_settings').block({ message: null });


                if($(this).prop('checked')){

                    $.post( _url+'settings/update_option/', { opt: "hide_footer", val: "1" })
                        .done(function( data ) {
                            $('#ui_settings').unblock();
                            location.reload();
                        });

                }
                else{
                    $.post( _url+'settings/update_option/', { opt: "hide_footer", val: "0" })
                        .done(function( data ) {
                            $('#ui_settings').unblock();
                            location.reload();
                        });
                }
            });

            $('#config_show_sidebar_header').change(function() {

                $('#ui_settings').block({ message: null });


                if($(this).prop('checked')){

                    $.post( _url+'settings/update_option/', { opt: "show_sidebar_header", val: "1" })
                        .done(function( data ) {
                            $('#ui_settings').unblock();
                            location.reload();
                        });

                }
                else{
                    $.post( _url+'settings/update_option/', { opt: "show_sidebar_header", val: "0" })
                        .done(function( data ) {
                            $('#ui_settings').unblock();
                            location.reload();
                        });
                }
            });



            var $contentAnimation = $("#contentAnimation");


            $contentAnimation.change(function() {

                $('#ui_settings').block({ message: null });

                $.post( _url+'settings/update_option/', { opt: "contentAnimation", val: $contentAnimation.val() })
                    .done(function( data ) {
                        $('#ui_settings').unblock();
                        location.reload();
                    });


            });

            var $contact_set_view_mode = $("#contact_set_view_mode");

            $contact_set_view_mode.change(function() {

                window.location = base_url + 'contacts/set_view_mode/' + $contact_set_view_mode.val() + '/';


            });


            var $ui_dashboard_settings = $('#ui_dashboard_settings');

            $('#config_dashboard_widgets_tickets').change(function() {

                $ui_dashboard_settings.block({ message: null });


                if($(this).prop('checked')){

                    $.post( _url+'settings/update_option/', { opt: "dashboard_widgets_tickets", val: "1" })
                        .done(function( data ) {
                            location.reload();
                        });

                }
                else{
                    $.post( _url+'settings/update_option/', { opt: "dashboard_widgets_tickets", val: "0" })
                        .done(function( data ) {
                            location.reload();
                        });
                }
            });



            $('#config_dashboard_widgets_tasks').change(function() {

                $ui_dashboard_settings.block({ message: null });


                if($(this).prop('checked')){

                    $.post( _url+'settings/update_option/', { opt: "dashboard_widgets_tasks", val: "1" })
                        .done(function( data ) {
                            location.reload();
                        });

                }
                else{
                    $.post( _url+'settings/update_option/', { opt: "dashboard_widgets_tasks", val: "0" })
                        .done(function( data ) {
                            location.reload();
                        });
                }
            });


            $('#refresh_widget_every').change(function() {

                $ui_dashboard_settings.block({ message: null });

                $.post( _url+'settings/update_option/', { opt: "refresh_widget_every", val: $('#refresh_widget_every').val() })
                    .done(function( data ) {
                        location.reload();
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
