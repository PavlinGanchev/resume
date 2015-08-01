@extends('main')

@section('content')

            <!-- One -->
    <section id="one">
        <div class="container">
            <header class="major">
                <h2>Pavlin Ganchev</h2>
                <p>Just an incredibly simple responsive site<br />
                    template freebie by <a href="http://html5up.net">HTML5 UP</a>.</p>
            </header>
            <p>Faucibus sed lobortis aliquam lorem blandit. Lorem eu nunc metus col. Commodo id in arcu ante lorem ipsum sed accumsan erat praesent faucibus commodo ac mi lacus. Adipiscing mi ac commodo. Vis aliquet tortor ultricies non ante erat nunc integer eu ante ornare amet commetus vestibulum blandit integer in curae ac faucibus integer non. Adipiscing cubilia elementum.</p>
        </div>
    </section>

    <!-- Two -->
    <section id="two">
        <div class="container">
            <h3>Things I Can Do</h3>
            <p>Technical skills</p>
            <ul class="feature-icons">
                <li class="fa fa-css3">CSS 3</li>
                <li class="fa fa-css3">Sass</li>
                <li class="fa fa-html5">HTML 5</li>
                <li class="fa fa-html5">Blade template system</li>
                <li class="fa fa-code">PHP</li>
                <li class="fa fa-code">Laravel 5 Fundamentials</li>
                <li class="fa fa-database">MySQL</li>
                {{--<li class="fa fa-github">GitHub</li>--}}
                <li class="fa fa-windows">Windows</li>
                {{--<li class="fa fa-wordpress">Wordpress</li>--}}
                <li class="fa fa-code">Jquery</li>
            </ul>
            <p>Socila and organizatons skills</p>
            <ul class="feature-icons">
                <li class="fa fa-users">Team spirit</li>
                <li class="fa fa-university">Willingness for development and education</li>
                <li class="fa fa-bars">Sense of organization</li>
            </ul>
            <p>Sport skills</p>
            <ul class="feature-icons">
                <li class="fa fa-futbol-o">Football</li>
                <li class="fa fa-life-ring">Swimming</li>

            </ul>
        </div>
    </section>

    <!-- Three -->
    <section id="three">
        <div class="container">
            <h3>A Few Accomplishments</h3>
            <div class="features">
                <article>
                    <a href="#" class="image"><img src="images/400.jpg" alt="Certificate picture"/></a>
                    <div class="inner">
                        <h4>Certificate of Completion</h4>
                        <p>For successfully finishing the PHP Academy of "First Online Solutions"</p>
                    </div>
                </article>
                <article>
                    <div class="image"><img src="images\TU_Varna_jpg.jpg" alt="picture of Technical University" /></div>
                    <div class="inner">
                        <h4>Master degree of Engineer - Manager</h4>
                        <p>For successfully graduating of Industrial management- major at Technical University of Varna</p>
                    </div>
                </article>
                {{--<article>
                    <a href="#" class="image"><img src="images/pic03.jpg" alt="" /></a>
                    <div class="inner">
                        <h4>Snapped dark matter in the wild</h4>
                        <p>Integer eu ante ornare amet commetus vestibulum blandit integer in curae ac faucibus integer adipiscing ornare amet.</p>
                    </div>
                </article>--}}
            </div>
        </div>
    </section>


<!-- Six -->
@if(Auth::user())
    <section id="six">
        <div class="container">
            <header class="major">
                <h3>Comments</h3>

                @if( $comments )
                    @foreach($comments as $comment)
                        <hr/>
                        <article>

                            <h4>{{ $comment->title }}</h4>

                            <div><p>{{ $comment->body }}</p></div>
                            <div>
                                 <p class="viewPublished">Published by: {{ Auth::user()->name }}<br/> Date: {{ $comment->published_at }}</p>
                            </div>
                        </article>
                        @if( Auth::user()->id == $comment->user_id)
                            <a href="{{ action('CommentController@edit', array('id' => $comment->id)) }}" class="button special">Edit</a>
                            @endif
                    @endforeach
                    @else
                    <article>hello</article>
                @endif
            </header>
        </div>
    </section>

    <section id="eight">
        <div class="container">
            @include('emails.emailform')
        </div>
    </section>
    @else
            <!-- Four -->
    <section id="four">
        <div class="container">
            <h3>If you want to leave a feedback or a review please log in! </h3>

            <div class="col-md-6 col-md-offset-4">
                <a href="{{ url('login') }}" class="button special">Login</a>
                <a href="{{ url('register') }}" class="button special">Register</a>
            </div>

        </div>
    </section>
@endif
    @stop