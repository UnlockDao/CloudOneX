{extends file="$layouts_admin"}

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
                    <li class="active"><a class="nav-link active show" href="{$_url}transactions/bills"> {$_L['Summary']}</a></li>
                    <li><a class="nav-link" href="{$_url}transactions/bills-all"> {$_L['All']}</a></li>
                    <li><a class="nav-link" href="{$_url}transactions/bill">{$_L['Add a bill']}</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active show">
                        <div class="panel-body panel-body-with-border" style="{if $config['nstyle'] == 'dark_mode'} background-color: #272E48; border-color: #495471; {else} background-color: #fff; {/if}">


                                <div class="row">
                                    <div class="col-md-12">
                                        <h3>{$_L['Upcoming Bills']} </h3>
                                        <div class="hr-line-dashed"></div>
                                    </div>
                                </div>
                                <div class="row">

                                    {if count($bills_upcoming) > 0}

                                        {foreach $bills_upcoming as $bill}
                                            <div class="col-lg-3">
                                                <div class="ibox" style="box-shadow: none; border-radius: 0; border: 1px solid #e2e9ec;">
                                                    <div class="ibox-content">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <small>{translate_date_string(date( 'D M d, Y', strtotime($bill->next_date)),$_L)}</small>
                                                            </div>
                                                            <div class="col-md-6 text-right">
                                                                <a href="{$_url}transactions/bill/{$bill->id}" class="btn btn-primary btn-xs" data-toggle="tooltip" data-placement="top" title="View"><i class="fa fa-file-text-o"></i></a>
                                                                {if $bill->website != ''}
                                                                    <a href="{$bill->website}" target="_blank" class="btn btn-inverse btn-xs" data-toggle="tooltip" data-placement="top" title="{$bill->website}"><i class="fa fa-globe"></i></a>
                                                                {/if}
                                                                <a href="javascript:;" onclick="confirmThenGoToUrl(event,'transactions/delete-bill/{$bill->id}');" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="{$_L['Delete']}"><i class="fa fa-trash-o"></i></a>
                                                                {if $bill->is_paid == 0}
                                                                    <a href="javascript:;" onclick="confirmThenGoToUrl(event,'transactions/bill-mark-as-paid/{$bill->id}');" class="btn btn-green btn-xs" data-toggle="tooltip" data-placement="top" title="{$_L['Mark as Paid']}"><i class="fa fa-check"></i></a>
                                                                {/if}
                                                            </div>
                                                        </div>
                                                        <a href="{$_url}transactions/bill/{$bill->id}"><h4>{$bill->title}</h4></a>
                                                        <h1 class="no-margins">{formatCurrency($bill->net_amount,$bill->currency)}</h1>
                                                        {if $bill->is_paid}
                                                            <div class="stat-percent font-bold text-primary">{$_L['Paid']}</div>
                                                        {else}
                                                            <div class="stat-percent font-bold text-danger">{$_L['Due']}</div>
                                                        {/if}
                                                        <small>{ib_lan_get_line($bill->recurring_type)}</small>
                                                    </div>
                                                </div>
                                            </div>
                                        {/foreach}

                                    {else}

                                        <div class="col-md-12">
                                            <p>{$_L['No Data Available']}</p>
                                        </div>

                                    {/if}







                                </div>

                            {if count($bills_pas_due) > 0}

                            <div class="row">
                                <div class="col-md-12">
                                    <h3>{$_L['Past Due']} </h3>
                                    <div class="hr-line-dashed"></div>
                                </div>
                            </div>
                            <div class="row">

                                    {foreach $bills_pas_due as $bill}
                                        <div class="col-lg-3">
                                            <div class="ibox" style="box-shadow: none; border-radius: 0; border: 1px solid #e2e9ec;">
                                                <div class="ibox-content">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <small>{translate_date_string(date( 'D M d, Y', strtotime($bill->next_date)),$_L)}</small>
                                                        </div>
                                                        <div class="col-md-6 text-right">
                                                            <a href="{$_url}transactions/bill/{$bill->id}" class="btn btn-primary btn-xs" data-toggle="tooltip" data-placement="top" title="View"><i class="fa fa-file-text-o"></i></a>
                                                            {if $bill->website != ''}
                                                                <a href="{$bill->website}" target="_blank" class="btn btn-inverse btn-xs" data-toggle="tooltip" data-placement="top" title="{$bill->website}"><i class="fa fa-globe"></i></a>
                                                            {/if}
                                                            <a href="javascript:;" onclick="confirmThenGoToUrl(event,'transactions/delete-bill/{$bill->id}');" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="{$_L['Delete']}"><i class="fa fa-trash-o"></i></a>
                                                            {if $bill->is_paid == 0}
                                                                <a href="javascript:;" onclick="confirmThenGoToUrl(event,'transactions/bill-mark-as-paid/{$bill->id}');" class="btn btn-green btn-xs" data-toggle="tooltip" data-placement="top" title="{$_L['Mark as Paid']}"><i class="fa fa-check"></i></a>
                                                            {/if}
                                                        </div>
                                                    </div>
                                                    <a href="{$_url}transactions/bill/{$bill->id}"><h4>{$bill->title}</h4></a>
                                                    <h1 class="no-margins">{formatCurrency($bill->net_amount,$bill->currency)}</h1>
                                                    {if $bill->is_paid}
                                                        <div class="stat-percent font-bold text-primary">{$_L['Paid']}</div>
                                                    {else}
                                                        <div class="stat-percent font-bold text-danger">{$_L['Due']}</div>
                                                    {/if}
                                                    <small>{ib_lan_get_line($bill->recurring_type)}</small>
                                                </div>
                                            </div>
                                        </div>
                                    {/foreach}


                            </div>

                            {/if}




                        </div>
                    </div>

                </div>


            </div>
        </div>
    </div>


{/block}


{block name="script"}



    <script>


        $(function () {


            $('[data-toggle="tooltip"]').tooltip();


        });

    </script>
{/block}