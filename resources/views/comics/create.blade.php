@extends('layouts.app')

@section('title', 'Add new comic')

@section('content')
   <h1 class="mt-5">Add new comic</h1>

   <form action="{{ route('comics.store') }}" method="POST" class="p-5">
      @csrf

      <label class="form-label">Title: </label>
      <input type="text" name="title" class="form-control">

      <label class="form-label">Description: </label>
      <textarea name="description" id="" cols="30" rows="5" class="form-control"> </textarea>

      <label class="form-label">Thumb: </label>
      <input type="text" name="thumb" class="form-control" placeholder="null">

      <label class="form-label">Price: </label>
      <input type="number" step="0.01" name="price" class="form-control">

      <label class="form-label">Series: </label>
      <input type="text" name="series" class="form-control">

      <label class="form-label">Sale date: </label>
      <input type="date" name="sale_date" class="form-control">

      <label class="form-label">Type: </label>
      <input type="text" name="type" class="form-control">

      <button type="submit" class="btn btn-success my-3">Send</button>
   </form>

   <a href="{{ route('comics.index') }}" class="btn btn-primary">Home</a>
@endsection
