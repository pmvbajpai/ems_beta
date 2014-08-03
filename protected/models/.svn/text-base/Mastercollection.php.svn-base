<?php

/**
 * This is the model class for table "tblmastercollection".
 *
 * The followings are the available columns in table 'tblmastercollection':
 * @property integer $MasterCollectionId
 * @property integer $MasterCollectionTypeId
 * @property string $CollectionName
 * @property string $Description
 * @property integer $Status
 * @property string $DateCreated
 * @property string $DateUpdated
 *
 * The followings are the available model relations:
 * @property Mastercollectiontype $masterCollectionType
 */
class Mastercollection extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tblmastercollection';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('MasterCollectionTypeId, CollectionName, Description, Status, DateCreated, DateUpdated', 'required'),
			array('MasterCollectionTypeId, Status', 'numerical', 'integerOnly'=>true),
			array('CollectionName', 'length', 'max'=>50),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('MasterCollectionId, MasterCollectionTypeId, CollectionName, Description, Status, DateCreated, DateUpdated', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'masterCollectionType' => array(self::BELONGS_TO, 'Mastercollectiontype', 'MasterCollectionTypeId'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'MasterCollectionId' => 'Master Collection',
			'MasterCollectionTypeId' => 'Master Collection Type',
			'CollectionName' => 'Collection Name',
			'Description' => 'Description',
			'Status' => 'Status',
			'DateCreated' => 'Date Created',
			'DateUpdated' => 'Date Updated',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('MasterCollectionId',$this->MasterCollectionId);
		$criteria->compare('MasterCollectionTypeId',$this->MasterCollectionTypeId);
		$criteria->compare('CollectionName',$this->CollectionName,true);
		$criteria->compare('Description',$this->Description,true);
		$criteria->compare('Status',$this->Status);
		$criteria->compare('DateCreated',$this->DateCreated,true);
		$criteria->compare('DateUpdated',$this->DateUpdated,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Mastercollection the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
