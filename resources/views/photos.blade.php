@extends('layouts.master_1')
@section('styles')
<link rel="stylesheet" type="text/css" href="/lightgallery/dist/css/lightgallery.min.css">
<style type="text/css">
	.clearfix::after {
    	content: "";
    	clear: both;
    	display: block;
    	}

	.demo-gallery {
		clear: both;
		display: block;
		}
		.demo-gallery > ul {
			margin-bottom: 0;
			
		}
		.demo-gallery > ul > li {
			float: left;
			margin-bottom: 15px;
			margin-right: 20px;
			width: 150px;
		}
		.demo-gallery > ul > li a {
			border-radius: 3px;
			display: block;
			overflow: hidden;
			position: relative;
			float: left;
		}
		.demo-gallery > ul > li a > img {
			-webkit-transition: -webkit-transform 0.15s ease 0s;
			-moz-transition: -moz-transform 0.15s ease 0s;
			-o-transition: -o-transform 0.15s ease 0s;
			transition: transform 0.15s ease 0s;
			-webkit-transform: scale3d(1, 1, 1);
			transform: scale3d(1, 1, 1);
			height: 100%;
			width: 100%;
		}
		.demo-gallery > ul > li a:hover > img {
			-webkit-transform: scale3d(1.1, 1.1, 1.1);
			transform: scale3d(1.1, 1.1, 1.1);
		}
		.demo-gallery > ul > li a:hover .demo-gallery-poster > img {
			opacity: 1;
		}
		.demo-gallery > ul > li a .demo-gallery-poster {
			background-color: rgba(0, 0, 0, 0.1);
			bottom: 0;
			left: 0;
			position: absolute;
			right: 0;
			top: 0;
			-webkit-transition: background-color 0.15s ease 0s;
			-o-transition: background-color 0.15s ease 0s;
			transition: background-color 0.15s ease 0s;
		}
		.demo-gallery > ul > li a .demo-gallery-poster > img {
			left: 50%;
			margin-left: -10px;
			margin-top: -10px;
			opacity: 0;
			position: absolute;
			top: 50%;
			-webkit-transition: opacity 0.3s ease 0s;
			-o-transition: opacity 0.3s ease 0s;
			transition: opacity 0.3s ease 0s;
		}
		.demo-gallery > ul > li a:hover .demo-gallery-poster {
			background-color: rgba(0, 0, 0, 0.5);
		}
		.demo-gallery .justified-gallery > a > img {
			-webkit-transition: -webkit-transform 0.15s ease 0s;
			-moz-transition: -moz-transform 0.15s ease 0s;
			-o-transition: -o-transform 0.15s ease 0s;
			transition: transform 0.15s ease 0s;
			-webkit-transform: scale3d(1, 1, 1);
			transform: scale3d(1, 1, 1);
			height: 100%;
			width: 100%;
		}
		.demo-gallery .justified-gallery > a:hover > img {
			-webkit-transform: scale3d(1.1, 1.1, 1.1);
			transform: scale3d(1.1, 1.1, 1.1);
		}
		.demo-gallery .justified-gallery > a:hover .demo-gallery-poster > img {
			opacity: 1;
		}
		.demo-gallery .justified-gallery > a .demo-gallery-poster {
			background-color: rgba(0, 0, 0, 0.1);
			bottom: 0;
			left: 0;
			position: absolute;
			right: 0;
			top: 0;
			-webkit-transition: background-color 0.15s ease 0s;
			-o-transition: background-color 0.15s ease 0s;
			transition: background-color 0.15s ease 0s;
		}
		.demo-gallery .justified-gallery > a .demo-gallery-poster > img {
			left: 50%;
			margin-left: -10px;
			margin-top: -10px;
			opacity: 0;
			position: absolute;
			top: 50%;
			-webkit-transition: opacity 0.3s ease 0s;
			-o-transition: opacity 0.3s ease 0s;
			transition: opacity 0.3s ease 0s;
		}
		.demo-gallery .justified-gallery > a:hover .demo-gallery-poster {
			background-color: rgba(0, 0, 0, 0.5);
		}
		.demo-gallery .video .demo-gallery-poster img {
			height: 48px;
			margin-left: -24px;
			margin-top: -24px;
			opacity: 0.8;
			width: 48px;
		}
		.demo-gallery.dark > ul > li a {
			border: 3px solid #04070a;
		}
		.home .demo-gallery {
			padding-bottom: 80px;
		}
		
		/*bda*/
#return-to-top {
    position: fixed;
    bottom: 20px;
    right: 20px;
    background: rgb(0, 0, 0);
    background: rgba(0, 0, 0, 0.7);
    width: 50px;
    height: 50px;
    display: block;
    text-decoration: none;
    -webkit-border-radius: 35px;
    -moz-border-radius: 35px;
    border-radius: 35px;
    display: none;
    -webkit-transition: all 0.3s linear;
    -moz-transition: all 0.3s ease;
    -ms-transition: all 0.3s ease;
    -o-transition: all 0.3s ease;
    transition: all 0.3s ease;
    z-index: 1;
}
#return-to-top i {
    color: #fff;
    margin: 0;
    position: relative;
    left: 0px;
    top: 13px;
    font-size: 19px;
    -webkit-transition: all 0.3s ease;
    -moz-transition: all 0.3s ease;
    -ms-transition: all 0.3s ease;
    -o-transition: all 0.3s ease;
    transition: all 0.3s ease;
}
#return-to-top:hover {
    background: rgba(0, 0, 0, 0.9);
}
#return-to-top:hover i {
    color: #fff;
    top: 5px;
}
/*sala*/

