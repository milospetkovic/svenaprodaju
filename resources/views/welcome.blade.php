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
        <link rel="stylesheet" href="/css/app.css" />
        <link rel="stylesheet" href="/css/elitasoft.css" />

        @stack('vue-styles')

        <script type="text/javascript">
            window.Laravel = <?php echo json_encode(['csrfToken' => csrf_token()]) ?>
        </script>

    </head>

    <body>

        <div id="app" class="flex-center position-ref full-height">

            @include('flash::message')

            <nav class="navbar navbar-inverse navbar-fixed-top">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <div id="navbar" class="navbar-collapse collapse">
                            @if (Route::has('login'))
                                <ul class="nav navbar-nav navbar-right">
                                    @auth
                                        <li><a href="{{ url('/home') }}">Home</a></li>
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
                        <div class="col-sm-3 col-md-2 sidebar">
                            <ul class="nav nav-sidebar">
                                <li class="active"><a href="#">Overview <span class="sr-only">(current)</span></a></li>
                                <li><a href="#">Reports</a></li>
                                <li><a href="#">Analytics</a></li>
                                <li><a href="#">Export</a></li>
                            </ul>
                            <ul class="nav nav-sidebar">
                                <li><a href="">Nav item</a></li>
                                <li><a href="">Nav item again</a></li>
                                <li><a href="">One more nav</a></li>
                                <li><a href="">Another nav item</a></li>
                                <li><a href="">More navigation</a></li>
                            </ul>
                            <ul class="nav nav-sidebar">
                                <li><a href="">Nav item again</a></li>
                                <li><a href="">One more nav</a></li>
                                <li><a href="">Another nav item</a></li>
                            </ul>
                        </div>
                        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
                            <h1 class="page-header">Dashboard</h1>

                            <div class="row placeholders">
                                <div class="col-xs-6 col-sm-3 placeholder">
                                    <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail">
                                    <h4>Label</h4>
                                    <span class="text-muted">Something else</span>
                                </div>
                                <div class="col-xs-6 col-sm-3 placeholder">
                                    <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail">
                                    <h4>Label</h4>
                                    <span class="text-muted">Something else</span>
                                </div>
                                <div class="col-xs-6 col-sm-3 placeholder">
                                    <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail">
                                    <h4>Label</h4>
                                    <span class="text-muted">Something else</span>
                                </div>
                                <div class="col-xs-6 col-sm-3 placeholder">
                                    <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail">
                                    <h4>Label</h4>
                                    <span class="text-muted">Something else</span>
                                </div>
                            </div>

                            <h2 class="sub-header">Section title</h2>
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Header</th>
                                        <th>Header</th>
                                        <th>Header</th>
                                        <th>Header</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>1,001</td>
                                        <td>Lorem</td>
                                        <td>ipsum</td>
                                        <td>dolor</td>
                                        <td>sit</td>
                                    </tr>
                                    <tr>
                                        <td>1,002</td>
                                        <td>amet</td>
                                        <td>consectetur</td>
                                        <td>adipiscing</td>
                                        <td>elit</td>
                                    </tr>
                                    <tr>
                                        <td>1,003</td>
                                        <td>Integer</td>
                                        <td>nec</td>
                                        <td>odio</td>
                                        <td>Praesent</td>
                                    </tr>
                                    <tr>
                                        <td>1,003</td>
                                        <td>libero</td>
                                        <td>Sed</td>
                                        <td>cursus</td>
                                        <td>ante</td>
                                    </tr>
                                    <tr>
                                        <td>1,004</td>
                                        <td>dapibus</td>
                                        <td>diam</td>
                                        <td>Sed</td>
                                        <td>nisi</td>
                                    </tr>
                                    <tr>
                                        <td>1,005</td>
                                        <td>Nulla</td>
                                        <td>quis</td>
                                        <td>sem</td>
                                        <td>at</td>
                                    </tr>
                                    <tr>
                                        <td>1,006</td>
                                        <td>nibh</td>
                                        <td>elementum</td>
                                        <td>imperdiet</td>
                                        <td>Duis</td>
                                    </tr>
                                    <tr>
                                        <td>1,007</td>
                                        <td>sagittis</td>
                                        <td>ipsum</td>
                                        <td>Praesent</td>
                                        <td>mauris</td>
                                    </tr>
                                    <tr>
                                        <td>1,008</td>
                                        <td>Fusce</td>
                                        <td>nec</td>
                                        <td>tellus</td>
                                        <td>sed</td>
                                    </tr>
                                    <tr>
                                        <td>1,009</td>
                                        <td>augue</td>
                                        <td>semper</td>
                                        <td>porta</td>
                                        <td>Mauris</td>
                                    </tr>
                                    <tr>
                                        <td>1,010</td>
                                        <td>massa</td>
                                        <td>Vestibulum</td>
                                        <td>lacinia</td>
                                        <td>arcu</td>
                                    </tr>
                                    <tr>
                                        <td>1,011</td>
                                        <td>eget</td>
                                        <td>nulla</td>
                                        <td>Class</td>
                                        <td>aptent</td>
                                    </tr>
                                    <tr>
                                        <td>1,012</td>
                                        <td>taciti</td>
                                        <td>sociosqu</td>
                                        <td>ad</td>
                                        <td>litora</td>
                                    </tr>
                                    <tr>
                                        <td>1,013</td>
                                        <td>torquent</td>
                                        <td>per</td>
                                        <td>conubia</td>
                                        <td>nostra</td>
                                    </tr>
                                    <tr>
                                        <td>1,014</td>
                                        <td>per</td>
                                        <td>inceptos</td>
                                        <td>himenaeos</td>
                                        <td>Curabitur</td>
                                    </tr>
                                    <tr>
                                        <td>1,015</td>
                                        <td>sodales</td>
                                        <td>ligula</td>
                                        <td>in</td>
                                        <td>libero</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
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