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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <title>Supreme Life</title>
    <link rel="shortcut icon" href="favicon.ico" />

    </head>

  <body>
    <!--navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color: #6d8ddf">
      <div class="container">
        <a class="navbar-brand" style="color: white" href="/">
          <img src="Logo/6.png" alt="" width="50" />
          Supreme Life
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item mx-3">
              <a class="nav-link {{($title == 'Admin' ? 'active':'')}}"  aria-current="page" href="/admin">Form</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!--form-->


<!--  -->
    <!--<table>
      @foreach($posts as $post)
        <tr>
        <th scope="row">{{$post->nama}}</th>
        <th scope="row">{{$post->notlp}}</th>
       
      </tr>
      @endforeach
    </table>
    -->
    <footer class="footer" style="background-color: #6d8ddf; margin-top:100px;">
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
                  <a href="Daftar.html">Produk Kami</a>
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
