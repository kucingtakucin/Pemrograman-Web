$(document).ready(function () {
    if (document.getElementById('pesan')) {
        Swal.fire(
            'Data Mahasiswa',
            $('#pesan').data('isi'),
            'success'
        );
    }
});
