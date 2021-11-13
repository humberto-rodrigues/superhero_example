<?php
   
   require 'db_connector.php';
   //use db_connector;

   $dbConnection = (new db_connector())->getConnection();
   
?>
