<?php

require_once("../conexion.php");
$a = new atencion();
$a->cargaTabla();

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

   function cargaTabla(){
    $my = new MySQL();
  
    $sql = $my->consulta("select * from atencion") ; 
 
    $i=0;
    while($datos = $my->fetch_array($sql)){
        $this->arrPacientes[$i]['id_paciente'] = $datos['id_paciente'];                      
        $this->arrPacientes[$i]['hora'] = $datos['hora'];      
        $this->arrPacientes[$i]['llegada'] = $datos['llegada'];      
        $this->arrPacientes[$i]['pago'] = $datos['pago'];            
        $this->arrPacientes[$i]['fecha'] = $datos['fecha'];   
        $this->arrPacientes[$i]['accion'] = $datos['accion'];    

        $i++;
    }
//    echo json_encode($this->arrPacientes); 
}   

}