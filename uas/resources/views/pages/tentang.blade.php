@extends('layouts.layout1')

@section('title', 'Tentang Kita')

@section('content')
<main class="awalan text-center pb-5">
  <h2>Tentang Web SaveYourLink</h2>
  <p>SaveYourLink adalah website penyimpan link yang dapat menyimpan segala link dan juga memiliki fitur penampil
      video youtube dengan fitur Youtube Saver yang dapat dengan mudah digunakan siapa saja. Website ini memiliki
      fungsi dan fasilitas untuk menyimpan link dan ditampilkan pada sebuah tabel di
      <a type="button" class="btn btn-primary" href="/saveLink">Save Link</a>. Link yang dimasukkan pengunjung
      akan tersimpan pada databse sehingga pengunjung dapat selalu mengakses/melihat link tersebut melewati website
      ini. Pengguna juga dapat menghapus atau mengupdate data yang sudah dimasukkan pada tabel. Link dapat diberi
      sebuah catatan atau nama untuk dijadikan penginat sebagai pengguna atau dipakai sebagai acuan untuk mencari link.
      Link dapat disimpan dengan 2 cara, yaitu Save to List dan Youtube Saver. Save to List memiliki fungsi untuk menyimpan
      link hanya pada tabel di <a type="button" class="btn btn-primary" href="/saveLink">Save Link</a>. jikalau
      Youtube Saver menyimpan pada tabel dan juga menampilkan video youtube pada <a type="button" class="btn btn-primary" href="/youtubeView">Youtube View</a>.

  </p>
  <br>
  <br>
  <br>
  <h2>Tentang Pembuat</h2>
  <br>
  <img src="{{ asset('assets/Foto-profil.jpg') }}" alt="Foto Diri" width="20%" height="10%">
  <div>
      <i>"Saya diselamatkan dari kematian untuk menemukan jalan hidup saya yang sebenarnya"</i>
  </div>
  <article style="text-align: center;">
      <h2>Overview</h2>
      <p>
          Selamat datang di Website saya SaveYourLink, Saya adalah author dari website ini. Nama lengkap
          saya adalah Muhammad Yunus Saifullah. Biasa dipanggil Yunus. Saya sedang menempuh pendidikan
          di Universitas Dian Nuswantoro.
      </p>
  </article>
  <div>
      Kontak
  </div>
  <a href="https://www.instagram.com/potarikko/"><img src="{{ asset('assets/logo-ig.png') }}" alt="Instagram" width="5%" height="5%"></a>
</main>
@endsection