<?php

   include 'bootstrap.php';
   require 'hero_api.php';
   
   $hero_api = new hero_api($dbConnection);   

   if (filter_input(INPUT_GET, "id") <> ""){
      $id = base64_decode(filter_input(INPUT_GET, "id"));
   } else {
      echo "<script>top.window.location = './index.php?action=2'</script>";
   }

   $result = $hero_api->delete($id);

   if ($result == 1){
      echo "<script>top.window.location = './index.php?action=3'</script>";
   } else {
      echo "<script>top.window.location = './index.php?action=2'</script>";
   }
   

?>
