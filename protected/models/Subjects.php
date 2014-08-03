<?php

/**
 * This is the model class for table "tblsubjects".
 *
 * The followings are the available columns in table 'tblsubjects':
 * @property integer $SubjectId
 * @property string $SubjectName
 * @property string $SubjectCode
 * @property integer $InstituteId
 * @property string $Comments
 * @property integer $Status
 * @property integer $SortOrder
 * @property string $DateCreated
 * @property string $DateUpdated
 *
 * The followings are the available model relations:
 * @property Classsubjectassociation[] $classsubjectassociations
 * @property Institute $institute
 */
class Subjects extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tblsubjects';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('InstituteId', 'required'),
			array('InstituteId, Status, SortOrder', 'numerical', 'integerOnly'=>true),
			array('SubjectName, SubjectCode', 'length', 'max'=>255),
			array('Comments, DateCreated, DateUpdated', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('SubjectId, SubjectName, SubjectCode, InstituteId, Comments, Status, SortOrder, DateCreated, DateUpdated', 'safe', 'on'=>'search'),
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
			'classsubjectassociations' => array(self::HAS_MANY, 'Classsubjectassociation', 'SubjectId'),
			'institute' => array(self::BELONGS_TO, 'Institute', 'InstituteId'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'SubjectId' => 'Subject',
			'SubjectName' => 'Subject Name',
			'SubjectCode' => 'Subject Code',
			'InstituteId' => 'Institute',
			'Comments' => 'Comments',
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

		$criteria->compare('SubjectId',$this->SubjectId);
		$criteria->compare('SubjectName',$this->SubjectName,true);
		$criteria->compare('SubjectCode',$this->SubjectCode,true);
		$criteria->compare('InstituteId',$this->InstituteId);
		$criteria->compare('Comments',$this->Comments,true);
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
	 * @return Subjects the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
