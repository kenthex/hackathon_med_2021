@extends('catalog.site')

@section('content')
    <h1>Личный кабинет</h1>
    <p>Добро пожаловать, {{ auth()->user()->name }}</p>
    <p>Это личный кабинет постоянного покупателя нашего интернет-магазина.</p>
    <form action="{{ route('user.logout') }}" method="post">
        @csrf
        <button type="submit" class="btn btn-primary">Выйти</button>
    </form>
    <form class="col-5">
        <h3>Основные показатели</h3>
        <div class="form-group">
            <label for="">Возраст</label>
            <input type="number" class="form-control" id="" placeholder="Укажите Ваш возраст">
        </div>
        <div class="form-group">
            <label for="">Рост</label>
            <input type="number" class="form-control" id="" placeholder="Укажите Ваш рост">
        </div>
        <div class="form-group">
            <label for="">Вес</label>
            <input type="number" class="form-control" id="" placeholder="Укажите Ваш вес">
        </div>
        <div class="form-group">
            <label for="">Образ жизни</label>
            <select class="form-control" id="">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
            </select>
        </div>
    </form>

    <form action="" class="col-5">
        <h3>Показатели крови</h3>
        <div class="form-group">
            <label for="">Гемоглобин</label>
            <input type="number" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Холестерин</label>
            <input type="number" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Гемоглобин</label>
            <input type="number" class="form-control">
        </div>
    </form>
@endsection
