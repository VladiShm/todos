@extends('layouts.main')
@push('head')
    <title>Todo List</title>
@endpush

@section('main-section')
<div class="container">
    <div class="d-flex justify-content-left align-items-center my-5">
        <div class="h2" style="margin-right:20px">Список дел</div>
        <a href="{{route('category.add')}}" class="btn btn-primary btn-lg" style="margin-right:20px">Добавить категорию</a>
        <a href="{{route('todo.create')}}" class="btn btn-primary btn-lg">Добавить действие</a>
    </div>

    <table class="table table-stripped">
        <tr>
            <th>Название</th>
            <th>Дело</th>
            <th>Дата</th>
            <th>Редактировать</th>
            <th>Название категории</th>
            <th>Редактировать категорию</th>
        </tr>
        @foreach ($todos as $todo)
        <tr valign='middle'>
           <td>{{$todo->name}}</td>
           <td>{{$todo->work}}</td>
           <td>{{$todo->date}}</td>
           <td>
               <a href="{{route('todo.delete', $todo->id)}}" class="btn btn-danger btn-sm">Удалить</a>
               <a href="{{route('todo.edit', $todo->id)}}" class="btn btn-success btn-sm">Изменить</a>
           </td>
           <td>{{ \App\Models\category::find($todo->category_id)->category }}</td>
             <td>
               <a href="{{route('category.delete', $todo->category_id)}}" class="btn btn-danger btn-sm">Удалить</a>
               <a href="{{route('category.edit', $todo->category_id)}}" class="btn btn-success btn-sm">Изменить</a>
           </td>
       </tr>
        @endforeach
    </table>
</div>
@endsection