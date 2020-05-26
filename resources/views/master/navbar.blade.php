@extends('master.app')
@section('navbar')

<nav class="navbar navbar-expand-lg navbar-dark nav-color">
    <a class="navbar-brand" href="#">Navbar</a>
    <div class="input-group">
        <input type="text" class="form-control">
        <div class="input-group-append">
          <button class="btn btn-purple" type="button"><i class="fas fa-search text-white"></i></button>
        </div>
      </div>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
      </ul>
    </div>
</nav>

<style>
.nav-color {
    background-color: #1f1f1f;
}

.btn.btn-purple:focus {
    background-color: #612dd2;
    border: 0px !important;
}


</style>

@endsection