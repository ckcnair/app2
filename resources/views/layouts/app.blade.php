<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->    
    <link rel="stylesheet" href="./css/app.css">
    <title>Bootstrap 4 Layout</title>
  </head>
  <body>
    <div class="container">
      @include('inc.navbar')
      @if(Request::is('/'))
        @include('inc.showcase')
      @endif
      @include('inc.messages')
      @yield('content')
      
     
        
    </div>
    <footer class="text-center" id="footer">
      <p>Copyright 2018 &copy; exdesign</p>
    </footer>
  </body>
  </html>