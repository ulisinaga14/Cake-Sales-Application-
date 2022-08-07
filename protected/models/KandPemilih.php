<?php

/**
 * This is the model class for table "kand_pemilih".
 *
 * The followings are the available columns in table 'kand_pemilih':
 * @property string $kpId
 * @property string $kpKanId
 * @property string $kpKanNama
 * @property string $kpPemNik
 * @property string $kpPosId
 * @property string $kpTanggalPemilihan
 *
 * The followings are the available model relations:
 * @property Kandidat $kpKan
 * @property Pemilih $kpPemNik0
 * @property Posisi $kpPos
 */
class KandPemilih extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'kand_pemilih';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('kpKanId, kpKanNama, kpPemNik, kpPosId, kpTanggalPemilihan', 'required'),
			array('kpKanId, kpPosId', 'length', 'max'=>10),
			array('kpKanNama', 'length', 'max'=>45),
			array('kpPemNik', 'length', 'max'=>20),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('kpId, kpKanId, kpKanNama, kpPemNik, kpPosId, kpTanggalPemilihan', 'safe', 'on'=>'search'),
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
			'kpKan' => array(self::BELONGS_TO, 'Kandidat', 'kpKanId'),
			'kpPemNik0' => array(self::BELONGS_TO, 'Pemilih', 'kpPemNik'),
			'kpPos' => array(self::BELONGS_TO, 'Posisi', 'kpPosId'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'kpId' => 'Kp',
			'kpKanId' => 'Kp Kan',
			'kpKanNama' => 'Kp Kan Nama',
			'kpPemNik' => 'Kp Pem Nik',
			'kpPosId' => 'Kp Pos',
			'kpTanggalPemilihan' => 'Kp Tanggal Pemilihan',
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

		$criteria->compare('kpId',$this->kpId,true);
		$criteria->compare('kpKanId',$this->kpKanId,true);
		$criteria->compare('kpKanNama',$this->kpKanNama,true);
		$criteria->compare('kpPemNik',$this->kpPemNik,true);
		$criteria->compare('kpPosId',$this->kpPosId,true);
		$criteria->compare('kpTanggalPemilihan',$this->kpTanggalPemilihan,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return KandPemilih the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
