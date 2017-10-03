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
		<a class="ui blue medium button" style="margin-bottom:2em;" href="/articles/create">Créer un article</a>
		</center>
	</div>
	<div class="row" style="margin-bottom:2em;">
		<div class="ui doubling container four cards">
			@foreach($articles as $article)
			<div class="card">
				{{$article->title}}
				<div class="content">
					{!! $article->description !!}
				</div>

				<div class="extra content">
					<a  target="_blank" href="{{ $article->lien }}">@lang('lang.learn_more')</a>
						
					@if(!Auth::guest())
					<div class="ui buttons">
					{!! Form::open(['method' => 'DELETE', 'route' => ['articles.destroy', $article->id] ]) !!}
					{!! Form::submit('Supprimer', ['class' => 'ui red button left floated']) !!}
					{!! Form::close() !!}
					<div class="or"></div>
					<a class="ui blue button right floated" href="{{url('/articles/'.$article->id.'/edit')}}">Edit</a>
					</div>
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