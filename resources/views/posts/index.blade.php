@extends('layouts.app')

@section('content')
	<div class="w-full sm:w-11/12 bg-white m-auto p-5 rounded shadow">
		<div class="flex justify-between align-middle">
			<h1 class="text-3xl text-gray-500">All Posts</h1>
			<a href="{{ route('posts.create') }}" class="text-blue-800 underline">Create one</a>
		</div>
	</div>

	<div class="flex justify-center mt-5">
		<div class="bg-gray-100 w-full sm:w-11/12 p-5 rounded shadow-lg">
			@if($posts->count())
				@foreach($posts as $post)
					<x-post :post="$post" />
				@endforeach
			@else
				<p class="text-red-700 text-xl">There are no posts</p>
			@endif
		</div>
	</div>

	<div class="w-10/12 m-auto display-center mt-5 p-2">
		{{ $posts->links() }}
	</div>

@endsection
