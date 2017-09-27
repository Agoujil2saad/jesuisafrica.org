@extends('layouts.master_1')
@section('styles')
<style type="text/css">
@import url('https://fonts.googleapis.com/css?family=Dekko|Rouge+Script');
ul{
	list-style-image: url(images/white_dove.png); 
	font-family: Dekko,sans-serif;
	font-size: 1.2em;
}
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
<div class="row">
	
	<div class="ui centered grid" style="background-color: #ffffff;
background-image: linear-gradient(180deg, #ffffff 24%, #8686e5 88%);

">
		
		<div class="row" id="present">
			<div class="twelve wide column">
				<img src="{{asset('images/logo.png')}}" class="ui medium centered image">
			</div>
		</div>

		@lang('qui_sommes_nous.content')
	</div>
</div>


@endsection