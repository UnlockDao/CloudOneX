<?php
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table = 'crm_accounts';

    /**
     * @return array
     */
    public static function asArray()
    {
        return Contact::all()->keyBy('id')->toArray();
    }

    public static function hasLoginToken()
    {
        if(isset($_COOKIE['ib_ct'])) {

            return true;


        }

        elseif (isset($_SESSION['ib_ct'])){

            return true;

        }

        return false;
    }

    /**
     * @return bool
     */
    public static function isLoggedIn()
    {
        if(isset($_COOKIE['ib_ct'])) {

            $ib_ct = $_COOKIE['ib_ct'];



        }

        elseif (isset($_SESSION['ib_ct'])){



            $ib_ct = $_SESSION['ib_ct'];

        }

        else{

            return false;

        }

        return self::where('token',$ib_ct)->first();
    }

    /**
     * @return mixed
     */
    public static function getAllContacts()
    {
        return Contact::select(['id','account','email','phone','company'])->orderBy('id','desc')->get();
    }
}