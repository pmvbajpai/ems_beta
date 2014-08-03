<?php

/**
 * This is the model class for table "tblacademicsession".
 *
 * The followings are the available columns in table 'tblacademicsession':
 * @property integer $AcademicSessionId
 * @property string $SessionName
 * @property string $SessionStartDate
 * @property string $SessionEndDate
 * @property integer $SortOrder
 * @property integer $Status
 * @property string $DateCreated
 * @property string $DateUpdated
 *
 * The followings are the available model relations:
 * @property Announcements[] $announcements
 * @property Busroute[] $busroutes
 * @property Classexamassociation[] $classexamassociations
 * @property Classsectionassociation[] $classsectionassociations
 * @property Classsubjectassociation[] $classsubjectassociations
 * @property Exammaster[] $exammasters
 * @property Feeothercharges[] $feeothercharges
 * @property Feescomponentmaster[] $feescomponentmasters
 * @property Studentacademichistory[] $studentacademichistories
 */
class Academicsession extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tblacademicsession';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('SessionName, SessionStartDate, SessionEndDate, SortOrder, DateCreated, DateUpdated', 'required'),
			array('SortOrder, Status', 'numerical', 'integerOnly'=>true),
			array('SessionName', 'length', 'max'=>10),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('AcademicSessionId, SessionName, SessionStartDate, SessionEndDate, SortOrder, Status, DateCreated, DateUpdated', 'safe', 'on'=>'search'),
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
			'announcements' => array(self::HAS_MANY, 'Announcements', 'AcademicSessionId'),
			'busroutes' => array(self::HAS_MANY, 'Busroute', 'AcademicSessionId'),
			'classexamassociations' => array(self::HAS_MANY, 'Classexamassociation', 'AcademicSessionId'),
			'classsectionassociations' => array(self::HAS_MANY, 'Classsectionassociation', 'AcademicSessionId'),
			'classsubjectassociations' => array(self::HAS_MANY, 'Classsubjectassociation', 'AcademiSessionId'),
			'exammasters' => array(self::HAS_MANY, 'Exammaster', 'AcademicSessionId'),
			'feeothercharges' => array(self::HAS_MANY, 'Feeothercharges', 'AcademicSessionId'),
			'feescomponentmasters' => array(self::HAS_MANY, 'Feescomponentmaster', 'AcademicSessionId'),
			'studentacademichistories' => array(self::HAS_MANY, 'Studentacademichistory', 'AcademicSessionId'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'AcademicSessionId' => 'Academic Session',
			'SessionName' => 'Session Name',
			'SessionStartDate' => 'Session Start Date',
			'SessionEndDate' => 'Session End Date',
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

		$criteria->compare('AcademicSessionId',$this->AcademicSessionId);
		$criteria->compare('SessionName',$this->SessionName,true);
		$criteria->compare('SessionStartDate',$this->SessionStartDate,true);
		$criteria->compare('SessionEndDate',$this->SessionEndDate,true);
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
	 * @return Academicsession the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
