<?php
/* @var $this ThuongHieuController */
/* @var $data ThuongHieu */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('MaThuongHieu')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->MaThuongHieu), array('view', 'id'=>$data->MaThuongHieu)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TenThuongHieu')); ?>:</b>
	<?php echo CHtml::encode($data->TenThuongHieu); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Logo')); ?>:</b>
	<?php echo CHtml::encode($data->Logo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('XuatXu')); ?>:</b>
	<?php echo CHtml::encode($data->XuatXu); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('MoTa')); ?>:</b>
	<?php echo CHtml::encode($data->MoTa); ?>
	<br />


</div>