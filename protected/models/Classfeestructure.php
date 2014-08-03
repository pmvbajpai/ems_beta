<?php

/**
 * This is the model class for table "tblclassfeestructure".
 *
 * The followings are the available columns in table 'tblclassfeestructure':
 * @property integer $ClassFeeStructureId
 * @property integer $ClassId
 * @property integer $ComponentId
 * @property integer $Frequency
 * @property string $DateCreated
 * @property string $DateUpdated
 *
 * The followings are the available model relations:
 * @property Class $class
 * @property Feescomponentmaster $component
 * @property Classfeestructuredetails[] $classfeestructuredetails
 */
class Classfeestructure extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tblclassfeestructure';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Frequency', 'required'),
			array('ClassId, ComponentId, Frequency', 'numerical', 'integerOnly'=>true),
			array('DateCreated, DateUpdated', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('ClassFeeStructureId, ClassId, ComponentId, Frequency, DateCreated, DateUpdated', 'safe', 'on'=>'search'),
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
			'class' => array(self::BELONGS_TO, 'Class', 'ClassId'),
			'component' => array(self::BELONGS_TO, 'Feescomponentmaster', 'ComponentId'),
			'classfeestructuredetails' => array(self::HAS_MANY, 'Classfeestructuredetails', 'ClassFeeStructureId'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ClassFeeStructureId' => 'Class Fee Structure',
			'ClassId' => 'Class',
			'ComponentId' => 'Component',
			'Frequency' => 'Frequency',
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

		$criteria->compare('ClassFeeStructureId',$this->ClassFeeStructureId);
		$criteria->compare('ClassId',$this->ClassId);
		$criteria->compare('ComponentId',$this->ComponentId);
		$criteria->compare('Frequency',$this->Frequency);
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
	 * @return Classfeestructure the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
