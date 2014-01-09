<?php
/* @var $this LoaiSanPhamController */
/* @var $model LoaiSanPham */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'loai-san-pham-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<!--<div class="row">
		<?php echo $form->labelEx($model,'MaLoaiSP'); ?>
		<?php echo $form->textField($model,'MaLoaiSP'); ?>
		<?php echo $form->error($model,'MaLoaiSP'); ?>
	</div>-->

	<div class="row">
		<?php echo $form->labelEx($model,'TenLoaiSP'); ?>
		<?php echo $form->textField($model,'TenLoaiSP',array('size'=>60,'maxlength'=>500)); ?>
		<?php echo $form->error($model,'TenLoaiSP'); ?>
	</div>

	<div class="row">
		<!--<?php echo $form->labelEx($model,'Parent'); ?>
		<?php echo $form->textField($model,'Parent',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'Parent'); ?>-->
                
                <?php 
                    echo $form->labelEx($model,'Parent');
                     echo  '<select name="LoaiSanPham[Parent]" id="LoaiSanPham_Parent"> ';
                     foreach ($listParent as $loaisp) 
                    {
                         $sl = "";
                         if($model->Parent == $loaisp->MaLoaiSP)
                               $sl = "selected='selected'";
                         echo "<option " .$sl." value=". $loaisp->MaLoaiSP .">".$loaisp->TenLoaiSP."</option>";
                     
                    }
                   
                    echo  '</select>';
 
                   
                
                ?>
                
                
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