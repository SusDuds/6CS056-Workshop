@extends('layouts.app')

@section('title', 'Student details')
@section('section', 'Students')
@section('heading', $student->name)
@section('description', 'Student details.')

@section('actions')
    <a href="/students/{{ $student->id }}/edit" class="button button-primary">Edit student</a>
@endsection

@section('content')
    @if(session('success'))
        <div class="alert">{{ session('success') }}</div>
    @endif

    <section class="panel detail-panel">
        <dl class="detail-grid">
            <div class="detail-item"><dt>Student ID</dt><dd>#{{ $student->id }}</dd></div>
            <div class="detail-item"><dt>Full name</dt><dd>{{ $student->name }}</dd></div>
            <div class="detail-item"><dt>Email address</dt><dd>{{ $student->email }}</dd></div>
            <div class="detail-item"><dt>Phone</dt><dd>{{ $student->phone }}</dd></div>
            <div class="detail-item"><dt>Date of birth</dt><dd>{{ $student->date_of_birth ?: '—' }}</dd></div>
            <div class="detail-item"><dt>Address</dt><dd>{{ $student->address ?: '—' }}</dd></div>
        </dl>
        <div class="detail-actions">
            <a href="/students" class="button">Back to students</a>
            <form action="/students/{{ $student->id }}" method="POST" class="inline-form" onsubmit="return confirm('Delete this student?')">
                @csrf
                @method('DELETE')
                <button type="submit" class="button button-danger">Delete student</button>
            </form>
        </div>
    </section>
@endsection
