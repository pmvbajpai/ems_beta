<?php

/**
 * This is the model class for table "tbluserqualification".
 *
 * The followings are the available columns in table 'tbluserqualification':
 * @property integer $TableID
 * @property integer $QualificationOf
 * @property integer $UserID
 * @property integer $Education
 * @property integer $Field
 * @property integer $University
 * @property string $YearPassed
 * @property integer $Grade
 * @property string $DateCreated
 * @property string $DateUpdated
 */
class Userqualification extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbluserqualification';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('QualificationOf, UserID, Education, Field, University, Grade', 'numerical', 'integerOnly'=>true),
			array('YearPassed, DateCreated, DateUpdated', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('TableID, QualificationOf, UserID, Education, Field, University, YearPassed, Grade, DateCreated, DateUpdated', 'safe', 'on'=>'search'),
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
			'QualificationOf' => 'Qualification Of',
			'UserID' => 'User',
			'Education' => 'Education',
			'Field' => 'Field',
			'University' => 'University',
			'YearPassed' => 'Year Passed',
			'Grade' => 'Grade',
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
		$criteria->compare('QualificationOf',$this->QualificationOf);
		$criteria->compare('UserID',$this->UserID);
		$criteria->compare('Education',$this->Education);
		$criteria->compare('Field',$this->Field);
		$criteria->compare('University',$this->University);
		$criteria->compare('YearPassed',$this->YearPassed,true);
		$criteria->compare('Grade',$this->Grade);
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
	 * @return Userqualification the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
