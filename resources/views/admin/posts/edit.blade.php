<x-layout>
    <section class="max-w-4xl mx-auto py-8">
        <h1 class="text-lg font-bold mb-6 pb-2 border-b">
            Edit Post: {{$post->title}}
        </h1>
<div class="flex">
        <aside class="w-48">
            <h4 class="font-semibold mb-4">Links</h4>

            <ul>
                <li>
                    <a href="/admin/posts" class="{{ request()->is('admin/posts') ? 'text-blue-500' : '' }}">All Posts</a>
                </li>

                <li>
                    <a href="/admin/posts/create" class="{{ request()->is('admin/posts/create') ? 'text-blue-500' : ''}}">New Post</a>
                </li>
            </ul>
        </aside>

        <x-panel class="flex-1">
        <form method="POST" action="/admin/posts/{{ $post->id }}" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            
            <div class="mb-6">
                <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="title">
                        Title
                </label>

                <input class="border border-gray-200 p-2 rounded w-full" type="text" name="title" id="title" value="{{ old('title', $post->title)}}" required>

                @error('title')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="slug">
                        Slug
                </label>

                <input class="border border-gray-200 p-2 rounded w-full" type="text" name="slug"  value="{{ old('slug', $post->slug)}}" id="slug" required>

                @error('slug')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="flex mt-6">
                <div class="flex-1">
            <div class="mb-6">
                <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="thumbnail">
                        Thumbnail
                </label>

                <input class="border border-gray-200 p-2 rounded w-full" type="file" name="thumbnail" id="thumbnail" value="{{ old('thumbnail', $post->thumbnail)}}" required>

                @error('thumbnail')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
        </div>
            <img src="/images/illustration-1.png" alt="Blog Post illustration" class="rounded-xl ml-6" width="100">
        </div>
            <div class="mb-6">
                <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="excerpt">
                        Excerpt
                </label>

                <textarea class="border border-gray-200 p-2 rounded w-full" type="text" name="excerpt" id="excerpt"  value="{{ old('excerpt', $post->excerpt)}}"  required>{{ $post->excerpt }}</textarea>

                @error('excerpt')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="body">
                        Body
                </label>

                <textarea class="border border-gray-200 p-2 rounded w-full" type="text" name="body" id="body" value="{{ old('body', $post->body)}}" required>{{ $post->body }}</textarea>

                @error('body')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="category_id">
                        Category
                </label>

                <select name="category_id" id="category_id">
                    @foreach (\App\Models\Category::all() as $category)
                    <Option value="{{ $category->id }}" {{ old('category_id', $post->category_id) === $category->id ? 'selected': ''}}>{{ ucwords($category->name) }}</Option>  
                    @endforeach
                </select>

                @error('category')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <button type="submit" class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500">Update</button>
            </div>
        </form>
        </x-panel>
</div>
    </section>

</x-layout>