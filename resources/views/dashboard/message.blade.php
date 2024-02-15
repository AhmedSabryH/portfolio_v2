@foreach ($messages as $message)
<div class="w-[300px] px-3 m-5 py-5 bg-gray-700 border rounded-lg">
    <h1 class="text-2xl font-bold text-blue-400">{{ $message['name'] }}</h1>
    <p class="text-sm font-light text-white/75">
        {{ Carbon\Carbon::parse($message['created_at'])->format('h:i a d-m-Y') }}</p>
    <p class="text-white leading-relaxed">{{ $message['msg'] }}</p>
    <a href="mailto:{{ $message['email'] }}"
        class="w-full block bg-blue-400 text-white tracking-wide px-3 py-2 my-3 rounded-lg text-center font-medium ">
        Send to sender's email
    </a>
</div>
@endforeach