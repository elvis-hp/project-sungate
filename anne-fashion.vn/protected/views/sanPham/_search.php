<?php
/* @var $this SanPhamController */
/* @var $model SanPham */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'MaSP'); ?>
		<?php echo $form->textField($model,'MaSP',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'TenSP'); ?>
		<?php echo $form->textField($model,'TenSP',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Gia'); ?>
		<?php echo $form->textField($model,'Gia'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'GioiTinh'); ?>
		<?php echo $form->textField($model,'GioiTinh'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'MauSac'); ?>
		<?php echo $form->textField($model,'MauSac'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'SizeAo'); ?>
		<?php echo $form->textField($model,'SizeAo',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'SizeQuan'); ?>
		<?php echo $form->textField($model,'SizeQuan'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'SoLuong'); ?>
		<?php echo $form->textField($model,'SoLuong'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'HinhThumb'); ?>
		<?php echo $form->textField($model,'HinhThumb',array('size'=>60,'maxlength'=>300)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'GiamGia'); ?>
		<?php echo $form->textField($model,'GiamGia'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'KhuyenMai'); ?>
		<?php echo $form->textField($model,'KhuyenMai'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'HangMoiVe'); ?>
		<?php echo $form->textField($model,'HangMoiVe'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'loaisanpham_MaLoaiSP'); ?>
		<?php echo $form->textField($model,'loaisanpham_MaLoaiSP'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'thuonghieu_MaThuongHieu'); ?>
		<?php echo $form->textField($model,'thuonghieu_MaThuongHieu'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->