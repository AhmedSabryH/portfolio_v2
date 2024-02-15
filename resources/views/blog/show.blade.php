@extends('layout')
@section('title', $blog->name)
@section('content')
    <div class="container m-auto my-10 px-5">
        <img src="{{ asset($blog->main_img) }}" alt="" class="rounded-lg w-full h-[500px] object-cover">
        <span class="opacity-50 text-sm font-extralight">{{ Carbon\Carbon::parse($blog['created_at'])->format('d-m-Y h:i a ') }}</span>
        <h1 class="text-4xl w-fit">
            {{ $blog->name }}
        </h1>
        <p class="w-fit">
            {{$blog->text}}
        </p>
        <a href="{{ URL::previous()}}" class="w-full text-center block py-3 my-5 text-2xl font-bold bg-blue-400 rounded-lg">
            Back
        </a>
    </div>
@endsection
