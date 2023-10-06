@extends('layout.index')
@section('content')
    <!-- Post preview-->
        <div class="post-preview">
            <h2 class="post-title">{{$data->title}}</h2>
            <h3 class="post-subtitle">{{$data->excerpt}}</h3>
            <p>{{$data->body}}</p>
            <p class="post-meta">
                Posted by
                <a href="#!">Start Bootstrap</a> on September 24, 2022
            </p>
        </div>
    <!-- Divider-->
        <hr class="my-4" />
@endsection
