@extends('layouts.app')
@section('content')
    <div class="container">
        <div>
            <div>
                <form action="{{route('user.update_password',$user->id)}}" method="post">
                    @csrf
                    @method('patch')
                    <div class="form-group mb-3">
                        <label for="password" class="form-label">Введите новый пароль</label>
                        <input type="password" name="password" class="form-control" id="password"
                               placeholder="Новый пароль">
                        @error('password')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="password_confirm" class="form-label">Подтвердите пароль</label>
                        <input type="password" name="password_confirm" class="form-control" id="password_confirm"
                               placeholder="Подтвердите пароль">
                        @error('password_confirm')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-dark">Сохранить</button>

                </form>
                @if (session('error'))
                    {{
        session('error')
    }}
                @endif
            </div>
@endsection
