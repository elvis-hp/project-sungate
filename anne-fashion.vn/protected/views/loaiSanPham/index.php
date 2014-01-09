<?php
/* @var $this LoaiSanPhamController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Loai San Phams',
);

$this->menu=array(
	array('label'=>'Create LoaiSanPham', 'url'=>array('create')),
	array('label'=>'Manage LoaiSanPham', 'url'=>array('admin')),
);
?>

<h1>Loai San Phams</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
