<?php
/* @var $this TaiKhoanController */
/* @var $model TaiKhoan */

$this->breadcrumbs=array(
	'Tai Khoans'=>array('index'),
	$model->MaTaiKhoan=>array('view','id'=>$model->MaTaiKhoan),
	'Update',
);

$this->menu=array(
	array('label'=>'List TaiKhoan', 'url'=>array('index')),
	array('label'=>'Create TaiKhoan', 'url'=>array('create')),
	array('label'=>'View TaiKhoan', 'url'=>array('view', 'id'=>$model->MaTaiKhoan)),
	array('label'=>'Manage TaiKhoan', 'url'=>array('admin')),
);
?>

<h1>Update TaiKhoan <?php echo $model->MaTaiKhoan; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>