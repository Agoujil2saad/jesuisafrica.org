@extends('layouts.master_1')
@section('content')
<div class="row" style="padding:4em 0;">
    <div class="six wide column">
        <center>
        <h1 class="ui header">
        <div class="content">
            @lang('lang.welcome_message')
        </div>
        </h1>
        <img src="{{asset('images/logo.png')}}"  class="ui medium image" style="margin-bottom: 30px;">
        </center>
    </div>
    <div class="six wide column">
        <form class="ui segment form" method="POST" action="{{ route('login') }}">
            {!! csrf_field() !!}
            
            <div class="field">
                <label>@lang('lang.email')*</label>
                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
            </div>
            
            <div class="field">
                <label>@lang('lang.password')*</label>
                <input id="password" type="password" class="form-control" name="password" required>
            </div>
            
            
            <div class="field">
                <button type="submit" class="ui blue button">
                @lang('lang.header_connect')
                </button>
                <a class="ui label" href="{{ route('password.request') }}">
                    @lang('lang.forgot_pwd')
                </a>
            </div>
        </form>
    </div>
</div>
@endsection