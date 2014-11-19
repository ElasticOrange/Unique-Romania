@extends('admin.layout.master')

@section('content')
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Created at</th>
                <th>Name</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Video</th>
                <th>Article</th>
                <th>Photos</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($entries as $entry)
            <tr>
                <td>{{ $entry->created_at->format('F d, Y h:ia') }}</td>
                <td>{{ $entry->name }}</td>
                <td>{{ $entry->phone }}</td>
                <td>{{ $entry->email }}</td>
                <td>{{ $entry->video }}</td>
                <td>{{ @$entry->article['content'] }}</td>
                <td>
                    @foreach ($entry->pictures as $picture)
                        {{ $picture }}
                    @endforeach
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@stop
