@extends('layouts.master')

@section('content')
<h1>Edit Article</h1>
<div class="m-3">
  @if($errors->any())
    <div class="alert alert-danger">

        <ul>
            @foreach($errors->all() as $key => $error)
                <li>
                    {{ $error }}
                </li>
            @endforeach
        </ul>
    </div>

  @endif
</div>
    <form action="/admin/articles/create" method="post">
        @csrf
        <div class="form-group">
            <label for="title">Title : </label>
            <input type="text" value="{{ $article->title }}" id="title" name="title" class="form-control">

        </div>


        <div class="form-group">
            <label for="body">body</label>
            <textarea class="form-control" name="body" id="body" rows="3">{{ $article->body }}</textarea>
        </div>



        <button type="submit" class="btn btn-info">Update</button>
    </form>
@endsection
