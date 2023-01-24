@extends('index')

@section('content')
    <div class="row mt-5 mb-5">
        <div class="col-lg-12 margin-tb">
            <div class="text-center mb-4">
                <h2>Edit Dosen</h2>
            </div>
            <div class="float-right mx-4">
                <a class="btn btn-secondary" href="{{ route('dosen.index') }}"> Kembali</a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('dosen.update',$dosen->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group mx-3 my-2">
                <strong>NIP:</strong>
                <input type="text" name="NIP" class="form-control" placeholder="" value="{{ $dosen->NIP }}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group mx-3 my-2">
                <strong>Nama:</strong>
                <input type="text" name="Dosen" value="{{ $dosen->Dosen }}" class="form-control" placeholder="NAMA DOSEN">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group mx-3 my-2">
                <strong>Mapel:</strong>
                <input type="text" name="Mapel" value="{{ $dosen->Mapel }}" class="form-control" placeholder="Mapel">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group mx-3 my-2">
                <strong>Alamat:</strong>
                <textarea class="form-control" style="height:150px" name="Alamat" placeholder="Content">{{ $dosen->Alamat }}</textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center my-2">
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
    </div>

    </form>
@endsection