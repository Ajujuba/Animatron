
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
                        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modalConfirm">
                            Deletar
                        </button>

                        <div class="modal fade" id="modalConfirm" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel">Atenção!</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
                                  Tem Certeza que deseja deletar o Anime selecionado?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                    <form method="POST" action="{{route('apagar.anime', ['id'=>$anime->id])}}">
                                        {{ csrf_field() }}
                                        @method('delete') 
                                        <button type="submit" class="btn btn-info">Deletar</button>
                                    </form>
                                </div>
                              </div>
                            </div>
                          </div>
                  
                        
                    </td>
                </tr> 
                @endforeach
            
            </tbody>
          </table>        
    </div>  
</div>
@endsection