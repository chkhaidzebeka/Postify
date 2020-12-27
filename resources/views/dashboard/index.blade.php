@extends('layouts.app')

@section('content')
	<div class="w-full">
		<div class="bg-white p-5 rounded">
			<h1 class="text-3xl">Dashboard</h1>
			<x-create-view-posts />
		</div>
	</div>
@endsection