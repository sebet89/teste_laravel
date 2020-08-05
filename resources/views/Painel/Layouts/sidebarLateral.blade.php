<aside class="main-sidebar">
    <section class="sidebar">
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{ asset('AdminLTE/img/Avatar/img.png') }}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>{{ auth()->user()->name }}</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">{{trans('words.menu_lateral')}}</li>
            <li class="active treeview">
              <a href="#">
                <i class="fa fa-dashboard"></i> <span>{{trans('words.menu_lateral.conteudos')}}</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li class="{{Request::segment(1) == 'Landing_Page' ? 'active ' : ''}}">
                    <a href="{{route('Conteudo.Landing_Page.index')}}">
                        <i class="fa fa-fw fa-tags"></i>
                        <span>{{trans('words.menu_lateral.conteudos.lpage')}}</span>
                    </a>
                </li>
              </ul>
            </li>
            <li class="active treeview">
              <a href="#">
                <i class="fa fa-dashboard"></i> <span>{{trans('words.menu_lateral.cadastros')}}</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li class="{{Request::segment(1) == 'Personagem' ? 'active ' : ''}}">
                    <a href="{{route('Cadastro.Personagem.index')}}">
                        <i class="fa fa-fw fa-tags"></i>
                        <span>{{trans('words.menu_lateral.cadastro.personagem')}}</span>
                    </a>
                </li>
              </ul>
            </li>
        </ul>
    </section>
</aside>