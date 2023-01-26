@extends('layouts.app')

@section('content')
   <header class="my-5">
      <h1>Comics list</h1>

      <a href="{{ route('comics.create') }}" class="btn btn-success fw-bold">&plus; Add new comic</a>
   </header>

   <div class="row">
      @foreach ($comics as $comic)
         <div class="col-4 g-3">
            <div class="card h-100">
               <div class="row g-0">
                  <div class="col-md-4 border-end border-1">
                     <img src="{{ $comic->thumb }}" class="img-fluid rounded-start">
                  </div>
                  <div class="col-md-8 d-flex flex-column">
                     <div class="card-body d-flex flex-column">
                        <h5 class="card-title">{{ $comic->title }}</h5>
                        <h6 class="card-subtitle mb-2 text-muted">{{ $comic->series }}</h6>
                        <small class="text-muted text-capitalize">{{ $comic->type }}</small>

                        <span class="text-end mt-auto">$ {{ $comic->price }}</span>
                     </div>
                     <a href="{{ route('comics.show', $comic->id) }}" class="card-footer text-center text-decoration-none">
                        Show more
                     </a>
                     <div class="">
                     </div>
                  </div>
               </div>
            </div>
         </div>
      @endforeach
   </div>
@endsection
