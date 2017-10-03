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
		{{ Form::open(array('route' => 'articles.store','files' => true, 'class' => 'ui form segment centered form_animation', 'style' => "margin-bottom:1.5em;")) }}
		<h4 class="ui dividing blue header">Création d'une article</h4>

		<div class="field">
			<label>Titre*</label>
			<input type="text" name="title">
		</div>

		<div class="field">
			<label>Description*</label>
			<textarea rows="3" name="description"></textarea>
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
<script src='/js/tinymce/js/tinymce/tinymce.min.js'></script>
<script>
tinymce.init({
  selector: 'textarea',
  height: 500,
  theme: 'modern',
  plugins: 'print preview fullpage  searchreplace autolink directionality  visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists textcolor wordcount   imagetools    contextmenu colorpicker textpattern help',
  toolbar1: 'formatselect | bold italic strikethrough forecolor backcolor | link | alignleft aligncenter alignright alignjustify  | numlist bullist outdent indent  | removeformat',
  image_advtab: true,
  templates: [
    { title: 'Test template 1', content: 'Test 1' },
    { title: 'Test template 2', content: 'Test 2' }
  ],
  content_css: [
    '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
    '//www.tinymce.com/css/codepen.min.css'
  ]
 });
</script>
@endsection