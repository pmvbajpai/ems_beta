<?php

/**
 * This is the model class for table "tblemployeesalary".
 *
 * The followings are the available columns in table 'tblemployeesalary':
 * @property integer $TableID
 * @property integer $EmployeeID
 * @property integer $Grade
 * @property integer $BasicSalary
 * @property integer $TA
 * @property integer $DA
 * @property integer $HRA
 * @property integer $Deduction
 * @property string $DateCreated
 * @property string $DateUpdated
 */
class Employeesalary extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tblemployeesalary';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('EmployeeID, Grade, BasicSalary, TA, DA, HRA, Deduction', 'numerical', 'integerOnly'=>true),
			array('DateCreated, DateUpdated', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('TableID, EmployeeID, Grade, BasicSalary, TA, DA, HRA, Deduction, DateCreated, DateUpdated', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'TableID' => 'Table',
			'EmployeeID' => 'Employee',
			'Grade' => 'Grade',
			'BasicSalary' => 'Basic Salary',
			'TA' => 'Ta',
			'DA' => 'Da',
			'HRA' => 'Hra',
			'Deduction' => 'Deduction',
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

		$criteria->compare('TableID',$this->TableID);
		$criteria->compare('EmployeeID',$this->EmployeeID);
		$criteria->compare('Grade',$this->Grade);
		$criteria->compare('BasicSalary',$this->BasicSalary);
		$criteria->compare('TA',$this->TA);
		$criteria->compare('DA',$this->DA);
		$criteria->compare('HRA',$this->HRA);
		$criteria->compare('Deduction',$this->Deduction);
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
	 * @return Employeesalary the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
