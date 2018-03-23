@extends('layouts.main')

@section('content')
  @include('layouts.main.header')
  @include('index.services')
  @include('index.screenshots')
  @include('index.about')
  @include('index.team')
  @include('index.clients')
  @include('index.contact')
@endsection

@section('scripts')
  <!-- Custom scripts for this template -->
  <script src="{{ mix('js/app.js') }}"></script>

  <!-- Contact form JavaScript -->
  <script src="{{ mix('vendor/js/jqBootstrapValidation.js') }}"></script>

  <!-- Contact form JavaScript -->
  <script src="{{ mix('js/contact_me.js') }}"></script>
@endsection
