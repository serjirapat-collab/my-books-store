@extends('layouts.main')

@section('title','Categories')

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

<a href="{{route('categories.view',['category'=>$category['code']])}}">

{{$category['code']}}

</a>

</td>

<td>{{$category['name']}}</td>

</tr>

@endforeach

</table>

@endsection