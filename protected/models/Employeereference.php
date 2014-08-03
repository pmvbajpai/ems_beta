<?php

/**
 * This is the model class for table "tblemployeereference".
 *
 * The followings are the available columns in table 'tblemployeereference':
 * @property integer $TableID
 * @property integer $EmployeeID
 * @property string $Reference1Address1
 * @property string $Reference1Address2
 * @property integer $Reference1CityID
 * @property integer $Reference1Mobile
 * @property integer $Reference1HomePhone
 * @property integer $Reference1OfficePhone
 * @property integer $Reference1Email
 * @property string $DateCreated
 * @property string $DateUpdated
 */
class Employeereference extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tblemployeereference';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('EmployeeID, Reference1CityID, Reference1Mobile, Reference1HomePhone, Reference1OfficePhone, Reference1Email', 'numerical', 'integerOnly'=>true),
			array('Reference1Address1, Reference1Address2', 'length', 'max'=>255),
			array('DateCreated, DateUpdated', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('TableID, EmployeeID, Reference1Address1, Reference1Address2, Reference1CityID, Reference1Mobile, Reference1HomePhone, Reference1OfficePhone, Reference1Email, DateCreated, DateUpdated', 'safe', 'on'=>'search'),
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
			'Reference1Address1' => 'Reference1 Address1',
			'Reference1Address2' => 'Reference1 Address2',
			'Reference1CityID' => 'Reference1 City',
			'Reference1Mobile' => 'Reference1 Mobile',
			'Reference1HomePhone' => 'Reference1 Home Phone',
			'Reference1OfficePhone' => 'Reference1 Office Phone',
			'Reference1Email' => 'Reference1 Email',
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
		$criteria->compare('Reference1Address1',$this->Reference1Address1,true);
		$criteria->compare('Reference1Address2',$this->Reference1Address2,true);
		$criteria->compare('Reference1CityID',$this->Reference1CityID);
		$criteria->compare('Reference1Mobile',$this->Reference1Mobile);
		$criteria->compare('Reference1HomePhone',$this->Reference1HomePhone);
		$criteria->compare('Reference1OfficePhone',$this->Reference1OfficePhone);
		$criteria->compare('Reference1Email',$this->Reference1Email);
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
	 * @return Employeereference the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
