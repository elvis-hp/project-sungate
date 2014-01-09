<?php
/* @var $this TaiKhoanController */
/* @var $model TaiKhoan */

$this->breadcrumbs=array(
	'Tai Khoans'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TaiKhoan', 'url'=>array('index')),
	array('label'=>'Manage TaiKhoan', 'url'=>array('admin')),
);
?>

<h1>Create TaiKhoan</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>