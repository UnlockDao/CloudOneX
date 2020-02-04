{extends file="$layouts_admin"}

{block name="content"}
    <div class="row">

        <div class="col-lg-8">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>
                        {if $type eq 'Product'}
                            {$_L['Add Product']}
                        {else}
                            {$_L['Add Service']}
                        {/if}


                    </h5>
                    <div class="ibox-tools">

                        {if $type eq 'Product'}
                            <a href="{$_url}ps/p-list" class="btn btn-primary btn-xs">{$_L['List Products']}</a>

                        {/if}
                        {if $type eq 'Service'}
                            <a href="{$_url}ps/s-list" class="btn btn-primary btn-xs">{$_L['List Services']}</a>
                        {/if}

                    </div>
                </div>
                <div class="ibox-content" id="ibox_form">
                    <div class="alert alert-danger" id="emsg">
                        <span id="emsgbody"></span>
                    </div>

                    <form class="form-horizontal" id="rform">

                        <div class="form-group"><label class="col-lg-2 control-label" for="name">{$_L['Name']}*</label>

                            <div class="col-lg-10"><input type="text" id="name" name="name" class="form-control" autocomplete="off">

                            </div>
                        </div>

                        {if $type eq 'Product'}

                            <div class="form-group"><label class="col-lg-2 control-label" for="cost_price">{$_L['Cost Price']}</label>

                                <div class="col-lg-10"><input type="text" id="cost_price" name="cost_price" class="form-control amount" autocomplete="off" data-a-sign="{$config['currency_code']} "  data-a-dec="{$config['dec_point']}" data-a-sep="{$config['thousands_sep']}" data-d-group="3">

                                </div>
                            </div>

                        {/if}

                        <div class="form-group"><label class="col-lg-2 control-label" for="sales_price">{$_L['Sales Price']}</label>

                            <div class="col-lg-10">

                                <input type="text" id="sales_price" name="sales_price" class="form-control amount" autocomplete="off" data-a-sign="{$config['currency_code']} "  data-a-dec="{$config['dec_point']}" data-a-sep="{$config['thousands_sep']}" data-d-group="3">

                            </div>
                        </div>



                        <div class="form-group"><label class="col-lg-2 control-label" for="item_number">{$_L['Item Number']}</label>

                            <div class="col-lg-10"><input type="text" id="item_number" value="{str_pad($nxt, 4, '0', STR_PAD_LEFT)}" name="item_number" class="form-control" autocomplete="off">

                            </div>
                        </div>



                        <div class="form-group">

                            <label class="col-lg-2 control-label" for="tax_code">
                                {if $config['tax_system'] == 'India'}
                                    HSN / SAC
                                    {else}
                                    {$_L['Tax Code']}
                                {/if}
                            </label>

                            <div class="col-lg-10"><input type="text" id="tax_code" name="tax_code" class="form-control" autocomplete="off">

                            </div>
                        </div>


                        {if isset($config['item_has_variant'])}

                            {if isset($config['item_variant_1_name']) && $config['item_variant_1_name'] != ''}

                                <div class="form-group">

                                    <label class="col-lg-2 control-label" for="variant_1">
                                        {$config['item_variant_1_name']}
                                    </label>

                                    <div class="col-lg-10"><input type="text" id="variant_1" name="variant_1" class="form-control" autocomplete="off">

                                    </div>
                                </div>

                            {/if}

                            {if isset($config['item_variant_2_name']) && $config['item_variant_2_name'] != ''}

                                <div class="form-group">

                                    <label class="col-lg-2 control-label" for="variant_1">
                                        {$config['item_variant_2_name']}
                                    </label>

                                    <div class="col-lg-10"><input type="text" id="variant_1" name="variant_2" class="form-control" autocomplete="off">

                                    </div>
                                </div>

                            {/if}

                        {/if}

                        <div class="form-group"><label class="col-lg-2 control-label" for="description">{$_L['Description']}</label>

                            <div class="col-lg-10"><textarea id="description" class="form-control" rows="3"></textarea>

                            </div>
                        </div>

                        <hr>


                        {if $type eq 'Product'}

                            <div class="form-group"><label class="col-lg-2 control-label" for="inventory">{$_L['Inventory To Add Subtract']}</label>

                                <div class="col-lg-10"><input type="text" id="inventory" name="inventory" class="form-control" autocomplete="off">

                                </div>
                            </div>


                            <div class="form-group"><label class="col-lg-2 control-label" for="unit">{$_L['Unit']}</label>

                                <div class="col-lg-10">

                                    <select class="form-control" id="unit" name="unit">
                                        <option value="">...</option>
                                        {foreach $units as $unit}
                                            <option value="{$unit['name']}">{$unit['name']}</option>
                                        {/foreach}
                                    </select>

                                </div>
                            </div>




                            <div class="form-group">

                                <label class="col-lg-2 control-label" for="sku">{$_L['SKU']}</label>

                                <div class="col-lg-10">

                                    <input type="text" id="sku" name="sku" class="form-control" autocomplete="off">

                                </div>
                            </div>

                            <div class="form-group">

                                <label class="col-lg-2 control-label" for="width">{$_L['Size']}</label>

                                <div class="col-lg-10">

                                    <div class="row">
                                        <div class="col-md-3">
                                            <input type="text" id="width" name="width" placeholder="{$_L['Width']}" class="form-control" autocomplete="off">
                                        </div>
                                        <div class="col-md-3">
                                            <input type="text" id="lenght" name="length" class="form-control" placeholder="{$_L['Length']}" autocomplete="off">
                                        </div>
                                        <div class="col-md-3">
                                            <input type="text" id="height" name="height" class="form-control" placeholder="{$_L['Height']}" autocomplete="off">
                                        </div>
                                        <div class="col-md-3">
                                            <input type="text" id="weight" name="weight" class="form-control" placeholder="{$_L['Weight']}" autocomplete="off">
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="form-group">

                                <label class="col-lg-2 control-label" for="color">{$_L['Color']}</label>

                                <div class="col-lg-10">

                                    <input type="text" id="color" name="color" class="form-control" autocomplete="off">

                                </div>
                            </div>

                        {/if}


                        <input type="hidden" id="type" name="type" value="{$type}">
                        <input type="hidden" name="file_link" id="file_link" value="">



                        <div class="form-group">
                            <div class="col-lg-offset-2 col-lg-10">

                                <button class="btn btn-sm btn-primary" type="submit" id="submit">{$_L['Submit']}</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>


        <div class="col-lg-4">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    {$_L['Image']}
                </div>
                <div class="ibox-content" id="ibox_form">

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


    </div>
{/block}

