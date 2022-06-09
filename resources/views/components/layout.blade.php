<!doctype html>

<title>Super Tourism</title>
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
<script defer src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
<body style="font-family: Open Sans, sans-serif">
    <section class=" py-8">
        <nav class="md:flex md:justify-between md:items-center mx-14">
            <div class="">
                <a href="/">
                    <img src="https://scontent.fkhi10-1.fna.fbcdn.net/v/t1.6435-9/82495973_116109263241242_6133995223254040576_n.png?_nc_cat=104&ccb=1-7&_nc_sid=09cbfe&_nc_ohc=uGflYWMAqmkAX9WgIBx&_nc_ht=scontent.fkhi10-1.fna&oh=00_AT_WCTOholls7oHlLls06HqZerlFp8BwaWM2PnfKyVfi-A&oe=62C4C688"
                        alt="SuperTourism Logo" width="100" height="16">
                </a>
            </div>
             <div class="lg:inline-flex items-center  rounded-xl px-1  py-2" style="border: 1px solid gray">
                    <form method="GET" action="/" class="flex">
                        <div>
                            <svg viewBox="0 0 24 24" width="2em" height="1em" class="bDFSd d Vb ymbyq"><path d="M22 20.514l-5.517-5.519a8.023 8.023 0 001.674-4.904c0-4.455-3.624-8.079-8.079-8.079C5.624 2.012 2 5.636 2 10.091s3.624 8.079 8.079 8.079a8.03 8.03 0 004.933-1.695l5.512 5.514L22 20.514zm-11.921-4.431c-3.305 0-5.993-2.688-5.993-5.992s2.688-5.992 5.993-5.992a6 6 0 015.992 5.992 6 6 0 01-5.992 5.992z"></path></svg>
                        </div>
                        <input type="text" name="search"
                            class="bg-transparent placeholder-black font-semibold text-sm px-10"
                            value="{{ request('search') }}">
                    </form>
                </div>

            <div class="mt-8 md:mt-0 flex items-center">
                <a class="ml-3 rounded-full text-xs font-semibold  py-3 px-1" href="">
                    <div class="flex">
                        <svg viewBox="0 0 24 24" width="24px" height="24px" class="bDFSd d Vb ymbyq"><path d="M3.366 21.984a1.36 1.36 0 01-1.067-.513 1.352 1.352 0 01-.266-1.148l1.445-6.637 10.249-10.22c1.625-1.62 4.352-1.939 6.153-.674a4.8 4.8 0 012.098 3.518 4.756 4.756 0 01-1.384 3.833l-10.326 10.32-6.902 1.521zm2.038-7.245l-1.069 4.906 4.875-1.103 7.909-7.902-3.796-3.797-7.919 7.896zm9.41-9.382l3.794 3.795.499-.499a2.662 2.662 0 00.775-2.144c-.076-.81-.502-1.514-1.196-1.982-1.029-.724-2.549-.49-3.472.431l-.4.399z"></path></svg>
                        <p class="mt-2">Review</p>
                    </div>
                </a>
                <a class="ml-3 rounded-full text-xs font-semibold  py-3 px-1" href="">
                    <div class="flex">
                        <svg viewBox="0 0 24 24" width="24px" height="24px" class="bDFSd d Vb ymbyq"><path d="M12.001 20.729s-6.741-5.85-8.485-8.003c-2.055-2.541-2.018-5.837.089-7.836a5.928 5.928 0 014.104-1.618c1.548 0 3.005.575 4.104 1.618l.174.165.162-.155a5.93 5.93 0 014.104-1.618c1.548 0 3.005.574 4.104 1.618 2.158 2.049 2.192 5.273.084 7.841-1.755 2.139-8.44 7.988-8.44 7.988zM7.709 5.271a3.935 3.935 0 00-2.727 1.068c-1.578 1.498-1.06 3.708.088 5.128 1.306 1.613 5.333 5.204 6.925 6.605 1.583-1.404 5.58-4.993 6.899-6.601 1.195-1.455 1.685-3.603.085-5.122-.726-.689-1.694-1.069-2.728-1.069s-2.001.38-2.728 1.069l-1.539 1.462-1.551-1.473a3.925 3.925 0 00-2.724-1.067z"></path></svg>
                        <p class="mt-2">Trips</p>
                    </div>
                </a>
                <a class="ml-3 rounded-full text-xs font-semibold  py-3 px-3" href="">
                    <div class="flex">
                        <svg viewBox="0 0 24 24" width="24px" height="24px" class="bDFSd d Vb ymbyq"><path d="M12 2c.539 0 .976.437.976.976v1.032c1.779.21 3.268 1 4.356 2.222 1.271 1.426 1.937 3.372 1.97 5.512.013.755.016 3.706.016 5.381h1.463v1.951H15.77a4.4 4.4 0 01-.336.924 3.545 3.545 0 01-1.2 1.382c-.589.391-1.332.62-2.234.62s-1.645-.229-2.233-.621a3.538 3.538 0 01-1.2-1.382 4.4 4.4 0 01-.336-.924H3.22v-1.951h1.463c0-1.669.002-4.602.015-5.372-.007-2.149.663-4.098 1.944-5.523 1.098-1.222 2.601-2.009 4.383-2.219V2.976A.975.975 0 0112 2zM6.634 17.122h10.732c0-1.675-.003-4.611-.016-5.351-.026-1.763-.573-3.232-1.475-4.245-.891-1-2.187-1.625-3.876-1.625-1.692 0-3.007.627-3.906 1.627-.909 1.012-1.452 2.473-1.444 4.223 0 .001-.015 3.696-.015 5.371zm3.653 1.951l.024.052c.125.249.297.471.538.63.234.156.59.294 1.151.294.562 0 .917-.138 1.151-.294a1.601 1.601 0 00.561-.682h-3.425z"></path></svg>
                        <p class="mt-2">Alerts</p>
                    </div>
                </a>


                @auth
                    <x-dropdown>
                        <x-slot name="trigger">
                            <button class="text-xs font-bold uppercase">Welcome, {{ auth()->user()->name }}</button>
                        </x-slot>

                        @admin
                            <x-dropdown-item href="/admin/posts" :active="request()->is('admin/posts')">Dashboard</x-dropdown-item>
                            <x-dropdown-item href="/admin/posts/create" :active="request()->is('admin/posts/create')">New Post</x-dropdown-item>
                        @endadmin

                        <x-dropdown-item href="#" x-data="{}"
                            @click.prevent="document.querySelector('#logout-form').submit()">Log Out</x-dropdown-item>

                        <form id="logout-form" method="POST" action="/logout" class="hidden">
                            @csrf
                        </form>
                    </x-dropdown>
                @else
                    <a href="/login" class="ml-6 text-xs font-bold uppercase">Log In</a>
                @endauth
                {{-- <a href="#" class="ml-3 rounded-full text-xs font-semibold  uppercase py-3 px-5">
                    <div class="flex"><svg viewBox="0 0 24 24" width="24px" height="24px"
                            class="bDFSd d Vb ymbyq">
                            <path
                                d="M17.166 15.54h-9.1c-.293 0-1.011-.914-1.011-1.517V13.01h12.923L22 4.922H7.055c0-1.033-.9-2.527-2.527-2.527H2v2.022h2.528c.356 0 .5.466.505.505l.001 9.102c0 .929.579 2.192 1.479 2.932a3.011 3.011 0 00-.468 1.618 3.035 3.035 0 003.033 3.032 3.035 3.035 0 002.86-4.045h2.369a3.035 3.035 0 002.859 4.045 3.035 3.035 0 003.033-3.032 3.036 3.036 0 00-3.033-3.034zM7.055 6.943h12.354l-1.011 4.044H7.055V6.943zm2.023 12.641a1.012 1.012 0 010-2.024 1.013 1.013 0 010 2.024zm8.088 0a1.012 1.012 0 110-2.024 1.012 1.012 0 010 2.024z">
                            </path>
                        </svg>
                        <p class="mt-2">Cart</p>
                    </div>

                </a> --}}

                {{-- <a href="#" class="bg-blue-500 ml-3 rounded-full text-xs font-semibold text-white uppercase py-3 px-5">
                    Subscribe for Updates
                </a> --}}
            </div>
        </nav>
         <!-- Page Heading -->
             {{-- <header class="bg-white shadow " > --}}
                 <header >
                {{-- <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8"> --}}
                    {{ $header }}
                {{-- </div> --}}
            </header>

        {{ $slot }}

        <footer class="border border-black border-opacity-5 rounded-xl text-center py-16 px-10 mt-16">
            <img class="mx-auto" src="https://scontent.fkhi10-1.fna.fbcdn.net/v/t1.6435-9/82495973_116109263241242_6133995223254040576_n.png?_nc_cat=104&ccb=1-7&_nc_sid=09cbfe&_nc_ohc=uGflYWMAqmkAX9WgIBx&_nc_ht=scontent.fkhi10-1.fna&oh=00_AT_WCTOholls7oHlLls06HqZerlFp8BwaWM2PnfKyVfi-A&oe=62C4C688"
            alt="SuperTourism Logo" width="100" height="16" style="width: 145px;">

            {{-- <h5 class="text-3xl">Stay in touch with the latest posts</h5> --}}
            {{-- <p class="text-sm mt-3">Promise to keep the inbox clean. No bugs.</p> --}}

            <div class="mt-10">
                <div class="relative inline-block mx-auto lg:bg-gray-200 rounded-full">

                    <form method="POST" action="#" class="lg:flex text-sm">
                        {{-- <div class="lg:py-3 lg:px-5 flex items-center">
                            <label for="email" class="hidden lg:inline-block">
                                <img src="/images/mailbox-icon.svg" alt="mailbox letter">
                            </label>

                            <input id="email" type="text" placeholder="Your email address"
                                class="lg:bg-transparent py-2 lg:py-0 pl-4 focus-within:outline-none">
                        </div> --}}

                        {{-- <button type="submit"
                            class="transition-colors duration-300 bg-blue-500 hover:bg-blue-600 mt-4 lg:mt-0 lg:ml-3 rounded-full text-xs font-semibold text-white uppercase py-3 px-8">
                            Subscribe
                        </button> --}}
                    </form>
                </div>
                <p>2022</p>

            </div>
        </footer>
    </section>

    @if (session()->has('success'))
        <div x-data="{ show: true }" x-unit="setTimeout(() => show = false, 3000)" x-show="show"
            class="fixed bg-blue-500 text-white py-2 px-4 rounded-xl bottom-3 right-3 text-sm">
            <p>{{ session('success') }}</p>
        </div>
    @endif
</body>
