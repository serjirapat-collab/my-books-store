@extends('layouts.main', [
'title' => 'Products',
'titleClasses' => ['app-cl-product-code2'],
])
@section('content')
    <style>
        dl {
            display: grid;
            grid-template-columns: auto 1fr;
        }

        dt {
            display: flex;
            flex-direction: row;
            font-weight: bold;
        }

        dt::after {
            content: '::';
            padding-left: 1ch;
            padding-right: 1ch;
            margin-left: auto;
        }
    </style>

    <img src="{{ asset('images/products/' . $product['code'] . '.jpg') }}">

    <dl>

        <dt>Code</dt>

        <dd>

            <em class="procode">{{ $product['code'] }}</em>

        </dd>

        <dt>Category</dt>

        <dd>

            <a  class="catcode" href="{{ route('categories.view', ['category' => $product['catCode']]) }}">

                {{ $category['name'] }}

            </a>

        </dd>

        <dt>Name</dt>

        <dd>{{ $product['name'] }}</dd>

    </dl>

    <pre>

{{ $product['description'] }}

</pre>

@endsection
