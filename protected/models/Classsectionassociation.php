<?php

/**
 * This is the model class for table "tblclasssectionassociation".
 *
 * The followings are the available columns in table 'tblclasssectionassociation':
 * @property integer $ClassSectionAssociationId
 * @property integer $ClassId
 * @property integer $SectionId
 * @property integer $InsituteId
 * @property integer $AcademicSessionId
 * @property integer $Status
 * @property string $DateCreated
 * @property string $DateUpdated
 *
 * The followings are the available model relations:
 * @property Classschedule[] $classschedules
 * @property Institute $insitute
 * @property Academicsession $academicSession
 * @property Class $class
 * @property Section $section
 */
class Classsectionassociation extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tblclasssectionassociation';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ClassId, SectionId, InsituteId, AcademicSessionId', 'required'),
			array('ClassId, SectionId, InsituteId, AcademicSessionId, Status', 'numerical', 'integerOnly'=>true),
			array('DateCreated, DateUpdated', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('ClassSectionAssociationId, ClassId, SectionId, InsituteId, AcademicSessionId, Status, DateCreated, DateUpdated', 'safe', 'on'=>'search'),
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
			'classschedules' => array(self::HAS_MANY, 'Classschedule', 'ClassSectionAssociationId'),
			'insitute' => array(self::BELONGS_TO, 'Institute', 'InsituteId'),
			'academicSession' => array(self::BELONGS_TO, 'Academicsession', 'AcademicSessionId'),
			'class' => array(self::BELONGS_TO, 'Class', 'ClassId'),
			'section' => array(self::BELONGS_TO, 'Section', 'SectionId'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ClassSectionAssociationId' => 'Class Section Association',
			'ClassId' => 'Class',
			'SectionId' => 'Section',
			'InsituteId' => 'Insitute',
			'AcademicSessionId' => 'Academic Session',
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

		$criteria->compare('ClassSectionAssociationId',$this->ClassSectionAssociationId);
		$criteria->compare('ClassId',$this->ClassId);
		$criteria->compare('SectionId',$this->SectionId);
		$criteria->compare('InsituteId',$this->InsituteId);
		$criteria->compare('AcademicSessionId',$this->AcademicSessionId);
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
	 * @return Classsectionassociation the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
