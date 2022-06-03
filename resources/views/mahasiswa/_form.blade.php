<div class="row">
  <div class="col-sm-6 mb-3">
    <label for="name" class="form-label">Nama Mahasiswa</label>
    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name"
      value="{{ old('name', $mhs->name) }}" />
    @error('name')
      <div class="invalid-feedback">{{ $message }}</div>
    @enderror
  </div>
  <div class="col-sm-6 mb-3">
    <label for="email" class="form-label">Alamat Email</label>
    <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email"
      value="{{ old('email', $mhs->email) }}" />
    @error('email')
      <div class="invalid-feedback">{{ $message }}</div>
    @enderror
  </div>
  <div class="col-sm-6 mb-3">
    <label for="NIM" class="form-label">NIM</label>
    <input type="text" class="form-control @error('nim') is-invalid @enderror" id="NIM" name="nim"
      value="{{ old('nim', $mhs->nim) }}" />
    @error('nim')
      <div class="invalid-feedback">{{ $message }}</div>
    @enderror
  </div>
  <div class="col-sm-6 mb-3">
    <label for="alamat" class="form-label">Alamat Rumah</label>
    <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="alamat" name="alamat"
      value="{{ old('alamat', $mhs->alamat) }}" />
    @error('alamat')
      <div class="invalid-feedback">{{ $message }}</div>
    @enderror
  </div>
</div>
