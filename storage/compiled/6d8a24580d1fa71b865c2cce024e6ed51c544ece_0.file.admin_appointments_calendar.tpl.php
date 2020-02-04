<?php
/* Smarty version 3.1.33, created on 2019-10-14 13:52:58
  from '/Users/razib/Documents/valet/business-suite/apps/autorepair/views/admin_appointments_calendar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5da4b5fa7969e7_11231355',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6d8a24580d1fa71b865c2cce024e6ed51c544ece' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/apps/autorepair/views/admin_appointments_calendar.tpl',
      1 => 1563363272,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5da4b5fa7969e7_11231355 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16993623785da4b5fa791dd1_71495715', "style");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18090698205da4b5fa793402_43451967', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7177243955da4b5fa793e55_50358470', "script");
}
/* {block "style"} */
class Block_16993623785da4b5fa791dd1_71495715 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'style' => 
  array (
    0 => 'Block_16993623785da4b5fa791dd1_71495715',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
ui/lib/fc/fc.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
ui/lib/fc/fc_ibilling.css" />
<?php
}
}
/* {/block "style"} */
/* {block "content"} */
class Block_18090698205da4b5fa793402_43451967 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_18090698205da4b5fa793402_43451967',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>



    <div class="row">
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-body">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
autorepair/admin/appointment" class="btn btn-primary">New Appointment</a>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">

            <div class="panel panel-default" style="min-height: 400px;" id="calendar_wrap">

                <div class="panel-body">


                    <div id="calendar"></div>


                </div>
            </div>

        </div>
    </div>

<?php
}
}
/* {/block "content"} */
/* {block "script"} */
class Block_7177243955da4b5fa793e55_50358470 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_7177243955da4b5fa793e55_50358470',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
ui/lib/fc/fc.js?ver=306"><?php echo '</script'; ?>
>
    <?php if ($_smarty_tpl->tpl_vars['config']->value['language'] != 'en') {?>
        <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
ui/lib/fc/lang/<?php echo getFCLocale($_smarty_tpl->tpl_vars['clx_language_code']->value);?>
.js"><?php echo '</script'; ?>
>
    <?php }?>
    <?php echo '<script'; ?>
>
        $(function() {

            var $calendar_wrap = $("#calendar_wrap");


            function view_event(id) {
                window.location = base_url + 'autorepair/admin/appointment/' + id;
            }


            var ib_calendar_options = {
                customButtons: { },
                header: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'month,agendaWeek,agendaDay,viewFullCalendar'
                },
                loading: function(isLoading, view) {
                    if (isLoading) {
                        $calendar_wrap.block({ message: block_msg });
                    } else {
                        $calendar_wrap.unblock();
                        $('[data-toggle="tooltip"]').tooltip();
                    }
                },
                editable: true,
                eventLimit: 3,
                lang: '<?php echo getFCLocale($_smarty_tpl->tpl_vars['clx_language_code']->value);?>
',
                isRTL: ib_rtl,
                eventSources: [{
                    url: base_url + 'autorepair/admin/appointments-json',
                    type: 'GET',
                    error: function() {
                        bootbox.alert("Unable to load data.");
                    }
                } ],
                eventRender: function(event, element) {
                    element.attr('title', event._tooltip);
                    element.attr('onclick', event.onclick);
                    element.attr('data-toggle', 'tooltip');
                    if (!event.url) {
                        element.click(function() {
                            view_event(event.eventid);
                        });
                    }
                },
                eventStartEditable: false,
                firstDay: parseInt(ib_calendar_first_day),
            };




            $('#calendar').fullCalendar(ib_calendar_options);





        });



    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block "script"} */
}
