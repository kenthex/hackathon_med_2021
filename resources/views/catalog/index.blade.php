@extends('catalog.site')

@section('content')
    <h1>Добро пожаловать!</h1>

    <p>
        Мы помогаем приобретать необходимые БАД в соответствии с Вашим ритмом жизни,
        повседневными привычками и с показателями здоровья. Одна из основных целей
        приложения – научить потребителей осознанному подходу к приему БАД.
    </p>

    <h2>Разделы каталога</h2>
    <div class="row">
        @foreach ($roots as $root)
            @include('catalog.part.category', ['category' => $root])
        @endforeach
    </div>
@endsection
