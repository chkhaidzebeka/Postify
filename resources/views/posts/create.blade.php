@extends('layouts.app')

@section('content')
	<div class="flex justify-center">
		<div class="w-full sm:w-8/12 mt-5 bg-white p-5 rounded">
			<h1 class="text-2xl mb-2">Create Post</h1>
			<hr>

			@if(session('message'))
				<div class="my-2 py-3 px-2 bg-green-200 rounded">
					<p class="text-green-700">{{ session('message') }}</p>
				</div>
			@endif

			<form action="{{ route('posts.index') }}" method="POST">
				@csrf

				<div class="flex flex-col mt-2">
					<label for="body" class="text-xl">Body</label>
					<textarea name="body" id="body" cols="30" rows="4" class="mt-4 bg-gray-100 border-2 w-full p-4 rounded focus:outline-none focus:border-blue-400 focus:ring @error('body') border-red-400 @enderror" placeholder="Post something">{{ old('body') }}</textarea>
				</div>
				@error('body')
					<p class="mt-2 text-red-500 text-xs italic">{{ $message }}</p>
				@enderror

				<div class="flex w-full mt-5">
					<button type="submit" class="flex items-center justify-center focus:outline-none text-white text-sm sm:text-base bg-blue-600 hover:bg-blue-700 rounded py-2 w-full transition duration-150 ease-in">
						<span class="mr-2 uppercase">Create Post</span>
						<span>
							<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
								<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z"></path>
							</svg>
						</span>
					</button>
				</div>
			</form>
		</div>
	</div>
@endsection