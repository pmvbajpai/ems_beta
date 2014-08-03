<?php

/**
 * This is the model class for table "tblfeeothercharges".
 *
 * The followings are the available columns in table 'tblfeeothercharges':
 * @property integer $FeeOtherChargesId
 * @property integer $InstituteId
 * @property integer $AcademicSessionId
 * @property string $OtherComponentName
 * @property integer $Status
 * @property integer $SortOrder
 * @property string $DateCreated
 * @property string $DateUpdated
 *
 * The followings are the available model relations:
 * @property Academicsession $academicSession
 * @property Institute $institute
 * @property Feeotherchargesdetails[] $feeotherchargesdetails
 */
class Feeothercharges extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tblfeeothercharges';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('InstituteId, AcademicSessionId, OtherComponentName', 'required'),
			array('InstituteId, AcademicSessionId, Status, SortOrder', 'numerical', 'integerOnly'=>true),
			array('OtherComponentName', 'length', 'max'=>255),
			array('DateCreated, DateUpdated', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('FeeOtherChargesId, InstituteId, AcademicSessionId, OtherComponentName, Status, SortOrder, DateCreated, DateUpdated', 'safe', 'on'=>'search'),
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
			'institute' => array(self::BELONGS_TO, 'Institute', 'InstituteId'),
			'feeotherchargesdetails' => array(self::HAS_MANY, 'Feeotherchargesdetails', 'FeeOtherChargesId'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'FeeOtherChargesId' => 'Fee Other Charges',
			'InstituteId' => 'Institute',
			'AcademicSessionId' => 'Academic Session',
			'OtherComponentName' => 'Other Component Name',
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

		$criteria->compare('FeeOtherChargesId',$this->FeeOtherChargesId);
		$criteria->compare('InstituteId',$this->InstituteId);
		$criteria->compare('AcademicSessionId',$this->AcademicSessionId);
		$criteria->compare('OtherComponentName',$this->OtherComponentName,true);
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
	 * @return Feeothercharges the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
