<?php
class ItemBox extends CWidget {
 
    public $sanpham = null;
 
    public function run() {
        $this->render('itemBox', array('sanpham'=>$this->sanpham));
    }
 
}
?>