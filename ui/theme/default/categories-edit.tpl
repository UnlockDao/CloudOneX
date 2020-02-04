{extends file="$layouts_admin"}

{block name="content"}
    <div class="row">
        <div class="widget-1 col-md-6 col-sm-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">{$_L['Edit Categories']}</h3>
                </div>
                <div class="panel-body">
                    <form role="form" name="accadd" method="post" action="{$_url}settings/categories-edit-post">
                        <div class="form-group">
                            <label for="name">{$_L['Name']}</label>

                            <input type="text" class="form-control" id="name" name="name" value="{$c['name']}">
                        </div>



                        <input type="hidden" name="id" value="{$c['id']}">
                        <button type="submit" class="btn btn-primary"><i class="fa fa-check"></i> {$_L['Submit']}</button>
                    </form>
                </div>
            </div>
        </div> <!-- Widget-1 end-->
        <div class="widget-1 col-md-6 col-sm-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">{$_L['Delete']}</h3>
                </div>
                <div class="panel-body">
                    <p>{$_L['Deleting Categories will']} </p>
                    <a href="{$_url}settings/categories-delete/{$c['id']}" class="btn btn-danger"><i class="fa fa-trash"></i> {$_L['Delete']}</a>

                </div>
            </div>
        </div>
        <!-- Widget-2 end-->
    </div>
{/block}