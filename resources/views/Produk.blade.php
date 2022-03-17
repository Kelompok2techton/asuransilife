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
    <title>Supreme life | <?= $title;?></title>
    <link rel="shortcut icon" href="favicon.ico" />
  </head>

  <body>
    <!--navbar-->
    @include('layouts/navbar')

    <!--benner-->
    <section class="container-fluid banner">
      <div class="container banner-text col-lg-6">
        <div class="text-center">
          <p class="fs-1">PRODUK LAYANAN KAMI AKAN MENEMANI ANDA</p>
          <p class="d-none d-md-block">Anda berminat? Produk asuransi kami berfokus dan berkinerja dalam bidang tertentu sehingga kami dapat memuaskan keinginan anda dalam pengalaman berasuransi</p>
        </div>
      </div>
    </section>

    <section class="container">
      <div class="row mb-4">
        <div class="col text-center py-5">
          <h1>Produk Kami</h1>
          <center>
            <hr class="line" />
          </center>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4 py-5">
          <img class="w-100" src="https://life.futuregenerali.in/media/408244/traditional-life-insurance.jpg" alt="produk satu" />
        </div>
        <div class="col-md-8 py-5">
          <h1 id="asjiw">Asuransi Jiwa</h1>
          <p>
            Pada Asuransi ini kami berjanji jika Anda meninggal, atau didiagnosis menderita penyakit terminal, sejumlah uang akan dibayarkan kepada (biasanya) pasangan atau anak-anak Anda. Kami juga berjanji anda dapat memiliki manfaat
            warisan tersebut dibayarkan kepada anggota lain di keluarga Anda.
          </p>
          <a href="/Produk1" class="btn btn-light text-light main-color">Selengkapnya</a>
        </div>
      </div>
      <div class="row">
        <div class="col-md-8 py-5">
          <h1 id="askes">Asuransi Kesehatan</h1>
          <p>
            Tentunya Asuransi Kesehatan harus melekat pada diri kita, karena jenis asuransi ini menanggung biaya pengobatan yang timbul akibat suatu penyakit. Pengeluaran tersebut dapat berkaitan dengan biaya rawat inap, biaya obat-obatan
            atau biaya konsultasi dokter.
          </p>
          <a href="/Produk2" class="btn btn-light text-light main-color">Selengkapnya</a>
        </div>
        <div class="col-md-4 py-5">
          <img class="w-100" src="https://i.pinimg.com/736x/46/2e/b1/462eb1060029ed4d0f071797b4a6627f.jpg" alt="produk dua" />
        </div>
      </div>
      <div class="row">
        <div class="col-md-4 py-5">
          <img class="w-100" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRKZ0fVkXxCeSQrsCI798pZNKRtu7agKJqXFQ&usqp=CAU" alt="produk tiga" />
        </div>
        <div class="col-md-8 py-5">
          <h1 id="aspro">Asuransi Properti</h1>
          <p>
            Asuransi pemilik rumah tidak hanya melindungi rumah dan barang-barang Anda dari pencurian, kebakaran, kecelakaan, dan bahkan cuaca, tetapi juga merupakan keharusan untuk menerima hipotek. Asuransi pemilik rumah sering
            disalahpahami karena melindungi lebih dari sekadar rumah fisik Anda dan barang-barang di dalamnya.
          </p>
          <a href="/Produk3" class="btn btn-light text-light main-color">Selengkapnya</a>
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
          <p>copyright &copyright 2021 - Insurance Company</p>
        </div>
      </footer>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
