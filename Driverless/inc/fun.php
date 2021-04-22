<?php
   
    function validation($a){
      $a = trim($a);
      $a = stripslashes($a);
      $a = htmlspecialchars($a);
      return $a;
    }
?>