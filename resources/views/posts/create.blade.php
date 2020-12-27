@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        Crear Artículo
                    </div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <form action="{{ route('post.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="titulo">Título</label>
                                <input id="titulo" class="form-control" type="text" name="title" required>
                            </div>

                            <div class="form-group">
                                <label for="file">Image</label>
                                <input id="file" class="form-control-file" type="file" name="file">
                            </div>

                            <div class="form-group">
                                <label for="body">Contenido *</label>
                                <textarea id="body" class="form-control" name="body" rows="2" required>
                                            </textarea>
                            </div>

                            <div class="form-group">
                                <label for="iframe">Contenido embebido</label>
                                <textarea id="iframe" class="form-control" name="iframe" rows="2">
                                            </textarea>
                            </div>

                            <div class="form-group">
                                <input type="submit" value="Enviar" class="btn btn-sm btn-primary">
                            </div>


                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
