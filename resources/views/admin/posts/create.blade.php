<x-layout>
    <section class="max-w-4xl mx-auto py-8">
        <h1 class="text-lg font-bold mb-6 pb-2 border-b">
            Publish new Post
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
        <form method="POST" action="/admin/posts" enctype="multipart/form-data">
            @csrf
            
            <div class="mb-6">
                <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="title">
                        Title
                </label>

                <input class="border border-gray-200 p-2 rounded w-full" type="text" name="title" id="title" value="{{ old('title')}}" required>

                @error('title')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="slug">
                        Slug
                </label>

                <input class="border border-gray-200 p-2 rounded w-full" type="text" name="slug"  value="{{ old('slug')}}" id="slug" required>

                @error('slug')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="thumbnail">
                        Thumbnail
                </label>

                <input class="border border-gray-200 p-2 rounded w-full" type="file" name="thumbnail" id="thumbnail" required>

                @error('thumbnail')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="excerpt">
                        Excerpt
                </label>

                <textarea class="border border-gray-200 p-2 rounded w-full" type="text" name="excerpt" id="excerpt"  value="{{ old('excerpt')}}" required>{{ old('excerpt')}}</textarea>

                @error('excerpt')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="body">
                        Body
                </label>

                <textarea class="border border-gray-200 p-2 rounded w-full" type="text" name="body" id="body" required>{{ old('body')}}</textarea>

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
                    <Option value="{{ $category->id }}" {{ old('category_id') === $category->id ? 'selected': ''}}>{{ ucwords($category->name) }}</Option>  
                    @endforeach
                </select>

                @error('category')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <button type="submit" class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500">Submit</button>
            </div>
        </form>
        </x-panel>
</div>
    </section>

</x-layout>