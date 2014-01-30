<?php
class MenuBar extends CWidget {
 
    public $crumbs = array();
    public $delimiter = ' / ';
 
    public function run() {
        $this->render('menuBar');
    }
 
}
?>