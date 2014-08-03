<?php

/**
 * This is the model class for table "tblresources".
 *
 * The followings are the available columns in table 'tblresources':
 * @property integer $ResourceId
 * @property string $Module
 * @property string $Controller
 * @property string $Method
 * @property string $DateCreated
 * @property string $DateUpdated
 *
 * The followings are the available model relations:
 * @property Rolesresources[] $rolesresources
 */
class Resources extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tblresources';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Module, Controller, Method, DateCreated, DateUpdated', 'required'),
			array('Module, Controller, Method', 'length', 'max'=>50),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('ResourceId, Module, Controller, Method, DateCreated, DateUpdated', 'safe', 'on'=>'search'),
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
			'rolesresources' => array(self::HAS_MANY, 'Rolesresources', 'ResourceId'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ResourceId' => 'Resource',
			'Module' => 'Module',
			'Controller' => 'Controller',
			'Method' => 'Method',
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

		$criteria->compare('ResourceId',$this->ResourceId);
		$criteria->compare('Module',$this->Module,true);
		$criteria->compare('Controller',$this->Controller,true);
		$criteria->compare('Method',$this->Method,true);
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
	 * @return Resources the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
