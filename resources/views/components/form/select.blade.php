<div>
    <label for="category_id" class="block text-sm font-medium mb-2 dark:text-white">Label</label>
    <select id="category_id"
        class="py-2 px-3 pr-9 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400">
        <option selected>Selecte</option>
        @foreach ($categories as $category)
            <option value="{{ $category->id }}">{{ $category->title }}</option>
        @endforeach
    </select>
</div>
