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
   <!-- Default box -->
   <div class="card">
        <div class="card-header">
          <h3 class="card-title">Elections</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fas fa-times"></i></button>
          </div>
        </div>
        <div class="card-body p-0">
          <table class="table table-striped projects">
              <thead>
                  <tr>
                      <th style="width: 10%">
                          Election ID
                      </th>
                      <th style="width: 20%">
                          Election Name 
                      </th>
                      <th style="width: 30%">
                          Candidates
                      </th>
                      <th>
                          Election Progress
                      </th>
                      <th style="width: 8%" class="text-center">
                          Status
                      </th>
                      <th style="width: 20%">
                      </th>
                  </tr>
              </thead>
              <tbody>
                  <tr>
                      <td class="text-center">
                            <!-- Election Number -->
                            <!-- Example -->
                            1
                      </td>
                      <td>
                          <a>
                           <!-- Election Name -->
                            <!-- Example -->
                              SUC CAO election
                          </a>
                          <br/>
                      </td>
                      <td>
                          <ul class="list-inline">
                              <li class="list-inline-item">
                               <!-- Election Candidates -->
                                <!-- Example -->
                                <!-- apply Some Php command to show -->
                                <img alt="Avatar" class="table-avatar" src="images/groupmate 2.png">
                              </li>
                          </ul>
                      </td>
                      <td class="project_progress">
                         <!-- apply Some Php command to show  the progress
                         link:https://shareurcodes.com/blog/real%20time%20progress%20bar%20in%20php
                         this link helps us to peform the progress of votes.
                         -->
                          <div class="progress progress-sm">

                              <div class="progress-bar bg-green" role="progressbar" aria-volumenow="57" aria-volumemin="0" aria-volumemax="100" style="width: 57%">
                              </div>
                          </div>
                          <small>
                           
                          </small><!-- after he click the edit he/she will navigate to put or add some candidates on it -->
                      </td>
                      <td class="project-state">
                          <span class="badge badge-success">On Going</span>
                      </td>
                     <!-- after admin click the publish , it will publish to Voters Page -->
                      <td class="project-actions text-right">
                          <a class="btn btn-info btn-sm" href="">
                              <i class="fas fa-arrow-circle-right">
                              </i>
                              Publish
                          </a>
                        <!-- after he click the edit he/she will navigate to put or check the event on it -->
                       <!-- ill add the edit page please check. -->
                          <a class="btn btn-info btn-sm" href="">
                              <i class="fas fa-view">
                              </i>
                              View
                          </a>
                          <a class="btn btn-danger btn-sm" href="#">
                              <i class="fas fa-trash">
                              </i>
                              <!-- destory the election by clicking this one -->
                              Delete
                          </a>
                      </td>
                  </tr>
                  <tr>
                  
              </tbody>
          </table>
        </div>
 
                            <!-- jQuery -->
                            <?php include 'model/footer.php' ?>
                            </section>
                            <?php include 'model/function.php ' ?>
</body>
</html>