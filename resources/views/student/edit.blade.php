@extends('layouts.app')

@section('title', 'Edit student')
@section('section', 'Students')
@section('heading', 'Edit student')
@section('description', 'Update the student details.')

@section('content')
    <section class="panel form-panel">
        <form action="{{ route('students.update', $student) }}" method="POST" class="form-body">
            @csrf
            @method('PUT')
            @include('student._form')
            <div class="form-actions">
                <button type="submit" class="button button-primary">Save changes</button>
                <a href="{{ route('students.show', $student) }}" class="button">Cancel</a>
            </div>
        </form>
    </section>
@endsection
