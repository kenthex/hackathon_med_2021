<div class="col-md-5 mb-4">
    <div class="card">
        <div class="card-header">
            <h5>{{ $category->name }}</h5>
        </div>
        <div class="card-body p-0">
{{--            <img src="https://via.placeholder.com/400x120" alt="" class="img-fluid">--}}
        </div>
        <div class="card-footer">
            <a href="{{ route('catalog.category', ['slug' => $category->slug]) }}"
               class="col-12 btn btn-warning">Перейти в раздел</a>
        </div>
    </div>
</div>
