<?php require 'indicador.php'; ?>
<!-- Incluir Menu Parte 1 del Codigo -->
<?php include_once("../../config/menu/menu_part1.php"); ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Page Content -->
    <div id="page-wrapper">

            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Indicadores</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->

            <!-- row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <button class="btn btn-success btn-circle" data-toggle="modal" data-target="#newRegistroModal">
                                <i class="fa fa-plus"></i>
                            </button>
                            <button type="button" class="btn btn-warning btn-circle">
                                <i class="fa fa-pencil"></i>
                            </button>
                            <button class="btn btn-danger btn-circle" >
                                <i class="fa fa-times"></i>
                            </button>
                            <!--a class="btn btn-danger btn-circle"><i class="fa fa-times"></i></a-->
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-style">
                                <thead>
                                    <tr>
                                        <th>Descripción</th>
                                        <th>Valor(min) Aceptado</th>
                                        <th>Area</th>
                                        <th>Empleado</th>
                                        <th>Funcion</th>
                                        <th>Valor Esperado</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php

                                $indicador = new Indicador;
                                $indi = $indicador->getAll();

                                foreach($indi as $obj){
                                          
                                    echo '<tr class="odd gradeX">
                                            <td>'.$obj["DESCRIPCION"].'</td>
                                            <td>'.$obj["VALORMINIMOACEPTADO"].'</td>
                                            <td>'.$obj["AREANOM"].'</td>
                                            <td class="center">'.$obj["NOMBRE"].' '.$obj["APELLIDO1"].' '.$obj["APELLIDO2"].'</td>
                                            <td class="center">'.$obj["FUNCION"].'</td>
                                            <td class="center">'.$obj["VALORESPERADO"].'</td>
                                        </tr>';
                                }

                                ?>
                                </tbody>
                            </table>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->

                        

                        <!-- Modal -->
                        <div class="modal fade" id="newRegistroModal" tabindex="-1" role="dialog" aria-labelledby="newRegistroModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                        <h4 class="modal-title" id="newRegistroModalLabel">Registrar Indicador</h4>
                                    </div>
                                    <div class="modal-body">
                                        <form role="form">
                                            <div class="row">
                                                <div class="col-lg-6">                                                
                                                    <div class="form-group">
                                                        <label>Descripción</label>
                                                        <input class="form-control" placeholder="Descripción" id="DESCRIPCION" required="true">
                                                    </div>                                                
                                                </div>
                                                <div class="col-lg-6">                                                
                                                    <div class="form-group">
                                                        <label>Valor minimo Aceptado</label>
                                                        <input class="form-control" placeholder="Valor(min) aceptado" id="VALORMINIMOACEPTADO" type="number" required="true">
                                                    </div>                                                
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Area</label>
                                                        <select class="form-control" id="AREA">
                                                            <option>area 1</option>
                                                            <option>area 2</option>
                                                            <option>area 3</option>
                                                            <option>area 4</option>
                                                            <option>area 5</option>
                                                        </select>
                                                    </div>                                           
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Responsable</label>
                                                        <select class="form-control" id="EMPLEADO">
                                                            <option>nombre 1</option>
                                                            <option>nombre 2</option>
                                                            <option>nombre 3</option>
                                                            <option>nombre 4</option>
                                                            <option>nombre 5</option>
                                                        </select>
                                                    </div>                                              
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">                                                
                                                    <div class="form-group">
                                                        <label>Funcion</label>
                                                        <input class="form-control" placeholder="Funcion" id="FUNCION" required="true">
                                                    </div>                                                
                                                </div>
                                                <div class="col-lg-6">                                                
                                                    <div class="form-group">
                                                        <label>Valor Esperado</label>
                                                        <input class="form-control" placeholder="Valor esperado" id="VALORESPERADO" type="number" required="true">
                                                    </div>                                                
                                                </div>
                                            </div>
                                            <!-- /.row (nested) -->
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-success" id="btn_save_indicador">Save changes</button>
                                    </div>
                                </div>
                                <!-- /.modal-content -->
                            </div>
                            <!-- /.modal-dialog -->
                        </div>
                        <!-- /.modal -->

                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->

    </div>
    <!-- /#page-wrapper -->

    <script>
    $(function(){ 
        //evento OnClick btn_save_indicador
        $("#btn_save_indicador").on('click', function(){  
            if($("#DESCRIPCION").val()!="",
                $("#VALORMINIMOACEPTADO").val()!="",
                $("#AREA").val()!="",
                $("#EMPLEADO").val()!="",
                $("#FUNCION").val()!="",
                $("#VALORESPERADO").val()!=""){

                $.ajax({
                            url:'create.php',
                            data:{
                                    DESCRIPCION: $("#DESCRIPCION").val(),
                                    VALORMINIMOACEPTADO: $("#VALORMINIMOACEPTADO").val(),
                                    AREA: $("#AREA").val(),
                                    EMPLEADO: $("#EMPLEADO").val(),
                                    FUNCION: $("#FUNCION").val(),
                                    VALORESPERADO: $("#VALORESPERADO").val()
                                },
                            type:'post',
                            dataType:"json",
                            beforeSend: function () {
                             // $("#nombre_conductor").html("Procesando, espere por favor...");
                            },                     
                            success:function(data){

                               // alert(data);
                               if(data.existe===1){
                                   location.reload();
                               }else{
                                   alert("error");
                               }                          
                             
                            }
                });
            }else{
                alert("complete campos");

            }
        });
        
    });


    </script>

<!-- Incluir Menu Parte 2 del Codigo -->
<?php include_once("../../config/menu/menu_part2.php"); ?>