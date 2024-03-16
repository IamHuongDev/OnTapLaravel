<!doctype html>
<html lang="en">
   <head>
        @include('Shared.Head-Css')
   </head>
   <body>
      <!-- loader Start -->
      <div id="loading">
         <div id="loading-center">
         </div>
      </div>
      <!-- loader END -->
      <!-- Wrapper Start -->
      <div class="wrapper">
         <!-- Sidebar  -->
         @include('Shared.Menu')
         @include('Shared.Header')
         <!-- Page Content  -->
         <div id="content-page" class="content-page">
            <div class="container-fluid">
                @yield('content')
            </div>
         </div>
      </div>
      <!-- Wrapper END -->
      <!-- Footer -->
       @include('Shared.Footer')
       @include('Shared.Sub-menu')
      <!-- Footer END -->
      @include('Shared.Foot-Js')
      @yield('js')
   </body>
</html>
