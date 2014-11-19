@extends('admin.layout.master')

@section('content')
   <h1>Lista de useri care trebuie aprobati:</h1><br />
<div class="row">
   <div class="col-md-12">
        <table class="table table-condensed">
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
                @if($entries->count())               
                    @foreach ($entries as $entry)
                    <tr> 
                        <td>{{ $entry->created_at->format('F d, Y h:ia') }}</td>
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
