<?php
require_once('../clases/cls_paciente.php');
require_once('funciones_adicionales.php');
//echo "datos.php"
if($_POST['funcion']== 'minInsertPaciente'){
     minInsertPaciente();
}else{
    echo("else");   
}
   





function minInsertPaciente(){
   // echo "Paciente registrado..";
    
    unset($nodo);
    $nodo = new paciente();
    $fecha_nacimiento = cambiaf_a_mysql($_POST['fechanacimiento']);
    $nodo->insertar($_POST['rut'],$_POST['verificador'],$_POST['nombre'],$_POST['paterno'],$_POST['materno'],$fecha_naciemiento,
            $_POST['fijo'],$_POST['movil'],$_POST['nacionalidad'],$_POST['profesion']);
//    echo $lasid;
    //return $lasid;
}
?>

  