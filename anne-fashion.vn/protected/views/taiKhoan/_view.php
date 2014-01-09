<?php
/* @var $this TaiKhoanController */
/* @var $data TaiKhoan */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('MaTaiKhoan')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->MaTaiKhoan), array('view', 'id'=>$data->MaTaiKhoan)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TenDangNhap')); ?>:</b>
	<?php echo CHtml::encode($data->TenDangNhap); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('MatKhau')); ?>:</b>
	<?php echo CHtml::encode($data->MatKhau); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Fb_ID')); ?>:</b>
	<?php echo CHtml::encode($data->Fb_ID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FB_Token')); ?>:</b>
	<?php echo CHtml::encode($data->FB_Token); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('HoTen')); ?>:</b>
	<?php echo CHtml::encode($data->HoTen); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NgaySinh')); ?>:</b>
	<?php echo CHtml::encode($data->NgaySinh); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('CMND')); ?>:</b>
	<?php echo CHtml::encode($data->CMND); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('AnhDaiDien')); ?>:</b>
	<?php echo CHtml::encode($data->AnhDaiDien); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Quyen')); ?>:</b>
	<?php echo CHtml::encode($data->Quyen); ?>
	<br />

	*/ ?>

</div>