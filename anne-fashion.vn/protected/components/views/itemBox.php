<li class="col-md-4">
    
    <?php ?>
	<div class="product-box">
                <?php if($sanpham->GiamGia != NULL) {?>
                
		<span class="sale_tag"></span>
                
                <?php }?>
                <a href="<?php echo SanPham::model()->PartURL($sanpham->TenSP) . "-detail-".$sanpham->MaSP; ?>"><img alt="" src="<?php echo Yii::app()->getBaseUrl()?>/images/thumbs/<?php echo $sanpham->HinhThumb; ?>" class="img-responsive"></a>
		<a href="product_detail.html" class="title"><?php echo $sanpham->TenSP ?></a>
		<!--<a href="#" class="category">Phasellus consequat</a>-->
		<p class="price"><?php echo $sanpham->Gia ?> (VND)</p>
	</div>
</li>  