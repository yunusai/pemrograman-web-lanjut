<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="author" content="Muhammad Yunus Saifullah">
  <meta name="content" content="start, home, first page, saveyourlink, save link, save your link, save, your, link">
  <link rel="stylesheet" href="style/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
  <link rel="shortcut icon" href="{{ asset('assets/logo.png') }}" type="image/png" />
    <title>@yield('title') - SaveYourLink</title>
</head>

<body>

  <!--
    HEADER
  -->
  <header class="p-2 text-bg-dark">
    <div class="container">
      <div class="d-flex flex-wrap justify-content-center">
        <a href="/" class="d-flex text-decoration-none">
          <img src="{{ asset('assets/logo.png') }}" alt="Logo" width="40" height="40" class="bi me-0 d-inline-block align-text-top">
          <span class="fs-4 text-decoration-none text-light">SaveYourLink</span>
        </a>

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-0 justify-content-center mb-md-0">
          <li><a href="/" class="nav-link px-3 text-white">Beranda</a></li>
          <li><a href="/saveLink" class="nav-link px-3 text-white">Save Link</a></li>
          <li><a href="/youtubeView" class="nav-link px-3 text-white">Youtube View</a></li>
          <li><a href="/tentang" class="nav-link px-3 text-white">Tentang</a></li>
        </ul>
    </div>
</div>
</header>
    @yield('content')
    <footer align="center" class="fixed-bottom bg-black text-light">
        Copyright &copy; Yunus 2023
</footer>
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
</script>
</body>
    
</html>