<aside class="sidebar">
    <a href="{{ route('home') }}" class="brand">Training Institute</a>

    <nav class="navigation" aria-label="Main navigation">
        <a href="{{ route('home') }}" class="nav-link {{ request()->routeIs('home') ? 'is-active' : '' }}">Overview</a>
        <a href="{{ route('students.index') }}" class="nav-link {{ request()->routeIs('students.*') ? 'is-active' : '' }}">Students</a>
        <a href="{{ route('courses.index') }}" class="nav-link {{ request()->routeIs('courses.*') ? 'is-active' : '' }}">Courses</a>
    </nav>
</aside>
