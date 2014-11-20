@extends('admin.layout.master')

@section('content')
    <h1>Lista de useri care trebuie aprobati:</h1><br />
    <div class="row">
        <div class="col-md-12">
            @if($entries->count())
            <table class="table table-condensed">
                <thead>
                    <tr>
                        <th>Info</th>
                        <th>Video</th>
                        <th>Article</th>
                        <th>Photos</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($entries as $entry)
                    <tr data-id="{{ $entry->_id }}">
                        <td>
                            <strong>Updated at: </strong>{{ $entry->created_at->format('d-m-Y h:ia') }}<br>
                            <strong>Name: </strong>{{ $entry->name }}<br>
                            <strong>Phone: </strong>{{ $entry->phone }}<br>
                            <strong>Email: </strong>{{ $entry->email }}
                        </td>
                        <td>
                            <iframe class="center-block" width="180" height="100" src="{{ $entry->video }}" frameborder="0" allowfullscreen="true" ></iframe>
                        </td>
                        <td>
                            @if(isset($entry->article['content']))
                                {{ $entry->article['content'] }}
                            @endif
                        </td>
                        <td>
                            @if(isset($entry->pictures))
                                @foreach ($entry->pictures as $picture)
                                    <img src="{{ url('/entry/small-image/'. $picture) }}" class="img-rounded" width="100" height="100" />
                                @endforeach
                            @endif
                        </td>
                        <td>
                            <form action="/admin/entry/approve/" method="put" data-form_approve="true">
                                <input type="hidden" name="id" value="{{ $entry->_id }}" />
                                <input type="submit" value="Approve" class="btn btn-default"/>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            @else
                <p>Unfortunately, there are no entries to be approved.</p>
            @endif
        </div>
    </div>
@stop

@section('js')
    <script src="/js/app/admin/entry/index.js"></script>
@stop
