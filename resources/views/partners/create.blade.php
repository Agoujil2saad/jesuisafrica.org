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
		{{ Form::open(array('route' => 'partners.store','files' => true, 'class' => 'ui form segment centered form_animation', 'style' => "margin-bottom:1.5em;")) }}
		<h4 class="ui dividing blue header">Ajout  d'un partenaire</h4>
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
				<input type="text" name="lien" placeholder="lien vers Le partenaire" required>
				<i class="linkify icon blue"></i>
			</div>
		</div>
		<button class="ui blue button" type="submit">Ajouter</button>
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