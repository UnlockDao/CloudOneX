<?php
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    protected $table = 'sys_documents';

	public static function getByType($relation_type, $relation_id)
	{
		$relations = DocumentRelation::where('rtype',$relation_type)
		                 ->where('rid',$relation_id)
		                 ->get();

		$ids = [];

		foreach ($relations as $relation)
		{
			$ids[] = $relation->did;
		}

		return self::whereIn('id',$ids)
		               ->get();

	}
}