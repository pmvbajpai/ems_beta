<?php

/**
 * This is the model class for table "tblbusroute".
 *
 * The followings are the available columns in table 'tblbusroute':
 * @property integer $BusRouteId
 * @property integer $InstituteId
 * @property integer $AcademicSessionId
 * @property string $RouteName
 * @property integer $BusId
 * @property integer $Status
 * @property integer $SortOrder
 * @property string $DateCreated
 * @property string $DateUpdated
 *
 * The followings are the available model relations:
 * @property Academicsession $academicSession
 * @property Bus $bus
 * @property Institute $institute
 * @property Busroutedetail[] $busroutedetails
 */
class Busroute extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tblbusroute';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('InstituteId, AcademicSessionId, RouteName, BusId, Status', 'required'),
			array('InstituteId, AcademicSessionId, BusId, Status, SortOrder', 'numerical', 'integerOnly'=>true),
			array('RouteName', 'length', 'max'=>50),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('BusRouteId, InstituteId, AcademicSessionId, RouteName, BusId, Status, SortOrder, DateCreated, DateUpdated', 'safe', 'on'=>'search'),
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
			'academicSession' => array(self::BELONGS_TO, 'Academicsession', 'AcademicSessionId'),
			'bus' => array(self::BELONGS_TO, 'Bus', 'BusId'),
			'institute' => array(self::BELONGS_TO, 'Institute', 'InstituteId'),
			'busroutedetails' => array(self::HAS_MANY, 'Busroutedetail', 'BusRouteId'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'BusRouteId' => 'Bus Route',
			'InstituteId' => 'Institute',
			'AcademicSessionId' => 'Academic Session',
			'RouteName' => 'Route Name',
			'BusId' => 'Bus',
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

		$criteria->compare('BusRouteId',$this->BusRouteId);
		$criteria->compare('InstituteId',$this->InstituteId);
		$criteria->compare('AcademicSessionId',$this->AcademicSessionId);
		$criteria->compare('RouteName',$this->RouteName,true);
		$criteria->compare('BusId',$this->BusId);
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
	 * @return Busroute the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
