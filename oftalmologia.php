<!DOCTYPE html>
<html>
    <head>


        <title>Bootstrap Example</title>
        <meta charset="UTF-8">
        <meta name='viewport' content='width=device-width, initial-scale=1'>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
        <link rel='stylesheet' href='Vista_principal.css'>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet"/>
        <link rel="stylesheet" href="https://www.jqwidgets.com/public/jqwidgets/styles/jqx.base.css" type="text/css" />
        <link rel="stylesheet" href="https://www.jqwidgets.com/public/jqwidgets/styles/jqx.energyblue.css" type="text/css" />
        <link rel="stylesheet" href="https://www.jqwidgets.com/public/jqwidgets/styles/jqx.arctic.css" type="text/css" />
        <link rel="stylesheet" href="app.css" type="text/css" />
        <link rel="stylesheet" href="style.css" >
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">


        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>
        <script type="text/javascript" src="https://www.jqwidgets.com/public/jqwidgets/globalization/globalize.js"></script>

        <script type="text/javascript" src="calendarspanish.js"></script>
        <script type="text/javascript" src="app.js"></script>

    </head>

    <!-- The Modal -->
    <div class="modal fade" id="ModalHistoria">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Historia clinica</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->

                <div class="col-lg-12">
                    <div class="col-lg-12">
                        <label>Nombre del men</label>
                    </div>
                    <div class="col-lg-12">
                        <label>Edad</label>
                    </div>
                </div>  
                <div class="modal-body">
                    <div class="col-lg-12">
                        <div id="accordion_modal"  style="height: 250px; overflow-y: scroll;">
                            <div class="card col-lg-12">
                                <div class="card-header bg-info">
                                    <a class="card-link" data-toggle="collapse" href="#c1" style=" color:white;">
                                        Fecha atencion - accion
                                    </a>
                                </div>
                                <div id="c1" class="collapse show" data-parent="#accordion_modal">
                                    <div class="card-body">
                                        Lorem ipsum..1
                                    </div>
                                </div>
                            </div>

                            <div class="card col-lg-12">
                                <div class="card-header bg-info ">
                                    <a class="collapsed card-link" data-toggle="collapse" href="#c2" style="color: white;">
                                        Registro Paciente
                                    </a>
                                </div>
                                <div id="c2" class="collapse" data-parent="#accordion_modal">
                                    <div class="card-body"> 
                                        hola mundo..2
                                    </div>
                                </div>
                            </div> 

                            <div class="card col-lg-12">
                                <div class="card-header bg-info ">
                                    <a class="collapsed card-link" data-toggle="collapse" href="#c3" style="color: white;">
                                        Registro Paciente
                                    </a>
                                </div>
                                <div id="c3" class="collapse" data-parent="#accordion_modal">
                                    <div class="card-body"> 
                                        hola mundo..3
                                    </div>
                                </div>
                            </div> 

                            <div class="card col-lg-12">
                                <div class="card-header bg-info ">
                                    <a class="collapsed card-link" data-toggle="collapse" href="#c4" style="color: white;">
                                        Registro Paciente
                                    </a>
                                </div>
                                <div id="c4" class="collapse" data-parent="#accordion_modal">
                                    <div class="card-body"> 
                                        hola mundo..4
                                    </div>
                                </div>
                            </div> 

                            <div class="card col-lg-12">
                                <div class="card-header bg-info ">
                                    <a class="collapsed card-link" data-toggle="collapse" href="#c5" style="color: white;">
                                        Registro Paciente
                                    </a>
                                </div>
                                <div id="c5" class="collapse" data-parent="#accordion_modal">
                                    <div class="card-body"> 
                                        hola mundo..5
                                    </div>
                                </div>
                            </div> 

                            <div class="card col-lg-12">
                                <div class="card-header bg-info ">
                                    <a class="collapsed card-link" data-toggle="collapse" href="#c6" style="color: white;">
                                        Registro Paciente
                                    </a>
                                </div>
                                <div id="c6" class="collapse" data-parent="#accordion_modal">
                                    <div class="card-body"> 
                                        hola mundo..5
                                    </div>
                                </div>
                            </div> 

                            <div class="card col-lg-12">
                                <div class="card-header bg-info ">
                                    <a class="collapsed card-link" data-toggle="collapse" href="#c7" style="color: white;">
                                        Registro Paciente
                                    </a>
                                </div>
                                <div id="c7" class="collapse" data-parent="#accordion_modal">
                                    <div class="card-body"> 
                                        hola mundo..5
                                    </div>
                                </div>
                            </div> 

                        </div>
                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="ModalBusqueda" role="dialog">
        <div class="modal-dialog modal-lg">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Buscado de Pacientes</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>  
                </div>
                <div class="modal-body">
                    <!--contenido tabla modal-->


