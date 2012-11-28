@layout('master')


@section ('subtitle')
	@parent
	<h3>lorem ipsum</h3>
@endsection	

@section ('content')
	<ul>
		@forelse ($shops as $shop)
			<li>{{ $shop }}</li>
		@empty
			<li>Nessun negozio</li>
		@endforelse
	</ul>
@endsection