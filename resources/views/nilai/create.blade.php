@extends('index')

@section('content')
<div class="row mt-5 mb-5">
    <div class="col-lg-12 margin-tb">
        <div class="text-center">
            <h2>Create New Nilai</h2>
        </div>
        <div class="float-right mx-4">
            <a class="btn btn-secondary" href="{{ route('nilai.index') }}"> Kembali</a>
        </div>
    </div>
</div>

@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> Input gagal.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('nilai.store') }}" method="POST">
    @csrf

     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group mx-3 my-2">
                <strong>Nama Siswa:</strong>
                <select name="NamaSiswa_id" id="nama" class="form-control">
                    @foreach ($nama as $no)
                    <option name="NamaSiswa_id">{{$no->NamaSiswa}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group mx-3 my-2">
                <strong>Mapel:</strong>
                <select class="form-select col-md-10" name ="Mapel">
                    <option value="IPA">IPA</option>
                    <option value="IPS">IPS</option>
                    <option value="MTK">MTK</option>
                    <option value="PKN">PKN</option>
                    <option value="TIK">TIK</option>
                    <option value="SBK">SBK</option>
                    <option value="Agama">Agama</option>
                    <option value="Penjas">Penjas</option>
                    <option value="Bahasa Jawa">Bahasa Jawa</option>
                    <option value="Bahasa Indonesia">Bahasa Indonesia</option>
                    <option value="Bahasa Inggris">Bahasa Inggris</option>
                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group mx-3 my-2">
                <strong>Nilai:</strong>
                <input type="text" name="Nilai" class="form-control" placeholder="Nilai SISWA">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group mx-3 my-2">
                <strong>Predikat:</strong>
                <input type="text" name="Predikat" class="form-control" placeholder="Predikat SISWA">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center my-2">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>

</form>
@endsection