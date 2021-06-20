@extends('catalog.site')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h5>{{ $product->name }}</h5>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-3">
                            <img width="200" height="200" src="{{ $product->image }}"
                                 alt="" class="img-fluid">
                        </div>
                        <div class="col-9">
                            <p> <span style="font-weight: bold;">Цена:</span> {{ number_format($product->price, 2, '.', '') }}</p>
                            <p class="mt-4 mb-0"><span style="font-weight: bold;">Описание:</span> {{ $product->content }}</p>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="row">
                        <div class="col-md-6">
                            @isset($product->category)
                                Категория:
                                <a href="{{ route('catalog.category', ['slug' => $product->category->slug]) }}">
                                    {{ $product->category->name }}
                                </a>
                            @endisset
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
