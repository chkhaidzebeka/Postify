<hr class="mb-5 mt-2">
<div class="flex justify-start">
	@auth
	<a href="{{ route('posts.create') }}" class="mr-5 bg-blue-700 text-white border border-blue-700 font-bold py-2 px-6 rounded hover:bg-blue-800">Create A post</a>
	@endauth
	<a href="{{ route('posts.index') }}" class="mr-5 bg-yellow-500 text-gray-800 border border-yellow-500 font-bold py-2 px-6 rounded hover:bg-yellow-600">View All posts</a>	
</div>

