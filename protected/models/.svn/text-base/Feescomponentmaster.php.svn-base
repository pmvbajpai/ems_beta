<?php

/**
 * This is the model class for table "tblfeescomponentmaster".
 *
 * The followings are the available columns in table 'tblfeescomponentmaster':
 * @property integer $ComponentId
 * @property integer $InstituteId
 * @property integer $AcademicSessionId
 * @property string $ComponentName
 * @property string $IsRefundable
 * @property integer $Status
 * @property integer $SortOrder
 * @property string $DateCreated
 * @property string $DateUpdated
 *
 * The followings are the available model relations:
 * @property Classfeestructure[] $classfeestructures
 * @property Academicsession $academicSession
 * @property Institute $institute
 */
class Feescomponentmaster extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tblfeescomponentmaster';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('InstituteId, AcademicSessionId, ComponentName', 'required'),
			array('InstituteId, AcademicSessionId, Status, SortOrder', 'numerical', 'integerOnly'=>true),
			array('ComponentName', 'length', 'max'=>100),
			array('IsRefundable', 'length', 'max'=>1),
			array('DateCreated, DateUpdated', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('ComponentId, InstituteId, AcademicSessionId, ComponentName, IsRefundable, Status, SortOrder, DateCreated, DateUpdated', 'safe', 'on'=>'search'),
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
			'classfeestructures' => array(self::HAS_MANY, 'Classfeestructure', 'ComponentId'),
			'academicSession' => array(self::BELONGS_TO, 'Academicsession', 'AcademicSessionId'),
			'institute' => array(self::BELONGS_TO, 'Institute', 'InstituteId'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ComponentId' => 'Component',
			'InstituteId' => 'Institute',
			'AcademicSessionId' => 'Academic Session',
			'ComponentName' => 'Component Name',
			'IsRefundable' => 'Is Refundable',
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

		$criteria->compare('ComponentId',$this->ComponentId);
		$criteria->compare('InstituteId',$this->InstituteId);
		$criteria->compare('AcademicSessionId',$this->AcademicSessionId);
		$criteria->compare('ComponentName',$this->ComponentName,true);
		$criteria->compare('IsRefundable',$this->IsRefundable,true);
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
	 * @return Feescomponentmaster the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
