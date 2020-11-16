@extends('front-end.master')
@section('title')
    content
@endsection
@section('body')
    <div class="contentsection contemplete clear">
        <div class="maincontent clear">
            <div class="about clear">
                <h2>Contact us</h2>
                <table>
                    <tr>
                        <td>Your First Name:</td>
                        <td><input type="text" name="firstname" placeholder="Enter first name"></td>
                    </tr>
                    <tr>
                        <td>Your Last Name:</td>
                        <td><input type="text" name="lastname" placeholder="Enter Last name"></td>
                    </tr>
                    <tr>
                        <td>Your Email Address:</td>
                        <td><input type="email" name="email" placeholder="Enter Email Address"></td>
                    </tr>
                    <tr>
                        <td>Your Message:</td>
                        <td><textarea></textarea></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="submit" name="submit" value="submit"></td>
                    </tr>
                </table>


                <!-- <p>Your First Name: <input type="text" name="firstname" placeholder="Enter first name"></p>
                <p>Your Last Name: <input type="text" name="lastname" placeholder="Enter Last name"></p>
                <p>Your Email Address: <input type="email" name="email" placeholder="Enter Email Address"></p>
                <p>Your Password: <input type="Password" name="Password" placeholder="Enter Password"></p>
                <p><input type="submit" name="submit" value="submit"></p> -->
            </div>
            <div class="googlemp">
                <div id="map"></div>
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
