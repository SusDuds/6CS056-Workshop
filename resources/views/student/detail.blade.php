@extends('layouts.app')

@section('title', 'Student details')
@section('section', 'Students')
@section('heading', $student->name)
@section('description', 'Student details.')

@section('actions')
    <a href="{{ route('students.edit', $student) }}" class="button button-primary">Edit student</a>
@endsection

@section('content')
    <section class="panel detail-panel">
        <dl class="detail-grid">
            <div class="detail-item"><dt>Student ID</dt><dd>#{{ $student->id }}</dd></div>
            <div class="detail-item"><dt>Full name</dt><dd>{{ $student->name }}</dd></div>
            <div class="detail-item"><dt>Email address</dt><dd>{{ $student->email }}</dd></div>
            <div class="detail-item"><dt>Phone</dt><dd>{{ $student->phone }}</dd></div>
            <div class="detail-item"><dt>Date of birth</dt><dd>{{ $student->date_of_birth?->format('d M Y') ?? '—' }}</dd></div>
            <div class="detail-item"><dt>Age</dt><dd>{{ $student->age ?? 'Not available' }}</dd></div>
            <div class="detail-item detail-item-full"><dt>Address</dt><dd>{{ $student->address ?: '—' }}</dd></div>
        </dl>
        <div class="detail-actions">
            <a href="{{ route('students.index') }}" class="button">Back to students</a>
            <x-delete-form :action="route('students.destroy', $student)" label="Delete student" button-class="button button-danger" confirm="Delete this student?" />
        </div>
    </section>
@endsection
