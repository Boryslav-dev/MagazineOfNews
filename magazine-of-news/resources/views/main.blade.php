@extends('layouts.app')

@section('title-block')Главная@endsection

@section('hero')
    @parent
    <div class="container py-5 border-bottom border-success border-2">
        <p class="h1">Главная</p>
    </div>
@endsection

@section('content')
    @if ($message = Session::get('success'))
        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong>{{ $message }}</strong>
        </div>
    @endif
    <div class="container mb-5">

        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            @foreach($data as $key)
                <div class="col-12 col-md-4 col-sm-12 col-lg-4">
                    <div class="card shadow-sm">
                        <img height="173" src="...">
                        <div class="card-body">
                            <h5 class="card-title">{{$key->Title}}</h5>
                            <p class="card-text">{{$key->Description}}</p>
                            <div class="row">
                                <div class="col-md-6 col-6 mt-2">
                                    <h4 class="card-title">{{$key->name}}</h4>
                                </div>
                                <div class="col-md-6 col-6">
                                    <a href="" class="btn btn-lg btn-outline-secondary">Подробнее</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer d-flex justify-content-between align-items-center mt-3">
                            @if (session('admin'))
                                <div class="btn-group">
                                    <a href="" class="btn btn-sm btn-outline-danger">Удалить</a>
                                    <a href="" class="btn btn-sm btn-outline-info">Редактировать</a>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
@endsection

@section('aside')
    @parent
    <p>Тут инфа про заказ</p>
    @if (session('admin'))
        <a href="{{route('create')}}" class="btn btn-sm btn-outline-info">Добавить товар</a>
    @endif
@endsection
