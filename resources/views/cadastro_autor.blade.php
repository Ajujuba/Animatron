@extends('Template.modelo')
@section('titulo', 'Cadastro-Autor')
@section('conteudo')
<div class="row mx-2">
    <div class="col-12">
        <form action="{{route('inserir.autor')}}" method="POST">
            @csrf
            <div class="form-group">
              <label for="exampleFormControlInput1">Nome do Autor</label>
              <input type="email" class="form-control" name="nome_autor">
            </div>
            <div class="row">
                <button class="btn btn-outline-success my-2 my-sm-0 btn-block" type="submit">Enviar</button>
            </div>    
        </form>
    </div>
</div>


@endsection