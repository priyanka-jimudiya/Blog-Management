@extends('layout.index')

@section('content')
<h1>Edit Blog Post...</h1>

    <form action="{{ route('post.update', ['id' => $post -> id])}}" method="post">
        @csrf
        @method('put')
        <table>
            <tr>
                <td><label for="">Title :</label></td>
                <td><input type="text" name="title" id="" value="{{$post -> title}}"></td>
            </tr>
            <tr>
                <td><label for="">Excerpt: </label></td>
                <td><input type="text" name="excerpt" id="" value="{{$post -> excerpt}}"></td>
            </tr>
            <tr>
                <td><label for="">Body</label></td>
                <td><textarea name="body">{{$post -> body}}</textarea></td>
            </tr>
            <tr>
                <td><input type="submit" value="Edit Me!!" class="btn btn-primary"></td>
                <td><input type="reset" value="Reset Me!!" class="btn btn-secondary"></td>
            </tr>
        </table>
    </form>


@endsection
