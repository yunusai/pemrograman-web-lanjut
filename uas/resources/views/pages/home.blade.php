@extends('layouts.layout1')

@section('title', 'Home')

@section('content')
<main class="text-center pb-5">
        <h2>Selamat Datang di SaveYourLink.</h2>
      Situs penyimpanan link yang akan memudahkan hidup Anda dengan cara yang sederhana.
      Pindah ke <a type="button" class="btn btn-primary" href="/saveLink">Save Link</a> .
      <br>Lalu simpan link mu dengan mengisi form yang ditampilkan.  Isikan Catatan/Nama untuk menandai link mu.
      Dan <br>isikan alamat link yang ingin disimpan pada form.
       <br> <img src="{{ asset('assets/isi-form-biasa.png') }}" width="50%" height="50%" alt="">
      <br> Inputan tersebut akan ditampilkan pada tabel <br>
      <img src="{{ asset('assets/tampil-tabel-biasa.png') }}" width="50%" height="50%" alt="">
      <br> Link dapat juga disimpan menggunakan Youtube Saver. <br>
      <img src="{{ asset('assets/isi-form-yt.png') }}" width="50%" height="50%" alt="">
      <br> link tersebut akan disimpan pada tabel seperti Save to List <br>
      <img src="{{ asset('assets/tampil-tabel-yt.png') }}" width="50%" height="50%" alt="">
      <br> Tapi yang istimewa dari Youtube Saver adalah link akan ditampilkan menjadi
      playlist video kecil di <a type="button" class="btn btn-primary" href="/youtubeView">Youtube View</a>
      <br> <img src="{{ asset('assets/tampil-yt.png') }}" width="50%" height="50%" alt="">
  </main>
@endsection


