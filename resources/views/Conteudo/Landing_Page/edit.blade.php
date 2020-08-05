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
                    <a href="{{route('Conteudo.Landing_Page.index')}}" class="btn btn-primary"><i class="fa fa-angle-left"></i> {{trans('words.back')}}</a>
                    <div class="box">
                        <form method="post" action="{{route('Conteudo.Landing_Page.update',$landingpage->id)}}" enctype="multipart/form-data">
                            @method('PUT')
                            {{ csrf_field() }}
                            <div class="box-header with-border">
                                <h3 class="box-title"><i class="fa fa-object-group"></i> <strong>{{trans('words.lpage.edit')}}</strong></h3>
                            </div>
                            <div class="box-body">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="desc">{{trans('words.desc')}}</label>
                                            <input type="text" class="form-control" id="desc" name="desc" value="{{$landingpage->desc}}" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="nome_jogo">{{trans('words.nome_jogo')}}</label>
                                            <input type="text" class="form-control" value="{{$landingpage->nome_jogo}}" id="nome_jogo" name="nome_jogo" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="frase">{{trans('words.frase')}}</label>
                                            <input type="text" value="{{$landingpage->frase}}" class="form-control" id="frase" name="frase" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4">
                                        <img src="{{$landingpage->imagebackground_superior}}" width="200" height="200">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="imagebackground_superior">{{trans('words.lpage.imagebackground_superior')}}</label>
                                            <input type="file" value="{{$landingpage->imagebackground_superior}}" class="form-control" id="imagebackground_superior" name="imagebackground_superior" accept="image/*">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="text_destq_tema">{{trans('words.text_destq_tema')}}</label>
                                            <textarea class="form-control" name="text_destq_tema" id="text_destq_tema" rows="5">{{$landingpage->text_destq_tema}}</textarea>
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