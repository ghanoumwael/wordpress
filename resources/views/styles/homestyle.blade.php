

<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">


        <!-- Fonts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

            <!-- Fonts -->
            <link rel="dns-prefetch" href="https://fonts.gstatic.com">
            <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

            <!-- Styles -->
            <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <style>

     .cont{
       border: 10px;
       border-radius: 10px;
       border-color: #9400D3	;
       border-style:groove;
       margin-top: 100px;
       padding-bottom: 100px;
       padding-top: 40px;


     }


        </style>

      </head>
      <body>
        <nav class="navbar navbar-dark bg-dark">
          <div class="container-fluid">


                 <ul class="navbar-nav mr-auto ">

              <li class="nav-item active"><a href="#" class="nav-link ">@yield('menue')</a></li>
            </ul>

          </div>
            </nav>


            <div class="container cont">
                <div class="row">
                    <div class="col-md-12">
                  @yield('content')
              </div>
            </div>
          </div>
          </body>
          </html>
