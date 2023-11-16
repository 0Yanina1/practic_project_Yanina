@extends('layouts.app')
@section('content')
    <div class = "container">
    <div>
        <div>
            <form action="{{route('user.update',$user->id)}}" method="post">
                @csrf
                @method('patch')
                <div class="form-group">
                    <label for="last_name" class="form-label">Фамилия</label>
                    <input value="{{$user->last_name}}" type="text" name="last_name" class="form-control" id="last_name" placeholder="Фамилия">
                    @error('last_name')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="first_name" class="form-label">Имя</label>
                    <input value="{{$user->first_name}}" type="text" name="first_name" class="form-control" id="first_name" placeholder="Имя">
                    @error('first_name')
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
                <div class="form-group mb-3">
                    <label for="role">Roles</label>
                    <select multiple class="form-control" id="role" name = "role_name[]">
                        @foreach($roles as $role)
                            <option
                                @foreach($user->roles as $userRole)
                                    {{$role->name === $userRole->name ? 'selected' : ''}}
                                @endforeach
                                value="{{$role->name}}">{{$role->name}}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-dark">Редактировать</button>

            </form>
    </div>
@endsection
