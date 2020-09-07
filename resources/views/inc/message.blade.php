
<div class="container m-3">
  
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
     @foreach ($errors->all() as $error)
         <li>
       {{$error}}
         </li>
         
     @endforeach
    </ul>
    </div>
    
    @endif
</div>


@if (session('success'))

<div class="alert alert-success">
    {{session('success')}}
</div>    

    
@endif