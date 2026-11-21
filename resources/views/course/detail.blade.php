@extends('layouts.app')

@section('title', 'Course details')
@section('section', 'Courses')
@section('heading', $course->name)
@section('description', 'Course details.')

@section('actions')
    <a href="{{ route('courses.edit', $course) }}" class="button button-primary">Edit course</a>
@endsection

@section('content')
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
            <a href="{{ route('courses.index') }}" class="button">Back to courses</a>
            <x-delete-form :action="route('courses.destroy', $course)" label="Delete course" button-class="button button-danger" confirm="Delete this course?" />
        </div>
    </section>
@endsection