{block name="script"}
    <script>
        Dropzone.autoDiscover = false;
        $(document).ready(function () {

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

            $(".progress").hide();
            $("#emsg").hide();

            var _url = $("#_url").val();

            var ib_submit = $("#submit");

            var $file_link = $("#file_link");

            var upload_resp;

            $('#description').redactor(
                {
                    minHeight: 200 // pixels
                }
            );

            var ib_file = new Dropzone("#upload_container",
                {
                    url: _url + "ps/upload/",
                    maxFiles: 1
                }
            );


            ib_file.on("sending", function() {

                ib_submit.prop('disabled', true);

            });

            ib_file.on("success", function(file,response) {

                ib_submit.prop('disabled', false);

                upload_resp = response;

                if(upload_resp.success == 'Yes'){

                    toastr.success(upload_resp.msg);
                    $file_link.val(upload_resp.file);


                }
                else{
                    toastr.error(upload_resp.msg);
                }


            });


            ib_submit.click(function (e) {
                e.preventDefault();
                $('#ibox_form').block({ message: null });
                var _url = $("#_url").val();
                $.post(_url + 'ps/add-post/', $( "#rform" ).serialize())
                    .done(function (data) {

                        if ($.isNumeric(data)) {

                            location.reload();
                        }
                        else {
                            $('#ibox_form').unblock();

                            $("#emsgbody").html(data);
                            $("#emsg").show("slow");
                        }
                    });
            });
        });
    </script>
{/block}