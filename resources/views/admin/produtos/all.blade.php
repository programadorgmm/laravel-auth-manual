@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Produto</h1>
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
                                        @foreach($produto as $produto)
                                        <tr role="row" class="odd">
                                            <td class="sorting_1">{{$produto->nome}}</td>
                                            <td>{{$produto->preco}}</td>
                                            <td>{{$produto->descricao}}</td>
                                            <td>Deletar, Visualizar e Editar</td>
                                        </tr>
                                        @endforeach
</tbody>
                                        <tfoot>

                                        </tfoot>
                                    </table></div></div>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
    </section>
@stop
