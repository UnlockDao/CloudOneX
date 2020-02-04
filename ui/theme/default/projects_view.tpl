{extends file="project_base.tpl"}

{block name="project_content"}

    <div class="row">
        <div class="col-md-9">
            <h3>{$project->name}</h3>

        </div>

        <div class="col-md-3 text-right">
            <a href="{$_url}projects/project/{$project->id}" class="btn btn-primary">Edit</a>
        </div>

    </div>

    <div class="hr-line-dashed"></div>

    <p>{$project->description}</p>
{/block}