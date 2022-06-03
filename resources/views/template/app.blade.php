<!DOCTYPE html>
<html lang="en">

<head>
  @include('template.partials.head')
  <title>{{ $title }}</title>
</head>

<body>
  <!-- Navbar Start -->
  @include('template.partials.navbar')
  <!-- Navbar End -->

  <!-- Content Start -->
  <!-- Datas -->
  <div class="pb-5"></div>
  <div class="container mt-5 mb-5">
    <div class="content">
      <h1 class="fw-bold h1 text-primary">{{ $title }}</h1>
      @yield('content')
    </div>
  </div>
  <!-- Content End -->

  <!-- Footer Start -->
  @include('template.partials.footer')
  <!-- Footer End -->
  @include('template.partials.scripts')

  {{-- pesan alert --}}
  @if (session()->has('success'))
    <script>
      Swal.fire({
        title: 'Success!',
        text: '{{ session()->get('success') }}',
        icon: 'success',
        confirmButtonText: 'Ok'
      })
    </script>
  @endif
</body>

</html>
