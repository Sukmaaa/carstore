$(document).ready(function () {
  // hilangkan tombol cari
  $('#tombolCari').hide();

  // event ketika keyword ditulis

  $('#keyword').on('keyup', function () {
    // ajax menggunakan load
    //     $('.table').load('ajax/datamobil.php?keyword='+$('#keyword').val());

    $.get('ajax/datamobil.php?keyword=' + $('#keyword').val(), function (data) {
      $('.table').html(data);
    });
  });
});
