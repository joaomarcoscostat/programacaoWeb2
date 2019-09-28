@extends('adminlte::page')
@section('title','AdminLTE')

@section('content')
    <div class="box box-solid box-primary">
        <div class ="box-header">
            <h4 class="box-title">Client</h4>
            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="" data-original-title="Collapse">
                    <i class="fa fa-minus"></i>                        
                </button>   
            </div>       
        </div>

        <div class="box-body">  
            <div class="box-header">
                <div class="form-inline">
                    <div class="col-xs-3 col-sm-1">
                        <a href="" class="btn btn-block btn-primary">
                        <i cl\ss="fa fa-fw fa-plus"></i> Cadastrar</a> 
                    </div>
                </div>  
            </div> 

            <table class="table table-houver table-condesed text-center">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Quantidade</th>
                        <th>Medida</th>
                    </tr>
                </thead>

                @if(isset($pdt))
                    <tbody>
                        @foreach($pdt as $model)
                            <tr>
                                <td>{{$model->nome}}</td>
                                <td>{{$model->quantidade}}</td>
                                <td>{{$model->medida}}</td>   

                                <td class = "td-actions text-left">
                                    <a href="{{route('produto.edit', $model->id)}}" class="btn btn-success" data-placement="top" title="Editar Cliente">
                                        <i class="fas fa-pencil-alt"></i>
                                    </a>
                                    <a href="{{route('produto.delete')}}" class="btn btn-danger" data-placement="top" title="Deletar Cliente">
                                        <i class="faz fa-pencil-alt"></i>
                                    </a>     
                                </td>
                            </tr>  
                        @endforeach
                    </tbody>
                @endif
            </table>
        </div> 
    </div>
@stop

        

    