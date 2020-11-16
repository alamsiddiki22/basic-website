
<!DOCTYPE html>
<html>
<head>
    <title> @yield('title')</title>
    <link rel="stylesheet" href="{{ asset('/') }}front-end/css/font-awesome.min.css">
    <script language="javascript" type="text/javascript">
        function clearText(field)
        {
            if (field.defaultValue == field.value) field.value = '';
            else if (field.value == '') field.value = field.defaultValue;
        }
    </script>

    <link rel="stylesheet" href="{{ asset('/') }}front-end/css/nivo-slider.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="{{ asset('/') }}front-end/style.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js" type="text/javascript"></script>
    <script src="{{ asset('/') }}front-end/js/jquery.nivo.slider.js" type="text/javascript"></script>

    <script type="text/javascript">
        $(window).load(function() {
            $('#slider').nivoSlider({
                effect:'random',
                slices:10,
                animSpeed:500,
                pauseTime:2200,
                startSlide:0, //Set starting Slide (0 index)
                directionNav:false,
                directionNavHide:false, //Only show on hover
                controlNav:false, //1,2,3...
                controlNavThumbs:false, //Use thumbnails for Control Nav
                pauseOnHover:true, //Stop animation while hovering
                manualAdvance:false, //Force manual transitions
                captionOpacity:0.8, //Universal caption opacity
                beforeChange: function(){},
                afterChange: function(){},
                slideshowEnd: function(){} //Triggers after all slides have been shown
            });
        });
    </script>
</head>
<body>
<div class="headersection templete clear">
    <div class="logo">
        <img src="{{ asset('/') }}front-end/images/logo1.jpg" alt="logo">
        <h2>Website Title</h2>
        <p>Our website description</p>
    </div>
    <div class="social">
        <a target="blank" href="https://www.facebook.com"><i class="fa fa-facebook"></i></a>
        <a target="blank" href="https://www.twitter.com"><i class="fa fa-twitter"></i></a>
        <a target="blank" href="https://www.linkedin.com"><i class="fa fa-linkedin"></i></a>
        <a target="blank" href="https://www.google.com"><i class="fa fa-google-plus"></i></a>
    </div>
</div>
<div class="navsection templete">
    <ul>
        <li><a id="active" href="{{route('/')}}">Home</a></li>
        <li><a href="{{route('about')}}">About</a></li>
        <li><a href="{{route('category-product')}}">Product</a>
            <ul>
                <li><a href="#">product one</a></li>
                <li><a href="#">product Two</a></li>
                <li><a href="#">product Three</a></li>
                <li><a href="#">product Four</a></li>
                <li><a href="#">product Five</a></li>
            </ul>
        </li>
        <li><a href="{{route('private')}}">Privacy</a></li>
        <li><a href="{{route('post')}}">DMCA</a></li>
        <li><a href="{{route('contuct')}}">Contuct</a>
            <ul>
                <li><a href="{{route('admin')}}">Address one</a></li>
                <li><a href="#">Address Two</a></li>
                <li><a href="#">Address Three</a></li>
                <li><a href="#">Address Four</a></li>
                <li><a href="#">Address Five</a></li>
            </ul>
        </li>
    </ul>
</div>


@yield('body')


<div class="footersection templete clear">
    <div class="footermenu templete clear">
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Contuct</a></li>
            <li><a href="#">Privacy</a></li>
        </ul>
    </div>
    <p>&copy; copyright Traning with live project</p>
</div>
<div class="fixedicon clear">
    <a target="blank" href="http://www.facebook.com"><img src="{{ asset('/') }}front-end/images/fb.png" alt="facebook"></a>
    <a target="blank" href="http://www.twitter.com"><img src="{{ asset('/') }}front-end/images/tw.png" alt="twitter"></a>
    <a target="blank" href="http://www.Google.com"><img src="{{ asset('/') }}front-end/images/gl.png" alt="Googleplus"></a>
    <a target="blank" href="http://www.linkedin.com"><img src="{{ asset('/') }}front-end/images/li.png" alt="linkedin"></a>
</div>

