{extends file="$layouts_admin"}

{block name="style"}
    <link rel="stylesheet" type="text/css" href="{$app_url}ui/lib/dp/dist/datepicker.min.css" />
    {if $d['img'] neq ''}

        <style>
            #croppic{

                background-image: url({$app_url}{$d['img']});

            }
        </style>

    {/if}


{/block}


{block name="content"}
    <form role="form" name="accadd" method="post" action="{$_url}settings/users-edit-post">
    <div class="row">
        <div class="col-md-6">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>{$_L['Edit User']}</h5>

                </div>
                <div class="ibox-content" id="application_ajaxrender">


                        <div class="form-group">
                            <label for="username">{$_L['Username']}</label>
                            <input type="text" class="form-control" id="username" name="username" value="{$d['username']}">
                        </div>

                        <div class="form-group">
                            <label for="fullname">{$_L['Full Name']}</label>
                            <input type="text" class="form-control" id="fullname" name="fullname" value="{$d['fullname']}">
                        </div>

                        <div class="form-group">
                            <label for="phonenumber">{$_L['Phone']}</label>
                            <input type="text" class="form-control" id="phonenumber" name="phonenumber" value="{$d['phonenumber']}">
                        </div>



                        <div class="form-group">
                            <label for="user_language">{$_L['Default_Language']}</label>
                            <select class="form-control" name="user_language" id="user_language">


                                {foreach $languages as $language}
                                    <option value="{$language['iso_code']}" {if $selected_language eq $language['iso_code']} selected="selected" {/if}>{$language['name']}</option>
                                {/foreach}


                            </select>
                        </div>

                        <div class="form-group">
                            <div id="croppic"></div>

                            <button type="button" id="cropContainerHeaderButton" class="btn btn-primary">{$_L['Upload Picture']}</button>
                            {*<button type="button" id="opt_gravatar" class="btn btn-info">{$_L['Use Gravatar']}</button>*}
                            <button type="button" id="no_image" class="btn btn-default">{$_L['No Image']}</button>
                        </div>

                        <div class="form-group">
                            <label for="fullname">{$_L['Picture']}</label>
                            <input type="text" class="form-control picture" id="picture" readonly name="picture" value="{$d['img']}">
                        </div>

                        {if ($user['id']) neq ($d['id'])}
                            <div class="form-group">


                                <label>{$_L['User']} {$_L['Type']}</label>

                                <div class="i-checks"><label> <input type="radio" value="Admin" name="user_type" {if $d->user_type eq 'Admin'}checked{/if}> <i></i> {$_L['Full Administrator']} </label></div>

                                {foreach $roles as $role}
                                    <div class="i-checks"><label> <input type="radio" value="{$role['id']}" name="user_type" {if $d->roleid eq $role['id']}checked{/if}> <i></i> {$role['rname']} </label></div>
                                {/foreach}

                            </div>
                        {/if}

                        <div class="form-group">
                            <label for="password">{$_L['Password']}</label>
                            <input type="password" class="form-control" id="password" name="password">
                            <span class="help-block">{$_L['password_change_help']}</span>
                        </div>

                        <div class="form-group">
                            <label for="cpassword">{$_L['Confirm Password']}</label>
                            <input type="password" class="form-control" id="cpassword" name="cpassword">
                        </div>

                        {if $user->roleid == 0}

                            <div class="hr-line-dashed"></div>

                            <div class="form-group">
                                <label>{$_L['Job title']}</label>
                                <input class="form-control" name="job_title" value="{$d->job_title}">
                            </div>

                            <div class="form-group">
                                <label>{$_L['Address']}</label>
                                <input class="form-control" name="address" value="{$d->address_line_1}">
                            </div>

                            <div class="form-group">
                                <label>{$_L['City']}</label>
                                <input class="form-control" name="city" value="{$d->city}">
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>{$_L['State Region']}</label>
                                        <input class="form-control" name="state" value="{$d->state}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>{$_L['ZIP Postal Code']}</label>
                                        <input class="form-control" name="zip" value="{$d->zip}">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>{$_L['Country']}</label>
                                <select class="form-control" name="country">
                                    {if $d->country != ''}
                                        {Countries::all($d->country)}
                                    {else}
                                        {Countries::all($config['country'])}
                                    {/if}
                                </select>
                            </div>

                            <div class="form-group">
                                <label>{$_L['Date Joined']}</label>
                                <input class="form-control" name="date_hired" datepicker
                                       data-date-format="yyyy-mm-dd" data-auto-close="true" value="{$d->date_hired}">
                            </div>

                            <div class="form-group">
                                <label>{$_L['Pay frequency']}</label>
                                <select class="form-control" name="pay_frequency">
                                    <option value="Monthly" {if $d->pay_frequency == 'Monthly'} selected{/if}>{$_L['Monthly']}</option>
                                    <option value="Hourly" {if $d->pay_frequency == 'Hourly'} selected{/if}>{$_L['Hourly']}</option>
                                </select>
                            </div>


                            <div class="form-group">
                                <label>{$_L['Amount']}</label>
                                <input class="form-control amount" name="amount" value="{$d->amount}">
                            </div>


                            <div class="form-group">
                                <label>{$_L['Summary']}</label>
                                <textarea class="form-control" rows="10" name="summary">{$d->summary}</textarea>
                            </div>


                        {/if}



                        <input type="hidden" name="id" value="{$d['id']}">
                        <button type="submit" class="btn btn-primary"><i class="fa fa-check"></i> {$_L['Submit']}</button>
                        {$_L['Or']} <a href="{$_url}settings/users">{$_L['Cancel']}</a>


                </div>
            </div>



        </div>


        <div class="col-md-6">



            <div class="panel" id="ui_settings">

                <div class="panel-body" id="application_ajaxrender">

                    <h3>{$_L['Notifications']}</h3>

                    <div class="hr-line-dashed"></div>

                    <table class="table table-hover table-bordered">
                        <tbody>


                        <tr>
                            <td width="80%"><label for="config_email_notify">{$_L['Email']} </label></td>
                            <td> <input type="checkbox" {if $user->email_notify eq '1'}checked{/if} data-toggle="toggle" data-size="small" data-on="{$_L['Yes']}" data-off="{$_L['No']}" id="config_email_notify"></td>
                        </tr>

                        <tr>
                            <td width="80%"><label for="config_sms_notify">{$_L['SMS']} </label></td>
                            <td> <input type="checkbox" {if $user->sms_notify eq '1'}checked{/if} data-toggle="toggle" data-size="small" data-on="{$_L['Yes']}" data-off="{$_L['No']}" id="config_sms_notify"></td>
                        </tr>


                        </tbody>
                    </table>

                </div>
            </div>


            <div class="panel">
                <div class="panel-body">
                    <h3>{$_L['Departments']}</h3>
                    <div class="hr-line-dashed"></div>

                    {foreach $departments as $department}

                        <div class="checkbox" style="margin-bottom: 20px;">
                            <div class="i-checks"><label> <input name="departments[]" {if isset($assigned_departments[$department->id])} checked{/if} class="ib_checkbox" type="checkbox" value="{$department->id}"> <span style="margin-left: 15px;">{$department->dname}</span></label></div>
                        </div>

                    {/foreach}


                </div>
            </div>


        </div>



    </div>

    </form>


    <!-- Cropping modal -->
    <div class="modal fade" id="avatar-modal" aria-hidden="true" aria-labelledby="avatar-modal-label" role="dialog" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <form class="avatar-form" action="crop.php" enctype="multipart/form-data" method="post">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title" id="avatar-modal-label">Change Avatar</h4>
                    </div>
                    <div class="modal-body">
                        <div class="avatar-body">

                            <!-- Upload image and data -->
                            <div class="avatar-upload">
                                <input type="hidden" class="avatar-src" name="avatar_src">
                                <input type="hidden" class="avatar-data" name="avatar_data">
                                <label for="avatarInput">Local upload</label>
                                <input type="file" class="avatar-input" id="avatarInput" name="avatar_file">
                            </div>

                            <!-- Crop and preview -->
                            <div class="row">
                                <div class="col-md-9">
                                    <div class="avatar-wrapper"></div>
                                </div>
                                <div class="col-md-3">
                                    <div class="avatar-preview preview-lg"></div>
                                    <div class="avatar-preview preview-md"></div>
                                    <div class="avatar-preview preview-sm"></div>
                                </div>
                            </div>

                            <div class="row avatar-btns">
                                <div class="col-md-9">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-primary" data-method="rotate" data-option="-90" title="Rotate -90 degrees">Rotate Left</button>
                                        <button type="button" class="btn btn-primary" data-method="rotate" data-option="-15">-15deg</button>
                                        <button type="button" class="btn btn-primary" data-method="rotate" data-option="-30">-30deg</button>
                                        <button type="button" class="btn btn-primary" data-method="rotate" data-option="-45">-45deg</button>
                                    </div>
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-primary" data-method="rotate" data-option="90" title="Rotate 90 degrees">Rotate Right</button>
                                        <button type="button" class="btn btn-primary" data-method="rotate" data-option="15">15deg</button>
                                        <button type="button" class="btn btn-primary" data-method="rotate" data-option="30">30deg</button>
                                        <button type="button" class="btn btn-primary" data-method="rotate" data-option="45">45deg</button>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <button type="submit" class="btn btn-primary btn-block avatar-save">Done</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div> -->
                </form>
            </div>
        </div>
    </div><!-- /.modal -->

    <!-- Loading state -->
    <div class="loading" aria-label="Loading" role="img" tabindex="-1"></div>



