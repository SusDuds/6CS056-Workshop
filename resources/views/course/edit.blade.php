@extends('layouts.app')

@section('title', 'Edit course')
@section('section', 'Courses')
@section('heading', 'Edit course')
@section('description', 'Update the course details.')

@section('content')
    <section class="panel form-panel">
        <form action="/courses/{{ $course->id }}" method="POST" class="form-body">
            @csrf
            @method('PUT')
            <div class="form-grid">
                <div class="form-field full">
                    <label for="name">Course name</label>
                    <input id="name" type="text" name="name" value="{{ old('name', $course->name) }}" required>
                    @error('name') <p class="field-error">{{ $message }}</p> @enderror
                </div>
                <div class="form-field full">
                    <label for="description">Description</label>
                    <textarea id="description" name="description" rows="4">{{ old('description', $course->description) }}</textarea>
                    @error('description') <p class="field-error">{{ $message }}</p> @enderror
                </div>
                <div class="form-field">
                    <label for="duration">Duration (weeks)</label>
                    <input id="duration" type="number" name="duration" min="1" value="{{ old('duration', $course->duration) }}" required>
                    @error('duration') <p class="field-error">{{ $message }}</p> @enderror
                </div>
                <div class="form-field">
                    <label for="fee">Fee</label>
                    <input id="fee" type="number" name="fee" min="0" step="0.01" value="{{ old('fee', $course->fee) }}" required>
                    @error('fee') <p class="field-error">{{ $message }}</p> @enderror
                </div>
                <div class="form-field">
                    <label for="difficulty">Difficulty</label>
                    <select id="difficulty" name="difficulty" required>
                        @foreach(['Easy', 'Medium', 'Hard'] as $level)
                            <option value="{{ $level }}" @selected(old('difficulty', $course->difficulty) === $level)>{{ $level }}</option>
                        @endforeach
                    </select>
                    @error('difficulty') <p class="field-error">{{ $message }}</p> @enderror
                </div>
                <div class="form-field">
                    <span class="form-field-label">Status</span>
                    <div class="checkbox-field">
                        <input type="hidden" name="is_active" value="0">
                        <input id="is_active" type="checkbox" name="is_active" value="1" @checked(old('is_active', $course->is_active) == '1' || old('is_active', $course->is_active) === true)>
                        <label for="is_active">Active course</label>
                    </div>
                    @error('is_active') <p class="field-error">{{ $message }}</p> @enderror
                </div>
            </div>
            <div class="form-actions">
                <button type="submit" class="button button-primary">Save changes</button>
                <a href="/courses/{{ $course->id }}" class="button">Cancel</a>
            </div>
        </form>
    </section>
@endsection
