<?php
class TopMenu extends CWidget {
 
    public $crumbs = array();
    public $delimiter = ' / ';
 
    public function run() {
        $this->render('topMenu');
    }
 
}
?>