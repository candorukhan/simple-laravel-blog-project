@extends('layouts/app')
@section('content')

<div class="card">
    <div class="card-header">
       
    </div>
    <p>{{$post5[0]}}</p>
    <div class="dropdown">
      
        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            Cevaplar
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
        
            <a class="dropdown-item" href="#">{{$post5[1]}}</a>
            <a class="dropdown-item" href="#">{{$post5[2]}}</a>
           
        </div>
    </div>
    <p>{{$post5[3]}}</p>

</div>

@endsection()