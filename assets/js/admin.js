const keyword = document.getElementById('keyword');
const tombolCari = document.getElementById('tombolCari');
const container = document.querySelector('.table');

keyword.addEventListener('keyup', function () {
  // buat objek ajax
  let xhr = new XMLHttpRequest();

  // cek kesiapan ajax
  xhr.onreadystatechange = function () {
    // 4 & 200 menandakan status ok
    if (xhr.readyState == 4 && xhr.status == 200) {
      container.innerHTML = xhr.responseText;
    }
  };

  xhr.open('GET', 'ajax/datamobil.php?keyword=' + keyword.value, true);
  xhr.send();
});
