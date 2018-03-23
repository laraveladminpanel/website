<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="A Laravel Admin Panel to make your life easier and steer your project in the right direction">
    <meta name="author" content="Alexey Kostenko">

    <title>Laravel Admin Panel - The Missing Laravel Admin</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ mix('vendor/css/bootstrap.css') }}" rel="stylesheet">

    <link href="{{ mix('vendor/css/font-awesome.css') }}" rel="stylesheet">
    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
  </head>

  <body id="page-top">
    {{ menu('main', 'layouts.main.nav') }}
    @yield('content')
    {{ menu('footer', 'layouts.main.footer') }}
    @yield('scripts')
  </body>
</html>
