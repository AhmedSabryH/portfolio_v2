<div class="m-auto my-10">
    <h1 class="text-3xl text-center">Most Important <a href="{{route('categorie.index')}}" class="text-blue-500 underline uppercase underline-offset-8">Skills </a> </h1>
    <div class="container flex justify-around items-center flex-wrap" dir="rtl">
        <!-- post templete -->
        <div class="lg:w-[500px] md:w-[450px] sm:w-[350px] w-[300px]">
            <img src="{{ asset('assets/skill/skills.png') }}" loading="lazy">
        </div>
        <div class="grid grid-cols-2">
            @foreach ($skills as $skill)
            <a href="{{route('filter',['tool',$skill->id])}}" class="w-[250px]">
                <img src="{{asset($skill->icon)}}" alt="">
                <h1 class="w-fit m-auto">
                    {{$skill->cat}}
                </h1>
            </a>
            @endforeach
        </div>
    </div>
</div>