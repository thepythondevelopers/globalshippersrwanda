<footer class="main-footer" style="color:black;">
  <strong>Copyright &copy; 2020 <a href="<?php echo base_url('Admin/dashboard');?>" style="color:black;">Gsr</a>.</strong>
  All rights reserved.
  <!-- <div class="float-right d-none d-sm-inline-block">
    <b>Version</b> 3.2.0
  </div> -->
</footer>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
  <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<script src="<?php echo base_url()?>plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="<?php echo base_url()?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo base_url()?>plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo base_url()?>plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- DataTables  & Plugins -->
    <script src="<?php echo base_url()?>plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url()?>plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="<?php echo base_url()?>plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="<?php echo base_url()?>plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="<?php echo base_url()?>plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="<?php echo base_url()?>plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="<?php echo base_url()?>plugins/jszip/jszip.min.js"></script>
    <script src="<?php echo base_url()?>plugins/pdfmake/pdfmake.min.js"></script>
    <script src="<?php echo base_url()?>plugins/pdfmake/vfs_fonts.js"></script>
    <script src="<?php echo base_url()?>plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="<?php echo base_url()?>plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="<?php echo base_url()?>plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo base_url()?>dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?php echo base_url()?>dist/js/demo.js"></script>
    <!-- Page specific script -->
    <script>
      $(function () {
        $("#example1").DataTable({
          "responsive": true, 
          "lengthChange": false, 
          "autoWidth": false,
           "order": [],
          "buttons": ["pdf", "print"]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        $('#example2').DataTable({
          "paging": true,
          "lengthChange": false,
          "searching": false,
          "ordering": true,
          "info": true,
          "autoWidth": false,
          "responsive": true,
        });
      });
    </script>