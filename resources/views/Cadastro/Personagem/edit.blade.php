@extends('Painel.Layouts.index')



@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <h1>
                {{trans('words.menu_lateral.cadastro.personagem')}}
            </h1>
            <ol class="breadcrumb">
                <li><a href="{{ route('Painel.Principal.Show') }}"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">{{trans('words.menu_lateral.cadastro.personagem')}}</li>
            </ol>
        </section>
        <section class="content">
            <div class="row">
                <div class="col-lg-12 col-xs-12" style="padding:0;">
                    <a href="{{route('Cadastro.Personagem.index')}}" class="btn btn-primary"><i class="fa fa-angle-left"></i> {{trans('words.back')}}</a>
                    <div class="box">
                        <form method="post" action="{{route('Cadastro.Personagem.update',$personagem->id)}}" enctype="multipart/form-data">
                            @method('PUT')
                            {{ csrf_field() }}
                            <div class="box-header with-border">
                                <h3 class="box-title"><i class="fa fa-object-group"></i> <strong>{{trans('words.lpage.edit')}}</strong></h3>
                            </div>
                            <div class="box-body">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="desc">{{trans('words.desc')}}</label>
                                            <input type="text" class="form-control" id="desc" name="desc" value="{{$personagem->desc}}" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <img src="{{$personagem->imagem}}" width="200" height="200">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="imagem">{{trans('words.imagem')}}</label>
                                            <input type="file" value="{{$personagem->imagem}}" class="form-control" id="imagem" name="imagem" accept="image/*">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="box-footer">
                                <div class="col-sm-4 col-sm-offset-4">
                                    <button type="submit" class="btn btn-block btn-success">
                                        <i class="fa fa-save"></i> {{trans('words.edit')}}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@section('css')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
@endsection

@section('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
    <script src="{{ asset('/js/pages-scripts/general-select2.js') }}"></script>
@endsection