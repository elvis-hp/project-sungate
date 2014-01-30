<?php
class SlideBar extends CWidget {
 
    public $crumbs = array();
    public $delimiter = ' / ';
 
    public function run() {
        $this->render('slideBar');
    }
 
}
?>