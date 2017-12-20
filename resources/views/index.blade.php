@extends('layouts._master')

@section('content')
    <form method="POST" action="{{ route('orden') }}">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        Orden N°: <input type="text" name="orden" id="orden" placeholder="1000" required><br>
        Monto: <input type="text" name="monto" id="monto" placeholder="20000" required><br>
        Descripción: <input type="text" name="concepto" id="concepto" placeholder="Pago de Orden N° 1000" required><br>
        Email pagador (opcional): <input type="email" name="pagador" id="pagador" placeholder="usuario@email.com"><br>
        <br>
        <button type="submit">Aceptar</button>
    </form>
@endsection