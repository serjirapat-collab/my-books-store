@extends('layouts.main', [
'title' => 'Categories',
'titleClasses' => ['app-cl-product-code2'],
])

@section('content')

<table>

<tr>

<th>No.</th>

<th>Code</th>

<th>Name</th>

</tr>

@foreach($categories as $category)

<tr>

<td>{{$loop->iteration}}</td>

<td>

<a class="catcode" href="{{route('categories.view',['category'=>$category['code']])}}">

{{$category['code']}}

</a>

</td>

<td class="catcode2">{{$category['name']}}</td>

</tr>

@endforeach

</table>

@endsection