<?php

/**
 * This is the model class for table "tblclasssectionexamassociation".
 *
 * The followings are the available columns in table 'tblclasssectionexamassociation':
 * @property integer $ClassSectionExamAssociationId
 * @property integer $ClassExamAssociationId
 * @property integer $SectionId
 * @property string $ExamStartDate
 * @property string $ExamEndDate
 * @property integer $Status
 * @property string $DateCreated
 * @property string $DateUpdated
 *
 * The followings are the available model relations:
 * @property Classexamassociation $classExamAssociation
 * @property Section $section
 * @property Examstructure[] $examstructures
 */
class Classsectionexamassociation extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tblclasssectionexamassociation';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ClassExamAssociationId, SectionId, Status', 'numerical', 'integerOnly'=>true),
			array('ExamStartDate, ExamEndDate, DateCreated, DateUpdated', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('ClassSectionExamAssociationId, ClassExamAssociationId, SectionId, ExamStartDate, ExamEndDate, Status, DateCreated, DateUpdated', 'safe', 'on'=>'search'),
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
			'classExamAssociation' => array(self::BELONGS_TO, 'Classexamassociation', 'ClassExamAssociationId'),
			'section' => array(self::BELONGS_TO, 'Section', 'SectionId'),
			'examstructures' => array(self::HAS_MANY, 'Examstructure', 'ClassSectionExamAssociationId'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ClassSectionExamAssociationId' => 'Class Section Exam Association',
			'ClassExamAssociationId' => 'Class Exam Association',
			'SectionId' => 'Section',
			'ExamStartDate' => 'Exam Start Date',
			'ExamEndDate' => 'Exam End Date',
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

		$criteria->compare('ClassSectionExamAssociationId',$this->ClassSectionExamAssociationId);
		$criteria->compare('ClassExamAssociationId',$this->ClassExamAssociationId);
		$criteria->compare('SectionId',$this->SectionId);
		$criteria->compare('ExamStartDate',$this->ExamStartDate,true);
		$criteria->compare('ExamEndDate',$this->ExamEndDate,true);
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
	 * @return Classsectionexamassociation the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
