<?php
/* @var $this LoaiSanPhamController */
/* @var $data LoaiSanPham */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('MaLoaiSP')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->MaLoaiSP), array('view', 'id'=>$data->MaLoaiSP)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TenLoaiSP')); ?>:</b>
	<?php echo CHtml::encode($data->TenLoaiSP); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Parent')); ?>:</b>
	<?php echo CHtml::encode($data->Parent); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('MoTa')); ?>:</b>
	<?php echo CHtml::encode($data->MoTa); ?>
	<br />


</div>