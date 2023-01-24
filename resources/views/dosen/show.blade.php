@extends('index')

@section('content')
    <div class="row mt-5 mb-5">
        <div class="col-lg-12 margin-tb">
            <div class="text-center">
                <h2> Show Dosen</h2>
            </div>
            <div class="float-right mx-4">
                <a class="btn btn-secondary" href="{{ route('dosen.index') }}"> Kembali</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group mx-4 my-2">
                <strong>NIP:</strong>
                {{ $dosen->NIP }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group mx-4 my-2">
                <strong>Nama Dosen:</strong>
                {{ $dosen->Dosen }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group mx-4 my-2">
                <strong>Mapel:</strong>
                {{ $dosen->Mapel }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group mx-4 my-2">
                <strong>Alamat:</strong>
                {{ $dosen->Alamat }}
            </div>
        </div>
    </div>
@endsection