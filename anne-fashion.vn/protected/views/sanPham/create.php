<?php
/* @var $this SanPhamController */
/* @var $model SanPham */

$this->breadcrumbs=array(
	'San Phams'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List SanPham', 'url'=>array('index')),
	array('label'=>'Manage SanPham', 'url'=>array('admin')),
);
?>

<h1>Create SanPham</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>