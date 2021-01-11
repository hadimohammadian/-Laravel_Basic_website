@extends('layouts.master')

@section('content')
    <h1>
        Lorem ipsum dolor sit amet.
    </h1>

    <form action="/admin/articles/create" method="post">
        @csrf
        <div class="form-group">
            <label for="title">Title : </label>
            <input type="text" value="" id="title" name="title" class="form-control">

        </div>


        <div class="form-group">
            <label for="body">body</label>
            <textarea class="form-control" name="body" id="body" rows="3"></textarea>
        </div>



        <button type="submit" class="btn btn-success">send</button>
    </form>
@endsection
