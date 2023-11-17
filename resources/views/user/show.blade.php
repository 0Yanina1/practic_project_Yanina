@extends('layouts.app')
@section('content')
    <div class = "container">
    <div>
        <div>
            <table class="table">
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
                <tr>
                    <td>{{$user->last_name}}</a></td>
                    <td>{{$user->first_name}}</a></td>
                    <td>{{$user->m_name}}</a></td>
                    <td>{{$user->phone}}</a></td>
                    <td>{{$user->email}}</a></td>
                </tr>
                </tbody>
            </table>
            <a class="btn btn-dark mb-3" href="{{route('user.index')}}">Back</a> <br>



        </div>
    </div>
@endsection
