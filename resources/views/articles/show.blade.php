@extends('layouts.master_1')
@section('content')
<div class="row" style="padding-bottom: 3em;">
	<div class="three wide column">
		<div class="ui vertical secondery menu ">
			@foreach($articles as $art)
			<a class="item" href="{{url('/articles/'.$art->id)}}"> 
				{{$art->title}}
				<span class="ui red right horizontal label" style="margin: .1em">
					{{$art->created_at->diffForHumans()}}
					<i class="save icon"></i>
				</span>
			</a>		
			@endforeach	
		</div>
	</div>
	<div class="eleven wide column">

		<h1 class="ui header">
			{{$article->title}}
		</h1>

		<div class="ui very  wide segment">	
			{!! $article->content !!}
		</div>

	</div>
	<div class="one wide column">
		<a href="{{url()->previous()}}" class="ui green button"><i class="  left chevron icon"></i></a>
	</div>
</div>

@endsection
