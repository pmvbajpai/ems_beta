<?php

/**
 * This is the model class for table "tblannouncements".
 *
 * The followings are the available columns in table 'tblannouncements':
 * @property integer $AnnouncementId
 * @property integer $InstituteId
 * @property integer $AcademicSessionId
 * @property string $Heading
 * @property string $Description
 * @property string $ExpiryDate
 * @property integer $AnnouncementType
 * @property string $DateCreated
 * @property string $DateUpdated
 *
 * The followings are the available model relations:
 * @property Academicsession $academicSession
 * @property Institute $institute
 */
class Announcements extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tblannouncements';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('InstituteId, AcademicSessionId, Heading, Description, ExpiryDate, AnnouncementType, DateCreated, DateUpdated', 'required'),
			array('InstituteId, AcademicSessionId, AnnouncementType', 'numerical', 'integerOnly'=>true),
			array('Heading', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('AnnouncementId, InstituteId, AcademicSessionId, Heading, Description, ExpiryDate, AnnouncementType, DateCreated, DateUpdated', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'AnnouncementId' => 'Announcement',
			'InstituteId' => 'Institute',
			'AcademicSessionId' => 'Academic Session',
			'Heading' => 'Heading',
			'Description' => 'Description',
			'ExpiryDate' => 'Expiry Date',
			'AnnouncementType' => 'Announcement Type',
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

		$criteria->compare('AnnouncementId',$this->AnnouncementId);
		$criteria->compare('InstituteId',$this->InstituteId);
		$criteria->compare('AcademicSessionId',$this->AcademicSessionId);
		$criteria->compare('Heading',$this->Heading,true);
		$criteria->compare('Description',$this->Description,true);
		$criteria->compare('ExpiryDate',$this->ExpiryDate,true);
		$criteria->compare('AnnouncementType',$this->AnnouncementType);
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
	 * @return Announcements the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
