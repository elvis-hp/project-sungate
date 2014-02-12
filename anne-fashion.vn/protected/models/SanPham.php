<?php

/**
 * This is the model class for table "sanpham".
 *
 * The followings are the available columns in table 'sanpham':
 * @property string $MaSP
 * @property string $TenSP
 * @property double $Gia
 * @property integer $GioiTinh
 * @property integer $MauSac
 * @property string $SizeAo
 * @property integer $SizeQuan
 * @property integer $SoLuong
 * @property string $HinhThumb
 * @property double $GiamGia
 * @property integer $KhuyenMai
 * @property integer $HangMoiVe
 * @property integer $loaisanpham_MaLoaiSP
 * @property integer $thuonghieu_MaThuongHieu
 *
 * The followings are the available model relations:
 * @property Chitietdondathang[] $chitietdondathangs
 * @property Chitiethoadon[] $chitiethoadons
 * @property Hinhanh[] $hinhanhs
 * @property Loaisanpham $loaisanphamMaLoaiSP
 * @property Thuonghieu $thuonghieuMaThuongHieu
 */
class SanPham extends CActiveRecord {

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'sanpham';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('loaisanpham_MaLoaiSP, thuonghieu_MaThuongHieu', 'required'),
            array('GioiTinh, MauSac, SizeQuan, SoLuong, KhuyenMai, HangMoiVe, loaisanpham_MaLoaiSP, thuonghieu_MaThuongHieu', 'numerical', 'integerOnly' => true),
            array('Gia, GiamGia', 'numerical'),
            array('TenSP', 'length', 'max' => 100),
            array('SizeAo', 'length', 'max' => 5),
            array('HinhThumb', 'length', 'max' => 300),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('MaSP, TenSP, Gia, GioiTinh, MauSac, SizeAo, SizeQuan, SoLuong, HinhThumb, GiamGia, KhuyenMai, HangMoiVe, loaisanpham_MaLoaiSP, thuonghieu_MaThuongHieu', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'chitietdondathangs' => array(self::HAS_MANY, 'Chitietdondathang', 'sanpham_MaSP'),
            'chitiethoadons' => array(self::HAS_MANY, 'Chitiethoadon', 'sanpham_MaSP'),
            'hinhanhs' => array(self::HAS_MANY, 'Hinhanh', 'sanpham_MaSP'),
            'loaisanphamMaLoaiSP' => array(self::BELONGS_TO, 'Loaisanpham', 'loaisanpham_MaLoaiSP'),
            'thuonghieuMaThuongHieu' => array(self::BELONGS_TO, 'Thuonghieu', 'thuonghieu_MaThuongHieu'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'MaSP' => 'Ma Sp',
            'TenSP' => 'Ten Sp',
            'Gia' => 'Gia',
            'GioiTinh' => 'Gioi Tinh',
            'MauSac' => 'Mau Sac',
            'SizeAo' => 'Size Ao',
            'SizeQuan' => 'Size Quan',
            'SoLuong' => 'So Luong',
            'HinhThumb' => 'Hinh Thumb',
            'GiamGia' => 'Giam Gia',
            'KhuyenMai' => 'Khuyen Mai',
            'HangMoiVe' => 'Hang Moi Ve',
            'loaisanpham_MaLoaiSP' => 'Loaisanpham Ma Loai Sp',
            'thuonghieu_MaThuongHieu' => 'Thuonghieu Ma Thuong Hieu',
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
    public function search() {
        // @todo Please modify the following code to remove attributes that should not be searched.

        $criteria = new CDbCriteria;

        $criteria->compare('MaSP', $this->MaSP, true);
        $criteria->compare('TenSP', $this->TenSP, true);
        $criteria->compare('Gia', $this->Gia);
        $criteria->compare('GioiTinh', $this->GioiTinh);
        $criteria->compare('MauSac', $this->MauSac);
        $criteria->compare('SizeAo', $this->SizeAo, true);
        $criteria->compare('SizeQuan', $this->SizeQuan);
        $criteria->compare('SoLuong', $this->SoLuong);
        $criteria->compare('HinhThumb', $this->HinhThumb, true);
        $criteria->compare('GiamGia', $this->GiamGia);
        $criteria->compare('KhuyenMai', $this->KhuyenMai);
        $criteria->compare('HangMoiVe', $this->HangMoiVe);
        $criteria->compare('loaisanpham_MaLoaiSP', $this->loaisanpham_MaLoaiSP);
        $criteria->compare('thuonghieu_MaThuongHieu', $this->thuonghieu_MaThuongHieu);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return SanPham the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    public static function PartURL($str) {
        $str = trim($str);
        $str = mb_strtolower($str, 'UTF-8');
        $str = preg_replace('/(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)/', 'a', $str);
        $str = preg_replace('/(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)/', 'e', $str);
        $str = preg_replace('/(ì|í|ị|ỉ|ĩ)/', 'i', $str);
        $str = preg_replace('/(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)/', 'o', $str);
        $str = preg_replace('/(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)/', 'u', $str);
        $str = preg_replace('/(ỳ|ý|ỵ|ỷ|ỹ)/', 'y', $str);
        $str = preg_replace('/(đ)/', 'd', $str);
        $str = preg_replace("/(~|`|!|@|#|\$|%|\^|\(|\)|\[|\]|\*|_|\+|=|\?|>|<|\.|,|:|;|“|”|´|'|\"|&|\{|\})/", '', $str);
        $str = preg_replace('/(\/)/', '-', $str);
        $str = str_replace('\\', '-', $str);
        $str = str_replace(' ', '-', $str);
        $str = str_replace('--', '-', $str);
        $str = str_replace('---', '-', $str);
        $str = str_replace('----', '-', $str);
        $str = str_replace('-----', '-', $str);
        $str = str_replace('----', '-', $str);
        $str = str_replace('---', '-', $str);
        $str = str_replace('--', '-', $str);
        return $str;
    }

}
