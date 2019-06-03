<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    @include('partials.head')
<body>
  <!--nav-->
  @include('partials.nav')
    <!--conteudo variavel -->
    <div id="app">
            <app-component></app-component>
        </div>
  <!--footer -->
  @include('partials.footer')
  <!--footer -->
  @include('partials.scripts')
</body>
</html>
