<?php

   require "bootstrap.php";

   $statement = "
                
                CREATE TABLE IF NOT EXISTS
                
                superhero 
                
                (
                
                id INT NOT NULL AUTO_INCREMENT,
                real_name VARCHAR(100) NOT NULL,
                hero_name VARCHAR(100) NOT NULL,
                publisher VARCHAR(100) DEFAULT NULL,
                first_appearance_date DATETIME DEFAULT NULL,
                abilities_powers VARCHAR(2000) DEFAULT NULL,
                team_affiliations VARCHAR(2000) DEFAULT NULL,
                PRIMARY KEY (id)
                
                ) ENGINE=INNODB;

                INSERT INTO superhero
                (id, real_name, hero_name, publisher, first_appearance_date, abilities_powers, team_affiliations)
                VALUES
                (1, 'Real Name 1', 'Hero 1', 'Marvel', '2021-01-01 00:00:00', 'Abilitie/Power 1', 'Team Affiliation 1'),
                (2, 'Real Name 2', 'Hero 2', 'Marvel', '2021-01-01 00:00:00', 'Abilitie/Power 2', 'Team Affiliation 2'),
                (3, 'Real Name 3', 'Hero 3', 'Marvel', '2021-01-01 00:00:00', 'Abilitie/Power 3', 'Team Affiliation 3'),
                (4, 'Real Name 4', 'Hero 4', 'Marvel', '2021-01-01 00:00:00', 'Abilitie/Power 4', 'Team Affiliation 4'),
                (5, 'Real Name 5', 'Hero 5', 'Marvel', '2021-01-01 00:00:00', 'Abilitie/Power 5', 'Team Affiliation 5'),
                (6, 'Real Name 6', 'Hero 6', 'Marvel', '2021-01-01 00:00:00', 'Abilitie/Power 6', 'Team Affiliation 6'),
                (7, 'Real Name 7', 'Hero 7', 'Marvel', '2021-01-01 00:00:00', 'Abilitie/Power 7', 'Team Affiliation 7'),
                (8, 'Real Name 8', 'Hero 8', 'Marvel', '2021-01-01 00:00:00', 'Abilitie/Power 8', 'Team Affiliation 8'),
                (9, 'Real Name 9', 'Hero 9', 'Marvel', '2021-01-01 00:00:00', 'Abilitie/Power 9', 'Team Affiliation 9');
                
                ";

   try {
      $createTable = $dbConnection->exec($statement);
      echo "Success!\n";
   } catch (\PDOException $e) {
      exit($e->getMessage());
   }

?>
