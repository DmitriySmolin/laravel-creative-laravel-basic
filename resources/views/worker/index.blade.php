<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
Index page
<hr>
<a href="{{route('worker.create')}}">Добавить</a>
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
            <a href="{{route('worker.show', $worker->id)}}">Просмотреть</a>
        </div>
        <div>
            <a href="{{route('worker.edit', $worker->id)}}">Редактировать</a>
        </div>
        <div>
            <form action="{{route('worker.delete', $worker->id)}}" method="POST">
                @csrf
                @method('DELETE')
                <input type="submit" value="Удалить">
            </form>
        </div>
    </div>
    <hr>
@endforeach
</body>
</html>
