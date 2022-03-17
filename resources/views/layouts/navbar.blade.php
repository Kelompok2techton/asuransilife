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
              <a class="nav-link {{($title == 'Home' ? 'active':'')}}"  aria-current="page" href="/">Home</a>
            </li>
            <li class="nav-item mx-3">
              <a class="nav-link {{($title == 'Produk' ? 'active':'')}}" href="/Produk">Produk</a>
            </li>
            <li class="nav-item mx-3">
              <a class="nav-link {{($title == 'Form' ? 'active':'')}}" href="/form">Daftar</a>
            </li>
            <li class="nav-item mx-3">
              <a class="nav-link {{($title == 'Tentang' ? 'active':'')}}" href="/Tentang">About Us</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>