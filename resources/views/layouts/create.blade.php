@extends('layouts.main')
@push('head')
    <title>Добавить Todo</title>
@endpush

@section('main-section')
<div class="container">
    <div class="d-flex justify-content-between align-content-center my-5">
        <div class="h2">Добавить/Список дел</div>
        <a href="{{route('todo.home')}}" class="btn btn-primary btn-lg">Назад</a>
    </div>
    <div class="card">
        <div class="card-body">
            <form action="{{route("todo.store")}}" method="post">
                @csrf
                <label for="" class="form-label mt-4">Название</label>
                <input type="text" name="name" class="form-control"  placeholder="Введите название">
                <div class="text-danger">
                    @error('name')
                    {{$message}}
                    @enderror
                </div>
                <label for="" class="form-label mt-4">Описание</label>
                <input type="text" name="work" class="form-control" placeholder="Введите описание">
                <div class="text-danger">
                    @error('work')
                    {{$message}}
                    @enderror
                </div>
                <label for="" class="form-label mt-4">Название</label>
                <input type="date" name="date" class="form-control" placeholder="Введите название">
                <div class="text-danger">
                    @error('date')
                    {{$message}}
                    @enderror
                </div>
                <div>
                    <label for="" class="form-label mt-4">Категория</label>
                    <select class="form-select form-select-md" name="category" id="category" placeholder="Выберите категорию">
                        @foreach($category as $cat)
                            <option value="{{ $cat->category }}">{{ $cat->category }}</option>
                        @endforeach
                    </select>
                </div>
                <button class="btn btn-primary btn-lg mt-4">Добавить</button>
            </form>
        </div>
    </div>
</div>
@endsection