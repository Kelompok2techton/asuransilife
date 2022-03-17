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
    <title>Supreme Life | {{$title}}</title>
    <link rel="shortcut icon" href="favicon.ico" />
  </head>

  <body>
    <!--navbar-->
    @include('layouts/navbar')
    <!--carousel-->
    <section class="section-carousel" style="margin-top: 15px">
      <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="Home/1.png" class="d-block w-100" alt="..." />
            <div class="carousel-caption d-none d-md-block text-dark">
              <h5 class="display-1">MELINDUNGI ANDA LEBIH DEKAT</h5>
              <p>Supreme Life hadir lebih dekat dengan produk perlindungan yang dipasarkan melalui agen asuransi. Cari tahu lebih lanjut tentang produk di sini.</p>
              <a class="btn btn-primary btn-lg font-weight-bold" style="background-color: #6d8ddf" href="#produk" role="button">Selengkapnya</a>
            </div>
          </div>
          <div class="carousel-item">
            <img src="Home/3.png" class="d-block w-100" alt="..." />
            <div class="carousel-caption d-none d-md-block text-dark">
              <h5 class="display-1">RAIH IMPIAN BERSAMA KAMI</h5>
              <p>
                Masa depan kita penuh dengan beragam impian. Capai impian masa depan kita dengan jaminan perlindungan dari Supreme Life. Beragam program proteksi asuransi kami persembahkan khusus untuk Anda. Ayo segeran daftarkan diri anda.
              </p>
              <a class="btn btn-primary btn-lg font-weight-bold" style="background-color: #6d8ddf" href="#produk" role="button">Selengkapnya</a>
            </div>
          </div>
          <div class="carousel-item">
            <img src="Home/2.png" class="d-block w-100" alt="..." />
            <div class="carousel-caption d-none d-md-block text-dark">
              <h5 class="display-1">MARI BERGABUNG BERSAMA KAMI</h5>
              <p>Jangan ragu kami selalu membuat hidup lebih baik. Supreme Life akan berubah cara anda dalam merasakan asuransi.</p>
              <a class="btn btn-primary btn-lg font-weight-bold" style="background-color: #6d8ddf" href="#produk" role="button">Selengkapnya</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!--tentang kami-->

    <section id="about" class="section-about py-5">
      <div class="container">
        <div class="row mb-4">
          <div class="col text-center">
            <h1>Tentang Kami</h1>
          </div>
        </div>
        <div class="row">
          <div class="col text-center">
            <p>
              Supreme Life Insurance Company Of Indonesia adalah perusahaan asuransi dan manajer aset terkemuka di dunia dengan 100 juta nasabah personal dan perusahaan. Nasabah Supreme Life Insurance mendapatkan manfaat dari berbagai
              layanan asuransi personal dan perusahaan, mulai dari asuransi properti, jiwa dan kesehatan sampai layanan bantuan asuransi kredit dan asuransi bisnis secara global.
            </p>
          </div>
          <div class="col text-center">
            <p>
              Kami telah membantu keluarga di Asia selama lebih dari 100 tahun. kami berjanji untuk berupaya penuh memahami kebutuhan, keinginan, dan kekhawatiran Anda sehingga Anda dapat merencanakan kehidupan dengan baik. kami secara
              tulus menjadi bagian dari kehidupan Anda, menyediakan solusi keuangan yang tepat bagi Anda dan keluarga di kehidupan yang senantiasa berubah
            </p>
          </div>
        </div>
      </div>
      <a name="produk"> </a>
    </section>

    <!--Produk Kami-->
    <section class="section-produk">
      <div class="container">
        <div class="row mb-4">
          <div class="col text-center">
            <h1>Produk Yang Kami Tawarkan</h1>
          </div>
        </div>
        <div class="row row-cols-1 row-cols-md-3 g-4">
          <div class="col hovered-card">
            <div class="card h-100">
              <img src="Home/2.png" class="card-img-top" alt="..." />
              <div class="card-body">
                <h5 class="card-title">Asuransi Jiwa</h5>
                <p class="card-text">
                  Hidup lebih menyenangkan saat kita selalu terlindungi. Jadi, pastikan Anda dan keluarga sudah memiliki asuransi jiwa Supreme Life. Ayo raih hari esok yang lebih baik dengan cara melindungi Anda dan keluarga dari masalah
                  finansial karena risiko meninggal dunia.
                </p>
                <a href="/Produk" class="btn btn-light text-light main-color">Selengkapnya</a>
              </div>
            </div>
          </div>
          <div class="col hovered-card">
            <div class="card h-100">
              <img src="home/3.png" class="card-img-top" alt="..." />
              <div class="card-body">
                <h5 class="card-title">Asuransi Kesehatan</h5>
                <p class="card-text">
                  Memiliki asuransi kesehatan adalah cara terbaik untuk melindungi kesehatan dan finansial Anda serta keluarga. Dengan berasuransi bersama Supreme Life, Anda bisa menjalani hidup dengan perasaan tenang dan menikmati
                  momen-momen berharga bersama orang-orang tercinta.
                </p>
                <a href="/Produk" class="btn btn-light text-light main-color">Selengkapnya</a>
              </div>
            </div>
          </div>
          <div class="col hovered-card">
            <div class="card h-100">
              <img src="Home/1.png" class="card-img-top" alt="..." />
              <div class="card-body">
                <h5 class="card-title">Asuransi Properti</h5>
                <p class="card-text">
                  Miliki perlindungan terhadap segala risiko kerugian dari harta benda atau aset serta kehilangan produksi perusahaan yang bisa saja terjadi akibat rusaknya harta benda atau aset yang dijamin. Supreme Life hadir untuk
                  memproteksi aset-aset penting yang hilang akibat kerusakan.
                </p>
                <a href="/Produk" class="btn btn-light text-light main-color">Selengkapnya</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!--footers-->
    <footer class="footer" style="background-color: #6d8ddf">
      <div class="container">
        <div class="row justify-content-between">
          <div class="col md-6">
            <span class="footer-text">Supreme Life</span>
            <div class="footer-menu">
              <h6>Kategori</h6>
              <ul>
                <li>
                  <a href="/Produk">Layanan Kami</a>
                </li>
                <li>
                  <a href="/form">Bergabung Bersama</a>
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
        <p>&copy; copyright 2021 - Insurance Compay</p>
      </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
