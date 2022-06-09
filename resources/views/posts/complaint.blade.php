<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
    <script defer src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <title>Complaint</title>
</head>

<body>
    <section class="max-w-4xl mx-auto py-8">
        <h1 class="text-lg font-bold mb-6 pb-2 border-b">
            Complaint
        </h1>
        <div class="flex">


            <x-panel class="flex-1">
                <form method="POST" action="complaint" >
                    @csrf
                    <div class="mb-6">
                        <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="subject">
                            Subject
                        </label>

                        <input class="border border-gray-200 p-2 rounded w-full" type="text" name="subject"
                            value="{{ old('subject') }}" id="subject" required>

                        @error('subject')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-6">
                        <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="thumbnail">
                            File Picture
                        </label>

                        <input class="border border-gray-200 p-2 rounded w-full" type="file" name="thumbnail"
                            id="thumbnail" required>

                        @error('thumbnail')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-6">
                        <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="body">
                            Description
                        </label>

                        <textarea class="border border-gray-200 p-2 rounded w-full" type="text" name="body" id="body"
                            required>{{ old('body') }}</textarea>

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
                                <Option value="{{ $category->id }}"
                                    {{ old('category_id') === $category->id ? 'selected' : '' }}>
                                    {{ ucwords($category->name) }}</Option>
                            @endforeach
                        </select>

                        @error('category')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-6">
                        <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="phone_number">
                            Phone Number
                        </label>

                        <input class="border border-gray-200 p-2 rounded w-full" type="number" name="phone_number" id="phone_number"
                            value="{{ old('phone_number') }}" required>

                        @error('phone_number')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-6">
                        <button type="submit"
                            class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500">Submit</button>
                    </div>
                </form>
            </x-panel>
        </div>
    </section>
</body>

</html>
