<?php
/* @var $this LoaiSanPhamController */
/* @var $model LoaiSanPham */

$this->breadcrumbs=array(
	'Loai San Phams'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List LoaiSanPham', 'url'=>array('index')),
	array('label'=>'Manage LoaiSanPham', 'url'=>array('admin')),
);
?>

<h1>Create LoaiSanPham</h1>

<?php $this->renderPartial('_form', array('model'=>$model, "listParent"=>$listParent)); ?>