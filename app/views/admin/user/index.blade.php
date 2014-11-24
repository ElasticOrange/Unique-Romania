@extends('admin.layout.master')

@section('content')
<div class="col-lg-10 col-lg-offset-1">

<h1><i class="fa fa-users"></i> User Administration </h1>

<div class="table-responsive">
    <table class="table table-bordered table-striped">

        <thead>
            <tr>
                <th>Username</th>
                <th>Date/Time Added</th>
                <th></th>
            </tr>
        </thead>

        <tbody>
            @foreach ($users as $user)
            <tr>
                <td>{{ $user->username }}</td>
                <td>{{ $user->created_at->format('d F Y,  h:ia') }}</td>
                <td>
                    <a href="/admin/user/{{ $user->_id }}/edit" class="btn btn-info pull-left" style="margin-right: 3px;">Edit</a>
                    {{ Form::open(['url' => '/admin/user/' . $user->_id, 'method' => 'DELETE']) }}
                    {{ Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                    {{ Form::close() }}
                </td>
            </tr>
            @endforeach
        </tbody>

    </table>
</div>

<a href="/admin/user/create" class="btn btn-success">Adauga User</a>
 
</div>
    
    
    
@stop
