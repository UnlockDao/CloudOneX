{extends file="project_base.tpl"}

{block name="style"}
    <link rel="stylesheet" type="text/css" href="{$app_url}ui/lib/modal.css" />
    <link rel="stylesheet" type="text/css" href="{$app_url}ui/lib/select/select.min.css" />
    <link rel="stylesheet" type="text/css" href="{$app_url}ui/lib/s2/css/select2.min.css" />
    <link rel="stylesheet" type="text/css" href="{$app_url}ui/lib/datetime.css" />
    <link rel="stylesheet" type="text/css" href="{$app_url}ui/lib/dragula/dragula.css" />
    <link rel="stylesheet" type="text/css" href="{$app_url}ui/lib/css/kanban.css" />
{/block}

{block name="project_content"}

    <div class="row">
        <div class="col-md-12">
            <button class="btn btn-primary add_task">Add Task</button>
            <div class="hr-line-dashed"></div>
        </div>
    </div>

    <div class="row">


        <div class="col-md-12" id="kanbanCanvas">

            <div style="overflow: auto;">

                <div style="min-width: 1545px; max-width: 1545px;">


                    <div class="panel panel-deep-orange kanban-col">
                        <div class="panel-heading">

                            {$_L['Not Started']}

                        </div>

                        <div class="panel-body">
                            <div id="not_started" class="kanban-centered kanban-droppable-area">
                                {foreach $tasks_not_started as $tns}
                                    <article class="kanban-entry cursor-move" id="item_{$tns['id']}" draggable="true">
                                        <div class="kanban-entry-inner">
                                            <div class="kanban-label">

                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <a href="javascript:void(0)" id="v_{$tns['id']}" class="v_item">{$tns['title']}</a>
                                                        <hr>
                                                    </div>
                                                    <div class="col-md-12">

                                                        {if $tns['cid'] != 0 && $tns['cid'] != '' && isset($contacts[$tns['cid']][0]->account)}
                                                            <div style="margin-bottom: 15px;">
                                                                {$contacts[$tns['cid']][0]->account}
                                                            </div>

                                                        {/if}

                                                        {if $tns['tid'] != 0 && $tns['tid'] != '' && isset($tickets[$tns['tid']][0]->tid)}
                                                            <div style="margin-bottom: 15px;">
                                                                Ticket: {$tickets[$tns['tid']][0]->tid}
                                                            </div>

                                                        {/if}



                                                        <img src="{getAdminImage($tns['aid'])}" class="img-circle" style="max-width: 30px; margin-bottom: 5px;" alt="{$tns['created_by']}"> {$tns['created_by']}


                                                    </div>


                                                    <div class="col-md-12">

                                                        <small>{$_L['Created']}: <span class="mmnt">{strtotime({$tns['created_at']})}</span></small> <br>
                                                        <small>{$_L['Due Date']}: {date( $config['df'], strtotime($tns['due_date']))}</small>

                                                        {if isset($tns['priority'])}
                                                            <br>
                                                            {if strtolower($tns['priority']) == 'critical' || strtolower($tns['priority']) == 'high'}
                                                                <span class="label label-danger">
                                                        {if isset($_L[$tns['priority']])}
                                                            {$_L[$tns['priority']]}
                                                        {else}
                                                            {$tns['priority']}
                                                        {/if}
                                                    </span>
                                                            {else}
                                                                <span class="label label-info">{if isset($_L[$tns['priority']])}
                                                            {$_L[$tns['priority']]}
                                                            {else}
                                                            {$tns['priority']}
                                                        {/if}</span>
                                                            {/if}

                                                        {/if}
                                                        {*<br>*}
                                                        {*<a href="javascript:void(0)" class="c_delete" id="d_{$tns['id']}"><i class="fa fa-trash"></i> </a>*}
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </article>

                                {/foreach}
                            </div>
                        </div>


                    </div>

                    <div class="panel panel-primary kanban-col">
                        <div class="panel-heading">

                            In Progress

                        </div>
                        <div class="panel-body">
                            <div id="in_progress" class="kanban-centered kanban-droppable-area">


                                {foreach $tasks_in_progress as $tns}
                                    <article class="kanban-entry cursor-move" id="item_{$tns['id']}" draggable="true">
                                        <div class="kanban-entry-inner">
                                            <div class="kanban-label">

                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <a href="javascript:void(0)" id="v_{$tns['id']}" class="v_item">{$tns['title']}</a>
                                                        <hr>
                                                    </div>
                                                    <div class="col-md-12">
                                                        {if $tns['cid'] != 0 && $tns['cid'] != '' && isset($contacts[$tns['cid']][0]->account)}
                                                            <div style="margin-bottom: 15px;">
                                                                {$contacts[$tns['cid']][0]->account}
                                                            </div>

                                                        {/if}

                                                        {if $tns['tid'] != 0 && $tns['tid'] != '' && isset($tickets[$tns['tid']][0]->tid)}
                                                            <div style="margin-bottom: 15px;">
                                                                Ticket: {$tickets[$tns['tid']][0]->tid}
                                                            </div>

                                                        {/if}
                                                        <img src="{getAdminImage($tns['aid'])}" class="img-circle" style="max-width: 30px; margin-bottom: 5px;" alt="{$tns['created_by']}"> {$tns['created_by']}


                                                    </div>


                                                    <div class="col-md-12">

                                                        <small>{$_L['Created']}: <span class="mmnt">{strtotime({$tns['created_at']})}</span></small> <br>
                                                        <small>{$_L['Due Date']}: {date( $config['df'], strtotime($tns['due_date']))}</small>

                                                        {if isset($tns['priority'])}
                                                            <br>
                                                            {if strtolower($tns['priority']) == 'critical' || strtolower($tns['priority']) == 'high'}
                                                                <span class="label label-danger">
                                                        {if isset($_L[$tns['priority']])}
                                                            {$_L[$tns['priority']]}
                                                        {else}
                                                            {$tns['priority']}
                                                        {/if}
                                                    </span>
                                                            {else}
                                                                <span class="label label-info">{if isset($_L[$tns['priority']])}
                                                            {$_L[$tns['priority']]}
                                                            {else}
                                                            {$tns['priority']}
                                                        {/if}</span>
                                                            {/if}

                                                        {/if}

                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </article>

                                {/foreach}


                            </div>
                        </div>

                    </div>
                    <!--sütun bitiş-->
                    <!--sütun başlangıç-->
                    <div class="panel panel-light-green kanban-col">
                        <div class="panel-heading">

                            {$_L['Completed']}

                        </div>
                        <div class="panel-body">
                            <div id="completed" class="kanban-centered kanban-droppable-area">


                                {foreach $tasks_completed as $tns}
                                    <article class="kanban-entry cursor-move" id="item_{$tns['id']}" draggable="true">
                                        <div class="kanban-entry-inner">
                                            <div class="kanban-label">

                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <a href="javascript:void(0)" id="v_{$tns['id']}" class="v_item">{$tns['title']}</a>
                                                        <hr>
                                                    </div>
                                                    <div class="col-md-12">
                                                        {if $tns['cid'] != 0 && $tns['cid'] != '' && isset($contacts[$tns['cid']][0]->account)}
                                                            <div style="margin-bottom: 15px;">
                                                                {$contacts[$tns['cid']][0]->account}
                                                            </div>

                                                        {/if}

                                                        {if $tns['tid'] != 0 && $tns['tid'] != '' && isset($tickets[$tns['tid']][0]->tid)}
                                                            <div style="margin-bottom: 15px;">
                                                                Ticket: {$tickets[$tns['tid']][0]->tid}
                                                            </div>

                                                        {/if}
                                                        <img src="{getAdminImage($tns['aid'])}" class="img-circle" style="max-width: 30px; margin-bottom: 5px;" alt="{$tns['created_by']}"> {$tns['created_by']}


                                                    </div>


                                                    <div class="col-md-12">

                                                        <small>{$_L['Created']}: <span class="mmnt">{strtotime({$tns['created_at']})}</span></small> <br>
                                                        <small>{$_L['Due Date']}: {date( $config['df'], strtotime($tns['due_date']))}</small>

                                                        {if isset($tns['priority'])}
                                                            <br>
                                                            {if isset($tns['priority'])}
                                                                <br>
                                                                {if strtolower($tns['priority']) == 'critical' || strtolower($tns['priority']) == 'high'}
                                                                    <span class="label label-danger">
                                                        {if isset($_L[$tns['priority']])}
                                                            {$_L[$tns['priority']]}
                                                        {else}
                                                            {$tns['priority']}
                                                        {/if}
                                                    </span>
                                                                {else}
                                                                    <span class="label label-info">{if isset($_L[$tns['priority']])}
                                                            {$_L[$tns['priority']]}
                                                            {else}
                                                            {$tns['priority']}
                                                        {/if}</span>
                                                                {/if}

                                                            {/if}

                                                        {/if}
                                                        {*<br>*}
                                                        {*<a href="javascript:void(0)" class="c_delete" id="d_{$tns['id']}"><i class="fa fa-trash"></i> </a>*}
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </article>

                                {/foreach}


                            </div>
                        </div>

                    </div>

                    <div class="panel panel-blue-grey kanban-col">
                        <div class="panel-heading">

                            Deferred

                        </div>
                        <div class="panel-body">
                            <div id="deferred" class="kanban-centered kanban-droppable-area">


                                {foreach $tasks_deferred as $tns}
                                    <article class="kanban-entry cursor-move" id="item_{$tns['id']}" draggable="true">
                                        <div class="kanban-entry-inner">
                                            <div class="kanban-label">

                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <a href="javascript:void(0)" id="v_{$tns['id']}" class="v_item">{$tns['title']}</a>
                                                        <hr>
                                                    </div>
                                                    <div class="col-md-12">
                                                        {if $tns['cid'] != 0 && $tns['cid'] != '' && isset($contacts[$tns['cid']][0]->account)}
                                                            <div style="margin-bottom: 15px;">
                                                                {$contacts[$tns['cid']][0]->account}
                                                            </div>

                                                        {/if}

                                                        {if $tns['tid'] != 0 && $tns['tid'] != '' && isset($tickets[$tns['tid']][0]->tid)}
                                                            <div style="margin-bottom: 15px;">
                                                                Ticket: {$tickets[$tns['tid']][0]->tid}
                                                            </div>

                                                        {/if}
                                                        <img src="{getAdminImage($tns['aid'])}" class="img-circle" style="max-width: 30px; margin-bottom: 5px;" alt="{$tns['created_by']}"> {$tns['created_by']}


                                                    </div>


                                                    <div class="col-md-12">

                                                        <small>{$_L['Created']}: <span class="mmnt">{strtotime({$tns['created_at']})}</span></small> <br>
                                                        <small>{$_L['Due Date']}: {date( $config['df'], strtotime($tns['due_date']))}</small>

                                                        {if isset($tns['priority'])}
                                                            <br>
                                                            {if strtolower($tns['priority']) == 'critical' || strtolower($tns['priority']) == 'high'}
                                                                <span class="label label-danger">
                                                        {if isset($_L[$tns['priority']])}
                                                            {$_L[$tns['priority']]}
                                                        {else}
                                                            {$tns['priority']}
                                                        {/if}
                                                    </span>
                                                            {else}
                                                                <span class="label label-info">{if isset($_L[$tns['priority']])}
                                                            {$_L[$tns['priority']]}
                                                            {else}
                                                            {$tns['priority']}
                                                        {/if}</span>
                                                            {/if}

                                                        {/if}
                                                        {*<br>*}
                                                        {*<a href="javascript:void(0)" class="c_delete" id="d_{$tns['id']}"><i class="fa fa-trash"></i> </a>*}
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </article>

                                {/foreach}


                            </div>
                        </div>

                    </div>

                    <div class="panel panel-grey kanban-col" style="border-right: 1px solid #ffffff;">
                        <div class="panel-heading">

                            Waiting on someone else

                        </div>
                        <div class="panel-body">
                            <div id="waiting_on_someone" class="kanban-centered kanban-droppable-area">


                                {foreach $tasks_waiting as $tns}
                                    <article class="kanban-entry cursor-move" id="item_{$tns['id']}" draggable="true">
                                        <div class="kanban-entry-inner">
                                            <div class="kanban-label">

                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <a href="javascript:void(0)" id="v_{$tns['id']}" class="v_item">{$tns['title']}</a>
                                                        <hr>
                                                    </div>
                                                    <div class="col-md-12">
                                                        {if $tns['cid'] != 0 && $tns['cid'] != '' && isset($contacts[$tns['cid']][0]->account)}
                                                            <div style="margin-bottom: 15px;">
                                                                {$contacts[$tns['cid']][0]->account}
                                                            </div>

                                                        {/if}

                                                        {if $tns['tid'] != 0 && $tns['tid'] != '' && isset($tickets[$tns['tid']][0]->tid)}
                                                            <div style="margin-bottom: 15px;">
                                                                Ticket: {$tickets[$tns['tid']][0]->tid}
                                                            </div>

                                                        {/if}
                                                        <img src="{getAdminImage($tns['aid'])}" class="img-circle" style="max-width: 30px; margin-bottom: 5px;" alt="{$tns['created_by']}"> {$tns['created_by']}


                                                    </div>


                                                    <div class="col-md-12">

                                                        <small>{$_L['Created']}: <span class="mmnt">{strtotime({$tns['created_at']})}</span></small> <br>
                                                        <small>{$_L['Due Date']}: {date( $config['df'], strtotime($tns['due_date']))}</small>

                                                        {if isset($tns['priority'])}
                                                            <br>
                                                            {if strtolower($tns['priority']) == 'critical' || strtolower($tns['priority']) == 'high'}
                                                                <span class="label label-danger">
                                                        {if isset($_L[$tns['priority']])}
                                                            {$_L[$tns['priority']]}
                                                        {else}
                                                            {$tns['priority']}
                                                        {/if}
                                                    </span>
                                                            {else}
                                                                <span class="label label-info">{if isset($_L[$tns['priority']])}
                                                            {$_L[$tns['priority']]}
                                                            {else}
                                                            {$tns['priority']}
                                                        {/if}</span>
                                                            {/if}

                                                        {/if}
                                                        {*<br>*}
                                                        {*<a href="javascript:void(0)" class="c_delete" id="d_{$tns['id']}"><i class="fa fa-trash"></i> </a>*}
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </article>

                                {/foreach}


                            </div>
                        </div>

                    </div>

                </div>
            </div>

        </div>

    </div>
{/block}

