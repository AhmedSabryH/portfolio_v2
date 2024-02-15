@extends('layout')
@section('title', 'home')
@section('content')
    <div class="container m-auto ">
        <!-- hero -->
        <div class="grid grid-cols-2 justify-between items-center">
            <div>
                <p class="md:text-2xl text-sm mb-5">Hi I'm,</p>
                <h1 class="lg:text-7xl md:text-5xl sm:text-3xl text-[1.4rem] ml-10 mb-10 text-blue-400">Ahmed Sabry</h1>
                <div class="text-wrapper lg:text-5xl md:text-3xl sm:text-xl">
                    <h4 class="text-content leading-[0] opacity-80 text-blue-400 ">Web Developer</h4>
                    <h4 class="text-content leading-[0] opacity-60">FrontEnd Developer</h4>
                    <h4 class="text-content leading-[0] opacity-60">BackEnd Developer</h4>
                    <h4 class="text-content leading-[0] opacity-60">Graphic Designer</h4>
                </div>
                <div class="mt-20 hidden lg:block">
                    <a class="px-10 py-5 mx-5 my-3 bg-blue-400 rounded-lg text-3xl font-bold"
                        href="{{ route('home') }}#contact">Hair me</a>
                    <a class="px-10 py-5 mx-5 my-3  border-blue-400 border-2 font-bold hover:text-blue-400 dark:hover:bg-white hover:bg-black dark:hover:border-white  hover:border-black transition duration-300 rounded-lg text-3xl"
                        href="{{ route('project.index') }}">Projects</a>
                </div>
            </div>
            <div class="justify-self-end">
                <img src="{{ asset('assets/me.png') }}" alt="Sabry image">
            </div>
            <a class="sm:px-10 px-7 sm:py-5 py-4 justify-self-center lg:hidden mx-5 my-3 text-lg font-bold w-fit bg-blue-400 rounded-lg sm:text-3xl"
                href="{{ route('home') }}#contact">Hair me</a>
            <a class="sm:px-10 px-7  sm:py-5 py-4 justify-self-center lg:hidden mx-5 my-3 text-xl font-bold w-fit border-blue-400 border-2 hover:text-blue-400 dark:hover:bg-white hover:bg-black dark:hover:border-white  hover:border-black transition duration-300 rounded-lg sm:text-3xl"
                href="{{ route('project.index') }}">Projects</a>
        </div>
        <!-- Projects -->
        @include('layouts.homeproject')
        <!-- skills -->
        @include('layouts.homeskill')
        <!-- blog -->
        @include('layouts.homepost')
        <!-- contact me -->
        <div>
            <h1 class="text-3xl text-center">Contact Me</h1>
            @if (session()->has('msg'))
                <div style="background: {{ session()->get('color')['bg'] }}"
                    class=" w-full rounded-lg text-center py-4 lg:px-4">
                    <div style="background: {{ session()->get('color')['box'] }}"
                        class="p-2  items-center text-indigo-100 leading-none lg:rounded-full flex lg:inline-flex"
                        role="alert">
                        <span style="background: {{ session()->get('color')['icon'] }}"
                            class="flex rounded-full  uppercase px-2 py-1 text-xs font-bold mr-3">New</span>
                        <span class="font-semibold mr-2 text-left flex-auto">{{ session()->get('msg') }}</span>
                        <svg class="fill-current opacity-75 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path
                                d="M12.95 10.707l.707-.707L8 4.343 6.586 5.757 10.828 10l-4.242 4.243L8 15.657l4.95-4.95z" />
                        </svg>
                    </div>
                </div>
            @endif
            <form id="contact" class="w-full grid md:grid-cols-2 grid-cols-1 p-10 gap-5" action="{{ route('msg.store') }}"
                method="POST">
                @csrf
                <div>
                    <div class="text-red-600">
                        @error('message')
                            {{ $message }}
                        @enderror
                    </div>
                    <div>
                        <textarea id="msgarea" name="message" cols="30" rows="10" placeholder="Message..."
                            class="rounded-lg outline-none border-none dark:bg-gray-500/50 bg-gray-700  text-gray-50 placeholder:text-gray-50/75 p-5 resize-none w-full">{{ old('message') }}</textarea>
                    </div>
                </div>
                <div class="flex flex-col justify-between">
                    <div class="text-red-600">
                        @error('name')
                            {{ $message }}
                        @enderror
                    </div>
                    <input type="text" value="{{ old('name') }}" name="name" placeholder="Your Name..."
                        class="rounded-md resize outline-none border-none dark:bg-gray-500/50 bg-gray-700 placeholder:text-gray-50/75 text-gray-50 p-3 h-full my-5">
                    <div class="text-red-600">
                        @error('email')
                            {{ $message }}
                        @enderror
                    </div>
                    <input type="text" value="{{ old('email') }}" name="email" placeholder="Your Email..."
                        class="rounded-md outline-none border-none dark:bg-gray-500/50 bg-gray-700 placeholder:text-gray-50/75 text-gray-50 p-3 h-full my-5">
                    <button type="submit"
                        class="rounded-md outline-none border-none bg-blue-500 text-gray-50 p-3 h-full my-5">Send
                        Message</button>
                </div>
            </form>
        </div>
    </div>
    </div>
@endsection
