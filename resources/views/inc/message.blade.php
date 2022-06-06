@if (session('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
  <p>{{ session('success') }}</p>
  <a role="button" class="close-alert" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
  </a>
</div>
@endif


@if (session('error'))
  <div class="alert alert-warning alert-dismissible fade show" role="alert">
    <p>{{ session('error') }}</p>
    <a role="button" class="close-alert" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </a>
  </div>
@endif