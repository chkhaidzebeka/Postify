 @extends('layouts.app')

@section('content')
	<div class="flex justify-center">
		<div class="w-full sm:w-11/12 bg-white p-5 rounded">
			<x-post :post="$post" />
		</div>
	</div>


	<div class="w-full sm:w-11/12 mx-auto my-4 bg-gray-100 p-3 rounded">
		<div id="disqus_thread"></div>
			<script>
			    (function() { // DON'T EDIT BELOW THIS LINE
			    var d = document, s = d.createElement('script');
			    s.src = 'https://postiify-io.disqus.com/embed.js';
			    s.setAttribute('data-timestamp', +new Date());
			    (d.head || d.body).appendChild(s);
			    })();
			</script>
			<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
	</div>
@endsection