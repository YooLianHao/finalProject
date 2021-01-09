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
    <div class="row">
        <div class="col-md-12">
          <div class="card card-primary">
            <div class="card-header">
    <h3 class="card-title">Create Election</h3>
<!--
     this one is multimple fields dynamically, still haven't put into lqs, ,this is including the date and name of election.
     must be function and view.
     link:https://www.youtube.com/watch?v=7efeIJ7oFTc&t=395s
  -->
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fas fa-minus"></i></button>
              </div>
            </div>
            <div class="card-body">
            <div class="form-group"> 
 <label>Date:</label>
  <div class="input-group date" id="reservationdate" data-target-input="nearest">
   <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate"/> 
   <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
    <div class="input-group-text">
    <i class="fa fa-calendar">
    </i>
    </div>
     </div>
      </div>
       </div>
        <!-- /.form group -->
         <!-- Date range -->
          <div class="form-group">
           <label>Date range:</label>
            <div class="input-group"> 
            <div class="input-group-prepend">
             <span class="input-group-text"> 
             <i class="far fa-calendar-alt">
             </i> 
             </span> 
             </div>
              <input type="text" class="form-control float-right" id="reservation"> 
              </div> 
              <br>
              <div class="form-group">
                <label for="inputName">Election Name</label>
                <input type="text" id="inputName" class="form-control" value="">
              </div>
              <div class="form-group">
                <label for="electioDescription">Tag Line</label>
                <textarea id="electionDescription" class="form-control" rows="4"></textarea>
              </div>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
          </div>
          <!-- this one is on addGroups.php -->
        <?php include 'addGroups.php' ?>
         <!-- end of addGroups.php -->
        <button type="submit" class="btn btn-primary">Submit</button> 
       

                            <!-- jQuery -->
                            <?php include 'model/footer.php' ?>
                            </section>
                            <?php include 'model/function.php ' ?>
</body>
</html>