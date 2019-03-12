<?php

require_once("../conexion.php");


class paciente {
    var $rut;
    var $verificador;
    var $dverificador;
    var $nombre;
    var $paterno;
    var $materno;
    var $fecha_naciemiento;
    var $fijo;
    var $movil;
    var $nacionalidad;
    var $profesion;

     var $database; //  ebc5c72026c6baf3c1efc5631139fdab    ++ Instance of class database
   
       function paciente()
   {

    $this->database = new MySQL();

   }
   //  ebc5c72026c6baf3c1efc5631139fdab     **********************
//  ebc5c72026c6baf3c1efc5631139fdab     GETTER METHODS
//  ebc5c72026c6baf3c1efc5631139fdab     **********************  
     function getid_paciente()
   {
    return $this->id_paciente;
   }
   
     function getidentificador()
   {
    return $this->identificador;
   }
    function getdverificador()
   {
    return $this->dverificador;
   }
      function gettipo_identificador()
   {
    return $this->tipoIdentificador;
   }
      function getsexo()
   {
    return $this->sexo;
   }
      function getestado_civil()
   {
    return $this->estadoCivil;
   }
      function getestado_paciente()
   {
    return $this->estado_paciente;
   }
      function getcod_aseguradora()
   {
    return $this->cod_aseguradora;
   }
     function getid_agenda()
   {
    return $this->id_agenda;
   }
        function getid_asociado()
   {
            return $this->id_asociado;
   }
    //  ebc5c72026c6baf3c1efc5631139fdab     **********************
//  ebc5c72026c6baf3c1efc5631139fdab     SETTER METHODS
//  ebc5c72026c6baf3c1efc5631139fdab     ********************** 
     function setid_paciente($val)
   {
      $this->id_paciente = $val;
   }
        function setid_agenda($val)
   {
      $this->id_agenda = $val;
   }
    function setidentificador($val)
   {
      $this->identificador = $val;
   }
    function setdverificador($val)
   {
      $this->dverificador = $val;
   }
    
//1eliminapaciente()
//2getpacientexrut/$identificador = $this->getidentificador()
//3listcompraspacientexid/*
//4getpacientexagenda// $id = $this->getid_agenda()
//5munactualizaasociado/*
//6actualizaestado(estado, id_paciente)
//7getdatopaciente // obtiene datos paciente por su id
//8listarPacientesearch($search, $opc)//buscar opc 1:nombre, 3: rut(sin digito verificador) y 2:apellido
//9listarPaciente //listar todo los pacientes con estado > 0 (estado vigente 1 y nulo 0)
//10insertar
//11munactualizapaciente
   
   function eliminapaciente(){
        $id_paciente = $this->getid_paciente();

        $sql = "delete from paciente where id_paciente = '$id_paciente' ";
        $result = $this->database->consulta($sql);
   }
   
