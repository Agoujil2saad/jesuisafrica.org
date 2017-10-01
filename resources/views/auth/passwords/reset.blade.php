@extends('layouts.master_1')

@section('content')
    <div class="row" style="padding-bottom: 3em;">
        <div class="four wide column">
            <img src="{{asset('images/logo.png')}}" class="ui medium image">
        </div>
        <div class=" eigth wide column">
            <div class="ui very padded green segment">
                    <form class="ui fluid form" method="POST" action="{{ route('password.request') }}">
                        {{ csrf_field() }}
                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="field {{ $errors->has('email') ? ' error' : '' }}">
                            <label for="email">E-Mail Address</label>

                            
                                <input id="email" type="email"  name="email" value="{{ $email or old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                        </div>

                        <div class=" field {{ $errors->has('password') ? 'error' : '' }}">
                            <label for="password">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="field {{ $errors->has('password_confirmation') ? 'error' : '' }}">
                            <label for="password-confirm">Confirm Password</label>


                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>

                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                        </div>

                        <div class="field">
                                <button type="submit" class="ui blue button">
                                    Reset Password
                                </button>
                        </div>
                    </form>
            </div>
        </div>
    </div>

@endsection
