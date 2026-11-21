@extends('layouts.app')

@section('title', 'Course details')
@section('section', 'Courses')
@section('heading', $course->name)
@section('description', 'Course details.')

@section('actions')
    <a href="/courses/{{ $course->id }}/edit" class="button button-primary">Edit course</a>
@endsection

@section('content')
    @if(session('success'))
        <div class="alert">{{ session('success') }}</div>
    @endif

    <section class="panel detail-panel">
        <dl class="detail-grid">
            <div class="detail-item"><dt>Course ID</dt><dd>#{{ $course->id }}</dd></div>
            <div class="detail-item"><dt>Course name</dt><dd>{{ $course->name }}</dd></div>
            <div class="detail-item"><dt>Duration</dt><dd>{{ $course->duration }} {{ $course->duration === 1 ? 'week' : 'weeks' }}</dd></div>
            <div class="detail-item"><dt>Fee</dt><dd>{{ number_format((float) $course->fee, 2) }}</dd></div>
            <div class="detail-item"><dt>Difficulty</dt><dd>{{ $course->difficulty }}</dd></div>
            <div class="detail-item"><dt>Status</dt><dd><span class="status {{ $course->is_active ? '' : 'inactive' }}">{{ $course->is_active ? 'Active' : 'Inactive' }}</span></dd></div>
            <div class="detail-item detail-item-full"><dt>Description</dt><dd>{{ $course->description ?: '—' }}</dd></div>
        </dl>
        <div class="detail-actions">
            <a href="/courses" class="button">Back to courses</a>
            <form action="/courses/{{ $course->id }}" method="POST" class="inline-form" onsubmit="return confirm('Delete this course?')">
                @csrf
                @method('DELETE')
                <button type="submit" class="button button-danger">Delete course</button>
            </form>
        </div>
    </section>
@endsection
