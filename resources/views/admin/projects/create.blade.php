@extends('layouts.admin')

@section('content')

<div class="container mb-5">
    <h1 class="py-5"> Add Project </h1>
    <form action="{{route('admin.projects.store')}}" method="post" class="card p-3">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" id="title" class="form-control" placeholder="player name" aria-describedby="nameHelper">
            <small id="nameHelper" class="text-muted">Add the project name here</small>
        </div>
        <div class="mb-3">
            <label for="thumb" class="form-label">Thumb</label>
            <input type="text" name="thumb" id="thumb" class="form-control" placeholder="project thumb" aria-describedby="thumbHelper">
            <small id="thumbHelper" class="text-muted">Add the project thumb here</small>
        </div>
        <div class="mb-3">
            <label for="language" class="form-label">Language</label>
            <input type="text" name="language" id="language" class="form-control" placeholder="project language" aria-describedby="languageHelper">
            <small id="languageHelper" class="text-muted">Add the project language here</small>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

@endsection