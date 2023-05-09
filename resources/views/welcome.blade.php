@extends('layout')

@section('content')
	@foreach($posts as $post)
		<div>
			<h3>{{$post->title}}</h3>
			<p>
				{{$post->content}}
			</p>
		</div>
		<hr>
	@endforeach

	{{$posts->links('vendor.pagination.default', ['elements' => $posts])}}
@endsection