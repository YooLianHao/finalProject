<?php include 'model/head.php' ?>
<body>
<!-- Navbar -->
<?php include 'model/admin_appbar.php' ?><br>
  <!-- /.navbar -->
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="" class="brand-link">
      <img src="" alt="" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">EVoting System</span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block" name=""></a>
        </div>
      </div>
      <!-- Sidebar Menu -->
      <?php include_once 'model/admin_sidebar.php'?>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <?php include 'model/admin_appbar.php' ?>
    <!-- Main content -->
    <section class="content">
    <br>
    <!-- View all user and the admin can edit them or delete
     -->
    <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Users </h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Name</th>
                      <th>Position</th>
                      <th>Actions</th>
                     
                      <th></th>
                    </tr>
                  </thead>
                     <!--Example, all users including candidates can be view by admin -->
                  <tbody>
                    <tr>
                      <td>183</td>
                      <td>John Doe</td>
                      <td>Canidate</td>
                      <td> <a class="btn btn-info btn-sm" href="">
                              <i class="fas fa-arrow-circle-right">
                              </i>
                              View More
                          </a> <a class="btn btn-danger btn-sm" href="#">
                              <i class="fas fa-trash">
                              </i>
                              <!-- destory the election by clicking this one -->
                              Delete
                          </a>
                          </td>
                        
                    </tr>
                    <tr>
                      <td>16</td>
                      <td>Lorenzo Jay</td>
                      <td>Voter</td>
                      <td> <a class="btn btn-info btn-sm" href="">
                              <i class="fas fa-arrow-circle-right">
                              </i>
                              View More
                          </a> <a class="btn btn-danger btn-sm" href="#">
                              <i class="fas fa-trash">
                              </i>
                              <!-- destory the election by clicking this one -->
                              Delete
                          </a>
                          </td>
                        
                    </tr>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          </div>
  </section>
        </div>
 
                            <!-- jQuery -->
                            <?php include 'model/footer.php' ?>
                            </section>
                            <?php include 'model/function.php ' ?>
</body>
</html>