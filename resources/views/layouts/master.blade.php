<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('page-title')</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css"
          integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <script src="{{asset('js/app.js')}}"></script>
</head>
<body>
    <nav class="navbar navbar-light bg-light">
        <div class="col-md-3">
            <a class="navbar-brand" href="#"><i class="fab fa-angrycreative fa-4x"></i></a>
            <span class="text-muted">Site Slogan</span>
        </div>
        <div class="col-md-7">
            <form class="row">
                <div class="col-md-8">
                    <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                </div>
                <div class="col-md-4">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </div>
            </form>
        </div>
        <div class="col-md-2">
            <div class="row mb-2">
                <a href="/change-language/vi" class="img-thumbnail m-1"><img src="{{asset('img/vietnam.png')}}" alt="Vietnam Language"></a>
                <a href="/change-language/en" class="img-thumbnail m-1"><img src="{{asset('img/united-kingdom.png')}}" alt="English Language"></a>
                <a href="/change-language/jp" class="img-thumbnail m-1"><img src="{{asset('img/japan.png')}}" alt="Japan Language"></a>
                <a href="#" class="img-thumbnail m-1"><img src="{{asset('img/china.png')}}" alt="China Language"></a>
            </div>
            <img src="https://www.overleaf.com/assets/logos/overleaf_og_logo.png" alt=""
                 class="img-thumbnail rounded-circle w-25 mr-2 float-left">
            <div class="mt-3">
                <strong>Admin</strong>
                <a href="#">(Logout)</a>
            </div>
        </div>
    </nav>
    <div class="container-fluid row mt-2">
        <nav class="col-md-2">
            <div class="nav flex-column nav-pills">
                <a class="nav-link" href="/admin/bakery/list">Home</a>
                <a class="nav-link{{$currentPage=='bakery-list'?' active':''}}" href="/admin/bakery/list">Bakery Manager</a>
                <a class="nav-link" href="/admin/category">Category Manager</a>
                <a class="nav-link" href="/admin/article">Article Manager</a>
                <a class="nav-link" href="#v-pills-settings">Settings</a>
            </div>
        </nav>
        <main class="col-md-10">
            @section('content')
            @show
        </main>
    </div>
    <footer class="container-fluid mt-3 mb-3">
        <p class="text-center">Copyright @2018 FPT Aptech</p>
    </footer>
</body>
</html>