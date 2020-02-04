{extends file="$layouts_admin"}

{block name="style"}
    <link rel="stylesheet" type="text/css" href="{$app_url}ui/lib/s2/css/select2.min.css" />
    <link rel="stylesheet" type="text/css" href="{$app_url}/ui/lib/dp/dist/datepicker.min.css" />
{/block}

{block name="content"}


    <div class="row">
        <div class="col-md-12">
            <h3 class="ibilling-page-header">{$_L['Bills']}</h3>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="tabs-container" style="max-width: 600px;">
                <ul class="nav nav-tabs">
                    <li><a class="nav-link" href="{$_url}transactions/bills"> {$_L['Summary']}</a></li>
                    <li><a class="nav-link" href="{$_url}transactions/bills-all"> {$_L['All']}</a></li>

                    {if $bill}
                        <li><a class="nav-link" href="{$_url}transactions/bill">{$_L['Add a bill']}</a></li>
                        <li class="active"><a class="nav-link active show" href="{$_url}transactions/bill/{$bill->id}"><i class="fa fa-pencil"></i> {$bill->title}</a></li>
                        {else}
                        <li class="active"><a class="nav-link active show" href="{$_url}transactions/bill">{$_L['Add a bill']}</a></li>
                    {/if}
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active show">
                        <div class="panel-body panel-body-with-border" style="{if $config['nstyle'] == 'dark_mode'} background-color: #272E48; border-color: #495471; {else} background-color: #fff; {/if}">


                            <div class="row">

                                <div class="col-md-12">
                                    <div class="ibox" style="box-shadow: none; border-radius: 0; border: 1px solid #e2e9ec;" id="clx_form_box">
                                        <div class="ibox-content">

                                            <div class="alert alert-danger" id="emsg" style="display: none;">
                                                <span id="emsgbody"></span>
                                            </div>

                                            <form method="post" id="mainForm" action="{$_url}transactions/bill-save">
                                                <div class="form-group">
                                                    <label for="inputTitle">{$_L['Title']}</label>
                                                    <input class="form-control" name="title" required id="inputTitle" data-pristine-required-message="{$_L['This field is required']}" {if $bill} value="{$bill->title}" {/if}>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="inputNextDate">{$_L['Next Due Date']}</label>
                                                            <input class="form-control" datepicker
                                                                   data-date-format="yyyy-mm-dd" data-auto-close="true" required name="next_date" id="inputNextDate" data-pristine-required-message="{$_L['This field is required']}" {if $bill} value="{$bill->next_date}" {/if}>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="inputRecurringType">{$_L['Repeat Every']}</label>
                                                            <select class="form-control" required name="recurring_type" id="inputRecurringType" data-pristine-required-message="{$_L['This field is required']}">
                                                                <option value="Monthly" {if $bill && $bill->recurring_type == 'Monthly'} selected  {/if}>{$_L['Monthly']}</option>
                                                                <option value="Yearly" {if $bill && $bill->recurring_type == 'Yearly'} selected  {/if}>{$_L['Yearly']}</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="currency">{$_L['Currency']}</label>
                                                            <select class="form-control" required name="currency" id="currency" data-pristine-required-message="{$_L['This field is required']}">
                                                                {foreach $currencies as $currency}
                                                                    <option value="{$currency['iso_code']}" {if $config['home_currency'] eq $currency['iso_code']}selected{/if}
                                                                            {if isset($currencies_all[$currency['iso_code']])}
                                                                        data-a-sign="{$currencies_all[$currency['iso_code']]['symbol']}" data-a-sep="{$currencies_all[$currency['iso_code']]['thousands_separator']}" data-a-dec="{$currencies_all[$currency['iso_code']]['decimal_mark']}" {if ($currencies_all[$currency['iso_code']]['symbol_first'] == true)} data-p-sign="p" {else} data-p-sign="s" {/if}
                                                                            {/if} {if $bill && $bill->currency == $currency['iso_code']} selected  {/if}>{$currency['iso_code']}</option>
                                                                {/foreach}
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="amount">{$_L['Amount']}</label>
                                                            <input class="form-control" required name="amount" id="amount" data-pristine-required-message="{$_L['This field is required']}"  {if $bill} value="{$bill->net_amount}" {/if}>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>{$_L['From Account']}</label>
                                                            <select class="form-control" name="from_account_id">
                                                                <option value="">{$_L['None']}</option>
                                                                {foreach $accounts as $account}
                                                                    <option value="{$account->id}" {if $bill && $bill->from_account_id == $account->id} selected  {/if}>{$account->account}</option>
                                                                {/foreach}
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>{$_L['Payee']}</label>
                                                            <select class="form-control" name="contact_id" id="contact_id">
                                                                <option value="">{$_L['None']}</option>
                                                                {foreach $contacts as $contact}
                                                                    <option value="{$contact->id}" {if $bill && $bill->contact_id == $contact->id} selected  {/if}>{$contact->account}</option>
                                                                {/foreach}
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label>{$_L['Category']}</label>
                                                    <select class="form-control" name="category_id" id="category_id">
                                                        {foreach $categories as $category}
                                                            <option value="{$category->id}" {if $bill && $bill->category_id == $category->id} selected  {/if}>{$category->name}</option>
                                                        {/foreach}
                                                    </select>
                                                </div>

                                                <div class="form-group">
                                                    <label for="website">{$_L['Website']}</label>
                                                    <input class="form-control" name="website" id="website" {if $bill} value="{$bill->website}" {/if}>
                                                </div>

                                                <div class="hr-line-dashed"></div>

                                                <div class="form-group">

                                                    {if $bill}
                                                        <input type="hidden" name="bill_id" value="{$bill->id}">
                                                        {else}
                                                        <input type="hidden" name="bill_id" value="">
                                                    {/if}

                                                    <button type="submit" class="btn btn-primary">{$_L['Save']}</button>
                                                </div>

                                            </form>
                                        </div>
                                    </div>
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


    <script type="text/javascript" src="{$app_url}ui/lib/s2/js/select2.min.js"></script>
    <script type="text/javascript" src="{$app_url}ui/lib/s2/js/i18n/en.js"></script>
    <script type="text/javascript" src="{$app_url}ui/lib/dp/dist/datepicker.min.js"></script>
    <script type="text/javascript" src="{$app_url}ui/lib/numeric.js"></script>


    <script>


        $(function () {

            var form = document.getElementById("mainForm");
            var pristine = new Pristine(form);

            var $currency = $('#currency');
            var $amount = $("#amount");


            function clxAmountSingleFieldAutoNumeric(amountId) {
                $(amountId).autoNumeric('destroy');
                $(amountId).autoNumeric('init', {
                    aSign: $currency.find(':selected').data('a-sign'),
                    dGroup: {$config['thousand_separator_placement']},
                    aPad: {$config['currency_decimal_digits']},
                    pSign: $currency.find(':selected').data('p-sign'),
                    aDec: $currency.find(':selected').data('a-dec'),
                    aSep: $currency.find(':selected').data('a-sep'),
                    vMax: '9999999999999999.00',
                    vMin: '-9999999999999999.00'

                });
            }

            $currency.on('change',function (event) {
                clxAmountSingleFieldAutoNumeric('#amount');
            });



            clxAmountSingleFieldAutoNumeric('#amount');

            function ib_autonumeric() {
                $('.amount').autoNumeric('init', {
                    vMax: '9999999999999999.00',
                    vMin: '-9999999999999999.00'

                });

            }


            ib_autonumeric();

            $('#contact_id').select2({
                theme: "bootstrap"
            });

            $('#category_id').select2({
                theme: "bootstrap"
            });

            $("#mainForm").submit(function (e) {

                e.preventDefault();

                if(pristine.validate())
                {
                    $('#clx_form_box').block({ message:block_msg });

                    $.post('{$_url}transactions/bill-save', $( "#mainForm" ).serialize())
                        .done(function (data) {
                            if ($.isNumeric(data)) {

                                window.location = '{$_url}transactions/bills/';
                            }
                            else {
                                $('#clx_form_box').unblock();
                                var body = $("html, body");
                                body.animate({ scrollTop:0 }, '1000', 'swing');
                                $("#emsgbody").html(data);
                                $("#emsg").show("slow");
                            }
                        });
                }

            });

        });

    </script>
{/block}