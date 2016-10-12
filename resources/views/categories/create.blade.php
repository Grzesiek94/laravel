@extends('template.page')

@section('title')
<i class="fa fa-user"></i> Dodaj kategorię
@stop

@section('body')

    {{ Form::open( [ 'route' => 'category.store' ] ) }}

      @include( "categories.form" )
      <button type="submit" class="btn btn-success">Dodaj</button>

    {{ Form::close() }}

@stop

@section('scripts')

@stop
