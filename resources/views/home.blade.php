<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ __('shared.name') }}</title>
    @vite(['resources/css/app.css'])
</head>
<body class="bg-gray-100 text-gray-900">
<div class="max-w-4xl mx-auto p-6 bg-white shadow-lg rounded-lg">
    <h1 class="text-xl font-bold mb-4">{{ $cvData['name'] }}</h1>

    <h2 class="text-xl font-semibold mt-4">{{ __('messages.change_language') }}</h2>
    <a href="{{ url('/lang/pt') }}" class="{{ app()->getLocale() == 'pt' ? 'active' : 'available' }}">Português</a> | 
    <a href="{{ url('/lang/en') }}" class="{{ app()->getLocale() == 'en' ? 'active' : 'available' }}">English</a>

    <h2 class="text-xl font-semibold mt-4">{{ __('messages.contact') }}</h2>
    <p>Email: {{ $cvData['contact']['email'] }}</p>
    <p>GitHub: <a href="{{ $cvData['contact']['github'] }}">{{ $cvData['contact']['github'] }}</a></p>
    <p>LinkedIn: <a href="{{ $cvData['contact']['linkedin'] }}">{{ $cvData['contact']['linkedin'] }}</a></p>

    <h2 class="text-xl font-semibold mt-4">{{ __('messages.competences') }}</h2>
    <ul>
        <li>{{ $cvData['competences']['primary'] }}</li>
        <li>{{ $cvData['competences']['secondary'] }}</li>
        <li>{{ $cvData['competences']['supporting'] }}</li>
        <li>{{ $cvData['competences']['languages'] }}</li>
    </ul>

<h2 class="text-xl font-semibold mt-4">{{ __('messages.experience') }}</h2>
<div class="grid grid-cols-1 lg:grid-cols-2 gap-6 p-6">
@foreach($cvData['experience'] as $job)
<div class="max-w-sm rounded-2xl overflow-hidden shadow-lg bg-white p-6">
        <h3 class="text-l font-semibold mt-3">{{ $job['company'] }} - {{ $job['position'] }} ({{ $job['period'] }})</h3>
        <p>{{ $job['description'] }}</p>
    <ul class="mt-2 ml-4 list-disc pl-6">
        @foreach($job['responsibilities'] as $task)
            <li class="mt-2 block">{{ $task }}</li>
        @endforeach
    </ul>
    @if(isset($job['tags']))
    <ul class="mt-2">
        @foreach($job['tags'] as $technology)
            <li class="inline-flex items-center rounded-md bg-gray-50 px-2 py-1 text-xs font-medium text-gray-600 ring-1 ring-gray-500/10 ring-inset">{{ $technology }}</li>
        @endforeach
    </ul>
    @endif
</div>
@endforeach
</div>

<h2 class="text-xl font-semibold mt-4">{{ __('messages.education') }}</h2>
<div class="grid grid-cols-1 gap-6 p-6">
@foreach($cvData['education'] as $job)
    <h3 class="text-l font-semibold">{{ $job['institution'] }}</h3>
    <p>{{ $job['degree'] }}
    <br />
    {{ $job['period'] }}</p>
@endforeach
</div>
    
    <h2 class="text-xl font-semibold mt-8">{{ __('messages.projects') }}</h2>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 p-6">
    @foreach(__('projects') as $project)
    <div class="max-w-sm rounded-2xl overflow-hidden shadow-lg bg-white p-6">
        <h3 class="text-l font-semibold mt-3"><a href="{{ $project['link'] }}" class="link">{{ $project['title'] }}</a></h3>
        <p class="mt-2">{{ $project['description'] }}</p>
        <p class="mt-2"><a href="{{ $project['link'] }}" class="underline">{{ $project['link'] }}</a>
        @if(isset($project['tags']))
        <ul class="mt-2">
            @foreach($project['tags'] as $technology)
                <li class="inline-flex items-center rounded-md bg-gray-50 px-2 py-1 text-xs font-medium text-gray-600 ring-1 ring-gray-500/10 ring-inset">{{ $technology }}</li>
            @endforeach
        </ul>
        @endif
        </div>

    @endforeach
    </div>
</div>
</body>
</html>
