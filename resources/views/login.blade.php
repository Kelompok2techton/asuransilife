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
  </head>

  <body style="background-color: #6d8ddf60">
    <!--navbar-->
    <nav class="navbar navbar-expand-lg fixed-top" style="background-color: #6d8ddf">
      <div class="container">
        <a class="navbar-brand" style="color: white" href="#">
          <img src="Logo/6.png" alt="" width="50" />
          Supreme Life
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item mx-3">
              <a class="nav-link" style="color: white" aria-current="page" href="Home.html">Home</a>
            </li>
            <li class="nav-item mx-3">
              <a class="nav-link" style="color: white" href="Produk.html">Produk</a>
            </li>
            <li class="nav-item mx-3">
              <a class="nav-link" style="color: white" href="Tentang.html">About Us</a>
            </li>
            <li class="nav-item mx-3">
              <a class="nav-link active" style="color: white" href="Daftar.html"><strong>Sign Up</strong></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- content -->
    <div class="container" style="margin-top: 150px">
      <div class="row justify-content-center mt-5">
        <div class="col-md-4">
          <div class="card">
            <div class="card-header bg-transparent mb-0">
              <h5 class="text-center"><span class="font-weight-bold text-primary">Sign Up</span></h5>
            </div>
            <div class="card-body">
              <form action="">
                <div class="form-group" style="margin-bottom: 10px">
                  <input type="text" name="" class="form-control" placeholder="Username" />
                </div>
                <div class="form-group">
                  <input type="text" name="" class="form-control" placeholder="Password" />
                  <small id="emailHelp" class="form-text text-muted">Please use unique elements : ThisisPassword_@123</small>
                </div>
                <div class="form-group" style="margin-top: 10px">
                  <input type="submit" name="Sign Up" value="Sign Up" class="btn btn-primary btn-block" />
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
