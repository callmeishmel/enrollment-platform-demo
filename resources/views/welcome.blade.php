@extends('layouts.guest')

@section('content')
    
    <section class="bg-white bg-gradient-to-tr from-indigo-900 to-teal-600">
        <div class="grid space-y-7 max-w-screen-xl px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12">
            
            <div class="mr-auto mx-auto text-center place-self-center lg:text-left lg:col-span-8">
                <h1 class="max-w-2xl mb-4 text-4xl font-extrabold tracking-tight leading-none md:text-5xl xl:text-6xl dark:text-white">Empower Vocational Programs with Seamless Student Payments</h1>
                <p class="max-w-2xl mb-6 font-light text-gray-500 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-400">We make it easy to manage tuition plans, student onboarding, and recurring payments—all in one unified platform.</p>
                <a href="#" class="inline-flex items-center justify-center px-5 py-3 text-base font-medium text-center text-blue-900 border bg-blue-600 border-blue-300 rounded-lg hover:bg-blue-100 focus:ring-4 focus:ring-gray-100 dark:text-white dark:border-blue-700 dark:hover:bg-blue-700 dark:focus:ring-gray-800">
                    Explore Careers
                </a> 
                <a href="#" class="inline-flex items-center justify-center px-5 py-3 mr-3 text-base font-medium text-center text-white rounded-lg bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:focus:ring-primary-900">
                    Apply Today
                    <svg class="w-5 h-5 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </a>
            </div>

            @livewire('loan-application.form-stepper')
            
        </div>
    </section>

@endsection