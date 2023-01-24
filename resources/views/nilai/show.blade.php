@extends('index')

@section('content')
    <div class="row mt-5 mb-5">
        <div class="col-lg-12 margin-tb">
            <div class="text-center">
                <h2> Show Siswa</h2>
            </div>
            <div class="float-right mx-4">
                <a class="btn btn-secondary" href="{{ route('nilai.index') }}"> Kembali</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group mx-4 my-2">
                <strong>NIS:</strong>
                {{ $nilai->NIS }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group mx-4 my-2">
                <strong>Nama Siswa:</strong>
                {{ $nilai->Nama }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group mx-4 my-2">
                <strong>Mapel:</strong>
                {{ $nilai->Mapel }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group mx-4 my-2">
                <strong>Nilai:</strong>
                {{ $nilai->Nilai }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group mx-4 my-2">
                <strong>Predikat:</strong>
                {{ $nilai->Predikat }}
            </div>
        </div>
    </div>
@endsection