<html>
    <head>
        {{ Theme::partial('seostuff') }} 
        {{ Theme::partial('defaultcss') }}  
        {{ Theme::asset()->styles() }} 
    </head>
    <body>
        <div class="container">
            {{ Theme::partial('header') }} 
            {{ Theme::place('content') }}  
            {{ Theme::partial('footer') }} 
        </div>

        {{ Theme::partial('defaultjs') }}
        {{ Theme::partial('analytic') }}
    </body>
</html>