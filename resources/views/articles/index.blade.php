@extends('layouts.master_1')
@section('styles')
@endsection
@section('content')
<div class="row">


	<div class="eleven wide column">
		<div class="ui large blue centered header" style="margin: 3em;">
			<i class=" newspaper icon"></i>
			@lang('lang.footer_articles')
		</div>
		@if (session('status'))
		<div class="ui yellow message transition">
			<i class="close icon"></i>
			<div class="header">
				{{ session('status') }}
			</div>
		</div>
		@endif
		@if(!Auth::guest())
		<center>
			<a class="ui blue medium button" style="margin-bottom:2em;" href="/articles/create">Créer un article</a>
		</center>
		@endif

	</div>
</div>
@if(count($articles)==0)
<h1 class="ui orange large  segment header" style="margin: 3em;">
	<i class=" folder icon"></i>
	pas d'article pour l'instant
</h1>
@else
<div class=" very  row" style="margin-bottom:2em;">
	<div class="three wide column">
		<div class="ui vertical secondery menu ">
			@foreach($articles as $article)
			<a class="item" href="{{url('/articles/'.$article->id)}}"> 
				{{$article->title}}
				<span class="ui red right horizontal label" style="margin: .1em">
					{{$article->created_at->diffForHumans()}}
					<i class="save icon"></i>
				</span>
			</a>		
			@endforeach	
		</div>
	</div>

	<div class=" twelve wide column">

		<div class="ui doubling container four cards">
			@foreach($articles as $article)
			<div class="card">
				<div class="content">
					<h3>
						
						{{$article->title}}
					</h3>
				</div>

				<div class=" extra content">
					{!! $article->description !!}
					<a  href="{{url('/articles/'.$article->id)}}">@lang('lang.learn_more')</a>

				</div>

				<div class="extra content">
					
					@if(!Auth::guest())
					{!! Form::open(['method' => 'DELETE', 'route' => ['articles.destroy', $article->id] ]) !!}
					<button class="ui red button" type="submit">
						<i class=" inverted trash icon"></i>
						Supprimer
					</button>
					{!!Form::close()!!}
					@endif
				</div>
			</div>
			@endforeach

		</div>
		{{$articles->links()}}
		</§iv>

	</div>
</div>
@endif
@endsection
@section('scripts')
<script>
	$('.message .close').on('click', function() {
		$(this).closest('.message').transition('fade');
	});
</script>
@endsection