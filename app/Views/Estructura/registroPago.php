
<?php include 'header.php'; 
use App\Models\UsuarioModel;?>


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


        <div class="row">
            <div class="col-12" id="alertTemporal">
            <?php if(isset($mensaje)){?>
                <div  class="alert alert-warning" role="alert">
                    <strong>Cobro Exitoso</strong> <?php echo "". $mensaje['mensaje']; ?>
                </div>
            <?php } ?>
            </div>
        </div>

        <div class="row mb-2">

          <div class="col-sm-6">
            <h1>Registro Cobros</h1>
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
            <form action="<?php echo base_url().'generarCobro'?>" method="post">
            <div class="row">
                <div class="col-6">
                    <div class="form-group">
                    <label for="">Tipo Pago</label>
                    <select class="form-control" name="tipo" id="tipo">
                        <option value="consumo">Consumo de Agua</option>
                        <option value="multa">Multa</option>
                    </select>
                    </div>
                </div>

                <div class="col-6">
                <div class="form-group">
                    <label for="">Socio</label>
                    <select class="form-control" name="socio" id="socio">
                        
                        <option value="0">--Elegir Socio--</option>
                          <?php foreach ($usuarios as $usuario) : ?>
                                <option value="<?php echo $usuario['idUsuario']; ?>"><?php echo $usuario['nombre']; ?></option>
                            <?php endforeach; ?>
                       
                    </select>
                    </div>
                </div>
               
            </div>
                

                <div class="row">
                    <div class="col-4">
                        <div class="form-group">
                        <label for="">Monto</label>
                        <input type="text"
                            class="form-control" name="monto" id="monto" aria-describedby="helpId" placeholder="Monto (Bs)">
                        
                        </div>
                    </div>
                    <div class="col-4">
                    <div class="form-group">
                        <label for="">Descuento</label>
                        <input type="text"
                            class="form-control" name="descuento" id="descuento" aria-describedby="helpId" placeholder="Descuento (Bs)">
                        
                        </div>
                    </div>
                    <div class="col-4">
                    <div class="form-group">
                        <label for="">Fecha</label>
                        <input type="date"
                            class="form-control" name="fecha" id="fecha" aria-describedby="helpId" placeholder="Descuento (Bs)">
                        
                        </div>
                    </div>
                </div>

                <div class="form-group">
                  <label for="">Descripcion</label>
                  <textarea class="form-control" name="descripcion" id="descripcion" rows="3" placeholder="Descripcion Cobro"></textarea>
                </div>

                <button type="submit" class="btn btn-primary">Registrar Cobro</button>

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