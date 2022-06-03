@extends('template.app')
@section('content')
  <div class="row">
    @forelse ($mahasiswa as $mhs)
      <div class="col-sm-6 mb-3">
        <div class="card radius">
          <div class="card-body">
            <div class="d-flex justify-content-between">
              <h5 class="card-title fw-bold text-capitalize">{{ $mhs->name }}</h5>
              <div class="menu">
                <a onclick="document.getElementById('hapus{{ $mhs->id }}').submit()" class="fs-3 text-danger me-3"><i
                    class="fa-solid fa-trash-can"></i></a>
                <a href="{{ route('mahasiswa.edit', $mhs) }}" class="fs-3 text-primary"><i
                    class="fas fa-edit"></i></a>
              </div>
            </div>
            <form action="{{ route('mahasiswa.destroy', $mhs) }}" method="post" id="hapus{{ $mhs->id }}">
              @method('delete')
              @csrf
            </form>
            <div class="d-flex justify-content-between">
              <p class="card-text">{{ $mhs->nim }}</p>
              <p class="card_text">{{ $mhs->email }}</p>
            </div>
            <p class="card-text text-capitalize">{{ $mhs->alamat }}</p>
          </div>
        </div>
      </div>
    @empty
      <div class="col-sm-12 mb-3">
        <div class="card radius">
          <div class="card-body">
            <div class="text-center">
              <h5 class="card-title fw-bold text-capitalize">Tidak Ada Data</h5>
            </div>
          </div>
        </div>
      </div>
    @endforelse

  </div>
@endsection