   //version 1.1
     function getpacientexrut(){
       $identificador = $this->getidentificador();
       $dverificador = $this->getdverificador();
       $sql = "SELECT * FROM  paciente where identificador = '$identificador' and dverficador= '$dverificador' and  p.estado_paciente > 0; ";
       $result = $this->database->consulta($sql);
       $i=0;
  
        while($datos = $this->database->fetch_array($result)){
            
            $this->arrobtPaciente[$i]['id_paciente'] =$datos['id_paciente'];                      
            $this->arrobtPaciente[$i]['identificador'] =$datos['identificador'];      
            $this->arrobtPaciente[$i]['tipo_identificador'] =$datos['tipo_identificador'];      
            $this->arrobtPaciente[$i]['nombre_paciente'] =$datos['nombre_paciente'];            
            $this->arrobtPaciente[$i]['apellido_ppaciente'] =$datos['apellido_ppaciente'];   
            $this->arrobtPaciente[$i]['apellido_mpaciente'] =$datos['apellido_mpaciente'];    
            $this->arrobtPaciente[$i]['fecha_nacimiento'] =$datos['fecha_nacimiento'];     
            $this->arrobtPaciente[$i]['fono_paciente'] =$datos['fono_paciente'];         
            $this->arrobtPaciente[$i]['email_paciente'] =$datos['email_paciente'];       
            $this->arrobtPaciente[$i]['direccion_paciente'] =$datos['direccion_paciente'];   
            $this->arrobtPaciente[$i]['sexo'] =$datos['sexo'];             
            $this->arrobtPaciente[$i]['estado_civil'] =$datos['estado_civil'];  
            $this->arrobtPaciente[$i]['observacion_paciente'] =$datos['observacion_paciente'];  
            $this->arrobtPaciente[$i]['estado_paciente'] =$datos['estado_paciente'];  
            $this->arrobtPaciente[$i]['cod_aseguradora'] =$datos['cod_aseguradora'];  
        
            $this->arrobtPaciente[$i]['fonoPaciente2'] =$datos['fonoPaciente2']; 
            $this->arrobtPaciente[$i]['region_paciente'] =$datos['region_paciente']; 
            $this->arrobtPaciente[$i]['ciudad_paciente'] =$datos['ciudad_paciente']; 
            $this->arrobtPaciente[$i]['observacion_rptpaciente'] =$datos['observacion_rptpaciente']; 
            $this->arrobtPaciente[$i]['id_asociado'] =$datos['id_asociado'];    
 
              $i++;
          }   
   }
    function listcompraspacientexid(){
       $id = $this->getid_paciente();
       $sql = "SELECT * FROM  paciente p inner join compra c on p.id_paciente = c.id_paciente where c.id_paciente = '$id' and  p.estado_paciente > 0; ";
       $result = $this->database->consulta($sql);
       $i=0;
  
        while($datos = $this->database->fetch_array($result)){
            
            $this->arrobtPaciente[$i]['id_paciente'] =$datos['id_paciente'];                      
            $this->arrobtPaciente[$i]['identificador'] =$datos['identificador'];      
            $this->arrobtPaciente[$i]['tipo_identificador'] =$datos['tipo_identificador'];      
            $this->arrobtPaciente[$i]['nombre_paciente'] =$datos['nombre_paciente'];            
            $this->arrobtPaciente[$i]['apellido_ppaciente'] =$datos['apellido_ppaciente'];   
            $this->arrobtPaciente[$i]['apellido_mpaciente'] =$datos['apellido_mpaciente'];    
            $this->arrobtPaciente[$i]['fecha_nacimiento'] =$datos['fecha_nacimiento'];     
            $this->arrobtPaciente[$i]['fono_paciente'] =$datos['fono_paciente'];         
            $this->arrobtPaciente[$i]['email_paciente'] =$datos['email_paciente'];       
            $this->arrobtPaciente[$i]['direccion_paciente'] =$datos['direccion_paciente'];   
            $this->arrobtPaciente[$i]['sexo'] =$datos['sexo'];             
            $this->arrobtPaciente[$i]['estado_civil'] =$datos['estado_civil'];  
            $this->arrobtPaciente[$i]['observacion_paciente'] =$datos['observacion_paciente'];  
            $this->arrobtPaciente[$i]['estado_paciente'] =$datos['estado_paciente'];  
            $this->arrobtPaciente[$i]['cod_aseguradora'] =$datos['cod_aseguradora'];  
        
            $this->arrobtPaciente[$i]['fonoPaciente2'] =$datos['fonoPaciente2']; 
            $this->arrobtPaciente[$i]['region_paciente'] =$datos['region_paciente']; 
            $this->arrobtPaciente[$i]['ciudad_paciente'] =$datos['ciudad_paciente']; 
            $this->arrobtPaciente[$i]['observacion_rptpaciente'] =$datos['observacion_rptpaciente']; 
            $this->arrobtPaciente[$i]['id_asociado'] =$datos['id_asociado'];    
 
              $i++;
          }   
   }
   function getpacientexagenda(){
       $id = $this->getid_agenda();
       $sql = "SELECT * FROM  paciente p inner join agenda a on p.id_paciente = a.id_paciente where a.id_agenda = '$id' and  p.estado_paciente > 0; ";
       $result = $this->database->consulta($sql);
       $i=0;
  
        while($datos = $this->database->fetch_array($result)){
            $this->id_paciente =$datos['id_paciente'];                      
            $this->identificador =$datos['identificador'];      
            $this->tipo_identificador =$datos['tipo_identificador'];      
            $this->nombre_paciente =$datos['nombre_paciente'];            
            $this->apellido_ppaciente =$datos['apellido_ppaciente'];   
            $this->apellido_mpaciente =$datos['apellido_mpaciente'];    
            $this->fecha_nacimiento =$datos['fecha_nacimiento'];     
            $this->fono_paciente =$datos['fono_paciente'];         
            $this->email_paciente =$datos['email_paciente'];       
            $this->direccion_paciente =$datos['direccion_paciente'];   
            $this->sexo =$datos['sexo'];             
            $this->estado_civil =$datos['estado_civil'];  
            $this->observacion_paciente =$datos['observacion_paciente'];  
            $this->estado_paciente =$datos['estado_paciente'];  
            $this->cod_aseguradora =$datos['cod_aseguradora'];  
        
            $this->fonoPaciente2 =$datos['fonoPaciente2']; 
            $this->region_paciente =$datos['region_paciente']; 
            $this->ciudad_paciente =$datos['ciudad_paciente']; 
            $this->observacion_rptpaciente =$datos['observacion_rptpaciente']; 
            $this->id_asociado =$datos['id_asociado']; 
 
        
 
              $i++;
          }   
   }
  
