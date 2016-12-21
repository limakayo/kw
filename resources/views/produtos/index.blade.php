@extends('layouts.admin')

@section('content')

    <h2>Produtos</h2>
    <hr>
    <div class="row">
      @foreach($produtos as $produto)
      <div class="col-md-3">
        <div class="card">
          @if ($produto->foto)
          <img class="card-img-top img-fluid" src="{{ asset('fotos/'.$produto->foto) }}" alt="Card image cap">
          @endif
          <div class="card-block">
            <h4 class="card-title">{{ $produto->nome }}</h4>
            <div class="row">
              <div class="col-md-6">
                <a href="{{ route('produtos.edit', ['id' => $produto->id]) }}" class="btn btn-secondary">Editar</a>
              </div>
              <div class="col-md-6">
                <form class="delete" action="{{ url('produtos', ['id' => $produto->id]) }}" method="POST">
                  {{ method_field('DELETE') }}
                  {{ csrf_field() }}
                  <button type="submit" class="btn btn-danger">Remover</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      @endforeach
    </div>
    <hr>
    <div class="row">
      <div class="col-sm-5">
        <a href="{{ route('produtos.create') }}" class="btn btn-primary">Novo produto</a>
      </div>
    </div>

@endsection
