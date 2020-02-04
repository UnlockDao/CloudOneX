{extends file="$layouts_admin"}

{block name="content"}


    <div class="row">
        <div class="col-md-12">
            <h3 class="ibilling-page-header">{$project->name}</h3>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="tabs-container">
                <ul class="nav nav-tabs">
                    <li {if $action == 'view'}class="active"{/if}><a class="nav-link" href="{$_url}projects/view/{$project->id}">Summary</a></li>
                    <li {if $action == 'tasks'}class="active"{/if}><a class="nav-link" href="{$_url}projects/tasks/{$project->id}">Tasks</a></li>
                    <li {if $action == 'files'}class="active"{/if}><a class="nav-link" href="{$_url}projects/files/{$project->id}">Files</a></li>
                    <li {if $action == 'financials'}class="active"{/if}><a class="nav-link" href="{$_url}projects/financials/{$project->id}">Financials</a></li>
{*                    <li {if $action == 'stream'}class="active"{/if}><a class="nav-link" href="{$_url}projects/stream/{$project->id}">Stream</a></li>*}
                    <li {if $action == 'gantt-chart'}class="active"{/if}><a class="nav-link" href="{$_url}projects/gantt-chart/{$project->id}">Gantt Chart</a></li>
                    <li {if $action == 'timelog'}class="active"{/if}><a class="nav-link" href="{$_url}projects/timelog/{$project->id}">Timelog</a></li>
{*                    <li {if $action == 'workload'}class="active"{/if}><a class="nav-link" href="{$_url}projects/workload/{$project->id}">Workload</a></li>*}
                    <li {if $action == 'analytics'}class="active"{/if}><a class="nav-link" href="{$_url}projects/analytics/{$project->id}">Analytics</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active show">
                        <div class="panel-body panel-body-with-border" style="{if $config['nstyle'] == 'dark_mode'} background-color: #272E48; border-color: #495471; {else} background-color: #fff; {/if}">

                            {block name="project_content"}{/block}

                        </div>
                    </div>

                </div>


            </div>
        </div>
    </div>


{/block}