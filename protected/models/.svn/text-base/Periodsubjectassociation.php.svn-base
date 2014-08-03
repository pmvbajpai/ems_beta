<?php

/**
 * This is the model class for table "tblperiodsubjectassociation".
 *
 * The followings are the available columns in table 'tblperiodsubjectassociation':
 * @property integer $PeriodSubjectAssociationId
 * @property integer $ClassScheduleId
 * @property integer $PeriodNum
 * @property integer $SubjectId
 * @property integer $UserId
 * @property string $StartTime
 * @property string $EndTime
 * @property integer $SortOrder
 * @property integer $Status
 * @property string $DateCreated
 * @property string $DateUpdated
 *
 * The followings are the available model relations:
 * @property Attendance[] $attendances
 * @property Classschedule $classSchedule
 * @property Employee $user
 */
class Periodsubjectassociation extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tblperiodsubjectassociation';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ClassScheduleId, PeriodNum, SubjectId, UserId, StartTime, EndTime, SortOrder, Status, DateCreated, DateUpdated', 'required'),
			array('ClassScheduleId, PeriodNum, SubjectId, UserId, SortOrder, Status', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('PeriodSubjectAssociationId, ClassScheduleId, PeriodNum, SubjectId, UserId, StartTime, EndTime, SortOrder, Status, DateCreated, DateUpdated', 'safe', 'on'=>'search'),
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
			'attendances' => array(self::HAS_MANY, 'Attendance', 'PeriodSubjectAssociationId'),
			'classSchedule' => array(self::BELONGS_TO, 'Classschedule', 'ClassScheduleId'),
			'user' => array(self::BELONGS_TO, 'Employee', 'UserId'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'PeriodSubjectAssociationId' => 'Period Subject Association',
			'ClassScheduleId' => 'Class Schedule',
			'PeriodNum' => 'Period Num',
			'SubjectId' => 'Subject',
			'UserId' => 'User',
			'StartTime' => 'Start Time',
			'EndTime' => 'End Time',
			'SortOrder' => 'Sort Order',
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

		$criteria->compare('PeriodSubjectAssociationId',$this->PeriodSubjectAssociationId);
		$criteria->compare('ClassScheduleId',$this->ClassScheduleId);
		$criteria->compare('PeriodNum',$this->PeriodNum);
		$criteria->compare('SubjectId',$this->SubjectId);
		$criteria->compare('UserId',$this->UserId);
		$criteria->compare('StartTime',$this->StartTime,true);
		$criteria->compare('EndTime',$this->EndTime,true);
		$criteria->compare('SortOrder',$this->SortOrder);
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
	 * @return Periodsubjectassociation the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
