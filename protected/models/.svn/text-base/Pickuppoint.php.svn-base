<?php

/**
 * This is the model class for table "tblpickuppoint".
 *
 * The followings are the available columns in table 'tblpickuppoint':
 * @property integer $PickupPointId
 * @property integer $InstituteId
 * @property string $PickupPointName
 * @property double $Amount
 * @property string $ZipCode
 * @property string $Remarks
 * @property integer $Status
 * @property integer $SortOrder
 * @property string $DateCreated
 * @property string $DateUpdated
 *
 * The followings are the available model relations:
 * @property Busroutedetail[] $busroutedetails
 * @property Institute $institute
 */
class Pickuppoint extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tblpickuppoint';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('InstituteId, PickupPointName, Amount, ZipCode, Remarks, Status, SortOrder, DateCreated, DateUpdated', 'required'),
			array('InstituteId, Status, SortOrder', 'numerical', 'integerOnly'=>true),
			array('Amount', 'numerical'),
			array('PickupPointName, Remarks', 'length', 'max'=>255),
			array('ZipCode', 'length', 'max'=>6),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('PickupPointId, InstituteId, PickupPointName, Amount, ZipCode, Remarks, Status, SortOrder, DateCreated, DateUpdated', 'safe', 'on'=>'search'),
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
			'busroutedetails' => array(self::HAS_MANY, 'Busroutedetail', 'PickupPointId'),
			'institute' => array(self::BELONGS_TO, 'Institute', 'InstituteId'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'PickupPointId' => 'Pickup Point',
			'InstituteId' => 'Institute',
			'PickupPointName' => 'Pickup Point Name',
			'Amount' => 'Amount',
			'ZipCode' => 'Zip Code',
			'Remarks' => 'Remarks',
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

		$criteria->compare('PickupPointId',$this->PickupPointId);
		$criteria->compare('InstituteId',$this->InstituteId);
		$criteria->compare('PickupPointName',$this->PickupPointName,true);
		$criteria->compare('Amount',$this->Amount);
		$criteria->compare('ZipCode',$this->ZipCode,true);
		$criteria->compare('Remarks',$this->Remarks,true);
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
	 * @return Pickuppoint the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
