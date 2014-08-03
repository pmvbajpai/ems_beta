<?php

/**
 * This is the model class for table "tblexammaster".
 *
 * The followings are the available columns in table 'tblexammaster':
 * @property integer $ExamId
 * @property string $ExamName
 * @property string $ExamStartDate
 * @property string $ExamEndDate
 * @property integer $AcademicSessionId
 * @property integer $InstituteId
 * @property integer $Status
 * @property integer $SortOrder
 * @property string $DateCreated
 * @property string $DateUpdated
 *
 * The followings are the available model relations:
 * @property Classexamassociation[] $classexamassociations
 * @property Academicsession $academicSession
 * @property Institute $institute
 */
class Exammaster extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tblexammaster';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ExamName, AcademicSessionId, InstituteId', 'required'),
			array('AcademicSessionId, InstituteId, Status, SortOrder', 'numerical', 'integerOnly'=>true),
			array('ExamName', 'length', 'max'=>255),
			array('ExamStartDate, ExamEndDate, DateCreated, DateUpdated', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('ExamId, ExamName, ExamStartDate, ExamEndDate, AcademicSessionId, InstituteId, Status, SortOrder, DateCreated, DateUpdated', 'safe', 'on'=>'search'),
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
			'classexamassociations' => array(self::HAS_MANY, 'Classexamassociation', 'ExamId'),
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
			'ExamId' => 'Exam',
			'ExamName' => 'Exam Name',
			'ExamStartDate' => 'Exam Start Date',
			'ExamEndDate' => 'Exam End Date',
			'AcademicSessionId' => 'Academic Session',
			'InstituteId' => 'Institute',
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

		$criteria->compare('ExamId',$this->ExamId);
		$criteria->compare('ExamName',$this->ExamName,true);
		$criteria->compare('ExamStartDate',$this->ExamStartDate,true);
		$criteria->compare('ExamEndDate',$this->ExamEndDate,true);
		$criteria->compare('AcademicSessionId',$this->AcademicSessionId);
		$criteria->compare('InstituteId',$this->InstituteId);
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
	 * @return Exammaster the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
	
	public function beforeSave()
	{
		if($this->isNewRecord)
		{
			$this->DateCreated = new CDbExpression('NOW()');
		}
		else
		{
			$this->DateUpdated = new CDbExpression('NOW()');
		}
	
		return parent::beforeSave();
	}
}
