@extends('default')

@section('app')
<html lang ="{{ str_replace('_','-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, intial-scale=1">
    <title>Laravel</title>
  </head>
  <body>
    <div id="app">
    <app></app>          
    </div>
  </body>
  <script src="{{mix('js/app.js'}}"></script>
</html>
@endsection


