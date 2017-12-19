@extends('layouts._master')

@section('content')
    <!-- Formulario HTML que envía la nueva Orden -->
    Confirme su orden antes de proceder al pago via Flow<br>
    <br>
    Orden N°: {{ $orden_compra }}<br>
    Monto: {{ $monto }}<br>
    Descripción: {{ $concepto }}<br>
    Email pagador (opcional): {{ $email_pagador }}<br>
    <br>
    <form method="POST" action="{{ config('flow.url_pago') }}">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="hidden" name="parameters" value="{{ $flow_pack }}">
        <button type="submit">Pagar en Flow</button>
    </form>
@endsection