@extends('layouts.main')

@section('content')
  @include('index.services')
  @include('index.portfolio')
  @include('index.about')
  @include('index.team')
  @include('index.clients')
  @include('index.contact')
@endsection

@section('scripts')
  <!-- Contact form JavaScript -->
  <script src="{{ mix('vendor/js/jqBootstrapValidation.js') }}"></script>

  <!-- Contact form JavaScript -->
  <script src="{{ mix('js/contact_me.js') }}"></script>
@endsection
