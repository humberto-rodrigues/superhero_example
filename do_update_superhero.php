<?php

   include 'bootstrap.php';
   require 'hero_api.php';
   
   $hero_api = new hero_api($dbConnection);   

   
   if($_SERVER["REQUEST_METHOD"] == "POST"){
      $id = $_POST["id"];
      $real_name = $_POST["real_name"];
      $hero_name = $_POST["hero_name"];
      $publisher = $_POST["publisher"];
      $first_appearance_date = $_POST["first_appearance_date"];
      $abilities_powers = $_POST["abilities_powers"];
      $team_affiliations = $_POST["team_affiliations"];
   } else {
      echo "<script>top.window.location = './index.php?action=2'</script>";
   }

   $result = $hero_api->update($id, [
      'real_name' => $real_name,
      'hero_name' => $hero_name,
      'publisher' => $publisher,
      'first_appearance_date' => $first_appearance_date,
      'abilities_powers' => $abilities_powers,
      'team_affiliations' => $team_affiliations
   ]);

   if ($result == 1 or $result == 0){
      echo "<script>top.window.location = './index.php?action=4'</script>";
   } else {
      echo "<script>top.window.location = './index.php?action=2'</script>";
   }
   

?>
