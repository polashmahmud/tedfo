<!doctype html>
<html lang="en" dir="ltr">
@include('layouts.head')

<body class="">
    <div class="page">
        <div class="page-main">
            <div class="header py-4">
                <div class="container">
                    <div class="d-flex">
                        <a class="header-brand" href="{{ route('dashboard') }}">
                            <img src={{ asset("demo/brand/tabler.svg") }} class="header-brand-img" alt="tabler logo">
                        </a>
                        <div class="d-flex order-lg-2 ml-auto">
                            <div class="nav-item d-none d-md-flex">
                                <form action="{{ route('logout') }}" method="post">
                                    @csrf
                                    <button type="submit" class="btn btn-sm btn-outline-primary">Log Out</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header collapse d-lg-flex p-0" id="headerMenuCollapse">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg order-lg-first">
                            <ul class="nav nav-tabs border-0 flex-column flex-lg-row">
                                <li class="nav-item">
                                    <a href="/dashboard" class="nav-link active"><i class="fe fe-home"></i> Home</a>
                                </li>
                                <li class="nav-item">
                                    <a href="/post" class="nav-link"><i class="fe fe-home"></i> Post</a>
                                </li>
                                <li class="nav-item">
                                    <a href="/categories" class="nav-link"><i class="fe fe-home"></i> Category</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="my-3 my-md-5">
                <div class="container">
                    @include('layouts.error')
                    <div class="page-header">
                        <h1 class="page-title">
                            @yield('page-title')
                        </h1>
                    </div>
                    @yield('content')
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
                                <a href="https://github.com/tabler/tabler" class="btn btn-outline-primary btn-sm">Source
                                    code</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-auto mt-3 mt-lg-0 text-center">
                        Copyright © 2018 <a href=".">Tabler</a>. Theme by <a href="https://codecalm.net"
                            target="_blank">codecalm.net</a> All rights reserved.
                    </div>
                </div>
            </div>
        </footer>
    </div>
</body>

</html>
