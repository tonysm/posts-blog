<?php
/**
 * BancoDeDados
 * 
 *  Essa classe estabelece uma conexão com o banco de dados e também 
 *  é responsável por fechar essa conexão. Nessa classe também é possível forçar uma nova conexão.
 *
 * @author Luiz Messias <tonyzrp@gmail.com>
 * 
 */
class BancoDeDados {
    /**
     * @static
     * @var BancoDeDados
     */
    private static $instance;
    /**
     * @var PDO
     */
    private $conn;
    /**
     * __construct
     * o construtor será privado para evitar que essa classe seja instanciada
     *
     * @return void
     */
    private function __construct(){
        //qualquer implementação de construtor pode ser feita aqui
        $this->conn = $this->PDOConnection();
    }
    /**
     * PDOConnect
     *
     * @return PDO
     */
    private function PDOConnection(){
        return new PDO("mysql:host=mysql.ntechlocal.com;dbname=dev", "dev", "dev");
    }
    /**
     * getInstance
     *
     * @static
     * @return BancoDeDados
     */
    public static function getInstance(){
        if(!isset(self::$instance))
            self::$instance = new self();
            
        return self::$instance;
    }
    /**
     * connect
     *
     * @return PDO
     */
    public function connect(){
        return $this->conn;
    }
    /**
     * forceReconnect
     *  esse método força um reconnect na conexão do singleton, caso seja necessário
     *
     * @return PDO
     */
    public function forceReconnect(){
        self::$instance->conn = $this->PDOConnection();
        
        return self::$instance->conn;
    }
}
