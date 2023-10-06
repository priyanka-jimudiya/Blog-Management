@extends('layout.index')

@section('content')
<div class="col sm-8"></div>
<div class="col-sm-4">
    <a href="/post/create" class="btn btn-primary">Add Me+</a>
</div>

@foreach($data as $datum)
    <!-- Post preview-->
        <div class="post-preview">

                <a href="{{route('post.show',['id'=>$datum->id])}}">
                    <h2 class="post-title">{{$datum->title}}</h2>
                </a>
                <h3 class="post-subtitle">{{$datum->excerpt}}</h3>

            <p class="post-meta">
                Posted by
                <a href="#!">Start Bootstrap</a> on September 24, 2022
                <br>
                <a href="{{route('post.edit',['id'=>$datum->id])}}" class = "btn btn-primary btn-sm">Edit Me!!</a>
                <form action="{{route('post.destroy',['id'=>$datum->id]) }}" method="post">
                    @csrf
                    @method('delete')
                    <input type="submit" class="btn btn-warning btn-sm" value="Delete">
                </form>
            </p>
        </div>
    <!-- Divider-->
        <hr class="my-4" />
@endforeach
@endsection
