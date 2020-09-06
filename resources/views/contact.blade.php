

@extends('layouts.app')

@section('content')
{{-- <form method="POST" action="/contact/submit"> --}}
<form method="POST" action="{{Route('contact-form-submit')}}">

    @csrf

    <div class="form-group">
      <label for="name">name</label>
      <input type="text" class="form-control" id="name" name="name" >
       
    </div>
     
    <div class="form-group">
        <label for="email">Email address</label>
        <input type="email" class="form-control" id="email" name="email" >
        
      </div>

      <div class="form-group">
        <label for="subject">Subject</label>
        <input type="text" class="form-control" id="subject"  name="subject">
         
      </div>

      <div class="form-group">
        <label for="message">message</label>
        <textarea name="message" id="message" cols="30" rows="5" class="form-control"></textarea>
        
      </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection