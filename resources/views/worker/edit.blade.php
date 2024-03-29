@extends('layout.main')
@section('content')
<div>
  <hr>
    <form action="{{route('worker.update', $worker->id, false)}}" method="POST">
        @csrf
        @method('PATCH')
        <div style="margin-bottom: 15px">
            <input type="text" name="name" placeholder="name" value="{{old('name') ?? $worker->name}}">
            @error('name')
            <div>{{$message}}</div>
            @enderror
        </div>
        <div style="margin-bottom: 15px">
            <input type="text" name="surname" placeholder="surname" value="{{old('surname') ?? $worker->surname}}">
            @error('surname')
            <div>{{$message}}</div>
            @enderror
        </div>
        <div style="margin-bottom: 15px">
            <input type="email" name="email" placeholder="email" value="{{old('email') ?? $worker->email}}">
            @error('email')
            <div>{{$message}}</div>
            @enderror
        </div>
        <div style="margin-bottom: 15px">
            <input type="number" name="age" placeholder="age" value="{{old('age') ?? $worker->age}}">
            @error('age')
            <div>{{$message}}</div>
            @enderror
        </div>
        <div style="margin-bottom: 15px">
            <textarea name="description" placeholder="description">
                {{ old('description') ?? $worker->description}}
            @error('description')
            <div>{{$message}}</div>
            @enderror
            </textarea>
        </div>
        <div style="margin-bottom: 15px">
            <input id="isMarried" type="checkbox" name="is_married" {{$worker->checked ? 'checked' : ''}}>
            <label for="is_married">Is Married</label>
        </div>
        <div><input type="submit" value="Сохранить"></div>
    </form>
</div>
@endsection