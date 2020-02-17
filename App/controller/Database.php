<?php
    namespace App\Controller;

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
            $this->conection =  mysqli_connect($this->host,$this->username,$this->password,$this->database);
            return $this->conection;
        }
    }
?>
