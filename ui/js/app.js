 $(document).ready(function () {
    
   $("#calendar").jqxCalendar({theme: "arctic", width:250, height:250});
   $('#calendar').bind('valuechanged', function (event) {
              var date = event.args.date;
//              var date1 = date.toLocaleString().replace(' ',',');
              var date2 = date.toLocaleString("es-ES").split(' ');
              $('#log').text(date2[0]);
    });
    $("#calendar").jqxCalendar({ firstDayOfWeek: 1});
    
    $("#columnCell1calendar").text("Lu");
    $("#columnCell2calendar").text("Ma");
    $("#columnCell3calendar").text("Mi");
    $("#columnCell4calendar").text("Ju");
    $("#columnCell5calendar").text("Vi");
    $("#columnCell6calendar").text("Sa");
    $("#columnCell7calendar").text("Do");
}); 


function sendajax(marco,ruta,data){
      var xhttp;
  
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
//        alert("estoy dentro :$");
    }
  };
  xhttp.open("POST", ruta, true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send(data); 
//     var xhttp = new XMLHttpRequest();
//     xhttp.onreadystatechange = function() {
//     if (this.readyState == 4 && this.status == 200) {
////       
////       if(marco == "id_paciente"){
////           if($("#id_paciente").text() == ''){
////               //document.getElementById(marco).innerHTML = "";  
////            document.getElementById(marco).innerHTML = this.responseText;
////           }
////          //document.getElementById(marco).innerHTML = this.responseText;
////          document.getElementById("grabado").innerHTML = "Grabado";
////          $("#grabado").addClass("alert-success");
////       //  document.getElementById("lblregistro").class("alert-success");
////          //calendario(3,'');
////       } else{
////            document.getElementById(marco).innerHTML = "";  
////            document.getElementById(marco).innerHTML = this.responseText;
////       }
////         if(marco == 'compraprestacion'){
////        //   document.getElementById(marco).textContent = this.responseText.toString();
////       }
////       
////     }else 
//////         ;
////     };
////     xhttp.open("POST",ruta , true);
////     xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
////     xhttp.send(data); 
 }






