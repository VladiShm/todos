<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\Request;
use App\Models\todos;

class todosController extends Controller
{
    public function index(){
        $todos = todos::all();
        $data = compact("todos");
        return view('welcome') -> with($data);
    }
    public function showCategory()
    {
        $category = category::all();
        return view('layouts.create', ['category' => $category]);

    }
    public function store(Request $request)
    {
        $request->validate(
            [
                'name' => 'required',
                'work' => 'required',
                'date' => 'required',
                'category' => 'required'
            ]
            );
            $categoryId = category::where('category', $request['category'])->value('id');
            $todo = new todos;
            $todo->name = $request['name'];
            $todo->work = $request['work'];
            $todo->date = $request['date'];
            $todo->category_id = $categoryId;
            $todo->save();
        return redirect(route('todo.home'));
    }



    //add category
    public function cat(Request $request)   
    {
        $request->validate(
            [
                'category' => 'required',
            ]
            );
            $categor = new category;
            $categor->category = $request['category'];  
            $categor->save();
        return redirect(route('todo.home'));
    }

    public function delete($id)
    {
        todos::find($id)->delete();
        return redirect(route('todo.home'));
    }

    public function deleteCategory($id)
    {
        category::find($id)->delete();
        return redirect(route('todo.home'));
    }


    public function edit($id)
    {
        $todo = todos::find($id);
        $data = compact('todo');
        return view('layouts.update') -> with($data);
    }
    public function editCategory($id)
    {
        $cat = category::find($id);
        $data = compact('cat');
        return view('layouts.updateCategory') -> with($data);
    }

    public function updateData(Request $request)
    {
         $request->validate(
            [
                'name' => 'required',
                'work' => 'required',
                'date' => 'required'
            ]
            );
            $id = $request['id'];
            $todo = todos::find($id);
            $todo->name = $request['name'];
            $todo->work = $request['work'];
            $todo->date = $request['date'];
            $todo->save();
        return redirect(route('todo.home'));
    }

     public function updateCategory(Request $request)
    {
        $request->validate(
            [
                'category' => 'required',
            ]
            );
            $id = $request['id'];
            $categor = category::find($id);
            $categor->category = $request['category'];  
            $categor->save();
        return redirect(route('todo.home'));
    }
}
