@extends('layouts.app')

@section('title', 'Add student')
@section('section', 'Students')
@section('heading', 'Add student')
@section('description', 'Enter the student details below.')

@section('content')
    <section class="panel form-panel">
        <form action="/students" method="POST" class="form-body">
            @csrf
            <div class="form-grid">
                <div class="form-field">
                    <label for="name">Full name</label>
                    <input id="name" type="text" name="name" value="{{ old('name') }}" required autocomplete="name">
                    @error('name') <p class="field-error">{{ $message }}</p> @enderror
                </div>
                <div class="form-field">
                    <label for="email">Email address</label>
                    <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email">
                    @error('email') <p class="field-error">{{ $message }}</p> @enderror
                </div>
                <div class="form-field">
                    <label for="phone">Phone</label>
                    <input id="phone" type="text" name="phone" value="{{ old('phone') }}" required autocomplete="tel">
                    @error('phone') <p class="field-error">{{ $message }}</p> @enderror
                </div>
                <div class="form-field">
                    <label for="date_of_birth">Date of birth</label>
                    <input id="date_of_birth" type="date" name="date_of_birth" value="{{ old('date_of_birth') }}">
                    @error('date_of_birth') <p class="field-error">{{ $message }}</p> @enderror
                </div>
                <div class="form-field full">
                    <label for="address">Address</label>
                    <textarea id="address" name="address" rows="3">{{ old('address') }}</textarea>
                    @error('address') <p class="field-error">{{ $message }}</p> @enderror
                </div>
            </div>
            <div class="form-actions">
                <button type="submit" class="button button-primary">Save student</button>
                <a href="/students" class="button">Cancel</a>
            </div>
        </form>
    </section>
@endsection
