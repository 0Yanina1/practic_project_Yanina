@extends('layouts.app')
@section('content')
    <div class = "container">
        <div>

            <table class="table mt-3">
                <thead class="thead-dark">
                <tr>
                    <th scope="col">Фамилия</th>
                    <th scope="col">Имя</th>
                    <th scope="col">Отчество</th>
                    <th scope="col">Телефон</th>
                    <th scope="col">Почта</th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                <tr>
                    <td><a href="{{route('user.show', $user->id)}}">{{$user->last_name}}</a></td>
                    <td><a href="{{route('user.show', $user->id)}}">{{$user->first_name}}</a></td>
                    <td><a href="{{route('user.show', $user->id)}}">{{$user->m_name}}</a></td>
                    <td><a href="{{route('user.show', $user->id)}}">{{$user->phone}}</a></td>
                    <td><a href="{{route('user.show', $user->id)}}">{{$user->email}}</a></td>
                </tr>
                @endforeach

                </tbody>

            </table>
            @hasexactroles('admin|manager|developer')
                <a class="btn btn-dark" href="{{route('user.create')}}">Добавить</a>
            @endhasexactroles
        </div>
    </div>
@endsection
