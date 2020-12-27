@extends('layouts.app')

@section('content')
	<div class="flex justify-center">
		<div class="w-11/12 sm:w-9/12 md:w-8/12 lg:w-6/12 bg-white p-5 rounded">
			<h1 class="text-2xl mb-2">Login</h1>
			<hr>


			@if(session('message'))
				<div class="my-2 py-3 px-2 bg-red-200 rounded">
					<p class="text-red-700">{{ session('message') }}</p>
				</div>
			@endif

			<form action="{{ route('login') }}" method="POST">
				@csrf

				<div class="flex flex-col my-5">
					<div class="relative">
						<div class="inline-flex items-center justify-center absolute left-0 top-0 h-full w-10 text-gray-400">
							<svg class="h-6 w-6" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
								<path d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />
							</svg>
						</div>

						<input type="email" name="email" class="text-sm sm:text-base placeholder-gray-500 pl-10 pr-4 rounded-lg border border-gray-400 w-full py-2 focus:outline-none focus:border-blue-400 focus:ring @if(session('message')) focus:border-red-400 border-red-400 @endif" placeholder="E-Mail Address" required value="{{ old('email') }}" />
					</div>
				</div>

				<div class="flex flex-col mt-5">
					<div class="relative">
						<div class="inline-flex items-center justify-center absolute left-0 top-0 h-full w-10 text-gray-400">
							<svg class="h-6 w-6" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                  		<path d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
	              		</svg>
						</div>

						<input type="password" name="password" class="text-sm sm:text-base placeholder-gray-500 pl-10 pr-4 rounded-lg border border-gray-400 w-full py-2 focus:outline-none focus:border-blue-400 focus:ring @if(session('message')) focus:border-red-400 border-red-400 @endif" placeholder="Password" required />
					</div>
				</div>


				<div class="flex w-full mt-2 justify-between">
					<div>
						<input type="checkbox" name="remember" id="remember">				
						<label for="remember">Remember me</label>
					</div>
					<p class="text-sm text-blue-500 font-bold">Not a member? - <a href="{{ route('register') }}" class="text-blue-800 underline">Sign up here</a></p>
				</div>

				<div class="flex w-full mt-5">
					<button type="submit" class="flex items-center justify-center focus:outline-none text-white text-sm sm:text-base bg-blue-600 hover:bg-blue-700 rounded py-2 w-full transition duration-150 ease-in">
						<span class="mr-2 uppercase">Login</span>
						<span>
							<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
								<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"></path>
							</svg>
						</span>
					</button>
				</div>
			</form>
		</div>
	</div>
@endsection