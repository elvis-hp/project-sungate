<?php
/* @var $this LoaiSanPhamController */
/* @var $model LoaiSanPham */

$this->breadcrumbs=array(
	'Loai San Phams'=>array('index'),
	$model->MaLoaiSP,
);

$this->menu=array(
	array('label'=>'List LoaiSanPham', 'url'=>array('index')),
	array('label'=>'Create LoaiSanPham', 'url'=>array('create')),
	array('label'=>'Update LoaiSanPham', 'url'=>array('update', 'id'=>$model->MaLoaiSP)),
	array('label'=>'Delete LoaiSanPham', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->MaLoaiSP),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage LoaiSanPham', 'url'=>array('admin')),
);
?>

<h1>View LoaiSanPham #<?php echo $model->MaLoaiSP; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'MaLoaiSP',
		'TenLoaiSP',
		'Parent',
		'MoTa',
	),
)); ?>
