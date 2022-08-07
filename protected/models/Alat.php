<?php

/**
 * This is the model class for table "alat".
 *
 * The followings are the available columns in table 'alat':
 * @property integer $AlatId
 * @property string $AlatNama
 * @property integer $AlatTipe
 * @property string $Keterangan
 */
class Alat extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'alat';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('AlatNama, AlatTipe, Keterangan', 'required'),
			array('AlatTipe', 'numerical', 'integerOnly'=>true),
			array('AlatNama', 'length', 'max'=>64),
			array('Keterangan', 'length', 'max'=>500),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('AlatId, AlatNama, AlatTipe, Keterangan', 'safe', 'on'=>'search'),
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
			'aTipe' => array(self::BELONGS_TO, 'Tipe', 'AlatTipe'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'AlatId' => 'ID',
			'AlatNama' => 'Nama',
			'AlatTipe' => 'Tipe',
			'Keterangan' => 'Keterangan',
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

		$criteria->compare('AlatId',$this->AlatId);
		$criteria->compare('AlatNama',$this->AlatNama,true);
		$criteria->compare('AlatTipe',$this->AlatTipe);
		$criteria->compare('Keterangan',$this->Keterangan,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Alat the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
