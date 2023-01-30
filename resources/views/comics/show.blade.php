@extends('layouts.app')

@section('title', 'Comic #' . $comic->id)

@section('content')
   <h1 class="text-center my-5 text-primary">{{ $comic->title }}</h1>

   @if (session('msg'))
      @include('comics.partials.toaster', ['color' => 'success'])
   @endif

   <div class="row">
      <div class="col-auto">
         <img src="{{ $comic->thumb }}" alt="No img found" class="img-fluid">

      </div>
      <div class="col">
         <h4>Description:</h4>
         <p>{{ $comic->description }}</p>

         <ul class="list-group list-flush">
            <li class="list-group-item">
               <span class="fw-bold">Series: </span> <span>{{ $comic->series }}</span>
            </li>
            <li class="list-group-item">
               <span class="fw-bold">Type: </span>
               <span>{{ $comic->type }}</span>
            </li>
            <li class="list-group-item">
               <span class="fw-bold">Price: </span>
               <span>$ {{ $comic->price }}</span>
            </li>
         </ul>
      </div>
   </div>

   <div class="controls d-flex align-items-center gap-3">

      <a href="{{ route('comics.index') }}" class="btn btn-primary my-3">Home</a>
      <a href="{{ route('comics.edit', $comic->id) }}" class="btn btn-warning my-3">Edit</a>
      @include('comics.partials.deleteForm')

   </div>


   @include('comics.partials.deleteScript')
@endsection
