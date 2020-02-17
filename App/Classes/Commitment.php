<?php

    namespace App\Classes;

    
    class Commitment  
{
    private $titulo;
    private $local;
    private $inicio;
    private $final;
    private $descricao;


        public function __construct($titulo_p,$local_p,$inicio_p,$final_p,$descricao_p)
        {
        $this->setTitulo($titulo_p);
        $this->setLocal($local_p);
        $this->setInicio($inicio_p);
        $this->setFinal($final_p);
        $this->setDescricao($descricao_p);
        }

        public function getTitulo()
        {
            return $this->titulo;
        }

        public function getLocal()
        {
            return $this->local;
        }

        public function getInicio()
        {
            return $this->inicio;
        }

        public function getFinal()
        {
            return $this->final;
        }

        public function getDescricao()
        {
            return $this->descricao;
        }

        public function setTitulo($titulo_p)
        {
            $this->titulo = $titulo_p;
        }

        public function setLocal($local_p)
        {
            $this->local = $local_p;
        }

        public function setInicio($inicio_p)
        {
            $this->inicio = $inicio_p;
        }

        public function setFinal($final_p)
        {
            $this->final = $final_p;
        }
        
        public function setDescricao($descricao_p)
        {
            $this->descricao = $descricao_p;
        }
    }
?>

    