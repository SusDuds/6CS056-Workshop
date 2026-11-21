@extends('layouts.app')

@section('title', 'Students')
@section('section', 'Students')
@section('heading', 'Students')
@section('description', 'Manage student records.')

@section('actions')
    <a href="/students/create" class="button button-primary">Add student</a>
@endsection

@section('content')
    @if(session('success'))
        <div class="alert">{{ session('success') }}</div>
    @endif

    <section class="panel">
        <div class="panel-header">
            <h2 class="panel-title">All students</h2>
            <span class="panel-meta">{{ count($students) }} {{ count($students) === 1 ? 'record' : 'records' }}</span>
        </div>
        <div class="table-wrap">
            <table class="data-table">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th class="actions-cell">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($students as $student)
                        <tr>
                            <td>
                                <span class="cell-primary">{{ $student->name }}</span>
                                <span class="cell-secondary">ID #{{ $student->id }}</span>
                            </td>
                            <td class="cell-muted">{{ $student->email }}</td>
                            <td class="cell-muted">{{ $student->phone }}</td>
                            <td class="actions-cell">
                                <div class="row-actions">
                                    <a href="/students/{{ $student->id }}" class="text-action">View</a>
                                    <a href="/students/{{ $student->id }}/edit" class="text-action">Edit</a>
                                    <form action="/students/{{ $student->id }}" method="POST" class="inline-form" onsubmit="return confirm('Delete this student?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-action danger">Delete</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4">
                                <div class="empty-state">
                                    <strong>No students found</strong>
                                    <p>There are no student records yet.</p>
                                    <a href="/students/create" class="button">Add student</a>
                                </div>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </section>
@endsection
