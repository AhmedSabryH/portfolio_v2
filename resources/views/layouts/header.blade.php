<nav class="container p-3 flex justify-between m-auto my-2  ">
    <a href="{{ route('home') }}">
        <div class="flex justify-center items-center" style="margin-top: -10px;">
            <h1 class="font-normal text-xl">
                <span class="Courgette text-blue-400 font-light text-4xl">A</span>hmed
            </h1>
        </div>
    </a>
    {{-- web Links --}}
    <div class="links my-auto hidden md:block ">
        <a href="{{route('project.index')}}" class="m-4 font-bold tracking-widest hover:text-blue-400 transition duration-200"> Projects</a>
        <a href="{{route('blog.index')}}" class="m-4 font-bold tracking-widest hover:text-blue-400 transition duration-200"> Blog</a>
        <a href="{{route('categorie.index')}}" class="m-4 font-bold tracking-widest hover:text-blue-400 transition duration-200"> Skills</a>
        <a href="{{route('home')}}#contact"
            class="m-4  px-7 py-3 font-bold bg-blue-400 transition duration-300 hover:bg-black dark:hover:bg-white hover:text-blue-500 rounded-lg ">
            Hair me</a>
    </div>
    {{-- mobile Links --}}
    <div class="relative mx-5 block md:hidden ">
        <div id="burger" class="cursor-pointer">
            <div id="burger1" style="width:30px; height:3px" class="dark:bg-gray-100 bg-black my-1 rounded-lg"></div>
            <div id="burger2" style="width:35px; height:3px" class="bg-blue-300 my-1 rounded-lg"></div>
            <div id="burger2" style="width:30px; height:3px" class="dark:bg-gray-100 bg-black my-1 rounded-lg"></div>
        </div>
        <ul class="absolute hidden md:hidden right-0 top-8 z-50 bg-gray-300 shadow-lg dark:bg-gray-700 px-3 py-5 rounded-lg">
            <li class="p-3 mx-7 my-5 rounded-lg text-center">
                <a href="#" class="m-4 font-bold tracking-widest hover:text-blue-400 transition duration-200">
                    Projects</a>
            </li>
            <li class="p-3 mx-7 my-5 rounded-lg text-center">
                <a href="#" class="m-4 font-bold tracking-widest hover:text-blue-400 transition duration-200">
                    Blog</a>
            </li>
            <li class="p-3 mx-7 my-5 rounded-lg text-center">
                <a href="#" class="m-4 font-bold tracking-widest hover:text-blue-400 transition duration-200">
                    Skills</a>
            </li>
            <li class=" mx-7 my-5 text-center">
                <a href="#"
                    class=" px-5 py-4 rounded-lg font-bold bg-blue-400 transition duration-300 hover:bg-black dark:hover:bg-white hover:text-blue-500 ">
                    Hair me</a>
            </li>
        </ul>
    </div>

    
</nav>
