@extends('layouts.layout')

@section('content')
<section>
  <nav>
      <ul class="nav">
        <li><a href="#">Link 1</a></li>
      <li><a href="#" id="btn-1" data-toggle="collapse" data-target="#submenu1" aria-expanded="false">Link 2 (toggle)</a>
        <ul class="nav collapse" id="submenu1" role="menu" aria-labelledby="btn-1">
          <li><a href="#">Link 2.1</a></li>
          <li><a href="#">Link 2.2</a></li>
          <li><a href="#">Link 2.3</a></li>
        </ul>
      </li>
      <li><a href="#">Link 3</a></li>
      <li><a href="#">Link 4</a></li>
    </ul>
  </nav>
  <div class="container">
    <h2>Navbar Forms</h2>
    <p>Use the .navbar-form class to vertically align form elements (same padding as links) inside the navbar.</p>
  </div>
</section>

@endsection