{/block}


{block name="script"}



    <script type="text/javascript" src="{$app_url}ui/lib/dp/dist/datepicker.min.js"></script>
    <script type="text/javascript" src="{$app_url}ui/lib/numeric.js"></script>


<script>




    $(function () {


        $('.amount').autoNumeric('init', {

            aSign: '{$config['currency_code']} ',
            dGroup: {$config['thousand_separator_placement']},
            aPad: {$config['currency_decimal_digits']},
            pSign: '{$config['currency_symbol_position']}',
            aDec: '{$config['dec_point']}',
            aSep: '{$config['thousands_sep']}',
            vMax: '9999999999999999.00',
            vMin: '-9999999999999999.00'

        });

        $('#config_email_notify').change(function() {

            $('#ui_settings').block({ message: null });


            if($(this).prop('checked')){

                $.post( base_url+'settings/set_notify/', { opt: "email_notify", val: "1" })
                    .done(function( data ) {
                        $('#ui_settings').unblock();
                        location.reload();
                    });

            }
            else{
                $.post( _url+'settings/set_notify/', { opt: "email_notify", val: "0" })
                    .done(function( data ) {
                        $('#ui_settings').unblock();
                        location.reload();
                    });
            }
        });

        $('#config_sms_notify').change(function() {

            $('#ui_settings').block({ message: null });


            if($(this).prop('checked')){

                $.post( base_url+'settings/set_notify/', { opt: "sms_notify", val: "1" })
                    .done(function( data ) {
                        $('#ui_settings').unblock();
                        location.reload();
                    });

            }
            else{
                $.post( _url+'settings/set_notify/', { opt: "sms_notify", val: "0" })
                    .done(function( data ) {
                        $('#ui_settings').unblock();
                        location.reload();
                    });
            }
        });


        var _url = $("#_url").val();


        var croppicHeaderOptions = {

            uploadUrl: _url + 'sys_imgcrop/save/',
            cropData:{
                "email":1,
                "rnd":"rnd"
            },
            cropUrl:  _url + 'sys_imgcrop/crop/',
            outputUrlId:'picture',
            customUploadButtonId:'cropContainerHeaderButton',
            modal:false,
            loaderHtml:'<div class="loader bubblingG"><span id="bubblingG_1"></span><span id="bubblingG_2"></span><span id="bubblingG_3"></span></div> ',
            onBeforeImgUpload: function(){ console.log('onBeforeImgUpload') },
            onAfterImgUpload: function(){ console.log('onAfterImgUpload') },
            onImgDrag: function(){ console.log('onImgDrag') },
            onImgZoom: function(){ console.log('onImgZoom') },
            onBeforeImgCrop: function(){ console.log('onBeforeImgCrop') },
            onAfterImgCrop:function(){ console.log('onAfterImgCrop') }
        }
        var croppic = new Croppic('croppic', croppicHeaderOptions);


        var sysrender = $('#application_ajaxrender');




        sysrender.on('click', '#no_image', function(e){
            e.preventDefault();
            $('#picture').val('');

        });


        // sysrender.on('click', '#opt_gravatar', function(e){
        //     e.preventDefault();
        //
        //     $('.picture').val('gravatar');
        //
        // });

        sysrender.on('click', '#more_submit', function(e){
            e.preventDefault();


            $('#ibox_form').block({ message: null });
            var _url = $("#_url").val();
            $.post(_url + 'contacts/edit-more/', {
                cid: $('#cid').val(),
                picture: $('#picture').val(),
                facebook: $('#facebook').val(),
                google: $('#google').val(),
                linkedin: $('#linkedin').val()

            })
                .done(function (data) {

                    setTimeout(function () {
                        var sbutton = $("#more_submit");
                        var _url = $("#_url").val();
                        if ($.isNumeric(data)) {

                            window.location = _url + 'contacts/view/' + data + '/';
                        }
                        else {
                            $('#ibox_form').unblock();

                            $("#emsgbody").html(data);
                            $("#emsg").show("slow");
                        }
                    }, 2000);
                });

        });


        $('.i-checks').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass: 'iradio_square-blue'
        });

    })

</script>


{/block}
