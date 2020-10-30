@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="col-md-8 col-md-offset-2">
			<h1>Lista de artículos</h1>
			
			@foreach($posts as $post)
				<div class="panel panel-default">
					<div class="panel-heading">
						{{ $post->name }}
					</div>
					<div class="panel-body">
						@if($post->file)
							<img class="img-responsive" src="{{ $post->file }}">
						@endif
						{{ $post->excerpt }}
						<a class="pull-right" href="{{ route('show', $post->slug) }}">Leer más</a>
					</div>
				</div>
			@endforeach
			{{ $posts->links() }}
		</div>	
	</div>
@endsection