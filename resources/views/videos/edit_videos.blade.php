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
		{{ Form::model($video, array('route' => array('videos.update', $video->id), 'method' => 'PUT', 'class' => 'ui form segment centered form_animation')) }}
		<h4 class="ui dividing blue header">Modifier la vidéo</h4>
		<div class="field">
			<label>L'identifiant de la video*</label>
			<div class="ui left icon input">
				<input type="text" name="value" value="{{$video->value}}" placeholder="exemple : www.youtube.com/watch?v=Aj8ALeQ28Nk => l'identifiant est  Aj8ALeQ28Nk" required>
				<i class="video play outline icon blue"></i>
			</div>
		</div>
		<div class="field">
			<label>Titre de la vidéo*</label>
			<textarea rows="3" name="titre">{{$video->titre}}</textarea>
		</div>
		<button class="ui blue button" type="submit">Modifier</button>
		{{ Form::close() }}
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