@extends('Painel.Layouts.index')



@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <h1>
                {{trans('words.menu_lateral.conteudos.lpage')}}
            </h1>
            <ol class="breadcrumb">
                <li><a href="{{ route('Painel.Principal.Show') }}"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">{{trans('words.menu_lateral.conteudos.lpage')}}</li>
            </ol>
        </section>
        <section class="content">
            <div class="row">
                <div class="col-lg-12 col-xs-12" style="padding:0;">
                    <a href="{{route('Conteudo.Landing_Page.create')}}" class="btn btn-primary"><i class="fa fa-plus"></i> {{trans('words.create')}}</a>
                    <div class="box">
                        <div class="box-header with-border">
                            <h3 class="box-title"><i class="fa fa-object-group"></i> <strong>{{trans('words.menu_lateral.conteudos.lpage')}}</strong></h3>

                            <div class="box-tools pull-right">
                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                            </div>
                        </div>
                        <div class="box-body">
                            <table id="groupsTable" class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th class="col-sm-1">{{trans('words.id')}}</th>
                                    <th class="col-sm-9 text-center">{{trans('words.desc')}} </th>
                                    <th class="col-sm-3 text-center">{{trans('words.actions')}} </th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($landingpages as $landingpage)
                                    <tr>
                                        <td>{{$landingpage->id}}</td>
                                        <td>{{$landingpage->desc}}</td>
                                        <td class="text-center">
                                            <form method="post" action="{{route('Conteudo.Landing_Page.destroy', $landingpage->id)}}">
                                                {{ csrf_field() }}
                                                {{ method_field('DELETE') }}
                                                <a href="{{route('Conteudo.Landing_Page.edit', $landingpage->id)}}" type="button" class="btn btn-sm btn-primary">
                                                    <i class="fa fa-pencil"></i> {{trans('words.edit')}}
                                                </a>
                                                <button type="submit" class="btn btn-sm btn-danger">
                                                    <i class="fa fa-trash"></i> {{trans('words.delete')}}
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </div>
@endsection

@section('css')
    <link rel="stylesheet" href="//cdn.datatables.net/v/bs/dt-1.10.13/datatables.min.css">
@endsection

@section('js')
    <script src="//cdn.datatables.net/v/bs/dt-1.10.13/datatables.min.js"></script>
@endsection