@extends('Template.modelo')
@section('titulo', 'Cadastro-Autor')
@section('conteudo')
<div class="row mx-2">
    <div class="col-12">
        <form action="{{!isset($criador)?route('inserir.autor'):route('atualizar.autor')}}" method="POST">
            @csrf
            @if(isset($criador))
                @method('PUT')
                <input type="hidden" value="{{$criador->id}}" name="id">
            @endif
            <div class="form-group">
              <label for="exampleFormControlInput1">Nome do Autor</label>
              <input type="text" class="form-control" name="nome_autor"   value="{{isset($criador)? $criador->nome : ''}}" required>
            </div>
            <div class="row">
                <button class="btn btn-outline-success my-2 my-sm-0 btn-block" type="submit">Enviar</button>
            </div>    
        </form>
    </div>
</div>


@endsection