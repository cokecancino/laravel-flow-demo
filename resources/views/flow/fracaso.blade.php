@extends('layouts._master')

@section('content')
    <h1>Página de fracaso de Comercio</h1>
    Su pago ha sido rechazado<br>
    <br>
    Orden de Compra: {{ $orden_compra }}<br>
    Monto: {{ $monto }}<br>
    Descripción: {{ $concepto }}<br>
    Pagador: {{ $email_pagador }}<br>
    Flow Orden N°: {{ $flow_orden }}<br>
    <br>
    <a href="{{ url('/') }}">Intente nuevamente</a>
@endsection