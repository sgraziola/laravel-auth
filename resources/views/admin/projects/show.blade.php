@extends('layouts.admin')

@section('content')

<div class="container py-5">
    <div class="d-flex gap-4">
        <img src="{{$project->thumb}}" alt="{{$project->title}}">
        <div class="details">
            <h2>{{$project->title}}</h2>

            <div class="language">
                Linguaggio usato: {{$project->language}}
            </div>

        </div>
    </div>
</div>


@endsection