   function getdatopacientereceta($id_atencion){
  $my = new MySQL();
  $sql = $my->consulta("SELECT p.id_paciente, p.nombre_paciente, p.apellido_ppaciente,"
  . "p.identificador, p.fecha_nacimiento, p.direccion_paciente FROM paciente p "
  . "INNER JOIN agenda a ON a.id_paciente = p.id_paciente INNER JOIN atencion at"
  . " ON at.id_agenda = a.id_agenda WHERE at.id_atencion = '$id_atencion' and  p.estado_paciente > 0 ") ; 
  $i=0;
    while($datos = $my->fetch_array($sql)){
  $this->arrobtPaciente[$i]['id_paciente'] = $datos['id_paciente'];                      
    $this->arrobtPaciente[$i]['identificador'] = $datos['identificador'];      
    $this->arrobtPaciente[$i]['tipo_identificador'] = $datos['tipo_identificador'];      
    $this->arrobtPaciente[$i]['nombre_paciente'] = $datos['nombre_paciente'];            
    $this->arrobtPaciente[$i]['apellido_ppaciente'] = $datos['apellido_ppaciente'];   
    $this->arrobtPaciente[$i]['apellido_mpaciente'] = $datos['apellido_mpaciente'];    
    $this->arrobtPaciente[$i]['fecha_nacimiento'] = $datos['fecha_nacimiento'];     
    //  ebc5c72026c6baf3c1efc5631139fdab    $this->arrobtPaciente[$i]['fono_paciente'] = $datos['fono_paciente'];         
    //  ebc5c72026c6baf3c1efc5631139fdab    $this->arrobtPaciente[$i]['email_paciente'] = $datos['email_paciente'];       
    $this->arrobtPaciente[$i]['direccion_paciente'] = $datos['direccion_paciente'];   
    //  ebc5c72026c6baf3c1efc5631139fdab    $this->arrobtPaciente[$i]['sexo'] = $datos['sexo'];             
   //  ebc5c72026c6baf3c1efc5631139fdab     $this->arrobtPaciente[$i]['estado_civil'] = $datos['estado_civil'];  
   //  ebc5c72026c6baf3c1efc5631139fdab     $this->arrobtPaciente[$i]['observacion_paciente'] = $datos['observacion_paciente'];  
  //  ebc5c72026c6baf3c1efc5631139fdab      $this->arrobtPaciente[$i]['estado_paciente'] = $datos['estado_paciente'];  
   //  ebc5c72026c6baf3c1efc5631139fdab     $this->arrobtPaciente[$i]['cod_aseguradora'] = $datos['cod_aseguradora'];  
        
  //  ebc5c72026c6baf3c1efc5631139fdab      $this->arrobtPaciente[$i]['fonoPaciente2'] = $datos['fonoPaciente2']; 
  //  ebc5c72026c6baf3c1efc5631139fdab      $this->arrobtPaciente[$i]['region_paciente'] = $datos['region_paciente']; 
  //  ebc5c72026c6baf3c1efc5631139fdab      $this->arrobtPaciente[$i]['ciudad_paciente'] = $datos['ciudad_paciente']; 
  //  ebc5c72026c6baf3c1efc5631139fdab      $this->arrobtPaciente[$i]['observacion_rptpaciente'] = $datos['observacion_rptpaciente']; 
    $i++;
    }
    
}   
  function munactualizaasociado($id_asociado, $id_paciente){
        $my = new MySQL();
        $sql = $my->consulta("update paciente set id_asociado='$id_asociado' where id_paciente = '$id_paciente'") ; 
        return 11;
  }  

