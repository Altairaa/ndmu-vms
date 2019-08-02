@extends('adminlte::page')

@section('content_header')
Student
@stop

@section('content')
$(document).ready( function () {
    $('#myTable').DataTable();
} );
	
@stop