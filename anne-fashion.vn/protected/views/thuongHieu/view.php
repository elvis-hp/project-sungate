<?php
/* @var $this ThuongHieuController */
/* @var $model ThuongHieu */

$this->breadcrumbs=array(
	'Thuong Hieus'=>array('index'),
	$model->MaThuongHieu,
);

$this->menu=array(
	array('label'=>'List ThuongHieu', 'url'=>array('index')),
	array('label'=>'Create ThuongHieu', 'url'=>array('create')),
	array('label'=>'Update ThuongHieu', 'url'=>array('update', 'id'=>$model->MaThuongHieu)),
	array('label'=>'Delete ThuongHieu', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->MaThuongHieu),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ThuongHieu', 'url'=>array('admin')),
);
?>

<h1>View ThuongHieu #<?php echo $model->MaThuongHieu; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'MaThuongHieu',
		'TenThuongHieu',
		'Logo',
		'XuatXu',
		'MoTa',
	),
)); ?>
