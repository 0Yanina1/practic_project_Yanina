@extends('layouts.app')
@section('content')
    <div class = "container">
    <div>
        <div>
            <form action="{{route('user.store')}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="last_name" class="form-label">Фамилия</label>
                    <input value="{{old('last_name')}}" type="text" name="last_name" class="form-control" id="last_name" placeholder="Фамилия">
                    @error('last_name')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="first_name" class="form-label">Имя</label>
                    <input value="{{old('first_name')}}" type="text" name="first_name" class="form-control" id="first_name" placeholder="Имя">
                    @error('first_name')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="m_name" class="form-label">Отчество</label>
                    <input value="{{old('m_name')}}" type="text" name="m_name" class="form-control" id="m_name" placeholder="Отчество">
                    @error('m_name')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="phone" class="form-label">Телефон</label>
                    <input value="{{old('phone')}}" type="text" name="phone" class="form-control" id="phone" placeholder="Телефон">
                    @error('phone')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="email" class="form-label">Почта</label>
                    <input type="email" name="email" class="form-control" id="email" placeholder="email" value="{{old('email')}}">
                    @error('email')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label for="password" class="form-label">Пароль</label>
                    <input value="{{old('password')}}" type="text" name="password" class="form-control" id="password" placeholder="password">
                    @error('password')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label for="role">Roles</label>
                    <select multiple class="form-control" id="role" name = "role_name[]">
                        @foreach($roles as $role)
                        <option value="{{$role->name}}">{{$role->name}}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-dark">Добавить</button>

            </form>
    </div>
@endsection
