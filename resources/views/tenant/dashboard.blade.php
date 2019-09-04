@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Companies</div>

                <div class="panel-body">
                    <div class="list-group">
                        @foreach ($projects as $project)
                            <a href="/{{ $project->id }}" class="list-group-item">
                                {{ $project->name }}
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
