@extends('layouts/app')
@section('content')

<form method="post" action="{{route('post.store')}}">
    @csrf
    <div class="form-group">
        <label for="title">title</label>
        <input type="text" name="title" class="form-control" id="title">

    </div>
    <div class="form-group">
        <textarea name="body" class="form-control" id="body" >Next, use our Get Started docs to setup Tiny!</textarea>
        <label for="body" id="body">body</label>
        
    </div>


    <button type="submit" class="btn btn-primary">publish</button>
</form>

@if($errors->any())
<ul>
    @foreach($errors->all() as $error)
    <li>{{$error}}</li>
    @endforeach
</ul>
@endif
@endsection