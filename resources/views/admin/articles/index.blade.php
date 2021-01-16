@extends('layouts.master')

@section('content')
<h1>Edit Article</h1>


<table class="table">
    <thead>
        <tr>
            <th>id</th>
            <th>Title</th>
            <th>Operations</th>
        </tr>
    </thead>
    <tbody>

        @foreach($articles as $key => $article)
        <tr>
            <td scope="row">{{$article->id  }}</td>
            <td> {{ $article->title }}</td>
            <td>
                <form action="/admin/articles/{{ $article->id }}" method="POST">
                    @csrf
                    @method('delete')

                    <button class="btn btn-danger" >Delete</button>
                </form>
            </td>
        </tr>
        @endforeach


    </tbody>
</table>
@endsection
