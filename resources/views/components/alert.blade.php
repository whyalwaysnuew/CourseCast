@if ($message = Session::get('error'))
<div class="alert alert-danger alert-dismissible d-flex fade show" role="alert">
    <div class="px-2">
        <i class="uil uil-exclamation-triangle"></i>
    </div>
    <div>
        <strong>
            {{$message}}
        </strong>
    </div>
    <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close" ></button>
  </div>
@endif