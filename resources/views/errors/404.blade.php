@extends('layouts.error')

@section('title', 'Page Not Found')

@section('content')
    <div class="text-center">
        <div class="flex justify-center">
            <div class="w-24 h-24 rounded-full bg-[#8cc63f]/20 flex items-center justify-center mb-6">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-[#8cc63f]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                </svg>
            </div>
        </div>

        <h1 class="mt-4 text-3xl font-bold tracking-tight text-[#1a2b3c] sm:text-4xl">Page Not Found</h1>
        <p class="mt-6 text-base leading-7 text-gray-600">Sorry, we couldn't find the page you're looking for. Please check the URL or try navigating back home.</p>

        <div class="mt-10 flex items-center justify-center gap-x-6">
            <a href="/" class="inline-flex items-center px-4 py-2 text-sm font-medium text-white bg-[#8cc63f] rounded-lg hover:bg-[#7bb32f] transition-all duration-300 shadow-md hover:shadow-lg">
                Return Home
                <svg class="ml-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                </svg>
            </a>
        </div>
    </div>
@endsection
