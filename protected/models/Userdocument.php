<?php

/**
 * This is the model class for table "tbluserdocument".
 *
 * The followings are the available columns in table 'tbluserdocument':
 * @property integer $DocumentId
 * @property integer $UserId
 * @property integer $DocumentType
 * @property string $FileName
 * @property string $Comments
 * @property integer $Status
 * @property string $DateCreated
 * @property string $DateUpdated
 *
 * The followings are the available model relations:
 * @property User $user
 */
class Userdocument extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbluserdocument';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('UserId, DocumentType, Status', 'numerical', 'integerOnly'=>true),
			array('FileName, Comments', 'length', 'max'=>255),
			array('DateCreated, DateUpdated', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('DocumentId, UserId, DocumentType, FileName, Comments, Status, DateCreated, DateUpdated', 'safe', 'on'=>'search'),
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
			'user' => array(self::BELONGS_TO, 'User', 'UserId'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'DocumentId' => 'Document',
			'UserId' => 'User',
			'DocumentType' => 'Document Type',
			'FileName' => 'File Name',
			'Comments' => 'Comments',
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

		$criteria->compare('DocumentId',$this->DocumentId);
		$criteria->compare('UserId',$this->UserId);
		$criteria->compare('DocumentType',$this->DocumentType);
		$criteria->compare('FileName',$this->FileName,true);
		$criteria->compare('Comments',$this->Comments,true);
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
	 * @return Userdocument the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
