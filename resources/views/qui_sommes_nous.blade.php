@extends('layouts.master_1')
@section('styles')
<style type="text/css">
	h2:lang(ar){
		text-align: right;
		letter-spacing: 0;
	}
	p:lang(ar){
		text-align: right;
	}
</style>
@endsection
@section('content')

<div class="row" id="present">
    <div class="twelve wide column">
 		<h1 class="ui header ">
 			<img src="{{asset('images/africa.jpg')}}">
 			 @lang('lang.header_us')
 		</h1>
    </div>
</div>

@lang('qui_sommes_nous.content')


@endsection