<html>
  <head>
    {{ Theme::partial('seostuff') }} 
         <!--defaultcss.blade.php-->
    {{ Theme::partial('defaultcss') }}  
    {{ Theme::asset()->styles() }} 
  </head>
  <body>
    <div class="container">
    {{ Theme::partial('header') }} 
    {{ Theme::partial('slider') }} 
    {{ Theme::place('content') }}  
    {{ Theme::partial('footer') }} 
    </div>

    <!-- javascript -->
    {{ Theme::partial('defaultjs') }}
    {{-- Theme::asset()->scripts() --}}
    {{-- Theme::asset()->container('footer')->scripts() --}}
    {{ Theme::partial('analytic') }}
  </body>
</html>