<div @class([
    'toast',
    'align-items-center',
    'my-3',
    'w-100',
    'text-bg-' . $color,
    'show' => session('msg'),
]) role="alert" aria-live="assertive" aria-atomic="true">
   <div class="d-flex">
      <div class="toast-body">
         {{ session('msg') }}
      </div>
      <button type="button" class="btn-close me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
   </div>
</div>
