<?php
/* @var $this ThuongHieuController */
/* @var $model ThuongHieu */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'thuong-hieu-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'TenThuongHieu'); ?>
		<?php echo $form->textField($model,'TenThuongHieu'); ?>
		<?php echo $form->error($model,'TenThuongHieu'); ?>
	</div>

	<div class="row">
		<!-- <?php echo $form->labelEx($model,'logo Thương hiệu'); ?>
		<?php echo $form->textField($model,'Logo',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'Logo'); ?> -->
                <?php
                 echo ' <label for="file">Logo thương hiệu:</label>
                      <input type="file" name="file" id="file"><br>'
                ?>

	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'XuatXu'); ?>
		<?php echo $form->textField($model,'XuatXu',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'XuatXu'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'MoTa'); ?>
		<?php echo $form->textField($model,'MoTa',array('size'=>60,'maxlength'=>1000)); ?>
		<?php echo $form->error($model,'MoTa'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->