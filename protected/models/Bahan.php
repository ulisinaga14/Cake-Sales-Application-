<?php

/**
 * This is the model class for table "bahan".
 *
 * The followings are the available columns in table 'bahan':
 * @property integer $BahanId
 * @property string $BahanNama
 * @property string $Jumlah
 * @property integer $BahanTipe
 */
class Bahan extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'bahan';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('BahanNama, Jumlah, BahanTipe', 'required'),
			array('BahanTipe', 'numerical', 'integerOnly'=>true),
			array('BahanNama', 'length', 'max'=>64),
			array('Jumlah', 'length', 'max'=>100),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('BahanId, BahanNama, Jumlah, BahanTipe', 'safe', 'on'=>'search'),
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
			'bTipe' => array(self::BELONGS_TO, 'Tipe', 'BahanTipe'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'BahanId' => 'ID',
			'BahanNama' => 'Nama',
			'Jumlah' => 'Jumlah',
			'BahanTipe' => 'Tipe',
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

		$criteria->compare('BahanId',$this->BahanId);
		$criteria->compare('BahanNama',$this->BahanNama,true);
		$criteria->compare('Jumlah',$this->Jumlah,true);
		$criteria->compare('BahanTipe',$this->BahanTipe);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Bahan the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
