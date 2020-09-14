<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'ระบบสมัครสมาชิก')</title>

    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    @yield('stylesheet')
</head>
<body>

    <div id="app" class="condition-wrapper wrapper">
        <header class="header-container">
            <nav class="navbar navbar-expand-md navbar-light bg-light fixed-top shadow-sm">
                <div class="container-fluid">
                    <div class="navbar-header"><a href="{{ route('auth.index') }}" class="navbar-brand">{{ __('ระบบสมัครสมาชิก') }}</a></div>
                    <div class="navbar-link">
                        <ul class="navbar-nav ml-auto hidden-sm ">
                            @if (Route::current()->getName() == 'auth.index')
                                <li class="nav-item"><a href="{{ route('auth.register') }}" class="nav-link">{{ __('Register') }}</a></li>
                                <li class="nav-item"><a href="{{ route('auth.login') }}" class="nav-link">{{ __('Login') }}</a></li>
                                @elseif(Route::current()->getName() == 'auth.register')
                                <li class="nav-item"><a href="{{ route('auth.login') }}" class="nav-link">{{ __('Login') }}</a></li>
                                @elseif(Route::current()->getName() == 'auth.login')
                                <li class="nav-item"><a href="{{ route('auth.register') }}" class="nav-link">{{ __('Register') }}</a></li>
                            @endif
                        </ul>
                        <ul class="navbar-nav ml-auto only-sm sidebar isClose">
                            @if (Route::current()->getName() == 'auth.index')
                                <li class="nav-item"><a href="{{ route('auth.register') }}" class="nav-link text-danger">{{ __('Register') }}</a></li>
                                <li class="nav-item"><a href="{{ route('auth.login') }}" class="nav-link text-danger">{{ __('Login') }}</a></li>
                                @elseif(Route::current()->getName() == 'auth.register')
                                <li class="nav-item"><a href="{{ route('auth.login') }}" class="nav-link text-danger">{{ __('Login') }}</a></li>
                                @elseif(Route::current()->getName() == 'auth.login')
                                <li class="nav-item"><a href="{{ route('auth.register') }}" class="nav-link text-danger">{{ __('Register') }}</a></li>
                            @endif
                        </ul>
                        <ul id="ToggleSidebar" class="navbar-nav only-sm">
                            <button class="btn btn-outline-secondary nav-item nav-link">Open</button>
                        </ul>
                    </div>
                </div>
                
            </nav>
        </header>

        <main class="main-container py-5">

            @yield('main-content')
            <footer class="footer-container">
                <div class="footer-content">&copy; {{ date('Y') }} {{ config('app.name') }} All right reserved</div>
            </footer>
        </main>
    </div>
    <script src="{{ mix('js/app.js') }}"></script>
    @yield('script')

    <script type="text/javascript">

        $('button').click(function(e){
            $('.sidebar').toggleClass('isClose');
            e.stopPropagation();
        });

        $('.sidebar').click(function(e){
            e.stopPropagation();
        });
        $(document).click(function(){
            $('.sidebar').addClass('isClose');
        })

        $(window).resize(function(){
            $('.sidebar').addClass('isClose');
        })

        // $(document).ready(function(){
        //     $("button").click(function(){
        //         $('.sidebar').toggleClass('isClose');
        //     });
        // });

        // var w = 480;
        // $(window).resize(function(){
        //     $('.sidebar').addClass('isClose');
        // });

        // $(document).on('click', function(e){
        //     if($('e.target').closest('.sidebar').length === 0) {
        //         $('.sidbar').addClass('isClose');
        //     }
        // });
    </script>
</body>
</html>