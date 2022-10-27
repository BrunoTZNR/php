<?php
    namespace App\Entity;

    use App\Db\Database;

    class Cliente{
        /**
         * Id do cliente
         * @var integer
         */
        private int $id_cliente;

        /**
         * Nome do cliente
         * @var string
         */
        private ?string $nm_cliente;

        /**
         * Telefone do cliente
         * @var string
         */
        private ?string $telefone;

        /**
         * Endereço do cliente
         * @var string
         */
        private ?string $endereco;

        /**
         * Data do cadastro do cliente
         * @var string
         */
        private ?string $dt_cadastro;

        /**
         * Define cliente
         * @param string $nm_cliente
         * @param string $telefone
         * @param string $endereco
         */
        public function __construct(?string $nm_cliente, ?string $telefone, ?string $endereco){
            $this->nm_cliente = $nm_cliente;
            $this->telefone = $telefone;
            $this->endereco = $endereco;
        }

        /**
         * Método responsável por pegar o telefone do cliente
         * @return string
         */
        public function getId_cliente(): int{
            return $this->id_cliente;
        }

        /**
         * Método responsável por pegar o nome do cliente
         * @return string
         */
        public function getNm_cliente(): ?string{
            return $this->nm_cliente;
        }

        /**
         * Método responsável por pegar o telefone do cliente
         * @return string
         */
        public function getTelefone(): ?string{
            return $this->telefone;
        }

        /**
         * Método responsável por pegar o endereço do cliente
         * @return string
         */
        public function getEndereco(): ?string{
            return $this->endereco;
        }

        /**
         * Método responsável por cadastrar um cliente no banco de dados.
         * @var string
         */
        public function cadastrar(){
            $this->dt_cadastro = date('Y-m-d H:i:s');

            $obDatabase = new Database('tb_cliente');
            $this->id_cliente = $obDatabase->insert([
                'nm_cliente'=> $this->nm_cliente,
                'telefone'=> $this->telefone,
                'endereco'=> $this->endereco,
                'dt_cadastro'=> $this->dt_cadastro
            ]);

            return true;
        }
    }