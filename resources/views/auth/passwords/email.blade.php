@extends('layouts.master_1')

@section('content')
    <div class="row" style="padding-bottom: 3em">
        <div class="four wide column">
            <img src="{{asset('images/logo.png')}}" class="ui medium image">
        </div>
        <div class="eight wide column">
            <div class="ui very padded green segment">
                <div class="ui small header ">Reset Password</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form class="ui fluid form" method="POST" action="{{ route('password.email') }}">
                        {{ csrf_field() }}

                        <div class=" field {{ $errors->has('email') ? 'error' : '' }}">
                            <label for="email" class="label">E-Mail Address</label>

                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif

                        </div>

                        <div class="field">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="ui blue button">
                                    Send Password Reset Link
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
