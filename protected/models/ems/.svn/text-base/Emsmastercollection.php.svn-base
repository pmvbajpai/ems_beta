<?php
class Emsmastercollection extends Mastercollection
{
	/**
	 * This function return master collection id and name by master collection type id
	 * @param int $id
	 * @return Ambigous <multitype:, mixed>
	 */
	public static function getMasterCollectionByCollectionTypeId($id)
	{
		$query =  Yii::app()->db->createCommand()
								->select('CollectionName as name, MasterCollectionId as id')
								->from(parent::tableName())
								->where('MasterCollectionTypeId = ' . $id)
								->andWhere('Status = 1');
		
		$execute = $query->queryAll();
		return $execute;
	}
}