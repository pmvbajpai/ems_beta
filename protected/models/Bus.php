<?php

/**
 * This is the model class for table "tblbus".
 *
 * The followings are the available columns in table 'tblbus':
 * @property integer $BusId
 * @property integer $InstituteId
 * @property string $BusName
 * @property string $BusNumber
 * @property integer $Capacity
 * @property string $Description
 * @property integer $Status
 * @property integer $SortOrder
 * @property string $DateCreated
 * @property string $DateUpdated
 *
 * The followings are the available model relations:
 * @property Institute $institute
 * @property Busroute[] $busroutes
 */
class Bus extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tblbus';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('InstituteId, BusName, BusNumber, Capacity, Description', 'required'),
			array('InstituteId, Capacity, Status, SortOrder', 'numerical', 'integerOnly'=>true),
			array('BusName', 'length', 'max'=>50),
			array('BusNumber', 'length', 'max'=>10),
			array('Description', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('BusId, InstituteId, BusName, BusNumber, Capacity, Description, Status, SortOrder, DateCreated, DateUpdated', 'safe', 'on'=>'search'),
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
			'institute' => array(self::BELONGS_TO, 'Institute', 'InstituteId'),
			'busroutes' => array(self::HAS_MANY, 'Busroute', 'BusId'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'BusId' => 'Bus',
			'InstituteId' => 'Institute',
			'BusName' => 'Bus Name',
			'BusNumber' => 'Bus Number',
			'Capacity' => 'Capacity',
			'Description' => 'Description',
			'Status' => 'Status',
			'SortOrder' => 'Sort Order',
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

		$criteria->compare('BusId',$this->BusId);
		$criteria->compare('InstituteId',$this->InstituteId);
		$criteria->compare('BusName',$this->BusName,true);
		$criteria->compare('BusNumber',$this->BusNumber,true);
		$criteria->compare('Capacity',$this->Capacity);
		$criteria->compare('Description',$this->Description,true);
		$criteria->compare('Status',$this->Status);
		$criteria->compare('SortOrder',$this->SortOrder);
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
	 * @return Bus the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
