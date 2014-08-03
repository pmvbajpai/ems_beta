<?php

/**
 * This is the model class for table "tblemployee".
 *
 * The followings are the available columns in table 'tblemployee':
 * @property integer $EmployeeId
 * @property integer $UserId
 * @property string $FirstName
 * @property string $MiddleName
 * @property string $LastName
 * @property string $EmployeeCode
 * @property string $Email
 * @property integer $Status
 * @property string $DateCreated
 * @property string $DateUpdated
 *
 * The followings are the available model relations:
 * @property User $user
 * @property Employeedetails[] $employeedetails
 * @property Periodsubjectassociation[] $periodsubjectassociations
 */
class Employee extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tblemployee';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('UserId, FirstName, LastName, EmployeeCode, Email, DateCreated, DateUpdated', 'required'),
			array('UserId, Status', 'numerical', 'integerOnly'=>true),
			array('FirstName, MiddleName, LastName', 'length', 'max'=>50),
			array('EmployeeCode', 'length', 'max'=>25),
			array('Email', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('EmployeeId, UserId, FirstName, MiddleName, LastName, EmployeeCode, Email, Status, DateCreated, DateUpdated', 'safe', 'on'=>'search'),
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
			'user' => array(self::BELONGS_TO, 'User', 'UserId'),
			'employeedetails' => array(self::HAS_MANY, 'Employeedetails', 'UserId'),
			'periodsubjectassociations' => array(self::HAS_MANY, 'Periodsubjectassociation', 'UserId'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'EmployeeId' => 'Employee',
			'UserId' => 'User',
			'FirstName' => 'First Name',
			'MiddleName' => 'Middle Name',
			'LastName' => 'Last Name',
			'EmployeeCode' => 'Employee Code',
			'Email' => 'Email',
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

		$criteria->compare('EmployeeId',$this->EmployeeId);
		$criteria->compare('UserId',$this->UserId);
		$criteria->compare('FirstName',$this->FirstName,true);
		$criteria->compare('MiddleName',$this->MiddleName,true);
		$criteria->compare('LastName',$this->LastName,true);
		$criteria->compare('EmployeeCode',$this->EmployeeCode,true);
		$criteria->compare('Email',$this->Email,true);
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
	 * @return Employee the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
