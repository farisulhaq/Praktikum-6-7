@extends('template.app')
@section('content')
  <form action="{{ route('mahasiswa.update', $mhs->id) }}" method="post">
    @method('put')
    @csrf
    @include('mahasiswa._form')
    <div class="d-flex flex-row-reverse">
      <button type="submit" class="btn btn-primary">{{ $submit }}</button>
    </div>
  </form>
@endsection
