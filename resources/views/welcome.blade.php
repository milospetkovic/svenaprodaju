<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        @yield('pagehead')
        @yield('css')

        <!-- CDN styles -->
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link rel="stylesheet" href="/css/dashboard.css" />
        {{--<link rel="stylesheet" href="/css/app.css" />--}}
        <link rel="stylesheet" href="/css/elitasoft.css" />

        @stack('vue-styles')

        <script type="text/javascript">
            window.Laravel = <?php echo json_encode(['csrfToken' => csrf_token()]) ?>
        </script>

    </head>

    <body>

        @include('flash::message')

        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-header-custom">
                    <div id="navbar" class="navbar-collapse collapse">


                        {!!  menu('portal', 'bootstrap') !!}


                        @if (Route::has('login'))
                            <ul class="nav navbar-nav navbar-right pull-right">
                                @auth
                                    <li><a href="{{ url('/home') }}">Home</a></li>
                                    <li>
                                        <a href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                @else
                                    <li><a href="{{ route('login') }}">Login</a></li>
                                    <li><a href="{{ route('register') }}">Register</a></li>
                                @endauth
                            </ul>
                        @endif
                    </div>
                </div>
            </div>
        </nav>

        <div class="clearfix">
            <!-- -->
        </div>

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-3 col-md-2 sidebarfaf">
                        <ul class="nav nav-sidebar">
                            {{--<li class="active"><a href="#">Overview <span class="sr-only">(current)</span></a></li>--}}
                            <li><a href="{{ route('advertisementcreate') }}">Postavi oglas</a></li>
                            @if (auth()->user())
                                <li><a href="{{ route('myadvertisementlist') }}">Moji oglasi</a></li>
                            @endif
                        </ul>
                    </div>

                    <div class="col-sm-9 col-md-10">
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>

<script src="//code.jquery.com/jquery.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script src="/js/app.js" type="text/javascript"></script>
<script src="/js/elitasoft.js" type="text/javascript"></script>

@yield('pagescript')
@yield('scripts')
@stack('vue-scripts')

<script>
$('#flash-overlay-modal').modal();
</script>

</body>
</html>