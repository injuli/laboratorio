<?php
/*
 CLASE PARA LA GESTION DE LOS UNIVERSITARIOS
*/
require_once "db.class.php";

class laboratorio extends database {

 /* REALIZA UNA CONSULTA A LA BASE DE DATOS EN BUSCA DE REGISTROS USUARIOS DADOS COMO
 PARAMETROS LA "CARRERA" Y LA "CANTIDAD" DE REGISTROS A MOSTRAR
 INPUT:
 $carrera | nombre de la carrera a buscar
 $limit | cantidad de registros a mostrar
 OUTPUT:
 $data | Array con los registros obtenidos, si no existen datos, su valor es una cadena vacia
 */
 function usuarios($carrera=NULL, $limit=12)
 {
  //conexion a la base de datos
  $this->conectar();
  $query = $this->consulta("SELECT * FROM universitario WHERE carrera='$carrera' ORDER BY rand() LIMIT $limit;");
      $this->disconnect();
  if($this->numero_de_filas($query) > 0) // existe -> datos correctos
  {
    //se llenan los datos en un array
    while ( $tsArray = $this->fetch_assoc($query) )
     $data[] = $tsArray;   

    return $data;
  }else
  {
   return '';
  }
 }

 function registrar(){
  if (
    isset($_POST["codigo"]) && $_POST["codigo"] != "" &&
    isset($_POST["tipousuario"]) && $_POST["tipousuario"] != "" &&
    isset($_POST["nombres"]) && $_POST["nombres"] != "" &&
    isset($_POST["apellidos"]) && $_POST["apellidos"] != "" &&
    isset($_POST["genero"]) && $_POST["genero"] != "" &&
    isset($_POST["correo"]) && $_POST["correo"] != "" &&
    isset($_POST["codigo"]) && $_POST["codigo"] != ""
) {
    $codigo      = $_POST["codigo"];
    $plan     = $_POST["tipousuario"];
    $nombres   = $_POST["nombres"];
    $apellidos  = $_POST["apellidos"];
    $genero  = $_POST["genero"];
    $correo     = $_POST["correo"];
    $codigo       = $_POST["codigo"];

        $sql = "INSERT INTO `usuario`(`codigo`, `plan`, `nombres`, `apellidos`, `genero`, `correo`,`contrasenia`)";
        $sql .= " VALUES ('".$codigo."','".$tipousuario."', '".$nombres."', '".$apellidos."', '".$genero."', '".$correo."', '".$codigo."');";
        echo $sql;
        mysqli_query($con, $sql);
    

}
else {
    echo "Datos incompletos";
}
 }

 function ingresar(){

 }

}

?>