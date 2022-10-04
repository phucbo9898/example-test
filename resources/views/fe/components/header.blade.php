<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home page</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">
    <link rel="icon" href="{{ asset('upload/logo-icon/logo-fe.png')}}" type="image/gif" sizes="16x16">
    <!-- Css Styles -->
    <link rel="stylesheet" href="{{asset('frontend/css/bootstrap.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('frontend/css/font-awesome.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('frontend/css/elegant-icons.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('frontend/css/nice-select.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('frontend/css/jquery-ui.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('frontend/css/owl.carousel.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('frontend/css/slicknav.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('frontend/css/style.css')}}" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet"/>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"/>
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.4.0/mdb.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css">
    <style>
        body{
            font-family: 'Times New Roman', Times, serif !important;
        }
        .text-xs-center nav{
            margin-left:257px;
        }
    </style>
</head>

<body>
<!-- Header Section Begin -->
<style>
    .header__top__right__language:after {
        display: none;
    }

    .hover_text:hover {
        background-color: #bfbfc3;
    }
</style>
<header class="header">
    <div class="header__top">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <h3 style="margin-top:5px;"><a href="{{route('fe.home')}}" style="text-decoration: none;">Trang chủ</a></h3>
                </div>
                <div class="col-lg-9 col-md-6">
                    <div class="header__top__right">
                        <div class="header__top__right__auth">
                            <a href="{{route('fe.login')}}" style="text-decoration: none;">
                                <div class="humberger__menu__widget">
                                    <div class="header__top__right__language">
                                        @if (Auth::check())
                                            @if (Auth::user()->role == config('constants.role.cms_user'))
                                                <img src="{{asset(Auth::user()->image)}}" alt="" style="max-height:40px; width: auto; height: auto;">
                                                {{Auth::user()->name}}
                                                <ul style="margin-top: 30px; width: 140px; background: white; border: 1px solid; border-color:#bebcbc;">
                                                    <li><a class="hover_text" href="{{route('cms.dashboard.index')}}" style="text-decoration: none; color: black;">Admin page</li>
                                                    <li><a class="hover_text" href="{{route('fe.history')}}" style="text-decoration: none; color: black;">Order history</a></li>
                                                    <li><a class="hover_text" href="{{route('fe.logout')}}" style="text-decoration: none; color: black;">Logout</a></li>
                                                </ul>
                                            @else
                                                <a href="{{ route('fe.logout')}}" style="text-decoration: none;">
                                                    <img src="{{asset(Auth::user()->image)}}" alt="" style="max-width:5%;">
                                                    {{Auth::user()->name}}
                                                    <ul style="margin-top: 48px; margin-left: 628px; width: 140px; background: white; border: 1px solid; border-color:#bebcbc;"">
                                                        <li><a class="hover_text" href="{{route('fe.history') }}" style="text-decoration: none; color: black;">Order history</a></li>
                                                        <li><a class="hover_text" href="{{route('fe.logout')}}" style="text-decoration: none; color: black;">Logout</a></li>
                                                    </ul>
                                                </a>
                                            @endif
                                        @else
                                            <i class="fa fa-user"></i>Login
                                        @endif
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
@if (session('error'))
    <div class="alert alert-danger text-center">{{session('error')}}</div>
@endif
<!-- Header Section End -->
