@extends('index')

@section('content')
    <div class="row mt-5 mb-5">
        <div class="col-lg-12 margin-tb">
            <div class="text-center mb-4">
                <h2>Edit Nilai</h2>
            </div>
            <div class="float-right mx-4">
                <a class="btn btn-secondary" href="{{ route('nilai.index') }}"> Kembali</a>
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

    <form action="{{ route('nilai.update',$nilai->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="row">
            <!-- <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group mx-3 my-2">
                    <strong>NIS:</strong>
                    <input type="text" name="NIS" class="form-control" placeholder="NIS SISWA" value="{{ $nilai->NIS }}">
                </div>
            </div> -->
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group mx-3 my-2">
                    <strong>Nama Siswa:</strong>
                    <input type="text" name="NamaSiswa_id" class="form-control" placeholder="Nilai SISWA" value="{{$nilai->NamaSiswa_id}}" disabled>
                    <!-- <select name="NamaSiswa_id" id="nama" class="form-control"> 
                    <option value="{{ $nilai->NamaSiswa_id }}" disable>{{ $nilai->NamaSiswa_id}}</option>
                        @foreach ($nama as $no)
                        <option value="{{$no->id}}" disabled>{{$no->NamaSiswa_id}}</option>
                        @endforeach
                    </select> -->
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group mx-3 my-2">
                    <strong>Mapel:</strong>
                    <select class="form-select col-md-10" name ="Mapel">
                        <option value="IPA" <?php if($nilai['Mapel'] === 'IPA'){ echo "selected='selected'"; } ?>>IPA</option>
                        <option value="IPS" <?php if($nilai['Mapel'] === 'IPS'){ echo "selected='selected'"; } ?>>IPS</option>
                        <option value="MTK" <?php if($nilai['Mapel'] === 'MTK'){ echo "selected='selected'"; } ?>>MTK</option>
                        <option value="PKN" <?php if($nilai['Mapel'] === 'PKN'){ echo "selected='selected'"; } ?>>PKN</option>
                        <option value="TIK" <?php if($nilai['Mapel'] === 'TIK'){ echo "selected='selected'"; } ?>>TIK</option>
                        <option value="SBK" <?php if($nilai['Mapel'] === 'SBK'){ echo "selected='selected'"; } ?>>SBK</option>
                        <option value="Agama" <?php if($nilai['Mapel'] === 'Agama'){ echo "selected='selected'"; } ?>>Agama</option>
                        <option value="Penjas" <?php if($nilai['Mapel'] === 'Penjas'){ echo "selected='selected'"; } ?>>Penjas</option>
                        <option value="Bahasa Jawa" <?php if($nilai['Mapel'] === 'Bahasa Jawa'){ echo "selected='selected'"; } ?>>Bahasa Jawa</option>
                        <option value="Bahasa Indonesia" <?php if($nilai['Mapel'] === 'Bahasa Indonesia'){ echo "selected='selected'"; } ?>>Bahasa Indonesia</option>
                        <option value="Bahasa Inggris" <?php if($nilai['Mapel'] === 'Bahasa Inggris'){ echo "selected='selected'"; } ?>>Bahasa Inggris</option>
                    </select>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group mx-3 my-2">
                    <strong>Nilai:</strong>
                    <input type="text" name="Nilai" class="form-control" placeholder="Nilai SISWA" value="{{ $nilai->Nilai }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group mx-3 my-2">
                    <strong>Predikat:</strong>
                    <textarea class="form-control" style="height:150px" name="Predikat" placeholder="Content">{{ $nilai->Predikat }}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center my-2">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </div>

    </form>
@endsection