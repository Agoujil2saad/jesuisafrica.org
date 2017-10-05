@extends('layouts.master_1')
@section('styles')
@endsection
@section('content')
@include('partials.errors')
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
		<form class="ui form segment centered form_animation"  method="post" action="{{route('articles.store')}}" enctype="multipart/form-data" novalidate>
			{!! csrf_field() !!}

			<h4 class="ui dividing blue header">Création d'une article</h4>

			<div class="field">
				<label>Titre*</label>
				<input type="text" name="title">
			</div>

			<div class="field">
				<label>Description*</label>
				<!-- markup -->
				<textarea name="description" class="my-editor"></textarea>
			</div>


			<div class="field">
				<label>Contenu de L'article*</label>
				<!-- markup -->
				<textarea name="content" class="my-editor"></textarea>
			</div>


			<button class="ui blue button" type="submit">Ajouter</button>
		</form>
	</div>
</div>
@endsection
@section('scripts')
<script>
	$('.message .close').on('click', function() {
		$(this).closest('.message').transition('fade');
	});
</script>
<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
{{-- <script src="js/tinymce/js/tinymce/tinymce.min.js"></script> --}}
<script>
	var editor_config = {
		path_absolute : "/",
		selector: "textarea",
		plugins: [
		"advlist autolink lists link image charmap print preview hr anchor pagebreak",
		"searchreplace wordcount visualblocks visualchars code fullscreen",
		"insertdatetime media nonbreaking save table contextmenu directionality",
		"emoticons template paste textcolor colorpicker textpattern"
		],
		toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
		relative_urls: false,
		file_browser_callback : function(field_name, url, type, win) {
			var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
			var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;

			var cmsURL = editor_config.path_absolute + 'laravel-filemanager?field_name=' + field_name;
			if (type == 'image') {
				cmsURL = cmsURL + "&type=Images";
			} else {
				cmsURL = cmsURL + "&type=Files";
			}

			tinyMCE.activeEditor.windowManager.open({
				file : cmsURL,
				title : 'Filemanager',
				width : x * 0.8,
				height : y * 0.8,
				resizable : "yes",
				close_previous : "no"
			});
		}
	};

	tinymce.init(editor_config);
</script>


@endsection