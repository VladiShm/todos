@extends('layouts.main')
@push('head')
    <title>Добавить категорию</title>
@endpush

@section('main-section')
<div class="container">
    <div class="d-flex justify-content-between align-content-center my-5">
        <div class="h2">Добавить категорию</div>
        <a href="{{route('todo.home')}}" class="btn btn-primary btn-lg">Назад</a>
    </div>
    <div class="card">
        <div class="card-body">
            <form action="{{route("category.cat")}}" method="post">
                @csrf
                <label for="" class="form-label mt-4">Название</label>
                <input type="text" name="category" class="form-control"  placeholder="Введите название">
                <div class="text-danger">
                    @error('category')
                    {{$message}}
                    @enderror
                </div>
                <button class="btn btn-primary btn-lg mt-4">Добавить</button>
            </form>

        </div>
    </div>
</div>
@endsection