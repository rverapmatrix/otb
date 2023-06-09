
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
            <h1>Actualizar Registro</h1>
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
            <div class="col-1">
            
            </div>
        <div class="col-8">
            <form action="<?php echo base_url().'updateRegistro/'.$datos[0]['idUsuario']; ?>" method="post">
                <div class="form-group">
                  <label for="">Nombre</label>
                  <input type="text"
                    class="form-control" name="nombre" id="nombre" value="<?= $datos[0]['nombre'];?>" aria-describedby="helpId" placeholder="Nombre">
                  
                </div>

                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                        <label for="">Apellido Paterno</label>
                        <input type="text"
                            class="form-control" name="apePat" id="apePat" value="<?= $datos[0]['apellidoPat'];?>" aria-describedby="helpId" placeholder="Apellido Paterno">
                        
                        </div>
                    </div>
                    <div class="col-6">
                    <div class="form-group">
                        <label for="">Apellido Materno</label>
                        <input type="text"
                            class="form-control" name="apeMat" id="apeMat" value="<?= $datos[0]['apellidoMat'];?>" aria-describedby="helpId" placeholder="Apellido Materno">
                        
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                          <label for="">Usuario</label>
                          <input type="text"
                            class="form-control" name="usuario" id="usuario" value="<?= $datos[0]['usuario'];?>" aria-describedby="helpId" placeholder="Usuario">
                          
                        </div>
                    </div>
                    <div class="col-6">
                    <div class="form-group">
                        <label for="">Password</label>
                        <input type="text"
                            class="form-control" name="passw" id="passw" value="<?= $datos[0]['password'];?>" aria-describedby="helpId" placeholder="Password">
                        
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                          <label for="">Rol</label>
                          <select class="form-control" name="rol" id="rol" value="<?= $datos[0]['rol'];?>">
                            <option value="socio">Socio</option>
                            <option value="administrador">Administrador</option>
                            
                          </select>
                        </div>
                    </div>
                    <div class="col-6">
                    <div class="form-group">
                        <label for="">Telefono Celular</label>
                        <input type="text"
                            class="form-control" name="celular" id="celular" value="<?= $datos[0]['celular'];?>" aria-describedby="helpId" placeholder="Celular">
                        
                        </div>
                    </div>
                </div>

                

                <div class="row">
                    <div class="col-4">
                        <div class="form-group">
                          <label for="">Tipo Accion</label>
                          <select class="form-control" name="tipoAccion" id="tipoAccion" value="<?= $datosAccion[0]['nroMedidor'];?>">
                            <option value="socio">Normal</option>
                            <option value="administrador">Tercera edad</option>                           
                          </select>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                        <label for="">Costo</label>
                        <input type="text"
                            class="form-control" name="costo" id="costo" value="<?= $datosAccion[0]['costo'];?>" aria-describedby="helpId" placeholder="Costo">
                        
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                        <label for="">Numero Medidor</label>
                        <input type="text" class="form-control" name="nroMedidor" id="nroMedidor" value="<?= $datosAccion[0]['nroMedidor'];?>" aria-describedby="helpId" placeholder="Nro Medidor">
                        
                        </div>
                    </div>
                </div>

                <div class="form-group">
                  <label for="">Direccion</label>
                  <textarea class="form-control" name="direccion" id="direccion" rows="3" placeholder="Direccion de socio" value="<?= $datos[0]['direccion'];?>"><?= $datos[0]['direccion'];?></textarea>
                </div>

                <button type="submit" class="btn btn-primary">Actualizar Socio</button>

            </form>    
        </div>
        <div class="col-3">
            
        </div>
    </div>
     
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


 

  <?php include 'footer.php'; ?>