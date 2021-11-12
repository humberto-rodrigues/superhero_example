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
   

?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Page</title>
<meta name="generator" content="WYSIWYG Web Builder 17 - https://www.wysiwygwebbuilder.com">
<style>body {
   background-color: #FFFFFF;
   color: #000000;
   font-family: Arial;
   font-size: 13px;
   font-weight: normal;
   line-height: 1.1875;
   margin: 0;
   padding: 0;
}
a {
   color: #0000FF;
   text-decoration: underline;
}
a:visited {
   color: #800080;
}
a:active {
   color: #FF0000;
}
a:hover {
   color: #0000FF;
   text-decoration: underline;
}
input:focus,
textarea:focus,
select:focus {
   outline: none;
}
</style>
</head>
<body>

</body>
</html>