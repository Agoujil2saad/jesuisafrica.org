<?php
if (! isset($active_page)) {
  $active_page="/";
}
?>


<div class="row" style="border-bottom: 2px solid rgb(96,178,231); padding-top:1.1em; padding-bottom:0em; margin: 0;">
  <div class="two wide column middle aligned">
    <a href="/">
      <img src="{{asset("images/logo.png")}}" alt="logo" class="ui left tiny centered image" id="logo_left">
    </a>
    <div class="ui sidebar  blue vertical menu" id="sidebar_navigation">
     
     <a class="{{$active_page == "/"?'active':''}} item" href="/">
      <p class="ui blue small header">
       @lang('lang.home')
     </p>

   </a>

   {{-- 2 --}}
   <a class="item" href="/#partenaires">
    <p class="ui blue small header">
      @lang('lang.header_partners')
    </p>
  </a>
  {{-- 3 --}}
  <div class="item">
   <div class="ui dropdown ">
    <span class="text">
      <span class="ui blue  tiny header">@lang('lang.media_l')</span>
    </span>
    <i class="dropdown icon"></i>
    <div class="menu">
      <a class="item" href="/photo"> @lang('lang.photo_l')</a>
      <a class="item" href="/#videos"> @lang('lang.video_l')</a>
      <a class="item" href="/tv_videos"> @lang('lang.tv_l')</a>
      <a class="item" href="/presse_ecrite"> @lang('lang.presse_l')</a>
    </div>
  </div>
</div>
{{-- 4 --}}
<a class="{{$active_page == "/espace_presse"?'active':''}} item" href="/espace_presse">
  <p class="ui blue small header">
   @lang('lang.presse')
 </p>
</a>
{{-- 5 --}}
<div class="item">
 <div class="ui compact dropdown ">
  <span class="text">
    <span class="ui blue  tiny header">@lang('lang.header_projets')</span>
  </span>
  <i class="dropdown icon"></i>
  <div class="menu">
    <div class="item">Caravane culturelle  <br>et 
    de l'intégration africaine</div>
    <div class="item"> Forum du dialogue <br>et de l'investissement</div>
    <div class="item">  Académie Panafricaine  <br>de Football </div>
    <div class="item"> Radio-Tv <br>( voice of Africa )</div>
    <div class="item"> Institut des Relations <br>  Economiques Maroco-Africaines</div>
  </div>
</div>
</div>
{{-- 6 --}}
<div class="item">
  <div class="ui compact dropdown">
    <span class="text">
      <span class="ui blue  tiny header">@lang('lang.header-inst')</span>
    </span>
    <i class="dropdown icon"></i>
    <div class="menu">
      <a class="item"> Le Conseil Consultatif de <br> la Jeunesse Africaine</a>
    </div>
  </div>
</div>
{{-- 7 --}}
<div class="item">
  <a class="ui blue tiny button" href="/join_us">@lang('lang.join_us')</a>
</div>
{{-- 8 --}}
<div class="item">
  <div class="ui pointing dropdown">
    <span class=" small text">
      @if(App::getLocale()=="ar")
      <i class="ma flag"></i>
      العربية
      @else
      <i class="{{App::getLocale()}} flag"></i>
      Francais
      @endif
    </span>       
    <div class="menu">
      @foreach ( config('app.languages') as $user)
      @if($user !== config('app.locale'))
      <div class="item">
        <a href="{!! url('language') !!}/{{ $user }}">
          @if($user=="ar")
          <i class=" ma flag"></i>
          العربية
          @else
          <i class="{{$user}} flag"></i>
          Francais
          @endif
        </a>
      </div>
      @endif
      @endforeach       
    </div>
  </div>
</div>

</div>
<div class="pusher" id="pusher">
  <button class="ui blue icon button">
    <i class="sidebar icon"></i>
  </button>
</div>
</div>

<div class="twelve wide column middle aligned">
  <div class="ui eight small blue pointing secondary menu" id="navigation_menu">

   <a class="{{$active_page == "/"?'active':''}} item" href="/">
    <p class="ui blue small header">
     @lang('lang.home')
   </p>

 </a>

 {{-- 2 --}}
 <a class="item" href="/#partenaires">
  <p class="ui blue small header">
    @lang('lang.header_partners')
  </p>
</a>
{{-- 3 --}}
<div class="ui pointing dropdown link item">
  <span class="text">
    <span class="ui blue  tiny header">@lang('lang.media_l')</span>
  </span>
  <i class="dropdown icon"></i>
  <div class="menu">
    <a class="item" href="/photos"> @lang('lang.photo_l')</a>
    <a class="item" href="/#videos"> @lang('lang.video_l')</a>
    <a class="item" href="/tv_videos"> @lang('lang.tv_l')</a>
    <a class="item" href="/presse_ecrite"> @lang('lang.presse_l')</a>
  </div>
</div>
{{-- 4 --}}
<a class="{{$active_page == "/espace_presse"?'active':''}} item" href="/espace_presse">
  <p class="ui blue small header">
   @lang('lang.presse')
 </p>
</a>
{{-- 5 --}}
<div class="ui pointing dropdown link item">
  <span class="text">
    <span class="ui blue  tiny header">@lang('lang.header_projets')</span>
  </span>
  <i class="dropdown icon"></i>
  <div class="menu">
    <div class="item">Caravane culturelle et de l'intégration africaine</div>
    <div class="item"> Forum du dialogue et de l'investissement</div>
    <div class="item"> Académique Panafricaine de Football</div>
    <div class="item"> Radio-Tv ( voice of Africa )</div>
    <div class="item"> Institut des Relations Economiques Maroco-Africaines</div>
  </div>
</div>

{{-- 6 --}}
<div class="ui pointing dropdown link item">
  <span class="text">
    <span class="ui blue  tiny header">@lang('lang.header-inst')</span>
  </span>
  <i class="dropdown icon"></i>
  <div class="menu">
    <a class="item"> Le Conseil Consultatif de la Jeunesse Africaine</a>
  </div>
</div>

{{-- 7 --}}
<div class="fitted item">
  <a class="ui blue tiny button" href="/join_us">@lang('lang.join_us')</a>
</div>

<div class="item">
  <div class="ui pointing dropdown">
    <span class=" small text">
      @if(App::getLocale()=="ar")
      <i class="ma flag"></i>
      العربية
      @else
      <i class="{{App::getLocale()}} flag"></i>
      Francais
      @endif
    </span>       
    <div class="menu">
      @foreach ( config('app.languages') as $user)
      @if($user !== config('app.locale'))
      <div class="item">
        <a href="{!! url('language') !!}/{{ $user }}">
          @if($user=="ar")
          <i class=" ma flag"></i>
          العربية
          @else
          <i class="{{$user}} flag"></i>
          Francais
          @endif
        </a>
      </div>
      @endif
      @endforeach       
    </div>
  </div>
</div>

</div>
</div>




</div>
