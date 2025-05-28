@extends('layouts.app')

@section('title', 'Home')
@section('page_title', 'hi there!')

@section('content')
     <h1 class="text-2x1 font-bold mb-4">Welcome to mofusand</h1>
     <p class="mb-4">here's update today</p>

    @include('components.card', [
   'imgsrc' => 'image/mofusand.jpg',
   'title' => 'this is mofusand hipper',
   'desc' => 'get this mofusand on online shop'
])
@endsection