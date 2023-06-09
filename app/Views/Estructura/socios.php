
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
            <div class="col-12" id="alertTemporal">
            <?php if(isset($mensaje)){?>
                <div  class="alert alert-<?= $tipo; ?>" role="alert">
                    <strong>Actualizacion Exitosa</strong> <?= $mensaje; ?>
                </div>
            <?php } ?>
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
                                <a name="" id="" class="btn btn-warning" href="<?php echo base_url().'updateFormSocio/'.$usuario['idUsuario']?>" role="button"><i class="nav-icon fas fa-edit"></i></a>
                                <!--<a name="" id="" class="btn btn-danger" href="#" role="button"><i class="nav-icon fas fa-trash"></i></a>-->

                                <a class="btn btn-danger deleteUserBtn" data-idusuario="<?php echo $usuario['idUsuario']; ?>" href="#" data-toggle="modal" data-target="#confirmDeleteModal"><i class="nav-icon fas fa-trash"></i></a>
        
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

   <!-- Ventana modal para confirmar la eliminación -->
<div class="modal fade" id="confirmDeleteModal" tabindex="-1" role="dialog" aria-labelledby="confirmDeleteModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="confirmDeleteModalLabel">Confirmar Eliminación</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>¿Estás seguro de que deseas eliminar este registro? <span id="deleteUserId"></span></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <a class="btn btn-danger" id="deleteUserLink" href="#">Eliminar1</a>
                <!--<button type="button" class="btn btn-danger" id="deleteUserLink">Eliminar</button>-->
            </div>
        </div>
    </div>
</div>



    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->




  <?php include 'footer.php'; ?>