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
          <a class="btn btn-primary rounded-pill me-5 {{ request()->routeIS('mahasiswa.index') ? 'activ' : '' }}"
            href="{{ route('mahasiswa.index') }}">Data Mahasiswa</a>
        </li>
        <li class="nav-item">
          <a class="btn btn-primary rounded-pill me-5 {{ request()->routeIS('mahasiswa.create') ? 'activ' : '' }}"
            href="{{ route('mahasiswa.create') }}">Input Data</a>
        </li>
        <li class="nav-item">
          <a class="btn btn-primary rounded-pill me-5 {{ request()->routeIS('about') ? 'activ' : '' }}"
            href="{{ route('about') }}">About Me</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
