
<!--Load sp -->
			
<div class="row">						
	<div class="col-md-12">								
		<ul class="thumbnails listing-products">
			<?php 
                                
                                foreach ($listSP as $sanpham) {
                                    $this->widget('application.components.itemBox',  array('sanpham' => $sanpham));
                                }
				
			?>
		</ul>								
		<hr>
	
	</div>
</div>
	
<!-- Het load sp-->
	
