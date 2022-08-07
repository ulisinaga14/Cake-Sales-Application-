<?php

/**
 * This is the model class for table "pemilih".
 *
 * The followings are the available columns in table 'pemilih':
 * @property string $pemNik
 * @property string $pemNama
 * @property string $pemTglLahir
 * @property string $pemAlamat
 * @property string $pemNoHp
 *
 * The followings are the available model relations:
 * @property KandPemilih[] $kandPemilihs
 */
class Pemilih extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'pemilih';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('pemNik, pemNama, pemTglLahir, pemAlamat, pemNoHp', 'required'),
			array('pemNik', 'length', 'max'=>20),
			array('pemNama, pemNoHp', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('pemNik, pemNama, pemTglLahir, pemAlamat, pemNoHp', 'safe', 'on'=>'search'),
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
			'kandPemilihs' => array(self::HAS_MANY, 'KandPemilih', 'kpPemNik'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'pemNik' => 'Nik',
			'pemNama' => 'Nama',
			'pemTglLahir' => 'Tgl Lahir',
			'pemAlamat' => 'Alamat',
			'pemNoHp' => 'No Hp',
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

		$criteria->compare('pemNik',$this->pemNik,true);
		$criteria->compare('pemNama',$this->pemNama,true);
		$criteria->compare('pemTglLahir',$this->pemTglLahir,true);
		$criteria->compare('pemAlamat',$this->pemAlamat,true);
		$criteria->compare('pemNoHp',$this->pemNoHp,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Pemilih the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
