<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LaraTestApp</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    <style>
        /* Pagination styling */
        .pagination {
            display: inline-block;
            padding-right: 0;
            margin: 20px 0;
            border-radius: 4px;
            float: right;
        }

        .pagination > li {
            display: inline
        }

        .pagination > li > a, .pagination > li > span {
            position: relative;
            float: right;
            padding: 6px 12px;
            line-height: 1.428571429;
            text-decoration: none;
            color: #333333;
            background-color: #fff;
            border: 1px solid #e4e4e4;
        }

        .pagination > li:first-child > a, .pagination > li:first-child > span {
            margin-right: 0;
            border-bottom-right-radius: 4px;
            border-top-right-radius: 4px
        }

        .pagination > li:last-child > a, .pagination > li:last-child > span {
            border-bottom-left-radius: 4px;
            border-top-left-radius: 4px
        }

        .pagination > li > a:hover, .pagination > li > span:hover, .pagination > li > a:focus, .pagination > li > span:focus {
            color: #fff;
            background-color: #ffae12;
            border-color: #ffae12
        }

        .pagination > .active > a, .pagination > .active > span, .pagination > .active > a:hover, .pagination > .active > span:hover, .pagination > .active > a:focus, .pagination > .active > span:focus {
            z-index: 2;
            color: #fff;
            background-color: #F2541B;
            border-color: #F2541B;
            cursor: default
        }

        .pagination > .disabled > span, .pagination > .disabled > span:hover, .pagination > .disabled > span:focus, .pagination > .disabled > a, .pagination > .disabled > a:hover, .pagination > .disabled > a:focus {
            color: #777;
            background-color: #fff;
            border-color: #ddd;
            cursor: not-allowed
        }

        .pagination-lg > li > a, .pagination-lg > li > span {
            padding: 10px 16px;
            font-size: 18px
        }

        .pagination-lg > li:first-child > a, .pagination-lg > li:first-child > span {
            border-bottom-right-radius: 6px;
            border-top-right-radius: 6px
        }

        .pagination-lg > li:last-child > a, .pagination-lg > li:last-child > span {
            border-bottom-left-radius: 6px;
            border-top-left-radius: 6px
        }

        .pagination-sm > li > a, .pagination-sm > li > span {
            padding: 5px 10px;
            font-size: 12px
        }

        .pagination-sm > li:first-child > a, .pagination-sm > li:first-child > span {
            border-bottom-right-radius: 3px;
            border-top-rightt-radius: 3px
        }

        .pagination-sm > li:last-child > a, .pagination-sm > li:last-child > span {
            border-bottom-left-radius: 3px;
            border-top-left-radius: 3px
        }
    </style>
</head>
<body>

<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="{{ route('home') }}">LaraTestApp</a>
        </div>
        <div class="nav navbar-nav navbar-right">
            <li><a href="{{ route('home') }}">Home</a></li>
            <li><a href="{{ route('orders') }}">Orders</a></li>
            <li><a href="{{ route('tasks.index') }}">Tasks</a></li>
        </div>
    </div>
</nav>

<main>
    <div class="container">
        @if(Session::has('flash_message'))
            <div class="alert alert-success">
                {{ Session::get('flash_message') }}
            </div>
        @endif
        @yield('content')
    </div>
</main>

</body>
</html>