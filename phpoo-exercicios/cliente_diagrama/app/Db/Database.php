<?php
    namespace App\Db;

    use \PDO;
    use \PDOException;

    class Database{
        /**
         * Host do banco de dados
         * @var string
         */
        const HOST = 'localhost';

        /**
         * Nome do banco de dados
         * @var string
         */
        const NAME = 'execicio_cliente';

        /**
         * Usuário do banco de dados
         * @var string
         */
        const USER = 'root';

        /**
         * Senha do banco de dados
         * @var string
         */
        const PASS = '';

        /**
         * Tabela aser manipulda
         * @var string 
         */
        public $table;

        /**
         * Conexão com o banco de dados
         * @var PDO
         */
        private PDO $connection;

        /**
         * Define a tabela e instancia a conexão
         * @param string $table
         */
        public function __construct($table = null){
            $this->table = $table;
            $this->setConnection();
        }

        /**
         * Método responsável pela conexão com banco de dados
         */
        public function setConnection(){
            try{
                $this->connection = new PDO("mysql:host=".self::HOST.";dbname=".self::NAME, self::USER, self::PASS);
                $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }catch(PDOException $e){
                die("ERROR: ".$e->getMessage());
            }
        }

        /**
         * Método responsável por executar querys dentro do bancod e dados
         * @param string $query
         * @param array $params
         * @return PDOStatement
         */
        public function execute($query, $params = []){
            try{
                $statement = $this->connection->prepare($query);
                $statement->execute($params);
                return $statement;
            }catch(PDOException $e){
                die("ERROR: ".$e->getMessage());
            }
        }

        /**
         * Método responsável por inserir dados no banco
         * @param array $values [ field => value ]
         * @return integer ID inserido
         */
        public function insert($values){
            $fields = array_keys($values);

            $binds = array_pad([],count($fields),'?');

            $query = 'INSERT INTO '.$this->table.' ('.implode(',',$fields).') VALUES ('.implode(',',$binds).')';
            
            print_r($this->table);
            var_dump(array_values($values));
            var_dump($query);
            $this->execute($query, array_values($values));

            return $this->connection->lastInsertId();
        }
    }