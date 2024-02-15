@extends('layout')
@section('title','blog')

@section('content')
<div class="container m-auto my-5 flex justify-around items-start flex-wrap">
    <div class="w-full">
        <img src="{{asset('assets/formal-picture.png')}}" class="md:w-1/3 w-1/2 m-auto" alt="">
        <h1 class=" md:text-7xl text-5xl w-fit m-auto font-bold ">Ahmed Sabry</h1>
        <p class="my-5 text-xl md:m-auto md:w-1/2 w-fit mx-1 leading-10">Welcome to my blog
            I share with readers my latest programming work, life hacks, and educational advice. My blog is about my life and the things I experience, so I love sharing ideas and gaining new perspectives from my audience. Come join me on my journey so I can share in yours! All life is a journey, so let's talk.</p>
    </div>
    @foreach ($blogs as $blog)
    <div class="lg:w-[550px] md:w-[500px] w-[350px] h-[400px]   relative mt-10  overflow-hidden ">
        <img loading="lazy" src="{{ asset($blog->main_img) }}" class="rounded-lg w-full h-full object-cover object-center">
        <div
        class="w-full max-h-[50%] bg-black/80 backdrop-blur-sm px-2 flex justify-between flex-row items-center flex-nowrap py-1 pb-3  absolute bottom-0 rounded-b-lg shadow-[0_-4px_10px_black]">
            <div class="h-full w-[75%]">
                <h2 class="text-lg text-white font-bold break-words  capitalize">
                    {{$blog->name}}
                </h2>
                <span class="text-sm font-extralight text-gray-50 opacity-50">{{ Carbon\Carbon::parse($blog['created_at'])->format('h:i a d-m-Y') }}</span>
                <p class="text-white text-xs my-3  break-words overflow-hidden pb-3">
                    {{$blog->text}}
                </p>
            </div>
            <a href="{{route('blog.show',$blog->id)}}" class="px-3 py-1 mx-5 bg-green-500 w-fit h-fit rounded-md">Read</a>
        </div>
    </div>
    @endforeach
</div>
@endsection