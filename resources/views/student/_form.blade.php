<div class="form-grid">
    <x-form-input name="name" label="Full name" :value="$student->name" required autocomplete="name" />
    <x-form-input name="email" label="Email address" type="email" :value="$student->email" required autocomplete="email" />
    <x-form-input name="phone" label="Phone" :value="$student->phone" required autocomplete="tel" />
    <x-form-input name="date_of_birth" label="Date of birth" type="date" :value="$student->date_of_birth?->format('Y-m-d')" />
    <x-form-textarea name="address" label="Address" :value="$student->address" full rows="3" />
</div>
