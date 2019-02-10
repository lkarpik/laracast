<?php

class QueryBuilder 
{
    protected $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function getAll($table, $class)
    {
        $query = $this->pdo->prepare("SELECT * FROM {$table}");
        $query->execute();
        return $results = $query->fetchAll(PDO::FETCH_CLASS, $class);
    }

    public function insertTask($table, $description, $completed, $date)
    {
        try{
            $query = $this->pdo->prepare("INSERT into {$table} (description, completed, date) VALUES (
                :description,
                :completed,
                :date
            )");
            $query->bindParam(':description', $description, PDO::PARAM_STR);
            $query->bindParam(':completed', $completed, PDO::PARAM_BOOL);
            $query->bindParam(':date', $date, PDO::PARAM_STR);
            $query->execute();
            return true;
        } catch (PDOException $e) {
            return false;
        }
    }

    public function insert($table, array $data)
    {
        // insert into ~users~ %s ~(name, email)~ (%s) values ~(:name, :email)~ (%s)

        // $query->execute(['name'=>'First', 'email'=>'First@gmail.com'])
        $query = sprintf("INSERT INTO %s (%s) VALUES (%s)", $table,
        implode(', ', array_keys($data)),
        ':'.implode(', :', array_keys($data)));
        try {
            $statement = $this->pdo->prepare($query); 
            $statement->execute($data);
            return true;
        } catch (PDOException $e) {
            die('Somenthing went wrong. Error:'.$e->getMessage());
        }
    }
    
}