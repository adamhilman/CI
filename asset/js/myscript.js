const flashSukses = $('.flash-data').data('sukses');
if (flashSukses){
    swal({
        title: 'Data Berhasil',
        text: flashSukses,
        icon: 'success'
    });
}
const flashApprove = $('.flash-data').data('flashdata');
console.log(flashApprove)
if (flashApprove){
    swal({
        title: 'Pinjaman Buku',
        text: flashApprove,
        icon: 'success'
    });
}
const flashProfile = $('.flash-data').data('profile');
if (flashProfile){
    swal({
        title: 'Peringatan',
        text: flashProfile,
        icon: 'warning'
    });
}
const flashAkun = $('.flash-data').data('akun');
if (flashAkun){
    swal({
        title: 'Berhasil',
        text: flashProfile,
        icon: 'success'
    });
}