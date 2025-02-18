{{-- resources/views/errors/503.blade.php --}}
    <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name') }} - Maintenance Mode</title>
    @vite('resources/css/app.css')

    <meta name="robots" content="noindex">
</head>
<body class="min-h-screen bg-white">
<div class="max-w-4xl mx-auto px-4 py-12">
    {{-- Logo and Coming Soon Section --}}
    <div class="text-center mb-8">
        <div class="mb-8">
            <img
                src="{{ asset('images/NISGROUP-black.png') }}"
                alt="NIS Group Logo"
                class="w-48 h-auto mx-auto"
            >
        </div>
        <h1 class="text-3xl font-bold text-gray-900 mb-2">Coming Soon</h1>
        <p class="text-gray-600">
            We're working on something exciting. In the meantime, request a quote below!
        </p>
    </div>

    {{-- Quote Request Form --}}
    <div class="max-w-2xl mx-auto bg-white rounded-lg shadow p-8">
        <h2 class="text-xl font-bold text-gray-900 mb-6">Request a Quote</h2>

        @if (session('success'))
            <div class="mb-6 p-4 bg-green-50 border border-green-200 text-green-600 rounded">
                {{ session('success') }}
            </div>
        @endif

        @if ($errors->any())
            <div class="mb-6 p-4 bg-red-50 border border-red-200 text-red-600 rounded">
                <ul class="list-disc list-inside">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('maintenance.quote') }}" method="POST" class="space-y-4">
            @csrf
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                {{-- Name Field --}}
                <div>
                    <label for="name" class="block text-sm text-gray-600 mb-1">
                        Full Name *
                    </label>
                    <input
                        type="text"
                        id="name"
                        name="name"
                        required
                        class="w-full px-3 py-2 border border-gray-200 rounded focus:outline-none focus:border-gray-400"
                        value="{{ old('name') }}"
                    >
                </div>

                {{-- Email Field --}}
                <div>
                    <label for="email" class="block text-sm text-gray-600 mb-1">
                        Email Address *
                    </label>
                    <input
                        type="email"
                        id="email"
                        name="email"
                        required
                        class="w-full px-3 py-2 border border-gray-200 rounded focus:outline-none focus:border-gray-400"
                        value="{{ old('email') }}"
                    >
                </div>

                {{-- Phone Field --}}
                <div>
                    <label for="phone" class="block text-sm text-gray-600 mb-1">
                        Phone Number
                    </label>
                    <input
                        type="tel"
                        id="phone"
                        name="phone"
                        class="w-full px-3 py-2 border border-gray-200 rounded focus:outline-none focus:border-gray-400"
                        value="{{ old('phone') }}"
                    >
                </div>

                {{-- Company Field --}}
                <div>
                    <label for="company" class="block text-sm text-gray-600 mb-1">
                        Company Name
                    </label>
                    <input
                        type="text"
                        id="company"
                        name="company"
                        class="w-full px-3 py-2 border border-gray-200 rounded focus:outline-none focus:border-gray-400"
                        value="{{ old('company') }}"
                    >
                </div>
            </div>

            {{-- Project Details Field --}}
            <div>
                <label for="project_details" class="block text-sm text-gray-600 mb-1">
                    Project Details *
                </label>
                <textarea
                    id="project_details"
                    name="project_details"
                    required
                    rows="4"
                    class="w-full px-3 py-2 border border-gray-200 rounded focus:outline-none focus:border-gray-400"
                >{{ old('project_details') }}</textarea>
            </div>

            {{-- Submit Button --}}
            <div class="text-right">
                <button
                    type="submit"
                    class="px-6 py-2 bg-[#8cc63f] text-white rounded hover:bg-[#7bb32f] focus:outline-none"
                >
                    Request Quote
                </button>
            </div>
        </form>
    </div>

    {{-- Footer --}}
    <footer class="text-center mt-8 text-gray-400 text-sm">
        <p>&copy; {{ date('Y') }} NIS Group. All rights reserved.</p>
    </footer>
</div>
</body>
</html>
