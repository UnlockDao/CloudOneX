


{extends file="$layouts_admin"}


{block name="style"}

    <link href="{$app_url}ui/lib/mselect/multiple-select.css" rel="stylesheet">


    <style>

        .btn-default {
            color: #333;
            background-color: #fff;
            border-color: #ccc;
        }

        .btn-default:hover, .btn-default:focus, .btn-default:active, .btn-default.active {
            color: #333;
            background-color: #fff;
            border-color: #ccc;
        }

        {if $pos eq 'pos'}
        .pos_item{
            background: #f3f6f9;
            cursor: pointer;
        }
        .pos_item:hover{
            background: #2196f3;
            color: #ffffff;
        }

        {/if}

    </style>

{/block}


{block name="content"}
    <div class="row" id="ibox_form">


        <div class="col-md-12">
            <h3 class="ibilling-page-header">{$_L['Invoice']}</h3>
        </div>

        <form id="invform" method="post">
            <div class="col-md-12">
                <div class="alert alert-danger" id="emsg">
                    <span id="emsgbody"></span>
                </div>
            </div>




            <div class="col-md-12">





                <div class="panel panel-default">
                    <div class="panel-body">


                        <div class="row">
                            <div class="col-md-12">

                                <div class='row'>
                                    <div class="col-sm-6">
                                        <h3>{$_L['Invoice']} - {$d['invoicenum']}{if $d['cn'] neq ''} {$d['cn']} {else} {$d['id']} {/if}</h3>
                                    </div>
                                    <div class='col-sm-6'>
                                        <div class="text-right">

                                            <input type="hidden" name="iid" id="iid" value="{$i['id']}">
                                            <input type="hidden" id="_dec_point" name="_dec_point" value="{$config['dec_point']}">
                                            <button class="btn btn-primary" id="submit"> {$_L['Save']}</button>
                                            <button class="btn btn-info" id="save_n_close"> {$_L['Save n Close']}</button>

                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <hr>
                                    </div>
                                </div>

                                <div class='row'>


                                    <div class='col-sm-4'>
                                        <div class='form-group'>
                                            <label for="user_title">{$_L['Customer']}</label>

                                            <select id="cid" name="cid" class="form-control">
                                                <option value="">{$_L['Select Contact']}...</option>
                                                {foreach $c as $cs}
                                                    <option value="{$cs['id']}"
                                                            {if $i['userid'] eq ($cs['id'])}selected="selected" {/if}>{$cs['account']} {if $cs['email'] neq ''}- {$cs['email']}{/if}</option>
                                                {/foreach}

                                            </select>

                                        </div>
                                    </div>
                                    <div class='col-sm-4'>

                                        {if $i->status eq 'Draft'}
                                            <div class="form-group">
                                                <label for="status">{$_L['Status']}</label>

                                                <select id="status" name="status" class="form-control">

                                                    <option value="Published">{$_L['Published']}</option>
                                                    <option value="Draft">{$_L['Draft']}</option>


                                                </select>

                                            </div>
                                        {/if}

                                    </div>
                                    <div class='col-sm-4'>
                                        <div class="form-group">
                                            <label for="currency">{$_L['Currency']}</label>

                                            <select id="currency" name="currency" class="form-control">

                                                {foreach $currencies as $currency}
                                                    <option value="{$currency['iso_code']}"


                                                            {if $i['currency_iso_code'] eq ($currency['cname'])}selected="selected" {/if}>{$currency['cname']}</option>
                                                    {foreachelse}
                                                    <option value="0">{$config['home_currency']}</option>
                                                {/foreach}

                                            </select>

                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="invoice_title">{$_L['Title']}  <small><em>({$_L['optional']})</em></small></label>

                                            <input type="text" class="form-control" id="invoice_title" name="title" value="{$i['title']}">
                                        </div>
                                    </div>
                                </div>


                                <div class='row'>


                                    <div class='col-sm-4'>
                                        <div class="form-group">
                                            <label for="address">{$_L['Address']}</label>

                                            <textarea id="address" readonly class="form-control" rows="5"></textarea>
                                        </div>
                                    </div>
                                    <div class='col-sm-4'>
                                        <div class="form-group">
                                            <label for="invoicenum">{$_L['Invoice Prefix']}</label>

                                            <input type="text" class="form-control" id="invoicenum" name="invoicenum" value="{$i['invoicenum']}">
                                        </div>

                                        <div class="form-group">
                                            <label for="cn">{$_L['Invoice']} #</label>

                                            <input type="text" class="form-control" id="cn" name="cn" value="{$i['cn']}">
                                            <span class="help-block">{$_L['invoice_number_help']}</span>
                                        </div>

                                    </div>
                                    <div class='col-sm-4'>
                                        {if $config['invoice_receipt_number'] eq '1'}
                                            <div class="form-group">
                                                <label for="receipt_number">{$_L['Receipt Number']}</label>

                                                <input type="text" class="form-control" id="receipt_number" name="receipt_number" value="{$i['receipt_number']}">
                                            </div>
                                        {else}
                                            <input type="hidden" name="receipt_number" id="receipt_number" value="">
                                        {/if}

                                        <div class="form-group">
                                            <label for="show_quantity_as">{$_L['Show quantity as']}</label>

                                            <input type="text" class="form-control" id="show_quantity_as" name="show_quantity_as" value="{$i['show_quantity_as']}">

                                        </div>

                                        {if $i['r'] neq '0'}
                                            <div class="form-group">
                                                <label for="repeat">{$_L['Repeat Every']}</label>

                                                <select class="form-control" name="repeat" id="repeat">
                                                    <option value="daily" {if $i['r'] eq '+1 day'} selected{/if}>{$_L['Daily']}</option>
                                                    <option value="week1" {if $i['r'] eq '+1 week'} selected{/if}>{$_L['Week']}</option>
                                                    <option value="weeks2" {if $i['r'] eq '+2 weeks'} selected{/if}>{$_L['Weeks_2']}</option>
                                                    <option value="weeks3" {if $i['r'] eq '+3 weeks'} selected{/if}>{$_L['Weeks_3']}</option>
                                                    <option value="weeks4" {if $i['r'] eq '+4 weeks'} selected{/if}>{$_L['Weeks_4']}</option>
                                                    <option value="month1" {if $i['r'] eq '+1 month'} selected{/if}>{$_L['Month']}</option>
                                                    <option value="months2" {if $i['r'] eq '+2 months'} selected{/if}>{$_L['Months_2']}</option>
                                                    <option value="months3" {if $i['r'] eq '+3 months'} selected{/if}>{$_L['Months_3']}</option>
                                                    <option value="months6" {if $i['r'] eq '+6 months'} selected{/if}>{$_L['Months_6']}</option>
                                                    <option value="year1" {if $i['r'] eq '+1 year'} selected{/if}>{$_L['Year']}</option>
                                                    <option value="years2" {if $i['r'] eq '+2 years'} selected{/if}>{$_L['Years_2']}</option>
                                                    <option value="years3" {if $i['r'] eq '+3 years'} selected{/if}>{$_L['Years_3']}</option>

                                                </select>
                                            </div>
                                        {else}
                                            <input type="hidden" name="repeat" id="repeat" value="0">
                                        {/if}

                                        <div class="form-group">
                                            <label for="add_discount"><a href="#" id="add_discount" class="btn btn-info btn-xs"
                                                                         style="margin-top: 5px;"><i
                                                            class="fa fa-minus-circle"></i> {$_L['Set Discount']}</a></label>
                                            <br>


                                            <input type="hidden" id="stax" name="stax" value="0.00">
                                            <input type="hidden" id="discount_amount" name="discount_amount"
                                                   value="{$i['discount_value']}">
                                            <input type="hidden" id="discount_type" name="discount_type"
                                                   value="{$i['discount_type']}">
                                            <input type="hidden" id="taxed_type" name="taxed_type" value="individual">

                                        </div>

                                    </div>
                                </div>


                                {if $config['tax_system'] eq 'India'}
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="duedate">GSTIN</label>
                                                <input type="text" class="form-control" id="gstin" name="gstin">

                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="duedate">Place of Supply</label>
                                                <select id="place_of_supply" name="place_of_supply"
                                                        class="form-control">


                                                    {foreach $states as $state}
                                                        <option value="{$state['name']}"
                                                                {if $config['business_location'] == $state['name']}
                                                                    selected
                                                                {/if}
                                                        >{$state['name']}</option>
                                                    {/foreach}



                                                </select>

                                            </div>
                                        </div>


                                    </div>
                                {/if}


                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="idate">{$_L['Invoice Date']}</label>

                                            <input type="text" class="form-control" id="idate" name="idate" datepicker
                                                   data-date-format="yyyy-mm-dd" data-auto-close="true"
                                                   value="{$i['date']}"">
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="ddate">{$_L['Payment Terms']}</label>

                                            <input type="text" class="form-control" id="ddate" name="ddate" datepicker
                                                   data-date-format="yyyy-mm-dd" data-auto-close="true"
                                                   value="{$i['duedate']}">
                                        </div>
                                    </div>
                                    <div class="col-sm-4">

                                    </div>
                                </div>



                                {$extraHtml}

                            </div>
                        </div>

                        <div>


















                            {*<div class="form-group">*}
                            {*<label for="tid">{$_L['Sales TAX']}</label>*}

                            {*<select id="tid" name="tid" class="form-control">*}
                            {*<option value="">{$_L['None']}</option>*}
                            {*{foreach $t as $ts}*}
                            {*<option value="{$ts['id']}">{$ts['name']}*}
                            {*({{number_format($ts['rate'],2,$config['dec_point'],$config['thousands_sep'])}}*}
                            {*%)*}
                            {*</option>*}
                            {*{/foreach}*}

                            {*</select>*}

                            {*</div>*}



                        </div>

                    </div>
                </div>


            </div>

            <div class="col-md-12">


                {if $pos eq 'pos'}

                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="ib-search-bar" style="margin-bottom: 30px;">
                                <div class="input-group">
                                    <input type="text" class="form-control" id="ib_search_input" placeholder="{$_L['Search']}..." autofocus data-list=".list_pos_items"> </div>
                            </div>

                            <hr>

                            <div id="block_items" class="list_pos_items">




                            </div>



                        </div>
                    </div>

                {/if}




                <div class="panel panel-default">
                    <div class="panel-body">

                        <div class="table-responsive m-t">


                            {if $config['tax_system'] == 'India'}
                                <table class="table table-bordered invoice-table" id="invoice_items">


                                    <thead>


                                    <tr>

                                        <th rowspan="2">{$_L['Item Name']}</th>
                                        <th rowspan="2">HSN / SAC</th>
                                        <th rowspan="2">{if $config['show_quantity_as'] eq ''}{$_L['Qty']}{else}{$config['show_quantity_as']}{/if}</th>
                                        <th rowspan="2">{$_L['Price']}</th>

                                        <th rowspan="2" style="width: 80px;">Rate</th>

                                        <th colspan="3" class="text-center">
                                            Tax Values (Rs.)
                                        </th>

                                        <th rowspan="2">{$_L['Total']}</th>


                                    </tr>

                                    <tr>

                                        <th>CGST</th>
                                        <th>SGST</th>
                                        <th>IGST</th>

                                    </tr>

                                    </thead>
                                    <tbody>


                                    {foreach $items as $item}




                                        <tr>
                                            <td>
                                                <textarea class="form-control item_name" name="desc[]" rows="3">{$item['description']}</textarea>
                                                <input type="hidden" name="item_code[]" value="{$item['itemcode']}"></td>
                                            <td><input type="text" class="form-control tax_code" value="{$item['tax_code']}" name="tax_code[]"></td>
                                            <td><input type="text" class="form-control qty" value="{if ($config['dec_point']) eq ','}{$item['qty']|replace:'.':','}{else}{$item['qty']}{/if}" name="qty[]"></td>
                                            <td><input type="text" class="form-control item_price" name="amount[]" value="{if ($config['dec_point']) eq ','}{$item['amount']|replace:'.':','}{else}{$item['amount']}{/if}">
                                            </td>

                                            <td><select class="form-control taxed" name="taxed[]">
                                                    {foreach $t as $ts}
                                                        <option value="{$ts['rate']}" {if $item['tax_rate'] eq $ts['rate']}selected{/if}>{$ts['name']}</option>
                                                    {/foreach} </select></td>

                                            <td>
                                                <input type="text" class="form-control cgst" name="cgst[]" disabled value="">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control sgst" name="sgst[]" disabled value="">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control igst" name="igst[]" disabled value="">
                                            </td>

                                            <td class="ltotal"><input type="text" class="form-control lvtotal" readonly=""
                                                                      value=""></td>
                                        </tr>

                                    {/foreach}



                                    </tbody>
                                </table>

                            {else}

                                <table class="table invoice-table" id="invoice_items">
                                    <thead>
                                    <tr>

                                        <th width="40%">{$_L['Item Name']}</th>
                                        <th width="10%">{if $i['show_quantity_as'] eq '' || $i['show_quantity_as'] eq '1'}{$_L['Qty']}{else}{$i['show_quantity_as']}{/if}</th>
                                        <th width="15%">{$_L['Price']}</th>

                                        <th width="20%">Tax</th>

                                        <th width="15%">{$_L['Total']}</th>


                                    </tr>
                                    </thead>
                                    <tbody>

                                    {foreach $items as $item}

                                        <tr>  <td>
                                                <textarea class="form-control item_name" name="desc[]" rows="3">{$item['description']}</textarea>
                                                <input type="hidden" name="item_code[]" value="{$item['itemcode']}"> </td> <td><input type="text" class="form-control qty" value="{if ($config['dec_point']) eq ','}{$item['qty']|replace:'.':','}{else}{$item['qty']}{/if}" name="qty[]"></td> <td><input type="text" class="form-control item_price" name="amount[]" value="{if ($config['dec_point']) eq ','}{$item['amount']|replace:'.':','}{else}{$item['amount']}{/if}"></td>  <td> <select class="form-control taxed" name="taxed[]" >
                                                    {foreach $t as $ts}
                                                        <option value="{$ts['rate']}" {if $item['tax_rate'] eq $ts['rate']}selected{/if}>{$ts['name']}</option>
                                                    {/foreach} </select></td>

                                            <td class="ltotal"><input type="text" class="form-control lvtotal" readonly="" value=""></td>
                                        </tr>

                                    {/foreach}


                                    </tbody>
                                </table>

                            {/if}




                        </div>
                        <!-- /table-responsive -->
                        <button type="button" class="btn btn-primary" id="blank-add"><i
                                    class="fa fa-plus"></i> {$_L['Add blank Line']}</button>
                        <button type="button" class="btn btn-primary" id="item-add"><i
                                    class="fa fa-search"></i> {$_L['Add Product OR Service']}</button>
                        <button type="button" class="btn btn-danger" id="item-remove"><i
                                    class="fa fa-minus-circle"></i> {$_L['Delete']}</button>
                        <br>
                        <br>
                        <hr>

                        <table class="table invoice-total">
                            <tbody>
                            <tr>
                                <td><strong>{$_L['Sub Total']} :</strong></td>
                                <td id="sub_total" class="amount">0.00
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <strong>{$_L['Discount']} <span id="is_pt"></span> : </strong>


                                </td>
                                <td id="discount_amount_total" class="amount">0.00
                                </td>
                            </tr>
                            <tr>
                                <td><strong>{$_L['TAX']} :</strong></td>
                                <td id="taxtotal" class="amount">0.00
                                </td>
                            </tr>
                            <tr>
                                <td><strong>{$_L['TOTAL']} :</strong></td>
                                <td id="total" class="amount">0.00
                                </td>
                            </tr>
                            </tbody>
                        </table>



                        <hr>
                        <textarea class="form-control" name="notes" id="notes" rows="3"
                                  placeholder="{$_L['Invoice Terms']}...">{$i['notes']}</textarea>
                        <br>
                        {*{if $recurring}*}
                            {*<input type="hidden" id="is_recurring" value="yes">*}
                        {*{else}*}
                            {*<input type="hidden" id="is_recurring" value="no">*}
                        {*{/if}*}




                    </div>
                </div>



            </div>


        </form>


    </div>



    {* lan variables *}

    <input type="hidden" id="_lan_set_discount" value="{$_L['Set Discount']}">
    <input type="hidden" id="_lan_discount" value="{$_L['Discount']}">
    <input type="hidden" id="_lan_discount_type" value="{$_L['Discount Type']}">
    <input type="hidden" id="_lan_percentage" value="{$_L['Percentage']}">
    <input type="hidden" id="_lan_fixed_amount" value="{$_L['Fixed Amount']}">
    <input type="hidden" id="_lan_btn_save" value="{$_L['Save']}">

    <input type="hidden" id="_lan_no_results_found" value="{$_L['No results found']}">


