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
