<?php

/**
 * This is the model class for table "kandidat".
 *
 * The followings are the available columns in table 'kandidat':
 * @property string $kanId
 * @property string $kanNama
 * @property string $kanPosisi
 *
 * The followings are the available model relations:
 * @property KandPemilih[] $kandPemilihs
 * @property Posisi $kanPosisi0
 */
class Kandidat extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'kandidat';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('kanNama, kanPosisi', 'required'),
			array('kanNama', 'length', 'max'=>45),
			array('kanPosisi', 'length', 'max'=>10),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('kanId, kanNama, kanPosisi', 'safe', 'on'=>'search'),
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
			'kandPemilihs' => array(self::HAS_MANY, 'KandPemilih', 'kpKanId'),
			'kanPosisi0' => array(self::BELONGS_TO, 'Posisi', 'kanPosisi'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'kanId' => 'ID',
			'kanNama' => 'Nama',
			'kanPosisi' => 'Posisi',
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

		$criteria->compare('kanId',$this->kanId,true);
		$criteria->compare('kanNama',$this->kanNama,true);
		$criteria->compare('kanPosisi',$this->kanPosisi,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Kandidat the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
