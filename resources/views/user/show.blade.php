@extends('layouts.main')
@section('content')
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
                    <td>{{$user->f_name}}</a></td>
                    <td>{{$user->i_name}}</a></td>
                    <td>{{$user->m_name}}</a></td>
                    <td>{{$user->phone}}</a></td>
                    <td>{{$user->email}}</a></td>
                </tr>
                </tbody>
            </table>
            <a  class="btn btn-dark mb-3" href="{{route('user.index')}}">Back</a> <br>
            <a class="btn btn-dark mb-3 " href="{{route('user.edit', $user->id)}}">Редактировать</a><br>
            <form action="{{route('user.delete',$user->id)}}" method="post">
                @csrf
                @method('delete')
                <input type="submit" class="btn btn-dark mb-3" value="Удалить">
            </form>

        </div>
    </div>
@endsection
