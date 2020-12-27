<div class="border border-gray-300 p-5 my-2 rounded">
	<div class="flex">
		<a href="{{ route('user.posts',$post->user) }}" class="text-sm font-bold">{{ $post->user->name ?? 'Unknown' }}</a>
		<p class="text-sm px-2 text-gray-400">{{ $post->created_at->diffForHumans() }}</p>
	</div>
	<hr class="mt-1">
	<a href="{{ route('posts.show',$post) }}" class="mt-4">{{ $post->body }}</a>
</div>

<span>{{ $post->likes->count() }} {{ Str::plural('like', $post->likes->count()) }}</span>

@auth
	@if (session('error'))
		<p class="p-3 my-4 rounded bg-red-300 italic text-red-600">{{ session()->get('error') }}</p>
	@endif
	<div class="flex items-center mb-4">
		@if (!$post->likedBy(auth()->user()))
			<form action="{{ route('post.like',$post) }}" method="POST">
				@csrf
				<button type="submit" class="text-blue-600 mx-2 hover:text-blue-900">
					<svg class="w-6 h-6 inline" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
						<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5"></path>
					</svg>
					<span>Like</span>
				</button>
			</form>

		@else
				<form action="{{ route('post.unlike',$post) }}" method="POST">
				@csrf
				@method('DELETE')
				<button type="subtmi" class="text-red-500 mr-2 hover:text-red-700">
					<svg class="w-6 h-6 inline" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14H5.236a2 2 0 01-1.789-2.894l3.5-7A2 2 0 018.736 3h4.018a2 2 0 01.485.06l3.76.94m-7 10v5a2 2 0 002 2h.096c.5 0 .905-.405.905-.904 0-.715.211-1.413.608-2.008L17 13V4m-7 10h2m5-10h2a2 2 0 012 2v6a2 2 0 01-2 2h-2.5"></path></svg>
					<span>Unlike</span>
				</button>
			</form>
		@endif

		@can('delete')
		<form action="{{ route('posts.destroy',$post) }}" method="POST">
			@csrf
			@method('DELETE')
			<button type="subtmi" class="text-red-500 mr-2 hover:text-red-700">
				<svg class="w-6 h-6 inline" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"></path></svg>
				<span>Delete</span>
			</button>
		</form>
		@endcan
	</div>
@endauth