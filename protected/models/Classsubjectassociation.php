<?php

/**
 * This is the model class for table "tblclasssubjectassociation".
 *
 * The followings are the available columns in table 'tblclasssubjectassociation':
 * @property integer $SubjectClassAssociationId
 * @property integer $ClassId
 * @property integer $SubjectId
 * @property integer $IsOptional
 * @property integer $InstituteId
 * @property integer $AcademiSessionId
 * @property string $DateCreated
 * @property string $DateUpdated
 *
 * The followings are the available model relations:
 * @property Academicsession $academiSession
 * @property Class $class
 * @property Institute $institute
 * @property Subjects $subject
 * @property Examstructure[] $examstructures
 */
class Classsubjectassociation extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tblclasssubjectassociation';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ClassId, SubjectId, InstituteId, AcademiSessionId', 'required'),
			array('ClassId, SubjectId, IsOptional, InstituteId, AcademiSessionId', 'numerical', 'integerOnly'=>true),
			array('DateCreated, DateUpdated', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('SubjectClassAssociationId, ClassId, SubjectId, IsOptional, InstituteId, AcademiSessionId, DateCreated, DateUpdated', 'safe', 'on'=>'search'),
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
			'academiSession' => array(self::BELONGS_TO, 'Academicsession', 'AcademiSessionId'),
			'class' => array(self::BELONGS_TO, 'Class', 'ClassId'),
			'institute' => array(self::BELONGS_TO, 'Institute', 'InstituteId'),
			'subject' => array(self::BELONGS_TO, 'Subjects', 'SubjectId'),
			'examstructures' => array(self::HAS_MANY, 'Examstructure', 'SubjectId'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'SubjectClassAssociationId' => 'Subject Class Association',
			'ClassId' => 'Class',
			'SubjectId' => 'Subject',
			'IsOptional' => 'Is Optional',
			'InstituteId' => 'Institute',
			'AcademiSessionId' => 'Academi Session',
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

		$criteria->compare('SubjectClassAssociationId',$this->SubjectClassAssociationId);
		$criteria->compare('ClassId',$this->ClassId);
		$criteria->compare('SubjectId',$this->SubjectId);
		$criteria->compare('IsOptional',$this->IsOptional);
		$criteria->compare('InstituteId',$this->InstituteId);
		$criteria->compare('AcademiSessionId',$this->AcademiSessionId);
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
	 * @return Classsubjectassociation the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
