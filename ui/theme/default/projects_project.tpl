{extends file="$layouts_admin"}

{block name="style"}
    <link rel="stylesheet" type="text/css" href="{$app_url}ui/lib/s2/css/select2.min.css" />
    <link rel="stylesheet" type="text/css" href="{$app_url}ui/lib/dp/dist/datepicker.min.css" />
{/block}

{block name="content"}


    <div class="row">
        <div class="col-md-12">
            <h3 class="ibilling-page-header">Projects</h3>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="tabs-container" style="max-width: 800px;">
                <ul class="nav nav-tabs">
                    <li><a class="nav-link active show" href="{$_url}projects">Projects</a></li>

                    {if $project}
                        <li class="active"><a class="nav-link" href="{$_url}projects/project">{$project->name}</a></li>
                    {else}
                        <li class="active"><a class="nav-link" href="{$_url}projects/project">Create New Project</a></li>
                    {/if}

                </ul>
                <div class="tab-content">
                    <div class="tab-pane active show">
                        <div class="panel-body" style="background-color: #fff;">



                            <div class="ibox" style="box-shadow: none; border-radius: 0;" id="clx_form_box">

                                <div class="ibox-content">


                                    <form method="post" id="mainForm" action="{$_url}projects/project-save">


                                        <div class="form-group">
                                            <label for="inputName">{$_L['Name']}</label>
                                            <input class="form-control" name="name" required id="inputName" data-pristine-required data-pristine-required-message="{$_L['This field is required']}" {if $project}value="{$project->name}"{/if} >
                                        </div>


                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="project_manager_id">{$_L['Project Manager']}</label>
                                                    <select class="form-control" id="project_manager_id" name="project_manager_id">
                                                        <option value="0">{$_L['None']}</option>
                                                        {foreach $staffs as $staff}
                                                            <option value="{$staff->id}">{$staff->fullname}</option>
                                                        {/foreach}
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="contact_id">{$_L['Customer']}</label>
                                                    <select class="form-control" id="contact_id" name="contact_id">
                                                        <option value="0">{$_L['None']}</option>
                                                        {foreach $contacts as $contact}
                                                            <option value="{$contact->id}">{$contact->account}</option>
                                                        {/foreach}
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Start Date</label>
                                                    <input type="text" class="form-control"  value="{date('Y-m-d')}" name="start_date" id="start_date" datepicker data-date-format="yyyy-mm-dd" data-auto-close="true">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Due Date</label>
                                                    <input type="text" class="form-control"  value="{date('Y-m-d',strtotime('+15 days'))}" name="due_date" id="due_date" datepicker data-date-format="yyyy-mm-dd" data-auto-close="true">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Type</label>
                                                    <select class="form-control" name="billing_type" id="billing_type">
                                                        <option value="Internal Project" {if $project && $project->billing_type == 'Internal Project'} selected{/if}>Internal Project</option>
                                                        <option value="Hourly Rate" {if $project && $project->billing_type == 'Hourly Rate'} selected{/if}>Hourly Rate</option>
                                                        <option value="Fixed Rate" {if $project && $project->billing_type == 'Fixed Rate'} selected{/if}>Fixed Rate</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Status</label>
                                                    <select class= "form-control" name="status" id="status">
                                                        <option value="Draft" {if $project && $project->status == 'Draft'} selected{/if}>Draft</option>
                                                        <option value="Started" {if $project && $project->status == 'Started'} selected{/if}>Started</option>
                                                        <option value="Completed" {if $project && $project->status == 'Completed'} selected{/if}>Completed</option>
                                                    </select>
                                                </div>
                                            </div>


                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="currency">{$_L['Currency']}</label>
                                                    <select id="currency" name="currency" class="form-control">

                                                        {foreach $currencies as $currency}
                                                            <option value="{$currency['iso_code']}" {if $config['home_currency'] eq $currency['iso_code']}selected{/if}
                                                                    {if isset($currencies_all[$currency['iso_code']])}
                                                                data-a-sign="{$currencies_all[$currency['iso_code']]['symbol']}" data-a-sep="{$currencies_all[$currency['iso_code']]['thousands_separator']}" data-a-dec="{$currencies_all[$currency['iso_code']]['decimal_mark']}" {if ($currencies_all[$currency['iso_code']]['symbol_first'] == true)} data-p-sign="p" {else} data-p-sign="s" {/if}
                                                                    {/if}>{$currency['iso_code']}</option>
                                                        {/foreach}


                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Budget</label>
                                                    <input class="form-control" name="budget" id="budget">
                                                </div>
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <label for="content">{$_L['Description']}</label>
                                            <textarea id="content" class="form-control" name="description">{if $project}{$project->description}{/if}</textarea>
                                        </div>



                                        <div class="hr-line-dashed"></div>

                                        <div class="form-group">

                                            {if $project}
                                                <input type="hidden" name="id" value="{$project->id}">
                                            {else}
                                                <input type="hidden" name="id" value="">
                                            {/if}

                                            <button type="submit" class="btn btn-primary">{$_L['Save']}</button>
                                        </div>

                                    </form>
                                </div>
                            </div>




                        </div>
                    </div>

                </div>


            </div>
        </div>
    </div>


{/block}


{block name="script"}

    <script type="text/javascript" src="{$app_url}ui/lib/tinymce/tinymce.min.js"></script>
    <script type="text/javascript" src="{$app_url}ui/lib/js/editor.js"></script>
    <script type="text/javascript" src="{$app_url}ui/lib/s2/js/select2.min.js"></script>
    <script type="text/javascript" src="{$app_url}ui/lib/dp/dist/datepicker.min.js"></script>

    <script>


        $(function () {

            var form = document.getElementById("mainForm");
            var pristine = new Pristine(form);

            ib_editor("#content");

            $("#contact_id").select2({
                    theme: "bootstrap",
                    language: {
                        noResults: function () {
                            return $("#_lan_no_results_found").val();
                        }
                    }
                }
            );

            $("#project_manager_id").select2({
                    theme: "bootstrap",
                    language: {
                        noResults: function () {
                            return $("#_lan_no_results_found").val();
                        }
                    }
                }
            );

            $('[data-toggle="datepicker"]').datepicker();

            $("#mainForm").submit(function (e) {

                e.preventDefault();

                if(pristine.validate())
                {
                    $('#clx_form_box').block({ message:block_msg });

                    $.post('{$_url}projects/project-save', $( "#mainForm" ).serialize())
                        .done(function (data) {
                            window.location = '{$_url}projects';
                        }).fail(function(data) {
                        $('#clx_form_box').unblock();
                        spNotify(data.responseText,'error');
                    });
                }

            });



        });

    </script>
{/block}