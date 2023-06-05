
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
            <h1>Socios</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Blank Page</li>
            </ol>
          </div>
        </div>
        <div class="row">
            <div class="col-12">
                <a name="" id="" class="btn btn-success" href="<?php echo base_url().'agregarSocio'?>" role="button">Agregar</a>
            </div>
        </div>

     
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

    <div class="container-fluid">
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
                    <th>Telefono</th>
                    <th>Direccion</th>
                    <th></th>
                  </tr>
                  </thead>
                  <tbody>
                  
                  <?php foreach ($registros as $usuario) : ?>
                        <tr>
                           
                           
                            <td><?php echo $usuario['nombre']; ?></td>
                            <td><?php echo $usuario['apellidoPat']." ".$usuario['apellidoMat']; ?></td>
                           
                            <td><?php echo $usuario['celular']; ?></td>
                            <td><?php echo $usuario['direccion']; ?></td>
                            <td>
                                <button type="button" class="btn btn-warning" alt="Editar"><i class="nav-icon fas fa-edit"></i></button>
                                <button type="button" class="btn btn-danger" alt="Eliminar"><i class="nav-icon fas fa-trash"></i></button>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                 
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>Telefono</th>
                    <th>Direccion</th>
                    <th></th>
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
      </div>
      <!-- /.container-fluid -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <?php include 'footer.php'; ?>