<?php require 'indicador.php'; ?>
<!-- Incluir Menu Parte 1 del Codigo -->
<?php include_once("../../config/menu/menu_part1.php"); ?>
    <!-- Page Content -->
    <div id="page-wrapper">

            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Grupo de interes</h1>
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
                                        <th>Usuario</th>
                                        <th>Nombre</th>
                                        <th>Fecha Reg</th>
                                        <th>Estado</th>
                                        <th>Chat Id</th>
                                        <th>Codemp</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php

                                $indicador = new Indicador;
                                $indi = $indicador->getAll();

                                foreach($indi as $obj){
                                          
                                    echo '<tr class="odd gradeX">
                                            <td>'.$obj["USUARIO"].'</td>
                                            <td>'.$obj["NOMBRE"].'</td>
                                            <td>'.$obj["CREADO_EL"].'</td>
                                            <td class="center">'.$obj["ESTADO"].'</td>
                                            <td class="center">'.$obj["CHAT_ID"].'</td>
                                            <td class="center">'.$obj["CODEMP"].'</td>
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
                                                        <label>Descripcion</label>
                                                        <input class="form-control" placeholder="Enter text">
                                                    </div>                                                
                                                </div>
                                                <div class="col-lg-6">                                                
                                                    <div class="form-group">
                                                        <label>Valor minimo</label>
                                                        <input class="form-control" placeholder="Enter text">
                                                    </div>                                                
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Area (idarea)</label>
                                                        <select class="form-control">
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
                                                        <label>Responsable (idempleado)</label>
                                                        <select class="form-control">
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
                                                        <input class="form-control" placeholder="Enter text">
                                                    </div>                                                
                                                </div>
                                                <div class="col-lg-6">                                                
                                                    <div class="form-group">
                                                        <label>Valor ESperado</label>
                                                        <input class="form-control" placeholder="Enter text">
                                                    </div>                                                
                                                </div>
                                            </div>
                                            <!-- /.row (nested) -->
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-success">Save changes</button>
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

<!-- Incluir Menu Parte 2 del Codigo -->
<?php include_once("../../config/menu/menu_part2.php"); ?>