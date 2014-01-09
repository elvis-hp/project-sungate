<?php
/* @var $this ThuongHieuController */
/* @var $model ThuongHieu */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'MaThuongHieu'); ?>
		<?php echo $form->textField($model,'MaThuongHieu'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'TenThuongHieu'); ?>
		<?php echo $form->textField($model,'TenThuongHieu'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Logo'); ?>
		<?php echo $form->textField($model,'Logo',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'XuatXu'); ?>
		<?php echo $form->textField($model,'XuatXu',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'MoTa'); ?>
		<?php echo $form->textField($model,'MoTa',array('size'=>60,'maxlength'=>1000)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->