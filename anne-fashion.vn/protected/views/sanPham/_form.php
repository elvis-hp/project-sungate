<?php
/* @var $this SanPhamController */
/* @var $model SanPham */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'san-pham-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'TenSP'); ?>
		<?php echo $form->textField($model,'TenSP',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'TenSP'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Gia'); ?>
		<?php echo $form->textField($model,'Gia'); ?>
		<?php echo $form->error($model,'Gia'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'GioiTinh'); ?>
		<?php echo $form->textField($model,'GioiTinh'); ?>
		<?php echo $form->error($model,'GioiTinh'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'MauSac'); ?>
		<?php echo $form->textField($model,'MauSac'); ?>
		<?php echo $form->error($model,'MauSac'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'SizeAo'); ?>
		<?php echo $form->textField($model,'SizeAo',array('size'=>5,'maxlength'=>5)); ?>
		<?php echo $form->error($model,'SizeAo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'SizeQuan'); ?>
		<?php echo $form->textField($model,'SizeQuan'); ?>
		<?php echo $form->error($model,'SizeQuan'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'SoLuong'); ?>
		<?php echo $form->textField($model,'SoLuong'); ?>
		<?php echo $form->error($model,'SoLuong'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'HinhThumb'); ?>
		<?php echo $form->textField($model,'HinhThumb',array('size'=>60,'maxlength'=>300)); ?>
		<?php echo $form->error($model,'HinhThumb'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'GiamGia'); ?>
		<?php echo $form->textField($model,'GiamGia'); ?>
		<?php echo $form->error($model,'GiamGia'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'KhuyenMai'); ?>
		<?php echo $form->textField($model,'KhuyenMai'); ?>
		<?php echo $form->error($model,'KhuyenMai'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'HangMoiVe'); ?>
		<?php echo $form->textField($model,'HangMoiVe'); ?>
		<?php echo $form->error($model,'HangMoiVe'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'loaisanpham_MaLoaiSP'); ?>
		<?php echo $form->textField($model,'loaisanpham_MaLoaiSP'); ?>
		<?php echo $form->error($model,'loaisanpham_MaLoaiSP'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'thuonghieu_MaThuongHieu'); ?>
		<?php echo $form->textField($model,'thuonghieu_MaThuongHieu'); ?>
		<?php echo $form->error($model,'thuonghieu_MaThuongHieu'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->