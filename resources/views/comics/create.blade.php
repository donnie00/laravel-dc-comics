@extends('layouts.app')

@section('content')
   <h1>Questa è la pagina create</h1>

   <form action="{{ route('comics.store') }}" method="POST" class="p-5">
      @csrf

      <label class="form-label">Title: </label>
      <input type="text" name="title" class="form-control">

      <label class="form-label">Description: </label>
      <input type="text" name="description" class="form-control">

      <label class="form-label">Thumb: </label>
      <input type="text" name="thumb" class="form-control">

      <label class="form-label">Price: </label>
      <input type="number" step="0.01" name="price" class="form-control">

      <label class="form-label">Series: </label>
      <input type="text" name="series" class="form-control">

      <label class="form-label">Sale date: </label>
      <input type="date" name="sale_date" class="form-control">

      <label class="form-label">Type: </label>
      <input type="text" name="type" class="form-control">

      <button type="submit" class="btn btn-success m-3">Send</button>
   </form>
@endsection
