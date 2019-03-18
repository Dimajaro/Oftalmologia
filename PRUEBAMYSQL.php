<?php
require_once 'conexion.php';

 $my = new MySQL();
    $resp = $my -> consulta("SELECT Id from paciente where Id=55");   
    echo mysql_result($resp,0);
   
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

