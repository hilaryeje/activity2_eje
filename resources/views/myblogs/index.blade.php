@extends('layout.mainlayout')
@section('title', 'Index')
@section('content')
   @forelse ($posts as $key => $post)
   @if ($loop->even)
   <h1 style="color:#1ABC9C">{{ $key}}.) {{ $post['Blog_Post']}} </h1>
   @else 
   <h1 style="color:#EC7063">{{ $key}}.) {{ $post['Blog_Post']}} </h1>
   @endif
    
    <hr>
    <h2>Date : {{ $post['Date']}} </h2>
    <h3>Location : {{ $post['Location']}} </h3>
    <p>Content : {{ $post['Content']}}</p>
    <br/>

   @empty
       <h1>No posts</h1>
   @endforelse
@endsection