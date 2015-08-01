<!DOCTYPE HTML>
<!--
	Read Only by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
<head>
    <title>Mine Resume</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!--[if lte IE 8]><script src="js/ie/html5shiv.js"></script><![endif]-->
    <link rel="stylesheet" href="/css/app.css"/>
    <link rel="stylesheet" href="/css/main.css" />
    {{--This css is only about login and register TODO: Remove when possible!!! Fix it!!!--}}

    <!--[if lte IE 8]><link rel="stylesheet" href="css/ie8.css" /><![endif]-->

    <!-- Scripts -->
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery.scrollzer.min.js"></script>
    <script src="js/jquery.scrolly.min.js"></script>
    <script src="js/skel.min.js"></script>
    <script src="js/util.js"></script>
    <!--[if lte IE 8]><script src="js/ie/respond.min.js"></script><![endif]-->
    <script src="js/main.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script>$('div.alert').delay(3000).slideUp(300);</script>
</head>
<body>

<!-- Header -->
<section id="header">
    <header>

        <a href="{{ url('/') }}" class="authBtn homeBtn">Home</a>
        @if(Auth::guest())
            <div class="authParrent">
            <a href="{{ url('login') }}" class="authBtn">Login</a>
            <a href="{{ url('register') }}" class="authBtn">Register</a>
            </div>
        <span class="image avatar"><img src="images/portrait.jpg" alt="portrait of myself" /></span>
        <h1 id="logo">Pavlin Ganchev</h1>
        <p>Junior PHP programmer</p>
            <section>
                <ul class="icons">
                    {{--Twitter <li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>--}}
                    {{--Facebook--}} <li><a href="facebook.com" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
                     {{--Instagrem <li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>--}}
                   {{--Github--}} <li><a href="https://github.com/PavlinGanchev/resume" class="icon fa-github"><span class="label">Github</span></a></li>
                    {{--E-mail--}}<li><a href="#" class="icon fa-envelope"><span class="label">Email</span></a></li>
                </ul>
            </section>
            @else
            <div class="authParrent">
                <a href="{{ url('logout') }}" class="authBtn">Logout</a>
                <a href="{{ url('comment/create') }}" class="authBtn" >Leave a comment</a>
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
                    <li><a href="#six" class="active">Comments</a></li>
                    <li><a href="#eight">Leave feedback</a></li>

                @else
                    <li><a href="#four">Contact</a></li>
                @endif
            </ul>
        @endif

    </nav>

</section>

<!-- Wrapper -->

    <div id="wrapper">
        <div>
            <a href="{{ url('/') }}" class="headbanner"></a>
        </div>

        <!-- Main -->
        <div id="main">
           @include('partials.flashMsg')

            @yield('content')

        </div>

        <!-- Footer -->
            @include('footer')
    </div>
</body>
</html>