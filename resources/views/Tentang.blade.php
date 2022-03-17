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
    <title>Supreme Life | <?= $title;   ?></title>
    <link rel="shortcut icon" href="favicon.ico" />
  </head>

  <body>
    <!--navbar-->
    @include('layouts/navbar')

    <!--benner-->
    <section class="container-fluid banner">
      <div class="container banner-text col-lg-6">
        <div class="text-center">
          <p class="fs-1">MENGENAL LEBIH JAUH COMPANY KAMI</p>
          <p class="d-none d-md-block">Supreme Life Insurance Company Of Indonesia adalah perusahaan asuransi dan manajer aset terkemuka di dunia dengan 100 juta nasabah personal dan perusahaan.</p>
        </div>
      </div>
    </section>

    <!--sejarah-->
    <section class="container py-5">
      <div class="row mb-4">
        <div class="col text-right">
          <h1>Sejarah Perusahaan</h1>
          <hr />
        </div>
      </div>
      <div class="col text-right">
        <p>
          Sejak 1995, Supreme Life Insurance Company Of Indonesia telah menyediakan berbagai produk proteksi dan pengelolaan kekayaan, yang meliputi asuransi jiwa, asuransi pendidikan, asuransi kesehatan, dan perencanaan hari tua kepada
          para nasabah. Di Spreme Life Indonesia, kami memiliki tujuan yang jelas: membantu para nasabah kami mencapai kemapanan finansial dan menjalani hidup yang lebih sehat. Setiap tahun Supreme Life Indonesia mengalami pertumbuhan yang
          signifikan di pasar di mana kami beroperasi. Kami terus berupaya untuk meningkatkan produk dan layanan kami demi memenuhi kebutuhan para nasabah. Para karyawan serta perencana keuangan kami selalu bekerja keras untuk meraih
          kepercayaan nasabah, dan kami akan terus mengembangkan jalur distribusi keagenan (konvensional dan syariah) dan distribusi kemitraan. Saat ini kami menyediakan berbagai produk inovatif kepada para nasabah melalui lebih dari 12
          kantor pemasaran konvensional dan 49 kantor pemasaran syariah di seluruh Indonesia.
        </p>
      </div>
    </section>

    <!--konten-->
    <section class="section">
      <div class="container">
        <div class="content-section">
          <div class="content">
            <h2>Yang Telah Kami Raih</h2>
            <p>
              Supreme Life telah meraih beragam apresiasi publik di antaranya The Global CSR Awards 2020 untuk Best Workplace Practices kategori platinum dari Pinnacle Group Singapura, Contact Center Service Excellent selama lima tahun
              berturut-turut (2016-2020) dari Majalah Service Excellent, Indonesia Trusted Company selama empat tahun berturut-turut (2016-2019) dari The Indonesia Institute for Corporate Governance (IICG) yang bekerja sama dengan Majalah
              SWA. Supreme Life terdaftar dan diawasi oleh Otoritas Jasa Keuangan (OJK).
            </p>
          </div>
        </div>
        <div class="image-section">
          <img src="Image Penghargaan/3.jpg" />
        </div>
      </div>
    </section>

    <!--perhargaan-->
    <section class="section-reward">
      <div class="container">
        <div class="row mb-4">
          <div class="col text-center">
            <h1>Penghargaan Perusahaan</h1>
            <center>
              <hr class="line" />
            </center>
          </div>
        </div>
        <div class="row row-cols-1 row-cols-md-4 g-4">
          <div class="col">
            <div class="card h-100">
              <img src="Image Penghargaan/1.jpg" class="card-img-top" alt="..." />
              <div class="card-body">
                <h5 class="card-title">Agustus, 201</h5>
                <p class="card-text">
                  Peringkat Pertama sebagai Perusahaan Asuransi Terbaik yang memiliki Aset hingga Rp. 100 Miliar, dan peringkat pertama sebagai Perusahaan Asuransi Terbaik 2013 dengan Pertumbuhan Tertinggi yang memiliki Aset hingga Rp 100
                  Milliar.
                </p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card h-100">
              <img src="Image Penghargaan/2.jpg" class="card-img-top" alt="..." />
              <div class="card-body">
                <h5 class="card-title">Januari, 2013</h5>
                <p class="card-text">
                  Predikat Perusahaan Asuransi umum terbaik 2013 menduduki peringkat pertama di bidang Teknologi Informasi,Sumber Daya Manusia, Manajemen Resiko,Komunikasi Perusahaan, Keuangan dan Tata Kelola Perusahaan.
                </p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card h-100">
              <img src="Image Penghargaan/4.jpg" class="card-img-top" alt="..." />
              <div class="card-body">
                <h5 class="card-title">Juni, 2011</h5>
                <p class="card-text">Call Center Award 2011 for Service Excellence untuk kategori Car Insurance, Peringkat Good, diselenggarakan pada tahun 2011 oleh Center Customer Satisfaction & Loyalty (CCSL) dan Majalah Marketing.</p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card h-100">
              <img src="Image Penghargaan/5.jpg" class="card-img-top" alt="..." />
              <div class="card-body">
                <h5 class="card-title">Agustus, 2010</h5>
                <p class="card-text">
                  Call Center Award 2010 for Service Excellence untuk kategori Car Insurance dan yang ke 2 kali ini mendapat peringkat Excellence Rating. diselenggarakan pada tahun 2010 oleh Center Customer Satisfaction & Loyalty (CCSL) dan
                  Majalah Marketing.
                </p>
              </div>
            </div>
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
