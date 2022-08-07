<?php

/**
 * This is the model class for table "kue".
 *
 * The followings are the available columns in table 'kue':
 * @property string $KueId
 * @property string $KueNama
 * @property string $KueHarga
 * @property integer $KueTipe
 */
class Kue extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'kue';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('KueNama, KueHarga, KueTipe', 'required'),
			array('KueTipe', 'numerical', 'integerOnly'=>true),
			array('KueNama', 'length', 'max'=>200),
			array('KueHarga', 'length', 'max'=>10),
			array('KueGambar', 'file', 'types'=>'jpg, gif, png', 'safe' => false),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('KueId, KueNama, KueHarga, KueTipe,KueGambar', 'safe', 'on'=>'search'),
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
			 'kTipe' => array(self::BELONGS_TO, 'Tipe', 'KueTipe'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'KueId' => 'ID',
			'KueNama' => 'Nama',
			'KueHarga' => 'Harga',
			'KueTipe' => 'Tipe',
			'KueGambar'=>'Gambar',
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

		$criteria->compare('KueId',$this->KueId,true);
		$criteria->compare('KueNama',$this->KueNama,true);
		$criteria->compare('KueHarga',$this->KueHarga,true);
		$criteria->compare('KueTipe',$this->KueTipe);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Kue the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