</style>
@endsection

@section('content')
{{-- go to top button --}}
<a href="javascript:" id="return-to-top">
    <i class="chevron up icon"></i>
</a>
{{-- go to top button --}}

<div class="row" id="present">
    <div class="twelve wide column">
 <h1 class="ui header">
 	<i class=" orange grid layout icon"></i>Phototéque</h1>
    </div>
</div>

<div class=" divided row">
	<div class="four wide column">
		<center id="sticker">
			<div class="ui mini vertical labeled icon menu">
				<a class="item" href="/photos#galery1">
					<i class="camera retro icon blue"></i>
					Evenement 1
				</a>
				<a class="item" href="/photos#galery2">
					<i class="camera retro icon blue"></i>
					Evenement 2
				</a>
				<a class="item" href="/photos#galery3">
					<i class="camera retro icon blue"></i>
						Evenement 3
				</a>
				<a class="item" href="/photos#galery4">
					<i class="camera retro icon blue"></i>
					Evenement 4
				</a>
			</div>
		</center>
		</div>
		<div class="ten wide column">

			<div class="demo-gallery">
				<h1 class="clearfix" id="galery1">Galerie 1</h1>
				<ul id="lightgallery_1" class="list-unstyled row">
					@for ($i = 1; $i < 80; $i++)
					<li class=""  data-src="{{asset('images/galery/event1/event_one_'.$i.'.JPG')}}" data-sub-html="<h4>Association Internationale Clé Pour la Paix</h4>">
						<a href="">
							<img class="img-responsive" src="{{asset('images/galery/event1/thumbnails/event_one_'.$i.'_tn.jpg')}}">
						</a>
					</li>
					@endfor
				</ul>
			</div>

			<div class="demo-gallery">
						<h1 class="clearfix" id="galery2">Galerie 2</h1>
				<ul id="lightgallery_2" class="list-unstyled row">
					@for ($i = 1; $i < 23; $i++)
					<li class=""  data-src="{{asset('images/galery/event2/event_two_'.$i.'.JPG')}}" data-sub-html="<h4>Association Internationale Clé Pour la Paix</h4>">
						<a href="">
							<img class="img-responsive" src="{{asset('images/galery/event2/thumbnails/event_two_'.$i.'_tn.jpg')}}">
						</a>
					</li>
					@endfor
				</ul>
			</div>

			<div class="demo-gallery">
				<h1 class="clearfix" id="galery3">Galerie 3</h1>
				<ul id="lightgallery_3" class="list-unstyled row">
					@for ($i = 1; $i < 45; $i++)
					<li class=""  data-src="{{asset('images/galery/event3/event_three_'.$i.'.JPG')}}" data-sub-html="<h4>Association Internationale Clé Pour la Paix</h4>">
						<a href="">
							<img class="img-responsive" src="{{asset('images/galery/event3/thumbnails/event_three_'.$i.'_tn.jpg')}}">
						</a>
					</li>
					@endfor
				</ul>
			</div>

			<div class="demo-gallery">
					<h1 class="clearfix" id="galery4">Galerie 4</h1>
				<ul id="lightgallery_4" class="list-unstyled row">
					@for ($i = 1; $i < 35; $i++)
					<li class=""  data-src="{{asset('images/galery/event4/event_four_'.$i.'.JPG')}}" data-sub-html="<h4>Association Internationale Clé Pour la Paix</h4>">
						<a href="">
							<img class="img-responsive" src="{{asset('images/galery/event4/thumbnails/event_four_'.$i.'_tn.jpg')}}">
						</a>
					</li>
					@endfor
				</ul>
			</div>
</div>
</div>
@endsection

@section('scripts')

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.sticky/1.0.4/jquery.sticky.min.js"></script>
<!-- lightgallery plugins -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-mousewheel/3.1.13/jquery.mousewheel.min.js"></script>
<script src="/lightgallery/dist/js/lightgallery-all.min.js"></script>
<script src="https://cdn.jsdelivr.net/picturefill/2.3.1/picturefill.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$('#lightgallery_1').lightGallery();
		$('#lightgallery_2').lightGallery();
		$('#lightgallery_3').lightGallery();
		$('#lightgallery_4').lightGallery();
		$("#sticker").sticky({topSpacing:10});
	});

	 // ===== Scroll to Top ==== 
	$(window).scroll(function() {
    if ($(this).scrollTop() >= 50) {        // If page is scrolled more than 50px
        $('#return-to-top').fadeIn(200);    // Fade in the arrow
    } else {
        $('#return-to-top').fadeOut(200);   // Else fade out the arrow
    }
});

$('#return-to-top').click(function() {      // When arrow is clicked
    $('body,html').animate({
        scrollTop : 0                       // Scroll to top of body
    }, 1000);
});
</script>
</script>
@endsection