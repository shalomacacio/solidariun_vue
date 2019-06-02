<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    @include('partials.head')
<body>
  <!--nav-->
  @include('partials.nav')
    <!--conteudo variavel -->
    @yield('content')
  <!--footer -->
  @include('partials.footer')
  <!--footer -->
  @include('partials.scripts')
</body>
</html>
