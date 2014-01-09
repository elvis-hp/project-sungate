<?php
/* @var $this TaiKhoanController */
/* @var $model TaiKhoan */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'tai-khoan-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'TenDangNhap'); ?>
		<?php echo $form->textField($model,'TenDangNhap',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'TenDangNhap'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'MatKhau'); ?>
		<?php echo $form->textField($model,'MatKhau',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'MatKhau'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Fb_ID'); ?>
		<?php echo $form->textField($model,'Fb_ID',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'Fb_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'FB_Token'); ?>
		<?php echo $form->textField($model,'FB_Token',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'FB_Token'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'HoTen'); ?>
		<?php echo $form->textField($model,'HoTen',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'HoTen'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'NgaySinh'); ?>
		<?php echo $form->textField($model,'NgaySinh'); ?>
		<?php echo $form->error($model,'NgaySinh'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CMND'); ?>
		<?php echo $form->textArea($model,'CMND',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'CMND'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'AnhDaiDien'); ?>
		<?php echo $form->textField($model,'AnhDaiDien',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'AnhDaiDien'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Quyen'); ?>
		<?php echo $form->textField($model,'Quyen'); ?>
		<?php echo $form->error($model,'Quyen'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->