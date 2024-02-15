@section('title', 'Dashboard')
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="container m-auto pt-10 w-full">
        <div class=" w-full flex flex-wrap px-3 py-5 rounded-lg bg-gray-50/5 justify-around">
            <a href="{{ route('msg.index') }}">
                <svg xmlns="http://www.w3.org/2000/svg"
                    class="cursor-pointer m-3  @if (isset($messages)) active @else unactive @endif "
                    width="40" viewBox="0 0 50 50">
                    <path id="messages_chat-_71B1FF_" data-name="messages_chat-[#71B1FF]"
                        d="M116.946,843.71c-10.725-9.372-27.356-4.07-31.048,9.835-1.55,5.835-.055,8.542-.055,12.922,0,4.5-1.843,11.022-1.843,11.022a1.32,1.32,0,0,0,1.58,1.347c3.118-.815,8.077-2.427,14.007-.818,19.942,5.408,32.74-20.867,17.359-34.31M132.617,889a1.612,1.612,0,0,1-.4-.052c-15.766-3.957-14.707.488-23.468-1.855a19.644,19.644,0,0,1-7.145-3.638c15.91,1.947,29.173-11.912,26.825-28.235a18.82,18.82,0,0,1,4.91,9.062c2.122,9.84-3.265,8.175.62,23.13A1.323,1.323,0,0,1,132.617,889"
                        transform="translate(-84 -839)" fill-rule="evenodd" />
                </svg>
            </a>
            <a href="{{ route('blog.index') }}">
                <svg xmlns="http://www.w3.org/2000/svg"
                    class="cursor-pointer m-3   @if (isset($blogs)) active @else unactive @endif"
                    width="42" viewBox="0 0 52 54.851">
                    <path id="Path_7" data-name="Path 7"
                        d="M56.992,99.9c-.062,1.255-1.014,2.806-2.549,4.3v19.632a1.758,1.758,0,0,1-.537,1.269,1.832,1.832,0,0,1-1.292.526H20.62a1.835,1.835,0,0,1-1.291-.526,1.757,1.757,0,0,1-.536-1.269V92.453a1.76,1.76,0,0,1,.536-1.269,1.834,1.834,0,0,1,1.291-.526H37.612A42.82,42.82,0,0,1,42.4,85.312l.023-.03H20.62a7.376,7.376,0,0,0-5.169,2.1,7.092,7.092,0,0,0-2.143,5.072v31.373a7.087,7.087,0,0,0,2.143,5.072A7.384,7.384,0,0,0,20.62,131H52.614a7.385,7.385,0,0,0,5.172-2.1,7.1,7.1,0,0,0,2.141-5.072V97.944a.228.228,0,0,0-.035-.034A16.7,16.7,0,0,1,56.992,99.9Z"
                        transform="translate(-13.308 -76.146)" />
                    <path id="Path_8" data-name="Path 8"
                        d="M169.025,0s-1.681,2.511-12.658,6.225c-11.194,3.788-18.084,19.2-18.084,19.2-1.659,3.157-8.216,16.274-8.216,16.274-1.806,3.388,1.5,5.39,3.445,1.892,3.721-6.716,6.123-12.852,11.781-13.027,8.254-.254,13.9-7.462,12.123-7.128-2.337,1.018-7.489.077-4.454-.392,7.285-.584,11.774-6.06,10.311-6.431a7.007,7.007,0,0,1-5.464-.234C170.667,14.814,169.025,0,169.025,0Z"
                        transform="translate(-117.093 0)" />
                </svg>
            </a>
            <a href="{{ route('project.index') }}">
                <svg width="50px" version="1.1"
                    class=" m-3 @if (isset($projects)) active @else unactive @endif"
                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512"
                    enable-background="new 0 0 512 512" xml:space="preserve">
                    <path
                        d="M0,149.3V448c0,23.5,19.1,42.7,42.7,42.7H64v-384H42.7C19.1,106.7,0,125.8,0,149.3z M469.3,106.7H448v384h21.3 c23.5,0,42.7-19.1,42.7-42.7V149.3C512,125.8,492.9,106.7,469.3,106.7z M106.7,490.7h298.7v-384H106.7V490.7z M213.3,64h85.3v21.3 h42.7V64c0-23.5-19.1-42.7-42.7-42.7h-85.3c-23.5,0-42.7,19.1-42.7,42.7v21.3h42.7V64z">
                    </path>
                </svg>

            </a>
            <a href="{{ route('type.index') }}">
                <svg viewBox="0 0 512 512" width="50px" xmlns="http://www.w3.org/2000/svg"
                    class="cursor-pointer m-3  @if (isset($types)) active @else unactive @endif">
                    ><path
                        d="M128,256A128,128,0,1,0,256,384,128,128,0,0,0,128,256Zm379-54.86L400.07,18.29a37.26,37.26,0,0,0-64.14,0L229,201.14C214.76,225.52,232.58,256,261.09,256H474.91C503.42,256,521.24,225.52,507,201.14ZM480,288H320a32,32,0,0,0-32,32V480a32,32,0,0,0,32,32H480a32,32,0,0,0,32-32V320A32,32,0,0,0,480,288Z">
                    </path>
                </svg>
            </a>
            <a href="{{ route('categorie.index') }}">
                <svg viewBox="0 -1.5 24 24" width="50px" xmlns="http://www.w3.org/2000/svg"
                    preserveAspectRatio="xMinYMin"
                    class="cursor-pointer m-3  rotate-180 @if (isset($tools)) active @else unactive @endif "
                    width="40" viewBox="0 0 50 50">
                    <path
                        d="M2.131 5.668a1.5 1.5 0 0 1 .294-1.708l1.414-1.414a1.5 1.5 0 0 1 1.707-.293L7.021.778a2 2 0 0 1 2.828 0l2.829 2.829a2 2 0 0 1 0 2.828l-1.415 1.414-.05-.05-3.535 3.536.05.05-1.414 1.414a2 2 0 0 1-2.829 0L.657 9.971a2 2 0 0 1 0-2.829L2.13 5.668zm6.96 7.08l3.536-3.535 3.586 3.586-3.535 3.536-3.586-3.586zm5 5l3.536-3.535 1.768 1.768a2.5 2.5 0 0 1-3.535 3.536l-1.768-1.768zm2.83-15.556l4.242 4.243-3.839 3.839c-.613.613-1.744.478-2.525-.303l-1.414-1.415c-.781-.78-.917-1.911-.303-2.525l3.838-3.839zM18.334.778l.303-.303c.613-.614 1.744-.478 2.525.303l1.414 1.414c.781.781.917 1.912.303 2.526l-.303.303L18.335.778zM5.607 16.335l2.12-2.122a1 1 0 1 1 1.415 1.414L7.021 17.75a1 1 0 0 1 0 1.414l-1.414 1.414a1 1 0 0 1-1.415 0l-1.414-1.414a1 1 0 0 1 0-1.414l1.414-1.414a1 1 0 0 1 1.415 0z">
                    </path>
                </svg>
            </a>
        </div>
        <div class=" flex flex-wrap justify-center w-full px-4 py-5">
            {{-- message  --}}
            @if (isset($messages))
                @include('dashboard.message')
            @endif
            {{-- blogs --}}
            @if (isset($blogs))
                @include('dashboard.blog')
            @endif
            {{-- projects --}}
            @if (isset($projects))
                @include('dashboard.project')
            @endif
            @if (isset($types))
                types
            @endif
            @if (isset($tools))
                @include('dashboard.tools')
            @endif
        </div>
    </div>
</x-app-layout>
