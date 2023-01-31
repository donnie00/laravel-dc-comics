@extends('layouts.app')

@section('title', 'Edit comic #' . $comic->id)

@section('content')
   <h1 class="mt-5">Edit comic</h1>

   @if ($errors->any())
      <div class="alert alert-danger">
         Rincontrolla i dati inseriti
      </div>
   @endif

   <form action="{{ route('comics.update', [$comic->id]) }}" method="POST" class="my-5">
      @csrf
      @method('PUT')

      <label class="form-label">Title: </label>
      <input type="text" name="title" class="form-control @error('title') is-invalid @enderror"
         value="{{ old('title', $comic->title) }}">
      @error('title')
         <div class="invalid-feedback">
            {{ $message }}
         </div>
      @enderror

      <label class="form-label">Description: </label>
      <textarea name="description" cols="30" rows="5"
         class="form-control @error('description') is-invalid @enderror">{{ old('description', $comic->description) }}</textarea>
      @error('description')
         <div class="invalid-feedback">
            {{ $message }}
         </div>
      @enderror

      <label class="form-label">Thumb: </label>
      <input type="text" name="thumb" class="form-control @error('thumb') is-invalid @enderror"
         value="{{ old('thumb', $comic->thumb) }}">
      @error('thumb')
         <div class="invalid-feedback">
            {{ $message }}
         </div>
      @enderror

      <label class="form-label">Price: </label>
      <input type="number" step="0.01" name="price" class="form-control @error('price') is-invalid @enderror"
         value="{{ old('price', $comic->price) }}">
      @error('price')
         <div class="invalid-feedback">
            {{ $message }}
         </div>
      @enderror

      <label class="form-label">Series: </label>
      <input type="text" name="series" class="form-control @error('series') is-invalid @enderror"
         value="{{ old('series', $comic->series) }}">
      @error('series')
         <div class="invalid-feedback">
            {{ $message }}
         </div>
      @enderror

      <label class="form-label">Sale date: </label>
      <input type="date" name="sale_date" class="form-control @error('sale_date') is-invalid @enderror"
         value="{{ old('sale_date', $comic->sale_date) }}">
      @error('sale_date')
         <div class="invalid-feedback">
            {{ $message }}
         </div>
      @enderror

      <label class="form-label">Type: </label>
      <input type="text" name="type" class="form-control @error('type') is-invalid @enderror"
         value="{{ old('type', $comic->type) }}">
      @error('type')
         <div class="invalid-feedback">
            {{ $message }}
         </div>
      @enderror

      <button type="submit" class="btn btn-success my-3">Send</button>
   </form>

   <a href="{{ route('comics.index') }}" class="btn btn-primary">Home</a>
   <a href="{{ route('comics.show', $comic->id) }}" class="btn btn-primary">Comic page</a>
@endsection
