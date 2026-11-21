<div class="form-grid">
    <x-form-input name="name" label="Course name" :value="$course->name" full required />
    <x-form-textarea name="description" label="Description" :value="$course->description" full rows="4" />
    <x-form-input name="duration" label="Duration (weeks)" type="number" min="1" :value="$course->duration" required />
    <x-form-input name="fee" label="Fee" type="number" min="0" step="0.01" :value="$course->fee" required />

    <div class="form-field">
        <label for="difficulty">Difficulty</label>
        <select id="difficulty" name="difficulty" required>
            <option value="">Select difficulty</option>
            @foreach(['Easy', 'Medium', 'Hard'] as $level)
                <option value="{{ $level }}" @selected(old('difficulty', $course->difficulty) === $level)>{{ $level }}</option>
            @endforeach
        </select>
        @error('difficulty')
            <p class="field-error">{{ $message }}</p>
        @enderror
    </div>

    <div class="form-field">
        <span class="form-field-label">Status</span>
        <div class="checkbox-field">
            <input type="hidden" name="is_active" value="0">
            <input type="checkbox" id="is_active" name="is_active" value="1" @checked((bool) old('is_active', $course->is_active))>
            <label for="is_active">Active course</label>
        </div>
        @error('is_active')
            <p class="field-error">{{ $message }}</p>
        @enderror
    </div>
</div>
