<?php
    namespace App\Controller;

use PDO;

class Database
    {
        private $host,
                $database,
                $username,
                $password,
                $conection;
        
        private function configDatabase()
        {
            $this->database = 'Commitments';
            $this->host = 'localhost';
            $this->username = 'root';
            $this->password = 'MyPassword';
        }

        public function __construct()
        {
            
                $this->configDatabase();
                $this->connect();
            
        }

        public function connect()
        {
            $this->conection = new PDO("mysql:host={$this->host};dbname={$this->database}","$this->username",$this->password);
            return $this->conection;
        }
    }
?>
