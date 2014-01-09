<?php
/* @var $this ThuongHieuController */
/* @var $model ThuongHieu */

$this->breadcrumbs=array(
	'Thuong Hieus'=>array('index'),
	$model->MaThuongHieu=>array('view','id'=>$model->MaThuongHieu),
	'Update',
);

$this->menu=array(
	array('label'=>'List ThuongHieu', 'url'=>array('index')),
	array('label'=>'Create ThuongHieu', 'url'=>array('create')),
	array('label'=>'View ThuongHieu', 'url'=>array('view', 'id'=>$model->MaThuongHieu)),
	array('label'=>'Manage ThuongHieu', 'url'=>array('admin')),
);
?>

<h1>Update ThuongHieu <?php echo $model->MaThuongHieu; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>