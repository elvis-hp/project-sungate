<?php
/* @var $this SanPhamController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'San Phams',
);

$this->menu=array(
	array('label'=>'Create SanPham', 'url'=>array('create')),
	array('label'=>'Manage SanPham', 'url'=>array('admin')),
);
?>

<h1>San Phams</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
