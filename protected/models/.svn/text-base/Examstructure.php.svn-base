<?php

/**
 * This is the model class for table "tblexamstructure".
 *
 * The followings are the available columns in table 'tblexamstructure':
 * @property integer $ExamStructureId
 * @property integer $ClassSectionExamAssociationId
 * @property integer $SubjectId
 * @property integer $ComponentId
 * @property integer $MaxMarks
 * @property integer $Status
 * @property string $DateCreated
 * @property string $DateUpdated
 *
 * The followings are the available model relations:
 * @property Classsubjectassociation $subject
 * @property Classsectionexamassociation $classSectionExamAssociation
 * @property Gradecard[] $gradecards
 */
class Examstructure extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tblexamstructure';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ClassSectionExamAssociationId, SubjectId, MaxMarks', 'required'),
			array('ClassSectionExamAssociationId, SubjectId, ComponentId, MaxMarks, Status', 'numerical', 'integerOnly'=>true),
			array('DateCreated, DateUpdated', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('ExamStructureId, ClassSectionExamAssociationId, SubjectId, ComponentId, MaxMarks, Status, DateCreated, DateUpdated', 'safe', 'on'=>'search'),
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
			'subject' => array(self::BELONGS_TO, 'Classsubjectassociation', 'SubjectId'),
			'classSectionExamAssociation' => array(self::BELONGS_TO, 'Classsectionexamassociation', 'ClassSectionExamAssociationId'),
			'gradecards' => array(self::HAS_MANY, 'Gradecard', 'ExamStructureId'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ExamStructureId' => 'Exam Structure',
			'ClassSectionExamAssociationId' => 'Class Section Exam Association',
			'SubjectId' => 'Subject',
			'ComponentId' => 'Component',
			'MaxMarks' => 'Max Marks',
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

		$criteria->compare('ExamStructureId',$this->ExamStructureId);
		$criteria->compare('ClassSectionExamAssociationId',$this->ClassSectionExamAssociationId);
		$criteria->compare('SubjectId',$this->SubjectId);
		$criteria->compare('ComponentId',$this->ComponentId);
		$criteria->compare('MaxMarks',$this->MaxMarks);
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
	 * @return Examstructure the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
