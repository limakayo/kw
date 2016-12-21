@extends('layouts.admin')

@section('content')
    <h2>Produtos <small>Cadastrar</small></h2>

    <form action="{{ url('produtos') }}" enctype="multipart/form-data" method="post">
      {{ csrf_field() }}
      <div class="row">
        <div class="form-group col-md-4">
          <label for="fotos">Foto</label>
          <input type="file" name="foto" id="foto">
        </div>
        <div class="form-group col-md-4">
          <label for="nome">Nome</label>
          <input type="text" name="nome" id="nome" class="form-control">
        </div>
        <div class="form-group col-md-12">
          <label for="summernote">Descrição</label>
          <textarea class="form-control summernote" name="observacoes"></textarea>
        </div>
        <div class="form-group col-md-12 caracteristicas">
          <label for="summernote">Características</label>
          <textarea class="form-control summernote" name="caracteristicas"></textarea>
        </div>
        <div class="form-group col-md-12">
          <label for="summernote">Especificações</label>
          <textarea class="form-control summernote" name="especificacoes"></textarea>
        </div>
      </div>

      <button type="submit" class="btn btn-secondary">Cadastrar</button>
    </form>

@endsection
