<?php include 'header.php'; ?>

<!-- Sidebar Menu -->
<?php include 'sidebarmenu.php'; ?>
<!-- /.sidebar-menu -->
</div>
<!-- /.sidebar -->
</aside>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Reportes</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Blank Page</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-6">
                <div class="form-group">
                    <form class="form-inline">
                        <div class="form-group">
                            <label for="">Fecha Inicio:</label>
                            <input type="date" name="fechaIni" id="fechaIni" class="form-control" placeholder="Fecha Inicio" aria-describedby="helpId">
                        </div>
                        <div class="form-group">
                            <label for="">Fecha Fin:</label>
                            <input type="date" name="fechaFin" id="fechaFin" class="form-control" placeholder="Fecha Final" aria-describedby="helpId">
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-3">
                <div class="form-group">
                    <div class="form-group">
                        <select class="form-control" name="socio" id="socio">
                            <option value="0">--Elegir Socio--</option>
                            <?php foreach ($usuarios as $usuario) : ?>
                                <option value="<?php echo $usuario['idUsuario']; ?>"><?php echo $usuario['nombre']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <a name="buscar" id="buscar" class="btn btn-primary" href="<?php echo base_url().'filtrar'?>" role="button">Buscar</a>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title"></h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Nombre</th>
                                    <th>Apellidos</th>
                                    <th>Tipo Pago</th>
                                    <th>Monto</th>
                                    <th>Mes</th>
                                    <th>Año</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($registros as $info) : ?>
                                    <tr>
                                        <td><?php echo $info['nombre']; ?></td>
                                        <td><?php echo $info['apellidoPat'] . " " . $info['apellidoMat']; ?></td>
                                        <td><?php echo $info['tipoPago']; ?></td>
                                        <td><?php echo $info['monto']; ?></td>
                                        <td><?php echo $info['mes']; ?></td>
                                        <td><?php echo $info['year']; ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Nombre</th>
                                    <th>Apellidos</th>
                                    <th>Tipo Pago</th>
                                    <th>Monto</th>
                                    <th>Mes</th>
                                    <th>Año</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php include 'footer.php'; ?>
