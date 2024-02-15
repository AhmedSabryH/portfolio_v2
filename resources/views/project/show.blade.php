@extends('layout')

@section('title', 'project name')

@section('content')
<div class="container m-auto my-10 px-5">
    <img src="{{ asset($project->main_img) }}" alt="" class="rounded-lg w-full object-cover">
    <span class="opacity-50 text-sm font-extralight">{{ Carbon\Carbon::parse($project['created_at'])->format('d-m-Y h:i a ') }}</span>
    <div class="flex flex-wrap">
        @foreach ($project->categorie as $cat)
            <a href="{{route('categorie.show',$cat->id)}}" class="text-xs font-light px-2 py-1 bg-purple-700 m-1 ml-0 text-gray-50/70 rounded-lg">
                {{ $cat->cat}}
            </a>
        @endforeach
    </div>
    <h1 class="text-4xl w-fit">
        {{ $project->name }}
    </h1>
    <p class="w-fit">
        {{$project->text}}
    </p>
    <a href="{{ $project->link}}" target="blank" class="w-full text-center block py-3 my-5 text-2xl font-bold bg-blue-400 rounded-lg">
        view
    </a>
</div>
@endsection
