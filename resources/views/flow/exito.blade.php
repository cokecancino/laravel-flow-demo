@extends('layouts._master')

@section('content')
    <h1>Página de éxito de Comercio</h1>
    Su pago se ha realizado exitosamente<br>
    <br>
    Orden de Compra: {{ $orden_compra }}<br>
    Monto: {{ $monto }}<br>
    Descripción: {{ $concepto }}<br>
    Pagador: {{ $email_pagador }}<br>
    Flow Orden N°: {{ $flow_orden }}<br>
    <br>
    Gracias por su compra
@endsection