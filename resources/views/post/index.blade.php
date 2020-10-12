@extends('layouts/app')
@section('content')
@foreach($posts as $post)
<div class="card">
    <div class="card-header">
        {{$post->title}}
    </div>
    <div class="card-body">

        <p class="card-text"> {{$post->body}}
        <p>{{$post->user->name}}</p>
        {{$post->created_at->diffForHumans()}}
        </p>

    </div>
</div>
@endforeach
{{$posts->links('vendor.pagination.bootstrap-4')}}
@endsection