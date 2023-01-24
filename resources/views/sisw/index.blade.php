@extends('index')

@section('content')
            <div class="row mt-5 mb-5">
                <div class="col-lg-12 margin-tb">
                    <div class="text-center mb-4">
                        <h2 width="260px"class="text-center">Tabel mahasiswa</h2>
                    </div>
                    <div class="float-right mx-4">
                        <a class="btn btn-success" href="{{ route('sisw.create') }}"> Input Siswa</a>
                    </div>
                </div>
            </div>


            @if ($message = Session::get('succes'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
            @endif

            <table class="table table-bordered mx-4">
                <tr>
                    <th width="10px" class="text-center">No</th>
                    <th width="50px"class="text-center">NIS</th>
                    <th width="50px"class="text-center">Nama Siswa</th>
                    <th width="50px"class="text-center">Alamat</th>
                    <th width="30px"class="text-center">Action</th>
                </tr>
                @foreach ($sisw as $siswa)
                <tr>
                    <td class="text-center">{{ ++$i }}</td>
                    <td class="text-center">{{ $siswa->NIS }}</td>
                    <td class="text-center">{{ $siswa->NamaSiswa }}</td>
                    <td class="text-center">{{ $siswa->Alamat }}</td>
                    <td class="text-center">
                        <form action="{{ route('sisw.destroy',$siswa->id) }}" method="POST">

                        <a class="btn btn-info btn-sm" href="{{ route('sisw.show',$siswa->id) }}">Show</a>

                            <a class="btn btn-primary btn-sm" href="{{ route('sisw.edit',$siswa->id) }}">Edit</a>

                            @csrf
                            @method('DELETE')

                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </table>

        <!-- Content End -->


        <!-- Back to Top -->
        <!-- <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a> -->
@endsection