<?php
    namespace App\Entity;

    class Pf{
        /**
         * Cpf do cliente
         * @var string
         */
        private ?string $cpf;

        /**
         * Método responsável por definir o cpf do cliente
         * @param string $cpf
         */
        public function setCpf(?string $cpf){
            $this->cpf = $cpf;
        }

        /**
         * Método responsável por pegar o cpf do cliente
         * @return string
         */
        public function getCpf(): ?string{
            return $this->cpf;
        }
    }