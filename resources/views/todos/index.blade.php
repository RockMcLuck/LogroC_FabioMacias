@extends('app')

@section('content')
{{--       @foreach ($logrocs as $item)
      <div class="container">
        <label for="">Nombres y Apellidos: {{$item->nombres}}</label>
        <label for="">Numero de cedula:  {{$item->cedula}}</label>
        <label for="">Partido:  {{$item->partido}}</label>
        <label for="">Numero de lista:  {{$item->numlista}}</label>
        <label for="">Votos:  {{$item->votos}}</label>
        <label for=""><a href="{{url('/index/edit/id'),$item->id}}">Editar:</a></label>
      </div>
      @endforeach

      <br>
       --}}

      <div class="form">
        <form action="/create" method="POST">
            @csrf
            @method('POST')
            <div>
                <label for="">Nombres y Apellidos:</label>
                <input type="text" name="nombres">
            </div>
            <div>
                <label for="">Numero de cedula:</label>
                <input type="text" name="cedula">
            </div>
            <div>
              <label for="">Partido:</label>
              <input type="text" name="partido">
          </div>
          <div>
              <label for="">Numero de lista:</label>
              <input type="text" name="numlista">
          </div>
          <div>
            <label for="">Votos:</label>
            <input type="text" name="votos">
        </div>
            <div>
                <button type="submit">Enviar</button>
            </div>
        </form>
    </div>

@endsection