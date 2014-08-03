<?php

/**
 * This is the model class for table "tblholidaylist".
 *
 * The followings are the available columns in table 'tblholidaylist':
 * @property integer $TableID
 * @property integer $InstituteID
 * @property string $HolidayStartDate
 * @property string $HolidayEndDate
 * @property string $HolidayName
 * @property string $Comment
 * @property integer $AcademicSessionID
 * @property integer $Status
 * @property integer $SortOrder
 * @property string $DateCreated
 * @property string $DateUpdated
 */
class Holidaylist extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tblholidaylist';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('InstituteID, AcademicSessionID, Status, SortOrder', 'numerical', 'integerOnly'=>true),
			array('HolidayName', 'length', 'max'=>255),
			array('HolidayStartDate, HolidayEndDate, Comment, DateCreated, DateUpdated', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('TableID, InstituteID, HolidayStartDate, HolidayEndDate, HolidayName, Comment, AcademicSessionID, Status, SortOrder, DateCreated, DateUpdated', 'safe', 'on'=>'search'),
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
			'InstituteID' => 'Institute',
			'HolidayStartDate' => 'Holiday Start Date',
			'HolidayEndDate' => 'Holiday End Date',
			'HolidayName' => 'Holiday Name',
			'Comment' => 'Comment',
			'AcademicSessionID' => 'Academic Session',
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

		$criteria->compare('TableID',$this->TableID);
		$criteria->compare('InstituteID',$this->InstituteID);
		$criteria->compare('HolidayStartDate',$this->HolidayStartDate,true);
		$criteria->compare('HolidayEndDate',$this->HolidayEndDate,true);
		$criteria->compare('HolidayName',$this->HolidayName,true);
		$criteria->compare('Comment',$this->Comment,true);
		$criteria->compare('AcademicSessionID',$this->AcademicSessionID);
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
	 * @return Holidaylist the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
