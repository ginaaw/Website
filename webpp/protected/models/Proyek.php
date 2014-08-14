<?php

/**
 * This is the model class for table "proyek".
 *
 * The followings are the available columns in table 'proyek':
 * @property integer $id
 * @property string $nama_proyek
 * @property string $tanggal_mulai
 * @property string $tanggal_peresmian
 * @property string $foto
 * @property string $deskripsi
 * @property integer $status
 * @property integer $id_admin
 *
 * The followings are the available model relations:
 * @property Admin $idAdmin
 */
class Proyek extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'proyek';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id, nama_proyek, tanggal_mulai, deskripsi, status, id_admin', 'required'),
			array('id, status, id_admin', 'numerical', 'integerOnly'=>true),
			array('nama_proyek', 'length', 'max'=>32),
			array('tanggal_peresmian, foto', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, nama_proyek, tanggal_mulai, tanggal_peresmian, foto, deskripsi, status, id_admin', 'safe', 'on'=>'search'),
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
			'idAdmin' => array(self::BELONGS_TO, 'Admin', 'id_admin'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'nama_proyek' => 'Nama Proyek',
			'tanggal_mulai' => 'Tanggal Mulai',
			'tanggal_peresmian' => 'Tanggal Peresmian',
			'foto' => 'Foto',
			'deskripsi' => 'Deskripsi',
			'status' => 'Status',
			'id_admin' => 'Id Admin',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('nama_proyek',$this->nama_proyek,true);
		$criteria->compare('tanggal_mulai',$this->tanggal_mulai,true);
		$criteria->compare('tanggal_peresmian',$this->tanggal_peresmian,true);
		$criteria->compare('foto',$this->foto,true);
		$criteria->compare('deskripsi',$this->deskripsi,true);
		$criteria->compare('status',$this->status);
		$criteria->compare('id_admin',$this->id_admin);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Proyek the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
