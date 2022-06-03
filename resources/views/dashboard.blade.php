<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

  <title>Hello, world!</title>
  <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.1.1/css/all.css" />
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;1,400&display=swap');

    * {
      font-family: 'Roboto', sans-serif;
    }

    .activ {
      background-color: #ffffff;
      color: rgb(0, 0, 0);
    }

    .radius {
      border-radius: 20px;
    }

  </style>
</head>

<body>
  <!-- Navbar Start -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand h1 mb-0 ms-5" href="#">Simple Siakad</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
        aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="btn btn-primary rounded-pill me-5 activ" aria-current="page" href="#">Data Mahasiswa</a>
          </li>
          <li class="nav-item">
            <a class="btn btn-primary rounded-pill me-5" href="#">Input Data</a>
          </li>
          <li class="nav-item">
            <a class="btn btn-primary rounded-pill me-5" href="#">About Me</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Navbar End -->

  <!-- Content Start -->
  <!-- Datas -->
  <div class="pb-5"></div>
  <div class="container mt-5 mb-5">
    <div class="content">
      <h1 class="fw-bold h1 text-primary">Data Mahasiswa</h1>
      <div class="row">
        <div class="col-sm-6 mb-3">
          <div class="card radius">
            <div class="card-body">
              <div class="d-flex justify-content-between">
                <h5 class="card-title fw-bold text-capitalize">Ahmad Farisul Haq</h5>
                <div class="menu">
                  <a href="" class="fs-3 text-danger me-3"><i class="fa-solid fa-trash-can"></i></a>
                  <a href="" class="fs-3 text-primary"><i class="fas fa-edit"></i></a>
                </div>
              </div>
              <div class="d-flex justify-content-between">
                <p class="card-text">200411100171</p>
                <p class="card_text">faries@89@gmail.com</p>
              </div>
              <p class="card-text text-capitalize">jl. raya sumenep</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Forms -->
  <div class="pb-5"></div>
  <div class="container mt-5 mb-5">
    <div class="content">
      <form>
        <div class="row">
          <div class="col-sm-6 mb-3">
            <label for="name" class="form-label">Nama Mahasiswa</label>
            <input type="text" class="form-control is-invalid" id="name" name="name" />
            <div class="invalid-feedback">Looks good!</div>
          </div>
          <div class="col-sm-6 mb-3">
            <label for="email" class="form-label">Alamat Email</label>
            <input type="text" class="form-control" id="email" name="email" />
          </div>
          <div class="col-sm-6 mb-3">
            <label for="NIM" class="form-label">Email address</label>
            <input type="text" class="form-control" id="NIM" name="nim" />
          </div>
          <div class="col-sm-6 mb-3">
            <label for="alamat" class="form-label">Alamat Rumah</label>
            <input type="text" class="form-control" id="alamat" name="alamat" />
          </div>
        </div>
        <div class="d-flex flex-row-reverse">
          <button type="submit" class="btn btn-primary">Submit Data</button>
        </div>
      </form>
    </div>
  </div>
  <!-- About -->
  <div class="container mt-5 mb-5">
    <div class="content">
      <div class="mx-auto" style="width: 18rem">
        <img src="faris.jpg" class="card-img-top" alt="..." />
        <div class="card-body">
          <h5 class="fw-bolder text-center text-primary">Ahmad Farisul Haq</h5>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <h1 class="fw-bolder text-primary h1">Background</h1>
          <p>
            Nama saya Ahmad Farisul Haq, bisa dipanggil Faris, saya lahir di sumenep pada tanggal .. bulan .. tahun ....
            bisa diisi sendiri, Hobi saya adalah bermain, terutama bermain bola dan sebagainya yang penting bola. saya
            kuliah di
            Universitas Trunojoyo Madura. Sebelumnya saya kuliah, saya pastinya sekolah SMA yaitu di SMAN 1 Sumenep.
          </p>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <h1 class="fw-bolder text-primary h1">Suka Duka Praktikum PAW</h1>
          <p>Suka duka praktikum PAW tidak bisa saya sampaikan dengan kata-kata, karena saya tidak mengerti apa yang
            harus saya sampaikan.</p>
        </div>
      </div>
    </div>
  </div>
  <!-- Content End -->

  <!-- Footer Start -->
  <footer class="text-center text-lg-start text-white bg-primary">
    <!-- Section: Links  -->
    <section class="pt-1">
      <div class="container text-center text-md-start">
        <!-- Grid row -->
        <div class="row mt-3">
          <!-- Grid column -->
          <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
            <!-- Content -->
            <img src="UTM.png" alt="sayang" width="100" />
            <h6 class="text-uppercase fw-bold mb-4">Jurusan Teknik Informatika Universitas Trunojoyo Madura</h6>
            <p class="text-capitalize">jl. raya telang, kecamatan kamal, bangkalan 69162 indonesia kampus universitas
              trunojoyo madura</p>
          </div>
          <!-- Grid column -->
          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
            <p>
              <a href="#!" class="text-reset text-decor text-decoration-none">Telp : 031-3011146</a>
            </p>
            <p>
              <a href="#!" class="text-reset text-decoration-none">Fax : 031-3011506</a>
            </p>
            <p>
              <a href="#!" class="text-reset text-decoration-none">Email : if.ft@trunojoyo.ac.id</a>
            </p>
          </div>
          <!-- Grid column -->
          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">layanan</h6>
            <p>
              <a href="#!" class="text-reset text-decoration-none">Pembayaran UKT</a>
            </p>
            <p>
              <a href="#!" class="text-reset text-decoration-none">Pendaftaran KP</a>
            </p>
            <p>
              <a href="#!" class="text-reset text-decoration-none">Pendaftaran Wisuda</a>
            </p>
            <p>
              <a href="#!" class="text-reset text-decoration-none">Administrasi</a>
            </p>
          </div>
          <!-- Grid column -->
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">Resource</h6>
            <p>e-Journal</p>
            <p>Portal Tugas Akhir</p>
            <p>Website Resmi Kampus</p>
            <p>Download Administrasi</p>
          </div>
          <!-- Grid column -->
        </div>
        <!-- Grid row -->
      </div>
    </section>
    <!-- Section: Links  -->
  </footer>
  <!-- Footer End -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>
