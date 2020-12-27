 @extends('layouts.app')

@section('content')
	<div class="flex justify-center">
		<div class="w-10/12 bg-white p-5 rounded">
			{{ $user->name ?? 'Unknown' }}'s Posts
			<hr class="m-2">
			<p class="italic text-sm">Posted {{ $posts->count() }} {{ Str::plural('post',$posts->count()) }}. Received {{ $user->receivedLikes->count() }} likes</p>
		</div>
	</div>

	<div class="flex justify-center mt-5">
		<div class="bg-gray-100 w-10/12 p-5 rounded shadow-lg">
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