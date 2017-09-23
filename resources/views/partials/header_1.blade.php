<div class="row" style="border-bottom: 2px solid rgb(96,178,231); padding-top:1.1em; padding-bottom:0em; margin: 0;">
  <div class="three wide column middle aligned">
    <a href="/">
      <img src="{{asset("images/logo.png")}}" alt="logo" class="ui left tiny centered image" id="logo_left">
    </a>
    <div class="ui sidebar blue vertical menu" id="sidebar_navigation">
      {{-- 1 --}}
      <a class="item" href="/">
        <p class="ui blue small header">
         @lang('lang.home')
       </p>
     </a>
     {{-- 2 --}}
     <a class="item" href="/#videos">
      <p class="ui blue small header">

       @lang('lang.video_l')
     </p>
   </a>
   {{-- 3 --}}
   <a class="item" href="/contact">
    <p class="ui blue small header">
      @lang('lang.footer_contact')
    </p>
  </a>
  {{-- 4 --}}
  <a class="item" href="/photos">
    <p class="ui blue small header">
      @lang('lang.photo_l')
    </p>
  </a>
  {{-- 5 --}}
  <a class="item" href="/#partenaires">
    <p class="ui blue small header">
      @lang('lang.header_partners')
    </p>
  </a>
  {{-- 6 --}}
  <div class="ui pointing dropdown link item">
    <span class="text">Nos Filiérs</span>
    <i class="dropdown icon"></i>
    <div class="menu">
            <div class="item">filiérs_1</div>
            <div class="item">Filiérs_2</div>
            <div class="item">filiérs_3</div>
      </div>
  </div>

</div>
<div class="pusher" id="pusher">
  <button class="ui blue icon button">
    <i class="sidebar icon"></i>
  </button>
</div>
</div>

<div class="eleven wide column middle aligned" id="navigation_menu">
  <div class="ui seven item secondary menu">

   <a class="item" href="/">
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
  <a class="item" href="/photos">
    <p class="ui blue small header">
      @lang('lang.photo_l')
    </p>
  </a>
  {{-- 4 --}}
  <a class="item" href="/#videos">
      <p class="ui blue small header">
       @lang('lang.video_l')
     </p>
   </a>
  {{-- 5 --}}
    <a class="item" href="/contact">
    <p class="ui blue small header">
      @lang('lang.footer_contact')
    </p>
  </a>

  {{-- 6 --}}
  <div class="ui pointing dropdown link item">
    <span class="text">
      
    <span class="ui blue  tiny header">Nos filières</span>
    </span>
    <i class="dropdown icon"></i>
    <div class="menu">
            <div class="item">filiérs_1</div>
            <div class="item">filiérs_2</div>
            <div class="item">filiérs_3</div>
      </div>
  </div>

  </div>
</div>


<div class="two wide middle aligned column">
  <div class="ui dropdown">
    <i class="world icon"></i>
    <span class="text">
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