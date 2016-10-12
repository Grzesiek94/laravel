@extends('template.page')

@section('title')
<i class="fa fa-user"></i> Lista Kategorii
@stop

@section('body')
<table class="data table">
    <thead>
        <tr>
            <th class="id">#</th>
            <th>Nazwa</th>
            <th>Procent</th>
            <th data-orderable="false"></th>
        </tr>
    </thead>
    <tbody>
        @foreach( $categories as $category )
            <tr>
                <td>{{ $category->id }}</td>
                <td>{{ $category->name }}</td>
                <td>{{ $category->percent }}</td>
                <td><a href="" class="btn btn-danger deletable" data-href="{{ route('category.destroy', [ $category->id ]) }}">Usuń</a></td>
            </tr>
        @endforeach
    </tbody>
</table>
@stop

@section('scripts')

@stop
