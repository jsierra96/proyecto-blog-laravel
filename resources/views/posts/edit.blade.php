@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <h5 class="card-header">Crear un post
                </h5>
                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                    @endif
                    <form action="{{ route('posts.update', $post) }}" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="title">Titulo</label>
                            <input type="text" class="form-control" id="title" name="title" placeholder="Ingrese un titulo" value="{{ old('title', $post->title) }}">
                        </div>

                        <div class="form-group">
                            <label for="file">Imagen</label>
                            <input type="file" id="file" class="form-control-file" name="file">
                        </div>

                        <div class="form-group">
                            <label for="body">Articulo</label>
                            <textarea class="form-control" id="body" name="body" rows="6">{{ old('body', $post->body) }}</textarea>
                        </div>

                        <div class="form-group">
                            <label for="iframe">Articulo embebido</label>
                            <textarea class="form-control" id="iframe" name="iframe" rows="6">{{ old('iframe', $post->iframe) }}</textarea>
                        </div>

                        <div class="row justify-content-center">
                            @csrf
                            @method('PUT')
                            <input type="submit" class="btn btn-outline-primary" value="Actualizar" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection