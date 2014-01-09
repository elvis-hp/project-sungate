<?php
/* @var $this LoaiSanPhamController */
/* @var $model LoaiSanPham */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'MaLoaiSP'); ?>
		<?php echo $form->textField($model,'MaLoaiSP'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'TenLoaiSP'); ?>
		<?php echo $form->textField($model,'TenLoaiSP',array('size'=>60,'maxlength'=>500)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Parent'); ?>
		<?php echo $form->textField($model,'Parent',array('size'=>20,'maxlength'=>20)); ?>
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