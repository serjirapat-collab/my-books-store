<!DOCTYPE html>

<html>

<head>

    <title>Jirapat's Books Store - {{ $title }}</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/lec04-style.css') }}" />
    <style>
        table {

            border-collapse: collapse;

        }

        table,
        th,
        td {

            border: 1px solid black;

        }

        .app-cmp-product-image {

            width: 64px;

        }

        dl {

            display: grid;

            grid-template-columns: auto 1fr;

        }

        dt {

            display: flex;

            font-weight: bold;

        }

        dt::after {

            content: "::";

            margin-left: auto;

            padding-left: 10px;

            padding-right: 10px;

        }
    </style>

</head>

<body>
    <header id="app-main-header">
        <h1>
            Jirapat's Books Store –
            <span @class($titleClasses ?? [])>{{ $title }}</span>
        </h1>
        <nav>
            <ul class="app-cmp-links">
                <li @class(['app-cl-active' => Route::is('products.*')])>
                    <a href="{{ route('products.list') }}">Products</a>
                </li>
                <li @class(['app-cl-active' => Route::is('categories.*')])>
                    <a href="{{ route('categories.list') }}">Categories</a>
                </li>
            </ul>
        </nav>
        <hr>

        @yield('content')

        <hr>

</body>
<footer id="app-main-footer"> &#xA9; Copyright Week-03,2026 Jirapat's Books Store
</footer>

</html>
