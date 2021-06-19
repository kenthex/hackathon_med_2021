<div class="col-md-6 mb-4">
    <div class="card">
        <div class="card-header">
            <h3>{{ $category->name }}</h3>
{{--            @if( (auth()->user()->vit_a < 2) && str_contains($category->slug, 'category-a'))--}}
{{--                <p style="color: #d39e00;">* рекомендовано Вам</p>--}}
{{--            @endif--}}
{{--            @if( (auth()->user()->vit_b1 < 2) && str_contains($category->slug, 'category-b'))--}}
{{--                <p style="color: #d39e00;">* рекомендовано Вам</p>--}}
{{--            @endif--}}
        </div>
        <div class="card-body p-0">
{{--            <img src="https://via.placeholder.com/400x120" alt="" class="img-fluid">--}}
        </div>
        <div class="card-footer">
            <a href="{{ route('catalog.category', ['slug' => $category->slug]) }}"
               class="btn btn-dark">Перейти в раздел</a>
        </div>
    </div>
</div>
