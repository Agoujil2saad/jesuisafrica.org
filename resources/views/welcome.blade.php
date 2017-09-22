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
            <h2>@lang('lang.mission_p')</h2>
        </center>
    </div>
</li>

<li class="seq-step2">
  <div data-seq class="seq-title">
    <h2>Défendre les libertés individuelles, les grandes causes nationales et l’intégrité territoriale des nations.</h2>
</div>

</li>

<li class="seq-step3">
  <div data-seq class="seq-title">
    <h2>Mettre en valeur et gérer les talents des jeunes dans le but de réaliser une renaissance culturelle, artistique et sociale intégrée, à travers divers ateliers dans les domaines de l’environnement, du théâtre, de la musique et du sport.</h2>
</div>

</li>

<li class="seq-step4">
    <div data-seq class="seq-title">
        <h2>صور من القافلة التضامنية لجمعية مفتاح السلام الدولية والتي استقبلتها جمعية أسوريف بدوار آيت حساين اوحدو يوم الاحد 27 غشت 2017، بحضور ممثلين عن دول إفريقية وضيوف مغاربة لتأثيث أرضية بناء مركب سوسيورياضي للقرب بالدوار.</h2>
    </div>


</li>

<li class="seq-step5">
  <div data-seq class="seq-title">
    <h2>Le projet de l'Académie sportive panafricaine a été lancé officiellement à Meknès, en présence de nombreux intellectuels, opérateurs économiques et personnalités sportives marocaines et étrangères.</h2>
</div>

</li>
</ul>
</div>

<ul role="navigation" aria-label="Pagination" class="seq-pagination">
  <li><a href="#step0" rel="step0" title="Message du roi Mohammed 6">Message du roi Mohammed 6</a></li>
  <li><a href="#step1" rel="step1" title="Rencontre avec l'ambassadeur du sénégal">Rencontre avec l'ambassadeur du sénégal</a></li>
  <li><a href="#step2" rel="step2" title="Forum du Dialogue et de l’Investissement">Forum du Dialogue et de l’Investissement</a></li>
  <li><a href="#step3" rel="step3" title="Les jeunes talents">Les jeunes talents</a></li>
  <li><a href="#step4" rel="step4" title="Caravane de solidarité">Caravane de solidarité</a></li>
  <li><a href="#step5" rel="step5" title="Afrique Unie">Afrique Unie</a></li>
</ul>
</div>  
</div>


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
    </CENTER>
</div>
<div class="row">
    <div class="ui doubling container four cards">
        <div class="card">

            <div class=" ui fluid image">
                <div class="ui blue ribbon label">
                    <i class="time icon"></i> 13/09/2017
                </div>
                <img src="{{asset('images/events/event1.jpg')}}"> 
            </div>
            <div class="content">
                تنظم جمعية مفتاح السلام الدولية للتنمية والتضامن بشراكة مع المجلس الاستشاري للشباب الإفريقي و إدارة ملتقى الحوار والاستثمار الإفريقي،قافلة ثقافية ستجوب عدة دول افريقية تحمل اسم “السلم والسلام” و التي ستنظم بمناسبة احتفالات الشعب المغربي بعيد المسيرة الخضراء المظفرة
            </div>
            <div class="extra content">
                <a  target="_blank" href="http://www.hibapress.com/details-122278.html">@lang('lang.learn_more')</a>
            </div>
        </div> 

        {{-- 2 --}}
        <div class="card">

            <div class=" ui fluid image">
                <div class="ui blue ribbon label">
                    <i class="time icon"></i> 04/09/2017
                </div>
                <img src="{{asset('images/events/event2.jpg')}}"> 
            </div>
            <div class="content">
                حتفل اعضاء المجلس الاستشاري للشاب الافريقي التابع  لجمعية مفتاح السلام الدولية للتنمية والتضامن بالامس في مقر الجمعية بالرباط ،بعيد الاضحى في أجواء من الفرح والتعايش بين الديانات الثلاثة ،
            </div>
            <div class="extra content">
                <a  target="_blank" href="http://www.hibapress.com/details-122278.html">@lang('lang.learn_more')</a>
            </div>
        </div> 
        {{-- 3 --}}
        <div class="card">

            <div class=" ui fluid image">
                <div class="ui blue ribbon label">
                    <i class="time icon"></i> 29/08/2017
                </div>
                <img src="{{asset('images/events/event3.jpg')}}"> 
            </div>
            <div class="content">
                “مفتاح السلام” تنظم قافلة تضامنية بآيت حساين اوحدو بمناسبة ذكرى ثورة الملك والشعب
            </div>
            <div class="extra content">
                <a  target="_blank" href="http://alakhbar24.net/3798-2/">@lang('lang.learn_more')</a>
            </div>
        </div> 
        {{-- 4 --}}
        <div class="card">

            <div class=" ui fluid image">
                <div class="ui blue ribbon label">
                    <i class="time icon"></i> 24/08/2017
                </div>
                <img src="{{asset('images/events/event4.jpg')}}"> 
            </div>
            <div class="content">
             شركة ألمانية كبرى تدعم مشروع الأكاديمية الإفريقية لكرة القدم في مكناس
         </div>
         <div class="extra content">
            <a  target="_blank" href="http://www.marocbuzz.com/ar/2017/08/24/%D8%B4%D8%B1%D9%83%D8%A9-%D8%A3%D9%84%D9%85%D8%A7%D9%86%D9%8A%D8%A9-%D9%83%D8%A8%D8%B1%D9%89-%D8%AA%D8%AF%D8%B9%D9%85-%D9%85%D8%B4%D8%B1%D9%88%D8%B9-%D8%A7%D9%84%D8%A3%D9%83%D8%A7%D8%AF%D9%8A%D9%85/">@lang('lang.learn_more')</a>
        </div>
    </div> 

