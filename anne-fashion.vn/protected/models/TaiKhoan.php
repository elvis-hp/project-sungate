<?php

/**
 * This is the model class for table "taikhoan".
 *
 * The followings are the available columns in table 'taikhoan':
 * @property string $MaTaiKhoan
 * @property string $TenDangNhap
 * @property string $MatKhau
 * @property string $Fb_ID
 * @property string $FB_Token
 * @property string $HoTen
 * @property string $NgaySinh
 * @property string $CMND
 * @property string $AnhDaiDien
 * @property integer $Quyen
 */
class TaiKhoan extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'taikhoan';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('TenDangNhap, MatKhau, Fb_ID, FB_Token, HoTen, NgaySinh, CMND, AnhDaiDien, Quyen', 'required'),
			array('Quyen', 'numerical', 'integerOnly'=>true),
			array('TenDangNhap, MatKhau, Fb_ID, FB_Token, HoTen, AnhDaiDien', 'length', 'max'=>100),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('MaTaiKhoan, TenDangNhap, MatKhau, Fb_ID, FB_Token, HoTen, NgaySinh, CMND, AnhDaiDien, Quyen', 'safe', 'on'=>'search'),
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
			'MaTaiKhoan' => 'Ma Tai Khoan',
			'TenDangNhap' => 'Ten Dang Nhap',
			'MatKhau' => 'Mat Khau',
			'Fb_ID' => 'Fb',
			'FB_Token' => 'Fb Token',
			'HoTen' => 'Ho Ten',
			'NgaySinh' => 'Ngay Sinh',
			'CMND' => 'Cmnd',
			'AnhDaiDien' => 'Anh Dai Dien',
			'Quyen' => 'Quyen',
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

		$criteria->compare('MaTaiKhoan',$this->MaTaiKhoan,true);
		$criteria->compare('TenDangNhap',$this->TenDangNhap,true);
		$criteria->compare('MatKhau',$this->MatKhau,true);
		$criteria->compare('Fb_ID',$this->Fb_ID,true);
		$criteria->compare('FB_Token',$this->FB_Token,true);
		$criteria->compare('HoTen',$this->HoTen,true);
		$criteria->compare('NgaySinh',$this->NgaySinh,true);
		$criteria->compare('CMND',$this->CMND,true);
		$criteria->compare('AnhDaiDien',$this->AnhDaiDien,true);
		$criteria->compare('Quyen',$this->Quyen);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return TaiKhoan the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
