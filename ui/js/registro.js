  function sendajaxpass(marco,ruta,data){
      
     var xhttp = new XMLHttpRequest();
     xhttp.onreadystatechange = function() {
     if (this.readyState == 4 && this.status == 200) {
              document.getElementById(marco).innerHTML = "";  
           // document.getElementById(marco).innerHTML = this.responseText;
              document.getElementById(marco).value= this.responseText;  
          //  alert(this.responseText);
      
     }else 
         ;
     };
     xhttp.open("POST",ruta , true);
     xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
     xhttp.send(data); 
  } 
  
   function showResult(str, opc) {
       if(opc== 3 ){
          if(rutvalida())   
             str=$("#inputrut").val();
          
       }    
           
       data = '?opcion='+opc+'&valor='+str;
  if (str.length==0) {
    document.getElementById("livesearch").innerHTML="";
    document.getElementById("livesearch").style.border="0px";
    return;
  }
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else {  // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("livesearch").innerHTML=this.responseText;
      document.getElementById("livesearch").style.border="1px solid #A5ACB2";
    }
    
  }
  xmlhttp.open("GET","../funcion/listadata.php"+data,true);
    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
     xmlhttp.send(); 
      if(opc== 3 ){
         verifica();
     }  
} 

function sel(obj){
    
  
  //  nuevo();
  //  $("#myBtn4").attr("disabled",true);
     var tr = $(obj).parents("tr");

      
      id_paciente = $(obj).parents("tr").children("td:nth-child(1)").text().trim();
      identificador = $(obj).parents("tr").children("td:nth-child(2)").text().trim();
      dverificador = $(obj).parents("tr").children("td:nth-child(3)").text().trim();
      nombre_paciente =     $(obj).parents("tr").children("td:nth-child(5)").text().trim();
      apellido_ppaciente =  $(obj).parents("tr").children("td:nth-child(6)").text().trim();
      apellido_mpaciente =  $(obj).parents("tr").children("td:nth-child(7)").text().trim();
      fecha_nacimiento = $(obj).parents("tr").children("td:nth-child(8)").text().trim();
      edad= calculaedad2(fecha_nacimiento,2);
      fono_paciente =       $(obj).parents("tr").children("td:nth-child(9)").text().trim();
      //fonoPaciente2 =      $(obj).parents("tr").children("td:nth-child(28)").text().trim();
      nacionalidad =       $(obj).parents("tr").children("td:nth-child(10)").text().trim();
      profesion =       $(obj).parents("tr").children("td:nth-child(11)").text().trim();
       
       
    //   fonoPaciente2 = fonoPaciente2.trim();
       
     //  $("#in_telefono2").val(fonoPaciente2);
     
      //alert(estado_primaria);
      nombre_completo= nombre_paciente+''+apellido_ppaciente+''+apellido_mpaciente;
        $("tr").focusout(function(){
        $(obj).parents("tr").removeClass();
    });
  $(obj).parents("tr").addClass("info");
       $("#id_paciente").text(id_paciente);
      $("#nombre_completo").val(nombre_completo);
//      $("#id_paciente").val(id_paciente);
    
     $("#txt_rut").val(identificador);
     $("#txt_verificador").val(dverificador);
     $("#txt_nombres").val(nombre_paciente);
     $("#txt_apellidop").val(apellido_ppaciente);
     $("#txt_apellidom").val(apellido_mpaciente);
      $("#txt_fijo").val(fono_paciente);
        $("#txt_nacionalidad").val(nacionalidad);
      $("#txt_profesio").val(profesion);
   
   $("#txt_rut").attr("disabled",true);
   $("#txt_verificador").attr("disabled",true);
  
  //      movil = $("#txt_movil").val();
    //    nacionalidad = $("#txt_nacionalidad").val();
      //  profesion = $("#txt_profesion").val();
   
   
       closemodal();
      
     
    
}
  function calculaedad2(obj, tipo){ //Reemplaza funcion calculaedad y calcula
     if(tipo == 1)  
        fecha = $(obj).val();
     else
        fecha = obj; 
 if(fecha.length > 0){   
     from = fecha.split('/');
     var dob = new Date(from[2], from[1] - 1, from[0]);
     
     var today = new Date();
     var age = Math.floor((today-dob) / (365.25 * 24 * 60 * 60 * 1000)); 
      

     $("#in-edad").val(age);
     return age;
 }else
     alert("ingresar fecha ej: dd/mm/yyyy")
 }
