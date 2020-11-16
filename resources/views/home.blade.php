
{{--@extends('front-end.master')--}}
{{--@section('body')--}}
{{--<div class="slidersection templete clear">--}}
{{--    <div id="slider">--}}
{{--        <a href=""><img src="{{ asset('/') }}/front-end/images/slideshow/01.jpg" alt="nature 1" title="This is slider one Title or description"></a>--}}
{{--        <a href="#"><img src="{{ asset('/') }}/front-end/images/slideshow/02.jpg" alt="nature 2" title="This is slider Two Title or description"></a>--}}
{{--        <a href="#"><img src="{{ asset('/') }}/front-end/images/slideshow/03.jpg" alt="nature 3" title="This is slider hree Title or description"></a>--}}
{{--        <a href="#"><img src="{{ asset('/') }}/front-end/images/slideshow/04.jpg" alt="nature 4" title="This is slider Four Title or description"></a>--}}
{{--    </div>--}}
{{--</div>--}}
{{--<div class="contentsection contemplete clear">--}}
{{--    <div class="maincontent clear">--}}
{{--        <div class="samepost clear">--}}
{{--            <h2>Our post title here</h2>--}}
{{--            <a href="#"><img src="{{ asset('/') }}/front-end/images/1.jpg" alt="post image"></a>--}}
{{--            <p>--}}
{{--                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex ratione atque inventore voluptatum, eius neque quos vero cumque iure illum facilis, dicta nesciunt. Ducimus est nam veritatis, accusamus pariatur, voluptatibusLorem ipsum dolor sit amet, consectetur adipisicing elit. Ex ratione atque inventore voluptatum.--}}
{{--            </p>--}}
{{--            <div class="readmore clear">--}}
{{--                <a href="Post.html">Read more</a>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="samepost clear">--}}
{{--            <h2>Our post title here</h2>--}}
{{--            <img src="{{ asset('/') }}/front-end/images/2.jpg" alt="post image">--}}
{{--            <p>--}}
{{--                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex ratione atque inventore voluptatum, eius neque quos vero cumque iure illum facilis, dicta nesciunt. Ducimus est nam veritatis, accusamus pariatur, voluptatibusLorem ipsum dolor sit amet, consectetur adipisicing elit. Ex ratione atque inventore voluptatum.--}}
{{--            </p>--}}
{{--            <div class="readmore clear">--}}
{{--                <a href="Post.html">Read more</a>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="samepost clear">--}}
{{--            <h2>Our post title here</h2>--}}
{{--            <img src="{{ asset('/') }}/front-end/images/3.jpg" alt="post image">--}}
{{--            <p>--}}
{{--                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex ratione atque inventore voluptatum, eius neque quos vero cumque iure illum facilis, dicta nesciunt. Ducimus est nam veritatis, accusamus pariatur, voluptatibusLorem ipsum dolor sit amet, consectetur adipisicing elit. Ex ratione atque inventore voluptatum.--}}
{{--            </p>--}}
{{--            <div class="readmore clear">--}}
{{--                <a href="Post.html">Read more</a>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <div class="sidebar clear">--}}
{{--        <div class="samesidebar clear">--}}
{{--            <h2>Latest articles</h2>--}}
{{--            <ul>--}}
{{--                <li><a href="#">Post Title one will be go here</a></li>--}}
{{--                <li><a href="#">Post Title Two will be go here</a></li>--}}
{{--                <li><a href="#">Post Title Three will be go here</a></li>--}}
{{--                <li><a href="#">Post Title Four will be go here</a></li>--}}
{{--                <li><a href="#">Post Title Five will be go here</a></li>--}}
{{--                <li><a href="#">Post Title Six will be go here</a></li>--}}
{{--            </ul>--}}
{{--        </div>--}}
{{--        <div class="samesidebar clear">--}}
{{--            <h2>Popular articles</h2>--}}
{{--            <div class="Popular clear">--}}
{{--                <h3><a href="#">Post title will be go here..</a></h3>--}}
{{--                <a href="#"><img src="{{ asset('/') }}/front-end/images/1.jpg" alt="post image"></a>--}}
{{--                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima nihil sunt, aperiam odio.</p>--}}
{{--            </div>--}}
{{--            <div class="Popular clear">--}}
{{--                <h3><a href="#">Post title will be go here..</a></h3>--}}
{{--                <a href="#"><img src="{{ asset('/') }}/front-end/images/1.jpg" alt="post image"></a>--}}
{{--                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima nihil sunt, aperiam odio.</p>--}}
{{--            </div>--}}
{{--            <div class="Popular clear">--}}
{{--                <h3><a href="#">Post title will be go here..</a></h3>--}}
{{--                <a href="#"><img src="{{ asset('/') }}/front-end/images/1.jpg" alt="post image"></a>--}}
{{--                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima nihil sunt, aperiam odio.</p>--}}
{{--            </div>--}}
{{--            <div class="Popular clear">--}}
{{--                <h3><a href="#">Post title will be go here..</a></h3>--}}
{{--                <a href="#"><img src="{{ asset('/') }}/front-end/images/1.jpg" alt="post image"></a>--}}
{{--                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima nihil sunt, aperiam odio.</p>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
{{--@endsection--}}





@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

