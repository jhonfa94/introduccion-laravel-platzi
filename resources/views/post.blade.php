
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                    <div class="card mb-4">
                        <div class="card-body">
                            @if ($post->image)
                                {{-- <img src="/storage/{{ $post->image }}"
                                    class="card-img-top" alt="Post" width="120"> --}}
                                <img src="{{ $post->get_image }}" class="img-fluid" alt="Post">
                            @elseif($post->iframe)
                                <div class="embed-responsive embed-responsive-16by9">
                                    {!! $post->iframe !!}
                                </div>
                            @endif
                            <h5 class="card-title">{{ $post->title }}</h5>
                            <p class="card-text">
                                {{ $post->body }}
                                <a href="{{ route('post', $post) }}">Leer más...</a>
                            </p>
                            <p class="text-muted mb-0">
                                <em>
                                    &ndash; {{$post->user->name}}
                                </em>
                                {{$post->created_at->format('d M Y')}}
                            </p>
                        </div>
                    </div>
            </div>
        </div>
    </div>
@endsection
