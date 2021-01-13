<<<<<<< HEAD
=======
<!-- jQuery 3 -->
<script src="../plugins/jquery/dist/jquery.min.js"></script>
>>>>>>> upstream/main
<!-- jQuery UI 1.11.4 -->
<script src="../plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../plugins/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck 1.0.1 -->
<script src="../plugins/iCheck/icheck.min.js"></script>
<!-- Moment JS -->
<script src="../plugins/moment/moment.js"></script>
<!-- DataTables -->
<script src="../plugins/datatables.net/js/jquery.dataTables.min.js"></script>
<<<<<<< HEAD

=======
<script src="../plugins/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
>>>>>>> upstream/main
<!-- ChartJS -->
<script src="../plugins/chart.js/Chart.js"></script>
<!-- ChartJS Horizontal Bar -->
<script src="../plugins/chart.js/Chart.HorizontalBar.js"></script>
<!-- daterangepicker -->
<script src="../plugins/moment/min/moment.min.js"></script>
<<<<<<< HEAD
=======
<script src="../plugins/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="../plugins/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- bootstrap time picker -->
<script src="../plugins/timepicker/bootstrap-timepicker.min.js"></script>
>>>>>>> upstream/main
<!-- Slimscroll -->
<script src="../plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../plugins/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<<<<<<< HEAD
=======
<script src="../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
>>>>>>> upstream/main
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.js"></script>
<!-- OPTIONAL SCRIPTS -->
<script src="../dist/js/demo.js"></script>
<<<<<<< HEAD
=======
<script src="../plugins/bootstrap-daterangepicker/daterangepicker.js"></script>
<script src="../plugins/timepicker/bootstrap-timepicker.min.js"></script>
>>>>>>> upstream/main
<!-- datepicker -->
<script src="../plugins/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="../plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="../plugins/raphael/raphael.min.js"></script>
<script src="../plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="../plugins/jquery-mapael/maps/usa_states.min.js"></script>
<<<<<<< HEAD

=======
<!-- ChartJS -->
<script src="../plugins/chart.js/Chart.min.js"></script>
<!-- PAGE SCRIPTS -->
<script src="../dist/js/pages/dashboard2.js"></script>
>>>>>>> upstream/main
<!-- Active Script -->
<script>
$(function(){
	/** add active class and stay opened when selected */
	var url = window.location;

	// for sidebar menu entirely but not cover treeview
	$('ul.sidebar-menu a').filter(function() {
	    return this.href == url;
	}).parent().addClass('active');

	// for treeview
	$('ul.treeview-menu a').filter(function() {
	    return this.href == url;
	}).parentsUntil(".sidebar-menu > .treeview-menu").addClass('active');

});
</script>
<!-- Data Table Initialize -->
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
<!-- Date and Timepicker -->
<script>
$(function(){
  //Date picker
  $('#datepicker_add').datepicker({
    autoclose: true,
    format: 'yyyy-mm-dd'
  })
  $('#datepicker_edit').datepicker({
    autoclose: true,
    format: 'yyyy-mm-dd'
  }) 
});
</script>


