<?php
/* @var $this TaiKhoanController */
/* @var $model TaiKhoan */

$this->breadcrumbs=array(
	'Tai Khoans'=>array('index'),
	$model->MaTaiKhoan,
);

$this->menu=array(
	array('label'=>'List TaiKhoan', 'url'=>array('index')),
	array('label'=>'Create TaiKhoan', 'url'=>array('create')),
	array('label'=>'Update TaiKhoan', 'url'=>array('update', 'id'=>$model->MaTaiKhoan)),
	array('label'=>'Delete TaiKhoan', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->MaTaiKhoan),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TaiKhoan', 'url'=>array('admin')),
);
?>

<h1>View TaiKhoan #<?php echo $model->MaTaiKhoan; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'MaTaiKhoan',
		'TenDangNhap',
		'MatKhau',
		'Fb_ID',
		'FB_Token',
		'HoTen',
		'NgaySinh',
		'CMND',
		'AnhDaiDien',
		'Quyen',
	),
)); ?>
