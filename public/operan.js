function ambildata() {
    var nama = document.getElementById("nama");
    var jenisAsuransi = document.getElementById("JenisAsuransi");
    var kelas = document.getElementById("checkbox1", "checkbox2", "checkbox3");
    var jenisKelamin = document.getElementById("JenisKelamin");
    var nik = document.getElementById("nik");
    var nomorTelpon = document.getElementById("nomorTelpon");
    var umur = document.getElementById("umur");
    var alamtLengkap = document.getElementById("alamat");
    var tanggalLahir = document.getElementById("TanggalLahir");
    var tempatLahir = document.getElementById("alamat");
    var email = document.getElementById("email");
    var hasil = document.getElementById("hasil");
    hasil.innerText = `Pada provinsi ${nama} terdapat kota ${kelas}`;
}
function tampilnama() {
    var name = document.getElementById("nama");
    var hasil1 = document.getElementById("hasil");
    hasil1.innerText = `Nama = ${name}`;
}

function tampiljenisAsuransi() {
    var ja = document.getElementById("jenisAsuransi");
    var hasil2 = document.getElementById("hasil");
    hasil2.innerText = `Jenis Asuransi = ${ja}`;
}
