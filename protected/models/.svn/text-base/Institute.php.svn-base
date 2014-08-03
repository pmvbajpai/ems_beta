<?php

/**
 * This is the model class for table "tblinstitute".
 *
 * The followings are the available columns in table 'tblinstitute':
 * @property integer $InstituteId
 * @property string $InstituteName
 * @property string $InstituteLogo
 * @property string $InstituteAddress1
 * @property string $InstituteAddress2
 * @property string $InstituteZipCode
 * @property integer $InstituteCityId
 * @property integer $InstituteStateId
 * @property integer $InstituteCountryId
 * @property string $InstitutePhone1
 * @property string $InstitutePhone2
 * @property string $InsituteFax1
 * @property string $InstituteFax2
 * @property string $InstituteEmail1
 * @property string $InstituteEmail2
 * @property string $InsituteWebUrl
 * @property string $InstituteDescription
 * @property string $InstituteAccreditionId
 * @property string $DateCreated
 * @property string $DateUpdated
 *
 * The followings are the available model relations:
 * @property Announcements[] $announcements
 * @property Bus[] $buses
 * @property Busroute[] $busroutes
 * @property Classexamassociation[] $classexamassociations
 * @property Classsectionassociation[] $classsectionassociations
 * @property Classsubjectassociation[] $classsubjectassociations
 * @property Examgrademaster[] $examgrademasters
 * @property Exammaster[] $exammasters
 * @property Feeothercharges[] $feeothercharges
 * @property Feescomponentmaster[] $feescomponentmasters
 * @property Pickuppoint[] $pickuppoints
 * @property Studentacademichistory[] $studentacademichistories
 * @property Subjectcomponent[] $subjectcomponents
 * @property Subjects[] $subjects
 */
class Institute extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tblinstitute';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('InstituteName, InstituteAddress1, InstituteZipCode, InstituteCityId, InstituteStateId, InstituteCountryId, InstitutePhone1, InsituteFax1, InstituteEmail1, InsituteWebUrl, InstituteAccreditionId', 'required'),
			array('InstituteCityId, InstituteStateId, InstituteCountryId', 'numerical', 'integerOnly'=>true),
			array('InstituteName, InstituteLogo, InstituteAddress1, InstituteAddress2, InstituteEmail1, InstituteEmail2, InsituteWebUrl', 'length', 'max'=>255),
			array('InstituteZipCode', 'length', 'max'=>6),
			array('InstitutePhone1, InstitutePhone2, InsituteFax1, InstituteFax2', 'length', 'max'=>15),
			array('InstituteAccreditionId', 'length', 'max'=>50),
			array('InstituteDescription, DateCreated, DateUpdated', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('InstituteId, InstituteName, InstituteLogo, InstituteAddress1, InstituteAddress2, InstituteZipCode, InstituteCityId, InstituteStateId, InstituteCountryId, InstitutePhone1, InstitutePhone2, InsituteFax1, InstituteFax2, InstituteEmail1, InstituteEmail2, InsituteWebUrl, InstituteDescription, InstituteAccreditionId, DateCreated, DateUpdated', 'safe', 'on'=>'search'),
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
			'announcements' => array(self::HAS_MANY, 'Announcements', 'InstituteId'),
			'buses' => array(self::HAS_MANY, 'Bus', 'InstituteId'),
			'busroutes' => array(self::HAS_MANY, 'Busroute', 'InstituteId'),
			'classexamassociations' => array(self::HAS_MANY, 'Classexamassociation', 'InstituteId'),
			'classsectionassociations' => array(self::HAS_MANY, 'Classsectionassociation', 'InsituteId'),
			'classsubjectassociations' => array(self::HAS_MANY, 'Classsubjectassociation', 'InstituteId'),
			'examgrademasters' => array(self::HAS_MANY, 'Examgrademaster', 'InstituteId'),
			'exammasters' => array(self::HAS_MANY, 'Exammaster', 'InstituteId'),
			'feeothercharges' => array(self::HAS_MANY, 'Feeothercharges', 'InstituteId'),
			'feescomponentmasters' => array(self::HAS_MANY, 'Feescomponentmaster', 'InstituteId'),
			'pickuppoints' => array(self::HAS_MANY, 'Pickuppoint', 'InstituteId'),
			'studentacademichistories' => array(self::HAS_MANY, 'Studentacademichistory', 'InstituteId'),
			'subjectcomponents' => array(self::HAS_MANY, 'Subjectcomponent', 'InstituteId'),
			'subjects' => array(self::HAS_MANY, 'Subjects', 'InstituteId'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'InstituteId' => 'Institute',
			'InstituteName' => 'Institute Name',
			'InstituteLogo' => 'Institute Logo',
			'InstituteAddress1' => 'Institute Address1',
			'InstituteAddress2' => 'Institute Address2',
			'InstituteZipCode' => 'Institute Zip Code',
			'InstituteCityId' => 'Institute City',
			'InstituteStateId' => 'Institute State',
			'InstituteCountryId' => 'Institute Country',
			'InstitutePhone1' => 'Institute Phone1',
			'InstitutePhone2' => 'Institute Phone2',
			'InsituteFax1' => 'Insitute Fax1',
			'InstituteFax2' => 'Institute Fax2',
			'InstituteEmail1' => 'Institute Email1',
			'InstituteEmail2' => 'Institute Email2',
			'InsituteWebUrl' => 'Insitute Web Url',
			'InstituteDescription' => 'Institute Description',
			'InstituteAccreditionId' => 'Institute Accredition',
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

		$criteria->compare('InstituteId',$this->InstituteId);
		$criteria->compare('InstituteName',$this->InstituteName,true);
		$criteria->compare('InstituteLogo',$this->InstituteLogo,true);
		$criteria->compare('InstituteAddress1',$this->InstituteAddress1,true);
		$criteria->compare('InstituteAddress2',$this->InstituteAddress2,true);
		$criteria->compare('InstituteZipCode',$this->InstituteZipCode,true);
		$criteria->compare('InstituteCityId',$this->InstituteCityId);
		$criteria->compare('InstituteStateId',$this->InstituteStateId);
		$criteria->compare('InstituteCountryId',$this->InstituteCountryId);
		$criteria->compare('InstitutePhone1',$this->InstitutePhone1,true);
		$criteria->compare('InstitutePhone2',$this->InstitutePhone2,true);
		$criteria->compare('InsituteFax1',$this->InsituteFax1,true);
		$criteria->compare('InstituteFax2',$this->InstituteFax2,true);
		$criteria->compare('InstituteEmail1',$this->InstituteEmail1,true);
		$criteria->compare('InstituteEmail2',$this->InstituteEmail2,true);
		$criteria->compare('InsituteWebUrl',$this->InsituteWebUrl,true);
		$criteria->compare('InstituteDescription',$this->InstituteDescription,true);
		$criteria->compare('InstituteAccreditionId',$this->InstituteAccreditionId,true);
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
	 * @return Institute the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
