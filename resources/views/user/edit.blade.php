@extends('layouts.main')
@section('content')
    <div>
        <div>
            <form action="{{route('user.update',$user->id)}}" method="post">
                @csrf
                @method('patch')
                <div class="form-group">
                    <label for="f_name" class="form-label">Фамилия</label>
                    <input value="{{$user->f_name}}" type="text" name="f_name" class="form-control" id="f_name" placeholder="Фамилия">
                    @error('f_name')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="i_name" class="form-label">Имя</label>
                    <input value="{{$user->i_name}}" type="text" name="i_name" class="form-control" id="i_name" placeholder="Имя">
                    @error('i_name')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="m_name" class="form-label">Отчество</label>
                    <input value="{{$user->m_name}}" type="text" name="m_name" class="form-control" id="m_name" placeholder="Отчество">
                    @error('m_name')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="phone" class="form-label">Телефон</label>
                    <input value="{{$user->phone}}" type="text" name="phone" class="form-control" id="phone" placeholder="Телефон">
                    @error('phone')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label for="email" class="form-label">Почта</label>
                    <input type="email" name="email" class="form-control" id="email" placeholder="email" value="{{$user->email}}">
                    @error('email')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <button type="submit" class="btn btn-dark">Редактировать</button>

            </form>
    </div>
@endsection