{/block}


{block name=script}

    <script src="{$app_url}ui/lib/mselect/multiple-select.js"></script>

    <script>

        var is_same_state = false;

        {if $config['tax_system'] eq 'India'}

        var $place_of_supply = $('#place_of_supply');

        function taxState() {
            if($place_of_supply.val() == '{$config['business_location']}')
            {
                is_same_state = true;
            }
            else
            {
                is_same_state = false;
            }
        }


        taxState();





        {/if}

        String.prototype.trunc = String.prototype.trunc ||
            function(n){
                return (this.length > n) ? this.substr(0, n-1) + '&hellip;' : this;
            };

        $(document).ready(function () {

            {*{if $config['mininav'] eq '0'}*}

            {*$("body").toggleClass("mini-navbar");*}
            {*SmoothlyMenu();*}

            {*{/if}*}


            var c_qty;
            var c_price;
            var c_taxed;

            var lineTotal;

            var tax_val;

            var $discount_amount_total = $("#discount_amount_total");

            var $discount_amount = $("#discount_amount");
            var $discount_type  = $("#discount_type");


            function spEditor(selector) {

                $(selector).redactor({
                    paragraphize: false,
                    replaceDivs: false,
                    linebreaks: true ,
                    minHeight: 30 // pixels
                });

            }


            function spMultiSelect(selector){
                /*
                $(selector).multiselect(
                    {
                        allSelectedText: false,
                        nonSelectedText: 'None'
                    }
                );
                */



            }

            spMultiSelect('.taxed');



            var $total = $("#total");
            var $taxtotal = $("#taxtotal");
            var $sub_total = $("#sub_total");

            var cDiscountVal = 0;

            var $invoice_items = $('#invoice_items');


            var invTotal = 0;

            var totalTaxVal = 0;

            var tax_val;

            var lineTotalWithoutTax;

            var totalLineTotalWithoutTax = 0;

            function calculateTotal() {

                {if $config['tax_system'] == 'India'}

                invTotal = 0;

                totalTaxVal = 0;

                tax_val = 0;

                lineTotalWithoutTax = 0;

                totalLineTotalWithoutTax = 0;


                $.each($('.qty'), function (index, value) {

                    c_qty = this.value;

                    c_price = $(this).closest('tr').find('.item_price').val();

                    if (c_qty === '' || c_price === '') {
                        return;
                    }


                    c_taxed = $(this).closest('tr').find('.taxed').val();



                    c_taxed_split = (c_taxed/2).toFixed(2);

                    lineTotal = c_price * c_qty;
                    lineTotal = parseFloat(lineTotal);

                    lineTotalWithoutTax = lineTotal;

                    if (c_taxed === '' || c_taxed === null) {

                        tax_val = 0;

                    }
                    else {
                        c_taxed = parseFloat(c_taxed).toFixed(3);

                        tax_val = (lineTotal * c_taxed) / 100;



                        //  console.log(c_taxed);
                        //  console.log(lineTotal);

                        lineTotal = lineTotal + tax_val;
                    }

                    if(is_same_state)
                    {
                        $(this).closest('tr').find('.cgst').val(tax_val/2);
                        $(this).closest('tr').find('.sgst').val(tax_val/2);
                        $(this).closest('tr').find('.igst').val(0);
                    }
                    else
                    {
                        $(this).closest('tr').find('.cgst').val(0);
                        $(this).closest('tr').find('.sgst').val(0);
                        $(this).closest('tr').find('.igst').val(tax_val/2);
                    }



                    //  console.log(c_taxed);




                    $(this).closest('tr').find('.lvtotal').val(lineTotal.toFixed(2));


                    invTotal += lineTotal;

                    totalTaxVal += tax_val;

                    totalLineTotalWithoutTax += lineTotalWithoutTax;


                });


                if ($discount_type.val() === 'f' && $discount_amount.val() !== '') {
                    cDiscountVal = $discount_amount.val();
                }
                else if ($discount_type.val() === 'p' && $discount_amount.val() !== '') {
                    var tCDiscountval = parseFloat($discount_amount.val());
                    cDiscountVal = (invTotal * tCDiscountval) / 100;
                }
                else {

                }

                cDiscountVal = parseFloat(cDiscountVal);

                invTotal = invTotal - cDiscountVal;

                $total.html(invTotal.toFixed(2));
                $taxtotal.html(totalTaxVal.toFixed(2));
                $sub_total.html(totalLineTotalWithoutTax.toFixed(2));
                $discount_amount_total.html(cDiscountVal.toFixed(2));

                {else}

                invTotal = 0;

                totalTaxVal = 0;

                tax_val = 0;

                lineTotalWithoutTax = 0;

                totalLineTotalWithoutTax = 0;


                $.each($('.qty'), function (index, value) {
//                    console.log(index);
//                    console.log(this.value);


                    c_qty = this.value;

                    c_price = $(this).closest('tr').find('.item_price').val();

                    if (c_qty === '' || c_price === '') {
                        return;
                    }


                    c_taxed = $(this).closest('tr').find('.taxed').val();

                    //  console.log(c_taxed);

                    lineTotal = c_price * c_qty;
                    lineTotal = parseFloat(lineTotal);

                    lineTotalWithoutTax = lineTotal;

                    if (c_taxed === '' || c_taxed === null) {

                        tax_val = 0;

                    }
                    else {
                        c_taxed = parseFloat(c_taxed).toFixed(3);

                        tax_val = (lineTotal * c_taxed) / 100;



                        console.log(c_taxed);
                        console.log(lineTotal);

                        lineTotal = lineTotal + tax_val;
                    }


                    $(this).closest('tr').find('.lvtotal').val(lineTotal.toFixed(2));


                    invTotal += lineTotal;

                    totalTaxVal += tax_val;

                    totalLineTotalWithoutTax += lineTotalWithoutTax;


                });


                if ($discount_type.val() === 'f' && $discount_amount.val() !== '') {
                    cDiscountVal = $discount_amount.val();
                }
                else if ($discount_type.val() === 'p' && $discount_amount.val() !== '') {
                    var tCDiscountval = parseFloat($discount_amount.val());
                    cDiscountVal = (invTotal * tCDiscountval) / 100;
                }
                else {

                }

                cDiscountVal = parseFloat(cDiscountVal);

                invTotal = invTotal - cDiscountVal;

                $total.html(invTotal.toFixed(2));
                $taxtotal.html(totalTaxVal.toFixed(2));
                $sub_total.html(totalLineTotalWithoutTax.toFixed(2));
                $discount_amount_total.html(cDiscountVal.toFixed(2));

                {/if}


            }

            calculateTotal();


            {if $config['tax_system'] == 'India'}

            $place_of_supply.on('change',function () {

                taxState();
                calculateTotal();

            });

            {/if}






            var $block_items = $("#block_items");

            var _url = $("#_url").val();

            $('.amount').autoNumeric('init', {
                vMax: '9999999999999999.00',
                vMin: '-9999999999999999.00'
            });
            $('#notes').redactor(
                {
                    minHeight: 200, // pixels
                    plugins: ['fontcolor']
                }
            );






            spEditor('.item_name');






            $invoice_items.on('change', '.taxed', function(){
                //   $('#taxtotal').html('dd');
                // var taxrate = $('#stax').val().replace(',', '.');
                // $(this).val(taxrate);

                calculateTotal();


            });


            $invoice_items.on('change', '.qty', function(){

                calculateTotal();

            });

            $invoice_items.on('change', '.item_price', function(){

                calculateTotal();

            });



            var item_remove = $('#item-remove');
            item_remove.hide();




            function update_address(){
                var _url = $("#_url").val();
                var cid = $('#cid').val();
                if(cid != ''){
                    $.post(_url + 'contacts/json-single-contact/', {
                        cid: cid

                    })
                        .done(function (data) {
                            var adrs = $("#address");

                            adrs.html(data.address_full);

                            if (document.getElementById('business_number')) {
                                $('#business_number').val(data.business_number);
                            }

                        });
                }

            }
            update_address();
            $('#cid').select2({
                theme: "bootstrap",
                language: {
                    noResults: function () {
                        return $("#_lan_no_results_found").val();
                    }
                }
            })
                .on("change", function(e) {
                    // mostly used event, fired to the original element when the value changes
                    // log("change val=" + e.val);
                    //  alert(e.val);

                    update_address();
                });






            item_remove.on('click', function(){
                $("#invoice_items tr.info").fadeOut(300, function(){
                    $(this).remove();

                });

            });

            var $modal = $('#ajax-modal');



            $('#item-add').on('click', function(){

                // create the backdrop and wait for next modal to be triggered
                $('body').modalmanager('loading');

                $modal.load( _url + 'ps/modal-list/', '', function(){
                    $modal.modal();
                });


            });

            /*
             / @since v 2.0
             */

            $('#contact_add').on('click', function(e){
                e.preventDefault();
                // create the backdrop and wait for next modal to be triggered
                $('body').modalmanager('loading');

                $modal.load( _url + 'contacts/modal_add/', '', function(){
                    $modal.modal();
                    $("#ajax-modal .country").select2({
                        theme: "bootstrap"
                    });
                });
            });

            var rowNum = 0;

            $('#blank-add').on('click', function(){
                rowNum++;
//                $invoice_items.find('tbody')
//                    .append(
//                        '<tr>  <td><textarea class="form-control item_name" name="desc[]" rows="3" id="i_' + rowNum + '"></textarea><input type="hidden" name="item_code[]" value=""></td> <td><input type="text" class="form-control qty" value="" name="qty[]"></td> <td><input type="text" class="form-control item_price" name="amount[]" value=""></td> <td class="ltotal"><input type="text" class="form-control lvtotal" readonly value=""></td> <td> <select class="form-control taxed" name="taxed[]"> <option value="Yes">Yes</option> <option value="No" selected>No</option></select></td></tr>'
//                    );



                {if $config['tax_system'] == 'India'}

                $invoice_items.find('tbody')
                    .append(
                        '<tr>  <td><textarea class="form-control item_name" name="desc[]" rows="3" id="i_' + rowNum + '"></textarea> <input type="hidden" name="item_code[]" value=""> </td> <td><input type="text" class="form-control tax_code" value="" name="tax_code[]"></td>'  +
                        ' <td><input type="text" class="form-control qty" value="" name="qty[]"></td> <td><input type="text" class="form-control item_price" name="amount[]" value=""></td>  <td> <select class="form-control taxed" name="taxed[]" id="t_' + rowNum + '"> {foreach $t as $ts}  <option value="{$ts['rate']}" {if $ts['is_default'] eq '1'}selected{/if}>{$ts['name']}</option> {/foreach} </select></td> <td>\n' +
                        '                                            <input type="text" class="form-control cgst" disabled name="cgst[]" value="">\n' +
                        '                                        </td>\n' +
                        '                                        <td>\n' +
                        '                                            <input type="text" class="form-control sgst" disabled name="sgst[]" value="">\n' +
                        '                                        </td>\n' +
                        '                                        <td>\n' +
                        '                                            <input type="text" class="form-control igst" disabled name="igst[]" value="">\n' +
                        '                                        </td> <td class="ltotal"><input type="text" class="form-control lvtotal" readonly="" value=""></td>  </tr>'
                    );

                {else}

                $invoice_items.find('tbody')
                    .append(
                        '<tr>  <td><textarea class="form-control item_name" name="desc[]" rows="3" id="i_' + rowNum + '"></textarea> <input type="hidden" name="item_code[]" value=""> </td> <td><input type="text" class="form-control qty" value="" name="qty[]"></td> <td><input type="text" class="form-control item_price" name="amount[]" value=""></td>  <td> <select class="form-control taxed" name="taxed[]" id="t_' + rowNum + '"> {foreach $t as $ts}  <option value="{$ts['rate']}" {if $ts['is_default'] eq '1'}selected{/if}>{$ts['name']}</option> {/foreach} </select></td> <td class="ltotal"><input type="text" class="form-control lvtotal" readonly="" value=""></td>  </tr>'
                    );

                {/if}



                {*$invoice_items.find('tbody')*}
                    {*.append(*}
                        {*'<tr>  <td><textarea class="form-control item_name" name="desc[]" rows="3" id="i_' + rowNum + '"></textarea> <input type="hidden" name="item_code[]" value=""> </td> <td><input type="text" class="form-control qty" value="" name="qty[]"></td> <td><input type="text" class="form-control item_price" name="amount[]" value=""></td>  <td> <select class="form-control taxed" name="taxed[]" id="t_' + rowNum + '"> {foreach $t as $ts}  <option value="{$ts['rate']}" {if $ts['is_default'] eq '1'}selected{/if}>{$ts['name']}</option> {/foreach} </select></td> <td class="ltotal"><input type="text" class="form-control lvtotal" readonly="" value=""></td>  </tr>'*}
                    {*);*}


                spEditor('#i_' + rowNum);

                spMultiSelect('#t_' + rowNum);

                //   calculateTotal();


            });

            $invoice_items.on('click', '.redactor-editor', function(){
                $("tr").removeClass("info");
                $(this).closest('tr').addClass("info");

                item_remove.show();
            });

            $modal.on('click', '.update', function(){
                var tableControl= document.getElementById('items_table');
                $modal.modal('loading');
                $modal.modal('loading');
                //$modal
                //    .modal('loading')
                //    .find('.modal-body')
                //    .prepend('<div class="alert alert-info fade in">' +
                //    'Updated!<button type="button" class="close" data-dismiss="alert">&times;</button>' +
                //    '</div>');


                //  input type="text" class="form-control item_name" name="desc[]" value="' + item_name + '">
                // var obj = new Array();

                $('input:checkbox:checked', tableControl).each(function() {
                    rowNum++;
                    var item_code = $(this).closest('tr').find('td:eq(1)').text();
                    var item_name = $(this).closest('tr').find('td:eq(2)').text();

                    var item_price = $(this).closest('tr').find('td:eq(3)').text();



                    {if $config['tax_system'] == 'India'}

                    $invoice_items.find('tbody')
                        .append(
                            '<tr>  <td><textarea class="form-control item_name" name="desc[]" rows="3" id="i_' + rowNum + '">' + item_name + '</textarea> <input type="hidden" name="item_code[]" value="' + item_code + '"> </td> <td><input type="text" class="form-control tax_code" value="" name="tax_code[]"></td>'  +
                            ' <td><input type="text" class="form-control qty" value="1" name="qty[]"></td> <td><input type="text" class="form-control item_price" name="amount[]" value="' + item_price + '"></td>  <td> <select class="form-control taxed" name="taxed[]" id="t_' + rowNum + '"> {foreach $t as $ts}  <option value="{$ts['rate']}" {if $ts['is_default'] eq '1'}selected{/if}>{$ts['name']}</option> {/foreach} </select></td> <td>\n' +
                            '                                            <input type="text" class="form-control cgst" disabled name="cgst[]" value="">\n' +
                            '                                        </td>\n' +
                            '                                        <td>\n' +
                            '                                            <input type="text" class="form-control sgst" disabled name="sgst[]" value="">\n' +
                            '                                        </td>\n' +
                            '                                        <td>\n' +
                            '                                            <input type="text" class="form-control igst" disabled name="igst[]" value="">\n' +
                            '                                        </td> <td class="ltotal"><input type="text" class="form-control lvtotal" readonly="" value=""></td>  </tr>'
                        );

                    {else}

                    $invoice_items.find('tbody')
                        .append(
                            '<tr>  <td><textarea class="form-control item_name" name="desc[]" rows="3" id="i_' + rowNum + '">' + item_name + '</textarea> <input type="hidden" name="item_code[]" value="' + item_code + '"></td> <td><input type="text" class="form-control qty" value="1" name="qty[]"></td> <td><input type="text" class="form-control item_price" name="amount[]" value="' + item_price + '"></td>  <td> <select class="form-control taxed" name="taxed[]" id="t_' + rowNum + '"> {foreach $t as $ts}  <option value="{$ts['rate']}" {if $ts['is_default'] eq '1'}selected{/if}>{$ts['name']}</option> {/foreach} </select></td> <td class="ltotal"><input type="text" class="form-control lvtotal" readonly="" value=""></td>  </tr>'
                        );

                    {/if}

                    spEditor('#i_' + rowNum);

                    spMultiSelect('#t_' + rowNum);

                    calculateTotal();

                });

                //  console.debug(obj); // Write it to the console
                //  calculateTotal();


                $modal.modal('hide');

            });


            $modal.on('click', '.contact_submit', function(e){
                e.preventDefault();
                //  var tableControl= document.getElementById('items_table');
                $modal.modal('loading');

                var _url = $("#_url").val();
                $.post(_url + 'contacts/add-post/', {


                    account: $('#account').val(),
                    company: $('#company').val(),
                    address: $('#m_address').val(),

                    city: $('#city').val(),
                    state: $('#state').val(),
                    zip: $('#zip').val(),
                    country: $('#country').val(),
                    phone: $('#phone').val(),
                    email: $('#email').val()

                })
                    .done(function (data) {

                        var _url = $("#_url").val();
                        if ($.isNumeric(data)) {

                            // location.reload();
                            var is_recurring = $('#is_recurring').val();
                            if(is_recurring == 'yes'){
                                window.location = _url + 'invoices/add/recurring/' + data + '/';
                            }
                            else{
                                window.location = _url + 'invoices/add/1/' + data + '/';
                            }

                        }
                        else {


                            $modal
                                .modal('loading')
                                .find('.modal-body')
                                .prepend('<div class="alert alert-danger fade in">' + data +
                                    '<button type="button" class="close" data-dismiss="alert">&times;</button>' +
                                    '</div>');
                            $("#cid").select2('data', { id: newID, text: newText });
                        }
                    });


            });



            $("#add_discount").click(function (e) {
                e.preventDefault();
                var s_discount_amount = $('#discount_amount');
                var c_discount = s_discount_amount.val();
                var c_discount_type = $('#discount_type').val();
                var p_checked = "";
                var f_checked = "";
                if( c_discount_type == "p" ){
                    p_checked = 'checked="checked"';
                }else{
                    f_checked = 'checked="checked"';
                }
                bootbox.dialog({
                        title: $("#_lan_set_discount").val(),
                        message: '<div class="row">  ' +
                        '<div class="col-md-12"> ' +
                        '<form class="form-horizontal" action="javascript:void(0);"> ' +
                        '<div class="form-group"> ' +
                        '<label class="col-md-4 control-label" for="set_discount">' + $("#_lan_discount").val() +'</label> ' +
                        '<div class="col-md-4"> ' +
                        '<input id="set_discount" name="set_discount" type="text" class="form-control input-md" value="' + c_discount + '"> ' +
                        '</div> ' +
                        '</div> ' +
                        '<div class="form-group"> ' +
                        '<label class="col-md-4 control-label" for="set_discount_type">' + $("#_lan_discount_type").val() +'</label> ' +
                        '<div class="col-md-4"> <div class="radio"> <label for="set_discount_type-0"> ' +
                        '<input type="radio" name="set_discount_type" id="set_discount_type-0" value="p" ' + p_checked + '> ' +
                        '' + $("#_lan_percentage").val() +' (%) </label> ' +
                        '</div><div class="radio"> <label for="set_discount_type-1"> ' +
                        '<input type="radio" name="set_discount_type" id="set_discount_type-1" value="f" ' + f_checked + '> ' + $("#_lan_fixed_amount").val() +' </label> ' +
                        '</div> ' +
                        '</div> </div>' +
                        '</form> </div>  </div>',
                        buttons: {
                            success: {
                                label: $("#_lan_btn_save").val(),
                                className: "btn-success",
                                callback: function () {
                                    var discount_amount = $('#set_discount').val();
                                    var discount_type = $("input[name='set_discount_type']:checked").val();
                                    $('#discount_amount').val(discount_amount);
                                    $('#discount_type').val(discount_type);
                                    calculateTotal();
                                    //updateTax();
                                    //updateTotal();
                                }
                            }
                        }
                    }
                );
            });




            $(".progress").hide();
            $("#emsg").hide();
            $("#submit").click(function (e) {
                e.preventDefault();
                $('#ibox_form').block({ message: null });
                var _url = $("#_url").val();
                $.post(_url + 'invoices/edit-post/', $('#invform').serialize(), function(data){
                    var _url = $("#_url").val();
                    if ($.isNumeric(data)) {

                        window.location = _url + 'invoices/edit/' + data + '/';
                    }
                    else {
                        $('#ibox_form').unblock();
                        var body = $("html, body");
                        body.animate({ scrollTop:0 }, '1000', 'swing');
                        $("#emsgbody").html(data);
                        $("#emsg").show("slow");
                    }
                });
            });


            $("#save_n_close").click(function (e) {
                e.preventDefault();
                $('#ibox_form').block({ message: null });
                var _url = $("#_url").val();
                $.post(_url + 'invoices/edit-post/', $('#invform').serialize(), function(data){

                    var _url = $("#_url").val();
                    if ($.isNumeric(data)) {

                        window.location = _url + 'invoices/view/' + data + '/';
                    }
                    else {
                        $('#ibox_form').unblock();
                        var body = $("html, body");
                        body.animate({ scrollTop:0 }, '1000', 'swing');
                        $("#emsgbody").html(data);
                        $("#emsg").show("slow");
                    }
                });
            });


            {if $pos eq 'pos'}

            function loadItems() {

                $block_items.html(block_msg);

                var item_name;

                $.getJSON( base_url + "items/all/", function( data ) {
                    var items = "";
                    var b_p;
                    $.each( data, function( key, val ) {

                        item_name = val.name;

                        item_name = item_name.trunc(12);


                        b_p = '<div class="col-lg-2 col-md-2 col-sm-3 col-xs-4"><div class="pos_item text-center" id="pos_item_'+ val.id +'" data-pos-item-name="'+val.name+'" data-pos-item-price="'+val.sales_price+'" data-id="'+ val.id +'" data-pos-item-number="'+ val.item_number +'"><img src="/storage/items/thumb'+ val.image +'" alt="'+ item_name +'" class="img-circle"><hr>'+ item_name +' <br>'+ val.sales_price +'  <hr></div> </div>';

                        items = items + b_p;
                    });

                    $block_items.html(items);

                    $('#ib_search_input').hideseek({
                        highlight: true
                    });

                });

            }

            loadItems();

            var pos_item_name, pos_item_price, pos_item_id, pos_item_number;

            var item_sl = 1;

            $block_items.on('click', '.pos_item', function(){

                pos_item_number = $(this).data('pos-item-number');
                pos_item_name = $(this).data('pos-item-name');
                pos_item_price = $(this).data('pos-item-price');
                pos_item_id = $(this).data('id');






                $invoice_items.find('tbody')
                    .prepend(
                        '<tr>  <td><textarea class="form-control item_name" name="desc[]" rows="3" id="i_' + item_sl + '">' + pos_item_name + '</textarea> <input type="hidden" name="item_code[]" value="' + pos_item_number + '"></td> <td><input type="text" class="form-control qty" value="1" name="qty[]"></td> <td><input type="text" class="form-control item_price" name="amount[]" value="' + pos_item_price + '"></td>  <td> <select class="form-control taxed" name="taxed[]" id="t_' + rowNum + '"> {foreach $t as $ts}  <option value="{$ts['rate']}" {if $ts['is_default'] eq '1'}selected{/if}>{$ts['name']}</option> {/foreach} </select></td> <td class="ltotal"><input type="text" class="form-control lvtotal" readonly="" value=""></td>  </tr>>'
                    );

                spEditor('#i_' + pos_item_id);


                spMultiSelect('#t_' + rowNum);

                calculateTotal();

                item_sl = item_sl+1;


            });



            {/if}

        });
    </script>


{/block}