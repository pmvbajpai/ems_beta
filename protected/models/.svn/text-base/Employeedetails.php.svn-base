<?php

/**
 * This is the model class for table "tblemployeedetails".
 *
 * The followings are the available columns in table 'tblemployeedetails':
 * @property integer $EmployeeDetailId
 * @property integer $UserId
 * @property string $DOB
 * @property integer $EmployeeType
 * @property integer $Department
 * @property integer $Gender
 * @property integer $Religion
 * @property integer $Category
 * @property string $CurrentAddress1
 * @property string $CurrentAddress2
 * @property integer $CurrentSuburbId
 * @property integer $CurrentCityId
 * @property string $CurrentZipcode
 * @property integer $CurrentStateId
 * @property integer $CurrentCountryId
 * @property string $PermaAddress1
 * @property string $PermaAddress2
 * @property integer $PermaSuburbId
 * @property integer $PermaCityId
 * @property integer $PermaStateId
 * @property integer $PermaCountryId
 * @property string $PermaZipcode
 * @property string $Mobile1
 * @property string $Mobile2
 * @property string $Phone1
 * @property string $Phone2
 * @property string $Fax1
 * @property string $Fax2
 * @property string $Email1
 * @property string $Email2
 * @property string $PassportNum
 * @property string $DateofJoining
 * @property integer $Status
 * @property string $Remarks
 * @property string $AdmissionRef
 * @property string $DateCreated
 * @property string $DateUpdated
 *
 * The followings are the available model relations:
 * @property Employee $user
 */
class Employeedetails extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tblemployeedetails';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('DOB, CurrentAddress1, PermaAddress1, Email1, PassportNum, DateofJoining, Remarks, AdmissionRef', 'required'),
			array('UserId, EmployeeType, Department, Gender, Religion, Category, CurrentSuburbId, CurrentCityId, CurrentStateId, CurrentCountryId, PermaSuburbId, PermaCityId, PermaStateId, PermaCountryId, Status', 'numerical', 'integerOnly'=>true),
			array('CurrentAddress1, CurrentAddress2, PermaAddress1, PermaAddress2, Email1, Email2', 'length', 'max'=>255),
			array('CurrentZipcode, PermaZipcode', 'length', 'max'=>6),
			array('Mobile1, Mobile2, Phone1, Phone2, Fax1, Fax2, PassportNum', 'length', 'max'=>15),
			array('AdmissionRef', 'length', 'max'=>100),
			array('DateCreated, DateUpdated', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('EmployeeDetailId, UserId, DOB, EmployeeType, Department, Gender, Religion, Category, CurrentAddress1, CurrentAddress2, CurrentSuburbId, CurrentCityId, CurrentZipcode, CurrentStateId, CurrentCountryId, PermaAddress1, PermaAddress2, PermaSuburbId, PermaCityId, PermaStateId, PermaCountryId, PermaZipcode, Mobile1, Mobile2, Phone1, Phone2, Fax1, Fax2, Email1, Email2, PassportNum, DateofJoining, Status, Remarks, AdmissionRef, DateCreated, DateUpdated', 'safe', 'on'=>'search'),
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
			'user' => array(self::BELONGS_TO, 'Employee', 'UserId'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'EmployeeDetailId' => 'Employee Detail',
			'UserId' => 'User',
			'DOB' => 'Dob',
			'EmployeeType' => 'Employee Type',
			'Department' => 'Department',
			'Gender' => 'Gender',
			'Religion' => 'Religion',
			'Category' => 'Category',
			'CurrentAddress1' => 'Current Address1',
			'CurrentAddress2' => 'Current Address2',
			'CurrentSuburbId' => 'Current Suburb',
			'CurrentCityId' => 'Current City',
			'CurrentZipcode' => 'Current Zipcode',
			'CurrentStateId' => 'Current State',
			'CurrentCountryId' => 'Current Country',
			'PermaAddress1' => 'Perma Address1',
			'PermaAddress2' => 'Perma Address2',
			'PermaSuburbId' => 'Perma Suburb',
			'PermaCityId' => 'Perma City',
			'PermaStateId' => 'Perma State',
			'PermaCountryId' => 'Perma Country',
			'PermaZipcode' => 'Perma Zipcode',
			'Mobile1' => 'Mobile1',
			'Mobile2' => 'Mobile2',
			'Phone1' => 'Phone1',
			'Phone2' => 'Phone2',
			'Fax1' => 'Fax1',
			'Fax2' => 'Fax2',
			'Email1' => 'Email1',
			'Email2' => 'Email2',
			'PassportNum' => 'Passport Num',
			'DateofJoining' => 'Dateof Joining',
			'Status' => 'Status',
			'Remarks' => 'Remarks',
			'AdmissionRef' => 'Admission Ref',
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

		$criteria->compare('EmployeeDetailId',$this->EmployeeDetailId);
		$criteria->compare('UserId',$this->UserId);
		$criteria->compare('DOB',$this->DOB,true);
		$criteria->compare('EmployeeType',$this->EmployeeType);
		$criteria->compare('Department',$this->Department);
		$criteria->compare('Gender',$this->Gender);
		$criteria->compare('Religion',$this->Religion);
		$criteria->compare('Category',$this->Category);
		$criteria->compare('CurrentAddress1',$this->CurrentAddress1,true);
		$criteria->compare('CurrentAddress2',$this->CurrentAddress2,true);
		$criteria->compare('CurrentSuburbId',$this->CurrentSuburbId);
		$criteria->compare('CurrentCityId',$this->CurrentCityId);
		$criteria->compare('CurrentZipcode',$this->CurrentZipcode,true);
		$criteria->compare('CurrentStateId',$this->CurrentStateId);
		$criteria->compare('CurrentCountryId',$this->CurrentCountryId);
		$criteria->compare('PermaAddress1',$this->PermaAddress1,true);
		$criteria->compare('PermaAddress2',$this->PermaAddress2,true);
		$criteria->compare('PermaSuburbId',$this->PermaSuburbId);
		$criteria->compare('PermaCityId',$this->PermaCityId);
		$criteria->compare('PermaStateId',$this->PermaStateId);
		$criteria->compare('PermaCountryId',$this->PermaCountryId);
		$criteria->compare('PermaZipcode',$this->PermaZipcode,true);
		$criteria->compare('Mobile1',$this->Mobile1,true);
		$criteria->compare('Mobile2',$this->Mobile2,true);
		$criteria->compare('Phone1',$this->Phone1,true);
		$criteria->compare('Phone2',$this->Phone2,true);
		$criteria->compare('Fax1',$this->Fax1,true);
		$criteria->compare('Fax2',$this->Fax2,true);
		$criteria->compare('Email1',$this->Email1,true);
		$criteria->compare('Email2',$this->Email2,true);
		$criteria->compare('PassportNum',$this->PassportNum,true);
		$criteria->compare('DateofJoining',$this->DateofJoining,true);
		$criteria->compare('Status',$this->Status);
		$criteria->compare('Remarks',$this->Remarks,true);
		$criteria->compare('AdmissionRef',$this->AdmissionRef,true);
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
	 * @return Employeedetails the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
