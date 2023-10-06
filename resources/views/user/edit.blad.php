@extends('layout.index')

@section('content')
<h1>Edit Blog Post...</h1>
{{$post}}
    <form action="/post" method="post">
      <table>
        <tr>
            <td>@csrf</td>
            <td><input type="hidden"name="user_id" value="1"></td>
        </tr>
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
            <td><input type="submit" value="Submit" class="btn btn-primary"></td>
            <td><input type="reset" value="Reset" class="btn btn-secondary"></td>
        </tr>
      </table>
    </form>


@endsection
