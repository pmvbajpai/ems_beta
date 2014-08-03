<?php

/**
 * This is the model class for table "tblmedicalinfo".
 *
 * The followings are the available columns in table 'tblmedicalinfo':
 * @property integer $MedicalInfoId
 * @property integer $UserId
 * @property string $MedicalHistory
 * @property string $RegularDocName
 * @property string $RegularDocAddress
 * @property string $RegularDocMobile
 * @property string $RegularDocPhone
 * @property string $RegularDocEmail
 * @property string $RegularHospName
 * @property string $RegularHospPhone
 * @property string $RegularHospEmail
 * @property string $RegularHospAddress
 * @property integer $Height
 * @property integer $weight
 * @property integer $BloodGroup
 * @property string $LeftEyeSight
 * @property string $RightEyeSight
 * @property string $IdentificationMark1
 * @property string $IdentificationMark2
 * @property string $DateCreated
 * @property string $DateUpdated
 *
 * The followings are the available model relations:
 * @property User $user
 */
class Medicalinfo extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tblmedicalinfo';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('DateCreated', 'required'),
			array('UserId, Height, weight, BloodGroup', 'numerical', 'integerOnly'=>true),
			array('RegularDocName', 'length', 'max'=>100),
			array('RegularDocAddress, RegularDocEmail, RegularHospName, RegularHospEmail, RegularHospAddress, IdentificationMark1, IdentificationMark2', 'length', 'max'=>255),
			array('RegularDocMobile, RegularDocPhone, RegularHospPhone', 'length', 'max'=>15),
			array('LeftEyeSight, RightEyeSight', 'length', 'max'=>5),
			array('MedicalHistory, DateUpdated', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('MedicalInfoId, UserId, MedicalHistory, RegularDocName, RegularDocAddress, RegularDocMobile, RegularDocPhone, RegularDocEmail, RegularHospName, RegularHospPhone, RegularHospEmail, RegularHospAddress, Height, weight, BloodGroup, LeftEyeSight, RightEyeSight, IdentificationMark1, IdentificationMark2, DateCreated, DateUpdated', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'MedicalInfoId' => 'Medical Info',
			'UserId' => 'User',
			'MedicalHistory' => 'Medical History',
			'RegularDocName' => 'Regular Doc Name',
			'RegularDocAddress' => 'Regular Doc Address',
			'RegularDocMobile' => 'Regular Doc Mobile',
			'RegularDocPhone' => 'Regular Doc Phone',
			'RegularDocEmail' => 'Regular Doc Email',
			'RegularHospName' => 'Regular Hosp Name',
			'RegularHospPhone' => 'Regular Hosp Phone',
			'RegularHospEmail' => 'Regular Hosp Email',
			'RegularHospAddress' => 'Regular Hosp Address',
			'Height' => 'Height',
			'weight' => 'Weight',
			'BloodGroup' => 'Blood Group',
			'LeftEyeSight' => 'Left Eye Sight',
			'RightEyeSight' => 'Right Eye Sight',
			'IdentificationMark1' => 'Identification Mark1',
			'IdentificationMark2' => 'Identification Mark2',
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

		$criteria->compare('MedicalInfoId',$this->MedicalInfoId);
		$criteria->compare('UserId',$this->UserId);
		$criteria->compare('MedicalHistory',$this->MedicalHistory,true);
		$criteria->compare('RegularDocName',$this->RegularDocName,true);
		$criteria->compare('RegularDocAddress',$this->RegularDocAddress,true);
		$criteria->compare('RegularDocMobile',$this->RegularDocMobile,true);
		$criteria->compare('RegularDocPhone',$this->RegularDocPhone,true);
		$criteria->compare('RegularDocEmail',$this->RegularDocEmail,true);
		$criteria->compare('RegularHospName',$this->RegularHospName,true);
		$criteria->compare('RegularHospPhone',$this->RegularHospPhone,true);
		$criteria->compare('RegularHospEmail',$this->RegularHospEmail,true);
		$criteria->compare('RegularHospAddress',$this->RegularHospAddress,true);
		$criteria->compare('Height',$this->Height);
		$criteria->compare('weight',$this->weight);
		$criteria->compare('BloodGroup',$this->BloodGroup);
		$criteria->compare('LeftEyeSight',$this->LeftEyeSight,true);
		$criteria->compare('RightEyeSight',$this->RightEyeSight,true);
		$criteria->compare('IdentificationMark1',$this->IdentificationMark1,true);
		$criteria->compare('IdentificationMark2',$this->IdentificationMark2,true);
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
	 * @return Medicalinfo the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
