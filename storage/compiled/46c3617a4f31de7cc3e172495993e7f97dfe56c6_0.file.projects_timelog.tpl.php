<?php
/* Smarty version 3.1.33, created on 2019-12-08 12:38:51
  from '/Users/razib/Documents/valet/business-suite/ui/theme/default/projects_timelog.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ded352b15a386_14830539',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '46c3617a4f31de7cc3e172495993e7f97dfe56c6' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/default/projects_timelog.tpl',
      1 => 1575826726,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ded352b15a386_14830539 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10888217875ded352b14d996_23176516', "style");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9838453445ded352b14f6d8_05762271', "project_content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18521862755ded352b154a37_19565481', "script");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "project_base.tpl");
}
/* {block "style"} */
class Block_10888217875ded352b14d996_23176516 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'style' => 
  array (
    0 => 'Block_10888217875ded352b14d996_23176516',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
ui/lib/timepicker/jquery.timepicker.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
ui/lib/dp/dist/datepicker.min.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
ui/lib/spectrum/spectrum.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
ui/lib/modal.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
ui/lib/fc/fc.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
ui/lib/fc/fc_ibilling.css" />
<?php
}
}
/* {/block "style"} */
/* {block "project_content"} */
class Block_9838453445ded352b14f6d8_05762271 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'project_content' => 
  array (
    0 => 'Block_9838453445ded352b14f6d8_05762271',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <h3><?php echo $_smarty_tpl->tpl_vars['project']->value->name;?>
</h3>
    <div class="hr-line-dashed"></div>

    <div style="min-height: 400px;" id="calendar_wrap">
        <div id="calendar"></div>
    </div>

    <div id="modal_add_event" data-backdrop="static" class="modal fade-scale" tabindex="-1" data-width="800" style="display: none;">
        <form id="ib_modal_form">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title" id="modal_title"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Add Event'];?>
</h4>
            </div>
            <div class="modal-body">
                <div class="row">





                    <div class="form-group col-md-12">
                        <label for="title"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Event Name'];?>
</label>
                        <input type="text" class="form-control" id="title" name="title" value="" required>
                    </div>



                    <div class="form-group col-md-6">
                        <label for="start"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Start Date'];?>
</label>
                        <input type="text" class="form-control" datepicker data-date-format="yyyy-mm-dd" data-auto-close="true" id="start" placeholder="Select Date" name="start" value="<?php echo $_smarty_tpl->tpl_vars['mdate']->value;?>
">
                    </div>

                    <div class="form-group col-md-6" id="start_time_div">
                        <label for="start_time"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Start Time'];?>
</label>
                        <div class="input-group">

                            <input type="text" id="start_time" name="start_time" class="form-control" value="09:30am">

                            <span class="input-group-addon" id="start_time_picker_icon"><span class="glyphicon glyphicon-time"></span></span>
                        </div>
                    </div>



                    <div class="form-group col-md-6">
                        <label for="end"><?php echo $_smarty_tpl->tpl_vars['_L']->value['End Date'];?>
</label>
                        <input type="text" class="form-control" datepicker data-date-format="yyyy-mm-dd" data-auto-close="true" id="end" name="end" value="">
                    </div>

                    <div class="form-group col-md-6" id="end_time_div">
                        <label for="end_time"><?php echo $_smarty_tpl->tpl_vars['_L']->value['End Time'];?>
</label>
                        <div class="input-group">

                            <input type="text" class="form-control" id="end_time" name="end_time" value="11:30am">
                            <span class="input-group-addon" id="end_time_picker_icon"><span class="glyphicon glyphicon-time"></span></span>
                        </div>
                    </div>



                    <div class="form-group col-md-12">

                        <input class="i-checks" type="checkbox" name="all_day_event" value="yes" id="all_day_event">
                        <label for="all_day_event"><?php echo $_smarty_tpl->tpl_vars['_L']->value['All day event'];?>
</label>


                    </div>


                    <div class="form-group col-md-12">
                        <label for="color"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Color'];?>
</label>
                        <input type="text" class="form-control color" id="color" name="color" value="#2196f3">
                    </div>


                    <div class="form-group col-md-12">
                        <label for="description"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Description'];?>
</label>
                        <textarea id="description" name="description" class="form-control" rows="5"></textarea>
                    </div>



                    <input type="hidden" id="ib_act" name="ib_act" value="create">
                    <input type="hidden" id="event_id" name="event_id" value="0">






                </div>
            </div>
            <div class="modal-footer">
                <a href="#" id="btn_del_event" class="btn btn-danger"><i class="fa fa-trash"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Delete'];?>
</a>
                <button type="button" data-dismiss="modal" class="btn btn-warning"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Close'];?>
</button>
                <button type="submit" id="btn_save_event" class="btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Submit'];?>
</button>
            </div>
        </form>
    </div>

    <div class="md-fab-wrapper">
        <a class="md-fab md-fab-primary waves-effect waves-light add_event" href="#">
            <i class="fa fa-plus"></i>
        </a>
    </div>

<?php
}
}
/* {/block "project_content"} */
/* {block "script"} */
class Block_18521862755ded352b154a37_19565481 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_18521862755ded352b154a37_19565481',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>



    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
ui/lib/spectrum/spectrum.js?ver=2"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
ui/lib/spectrum/i18n/en.js?ver=2"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
ui/lib/validator/parsley.js?ver=2"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
ui/lib/validator/i18n/en.js?ver=2"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
ui/lib/modal.js?ver=2"><?php echo '</script'; ?>
>


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
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
ui/lib/dp/dist/datepicker.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
ui/lib/timepicker/jquery.timepicker.min.js"><?php echo '</script'; ?>
>

    <?php echo '<script'; ?>
