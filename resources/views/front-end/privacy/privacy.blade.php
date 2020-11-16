@extends('front-end.master')
@section('title')
    privacy
@endsection
@section('body')
    <div class="contentsection contemplete clear">
        <div class="maincontent clear myitem">
            <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi veritatis placeat veniam nulla id nostrum rerum enim officiis iste, molestiae dolorum deserunt tempore recusandae odit amet voluptatum praesentium vel consequuntur! ipsum dolor sit amet, consectetur adipisicing elit. Voluptas nemo laborum, velit voluptatibus modi atque itaque est corporis sed mollitia porro repudiandae illo necessitatibus consequatur tenetur debitis enim, assumenda autem.</p>

            <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi veritatis placeat veniam nulla id nostrum rerum enim officiis iste, molestiae dolorum deserunt tempore recusandae odit amet voluptatum praesentium vel consequuntur! ipsum dolor sit amet, consectetur adipisicing elit. Voluptas nemo laborum, velit voluptatibus modi atque itaque est corporis sed mollitia porro repudiandae illo necessitatibus consequatur tenetur debitis enim, assumenda autem.</p>
            <div class="items">
                <img src="{{ asset('/') }}/front-end/images/3.jpg" alt="one image">
                <div class="shadow">
                    <div class="ourtext">
                        <h2>Java progammer</h2>
                        <p>Expert in java j2ee</p>
                    </div>
                </div>
            </div>
            <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi veritatis placeat veniam nulla id nostrum rerum enim officiis iste, molestiae dolorum deserunt tempore recusandae odit amet voluptatum praesentium vel consequuntur! ipsum dolor sit amet, consectetur adipisicing elit. Voluptas nemo laborum, velit voluptatibus modi atque itaque est corporis sed mollitia porro repudiandae illo necessitatibus consequatur tenetur debitis enim, assumenda autem.</p>
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
