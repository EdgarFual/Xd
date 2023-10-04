<?php
include_once 'Conexion.php';
class Usuario{
    private $acceso;
    var $objetos;//almacenar la consult
    
    public function __construct(){
        $db = new Conexion();//instan de conexcion
        $this->acceso = $db->pdo;//ponemos en nuestra var
    }

    //Metodo
    function Loguearse($user,$pass){

        //Consulta
        $sql="SELECT * FROM usuario AS u inner join tipousuario AS tu on u.Id_Tipo=tu.Id_Tipo where usuario=:user and contraseña=:pass";
        $query = $this->acceso->prepare($sql);// Prepara la consulta
        $query->execute(array(':user' => $user,':pass'=>$pass)); //Ejecutando la consulta con los valores
        $this->objetos = $query->fetchAll();// concatena consult en la var
        return $this->objetos; // Retornando  consulta 
    }
}
?>