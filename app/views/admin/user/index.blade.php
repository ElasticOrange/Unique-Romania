@extends('admin.layout.master')

@section('content')
    <table class="table-striped">
        <thead>
            <tr>
                <th>
                    Username
                </th>
                <th>
                    Creat la
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
                <tr>
                    <td>
                        {{ $user->username }}
                    </td>
                    <td>
                        {{ $user->created_at->format('Y-m-d') }}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@stop
