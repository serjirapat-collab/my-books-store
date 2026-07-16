<!DOCTYPE html>

<html>

<head>

<title>Jirapat's Books Store - @yield('title')</title>

<style>

table{

border-collapse:collapse;

}

table,th,td{

border:1px solid black;

}

.app-cmp-product-image{

width:64px;

}

dl{

display:grid;

grid-template-columns:auto 1fr;

}

dt{

display:flex;

font-weight:bold;

}

dt::after{

content:"::";

margin-left:auto;

padding-left:10px;

padding-right:10px;

}

</style>

</head>

<body>

<h1>

Jirapat's Books Store - @yield('title')

</h1>

<a href="{{route('products.list')}}">

Products

</a>

<a href="{{route('categories.list')}}">

Categories

</a>

<hr>

@yield('content')

<hr>

© Copyright Week-03,2026 Jirapat's Books Store

</body>

</html>