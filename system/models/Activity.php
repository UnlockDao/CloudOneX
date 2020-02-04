<?php
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    protected $table = 'sys_logs';
    public $timestamps = false;

    public static function getRelatedTo($related_to,$related_id)
    {
        return self::where('related_to',$related_to)
            ->where('related_id',$related_id)
            ->get();
    }

}