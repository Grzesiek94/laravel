@extends('template.page')

@section('title')
<i class="fa fa-user"></i> Dodaj użytkownika
@stop

@section('body')

    {{ Form::open( [ 'route' => 'user.store' ] ) }}

      @include( "users.form" )
      <button type="submit" class="btn btn-success">Dodaj</button>

    {{ Form::close() }}

@stop

@section('scripts')

@stop