{block name="script"}
    <script type="text/javascript" src="{$app_url}ui/lib/modal.js"></script>
    <script type="text/javascript" src="{$app_url}ui/lib/tinymce/tinymce.min.js"></script>
    <script type="text/javascript" src="{$app_url}ui/lib/js/editor.js"></script>
    <script type="text/javascript" src="{$app_url}ui/lib/select/select.min.js"></script>
    <script type="text/javascript" src="{$app_url}ui/lib/s2/js/select2.min.js"></script>
    <script type="text/javascript" src="{$app_url}ui/lib/s2/js/i18n/en.js"></script>
    <script type="text/javascript" src="{$app_url}ui/lib/datetime.js"></script>
    <script type="text/javascript" src="{$app_url}ui/lib/dragula/dragula.js"></script>

    <script>

        $(function () {

            var $kanbanCanvas = $('#kanbanCanvas');


            $modal = $("#ajax-modal");

            for (var a = dragula($(".kanban-droppable-area").toArray()), r = a.containers, o = r.length, l = 0; l < o; l++)$(r[l]).addClass("dragula dragula-vertical");
            a.on("drop", function (a, r, o, l) {


                var item = a.id;
                var target = r.id;

                $.post(base_url + 'tasks/set_status/',{ task_id : item, target: target },function (data) {
                    //   $(".kanban-col").unblock();

                })

            });

            $( ".mmnt" ).each(function() {
                //   alert($( this ).html());
                var ut = $( this ).html();
                $( this ).html(moment.unix(ut).fromNow());
            });


            $(".add_task").on('click',function (e) {
                e.preventDefault();

                $('body').modalmanager('loading');

                $modal.load( base_url + 'tasks/create/0/{$project->id}', '', function(){

                    $modal.modal();
                    ib_editor("#description");
                    var ib_date_picker_options = {
                        format: ib_date_format_picker
                    };



                    var $start_date = $('#start_date');

                    $start_date.datetimepicker({
                        format: 'YYYY-MM-DD'
                    });

                    var $due_date = $('#due_date');

                    $due_date.datetimepicker({
                        format: 'YYYY-MM-DD'
                    });

                    $("#cid").select2({
                        theme: "bootstrap"
                    });

                });


            });



            $modal.on('click', '.modal_submit', function(e){

                e.preventDefault();

                $modal.modal('loading');

                $.post( base_url + "tasks/post/", $("#ib-modal-form").serialize())
                    .done(function( data ) {

                        if ($.isNumeric(data)) {

                            window.location = base_url + 'projects/tasks/{$project->id}';

                        }

                        else {
                            $modal.modal('loading');
                            toastr.error(data);
                        }

                    });

            });


            $kanbanCanvas.on('click','.v_item',function (e) {
                e.preventDefault();
                $('body').modalmanager('loading');

                $modal.load( base_url + 'tasks/view/'+this.id, '', function(){

                    $modal.modal();




                });
            });




            $modal.on('click', '.c_delete', function(e){
                e.preventDefault();
                var tid = this.id;
                bootbox.confirm(_L['are_you_sure'], function(result) {
                    if(result){

                        $.get( base_url + "delete/tasks/"+tid, function( data ) {
                            location.reload();
                        });


                    }
                });

            });


            $modal.on('click', '.c_edit', function(e){
                e.preventDefault();
                var tid = this.id;

                $('body').modalmanager('loading');

                $modal.load( base_url + 'tasks/create/'+tid, '', function(){

                    $('body').modalmanager('loading');
                    $modal.modal();
                    ib_editor("#description");
                    var ib_date_picker_options = {
                        format: ib_date_format_picker
                    };


                    var jq_title = $('#title').val();

                    $('#title').keyup(function () {

                        var live_val = $(this).val();
                        if(live_val == ''){
                            $("#txt_modal_header").html(jq_title);
                        }
                        else{
                            $("#txt_modal_header").html(live_val);
                        }


                    });

                    var $start_date = $('#start_date');

                    $start_date.datetimepicker({
                        format: 'YYYY-MM-DD'
                    });

                    var $due_date = $('#due_date');

                    $due_date.datetimepicker({
                        format: 'YYYY-MM-DD'
                    });


                    $("#cid").select2({
                        theme: "bootstrap"
                    });


                });

            });






        });
    </script>


{/block}