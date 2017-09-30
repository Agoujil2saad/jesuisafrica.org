@extends('layouts/master_1')
@section('styles')
<style type="text/css">
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
        <a class="ui orange tiny button" href="/events/create">Créer Evenement</a>
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
                {!! Form::open(['method' => 'DELETE', 'route' => ['events.destroy', $event->id] ]) !!}
                {!! Form::submit('Supprimer', ['class' => 'ui red button']) !!}
                {!! Form::close() !!}
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
        <a class="ui orange tiny button" href="/news/create">Créer Actualité</a>
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
                {!! Form::open(['method' => 'DELETE', 'route' => ['news.destroy', $new->id] ]) !!}
                {!! Form::submit('Supprimer', ['class' => 'ui red button']) !!}
                {!! Form::close() !!}
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
    </center>
</div>
@endsection
@section('videos')
<div class="rvs-container rvs-horizontal rvs-light rvs-green-highlight rvs-large-thumbs" style="max-width: 100%">
    <div class="rvs-item-container" >
        <div class="rvs-item-stage">
            <!-- The below is a single item, simply duplicate this layout for each item -->
            <div class="rvs-item" style="background-image: url(https://img.youtube.com/vi/tVHHexpCoCQ/maxresdefault.jpg)">
                <p class="rvs-item-text" style="color: white;">
                    المغرب: دور المجتمع المدني في الوحدة الإفريقية
                </p>
                <a href="https://www.youtube.com/watch?v=tVHHexpCoCQ" class="rvs-play-video"></a>
            </div>
            <!-- new item -->
            <div class="rvs-item" style="background-image: url(https://img.youtube.com/vi/YradtwO7I6Y/maxresdefault.jpg)">
                <p class="rvs-item-text" style="color: white;">
                    Caravane de la paix du dialogue interculturel et de l'integration
                </p>
                <a href="https://www.youtube.com/watch?v=YradtwO7I6Y" class="rvs-play-video"></a>
            </div>
            <!-- new item -->
            <div class="rvs-item" style="background-image: url(https://img.youtube.com/vi/QGf5d4WYXKI/maxresdefault.jpg)">
                <p class="rvs-item-text" style="color: black;">
                    بمناسبة ذكرى ثورة الملك والشعب “مفتاح السلام” تنظم قافلة تضامنية بآيت حساين اوحدو
                </p>
                <a href="https://www.youtube.com/watch?v=QGf5d4WYXKI" class="rvs-play-video"></a>
            </div>
            <!-- new item -->
            <div class="rvs-item" style="background-image: url(http://img.youtube.com/vi/bL0JtL0hs8A/hqdefault.jpg)">
                <p class="rvs-item-text" style="color: white;">
                    مفتاح السلام تتضامن مع ساكنة أيت حساين احدو بإقليم بولمان
                </p>
                <a href="https://www.youtube.com/watch?v=bL0JtL0hs8A" class="rvs-play-video"></a>
            </div>
            <!-- new item -->
            <div class="rvs-item" style="background-image: url(http://img.youtube.com/vi/2zhuDY6xRVc/hqdefault.jpg)">
                <p class="rvs-item-text" style="color: black;">
                    جمعية مفتاح السلام تتضامن مع ساكنة أيت حساين احدو بإقليم بولمان
                </p>
                <a href="https://www.youtube.com/watch?v=2zhuDY6xRVc" class="rvs-play-video"></a>
            </div>
            <!-- new item -->
            <div class="rvs-item" style="background-image: url(http://img.youtube.com/vi/tTTH0DeDhAE/hqdefault.jpg)">
                <p class="rvs-item-text" style="color: black;">
                    إحداث أكاديمية إفريقية لكرة القدم بالمغرب
                </p>
                <a href="https://www.youtube.com/watch?v=tTTH0DeDhAE" class="rvs-play-video"></a>
            </div>
            <!-- new item -->
            <div class="rvs-item" style="background-image: url(http://img.youtube.com/vi/9eNOzZf_5fk/hqdefault.jpg)">
                <p class="rvs-item-text" style="color: black;">
                    نجوم عالميون في افتتاح أكاديمية لكرة القدم بمكناس
                </p>
                <a href="https://www.youtube.com/watch?v=9eNOzZf_5fk" class="rvs-play-video"></a>
            </div>
            <!-- new item -->
            <div class="rvs-item" style="background-image: url(http://img.youtube.com/vi/rzigGBKCHdc/hqdefault.jpg)">
                <p class="rvs-item-text" style="color: black;">
                    تعرف على تفاصيل إطلاق الأكاديمية "بانا إفريقية" لكرة القدم
                </p>
                <a href="https://www.youtube.com/watch?v=rzigGBKCHdc" class="rvs-play-video"></a>
            </div>
            <!-- new item -->
            <div class="rvs-item" style="background-image: url(http://img.youtube.com/vi/wEhDevHOtsI/hqdefault.jpg)">
                <p class="rvs-item-text" style="color: black;">
                    هذا ما قاله "روجي ميلا" عن قدرة المغرب على تنظيم "كأس العالم"
                </p>
                <a href="https://www.youtube.com/watch?v=wEhDevHOtsI" class="rvs-play-video"></a>
            </div>
            <!-- new item -->
            <div class="rvs-item" style="background-image: url(http://img.youtube.com/vi/s7vEjRV7hoE/hqdefault.jpg)">
                <p class="rvs-item-text" style="color: white;">
                    روجي ميلا لـ"الأيام24": بكيت بعد وفاة الظلمي
                </p>
                <a href="https://www.youtube.com/watch?v=s7vEjRV7hoE" class="rvs-play-video"></a>
            </div>
            <!-- new item -->
            <div class="rvs-item" style="background-image: url(http://img.youtube.com/vi/IPwXHhO4vlY/hqdefault.jpg)">
                <p class="rvs-item-text" style="color: black;">
                    académie africaine sportive
                </p>
                <a href="https://www.youtube.com/watch?v=IPwXHhO4vlY" class="rvs-play-video"></a>
            </div>
            <!-- new item -->
            <div class="rvs-item" style="background-image: url(http://img.youtube.com/vi/PDbWoQqdxZ4/hqdefault.jpg)">
                <p class="rvs-item-text" style="color: black;">
                    قناة الامازيغية واكبت اليوم الدراسي لمفتاح السلام الدولية لاعداد قافلة السلم والسلام نحو أديس أبابا
                </p>
                <a href="https://www.youtube.com/watch?v=PDbWoQqdxZ4" class="rvs-play-video"></a>
            </div>
            <!-- new item -->
            <div class="rvs-item" style="background-image: url(http://img.youtube.com/vi/DdrsQML1408/hqdefault.jpg)">
                <p class="rvs-item-text" style="color: black;">
                    انطلاق قافلة تضامنية من مكناس إلى أديس أبابا مرورا ب 15 دولة افريقية
                </p>
                <a href="https://www.youtube.com/watch?v=DdrsQML1408" class="rvs-play-video"></a>
            </div>
            <!-- new item -->
            <div class="rvs-item" style="background-image: url(http://img.youtube.com/vi/pq8gmUloOyY/hqdefault.jpg)">
                <p class="rvs-item-text" style="color: black;">
                    جمعية مفتاح السلام الدولية للتنمية والتضامن تنظم قافلة افريقيا
                </p>
                <a href="https://www.youtube.com/watch?v=pq8gmUloOyY" class="rvs-play-video"></a>
            </div>
            <!-- new item -->
            <div class="rvs-item" style="background-image: url(http://img.youtube.com/vi/68HizFLqV5s/hqdefault.jpg)">
                <p class="rvs-item-text" style="color: black;">
                    جمعية مفتاح السلام الدولية بتنسيق مع جمعية انوار وحمعية أصيكما نظمت افطارا جماعيا للافارقة
                </p>
                <a href="https://www.youtube.com/watch?v=68HizFLqV5s" class="rvs-play-video"></a>
            </div>
            <!-- new item -->
            <div class="rvs-item" style="background-image: url(http://img.youtube.com/vi/RnN_3bsatMs/hqdefault.jpg)">
                <p class="rvs-item-text" style="color: black;">
                    المغرب يربط جسور التواصل مع إفريقيا
                </p>
                <a href="https://www.youtube.com/watch?v=RnN_3bsatMs" class="rvs-play-video"></a>
            </div>
            <!-- new item -->
            <div class="rvs-item" style="background-image: url(http://img.youtube.com/vi/aHyMbCezcBY/hqdefault.jpg)">
                <p class="rvs-item-text" style="color: black;">
                    الجمع العام التأسيسي للمجلس الاستشاري للشباب الإفريقي
                </p>
                <a href="https://www.youtube.com/watch?v=aHyMbCezcBY" class="rvs-play-video"></a>
            </div>
            <!-- new item -->
            <div class="rvs-item" style="background-image: url(http://img.youtube.com/vi/2rCXt5IcDTA/hqdefault.jpg)">
                <p class="rvs-item-text" style="color: black;">
                    جمعية مفتاح السلام والملتقى الأول للحوار والإستثمارالإفريقي بالرباط
                </p>
                <a href="https://www.youtube.com/watch?v=2rCXt5IcDTA" class="rvs-play-video"></a>
            </div>
            <!-- new item -->
            <div class="rvs-item" style="background-image: url(http://img.youtube.com/vi/w4ldjJ6ZYig/hqdefault.jpg)">
                <p class="rvs-item-text" style="color: black;">
                    الجمع العام التأسيسي للمجلس الاستشاري للشباب الإفريقي
                </p>
                <a href="https://www.youtube.com/watch?v=w4ldjJ6ZYig" class="rvs-play-video"></a>
            </div>
            <!-- new item -->
            <div class="rvs-item" style="background-image: url(http://img.youtube.com/vi/-J0C_zkd0c8/hqdefault.jpg)">
                <p class="rvs-item-text" style="color: black;">
                    فيديو يعرض تأسيس مجلس استشاري للأفارقة بالرباط
                </p>
                <a href="https://www.youtube.com/watch?v=-J0C_zkd0c8" class="rvs-play-video"></a>
            </div>
        </div>
    </div>
    <div class="rvs-nav-container">
        <a class="rvs-nav-prev"></a>
        <div class="rvs-nav-stage">
            <!-- The below is the corresponding nav item for the single item, simply duplicate this layout for each item -->
            <a class="rvs-nav-item">
                <span class="rvs-nav-item-thumb" style="background-image: url(https://img.youtube.com/vi/tVHHexpCoCQ/maxresdefault.jpg) "></span>
                <h4 class="rvs-nav-item-title">
                المغرب: دور المجتمع المدني في الوحدة الإفريقية
                </h4>
                <small class="rvs-nav-item-credits">
                </small>
            </a>
            <!-- new item -->
            <a class="rvs-nav-item">
                <span class="rvs-nav-item-thumb" style="background-image: url(https://img.youtube.com/vi/YradtwO7I6Y/maxresdefault.jpg) "></span>
                <h4 class="rvs-nav-item-title">
                Caravane de la paix du dialogue interculturel et de l'integration
                </h4>
                <small class="rvs-nav-item-credits">
                </small>
            </a>
            <!-- new item -->
            <a class="rvs-nav-item">
                <span class="rvs-nav-item-thumb" style="background-image: url(https://img.youtube.com/vi/QGf5d4WYXKI/maxresdefault.jpg) "></span>
                <h4 class="rvs-nav-item-title">
                بمناسبة ذكرى ثورة الملك والشعب “مفتاح السلام” تنظم قافلة تضامنية بآيت حساين اوحدو
                </h4>
                <small class="rvs-nav-item-credits">
                </small>
            </a>
            <!-- new item -->
            <a class="rvs-nav-item">
                <span class="rvs-nav-item-thumb" style="background-image: url(https://img.youtube.com/vi/bL0JtL0hs8A/2.jpg)"></span>
                <h4 class="rvs-nav-item-title">
                مفتاح السلام تتضامن مع ساكنة أيت حساين احدو بإقليم بولمان
                </h4>
                <small class="rvs-nav-item-credits">
                </small>
            </a>
            <!-- new item -->
            <a class="rvs-nav-item">
                <span class="rvs-nav-item-thumb" style="background-image: url(https://img.youtube.com/vi/2zhuDY6xRVc/2.jpg)"></span>
                <h4 class="rvs-nav-item-title">
                جمعية مفتاح السلام تتضامن مع ساكنة أيت حساين احدو بإقليم بولمان
                </h4>
                <small class="rvs-nav-item-credits">
                </small>
            </a>
            <!-- new item -->
            <a class="rvs-nav-item">
                <span class="rvs-nav-item-thumb" style="background-image: url(https://img.youtube.com/vi/tTTH0DeDhAE/2.jpg)"></span>
                <h4 class="rvs-nav-item-title">
                جمعية مفتاح السلام تتضامن مع ساكنة أيت حساين احدو بإقليم بولمان
                </h4>
                <small class="rvs-nav-item-credits">
                </small>
            </a>
            <!-- new item -->
            <a class="rvs-nav-item">
                <span class="rvs-nav-item-thumb" style="background-image: url(https://img.youtube.com/vi/9eNOzZf_5fk/2.jpg)"></span>
                <h4 class="rvs-nav-item-title">
                نجوم عالميون في افتتاح أكاديمية لكرة القدم بمكناس
                </h4>
                <small class="rvs-nav-item-credits">
                </small>
            </a>
            <!-- new item -->
            <a class="rvs-nav-item">
                <span class="rvs-nav-item-thumb" style="background-image: url(https://img.youtube.com/vi/rzigGBKCHdc/2.jpg)"></span>
                <h4 class="rvs-nav-item-title">
                تعرف على تفاصيل إطلاق الأكاديمية "بانا إفريقية" لكرة القدم
                </h4>
                <small class="rvs-nav-item-credits">
                </small>
            </a>
            <!-- new item -->
            <a class="rvs-nav-item">
                <span class="rvs-nav-item-thumb" style="background-image: url(https://img.youtube.com/vi/wEhDevHOtsI/2.jpg)"></span>
                <h4 class="rvs-nav-item-title">
                هذا ما قاله "روجي ميلا" عن قدرة المغرب على تنظيم "كأس العالم"
                </h4>
                <small class="rvs-nav-item-credits">
                </small>
            </a>
            <!-- new item -->
            <a class="rvs-nav-item">
                <span class="rvs-nav-item-thumb" style="background-image: url(https://img.youtube.com/vi/s7vEjRV7hoE/2.jpg)"></span>
                <h4 class="rvs-nav-item-title">
                روجي ميلا لـ"الأيام24": بكيت بعد وفاة الظلمي
                </h4>
                <small class="rvs-nav-item-credits">
                </small>
            </a>
            <!-- new item -->
            <a class="rvs-nav-item">
                <span class="rvs-nav-item-thumb" style="background-image: url(https://img.youtube.com/vi/IPwXHhO4vlY/2.jpg)"></span>
                <h4 class="rvs-nav-item-title">
                académie africaine sportive
                </h4>
                <small class="rvs-nav-item-credits">
                </small>
            </a>
            <!-- new item -->
            <a class="rvs-nav-item">
                <span class="rvs-nav-item-thumb" style="background-image: url(https://img.youtube.com/vi/PDbWoQqdxZ4/2.jpg)"></span>
                <h4 class="rvs-nav-item-title">
                قناة الامازيغية واكبت اليوم الدراسي لمفتاح السلام الدولية لاعداد قافلة السلم والسلام نحو أديس أبابا
                </h4>
                <small class="rvs-nav-item-credits">
                </small>
            </a>
            <!-- new item -->
            <a class="rvs-nav-item">
                <span class="rvs-nav-item-thumb" style="background-image: url(https://img.youtube.com/vi/DdrsQML1408/2.jpg)"></span>
                <h4 class="rvs-nav-item-title">
                انطلاق قافلة تضامنية من مكناس إلى أديس أبابا مرورا ب 15 دولة افريقية
                </h4>
                <small class="rvs-nav-item-credits">
                </small>
            </a>
            <!-- new item -->
            <a class="rvs-nav-item">
                <span class="rvs-nav-item-thumb" style="background-image: url(https://img.youtube.com/vi/pq8gmUloOyY/2.jpg)"></span>
                <h4 class="rvs-nav-item-title">
                جمعية مفتاح السلام الدولية للتنمية والتضامن تنظم قافلة افريقيا
                </h4>
                <small class="rvs-nav-item-credits">
                </small>
            </a>
            <!-- new item -->
            <a class="rvs-nav-item">
                <span class="rvs-nav-item-thumb" style="background-image: url(https://img.youtube.com/vi/68HizFLqV5s/2.jpg)"></span>
                <h4 class="rvs-nav-item-title">
                جمعية مفتاح السلام الدولية بتنسيق مع جمعية انوار وحمعية أصيكما نظمت افطارا جماعيا للافارقة
                </h4>
                <small class="rvs-nav-item-credits">
                </small>
            </a>
            <!-- new item -->
            <a class="rvs-nav-item">
                <span class="rvs-nav-item-thumb" style="background-image: url(https://img.youtube.com/vi/RnN_3bsatMs/2.jpg)"></span>
                <h4 class="rvs-nav-item-title">
                المغرب يربط جسور التواصل مع إفريقيا
                </h4>
                <small class="rvs-nav-item-credits">
                </small>
            </a>
            <!-- new item -->
            <a class="rvs-nav-item">
                <span class="rvs-nav-item-thumb" style="background-image: url(https://img.youtube.com/vi/aHyMbCezcBY/2.jpg)"></span>
                <h4 class="rvs-nav-item-title">
                الجمع العام التأسيسي للمجلس الاستشاري للشباب الإفريقي
                </h4>
                <small class="rvs-nav-item-credits">
                </small>
            </a>
            <!-- new item -->
            <a class="rvs-nav-item">
                <span class="rvs-nav-item-thumb" style="background-image: url(https://img.youtube.com/vi/2rCXt5IcDTA/2.jpg)"></span>
                <h4 class="rvs-nav-item-title">
                جمعية مفتاح السلام والملتقى الأول للحوار والإستثمارالإفريقي بالرباط
                </h4>
                <small class="rvs-nav-item-credits">
                </small>
            </a>
            <!-- new item -->
            <a class="rvs-nav-item">
                <span class="rvs-nav-item-thumb" style="background-image: url(https://img.youtube.com/vi/w4ldjJ6ZYig/2.jpg)"></span>
                <h4 class="rvs-nav-item-title">
                الجمع العام التأسيسي للمجلس الاستشاري للشباب الإفريقي
                </h4>
                <small class="rvs-nav-item-credits">
                </small>
            </a>
            <!-- new item -->
            <a class="rvs-nav-item">
                <span class="rvs-nav-item-thumb" style="background-image: url(https://img.youtube.com/vi/-J0C_zkd0c8/2.jpg)"></span>
                <h4 class="rvs-nav-item-title">
                فيديو يعرض تأسيس مجلس استشاري للأفارقة بالرباط
                </h4>
                <small class="rvs-nav-item-credits">
                </small>
            </a>
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