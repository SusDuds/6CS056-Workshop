@extends('layouts.app')

@section('title', 'Add course')
@section('section', 'Courses')
@section('heading', 'Add course')
@section('description', 'Enter the course details below.')

@section('content')
    <section class="panel form-panel">
        <form action="{{ route('courses.store') }}" method="POST" class="form-body">
            @csrf
            @include('course._form')
            <div class="form-actions">
                <button type="submit" class="button button-primary">Save course</button>
                <a href="{{ route('courses.index') }}" class="button">Cancel</a>
            </div>
        </form>
    </section>
@endsection
