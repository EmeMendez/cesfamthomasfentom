@extends('layouts.admin_app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Sitio Administrativo Cesfam Dr. Thomas Fenton</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Bienvenid@! has iniciado sesión.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
