<?php
   //No need to edit this file
   include('detect.php');
   include('options.php');                           
   header("Location".$browserRedirectList[$Browser]);
?>