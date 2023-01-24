@extends('index')

@section('content')
<div class="container-fluid pt-4 px-4">
    <div class=" rounded-top p-4">
        <div class="row">
                <!-- <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="alert alert-success" role="alert">
                    {{ __('kamu sudah login!') }}
                    </div>
                </div> -->
                <script>
                window.alert("anda sudah login");
                </script>
        </div>
    </div>
</div>
@endsection
