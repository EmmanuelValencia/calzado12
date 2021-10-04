@extends('adminlte::page')

@section('title', 'Editar')

@section('content_header')
    <h1>EDITAR ARTICULO</h1>
@stop

@section('content')
<section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Update Articulo</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('articulos.update', $articulo->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('articulo.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop