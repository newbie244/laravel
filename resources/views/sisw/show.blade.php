@extends('index')

@section('content')
    <div class="row mt-5 mb-5">
        <div class="col-lg-12 margin-tb">
            <div class="text-center">
                <h2> Show Siswa</h2>
            </div>
            <div class="float-right mx-4">
                <a class="btn btn-secondary" href="{{ route('sisw.index') }}"> Kembali</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group mx-4 my-2">
                <strong>NIS:</strong>
                {{ $sisw->NIS }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group mx-4 my-2">
                <strong>Nama Siswa:</strong>
                {{ $sisw->NamaSiswa }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group mx-4 my-2">
                <strong>Alamat:</strong>
                {{ $sisw->Alamat }}
            </div>
        </div>
    </div>
@endsection