@extends('layout')
@section('title','blog')

@section('content')
<div class="container m-auto my-5 flex justify-around items-start flex-wrap">
    <div class="w-full">
        <img src="{{asset('assets/skill/skills.png')}}" class="w-1/2 m-auto" alt="">
        <h1 class=" md:text-7xl text-5xl w-fit m-auto font-bold ">Skills</h1>
    </div>
    @foreach ($tools as $blog)
    <a href="{{route('filter',['tool',$blog->id])}}" class="max-w-lg text-center text-5xl hover:text-blue-400 transition duration-300 hover:bg-white/35 rounded-lg m-2">
        <img src="{{asset($blog->icon)}}" class="w-full" alt="">
        <h1>{{$blog->cat}}</h1>
    </a>
    @endforeach
</div>
@endsection