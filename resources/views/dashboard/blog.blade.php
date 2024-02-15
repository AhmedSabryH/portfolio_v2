<form
action="@if (isset($blog_edit)) {{ route('blog.update', $blog_edit['id']) }}
@else
{{ route('blog.store') }} @endif"
method="post" enctype="multipart/form-data"
class="w-full rounded-lg px-3 py-4 bg-gray-800 grid grid-cols-2">
@csrf
@if (isset($blog_edit))
    @method('PUT')
@endif
<div class="flex flex-col h-full">
    @error('name')
        <span class="text-red-500">{{ $message }}</span>
    @enderror
    <input type="text" name="name"
        class=" rounded-lg text-gray-50 focus:ring-0 border-none py-3 placeholder:text-gray-50 bg-gray-50/25 "
        placeholder="name.."
        value="@if (isset($blog_edit)) {{ $blog_edit->name }} @endif{{ old('name') }}">
    @error('text')
        <span class="text-red-500">{{ $message }}</span>
    @enderror
    <textarea name="text"
        class="resize-none text-gray-50 rounded-lg  focus:ring-0 border-none py-3 placeholder:text-gray-50 bg-gray-50/25 h-full mt-5"
        placeholder="description">
@if (isset($blog_edit))
{{ $blog_edit->text }}
@endif{{ old('text') }}
</textarea>
    <input class="w-full bg-blue-400 py-3 rounded-lg mt-2" type="submit" value="Add New Post">
</div>
<div
    class=" relative flex justify-center items-center border mx-3 rounded-lg bg-gray-50/25 text-gray-50 uppercase text-center h-[335px]">
    <img id="preview" class="w-full h-full object-contain object-center absolute hidden top-0">
    <label for="img"
        class="cursor-pointer px-3 py-2 rounded-lg font-bold text-gray-50 bg-blue-800">
        image
    </label>
    <input type="file" id="img" name="img" hidden value="{{ old('img') }}"
        accept="image/jpg,image/jpeg,image/png">
</div>
</form>
@foreach ($blogs as $blog)
<div class="w-[500px] px-3 m-5 py-5 bg-gray-700 border rounded-lg h-fit ">
    <h1 class="text-2xl font-bold text-blue-400">{{ $blog['name'] }}</h1>
    <p class="text-sm font-light text-white/75">
        {{ Carbon\Carbon::parse($blog['created_at'])->format('h:i a d-m-Y') }}</p>
    <p class="text-white leading-relaxed break-words">{{ $blog['text'] }}</p>
    <img src="{{ asset($blog['main_img']) }}" alt=""
        class="h-[500px] w-full object-cover object-center">
    <form action="{{ route('blog.destroy', $blog['id']) }}" method="post">
        @csrf
        @method('DELETE')
        <input
            class="cursor-pointer bg-red-800 hover:bg-red-500 py-2 mt-8 px-3 w-full text-gray-50 rounded-lg transition duration-300 text-lg"
            type="submit" value="Delete">
    </form>
    <a href="{{ route('blog.edit', $blog->id) }}"
        class="cursor-pointer block text-center bg-blue-800 hover:bg-blue-500 py-2 mt-8 px-3 w-full text-gray-50 rounded-lg transition duration-300 text-lg">Edit</a>
</div>
@endforeach