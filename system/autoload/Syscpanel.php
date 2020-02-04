<?php
// *************************************************************************
// *                                                                       *
// * iBilling -  Accounting, Billing Software                              *
// * Copyright (c) Sadia Sharmin. All Rights Reserved                      *
// *                                                                       *
// *************************************************************************
// *                                                                       *
// * Email: sadiasharmin3139@gmail.com                                                *
// * Website: http://www.sadiasharmin.com                                  *
// *                                                                       *
// *************************************************************************
// *                                                                       *
// * This software is furnished under a license and may be used and copied *
// * only  in  accordance  with  the  terms  of such  license and with the *
// * inclusion of the above copyright notice.                              *
// * If you Purchased from Codecanyon, Please read the full License from   *
// * here- http://codecanyon.net/licenses/standard                         *
// *                                                                       *
// *************************************************************************
/**
 * PHP class to handle connections with cPanel's UAPI as seamlessly and simply as possible.
 *
 * For documentation on cPanel's UAPI:
 * @see https://documentation.cpanel.net/display/SDK/UAPI+Functions
 *
 * @author N1ghteyes - www.source-control.co.uk
 * @copyright 2014 N1ghteyes
 * @license license.txt The MIT License (MIT)
 * @link https://github.com/N1ghteyes/cpanel-UAPI-php-class
 */
/**
 * Class cpanelUAPI
 */
class Syscpanel
{
    public $cpanelUAPI = '1.0';
    public $scope = ""; //String - Module we want to use
    public $ssl = 1; //Bool - TRUE / FALSE for ssl connection
    public $port = 2083; //default for ssl servers.
    public $server;
    protected $auth;
    protected $user;
    protected $pass;
    protected $type;
    protected $requestUrl;
    /**
     * @param $user
     * @param $pass
     * @param $server
     */
    function __construct($user, $pass, $server)
    {
        $this->user = $user;
        $this->pass = $pass;
        $this->server = $server;
    }
    /**
     * Magic __call method, will translate all function calls to object to API requests
     * @param String $name name of the function
     * @param array $arguments an array of arguments
     * @return - Object from json_decode
     */
    public function  __call($name, $arguments)
    {
        $this->connections(); //set paths etc at the last possible moment to allow for changes before this call is made.
        if (count($arguments) < 1 || !is_array($arguments[0]))
            $arguments[0] = array();
        return json_decode($this->APIcall($name, $arguments[0]));
    }
    /**
     * function to set all the connection variables, called before APIcall
     */
    protected function connections()
    {
        $this->type = $this->ssl == 1 ? "https://" : "http://";
        $this->requestUrl = $this->type . $this->server . ':' . $this->port . '/execute/';
        $this->auth = base64_encode($this->user . ":" . $this->pass);
    }
    /**
     * @param $name
     * @param $arguments
     * @return bool|mixed
     */
    protected function APIcall($name, $arguments)
    {
        $url = $this->requestUrl . ($this->scope != '' ? $this->scope . "/" : '') . $name . '?';
        foreach ($arguments as $key => $value) {
            $url .= $key . "=" . $value . "&";
        }
        return $this->curl_request($url);
    }
    /**
     * @param $url
     * @return bool|mixed
     */
    protected function curl_request($url)
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array("Authorization: Basic " . $this->auth));
        curl_setopt($ch, CURLOPT_TIMEOUT, 100020);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        $content = $this->curl_exec_follow($ch);
        $err = curl_errno($ch);
        $errmsg = curl_error($ch);
        $header = curl_getinfo($ch);
        curl_close($ch);
        $header['errno'] = $err;
        $header['errmsg'] = $errmsg;
        $header['content'] = $content;
        return $header['content'];
    }
    /**
     * @param $ch
     * @param null $maxredirect
     * @return bool|mixed
     */
    protected function curl_exec_follow($ch, &$maxredirect = null)
    {
        // we emulate a browser here since some websites detect
        // us as a bot and don't let us do our job
        $user_agent = "Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.7.5)" .
            " Gecko/20041107 Firefox/1.0";
        curl_setopt($ch, CURLOPT_USERAGENT, $user_agent);
        $mr = $maxredirect === null ? 5 : intval($maxredirect);
        if (ini_get('open_basedir') == '' && ini_get('safe_mode') == 'Off') {
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, $mr > 0);
            curl_setopt($ch, CURLOPT_MAXREDIRS, $mr);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
        } else {
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, FALSE);
            if ($mr > 0) {
                $original_url = curl_getinfo($ch, CURLINFO_EFFECTIVE_URL);
                $newurl = $original_url;
                $rch = curl_copy_handle($ch);
                curl_setopt($rch, CURLOPT_HEADER, TRUE);
                curl_setopt($rch, CURLOPT_NOBODY, TRUE);
                curl_setopt($rch, CURLOPT_FORBID_REUSE, FALSE);
                do {
                    curl_setopt($rch, CURLOPT_URL, $newurl);
                    $header = curl_exec($rch);
                    if (curl_errno($rch)) {
                        $code = 0;
                    } else {
                        $code = curl_getinfo($rch, CURLINFO_HTTP_CODE);
                        if ($code == 301 || $code == 302) {
                            preg_match('/Location:(.*?)\n/', $header, $matches);
                            $newurl = trim(array_pop($matches));
                            // if no scheme is present then the new url is a
                            // relative path and thus needs some extra care
                            if (!preg_match("/^https?:/i", $newurl)) {
                                $newurl = $original_url . $newurl;
                            }
                        } else {
                            $code = 0;
                        }
                    }
                } while ($code && --$mr);
                curl_close($rch);
                if (!$mr) {
                    if ($maxredirect === null)
                        trigger_error('Too many redirects.', E_USER_WARNING);
                    else
                        $maxredirect = 0;
                    return FALSE;
                }
                curl_setopt($ch, CURLOPT_URL, $newurl);
            }
        }
        return curl_exec($ch);
    }
}