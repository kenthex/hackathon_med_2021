<div class="col-md-6 mb-4">
    <div class="card">
        <div class="card-header">
            <h4>{{ $product->name }}</h4>
            @if( \Illuminate\Support\Facades\Auth::check() )


                @if( (auth()->user()->vit_a < 2) && str_contains($product->slug, 'vitamin-A'))
                    <p style="color: #d39e00;">* рекомендовано Вам</p>
                @endif
                @if( (auth()->user()->vit_b1 < 2) && str_contains($product->slug, 'vitamin-B1'))
                    <p style="color: #d39e00;">* рекомендовано Вам</p>
                @endif
                @if( (auth()->user()->vit_b3 < 3) && str_contains($product->slug, 'vitamin-B3'))
                    <p style="color: #d39e00;">* рекомендовано Вам</p>
                @endif
                @if( (auth()->user()->vit_b6 < 8) && str_contains($product->slug, 'vitamin-B6'))
                    <p style="color: #d39e00;">* рекомендовано Вам</p>
                @endif

                @if( (auth()->user()->vit_b12 < 189) && str_contains($product->slug, 'vitamin-B12'))
                    <p style="color: #d39e00;">* рекомендовано Вам</p>
                @endif

                @if( (auth()->user()->vit_d < 3) && str_contains($product->slug, 'vitamin-D'))
                    <p style="color: #d39e00;">* рекомендовано Вам</p>
                @endif

                @if( (auth()->user()->vit_e < 5) && str_contains($product->slug, 'vitamin-E'))
                    <p style="color: #d39e00;">* рекомендовано Вам</p>
                @endif

                @if( (auth()->user()->hemoglobin < 130) && str_contains($product->slug, 'Ferrum'))
                    <p style="color: #d39e00;">* рекомендовано Вам</p>
                @endif

            @endif
        </div>
        <div class="card-body p-0">
            <img width="200" height="200" src="{{ $product->image }}" alt="" class="img-fluid">
        </div>
        <div class="card-footer">
            <a href="{{ route('catalog.product', ['slug' => $product->slug]) }}"
               class="btn btn-dark">Перейти к товару
            </a>
        </div>
    </div>
</div>
