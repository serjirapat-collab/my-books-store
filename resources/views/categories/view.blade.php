@extends('layouts.main')

@section('title',$category['name'])

@section('content')

<h2>

Products List : {{$category['name']}}

</h2>

<table>

<tr>

<th>No.</th>

<th>Image</th>

<th>Code</th>

<th>Name</th>

</tr>

@foreach($products as $product)

<tr>

<td>{{$loop->iteration}}</td>

<td>

<img
src="{{asset('images/products/'.$product['code'].'.jpg')}}"
class="app-cmp-product-image">

</td>

<td>

<a href="{{route('products.view',['product'=>$product['code']])}}">

{{$product['code']}}

</a>

</td>

<td>{{$product['name']}}</td>

</tr>

@endforeach

</table>

@endsection