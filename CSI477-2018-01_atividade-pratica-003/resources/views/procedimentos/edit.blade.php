@extends('usuarios.areaAdministrador')

@section('conteudo')

    <h2 class="jumbotron text-center">Editar Procedimento</h2>

    <form class="fomr-inline" method="post" action="{{ route('procedimentos.update', $procedimento->id) }}">

        @csrf
        @method('PATCH')
        <label>Nome: </label>
        <input class="form-control" type="text" name="name" value="{{ $procedimento->name }}" required> <br>
        
        <label>Preço: </label>
        <input class="form-control" type="text" name="price" value="{{ $procedimento->price }}" required> <br>

        <select name="user_id">
          <option value="">Selecione o Administrador:</option>
          <!-- Dados dos estados //-->
          @foreach($usuarios as $u)
            <option value="{{ $u->id }}"
                @if ( $u->id == $procedimento->id )
                    selected
                @endif
              >@if ( $u->type == 1)
                  {{ $u->name }}
                @endif</option>
          @endforeach
        </select>

        <br>
        <input class="btn btn-info" type="submit" name="btnSalvar" value="Salvar">

    </form>

@endsection