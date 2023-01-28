<form action="{{ route('comics.destroy', $comic->id) }}" method="POST" class="deleteForm m-0">
   @csrf
   @method('DELETE')

   <button class="btn btn-danger my-3">Delete</button>
</form>
