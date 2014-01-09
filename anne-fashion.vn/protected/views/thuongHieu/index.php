<?php
/* @var $this ThuongHieuController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Thuong Hieus',
);

$this->menu=array(
	array('label'=>'Create ThuongHieu', 'url'=>array('create')),
	array('label'=>'Manage ThuongHieu', 'url'=>array('admin')),
);
?>

<h1>Thuong Hieus</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
