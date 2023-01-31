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

      @include('comics.partials.formInput', [
          'tag' => 'input',
          'type' => 'text',
          'name' => 'title',
          'label' => 'Title',
          'default' => $comic->title,
      ])

      @include('comics.partials.formInput', [
          'tag' => 'textarea',
          'name' => 'description',
          'label' => 'Description',
          'default' => $comic->description,
      ])


      @include('comics.partials.formInput', [
          'tag' => 'input',
          'type' => 'text',
          'name' => 'thumb',
          'label' => 'Thumb',
          'default' => $comic->thumb,
      ])

      @include('comics.partials.formInput', [
          'tag' => 'input',
          'type' => 'number',
          'name' => 'price',
          'label' => 'Price',
          'default' => $comic->price,
      ])

      @include('comics.partials.formInput', [
          'tag' => 'input',
          'type' => 'text',
          'name' => 'series',
          'label' => 'Series',
          'default' => $comic->series,
      ])

      @include('comics.partials.formInput', [
          'tag' => 'input',
          'type' => 'date',
          'name' => 'sale_date',
          'label' => 'Sale date',
          'default' => $comic->sale_date,
      ])

      @include('comics.partials.formInput', [
          'tag' => 'input',
          'type' => 'text',
          'name' => 'type',
          'label' => 'Type',
          'default' => $comic->type,
      ])

      <button type="submit" class="btn btn-success my-3">Send</button>
   </form>

   <a href="{{ route('comics.index') }}" class="btn btn-primary">Home</a>
   <a href="{{ route('comics.show', $comic->id) }}" class="btn btn-primary">Comic page</a>
@endsection
