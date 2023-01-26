@extends('layouts.app');

@section('content')
   <h1>Questa è la pagina show</h1>

   <h2>Title: {{ $comic->title }}</h2>

   @dump($comic)
@endsection
