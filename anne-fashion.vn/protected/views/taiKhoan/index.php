<?php
/* @var $this TaiKhoanController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tai Khoans',
);

$this->menu=array(
	array('label'=>'Create TaiKhoan', 'url'=>array('create')),
	array('label'=>'Manage TaiKhoan', 'url'=>array('admin')),
);
?>

<h1>Tai Khoans</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
