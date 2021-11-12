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