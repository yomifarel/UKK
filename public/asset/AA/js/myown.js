const flashData = $('.flash-data').data('flashdata ')
if (flashdata){
    swal({
        title: 'Data Mahasiswa',
        text: 'Berhasil' + flashData,
        type: 'success'

    });  
}