>

        var ib_lang = 'en';
        var ib_rtl = false;
        var ib_calendar_first_day = 0;
        var ib_date_format_picker = 'yyyy-mm-dd';
        var ib_date_format_moment = 'YYYY-MM-DD';


        $(function() {

            var _url = $("#_url").val();

            var $calendar_wrap = $("#calendar_wrap");

            // var ib_date_picker_options = {
            //     format: ib_date_format_picker
            // };


            var $modal = $("#modal_add_event");

            var $ib_modal_form = $("#ib_modal_form");

            var $start = $('#start');

            // var start_picker = $start.pickadate(ib_date_picker_options);
            // var picker = start_picker.pickadate('picker');

            var $ib_act = $("#ib_act");
            var $event_id = $("#event_id");

            var $end = $('#end');

            // var end_picker = $end.pickadate(ib_date_picker_options);
            // var picker2 = end_picker.pickadate('picker');

            var $description = $("#description");
            var $title = $("#title");

            var $all_day_event = $("#all_day_event");

            var $start_time_div = $("#start_time_div");
            var $end_time_div = $("#end_time_div");

            var $btn_del_event = $("#btn_del_event");

            var $start_time = $('#start_time');
            var $end_time = $('#end_time');

            $btn_del_event.hide();

            $btn_del_event.on('click', function(e) {

                e.preventDefault();

                bootbox.confirm(_L['are_you_sure'], function(result) {

                    if(result){

                        window.location.href = _url + "delete/event/" + $event_id.val();

                    }

                });

            });


            $('#color').spectrum({
                preferredFormat: "hex",
                showInput: true,
                showPalette: true,
                palette: [["#F44336", "#E91E63", "#9C27B0", "#673AB7", "#3F51B5", "#2196F3", "#03A9F4", "#00BCD4", "#009688", "#4CAF50", "#8BC34A", "#CDDC39", "#FFEB3B", "#FFC107", "#FF9800", "#FF5722", "#795548", "#9E9E9E", "#607D8B", "#000000"]],
                color: "#2196f3"
            });


            function view_event(id) {

                $btn_del_event.show();

                $ib_act.val('edit');
                $event_id.val(id);

                $.post(_url + 'calendar/view_event/' + id + '/').success(function(data) {
                    $modal.modal('show');
                    $title.val(data.title);
                    $modal_title.html(data.title);
                    $description.html(data.description);
                    $start.val(data.start_date);
                    $end.val(data.end_date);
                    // picker.set('select', data.start_date, { format: ib_date_format_picker });
                    // picker2.set('select', data.end_date, { format: ib_date_format_picker });
                    $start_time.val(data.start_time);
                    $end_time.val(data.end_time);

                    if(data.allDay == 1){
                        $start_time_div.hide();
                        $end_time_div.hide();
                        //  $all_day_event.iCheck('check');
                    }
                    else{
                        $start_time_div.show();
                        $end_time_div.show();
                        //  $all_day_event.iCheck('uncheck');
                    }



                });
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
                    url: _url + 'calendar/data/',
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
                dayClick: function(date) {
                    $modal.modal('show');
                    date = date.toDate();

                    $ib_act.val('create');

                    $btn_del_event.hide();

                    $.post(_url+'calendar/js_date',{ date:date }).success(function(data){

                        $start.val(data);
                        $title.val("");
                        $description.html();
                        $end.val(data);
                        // picker.set('select', data, { format: ib_date_format_picker });
                        // picker2.set('select', data, { format: ib_date_format_picker });

                    });




                    return false;
                },
                firstDay: parseInt(ib_calendar_first_day),
                defaultView: 'agenda',
            };




            $('#calendar').fullCalendar(ib_calendar_options);

            // $('.clockpicker').clockpicker({
            //     donetext: 'Done'
            //
            // });

            $all_day_event.iCheck({
                checkboxClass: 'icheckbox_square-blue',
                radioClass: 'iradio_square-blue'
            });


            // $(".colors div").click(function(){
            //
            //     $("#event_color").val($(this).attr("data-ib"));
            //
            //     if (!$(this).hasClass("active")) {
            //         // Remove the class from anything that is active
            //         $(".colors div.active").removeClass("active");
            //         // And make this active
            //         $(this).addClass("active");
            //     }
            // });






            var ib_validate = $ib_modal_form.parsley();

            ib_validate.on('form:submit', function() {
                $modal.modal('loading');
                $.post( _url + "calendar/save_event/", $ib_modal_form.serialize())
                    .done(function( data ) {

                        if ($.isNumeric(data)) {

                            location.reload();

                        }

                        else {
                            $modal.modal('loading');
                            toastr.error(data);
                        }

                    });


                return false;

            });





            var $modal_title = $("#modal_title");

            var txt_original_title = $modal_title.html();


            $title.bind("change paste keyup", function() {
                var txt_title = $(this).val();
                if(txt_title.trim() == ''){

                    $modal_title.html(txt_original_title);

                }
                else{
                    $modal_title.html(txt_title);
                }

            });



            $all_day_event.on('ifChecked', function(){

                $start_time_div.hide("slow");
                $end_time_div.hide("slow");

            });

            $all_day_event.on('ifUnchecked', function(){

                $start_time_div.show("slow");
                $end_time_div.show("slow");

            });





            $(".add_event").on('click', function(e) {
                e.preventDefault();
                $modal.modal('show');

            });


            $modal.on('shown.bs.modal', function (e) {
                $('[data-toggle="datepicker"]').datepicker();
                $start_time.timepicker();
                $end_time.timepicker();
            });

            $('#start_time_picker_icon').on('click', function(){
                $start_time.timepicker('show');
            });

            $('#end_time_picker_icon').on('click', function(){
                $end_time.timepicker('show');
            });



        });



    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block "script"} */
}
