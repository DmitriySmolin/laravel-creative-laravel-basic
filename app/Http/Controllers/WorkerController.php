<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Worker;

class WorkerController extends Controller
{
    public function index() 
    {
      return 'this index action of Worker Controller';  
    }

   public function show() 
   {
     return 'this show action of Worker Controller';  
   }

   public function create() 
   {
     $worker = [
       'name' => 'Ivan',
       'surname' => 'Ivanov',
       'email' => 'invanov@mail.ru',
       'age' => 20,
       'description' => 'I"m Ivan',
       'is_married' => false,
     ];
     
     Worker::create($worker);
     
     return 'Ivan was created';  
   }

   public function update() 
   {
     return 'this show action of Worker Controller';  
   }

   public function delete() 
   {
     return 'this show action of Worker Controller';  
   }
}
