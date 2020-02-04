<table class="table table-hover table-vcenter">

    <thead>
    <tr>
        <th>#</th>
        <th>Ticket Status</th>
        <th>Ticket Description</th>
        <th>Task Status</th>
    </tr>
    </thead>
    <tbody>

    {foreach $tickets as $ticket}
        <tr>
            <td style="width: 140px;">
                <a href="{$_url}tickets/admin/view/{$ticket->id}">#{$ticket->tid}</a>
                <br>
                {if $ticket->aid && isset($admins[$ticket->aid])}
                    <a href="{$_url}settings/users-edit/1">{$admins[$ticket->aid]->fullname}</a>
                {/if}
            </td>
            <td>

                {if $ticket->status == 'Closed'}
                    <span class="label label-danger">{if isset($_L[$ticket->status])}
                            {$_L[$ticket->status]}
                        {else}
                            {$ticket->status}
                        {/if}
                                    </span>
                    {elseif $ticket->status == 'On Hold'}
                    <span class="label label-warning">{if isset($_L[$ticket->status])}
                            {$_L[$ticket->status]}
                        {else}
                            {$ticket->status}
                        {/if}
                                    </span>
                    {else}
                    <span class="label label-success">{if isset($_L[$ticket->status])}
                            {$_L[$ticket->status]}
                        {else}
                            {$ticket->status}
                        {/if}
                                    </span>
                {/if}




            </td>
            <td>
                <a href="{$_url}tickets/admin/view/{$ticket->id}">{$ticket->subject}</a>
                <div class="text-muted">
                    <em>{$_L['Updated']} </em> <em class="mmnt">{strtotime($ticket->updated_at)}</em> by <a href="{$_url}tickets/admin/view/{$ticket->id}">{$ticket->last_reply}</a>
                </div>
            </td>

            <td>
                {if isset($tickets_tasks[$ticket->id])}
                    {if $tickets_tasks[$ticket->id]->status == 'Not Started'}

                        <span class="label label-danger" style="border: 1px solid #f44336; color: #f44336;">{$tickets_tasks[$ticket->id]->status}</span>
                    {elseif $tickets_tasks[$ticket->id]->status == 'Completed'}
                        <span class="label label-success" style="border: 1px solid #4caf50; color: #4caf50;">{$tickets_tasks[$ticket->id]->status}</span>
                    {elseif $tickets_tasks[$ticket->id]->status == 'In Progress'}
                        <span class="label label-primary" style="border: 1px solid #2196f3; color: #2196f3;">{$tickets_tasks[$ticket->id]->status}</span>
                    {elseif $tickets_tasks[$ticket->id]->status == 'Waiting'}
                        <span class="label label-warning" style="border: 1px solid #9e9e9e; color: #9e9e9e;">{$tickets_tasks[$ticket->id]->status}</span>
                    {elseif $tickets_tasks[$ticket->id]->status == 'Deferred'}
                        <span class="label label-warning" style="border: 1px solid #607d8b; color: #607d8b;">{$tickets_tasks[$ticket->id]->status}</span>
                        {else}
                        <span class="label label-warning" style="border: 1px solid #f44336; color: #f44336;">{$tickets_tasks[$ticket->id]->status}</span>
                    {/if}

                {/if}
            </td>

        </tr>

        {foreachelse}
        <tr><td align="center" style="border-top: none">{$_L['You do not have any Tickets']}</td></tr>
    {/foreach}

    </tbody>
</table>