{extends file="$layouts_admin"}

{block name="style"}
    <link rel="stylesheet" type="text/css" href="{$app_url}ui/lib/footable/css/footable.core.min.css" />
    <style>
        .contact-box {
        {if $config['nstyle'] == 'dark_mode'}
            background-color: rgba(255,255,255,.05);
            border: 1px solid #394156;
        {else}
            background-color: #ffffff;
            border: 1px solid #e7eaec;
        {/if}
            padding: 20px;
            margin-bottom: 20px;
        }

        .contact-box > a {
            color: inherit;
        }

        .img-fluid {
            max-width: 100%;
            height: auto;
        }

        .rounded-circle {
            border-radius: 50%!important;
        }











    </style>
{/block}

{block name="content"}


    <div class="row">
        <div class="col-md-6">
            <h3 class="ibilling-page-header">Projects</h3>
        </div>
        <div class="col-md-6 text-right">
            <a href="{$_url}projects/project" class="btn btn-primary">Create New Project</a>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="tabs-container">
{*                <ul class="nav nav-tabs">*}
{*                    <li class="active"><a class="nav-link active show" href="{$_url}projects">Projects</a></li>*}

{*                </ul>*}


                <div class="row">

                    {foreach $projects as $project}

                        <div class="col-lg-6">
                            <div class="contact-box">
                                <a class="row" href="{$_url}projects/view/{$project->id}">

                                    <div class="col-xs-8">
                                        <h3><strong>{$project->name}</strong></h3>
                                        <br>

                                        <p>
                                            <strong>Project Manager:</strong>
                                            {if $project->project_manager_id && isset($staffs[$project->project_manager_id])}
                                                {$staffs[$project->project_manager_id]->fullname}
                                            {/if}
                                        </p>


                                        <p><strong>Client: </strong> {if $project->contact_id && isset($contacts[$project->contact_id])}
                                                {$contacts[$project->contact_id]->account}
                                            {/if}
                                        </p>

                                        <p><strong>Budget: </strong>{if $project->budget}
                                                {formatCurrency($project->budget,$project->currency)}
                                            {/if}
                                        </p>

                                        <p><strong>Status: </strong>{$project->status}</p>
                                        <p><strong>Start Date: </strong>{$project->start_date}</p>
                                        <p><strong>Due Date: </strong>{$project->due_date}</p>


                                    <div>

                                    </div>

                                        <address>




                                        </address>
                                    </div>

                                </a>
                                <div>

                                    <a href="{$_url}projects/view/{$project->id}" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="{$_L['View']}"><i class="fa fa-file-text-o"></i></a>
                                    <a href="{$_url}projects/project/{$project->id}" class="btn btn-info " data-toggle="tooltip" data-placement="top" title="{$_L['Edit']}"><i class="fa fa-pencil"></i></a>


                                    <a href="{$_url}projects/delete/{$project->id}" class="btn btn-danger  cdelete" id="iiddd" data-toggle="tooltip" data-placement="top" title="{$_L['Delete']}"><i class="fa fa-trash"></i></a>

                                </div>

                            </div>

                        </div>

                        {foreachelse}

                        <p>No data to display</p>
                    {/foreach}


                </div>
{*                <div class="tab-content">*}
{*                    <div class="tab-pane active show">*}
{*                        <div class="panel-body panel-body-with-border" style="{if $config['nstyle'] == 'dark_mode'} background-color: #272E48; border-color: #495471; {else} background-color: #fff; {/if}">*}

{*                            <form class="form-horizontal" method="post" action="">*}
{*                                <div class="form-group">*}
{*                                    <div class="col-md-12">*}
{*                                        <div class="input-group">*}
{*                                            <div class="input-group-addon">*}
{*                                                <span class="fa fa-search"></span>*}
{*                                            </div>*}
{*                                            <input type="text" name="name" id="foo_filter" class="form-control" placeholder="{$_L['Search']}..."/>*}

{*                                        </div>*}
{*                                    </div>*}

{*                                </div>*}
{*                            </form>*}

{*                            <table class="table table-bordered table-hover sys_table footable" data-filter="#foo_filter" data-page-size="50">*}
{*                                <thead>*}
{*                                <tr>*}
{*                                    <th>#</th>*}
{*                                    <th>Name</th>*}
{*                                    <th>Project Manager</th>*}
{*                                    <th>Client</th>*}
{*                                    <th>Financials</th>*}
{*                                    <th>Start</th>*}
{*                                    <th>End</th>*}
{*                                    <th>*}
{*                                        {$_L['Status']}*}
{*                                    </th>*}
{*                                    <th class="text-right" width="140px;">{$_L['Manage']}</th>*}
{*                                </tr>*}
{*                                </thead>*}
{*                                <tbody>*}

{*                                {foreach $projects as $project}*}
{*                                    <tr>*}
{*                                        <td  data-value="1">*}
{*                                            <a href="{$_url}projects/view/{$project->id}">{$project->id}</a>*}
{*                                        </td>*}


{*                                        <td>*}
{*                                            <a href="{$_url}projects/view/{$project->id}">{$project->name}</a>*}
{*                                        </td>*}
{*                                        <td>*}
{*                                            {if $project->project_manager_id && isset($staffs[$project->project_manager_id])}*}
{*                                                {$staffs[$project->project_manager_id]->fullname}*}
{*                                            {/if}*}
{*                                        </td>*}
{*                                        <td>*}
{*                                            {if $project->contact_id && isset($contacts[$project->contact_id])}*}
{*                                                {$contacts[$project->contact_id]->account}*}
{*                                            {/if}*}

{*                                        </td>*}
{*                                        <td>*}
{*                                            {if $project->budget}*}
{*                                                {formatCurrency($project->budget,$project->currency)}*}
{*                                            {/if}*}
{*                                        </td>*}
{*                                        <td>{$project->start_date}</td>*}
{*                                        <td>{$project->due_date}</td>*}
{*                                        <td>{$project->status}</td>*}



{*                                        <td class="text-right">*}



{*                                            <a href="{$_url}projects/view/{$project->id}" class="btn btn-primary btn-xs" data-toggle="tooltip" data-placement="top" title="{$_L['View']}"><i class="fa fa-file-text-o"></i></a>*}



{*                                            <a href="{$_url}projects/project/{$project->id}" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="{$_L['Edit']}"><i class="fa fa-pencil"></i></a>*}


{*                                            <a href="{$_url}projects/delete/{$project->id}" class="btn btn-danger btn-xs cdelete" id="iiddd" data-toggle="tooltip" data-placement="top" title="{$_L['Delete']}"><i class="fa fa-trash"></i></a>*}


{*                                        </td>*}
{*                                    </tr>*}
{*                                {/foreach}*}

{*                                </tbody>*}

{*                                <tfoot>*}
{*                                <tr>*}
{*                                    <td colspan="9">*}
{*                                        <ul class="pagination">*}
{*                                        </ul>*}
{*                                    </td>*}
{*                                </tr>*}
{*                                </tfoot>*}

{*                            </table>*}




{*                        </div>*}
{*                    </div>*}

{*                </div>*}


            </div>
        </div>
    </div>


{/block}


{block name="script"}

    <script type="text/javascript" src="{$app_url}ui/lib/footable/js/footable.all.min.js"></script>

    <script>


        $(function () {

            $('.footable').footable();

            $('[data-toggle="tooltip"]').tooltip();


        });

    </script>
{/block}