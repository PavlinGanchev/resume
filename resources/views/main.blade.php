<!DOCTYPE HTML>
<!--
	Read Only by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
<head>
    <title>Resume</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="stylesheet" href="{{ elixir('final/final.css')}}"/>
    <!--[if lte IE 8]><script src="js/ie/html5shiv.js"></script><![endif]-->

    {{--This css is only about login and register TODO: Remove when possible!!! Fix it!!!--}}

    <!--[if lte IE 8]><link rel="stylesheet" href="css/ie8.css" /><![endif]-->

    <!-- Scripts -->
    {{--<script src="{{ elixir('final/final.js') }}"></script>--}}


    <script src="js/jquery.min.js"></script>
    <script src="js/jquery.scroller.min.js"></script>
    <script src="js/jquery.scrollzer.min.js"></script>
    <script src="js/jquery.scrolly.min.js"></script>
    <script src="js/skel.min.js"></script>
    <script src="js/util.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>


  {{--<!--[if lte IE 8]><script src="js/ie/respond.min.js"></script><![endif]-->--}}

</head>
<body>

<!-- Header -->
<section id="header">
    <header>

        <a href="{{ url('/') }}" class="authBtn homeBtn" title="Home">Home</a>
        @if(Auth::guest())
            <div class="authParrent">
            <a href="{{ url('login') }}" class="authBtn" title="Login">Login</a>
            <a href="{{ url('register') }}" class="authBtn" title="Register">Register</a>
            </div>
        <span class="image avatar"><img src="images/portrait.jpg" alt="portrait of myself" /></span>
        <h1 id="logo">Pavlin Ganchev</h1>
        <p>Junior PHP programmer</p>
            <section>
                <ul class="icons">
                    {{--Twitter <li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>--}}
                    {{--Facebook--}}{{-- <li><a href="facebook.com" class="icon fa-facebook" title="Facebook"><span class="label">Facebook</span></a></li>--}}
                     {{--Instagrem <li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>--}}
                   {{--Github--}} <li><a href="https://github.com/PavlinGanchev/resume" class="icon fa-github authBtn" title="GitHub source code"><span> The site on GitHub</span><span class="label">Github</span></a></li>
                   {{-- E-mail<li><a href="#" class="icon fa-envelope" title="Feedback"><span class="label">Email</span></a></li>--}}
                </ul>
            </section>
            @else
            <div class="authParrent">
                <a href="{{ url('logout') }}" class="authBtn" title="Logout">Logout</a>
                <a href="{{ url('comment/create') }}" class="authBtn" title="Leave comment">Leave a comment</a>
            </div>
            <span class="image avatar"><img src="/images/silhouette man1.jpg" alt="avatar picture" /></span>
            <h1 id="logo">Wellcome, {{ Auth::user()->name }} </h1>

        @endif
    </header>
    <nav id="nav">

        @if( Request::is('/#') || Request::is('/') )

            <ul>
                <li><a href="#one" class="active">About</a></li>
                <li><a href="#two">Things I Can Do</a></li>
                <li><a href="#three">A Few Accomplishments</a></li>
                @if(Auth::user())
                    <li><a href="#six">Comments</a></li>
                    <li><a href="#eight">Leave feedback</a></li>

                @else
                    <li><a href="#four">Contact</a></li>
                @endif
            </ul>
        @endif

    </nav>
    <div class="scrollUpContainer"><a href="#" class="scrollUp" title="Scroll to top"></a></div>

</section>

<!-- Wrapper -->

    <div id="wrapper">
        <div>
            <a href="{{ url('/') }}" class="headbanner" title="Home"></a>
        </div>

        <!-- Main -->
        <div id="main">

            <div class="container">
                {{--TODO: css mess!!!--}}
            </div>
           @include('errors.errorLogic')
           @include('partials.flashMsg')

            @yield('content')

        </div>

        <!-- Footer -->
            @include('footer')
    </div>
</body>
</html>
