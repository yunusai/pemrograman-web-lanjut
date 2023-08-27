@extends('layouts.layout1')

@section('title', 'Youtube View')

@section('content')
<!--Tampilkan video-->
    <div class="album py-5 bg-body-tertiary">
        <div class="container">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                    
                        @if ($data->isEmpty())
                        <div class="mx-auto text-center">
                            Kamu belum memasukkan link video youtube sama sekali <br>
                            Silahkan masukan link mu di
                            <a type="button" class="btn btn-primary" href="/saveLink">Save Link</a>
                        </div>
                        @else
                      <tr>
                      @foreach ($data as $datas)
                      <div class="col">
                        <div class="card shadow-sm">
                            <iframe class="bd-placeholder-img card-img-top" width="100%" height="225" 
                            xmlns="http://www.w3.org/2000/svg" 
                            preserveAspectRatio="xMidYMid slice" src="{{ $datas -> link }}" title="YouTube video player" 
                            frameborder="0" allow="accelerometer; autoplay; clipboard-write; 
                            encrypted-media; gyroscope; picture-in-picture; web-share" 
                            allowfullscreen></iframe>
                            <div class="card-body">
                                <p class="card-text">{{ $datas -> note }}</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <a href="/delete/{{ $datas -> id }}" class="btn btn-danger">Delete</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                      @endforeach
                      @endif
                      @if ($data->isNotEmpty())
                    <div class="col">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <p class="card-text">Tambah link pada <a type="button" class="btn btn-primary" href="/saveLink">Save Link</a></p>
                            </div>
                        </div>
                    </div>
                    @endif
            </div>
        </div>
    </div>
    <!--Akhir Tampilkan Video-->
@endsection