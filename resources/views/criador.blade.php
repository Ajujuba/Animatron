
@extends('Template.modelo') 
@section('titulo', 'AnimaTron-Autor')
@section('conteudo')
<div class="row justify-content-center">
    <div class="col">
    <a href="{{route('inserir.autor')}}" class="btn btn-info btn-lg btn-block"> Cadastrar </a>
    </div>
</div>
<div class="row" >
    <div class="col-12">
        <table class="table table-hover">
            <thead>
              <tr class="text-center">
                <th scope="col">Código</th>
                <th scope="col">Autor</th>
                <th scope="col">Animes</th>
                <th scope="col">Ações</th>
              </tr>
            </thead>
            <tbody >
                @foreach ($criadores as $criador)
                <tr>
                    <td class="text-center">
                        {{$criador->id}}
                    </td>
                    <td class="text-center">
                        {{$criador->nome}}
                    </td> 
                   <td class="text-center">
                       @foreach ($criador->animes as $anime)
                             {{$anime->nome}},
                       @endforeach
                    </td>
                    <td class="text-center">
                        <!-- <i class="fas fa-trash-alt"></i>-->
                        <button type="button" class="btn btn-info">Apagar</button>
                        <button type="button" class="btn btn-info"> Editar </button>
                        
                     </td>
                </tr>
                
                @endforeach
            
            </tbody>
          </table>        
    </div>  
</div>
@endsection