<!--<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Buscar por nombres.." title="Type in a name">-->
                    <div class="row">
                        <div class="col-xs-12 col-md-6">
                            <input type="text" id="inputnombre"   onkeyup="showResult(this.value, 1)" class="form-control"  placeholder="Buscar por nombres.." title="Digite un nombre">
                        </div>     
                        <div class="col-xs-12 col-md-6">
                            <input type="text" id="inputapellido"   onkeyup="showResult(this.value, 2)" class="form-control"  placeholder="Buscar por Primer apellido.." title="Digite un apellido">
                        </div>  
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-md-12"><div id="livesearch"></div></div>   </div>

   <!-- <p id="demo"></p>-->
 <!--  <form> <input type="text" size="30" onkeyup="showResult(this.value)"> </form>-->

                    <!-- fin contenido tabla modal-->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>
    </div> 
    <!--</div>    fin modal bs -->




    <body onload="cargaFuncion()">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-sm-5 col-lg-4">
                    <div id="accordion">
                        <div class="card">
                            <div class="card-header bg-success">
                                <a class="card-link" data-toggle="collapse" href="#collapseOne" style="color: white;">
                                    Estadística
                                </a>
                            </div>
                            <div id="collapseOne" class="collapse show" data-parent="#accordion">
                                <div class="card-body">
                                    registro 1      
                                </div>
                            </div>
                        </div>


                        <div class="card">
                            <div class="card-header bg-success ">
                                <a class="collapsed card-link" data-toggle="collapse" href="#collapseTwo" style="color: white;">
                                    Registro Paciente
                                </a>
                            </div>
                            <div id="collapseTwo" class="collapse" data-parent="#accordion">



                                <div class="card-body">  

                                    <div class="row form-group">
                                        <div class="col-12 col-sm-12 col-lg-4">
                                            <label class="control-label" for="rut">Nacional :</label> 
                                        </div>
                                        <div class="col-7 col-sm-7  col-lg-4">
                                            <label class="switch ">
                                                <input type="checkbox" id="check1"  checked>
                                                <span class="slider round"></span>
                                            </label>
                                        </div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col-12 col-sm-12 col-lg-4">
                                            <label class="control-label " for="rut">RUT :</label> 
                                        </div>

                                        <div class="col-7 col-sm-7  col-lg-4">
                                            <input type="text" id="txt_rut" class="form-control"   placeholder="9999999" pattern="\d{3,8}" required > 
                                        </div>
                                        <p > - </p>
                                        <div class="col-3 col-sm-3 col-lg-3 ">
                                            <input type="text-inline" id="txt_verificador" class="form-control" placeholder="9"   onblur="validarut()" pattern="\d|kK{1}" required >  
                                        </div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col-12 col-sm-12 col-lg-4">
                                            <label class="control-label " for="rut">Nombres :</label> 
                                        </div>
                                        <div class="col-12 col-sm-12 col-lg-8">
                                            <input type="text" id="txt_nombres" class="form-control"   placeholder="" pattern="\d{3,8}" required > 
                                        </div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col-12 col-sm-12 col-lg-4">
                                            <label class="control-label " for="rut">Apellido P :</label> 
                                        </div>
                                        <div class="col-12 col-sm-12 col-lg-8">
                                            <input type="text" id="txt_apellidop" class="form-control"   placeholder="" pattern="\d{3,8}" required > 
                                        </div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col-12 col-sm-12 col-lg-4">
                                            <label class="control-label " for="rut">Apellido M :</label> 
                                        </div>
                                        <div class="col-12 col-sm-12 col-lg-8">
                                            <input type="text" id="txt_apellidom" class="form-control"   placeholder="" pattern="\d{3,8}" required > 
                                        </div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col-12 col-sm-12 col-lg-4">
                                            <label class="control-label " for="rut">Fecha Nac :</label> 
                                        </div>
                                        <div class="col-12 col-sm-12 col-lg-8">
                                            <input type="date" id="txt_fechanac" class="form-control"   placeholder="" value="" pattern="\d{3,8}" required > 
                                        </div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col-12 col-sm-12 col-lg-4">
                                            <label class="control-label " for="rut">Fijo :</label> 
                                        </div>
                                        <div class="col-12 col-sm-12 col-lg-8">
                                            <input type="text" id="txt_fijo" class="form-control"   placeholder="" pattern="\d{3,8}" required > 
                                        </div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col-12 col-sm-12 col-lg-4">
                                            <label class="control-label " for="rut">Móvil :</label> 
                                        </div>
                                        <div class="col-12 col-sm-12 col-lg-8">
                                            <input type="text" id="txt_movil" class="form-control"   placeholder="" pattern="\d{3,8}" required > 
                                        </div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col-12 col-sm-12 col-lg-4">
                                            <label class="control-label " for="rut">Nacionalidad :</label> 
                                        </div>
                                        <div class="col-12 col-sm-12 col-lg-8">
                                            <input type="text" id="txt_nacionalidad" class="form-control"   placeholder="" pattern="\d{3,8}" required > 
                                        </div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col-12 col-sm-12 col-lg-4">
                                            <label class="control-label " for="rut">Profesión :</label> 
                                        </div>
                                        <div class="col-12 col-sm-12 col-lg-8">
                                            <input type="text" id="txt_profesion" class="form-control"   placeholder="" pattern="\d{3,8}" required > 
                                        </div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col-4 col-sm-4 col-lg-4">
                                            <button class="btn btn-info" data-toggle="modal" data-target="#ModalBusqueda"> <i class="fas fa-search"></i></button>
                                        </div>

                                        <div class="col-4 col-sm-4 col-lg-4">
                                            <button class="btn btn-info" data-toggle="modal" data-target="#ModalHistoria"> <i class="fas fa-history"></i></button>
                                        </div>

                                        <div class="row col-4 col-sm-4 col-lg-4">
                                            <button type="button" title="agregar" class="btn btn-success" onclick="data_paciente()">
                                                Agregar
                                            </button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>


                        <div class="card">
                            <div class="card-header bg-success ">
                                <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree" style="color: white;" id="fichapaciente">
                                    Ficha Paciente
                                </a>
                            </div>
                            <div id="collapseThree" class="collapse" data-parent="#accordion">
                                <div class="card-body">
                                    <div class="row form-group">
                                        <div class="col-12 col-sm-12 col-lg-4">
                                            <label class="control-label " for="rut">Motivo :</label> 
                                        </div>
                                        <div class="col-12 col-sm-12 col-lg-8">
                                            <!--<input type="text" id="txt_motivo" class="form-control"   placeholder="" pattern="\d{3,8}" required >--> 
                                            <textarea id="txt_motivo" class="form-control" rows="1"  name="comment" form="usrform" onclick="this.rows = '5';" onblur="this.rows = '1';"></textarea>
                                        </div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col-12 col-sm-12 col-lg-4">
                                            <label class="control-label " for="rut">Antecedente :</label> 
                                        </div>
                                        <div class="col-12 col-sm-12 col-lg-8">
                                            <textarea  id="txt_antecedente" class="form-control" rows="1"  name="comment" form="usrform" onfocus="this.rows = '5';" onblur="this.rows = '1';" ></textarea>
                                        </div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col-12 col-sm-12 col-lg-4">
                                            <label class="control-label " for="rut">Ex. Fisico :</label> 
                                        </div>
                                        <div class="col-12 col-sm-12 col-lg-8">
                                            <textarea  id="txt_exfisico" class="form-control" rows="1"  name="comment" form="usrform" onfocus="this.rows = '5';" onblur="this.rows = '1';"></textarea>
                                        </div>
                                    </div>

                                    <div class="row form-group">

                                        <div class="col-12 col-sm-12 col-lg-4">
                                            <label class="control-label " for="rut">Biomicroscopia </label> 
                                        </div>
                                        <div class="col-12 col-sm-12 col-lg-8">
                                            <textarea  id="txt_biomicroscopia" class="form-control" rows="1"  name="comment" form="usrform" onfocus="this.rows = '5';" onblur="this.rows = '1';"></textarea>             
                                        </div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col-12 col-sm-12  col-lg-4">
                                            <label class="control-label " for="rut">Oftalmoscopia </label> 
                                        </div>
                                        <div class="col-12 col-sm-12 col-lg-8">
                                            <textarea  id="txt_oftalmoscopia" class="form-control" rows="1"  name="comment" form="usrform" onfocus="this.rows = '5';" onblur="this.rows = '1';"></textarea>
                                        </div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col-12 col-sm-12 col-lg-4">
                                            <label class="control-label" for="rut"><p>Parametros :</p></label> 
                                        </div>
                                        <div class="col-12 col-sm-12 col-lg-8">
                                            <button class="btn btn-info btn-md btn-block"data-toggle="modal" data-target="#Mparametros"><i class='fas fa-pen'></i></button>

                                        </div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col-12 col-sm-12 col-lg-4">
                                            <label class="control-label " for="rut">Diagnostico :</label> 
                                        </div>
                                        <div class="col-12 col-sm-12 col-lg-8">
                                            <textarea  id="txt_diagnostico" class="form-control" rows="1"  name="comment" form="usrform" onfocus="this.rows = '5';" onblur="this.rows = '1';"></textarea>
                                        </div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col-12 col-sm-12 col-lg-4">
                                            <label class="control-label " for="rut">Indicacion :</label> 
                                        </div>
                                        <div class="col-12 col-sm-12 col-lg-8">
                                            <textarea  id="txt_indicacion" class="form-control" rows="1"  name="comment" form="usrform" onfocus="this.rows = '5';" onblur="this.rows = '1';"></textarea>
                                        </div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col-12 col-sm-12 col-lg-4">
                                            <label class="control-label " for="rut">Evolucion :</label> 
                                        </div>
                                        <div class="col-12 col-sm-12 col-lg-8">
                                            <textarea  id="txt_evolucion" class="form-control" rows="1"  name="comment" form="usrform" onfocus="this.rows = '5';" onblur="this.rows = '1';"></textarea>
                                        </div>
                                    </div>



                                </div>
                            </div>
                        </div>


                        <div class="card">
                            <div class="card-header bg-success">
                                <a class="card-link" data-toggle="collapse"  style="color: white;">
                                    Calendario
                                </a>
                            </div>
                            <div  class="collapse show" >
                                <div class="card-body">


                                    <center>
                                        <div id="calendar" style="">
                                        </div>
                                        <div id="log">
                                        </div>
                                    </center>




                                </div>
                            </div>
                        </div>




                    </div>

                </div> 
                <div class="col-12 col-sm-7 col-lg-8 table-responsive">
                    <div class="table-responsive" style="overflow-x: scroll">
                        <table id="Tmain" class="table table-bordered table-striped classtable"  >
                            <thead>
                                <tr>
                                    <th>Hora</th>
                                    <th>Llegada</th>
                                    <th>Nombre</th>
                                    <th>Acción</th>
                                    <th>Pago</th>
                                    <th>Funciones</th>
                                </tr>
                            </thead> 


                            <tbody>

                                <tr>

                                    <td>9:00</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>
                                        <button class="btn btn-info btn-sm" data-toggle="modal" data-target="#ModalHistoria">
                                            <i class="fa fa-history "  style='font-size:18px'></i>
                                        </button>
                                        <button class="btn btn-success btn-sm" data-toggle="collapse" data-target="#collapseThree">
                                            <i class="fas fa-user-md" style='font-size:18px'></i>
                                        </button>
                                        <button class="btn btn-danger btn-sm">
                                            <i class="fas fa-times" style='font-size:18px'></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>9:10</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>9:20</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>9:30</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>9:40</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>9:50</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>10:00</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>10:10</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>10:20</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>10:30</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>10:40</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>10:50</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>11:00</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>11:10</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>11:20</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>11:30</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>11:40</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>11:50</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>11:50</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>11:50</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>11:50</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>11:50</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>11:50</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>11:50</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>11:50</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>11:50</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>11:50</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>11:50</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            </tbody>

                        </table>

                    </div>
                </div>


            </div>
        </div>

        <!-- The Modal -->
        <div class="modal fade" id="Mnombre">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Modal Heading</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        Modal body..
                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div> 
        </div>

        <!-- The Modal -->
        <div class="modal fade" id="Mparametros">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Parámetros</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        <!--datos del paciente-->
                        <div class="row col-lg-12 col-12 col-sm-12 col-md-12 inDiv">
                            <label  id="lblNombre" class="col-lg-4 col-12 col-sm-12 col-md-12">Diego </label>
                            <label class="col-lg-4 col-12 col-sm-12 col-md-12">Nombre</label>
                            <label class="col-lg-4 col-12 col-sm-12 col-md-12">Nombre</label>
                        </div>
                        <!--primera fila de datos-->
                        <div class="row col-lg-12 col-12 col-sm-12 justify-content-center">

                            <div class="row col-lg-4 col-12 col-sm-12  sinmargen justify-content-center sinpadding">
                                <label class="col-lg-12 col-12 col-sm-12 titulo">Refracción</label>
                                <div class="col-lg-4 col-6 col-sm-4 sinpadding sinmargen">
                                    <label class="col-lg-12 col-12 col-sm-12 subt">Esf</label>
                                    <input id="reEsfOD" class="form-control col-lg-12 col-12 col-sm-12 sinpadding" placeholder="OD" type="number" step="0.01" >
                                    <input id="reEsfOI" class="form-control col-lg-12 col-12 col-sm-12 sinpadding" placeholder="OI" type="number"  step="0.01">
                                </div>
                                <div class="col-lg-4 col-6 col-sm-4 sinpadding sinmargen">
                                    <label class="col-lg-12 col-12 col-sm-12 subt">Cil</label>
                                    <input id="reCilOD"v class="form-control col-lg-12 col-12 col-sm-12 sinpadding" placeholder="OD" type="number" step="0.01" >
                                    <input id="reCilOI" class="form-control col-lg-12 col-12 col-sm-12 sinpadding" placeholder="OI" type="number"  step="0.01">
                                </div>
                                <div class="col-lg-4 col-8 col-sm-4 sinpadding sinmargen">
                                    <label class="col-lg-12 col-12 col-sm-12 subt">Eje</label>
                                    <input id="reEjeOD" class="form-control col-lg-12 col-12 col-sm-12 sinpadding" placeholder="OD" type="number" step="0.01" >
                                    <input id="reEjeOI" class="form-control col-lg-12 col-12 col-sm-12 sinpadding" placeholder="OI" type="number"  step="0.01">
                                </div>
                            </div>

                            <div class="row col-lg-4 col-12 col-sm-12 justify-content-center sinmargen sinpaddingderecho">
                                <div class="row col-lg-8 col-12 col-sm-12 sinmargen sinpadding">
                                    <label class="col-lg-12 col-12 col-sm-12 titulo">Agudeza visual</label>
                                    <div class="col-lg-6 col-6 col-sm-6 sinpadding sinmargen">
                                        <label class="col-lg-12 col-12 col-sm-12 subt">Esf</label>
                                        <input id="avEsfOD" class="form-control col-lg-12 col-12 col-sm-12 sinpadding" placeholder="OD" type="number" step="0.01" >
                                        <input id="avEsfOI" class="form-control col-lg-12 col-12 col-sm-12 sinpadding" placeholder="OI" type="number"  step="0.01">
                                    </div>

                                    <div class="col-lg-6 col-6 col-sm-6 sinpadding sinmargen">
                                        <label class="col-lg-12 col-12 col-sm-12 subt">Cil</label>
                                        <input id="avCilOD" class="form-control col-lg-12 col-12 col-sm-12 sinpadding" placeholder="OD" type="number" step="0.01" >
                                        <input id="avCilOI" class="form-control col-lg-12 col-12 col-sm-12 sinpadding" placeholder="OI" type="number"  step="0.01">
                                    </div>
                                </div>

                                <div class="row col-lg-4 col-12 col-sm-12 justify-content-center sinmargen sinpaddingderecho minpaddingizquierdo">
                                    <label class="col-lg-12 col-12 col-sm-12 titulo">Tonometria</label>
                                    <div class="row col-lg-12  col-12 col-sm-12 sinmargen sinpadding justify-content-center">
                                        <label class="col-lg-12 col-8 col-sm-8 subt">Pio</label>
                                        <input id="toPioOD" class="form-control col-lg-12 col-8 col-sm-8 sinpadding " placeholder="OD" type="number" min="0" max="80" step="1" onchange="validarPio()">
                                        <input id="toPioOI" class="form-control col-lg-12 col-8 col-sm-8 sinpadding " placeholder="OI" type="number" min="0" max="80" step="1" onchange="validarPio()">
                                    </div>                                </div>
                            </div>

                            <div class=" row col-lg-4 col-12 col-sm-12 justify-content-center sinmargen sinpaddingderecho">
                                <label class="col-lg-12 col-12 col-sm-12 titulo">Lensometria</label>
                                <div class="col-lg-4 col-6 col-sm-4 sinmargen sinpadding">
                                    <label class="col-lg-12 col-12 col-sm-12 subt">Esf</label>
                                    <input id="leEsfOD" class="form-control col-sm-12 col-lg-12 sinpadding col-12" placeholder="OD" type="number" step="0.01" >
                                    <input id="leEsfOI" class="form-control col-sm-12 col-lg-12  sinpadding col-12" placeholder="OI" type="number"  step="0.01">
                                </div>
                                <div class="col-lg-4 col-6 col-sm-4 sinmargen sinpadding">
                                    <label class="col-lg-12 col-sm-12 col-12 subt">Cil</label>
                                    <input id="leCilOD" class="form-control col-lg-12 col-sm-12 sinpadding col-12" placeholder="OD" type="number" step="0.01" >
                                    <input id="leCilOI" class="form-control col-lg-12  col-sm-12 sinpadding col-12" placeholder="OI" type="number"  step="0.01">
                                </div>
                                <div class=" row col-lg-4 col-8 col-sm-4 sinmargen sinpadding">
                                    <label class="col-lg-12 col-12 subt">Eje</label>
                                    <input id="leEjeOD" class="form-control col-lg-12 col-sm-12 sinpadding col-12" placeholder="OD" type="number" step="0.01" >
                                    <input id="leCilOI" class="form-control col-lg-12 col-sm-12 sinpadding col-12" placeholder="OI" type="number"  step="0.01">
                                </div>
                            </div>
                        </div>

                        <!--segunda fila de datos-->
                        <div class="row col-lg-12 col-12 col-sm-12 justify-content-center">
                            <div class=" row col-lg-5 col-12  col-sm-12 sinmargen sinpadding" >
                                <label class="col-lg-12 col-12  col-sm-12 titulo" >Receta lejos</label>
                                <div class="col-lg-3 col-6 col-sm-6 sinmargen sinpadding">
                                    <label class="col-lg-12 subt col-12 col-sm-12">Esf</label>
                                    <input id="rlEsfOD" class="form-control col-lg-12 col-12 col-sm-12 sinpadding" placeholder="OD" type="number" step="0.01" >
                                    <input id="rlEsfOI" class="form-control col-lg-12 col-12 col-sm-12 sinpadding" placeholder="OI" type="number"  step="0.01">
                                </div>
                                <div class="col-lg-3 col-6 col-sm-6 sinmargen sinpadding">
                                    <label class="col-lg-12 col-12 col-sm-12 subt">Cil</label>
                                    <input id="rlCilOD" class="form-control col-lg-12 col-12 col-sm-12 sinpadding" placeholder="OD" type="number" step="0.01" >
                                    <input id="rlCilOI" class="form-control col-lg-12 col-12 col-sm-12 sinpadding" placeholder="OI" type="number"  step="0.01">
                                </div>
                                <div class="col-lg-3 col-6 col-sm-6 sinmargen sinpadding">
                                    <label class="col-lg-12 col-12 col-sm-12 subt">Eje</label>
                                    <input id="rlEjeOD" class="form-control col-lg-12 col-12  col-sm-12 sinpadding" placeholder="OD" type="number" step="0.01" >
                                    <input id="rlEjeOI" class="form-control col-lg-12 col-12 col-sm-12 sinpadding" placeholder="0I" type="number"  step="0.01">
                                    <label class="col-lg-12 subt col-2 col-sm-12 sinpaddingizquierdo">Distancia Pupilar</label>
                                </div>
                                <div class="col-lg-3 col-6 col-sm-6 sinmargen sinpadding">
                                    <label class="col-lg-12 sinpadding subt col-12 col-sm-12">Ag. Visual</label>
                                    <input id="rlAvOD" class="form-control col-lg-12 sinpadding col-12 col-sm-12" placeholder="OD" type="number" onchange="validarAv()" min="0" max="1" step="0.1" >
                                    <input id="rlAvOI" class="form-control col-lg-12  sinpadding col-12 col-sm-12" placeholder="OI" type="number" onchange="validarAv()" min="0" max="1" step="0.1">
                                    <input id="rlDp" class="form-control col-lg-12 col-12 col-sm-12" placeholder="mm" type="number" step="0.01">
                                </div>

                            </div>

                            <div class="row col-lg-7 col-12 col-sm-12 sinmargen justify-content-center align-self-end sinpaddingderecho">
                                <label class="col-lg-12 titulo col-12 col-sm-12 ">Receta cerca</label>
                                <div class="col-lg-2 sinpadding col-6 col-sm-4 sinmargen">
                                    <label class="col-lg-12 col-12 col-sm-12 sinpadding subt">Adición</label>
                                    <input id="rcAdOD" class="form-control col-lg-12 col-12 col-sm-12 sinpadding" placeholder="OD" type="number" step="0.01" >
                                    <input id="rcAdOI" class="form-control col-lg-12 col-12  col-sm-12 sinpadding" placeholder="OI" type="number"  step="0.01">
                                    <label class="form-check-label col-lg-12 col-12 col-sm-12 sinpadding">
                                        <input id="rcAdIguales" type="checkbox" class="form-check-input " value="">Adiciones iguales 
                                    </label>
                                </div>
                                <div class="col-lg-2 sinpadding col-6 col-sm-4 sinmargen">
                                    <label class="col-lg-12 col-12 subt col-sm-12">Esf</label>
                                    <input id="rcEsfOD" class="form-control col-lg-12 col-12 sinpadding col-sm-12" placeholder="OD" type="number" step="0.01" >
                                    <input id="rcEsfOI" class="form-control col-lg-12 col-12 sinpadding col-sm-12" placeholder="OI" type="number"  step="0.01">
                                </div>
                                <div class="col-lg-2 sinpadding col-8 col-sm-4 sinmargen">
                                    <label class="col-lg-12 subt col-12 col-sm-12">Cil</label>
                                    <input id="rcCilOD" class="form-control col-lg-12 col-12 sinpadding col-sm-12" placeholder="OD" type="number" step="0.01" >
                                    <input id="rcCilOI" class="form-control col-lg-12 col-12 sinpadding col-sm-12" placeholder="OI" type="number"  step="0.01">
                                </div>
                                <div class="col-lg-2 sinpadding col-6 col-sm-6 sinmargen">
                                    <label class="col-lg-12 subt col-12 col-sm-12">Eje</label>
                                    <input id="rcEjeOD" class="form-control col-lg-12 col-12 sinpadding col-sm-12" placeholder="OD" type="number" step="0.01" >
                                    <input id="rcEjeOI" class="form-control col-lg-12 col-12 sinpadding col-sm-12" placeholder="OI" type="number"  step="0.01">
                                    <label class="col-lg-12 subt col-12 col-sm-12 sinpaddingizquierdo">Distancia Pupilar</label>
                                </div>
                                <div class="col-lg-2 sinpadding col-6 col-sm-6 sinmargen">
                                    <label class="col-lg-12 sinpadding subt col-12">J</label>
                                    <input id="rcJOD" class="form-control col-lg-12 col-12 sinpadding" placeholder="OD" type="number" step="0.01" >
                                    <input id="rcJOI" class="form-control col-lg-12 col-12 sinpadding" placeholder="OI" type="number"  step="0.01">
                                    <input id="rcDp" class="form-control col-lg-12 col-12 sinpadding" placeholder="mm" type="number" step="0.01">
                                </div>
                            </div>

                        </div>

                        <!--tercera fila de datos-->
                        <div class="row col-lg-12 col-12 justify-content-center">
                            <div class="col-lg-4 col-12 sinmargen">
                                <label class="col-lg-12 col-12">Características</label>
                                <div id="boxDiv" class="col-lg-12 form-check col-12 inDiv" style=" height: 175px; overflow-y: scroll;">

                                    <label class="form-check-label col-lg-12 col-12 chkoptico">
                                        <input type="checkbox" class="form-check-input" value="">Organico 
                                    </label>
                                    <label class="form-check-label col-lg-12 col-12 chkoptico">
                                        <input type="checkbox" class="form-check-input" value="">Vidrio 
                                    </label>
                                    <label class="form-check-label col-lg-12 col-12 chkoptico">
                                        <input type="checkbox" class="form-check-input" value="">Policarbonato 
                                    </label>
                                    <label class="form-check-label col-lg-12 col-12 chkoptico">
                                        <input type="checkbox" class="form-check-input" value="">UV
                                    </label>


                                    <label class="form-check-label col-12 col-lg-12 chkcontacto">
                                        <input type="checkbox" class="form-check-input" value="">Blando
                                    </label>
                                    <label class="form-check-label col-12 col-lg-12 chkcontacto">
                                        <input type="checkbox" class="form-check-input" value="">Desechables
                                    </label>
                                    <label class="form-check-label col-12 col-lg-12 chkcontacto">
                                        <input type="checkbox" class="form-check-input" value="">Uso Prolongado
                                    </label>
                                    <label class="form-check-label col-12 col-lg-12 chkcontacto">
                                        <input type="checkbox" class="form-check-input" value="">multifocal
                                    </label>
                                </div>
                            </div> 
                            <div class=" row col-lg-3  col-12 align-self-center sinmargen">
                                <div class="form-check col-lg-12 col-6 inDiv">
                                    <label class="form-check-label col-12 col-lg-12" >
                                        <input id="radioOptico" type="radio" class="form-check-input" onchange="mostraCheckbox()" name="optradio">Lentes Opticos
                                    </label>
                                </div>
                                <div class="form-check col-lg-12 col-6 inDiv">
                                    <label class="form-check-label col-12 col-lg-12" >
                                        <input id="radioContacto" type="radio" class="form-check-input" onchange="mostraCheckbox()" name="optradio">Lentes de Contacto
                                    </label>
                                </div>
                            </div>


                            <div class="row align-self-center col-lg-3 col-12 sinmargen">
                                <label class="form-check-label col-lg-12 col-6 inDiv">
                                    <input id="rlChk" type="checkbox" class="form-check-input" value="">Receta lejos 
                                </label>
                                <label class="form-check-label col-lg-12 col-6 inDiv">
                                    <input id="rcChk" type="checkbox" class="form-check-input" value="">Receta cerca
                                </label>
                            </div>
                        </div>
                    </div>



                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button class="btn btn-info">
                            <i class="material-icons">local_printshop</i>
                        </button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div> 
        </div>

    </body>