  function actualizaestado($estado_paciente, $id_paciente){
        $my = new MySQL();
        $sql = $my->consulta("update paciente set estado_paciente='$estado_paciente' where id_paciente = '$id_paciente'") ; 
  }
            
  function getdatopaciente($id_paciente){
  $my = new MySQL();
  //  ebc5c72026c6baf3c1efc5631139fdab    $id = $this->getid_paciente();
  
  $sql = $my->consulta("select * from paciente p left join  comuna c on p.ciudad_paciente = c.id_ciudad  where p.id_paciente = '$id_paciente'") ; 
  $i=0;
    while($datos = $my->fetch_array($sql)){
  $this->arrobtPaciente[$i]['id_paciente'] = $datos['id_paciente'];                      
    $this->arrobtPaciente[$i]['identificador'] = $datos['identificador'];      
    $this->arrobtPaciente[$i]['tipo_identificador'] = $datos['tipo_identificador'];      
    $this->arrobtPaciente[$i]['nombre_paciente'] = $datos['nombre_paciente'];            
    $this->arrobtPaciente[$i]['apellido_ppaciente'] = $datos['apellido_ppaciente'];   
    $this->arrobtPaciente[$i]['apellido_mpaciente'] = $datos['apellido_mpaciente'];    
    $this->arrobtPaciente[$i]['fecha_nacimiento'] = $datos['fecha_nacimiento'];     
    $this->arrobtPaciente[$i]['fono_paciente'] = $datos['fono_paciente'];         
    $this->arrobtPaciente[$i]['email_paciente'] = $datos['email_paciente'];       
    $this->arrobtPaciente[$i]['direccion_paciente'] = $datos['direccion_paciente'];   
    $this->arrobtPaciente[$i]['sexo'] = $datos['sexo'];             
    $this->arrobtPaciente[$i]['estado_civil'] = $datos['estado_civil'];  
    $this->arrobtPaciente[$i]['observacion_paciente'] = $datos['observacion_paciente'];  
    $this->arrobtPaciente[$i]['estado_paciente'] = $datos['estado_paciente'];  
    $this->arrobtPaciente[$i]['cod_aseguradora'] = $datos['cod_aseguradora'];  
    
    $this->arrobtPaciente[$i]['fono_paciente'] = $datos['fono_paciente'];      
    $this->arrobtPaciente[$i]['fonoPaciente2'] = $datos['fonoPaciente2']; 
    $this->arrobtPaciente[$i]['region_paciente'] = $datos['region_paciente']; 
    $this->arrobtPaciente[$i]['ciudad_paciente'] = $datos['ciudad_paciente']; 
    $this->arrobtPaciente[$i]['observacion_rptpaciente'] = $datos['observacion_rptpaciente']; 
    $this->arrobtPaciente[$i]['id_asociado'] = $datos['id_asociado']; 
    $this->arrobtPaciente[$i]['nombre_ciudad'] = $datos['nombre_ciudad']; 
    $i++;
    }
    
}   
  function listarPacientesearch($search, $opc){
  $my = new MySQL();$search = $search.'%';
  if($opc == 1)
       $sql = $my->consulta("select * from paciente where  nombre_paciente LIKE '$search' and  estado_paciente > 0 order by nombre_paciente, apellido_ppaciente,apellido_mpaciente asc") ; 
  else  if($opc == 3)
       $sql = $my->consulta("select * from paciente where  identificador LIKE '$search' and  estado_paciente > 0  order by apellido_ppaciente, nombre_paciente, apellido_mpaciente asc") ; 
  else    
       $sql = $my->consulta("select * from paciente where  apellido_ppaciente LIKE '$search' and  estado_paciente > 0  order by apellido_ppaciente, nombre_paciente, apellido_mpaciente asc") ; 
  $i=0;
    while($datos = $my->fetch_array($sql)){
    $this->arrPacientes[$i]['id_paciente'] = $datos['id_paciente'];                      
    $this->arrPacientes[$i]['identificador'] = $datos['identificador'];      
    $this->arrPacientes[$i]['tipo_identificador'] = $datos['tipo_identificador'];      
    $this->arrPacientes[$i]['nombre_paciente'] = $datos['nombre_paciente'];            
    $this->arrPacientes[$i]['apellido_ppaciente'] = $datos['apellido_ppaciente'];   
    $this->arrPacientes[$i]['apellido_mpaciente'] = $datos['apellido_mpaciente'];    
    $this->arrPacientes[$i]['fecha_nacimiento'] = $datos['fecha_nacimiento'];     
    $this->arrPacientes[$i]['fono_paciente'] = $datos['fono_paciente'];         
    $this->arrPacientes[$i]['email_paciente'] = $datos['email_paciente'];       
    $this->arrPacientes[$i]['direccion_paciente'] = $datos['direccion_paciente'];   
    $this->arrPacientes[$i]['sexo'] = $datos['sexo'];             
    $this->arrPacientes[$i]['estado_civil'] = $datos['estado_civil'];  
    $this->arrPacientes[$i]['observacion_paciente'] = $datos['observacion_paciente'];  
    $this->arrPacientes[$i]['estado_paciente'] = $datos['estado_paciente'];  
    $this->arrPacientes[$i]['cod_aseguradora'] = $datos['cod_aseguradora'];  
        
    $this->arrPacientes[$i]['fonoPaciente2'] = $datos['fonoPaciente2']; 
    $this->arrPacientes[$i]['region_paciente'] = $datos['region_paciente']; 
    $this->arrPacientes[$i]['ciudad_paciente'] = $datos['ciudad_paciente']; 
    $this->arrPacientes[$i]['observacion_rptpaciente'] = $datos['observacion_rptpaciente']; 
    $this->arrPacientes[$i]['id_asociado'] = $datos['id_asociado']; 
    
    $i++;
    }
    
}   
 function listarPaciente(){
  $my = new MySQL();
  $sql = $my->consulta("select * from paciente where estado_paciente > 0 order by nombre_paciente asc") ; 
  $i=0;
    while($datos = $my->fetch_array($sql)){
    $this->arrPacientes[$i]['id_paciente'] = $datos['id_paciente'];                      
    $this->arrPacientes[$i]['identificador'] = $datos['identificador'];      
    $this->arrPacientes[$i]['tipo_identificador'] = $datos['tipo_identificador'];      
    $this->arrPacientes[$i]['nombre_paciente'] = $datos['nombre_paciente'];            
    $this->arrPacientes[$i]['apellido_ppaciente'] = $datos['apellido_ppaciente'];   
    $this->arrPacientes[$i]['apellido_mpaciente'] = $datos['apellido_mpaciente'];    
    $this->arrPacientes[$i]['fecha_nacimiento'] = $datos['fecha_nacimiento'];     
    $this->arrPacientes[$i]['fono_paciente'] = $datos['fono_paciente'];         
    $this->arrPacientes[$i]['email_paciente'] = $datos['email_paciente'];       
    $this->arrPacientes[$i]['direccion_paciente'] = $datos['direccion_paciente'];   
    $this->arrPacientes[$i]['sexo'] = $datos['sexo'];             
    $this->arrPacientes[$i]['estado_civil'] = $datos['estado_civil'];  
    $this->arrPacientes[$i]['observacion_paciente'] = $datos['observacion_paciente'];  
    $this->arrPacientes[$i]['estado_paciente'] = $datos['estado_paciente'];  
    $this->arrPacientes[$i]['cod_aseguradora'] = $datos['cod_aseguradora'];  
    
    $this->arrPacientes[$i]['fonoPaciente2'] = $datos['fonoPaciente2']; 
    $this->arrPacientes[$i]['region_paciente'] = $datos['region_paciente']; 
    $this->arrPacientes[$i]['ciudad_paciente'] = $datos['ciudad_paciente']; 
    $this->arrPacientes[$i]['observacion_rptpaciente'] = $datos['observacion_rptpaciente']; 
    $i++;
    }
    
}
            
    
    
function insertar($rut, $verificador ,   $nombre  ,  $paterno  ,
 $materno  ,   $fecha_nacimiento  ,  $fijo  ,   $movil ,   $nacionalidad   ,
 $profesion    ){
    

    $my = new MySQL();
    $my->consulta("INSERT INTO   paciente  (   rut ,   verificador  ,   nombre  ,"
    . "   paterno  ,   materno  ,   fecha_nacimiento  ,   fijo  ,   movil,"
    . "   nacionalidad  ,   profesion  ) "
    . "VALUES ('$rut' ,'$verificador'  ,   '$nombre'  ,  '$paterno'  ,"
    . "  '$materno'  ,   '$fecha_macimiento'  ,  '$fijo'  ,   '$movil'  ,"
    . "   '$nacionalidad'  ,   '$profesion'  )");
    
  return   mysql_insert_id();

}

function munactualizapaciente( $identificador, $tipoIdentificador  ,   $nombrePaciente  ,  $apellidoPpaciente  ,
 $apellidoMpaciente  ,   $fechaNacimiento  ,  $fonoPaciente  ,   $emailPaciente  ,   $direccionPaciente  ,
 $sexo  ,   $estadoCivil, $observacion_paciente,  $id_paciente ,$cod_aseguradora,
 $fonoPaciente2, $region_paciente, $ciudad_paciente,$observacion_rptpaciente){
    
    $my = new MySQL();
    $my->consulta("UPDATE paciente SET  identificador='$identificador',  nombre_paciente='$nombrePaciente',  "
    . "   apellido_ppaciente='$apellidoPpaciente'  ,   apellido_mpaciente='$apellidoMpaciente'  ,"
    . "   fecha_nacimiento='$fechaNacimiento'  ,   fono_paciente='$fonoPaciente'  ,   email_paciente='$emailPaciente',"
    . "   direccion_paciente='$direccionPaciente'  ,   sexo='$sexo'  ,   estado_civil='$estadoCivil',"
    . " observacion_paciente='$observacion_paciente', cod_aseguradora='$cod_aseguradora'"
    . ",fonoPaciente2='$fonoPaciente2', region_paciente='$region_paciente', ciudad_paciente='$ciudad_paciente' "
    . ",observacion_rptpaciente='$observacion_rptpaciente'"
    . " where id_paciente='$id_paciente'  ");
     echo $id_paciente;
     

}

}