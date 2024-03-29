@extends('layout.main')
@section('content')
<div>
  <hr>
  <div>
    <a href="{{route('worker.create',[],false)}}">Добавить</a>
  </div>
  <hr>
  <div>
  <form action="{{route('worker.index',[],false)}}">
    <input type="text" name="name" placeholder="name" value="{{request()->get('name')}}" />
    <input type="text" name="surname" placeholder="surname" value="{{request()->get('surname')}}" />
    <input type="text" name="email" placeholder="email" value="{{request()->get('email')}}" />
     <input type="number" name="from" placeholder="from" value="{{request()->get('from')}}" />
     <input type="number" name="to" placeholder="to" value="{{request()->get('to')}}" />
     <input type="text" name="description" placeholder="description" value="{{request()->get('description')}}" />
     <input type="checkbox" for="is_married" name="is_married" {{request()->get('is_married') == 'on' ? 'checked' : ''}} />
     <label id="is_married">Is married</label>
     <input type="submit" value="Отправить" ?>
    <a href="{{route('worker.index',[], false)}}">Сбросить</a>
  </form>
</div>
  <hr>
@foreach($workers as $worker)
    <div>
        <div>Name:{{$worker->name}}</div>
        <div>Surname:{{$worker->surname}}</div>
        <div>Email:{{$worker->email}}</div>
        <div>Age:{{$worker->age}}</div>
        <div>Description:{{$worker->description}}</div>
        <div>Is married:{{$worker->is_married}}</div>
        <div>
            <a href="{{route('worker.show', $worker->id,false)}}">Просмотреть</a>
        </div>
        <div>
            <a href="{{route('worker.edit', $worker->id,false)}}">Редактировать</a>
        </div>
        <div>
            <form action="{{route('worker.delete', $worker->id, false)}}" method="POST">
                @csrf
                @method('DELETE')
                <input type="submit" value="Удалить">
            </form>
        </div>
    </div>
@endforeach
<div class="my-nav">
    {{$workers->withQueryString()->links()}}
</div>
</div>
@endsection