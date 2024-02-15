<div class="m-auto my-10">
    <h1 class="text-3xl text-center">Latest <a href="{{route('blog.index')}}"
            class="text-blue-500 underline uppercase underline-offset-8">Posts</a></h1>
    <div class="container flex lg:justify-around justify-center items-center flex-wrap">
        <div class="lg:w-[500px] md:w-[450px] sm:w-[350px] w-[300px]">
            <img src="{{ asset('assets/blog/blog.png') }}" loading="lazy">
        </div>
        <!-- post templete -->
        <div>
            @foreach ($posts as $post)
            <div class="lg:w-[650px] md:w-[500px] w-[350px] relative mt-10 ml-5 overflow-hidden ">
                <img src="{{ asset($post->main_img) }}" alt="" class="rounded-lg w-full">
                <div
                class="w-full bg-black/80 backdrop-blur-sm px-2 flex justify-between flex-row items-center flex-nowrap py-1 pb-3 h-1/3 absolute bottom-0 rounded-b-lg shadow-[0_-4px_10px_black]">
                <div class="h-full">
                    <h2 class="text-lg text-white font-bold capitalize">
                        {{$post->name}}
                    </h2>
                    <p class="h-1/2 text-white text-xs overflow-hidden pb-3">
                        {{$post->text}}
                    </p>
                </div>
                <a href="{{route('blog.show',$post->id)}}" class="px-3 py-1 mx-5 bg-green-500 w-fit h-fit rounded-md">Read</a>
            </div>
        </div>
        @endforeach
        </div>
    </div>
</div>
