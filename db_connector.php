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
   
?>
