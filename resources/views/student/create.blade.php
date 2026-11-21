@extends('layouts.app')

@section('title', 'Add student')
@section('section', 'Students')
@section('heading', 'Add student')
@section('description', 'Enter the student details below.')

@section('content')
    <section class="panel form-panel">
        <form action="{{ route('students.store') }}" method="POST" class="form-body">
            @csrf
            @include('student._form')
            <div class="form-actions">
                <button type="submit" class="button button-primary">Save student</button>
                <a href="{{ route('students.index') }}" class="button">Cancel</a>
            </div>
        </form>
    </section>
@endsection
