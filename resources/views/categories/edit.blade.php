@extends('template.page')

@section('title')
  <i class="fa fa-user"></i> {{ $category->name }}
@stop

@section('body')

    {{ Form::model($category, ['route' => ['category.update', $category->id]]) }}

      @include( "categories.form" )
      <button type="submit" class="btn btn-success">Aktualizuj</button>

    {{ Form::close() }}

@stop

@section('scripts')

@stop
