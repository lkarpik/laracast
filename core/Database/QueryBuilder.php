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
}