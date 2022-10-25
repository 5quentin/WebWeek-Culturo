<?php
    class typeBillets{
        public $type_billets=array();
        public function __construct($billets){
           $this->type_billets = $billets['tab_typeBillet'];
           
        }
    }

?>