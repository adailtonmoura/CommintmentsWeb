<?php
    class Database
    {
        private $host,
                $database,
                $username,
                $password,
                $query,
                $conection;
        
        private function configDatabase()
        {
            $this->database = 'Commitments';
            $this->host = 'localhost';
            $this->username = 'root';
            $this->password = '';
        }

        public function __construct()
        {
            try
            {
                $this->configDatabase();
                $this->connect();
                //echo "Conectado com sucesso.";
            }
            catch (Exception $e)
            {
                echo "Erro ao conectar.";
            }
        }

        public function connect()
        {
            $query = "mysql:host=" . $this->host . ";dbname=" . $this->database;
            $this->connection = new PDO ($query, $this->username, $this->password);
            return $this->connection;
        }
    }
?>
