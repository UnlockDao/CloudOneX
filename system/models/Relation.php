<?php
use Illuminate\Database\Eloquent\Model;

class Relation extends Model
{
    public static function staffDepartmentsAll()
    {
        $relations_all = Relation::where('type','staff_departments')->get();

        $relations = [];
        foreach ($relations_all as $relation_map)
        {
            $relations[$relation_map->source_id][] = $relation_map->target_id;
        }

        return $relations;
    }
}