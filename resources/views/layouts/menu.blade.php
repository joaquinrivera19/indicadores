<div class="page-header page-header-inverse bg-indigo">

    <!-- Main navbar -->
    <div class="navbar navbar-inverse navbar-transparent navbar-fixed-top">
        <div class="navbar-header">
            <a class="navbar-brand" style="padding: 11px 20px;" href="{{ url('/') }}"><img
                        src="{{asset('assets/images/logo_oversoft.png')}}" alt="" style="height: 25px;"></a>

            <ul class="nav navbar-nav pull-right visible-xs-block">
                <li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-grid3"></i></a></li>
            </ul>
        </div>

        <div class="navbar-collapse collapse" id="navbar-mobile">
            <p class="navbar-text"><span class="label bg-success-400">SIAC</span></p>

            <div class="navbar-right">
                <ul class="nav navbar-nav">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="icon-bell2"></i>
                            <span class="visible-xs-inline-block position-right">Activity</span>
                            <span class="status-mark border-pink-300"></span>
                        </a>

                        {{--<div class="dropdown-menu dropdown-content">
                            <div class="dropdown-content-heading">
                                Activity
                                <ul class="icons-list">
                                    <li><a href="#"><i class="icon-menu7"></i></a></li>
                                </ul>
                            </div>

                            <ul class="media-list dropdown-content-body width-350">
                                <li class="media">
                                    <div class="media-left">
                                        <a href="#" class="btn bg-success-400 btn-rounded btn-icon btn-xs"><i
                                                    class="icon-mention"></i></a>
                                    </div>

                                    <div class="media-body">
                                        <a href="#">Taylor Swift</a> mentioned you in a post "Angular JS. Tips and
                                        tricks"
                                        <div class="media-annotation">4 minutes ago</div>
                                    </div>
                                </li>

                                <li class="media">
                                    <div class="media-left">
                                        <a href="#" class="btn bg-pink-400 btn-rounded btn-icon btn-xs"><i
                                                    class="icon-paperplane"></i></a>
                                    </div>

                                    <div class="media-body">
                                        Special offers have been sent to subscribed users by <a href="#">Donna
                                            Gordon</a>
                                        <div class="media-annotation">36 minutes ago</div>
                                    </div>
                                </li>

                                <li class="media">
                                    <div class="media-left">
                                        <a href="#" class="btn bg-blue btn-rounded btn-icon btn-xs"><i
                                                    class="icon-plus3"></i></a>
                                    </div>

                                    <div class="media-body">
                                        <a href="#">Chris Arney</a> created a new <span
                                                class="text-semibold">Design</span> branch in <span
                                                class="text-semibold">Limitless</span> repository
                                        <div class="media-annotation">2 hours ago</div>
                                    </div>
                                </li>

                                <li class="media">
                                    <div class="media-left">
                                        <a href="#" class="btn bg-purple-300 btn-rounded btn-icon btn-xs"><i
                                                    class="icon-truck"></i></a>
                                    </div>

                                    <div class="media-body">
                                        Shipping cost to the Netherlands has been reduced, database updated
                                        <div class="media-annotation">Feb 8, 11:30</div>
                                    </div>
                                </li>

                                <li class="media">
                                    <div class="media-left">
                                        <a href="#" class="btn bg-warning-400 btn-rounded btn-icon btn-xs"><i
                                                    class="icon-bubble8"></i></a>
                                    </div>

                                    <div class="media-body">
                                        New review received on <a href="#">Server side integration</a> services
                                        <div class="media-annotation">Feb 2, 10:20</div>
                                    </div>
                                </li>

                                <li class="media">
                                    <div class="media-left">
                                        <a href="#" class="btn bg-teal-400 btn-rounded btn-icon btn-xs"><i
                                                    class="icon-spinner11"></i></a>
                                    </div>

                                    <div class="media-body">
                                        <strong>January, 2016</strong> - 1320 new users, 3284 orders, $49,390 revenue
                                        <div class="media-annotation">Feb 1, 05:46</div>
                                    </div>
                                </li>
                            </ul>
                        </div>--}}
                    </li>

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="icon-bubble8"></i>
                            <span class="visible-xs-inline-block position-right">Messages</span>
                        </a>

                        {{--<div class="dropdown-menu dropdown-content width-350">
                            <div class="dropdown-content-heading">
                                Messages
                                <ul class="icons-list">
                                    <li><a href="#"><i class="icon-menu7"></i></a></li>
                                </ul>
                            </div>

                            <ul class="media-list dropdown-content-body">
                                <li class="media">
                                    <div class="media-left">
                                        <img src="{{asset('assets/images/placeholder.jpg')}}" class="img-circle img-sm"
                                             alt="">
                                        <span class="badge bg-danger-400 media-badge">5</span>
                                    </div>

                                    <div class="media-body">
                                        <a href="#" class="media-heading">
                                            <span class="text-semibold">James Alexander</span>
                                            <span class="media-annotation pull-right">04:58</span>
                                        </a>

                                        <span class="text-muted">who knows, maybe that would be the best thing for me...</span>
                                    </div>
                                </li>

                                <li class="media">
                                    <div class="media-left">
                                        <img src="{{asset('assets/images/placeholder.jpg')}}" class="img-circle img-sm"
                                             alt="">
                                        <span class="badge bg-danger-400 media-badge">4</span>
                                    </div>

                                    <div class="media-body">
                                        <a href="#" class="media-heading">
                                            <span class="text-semibold">Margo Baker</span>
                                            <span class="media-annotation pull-right">12:16</span>
                                        </a>

                                        <span class="text-muted">That was something he was unable to do because...</span>
                                    </div>
                                </li>

                                <li class="media">
                                    <div class="media-left"><img src="{{asset('assets/images/placeholder.jpg')}}"
                                                                 class="img-circle img-sm" alt=""></div>
                                    <div class="media-body">
                                        <a href="#" class="media-heading">
                                            <span class="text-semibold">Jeremy Victorino</span>
                                            <span class="media-annotation pull-right">22:48</span>
                                        </a>

                                        <span class="text-muted">But that would be extremely strained and suspicious...</span>
                                    </div>
                                </li>

                                <li class="media">
                                    <div class="media-left"><img src="{{asset('assets/images/placeholder.jpg')}}"
                                                                 class="img-circle img-sm" alt=""></div>
                                    <div class="media-body">
                                        <a href="#" class="media-heading">
                                            <span class="text-semibold">Beatrix Diaz</span>
                                            <span class="media-annotation pull-right">Tue</span>
                                        </a>

                                        <span class="text-muted">What a strenuous career it is that I've chosen...</span>
                                    </div>
                                </li>

                                <li class="media">
                                    <div class="media-left"><img src="{{asset('assets/images/placeholder.jpg')}}"
                                                                 class="img-circle img-sm" alt=""></div>
                                    <div class="media-body">
                                        <a href="#" class="media-heading">
                                            <span class="text-semibold">Richard Vango</span>
                                            <span class="media-annotation pull-right">Mon</span>
                                        </a>

                                        <span class="text-muted">Other travelling salesmen live a life of luxury...</span>
                                    </div>
                                </li>
                            </ul>
                        </div>--}}
                    </li>

                    <li class="dropdown dropdown-user">
                        <a class="dropdown-toggle" data-toggle="dropdown">
                            <img src="{{asset('assets/images/placeholder.jpg')}}" alt="">
                            <span>Horacio Camacho</span>
                            <i class="caret"></i>
                        </a>

                        <ul class="dropdown-menu dropdown-menu-right">
                            <li><a href="#"><i class="icon-user-plus"></i> Perfil</a></li>
                            <li><a href="#"><i class="icon-comment-discussion"></i> Mensajes</a></li>
                            <li class="divider"></li>
                            <li><a href="#"><i class="icon-cog5"></i> Ajustes</a></li>
                            <li><a href="#"><i class="icon-switch2"></i> Cerrar Sesión </a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- /main navbar -->


    <!-- Page header content -->
    <div class="page-header-content">
        <div class="page-title">
            <h4>Indicadores
                <small>Horacio Camacho</small>
            </h4>
        </div>

        <div class="heading-elements">
            <form class="heading-form" action="#">
                <div class="form-group">
                    <div class="has-feedback">
                        <input type="search" class="form-control" placeholder="Buscar">
                        <div class="form-control-feedback">
                            <i class="icon-search4 text-size-small text-muted"></i>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- /page header content -->


    <!-- Second navbar -->
    <div class="navbar navbar-inverse navbar-transparent" id="navbar-second">
        <ul class="nav navbar-nav visible-xs-block">
            <li><a class="text-center collapsed" data-toggle="collapse" data-target="#navbar-second-toggle"><i
                            class="icon-paragraph-justify3"></i></a></li>
        </ul>

        <div class="navbar-collapse collapse" id="navbar-second-toggle">
            <ul class="nav navbar-nav navbar-nav-material">

                @if($menu == 'calidad')

                    <li class="active"><a href="{{ url('calidad') }}">Calidad</a></li>
                    <li><a href="{{ url('desarrollo') }}">Desarrollo</a></li>
                    <li><a href="{{ url('bug_fixing') }}">Bug Fixing</a></li>

                @elseif ($menu == 'desarrollo')

                    <li><a href="{{ url('calidad') }}">Calidad</a></li>
                    <li class="active"><a href="{{ url('desarrollo') }}">Desarrollo</a></li>
                    <li><a href="{{ url('bug_fixing') }}">Bug Fixing</a></li>

                @else

                    <li><a href="{{ url('calidad') }}">Calidad</a></li>
                    <li><a href="{{ url('desarrollo') }}">Desarrollo</a></li>
                    <li class="active"><a href="{{ url('bug_fixing') }}">Bug Fixing</a></li>

                @endif

            </ul>
        </div>
    </div>
    <!-- /second navbar -->
</div>