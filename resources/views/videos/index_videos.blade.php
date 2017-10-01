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
		<a class="ui blue medium button" href="/videos/create">Ajouter une Vidéo</a>
		</center>
		<table class="ui celled striped table">
			<thead>
				<tr><th colspan="3">
					Toutes les vidéos
				</th>
			</tr></thead>
			<tbody>
				@foreach($videos as $video)
				<tr>
					<td class="collapsing">
						{{$video->value}}
					</td>
					<td>{{ $video->titre }}</td>
					<td class="right aligned collapsing">
						{!! Form::open(['method' => 'DELETE', 'route' => ['videos.destroy', $video->id] ]) !!}
						{!! Form::submit('Supprimer', ['class' => 'ui red button']) !!}
						{!! Form::close() !!}
						<a class="ui blue button" href="{{url('/videos/'.$video->id.'/edit')}}">Edit</a>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
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