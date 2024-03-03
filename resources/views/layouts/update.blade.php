@extends('layouts.main')
@push('head')
    <title>Todo List</title>
@endpush

@section('main-section')
<div class="container">
    <div class="d-flex justify-content-between align-content-center my-5">
        <div class="h2">Редактировать/Список дел</div>
        <a href="{{route('todo.home')}}" class="btn btn-primary btn-lg">Назад</a>
    </div>
    <div class="card">
        <div class="card-body">
            <form action="{{route("todo.updateData")}}" method="post">
                @csrf
                <label for="" class="form-label mt-4">Название</label>
                <input type="text" name="name" class="form-control"  placeholder="Введите название" value="{{$todo->name}}">

                <label for="" class="form-label mt-4">Описание</label>
                <input type="text" name="work" class="form-control" placeholder="Введите описание" value="{{$todo->work}}">

                <label for="" class="form-label mt-4">Название</label>
                <input type="date" name="date" class="form-control" placeholder="Введите дату" value="{{$todo->date}}">
                <input type="number" name='id' value="{{$todo->id}}" hidden>
                <button class="btn btn-primary btn-lg mt-4">Изменить</button>
            </form>

        </div>
    </div>
</div>
@endsection