@extends('master.app')
@section('navbar')

<nav class="navbar navbar-expand-md navbar-dark bg-navbar">
    <a class="navbar-brand" href="#">Navbar</a>
    <div class="input-group">
        <input type="search" class="form-control">
        <div class="input-group-append">
          <button class="btn btn-primary" type="submit"><i class="fas fa-search"></i></button>
        </div>
      </div>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="#">Hentai</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">3D Hentai</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">JAV</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Twitter</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Discord</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Info</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Donate</a>
        </li>
      </ul>
    </div>
</nav>

<style>
.bg-navbar {
    background-color: #1f1f1f;
}

.btn-primary {
    background-color: #612dd2;
}






</style>

@endsection