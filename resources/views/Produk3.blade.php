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
    @include('layouts.navbar')

    <!--benner-->
    <section class="container-fluid banner">
      <div class="container banner-text col-lg-6">
        <div class="text-center">
          <p class="fs-1">ASURANSI PROPERTI</p>
          <p class="d-none d-md-block">Dapatkan perlindungan tepat untuk properti dan aset yang Anda miliki bersama dengan Kami.</p>
        </div>
      </div>
    </section>

    <div class="container-fluid Keunggulan pt-5 pb-5">
      <div class="container text-center">
        <h2 class="display-3" id="layanan">Keunggulan</h2>
        <p>Keuntungan yang akan anda rasakan dari asuransi properti</p>
        <div class="row pt-4">
          <div class="col-md-4">
            <i class="fa fa-bomb fa-5x"></i>
            <h3 class="mt-3">Bencana Tidak Terduga</h3>
            <p>Menanggung biayai kerusakan seperti akibat kebakaran, petir, ledakan, kejatuhan pesawat dan asap</p>
          </div>

          <div class="col-md-4">
            <i class="fa fa-flag fa-5x"></i>
            <h3 class="mt-3">Bencana Alam</h3>
            <p>Memperbaiki dan mengurusi kerusakan properti anda yang sudah dipercayakan kepada kami akibat bencana alam</p>
          </div>

          <div class="col-md-4">
            <i class="fa fa-exclamation fa-5x"></i>
            <h3 class="mt-3">Pencurian dan Perampokan</h3>
            <p>Membantu dan mengurusi barang atau properti anda yang hilang akibat pencurian dan perampokan</p>
          </div>
        </div>
      </div>
    </div>

    <div class="container-fluid manfaat pt-5 pb-5">
      <div class="container">
        <div class="clearfix pt-5">
          <img src="Home/1.png" class="col-md-6 float-md-end mb-3 crop-img" width="300" height="300" />
          <h4>Manfaat Mengikuti Asuransi Properti</h4>
          <p>1. Tidak akan merasa cemas untuk melindungi barang yang berharga</p>
          <p>2. Dapat mengantisipasi kerugian finansial</p>
          <p>3. Mendapat perlindungan hukum</p>
          <p>4. Melindungi properti berharga untuk masa depan</p>
          <p>5. Nilai properti berharga tetap stabil</p>
        </div>
      </div>
    </div>

    <div class="container-fluid layanan pt-5 pb-5">
      <div class="container text-center">
        <h2 class="display-3" id="layanan">Syarat dan Ketentuan</h2>
        <p>Kententuan produk asuransi properti</p>
        <div class="row pt-4">
          <div class="col-md-4">
            <span class="lingkaran"><i class="fa fa-check fa-5x"></i></span>
            <h3 class="mt-3">Masa Pertanggungan</h3>
            <p>1 tahun</p>
          </div>

          <div class="col-md-4">
            <span class="lingkaran"><i class="fa fa-money fa-5x"></i></span>
            <h3 class="mt-3">Mata Uang</h3>
            <p>Dalam mata uang Rupiah</p>
          </div>

          <div class="col-md-4">
            <span class="lingkaran"><i class="fa fa-bank fa-5x"></i></span>
            <h3 class="mt-3">Jalur Distribusi</h3>
            <p>Bank dan Broker</p>
          </div>
        </div>
      </div>
    </div>

    <section class="container-fluid tambahan main-color" style="margin-bottom: 80px">
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
