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
    <title>Supreme Life</title>
    <link rel="shortcut icon" href="favicon.ico" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </head>

  <body>
    <!--navbar-->
    @include('layouts/navbar')

    <!--form-->
    <table class="table" style="margin-top: 75px" >
    <tr>
      <th scope="col">ID</th>
      <th scope="col" class="ouput" id="tampil1" onChange="tampilnama()">Nama</th>
      <th scope="col" id="jenisAsuransi" onChange="tampiljenisAsuransi()">Jenis Asuransi</th>
      <th scope="col" id="kelas">Kelas</th>
      <th scope="col" >Jenis Kelamin</th>
      <th scope="rocolw">NIK</th>
      <th scope="col">Nomor Telpon</th>
      <th scope="col">Umur</th>
      <th scope="col">Alamat</th>
      <th scope="col">Tempat lahir</th>
      <th scope="col">Tanggal Lahir</th>
      <th scope="col">No KTP</th>
      <th scope="rcolow">Gaji</th>
      <th scope="row">KK</th>
      <th scope="col">Email</th>
      <th scope="rocolw">Post</th>
    </tr>
</table>
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
        <p>&copy; copyright 2021 - Insurance Compay</p>
      </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="operan.js"></script>

  </body>
</html>
