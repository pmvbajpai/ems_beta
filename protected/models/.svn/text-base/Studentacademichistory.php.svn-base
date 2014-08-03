<?php

/**
 * This is the model class for table "tblstudentacademichistory".
 *
 * The followings are the available columns in table 'tblstudentacademichistory':
 * @property integer $StudentAcademicHistoryId
 * @property integer $UserId
 * @property integer $AcademicSessionId
 * @property integer $InstituteId
 * @property integer $ClassId
 * @property integer $SectionId
 * @property string $DateCreated
 * @property string $DateUpdated
 *
 * The followings are the available model relations:
 * @property Gradecard[] $gradecards
 * @property Academicsession $academicSession
 * @property Institute $institute
 * @property Student $user
 */
class Studentacademichistory extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tblstudentacademichistory';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('UserId, AcademicSessionId', 'required'),
			array('UserId, AcademicSessionId, InstituteId, ClassId, SectionId', 'numerical', 'integerOnly'=>true),
			array('DateCreated, DateUpdated', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('StudentAcademicHistoryId, UserId, AcademicSessionId, InstituteId, ClassId, SectionId, DateCreated, DateUpdated', 'safe', 'on'=>'search'),
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
			'gradecards' => array(self::HAS_MANY, 'Gradecard', 'StudentAcademicHistoryId'),
			'academicSession' => array(self::BELONGS_TO, 'Academicsession', 'AcademicSessionId'),
			'institute' => array(self::BELONGS_TO, 'Institute', 'InstituteId'),
			'user' => array(self::BELONGS_TO, 'Student', 'UserId'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'StudentAcademicHistoryId' => 'Student Academic History',
			'UserId' => 'User',
			'AcademicSessionId' => 'Academic Session',
			'InstituteId' => 'Institute',
			'ClassId' => 'Class',
			'SectionId' => 'Section',
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

		$criteria->compare('StudentAcademicHistoryId',$this->StudentAcademicHistoryId);
		$criteria->compare('UserId',$this->UserId);
		$criteria->compare('AcademicSessionId',$this->AcademicSessionId);
		$criteria->compare('InstituteId',$this->InstituteId);
		$criteria->compare('ClassId',$this->ClassId);
		$criteria->compare('SectionId',$this->SectionId);
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
	 * @return Studentacademichistory the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
