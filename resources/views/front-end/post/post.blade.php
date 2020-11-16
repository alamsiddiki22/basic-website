@extends('front-end.master')
@section('title')
    DMCA
@endsection
@section('body')
    <div class="contentsection contemplete clear">
        <div class="maincontent clear myphoto">

            <div class="photo">
                <img src="{{ asset('/') }}/front-end/images/3.jpg" alt="one image">

            </div>
            <div class="photoTwo">
                <img src="{{ asset('/') }}/front-end/images/3.jpg" alt="one image">

            </div>
            <div class="photoThree">
                <img src="{{ asset('/') }}/front-end/images/3.jpg" alt="one image">

            </div>
            <div class="photoFour">
                <img src="{{ asset('/') }}/front-end/images/3.jpg" alt="one image">

            </div>

        </div>
        <div class="sidebar clear">
            <div class="samesidebar clear">
                <h2>Latest articles</h2>
                <ul>
                    <li><a href="#">Post Title one will be go here</a></li>
                    <li><a href="#">Post Title Two will be go here</a></li>
                    <li><a href="#">Post Title Three will be go here</a></li>
                    <li><a href="#">Post Title Four will be go here</a></li>
                    <li><a href="#">Post Title Five will be go here</a></li>
                    <li><a href="#">Post Title Six will be go here</a></li>
                </ul>
            </div>
            <div class="samesidebar clear">
                <h2>Popular articles</h2>
                <div class="Popular clear">
                    <h3><a href="#">Post title will be go here..</a></h3>
                    <a href="#"><img src="{{ asset('/') }}/front-end/images/1.jpg" alt="post image"></a>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima nihil sunt, aperiam odio.</p>
                </div>
                <div class="Popular clear">
                    <h3><a href="#">Post title will be go here..</a></h3>
                    <a href="#"><img src="{{ asset('/') }}/front-end/images/1.jpg" alt="post image"></a>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima nihil sunt, aperiam odio.</p>
                </div>
                <div class="Popular clear">
                    <h3><a href="#">Post title will be go here..</a></h3>
                    <a href="#"><img src="{{ asset('/') }}/front-end/images/1.jpg" alt="post image"></a>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima nihil sunt, aperiam odio.</p>
                </div>
                <div class="Popular clear">
                    <h3><a href="#">Post title will be go here..</a></h3>
                    <a href="#"><img src="{{ asset('/') }}/front-end/images/1.jpg" alt="post image"></a>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima nihil sunt, aperiam odio.</p>
                </div>
            </div>
        </div>
    </div>
@endsection
