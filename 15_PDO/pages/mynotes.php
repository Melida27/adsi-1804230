<!-- Page Wrapper -->
  <div id="wrapper">

   <?php include 'menu-student.php'; ?>

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <?php include 'navbar-student.php'; ?>

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="fa fa-list"> Mis Notas</h1>
          </div>

          <!-- Content Row -->
          <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-7 mb-4">
              
                <?php
                  $id = $_SESSION['uid'];
                  $mynotes = showMyNotes($id, $conn);
                ?>
                <table class="table table-striped table-bordered table-hover" id="dataTable">
                  <thead>
                    <tr>
                      <th>Materia</th>
                      <th>Nota 1</th>
                      <th>Nota 2</th>
                      <th>Nota 3</th>
                      <th>Definitiva</th>
                    </tr>
                  </thead>
                  <?php foreach ($mynotes as $mn): ?>

                    <tr>
                      <td><?php echo $mn['sname']; ?></td>
                      <th><?php echo $mn['nt1'] ?></th>
                      <th><?php echo $mn['nt2'] ?></th>
                      <th><?php echo $mn['nt3'] ?></th>
                      <th>
                        <?php if (round($mn['fnote'], 1) >= 3.5): ?>
                          <span class="badge badge-success">
                            <?php echo round($mn['fnote'], 1); ?>
                          </span>
                        <?php else: ?>
                          <span class="badge badge-danger">
                            <?php echo round($mn['fnote'], 1); ?>
                          </span>
                        <?php endif ?>
                      </th>
                    </tr>
                    
                  <?php endforeach ?> 
                </table>
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