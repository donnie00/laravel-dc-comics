@extends('layouts.app')

@section('title', 'All Comics')

@section('content')
   <header class="my-5">
      <h1>Comics list</h1>

      <a href="{{ route('comics.create') }}" class="btn btn-success fw-bold">&plus; Add new comic</a>
   </header>

   @if (session('msg'))
      @include('comics.partials.toaster')
   @endif

   <div class="row">
      @foreach ($comics as $comic)
         <div class="col-6 col-sm-4 col-md-3 g-3">
            <div class="card h-100">
               <img src="{{ $comic->thumb }}" class="img-fluid rounded-start">
               <div class="card-body">
                  <h5 class="card-title">{{ $comic->title }}</h5>
                  <h6 class="card-subtitle mb-2 text-muted">{{ $comic->series }}</h6>
                  <small class="text-muted text-capitalize">{{ $comic->type }}</small>
                  <span class="text-end mt-auto">$ {{ $comic->price }}</span>
               </div>
               <div class="card-footer d-flex justify-content-between align-items-center">
                  <a href="{{ route('comics.show', $comic->id) }}"
                     class="text-center text-decoration-none btn btn-primary">
                     Show more
                  </a>
                  @include('comics.partials.deleteForm')
               </div>
            </div>
         </div>
      @endforeach
   </div>

   @include('comics.partials.deleteScript')
@endsection
