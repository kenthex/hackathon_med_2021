@extends('catalog.site')

@section('content')
    <h1>Личный кабинет</h1>
    <p>Добро пожаловать, {{ auth()->user()->name }}</p>
    <p>Это личный кабинет постоянного покупателя нашего интернет-магазина.</p>
    <form action="{{ route('user.logout') }}" method="post">
        @csrf
        <button type="submit" class="btn btn-primary">Выйти</button>
    </form>
    <form class="col-5" action="{{ route('user.save_main', auth()->user()->id) }}" method="post">
        <h3>Основные показатели</h3>
        <div class="form-group">
            <label for="">Возраст</label>
            <input type="number" name="age" class="form-control" id="age" placeholder="{{ auth()->user()->age ? auth()->user()->age : "Укажите Ваш возраст" }}" value="{{ auth()->user()->age }}">
        </div>
        <div class="form-group">
            <label for="">Рост</label>
            <input type="number" name="height" class="form-control" id="height" placeholder="{{ auth()->user()->height ? auth()->user()->height : "Укажите Ваш рост" }}" value="{{ auth()->user()->height }}">
        </div>
        <div class="form-group">
            <label for="">Вес</label>
            <input type="number" name="weight" class="form-control" id="weight" placeholder="Укажите Ваш вес" value="{{ auth()->user()->weight }}">
        </div>
        <div class="form-group">
            <label for="">Образ жизни</label>
            <select class="form-control" id="lifestyle" name="lifestyle">
{{--                <option disabled selected>Выберите</option>--}}
                <option {{ auth()->user()->lifestyle == 1 ? "selected" : "" }}>1</option>
                <option {{ auth()->user()->lifestyle == 2 ? "selected" : "" }}>2</option>
                <option {{ auth()->user()->lifestyle == 3 ? "selected" : "" }}>3</option>
            </select>
        </div>
        @csrf
        <button type="submit" class="btn btn-primary">Сохранить</button>
    </form>

    <form action="{{ route('user.save_blood', auth()->user()->id) }}" method="post" class="col-5">
        <h3>Показатели крови</h3>
        <div class="form-group">
            <label for="">Гемоглобин</label>
            <input type="number" id="hemoglobin" name="hemoglobin" placeholder="Укажите значение гемоглобина" value="{{ auth()->user()->hemoglobin }}" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Холестерин</label>
            <input type="number" id="cholesterol" name="cholesterol" placeholder="Укажите значение холестерина" value="{{ auth()->user()->cholesterol }}" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Витамин А</label>
            <input type="number" id="vit_a" name="vit_a" placeholder="Укажите значение витамина А" value="{{ auth()->user()->vit_a }}"  class="form-control">
        </div>
        <div class="form-group">
            <label for="">Витамин B1</label>
            <input type="number" id="vit_b1" name="vit_b1" placeholder="Укажите значение витамина B1" value="{{ auth()->user()->vit_b1 }}" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Витамин B3</label>
            <input type="number" id="vit_b3" name="vit_b3" placeholder="Укажите значение витамина B3" value="{{ auth()->user()->vit_b3 }}" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Витамин B6</label>
            <input type="number" id="vit_b6" name="vit_b6" placeholder="Укажите значение витамина B6" value="{{ auth()->user()->vit_b6 }}" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Витамин B12</label>
            <input type="number" id="vit_b12" name="vit_b12" placeholder="Укажите значение витамина B12" value="{{ auth()->user()->vit_b12 }}" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Витамин C</label>
            <input type="number" id="vit_c" name="vit_c" placeholder="Укажите значение витамина C" value="{{ auth()->user()->vit_c }}" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Витамин D</label>
            <input type="number" id="vit_d" name="vit_d" placeholder="Укажите значение витамина D" value="{{ auth()->user()->vit_d }}" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Витамин E</label>
            <input type="number" id="vit_e" name="vit_e" placeholder="Укажите значение витамина e" value="{{ auth()->user()->vit_e }}" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Витамин K</label>
            <input type="number" id="vit_k" name="vit_k" placeholder="Укажите значение витамина K" value="{{ auth()->user()->vit_k }}" class="form-control">
        </div>
        @csrf
        <button type="submit" class="btn btn-primary">Сохранить</button>
    </form>
@endsection
