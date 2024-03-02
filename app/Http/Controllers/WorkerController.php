<?php

namespace App\Http\Controllers;

use App\Http\Requests\Worker\StoreRequest;
use App\Http\Requests\Worker\UpdateRequest;
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

    public function store(StoreRequest $request)
    {
        $data = $request->validated();
        $data['is_married'] = isset($data['is_married']);
        Worker::create($data);
        return redirect()->route('worker.create');
    }

    public function edit(Worker $worker)
    {
        return view('worker.edit', compact('worker'));
    }

    public function update(UpdateRequest $request, Worker $worker)
    {
//     return 'this show action of Worker Controller';
//        $worker = Worker::find(2);
//        $worker->update([
//            'name' => 'Karl',
//            'surname' => 'Petrov'
//        ]);
//        $worker->name = 'New name';
//        $worker->save();
//        return 'Was updated';

        $data = $request->validated();
        $data['is_married'] = isset($data['is_married']);
        $worker->update($data);
        return redirect()->route('worker.show', $worker->id);
    }

    public function delete(Worker $worker)
    {
//        return 'this show action of Worker Controller';
//        $worker = Worker::find(2);
//        $worker->delete();
//        return 'Was deleted';
        $worker->delete();
        return redirect()->route('worker.index');
    }
}
