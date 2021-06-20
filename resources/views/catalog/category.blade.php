@extends('catalog.site')

@section('content')
    <h4>{{ $category->name }}</h4>
    <p>{{ $category->content }}</p>
    <div class="row">
        @foreach ($category->products as $product)
            @include('catalog.part.product')
        @endforeach
    </div>
@endsection
