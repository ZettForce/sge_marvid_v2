@extends('adminlte::page')
@section('title', 'Dashboard')

@section('content')
{{$slot}}
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">
    <link rel="icon" type="image/png" href="{{ asset('favicon.ico') }}">
@stop

@section('js')
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script>
        console.log('Hi!');
    </script>
@stop

