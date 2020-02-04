{extends file="$layouts_admin"}

{block name="style"}
    <link rel="stylesheet" type="text/css" href="{$app_url}ui/lib/footable/css/footable.core.min.css" />
{/block}

{block name="content"}


    <div class="row">
        <div class="col-md-12">
            <h3 class="ibilling-page-header">{$_L['Bills']}</h3>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="tabs-container">
                <ul class="nav nav-tabs">
                    <li><a class="nav-link" href="{$_url}transactions/bills"> {$_L['Summary']}</a></li>
                    <li class="active"><a class="nav-link active show" href="{$_url}transactions/bills-all"> {$_L['All']}</a></li>
                    <li><a class="nav-link" href="{$_url}transactions/bill">{$_L['Add a bill']}</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active show">
                        <div class="panel-body panel-body-with-border" style="{if $config['nstyle'] == 'dark_mode'} background-color: #272E48; border-color: #495471; {else} background-color: #fff; {/if}">


                            <div class="row">

                                <div class="col-md-12">

                                    <form class="form-horizontal" method="post" action="">
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <div class="input-group-addon">
                                                        <span class="fa fa-search"></span>
                                                    </div>
                                                    <input type="text" name="name" id="foo_filter" class="form-control" placeholder="{$_L['Search']}..."/>

                                                </div>
                                            </div>

                                        </div>
                                    </form>

                                    <table class="table table-bordered table-hover sys_table footable" data-filter="#foo_filter" data-page-size="50">
                                        <thead>
                                        <tr>
                                            <th>{$_L['Title']}</th>
                                            <th>{$_L['Amount']}</th>
                                            <th>{$_L['Next Due Date']}</th>
                                            <th>{$_L['Manage']}</th>
                                        </tr>
                                        </thead>
                                        <tbody>

                                        {foreach $bills as $bill}
                                            <tr>
                                                <td  data-value="{$bill->id}">
                                                    <a href="{$_url}transactions/bill/{$bill->id}">
                                                        {$bill->title}
                                                    </a>
                                                </td>
                                                <td>
                                                    {formatCurrency($bill->net_amount,$bill->currency)} <br>
                                                    <div class="hr-line-dashed"></div>
                                                    {ib_lan_get_line($bill->recurring_type)}
                                                </td>
                                                <td>
                                                    {translate_date_string(date( 'D M d, Y', strtotime($bill->next_date)),$_L)}
                                                </td>
                                                <td>
                                                    <a href="{$_url}transactions/bill/{$bill->id}" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil"></i></a>
                                                    <a href="javascript:;" class="btn btn-danger btn-xs" onclick="confirmThenGoToUrl(event,'transactions/delete-bill/{$bill->id}');" data-toggle="tooltip" data-placement="top" title="{$_L['Delete']}"><i class="fa fa-trash"></i></a>
                                                </td>

                                            </tr>
                                        {/foreach}

                                        </tbody>

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

                </div>


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