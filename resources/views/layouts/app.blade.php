<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Overview') · Records</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
<div class="app-shell">
    <aside class="sidebar">
        <a href="/" class="brand">Records</a>

        <nav class="navigation" aria-label="Main navigation">
            <a href="/" class="nav-link {{ request()->is('/') ? 'is-active' : '' }}">Overview</a>
            <a href="/students" class="nav-link {{ request()->is('students*') ? 'is-active' : '' }}">Students</a>
            <a href="/courses" class="nav-link {{ request()->is('courses*') ? 'is-active' : '' }}">Courses</a>
        </nav>
    </aside>

    <div class="main-shell">
        <header class="topbar">
            <div class="breadcrumb">
                <span>Records</span>
                <span class="breadcrumb-separator">/</span>
                <span>@yield('section', 'Overview')</span>
            </div>
        </header>

        <main class="main-content">
            <div class="page-header">
                <div>
                    <h1>@yield('heading', 'Overview')</h1>
                    @hasSection('description')
                        <p class="page-description">@yield('description')</p>
                    @endif
                </div>
                <div class="page-actions">
                    @yield('actions')
                </div>
            </div>

            @yield('content')
        </main>
    </div>
</div>
</body>
</html>
