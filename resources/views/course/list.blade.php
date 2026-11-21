@extends('layouts.app')

@section('title', 'Courses')
@section('section', 'Courses')
@section('heading', 'Courses')
@section('description', 'Manage course records.')

@section('actions')
    <a href="/courses/create" class="button button-primary">Add course</a>
@endsection

@section('content')
    @if(session('success'))
        <div class="alert">{{ session('success') }}</div>
    @endif

    <section class="panel">
        <div class="panel-header">
            <h2 class="panel-title">All courses</h2>
            <span class="panel-meta">{{ count($courses) }} {{ count($courses) === 1 ? 'record' : 'records' }}</span>
        </div>
        <div class="table-wrap">
            <table class="data-table">
                <thead>
                    <tr>
                        <th>Course</th>
                        <th>Duration</th>
                        <th>Fee</th>
                        <th>Difficulty</th>
                        <th>Status</th>
                        <th class="actions-cell">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($courses as $course)
                        <tr>
                            <td>
                                <span class="cell-primary">{{ $course->name }}</span>
                                <span class="cell-secondary">ID #{{ $course->id }}</span>
                            </td>
                            <td class="cell-muted">{{ $course->duration }} {{ $course->duration === 1 ? 'week' : 'weeks' }}</td>
                            <td class="cell-muted">{{ number_format((float) $course->fee, 2) }}</td>
                            <td class="cell-muted">{{ $course->difficulty }}</td>
                            <td><span class="status {{ $course->is_active ? '' : 'inactive' }}">{{ $course->is_active ? 'Active' : 'Inactive' }}</span></td>
                            <td class="actions-cell">
                                <div class="row-actions">
                                    <a href="/courses/{{ $course->id }}" class="text-action">View</a>
                                    <a href="/courses/{{ $course->id }}/edit" class="text-action">Edit</a>
                                    <form action="/courses/{{ $course->id }}" method="POST" class="inline-form" onsubmit="return confirm('Delete this course?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-action danger">Delete</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6">
                                <div class="empty-state">
                                    <strong>No courses found</strong>
                                    <p>There are no course records yet.</p>
                                    <a href="/courses/create" class="button">Add course</a>
                                </div>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </section>
@endsection