<script src="http://maps.google.com/maps/api/js"></script>
<script src="{{ asset('/') }}front-end/js/gmaps.js"></script>
<script type="text/javascript">
    var map;
    $(document).ready(function(){
        var map = new GMaps({
            el: '#map',
            lat: -12.043333,
            lng: -77.028333
        });

        GMaps.geolocate({
            success: function(position){
                map.setCenter(position.coords.latitude, position.coords.longitude);
            },
            error: function(error){
                alert('Geolocation failed: '+error.message);
            },
            not_supported: function(){
                alert("Your browser does not support geolocation");
            },
            always: function(){
                alert("Done!");
            }
        });
    });
</script>

<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
    ga('create', 'UA-63535195-1', 'auto');
    ga('send', 'pageview');
</script>
<script type="text/javascript">var scrolltotop={setting:{startline:100,scrollto:0,scrollduration:1e3,fadeduration:[500,100]},controlHTML:'<img src="{{ asset('/') }}front-end/images/arrow52.png">',controlattrs:{offsetx:5,offsety:5},anchorkeyword:"#top",state:{isvisible:!1,shouldvisible:!1},scrollup:function(){this.cssfixedsupport||this.$control.css({opacity:0});var t=isNaN(this.setting.scrollto)?this.setting.scrollto:parseInt(this.setting.scrollto);t="string"==typeof t&&1==jQuery("#"+t).length?jQuery("#"+t).offset().top:0,this.$body.animate({scrollTop:t},this.setting.scrollduration)},keepfixed:function(){var t=jQuery(window),o=t.scrollLeft()+t.width()-this.$control.width()-this.controlattrs.offsetx,s=t.scrollTop()+t.height()-this.$control.height()-this.controlattrs.offsety;this.$control.css({left:o+"px",top:s+"px"})},togglecontrol:function(){var t=jQuery(window).scrollTop();this.cssfixedsupport||this.keepfixed(),this.state.shouldvisible=t>=this.setting.startline?!0:!1,this.state.shouldvisible&&!this.state.isvisible?(this.$control.stop().animate({opacity:1},this.setting.fadeduration[0]),this.state.isvisible=!0):0==this.state.shouldvisible&&this.state.isvisible&&(this.$control.stop().animate({opacity:0},this.setting.fadeduration[1]),this.state.isvisible=!1)},init:function(){jQuery(document).ready(function(t){var o=scrolltotop,s=document.all;o.cssfixedsupport=!s||s&&"CSS1Compat"==document.compatMode&&window.XMLHttpRequest,o.$body=t(window.opera?"CSS1Compat"==document.compatMode?"html":"body":"html,body"),o.$control=t('<div id="topcontrol">'+o.controlHTML+"</div>").css({position:o.cssfixedsupport?"fixed":"absolute",bottom:o.controlattrs.offsety,right:o.controlattrs.offsetx,opacity:0,cursor:"pointer"}).attr({title:"Scroll to Top"}).click(function(){return o.scrollup(),!1}).appendTo("body"),document.all&&!window.XMLHttpRequest&&""!=o.$control.text()&&o.$control.css({width:o.$control.width()}),o.togglecontrol(),t('a[href="'+o.anchorkeyword+'"]').click(function(){return o.scrollup(),!1}),t(window).bind("scroll resize",function(t){o.togglecontrol()})})}};scrolltotop.init();</script>

</body>
</html>







{{--<!DOCTYPE html>--}}
{{--<html>--}}
{{--<head>--}}
{{--    <title> @yield('title') </title>--}}
{{--    <link rel="stylesheet" href="{{ asset('/') }}front-end/css/font-awesome.min.css">--}}
{{--    <script language="javascript" type="text/javascript">--}}
{{--        function clearText(field)--}}
{{--        {--}}
{{--            if (field.defaultValue == field.value) field.value = '';--}}
{{--            else if (field.value == '') field.value = field.defaultValue;--}}
{{--        }--}}
{{--    </script>--}}

