<?php

//function conectar(){
//    $user="root";
//    $pass="";
//    $server="localhost";
//    $db="oftalmologia";
//    $con = mysql_connect($server,$user,$pass) or die(mysql_error());
//    mysql_select_db('oftalmologia', $con);
//    
//    return $con;
//    
//}

class MySQL
{
    private $conexion;
    
    public function MySQL(){
      if(!isset($this->conexion)){
          
    //    $this->conexion = (mysql_connect('hoysalud.cl','hoysalud_us','@root123')) or die(mysql_error());
    //  mysql_select_db('hoysalud_bd', $this->conexion) or die(mysql_error());
        $this->conexion = (mysql_connect('localhost','root','')) or die(mysql_error());
        mysql_select_db('oftalmologia', $this->conexion) or die(mysql_error());      
//        mysql_query ("SET NAMES 'utf8'");
      }
    }
        
        public function backup_tables($tables = '*'){
//            $host= '192.168.10.97';
//            $user='Dhuanaco';
//            $pass='JFV?3KcE';
//            $name='BD_Dhuanaco_Oftalmologia';
              $host= 'localhost';
              $user='root';
              $pass='';
              $name='oftalmologia';
             
            $link = mysql_connect($host,$user,$pass);
    mysql_select_db($name,$link);
    
    //get all of the tables
    if($tables == '*')
    {
        $tables = array();
        $result = mysql_query('SHOW TABLES');
        while($row = mysql_fetch_row($result))
        {
            $tables[] = $row[0];
        }
    }
    else
    {
        $tables = is_array($tables) ? $tables : explode(',',$tables);
    }
    
    //cycle through
    foreach($tables as $table)
    {
        $result = mysql_query('SELECT * FROM '.$table);
        $num_fields = mysql_num_fields($result);
        
        $return.= 'DROP TABLE '.$table.';';
        $row2 = mysql_fetch_row(mysql_query('SHOW CREATE TABLE '.$table));
        $return.= "\n\n".$row2[1].";\n\n";
        
        for ($i = 0; $i < $num_fields; $i++) 
        {
            while($row = mysql_fetch_row($result))
            {
                $return.= 'INSERT INTO '.$table.' VALUES(';
                for($j=0; $j < $num_fields; $j++) 
                {
                    $row[$j] = addslashes($row[$j]);
                    $row[$j] = ereg_replace("\n","\\n",$row[$j]);
                    if (isset($row[$j])) { $return.= '"'.$row[$j].'"' ; } else { $return.= '""'; }
                    if ($j < ($num_fields-1)) { $return.= ','; }
                }
                $return.= ");\n";
            }
        }
        $return.="\n\n\n";
    }
    
    //save file
    //$handle = fopen('../db-backup-'.time().'-'.(md5(implode(',',$tables))).'.sql','w+');
        $handle = fopen('../../db-backup-'.date("Y-m-d-H-i-s").'.sql','w+');
    fwrite($handle,$return);
    fclose($handle);
        }


        public function consulta($consulta){
        $resultado = mysql_query($consulta, $this->conexion);
        if(!$resultado){
          echo 'Error en la Base de datos: '. mysql_error();
          exit;
        }       
        return $resultado;
    }
    
    public function fetch_array($consulta){
        return mysql_fetch_array($consulta);
    }
    
    public function num_rows($consulta){
        return mysql_num_rows($consulta);
    }
    
    public function cerrar(){
        mysql_close();
    }
    
}

?>
