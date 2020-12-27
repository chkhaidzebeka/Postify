@extends('layouts.app')

@section('content')
	<div class="flex justify-center">
		<div class="w-11/12 sm:w-9/12 md:w-8/12 lg:w-6/12 bg-white p-5 rounded">
			<h1 class="text-2xl mb-2">Register</h1>
			<hr>

			<form action="{{ route('register') }}" method="POST">
				@csrf

				<div class="flex flex-col my-5">
					<div class="relative">
						<div class="inline-flex items-center justify-center absolute left-0 top-0 h-full w-10 text-gray-400">
							<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
								<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V8a2 2 0 00-2-2h-5m-4 0V5a2 2 0 114 0v1m-4 0a2 2 0 104 0m-5 8a2 2 0 100-4 2 2 0 000 4zm0 0c1.306 0 2.417.835 2.83 2M9 14a3.001 3.001 0 00-2.83 2M15 11h3m-3 4h2"></path>
							</svg>
						</div>

						<input type="text" name="name" class="text-sm sm:text-base placeholder-gray-500 pl-10 pr-4 rounded-lg border border-gray-400 w-full py-2 focus:outline-none focus:border-blue-400 focus:ring @error('name') focus:border-red-400 border-red-400 @enderror" required placeholder="Your name" value="{{ old('name') }}" />
					</div>
						@error('name')
							<p class="mt-2 text-red-500 text-xs italic">{{ $message }}</p>
						@enderror
				</div>

				<div class="flex flex-col my-5">
					<div class="relative">
						<div class="inline-flex items-center justify-center absolute left-0 top-0 h-full w-10 text-gray-400">
							<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
								<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1"></path>
							</svg>
						</div>

						<input type="text" name="username" class="text-sm sm:text-base placeholder-gray-500 pl-10 pr-4 rounded-lg border border-gray-400 w-full py-2 focus:outline-none focus:ring focus:border-blue-400 @error('username') focus:border-red-400 border-red-400 @enderror" placeholder="Your Username" required  value="{{ old('username') }}" />
					</div>
					@error('username')
						<p class="mt-2 text-red-500 text-xs italic">{{ $message }}</p>
					@enderror
				</div>

				<div class="flex flex-col my-5">
					<div class="relative">
						<div class="inline-flex items-center justify-center absolute left-0 top-0 h-full w-10 text-gray-400">
							<svg class="h-6 w-6" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
								<path d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />
							</svg>
						</div>

						<input type="email" name="email" class="text-sm sm:text-base placeholder-gray-500 pl-10 pr-4 rounded-lg border border-gray-400 w-full py-2 focus:outline-none focus:border-blue-400 focus:ring @error('email') focus:border-red-400 border-red-400 @enderror" placeholder="E-Mail Address" required value="{{ old('email') }}" />
					</div>
					@error('email')
						<p class="mt-2 text-red-500 text-xs italic">{{ $message }}</p>
					@enderror
				</div>

				<div class="flex flex-col my-5">
					<div class="relative">
						<div class="inline-flex items-center justify-center absolute left-0 top-0 h-full w-10 text-gray-400">
							<svg class="h-6 w-6" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                  		<path d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
	              		</svg>
						</div>

						<input type="password" name="password" class="text-sm sm:text-base placeholder-gray-500 pl-10 pr-4 rounded-lg border border-gray-400 w-full py-2 focus:outline-none focus:border-blue-400 focus:ring @error('password') focus:border-red-400 border-red-400 @enderror" placeholder="Password" required />
					</div>
					@error('password')
						<p class="mt-2 text-red-500 text-xs italic">{{ $message }}</p>
					@enderror
				</div>

				<div class="flex flex-col mt-5">
					<div class="relative">
						<div class="inline-flex items-center justify-center absolute left-0 top-0 h-full w-10 text-gray-400">
							<svg class="h-6 w-6" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                  		<path d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
	              		</svg>
						</div>

						<input type="password" name="password_confirmation" class="text-sm sm:text-base placeholder-gray-500 pl-10 pr-4 rounded-lg border border-gray-400 w-full py-2 focus:outline-none focus:border-blue-400 focus:ring @error('password_confirmation') focus:border-red-400 border-red-400 @enderror" placeholder="Repeat your password" required />
					</div>
					@error('password_confirmation')
						<p class="mt-2 text-red-500 text-xs italic">{{ $message }}</p>
					@enderror
				</div>

				<div class="flex w-full mt-2 justify-end">
					<p class="text-sm text-blue-500 font-bold">Already have an account? - <a href="{{ route('login') }}" class="text-blue-800 underline">Log in here</a></p>
				</div>

				<div class="flex w-full mt-5">
					<button type="submit" class="flex items-center justify-center focus:outline-none text-white text-sm sm:text-base bg-blue-600 hover:bg-blue-700 rounded py-2 w-full transition duration-150 ease-in">
						<span class="mr-2 uppercase">Register</span>
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