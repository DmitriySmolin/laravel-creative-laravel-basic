<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Worker;

class WorkerController extends Controller
{
    public function index()
    {
//      return 'this index action of Worker Controller';
        $workers = Worker::all();
        foreach ($workers as $worker) {
            dump($worker->name);
        }
    }

    public function show()
    {
//     return 'this show action of Worker Controller';
        $worker = Worker::find(2);
        dump($worker->toArray());
    }

    public function create()
    {
        $worker = [
            'name' => 'Mark',
            'surname' => 'Markov',
            'email' => 'markov@mail.ru',
            'age' => 20,
            'description' => 'I"m Mark',
            'is_married' => false,
        ];

        Worker::create($worker);

        return 'Ivan was created';
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
