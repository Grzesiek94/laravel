@extends('template.index')

@section('content')

<section class="content">
	<div class="box">
		<div class="box-header with-border">
			<h3 class="box-title"> @yield('title') </h3>
		</div>
		<div class="box-body">
			@include('template.alerts')
			@yield('body')
		</div>
	</div>
</section>

@stop

@section('scripts')

@yield('scripts')

@stop
