<?php

$type = empty($type) ? '' : $type;
$default = empty($default) ? '' : $default;

?>


<label class="form-label">{{ $label }}: </label>

@if ($tag === 'textarea')
   <textarea name="{{ $name }}" cols="30" rows="5" class="form-control @error($name) is-invalid @enderror">{{ old($name, $default) }}</textarea>
@else
   <input type="{{ $type }}" name="{{ $name }}" step="0.01"
      class="form-control @error($name) is-invalid @enderror" value="{{ old($name, $default) }}">
@endif


@error($name)
   <div class="invalid-feedback">
      {{ $message }}
   </div>
@enderror
