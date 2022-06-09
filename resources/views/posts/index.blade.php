<x-layout>
    @include('posts._header')
    <x-slot name="header">
        <div class="mx-14 mt-4 header font-semibold text-xl text-gray-800 leading-tight">
            <ul class="row ">
                <li class="flex py-6 px-3 sm:px-6 lg:px-8">

                    <a href="/hotels">Hotels</a>
                    <span>
                        <svg viewBox="0 0 24 24" width="24px" height="24px" class="bDFSd d Vb ymbyq">
                            <path
                                d="M20.587 12.139V4.144H3.424v7.986A3.805 3.805 0 002 15.097v4.755h1.906v-1.905h16.188v1.91H22v-4.76a3.804 3.804 0 00-1.413-2.958zm-1.906-6.09V8.83a5.048 5.048 0 00-2.865-.876c-1.565 0-2.952.69-3.816 1.749-.864-1.059-2.252-1.749-3.818-1.749-1.07 0-2.056.324-2.851.866V6.049h13.35zm-.258 5.248c-.077-.005-.155-.012-.234-.012h-4.971c.438-.838 1.437-1.426 2.598-1.426 1.168 0 2.173.593 2.607 1.438zm-7.643-.012H5.812c-.081 0-.159.007-.238.012.434-.844 1.438-1.438 2.606-1.438 1.163 0 2.163.588 2.6 1.426zM3.906 16.04v-.943c0-1.051.855-1.905 1.906-1.905h12.376c1.051 0 1.905.854 1.905 1.905v.943H3.906z">
                            </path>
                        </svg>
                    </span>
                </li>
                <li class="flex py-6 px-3 sm:px-6 lg:px-8">
                    <a href="#">Vacation Rentals</a>
                    <span>
                        <svg viewBox="0 0 24 24" width="24px" height="24px" class="bDFSd d Vb ymbyq">
                            <path
                                d="M12.001 2L2.097 8.6V22h19.807V8.6L12.001 2zm7.922 18.021H4.077V9.66l7.924-5.28 7.922 5.28v10.361z">
                            </path>
                            <path
                                d="M9.036 10.627a2.973 2.973 0 00-2.97 2.968 2.974 2.974 0 002.97 2.971 2.964 2.964 0 002.788-1.98h2.152v1.979h1.98v-1.979h1.982v-1.979h-6.115a2.965 2.965 0 00-2.787-1.98zm0 3.959a.99.99 0 11-.002-1.978.99.99 0 01.002 1.978z">
                            </path>
                        </svg>
                    </span>
                </li>

                <li class="flex py-6 px-3 sm:px-6 lg:px-8">
                    <a href="#">Things to do</a>
                    <span>
                        <svg viewBox="0 0 24 24" width="24px" height="24px" class="bDFSd d Vb ymbyq" x="0" y="0">
                            <circle cx="12" cy="8.5" r="1"></circle>
                            <circle cx="12" cy="12" r="1"></circle>
                            <circle cx="12" cy="15.5" r="1"></circle>
                            <path
                                d="M20 6.5V8c-1.5.7-2.5 2.3-2.5 4 0 1.8 1 3.3 2.5 4v1.5H4V16c1.5-.7 2.5-2.3 2.5-4 0-1.8-1-3.3-2.5-4V6.5h16m2-2H2v5c1.4 0 2.5 1.1 2.5 2.5S3.4 14.5 2 14.5v5h20v-5c-1.4 0-2.5-1.1-2.5-2.5s1.1-2.5 2.5-2.5v-5z">
                            </path>
                        </svg>
                    </span>
                </li>
                <li class="flex py-6 px-2 sm:px-6 lg:px-8">
                    <a href="#">Restaurant</a>
                    <span>
                        <svg viewBox="0 0 24 24" width="24px" height="24px" class="bDFSd d Vb ymbyq">
                            <path
                                d="M18.753 21.459l-5.502-5.504-2.85 2.851-1.663-1.662-4.315 4.315-1.343-1.344 4.316-4.316-4.004-4.003A4.718 4.718 0 012 8.438c0-1.269.494-2.461 1.392-3.358l.834-.835 7.362 7.362.866-.866c-1.099-1.719-.777-3.972.912-5.661l2.538-2.538 1.343 1.344-2.538 2.537c-.785.787-1.254 1.903-.852 2.916l4.423-4.422 1.343 1.344-4.429 4.428c.31.13.64.188.977.164.646-.043 1.299-.364 1.838-.904a630.937 630.937 0 002.642-2.653L22 8.631s-1.241 1.255-2.647 2.66c-.865.865-1.951 1.383-3.057 1.456a4.027 4.027 0 01-2.501-.66l-.864.862 7.166 7.166-1.344 1.344zM4.291 6.995A2.835 2.835 0 003.9 8.438c0 .762.296 1.478.835 2.015l5.666 5.667 1.506-1.507-7.616-7.618z">
                            </path>
                        </svg>
                    </span>
                </li>
                <li class="flex py-6 px-4 sm:px-6 lg:px-8">
                    <a href="#">Travel Forms</a>
                    <span>
                        <svg viewBox="0 0 24 24" width="24px" height="24px" class="bDFSd d Vb ymbyq">
                            <path
                                d="M2 21.257h2.118l3.271-3h10.604l.02-11.513H2v14.513zM4 8.744h12.009l-.013 7.512H6.61L4 18.65V8.744z">
                            </path>
                            <path d="M7.004 2.743v2h12.995v8.512H22V2.743z"></path>
                        </svg>
                    </span>
                </li>
                {{-- <li class="py-6 px-4 sm:px-6 lg:px-8"><a href="#"></a>Vacation Packages</li> --}}
                <li class="flex py-6 px-3 sm:px-6 lg:px-8">
                    <a href="#">More</a>
                    <span>
                        <svg viewBox="0 0 24 24" width="24px" height="24px" class="bDFSd d Vb ymbyq" x="0" y="0">
                            <circle cx="4.5" cy="11.9" r="2.5"></circle>
                            <circle cx="19.5" cy="11.9" r="2.5"></circle>
                            <circle cx="12" cy="11.9" r="2.5"></circle>
                        </svg>
                    </span>
                </li>

            </ul>
        </div>
    </x-slot>
    @include('Reviews.card')

    {{-- <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">

        @if ($posts->count())

            <x-posts-grid :posts="$posts" />

            {{ $posts->links() }}
        @else
            <p class="text-center">No posts yet. Please check back later.</p>
        @endif
    </main> --}}
</x-layout>

<style>
    .header li {
        margin-left: 20px;
        border: 1px solid #000;
        border-radius: 20px;
        font-size: 1.1rem;
        margin-bottom: 7px;
        cursor: pointer;
    }

    a {
        color: #000;
        margin-right: 30px
    }
</style>
