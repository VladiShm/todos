@extends('layouts.main')
@push('head')
    <title>Редактировать категорию</title>
@endpush

@section('main-section')
<div class="container">
    <div class="d-flex justify-content-between align-content-center my-5">
        <div class="h2">Редактировать категорию</div>
        <a href="{{route('todo.home')}}" class="btn btn-primary btn-lg">Назад</a>
    </div>
    <div class="card">
        <div class="card-body">
            <form action="{{route("category.update")}}" method="post">
                @csrf
                <label for="" class="form-label mt-4">Название</label>
                <input type="text" name="category" class="form-control"  placeholder="Введите название" value="{{$cat->category}}">
                <div class="text-danger">
                    @error('category')
                    {{$message}}
                    @enderror
                </div>
                 <input type="number" name='id' value="{{$cat->id}}" hidden>
                <button class="btn btn-primary btn-lg mt-4">Изменить</button>
            </form>

        </div>
    </div>
</div>
@endsection