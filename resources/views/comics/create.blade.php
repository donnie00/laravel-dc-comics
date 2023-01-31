@extends('layouts.app')

@section('title', 'Add new comic')

@section('content')
   <h1 class="mt-5">Add new comic</h1>

   @if ($errors->any())
      <div class="alert alert-danger">
         <ul>
            @foreach ($errors->all() as $error)
               <li>{{ $error }}</li>
            @endforeach
         </ul>
      </div>
   @endif

   <form action="{{ route('comics.store') }}" method="POST" class="p-5">
      @csrf

      @include('comics.partials.formInput', [
          'tag' => 'input',
          'type' => 'text',
          'name' => 'title',
          'label' => 'Title',
      ])

      @include('comics.partials.formInput', [
          'tag' => 'textarea',
          'name' => 'description',
          'label' => 'Description',
      ])


      @include('comics.partials.formInput', [
          'tag' => 'input',
          'type' => 'text',
          'name' => 'thumb',
          'label' => 'Thumb',
      ])

      @include('comics.partials.formInput', [
          'tag' => 'input',
          'type' => 'number',
          'name' => 'price',
          'label' => 'Price',
      ])

      @include('comics.partials.formInput', [
          'tag' => 'input',
          'type' => 'text',
          'name' => 'series',
          'label' => 'Series',
      ])

      @include('comics.partials.formInput', [
          'tag' => 'input',
          'type' => 'date',
          'name' => 'sale_date',
          'label' => 'Sale date',
      ])

      @include('comics.partials.formInput', [
          'tag' => 'input',
          'type' => 'text',
          'name' => 'type',
          'label' => 'Type',
      ])

      <button type="submit" class="btn btn-success my-3">Send</button>
   </form>

   <a href="{{ route('comics.index') }}" class="btn btn-primary">Home</a>
@endsection
