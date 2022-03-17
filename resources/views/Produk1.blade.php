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
          <p class="fs-1">ASURANSI JIWA</p>
          <p class="d-none d-md-block">Memberikan dukungan finansial bagi keluarga Anda untuk terus mengejar mimpi ketika Anda sudah tidak dapat bersama mereka lagi.</p>
        </div>
      </div>
    </section>

    <div class="container-fluid Keunggulan pt-5 pb-5">
      <div class="container text-center">
        <h2 class="display-3" id="layanan">Keunggulan</h2>
        <p>Keuntungan yang akan anda rasakan dari asuransi jiwa kami</p>
        <div class="row pt-4">
          <div class="col-md-4">
            <i class="fa fa-plus fa-5x"></i>
            <h3 class="mt-3">Perlindungan Jiwa</h3>
            <p>Pasti untuk perlindungan jiwa akibat bukan kecelakaan & penyakit kritis hingga usia 86 tahun, pada ulang tahun terdekat.</p>
          </div>

          <div class="col-md-4">
            <i class="fa fa-ambulance fa-5x"></i>
            <h3 class="mt-3">Kecelakaan</h3>
            <p>Santunan akibat kecelakaan dibayarkan jika meninggal dalam kurun waktu 90 hari sejak tanggal kecelakaan</p>
          </div>

          <div class="col-md-4">
            <i class="fa fa-stethoscope fa-5x"></i>
            <h3 class="mt-3">Penyakit</h3>
            <p>Santunan pasti untuk salah satu dari 77 penyakit kritis, Pertanggungan penyakit berakhir setelah manfaat dibayarkan.</p>
          </div>
        </div>

        <div class="row pt-4">
          <div class="col-md-4">
            <i class="fa fa-money fa-5x"></i>
            <h3 class="mt-3">Perencanaan Dana</h3>
            <p>Mengoptimalkan perencanaan dana masa tua anda dengan manfaat loyalty bonus dan manfaat ekstra alokasi premi.</p>
          </div>

          <div class="col-md-4">
            <i class="fa fa-dollar fa-5x"></i>
            <h3 class="mt-3">Investasi</h3>
            <p>Menyediakan berbagai pilihan strategi investasi sesuai profil anda untuk masa depan yang terencana dan pasti.</p>
          </div>

          <div class="col-md-4">
            <i class="fa fa-heart fa-5x"></i>
            <h3 class="mt-3">Sesuai Prinsip</h3>
            <p>Pengelolaan asuransi sesuai prinsip: saling menolong, melindungi dan menanggung risiko antar sesama peserta.</p>
          </div>
        </div>
      </div>
    </div>

    <div class="container-fluid manfaat pt-5 pb-5">
      <div class="container">
        <div class="clearfix pt-5">
          <img src="Home/2.png" class="col-md-6 float-md-end mb-3 crop-img" width="300" height="300" />
          <h4>Manfaat Mengikuti Asuransi Jiwa</h4>
          <p>1. Asuransi jiwa sebagai proteksi dari risiko meninggal dunia</p>
          <p>2. Perlindungan dari risiko cacat sebagian maupun cacat total permanen</p>
          <p>3. Berperan untuk memastikan kelangsungan hidup anggota keluarga lainnya</p>
          <p>4. Membuat perencanaan keuangan keluarga yang sehat</p>
          <p>5. Membantu kamu mengalokasikan dana untuk masa depan</p>
        </div>
      </div>
    </div>

    <div class="container-fluid layanan pt-5 pb-5">
      <div class="container text-center">
        <h2 class="display-3" id="layanan">Syarat dan Ketentuan</h2>
        <p>Kententuan produk asuransi jiwa</p>
        <div class="row pt-4">
          <div class="col-md-4">
            <span class="lingkaran"><i class="fa fa-user fa-5x"></i></span>
            <h3 class="mt-3">Usia</h3>
            <p>Usia masuk 18 – 54 tahun</p>
          </div>

          <div class="col-md-4">
            <span class="lingkaran"><i class="fa fa-money fa-5x"></i></span>
            <h3 class="mt-3">Mata Uang</h3>
            <p>Dalam mata uang Rupiah</p>
          </div>

          <div class="col-md-4">
            <span class="lingkaran"><i class="fa fa-bookmark fa-5x"></i></span>
            <h3 class="mt-3">Pertanyaan</h3>
            <p>Menjawab beberapa pertanyaan kesehatan</p>
          </div>
        </div>
      </div>
    </div>

    <div class="container-fluid tambahan main-color">
      <div class="container tambahan-text col-lg-6">
        <div class="text-center">
          <p class="fs-1">PRODUK LAYANAN KAMI AKAN MENEMANI ANDA</p>
          <p class="d-none d-md-block">Anda berminat? Produk asuransi kami berfokus dan berkinerja dalam bidang tertentu sehingga kami dapat memuaskan keinginan anda dalam pengalaman berasuransi</p>
          <div class="container" style="text-align: center">
            <a href="/form" class="btn btn-light text-dark"><strong>Daftar disini</strong></a>
          </div>
        </div>
      </div>
    </div>

    <!--footer-->
    <section class="section-footer" style="margin-top:0px;">
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
