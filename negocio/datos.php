<?php
require_once('../clases/cls_paciente.php');
require_once('funciones_adicionales.php');
//echo "datos.php"
if($_POST['funcion']== 'minInsertPaciente'){
     minInsertPaciente();
}else{
//    echo("else");   
}
   


function minInsertPaciente(){
   // echo "Paciente registrado..";
    
    unset($nodo);
    $nodo = new paciente();
////    $fecha_nacimiento = $_POST['fecha_nacimiento'];
//    $nodo->insertar($_POST['rut'],$_POST['verificador'],$_POST['nombre'],$_POST['paterno'],$_POST['materno'],$_POST['fecha_nacimiento'],
//            $_POST['fijo'],$_POST['movil'],$_POST['nacionalidad'],$_POST['profesion']);
////    echo $lasid;
    //return $lasid;
    $resp = $nodo->buscarId();
    echo $resp;
//    echo $id;
//    echo $id;
    //echo 1;
}
?>

  