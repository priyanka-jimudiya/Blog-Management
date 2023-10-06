@extends('layout.index')

@section('content')
<h1>Add Blog Post...</h1>
    <form action="{{route('post.store')}}" method="post">
        @csrf
        <table>
            <tr>
                <td><label for="">Title :</label></td>
                <td><input type="text" name="title" id=""></td>
            </tr>
            <tr>
                <td><label for="">Excerpt: </label></td>
                <td><input type="text" name="excerpt" id=""></td>
            </tr>
            <tr>
                <td><label for="">Body</label></td>
                <td><textarea name="body"></textarea></td>
            </tr>
            <tr>
                <td><input type="submit" value="Add Me!!" class="btn btn-primary"></td>
                <td><input type="reset" value="Reset Me!!" class="btn btn-secondary"></td>
            </tr>
        </table>
    </form>


@endsection
