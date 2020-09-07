@extends('layouts.app')

@section('content')
    
    @foreach ($messages as $item)

    <ul class="list-group p-2 " >
        <li class="list-group-item">
                {{$item->name}}
        </li>
        <li class="list-group-item">
            {{$item->email}}
    </li>
    <li class="list-group-item">
        {{$item->subject}}
</li>
<li class="list-group-item">
    {{$item->message}}
</li>
    </ul>
        
    @endforeach
@endsection