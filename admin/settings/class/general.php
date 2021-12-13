<?php
    class General{
        public function PageNameGet(){
            return basename($_SERVER['PHP_SELF'],".php"); 
        }
    }

?>