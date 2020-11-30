const flashApprove = $('.flash-data').data('flashdata');
if (flashApprove){
    swal({
        title: 'Pinjaman Buku',
        text: flashApprove,
        icon: 'success'
    });
}