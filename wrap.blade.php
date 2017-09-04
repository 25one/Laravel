<!DOCTYPE html>
<html lang="en">
  <head>
    <title>People - Insert - View</title>
<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
<link rel="shortcut icon" href="{{ asset('faviconka_ru_137.png') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/mine.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script type="text/javascript" src="{{ asset('js/mine.js') }}"></script>
  </head>

  <body>
    <div class="wrap">
       <div class="people_insert">
          @yield('content_insert')
       </div>
       <div class="people_view">
          @yield('content_view')
       </div>
    </div>
  </body>
</html>
