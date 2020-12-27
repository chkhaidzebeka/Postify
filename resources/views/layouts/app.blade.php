<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>{{ env("APP_NAME","Laravel App") }}</title>
	@yield('styles')
	<link rel="stylesheet" href="{{ asset('css/app.css') }}">
	<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
</head>
<body class="bg-gray-200">
	<header>
		<div class="mb-5 shadow-md w-full text-gray-700 bg-white dark-mode:text-gray-200 dark-mode:bg-gray-800">
			<div x-data="{ open: false }" class="flex flex-col max-w-screen-xl px-4 mx-auto md:items-center md:justify-between md:flex-row md:px-6 lg:px-8">
				<div class="p-4 flex flex-row items-center justify-between">
					<a href="#" class="text-lg font-semibold tracking-widest text-gray-900 uppercase rounded-lg dark-mode:text-white focus:outline-none focus:shadow-outline">{{ env("APP_NAME") }}</a>
					<button class="md:hidden rounded-lg focus:outline-none focus:shadow-outline" @click="open = !open">
						<svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
							<path x-show="!open" fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z" clip-rule="evenodd"></path>
							<path x-show="open" fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
						</svg>
					</button>
				</div>
				<nav :class="{'flex': open, 'hidden': !open}" class="flex-col flex-grow pb-4 md:pb-0 hidden md:flex md:justify-end md:flex-row">
					<ul class="sm:flex">
						<li class="my-2 mt-4">
							<a class="p-0 sm:p-5" href="{{ route('home') }}" class="p-5">Home</a>
						</li>
						@auth
						<li class="my-2 mt-4">
							<a class="p-0 sm:p-5" href="{{ route('dashboard') }}" class="p-5">Dashboard</a>
						</li>
						@endauth
							<li class="my-2 mt-4">
							<a class="p-0 sm:p-5" href="{{ route('posts.index') }}" class="p-5">Posts</a>
						</li>
						@auth
						<li class="my-2 mt-4">
							<a href="#" class="p-0 sm:p-5">{{ auth()->user()->name }}</a>
						</li>
						<li class="my-2">
							<form action="{{ route('logout') }}" method="POST">
							@csrf
								<button class="bg-red-500 hover:bg-red-600 rounded px-3 text-gray-100 py-2 px-2">Logout</button>					
							</form>
						</li>
						@endauth

						@guest
						<li class="my-2 bg-blue-500 rounded py-2 px-2">
							<a href="{{ route('register') }}" class="p-5 text-gray-100">Register</a>
						</li>
						<li class="my-2 rounded py-2 px-2">
							<a href="{{ route('login') }}" class="p-5 text-gray-100 underline">Log in</a>
						</li>
						@endguest
					</ul>
				</nav>
			</div>
		</div>
	</header>
	<div class="w-11/12 sm:w-10/12 mx-auto">
		@yield('content')			
	</div>
</body>
</html>