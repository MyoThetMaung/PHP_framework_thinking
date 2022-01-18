<?php 

    class QueryBuilder{
        protected $pdo;
        public function __construct($pdo){
            $this->pdo = $pdo;
        }
        public function selectAll($table){
            $statement = $this->pdo->prepare("SELECT * FROM $table");
            $statement->execute();
            return $statement-> fetchAll(PDO::FETCH_ASSOC);
        }
        
        public function insert($value, $table){
            $statement = $this->pdo->prepare("INSERT INTO $table(name) VALUES('$value')");
            $statement->execute();
        }
    
    }