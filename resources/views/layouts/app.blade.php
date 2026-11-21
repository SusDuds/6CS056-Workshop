<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Overview') · Training Institute</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
<div class="app-shell">
    @include('partials.navbar')

    <div class="main-shell">
        <header class="topbar">
            <div class="breadcrumb">
                <span>Training Institute</span>
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

            <x-alert />
            @yield('content')
        </main>

        @include('partials.footer')
    </div>
</div>
</body>
</html>
