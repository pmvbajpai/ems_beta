<?php

/**
 * This is the model class for table "tblexamsubjectcomponent".
 *
 * The followings are the available columns in table 'tblexamsubjectcomponent':
 * @property integer $TableID
 * @property integer $ExamStructureID
 * @property integer $ComponentID
 * @property integer $ComponentMarks
 * @property integer $Status
 * @property string $DateCreated
 * @property string $DateUpdated
 */
class Examsubjectcomponent extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tblexamsubjectcomponent';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ExamStructureID, ComponentID, ComponentMarks, Status', 'numerical', 'integerOnly'=>true),
			array('DateCreated, DateUpdated', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('TableID, ExamStructureID, ComponentID, ComponentMarks, Status, DateCreated, DateUpdated', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'TableID' => 'Table',
			'ExamStructureID' => 'Exam Structure',
			'ComponentID' => 'Component',
			'ComponentMarks' => 'Component Marks',
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

		$criteria->compare('TableID',$this->TableID);
		$criteria->compare('ExamStructureID',$this->ExamStructureID);
		$criteria->compare('ComponentID',$this->ComponentID);
		$criteria->compare('ComponentMarks',$this->ComponentMarks);
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
	 * @return Examsubjectcomponent the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
