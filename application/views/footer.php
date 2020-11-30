<!-- Jquery Core Js -->
<script src="<?php echo base_url()?>asset/plugins/jquery/jquery.min.js"></script>

<!-- Bootstrap Core Js -->
<script src="<?php echo base_url()?>asset/plugins/bootstrap/js/bootstrap.js"></script>

<!-- Select Plugin Js -->
<script src="<?php echo base_url()?>asset/plugins/bootstrap-select/js/bootstrap-select.js"></script>

<!-- Slimscroll Plugin Js -->
<script src="<?php echo base_url()?>asset/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

<!-- Waves Effect Plugin Js -->
<script src="<?php echo base_url()?>asset/plugins/node-waves/waves.js"></script>
<!-- Jquery CountTo Plugin Js -->
<script src="<?php echo base_url()?>asset/plugins/jquery-countto/jquery.countTo.js"></script>
<!-- Sparkline Chart Plugin Js -->
<script src="<?php echo base_url()?>asset/plugins/jquery-sparkline/jquery.sparkline.js"></script>
<!-- Jquery DataTable Plugin Js -->
<script src="<?php echo base_url()?>asset/plugins/jquery-datatable/jquery.dataTables.js"></script>
<script src="<?php echo base_url()?>asset/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
<script src="<?php echo base_url()?>asset/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
<script src="<?php echo base_url()?>asset/plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
<script src="<?php echo base_url()?>asset/plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
<script src="<?php echo base_url()?>asset/plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
<script src="<?php echo base_url()?>asset/plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
<script src="<?php echo base_url()?>asset/plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
<script src="<?php echo base_url()?>asset/plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>

 <!-- SweetAlert Plugin Js -->
 <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
 <script src="<?php echo base_url()?>asset/js/pages/ui/dialogs.js"></script>

<!-- Bootstrap Datepicker Plugin Js -->
<script src="<?php echo base_url()?>asset/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>

<!-- Custom Js -->
<script src="<?php echo base_url()?>asset/js/admin.js"></script>
<script src="<?php echo base_url()?>asset/js/pages/tables/jquery-datatable.js"></script>
<script src="<?php echo base_url()?>asset/js/pages/widgets/infobox/infobox-1.js"></script>
<script>
$('#bs_datepicker_container input').datepicker({
        autoclose: true,
        container: '#bs_datepicker_container',
        format: 'yyyy/mm/dd'
    });

    $('#bs_datepicker_component_container').datepicker({
        autoclose: true,
        container: '#bs_datepicker_component_container'
    });
    //
    $('#bs_datepicker_range_container').datepicker({
        autoclose: true,
        container: '#bs_datepicker_range_container'
    });

</script>
<script>
$(document).ready( function () {
    var today = new Date();
    var date = today.getFullYear()+'-'+(today.getMonth()+1)+'-'+today.getDate();
    var uri="<?php echo $this->uri->segment(3);?>";
    console.log(uri);
    $('#data_buku').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            {
                extend: 'excelHtml5',
                title: 'Data Buku Perpustakaan per-tanggal '+date
            },
            {
                extend: 'pdfHtml5',
                title: 'Data Buku Perpustakaan per-tanggal '+date
            }
        ]
    });
    $('#data_anggota').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            {
                extend: 'excelHtml5',
                title: 'Data Anggota Perpustakaan per-tanggal '+date
            },
            {
                extend: 'pdfHtml5',
                title: 'Data Anggota Perpustakaan per-tanggal '+date
            }
        ]
    });
    $('#data_peminjam').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            {
                extend: 'excelHtml5',
                title: 'Data Anggota Perpustakaan per-tanggal '+date
            },
            {
                extend: 'pdfHtml5',
                title: 'Data Anggota Perpustakaan per-tanggal '+date
            }
        ]
    });
});
</script>
<script>
function goBack() {
  window.history.back();
}
</script>
<script>
    function hapus(id){
        swal({
        title: "Apakah anda yakin?",
        text: "Setelah dihapus, anda tidak dapat mengembalikan data!",
        icon: "warning",
        buttons: true,
        dangerMode: true,
        })
        .then((willDelete) => {
        if (willDelete) {
            swal({
            title: "Wow!",
            text: "Message!",
            icon: "success"
            }).then(function() {
            window.location = "<?php echo base_url();?>dashboard/hapus_buku/"+id;
            });
        } else {
            swal("Data tidak dihapus!");
        }
        });
    }

</script>

<!-- Demo Js -->
<script src="<?php echo base_url()?>asset/js/myscript.js"></script>
<script src="<?php echo base_url()?>asset/js/demo.js"></script>
</body>

</html>