</div>
</div>

<div class="row">
    <CENTER> 

        <div class="ui blue large dividing header"> 
            <i class="newspaper blue icon"></i>
            @lang('lang.our_news')
        </div>
    </CENTER>
</div>

<div class="row">
    <div class="ui container doubling  four cards">
        <div class="card">

            <div class=" ui fluid image">
                <div class="ui teal left ribbon label">
                    <i class="time icon"></i>14/09/2017
                </div>
                <img src="{{asset('images/news/news1.jpg')}}"> 
            </div>
            <div class="content">
                تنظم  جمعية مفتاح السلام الدولية للتنمية والتضامن بشراكة مع المجلس الاستشاري للشباب الإفريقي و إدارة ملتقى الحوار والاستثمار الإفريقي،لقافلة ثقافة “السلم والسلام”، تفاعلا مع عودة المملكة المغربية إلى صف منظمة الاتحاد الإفريقي.
            </div>
            <div class="extra content">
                <a  target="_blank" href="http://almaghribia24.com/%D9%82%D8%A7%D9%81%D9%84%D8%A9-%D8%A7%D9%84%D8%B3%D9%84%D9%85-%D9%88%D8%A7%D9%84%D8%B3%D9%84%D8%A7%D9%85-%D8%AA%D9%86%D8%B7%D9%84%D9%82-%D9%85%D9%86-%D9%85%D9%83%D9%86%D8%A7%D8%B3/">@lang('lang.learn_more')</a>
            </div>
        </div> 

        {{-- 2 --}}
        <div class="card">

            <div class=" ui fluid image">
                <div class="ui teal left ribbon label">
                    <i class="time icon"></i>14/09/2017
                </div>
                <img src="{{asset('images/news/news2.jpg')}}"> 
            </div>
            <div class="content">
                تنظم جمعية مفتاح السلام الدولية للتنمية والتضامن بشراكة مع المجلس الاستشاري للشباب الإفريقي وإدارة ملتقى الحوار والاستثمار الإفريقي، قافلة ثقافية ستجوب عدة دول إفريقية تحمل اسم “السلم والسلام” والتي ستنظم بمناسبة احتفالات الشعب المغربي بعيد المسيرة الخضراء المظفرة.
            </div>
            <div class="extra content">
                <a  target="_blank" href="https://al3omk.com/225723.html">@lang('lang.learn_more')</a>
            </div>
        </div> 
        {{-- 3 --}}
        <div class="card">

            <div class=" ui fluid image">
                <div class="ui teal left ribbon label">
                    <i class="time icon"></i>31/08/2017
                </div>
                <img src="{{asset('images/news/news3.jpg')}}"> 
            </div>
            <div class="content">
                حل يوم 29 غشت 2017  وفدا  عن مكتب الدراسات الفرنسي المعتمد من الفيفا،بمطار محمد الخامس بالدار البيضاء  ،لتدارس مشروع بناء الاكاديمية الدولية “بانا افريقيا” لكرة القدم ،وكان في استقبالهم السيد خالد بودالي رئيس جمعية مفتاح السلام الدولية للتنمية والتضامن ،وإدارة ملتقى الحوار والاستثمار الافريقي ،وبعد التوجه الى مقر الجمعية بالرباط ،أعطيت مجموعة من الشروحات من طرف المكلفين بالمجلس الاستشاري للشباب الافريقي،حول اهداف الاكاديمية ،والمغزى من إنشائها فوق أرض مغربية
            </div>
            <div class="extra content">
                <a  target="_blank" href="http://qalamnas.com/%D9%85%D9%83%D8%AA%D8%A8-%D8%A7%D9%84%D8%AF%D8%B1%D8%A7%D8%B3%D8%A7%D8%AA-%D8%A7%D9%84%D9%81%D8%B1%D9%86%D8%B3%D9%8A-%D9%8A%D8%AD%D9%84-%D8%A8%D9%85%D9%88%D9%82%D8%B9-%D8%A7%D9%84%D8%A7%D9%83%D8%A7/">@lang('lang.learn_more')</a>
            </div>
        </div> 
        {{-- 4 --}}
        <div class="card">

            <div class=" ui fluid image">
                <div class="ui teal left ribbon label">
                    <i class="time icon"></i> 30/08/2017
                </div>
                <img src="{{asset('images/news/news4.jpg')}}"> 
            </div>
            <div class="content">
                رئيس ‘سيدياو’ الاقتصادية يعلن من الرباط أحقية المغرب لعضوية المجموعة
                قال رئيس لجنة المجموعة الاقتصادية لدول غرب إفريقيا (سيدياو)، مارسيل آلان دي سوزا، اليوم الثلاثاء بالرباط، أن المغرب يحترم كل مبادئ قبول العضوية داخل المجموعة .
            </div>
            <div class="extra content">
                <a  target="_blank" href="http://qalamnas.com/%D8%B1%D8%A6%D9%8A%D8%B3-%D8%B3%D9%8A%D8%AF%D9%8A%D8%A7%D9%88-%D8%A7%D9%84%D8%A7%D9%82%D8%AA%D8%B5%D8%A7%D8%AF%D9%8A%D8%A9-%D9%8A%D8%B9%D9%84%D9%86-%D9%85%D9%86-%D8%A7%D9%84%D8%B1/">@lang('lang.learn_more')</a>
            </div>
        </div> 

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
    <div class="seven wide column">
        <div class="ui yellow segment">
            <center>
                <img src="{{asset('images/fifa.svg')}}" class="ui inline image" height="100">
                <img src="{{asset('images/iam.png')}}" class="ui inline image" height="100">
                <img src="{{asset('images/burger.jpg')}}" class="ui inline image" height="100">
            </center>
        </div>
    </div>
    <div class="five wide column">
        <div class="ui grey segment">
            <center>
             <img src="{{asset('images/lesieur.jpg')}}" class="ui inline image" height="100">
             <img src="{{asset('images/ram.png')}}" class="ui inline image" height="100">
         </center>
     </div>
 </div>
 <div class="three wide column">
    <div class="ui brown segment">
        <center>
         <img src="{{asset('images/pepsi.png')}}" class="ui inline image" height="100">
     </center>
 </div>
