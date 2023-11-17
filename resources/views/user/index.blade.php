@extends('layouts.app')
@section('content')
    <div class="container">
        <div>
{{--            @if(Auth::user()->hasRole('admin') || Auth::user()->hasRole('developer')|| Auth::user()->hasRole('manager'))--}}
                <a class="btn btn-dark" href="{{route('user.create')}}">Добавить</a>
{{--            @endif--}}
            <table class="table table-dark mt-3">
                <thead class="thead-dark">
                <tr>
                    <th scope="col">Фамилия</th>
                    <th scope="col">Имя</th>
                    <th scope="col">Отчество</th>
                    <th scope="col">Телефон</th>
                    <th scope="col">Почта</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{$user->getLastName()}}</td>
                        <td>{{$user->first_name}}</td>
                        <td>{{$user->m_name}}</td>
                        <td>{{$user->phone}}</td>
                        <td>{{$user->email}}</td>
                        <td class = "m-1">
                            @if(Auth::user()->hasRole('admin') || Auth::user()->hasRole('developer'))
                                <a class="btn btn-outline-primary" href="{{route('user.edit', $user->id)}}">Редактировать</a>
                                <br>
                            @endif
                        </td>
                        <td>
                            <form action="{{route('user.delete',$user->id)}}" method="post">
                            @csrf
                            @method('delete')
                            @if(Auth::user()->hasRole('developer'))
                                <input type="submit" class="btn btn-outline-danger" value="Удалить">
                            @endif
                        </form>
                        </td>
                        <td class = "m-1">
                                <a class="btn btn-outline-warning" href="{{route('user.edit_pass', $user->id)}}">Редактировать пароль</a>
                                <br>
                        </td>
                    </tr>
                @endforeach

                </tbody>

            </table>

        </div>
    </div>
@endsection
