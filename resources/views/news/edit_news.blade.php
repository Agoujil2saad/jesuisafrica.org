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
		{{ Form::model($new, array('route' => array('news.update', $new->id), 'method' => 'PUT','files' => true, 'class' => 'ui form segment centered form_animation')) }}
		<h4 class="ui dividing blue header">Modifier l'actualité</h4>
		<div class="field">
			<label>Photo*</label>
			<div class="ui left icon input">
				{{ Form::file('photo', null)}}
				<i class="photo icon blue"></i>
			</div>
		</div>
		<div class="field">
			<label>Lien*</label>
			<div class="ui left icon input">
				<input type="text" name="lien" value="{{$new->lien}}" placeholder="lien vers l'evenement" required>
				<i class="linkify icon blue"></i>
			</div>
		</div>
		<div class="field">
			<label>La date*</label>
			<div class="ui left icon input">
				<input type="text" name="date" value="{{$new->date}}" required placeholder="la date de l'evenement --/--/--">
				<i class="time icon blue"></i>
			</div>
		</div>
		<div class="field">
			<label>Description*</label>
			<textarea rows="3" name="description">{{$new->description}}</textarea>
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