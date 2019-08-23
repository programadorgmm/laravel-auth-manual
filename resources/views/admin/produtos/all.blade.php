@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Produto</h1>
    <br>
    <button type="button" class="criarModal btn btn-primary" data-toggle="modal" data-target="#criarModal">Criar Produto</button>
@stop

@section('content')
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap"><div class="row"><div class="col-sm-6"></div><div class="col-sm-6"></div></div><div class="row"><div class="col-sm-12"><table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
                                        <thead>
                                        <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Nome</th><th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Preço</th><th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">Descrição</th><th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Ações</th></tr>
                                        </thead>
                                        <tbody>
                                        @foreach($produtos as $produto)
                                        <tr role="row" class="odd">
                                            <td class="sorting_1">{{$produto->nome}}</td>
                                            <td>{{$produto->preco}}</td>
                                            <td>{{$produto->descricao}}</td>
                                            <td>
                                                <button type="button" class="visualizaModal btn btn-primary" data-toggle="modal" data-target="#modalvisualizar" data-id="{{$produto->id}}"  data-nome="{{$produto->nome}}" data-preco="{{$produto->preco}}" data-descricao="{{$produto->descricao}}">Visualizar</button>
                                                <button type="button" class="editaModal btn btn-warning" data-toggle="modal" data-target="#editarModal" data-id="{{$produto->id}}"  data-nome="{{$produto->nome}}" data-preco="{{$produto->preco}}" data-descricao="{{$produto->descricao}}">Editar</button>
                                                <button type="button" class="DeletaModal btn btn-danger" data-id="{{$produto->id}}"  data-nome="{{$produto->nome}}" data-preco="{{$produto->preco}}" data-descricao="{{$produto->descricao}}" data-toggle="modal" data-target="#confirmDeleteModal">Deletar</button>
                                            </td>
                                        </tr>
                                        @endforeach
</tbody>
                                        <tfoot>

                                        </tfoot>
                                    </table></div></div>
                    </div>
                        {{$produtos->links()}}
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
    </section>
    <!-- Modal Criar -->
    <div class="modal fade" id="criarModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">Adicionar Produto</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form class="form-horizontal">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="inputNome" class="col-sm-2 control-label">Nome</label>

                                <div class="col-sm-10">
                                    <input type="inputNome" class="form-control" id="inputNome" name="inputNome" placeholder="Nome">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputPreco" class="col-sm-2 control-label">Preco</label>

                                <div class="col-sm-10">
                                    <input type="inputPreco" class="form-control" id="inputPreco" name="inputPreco" placeholder="Preço">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputDescricao" class="col-sm-2 control-label">Descrição</label>

                                <div class="col-sm-10">
                                    <input type="inputDescricao" class="form-control" id="inputDescricao" name="inputDescricao" placeholder="Desricao">
                                </div>
                            </div>

                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer">
                            <button type="button" data-dismiss="modal" class="btn btn-default">Cancelar</button>
                            <button type="button" class="btn btn-info pull-right" id="submitCreate">Adicionar</button>
                        </div>
                        <!-- /.box-footer -->
                    </form>
                </div>

            </div>
        </div>
    </div>
    <!-- Modal Editar -->
    <div class="modal fade" id="editarModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Editar Modal</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Editando formulario
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                    <button type="button" class="btn btn-primary">Salvar mudanças</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Visualizar-->
    <div class="modal fade" id="modalvisualizar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Visualizando Produto</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" >
                    <div class="form-group">
<label for=""> Nome: </label>
                        <p id="nomeView" />
                    </div>
                    <div class="form-group">
                        <label for="">
                            Preco:
                        </label>
                        <p id="precoVIew" />
                    </div>
                    <div class="form-group">
                        <label for=""> Descrição : </label>
                        <p id="descricaoView"></p>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal deletar-->
    <div class="modal fade" id="confirmDeleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Deletando modal</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Deletando modal
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                    <button type="button" class="btn btn-primary">Salvar mudanças</button>
                </div>
            </div>
        </div>
    </div>
    <scr
@stop
