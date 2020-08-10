<!DOCTYPE html>
<html lang="en">
<head>
  @include('layout.head')                   {{--add  head--}}
</head>
<body>
  <div id="app">
   

    @yield('body')                          {{-- body custom--}}

    
  </div>
  @include('layout.scripts')                {{-- add js--}}
</body>
</html>