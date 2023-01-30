@extends('layouts.app')

@section('title', 'Edit comic #' . $comic->id)

@section('content')
   <h1 class="mt-5">Edit comic</h1>

   <form action="{{ route('comics.update', [$comic->id]) }}" method="POST" class="p-5">
      @csrf
      @method('PUT')

      <label class="form-label">Title: </label>
      <input type="text" name="title" class="form-control" value="{{ $comic->title }}">

      <label class="form-label">Description: </label>
      <textarea name="description" cols="30" rows="5" class="form-control">{{ $comic->description }}</textarea>

      <label class="form-label">Thumb: </label>
      <input type="text" name="thumb" class="form-control" value="{{ $comic->thumb }}" placeholder="null">

      <label class="form-label">Price: </label>
      <input type="number" step="0.01" name="price" class="form-control" value="{{ $comic->price }}">

      <label class="form-label">Series: </label>
      <input type="text" name="series" class="form-control" value="{{ $comic->series }}">

      <label class="form-label">Sale date: </label>
      <input type="date" name="sale_date" class="form-control" value="{{ $comic->sale_date }}">

      <label class="form-label">Type: </label>
      <input type="text" name="type" class="form-control" value="{{ $comic->type }}">

      <button type="submit" class="btn btn-success my-3">Send</button>
   </form>

   <a href="{{ route('comics.index') }}" class="btn btn-primary">Home</a>
   <a href="{{ route('comics.show', $comic->id) }}" class="btn btn-primary">Comic page</a>
@endsection
