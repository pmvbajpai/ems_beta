<?php

/**
 * This is the model class for table "tblclassschedule".
 *
 * The followings are the available columns in table 'tblclassschedule':
 * @property integer $ClassScheduleId
 * @property integer $ClassSectionAssociationId
 * @property integer $AttendanceType
 * @property integer $TotalPeriods
 * @property integer $SortOrder
 * @property integer $Status
 * @property string $DateCreated
 * @property string $DateUpdated
 *
 * The followings are the available model relations:
 * @property Classsectionassociation $classSectionAssociation
 * @property Periodsubjectassociation[] $periodsubjectassociations
 */
class Classschedule extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tblclassschedule';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ClassSectionAssociationId, AttendanceType, TotalPeriods, SortOrder, Status, DateCreated, DateUpdated', 'required'),
			array('ClassSectionAssociationId, AttendanceType, TotalPeriods, SortOrder, Status', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('ClassScheduleId, ClassSectionAssociationId, AttendanceType, TotalPeriods, SortOrder, Status, DateCreated, DateUpdated', 'safe', 'on'=>'search'),
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
			'classSectionAssociation' => array(self::BELONGS_TO, 'Classsectionassociation', 'ClassSectionAssociationId'),
			'periodsubjectassociations' => array(self::HAS_MANY, 'Periodsubjectassociation', 'ClassScheduleId'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ClassScheduleId' => 'Class Schedule',
			'ClassSectionAssociationId' => 'Class Section Association',
			'AttendanceType' => 'Attendance Type',
			'TotalPeriods' => 'Total Periods',
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

		$criteria->compare('ClassScheduleId',$this->ClassScheduleId);
		$criteria->compare('ClassSectionAssociationId',$this->ClassSectionAssociationId);
		$criteria->compare('AttendanceType',$this->AttendanceType);
		$criteria->compare('TotalPeriods',$this->TotalPeriods);
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
	 * @return Classschedule the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
