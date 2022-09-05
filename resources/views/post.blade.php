@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <dic class="col-md-8">

            <div class="card mb-4">
                <div class="card-body">
                    <h5 class="card-title">{{ $post->title }}</h5>
                    <p class="card-text">
                        {{ $post->body }}
                    </p>
                    <p class="text-muted mb-0">
                        <em>
                            &ndash; {{ $post->user->name }}
                        </em>
                        {{ $post->created_at->format('d M Y') }}
                    </p>
                </div>
            </div>

        </dic>
    </div>
</div>
@endsection