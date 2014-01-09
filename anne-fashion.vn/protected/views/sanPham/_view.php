<?php
/* @var $this SanPhamController */
/* @var $data SanPham */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('MaSP')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->MaSP), array('view', 'id'=>$data->MaSP)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TenSP')); ?>:</b>
	<?php echo CHtml::encode($data->TenSP); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Gia')); ?>:</b>
	<?php echo CHtml::encode($data->Gia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('GioiTinh')); ?>:</b>
	<?php echo CHtml::encode($data->GioiTinh); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('MauSac')); ?>:</b>
	<?php echo CHtml::encode($data->MauSac); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('SizeAo')); ?>:</b>
	<?php echo CHtml::encode($data->SizeAo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('SizeQuan')); ?>:</b>
	<?php echo CHtml::encode($data->SizeQuan); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('SoLuong')); ?>:</b>
	<?php echo CHtml::encode($data->SoLuong); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('HinhThumb')); ?>:</b>
	<?php echo CHtml::encode($data->HinhThumb); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('GiamGia')); ?>:</b>
	<?php echo CHtml::encode($data->GiamGia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('KhuyenMai')); ?>:</b>
	<?php echo CHtml::encode($data->KhuyenMai); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('HangMoiVe')); ?>:</b>
	<?php echo CHtml::encode($data->HangMoiVe); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('loaisanpham_MaLoaiSP')); ?>:</b>
	<?php echo CHtml::encode($data->loaisanpham_MaLoaiSP); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('thuonghieu_MaThuongHieu')); ?>:</b>
	<?php echo CHtml::encode($data->thuonghieu_MaThuongHieu); ?>
	<br />

	*/ ?>

</div>