{extends file="$layouts_admin"}

{block name="content"}
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>{$_L['Records']} {$paginator['found']}
                        . {$_L['Page']} {$paginator['page']} {$_L['of']} {$paginator['lastpage']}. </h5>

                </div>
                <div class="ibox-content" id="application_ajaxrender">


                    <table class="table table-bordered sys_table" id="sys_logs">
                        <thead>
                        <tr>
                            <th>{$_L['ID']}</th>
                            <th>{$_L['Date']}</th>
                            <th width="60%">{$_L['Message']}</th>

                        </tr>
                        </thead>
                        <tbody>
                        {foreach $d as $ds}
                            <tr>
                                <td>{$ds['id']}</td>
                                <td>{date( $config['df'], strtotime($ds['date']))}</td>
                                <td>{$ds['logs']}</td>

                            </tr>
                        {/foreach}
                        </tbody>
                    </table>

                    {$paginator['contents']}

                </div>


            </div>
        </div>
    </div>
{/block}