@extends('layout')

@section('content')

<section id="main" class="bg-blue">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				@include('search-form')
			</div>
		</div>
	</div>
</section>

@stop