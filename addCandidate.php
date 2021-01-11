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
 <!-- left column -->
 <div class="col-md-12">
            <!-- general form elements -->
            <!-- still haven't add to the database LOL,please make it happen. -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add Candidates</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form">
                <div class="card-body">
                  <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="name" class="form-control" id="name" placeholder="Name">
                  </div>
                  <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="EMail" placeholder="Email">
                  </div>
                  <div class="form-group">
                    <label for="id">ID:</label>
                    <input type="Id" class="form-control" id="id" placeholder="ID">
                  </div>
                  <!-- if can connect to php using positions please modify -->
                  <div class="form-group">
                        <label>Select Position</label>
                        <select class="custom-select">
                          <option>Prisedent</option>
                          <option>Vice Prisedent</option>
                          <option>Student Council</option>
                          <option>Secretary</option>
                          <option>Officer</option>
                          <option>Voter</option>
                        </select>
                      </div>
                  <div class="form-group">
                    <label for="exampleInputFile">Insert Image:</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Upload Image</label>
                      </div>
                    </div>
                  </div>

                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
                            <!-- jQuery -->
                            <?php include 'model/footer.php' ?>
                            </section>
                            <?php include 'model/function.php ' ?>
</body>
</html>