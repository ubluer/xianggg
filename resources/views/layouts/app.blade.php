<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta content="" name="description"/>
    <meta content="" name="author"/>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Xianggg') }}</title>

    <!-- Styles -->
    <link href="/plugins/pace/pace-theme-flash.css" rel="stylesheet" type="text/css" media="screen"/>
    <link href="/plugins/bootstrapv3/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="/plugins/bootstrapv3/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
    <link href="/plugins/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
    <link href="/plugins/animate.min.css" rel="stylesheet" type="text/css"/>
    <link href="/plugins/jquery-scrollbar/jquery.scrollbar.css" rel="stylesheet" type="text/css"/>

    <link href="/fonts/fonts.css" rel="stylesheet" type="text/css">
    <link href="/css/webarch.css" rel="stylesheet" type="text/css">
    <link href="/css/xianggg.css" rel="stylesheet" type="text/css">
    @yield('page-css')
    <!-- Scripts -->
    <script type="text/javascript">
        window.Laravel = <?php echo json_encode([
                'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>

<body class="">

<div class="header navbar navbar-inverse ">

    <div class="navbar-inner">
        <div class="header-seperation">
            <ul class="nav pull-left notification-center visible-xs visible-sm">
                <li class="dropdown">
                    <a href="#main-menu" data-webarch="toggle-left-side">
                        <div class="iconset top-menu-toggle-white"></div>
                    </a>
                </li>
            </ul>

            <a href="{{ url('/') }}">
                <div class="kai-pen-handwriting logo logo-text">细雨巷</div>
            </a>

            <ul class="nav pull-right notification-center">
                <li class="dropdown hidden-xs hidden-sm">
                    <a href="{{ url('/') }}" class="dropdown-toggle active" data-toggle="">
                        <div class="iconset top-home"></div>
                    </a>
                </li>
                <li class="dropdown visible-xs visible-sm">
                    <a href="#" data-webarch="toggle-right-side">
                        <div class="iconset top-chat-white "></div>
                    </a>
                </li>
            </ul>
        </div>

        <div class="header-quick-nav">

            <div class="pull-left">
                <ul class="nav quick-section">
                    <li class="quicklinks"><a href="#" class="" id="layout-condensed-toggle">
                            <div class="iconset top-menu-toggle-dark"></div>
                        </a></li>
                </ul>
                <ul class="nav quick-section">

                </ul>
            </div>


            <div class="pull-right">
                <div class="chat-toggler">
                    <a href="#">
                        <div class="user-details">
                            <div class="username raleway">
                                @if(Auth::guest())
                                    <a href="{{ url('/login') }}" ><i class="fa fa-sign-in"></i> 登录 </a>
                                    <a href="{{ url('/register') }}"><i class="fa fa-user-plus"></i> 注册 </a>
                                @else
                                    <span><i class="fa fa-user"></i>{{ Auth::user()->name }}</span>
                                @endif
                            </div>
                        </div>
                    </a>
                </div>
                @if(!Auth::guest())
                    <ul class="nav quick-section ">
                        <li class="quicklinks">
                            <a data-toggle="dropdown" class="dropdown-toggle  pull-right " href="#" id="user-options">
                                <div class="iconset top-settings-dark "></div>
                            </a>
                            <ul class="dropdown-menu  pull-right" role="menu" aria-labelledby="user-options">
                                <li>
                                    <a href="javascript:;">账户</a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a href="{{ url('/logout') }}"
                                       onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();"><i class="fa fa-power-off"></i>&nbsp;&nbsp;注销</a>
                                    <form id="logout-form" action="{{ url('/logout') }}" method="POST"
                                          style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </li>
                    </ul>
                @endif

            </div>

        </div>

    </div>

</div>

<div class="page-container row-fluid">

    <div class="page-sidebar " id="main-menu">

        <div class="page-sidebar-wrapper scrollbar-dynamic" id="main-menu-wrapper">
            <div class="user-info-wrapper">
                <div class="profile-wrapper"><img src="/img/profiles/f2x.jpg" alt="" data-src="/img/profiles/f2x.jpg"
                                                  data-src-retina="/img/profiles/f2x.jpg" width="69" height="69"/></div>
                <div class="user-info">
                    @if (Auth::guest())
                        <div class="greeting"></div>
                        <div class="username"><span class="semi-bold"></span>临时用户</div>
                        <div class="status"><a href="javascript:;">
                                <div class="status-icon grey"></div>
                                游客</a></div>
                    @else
                        <div class="greeting">{{ Auth::user()->name }}</div>
                        <div class="username">余 <span class="semi-bold">秋雨</span></div>
                        <div class="status"><a href="javascript:;">
                                <div class="status-icon green"></div>
                                管理员</a></div>
                    @endif
                </div>
            </div>


            <p class="menu-title">BROWSE <span class="pull-right"><a href="javascript:;"><i
                                class="fa fa-refresh"></i></a></span></p>
            <ul>
                <li class="start ">
                    <a href="{{ route('member.index') }}"> <i class="icon-custom-home"></i> <span
                                class="title">族谱</span> <span class="selected"></span> <span
                                class="arrow "></span> </a>
                    <ul class="sub-menu">
                        <li><a href="{{ route('member.index') }}">成员管理</a></li>
                        <li class=""><a href="javascript:; "> 家族管理 </a></li>
                    </ul>
                </li>

                <li class="hidden-lg hidden-md hidden-xs" id="more-widgets"><a href="javascript:;"> <i
                                class="fa fa-plus"></i></a>
                    <ul class="sub-menu">
                        <li class="side-bar-widgets">
                            <p class="menu-title">FOLDER <span class="pull-right"><a href="#" class="create-folder"><i
                                                class="icon-plus"></i></a></span></p>
                            <ul class="folders">
                                <li><a href="#">
                                        <div class="status-icon green"></div>
                                        My quick tasks </a></li>
                                <li><a href="#">
                                        <div class="status-icon red"></div>
                                        To do list </a></li>
                                <li><a href="#">
                                        <div class="status-icon blue"></div>
                                        Projects </a></li>
                                <li class="folder-input" style="display:none">
                                    <input type="text" placeholder="Name of folder" class="no-boarder folder-name"
                                           name="" id="folder-name">
                                </li>
                            </ul>
                            <p class="menu-title">PROJECTS </p>
                            <div class="status-widget">
                                <div class="status-widget-wrapper">
                                    <div class="title">Freelancer<a href="#" class="remove-widget"><i
                                                    class="icon-custom-cross"></i></a></div>
                                    <p>Redesign home page</p>
                                </div>
                            </div>
                            <div class="status-widget">
                                <div class="status-widget-wrapper">
                                    <div class="title">envato<a href="#" class="remove-widget"><i
                                                    class="icon-custom-cross"></i></a></div>
                                    <p>Statistical report</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
            <div class="clearfix"></div>

        </div>
    </div>
    <a href="#" class="scrollup">Scroll</a>
    <div class="footer-widget">
        <div class="progress transparent progress-small no-radius no-margin">
            <div class="progress-bar progress-bar-success animate-progress-bar" data-percentage="79%"
                 style="width: 79%;"></div>
        </div>
        <div class="pull-right">
            <div class="details-status"><span class="animate-number" data-value="86"
                                              data-animation-duration="560">86</span>%
            </div>
            <a href="#"><i class="fa fa-power-off"></i></a></div>
    </div>


    <div class="page-content">

        <div id="portlet-config" class="modal hide">
            <div class="modal-header">
                <button data-dismiss="modal" class="close" type="button"></button>
                <h3>Widget Settings</h3>
            </div>
            <div class="modal-body"> Widget settings form goes here</div>
        </div>
        <div class="clearfix"></div>
        <div class="content">
            @yield('content')
        </div>
    </div>

</div>

<!-- Scripts -->

<script src="/plugins/pace/pace.min.js" type="text/javascript"></script>

<script src="/plugins/jquery/jquery-3.1.1.js" type="text/javascript"></script>
{{--<script src="/plugins/jquery/jquery-1.11.3.min.js" type="text/javascript"></script>--}}
<script src="/plugins/bootstrapv3/js/bootstrap.min.js" type="text/javascript"></script>
<script src="/plugins/jquery-block-ui/jqueryblockui.min.js" type="text/javascript"></script>
<script src="/plugins/jquery-unveil/jquery.unveil.min.js" type="text/javascript"></script>
<script src="/plugins/jquery-scrollbar/jquery.scrollbar.min.js" type="text/javascript"></script>
<script src="/plugins/jquery-numberAnimate/jquery.animateNumbers.js" type="text/javascript"></script>
<script src="/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
<script src="/plugins/bootstrap-select2/select2.min.js" type="text/javascript"></script>


<script src="/js/webarch.js" type="text/javascript"></script>
<script src="/js/chat.js" type="text/javascript"></script>
@yield('page-js')

</body>
</html>