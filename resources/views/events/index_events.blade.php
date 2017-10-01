@extends('layouts.master_1')
@section('styles')
@endsection
@section('content')
<div class="row">
	<div class="eleven wide column">
		@if (session('status'))
		<div class="ui yellow message transition">
			<i class="close icon"></i>
			<div class="header">
				{{ session('status') }}
			</div>
		</div>
		@endif
		<center>
		<a class="ui blue medium button" style="margin-bottom:2em;" href="/events/create">Créer Evenement</a>
		</center>
	</div>
	<div class="row" style="margin-bottom:2em;">
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
					{!! Form::submit('Supprimer', ['class' => 'ui red button left floated']) !!}
					{!! Form::close() !!}
					<a class="ui blue button right floated" href="{{url('/events/'.$event->id.'/edit')}}">Edit</a>
					@endif
				</div>
			</div>
			@endforeach
		</div>
	</div>
</div>
@endsection
@section('scripts')
<script>
	$('.message .close').on('click', function() {
		$(this).closest('.message').transition('fade');
	});
</script>
@endsection