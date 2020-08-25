@extends('adminlte::page')

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('footer')
    <div class="offset-md-9 text-right">
        &#169; {{ now()->year }} Laravel South Africa |
        <a href="/privacy-policy" class="">Privacy Policy</a>
    </div>
@stop