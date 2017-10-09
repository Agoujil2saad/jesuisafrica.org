@extends('layouts/master_1')
@section('styles')
<style type="text/css">
/*bda*/
#return-to-top 
{
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
ul li{
    color: black;
}
</style>
<link rel="stylesheet" type="text/css" href="{{ asset('css/rvslider.min.css') }}">
<link href="{{asset('pop-slide/css/sequence-theme.pop-slide.css')}}" rel="stylesheet" media="all">
@endsection
@section('content')
{{-- go to top button --}}
<a href="javascript:" id="return-to-top">
    <i class="chevron up icon"></i>
</a>
{{-- go to top button --}}
<div class="row" style="padding-top:0">
    <div id="sequence" class="seq">
        <div class="seq-screen">
            <ul class="seq-canvas">
                <li class="seq-step0 seq-in">
                    <div data-seq class="seq-title">
                        <center>
                            <h2>@lang('lang.message_roi')</h2>
                        </center>
                    </div>
                </li>
                <li class="seq-step1 seq-in">
                    <div data-seq class="seq-title">
                        <center>
                            <h2>@lang('lang.slide2')</h2>
                        </center>
                    </div>
                </li>
                <li class="seq-step2">
                    <div data-seq class="seq-title">
                        <h2>
                            @lang('lang.mission_p')
                        </h2>
                    </div>
                </li>
                <li class="seq-step3">
                    <div class="video-container">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/YradtwO7I6Y" frameborder="0" allowfullscreen></iframe>
                    </div>
                    <div data-seq class="seq-title">
                    </div>
                </li>
                <li class="seq-step4">
                    <div data-seq class="seq-title">
                        <h2>@lang('lang.slide5')</h2>
                    </div>
                </li>
            </ul>
        </div>
        <ul role="navigation" aria-label="Pagination" class="seq-pagination">
            <li><a href="#step0" rel="step0" title="Message du roi Mohammed 6">@lang('lang.slide1_titre')</a></li>
            <li><a href="#step1" rel="step1" title="Forum du Dialogue et de l’Investissement">@lang('lang.slide2_titre')</a></li>
            <li><a href="#step2" rel="step2" title="Rencontre avec l'ambassadeur du sénégal">@lang('lang.slide3_titre')</a></li>
            <li><a href="#step3" rel="step3" title="La Caravane">@lang('lang.slide4_titre')</a></li>
            <li><a href="#step4" rel="step4" title="Afrique Unie">@lang('lang.slide5_titre')</a></li>
        </ul>
    </div>
</div>
{{-- logos --}}
<div class="row">
    <div class="seven wide middle aligned column">
        <img src="{{asset('/images/logo.png')}}">
    </div>
    <div class="seven wide middle aligned column">
        <img src="{{asset('/images/logo_forum.png')}}">
    </div>
</div>
{{-- end logos --}}
<hr style="width: 80%; border:1px solid rgb(96,178,231);">
{{-- divisding --}}
<div class="row" id="present">
    <div class="twelve wide column">
        @lang('lang.presentation')
    </div>
</div>
<hr style="width: 80%; border:1px solid rgb(96,178,231);">
<div class="row">
    <CENTER>
        <div class="ui blue large dividing header">
            <i class="calendar blue icon"></i>
            @lang('lang.header_events')
        </div>
        @if(Auth::check())
        <a class="ui blue very padded button" href="/events/create"><i class="plus icon"></i>Créer Evenement</a>
        @endif
    </CENTER>
</div>
<div class="row">
    <div class="ui doubling container four cards">
        @foreach($events as $event)
        <div class="card">
            <div class=" ui fluid image">
                <div class="ui blue ribbon label">
                    <i class="time icon"></i> {{ $event->date }}
                </div>
                <img src="{{asset('images/events/'.$event->photo)}}">
            </div>
            <div class="content">
                {{ $event->description }}
            </div>
            <div class="extra content">
                <a  target="_blank" href="{{ $event->lien }}">@lang('lang.learn_more')</a>
                @if(!Auth::guest())
                <div class="ui  buttons">

                   {!! Form::open(['method' => 'DELETE', 'route' => ['events.destroy', $event->id] ]) !!}
                   {!! Form::submit('Supprimer', ['class' => ' ui red button']) !!}
                   {!! Form::close() !!}
                   <div class="or"></div>

                   <a class=" ui blue button" href="{{url('/events/'.$event->id.'/edit')}}">Edit</a>   
               </div>   



               @endif
           </div>
       </div>
       @endforeach
   </div>
</div>
<div class="row">
    <CENTER>
        <div class="ui blue large dividing header">
            <i class="newspaper blue icon"></i>
            @lang('lang.our_news')
        </div>
        @if(Auth::check())
        <a class="ui blue very padded button" href="/news/create"><i class=" plus icon"></i>Créer Actualité</a>
        @endif
    </CENTER>
</div>
<div class="row">
    <div class="ui container doubling four cards">
        @foreach($news as $new)
        <div class="card">
            <div class="ui fluid image">
                <div class="ui teal left ribbon label">
                    <i class="time icon"></i>{{ $new->date }}
                </div>
                <img src="{{asset('images/news/'.$new->photo)}}">
            </div>
            <div class="content">
                {{ $new->description }}
            </div>
            <div class="extra content">
               <a  target="_blank" href="{{ $new->lien }}">@lang('lang.learn_more')</a>
               @if(!Auth::guest())
               <div class="ui buttons">      
                {!! Form::open(['method' => 'DELETE', 'route' => ['news.destroy', $new->id] ]) !!}
                {!! Form::submit('Supprimer', ['class' => 'ui red button left floated']) !!}
                {!! Form::close() !!}
                <div class="or"></div>
                <a class="ui blue button right floated" href="{{url('/news/'.$new->id.'/edit')}}">Edit</a>
            </div>
            @endif
        </div>
    </div>
    @endforeach
</div>
</div>
<div class="row">
    <center>
        <div class="ui blue large dividing header" id="partenaires">
            <i class="money blue icon"></i>
            @lang('lang.spons')
        </div>
    </center>
</div>
<div class="row">
    <div class="nine wide column">
        <div class="ui inverted blue segment">
            <h1 style="padding:2em 0;text-align:center;">
                <i class='inverted large handshake icon'></i>
                <br>
                Devenir Partenaire
            </h1>
        </div>
    </div>
</div>
<div class="row">
    <center>
        <div class="ui blue large dividing header" id="videos">
            <i class="film icon"></i>
            @lang('lang.video_l')
        </div>
        @if(Auth::check())
        <div class="ui buttons">
           <a class="ui blue tiny button" style="margin-bottom:2em;" href="/videos/create">Ajouter une Vidéo</a>
           <div class="or"></div>
           <a class="ui green tiny button" style="margin-bottom:2em;" href="/videos">Modifier une Vidéo</a>
       </div>

       @endif
   </center>
</div>
@endsection
@section('videos')
<div class="rvs-container rvs-horizontal rvs-light rvs-green-highlight rvs-large-thumbs" style="max-width: 100%">
    <div class="rvs-item-container" >
        <div class="rvs-item-stage">
            <!-- Items -->
            @foreach($videos as $video)
            <div class="rvs-item" style="background-image: url(https://img.youtube.com/vi/{{$video->value}}/hqdefault.jpg)">
                <p class="rvs-item-text" style="color: white;">
                    {{ $video->titre }}
                </p>
                <a href="https://www.youtube.com/watch?v={{$video->value}}" class="rvs-play-video"></a>
            </div>
            @endforeach
        </div>
    </div>
    <div class="rvs-nav-container">
        <a class="rvs-nav-prev"></a>
        <div class="rvs-nav-stage">
            <!-- items -->
            @foreach($videos as $video)
            <a class="rvs-nav-item">
                <span class="rvs-nav-item-thumb" style="background-image: url(https://img.youtube.com/vi/{{$video->value}}/hqdefault.jpg)"></span>
                <h4 class="rvs-nav-item-title">
                    {{ $video->titre }}
                </h4>
                <small class="rvs-nav-item-credits">
                </small>
            </a>
            @endforeach
        </div>
        <a class="rvs-nav-next"></a>
    </div>
</div>
<div class="ui centered grid">
    <div class="row">
        <center>
            <div class="ui blue large dividing header">
                <i class="twitter blue icon"></i>
                @lang('lang.twitter')
            </div>
        </center>
    </div>
    <div class="row" >
        <div class="eleven wide column">
            <center>
                <a class="twitter-timeline" data-width="800" data-height="500" data-theme="light" data-link-color="#19CF86" href="https://twitter.com/asclepaix">Tweets Par association cle de la paix</a>
            </center>
        </div>
    </div>
</div>
@endsection
@section('scripts')
<script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
<script src="{{asset('pop-slide/scripts/imagesloaded.pkgd.min.js')}}"></script>
<script src="{{asset('pop-slide/scripts/hammer.min.js')}}"></script>
<script src="{{asset('pop-slide/scripts/sequence.min.js')}}"></script>
<script src="{{asset('pop-slide/scripts/sequence-theme.pop-slide.js')}}"></script>
<script src="{{asset('js/rvslider.min.js')}}"></script>
<script>
    jQuery(function($)
    {
        $('.rvs-container').rvslider();
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
@endsection