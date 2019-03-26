<?php

require_once("../conexion.php");


class atencion {
    var $id_paciente;
    var $hora;
    var $llegada;
    var $pago;
    var $fecha;
    var $accion;
    var $arrPacientes;

    var $database; //  ebc5c72026c6baf3c1efc5631139fdab    ++ Instance of class database
   
    function paciente(){
        $this->database = new MySQL();
   }
   function getId_paciente() {
       return $this->id_paciente;
   }

   function getHora() {
       return $this->hora;
   }

   function getLlegada() {
       return $this->llegada;
   }

   function getPago() {
       return $this->pago;
   }

   function getFecha() {
       return $this->fecha;
   }

   function getAccion() {
       return $this->accion;
   }
   
   function getArrPacientes(){
       return $this->arrPacientes;
   }

   function getDatabase() {
       return $this->database;
   }

   function setId_paciente($id_paciente) {
       $this->id_paciente = $id_paciente;
   }

   function setHora($hora) {
       $this->hora = $hora;
   }

   function setLlegada($llegada) {
       $this->llegada = $llegada;
   }

   function setPago($pago) {
       $this->pago = $pago;
   }

   function setFecha($fecha) {
       $this->fecha = $fecha;
   }

   function setAccion($accion) {
       $this->accion = $accion;
   }

   function setDatabase($database) {
       $this->database = $database;
   }

   function cargaTabla($fecha){
    $my = new MySQL();
    
    $sql = $my->consulta("select a.accion, a.hora, a.id_paciente, a.llegada, a.pago, a.estado, p.nombre_paciente, p.apellido_ppaciente, p.apellido_mpaciente from atencion as a join paciente as p "
            . "on a.id_paciente = p.id_paciente where a.fecha = '$fecha'"); 
 
    $i=0;
    while($datos = $my->fetch_array($sql)){
        $this->arrPacientes[$i]['id_paciente'] = $datos['id_paciente'];
        $this->arrPacientes[$i]['hora'] = $datos['hora'];
        $this->arrPacientes[$i]['llegada'] = $datos['llegada'];
        $this->arrPacientes[$i]['pago'] = $datos['pago'];    
        $this->arrPacientes[$i]['accion'] = $datos['accion'];
        $this->arrPacientes[$i]['nombre'] = $datos['nombre_paciente'];
        $this->arrPacientes[$i]['paterno'] = $datos['apellido_ppaciente'];
        $this->arrPacientes[$i]['materno'] = $datos['apellido_mpaciente'];   
        $this->arrPacientes[$i]['estado'] = $datos['estado'];  

        $i++;
    }
//    echo json_encode($this->arrPacientes); 
}   

}