
@extends('Template.modelo') 
@section('titulo', 'AnimaTron-Listagem')
@section('conteudo')
<div class="row justify-content-center">
    <div class="col">
    <a href="{{route('inserir.anime')}}" class="btn btn-info btn-lg btn-block"> Cadastrar </a>
    </div>
</div>
<div class="row" >
    <div class="col-12">
        <table class="table table-hover">
            <thead>
              <tr class="text-center">
                <th scope="col">Código</th>
                <th scope="col">Anime</th>
                <th scope="col">Temporada</th>
                <th scope="col">Autor</th>
                <th scope="col">Ações</th>
              </tr>
            </thead>
            <tbody >
                @foreach ($animes as $anime)
                <tr>
                    <td class="text-center">
                        {{ $anime->id }}
                    </td>   
                    <td class="text-center">
                        {{$anime->nome}}
                    </td>   
                    <td class="text-center">
                        {{$anime->qtd_temp}}
                    </td>
                    <td class="text-center">
                        {{$anime->criadores['nome']}}
                    </td>
                    <td class="text-center">
                       <!-- <i class="fas fa-trash-alt"></i>-->
                        <a href="{{route('editar.anime', ['id'=>$anime->id])}}" class="btn btn-info"> Editar </a>
                        <br><br>
                        <form method="POST" action="{{route('apagar.anime', ['id'=>$anime->id])}}">
                            {{ csrf_field() }}
                            @method('delete') 
                            <button type="submit" class="btn btn-info">Deletar</button>
                        </form>
                    </td>
                </tr> 
                @endforeach
            
            </tbody>
          </table>        
    </div>  
</div>
@endsection