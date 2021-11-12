<?php

class hero_api {

    private $db = null;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function findAll()
    {
        $statement = "
            SELECT 
                id, real_name, hero_name, publisher, first_appearance_date, abilities_powers, team_affiliations
            FROM
                superhero;
        ";

        try {
            $statement = $this->db->query($statement);
            $result = $statement->fetchAll(\PDO::FETCH_ASSOC);
            return $result;
        } catch (\PDOException $e) {
            exit($e->getMessage());
        }
    }

    public function find($id)
    {
        $statement = "
            SELECT 
                id, real_name, hero_name, publisher, first_appearance_date, abilities_powers, team_affiliations
            FROM
                superhero
            WHERE id = ?;
        ";

        try {
            $statement = $this->db->prepare($statement);
            $statement->execute(array($id));
            $result = $statement->fetchAll(\PDO::FETCH_ASSOC);
            return $result;
        } catch (\PDOException $e) {
            exit($e->getMessage());
        }    
    }

    public function insert(Array $input)
    {
        $statement = "
            INSERT INTO superhero 
                (real_name, hero_name, publisher, first_appearance_date, abilities_powers, team_affiliations)
            VALUES
                (:real_name, :hero_name, :publisher, :first_appearance_date, :abilities_powers, :team_affiliations);
        ";

        try {
            $statement = $this->db->prepare($statement);
            $statement->execute(array(
                'real_name' => $input['real_name'],
                'hero_name'  => $input['hero_name'],
                'publisher' => $input['publisher'] ?? null,
                'first_appearance_date' => $input['first_appearance_date'] ?? null,
                'abilities_powers' => $input['abilities_powers'] ?? null,
                'team_affiliations' => $input['team_affiliations'] ?? null,
            ));
            return $statement->rowCount();
        } catch (\PDOException $e) {
            exit($e->getMessage());
        }    
    }

    public function update($id, Array $input)
    {
        $statement = "
            UPDATE superhero
            SET 
                real_name = :real_name,
                hero_name  = :hero_name,
                publisher = :publisher,
                first_appearance_date = :first_appearance_date,
                abilities_powers = :abilities_powers,
                team_affiliations = :team_affiliations
            WHERE id = :id;
        ";

        try {
            $statement = $this->db->prepare($statement);
            $statement->execute(array(
                'id' => (int) $id,
                'real_name' => $input['real_name'],
                'hero_name'  => $input['hero_name'],
                'publisher' => $input['publisher'] ?? null,
                'first_appearance_date' => $input['first_appearance_date'] ?? null,
                'abilities_powers' => $input['abilities_powers'] ?? null,
                'team_affiliations' => $input['team_affiliations'] ?? null,
            ));
            return $statement->rowCount();
        } catch (\PDOException $e) {
            exit($e->getMessage());
        }    
    }

    public function delete($id)
    {
        $statement = "
            DELETE FROM superhero
            WHERE id = :id;
        ";

        try {
            $statement = $this->db->prepare($statement);
            $statement->execute(array('id' => $id));
            return $statement->rowCount();
        } catch (\PDOException $e) {
            exit($e->getMessage());
        }    
    }
    
    public function search($word_2_search)
    {
        $word_2_search = "%" . str_replace(" ", "%",$word_2_search) . "%";
        
        $statement = "
            SELECT 
                id, real_name, hero_name, publisher, first_appearance_date, abilities_powers, team_affiliations
            FROM
                superhero
            WHERE
            (
            (replace(real_name, ' ', '') like '$word_2_search') or 
            (replace(hero_name, ' ', '') like '$word_2_search') or 
            (replace(publisher, ' ', '') like '$word_2_search') or 
            (replace(first_appearance_date, ' ', '') like '$word_2_search') or
            (replace(abilities_powers, ' ','') like '$word_2_search') or
            (replace(team_affiliations, ' ','') like '$word_2_search')
            );
        ";

        try {
            $statement = $this->db->query($statement);
            $result = $statement->fetchAll(\PDO::FETCH_ASSOC);
            return $result;
        } catch (\PDOException $e) {
            exit($e->getMessage());
        }
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