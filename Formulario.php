
<!DOCTYPE html>
<html  xmlns="http://www.w3.org/1999/xhtml" lang="es" xml:lang="es">
    <head>

        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
            <title>Formulario</title>
            <meta name="viewport" content="width=device-width, initial-scale=1"></meta>
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"></link>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
            <!-- elementos para datepicker jquery-1.12.4.js no compatible con bs-->
            <!-- <script src="https://code.jquery.com/jquery-1.12.4.js"></script> -->
            <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css"></link>
            <link rel="stylesheet" href="/resources/demos/style.css"></link>
            <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

            <meta http-equiv="X-UA-Compatible" content="ie=edge"></meta>
            <link type="text/css" rel="stylesheet" href="css/cssagenda.css">   </link>   
            <link type="text/css" rel="stylesheet" href="css/style.css"></link>
            <link type="text/css" rel="stylesheet" href="css/eval.css"></link>
            <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"></link>
            <link type="text/css" rel="stylesheet" href="css/tablefiltercss.css"></link>

            <script type="text/javascript" src="js/opagenda.js"></script> 
            <script type="text/javascript" src="js/tablefilterjs.js"></script>
            <script type="text/javascript" src="../js/AjaxUpload.2.0.min.js"></script>
            <script type="text/javascript" src="../js/utilidades.js"></script>
            <script type="text/javascript" src="../js/jquery.Rut.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>

            <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"></link>
            <!--keypress-->
            <script>
                function cargar(){
                    data = "";
                    marco = "marcobusquedaespecialista";
                    //ruta = "../funciones/listadobusqueda_especialista.php";
                    ruta = "../funciones/busquedaespecialista_dia.php";
                    sendajax(marco, ruta, data)
                }
                
            </script>
            
    </head>
    <body>
        <div class="container">
            <div class="panel-group">
                <div class="panel panel-info">
                    <div class="panel-heading">Busqueda de especialista</div>        
                    <div class="panel-body  ">
                        <div class="row form-group">
                            <div class="col-lg-12">
                                <div class="col-lg-2 col-md-2 col-xs-12 col-sm-3"></div>
                                <label class="col-lg-2 col-md-4 col-xs-5 col-sm-4 control-label" for="pres-nombre">Fecha inicio: </label>
                                    <div class="col-lg-2 col-md-5 col-xs-6 col-sm-3">
                                        <input type="text" id="datepicker_rpin" class="form-control"   placeholder="dd/mm/yyyy" value="<?php echo date('d/m/Y'); ?>">
                                    </div>
                                <label class="col-lg-2 col-md-4 col-xs-5 col-sm-4 control-label" for="pres-nombre">Fecha final: </label>
                                    <div class="col-lg-2 col-md-5 col-xs-6 col-sm-3">
                                        <input type="text" id="datepicker_rpfin" class="form-control"   placeholder="dd/mm/yyyy" value="<?php echo date('d/m/Y'); ?>">
                                    </div>
                            </div>
                            
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
                                
                            <div class="row form-group ">
                                <label class="col-lg-2 col-md-2 col-xs-4 col-sm-3 control-label" for="pres-nombre">Especialista 1</label>
                                
                                    <label class="col-lg-1 col-md-4 col-xs-4 col-sm-3 control-label" for="pres-nombre">Tipo especialista: </label>
                                    <div class="col-lg-2 col-md-3 col-xs-4 col-sm-3">
                                        <select  class="form-control"id="slespecialista" name="slhoras_in">
                                            <option value=""></option>
                                            <option value="0">0 </option>
                                            <option value="1">1 </option>
                                        </select>
                                    </div>
                                    
                                    
                                    
                                    <div class="col-xs-6 col-md-1 col-lg-1 col-sm-1 ">
                            <div class="form-group">
                                <label>Jornada:</label>
                            </div>
                        </div>
                        <div  class="col-xs-12 col-md-3 col-sm-4 col-lg-3">
                            
                            <div class="col-xs-4 col-md-4">
                                <div class="form-group">         
                                        <label  >Completa
                                            <input   class="radio" id="radio_turno_completa" type="radio" name="radio_turnos"  value="1" checked="checked">
                                        </label>
                                </div>
                            </div>    
                            <div class="col-xs-4 col-md-4">
                                
                                        <div class="form-group">
                                        <label  >Mañana
                                                <input  class="radio" id="radio_turno_manana" type="radio" name="radio_turnos"  value="2">
                                        </label>
                                        </div>
                            </div>
                            <div class="col-xs-4 col-md-4">
                                
                                        <div class="form-group">
                                        <label> Tarde
                                                <input  class="radio" id="radio_turno_tarde" type="radio" name="radio_turnos"  value="3">
                                        </label>
                                        </div>
                            </div>
                            
                            
