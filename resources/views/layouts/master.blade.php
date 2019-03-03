<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Blog Template for Bootstrap</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/blog/">

    <!-- Bootstrap core CSS -->
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/css/app.css"></link>

    <!-- Custom styles for this template -->
    <link href="/css/app.css" rel="stylesheet">
  </head>
  <body>
      
      @include ('includes.navbar')

      <div class="blog-header">
        <div class="container">
          <h1 class="blog-title">Rexsteroxy Blog</h1>
          <p class="lead blog-description">My Blog is Your Secret Friend</p>
        </div>
      </div>

    <div class="container">
      <div class="row">
       @yield('content')

       
        @include('includes.sidebar')
        </div>
      </div>
    @include('includes.footer')
  </body>