<img class="select-none" src="{{ asset('assets/icons/search.png') }}" width="20px">
<div class="w-full relative">
    <input id="search"
        class="h-[60px] outline-none  focus:ring-0  border-none w-full  bg-transparent placeholder:text-gray-300 placeholder:font-bold"
        type="text" placeholder="Search..." >
    <ul id="res"
        class="absolute z-50 hidden px-3 py-3 overflow-y-auto top-full w-full bg-gray-800 scroll rounded-b-lg border border-blue-500 border-t-0 max-h-60">
        <li class="p-2 my-3 text-gray-200 bg-gray-700 rounded-lg cursor-pointer hover:ring-2">Res3</li>
    </ul>
</div>
