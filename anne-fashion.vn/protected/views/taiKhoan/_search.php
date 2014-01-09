<?php
/* @var $this TaiKhoanController */
/* @var $model TaiKhoan */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'MaTaiKhoan'); ?>
		<?php echo $form->textField($model,'MaTaiKhoan',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'TenDangNhap'); ?>
		<?php echo $form->textField($model,'TenDangNhap',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'MatKhau'); ?>
		<?php echo $form->textField($model,'MatKhau',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Fb_ID'); ?>
		<?php echo $form->textField($model,'Fb_ID',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'FB_Token'); ?>
		<?php echo $form->textField($model,'FB_Token',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'HoTen'); ?>
		<?php echo $form->textField($model,'HoTen',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'NgaySinh'); ?>
		<?php echo $form->textField($model,'NgaySinh'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CMND'); ?>
		<?php echo $form->textArea($model,'CMND',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'AnhDaiDien'); ?>
		<?php echo $form->textField($model,'AnhDaiDien',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Quyen'); ?>
		<?php echo $form->textField($model,'Quyen'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->