@extends('admin.layout.master')

@section('content')
    <h1>Lista de useri care au fost deja aprobati:</h1><br />
    <div class="row">
        <div class="col-md-12">
            @if($entries->count())
            <table class="table table-condensed">
                <thead>
                    <tr>
                        <th>Updated at</th>
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
                    <tr data-id="{{ $entry->_id }}">
                        <td>{{ $entry->updated_at->format('F d, Y h:ia') }}</td>
                        <td>{{ $entry->name }}</td>
                        <td>{{ $entry->phone }}</td>
                        <td>{{ $entry->email }}</td>
                        <td>
                            <iframe class="center-block" width="240" height="135" src="{{ $entry->video }}" frameborder="0" allowfullscreen="true" ></iframe>
                        </td>
                        <td>
                            @if(isset($entry->article['content']))
                                {{ $entry->article['content'] }}
                            @endif
                        </td>
                        <td>
                            @foreach ($entry->pictures as $picture)
                                <img src="{{ url('/entry/small-image/'. $picture) }}" class="img-rounded" />
                            @endforeach
                        </td>
                        <td>
                            <form action="/admin/entry/disapprove/" method="put" data-form_approve="true">
                                <input type="hidden" name="id" value="{{ $entry->_id }}" />
                                <input type="submit" value="Disapprove" class="btn btn-danger"/>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            @else
                <p>Unfortunately, there are no entries to be disapproved.</p>
            @endif
        </div>
    </div>
@stop

@section('js')
    <script src="/js/app/admin/entry/index.js"></script>
@stop
