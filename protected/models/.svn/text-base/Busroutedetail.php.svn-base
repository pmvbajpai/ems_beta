<?php

/**
 * This is the model class for table "tblbusroutedetail".
 *
 * The followings are the available columns in table 'tblbusroutedetail':
 * @property integer $BusRouteDetailId
 * @property integer $BusRouteId
 * @property integer $PickupPointId
 * @property string $DateCreated
 * @property string $DateUpdated
 *
 * The followings are the available model relations:
 * @property Busroute $busRoute
 * @property Pickuppoint $pickupPoint
 */
class Busroutedetail extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tblbusroutedetail';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('BusRouteId, PickupPointId, DateCreated, DateUpdated', 'required'),
			array('BusRouteId, PickupPointId', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('BusRouteDetailId, BusRouteId, PickupPointId, DateCreated, DateUpdated', 'safe', 'on'=>'search'),
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
			'busRoute' => array(self::BELONGS_TO, 'Busroute', 'BusRouteId'),
			'pickupPoint' => array(self::BELONGS_TO, 'Pickuppoint', 'PickupPointId'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'BusRouteDetailId' => 'Bus Route Detail',
			'BusRouteId' => 'Bus Route',
			'PickupPointId' => 'Pickup Point',
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

		$criteria->compare('BusRouteDetailId',$this->BusRouteDetailId);
		$criteria->compare('BusRouteId',$this->BusRouteId);
		$criteria->compare('PickupPointId',$this->PickupPointId);
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
	 * @return Busroutedetail the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
