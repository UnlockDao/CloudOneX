<?php
/*
|--------------------------------------------------------------------------
| Controller
|--------------------------------------------------------------------------
|
*/

_auth();
$ui->assign('_application_menu', 'invoices');
$ui->assign('_st', $_L['Invoices']);
$ui->assign('_title', $_L['Sales'] . '- ' . $config['CompanyName']);
$action = $routes['1'];
$user = User::_info();
$ui->assign('user', $user);
Event::trigger('invoices');

if(has_access($user->roleid,'sales','all_data')){

    $sales_all_data = true;

}
else{

    $sales_all_data = false;

}

switch ($action) {


    case 'add':
    case 'edit':



        $customers_all_data = has_access($user->roleid,'customers','all_data');

        $extraHtml = '';

        $app->emit('invoices_add');

        $extra_fields = '';
        $extra_jq = '';

        Event::trigger('add_invoice');

        $ui->assign('extra_fields', $extra_fields);

    $recurring = false;

    $p_cid = '';

    $invoice = false;
    $contact = false;
    $items = false;

        if($action == 'add')
        {
            if (isset($routes['2']) AND ($routes['2'] == 'recurring')) {
                $recurring = true;
            }

            if (isset($routes['3']) && ($routes['3'] != '') && ($routes['3'] != '0')) {
                $p_cid = $routes['3'];
                $p_d = ORM::for_table('crm_accounts')->find_one($p_cid);
                if (!$p_d) {
                   $p_cid = '';
                }
            }

            $ui->assign('_st', $_L['Add Invoice']);
        }

        elseif ($action == 'edit')
        {
            $id = route(2);
            $invoice = Invoice::find($id);

            $p_cid = $invoice->userid;

            if($invoice->r != 0)
            {
                $recurring = true;
            }


        }

        if($invoice)
        {
            $contact = Contact::find($invoice->userid);
            $items = InvoiceItem::where('invoiceid',$invoice->id)->orderBy('id','asc')->get();
        }
    $ui->assign('p_cid', $p_cid);



    $ui->assign('recurring', $recurring);

        $c = ORM::for_table('crm_accounts')->select('id')->select('account')->select('company')->select('email')->order_by_desc('id')->where_like('type','%Customer%');



        if(!$customers_all_data)
        {
            $c->where('o',$user->id);
        }


        $c = $c->find_array();

        $ui->assign('c', $c);
        $t = ORM::for_table('sys_tax')->find_array();
        $ui->assign('t', $t);
        $ui->assign('idate', date('Y-m-d'));

        $tax_default = ORM::for_table('sys_tax')->where('is_default',1)->find_one();


        $tax_system = $config['tax_system'];

        switch ($tax_system){

            case 'India':


                $states = Tax::indianStates();


                break;

            default:

                $states = [];

        }


        $css_arr = array(
            's2/css/select2.min',
            'modal',
            'dp/dist/datepicker.min',
            'redactor/redactor'
        );
        $js_arr = array(
            'redactor/redactor.min',
            's2/js/select2.min',
            's2/js/i18n/' . lan() ,
            'dp/dist/datepicker.min',
            'dp/i18n/' . $config['language'],
            'numeric',
            'filter.min',
            'modal'
        );

        $pos = route(4);



        Event::trigger('add_invoice_rendering_form');
        $ui->assign('xheader', Asset::css($css_arr));
        $ui->assign('xfooter', Asset::js($js_arr));



        view('invoice',[
            'pos' => $pos,
            'tax_default' => $tax_default,
            'states' => $states,
            'extraHtml' => $extraHtml,
            'currencies' => getActiveCurrencies(),
            'invoice' => $invoice,
            'contact' => $contact,
            'items' => $items
        ]);


        break;



    case 'view':



        $extraHtml = '';
        $id = $routes['2'];
        $app->emit('invoices_view',[&$id]);



        $d = ORM::for_table('sys_invoices')->find_one($id);
        if ($d) {

            // find all activity for this user

            if(!$sales_all_data)
            {
                if($d->aid != $user->id)
                {
                    permissionDenied();
                }
            }

            $items = ORM::for_table('sys_invoiceitems')->where('invoiceid', $id)->order_by_asc('id')->find_many();
            $ui->assign('items', $items);

            // find related transactions

            $trs_c = ORM::for_table('sys_transactions')->where('iid', $id)->count();
            $trs = ORM::for_table('sys_transactions')->where('iid', $id)->order_by_desc('id')->find_many();
            $ui->assign('trs', $trs);
            $ui->assign('trs_c', $trs_c);
            $emls_c = ORM::for_table('sys_email_logs')->where('iid', $id)->count();
            $emls = ORM::for_table('sys_email_logs')->where('iid', $id)->order_by_desc('id')->find_many();
            $ui->assign('emls', $emls);
            $ui->assign('emls_c', $emls_c);
            $a = ORM::for_table('crm_accounts')->find_one($d['userid']);
            $ui->assign('a', $a);
            $ui->assign('d', $d);
            $i_credit = $d['credit'];
            $i_due = '0.00';
            $i_total = $d['total'];
            if ($d['credit'] != '0.00') {
                $i_due = $i_total - $i_credit;
            }
            else {
                $i_due = $d['total'];
            }

            $i_due = number_format($i_due, 2, $config['dec_point'], $config['thousands_sep']);
            $ui->assign('i_due', $i_due);
            $cf = ORM::for_table('crm_customfields')->where('showinvoice', 'Yes')->order_by_asc('id')->find_many();
            $ui->assign('cf', $cf);
            $ui->assign('xheader', Asset::css(array(
                's2/css/select2.min',
                'dropzone/dropzone',
                'dp/dist/datepicker.min',
                'sn/summernote',
                'sn/summernote-bs3',
                'modal'
            )));
            $ui->assign('xfooter', Asset::js(array(
                's2/js/select2.min',
                's2/js/i18n/' . lan() ,
                'dp/dist/datepicker.min',
                'dp/i18n/' . $config['language'],
                'numeric',
                'modal',
                'sn/summernote.min',
                'dropzone/dropzone'
            )));
            $x_html = '';
            Event::trigger('view_invoice');
            $ui->assign('x_html', $x_html);

            $upload_max_size = ini_get('upload_max_filesize');
            $post_max_size = ini_get('post_max_size');
            $ui->assign('upload_max_size', $upload_max_size);
            $ui->assign('post_max_size', $post_max_size);

            // count attachments

            $inv_files = Invoice::files($id);
            $inv_files_c = count($inv_files);
            $ui->assign('inv_files_c', $inv_files_c);
            $ui->assign('inv_files', $inv_files);
            $access_logs = ORM::for_table('ib_invoice_access_log')->where('iid', $id)->order_by_desc('id')->find_array();
            $ui->assign('access_logs', $access_logs);

            $currency_rate = 1;


            // find the company

            if($a->cid != '' || $a->cid != 0){
                $company = Company::find($a->cid);
            }
            else{
                $company = false;
            }


            // find the quote

            $quote = false;

            if($d->quote_id != '0'){
                $quote = ORM::for_table('sys_quotes')->find_one($d->quote_id);
            }

            $currencies_all = Currency::getAllCurrencies();

            if(isset($currencies_all[$d->currency_iso_code]))
            {
                $data_a_sign = $currencies_all[$d->currency_iso_code]['symbol'];
                $data_a_sep = $currencies_all[$d->currency_iso_code]['thousands_separator'];
                $data_a_dec = $currencies_all[$d->currency_iso_code]['decimal_mark'];

                if($currencies_all[$d->currency_iso_code] == true)
                {
                    $data_p_sign = 'p';
                }
                else{
                    $data_p_sign = 's';
                }

            }
            else{
                $data_a_sign = $config['currency_code'];
                $data_a_sep = $config['thousands_sep'];
                $data_a_dec = $config['dec_point'];
                $data_p_sign = $config['currency_symbol_position'];
            }

            //

            view('invoices_view', [
                'currencies' => Currency::all() ,
                'currency_rate' => $currency_rate,
                'company' => $company,
                'quote' => $quote,
                'extraHtml' => $extraHtml,
                'data_a_sign' => $data_a_sign,
                'data_a_sep' => $data_a_sep,
                'data_a_dec' => $data_a_dec,
                'data_p_sign' => $data_p_sign
            ]);
        }
        else {
            r2(U . 'customers/list', 'e', $_L['Account_Not_Found']);
        }

        break;

    case 'add-post':


        $invoice_id = _post('invoice_id');

        $invoice = false;

        if($invoice_id != '')
        {
            $invoice = Invoice::find($invoice_id);
        }

        $app->emit('invoices_add_post');

        $cid = _post('cid');

        // find user with cid

        $u = ORM::for_table('crm_accounts')->find_one($cid);
        $msg = '';
        if ($cid == '') {
            $msg.= $_L['select_a_contact'] . ' <br /> ';
        }

        $notes = _post('notes');

        $show_quantity_as = _post('show_quantity_as');

        // find currency

        $currency_id = _post('currency');
        $currency_find = Currency::where('iso_code',$currency_id)->first();
        if ($currency_find) {
            $currency = $currency_find->id;
            $currency_symbol = $currency_find->symbol;
            $currency_rate = $currency_find->rate;
        }
        else {
            $currency = 0;
            $currency_symbol = $config['currency_code'];
            $currency_rate = 1.0000;
        }

        if (isset($_POST['amount'])) {
            $amount = $_POST['amount'];
        }
        else {
            $msg.= $_L['at_least_one_item_required'] . ' <br /> ';
        }

        $idate = _post('idate');
        $its = strtotime($idate);


        $duedate = _post('duedate');


        $dd = '';

        if(!$invoice)
        {
            if ($duedate == 'due_on_receipt') {
                $dd = $idate;
            }
            elseif ($duedate == 'days3') {
                $dd = date('Y-m-d', strtotime('+3 days', $its));
            }
            elseif ($duedate == 'days5') {
                $dd = date('Y-m-d', strtotime('+5 days', $its));
            }
            elseif ($duedate == 'days7') {
                $dd = date('Y-m-d', strtotime('+7 days', $its));
            }
            elseif ($duedate == 'days10') {
                $dd = date('Y-m-d', strtotime('+10 days', $its));
            }
            elseif ($duedate == 'days15') {
                $dd = date('Y-m-d', strtotime('+15 days', $its));
            }
            elseif ($duedate == 'days30') {
                $dd = date('Y-m-d', strtotime('+30 days', $its));
            }
            elseif ($duedate == 'days45') {
                $dd = date('Y-m-d', strtotime('+45 days', $its));
            }
            elseif ($duedate == 'days60') {
                $dd = date('Y-m-d', strtotime('+60 days', $its));
            }
            else {
                $msg.= 'Invalid Date <br /> ';
            }

            if (!$dd) {
                $msg.= 'Date Parsing Error <br /> ';
            }
        }
        else{
            $dd = $duedate;
        }

        $repeat = _post('repeat');
        $nd = $idate;
        if ($repeat == '0') {
            $r = '0';
        }
        elseif ($repeat == 'daily') {
            $r = '+1 day';
            $nd = date('Y-m-d', strtotime('+1 day', $its));
        }
        elseif ($repeat == 'week1') {
            $r = '+1 week';
            $nd = date('Y-m-d', strtotime('+1 week', $its));
        }
        elseif ($repeat == 'weeks2') {
            $r = '+2 weeks';
            $nd = date('Y-m-d', strtotime('+2 weeks', $its));
        }
        elseif ($repeat == 'weeks3') {
            $r = '+3 weeks';
            $nd = date('Y-m-d', strtotime('+3 weeks', $its));
        }
        elseif ($repeat == 'weeks4') {
            $r = '+4 weeks';
            $nd = date('Y-m-d', strtotime('+4 weeks', $its));
        }
        elseif ($repeat == 'month1') {
            $r = '+1 month';
            $nd = date('Y-m-d', strtotime('+1 month', $its));
        }
        elseif ($repeat == 'months2') {
            $r = '+2 months';
            $nd = date('Y-m-d', strtotime('+2 months', $its));
        }
        elseif ($repeat == 'months3') {
            $r = '+3 months';
            $nd = date('Y-m-d', strtotime('+3 months', $its));
        }
        elseif ($repeat == 'months6') {
            $r = '+6 months';
            $nd = date('Y-m-d', strtotime('+6 months', $its));
        }
        elseif ($repeat == 'year1') {
            $r = '+1 year';
            $nd = date('Y-m-d', strtotime('+1 year', $its));
        }
        elseif ($repeat == 'years2') {
            $r = '+2 years';
            $nd = date('Y-m-d', strtotime('+2 years', $its));
        }
        elseif ($repeat == 'years3') {
            $r = '+3 years';
            $nd = date('Y-m-d', strtotime('+3 years', $its));
        }
        else {
            $msg.= 'Date Parsing Error <br /> ';
        }

        if ($msg == '') {

            $business_number = _post('business_number');

            if($business_number != '' && $u->business_number != $business_number)
            {
                $u->business_number = $business_number;
                $u->save();
            }

            $is_same_state = 1;

            if($config['tax_system'] == 'India')
            {
                $place_of_supply = _post('place_of_supply');

                if($place_of_supply == $config['business_location'])
                {
                    $is_same_state = 1;
                }
                else{
                    $is_same_state = 0;
                }
            }

            $qty = $_POST['qty'];
            $item_number = $_POST['item_code'];

            if (isset($_POST['taxed'])) {
                $taxed = $_POST['taxed'];
            }
            else {
                $taxed = false;
            }

            $sTotal = '0';
            $taxTotal = '0';
            $i = '0';
            $a = array();


            $taxval = '0.00';
            $taxname = '';
            $taxrate = '0.00';



            $taxed_amount = 0.00;
            $lamount = 0.00;

            $discounts = $_POST['discount'];

            $discount_type = _post('discount_type');

            $total_discount = 0.00;

            $sub_total_without_discount = 0.00;

            foreach($amount as $samount) {

                $samount = createFromCurrency($samount,$currency_id);
                $a[$i] = $samount;
                /* @since v 2.0 */

                $sqty = $qty[$i];
              //  $sqty = Finance::amount_fix($sqty);
                $sqty = createFromCurrency($sqty,$currency_id);

                $lTaxRate = $taxed[$i];

                $lTaxRate = Finance::amount_fix($lTaxRate);

                $line_discount = $discounts[$i];



                $line_discount = createFromCurrency($line_discount,$currency_id);

                $line_total = $samount * ($sqty);

                $line_total_without_discount = $line_total;

                if($discount_type == 'p')
                {
                    $line_discount = $line_total*($line_discount/100);
                }


                $line_total = $line_total-$line_discount;

                $total_discount += $line_discount;

                $sTotal+= $line_total;
                $lamount = $line_total;

                $lTaxVal = ($lamount*$lTaxRate)/100;

                $taxed_amount += $lTaxVal;

                $sub_total_without_discount += $line_total_without_discount;

                $i++;
            }




            $invoicenum = _post('invoicenum');
            $cn = _post('cn');
            $fTotal = $sTotal;


         //   $discount_amount = _post('discount_amount');
            $discount_type = _post('discount_type');
            $discount_value = '0.00';



            $fTotal = $fTotal + $taxed_amount;



            $status = _post('status');
            if ($status != 'Draft') {
                $status = 'Unpaid';
            }

            $receipt_number = _post('receipt_number');

            $title = _post('title');

            $datetime = date("Y-m-d H:i:s");


            if(!$invoice)
            {

                $invoice = new Invoice;

                $vtoken = _raid(10);
                $ptoken = _raid(10);

                $invoice->vtoken = $vtoken;
                $invoice->ptoken = $ptoken;


            }

            $invoice->userid = $cid;
            $invoice->account = $u['account'];
            $invoice->date = $idate;
            $invoice->duedate = $dd;
            $invoice->datepaid = $datetime;
            $invoice->subtotal = $sub_total_without_discount;
            $invoice->discount_type = $discount_type;
            $invoice->discount_value = $discount_value;
            $invoice->discount = $total_discount;
            $invoice->total = $fTotal;
            $invoice->tax = $taxed_amount;
            $invoice->taxname = '';
            $invoice->taxrate = 0.00;
            $invoice->status = $status;
            $invoice->notes = $notes;
            $invoice->r = $r;
            $invoice->nd = $nd;
            $invoice->aid = $user->id;
            $invoice->is_same_state = $is_same_state;
            $invoice->show_quantity_as = $show_quantity_as;
            $invoice->invoicenum = $invoicenum;
            $invoice->cn = $cn;
            $invoice->tax2 = '0.00';
            $invoice->taxrate2 = '0.00';
            $invoice->paymentmethod = '';
            $invoice->currency = $currency;
            $invoice->currency_symbol = $currency_symbol;
            $invoice->currency_rate = $currency_rate;
            $invoice->currency_iso_code = $currency_id;
            $invoice->receipt_number = $receipt_number;
            $invoice->title = $title;
            $invoice->save();



            $invoiceid = $invoice->id;
            $description = $_POST['desc'];



            if(isset($_POST['tax_code']))
            {
                $tax_code = $_POST['tax_code'];
            }
            else{
                $tax_code = [];
            }


            $i = '0';

            if($invoice)
            {
                InvoiceItem::where('invoiceid',$invoice->id)->delete();
            }

            foreach($description as $item) {


                $samount = $a[$i];

              //  $samount = Finance::amount_fix($samount);

             //   $samount = createFromCurrency($samount,$currency_id);

                if ($item == '' && $samount == '0.00') {
                    $i++;
                    continue;
                }

                $tax_rate = $taxed[$i];

                /* @since v 2.0 */
                $sqty = $qty[$i];
              //  $sqty = Finance::amount_fix($sqty);
                $sqty = createFromCurrency($sqty,$currency_id);

                $line_discount = $discounts[$i];
                $line_discount = createFromCurrency($line_discount,$currency_id);

                $line_total = $samount * ($sqty);

                if($discount_type == 'p')
                {
                    $line_discount = $line_total*($line_discount/100);
                }

                $line_total = $line_total-$line_discount;

                $sTotal+= $line_total;
                $lamount = $line_total;

                $lTaxVal = ($lamount*$lTaxRate)/100;

                $taxed_amount += $lTaxVal;



                $d = ORM::for_table('sys_invoiceitems')->create();
                $d->invoiceid = $invoiceid;
                $d->userid = $cid;
                $d->description = $item;
                $d->qty = $sqty;
                $d->amount = $samount;
                $d->total = $line_total;



                if($tax_rate == '' || $tax_rate == '0'){
                    $tax_rate = 0.00;
                    $d->taxed = '0';
                }
                else{
                    $tax_rate = $taxed[$i];
                    $d->taxed = '1';
                }

                $d->tax_rate = $tax_rate;

                $item_taxed_amount = round(($tax_rate*($sqty*$samount))/100,2);


                $d->type = '';
                $d->relid = '0';
                $d->itemcode = $item_number[$i];
                $d->taxamount = $item_taxed_amount;
                $d->duedate = date('Y-m-d');
                $d->paymentmethod = '';
                $d->notes = '';


                $d->discount_type = $discount_type;
                $d->discount_amount = $line_discount;

                if(isset($tax_code[$i]))
                {
                    $d->tax_code = $tax_code[$i];
                }
                else{
                    $d->tax_code = '';
                }

                $d->save();

                Inventory::decreaseByItemNumber($item_number[$i], $sqty);

                // Add Sales Count

                $item_r = Item::where('name', $item)->first();
                if ($item_r) {
                    $item_r->sold_count = $item_r->sold_count + $sqty;
                    $item_r->total_amount = $item_r->total_amount + $samount;
                    $item_r->save();
                }

                $i++;
            }

            $code = _post('cn');

            update_option('invoice_code_current_number',current_number_would_be($cn));

            $app->emit('invoices_add_post_done',[$invoiceid]);

            echo $invoiceid;
        }
        else {
            echo $msg;
        }

        break;

    case 'list':



        if(has_access($user->roleid,'sales','all_data')){

            $all_data = true;

        }
        else{
            $all_data = false;
        }

        $paginator = array();
        $mode_css = '';
        $mode_js = '';
        $view_type = 'default';
        $view_type = 'filter';
        $mode_css = Asset::css('footable/css/footable.core.min');
        $mode_js = Asset::js(array(
            'numeric',
            'footable/js/footable.all.min',
            'contacts/mode_search'
        ));


        $total_invoice = ORM::for_table('sys_invoices');

        if(!$all_data)
        {
            $total_invoice->where('aid',$user->id);
        }

        $total_invoice = $total_invoice->count();

        $ui->assign('total_invoice', $total_invoice);
        $f = ORM::for_table('sys_invoices');
        if (route(3) != '') {
            $s_f = route(3);
            if ($s_f == 'paid') {
                $f->where('status', 'Paid');
            }
            elseif ($s_f == 'unpaid') {
                $f->where('status', 'Unpaid');
            }
            elseif ($s_f == 'partially_paid') {
                $f->where('status', 'Partially Paid');
            }
            elseif ($s_f == 'cancelled') {
                $f->where('status', 'Cancelled');
            }
            else {
            }
        }

        if(!$all_data)
        {
            $f->where('aid',$user->id);
        }

        $d = $f->order_by_desc('id')->find_many();
        $paginator['contents'] = '';
        $ui->assign('_st', $_L['Invoices'] . '<div class="btn-group pull-right" style="padding-right: 10px;">
  <a class="btn btn-success btn-xs" href="' . U . 'invoices/add/' . '" style="box-shadow: none;"><i class="fa fa-plus"></i></a>
  <a class="btn btn-primary btn-xs" href="' . U . 'invoices/add/' . '" style="box-shadow: none;"><i class="fa fa-repeat"></i></a>
  <a class="btn btn-success btn-xs" href="' . U . 'invoices/export_csv/' . '" style="box-shadow: none;"><i class="fa fa-download"></i></a>
</div>');
        $ui->assign('xheader', $mode_css);
        $ui->assign('xfooter', $mode_js);
        $ui->assign('view_type', $view_type);
        $ui->assign('d', $d);
        $ui->assign('paginator', $paginator);
        $ui->assign('xjq', '
         $(\'.amount\').autoNumeric(\'init\', {

   
    dGroup: ' . $config['thousand_separator_placement'] . ',
    aPad: ' . $config['currency_decimal_digits'] . ',
    pSign: \'' . $config['currency_symbol_position'] . '\',
    aDec: \'' . $config['dec_point'] . '\',
    aSep: \'' . $config['thousands_sep'] . '\',
    vMax: \'9999999999999999.00\',
                vMin: \'-9999999999999999.00\'

    });
$(".cdelete").click(function (e) {
        e.preventDefault();
        var id = this.id;
        bootbox.confirm("' . $_L['are_you_sure'] . '", function(result) {
           if(result){
               var _url = $("#_url").val();
               window.location.href = _url + "delete/invoice/" + id;
           }
        });
    });

$(\'[data-toggle="tooltip"]\').tooltip();

 ');


        $paid = ORM::for_table('sys_invoices');

        if(!$all_data)
        {
            $paid->where('aid',$user->id);
        }

        $paid =  $paid->where('status', 'Paid')->count();

        $unpaid = ORM::for_table('sys_invoices')->where('status', 'Unpaid');

        if(!$all_data)
        {
            $unpaid->where('aid',$user->id);
        }

        $unpaid = $unpaid->count();

        $partially_paid = ORM::for_table('sys_invoices')->where('status', 'Partially Paid');

            if(!$all_data)
            {
                $partially_paid->where('aid',$user->id);
            }

        $partially_paid = $partially_paid->count();

        $cancelled = ORM::for_table('sys_invoices')->where('status', 'Cancelled');

        if(!$all_data)
        {
            $cancelled->where('aid',$user->id);
        }

        $cancelled = $cancelled->count();

        $arr = array(
            'Paid' => $paid,
            'Unpaid' => $unpaid,
            'Partially Paid' => $partially_paid,
            'Cancelled' => $cancelled
        );

        $p = Ib_Math::array_percentage($arr);
        $invoice_paid_amount = Invoice::where('status', 'Paid');

        if(!$all_data)
        {
            $invoice_paid_amount->where('aid',$user->id);
        }

        $invoice_paid_amount = $invoice_paid_amount->sum('total');

        $invoice_un_paid_amount = Invoice::where('status', 'Unpaid');


        if(!$all_data)
        {
            $invoice_un_paid_amount->where('aid',$user->id);
        }

        $invoice_un_paid_amount = $invoice_un_paid_amount->sum('total');


        $invoice_partially_paid_amount = Invoice::where('status', 'Partially Paid');

        if(!$all_data)
        {
            $invoice_partially_paid_amount->where('aid',$user->id);
        }

        $invoice_partially_paid_amount = $invoice_partially_paid_amount->sum('credit');


        $invoice_cancelled_amount = Invoice::where('status', 'Cancelled');

        if(!$all_data)
        {
            $invoice_cancelled_amount->where('aid',$user->id);
        }

        $invoice_cancelled_amount = $invoice_cancelled_amount->sum('total');

        $contacts = Contact::all()->keyBy('id')->all();

        view('invoices_list', [
            'paid' => $paid,
            'unpaid' => $unpaid,
            'partially_paid' => $partially_paid,
            'cancelled' => $cancelled,
            'invoice_paid_amount' => $invoice_paid_amount,
            'invoice_un_paid_amount' => $invoice_un_paid_amount,
            'invoice_cancelled_amount' => $invoice_cancelled_amount,
            'invoice_partially_paid_amount' => $invoice_partially_paid_amount,
            'p' => $p,
	        'contacts' => $contacts
        ]);

        break;

    case 'list-recurring':
        $d = ORM::for_table('sys_invoices')->where_not_equal('r', '0')->order_by_desc('id')->find_many();
        $ui->assign('d', $d);
        $ui->assign('xjq', '
$(".cdelete").click(function (e) {
        e.preventDefault();
        var id = this.id;
        bootbox.confirm("' . $_L['are_you_sure'] . '", function(result) {
           if(result){
               var _url = $("#_url").val();
               window.location.href = _url + "delete/invoice/" + id;
           }
        });
    });

     $(".cstop").click(function (e) {
        e.preventDefault();
        var id = this.id;
        bootbox.confirm("Are you sure? This will prevent future invoice generation from this invoice.", function(result) {
           if(result){
               var _url = $("#_url").val();
               window.location.href = _url + "invoices/stop_recurring/" + id;
           }
        });
    });

 ');
        view('list-recurring-invoices');
        break;

    case 'edit-post':


        Event::trigger('invoices/edit-post/');
        $cid = _post('cid');
        $iid = _post('iid');
        $show_quantity_as = _post('show_quantity_as');

        // find user with cid

        $u = ORM::for_table('crm_accounts')->find_one($cid);
        $msg = '';
        if ($cid == '') {
            $msg.= $_L['select_a_contact'] . ' <br /> ';
        }

        $notes = _post('notes');
        if (isset($_POST['amount'])) {
            $amount = $_POST['amount'];
        }
        else {
            $msg.= $_L['at_least_one_item_required'] . ' <br /> ';
        }

        // find currency

        $currency_id = _post('currency');
        $currency_find = Currency::where('iso_code',$currency_id)->first();
        if ($currency_find) {
            $currency = $currency_find->id;
            $currency_symbol = $currency_find->symbol;
            $currency_rate = $currency_find->rate;
        }
        else {
            $currency = 0;
            $currency_symbol = $config['currency_code'];
            $currency_rate = 1.0000;
        }

        $idate = _post('idate');
        $its = strtotime($idate);
        $duedate = _post('ddate');
        $repeat = _post('repeat');
        $nd = $idate;
        if ($repeat == '0') {
            $r = '0';
        }
        elseif ($repeat == 'daily') {
            $r = '+1 day';
            $nd = date('Y-m-d', strtotime('+1 day', $its));
        }
        elseif ($repeat == 'week1') {
            $r = '+1 week';
            $nd = date('Y-m-d', strtotime('+1 week', $its));
        }
        elseif ($repeat == 'weeks2') {
            $r = '+2 weeks';
            $nd = date('Y-m-d', strtotime('+2 weeks', $its));
        }
        elseif ($repeat == 'weeks3') {
            $r = '+3 weeks';
            $nd = date('Y-m-d', strtotime('+3 weeks', $its));
        }
        elseif ($repeat == 'weeks4') {
            $r = '+4 weeks';
            $nd = date('Y-m-d', strtotime('+4 weeks', $its));
        }
        elseif ($repeat == 'month1') {
            $r = '+1 month';
            $nd = date('Y-m-d', strtotime('+1 month', $its));
        }
        elseif ($repeat == 'months2') {
            $r = '+2 months';
            $nd = date('Y-m-d', strtotime('+2 months', $its));
        }
        elseif ($repeat == 'months3') {
            $r = '+3 months';
            $nd = date('Y-m-d', strtotime('+3 months', $its));
        }
        elseif ($repeat == 'months6') {
            $r = '+6 months';
            $nd = date('Y-m-d', strtotime('+6 months', $its));
        }
        elseif ($repeat == 'year1') {
            $r = '+1 year';
            $nd = date('Y-m-d', strtotime('+1 year', $its));
        }
        elseif ($repeat == 'years2') {
            $r = '+2 years';
            $nd = date('Y-m-d', strtotime('+2 years', $its));
        }
        elseif ($repeat == 'years3') {
            $r = '+3 years';
            $nd = date('Y-m-d', strtotime('+3 years', $its));
        }
        else {
            $msg.= 'Date Parsing Error <br /> ';
        }

        if ($msg == '') {

            $business_number = _post('business_number');

            if($business_number != '' && $u->business_number != $business_number)
            {
                $u->business_number = $business_number;
                $u->save();
            }

            $is_same_state = 1;

            if($config['tax_system'] == 'India')
            {
                $place_of_supply = _post('place_of_supply');

                if($place_of_supply == $config['business_location'])
                {
                    $is_same_state = 1;
                }
                else{
                    $is_same_state = 0;
                }
            }

            $qty = $_POST['qty'];
            $item_number = $_POST['item_code'];
            if (isset($_POST['taxed'])) {
                $taxed = $_POST['taxed'];
            }
            else {
                $taxed = false;
            }


            $sTotal = '0';
            $taxTotal = '0';
            $i = '0';
            $a = array();
            $taxval = '0.00';
            $taxname = '';
            $taxrate = '0.00';


            $taxed_amount = 0.00;
            $lamount = 0.00;

            $taxval = '0.00';
            $taxname = '';




            foreach($amount as $samount) {
                $samount = Finance::amount_fix($samount);
                $a[$i] = $samount;
                /* @since v 2.0 */
                $sqty = $qty[$i];
                $sqty = Finance::amount_fix($sqty);

                //  $sTotal+= $samount * ($sqty);
                //  $lamount = $samount * ($sqty);


//                if ($taxed) {
//                    $c_tax = $taxed[$i];
//                }
//                else {
//                    $c_tax = 'No';
//                }
//
//                if ($c_tax == 'Yes') {
//
//                    // $a_tax = ($samount * $taxrate) / 100;
//
//                    $taxed_amount+= $lamount;
//                }
//                else {
//                    $a_tax = 0.00;
//                }

                $lTaxRate = $taxed[$i];



                $lTaxRate = Finance::amount_fix($lTaxRate);




                $sTotal += $samount * ($sqty);
                $lamount = $samount * ($sqty);

                $lTaxVal = ($lamount*$lTaxRate)/100;




                $taxed_amount += $lTaxVal;



                $i++;
            }

            $invoicenum = _post('invoicenum');
            $cn = _post('cn');
            $fTotal = $sTotal;


            // calculate discount

            $discount_amount = _post('discount_amount');
            $discount_type = _post('discount_type');
            $discount_value = '0.00';
            if ($discount_amount == '0' OR $discount_amount == '') {
                $actual_discount = '0.00';
            }
            else {
                if ($discount_type == 'f') {
                    $actual_discount = $discount_amount;
                    $discount_value = $discount_amount;
                }
                else {
                    $discount_type = 'p';
                    $actual_discount = ($sTotal * $discount_amount) / 100;
                    $discount_value = $discount_amount;
                }
            }

            $actual_discount = number_format((float)$actual_discount, 2, '.', '');
            $fTotal = $fTotal + $taxed_amount - $actual_discount;

//            if ($taxed_amount != 0.00) {
//                $taxval = ($taxed_amount * $taxrate) / 100;
//            }

//            if (($taxed_type != 'individual') AND ($tax != '')) {
//                $taxval = ($fTotal * $taxrate) / 100;
//            }


            //   $fTotal = $fTotal + $taxval;
            $status = _post('status');

            $receipt_number = _post('receipt_number');

            $title = _post('title');

            $d = ORM::for_table('sys_invoices')->find_one($iid);
            if ($d) {
                $d->userid = $cid;
                $d->account = $u['account'];
                $d->date = $idate;
                $d->duedate = $duedate;
                $d->discount_type = $discount_type;
                $d->discount_value = $discount_value;
                $d->discount = $actual_discount;
                $d->subtotal = $sTotal;
                $d->total = $fTotal;
                $d->tax = $taxed_amount;
                $d->taxname = '';
                $d->taxrate = 0.00;
                $d->notes = $notes;
                $d->r = $r;
                $d->nd = $nd;
                $d->invoicenum = $invoicenum;
                $d->cn = $cn;

                if ($status == 'Draft') {
                    $d->status = 'Draft';
                }
                elseif ($status == 'Published') {
                    $d->status = 'Unpaid';
                }
                else {
                }

                $d->currency = $currency;
                $d->currency_symbol = $currency_symbol;
                $d->currency_rate = $currency_rate;
                $d->show_quantity_as = $show_quantity_as;

                $d->currency_iso_code = $currency_id;

                //

                $d->receipt_number = $receipt_number;

                $d->title = $title;

                //
                $d->save();


                $invoiceid = $iid;
                $description = $_POST['desc'];
                $i = '0';
                $inventory_items_adjust = ORM::for_table('sys_invoiceitems')->where('invoiceid', $iid)->find_array();
                foreach($inventory_items_adjust as $i_adjust) {
                    Inventory::increaseByItemNumber($i_adjust['itemcode'], $i_adjust['qty']);
                }

                $x = ORM::for_table('sys_invoiceitems')->where('invoiceid', $iid)->delete_many();


                foreach($description as $item) {
                    $samount = $a[$i];
                    $samount = Finance::amount_fix($samount);
                    if ($item == '' && $samount == '0.00') {
                        $i++;
                        continue;
                    }

                    $tax_rate = $taxed[$i];


                    /* @since v 2.0 */
                    $sqty = $qty[$i];
                    $sqty = Finance::amount_fix($sqty);
                    $ltotal = ($samount) * ($sqty);
                    $d = ORM::for_table('sys_invoiceitems')->create();
                    $d->invoiceid = $invoiceid;
                    $d->userid = $cid;
                    $d->description = $item;
                    $d->qty = $sqty;
                    $d->amount = $samount;
                    $d->total = $ltotal;
//                    if ($taxed) {
//                        if (($taxed[$i]) == 'Yes') {
//                            $d->taxed = '1';
//                        }
//                        else {
//                            $d->taxed = '0';
//                        }
//                    }
//                    else {
//                        $d->taxed = '0';
//                    }

                    if($tax_rate == '' || $tax_rate == '0'){
                        $tax_rate = 0.00;
                        $d->taxed = '0';
                    }
                    else{
                        $tax_rate = $taxed[$i];
                        $d->taxed = '1';
                    }



                    // others

                    $item_taxed_amount = round(($tax_rate*100)/($sqty*$samount),2);

                    $d->type = '';
                    $d->relid = '0';
                    $d->itemcode = $item_number[$i];
                    $d->taxamount = $item_taxed_amount;
                    $d->tax_rate = $tax_rate;
                    $d->duedate = date('Y-m-d');
                    $d->paymentmethod = '';
                    $d->notes = '';
                    $d->save();

                    // decrease inventory

                    Inventory::decreaseByItemNumber($item_number[$i], $sqty);
                    $i++;
                }

                $app->emit('invoices_edit_post_done',[$invoiceid]);
                echo $invoiceid;
            }
            else {

                // invoice not found

            }
        }
        else {
            echo $msg;
        }

        break;

    case 'delete':
        Event::trigger('invoices/delete/');
        $id = $routes['2'];
        if (APP_STAGE == 'Demo') {
            r2(U . 'accounts/list', 'e', 'Sorry! Deleting Account is disabled in the demo mode.');
        }

        $d = ORM::for_table('crm_accounts')->find_one($id);
        if ($d) {
            $d->delete();
            r2(U . 'accounts/list', 's', $_L['account_delete_successful']);
        }

        break;

    case 'print':
        Event::trigger('invoices/print/');
        $id = $routes['2'];
        $d = ORM::for_table('sys_invoices')->find_one($id);
        if ($d) {

            // find all activity for this user

            $items = ORM::for_table('sys_invoiceitems')->where('invoiceid', $id)->order_by_asc('id')->find_many();

            // find the user

            $a = ORM::for_table('crm_accounts')->find_one($d['userid']);
            require 'system/lib/invoices/render.php';

        }
        else {
            r2(U . 'customers/list', 'e', $_L['Account_Not_Found']);
        }

        break;

    case 'pdf':
        Event::trigger('invoices/pdf/');
        $id = $routes['2'];
        $d = ORM::for_table('sys_invoices')->find_one($id);
        if ($d) {

            // find all activity for this user

            $items = ORM::for_table('sys_invoiceitems')->where('invoiceid', $id)->order_by_asc('id')->find_many();
            $trs_c = ORM::for_table('sys_transactions')->where('iid', $id)->count();
            $trs = ORM::for_table('sys_transactions')->where('iid', $id)->order_by_desc('id')->find_many();

            // find the user

            $a = ORM::for_table('crm_accounts')->find_one($d['userid']);
            $i_credit = $d['credit'];
            $i_due = '0.00';
            $i_total = $d['total'];
            if ($d['credit'] != '0.00') {
                $i_due = $i_total - $i_credit;
            }
            else {
                $i_due = $d['total'];
            }

            $i_due = number_format($i_due, 2, $config['dec_point'], $config['thousands_sep']);
            $cf = ORM::for_table('crm_customfields')->where('showinvoice', 'Yes')->order_by_asc('id')->find_many();
            if ($d['cn'] != '') {
                $dispid = $d['cn'];
            }
            else {
                $dispid = $d['id'];
            }

            $in = $d['invoicenum'] . $dispid;
            define('_MPDF_PATH', 'system/lib/mpdf/');
            require ('system/lib/mpdf/mpdf.php');

            $pdf_c = '';
            $ib_w_font = 'dejavusanscondensed';
            if ($config['pdf_font'] == 'default') {
                $pdf_c = 'c';
                $ib_w_font = 'Helvetica';
            }

            $mpdf = new mPDF($pdf_c, 'A4', '', '', 20, 15, 15, 25, 10, 10);
            $mpdf->SetProtection(array(
                'print'
            ));
            $mpdf->SetTitle($config['CompanyName'] . ' Invoice');
            $mpdf->SetAuthor($config['CompanyName']);
            $mpdf->SetWatermarkText(ib_lan_get_line($d['status']));
            $mpdf->showWatermarkText = true;
            $mpdf->watermark_font = $ib_w_font;
            $mpdf->watermarkTextAlpha = 0.1;
            $mpdf->SetDisplayMode('fullpage');
            if ($config['pdf_font'] == 'AdobeCJK') {
                $mpdf->useAdobeCJK = true;
                $mpdf->autoScriptToLang = true;
                $mpdf->autoLangToFont = true;
            }

            Event::trigger('invoices/before_pdf_render/');
            ob_start();
            require 'system/lib/invoices/pdf-x2.php';

            $html = ob_get_contents();
            ob_end_clean();
            $mpdf->WriteHTML($html);
            $pdf_return = 'inline';
            if (isset($routes[3])) {
                $r_type = $routes[3];
            }
            else {
                $r_type = 'inline';
            }

            if ($r_type == 'dl') {
                $mpdf->Output(date('Y-m-d') . _raid(4) . '.pdf', 'D'); // D
            }
            elseif ($r_type == 'inline') {
                $mpdf->Output(date('Y-m-d') . _raid(4) . '.pdf', 'I'); // D
            }
            elseif ($r_type == 'store') {
                $mpdf->Output('storage/temp/Invoice_' . $in . '.pdf', 'F'); // D
            }
            else {
                $mpdf->Output(date('Y-m-d') . _raid(4) . '.pdf', 'I'); // D
            }
        }

        break;

    case 'markpaid':
        $iid = _post('iid');
        $d = ORM::for_table('sys_invoices')->find_one($iid);
        if ($d) {

            // previous status
            $prev_status = $d->status;

            if($prev_status == 'Cancelled')
            {
                // update the inventory again

                $items = InvoiceItem::where('invoiceid',$iid)->get();

                foreach ($items as $item)
                {
                    if($item->itemcode != ''){
                        Inventory::decreaseByItemNumber($item->itemcode, $item->qty);
                    }

                }
                //
            }

            //

            $d->status = 'Paid';
            $d->save();
            Event::trigger('invoices/markpaid/', $invoice = $d);
            _msglog('s', 'Invoice marked as Paid');
        }
        else {
            _msglog('e', 'Invoice not found');
        }

        break;

    case 'markunpaid':
        Event::trigger('invoices/markunpaid/');
        $iid = _post('iid');
        $d = ORM::for_table('sys_invoices')->find_one($iid);
        if ($d) {

            // previous status
            $prev_status = $d->status;

            if($prev_status == 'Cancelled')
            {
                // update the inventory again

                $items = InvoiceItem::where('invoiceid',$iid)->get();

                foreach ($items as $item)
                {
                    if($item->itemcode != ''){
                        Inventory::decreaseByItemNumber($item->itemcode, $item->qty);
                    }

                }
                //
            }

            //

            $d->status = 'Unpaid';
            $d->save();
            _msglog('s', 'Invoice marked as Un Paid');
        }
        else {
            _msglog('e', 'Invoice not found');
        }

        break;

    case 'markcancelled':

        Event::trigger('invoices/markcancelled/');

        $iid = _post('iid');
        $d = ORM::for_table('sys_invoices')->find_one($iid);
        if ($d) {
            $d->status = 'Cancelled';
            $d->save();

            // Rollback if any transaction exist




            //


            // Rollback Inventory

            // find all invoice items

            $items = InvoiceItem::where('invoiceid',$iid)->get();

            foreach ($items as $item)
            {
                if($item->itemcode != ''){
                    Inventory::increaseByItemNumber($item->itemcode, $item->qty);
                }

            }

            //


            $invoice = $d;
            $app->emit('invoice_cancelled',[&$invoice]);




            //


            _msglog('s', 'Invoice marked as Cancelled');
        }
        else {
            _msglog('e', 'Invoice not found');
        }

        break;

    case 'markpartiallypaid':
        Event::trigger('invoices/markpartiallypaid/');
        $iid = _post('iid');
        $d = ORM::for_table('sys_invoices')->find_one($iid);
        if ($d) {
            $d->status = 'Partially Paid';
            $d->save();
            _msglog('s', 'Invoice marked as Partially Paid');
        }
        else {
            _msglog('e', 'Invoice not found');
        }

        break;

    case 'add-payment':

        $customers_all_data = has_access($user->roleid,'customers','all_data');

        Event::trigger('invoices/add-payment/');
        $sid = $routes['2'];
        $d = ORM::for_table('sys_invoices')->find_one($sid);
        if ($d) {
            $itotal = $d['total'];
            $ic = $d['credit'];
            $np = $itotal - $ic;
            $a_opt = '';

            // <option value="{$ds['account']}">{$ds['account']}</option>


            $a = ORM::for_table('sys_accounts');

            if(!$customers_all_data)
            {
                $a->where('o',$user->id);
            }

            $a = $a->find_many();

            foreach($a as $acs) {
                $a_opt.= '<option value="' . $acs['id'] . '">' . $acs['account'] . '</option>';
            }

            $pms_opt = '';

            // <option value="{$pm['name']}">{$pm['name']}</option>

            $pms = ORM::for_table('sys_pmethods')->order_by_asc('sorder')->find_many();
            foreach($pms as $pm) {
                $pms_opt.= '<option value="' . $pm['name'] . '">' . $pm['name'] . '</option>';
            }

            $cats_opt = '';
            $cats = ORM::for_table('sys_cats')->where('type', 'Income')->order_by_asc('sorder')->find_many();
            foreach($cats as $cat) {
                $cats_opt.= '<option value="' . $cat['name'] . '">' . $cat['name'] . '</option>';
            }

            $currency_opt = '';
            $currencies = Currency::all();

            $currency_iso_code = $d->currency_iso_code;

            $currency = Currency::getAllCurrencies();

            $currency_symbol = $config['currency_code'];
            $currency_decimal_point = $config['dec_point'];
            $thousands_separator = $config['thousands_sep'];

            if(isset($currency[$currency_iso_code])) {
                $selected_currency = $currency[$currency_iso_code];
                $currency_symbol = $selected_currency['symbol'];
                $currency_decimal_point = $selected_currency['decimal_mark'];
                $thousands_separator = $selected_currency['thousands_separator'];
            }


            $currency_opt = '<div class="form-group">
    <label for="amount" class="col-sm-3 control-label">' . $_L['Amount'] . ' ['.$currency_iso_code.']</label>
    <div class="col-sm-9">
      <input type="text" id="amount" name="amount" class="form-control amount"   data-a-sign="' . $currency_symbol . ' " data-a-dec="' . $currency_decimal_point . '" data-a-sep="' . $thousands_separator . '"
data-d-group="3" value="">

    </div>
  </div>';

            $secondary_currency = secondary_currency();
            $payment_amount = $np;
            if ($d['currency_symbol'] == '') {
                $invoice_currency = $config['currency_code'];
            }
            else {
                $invoice_currency = $d['currency_symbol'];
            }

            echo '
<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	<h3>' . $_L['Invoice'] . ' #' . $d['id'] . '</h3>
</div>
<div class="modal-body">
<h3>' . $_L['Invoice Total'] . ': <span class="amount" data-a-sign="' . $invoice_currency . ' ">' . $d['total'] . '</span></h3>
<hr>
<form class="form-horizontal" role="form" id="form_add_payment" method="post">
<div class="form-group">
    <label for="subject" class="col-sm-3 control-label">' . $_L['Account'] . '</label>
    <div class="col-sm-9">
       <select id="account" name="account">
                            <option value="">' . $_L['Choose an Account'] . '</option>

' . $a_opt . '

                        </select>
    </div>
  </div>

<div class="form-group">
    <label for="date" class="col-sm-3 control-label">' . $_L['Date'] . '</label>
    <div class="col-sm-9">
      <input type="text" class="form-control datepicker"  value="' . date('Y-m-d') . '" name="date" id="date" datepicker data-date-format="yyyy-mm-dd" data-auto-close="true">
    </div>
  </div>

<div class="form-group">
    <label for="description" class="col-sm-3 control-label">' . $_L['Description'] . '</label>
    <div class="col-sm-9">
      <input type="text" id="description" name="description" class="form-control" value="' . $_L['Invoice'] . ' ' . $d['id'] . ' ' . $_L['Payment'] . '">
    </div>
  </div>
  
  
' . $currency_opt . '



  
  
<div class="form-group">
    <label for="cats" class="col-sm-3 control-label">' . $_L['Category'] . '</label>
    <div class="col-sm-9">
       <select id="cats" name="cats">
                             <option value="Uncategorized">' . $_L['Uncategorized'] . '</option>

' . $cats_opt . '

                        </select>
    </div>
  </div>
  <div class="form-group">
    <label for="payer_name" class="col-sm-3 control-label">' . $_L['Payer'] . '</label>
    <div class="col-sm-9">
      <input type="text" id="payer_name" name="payer_name" class="form-control" value="' . $d['account'] . '" disabled>
    </div>
  </div>

   <div class="form-group">
    <label for="subject" class="col-sm-3 control-label">' . $_L['Method'] . '</label>
    <div class="col-sm-9">
      <select id="pmethod" name="pmethod">
                                <option value="">' . $_L['Select Payment Method'] . '</option>


                                ' . $pms_opt . '


                            </select>
    </div>
  </div>

<input type="hidden" name="iid" value="' . $d['id'] . '">
<input type="hidden" name="payer" value="' . $d['userid'] . '">
<input type="hidden" name="currency" value="' . $d['currency_iso_code'] . '">
</form>

</div>
<div class="modal-footer">
	<button id="save_payment" class="btn btn-primary">' . $_L['Save'] . '</button>

		<button type="button" data-dismiss="modal" class="btn">' . $_L['Close'] . '</button>
</div>';
        }
        else {
            exit('Invoice Not Found');
        }

        break;


    case 'add-payment-post':

        Event::trigger('invoices/add-payment-post/');
        $msg = '';
        $account = _post('account');

        if($account == ''){
            $msg .= $_L['Select An Account']. '<br />';
        }

        $date = _post('date');
        $amount = _post('amount');

        $currency_iso_code = _post('currency');

        $amount = createFromCurrency($amount,$currency_iso_code);

        $payerid = _post('payer');
        $pmethod = _post('pmethod');
        $ref = _post('ref');
        if ($payerid == '') {
            $payerid = '0';
        }

        $payer = '';

        if($payerid != '0'){
            $payer_find = Contact::find($payerid);

            if($payer_find){
                $payer = $payer_find->account;
            }
        }

        $currencies = Currency::all();
        $tr_currency = '0';
        $tr_currency_symbol = '';
        $tr_currency_rate = '1.0000';



        $cat = _post('cats');
        $iid = _post('iid');

        $invoice = Invoice::find($iid);

        $currency_iso_code = $config['home_currency'];

        if($invoice && $invoice->currency_iso_code)
        {
        	$currency_iso_code = $invoice->currency_iso_code;
        }


        if ($payerid == '') {
            $msg.= 'Payer Not Found' . '<br />';
        }

        $description = _post('description');

        if ($description == '') {
            $msg.= $_L['description_error'] . '<br />';
        }

        if ($account == '') {
            $msg.= 'Please choose an Account' . '<br />';
        }

        if (is_numeric($amount) == false) {
            $msg.= $_L['amount_error'] . '<br />';
        }

        if ($msg == '') {

            // update the account balance table

//            $a = ORM::for_table('sys_accounts')->where('account', $account)->find_one();
//            $account_id = $a->id;
//            $cbal = $a['balance'];
//            $nbal = $cbal + $amount;
//            $a->balance = $nbal;
//            $a->save();
//
//            $home_currency = Currency::where('iso_code', $config['home_currency'])->first();
//            $account_balance = Balance::where('account_id', $account_id)->where('currency_id', $home_currency->id)->first();
//            if ($account_balance) {
//                $cbal = $account_balance->balance;
//                $account_balance->balance = $cbal + $amount;
//                $account_balance->save();
//            }
//            else {
//
//                // create record
//
//                $account_balance = new Balance;
//                $account_balance->account_id = $account_id;
//                $account_balance->currency_id = $home_currency->id;
//                $account_balance->balance = $amount;
//                $account_balance->save();
//            }


            $account_find = Account::find($account);
            $d = ORM::for_table('sys_transactions')->create();
            $d->account = $account_find->account;
            $d->account_id = $account_find->id;
            $d->type = 'Income';
            $d->payerid = $payerid;
            $d->amount = $amount;
            $d->category = $cat;
            $d->method = $pmethod;
            $d->ref = $ref;
            $d->tags = '';
            $d->description = $description;
            $d->date = $date;
            $d->dr = '0.00';
            $d->cr = $amount;

            // $d->bal = $nbal;

            $d->iid = $iid;
            $d->currency = $tr_currency;
            $d->currency_symbol = $tr_currency_symbol;
            $d->currency_rate = $tr_currency_rate;

	        $d->currency_iso_code = $currency_iso_code;

            // others

            $d->payer = $payer;
            $d->payee = '';

            $d->status = 'Cleared';
            $d->tax = '0.00';
            $d->aid = $user->id;

            $d->vid = _raid(8);


            $d->updated_at = date('Y-m-d H:i:s');

            //

            $d->save();
            $tid = $d->id();
            _log('New Deposit: ' . $description . ' [TrID: ' . $tid . ' | Amount: ' . $amount . ']', 'Admin', $user->id);
            _msglog('s', 'Transaction Added Successfully');

            // now work with invoice

            $i = ORM::for_table('sys_invoices')->find_one($iid);
            if ($i) {
                $pc = $i['credit'];
                $it = $i['total'];
                $dp = $it - $pc;
                if (($dp == $amount) OR (($dp < $amount))) {
                    $i->status = 'Paid';

                } else {

                    $i->status = 'Partially Paid';
                }
                $i->credit = $pc + $amount;
                $i->save();

            }

            echo $tid;
        }
        else {
            echo '<div class="alert alert-danger fade in">' . $msg . '</div>';
        }

        break;



    case 'mail_invoice_':
        Event::trigger('invoices/mail_invoice_/');
        $sid = $routes['2'];
        $etpl = $routes['3'];
        $d = ORM::for_table('sys_invoices')->find_one($sid);
        if ($d) {
            $a = ORM::for_table('crm_accounts')->find_one($d['userid']);
            $msg = Invoice::gen_email($sid, $etpl);
            if ($msg) {
                $subj = $msg['subject'];
                $message_o = $msg['body'];
                $email = $msg['email'];
                $name = $msg['name'];
            }
            else {
                $subj = '';
                $message_o = '';
                $email = '';
                $name = '';
            }

            if ($d['cn'] != '') {
                $dispid = $d['cn'];
            }
            else {
                $dispid = $d['id'];
            }

            $in = $d['invoicenum'] . $dispid;



            if($a['secondary_email'] != '')
            {
            	$email = $a['secondary_email'];
            }


            $inv_files = Invoice::files($sid);

            $attachments_html = '';


            if(count($inv_files) > 0)
            {
                $attach_file_option = '';
                foreach ($inv_files as $inv_file)
                {
                    $attach_file_option .= '<div class="checkbox c-checkbox">
                          <label>
                            <input type="checkbox" name="attach_file[]" value="'.$inv_file->id.'" checked><span class="fa fa-check"></span>  <i class="fa fa-paperclip"></i> '.$inv_file->title.'
                          </label>
                        </div>';
                }

                $attachments_html = ' <div class="hr-line-dashed"></div>
  
  <div class="form-group">
    <label for="attach_pdf" class="col-sm-2 control-label">Other Files</label>
    <div class="col-sm-10">
      '.$attach_file_option.'
    </div>
  </div>';
            }






            echo '
<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	<h3>Invoice #' . $d['id'] . '</h3>
</div>
<div class="modal-body">

<form class="form-horizontal" role="form" id="email_form" method="post">


<div class="form-group">
    <label for="toemail" class="col-sm-2 control-label">' . $_L['To'] . '</label>
    <div class="col-sm-10">
      <input type="email" id="toemail" name="toemail" class="form-control" value="' . $email . '">
    </div>
  </div>

  <div class="form-group">
    <label for="ccemail" class="col-sm-2 control-label">' . $_L['Cc'] . '</label>
    <div class="col-sm-10">
      <input type="email" id="ccemail" name="ccemail" class="form-control" value="">
    </div>
  </div>

  <div class="form-group">
    <label for="bccemail" class="col-sm-2 control-label">' . $_L['Bcc'] . '</label>
    <div class="col-sm-10">
      <input type="email" id="bccemail" name="bccemail" class="form-control" value="">
      <span class="help-block"><a href="#" id="send_bcc_to_admin">' . $_L['Send Bcc to Admin'] . '</a></span>
    </div>
  </div>

    <div class="form-group">
    <label for="subject" class="col-sm-2 control-label">' . $_L['Subject'] . '</label>
    <div class="col-sm-10">
      <input type="text" id="subject" name="subject" class="form-control" value="' . $subj . '">
    </div>
  </div>

  <div class="form-group">
    <label for="subject" class="col-sm-2 control-label">' . $_L['Message Body'] . '</label>
    <div class="col-sm-10">
      <textarea class="form-control sysedit" rows="3" name="message" id="message">' . $message_o . '</textarea>
      <input type="hidden" id="toname" name="toname" value="' . $name . '">
      <input type="hidden" id="i_cid" name="i_cid" value="' . $a['id'] . '">
      <input type="hidden" id="i_iid" name="i_iid" value="' . $d['id'] . '">
    </div>
  </div>


<div class="form-group">
    <label for="attach_pdf" class="col-sm-2 control-label">' . $_L['Attach PDF'] . '</label>
    <div class="col-sm-10">
      <div class="checkbox c-checkbox">
                          <label>
                            <input type="checkbox" name="attach_pdf" id="attach_pdf" value="Yes" checked><span class="fa fa-check"></span>  <i class="fa fa-paperclip"></i> Invoice_' . $in . '.pdf
                          </label>
                        </div>
    </div>
  </div>
  
'.$attachments_html.'


</form>

</div>
<div class="modal-footer">
	<button id="send" class="btn btn-primary">' . $_L['Send'] . '</button>

		<button type="button" data-dismiss="modal" class="btn">' . $_L['Close'] . '</button>
</div>';
        }
        else {
            exit('Invoice Not Found');
        }

        break;

    case 'send_email':

        Event::trigger('invoices/send_email/');
        $msg = '';
        $email = _post('toemail');
        $cc = _post('ccemail');
        $bcc = _post('bccemail');
        $subject = _post('subject');
        $toname = _post('toname');
        $cid = _post('i_cid');
        $iid = _post('i_iid');
        $d = ORM::for_table('sys_invoices')->find_one($iid);
        if ($d['cn'] != '') {
            $dispid = $d['cn'];
        }
        else {
            $dispid = $d['id'];
        }

        $in = $d['invoicenum'] . $dispid;
        $message = $_POST['message'];


        // Fix issue with link tinymce



        $attach_pdf = _post('attach_pdf');
        $attachment_path = '';
        $attachment_file = '';
        if ($attach_pdf == 'Yes') {
            Invoice::pdf($iid, 'store');
            $attachment_path = 'storage/temp/Invoice_' . $in . '.pdf';
            $attachment_file = 'Invoice_' . $in . '.pdf';
        }

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $msg.= 'Invalid Email <br />';
        }

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $cc = '';
        }

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $bcc = '';
        }

        if ($subject == '') {
            $msg.= 'Subject is Required <br />';
        }

        if ($message == '') {
            $msg.= 'Message is Required <br />';
        }



        if ($msg == '') {

            // now send email

           // Notify_Email::_send($toname, $email, $subject, $message, $cid, $iid, $cc, $bcc, $attachment_path, $attachment_file);

            //

            $email_config = EmailConfig::first();


            if($email_config)
            {
                if($email_config->method == 'smtp')
                {
                    $transport = (new Swift_SmtpTransport($email_config->host, $email_config->port))
                        ->setUsername($email_config->username)
                        ->setPassword($email_config->password)
                    ;
                }
                else{
                    $transport = new Swift_SendmailTransport('/usr/sbin/sendmail -bs');
                }


                $mailer = new Swift_Mailer($transport);

                $receiver = [];

                $receiver[] = [
                    $email => $toname
                ];



                $message = (new Swift_Message($subject))
                    ->setFrom([$config['sysEmail'] => $config['CompanyName']])
                    ->setTo([$email => $toname])
                    ->setBody($message,'text/html')
                ;

                if($cc != '')
                {
                    $message->setCc([$cc]);
                }


                if($attachment_path != '')
                {
                    $message->attach(Swift_Attachment::fromPath($attachment_path));
                }

                if(isset($_POST['attach_file']))
                {
                    $other_files = $_POST['attach_file'];

                    foreach ($other_files as $other_file)
                    {
                        $file = Document::find($other_file);

                        if($file)
                        {
                            $message->attach(Swift_Attachment::fromPath('storage/docs/'.$file->file_path)->setFilename($file->title.'.'.$file->file_mime_type));
                        }
                    }
                }


                $result = $mailer->send($message);



            }



            // Now check for

            echo '<div class="alert alert-success fade in">Mail Sent!</div>';
        }
        else {
            echo '<div class="alert alert-danger fade in">' . $msg . '</div>';
        }

        break;

    case 'stop_recurring':
        Event::trigger('invoices/stop_recurring/');
        $id = $routes['2'];
        $id = str_replace('sid', '', $id);
        $d = ORM::for_table('sys_invoices')->find_one($id);
        if ($d) {
            $d->r = '0';
            $d->save();
            r2(U . 'invoices/list-recurring', 's', $_L['Data Updated']);
        }
        else {
            echo 'Invoice not found';
        }

        break;



    case 'export_csv':
        $fileName = 'transactions_' . time() . '.csv';
        header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
        header('Content-Description: File Transfer');
        header("Content-type: text/csv");
        header("Content-Disposition: attachment; filename={$fileName}");
        header("Expires: 0");
        header("Pragma: public");
        $fh = @fopen('php://output', 'w');
        $headerDisplayed = false;

        // $results = ORM::for_table('crm_Accounts')->find_array();

        $results = db_find_array('sys_invoices');
        foreach($results as $data) {

            // Add a header row if it hasn't been added yet

            if (!$headerDisplayed) {

                // Use the keys from $data as the titles

                fputcsv($fh, array_keys($data));
                $headerDisplayed = true;
            }

            // Put the data into the stream

            fputcsv($fh, $data);
        }

        // Close the file

        fclose($fh);
        break;

    case 'payments':
        $mode_css = Asset::css('footable/css/footable.core.min');
        $mode_js = Asset::js(array(
            'numeric',
            'footable/js/footable.all.min'
        ));
        $d = ORM::for_table('sys_transactions')->where_not_equal('iid', '0')->limit(500)->find_array();
        $ui->assign('d', $d);
        $ui->assign('xheader', $mode_css);
        $ui->assign('xfooter', $mode_js);
        $ui->assign('xjq', '
        
        $(\'.footable\').footable();
        
         $(\'.amount\').autoNumeric(\'init\', {

    aSign: \'' . $config['currency_code'] . ' \',
    dGroup: ' . $config['thousand_separator_placement'] . ',
    aPad: ' . $config['currency_decimal_digits'] . ',
    pSign: \'' . $config['currency_symbol_position'] . '\',
    aDec: \'' . $config['dec_point'] . '\',
    aSep: \'' . $config['thousands_sep'] . '\'

    });
$(".cdelete").click(function (e) {
        e.preventDefault();
        var id = this.id;
        bootbox.confirm("' . $_L['are_you_sure'] . '", function(result) {
           if(result){
               var _url = $("#_url").val();
               window.location.href = _url + "delete/invoice/" + id;
           }
        });
    });



 ');
        view('payments');
        break;

    case 'clone':
        $id = route(2);
        $new_id = Invoice::cloneInvoice($id);
        if ($new_id) {
            r2(U . 'invoices/edit/' . $new_id, 's', $_L['Cloned successfully']);
        }

        break;

    case 's':
        is_dev();
        $t = new Schema('ib_invoice_access_log');
        $t->drop();
        $t->add('lid', 'int', '11', '0');
        $t->add('cid', 'int', '11', '0');
        $t->add('iid', 'int', '11', '0');
        $t->add('company_id', 'int', '11', '0');
        $t->add('customer', 'varchar', '200');
        $t->add('ip', 'varchar', '50');
        $t->add('browser', 'varchar', '200');
        $t->add('referer', 'varchar', '200');
        $t->add('city', 'varchar', '200');
        $t->add('postal_code', 'varchar', '50');
        $t->add('country', 'varchar', '200');
        $t->add('country_iso', 'varchar', '20');
        $t->add('viewed_at', 'varchar', '200');
        $t->add('lat', 'varchar', '100');
        $t->add('lon', 'varchar', '100');
        $t->save();
        add_option('maxmind_installed', '0');
        add_option('maxmind_db_version', '');
        break;

    case 'pos':
        $extra_fields = '';
        $extra_jq = '';
        $ui->assign('extra_fields', $extra_fields);
        if (isset($routes['2']) AND ($routes['2'] == 'recurring')) {
            $recurring = true;
        }
        else {
            $recurring = false;
        }

        $currencies = M::factory('Models_Currency')->find_array();
        $ui->assign('recurring', $recurring);
        $ui->assign('currencies', $currencies);
        if (isset($routes['3']) AND ($routes['3'] != '')) {
            $p_cid = $routes['3'];
            $p_d = ORM::for_table('crm_accounts')->find_one($p_cid);
            if ($p_d) {
                $ui->assign('p_cid', $p_cid);
            }
        }
        else {
            $ui->assign('p_cid', '');
        }

        $ui->assign('_st', $_L['Add Invoice']);
        $c = ORM::for_table('crm_accounts')->select('id')->select('account')->select('company')->select('email')->order_by_desc('id')->find_many();
        $ui->assign('c', $c);
        $t = ORM::for_table('sys_tax')->find_many();
        $ui->assign('t', $t);
        $ui->assign('idate', date('Y-m-d'));
        $css_arr = array(
            's2/css/select2.min',
            'modal',
            'dp/dist/datepicker.min',
            'redactor/redactor'
        );
        $js_arr = array(
            'redactor/redactor.min',
            's2/js/select2.min',
            's2/js/i18n/' . lan() ,
            'dp/dist/datepicker.min',
            'dp/i18n/' . $config['language'],
            'numeric',
            'modal',
            'js/pos'
        );
        Event::trigger('add_invoice_rendering_form');
        $ui->assign('xheader', Asset::css($css_arr) . '<style>
        .redactor-toolbar {
  border: 1px solid #aaa;
  border-bottom: none;
}
.redactor-editor {
  border: 1px solid #aaa;
}
        </style>');
        $ui->assign('xfooter', Asset::js($js_arr));
        $ui->assign('xjq', '

 $(\'.amount\').autoNumeric(\'init\', {

    aSign: \'' . $config['currency_code'] . ' \',
    dGroup: ' . $config['thousand_separator_placement'] . ',
    aPad: ' . $config['currency_decimal_digits'] . ',
    pSign: \'' . $config['currency_symbol_position'] . '\',
    aDec: \'' . $config['dec_point'] . '\',
    aSep: \'' . $config['thousands_sep'] . '\'

    });


 ' . $extra_jq);
        view('pos');
        break;


    case 'sms_invoice_':

        $sid = $routes['2'];
        $mtpl = $routes['3'];

        $sms =  Invoice::genSMS($sid, $mtpl);

        if($sms){
            $message = $sms['sms'];
            $to = $sms['to'];

        }
        else{
            $message = '';
            $to = '';
        }
        view('modal_sms_invoice',[
            'message' => $message,
            'to' => $to,
            'invoice_id' => $sid
        ]);




        break;


    case 'create-from-ticket':

        if(!has_access($user->roleid,'sales','all_data')){

            permissionDenied();

        }


        $ticket_id = route(2);

        $receipt_number = _post('receipt_number');





        $save = Invoice::fromTicket($ticket_id,[
        	'receipt_number' => $receipt_number
        ]);

        if($save['success'])
        {
          //  r2(U . 'invoices/edit/'.$save['invoice'], 's', 'Invoice created, now you can edit the invoice.');
	        api_response([
		        'success' => true,
		        'url' => U . 'invoices/edit/'.$save['invoice'], 's', 'Invoice created, now you can edit the invoice.',
	        ]);
        }
        else{
           // r2(U . 'tickets/admin/view/'.$ticket_id, 'e', $save['error']);
	        api_response([
		        'success' => true,
		        'url' => U . 'tickets/admin/view/'.$ticket_id, 'e', $save['error'],
	        ]);
        }

        break;










    default:
        echo 'action not defined';
}