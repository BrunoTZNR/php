<?php
    namespace App\Entity;

    use App\Db\Database;

    class Pj{
        /**
         * Cnpj da empresa
         * @var string
         */
        private ?string $cnpj;

        /**
         * Nome da empresa
         * @var string
         */
        private ?string $nm_empresa;

        /**
         * Define cliente
         * @param string $cnpj
         * @param string $nm_empresa
         */
        public function __construct(?string $cnpj, ?string $nm_empresa){
            $this->cnpj = $cnpj;
            $this->nm_empresa = $nm_empresa;
        }

        /**
         * Método responsável por pegar o cnpj da empresa
         * @return string
         */
        public function getCnpj(): ?string{
            return $this->cnpj;
        }

        /**
         * Método responsável por pegar o nome da empresa
         * @return string
         */
        public function getNm_empresa(): ?string{
            return $this->nm_empresa;
        }

        /**
         * Método responsável por cadastrar um cliente no banco de dados.
         * @var string
         */
        public function cadastrar($id_cliente){
            $obDatabase = new Database('tb_pj');
            $this->id_cliente = $obDatabase->insert([
                'cnpj'=> $this->cnpj,
                'nm_empresa'=> $this->nm_empresa,
                'fk_cliente'=> $id_cliente
            ]);
        }
    }