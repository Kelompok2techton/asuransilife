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
    <div class="container" style="margin-top: 100px">
      <form action="/storeform" method="post">
      @csrf
        <div class="mb-3">
          <label for="formGroupExampleInput" class="form-label">Nama Lengkap</label>
          <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama Lengkap Anda" onChange="ambildata()">
        </div>
        <div class="mb-3">
          <label for="exampleFormControlSelect1">Jenis Asuransi</label>
          <select class="form-control" name="jenisAsuransi">
            <option value="none">Pilih Jenis Asuransi</option>  
            <option value="kesehatan">Kesehatan</option>
            <option value="jiwa">Jiwa</option>
            <option value="properti">Properti</option>
        </select>
            
        
        <small style="color: gray;">Hanya jika anda memilih asuransi kesehatan!</small>
        </div>
        <div class="form-group">
            <label for="inputState">Jenis Kelamin</label>
            <select name="jenisKelamin" class="form-control">
                <option selected>Pilih...</option>
                <option >Pria</option>
                <option>Wanita</option>
            </select>
        </div>
        <div class="mb-3">
          <label for="exampleFormControlInput1">NIK</label>
          <input type="email" class="form-control" required name="nik" placeholder=""/>
        </div>
        <div class="mb-3">
          <label for="exampleFormControlInput1">Nomor Telpon</label>
          <input type="email" class="form-control" name="notelp" placeholder="08**********"  />
        </div>
        <div class="mb-3">
          <label for="exampleFormControlInput1">Umur</label>
          <input type="email" class="form-control" name="umur" placeholder=""/>
        </div>
        <div class="mb-3">
          <label for="exampleFormControlTextarea1" class="form-label">Alamat Lengkap</label>
          <textarea class="form-control" name="alamat" rows="3" placeholder="Masukkan Alamat Lengkap Anda"></textarea>
        </div>
        <div class="mb-3">
          <label for="formGroupExampleInput" class="form-label">Tempat Lahir </label>
          <input type="text" class="form-control" name="tmptLahir" placeholder="Masukkan Tempat Lahir Anda" />
        </div>
        <div class="mb-3">
          <label for="formGroupExampleInput" class="form-label"> Tanggal Lahir </label>
          <input type="date" name="tglLahir" class="form-control" />
        </div>
        <div class="form-group">
          <label for="exampleFormControlFile1">KTP</label>
          <input type="file" class="form-control-file" name="ktp" style="margin-left: 95px" />
        </div>
        <p></p>
        <div class="form-group">
          <label for="exampleFormControlFile1">Slip Gaji</label>
          <input type="file" class="form-control-file" name="gaji" style="margin-left: 65px"  />
        </div>
        <p></p>
        <div class="form-group">
          <label for="exampleFormControlFile1">Kartu Keluarga</label>
          <input type="file" class="form-control-file" name="kk"  style="margin-left: 20px" />
        </div>
        <p></p>
        <div class="form-group">
          <label for="exampleFormControlInput1">Email address</label>
          <input type="email" class="form-control" name="email" placeholder="name@example.com"/>
        </div>
        <button type="button" class="btn btn-primary">Submit</button>
      </form>
    </div>

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

  </body>
</html>
