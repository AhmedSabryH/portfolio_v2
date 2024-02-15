@extends('layout')
@section('title', 'projects')
@section('content')
    <div class="container m-auto">
        <h1 class="text-center md:text-5xl text-2xl my-20 capitalize">Welcome to projects</h1>
        <div
            class="m-auto lg:w-1/2 w-[90%] h-[60px] flex bg-gray-600 items-center justify-between rounded-[15px] my-14 ring-2 pl-3 ring-blue-500 ">
            @include('livewire.search')
            <div  class="w-1/4 h-full relative bg-blue-500  rounded-e-lg ">
                <div id="filter" class="flex  h-full cursor-pointer justify-around items-center">
                    <h1 id="ftext" class="text-lg capitalize font-bold tracking-wider text-gray-200">
                        filter
                    </h1>
                    <div id="flines" class="flex flex-col items-center h-fit">
                        <div class="w-[20px] my-[2px] h-[1px] bg-gray-50"></div>
                        <div class="w-[15px] my-[2px] h-[1px] bg-gray-50"></div>
                        <div class="w-[10px] my-[2px] h-[1px] bg-gray-50"></div>
                    </div>
                </div>
                <div id="f_list" class="w-[101.5%] hidden absolute top-[80%] p-3 rounded-br-lg bg-blue-500 z-10">
                    <a href="{{route('filter',['type','fullstack'])}}" class="text-lg px-2 py-1 my-2 block hover:bg-blue-800 transition duration-100 rounded-lg">Fullstack</a>
                    <a href="{{route('filter',['type','FrontEnd'])}}" class="text-lg px-2 py-1 my-2 block hover:bg-blue-800 transition duration-100 rounded-lg">FrontEnd</a>
                    <a href="{{route('filter',['type','BackEnd'])}}" class="text-lg px-2 py-1 my-2 block hover:bg-blue-800 transition duration-100 rounded-lg">BackEnd</a>
                </div>
            </div>
        </div>
        <div class="m-auto flex items-center justify-around my-10 lg:w-1/2 w-[90%] h-fit">
            <a href="{{route('filter',['tool',12])}}" class="px-3 py-2 bg-[#702A55] font-bold rounded-lg uppercase">Laravel</a>
            <a href="{{route('filter',['tool',3])}}" class="px-3 py-2 bg-[#D5573B] text-black font-bold rounded-lg uppercase">php</a>
            <a href="{{route('filter',['tool',11])}}" class="px-3 py-2 bg-[#0F7173]  font-bold rounded-lg uppercase">react js</a>
            <a href="{{route('filter',['tool',13])}}" class="px-3 py-2 bg-[#D8A47F] text-black font-bold rounded-lg uppercase">tailwind</a>
        </div>
        <div class="flex flex-wrap justify-center">
            <!-- project card -->
            @foreach ($projects as $item)
            <div class="lg:w-[500px] w-[350px] relative mx-10 my-10 overflow-hidden ">
                <img src="{{ asset($item->main_img)}}" alt="{{$item->name}}" class="rounded-lg">
                <div
                class="w-full bg-black/80 backdrop-blur-sm px-2 flex flex-row items-center flex-nowrap py-1 pb-3 absolute bottom-0 rounded-b-lg shadow-[0_-4px_10px_black]">
                    <div class="h-full">
                    <h2 class="text-2xl text-white font-bold capitalize">
                            {{$item->name}}
                        </h2>
                        <div class="flex flex-wrap">
                            @foreach ($item->categorie as $cat)
                                <a href="{{route('filter',['tool',$cat->id])}}" class="text-xs font-light px-2 py-1 bg-purple-700 m-1 text-gray-50/70 rounded-lg">
                                    {{ $cat->cat}}
                                </a>
                            @endforeach
                        </div>
                    </div>
                    <a href="{{route('project.show',$item->id)}}" class="px-3 py-1 mx-5 bg-green-500 w-fit h-fit rounded-md">View</a>
                </div>
            </div>
            @endforeach
            
        </div>
    </div>
@endsection
