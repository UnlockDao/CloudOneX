{extends file="project_base.tpl"}

{block name="style"}
    <link rel="stylesheet" type="text/css" href="{$app_url}ui/lib/modal.css" />
    <link rel="stylesheet" type="text/css" href="{$app_url}ui/lib/dropzone/dropzone.css" />
    <link rel="stylesheet" type="text/css" href="{$app_url}ui/lib/footable/css/footable.core.min.css" />
{/block}

{block name="project_content"}
    <div class="row">
        <div class="col-md-12">
            <a data-toggle="modal" href="#modal_add_item" class="btn btn-primary add_document waves-effect waves-light" id="add_document"><i class="fa fa-plus"></i> {$_L['New Document']}</a>
            <div class="hr-line-dashed"></div>
        </div>
    </div>

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
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <table class="table table-bordered table-hover sys_table footable" id="footable_tbl"  data-filter="#foo_filter" data-page-size="50">
                <thead>
                <tr>

                    <th class="text-right" data-sort-ignore="true" width="20px;">{$_L['Type']}</th>

                    <th>{$_L['Title']}</th>


                    <th class="text-right" data-sort-ignore="true" width="200px;">{$_L['Manage']}</th>

                </tr>
                </thead>
                <tbody>

                {foreach $files as $file}

                    <tr>

                        <td>
                            {if $file->file_mime_type eq 'jpg' || $file->file_mime_type eq 'png' || $file->file_mime_type eq 'gif'}
                                <i class="fa fa-file-image-o"></i>
                            {elseif $file->file_mime_type eq 'pdf'}
                                <i class="fa fa-file-pdf-o"></i>
                            {elseif $file->file_mime_type eq 'zip'}
                                <i class="fa fa-file-archive-o"></i>
                            {else}
                                <i class="fa fa-file"></i>
                            {/if}
                        </td>


                        <td>

                            <a href="{$_url}documents/view/{$file->id}">{$file->title}</a>

                        </td>



                        <td class="text-right">

                            <a href="#" class="btn btn-primary btn-xs c_link" data-token="{$file->id}_{$file->file_dl_token}"><i class="fa fa-link"></i> </a>
                            <a href="{$_url}documents/view/{$file->id}/" class="btn btn-success btn-xs"><i class="fa fa-search"></i> </a>

                            <a href="#" class="btn btn-danger btn-xs cdelete" id="did{$file->id}"><i class="fa fa-trash"></i> </a>
                        </td>
                    </tr>

                {/foreach}

                </tbody>

                <tfoot>
                <tr>
                    <td colspan="3">
                        <ul class="pagination">
                        </ul>
                    </td>
                </tr>
                </tfoot>

            </table>
        </div>
    </div>

    <div id="modal_add_item" class="modal fade" tabindex="-1" data-width="760" style="display: none;">

        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h4 class="modal-title">{$_L['New Document']}</h4>
        </div>
        <div class="modal-body">
            <div class="row">

                <div class="col-md-12">

                    <form>
                        <div class="form-group">
                            <label for="doc_title">{$_L['Title']}</label>
                            <input type="text" class="form-control" id="doc_title" name="doc_title">

                        </div>





                    </form>

                    <hr>

                    <form action="" class="dropzone" id="upload_container">

                        <div class="dz-message">
                            <h3> <i class="fa fa-cloud-upload"></i>  {$_L['Drop File Here']}</h3>
                            <br />
                            <span class="note">{$_L['Click to Upload']}</span>
                        </div>

                    </form>


                </div>






            </div>
        </div>
        <div class="modal-footer">
            <input type="hidden" name="file_link" id="file_link" value="">
            <button type="button" data-dismiss="modal" class="btn btn-danger">{$_L['Close']}</button>
            <button type="button" id="btn_add_file" class="btn btn-primary">{$_L['Submit']}</button>
        </div>

    </div>

{/block}

{block name="script"}

    <script type="text/javascript" src="{$app_url}ui/lib/footable/js/footable.all.min.js"></script>
    <script type="text/javascript" src="{$app_url}ui/lib/modal.js"></script>
    <script type="text/javascript" src="{$app_url}ui/lib/dropzone/dropzone.js"></script>
    <script type="text/javascript" src="{$app_url}ui/lib/footable/js/footable.all.min.js"></script>


    <script>

        Dropzone.autoDiscover = false;

        $(function () {

            var _url = $("#_url").val();

            $.fn.modal.defaults.width = '700px';

            var $modal = $('#ajax-modal');

            $('[data-toggle="tooltip"]').tooltip();

            var $btn_add_file = $("#btn_add_file");

            var $file_link = $("#file_link");

            var upload_resp;

            var footable_tbl = $("#footable_tbl");

            footable_tbl.footable();


            var ib_file = new Dropzone("#upload_container",
                {
                    url: _url + "documents/upload/",
                    maxFiles: 1
                }
            );


            ib_file.on("sending", function() {

                $btn_add_file.prop('disabled', true);

            });

            ib_file.on("success", function(file,response) {

                $btn_add_file.prop('disabled', false);

                upload_resp = response;

                if(upload_resp.success == 'Yes'){

                    toastr.success(upload_resp.msg);
                    $file_link.val(upload_resp.file);


                }
                else{
                    toastr.error(upload_resp.msg);
                }


            });




            var $doc_title = $("#doc_title");

            var is_global = '0';


            $btn_add_file.on('click', function(e) {
                e.preventDefault();


                $.post( _url + "documents/post/", {
                    title: $doc_title.val(),
                    file_link: $file_link.val(),
                    is_global: is_global,
                    rid: {$project->id},
                    rtype: 'project',
                })
                    .done(function( data ) {

                        if ($.isNumeric(data)) {

                            location.reload();

                        }

                        else {
                            toastr.error(data);
                        }




                    });


            });


            $(".cdelete").click(function (e) {
                e.preventDefault();
                var id = this.id;
                bootbox.confirm(_L['are_you_sure'], function(result) {
                    if(result){
                        window.location.href = _url + "delete/document/" + id + '/';
                    }
                });
            });




            $(".cedit").click(function (e) {
                e.preventDefault();
                var id = this.id;

                $('body').modalmanager('loading');

                $modal.load( _url + 'contacts/modal_add_company/'+ id + '/', '', function(){

                    $modal.modal();

                });

            });

            var dl_token;

            $(".c_link").click(function (e) {
                e.preventDefault();

                dl_token = $(this).attr("data-token")
                bootbox.prompt({
                    title: "Secure Download Link",
                    value: "{$_url}client/dl/" + dl_token,
                    buttons: {
                        'cancel': {
                            label: 'Cancel'
                        },
                        'confirm': {
                            label: 'OK'
                        }
                    },
                    callback: function(result) {

                    }
                });

            });

        });

    </script>
{/block}