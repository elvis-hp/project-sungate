<?php
class ItemBox extends CWidget {
 
    public $crumbs = array();
    public $delimiter = ' / ';
 
    public function run() {
        $this->render('itemBox');
    }
 
}
?>