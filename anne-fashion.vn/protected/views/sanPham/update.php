<?php
/* @var $this SanPhamController */
/* @var $model SanPham */

$this->breadcrumbs=array(
	'San Phams'=>array('index'),
	$model->MaSP=>array('view','id'=>$model->MaSP),
	'Update',
);

$this->menu=array(
	array('label'=>'List SanPham', 'url'=>array('index')),
	array('label'=>'Create SanPham', 'url'=>array('create')),
	array('label'=>'View SanPham', 'url'=>array('view', 'id'=>$model->MaSP)),
	array('label'=>'Manage SanPham', 'url'=>array('admin')),
);
?>

<h1>Update SanPham <?php echo $model->MaSP; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>