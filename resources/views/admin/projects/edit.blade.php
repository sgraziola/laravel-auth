@extends('layouts.app')

@section('content')

<div class="container mb-5">
    <h1 class="py-5"> Edit Project: {{$project->title}}</h1>
    @include('partials.error')
    <form action="{{route('admin.projects.update', $project->slug)}}" method="post" class="project p-3">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror" placeholder="project title" aria-describedby="titleHelper" value="{{$project->title}}">
            <small id="nameHelper" class="text-muted">Add the project name here</small>
        </div>
        <div class="mb-3">
            <label for="thumb" class="form-label">Thumb</label>
            <input type="text" name="thumb" id="thumb" class="form-control @error('thumb') is-invalid @enderror" placeholder="project thumb" aria-describedby="thumbHelper" value="{{$project->thumb}}">
            <small id="thumbHelper" class="text-muted">Add the project thumb here</small>
        </div>
        <div class="mb-3">
            <label for="language" class="form-label">Language</label>
            <input type="text" name="language" id="language" class="form-control @error('language') is-invalid @enderror" placeholder="project language" aria-describedby="languageHelper" value="{{$project->language}}">
            <small id="languageHelper" class="text-muted">Add the project language here</small>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

@endsection