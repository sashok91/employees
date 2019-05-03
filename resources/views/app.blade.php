<!doctype html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Language" content="en" />
    <meta name="msapplication-TileColor" content="#2d89ef">
    <meta name="theme-color" content="#4188c9">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent"/>
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'The best app') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,300i,400,400i,500,500i,600,600i,700,700i&amp;subset=latin-ext">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    
    <script src="../libs/tabler-gh-pages/assets/js/require.min.js"></script>
    <script>
        requirejs.config({
            baseUrl: '.'
        });
    </script>
    <!-- Dashboard Core -->
    <link href="./assets/css/dashboard.css" rel="stylesheet" />
    <script src="./assets/js/dashboard.js"></script>
    <!-- c3.js Charts Plugin -->
    <link href="./assets/plugins/charts-c3/plugin.css" rel="stylesheet" />
    <script src="./assets/plugins/charts-c3/plugin.js"></script>
    <!-- Google Maps Plugin -->
    <link href="./assets/plugins/maps-google/plugin.css" rel="stylesheet" />
    <script src="./assets/plugins/maps-google/plugin.js"></script>
    <!-- Input Mask Plugin -->
    <script src="./assets/plugins/input-mask/plugin.js"></script>
</head>
<body class="">
<div class="page">
    <div class="page-main">
        <div class="header py-4">
            <div class="container">
                <div class="d-flex">
                    <a class="header-brand" href="./index.html">
                        <img src="./demo/brand/tabler.svg" class="header-brand-img" alt="tabler logo">
                    </a>
                    <div class="d-flex order-lg-2 ml-auto">
                        <div class="nav-item d-none d-md-flex">
                            <a href="https://github.com/tabler/tabler" class="btn btn-sm btn-outline-primary" target="_blank">Source code</a>
                        </div>
                        <div class="dropdown d-none d-md-flex">
                            <a class="nav-link icon" data-toggle="dropdown">
                                <i class="fe fe-bell"></i>
                                <span class="nav-unread"></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                <a href="#" class="dropdown-item d-flex">
                                    <span class="avatar mr-3 align-self-center" style="background-image: url(demo/faces/male/41.jpg)"></span>
                                    <div>
                                        <strong>Nathan</strong> pushed new commit: Fix page load performance issue.
                                        <div class="small text-muted">10 minutes ago</div>
                                    </div>
                                </a>
                                <a href="#" class="dropdown-item d-flex">
                                    <span class="avatar mr-3 align-self-center" style="background-image: url(demo/faces/female/1.jpg)"></span>
                                    <div>
                                        <strong>Alice</strong> started new task: Tabler UI design.
                                        <div class="small text-muted">1 hour ago</div>
                                    </div>
                                </a>
                                <a href="#" class="dropdown-item d-flex">
                                    <span class="avatar mr-3 align-self-center" style="background-image: url(demo/faces/female/18.jpg)"></span>
                                    <div>
                                        <strong>Rose</strong> deployed new version of NodeJS REST Api V3
                                        <div class="small text-muted">2 hours ago</div>
                                    </div>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item text-center text-muted-dark">Mark all as read</a>
                            </div>
                        </div>
                        <div class="dropdown">
                            <a href="#" class="nav-link pr-0 leading-none" data-toggle="dropdown">
                                <span class="avatar" style="background-image: url(./demo/faces/female/25.jpg)"></span>
                                <span class="ml-2 d-none d-lg-block">
                      <span class="text-default">Jane Pearson</span>
                      <small class="text-muted d-block mt-1">Administrator</small>
                    </span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                <a class="dropdown-item" href="#">
                                    <i class="dropdown-icon fe fe-user"></i> Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="dropdown-icon fe fe-settings"></i> Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <span class="float-right"><span class="badge badge-primary">6</span></span>
                                    <i class="dropdown-icon fe fe-mail"></i> Inbox
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="dropdown-icon fe fe-send"></i> Message
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">
                                    <i class="dropdown-icon fe fe-help-circle"></i> Need help?
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="dropdown-icon fe fe-log-out"></i> Sign out
                                </a>
                            </div>
                        </div>
                    </div>
                    <a href="#" class="header-toggler d-lg-none ml-3 ml-lg-0" data-toggle="collapse" data-target="#headerMenuCollapse">
                        <span class="header-toggler-icon"></span>
                    </a>
                </div>
            </div>
        </div>
        <div class="header collapse d-lg-flex p-0" id="headerMenuCollapse">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-3 ml-auto">
                        <form class="input-icon my-3 my-lg-0">
                            <input type="search" class="form-control header-search" placeholder="Search&hellip;" tabindex="1">
                            <div class="input-icon-addon">
                                <i class="fe fe-search"></i>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg order-lg-first">
                        <ul class="nav nav-tabs border-0 flex-column flex-lg-row">
                            <li class="nav-item">
                                <a href="./index.html" class="nav-link"><i class="fe fe-home"></i> Home</a>
                            </li>
                            <li class="nav-item">
                                <a href="javascript:void(0)" class="nav-link" data-toggle="dropdown"><i class="fe fe-box"></i> Interface</a>
                                <div class="dropdown-menu dropdown-menu-arrow">
                                    <a href="./cards.html" class="dropdown-item ">Cards design</a>
                                    <a href="./charts.html" class="dropdown-item ">Charts</a>
                                    <a href="./pricing-cards.html" class="dropdown-item ">Pricing cards</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a href="javascript:void(0)" class="nav-link active" data-toggle="dropdown"><i class="fe fe-calendar"></i> Components</a>
                                <div class="dropdown-menu dropdown-menu-arrow">
                                    <a href="./maps.html" class="dropdown-item ">Maps</a>
                                    <a href="./icons.html" class="dropdown-item ">Icons</a>
                                    <a href="./store.html" class="dropdown-item active">Store</a>
                                    <a href="./blog.html" class="dropdown-item ">Blog</a>
                                    <a href="./carousel.html" class="dropdown-item ">Carousel</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a href="javascript:void(0)" class="nav-link" data-toggle="dropdown"><i class="fe fe-file"></i> Pages</a>
                                <div class="dropdown-menu dropdown-menu-arrow">
                                    <a href="./profile.html" class="dropdown-item ">Profile</a>
                                    <a href="./login.html" class="dropdown-item ">Login</a>
                                    <a href="./register.html" class="dropdown-item ">Register</a>
                                    <a href="./forgot-password.html" class="dropdown-item ">Forgot password</a>
                                    <a href="./400.html" class="dropdown-item ">400 error</a>
                                    <a href="./401.html" class="dropdown-item ">401 error</a>
                                    <a href="./403.html" class="dropdown-item ">403 error</a>
                                    <a href="./404.html" class="dropdown-item ">404 error</a>
                                    <a href="./500.html" class="dropdown-item ">500 error</a>
                                    <a href="./503.html" class="dropdown-item ">503 error</a>
                                    <a href="./email.html" class="dropdown-item ">Email</a>
                                    <a href="./empty.html" class="dropdown-item ">Empty page</a>
                                    <a href="./rtl.html" class="dropdown-item ">RTL mode</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a href="./form-elements.html" class="nav-link"><i class="fe fe-check-square"></i> Forms</a>
                            </li>
                            <li class="nav-item">
                                <a href="./gallery.html" class="nav-link"><i class="fe fe-image"></i> Gallery</a>
                            </li>
                            <li class="nav-item">
                                <a href="./docs/index.html" class="nav-link"><i class="fe fe-file-text"></i> Documentation</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="my-3 my-md-5">
            <div class="container">
                <div class="page-header">
                    <h1 class="page-title">
                        Store components
                    </h1>
                </div>
                <div class="row row-cards">
                    <div class="col-lg-3">
                        <div class="row">
                            <div class="col-md-6 col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="mb-4 text-center">
                                            <img src="demo/products/apple-iphone7-special.jpg" alt="Apple iPhone 7 128GB" class="img-fluid">
                                        </div>
                                        <h4 class="card-title"><a href="javascript:void(0)">Apple iPhone 7 Plus 256GB Red Special Edition</a></h4>
                                        <div class="card-subtitle">
                                            Apple
                                        </div>
                                        <div class="mt-5 d-flex align-items-center">
                                            <div class="product-price">
                                                <strong>$499</strong>
                                            </div>
                                            <div class="ml-auto">
                                                <a href="javascript:void(0)" class="btn btn-primary"><i class="fe fe-plus"></i> Add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="mb-4 text-center">
                                            <img src="demo/products/gopro-hero.jpg" alt="Apple iPhone 7 128GB" class="img-fluid">
                                        </div>
                                        <h4 class="card-title"><a href="javascript:void(0)">GoPro HERO6 Black</a></h4>
                                        <div class="card-subtitle">
                                            GoPro
                                        </div>
                                        <div class="mt-5 d-flex align-items-center">
                                            <div class="product-price">
                                                <strong>$599</strong>
                                            </div>
                                            <div class="ml-auto">
                                                <a href="javascript:void(0)" class="btn btn-primary"><i class="fe fe-plus"></i> Add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="card">
                            <table class="table card-table table-vcenter">
                                <tr>
                                    <td><img src="demo/products/apple-iphone7-special.jpg" alt="" class="h-8"></td>
                                    <td>
                                        Apple iPhone 7 Plus 256GB Red Special Edition
                                    </td>
                                    <td class="text-right text-muted d-none d-md-table-cell text-nowrap">98 reviews</td>
                                    <td class="text-right text-muted d-none d-md-table-cell text-nowrap">38 offers</td>
                                    <td class="text-right">
                                        <strong>$499</strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td><img src="demo/products/apple-macbook-pro.jpg" alt="" class="h-8"></td>
                                    <td>
                                        Apple MacBook Pro i7 3,1GHz/16/512/Radeon 560 Space Gray
                                        <div class="badge badge-default badge-md">New</div>
                                    </td>
                                    <td class="text-right text-muted d-none d-md-table-cell text-nowrap">97 reviews</td>
                                    <td class="text-right text-muted d-none d-md-table-cell text-nowrap">13 offers</td>
                                    <td class="text-right">
                                        <strong>$1499</strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td><img src="demo/products/apple-iphone7.jpg" alt="" class="h-8"></td>
                                    <td>
                                        Apple iPhone 7 32GB Jet Black
                                    </td>
                                    <td class="text-right text-muted d-none d-md-table-cell text-nowrap">48 reviews</td>
                                    <td class="text-right text-muted d-none d-md-table-cell text-nowrap">38 offers</td>
                                    <td class="text-right">
                                        <strong>$499</strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td><img src="demo/products/gopro-hero.jpg" alt="" class="h-8"></td>
                                    <td>
                                        GoPro HERO6 Black
                                        <div class="badge badge-default badge-md">New</div>
                                    </td>
                                    <td class="text-right text-muted d-none d-md-table-cell text-nowrap">66 reviews</td>
                                    <td class="text-right text-muted d-none d-md-table-cell text-nowrap">47 offers</td>
                                    <td class="text-right">
                                        <strong>$599</strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td><img src="demo/products/msi.jpg" alt="" class="h-8"></td>
                                    <td>
                                        MSI GV62 i5-7300HQ/8GB/1TB/Win10X GTX1050
                                    </td>
                                    <td class="text-right text-muted d-none d-md-table-cell text-nowrap">59 reviews</td>
                                    <td class="text-right text-muted d-none d-md-table-cell text-nowrap">26 offers</td>
                                    <td class="text-right">
                                        <strong>$1599</strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td><img src="demo/products/xiaomi-mi.jpg" alt="" class="h-8"></td>
                                    <td>
                                        Xiaomi Mi A1 64GB Black
                                        <div class="badge badge-default badge-md">New</div>
                                    </td>
                                    <td class="text-right text-muted d-none d-md-table-cell text-nowrap">63 reviews</td>
                                    <td class="text-right text-muted d-none d-md-table-cell text-nowrap">43 offers</td>
                                    <td class="text-right">
                                        <strong>$269</strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td><img src="demo/products/huawei-mate.jpg" alt="" class="h-8"></td>
                                    <td>
                                        Huawei Mate 10 Pro Dual SIM Gray
                                    </td>
                                    <td class="text-right text-muted d-none d-md-table-cell text-nowrap">71 reviews</td>
                                    <td class="text-right text-muted d-none d-md-table-cell text-nowrap">12 offers</td>
                                    <td class="text-right">
                                        <strong>$999</strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td><img src="demo/products/sony-kd.jpg" alt="" class="h-8"></td>
                                    <td>
                                        Sony KD-49XE7005
                                        <div class="badge badge-default badge-md">New</div>
                                    </td>
                                    <td class="text-right text-muted d-none d-md-table-cell text-nowrap">54 reviews</td>
                                    <td class="text-right text-muted d-none d-md-table-cell text-nowrap">14 offers</td>
                                    <td class="text-right">
                                        <strong>$799</strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td><img src="demo/products/samsung-galaxy.jpg" alt="" class="h-8"></td>
                                    <td>
                                        Samsung Galaxy A5 A520F 2017 LTE Black Sky
                                    </td>
                                    <td class="text-right text-muted d-none d-md-table-cell text-nowrap">37 reviews</td>
                                    <td class="text-right text-muted d-none d-md-table-cell text-nowrap">40 offers</td>
                                    <td class="text-right">
                                        <strong>$399</strong>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-6 col-md-3">
                            <ul class="list-unstyled mb-0">
                                <li><a href="#">First link</a></li>
                                <li><a href="#">Second link</a></li>
                            </ul>
                        </div>
                        <div class="col-6 col-md-3">
                            <ul class="list-unstyled mb-0">
                                <li><a href="#">Third link</a></li>
                                <li><a href="#">Fourth link</a></li>
                            </ul>
                        </div>
                        <div class="col-6 col-md-3">
                            <ul class="list-unstyled mb-0">
                                <li><a href="#">Fifth link</a></li>
                                <li><a href="#">Sixth link</a></li>
                            </ul>
                        </div>
                        <div class="col-6 col-md-3">
                            <ul class="list-unstyled mb-0">
                                <li><a href="#">Other link</a></li>
                                <li><a href="#">Last link</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mt-4 mt-lg-0">
                    Premium and Open Source dashboard template with responsive and high quality UI. For Free!
                </div>
            </div>
        </div>
    </div>
    <footer class="footer">
        <div class="container">
            <div class="row align-items-center flex-row-reverse">
                <div class="col-auto ml-lg-auto">
                    <div class="row align-items-center">
                        <div class="col-auto">
                            <ul class="list-inline list-inline-dots mb-0">
                                <li class="list-inline-item"><a href="./docs/index.html">Documentation</a></li>
                                <li class="list-inline-item"><a href="./faq.html">FAQ</a></li>
                            </ul>
                        </div>
                        <div class="col-auto">
                            <a href="https://github.com/tabler/tabler" class="btn btn-outline-primary btn-sm">Source code</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-auto mt-3 mt-lg-0 text-center">
                    Copyright © 2018 <a href=".">Tabler</a>. Theme by <a href="https://codecalm.net" target="_blank">codecalm.net</a> All rights reserved.
                </div>
            </div>
        </div>
    </footer>
</div>
</body>
</html>