</div>
</div>

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
        <a class="twitter-timeline" data-width="800" data-height="500" data-theme="light" data-link-color="#19CF86" href="https://twitter.com/asclepaix">Tweets Par association cle de la paix</a>
    </div>
</div>

<div class="row">
    <center> 

        <div class="ui blue large dividing header" id="videos"> 
            <i class="film blue icon"></i>
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
            <div class="rvs-item" style="background-image: url(https://img.youtube.com/vi/YradtwO7I6Y/maxresdefault.jpg)">
                <p class="rvs-item-text" style="color: white;">
                 Caravane de la paix du dialogue interculturel et de l'integration
             </p>
             <a href="https://www.youtube.com/watch?v=YradtwO7I6Y" class="rvs-play-video"></a>
         </div>
         <!-- new item -->
         <div class="rvs-item" style="background-image: url(https://img.youtube.com/vi/QGf5d4WYXKI/maxresdefault.jpg)">
            <p class="rvs-item-text">
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
            <p class="rvs-item-text">
                جمعية مفتاح السلام تتضامن مع ساكنة أيت حساين احدو بإقليم بولمان
            </p>
            <a href="https://www.youtube.com/watch?v=2zhuDY6xRVc" class="rvs-play-video"></a>
        </div>
    </div>
</div>

<div class="rvs-nav-container">
    <a class="rvs-nav-prev"></a>
    <div class="rvs-nav-stage">
        <!-- The below is the corresponding nav item for the single item, simply duplicate this layout for each item -->
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
    </div>
    <a class="rvs-nav-next"></a>
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
