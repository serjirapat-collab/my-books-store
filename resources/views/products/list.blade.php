@extends('layouts.main', [
    'title' => 'Products',
    'titleClasses' => ['app-cl-product-code2'],
])
@section('content')
    <table>

        <tr>
            <th>No.</th>

            <th>Image</th>

            <th>Code</th>

            <th>Category</th>

            <th>Name</th>

        </tr>
        @foreach ($products as $product)
            <tr>

                <td>{{ $loop->iteration }}</td>

                <td>

                    <img src="{{ asset('images/products/' . $product['code'] . '.jpg') }}" class="app-cmp-product-image">

                </td>

                <td>

                    <a class="procode" href="{{ route('products.view', ['product' => $product['code']]) }}">

                        <em>{{ $product['code'] }}</em>

                    </a>

                </td>

                <td>

                    <a class="catcode" href="{{ route('categories.view', ['category' => $product['catCode']]) }}">
                        {{ $categories[$product['catCode']]['name'] }}
                    </a>
                </td>
                <td>{{ $product['name'] }}</td>
            </tr>
        @endforeach
    </table>
@endsection
