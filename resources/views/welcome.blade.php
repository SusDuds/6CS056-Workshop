@extends('layouts.app')

@section('title', 'Overview')
@section('section', 'Overview')
@section('heading', 'Overview')
@section('description', 'Choose a section to manage records.')

@section('content')
    <div class="overview-links">
        <a href="/students" class="overview-link">
            <div>
                <strong>Students</strong>
                <span>View and manage student records</span>
            </div>
            <span class="overview-arrow" aria-hidden="true">→</span>
        </a>
        <a href="/courses" class="overview-link">
            <div>
                <strong>Courses</strong>
                <span>View and manage course records</span>
            </div>
            <span class="overview-arrow" aria-hidden="true">→</span>
        </a>
    </div>
@endsection
