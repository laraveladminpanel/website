@extends('layouts.main')

@section('content')

<section>
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
<!--         <h2 class="section-heading text-uppercase">About</h2>
        <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3> -->
        {!! $doc->body !!}
      </div>
    </div>
  </div>
</section>



  

@endsection
