<!-- Page Wrapper -->
  <div id="wrapper">

   <?php include 'menu-teacher.php'; ?>

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <?php include 'navbar-teacher.php'; ?>

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="fa fa-pen"> Modificar Materia</h1>
          </div>

          <!-- Content Row -->
          <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-6 mb-4">
              <?php if ($_GET): ?>
                <?php
                  $id = $_GET['id'];
                  $subject = showSubject($id, $conn);
                ?>
                <form action="" method="post" enctype="multipart/form-data">
                  <?php foreach ($subject as $sj): ?>
                    <input type="hidden" name="id" value="<?php echo $sj['id']; ?>">
                    <div class="form-group">
                      <label for="name">Nombre: </label>
                      <input type="text" class="form-control" name="name" value="<?php echo $sj['name']; ?>" required>
                    </div>

                    <div class="form-group">
                      <button class="btn btn-success">
                        <i class="fa fa-save"></i>
                        Modificar
                      </button>
                      <button type="reset" class="btn btn-dark">
                        <i class="fa fa-eraser"></i>
                        Limpiar
                      </button>
                    </div>
                  <?php endforeach ?>
                </form>
              <?php endif ?>
              <?php 
                if($_POST){
                  
                  $name = $_POST['name'];
                  
                  if(updateSubject($id, $name, $conn)){
                    $_SESSION['message'] = "La materia $name se modificó con Éxito!";
                    echo "<script>
                      setTimeout(function(){
                        window.location.replace('../mod-subjects.php');
                      },1200);
                    </script>";
                  }
                }
              ?>
            </div>   
          </div>
        </div>
      </div>
      <!-- /.container-fluid -->

      
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Todos los derechos reservados &copy; <?php echo date('Y'); ?></span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->
  </div>
  <!-- End of Page Wrapper -->