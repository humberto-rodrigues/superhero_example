<?php
   
   class db_connector {

      private $dbConnection = null;

      public function __construct()
      {

         $host = "your_host";
         $port = "3306";
         $db   = "db_name";
         $user = "db_user";
         $pass = "db_pass";

         $options = [
                     \PDO::ATTR_ERRMODE            => \PDO::ERRMODE_EXCEPTION,
                     \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
                     \PDO::ATTR_EMULATE_PREPARES   => false,
                    ];

         try {
             $this->dbConnection = new \PDO(
                 "mysql:host=$host;port=$port;charset=utf8mb4;dbname=$db",
                 $user,
                 $pass,
                 $options
             );
         } catch (\PDOException $e) {
             exit($e->getMessage());
         }
      }

      public function getConnection()
      {
          return $this->dbConnection;
      }
   
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
