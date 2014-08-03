<?php

/**
 * This is the model class for table "tblfeeotherchargesdetails".
 *
 * The followings are the available columns in table 'tblfeeotherchargesdetails':
 * @property integer $FeeOtherChargesDetailsId
 * @property integer $FeeOtherChargesId
 * @property integer $ClassId
 * @property string $AmountType
 * @property integer $Period
 * @property integer $Charges
 * @property string $DateCreated
 * @property string $DateUpdated
 *
 * The followings are the available model relations:
 * @property Feeothercharges $feeOtherCharges
 */
class Feeotherchargesdetails extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tblfeeotherchargesdetails';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Period', 'required'),
			array('FeeOtherChargesId, ClassId, Period, Charges', 'numerical', 'integerOnly'=>true),
			array('AmountType', 'length', 'max'=>255),
			array('DateCreated, DateUpdated', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('FeeOtherChargesDetailsId, FeeOtherChargesId, ClassId, AmountType, Period, Charges, DateCreated, DateUpdated', 'safe', 'on'=>'search'),
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
			'feeOtherCharges' => array(self::BELONGS_TO, 'Feeothercharges', 'FeeOtherChargesId'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'FeeOtherChargesDetailsId' => 'Fee Other Charges Details',
			'FeeOtherChargesId' => 'Fee Other Charges',
			'ClassId' => 'Class',
			'AmountType' => 'Amount Type',
			'Period' => 'Period',
			'Charges' => 'Charges',
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

		$criteria->compare('FeeOtherChargesDetailsId',$this->FeeOtherChargesDetailsId);
		$criteria->compare('FeeOtherChargesId',$this->FeeOtherChargesId);
		$criteria->compare('ClassId',$this->ClassId);
		$criteria->compare('AmountType',$this->AmountType,true);
		$criteria->compare('Period',$this->Period);
		$criteria->compare('Charges',$this->Charges);
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
	 * @return Feeotherchargesdetails the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