</html>

<script type="text/javascript">

    var prueba = new Array(new Array("9:20", "9:54", "Diego Jara", "accion1", "tarjeta de credito"),
            new Array("10:20", "10:24", "Diego Jara 2", "accion3", "tarjeta de debito"));

    function cargaFuncion() {
        mostraCheckbox();
        validarPio();
        validarAv();
        cargarTabla();

    }

    function cargarTabla()
    {
        var table = document.getElementById("Tmain");
        if (table != null) {
            for (var i = 1; i < table.rows.length; i++) {
                for (var j = 0; j < prueba.length; j++) {

                    if (table.rows[i].cells[0].innerHTML == prueba[j][0])
                    {
                        table.rows[i].cells[1].innerHTML = prueba[j][1];
                        table.rows[i].cells[2].innerHTML = prueba[j][2];
                        table.rows[i].cells[3].innerHTML = prueba[j][3];
                        table.rows[i].cells[4].innerHTML = prueba[j][4];
                    }


                }
                table.rows[i].cells[2].ondblclick = function () {
                    $("#Mnombre").modal();

                }
            }
        }
    }
    function modalDoc()
    {
        $('#Mparametros').modal();
    }

    function data_paciente() {
        myObj = {
            "rut": "18661818",
            "dig_verificador": "1",
            "nombres": "Diego",
            "apellidop": "Jara",
            "apellidom": "Rodriguez",
            "fechanac": "1993-10-14",
            "fijo": "123",
            "movil": "456",
            "nacionalidad": "chilena",
            "profesion": "fisico nuclear",
        }
        $('#txt_rut').val(myObj.rut);
        $('#txt_verificador').val(myObj.dig_verificador);
        $('#txt_nombres').val(myObj.nombres);
        $('#txt_apellidop').val(myObj.apellidop);
        $('#txt_apellidom').val(myObj.apellidom);
        $('#txt_fechanac').val(myObj.fechanac);
        $('#txt_fijo').val(myObj.fijo);
        $('#txt_movil').val(myObj.movil);
        $('#txt_nacionalidad').val(myObj.nacionalidad);
        $('#txt_profesion').val(myObj.profesion);

    }


    function data_ficha() {
        myObj = {
            "motivo": "es entero ciego este weon",
            "antecedente": "ya vino ayer",
            "exfisico": "esta tuerto",
            "biomicroscopia": "quiestawea",
            "oftalmoscopia": "quiestaweax2",
            "diagnostico": "que se tire al metro mejor",
            "indicacion": "despues de las 10 hay menos gente",
            "evolucion": "no hay evolucion",
            "fichapaciente": "Diego Huanaco",
        }
        $('#txt_motivo').val(myObj.motivo);
        $('#txt_antecedente').val(myObj.antecedente);
        $('#txt_exfisico').val(myObj.exfisico);
        $('#txt_biomicroscopia').val(myObj.biomicroscopia);
        $('#txt_oftalmoscopia').val(myObj.oftalmoscopia);
        $('#txt_diagnostico').val(myObj.diagnostico);
        $('#txt_indicacion').val(myObj.indicacion);
        $('#txt_evolucion').val(myObj.evolucion);
        $('#fichapaciente').text("Ficha Paciente" + " : " + myObj.fichapaciente);

    }

    $('#check1').on('click', function () {
        if ($('#check1').prop('checked')) {
            toastr.options.timeOut = 1500; // 1.5s
            toastr.options.positionClass = 'toast-top-left';
            // toatrs.options.progressBar=true;
            toastr.info("Se validará RUT");

        } else {
            toastr.options.timeOut = 1500; // 1.5s
            toastr.options.positionClass = 'toast-top-left';
            // toatrs.options.progressBar=true;
            toastr.warning("No se validará RUT");
        }



    });


    function validarut() {
        if ($('#check1').prop('checked')) {
            var rut = document.getElementById("txt_rut").value;
            var suma = 0;
            var verif = document.getElementById("txt_verificador").value;
            //var check = document.getElementById("check").value;
            //alert(rut);
            //alert(verif);
            var continuar = true;
            //alert(a);

            for (var i = 2; continuar; i++) {
                suma += (rut % 10) * i;
                rut = parseInt((rut / 10));
                //alert(i)
                //alert(rut);

                if (i == 7) {
                    i = 1;
                }
                if (rut == 0)
                    continuar = false;
                else
                    continuar = true;
            }
            //alert("suma:"+suma);
            var resto = suma % 11;
            //alert(resto);
            var dv = 11 - resto;



            if (dv == 10) {
                if (verif.toUpperCase() == 'K') {
                    //return true;
                    //alert("K");
                    toastr.options.timeOut = 1500; // 1.5s
                    toastr.options.positionClass = 'toast-top-left';
                    // toatrs.options.progressBar=true;
                    toastr.info("RUT CORRECTO");
                    return true;
                } else {
                    toastr.options.timeOut = 1500; // 1.5s
                    toastr.options.positionClass = 'toast-top-left';
                    // toatrs.options.progressBar=true;
                    toastr.error("RUT INCORRECTO");
                    //alert("Digito verificado malo");
                    return false;
                }
            } else if (dv == 11) {
                if (verif == 0) {
                    //return true;
                    toastr.options.timeOut = 1500; // 1.5s
                    toastr.options.positionClass = 'toast-top-left';
                    // toatrs.options.progressBar=true;
                    toastr.info("RUT CORRECTO");
                    //alert("0");
                    return true;
                } else {
                    toastr.options.timeOut = 1500; // 1.5s
                    toastr.options.positionClass = 'toast-top-left';
                    // toatrs.options.progressBar=true;
                    toastr.error("RUT INCORRECTO");
                    //alert("Digito verificador malo");
                    return false;
                }
            } else if (dv == verif) {
                toastr.options.timeOut = 1500; // 1.5s
                toastr.options.positionClass = 'toast-top-left';
                // toatrs.options.progressBar=true;
                toastr.info("RUT CORRECTO");
                //alert("Digito verificador correcto");
                return true;
            } else {
                toastr.options.timeOut = 1500; // 1.5s
                toastr.options.positionClass = 'toast-top-left';
                // toatrs.options.progressBar=true;
                toastr.error("RUT INCORRECTO");
                //alert("Digito verificador incorrecto");
                return false;
            }

        }


    }

    function mostraCheckbox()
    {

        if ($("#radioOptico").prop('checked'))
        {
            $('.chkoptico').show();
            $('.chkcontacto').hide();
        } else
        {
            $('.chkoptico').hide();
            $('.chkcontacto').show();
        }
    }


    function validarPio() {


        if ($('#toPioOD').val() > 80)
        {
            $('#toPioOD').val(80);
        }
        if ($('#toPioOD').val() < 0)
        {
            $('#toPioOD').val(0);
        }
        if ($('#toPioOD').val() > 20)
            document.getElementById("toPioOD").style.backgroundColor = 'rgb(250, 88, 88)';
        else
            document.getElementById("toPioOD").style.backgroundColor = 'transparent';

        if ($('#toPioOI').val() > 80)
        {
            $('#toPioOI').val(80);
        }
        if ($('#toPioOI').val() < 0)
        {
            $('#toPioOI').val(0);
        }
        if ($('#toPioOI').val() > 20)
            document.getElementById("toPioOI").style.backgroundColor = 'rgb(250, 88, 88)';
        else
            document.getElementById("toPioOI").style.backgroundColor = 'transparent';
    }

    function validarAv() {


        if ($('#rlAvOD').val() > 1)
        {
            $('#rlAvOD').val(1);
        }

        if ($('#rlAvOD').val() < 0)
        {
            $('#rlAvOD').val(0);
        }

        if ($('#rlAvOI').val() > 1)
        {
            $('#rlAvOI').val(1);
        }

        if ($('#rlAvOI').val() < 0)
        {
            $('#rlAvOI').val(0);
        }
    }
</script>