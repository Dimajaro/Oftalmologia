<?PHP

require_once('../clases/cls_paciente.php');
require_once('../servicio/funciones_adicionales.php');
listarPacientes();

function listarPacientes(){
    
 
       
        $nodo = new paciente();
        unset($nodo->arrPacientes);
        
      // $nodo->listarPaciente();
         
       if(!isset($valor) || $valor == "")  {
          $valor = "";
         $option= "";  
         $valor =$_GET['valor'];
         $option=$_GET['opcion'];

         $nodo->listarPacientesearch($valor,$option);
       }
       
           
        
	?>
<div class="table-responsive">
	 <table id="myTable" class="table" >
  <tr class="header">
       <th >RUT</th>   
    <th >Nombre</th>
    <th >f.nac</th>
   
    <th>Fono</th>
   
  </tr>
            <?
           
            for($i=0;$i<count($nodo->arrPacientes);$i++){
                    
	?>
  <tr class="small">
<!--1--><td style="display: none;"> <? echo $nodo->arrPacientes[$i]['id_paciente'] ?></td> 
 <!--2 -->        <td style=""> <? echo $nodo->arrPacientes[$i]['identificador'] ?></td>   
 <!--3 -->               <td style="display: none;"> <? echo $nodo->arrPacientes[$i]['dverificador'] ?></td>   
<!--4 --> <td><? echo $nodo->arrPacientes[$i]['nombre_paciente'].' '.$nodo->arrPacientes[$i]['apellido_ppaciente'].' '.$nodo->arrPacientes[$i]['apellido_mpaciente'] ?></td>
      
<!--5--> <td style="display: none;"><? echo $nodo->arrPacientes[$i]['nombre_paciente'];?></td>
        
<!--6--><td style="display: none;"><? echo $nodo->arrPacientes[$i]['apellido_ppaciente'] ?></td>
<!--7--><td style="display: none;"><? echo $nodo->arrPacientes[$i]['apellido_mpaciente'] ?></td>
<!--8--><td style=""> <?echo cambiaf_a_normal($nodo->arrPacientes[$i]['fecha_nacimiento']); ?></td>
      
<!--9--><td style=""> <? echo $nodo->arrPacientes[$i]['fono_paciente'] ?></td>
<!--9--><td style="display: none"> <? echo $nodo->arrPacientes[$i]['nacionalidad'] ?></td>
<!--9--><td style="display: none"> <? echo $nodo->arrPacientes[$i]['profesion'] ?></td>
<!----><td ><button id="btn1" onclick="sel(this)" onfocusout="marcado(this)" data-dismiss="modal" ><span class="glyphicon glyphicon-ok"></span></button>
      
      </td> 
      
      <? 
       ?>
  </tr> 
  
 <?
			}	
                      //  echo $html;
                       // return $html;
			?>
          </table>
</div>  
    
	<?
        $nodo=null;
        
                              
	
}
?>

