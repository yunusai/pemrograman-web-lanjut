@extends('layouts.layout1')

@section('title', 'Save Link')

@section('content')
<!-- Form Data -->
<div class="container card mt-5 col-md-8">
  <div class="card-header fw-bold">Save your link by register it in this form</div>
  <div class="card-body">
      <form action="create" method="get">
          <div class=" mb-3">
              <label for="task" class="form-label">Catatan/Nama</label>
              <input type="text" class="form-control" id="note" name="note" required>
          </div>
          <div class="mb-3">
              <label for="link" class="form-label">Link*</label>
              <input type="text" class="form-control" id="link" name="link" required>
          </div>
          <div class="mt-2 fw-1">
              *Untuk fungsi youtube saver tolong masukkan alamat lengkap(beserta https:// nya)
          </div>

          <div class="d-flex justify-content-center">
              <button type="submit" name="submit" class="btn btn-primary text-center">Save</button>
            </div>

          <br>
          <div class="container-fluid text-center">Untuk melihat hasil youtube silahkan pindah ke 
            halaman
            <br>
            <a type="button" class="btn btn-primary btn-sm " href="youtubeView">Youtube View</a>
          </div>
      </form>
  </div>
</div>
<!-- End Form Data -->

<!-- Table -->
<div class="container mt-5 col-md-8">
    <table class="table p-3">
        <thead class="bg-dark text-white text-decoration-none">
            <tr>
                <th scope="col">Catatan/Nama</th>
                <th scope="col">Link</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @if ($data->isEmpty())
            <tr>
                <td colspan="3" class="text-center">Belum ada link yang disimpan</td>
            </tr>
            @else
          <tr>
          @foreach ($data as $datas)
            <td>{{ $datas -> note }}</td>
            <td>{{ $datas -> link }}</td>
            <td>
              <a href="delete/{{ $datas -> id }}" class="btn btn-danger">Delete</a>
            </td>
          </tr>
          @endforeach
          @endif
        </tbody>
    </table>
</div>
<!-- End Table -->
@endsection