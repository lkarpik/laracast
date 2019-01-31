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
}