<!--                                    <div class="col-lg-2 col-md-3 col-xs-12">
                                        <button type="button"  class="btn btn-info " data-toggle="modal" data-target="#myModal"
                                                onclick="cargar()"> <span class="glyphicon glyphicon-search small"></span></button>
                                    </div>-->
                        </div>
                                    <div class="col-lg-3 col-sm-6 col-md-5  col-xs-6">
                                <div class="form-group ">   
                                    <button type="button"  class="btn btn-success " id="btn_prestacion"  data-toggle="tooltip" data-placement="right" title="Aceptar" onclick="cargar()"><span class="	glyphicon glyphicon-ok"></span></button>
                                    <button type="button"  class="btn btn-default" id="btn_prestacion"  data-toggle="tooltip" data-placement="right" title="Aceptar" onclick="limpiar()"><span class="glyphicon glyphicon-file"></span></button>
                                </div>           
                            </div>
                        </div>
                        </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
                                
                            <div class="row form-group ">
                                <label class="col-lg-2 col-md-2 col-xs-4 col-sm-3 control-label" for="pres-nombre">Especialista 2</label>
                                
                                    <label class="col-lg-1 col-md-4 col-xs-4 col-sm-3 control-label" for="pres-nombre">Tipo especialista: </label>
                                    <div class="col-lg-2 col-md-3 col-xs-4 col-sm-3">
                                        <select  class="form-control"id="slespecialista2" name="slespecialista2">
                                            <option value=""></option>
                                            <option value="0">0 </option>
                                            <option value="1">1 </option>
                                        </select>
                                    </div>
                                    
                                    
                                    
                                    <div class="col-xs-6 col-md-1 col-lg-1 col-sm-1 ">
                            <div class="form-group">
                                <label>Jornada:</label>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-3 col-sm-4 col-lg-3">
                            
                            <div class="col-xs-4 col-md-4">
                                <div class="form-group">         
                                        <label  >Completa
                                            <input   class="radio" id="radio_turno_completa" type="radio" name="radio_turnos2"  value="4" checked="checked">
                                        </label>
                                </div>
                            </div>    
                            <div class="col-xs-4 col-md-4">
                                
                                        <div class="form-group">
                                        <label  >Mañana
                                                <input  class="radio" id="radio_turno_manana" type="radio" name="radio_turnos2"  value="5">
                                        </label>
                                        </div>
                            </div>
                            <div class="col-xs-4 col-md-4">
                                
                                        <div class="form-group">
                                        <label> Tarde
                                                <input  class="radio" id="radio_turno_tarde" type="radio" name="radio_turnos2"  value="6">
                                        </label>
                                        </div>
                            </div>
                            
                            
<!--                                    <div class="col-lg-2 col-md-3 col-xs-12">
                                        <button type="button"  class="btn btn-info " data-toggle="modal" data-target="#myModal"
                                                onclick="cargar()"> <span class="glyphicon glyphicon-search small"></span></button>
                                    </div>-->
                        </div>
                                    <div class="col-lg-3 col-sm-6 col-md-5  col-xs-6">
                                <div class="form-group ">   
                                    <button type="button"  class="btn btn-success " id="btn_prestacion"  data-toggle="tooltip" data-placement="right" title="Aceptar" onclick="cargar()"><span class="	glyphicon glyphicon-ok"></span></button>
                                    <button type="button"  class="btn btn-default" id="btn_prestacion"  data-toggle="tooltip" data-placement="right" title="Aceptar" onclick="limpiar()"><span class="glyphicon glyphicon-file"></span></button>
                                </div>           
                            </div>
                        </div>
                        </div>
                        </div>
                        
                          
                        <div class="row">
                            <div class="col-lg-4 col-sm-6 col-md-5  col-xs-6">
                                <div class="form-group ">   
                                    <button type="button"  class="btn btn-success " id="btn_prestacion"  data-toggle="tooltip" data-placement="right" title="Aceptar" onclick="cargar()"><span class="	glyphicon glyphicon-ok"></span></button>
                                    <button type="button"  class="btn btn-default" id="btn_prestacion"  data-toggle="tooltip" data-placement="right" title="Aceptar" onclick="limpiar()"><span class="glyphicon glyphicon-file"></span></button>
                                </div>           
                            </div>

                        </div>
                            <div id="alert" class="col-lg-8 col-md-8 col-xs-12"></div>
                    </div>
                </div>    
            </div>
        

        <div class="panel panel-default">
            <div class="row">
                <div class="col-md-12 col-xs-12">         
                    <div class="panel-body" runat="server"  style="height: 390px;  overflow-y: scroll;">
                        <div id="marcobusquedaespecialista">
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
            </div>
    </body>
