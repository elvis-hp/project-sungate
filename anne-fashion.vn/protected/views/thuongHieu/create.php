<?php
/* @var $this ThuongHieuController */
/* @var $model ThuongHieu */

$this->breadcrumbs=array(
	'Thuong Hieus'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ThuongHieu', 'url'=>array('index')),
	array('label'=>'Manage ThuongHieu', 'url'=>array('admin')),
);
?>

<h1>Create ThuongHieu</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>