<?php
/* @var $this SanPhamController */
/* @var $model SanPham */

$this->breadcrumbs=array(
	'San Phams'=>array('index'),
	$model->MaSP,
);

$this->menu=array(
	array('label'=>'List SanPham', 'url'=>array('index')),
	array('label'=>'Create SanPham', 'url'=>array('create')),
	array('label'=>'Update SanPham', 'url'=>array('update', 'id'=>$model->MaSP)),
	array('label'=>'Delete SanPham', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->MaSP),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage SanPham', 'url'=>array('admin')),
);
?>

<h1>View SanPham #<?php echo $model->MaSP; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'MaSP',
		'TenSP',
		'Gia',
		'GioiTinh',
		'MauSac',
		'SizeAo',
		'SizeQuan',
		'SoLuong',
		'HinhThumb',
		'GiamGia',
		'KhuyenMai',
		'HangMoiVe',
		'loaisanpham_MaLoaiSP',
		'thuonghieu_MaThuongHieu',
	),
)); ?>
