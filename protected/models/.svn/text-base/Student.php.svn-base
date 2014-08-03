<?php

/**
 * This is the model class for table "tblstudent".
 *
 * The followings are the available columns in table 'tblstudent':
 * @property integer $StudentId
 * @property integer $UserId
 * @property string $ScholarNumber
 * @property string $FirstName
 * @property string $MiddleName
 * @property string $LastName
 * @property string $DateCreated
 * @property string $DateUpdated
 *
 * The followings are the available model relations:
 * @property User $user
 * @property Studentacademichistory[] $studentacademichistories
 * @property Studentdetails[] $studentdetails
 */
class Student extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tblstudent';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('UserId, ScholarNumber, FirstName, LastName, DateCreated, DateUpdated', 'required'),
			array('UserId', 'numerical', 'integerOnly'=>true),
			array('ScholarNumber', 'length', 'max'=>25),
			array('FirstName, MiddleName, LastName', 'length', 'max'=>50),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('StudentId, UserId, ScholarNumber, FirstName, MiddleName, LastName, DateCreated, DateUpdated', 'safe', 'on'=>'search'),
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
			'studentacademichistories' => array(self::HAS_MANY, 'Studentacademichistory', 'UserId'),
			'studentdetails' => array(self::HAS_MANY, 'Studentdetails', 'UserId'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'StudentId' => 'Student',
			'UserId' => 'User',
			'ScholarNumber' => 'Scholar Number',
			'FirstName' => 'First Name',
			'MiddleName' => 'Middle Name',
			'LastName' => 'Last Name',
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

		$criteria->compare('StudentId',$this->StudentId);
		$criteria->compare('UserId',$this->UserId);
		$criteria->compare('ScholarNumber',$this->ScholarNumber,true);
		$criteria->compare('FirstName',$this->FirstName,true);
		$criteria->compare('MiddleName',$this->MiddleName,true);
		$criteria->compare('LastName',$this->LastName,true);
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
	 * @return Student the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
