<?php
//conectando a la bd
class Conexion{
    private $servidor = "localhost";
    private $db = "bdinventario2";
    private $puerto = 3306;
    private $charset="utf8";
    private $usuario="root";
    private $contrasena="";
    public $pdo = null;//retorna al moment instanciada
    //declaracion de PDO que son como metdos.
    private $atributos=[PDO::ATTR_CASE=>PDO::CASE_LOWER,PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION,PDO::ATTR_ORACLE_NULLS=>PDO::NULL_EMPTY_STRING,PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_OBJ];
    function __construct(){//concatenacion var con bd
        try {
            // instancia de PDO con los detalles de conexión proporcionados
            $this->pdo= new PDO("mysql:dbname={$this->db};host={$this->servidor};port={$this->puerto};charset={$this->charset}",$this->usuario,$this->contrasena,$this->atributos);
        } catch (PDOException $e) {
            // sms error conex
            echo "Error de conexión: " . $e->getMessage();//dps crear un error de conex para la UI
        }
    }
}
?>