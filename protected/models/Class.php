<?php

/**
 * This is the model class for table "tblclass".
 *
 * The followings are the available columns in table 'tblclass':
 * @property integer $ClassId
 * @property string $ClassName
 * @property string $ClassDisplayName
 * @property integer $Status
 * @property integer $SortOrder
 * @property string $DateCreated
 * @property string $DateUpdated
 *
 * The followings are the available model relations:
 * @property Classexamassociation[] $classexamassociations
 * @property Classfeestructure[] $classfeestructures
 * @property Classsectionassociation[] $classsectionassociations
 * @property Classsubjectassociation[] $classsubjectassociations
 */
class Class extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tblclass';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Status, SortOrder', 'numerical', 'integerOnly'=>true),
			array('ClassName', 'length', 'max'=>50),
			array('ClassDisplayName', 'length', 'max'=>25),
			array('DateCreated, DateUpdated', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('ClassId, ClassName, ClassDisplayName, Status, SortOrder, DateCreated, DateUpdated', 'safe', 'on'=>'search'),
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
			'classexamassociations' => array(self::HAS_MANY, 'Classexamassociation', 'ClassId'),
			'classfeestructures' => array(self::HAS_MANY, 'Classfeestructure', 'ClassId'),
			'classsectionassociations' => array(self::HAS_MANY, 'Classsectionassociation', 'ClassId'),
			'classsubjectassociations' => array(self::HAS_MANY, 'Classsubjectassociation', 'ClassId'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ClassId' => 'Class',
			'ClassName' => 'Class Name',
			'ClassDisplayName' => 'Class Display Name',
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

		$criteria->compare('ClassId',$this->ClassId);
		$criteria->compare('ClassName',$this->ClassName,true);
		$criteria->compare('ClassDisplayName',$this->ClassDisplayName,true);
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
	 * @return Class the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
