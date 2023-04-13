<?php
 function check_Login(){
   
    if($_SESSION&&$_SESSION['admin']){
        return $_SESSION['admin'];
    }
 }

?>