{{--    <link rel="stylesheet" href="{{ asset('/') }}front-end/css/nivo-slider.css" type="text/css" media="screen" />--}}
{{--    <link rel="stylesheet" href="{{ asset('/') }}front-end/style.css">--}}
{{--    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js" type="text/javascript"></script>--}}
{{--    <script src="{{ asset('/') }}front-end/js/jquery.nivo.slider.js" type="text/javascript"></script>--}}

{{--    <script type="text/javascript">--}}
{{--        $(window).load(function() {--}}
{{--            $('#slider').nivoSlider({--}}
{{--                effect:'random',--}}
{{--                slices:10,--}}
{{--                animSpeed:500,--}}
{{--                pauseTime:2200,--}}
{{--                startSlide:0, //Set starting Slide (0 index)--}}
{{--                directionNav:false,--}}
{{--                directionNavHide:false, //Only show on hover--}}
{{--                controlNav:false, //1,2,3...--}}
{{--                controlNavThumbs:false, //Use thumbnails for Control Nav--}}
{{--                pauseOnHover:true, //Stop animation while hovering--}}
{{--                manualAdvance:false, //Force manual transitions--}}
{{--                captionOpacity:0.8, //Universal caption opacity--}}
{{--                beforeChange: function(){},--}}
{{--                afterChange: function(){},--}}
{{--                slideshowEnd: function(){} //Triggers after all slides have been shown--}}
{{--            });--}}
{{--        });--}}
{{--    </script>--}}
{{--</head>--}}
{{--<body>--}}
{{--<!--headersection start-->--}}
{{--<div class="headersection templete clear">--}}
{{--    <div class="logo">--}}
{{--        <img src="{{ asset('/') }}front-end/images/logo1.jpg" alt="logo">--}}
{{--        <h2>Website Title</h2>--}}
{{--        <p>Our website description</p>--}}
{{--    </div>--}}
{{--    <div class="social">--}}
{{--        <a target="blank" href="https://www.facebook.com"><i class="fa fa-facebook"></i></a>--}}
{{--        <a target="blank" href="https://www.twitter.com"><i class="fa fa-twitter"></i></a>--}}
{{--        <a target="blank" href="https://www.linkedin.com"><i class="fa fa-linkedin"></i></a>--}}
{{--        <a target="blank" href="https://www.google.com"><i class="fa fa-google-plus"></i></a>--}}
{{--    </div>--}}
{{--</div>--}}
{{--<div class="navsection templete">--}}
{{--    <ul>--}}
{{--        <li><a id="active" href="#">Home</a></li>--}}
{{--        <li><a id="active" href="{{ route('/') }}">Home</a></li>--}}
{{--        <li><a href="#">About</a></li>--}}
{{--        <li><a href="{{ route('about') }}">About</a></li>--}}
{{--        <li><a href="item.html">Product</a>--}}
{{--            <ul>--}}
{{--                <li><a href="#">product one</a></li>--}}
{{--                <li><a href="{{ route('category-product') }}">product one</a></li>--}}
{{--                <li><a href="#">product Two</a></li>--}}
{{--                <li><a href="#">product Three</a></li>--}}
{{--                <li><a href="#">product Four</a></li>--}}
{{--                <li><a href="#">product Five</a></li>--}}
{{--            </ul>--}}
{{--        </li>--}}
{{--        <li><a href="item two.html">Privacy</a></li>--}}
{{--        <li><a href="#">DMCA</a></li>--}}
{{--        <li><a href="{{ route('category-product') }}">DMCA</a></li>--}}
{{--        <li><a href="Contuct.html">Contuct</a>--}}
{{--            <ul>--}}
{{--                <li><a href="#">Address one</a></li>--}}
{{--                <li><a href="#">Address Two</a></li>--}}
{{--                <li><a href="#">Address Three</a></li>--}}
{{--                <li><a href="#">Address Four</a></li>--}}
{{--                <li><a href="#">Address Five</a></li>--}}
{{--            </ul>--}}
{{--        </li>--}}
{{--    </ul>--}}
{{--</div>--}}
{{--<!--headersection end-->--}}
{{--@yield('body')--}}
{{--<!--footersection start-->--}}
{{--<div class="footersection templete clear">--}}
{{--    <div class="footermenu templete clear">--}}
{{--        <ul>--}}
{{--            <li><a href="#">Home</a></li>--}}
{{--            <li><a href="#">About</a></li>--}}
{{--            <li><a href="#">Contuct</a></li>--}}
{{--            <li><a href="#">Privacy</a></li>--}}
{{--        </ul>--}}
{{--    </div>--}}
{{--    <p>&copy; copyright Traning with live project</p>--}}
{{--</div>--}}
{{--<!--footersection end-->--}}
{{--<div class="fixedicon clear">--}}
{{--    <a target="blank" href="http://www.facebook.com"><img src="{{ asset('/') }}front-end/images/fb.png" alt="facebook"></a>--}}
{{--    <a target="blank" href="http://www.twitter.com"><img src="{{ asset('/') }}front-end/images/tw.png" alt="twitter"></a>--}}
{{--    <a target="blank" href="http://www.Google.com"><img src="{{ asset('/') }}front-end/images/gl.png" alt="Googleplus"></a>--}}
{{--    <a target="blank" href="http://www.linkedin.com"><img src="{{ asset('/') }}front-end/images/li.png" alt="linkedin"></a>--}}
{{--</div>--}}
{{--<script>--}}
{{--    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){--}}
{{--        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),--}}
{{--        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)--}}
{{--    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');--}}
{{--    ga('create', 'UA-63535195-1', 'auto');--}}
{{--    ga('send', 'pageview');--}}
{{--</script>--}}
{{--<script type="text/javascript">var scrolltotop={setting:{startline:100,scrollto:0,scrollduration:1e3,fadeduration:[500,100]},controlHTML:'<img src="{{ asset('/') }}front-end/images/arrow52.png">',controlattrs:{offsetx:5,offsety:5},anchorkeyword:"#top",state:{isvisible:!1,shouldvisible:!1},scrollup:function(){this.cssfixedsupport||this.$control.css({opacity:0});var t=isNaN(this.setting.scrollto)?this.setting.scrollto:parseInt(this.setting.scrollto);t="string"==typeof t&&1==jQuery("#"+t).length?jQuery("#"+t).offset().top:0,this.$body.animate({scrollTop:t},this.setting.scrollduration)},keepfixed:function(){var t=jQuery(window),o=t.scrollLeft()+t.width()-this.$control.width()-this.controlattrs.offsetx,s=t.scrollTop()+t.height()-this.$control.height()-this.controlattrs.offsety;this.$control.css({left:o+"px",top:s+"px"})},togglecontrol:function(){var t=jQuery(window).scrollTop();this.cssfixedsupport||this.keepfixed(),this.state.shouldvisible=t>=this.setting.startline?!0:!1,this.state.shouldvisible&&!this.state.isvisible?(this.$control.stop().animate({opacity:1},this.setting.fadeduration[0]),this.state.isvisible=!0):0==this.state.shouldvisible&&this.state.isvisible&&(this.$control.stop().animate({opacity:0},this.setting.fadeduration[1]),this.state.isvisible=!1)},init:function(){jQuery(document).ready(function(t){var o=scrolltotop,s=document.all;o.cssfixedsupport=!s||s&&"CSS1Compat"==document.compatMode&&window.XMLHttpRequest,o.$body=t(window.opera?"CSS1Compat"==document.compatMode?"html":"body":"html,body"),o.$control=t('<div id="topcontrol">'+o.controlHTML+"</div>").css({position:o.cssfixedsupport?"fixed":"absolute",bottom:o.controlattrs.offsety,right:o.controlattrs.offsetx,opacity:0,cursor:"pointer"}).attr({title:"Scroll to Top"}).click(function(){return o.scrollup(),!1}).appendTo("body"),document.all&&!window.XMLHttpRequest&&""!=o.$control.text()&&o.$control.css({width:o.$control.width()}),o.togglecontrol(),t('a[href="'+o.anchorkeyword+'"]').click(function(){return o.scrollup(),!1}),t(window).bind("scroll resize",function(t){o.togglecontrol()})})}};scrolltotop.init();</script>--}}

{{--</body>--}}
{{--</html>--}}


