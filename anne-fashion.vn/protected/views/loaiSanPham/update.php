<?php
/* @var $this LoaiSanPhamController */
/* @var $model LoaiSanPham */

$this->breadcrumbs=array(
	'Loai San Phams'=>array('index'),
	$model->MaLoaiSP=>array('view','id'=>$model->MaLoaiSP),
	'Update',
);

$this->menu=array(
	array('label'=>'List LoaiSanPham', 'url'=>array('index')),
	array('label'=>'Create LoaiSanPham', 'url'=>array('create')),
	array('label'=>'View LoaiSanPham', 'url'=>array('view', 'id'=>$model->MaLoaiSP)),
	array('label'=>'Manage LoaiSanPham', 'url'=>array('admin')),
);
?>

<h1>Update LoaiSanPham <?php echo $model->MaLoaiSP; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model,'listParent'=>$listParent)); ?>