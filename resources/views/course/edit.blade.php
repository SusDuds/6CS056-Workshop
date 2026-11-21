@extends('layouts.app')

@section('title', 'Edit course')
@section('section', 'Courses')
@section('heading', 'Edit course')
@section('description', 'Update the course details.')

@section('content')
    <section class="panel form-panel">
        <form action="{{ route('courses.update', $course) }}" method="POST" class="form-body">
            @csrf
            @method('PUT')
            @include('course._form')
            <div class="form-actions">
                <button type="submit" class="button button-primary">Save changes</button>
                <a href="{{ route('courses.show', $course) }}" class="button">Cancel</a>
            </div>
        </form>
    </section>
@endsection
