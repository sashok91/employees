@extends('layouts.app')

@section('page')

    <div class="page-main">
        <div class="header py-4">
            <div class="container">
                <div class="d-flex">
                    <a class="header-brand" href="/">
                        <span>Employees</span>
                    </a>
                    <div class="d-flex order-lg-2 ml-auto">

                        <div class="dropdown">
                            <a href="#" class="nav-link pr-0 leading-none" data-toggle="dropdown">
                                <div class="ml-2 d-block">
                                    <span class="text-default">Jane Pearson</span>
                                    <small class="text-muted d-block mt-1">Administrator</small>
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                <a class="dropdown-item" href="#">
                                    <i class="dropdown-icon fe fe-log-out"></i> Sign out
                                </a>
                            </div>
                        </div>
                    </div>
                    <a href="#" class="header-toggler d-lg-none ml-3 ml-lg-0" data-toggle="collapse"
                       data-target="#headerMenuCollapse">
                        <span class="header-toggler-icon"></span>
                    </a>
                </div>
            </div>
        </div>

        <div class="header collapse d-lg-flex p-0" id="headerMenuCollapse">
            <div class="container">
                <div class="row align-items-center">

                    <div class="col-lg order-lg-first">
                        <ul class="nav nav-tabs border-0 flex-column flex-lg-row">
                            <li class="nav-item">
                                <a href="/" class="nav-link"><i class="fe fe-hash"></i> Сетка</a>
                            </li>
                            <li class="nav-item">
                                <a href="/employees" class="nav-link"><i class="fe fe-users"></i> Сотрудники</a>
                            </li>
                            <li class="nav-item">
                                <a href="/" class="nav-link"><i class="fe fe-home"></i> Отделы</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        @yield('page-content')
    </div>

    <footer class="footer">
        <div class="container">
            <div class="text-center">
                Copyright © 2018 <a href="/">Employees</a>. All rights reserved.
            </div>
        </div>
    </footer>

@endsection