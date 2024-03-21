<?php

namespace App\Http\Controllers;

use App\Http\Requests\Worker\StoreRequest;
use App\Http\Requests\Worker\UpdateRequest;
use App\Http\Requests\Worker\IndexRequest;
use Illuminate\Http\Request;
use App\Models\Worker;

class WorkerController extends Controller
{
    public function index(IndexRequest $request)
    {
        $data = $request->validated();
        $workerQuery = Worker::query();
      
      if(isset($data['name'])) {
          $workerQuery->where('name','like',"%{$data['name']}%");
        }

      if(isset($data['surname'])) {
        $workerQuery->where('surname','like',"%{$data['surname']}%");
      }

      if(isset($data['email'])) {
          $workerQuery->where('email','like',"%{$data['email']}%");
      }

      if(isset($data['from'])) {
        $workerQuery->where('age','>',$data['from']);
      }

      if(isset($data['to'])) {
        $workerQuery->where('age','<',$data['to']);
      }

      if(isset($data['description'])) {
          $workerQuery->where('description','like',"%{$data['description']}%");
      }

      if(isset($data['is_married'])) {
          $workerQuery->where('is_married', true);
      }
      
        $workers = $workerQuery->paginate(4);
        $workers->setPath(url('https://cc80f3ae-4328-40ba-8d8d-b2d594a8052a-00-31odv7pgvrjcu.pike.replit.dev/workers')); 
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
//       $worker = [
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
        return redirect()->route('worker.index');
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
