<?php

/**
 * This is the model class for table "tblclassfeestructuredetails".
 *
 * The followings are the available columns in table 'tblclassfeestructuredetails':
 * @property integer $ClassFeeStructureDetailsId
 * @property integer $ClassFeeStructureId
 * @property string $DueDate
 * @property string $Amount
 * @property string $DateCreated
 * @property string $DateUpdated
 *
 * The followings are the available model relations:
 * @property Classfeestructure $classFeeStructure
 */
class Classfeestructuredetails extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tblclassfeestructuredetails';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ClassFeeStructureId', 'required'),
			array('ClassFeeStructureId', 'numerical', 'integerOnly'=>true),
			array('Amount', 'length', 'max'=>10),
			array('DueDate, DateCreated, DateUpdated', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('ClassFeeStructureDetailsId, ClassFeeStructureId, DueDate, Amount, DateCreated, DateUpdated', 'safe', 'on'=>'search'),
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
			'classFeeStructure' => array(self::BELONGS_TO, 'Classfeestructure', 'ClassFeeStructureId'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ClassFeeStructureDetailsId' => 'Class Fee Structure Details',
			'ClassFeeStructureId' => 'Class Fee Structure',
			'DueDate' => 'Due Date',
			'Amount' => 'Amount',
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

		$criteria->compare('ClassFeeStructureDetailsId',$this->ClassFeeStructureDetailsId);
		$criteria->compare('ClassFeeStructureId',$this->ClassFeeStructureId);
		$criteria->compare('DueDate',$this->DueDate,true);
		$criteria->compare('Amount',$this->Amount,true);
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
	 * @return Classfeestructuredetails the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
