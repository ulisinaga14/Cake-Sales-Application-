<?php

/**
 * This is the model class for table "transaksi".
 *
 * The followings are the available columns in table 'transaksi':
 * @property string $transId
 * @property string $transTransId
 * @property string $transBarangId
 * @property string $transTotal
 * @property integer $transJumlah
 * @property integer $transStatus
 */
class Transaksi extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'transaksi';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('transTransId, transBarangId, transTotal, transJumlah, transStatus', 'required'),
			array('transJumlah, transStatus', 'numerical', 'integerOnly'=>true),
			array('transTransId', 'length', 'max'=>45),
			array('transBarangId', 'length', 'max'=>20),
			array('transTotal', 'length', 'max'=>10),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('transId, transTransId, transBarangId, transTotal, transJumlah, transStatus', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'transId' => 'Trans',
			'transTransId' => 'Trans Trans',
			'transBarangId' => 'Trans Barang',
			'transTotal' => 'Trans Total',
			'transJumlah' => 'Trans Jumlah',
			'transStatus' => 'Trans Status',
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

		$criteria->compare('transId',$this->transId,true);
		$criteria->compare('transTransId',$this->transTransId,true);
		$criteria->compare('transBarangId',$this->transBarangId,true);
		$criteria->compare('transTotal',$this->transTotal,true);
		$criteria->compare('transJumlah',$this->transJumlah);
		$criteria->compare('transStatus',$this->transStatus);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Transaksi the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
