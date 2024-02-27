<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Worker;

class WorkerController extends Controller
{
    public function index()
    {
        $workers = Worker::all();
        return view('worker.index', compact('workers'));
    }

    public function show(Worker $worker = null)
    {
//        $worker = Worker::findOrFail($worker);
//        dd($worker);
        return view('worker.show', compact('worker'));
    }

//    index
//    show
//    create
//    store
//    edit
//    update
//    delete (destroy)

    public function create()
    {
//        $worker = [
//            'name' => 'Mark',
//            'surname' => 'Markov',
//            'email' => 'markov@mail.ru',
//            'age' => 20,
//            'description' => 'I"m Mark',
//            'is_married' => false,
//        ];
//
//        Worker::create($worker);
//
//        return 'Ivan was created';
        return view('worker.create');
    }

    public function update()
    {
//     return 'this show action of Worker Controller';
        $worker = Worker::find(2);
        $worker->update([
            'name' => 'Karl',
            'surname' => 'Petrov'
        ]);
//        $worker->name = 'New name';
//        $worker->save();
        return 'Was updated';
    }

    public function delete()
    {
//        return 'this show action of Worker Controller';
        $worker = Worker::find(2);
        $worker->delete();
        return 'Was deleted';
    }
}
