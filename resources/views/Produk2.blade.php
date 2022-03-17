<!DOCTYPE html>
<html>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
    <title>Produk-Supreme life</title>
    <link rel="shortcut icon" href="favicon.ico" />
  </head>

  <body>
    <!--navbar-->
    @include('layouts/navbar')

    <!--benner-->
    <section class="container-fluid banner">
      <div class="container banner-text col-lg-6">
        <div class="text-center">
          <p class="fs-1">ASURANSI KESEHATAN</p>
          <p class="d-none d-md-block">Temukan produk asuransi kesehatan terbaik bagi Anda serta Keluarga dan dapatkan melalui Tenaga Pemasar kami.</p>
        </div>
      </div>
    </section>

    <div class="container-fluid Keunggulan pt-5 pb-5">
      <div class="container text-center">
        <h2 class="display-3" id="layanan">Keunggulan</h2>
        <p>Keuntungan yang akan anda rasakan dari asuransi kesehatan kami</p>
        <div class="row pt-4">
          <div class="col-md-4">
            <i class="fa fa-plus fa-5x"></i>
            <h3 class="mt-3">Biaya Perawatan</h3>
            <p>Memberikan perlindungan biaya perawatan medis hingga Rp40 miliar* per Tahun</p>
          </div>

          <div class="col-md-4">
            <i class="fa fa-ambulance fa-5x"></i>
            <h3 class="mt-3">Perawatan Medis</h3>
            <p>Memberikan akses untuk mendapatkan perawatan medis terbaik di berbagai belahan dunia</p>
          </div>

          <div class="col-md-4">
            <i class="fa fa-stethoscope fa-5x"></i>
            <h3 class="mt-3">Masa Tunggu</h3>
            <p>Memiliki Masa Tunggu yang lebih singkat selama 90 hari untuk penyakit khusus</p>
          </div>
        </div>
      </div>
    </div>

    <div class="container-fluid manfaat pt-5 pb-5">
      <div class="container">
        <div class="clearfix pt-5">
          <img src="Home/3.png" class="col-md-6 float-md-end mb-3 crop-img" width="300" height="300" />
          <h4>Manfaat Mengikuti Asuransi Kesehatan</h4>
          <p>1. Menjadi persiapan dalam menghadapi risiko kesehatan yang mendadak</p>
          <p>2. Dapat meringankan beban keuangan keluarga</p>
          <p>3. Dapat membantu Anda dalam mengatur keuangan</p>
          <p>4. Memberikan berbagai jenis perawatan yang bisa Anda dapatkan</p>
        </div>
      </div>
    </div>

    <div class="container-fluid layanan pt-5 pb-5">
      <div class="container text-center">
        <h2 class="display-3" id="layanan">Pilih Kami</h2>
        <p>Mengapa anda harus memilih kami ?</p>
        <div class="row pt-4">
          <div class="col-md-4">
            <span class="lingkaran"><i class="fa fa-bell fa-5x"></i></span>
            <h3 class="mt-3">Layanan Nasabah 24 Jam</h3>
            <p>Anda dapat berbicara dengan Tim Customer Care kami dalam 24 jam setiap hari</p>
          </div>

          <div class="col-md-4">
            <span class="lingkaran"><i class="fa fa-check fa-5x"></i></span>
            <h3 class="mt-3">Kemudahan Sistem Klaim</h3>
            <p>Sistem klaim yang sederhana yang dalam banyak kasus memungkinkan Anda mengakses pengobatan tanpa pembayaran</p>
          </div>

          <div class="col-md-4">
            <span class="lingkaran"><i class="fa fa-briefcase fa-5x"></i></span>
            <h3 class="mt-3">200 Tahun Pengalaman</h3>
            <p>Didukung oleh 41.000 karyawan, melayani 95 juta nasabah di 30 negara di dunia</p>
          </div>
        </div>
      </div>
    </div>

    <section class="container-fluid tambahan main-color">
      <div class="container tambahan-text col-lg-6">
        <div class="text-center">
          <p class="fs-1">PRODUK LAYANAN KAMI AKAN MENEMANI ANDA</p>
          <p class="d-none d-md-block">Anda berminat? Produk asuransi kami berfokus dan berkinerja dalam bidang tertentu sehingga kami dapat memuaskan keinginan anda dalam pengalaman berasuransi</p>
          <div class="container" style="text-align: center">
            <a href="/form" class="btn btn-light text-dark"><strong>Daftar disini</strong></a>
          </div>
        </div>
      </div>
    </section>

    <!--footer-->
    <section class="section-footer">
      <footer class="footer main-color">
        <div class="container">
          <div class="row justify-content-between">
            <div class="col md-6">
              <span class="footer-text">Supreme Life</span>
              <div class="footer-menu">
                <h6>Kategori</h6>
                <ul>
                  <li>
                    <a href="Produk.html">Layanan Kami</a>
                  </li>
                  <li>
                    <a href="Daftar.html">Bergabung Bersama</a>
                  </li>
                  <li>
                    <a href="Tentang.html">Tentang Kami</a>
                  </li>
                  <li>
                    <a href="#">Hubungi Kami</a>
                  </li>
                  <li>
                    <a href="#">Artikel Terkait</a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-md-6">
              <h6 class="fw-bold">Alamat</h6>
              <p>Jl.Kaliurung II, No. 30, Kec. Taruma, Kel. Balasika, Jakarta Selatan, DKI Jakarta</p>
              <p class="fw-bold">Kode pos 12540</p>
              <hr />
              <h6 class="fw-bold">Kontak Kami</h6>
              <p><i class="fa fa-whatsapp"></i> (+62) 81265785429</p>
              <div class="footer-sosmed">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-instagram"></i></a>
                <a href="#"><i class="fa fa-youtube"></i></a>
              </div>
            </div>
          </div>
        </div>
        <hr />
        <div class="copyright">
          <p>&copy; copyright 2021 - Insurance Company</p>
        </div>
      </footer>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
