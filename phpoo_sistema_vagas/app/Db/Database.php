<?php
    namespace App\db;

    use \PDO;
    use \PDOException;

    class Database{
        /**
         * Host de conexão com o banco de dados
         * @var string
         */
        const HOST = 'localhost';

        /**
         * Nome do banco de dados
         * @var string
         */
        const NAME = 'wdev_vagas';

        /**
         * Usuário do banco e dados
         * @var string
         */
        const USER = 'root';

        /**
         * Senha de acesso do banco de dados
         * @var string
         */
        const PASS = '';

        /**
         * Nome da tabela a ser manipulada
         * @var string
         */
        private $table;

        /**
         * Instancia de conexão com o banco de dados
         * @var \PDO
         */
        private $connection;

        /**
         * Define a tabela e instancia e conexão
         * @param string $table
         */
        public function __construct($table = null){
            $this->table = $table;
            $this->setConnection();
        }

        /**
         * Método responsável por criar uam conexão com o banco de dados
         */
        private function setConnection(){
            try{
                $this->connection = new PDO("mysql:host=".self::HOST.";dbname=".self::NAME,self::USER,self::PASS);
                $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }catch(PDOException $e){
                die('ERROR: '.$e->getMessage());
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
                die('ERROR: '.$e->getMessage());
            }
        }

        /**
         * Método responsável por inserir dados no banco
         * @param array $values [ field => value ]
         * @return integer ID inserido
         */
        public function insert($values){
            //dados da query
            $fields = array_keys($values);
            //cria um novo array tomandoa qtd de indices a contagem de $fields e preenchenco com o padrao '?';
            $binds = array_pad([],count($fields),'?');

            //monta a query
            $query = 'INSERT INTO '.$this->table.' ('.implode(',',$fields).') VALUES ('.implode(',',$binds).')';

            //executa o insert
            $this->execute($query,array_values($values));

            //retorna o id inserido
            return $this->connection->lastInsertId();
        }

        /**
         * Método responsável por executar uma consulta no banco de dados
         * @param string $where
         * @param string $order
         * @param string $limit
         * @param string $fields
         * @return PDOStatement
         */
        public function select($where=null, $order=null, $limit=null, $fields = '*'){
            //dados da query
            $where = $where==null ? '' : 'WHERE '.$where;
            $order = $order==null ? '' : 'ORDER BY '.$order;
            $limit = $limit==null ? '' : 'LIMIT '.$limit;

            //monta query
            $query = 'SELECT '.$fields.' FROM '.$this->table.' '.$where.' '.$order.' '.$limit;

            //executa a query
            return $this->execute($query);
        }

        /**
         * Método responsável por executar atualizações no bnco de dados
         * @param string $where
         * @param array $values [ field = > value ]
         * @return boolean
         */
        public function update($where, $values){
            //dados da query
            $fields = array_keys($values);

            //monta query
            $query='UPDATE '.$this->table.' SET '.implode('=?,',$fields).'=? WHERE '.$where;
            
            //executar a query
            $this->execute($query, array_values($values));

            //retorna sucesso
            return true;
        }

        /**
         * Método responsável por excluir dados do banco de dados
         * @param string $where
         * @return boolean
         */
        public function delete($where){
            //monta a querya
            $query='DELETE FROM '.$this->table.' WHERE '.$where;

            //executa a query
            $this->execute($query);

            //retorna sucesso
            return true;
        }
    }