@extends('Template.modelo')
@section('titulo', 'Cadastro-Anime')
@section('conteudo')
<div class="row mx-2">
    <div class="col-12">
        <form action="{{!isset($anime)?route('inserir.anime'):route('atualizar.anime')}}" method="POST">
            @csrf
            @if(isset($anime))
                @method('PUT')
                <input type="hidden" value="{{$anime->id}}" name='id'>
            @endif
            <div class="form-group">
              <label for="exampleFormControlInput1">Nome do Anime</label>
            <input type="text" class="form-control" name="nome_anime"  value="{{isset($anime)? $anime->nome : ''}}">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Quantidade de temporadas</label>
            <input type="number" class="form-control" name="qtd_temp" value="{{isset($anime)? $anime->qtd_temp:''}}">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Data de lançamento</label>
            <input type="date" class="form-control" name="data" value="{{isset($anime)? $anime->data:''}}" >
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Sinopse</label>
                <textarea class="form-control"   name="sinopse" rows="3">{{isset($anime)? $anime->sinopse: ''}}</textarea>
            </div>
            <div class="form-group">
              <label for="exampleFormControlSelect1">Autor do Anime</label>
              <select class="form-control" name="autor" >
                  @foreach ($criador as $criadores)
                        <option value="{{$criadores->id}}">{{$criadores->nome}}</option>
                  @endforeach
              </select>
              <div class="row">
                <button class="btn btn-outline-success my-2 my-sm-0 btn-block" type="submit">Enviar</button>
            </div>     
        </form>
     </div>
    
</div>
    
</div>
    
@endsection