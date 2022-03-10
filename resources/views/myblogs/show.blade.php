@extends('layout.mainlayout')
@section('title', 'show')
@section('content')
 
<h1>  {{ $post['Blog_Post']}} </h1>
<hr>
<h2>Date : {{ $post['Date']}} </h2>
<h3>Location: {{ $post['Location']}} </h3>
<p>Content : {{ $post['Content']}}</p>
 
@endsection